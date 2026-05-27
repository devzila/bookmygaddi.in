<?php

declare(strict_types=1);

header('Content-Type: application/json; charset=utf-8');

require_once dirname(__DIR__, 2) . '/includes/config.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'Method not allowed.']);
    exit;
}

$input = json_decode((string) file_get_contents('php://input'), true);
if (!is_array($input)) {
    $input = $_POST;
}

$name = trim((string) ($input['name'] ?? ''));
$email = trim((string) ($input['email'] ?? ''));
$phone = trim((string) ($input['phone'] ?? ''));
$message = trim((string) ($input['message'] ?? ''));

$errors = [];
if ($name === '') {
    $errors['name'] = 'Name is required.';
}
if ($email === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors['email'] = 'A valid email is required.';
}
if ($phone === '') {
    $errors['phone'] = 'Phone number is required.';
}
if ($message === '') {
    $errors['message'] = 'Message is required.';
}

if ($errors !== []) {
    http_response_code(422);
    echo json_encode([
        'success' => false,
        'message' => 'Please fix the errors below.',
        'errors' => $errors,
    ]);
    exit;
}

try {
    $stmt = db()->prepare(
        'INSERT INTO contact_inquiries (name, email, phone, message, service_type)
         VALUES (:name, :email, :phone, :message, :service_type)'
    );
    $stmt->execute([
        ':name' => $name,
        ':email' => $email,
        ':phone' => $phone,
        ':message' => $message,
        ':service_type' => 'taxi',
    ]);
} catch (PDOException $e) {
    error_log('Contact API error: ' . $e->getMessage());
    http_response_code(500);
    echo json_encode([
        'success' => false,
        'message' => 'Unable to save your enquiry. Please try again or call us.',
    ]);
    exit;
}

echo json_encode([
    'success' => true,
    'message' => 'Thank you! Your enquiry has been submitted successfully. We will contact you shortly.',
]);

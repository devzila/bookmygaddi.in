<?php

declare(strict_types=1);

require_once __DIR__ . '/mailer.php';

/**
 * Validate, persist, and notify for a contact form submission.
 *
 * @return array{success:bool,message:string,errors?:array<string,string>,email_sent?:bool}
 */
function handleContactInquiry(array $input, string $defaultServiceType = 'general'): array
{
    $name = trim((string) ($input['name'] ?? ''));
    $email = trim((string) ($input['email'] ?? ''));
    $phone = trim((string) ($input['phone'] ?? ''));
    $message = trim((string) ($input['message'] ?? ''));
    $serviceType = trim((string) ($input['service_type'] ?? $defaultServiceType));
    $packageSlug = trim((string) ($input['package_slug'] ?? ''));
    $pageUrl = trim((string) ($input['page_url'] ?? ''));

    if ($serviceType === '') {
        $serviceType = $defaultServiceType;
    }

    $serviceType = preg_replace('/[^a-z0-9_-]/i', '', $serviceType) ?: $defaultServiceType;
    if (strlen($packageSlug) > 120) {
        $packageSlug = substr($packageSlug, 0, 120);
    }
    if (strlen($pageUrl) > 255) {
        $pageUrl = substr($pageUrl, 0, 255);
    }

    $errors = [];
    if ($name === '') {
        $errors['name'] = 'Name is required.';
    } elseif (strlen($name) > 120) {
        $errors['name'] = 'Name must be 120 characters or fewer.';
    }
    if ($email === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = 'A valid email is required.';
    } elseif (strlen($email) > 180) {
        $errors['email'] = 'Email must be 180 characters or fewer.';
    }
    if ($phone === '') {
        $errors['phone'] = 'Phone number is required.';
    } elseif (strlen($phone) > 20) {
        $errors['phone'] = 'Phone number must be 20 characters or fewer.';
    }
    if ($message === '') {
        $errors['message'] = 'Message is required.';
    }

    if ($errors !== []) {
        return [
            'success' => false,
            'message' => 'Please fix the errors below.',
            'errors' => $errors,
        ];
    }

    $formData = [
        'name' => $name,
        'email' => $email,
        'phone' => $phone,
        'message' => $message,
        'service_type' => $serviceType,
        'package_slug' => $packageSlug !== '' ? $packageSlug : null,
        'page_url' => $pageUrl !== '' ? $pageUrl : null,
        'submitted_at' => gmdate('c'),
    ];

    try {
        $formDataJson = json_encode($formData, JSON_UNESCAPED_UNICODE | JSON_THROW_ON_ERROR);
    } catch (JsonException $e) {
        error_log('Contact inquiry JSON encode error: ' . $e->getMessage());
        return [
            'success' => false,
            'message' => 'Unable to save your enquiry. Please try again or call us.',
        ];
    }

    try {
        $stmt = db()->prepare(
            'INSERT INTO contact_inquiries (name, email, phone, message, service_type, package_slug, page_url, form_data)
             VALUES (:name, :email, :phone, :message, :service_type, :package_slug, :page_url, :form_data)'
        );
        $stmt->execute([
            ':name' => $name,
            ':email' => $email,
            ':phone' => $phone,
            ':message' => $message,
            ':service_type' => $serviceType,
            ':package_slug' => $packageSlug !== '' ? $packageSlug : null,
            ':page_url' => $pageUrl !== '' ? $pageUrl : null,
            ':form_data' => $formDataJson,
        ]);
    } catch (PDOException $e) {
        error_log('Contact inquiry save error: ' . $e->getMessage());
        return [
            'success' => false,
            'message' => 'Unable to save your enquiry. Please try again or call us.',
        ];
    }

    $emailSent = sendContactNotificationEmail([
        'name' => $name,
        'email' => $email,
        'phone' => $phone,
        'message' => $message,
        'service_type' => $serviceType,
        'package_slug' => $packageSlug,
        'page_url' => $pageUrl,
    ]);

    if (!$emailSent) {
        error_log('Contact inquiry saved but notification email failed for: ' . $email);
    }

    return [
        'success' => true,
        'message' => 'Thank you! Your enquiry has been submitted successfully. We will contact you shortly.',
        'email_sent' => $emailSent,
    ];
}

/**
 * @param array{name:string,email:string,phone:string,message:string,service_type:string,package_slug:string,page_url:string} $data
 */
function sendContactNotificationEmail(array $data): bool
{
    $notifyTo = $_ENV['CONTACT_NOTIFY_EMAIL'] ?? '';
    if ($notifyTo === '') {
        error_log('CONTACT_NOTIFY_EMAIL is not set in .env');
        return false;
    }

    $serviceLabel = ucfirst($data['service_type']);
    $subject = sprintf('New %s enquiry from %s', $serviceLabel, $data['name']);

    $rows = [
        'Service' => $serviceLabel,
        'Name' => htmlspecialchars($data['name'], ENT_QUOTES, 'UTF-8'),
        'Email' => htmlspecialchars($data['email'], ENT_QUOTES, 'UTF-8'),
        'Phone' => htmlspecialchars($data['phone'], ENT_QUOTES, 'UTF-8'),
        'Message' => nl2br(htmlspecialchars($data['message'], ENT_QUOTES, 'UTF-8')),
    ];

    if ($data['package_slug'] !== '') {
        $rows['Package'] = htmlspecialchars($data['package_slug'], ENT_QUOTES, 'UTF-8');
    }
    if ($data['page_url'] !== '') {
        $rows['Page'] = htmlspecialchars($data['page_url'], ENT_QUOTES, 'UTF-8');
    }

    $bodyRows = '';
    foreach ($rows as $label => $value) {
        $bodyRows .= sprintf(
            '<tr><td style="padding:8px 12px;border:1px solid #e5e7eb;font-weight:600;background:#f9fafb;width:120px;">%s</td><td style="padding:8px 12px;border:1px solid #e5e7eb;">%s</td></tr>',
            $label,
            $value
        );
    }

    $html = <<<HTML
<!DOCTYPE html>
<html>
<body style="font-family:Arial,sans-serif;color:#1a1a2e;line-height:1.5;">
  <h2 style="color:#0d1b2a;">New contact enquiry</h2>
  <table style="border-collapse:collapse;width:100%;max-width:600px;">{$bodyRows}</table>
</body>
</html>
HTML;

    return sendSmtpMail($notifyTo, $subject, $html, $data['email']);
}

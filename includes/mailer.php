<?php

declare(strict_types=1);

use PHPMailer\PHPMailer\Exception as MailerException;
use PHPMailer\PHPMailer\PHPMailer;

/**
 * Send an HTML email via SMTP (Brevo / generic).
 */
function sendSmtpMail(string $to, string $subject, string $htmlBody, ?string $replyTo = null): bool
{
    $host = $_ENV['SMTP_ADDRESS'] ?? $_ENV['SMTP_HOST'] ?? '';
    $port = (int) ($_ENV['SMTP_PORT'] ?? 587);
    $username = $_ENV['SMTP_USER_NAME'] ?? '';
    $password = $_ENV['SMTP_PASSWORD'] ?? '';
    $fromEmail = $_ENV['MAIL_FROM_ADDRESS'] ?? $username;
    $fromName = $_ENV['MAIL_FROM_NAME'] ?? 'BookMyGaddi';

    if ($host === '' || $username === '' || $password === '' || $fromEmail === '') {
        error_log('Mailer: SMTP is not fully configured in .env');
        return false;
    }

    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host = $host;
        $mail->SMTPAuth = true;
        $mail->Username = $username;
        $mail->Password = $password;
        $mail->Port = $port;

        $auth = strtolower((string) ($_ENV['SMTP_AUTH'] ?? 'tls'));
        if ($auth === 'ssl' || $port === 465) {
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        } else {
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        }

        $mail->CharSet = PHPMailer::CHARSET_UTF8;
        $mail->setFrom($fromEmail, $fromName);
        $mail->addAddress($to);

        if ($replyTo !== null && $replyTo !== '') {
            $mail->addReplyTo($replyTo);
        }

        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body = $htmlBody;
        $mail->AltBody = strip_tags(str_replace(['<br>', '<br/>', '<br />'], "\n", $htmlBody));

        $mail->send();
        return true;
    } catch (MailerException $e) {
        error_log('Mailer error: ' . $e->getMessage());
        return false;
    }
}

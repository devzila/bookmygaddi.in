<?php
/**
 * Reusable Contact Us form component.
 *
 * Optional variables before include:
 *   $contactFormPrefix  — unique ID prefix (default: contact)
 *   $contactTitle       — heading (default: Contact Us)
 *   $contactSubtitle    — intro text
 *   $contactApiUrl       — POST endpoint (default: /api/contact.php)
 *   $contactServiceType  — taxi | bus | tour | truck | general
 *   $contactPackageSlug  — optional package slug from detail page
 *   $contactSubmitLabel  — button label (default: Send Enquiry)
 */
$contactFormPrefix = $contactFormPrefix ?? 'contact';
$contactTitle = $contactTitle ?? 'Contact Us';
$contactSubtitle = $contactSubtitle ?? 'Share your details and we will get back to you shortly.';
$contactApiUrl = $contactApiUrl ?? '/api/contact.php';
$contactServiceType = $contactServiceType ?? 'general';
$contactPackageSlug = $contactPackageSlug ?? '';
$contactSubmitLabel = $contactSubmitLabel ?? 'Send Enquiry';

$formId = $contactFormPrefix . 'ContactForm';
$formWrapId = $contactFormPrefix . 'FormWrap';
$formAlertId = $contactFormPrefix . 'FormAlert';
$successId = $contactFormPrefix . 'ContactSuccess';
$successMessageId = $contactFormPrefix . 'SuccessMessage';
$idName = $contactFormPrefix . '-name';
$idEmail = $contactFormPrefix . '-email';
$idPhone = $contactFormPrefix . '-phone';
$idMessage = $contactFormPrefix . '-message';
?>
<div class="taxi-contact-card contact-us"
  data-api-url="<?= htmlspecialchars($contactApiUrl, ENT_QUOTES, 'UTF-8') ?>"
  data-service-type="<?= htmlspecialchars($contactServiceType, ENT_QUOTES, 'UTF-8') ?>">
  <div id="<?= htmlspecialchars($formWrapId, ENT_QUOTES, 'UTF-8') ?>" class="contact-us-form-wrap">
    <h2><?= htmlspecialchars($contactTitle, ENT_QUOTES, 'UTF-8') ?></h2>
    <p><?= htmlspecialchars($contactSubtitle, ENT_QUOTES, 'UTF-8') ?></p>

    <div id="<?= htmlspecialchars($formAlertId, ENT_QUOTES, 'UTF-8') ?>" class="taxi-form-alert" role="alert"></div>

    <form id="<?= htmlspecialchars($formId, ENT_QUOTES, 'UTF-8') ?>" class="taxi-contact-form contact-us-form" novalidate>
      <?php if ($contactPackageSlug !== ''): ?>
      <input type="hidden" name="package_slug" value="<?= htmlspecialchars($contactPackageSlug, ENT_QUOTES, 'UTF-8') ?>">
      <?php endif; ?>
      <div class="taxi-form-field">
        <label for="<?= htmlspecialchars($idName, ENT_QUOTES, 'UTF-8') ?>">Full Name</label>
        <input type="text" id="<?= htmlspecialchars($idName, ENT_QUOTES, 'UTF-8') ?>" name="name" required autocomplete="name" placeholder="Your name">
        <span class="taxi-field-error" data-error-for="name"></span>
      </div>
      <div class="taxi-form-field">
        <label for="<?= htmlspecialchars($idEmail, ENT_QUOTES, 'UTF-8') ?>">Email</label>
        <input type="email" id="<?= htmlspecialchars($idEmail, ENT_QUOTES, 'UTF-8') ?>" name="email" required autocomplete="email" placeholder="you@example.com">
        <span class="taxi-field-error" data-error-for="email"></span>
      </div>
      <div class="taxi-form-field">
        <label for="<?= htmlspecialchars($idPhone, ENT_QUOTES, 'UTF-8') ?>">Phone</label>
        <input type="tel" id="<?= htmlspecialchars($idPhone, ENT_QUOTES, 'UTF-8') ?>" name="phone" required autocomplete="tel" placeholder="10-digit mobile number">
        <span class="taxi-field-error" data-error-for="phone"></span>
      </div>
      <div class="taxi-form-field">
        <label for="<?= htmlspecialchars($idMessage, ENT_QUOTES, 'UTF-8') ?>">Message</label>
        <textarea id="<?= htmlspecialchars($idMessage, ENT_QUOTES, 'UTF-8') ?>" name="message" required placeholder="Pickup location, date, vehicle type, etc."></textarea>
        <span class="taxi-field-error" data-error-for="message"></span>
      </div>
      <button type="submit" class="btn-primary taxi-form-submit"><?= htmlspecialchars($contactSubmitLabel, ENT_QUOTES, 'UTF-8') ?></button>
    </form>
  </div>

  <div id="<?= htmlspecialchars($successId, ENT_QUOTES, 'UTF-8') ?>" class="taxi-contact-success contact-us-success" role="status" aria-live="polite">
    <svg viewBox="0 0 24 24" fill="none" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
      <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/>
      <polyline points="22 4 12 14.01 9 11.01"/>
    </svg>
    <h3>Enquiry Submitted</h3>
    <p class="contact-us-success-message"></p>
  </div>
</div>

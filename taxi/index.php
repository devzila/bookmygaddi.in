<?php
$pageTitle = 'BookMyGaddi — Taxi Enquiry';
$activeNav = 'taxi';
$pageScript = '/assets/js/taxi-contact.js';
$pageStylesheet = '/assets/css/taxi-contact.css';

require_once __DIR__ . '/../includes/config.php';
require_once __DIR__ . '/../includes/head.php';
require_once __DIR__ . '/../includes/header.php';
?>

<main class="taxi-contact-page">
  <div class="taxi-contact-grid">
    <div class="taxi-contact-info">
      <h1>Reliable <em>Taxi</em> Hire Across India</h1>
      <p>
        Whether you need an airport pickup, a full-day city tour, or an outstation trip,
        our verified drivers and transparent pricing make every journey comfortable.
      </p>
      <ul class="taxi-contact-highlights">
        <li>
          <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
          24/7 booking support and instant confirmation
        </li>
        <li>
          <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
          Background-verified chauffeurs on every ride
        </li>
        <li>
          <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
          Sedan, SUV, Innova &amp; tempo traveller options
        </li>
        <li>
          <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg>
          No hidden charges — fixed fares upfront
        </li>
      </ul>
    </div>

    <div class="taxi-contact-card">
      <div id="taxiFormWrap">
        <h2>Contact Us</h2>
        <p>Share your trip details and we will get back to you shortly.</p>

        <div id="taxiFormAlert" class="taxi-form-alert" role="alert"></div>

        <form id="taxiContactForm" class="taxi-contact-form" novalidate>
          <div class="taxi-form-field">
            <label for="taxi-name">Full Name</label>
            <input type="text" id="taxi-name" name="name" required autocomplete="name" placeholder="Your name">
            <span class="taxi-field-error" data-error-for="name"></span>
          </div>
          <div class="taxi-form-field">
            <label for="taxi-email">Email</label>
            <input type="email" id="taxi-email" name="email" required autocomplete="email" placeholder="you@example.com">
            <span class="taxi-field-error" data-error-for="email"></span>
          </div>
          <div class="taxi-form-field">
            <label for="taxi-phone">Phone</label>
            <input type="tel" id="taxi-phone" name="phone" required autocomplete="tel" placeholder="10-digit mobile number">
            <span class="taxi-field-error" data-error-for="phone"></span>
          </div>
          <div class="taxi-form-field">
            <label for="taxi-message">Message</label>
            <textarea id="taxi-message" name="message" required placeholder="Pickup location, date, vehicle type, etc."></textarea>
            <span class="taxi-field-error" data-error-for="message"></span>
          </div>
          <button type="submit" class="btn-primary taxi-form-submit">Send Enquiry</button>
        </form>
      </div>

      <div id="taxiContactSuccess" class="taxi-contact-success" role="status" aria-live="polite">
        <svg viewBox="0 0 24 24" fill="none" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
          <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/>
          <polyline points="22 4 12 14.01 9 11.01"/>
        </svg>
        <h3>Enquiry Submitted</h3>
        <p id="taxiSuccessMessage"></p>
      </div>
    </div>
  </div>
</main>

<?php
require_once __DIR__ . '/../includes/footer.php';
require_once __DIR__ . '/../includes/scripts.php';

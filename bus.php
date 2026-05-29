<?php
$pageTitle = 'BookMyGaddi — Explore. Wander. Discover.';
$activeNav = 'bus';
$pageScript = 'assets/js/index.js';
$pageStylesheet = '/assets/css/bus.css';

require_once __DIR__ . '/includes/config.php';

$contentItems = [];
try {
    $stmt = db()->query(
        'SELECT id, badge, image_url, tags, title, slug,duration, vehicle_type, distance_in_km, price, rating, data_categories
         FROM packages 
         WHERE active = 1 
         and type = "bus"
         ORDER BY id ASC'
    );
    $contentItems = $stmt->fetchAll();
} catch (Throwable $e) {
    error_log('Failed to load content: ' . $e->getMessage());
}

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>
<!-- ══════════════════ HERO ══════════════════ -->
<section class="hero">
  <div class="hero-bg"></div>

  <div class="hero-content">
    <div class="hero-eyebrow">Premium Bus Services Across India</div>

    <h1>Journey Together,<br>Arrive in <em>Grandeur</em></h1>

    <p>From interstate highways to school gates, corporate campuses to sacred shrines — our fleet of premium buses moves every kind of journey with comfort, punctuality, and dignity.</p>

  </div>

  <div class="scroll-hint">
    <svg viewBox="0 0 24 24" fill="none" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
      <polyline points="6 9 12 15 18 9"/>
    </svg>
    Scroll
  </div>
</section>


<!-- ══════════════════ SEARCH BAR ══════════════════ -->
<div class="search-section">
  <div class="search-bar">
    <div class="search-field">
      <label>Destination</label>
      <select>
        <option>Select Destination</option>
        <option>Delhi NCR</option>
        <option>Chandigarh</option>
        <option>Amritsar</option>
        <option>Shimla</option>
        <option>Haridwar</option>
        <option>Varanasi</option>
        <option>Mathura &amp; Vrindavan</option>
        <option>Tirupati</option>
        <option>Shirdi</option>
        <option>Mumbai</option>
      </select>
    </div>
    <div class="search-field">
      <label>Duration / Trip Type</label>
      <select>
        <option>Any Trip Type</option>
        <option>One Way</option>
        <option>Round Trip</option>
        <option>Daily School Run</option>
        <option>Corporate Monthly</option>
        <option>2–3 Days Pilgrimage</option>
        <option>Weekly Charter</option>
        <option>Multi-Day Tour</option>
      </select>
    </div>
    <div class="search-field">
      <label>Vehicle Type</label>
      <select>
        <option>Any Bus Type</option>
        <option>🚐 Mini Bus (15–20 Seats)</option>
        <option>🚌 Standard Bus (32 Seats)</option>
        <option>🚌 Large Bus (45 Seats)</option>
        <option>💎 Luxury Volvo Coach</option>
        <option>🏫 School Bus</option>
        <option>🏢 AC Shuttle (14–20 Seats)</option>
      </select>
    </div>
    <button class="search-btn">
      <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
        <circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/>
      </svg>
      Search
    </button>
  </div>
</div>


<!-- ── PACKAGES SECTION ── -->
<section id="packages">
  <div class="section-header">
    <p class="section-eyebrow">Curated Bus Packages</p>
    <h2 class="section-title">Find Your <em>Perfect</em> Bus</h2>
    <p class="section-sub">Verified operators, GPS-tracked fleets, and transparent pricing on every booking.</p>
  </div>

  <div class="filter-tabs">
    <button class="filter-tab active" onclick="filterCards('all', this)">All</button>
    <button class="filter-tab" onclick="filterCards('outstation', this)">Outstation</button>
    <button class="filter-tab" onclick="filterCards('school', this)">School &amp; College</button>
    <button class="filter-tab" onclick="filterCards('corporate', this)">Corporate</button>
    <button class="filter-tab" onclick="filterCards('pilgrimage', this)">Pilgrimage</button>
    <button class="filter-tab" onclick="filterCards('luxury', this)">Luxury Coach</button>
  </div>

  <div class="packages-grid" id="packagesGrid">
    <?php foreach ($contentItems as $item): ?>
    <?php include __DIR__ . '/includes/partials/package-card.php'; ?>
    <?php endforeach; ?>
  </div>
</section>


<!-- ══════════════════ HOW IT WORKS ══════════════════ -->
<style>
  .how-it-works .step-number {
    width: 72px !important;
    height: 72px !important;
    border-radius: 50%;
    background: rgba(42, 157, 143, 0.12) !important;
    border: 1px solid rgba(42, 157, 143, 0.35) !important;
    display: flex !important;
    align-items: center;
    justify-content: center;
    margin: 0 auto 24px;
    position: relative;
    z-index: 2;
  }
  .how-it-works .step-icon {
    width: 28px !important;
    height: 28px !important;
    display: block !important;
    overflow: visible !important;
  }
  .how-it-works .step-icon.is-filled path {
    fill: #5ec4b6 !important;
    stroke: none !important;
  }
  .how-it-works .step-icon.is-outline circle,
  .how-it-works .step-icon.is-outline line,
  .how-it-works .step-icon.is-outline path,
  .how-it-works .step-icon.is-outline rect {
    stroke: #5ec4b6 !important;
    fill: none !important;
  }
  .how-it-works .step-glyph {
    font-size: 32px;
    font-weight: 600;
    line-height: 1;
    color: #5ec4b6 !important;
  }
  .how-it-works .step-num-badge {
    position: absolute;
    top: -4px;
    right: -4px;
    z-index: 3;
    width: 22px;
    height: 22px;
    background: #2a9d8f !important;
    color: #fff !important;
    border-radius: 50%;
    font-size: 11px;
    font-weight: 600;
    display: flex;
    align-items: center;
    justify-content: center;
  }
</style>
<section class="how-it-works">
  <div class="section-header">
    <p class="section-eyebrow">Simple As 1-2-3-4</p>
    <h2 class="section-title" style="color:var(--white)">How It <em>Works</em></h2>
    <p class="section-sub" style="color:rgba(255,255,255,0.45)">Your bus, booked and confirmed in minutes.</p>
  </div>
  <div class="steps-grid">
    <div class="step">
      <div class="step-number">
        <svg class="step-icon is-filled" xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" aria-hidden="true" role="img">
          <path fill="#5EC4B6" d="M15.5 14h-.79l-.28-.27A6.471 6.471 0 0 0 16 9.5 6.5 6.5 0 1 0 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99 1.49-1.49-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 10.5 5 14 7.01 14 9.5 11.99 14 10.5 14z"/>
        </svg>
        <span class="step-num-badge" style="background:#2A9D8F;color:#FFFFFF;">1</span>
      </div>
      <div class="step-title">Select Package</div>
      <div class="step-desc">Choose your route, bus type, and number of passengers from our curated catalogue.</div>
    </div>
    <div class="step">
      <div class="step-number">
        <svg class="step-icon is-outline" xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" aria-hidden="true">
          <path fill="none" stroke="#5EC4B6" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07"/>
          <path fill="none" stroke="#5EC4B6" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" d="M5.64 5.64A16 16 0 0 0 4 9"/>
          <line fill="none" stroke="#5EC4B6" stroke-width="1.75" stroke-linecap="round" x1="1" y1="1" x2="23" y2="23"/>
        </svg>
        <span class="step-num-badge">2</span>
      </div>
      <div class="step-title">Share Requirements</div>
      <div class="step-desc">Tell us pickup point, date, stops, and any special needs. We'll build your itinerary.</div>
    </div>
    <div class="step">
      <div class="step-number">
        <span class="step-glyph" aria-hidden="true">₹</span>
        <span class="step-num-badge">3</span>
      </div>
      <div class="step-title">Confirm &amp; Pay</div>
      <div class="step-desc">Pay securely via UPI, NEFT, or card. Instant confirmation and GST invoice on WhatsApp.</div>
    </div>
    <div class="step">
      <div class="step-number">
        <svg class="step-icon is-outline" xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" aria-hidden="true">
          <rect x="1" y="6" width="22" height="14" rx="2" fill="none" stroke="#5EC4B6" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"/>
          <path fill="none" stroke="#5EC4B6" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" d="M16 6V4a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v2"/>
          <circle cx="7" cy="20" r="2" fill="none" stroke="#5EC4B6" stroke-width="1.75"/>
          <circle cx="17" cy="20" r="2" fill="none" stroke="#5EC4B6" stroke-width="1.75"/>
        </svg>
        <span class="step-num-badge">4</span>
      </div>
      <div class="step-title">Board &amp; Relax</div>
      <div class="step-desc">Driver and bus details sent 24 hrs prior. Track live, relax, and arrive together.</div>
    </div>
  </div>
</section>


<!-- ══════════════════ FLEET OVERVIEW ══════════════════ -->
<section class="fleet-showcase">
  <div class="section-header">
    <p class="section-eyebrow">Our Fleet</p>
    <h2 class="section-title">Every Bus for <em>Every Group</em></h2>
    <p class="section-sub">All buses are less than 4 years old, fully serviced, GPS-equipped, and fitness-certificate verified.</p>
  </div>
  <div class="fleet-grid">
    <div class="fleet-card">
      <span class="fleet-icon">🚐</span>
      <div class="fleet-name">Mini Bus</div>
      <div class="fleet-eg">Force Traveller, Winger</div>
      <div class="fleet-specs">
        <div class="fleet-spec"><span class="spec-val">15</span><span class="spec-label">Seats</span></div>
        <div class="fleet-spec"><span class="spec-val">AC</span><span class="spec-label">Type</span></div>
        <div class="fleet-spec"><span class="spec-val">GPS</span><span class="spec-label">Track</span></div>
      </div>
    </div>
    <div class="fleet-card">
      <span class="fleet-icon">🚌</span>
      <div class="fleet-name">Standard Bus</div>
      <div class="fleet-eg">Tata Starbus, Eicher</div>
      <div class="fleet-specs">
        <div class="fleet-spec"><span class="spec-val">32</span><span class="spec-label">Seats</span></div>
        <div class="fleet-spec"><span class="spec-val">AC</span><span class="spec-label">Type</span></div>
        <div class="fleet-spec"><span class="spec-val">GPS</span><span class="spec-label">Track</span></div>
      </div>
    </div>
    <div class="fleet-card">
      <span class="fleet-icon">🚌</span>
      <div class="fleet-name">Large Bus</div>
      <div class="fleet-eg">Ashok Leyland, Tata LP</div>
      <div class="fleet-specs">
        <div class="fleet-spec"><span class="spec-val">45</span><span class="spec-label">Seats</span></div>
        <div class="fleet-spec"><span class="spec-val">AC</span><span class="spec-label">Type</span></div>
        <div class="fleet-spec"><span class="spec-val">GPS</span><span class="spec-label">Track</span></div>
      </div>
    </div>
    <div class="fleet-card">
      <span class="fleet-icon">🏫</span>
      <div class="fleet-name">School Bus</div>
      <div class="fleet-eg">Tata Starbus School</div>
      <div class="fleet-specs">
        <div class="fleet-spec"><span class="spec-val">28</span><span class="spec-label">Seats</span></div>
        <div class="fleet-spec"><span class="spec-val">CCTV</span><span class="spec-label">Safety</span></div>
        <div class="fleet-spec"><span class="spec-val">GPS</span><span class="spec-label">Track</span></div>
      </div>
    </div>
    <div class="fleet-card">
      <span class="fleet-icon">💎</span>
      <div class="fleet-name">Volvo Luxury</div>
      <div class="fleet-eg">Volvo B9R, B11R</div>
      <div class="fleet-specs">
        <div class="fleet-spec"><span class="spec-val">45</span><span class="spec-label">Seats</span></div>
        <div class="fleet-spec"><span class="spec-val">Wi-Fi</span><span class="spec-label">Amenity</span></div>
        <div class="fleet-spec"><span class="spec-val">GPS</span><span class="spec-label">Track</span></div>
      </div>
    </div>
  </div>
</section>

<!-- ── TESTIMONIALS ── -->
<section class="testimonials">
  <div class="section-header">
    <p class="section-eyebrow">Traveller Stories</p>
    <h2 class="section-title">What Our <em>Explorers</em> Say</h2>
  </div>

  <div class="testimonials-grid">
    <div class="testimonial-card">
      <div class="testimonial-stars">
        <svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
        <svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
        <svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
        <svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
        <svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
      </div>
      <p class="testimonial-text">"The Spiti Valley trip was nothing short of magical. Every detail was handled perfectly — we just had to show up and fall in love."</p>
      <div class="testimonial-author">
        <div class="author-avatar-placeholder">AK</div>
        <div>
          <div class="author-name">Arjun Khanna</div>
          <div class="author-trip">Spiti Valley Package</div>
        </div>
      </div>
    </div>

    <div class="testimonial-card">
      <div class="testimonial-stars">
        <svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
        <svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
        <svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
        <svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
        <svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
      </div>
      <p class="testimonial-text">"Booked the Kerala houseboat package for our anniversary. Honestly the best decision we've ever made. Bookmyaddi truly goes the extra mile."</p>
      <div class="testimonial-author">
        <div class="author-avatar-placeholder">PM</div>
        <div>
          <div class="author-name">Priya Mehta</div>
          <div class="author-trip">Kerala Backwaters Package</div>
        </div>
      </div>
    </div>

    <div class="testimonial-card">
      <div class="testimonial-stars">
        <svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
        <svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
        <svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
        <svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
        <svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
      </div>
      <p class="testimonial-text">"Rajasthan circuit with the family was flawless. The heritage hotel was spectacular and our guide Ravi was an encyclopedia of history!"</p>
      <div class="testimonial-author">
        <div class="author-avatar-placeholder">RS</div>
        <div>
          <div class="author-name">Rohit Sharma</div>
          <div class="author-trip">Royal Rajasthan Circuit</div>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- ── NEWSLETTER ── -->
<section class="newsletter">
  <h2>Get <em>Exclusive</em> Travel Deals</h2>
  <p>Subscribe and be the first to know about early bird offers and hidden gems.</p>
  <div class="newsletter-form">
    <input type="email" placeholder="Enter your email address">
    <a class="btn-primary" href="#" style="white-space:nowrap; padding: 13px 22px;">Subscribe</a>
  </div>
</section>

<?php
require_once __DIR__ . '/includes/footer.php';
require_once __DIR__ . '/includes/scripts.php';

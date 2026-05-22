<?php
$pageTitle = 'BookMyGaddi — Explore. Wander. Discover.';
$activeNav = 'taxi';
$pageScript = 'assets/js/index.js';

require_once __DIR__ . '/includes/config.php';

$contentItems = [];
try {
    $stmt = db()->query(
        'SELECT badge, image_url, tags, title, duration, vehicle_type, distance_in_km, price, rating
         FROM packages 
         WHERE active = 1 
         and type = "tour"
         ORDER BY id ASC'
    );
    $contentItems = $stmt->fetchAll();
} catch (Throwable $e) {
    error_log('Failed to load content: ' . $e->getMessage());
}

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>
<!-- ── HERO BANNER ── -->
<section class="hero">
  <div class="hero-bg"></div>

  <div class="hero-content">
    <div class="hero-eyebrow">Curated Journeys Await</div>
    <h1>Wander<br>into the <em>Unknown</em></h1>
    <p>From the misty Himalayan trails to the golden shores of Goa — we craft journeys that turn into memories that last a lifetime.</p>
    <div class="hero-cta">
      <a class="btn-primary" href="#packages" style="padding: 13px 28px; font-size: 15px;">Explore Packages</a>
      <a class="btn-outline" href="#">Watch Our Story</a>
    </div>
  </div>

  <div class="hero-stats">
    <div class="stat">
      <div class="stat-num">1.2K+</div>
      <div class="stat-label">Destinations</div>
    </div>
    <div class="stat">
      <div class="stat-num">28K+</div>
      <div class="stat-label">Happy Travellers</div>
    </div>
    <div class="stat">
      <div class="stat-num">4.9★</div>
      <div class="stat-label">Avg. Rating</div>
    </div>
  </div>

  <div class="scroll-hint">
    <svg viewBox="0 0 24 24" fill="none" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
      <polyline points="6 9 12 15 18 9"/>
    </svg>
    Scroll
  </div>
</section>


<!-- ── SEARCH BAR ── -->
<div class="search-section">
  <div class="search-bar">
    <div class="search-field">
      <label>Destination</label>
      <select>
        <option>All Destinations</option>
        <option>Himachal Pradesh</option>
        <option>Goa</option>
        <option>Kerala</option>
        <option>Rajasthan</option>
        <option>Uttarakhand</option>
        <option>Andaman</option>
      </select>
    </div>
    <div class="search-field">
      <label>Duration</label>
      <select>
        <option>Any Duration</option>
        <option>1–3 Days</option>
        <option>4–6 Days</option>
        <option>7–10 Days</option>
        <option>10+ Days</option>
      </select>
    </div>
    <div class="search-field">
      <label>Budget (per person)</label>
      <select>
        <option>Any Budget</option>
        <option>Under ₹10,000</option>
        <option>₹10,000 – ₹25,000</option>
        <option>₹25,000 – ₹50,000</option>
        <option>₹50,000+</option>
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
    <p class="section-eyebrow">Handpicked For You</p>
    <h2 class="section-title">Our <em>Signature</em> Packages</h2>
    <p class="section-sub">Every package is thoughtfully curated for comfort, adventure, and memories worth sharing.</p>
  </div>

  <div class="filter-tabs">
    <button class="filter-tab active" onclick="filterCards('all', this)">All</button>
    <button class="filter-tab" onclick="filterCards('mountains', this)">Mountains</button>
    <button class="filter-tab" onclick="filterCards('beaches', this)">Beaches</button>
    <button class="filter-tab" onclick="filterCards('heritage', this)">Heritage</button>
    <button class="filter-tab" onclick="filterCards('wildlife', this)">Wildlife</button>
    <button class="filter-tab" onclick="filterCards('honeymoon', this)">Honeymoon</button>
  </div>

  <div class="packages-grid" id="packagesGrid">
    <?php foreach ($contentItems as $item): ?>
    <?php include __DIR__ . '/includes/partials/package-card.php'; ?>
    <?php endforeach; ?>
  </div>
</section>


<!-- ── WHY US ── -->
<section class="why-us">
  <div class="section-header">
    <p class="section-eyebrow">Why Choose Us</p>
    <h2 class="section-title" style="color:var(--white)">Travel <em>Smarter</em> With Us</h2>
    <p class="section-sub" style="color:rgba(255,255,255,0.45)">We take care of every detail so you can focus on creating memories.</p>
  </div>

  <div class="features-grid">
    <div class="feature-card">
      <div class="feature-icon">
        <svg viewBox="0 0 24 24" fill="none" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
      </div>
      <div class="feature-title">Fully Insured</div>
      <div class="feature-desc">All packages come with comprehensive travel insurance for your complete peace of mind.</div>
    </div>
    <div class="feature-card">
      <div class="feature-icon">
        <svg viewBox="0 0 24 24" fill="none" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
      </div>
      <div class="feature-title">Handpicked Stays</div>
      <div class="feature-desc">Every hotel, resort and camp is personally vetted by our travel experts.</div>
    </div>
    <div class="feature-card">
      <div class="feature-icon">
        <svg viewBox="0 0 24 24" fill="none" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12a19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 3.62 1h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 8.91a16 16 0 0 0 6 6l.91-.91a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
      </div>
      <div class="feature-title">24/7 Support</div>
      <div class="feature-desc">Our travel concierge is available around the clock wherever you are in the world.</div>
    </div>
    <div class="feature-card">
      <div class="feature-icon">
        <svg viewBox="0 0 24 24" fill="none" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
      </div>
      <div class="feature-title">Flexible Booking</div>
      <div class="feature-desc">Free cancellation up to 48 hours before departure. No questions asked.</div>
    </div>
    <div class="feature-card">
      <div class="feature-icon">
        <svg viewBox="0 0 24 24" fill="none" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg>
      </div>
      <div class="feature-title">Best Price Guarantee</div>
      <div class="feature-desc">Find it cheaper elsewhere? We'll match the price and give you extra cashback.</div>
    </div>
    <div class="feature-card">
      <div class="feature-icon">
        <svg viewBox="0 0 24 24" fill="none" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
      </div>
      <div class="feature-title">Expert Local Guides</div>
      <div class="feature-desc">Passionate local experts who know every hidden gem, story, and shortcut.</div>
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

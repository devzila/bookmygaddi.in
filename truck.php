<?php
$pageTitle = 'BookMyGaddi — Explore. Wander. Discover.';
$activeNav = 'truck';
$pageScript = 'assets/js/index.js';
$pageStylesheet = '/assets/css/truck.css';

require_once __DIR__ . '/includes/config.php';

$contentItems = [];
try {
    $stmt = db()->query(
        'SELECT id, badge, image_url, tags, title, slug,duration, vehicle_type, distance_in_km, price, rating, data_categories
         FROM packages 
         WHERE active = 1 
         and type = "truck"
         ORDER BY id ASC'
    );
    $contentItems = $stmt->fetchAll();
} catch (Throwable $e) {
    error_log('Failed to load content: ' . $e->getMessage());
}

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<!-- ══════════════════════════════════════════════
     HERO
══════════════════════════════════════════════ -->
<section class="hero">
  <div class="hero-bg"></div>

  <div class="hero-content">
    <div class="hero-eyebrow">Reliable Truck &amp; Freight Services Across India</div>

    <h1>Move Cargo.<br>Move <em>Business</em>.</h1>

    <p>From household shifting to heavy industrial freight — our network of GPS-tracked trucks, verified drivers, and dedicated logistics managers ensures your cargo arrives safely, every time.</p>

    <div class="service-pills">
      <div class="service-pill"><span class="pill-icon">🏠</span> Household Shifting</div>
      <div class="service-pill"><span class="pill-icon">🏭</span> Industrial Freight</div>
      <div class="service-pill"><span class="pill-icon">🏗️</span> Construction Material</div>
      <div class="service-pill"><span class="pill-icon">📦</span> E-Commerce Delivery</div>
      <div class="service-pill"><span class="pill-icon">🌾</span> Agricultural Produce</div>
    </div>
  </div>

  <div class="hero-stats">
    <div class="stat">
      <div class="stat-num">800+</div>
      <div class="stat-label">Routes Served</div>
    </div>
    <div class="stat">
      <div class="stat-num">120K+</div>
      <div class="stat-label">Loads Delivered</div>
    </div>
    <div class="stat">
      <div class="stat-num">4.8★</div>
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


<!-- ══════════════════════════════════════════════
     SEARCH BAR
══════════════════════════════════════════════ -->
<div class="search-section">
  <div class="search-bar">
    <div class="search-field">
      <label>Route / Destination</label>
      <select>
        <option>Select Destination</option>
        <option>Delhi NCR</option>
        <option>Mumbai</option>
        <option>Chandigarh</option>
        <option>Ludhiana</option>
        <option>Amritsar</option>
        <option>Jaipur</option>
        <option>Ahmedabad</option>
        <option>Bengaluru</option>
        <option>Hyderabad</option>
        <option>Chennai</option>
      </select>
    </div>
    <div class="search-field">
      <label>Load Type</label>
      <select>
        <option>Any Load Type</option>
        <option>📦 Household / Relocation</option>
        <option>🏭 Industrial Goods</option>
        <option>🏗️ Construction Material</option>
        <option>🌾 Agricultural Produce</option>
        <option>🧊 Temperature Controlled</option>
        <option>⚠️ Hazardous / Special</option>
        <option>📦 E-Commerce Parcels</option>
      </select>
    </div>
    <div class="search-field">
      <label>Vehicle Type</label>
      <select>
        <option>Any Vehicle</option>
        <option>🛻 Mini Truck (Tata Ace)</option>
        <option>🚛 Small Truck (407 / Pickup)</option>
        <option>🚚 Medium Truck (14 ft)</option>
        <option>🚚 Large Truck (20–22 ft)</option>
        <option>🚛 Full Trailer (32–40 ft)</option>
        <option>❄️ Refrigerated Truck</option>
        <option>🏗️ Flatbed / Crane Truck</option>
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
  <div class="section-header" style="color:var(--white)">
    <p class="section-eyebrow">Curated Truck Packages</p>
    <h2 class="section-title">Choose Your <em>Ideal</em> Truck</h2>
    <p class="section-sub">Fixed pricing, GPS-tracked vehicles, verified operators, and zero hidden charges on every shipment.</p>
  </div>

  <div class="filter-tabs">
    <button class="filter-tab active" onclick="filterCards('all', this)">All</button>
    <button class="filter-tab" onclick="filterCards('shifting', this)">Household Shifting</button>
    <button class="filter-tab" onclick="filterCards('freight', this)">Freight</button>
    <button class="filter-tab" onclick="filterCards('construction', this)">Construction</button>
    <button class="filter-tab" onclick="filterCards('refrigerated', this)">Refrigerated</button>
    <button class="filter-tab" onclick="filterCards('flatbed', this)">Flatbed / ODC</button>
  </div>

  <div class="packages-grid" id="packagesGrid">
    <?php foreach ($contentItems as $item): ?>
    <?php include __DIR__ . '/includes/partials/package-card.php'; ?>
    <?php endforeach; ?>
  </div>
</section>


<!-- ══════════════════════════════════════════════
     HOW IT WORKS
══════════════════════════════════════════════ -->
<section class="how-it-works">
  <div class="section-header">
    <p class="section-eyebrow">Simple 4-Step Process</p>
    <h2 class="section-title" style="color:var(--white)">How It <em>Works</em></h2>
    <p class="section-sub" style="color:rgba(255,255,255,0.45)">Your truck booked, dispatched, and tracked in minutes.</p>
  </div>
  <div class="steps-grid">
    <div class="step">
      <div class="step-number">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>
        <span class="step-num-badge">1</span>
      </div>
      <div class="step-title">Select &amp; Share Load</div>
      <div class="step-desc">Choose truck type, enter pickup &amp; drop location, and share cargo weight and dimensions.</div>
    </div>
    <div class="step">
      <div class="step-number">
        <span class="step-glyph" aria-hidden="true">₹</span>
        <span class="step-num-badge">2</span>
      </div>
      <div class="step-title">Get Instant Quote</div>
      <div class="step-desc">Receive a transparent, fixed-price quote within minutes. No surprises, no hidden tolls.</div>
    </div>
    <div class="step">
      <div class="step-number">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><rect x="5" y="2" width="14" height="20" rx="2"/><line x1="12" y1="18" x2="12.01" y2="18"/></svg>
        <span class="step-num-badge">3</span>
      </div>
      <div class="step-title">Confirm &amp; Pay</div>
      <div class="step-desc">Pay via UPI, NEFT, or credit. GST invoice sent instantly. Driver details shared 2 hrs prior.</div>
    </div>
    <div class="step">
      <div class="step-number">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><rect x="1" y="3" width="15" height="13" rx="1"/><path d="M16 8h4l3 3v5h-7V8z"/><circle cx="5.5" cy="18.5" r="2.5"/><circle cx="18.5" cy="18.5" r="2.5"/></svg>
        <span class="step-num-badge">4</span>
      </div>
      <div class="step-title">Track &amp; Receive</div>
      <div class="step-desc">Live GPS tracking link shared. Get delivery confirmation and e-POD (proof of delivery).</div>
    </div>
  </div>
</section>



<!-- ══════════════════════════════════════════════
     FLEET OVERVIEW
══════════════════════════════════════════════ -->
<section class="fleet-showcase">
  <div class="section-header">
    <p class="section-eyebrow">Our Fleet</p>
    <h2 class="section-title">Right Truck for <em>Every Load</em></h2>
    <p class="section-sub">All trucks are fitness-certified, GPS-equipped, and fully insured. Operators are police-verified.</p>
  </div>
  <div class="fleet-grid">
    <div class="fleet-card">
      <span class="fleet-icon">🛻</span>
      <div class="fleet-name">Mini Truck</div>
      <div class="fleet-eg">Tata Ace, Mahindra Jeeto</div>
      <div class="fleet-specs">
        <div class="fleet-spec"><span class="spec-val">500</span><span class="spec-label">kg Max</span></div>
        <div class="fleet-spec"><span class="spec-val">7 ft</span><span class="spec-label">Body</span></div>
        <div class="fleet-spec"><span class="spec-val">GPS</span><span class="spec-label">Track</span></div>
      </div>
    </div>
    <div class="fleet-card">
      <span class="fleet-icon">🚛</span>
      <div class="fleet-name">Pickup / 407</div>
      <div class="fleet-eg">Tata 407, Eicher 10.90</div>
      <div class="fleet-specs">
        <div class="fleet-spec"><span class="spec-val">1.5T</span><span class="spec-label">Max</span></div>
        <div class="fleet-spec"><span class="spec-val">10 ft</span><span class="spec-label">Body</span></div>
        <div class="fleet-spec"><span class="spec-val">GPS</span><span class="spec-label">Track</span></div>
      </div>
    </div>
    <div class="fleet-card">
      <span class="fleet-icon">🚚</span>
      <div class="fleet-name">Medium Truck</div>
      <div class="fleet-eg">Tata 1109, LPT 1518</div>
      <div class="fleet-specs">
        <div class="fleet-spec"><span class="spec-val">5T</span><span class="spec-label">Max</span></div>
        <div class="fleet-spec"><span class="spec-val">17 ft</span><span class="spec-label">Body</span></div>
        <div class="fleet-spec"><span class="spec-val">GPS</span><span class="spec-label">Track</span></div>
      </div>
    </div>
    <div class="fleet-card">
      <span class="fleet-icon">🚚</span>
      <div class="fleet-name">Large Truck</div>
      <div class="fleet-eg">Tata 2518, Ashok 2518</div>
      <div class="fleet-specs">
        <div class="fleet-spec"><span class="spec-val">12T</span><span class="spec-label">Max</span></div>
        <div class="fleet-spec"><span class="spec-val">22 ft</span><span class="spec-label">Body</span></div>
        <div class="fleet-spec"><span class="spec-val">GPS</span><span class="spec-label">Track</span></div>
      </div>
    </div>
    <div class="fleet-card">
      <span class="fleet-icon">🚛</span>
      <div class="fleet-name">Full Trailer</div>
      <div class="fleet-eg">Volvo FH, Tata Prima</div>
      <div class="fleet-specs">
        <div class="fleet-spec"><span class="spec-val">25T</span><span class="spec-label">Max</span></div>
        <div class="fleet-spec"><span class="spec-val">40 ft</span><span class="spec-label">Body</span></div>
        <div class="fleet-spec"><span class="spec-val">GPS</span><span class="spec-label">Track</span></div>
      </div>
    </div>
    <div class="fleet-card">
      <span class="fleet-icon">❄️</span>
      <div class="fleet-name">Reefer / Cold</div>
      <div class="fleet-eg">Eicher Reefer, Tata Reefer</div>
      <div class="fleet-specs">
        <div class="fleet-spec"><span class="spec-val">5T</span><span class="spec-label">Max</span></div>
        <div class="fleet-spec"><span class="spec-val">-20°C</span><span class="spec-label">Temp</span></div>
        <div class="fleet-spec"><span class="spec-val">GPS</span><span class="spec-label">Track</span></div>
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

<?php
$pageTitle = 'BookMyGaddi — Taxi Services';
$activeNav = 'tour';
$pageScript = 'assets/js/taxi.js';
require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>
<!-- ── HERO BANNER ── -->
<section class="hero">
  <div class="hero-bg"></div>

  <div class="hero-content">
    <div class="hero-eyebrow">Reliable Rides Across India</div>
    <h1>Your Ride,<br>Your <em>Way</em></h1>
    <p>Airport transfers, city day hires, and outstation trips — verified drivers, transparent pricing, and comfortable vehicles for every journey.</p>
    <div class="hero-cta">
      <a class="btn-primary" href="#packages" style="padding: 13px 28px; font-size: 15px;">View Taxi Packages</a>
      <a class="btn-outline" href="index.html">Tour Packages</a>
    </div>
  </div>

  <div class="hero-stats">
    <div class="stat">
      <div class="stat-num">50+</div>
      <div class="stat-label">Cities Covered</div>
    </div>
    <div class="stat">
      <div class="stat-num">15K+</div>
      <div class="stat-label">Rides Completed</div>
    </div>
    <div class="stat">
      <div class="stat-num">4.8★</div>
      <div class="stat-label">Driver Rating</div>
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
      <select id="searchDestination">
        <option value="all">All Destinations</option>
        <option value="delhi">Delhi NCR</option>
        <option value="mumbai">Mumbai</option>
        <option value="bangalore">Bangalore</option>
        <option value="goa">Goa</option>
        <option value="jaipur">Jaipur</option>
        <option value="manali">Manali</option>
        <option value="chennai">Chennai</option>
        <option value="pune">Pune</option>
      </select>
    </div>
    <div class="search-field">
      <label>Duration</label>
      <select id="searchDuration">
        <option value="all">Any Duration</option>
        <option value="half">Half Day (4–6 hrs)</option>
        <option value="full">Full Day (8–12 hrs)</option>
        <option value="1-3">1–3 Days</option>
        <option value="4-7">4–7 Days</option>
        <option value="7+">7+ Days</option>
      </select>
    </div>
    <div class="search-field">
      <label>Vehicle Type</label>
      <select id="searchVehicle">
        <option value="all">Any Vehicle</option>
        <option value="hatchback">Hatchback</option>
        <option value="sedan">Sedan</option>
        <option value="suv">SUV</option>
        <option value="innova">Innova / Crysta</option>
        <option value="tempo">Tempo Traveller</option>
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
    <p class="section-eyebrow">Verified Drivers & Fleet</p>
    <h2 class="section-title">Taxi <em>Hiring</em> Packages</h2>
    <p class="section-sub">Fixed fares, professional chauffeurs, and well-maintained vehicles — book local, airport, or outstation rides in minutes.</p>
  </div>

  <div class="filter-tabs">
    <button class="filter-tab active" onclick="filterCards('all', this)">All</button>
    <button class="filter-tab" onclick="filterCards('local', this)">Local</button>
    <button class="filter-tab" onclick="filterCards('outstation', this)">Outstation</button>
    <button class="filter-tab" onclick="filterCards('airport', this)">Airport</button>
    <button class="filter-tab" onclick="filterCards('multiday', this)">Multi-Day</button>
  </div>

  <div class="packages-grid" id="packagesGrid">

    <article class="package-card" data-cat="airport local" data-dest="delhi" data-duration="half" data-vehicle="sedan">
      <div class="card-image">
        <img src="https://images.unsplash.com/photo-1449965408869-eaa3f722e40d?w=600&q=80" alt="IGI Airport Transfer">
        <span class="card-badge hot">Popular</span>
        <button class="card-wishlist" onclick="toggleWish(this)" aria-label="Wishlist"><svg viewBox="0 0 24 24" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg></button>
      </div>
      <div class="card-body">
        <div class="card-location"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg> Delhi NCR · Airport Pickup</div>
        <h3 class="card-title">IGI Airport Transfer</h3>
        <div class="card-meta">
          <div class="meta-item"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg> 4–6 Hours</div>
          <div class="meta-item"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round"><path d="M7 17m-2 0a2 2 0 1 0 4 0a2 2 0 1 0-4 0"/><path d="M17 17m-2 0a2 2 0 1 0 4 0a2 2 0 1 0-4 0"/><path d="M5 17H3v-6l2-5h9l4 5h1a2 2 0 0 1 2 2v4h-2"/></svg> Sedan · 4 Seats</div>
          <div class="meta-item"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg> 80 km Included</div>
        </div>
        <div class="card-divider"></div>
        <div class="card-footer">
          <div>
            <div class="card-price">
              <span class="price-label">Starting from</span>
              <div class="price-value">₹1,299 <span>/ trip</span></div>
            </div>
            <div class="card-rating" style="margin-top:6px">
              <div class="stars"><svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg><svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg><svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg><svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg><svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg></div>
              <span class="rating-text">4.9 (842 reviews)</span>
            </div>
          </div>
          <button class="card-book-btn">Book Now</button>
        </div>
      </div>
    </article>

    <article class="package-card" data-cat="local" data-dest="mumbai" data-duration="full" data-vehicle="hatchback">
      <div class="card-image">
        <img src="https://images.unsplash.com/photo-1549317661-bd32c8ce0db2?w=600&q=80" alt="Mumbai Full Day Hire">
        <span class="card-badge new">New</span>
        <button class="card-wishlist" onclick="toggleWish(this)" aria-label="Wishlist"><svg viewBox="0 0 24 24" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg></button>
      </div>
      <div class="card-body">
        <div class="card-location"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg> Mumbai · City Tour</div>
        <h3 class="card-title">Mumbai Full Day Hire</h3>
        <div class="card-meta">
          <div class="meta-item"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg> 8–12 Hours</div>
          <div class="meta-item"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round"><path d="M7 17m-2 0a2 2 0 1 0 4 0a2 2 0 1 0-4 0"/><path d="M17 17m-2 0a2 2 0 1 0 4 0a2 2 0 1 0-4 0"/><path d="M5 17H3v-6l2-5h9l4 5h1a2 2 0 0 1 2 2v4h-2"/></svg> Hatchback · 4 Seats</div>
          <div class="meta-item"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg> 100 km Included</div>
        </div>
        <div class="card-divider"></div>
        <div class="card-footer">
          <div>
            <div class="card-price">
              <span class="price-label">Starting from</span>
              <div class="price-value">₹2,199 <span>/ day</span></div>
            </div>
            <div class="card-rating" style="margin-top:6px">
              <div class="stars"><svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg><svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg><svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg><svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg><svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg></div>
              <span class="rating-text">4.8 (534 reviews)</span>
            </div>
          </div>
          <button class="card-book-btn">Book Now</button>
        </div>
      </div>
    </article>

    <article class="package-card" data-cat="outstation" data-dest="bangalore" data-duration="1-3" data-vehicle="suv">
      <div class="card-image">
        <img src="https://images.unsplash.com/photo-1469854523086-cc02fe5d8800?w=600&q=80" alt="Bangalore Outstation">
        <span class="card-badge" style="background:var(--gold)">Best Value</span>
        <button class="card-wishlist" onclick="toggleWish(this)" aria-label="Wishlist"><svg viewBox="0 0 24 24" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg></button>
      </div>
      <div class="card-body">
        <div class="card-location"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg> Bangalore · Mysore · Coorg</div>
        <h3 class="card-title">Bangalore Outstation</h3>
        <div class="card-meta">
          <div class="meta-item"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg> 1–3 Days</div>
          <div class="meta-item"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round"><path d="M7 17m-2 0a2 2 0 1 0 4 0a2 2 0 1 0-4 0"/><path d="M17 17m-2 0a2 2 0 1 0 4 0a2 2 0 1 0-4 0"/><path d="M5 17H3v-6l2-5h9l4 5h1a2 2 0 0 1 2 2v4h-2"/></svg> SUV · 6 Seats</div>
          <div class="meta-item"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg> 300 km / Day</div>
        </div>
        <div class="card-divider"></div>
        <div class="card-footer">
          <div>
            <div class="card-price">
              <span class="price-label">Starting from</span>
              <div class="price-value">₹4,500 <span>/ day</span></div>
            </div>
            <div class="card-rating" style="margin-top:6px">
              <div class="stars"><svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg><svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg><svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg><svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg><svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg></div>
              <span class="rating-text">4.8 (421 reviews)</span>
            </div>
          </div>
          <button class="card-book-btn">Book Now</button>
        </div>
      </div>
    </article>

    <article class="package-card" data-cat="outstation multiday" data-dest="manali" data-duration="4-7" data-vehicle="innova">
      <div class="card-image">
        <img src="https://images.unsplash.com/photo-1626621341517-bbf3d9990a23?w=600&q=80" alt="Manali–Shimla Circuit">
        <span class="card-badge hot">Hot Deal</span>
        <button class="card-wishlist" onclick="toggleWish(this)" aria-label="Wishlist"><svg viewBox="0 0 24 24" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg></button>
      </div>
      <div class="card-body">
        <div class="card-location"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg> Chandigarh · Manali · Rohtang</div>
        <h3 class="card-title">Manali–Shimla Circuit</h3>
        <div class="card-meta">
          <div class="meta-item"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg> 5–7 Days</div>
          <div class="meta-item"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round"><path d="M7 17m-2 0a2 2 0 1 0 4 0a2 2 0 1 0-4 0"/><path d="M17 17m-2 0a2 2 0 1 0 4 0a2 2 0 1 0-4 0"/><path d="M5 17H3v-6l2-5h9l4 5h1a2 2 0 0 1 2 2v4h-2"/></svg> Innova Crysta · 7 Seats</div>
          <div class="meta-item"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg> Unlimited Hills</div>
        </div>
        <div class="card-divider"></div>
        <div class="card-footer">
          <div>
            <div class="card-price">
              <span class="price-label">Starting from</span>
              <div class="price-value">₹3,800 <span>/ day</span></div>
            </div>
            <div class="card-rating" style="margin-top:6px">
              <div class="stars"><svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg><svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg><svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg><svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg><svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg></div>
              <span class="rating-text">4.9 (612 reviews)</span>
            </div>
          </div>
          <button class="card-book-btn">Book Now</button>
        </div>
      </div>
    </article>

    <article class="package-card" data-cat="local" data-dest="goa" data-duration="full" data-vehicle="suv">
      <div class="card-image">
        <img src="https://images.unsplash.com/photo-1512343879784-a960bf40e7f2?w=600&q=80" alt="Goa Beach Hopping Cab">
        <span class="card-badge" style="background:var(--gold)">Premium</span>
        <button class="card-wishlist" onclick="toggleWish(this)" aria-label="Wishlist"><svg viewBox="0 0 24 24" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg></button>
      </div>
      <div class="card-body">
        <div class="card-location"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg> North Goa · South Goa</div>
        <h3 class="card-title">Goa Beach Hopping Cab</h3>
        <div class="card-meta">
          <div class="meta-item"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg> Full Day</div>
          <div class="meta-item"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round"><path d="M7 17m-2 0a2 2 0 1 0 4 0a2 2 0 1 0-4 0"/><path d="M17 17m-2 0a2 2 0 1 0 4 0a2 2 0 1 0-4 0"/><path d="M5 17H3v-6l2-5h9l4 5h1a2 2 0 0 1 2 2v4h-2"/></svg> SUV · 6 Seats</div>
          <div class="meta-item"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg> 150 km Included</div>
        </div>
        <div class="card-divider"></div>
        <div class="card-footer">
          <div>
            <div class="card-price">
              <span class="price-label">Starting from</span>
              <div class="price-value">₹3,499 <span>/ day</span></div>
            </div>
            <div class="card-rating" style="margin-top:6px">
              <div class="stars"><svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg><svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg><svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg><svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg><svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg></div>
              <span class="rating-text">4.7 (298 reviews)</span>
            </div>
          </div>
          <button class="card-book-btn">Book Now</button>
        </div>
      </div>
    </article>

    <article class="package-card" data-cat="local" data-dest="jaipur" data-duration="full" data-vehicle="sedan">
      <div class="card-image">
        <img src="https://images.unsplash.com/photo-1524492412937-b28074a5d7da?w=600&q=80" alt="Pink City Heritage Tour">
        <span class="card-badge new">New</span>
        <button class="card-wishlist" onclick="toggleWish(this)" aria-label="Wishlist"><svg viewBox="0 0 24 24" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg></button>
      </div>
      <div class="card-body">
        <div class="card-location"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg> Jaipur · Amber · Nahargarh</div>
        <h3 class="card-title">Pink City Heritage Tour</h3>
        <div class="card-meta">
          <div class="meta-item"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg> 8 Hours</div>
          <div class="meta-item"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round"><path d="M7 17m-2 0a2 2 0 1 0 4 0a2 2 0 1 0-4 0"/><path d="M17 17m-2 0a2 2 0 1 0 4 0a2 2 0 1 0-4 0"/><path d="M5 17H3v-6l2-5h9l4 5h1a2 2 0 0 1 2 2v4h-2"/></svg> Sedan · 4 Seats</div>
          <div class="meta-item"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg> 120 km Included</div>
        </div>
        <div class="card-divider"></div>
        <div class="card-footer">
          <div>
            <div class="card-price">
              <span class="price-label">Starting from</span>
              <div class="price-value">₹2,799 <span>/ day</span></div>
            </div>
            <div class="card-rating" style="margin-top:6px">
              <div class="stars"><svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg><svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg><svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg><svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg><svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg></div>
              <span class="rating-text">4.9 (367 reviews)</span>
            </div>
          </div>
          <button class="card-book-btn">Book Now</button>
        </div>
      </div>
    </article>

    <article class="package-card" data-cat="outstation multiday" data-dest="delhi" data-duration="4-7" data-vehicle="innova">
      <div class="card-image">
        <img src="https://images.unsplash.com/photo-1588083949404-c4f1ed1323b3?w=600&q=80" alt="Char Dham Road Trip">
        <span class="card-badge" style="background:var(--gold)">Spiritual</span>
        <button class="card-wishlist" onclick="toggleWish(this)" aria-label="Wishlist"><svg viewBox="0 0 24 24" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg></button>
      </div>
      <div class="card-body">
        <div class="card-location"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg> Delhi · Haridwar · Rishikesh</div>
        <h3 class="card-title">Char Dham Road Trip</h3>
        <div class="card-meta">
          <div class="meta-item"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg> 6–8 Days</div>
          <div class="meta-item"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round"><path d="M7 17m-2 0a2 2 0 1 0 4 0a2 2 0 1 0-4 0"/><path d="M17 17m-2 0a2 2 0 1 0 4 0a2 2 0 1 0-4 0"/><path d="M5 17H3v-6l2-5h9l4 5h1a2 2 0 0 1 2 2v4h-2"/></svg> Innova · 7 Seats</div>
          <div class="meta-item"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg> 450 km / Day</div>
        </div>
        <div class="card-divider"></div>
        <div class="card-footer">
          <div>
            <div class="card-price">
              <span class="price-label">Starting from</span>
              <div class="price-value">₹4,200 <span>/ day</span></div>
            </div>
            <div class="card-rating" style="margin-top:6px">
              <div class="stars"><svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg><svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg><svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg><svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg><svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg></div>
              <span class="rating-text">4.8 (445 reviews)</span>
            </div>
          </div>
          <button class="card-book-btn">Book Now</button>
        </div>
      </div>
    </article>

    <article class="package-card" data-cat="outstation" data-dest="pune" data-duration="1-3" data-vehicle="sedan">
      <div class="card-image">
        <img src="https://images.unsplash.com/photo-1571068316344-75bc76f77890?w=600&q=80" alt="Lonavala Weekend Getaway">
        <span class="card-badge hot">Weekend</span>
        <button class="card-wishlist" onclick="toggleWish(this)" aria-label="Wishlist"><svg viewBox="0 0 24 24" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg></button>
      </div>
      <div class="card-body">
        <div class="card-location"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg> Pune · Lonavala · Lavasa</div>
        <h3 class="card-title">Lonavala Weekend Getaway</h3>
        <div class="card-meta">
          <div class="meta-item"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg> 2–3 Days</div>
          <div class="meta-item"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round"><path d="M7 17m-2 0a2 2 0 1 0 4 0a2 2 0 1 0-4 0"/><path d="M17 17m-2 0a2 2 0 1 0 4 0a2 2 0 1 0-4 0"/><path d="M5 17H3v-6l2-5h9l4 5h1a2 2 0 0 1 2 2v4h-2"/></svg> Sedan · 4 Seats</div>
          <div class="meta-item"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg> 250 km / Day</div>
        </div>
        <div class="card-divider"></div>
        <div class="card-footer">
          <div>
            <div class="card-price">
              <span class="price-label">Starting from</span>
              <div class="price-value">₹3,100 <span>/ day</span></div>
            </div>
            <div class="card-rating" style="margin-top:6px">
              <div class="stars"><svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg><svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg><svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg><svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg><svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg></div>
              <span class="rating-text">4.7 (201 reviews)</span>
            </div>
          </div>
          <button class="card-book-btn">Book Now</button>
        </div>
      </div>
    </article>

    <article class="package-card" data-cat="airport local" data-dest="chennai" data-duration="half" data-vehicle="sedan">
      <div class="card-image">
        <img src="https://images.unsplash.com/photo-1544629907-0cef4c3b0a0a?w=600&q=80" alt="Chennai Airport + City">
        <span class="card-badge" style="background:var(--gold)">Express</span>
        <button class="card-wishlist" onclick="toggleWish(this)" aria-label="Wishlist"><svg viewBox="0 0 24 24" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg></button>
      </div>
      <div class="card-body">
        <div class="card-location"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg> Chennai · Airport & City</div>
        <h3 class="card-title">Chennai Airport + City</h3>
        <div class="card-meta">
          <div class="meta-item"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg> 6 Hours</div>
          <div class="meta-item"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round"><path d="M7 17m-2 0a2 2 0 1 0 4 0a2 2 0 1 0-4 0"/><path d="M17 17m-2 0a2 2 0 1 0 4 0a2 2 0 1 0-4 0"/><path d="M5 17H3v-6l2-5h9l4 5h1a2 2 0 0 1 2 2v4h-2"/></svg> Premium Sedan</div>
          <div class="meta-item"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg> 90 km Included</div>
        </div>
        <div class="card-divider"></div>
        <div class="card-footer">
          <div>
            <div class="card-price">
              <span class="price-label">Starting from</span>
              <div class="price-value">₹1,599 <span>/ trip</span></div>
            </div>
            <div class="card-rating" style="margin-top:6px">
              <div class="stars"><svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg><svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg><svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg><svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg><svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg></div>
              <span class="rating-text">4.8 (389 reviews)</span>
            </div>
          </div>
          <button class="card-book-btn">Book Now</button>
        </div>
      </div>
    </article>
  </div>
</section>


<!-- ── WHY US ── -->
<section class="why-us">
  <div class="section-header">
    <p class="section-eyebrow">Why Choose Us</p>
    <h2 class="section-title" style="color:var(--white)">Ride <em>Smarter</em> With Us</h2>
    <p class="section-sub" style="color:rgba(255,255,255,0.45)">Verified drivers, GPS tracking, and 24/7 support on every ride.</p>
  </div>

  <div class="features-grid">
    <div class="feature-card">
      <div class="feature-icon">
        <svg viewBox="0 0 24 24" fill="none" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
      </div>
      <div class="feature-title">Fully Insured</div>
      <div class="feature-desc">Every ride includes trip insurance and live GPS tracking for your safety.</div>
    </div>
    <div class="feature-card">
      <div class="feature-icon">
        <svg viewBox="0 0 24 24" fill="none" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
      </div>
      <div class="feature-title">AC Fleet</div>
      <div class="feature-desc">Sedans, SUVs, Innovas and tempo travellers — all regularly serviced and sanitized.</div>
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
      <div class="feature-title">Professional Chauffeurs</div>
      <div class="feature-desc">Background-verified drivers who know local routes, traffic, and shortcuts.</div>
    </div>
  </div>
</section>


<!-- ── TESTIMONIALS ── -->
<section class="testimonials">
  <div class="section-header">
    <p class="section-eyebrow">Traveller Stories</p>
    <h2 class="section-title">What Our <em>Riders</em> Say</h2>
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
      <p class="testimonial-text">"Booked the Delhi airport pickup at midnight — driver was on time, car was spotless. Seamless experience from start to finish."</p>
      <div class="testimonial-author">
        <div class="author-avatar-placeholder">AK</div>
        <div>
          <div class="author-name">Arjun Khanna</div>
          <div class="author-trip">IGI Airport Transfer</div>
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
      <p class="testimonial-text">"Used the Manali Innova package for our family trip. Driver knew every viewpoint and kept the kids comfortable. Highly recommend!"</p>
      <div class="testimonial-author">
        <div class="author-avatar-placeholder">PM</div>
        <div>
          <div class="author-name">Priya Mehta</div>
          <div class="author-trip">Manali–Shimla Circuit</div>
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
      <p class="testimonial-text">"Mumbai full-day hire was perfect for our business meetings. Transparent pricing, no hidden charges. Will book again."</p>
      <div class="testimonial-author">
        <div class="author-avatar-placeholder">RS</div>
        <div>
          <div class="author-name">Rohit Sharma</div>
          <div class="author-trip">Mumbai Full Day Hire</div>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- ── NEWSLETTER ── -->
<section class="newsletter">
  <h2>Get <em>Exclusive</em> Ride Offers</h2>
  <p>Subscribe for airport transfer discounts and weekend outstation deals.</p>
  <div class="newsletter-form">
    <input type="email" placeholder="Enter your email address">
    <a class="btn-primary" href="#" style="white-space:nowrap; padding: 13px 22px;">Subscribe</a>
  </div>
</section>

<?php
require_once __DIR__ . '/includes/footer.php';
require_once __DIR__ . '/includes/scripts.php';

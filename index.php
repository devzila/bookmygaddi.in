<?php
$pageTitle = 'BookMyGaddi — Explore. Wander. Discover.';
$activeNav = 'tours';
$pageScript = 'assets/js/index.js';
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

    <!-- Card 1 -->
    <article class="package-card" data-cat="mountains">
      <div class="card-image">
        <img src="https://images.unsplash.com/photo-1626621341517-bbf3d9990a23?w=600&q=80" alt="Manali Spiti Valley">
        <span class="card-badge hot">Hot Deal</span>
        <button class="card-wishlist" onclick="toggleWish(this)" aria-label="Wishlist">
          <svg viewBox="0 0 24 24" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
            <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/>
          </svg>
        </button>
      </div>
      <div class="card-body">
        <div class="card-location">
          <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
          Manali · Himachal Pradesh
        </div>
        <h3 class="card-title">Spiti Valley Escape</h3>
        <div class="card-meta">
          <div class="meta-item">
            <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
            8 Days / 7 Nights
          </div>
          <div class="meta-item">
            <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
            2–8 Persons
          </div>
          <div class="meta-item">
            <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
            Hotel + Camp
          </div>
        </div>
        <div class="card-divider"></div>
        <div class="card-footer">
          <div>
            <div class="card-price">
              <span class="price-label">Starting from</span>
              <div class="price-value">₹18,999 <span>/ person</span></div>
            </div>
            <div class="card-rating" style="margin-top:6px">
              <div class="stars">
                <svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                <svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                <svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                <svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                <svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
              </div>
              <span class="rating-text">4.9 (312 reviews)</span>
            </div>
          </div>
          <button class="card-book-btn">Book Now</button>
        </div>
      </div>
    </article>

    <!-- Card 2 -->
    <article class="package-card" data-cat="beaches">
      <div class="card-image">
        <img src="https://images.unsplash.com/photo-1512343879784-a960bf40e7f2?w=600&q=80" alt="Goa Beach">
        <span class="card-badge new">New</span>
        <button class="card-wishlist" onclick="toggleWish(this)" aria-label="Wishlist">
          <svg viewBox="0 0 24 24" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
            <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/>
          </svg>
        </button>
      </div>
      <div class="card-body">
        <div class="card-location">
          <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
          North Goa · South Goa
        </div>
        <h3 class="card-title">Golden Goa Sunsets</h3>
        <div class="card-meta">
          <div class="meta-item">
            <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
            5 Days / 4 Nights
          </div>
          <div class="meta-item">
            <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
            2–6 Persons
          </div>
          <div class="meta-item">
            <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
            Beachside Villa
          </div>
        </div>
        <div class="card-divider"></div>
        <div class="card-footer">
          <div>
            <div class="card-price">
              <span class="price-label">Starting from</span>
              <div class="price-value">₹12,499 <span>/ person</span></div>
            </div>
            <div class="card-rating" style="margin-top:6px">
              <div class="stars">
                <svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                <svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                <svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                <svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                <svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
              </div>
              <span class="rating-text">4.8 (198 reviews)</span>
            </div>
          </div>
          <button class="card-book-btn">Book Now</button>
        </div>
      </div>
    </article>

    <!-- Card 3 -->
    <article class="package-card" data-cat="heritage honeymoon">
      <div class="card-image">
        <img src="https://images.unsplash.com/photo-1524492412937-b28074a5d7da?w=600&q=80" alt="Rajasthan Heritage">
        <span class="card-badge" style="background:var(--gold)">Best Seller</span>
        <button class="card-wishlist" onclick="toggleWish(this)" aria-label="Wishlist">
          <svg viewBox="0 0 24 24" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
            <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/>
          </svg>
        </button>
      </div>
      <div class="card-body">
        <div class="card-location">
          <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
          Jaipur · Jodhpur · Udaipur
        </div>
        <h3 class="card-title">Royal Rajasthan Circuit</h3>
        <div class="card-meta">
          <div class="meta-item">
            <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
            10 Days / 9 Nights
          </div>
          <div class="meta-item">
            <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/></svg>
            2–10 Persons
          </div>
          <div class="meta-item">
            <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
            Heritage Hotel
          </div>
        </div>
        <div class="card-divider"></div>
        <div class="card-footer">
          <div>
            <div class="card-price">
              <span class="price-label">Starting from</span>
              <div class="price-value">₹32,500 <span>/ person</span></div>
            </div>
            <div class="card-rating" style="margin-top:6px">
              <div class="stars">
                <svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                <svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                <svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                <svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                <svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
              </div>
              <span class="rating-text">5.0 (521 reviews)</span>
            </div>
          </div>
          <button class="card-book-btn">Book Now</button>
        </div>
      </div>
    </article>

    <!-- Card 4 -->
    <article class="package-card" data-cat="beaches honeymoon">
      <div class="card-image">
        <img src="https://images.unsplash.com/photo-1559128010-7c1ad6e1b6a5?w=600&q=80" alt="Kerala Backwaters">
        <span class="card-badge hot">Popular</span>
        <button class="card-wishlist" onclick="toggleWish(this)" aria-label="Wishlist">
          <svg viewBox="0 0 24 24" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
            <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/>
          </svg>
        </button>
      </div>
      <div class="card-body">
        <div class="card-location">
          <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
          Alleppey · Munnar · Kovalam
        </div>
        <h3 class="card-title">Kerala Backwaters Bliss</h3>
        <div class="card-meta">
          <div class="meta-item">
            <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
            7 Days / 6 Nights
          </div>
          <div class="meta-item">
            <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/></svg>
            2–4 Persons
          </div>
          <div class="meta-item">
            <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
            Houseboat Stay
          </div>
        </div>
        <div class="card-divider"></div>
        <div class="card-footer">
          <div>
            <div class="card-price">
              <span class="price-label">Starting from</span>
              <div class="price-value">₹22,000 <span>/ person</span></div>
            </div>
            <div class="card-rating" style="margin-top:6px">
              <div class="stars">
                <svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                <svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                <svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                <svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                <svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
              </div>
              <span class="rating-text">4.9 (441 reviews)</span>
            </div>
          </div>
          <button class="card-book-btn">Book Now</button>
        </div>
      </div>
    </article>

    <!-- Card 5 -->
    <article class="package-card" data-cat="mountains">
      <div class="card-image">
        <img src="https://images.unsplash.com/photo-1588083949404-c4f1ed1323b3?w=600&q=80" alt="Kedarnath Trek">
        <span class="card-badge new">New</span>
        <button class="card-wishlist" onclick="toggleWish(this)" aria-label="Wishlist">
          <svg viewBox="0 0 24 24" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
            <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/>
          </svg>
        </button>
      </div>
      <div class="card-body">
        <div class="card-location">
          <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
          Kedarnath · Uttarakhand
        </div>
        <h3 class="card-title">Kedarnath Yatra</h3>
        <div class="card-meta">
          <div class="meta-item">
            <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
            6 Days / 5 Nights
          </div>
          <div class="meta-item">
            <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/></svg>
            4–12 Persons
          </div>
          <div class="meta-item">
            <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
            Camp + Lodge
          </div>
        </div>
        <div class="card-divider"></div>
        <div class="card-footer">
          <div>
            <div class="card-price">
              <span class="price-label">Starting from</span>
              <div class="price-value">₹14,999 <span>/ person</span></div>
            </div>
            <div class="card-rating" style="margin-top:6px">
              <div class="stars">
                <svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                <svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                <svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                <svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                <svg viewBox="0 0 24 24" style="opacity:0.3"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
              </div>
              <span class="rating-text">4.7 (189 reviews)</span>
            </div>
          </div>
          <button class="card-book-btn">Book Now</button>
        </div>
      </div>
    </article>

    <!-- Card 6 -->
    <article class="package-card" data-cat="wildlife">
      <div class="card-image">
        <img src="https://images.unsplash.com/photo-1564349683136-77e08dba1ef7?w=600&q=80" alt="Ranthambore Tiger Safari">
        <span class="card-badge hot">Hot Deal</span>
        <button class="card-wishlist" onclick="toggleWish(this)" aria-label="Wishlist">
          <svg viewBox="0 0 24 24" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
            <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/>
          </svg>
        </button>
      </div>
      <div class="card-body">
        <div class="card-location">
          <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
          Ranthambore · Rajasthan
        </div>
        <h3 class="card-title">Tiger Trail Safari</h3>
        <div class="card-meta">
          <div class="meta-item">
            <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
            4 Days / 3 Nights
          </div>
          <div class="meta-item">
            <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/></svg>
            2–6 Persons
          </div>
          <div class="meta-item">
            <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
            Jungle Resort
          </div>
        </div>
        <div class="card-divider"></div>
        <div class="card-footer">
          <div>
            <div class="card-price">
              <span class="price-label">Starting from</span>
              <div class="price-value">₹16,500 <span>/ person</span></div>
            </div>
            <div class="card-rating" style="margin-top:6px">
              <div class="stars">
                <svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                <svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                <svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                <svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                <svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
              </div>
              <span class="rating-text">4.8 (267 reviews)</span>
            </div>
          </div>
          <button class="card-book-btn">Book Now</button>
        </div>
      </div>
    </article>

    <!-- Card 7 -->
    <article class="package-card" data-cat="beaches">
      <div class="card-image">
        <img src="https://images.unsplash.com/photo-1544551763-46a013bb70d5?w=600&q=80" alt="Andaman Islands">
        <span class="card-badge" style="background:var(--gold)">Premium</span>
        <button class="card-wishlist" onclick="toggleWish(this)" aria-label="Wishlist">
          <svg viewBox="0 0 24 24" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
            <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/>
          </svg>
        </button>
      </div>
      <div class="card-body">
        <div class="card-location">
          <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
          Port Blair · Havelock · Neil
        </div>
        <h3 class="card-title">Andaman Island Hopper</h3>
        <div class="card-meta">
          <div class="meta-item">
            <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
            6 Days / 5 Nights
          </div>
          <div class="meta-item">
            <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/></svg>
            2–8 Persons
          </div>
          <div class="meta-item">
            <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
            Beach Resort
          </div>
        </div>
        <div class="card-divider"></div>
        <div class="card-footer">
          <div>
            <div class="card-price">
              <span class="price-label">Starting from</span>
              <div class="price-value">₹28,999 <span>/ person</span></div>
            </div>
            <div class="card-rating" style="margin-top:6px">
              <div class="stars">
                <svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                <svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                <svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                <svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                <svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
              </div>
              <span class="rating-text">4.9 (376 reviews)</span>
            </div>
          </div>
          <button class="card-book-btn">Book Now</button>
        </div>
      </div>
    </article>

    <!-- Card 8 -->
    <article class="package-card" data-cat="honeymoon mountains">
      <div class="card-image">
        <img src="https://images.unsplash.com/photo-1571068316344-75bc76f77890?w=600&q=80" alt="Darjeeling">
        <span class="card-badge new">New</span>
        <button class="card-wishlist" onclick="toggleWish(this)" aria-label="Wishlist">
          <svg viewBox="0 0 24 24" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
            <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/>
          </svg>
        </button>
      </div>
      <div class="card-body">
        <div class="card-location">
          <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
          Darjeeling · Sikkim
        </div>
        <h3 class="card-title">Darjeeling Dreamer</h3>
        <div class="card-meta">
          <div class="meta-item">
            <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
            5 Days / 4 Nights
          </div>
          <div class="meta-item">
            <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/></svg>
            2–6 Persons
          </div>
          <div class="meta-item">
            <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
            Tea Estate Bungalow
          </div>
        </div>
        <div class="card-divider"></div>
        <div class="card-footer">
          <div>
            <div class="card-price">
              <span class="price-label">Starting from</span>
              <div class="price-value">₹15,500 <span>/ person</span></div>
            </div>
            <div class="card-rating" style="margin-top:6px">
              <div class="stars">
                <svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                <svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                <svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                <svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                <svg viewBox="0 0 24 24" style="opacity:0.3"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
              </div>
              <span class="rating-text">4.6 (143 reviews)</span>
            </div>
          </div>
          <button class="card-book-btn">Book Now</button>
        </div>
      </div>
    </article>

    <!-- Card 9 -->
    <article class="package-card" data-cat="heritage">
      <div class="card-image">
        <img src="https://images.unsplash.com/photo-1548013146-72479768bada?w=600&q=80" alt="Varanasi Heritage">
        <span class="card-badge" style="background:var(--gold)">Spiritual</span>
        <button class="card-wishlist" onclick="toggleWish(this)" aria-label="Wishlist">
          <svg viewBox="0 0 24 24" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
            <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/>
          </svg>
        </button>
      </div>
      <div class="card-body">
        <div class="card-location">
          <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
          Varanasi · Prayagraj · Ayodhya
        </div>
        <h3 class="card-title">Sacred Ganga Journey</h3>
        <div class="card-meta">
          <div class="meta-item">
            <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
            7 Days / 6 Nights
          </div>
          <div class="meta-item">
            <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/></svg>
            2–15 Persons
          </div>
          <div class="meta-item">
            <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
            Heritage Haveli
          </div>
        </div>
        <div class="card-divider"></div>
        <div class="card-footer">
          <div>
            <div class="card-price">
              <span class="price-label">Starting from</span>
              <div class="price-value">₹9,999 <span>/ person</span></div>
            </div>
            <div class="card-rating" style="margin-top:6px">
              <div class="stars">
                <svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                <svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                <svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                <svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                <svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
              </div>
              <span class="rating-text">4.8 (302 reviews)</span>
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

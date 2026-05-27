<?php
/**
 * Renders one package card. Expects $item from the content table.
 */
$badgeText = trim((string) ($item['badge'] ?? ''));
$badgeLower = strtolower($badgeText);
$badgeClass = 'card-badge';
$badgeStyle = '';
if (str_contains($badgeLower, 'new')) {
    $badgeClass .= ' new';
} elseif (str_contains($badgeLower, 'hot') || str_contains($badgeLower, 'popular') || str_contains($badgeLower, 'deal')) {
    $badgeClass .= ' hot';
} elseif ($badgeText !== '') {
    $badgeStyle = ' style="background:var(--gold)"';
}

$tags = trim((string) ($item['tags'] ?? ''));
$dataCategories = trim((string) ($item['data_categories'] ?? ''));
$title = (string) ($item['title'] ?? '');
$imageUrl = (string) ($item['image_url'] ?? '');
$duration = trim((string) ($item['duration'] ?? ''));
$vehicleType = trim((string) ($item['vehicle_type'] ?? ''));
$distanceKm = $item['distance_in_km'] ?? '';
$price = is_numeric($item['price'] ?? null)
    ? '₹' . number_format((float) $item['price'], 0, '.', ',')
    : (string) ($item['price'] ?? '');
$rating = trim((string) ($item['rating'] ?? ''));

$distanceLabel = $distanceKm !== '' && $distanceKm !== null
    ? (is_numeric($distanceKm) ? number_format((float) $distanceKm, 0) . ' km' : (string) $distanceKm)
    : '';
?>
    <article class="package-card" data-cat="<?= htmlspecialchars($dataCategories, ENT_QUOTES, 'UTF-8') ?>">
      <div class="card-image">
        <img src="<?= htmlspecialchars($imageUrl, ENT_QUOTES, 'UTF-8') ?>" alt="<?= htmlspecialchars($title, ENT_QUOTES, 'UTF-8') ?>">
        <?php if ($badgeText !== ''): ?>
        <span class="<?= $badgeClass ?>"<?= $badgeStyle ?>><?= htmlspecialchars($badgeText, ENT_QUOTES, 'UTF-8') ?></span>
        <?php endif; ?>
        <button class="card-wishlist" onclick="toggleWish(this)" aria-label="Wishlist">
          <svg viewBox="0 0 24 24" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
            <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/>
          </svg>
        </button>
      </div>
      <div class="card-body">
        <?php if ($tags !== ''): ?>
        <div class="card-location">
          <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
          <?= htmlspecialchars($tags, ENT_QUOTES, 'UTF-8') ?>
        </div>
        <?php endif; ?>
        <h3 class="card-title"><?= htmlspecialchars($title, ENT_QUOTES, 'UTF-8') ?></h3>
        <div class="card-meta">
          <?php if ($duration !== ''): ?>
          <div class="meta-item">
            <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
            <?= htmlspecialchars($duration, ENT_QUOTES, 'UTF-8') ?>
          </div>
          <?php endif; ?>
          <?php if ($vehicleType !== ''): ?>
          <div class="meta-item">
            <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round"><path d="M7 17m-2 0a2 2 0 1 0 4 0a2 2 0 1 0-4 0"/><path d="M17 17m-2 0a2 2 0 1 0 4 0a2 2 0 1 0-4 0"/><path d="M5 17H3v-6l2-5h9l4 5h1a2 2 0 0 1 2 2v4h-2"/></svg>
            <?= htmlspecialchars($vehicleType, ENT_QUOTES, 'UTF-8') ?>
          </div>
          <?php endif; ?>
          <?php if ($distanceLabel !== ''): ?>
          <div class="meta-item">
            <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
            <?= htmlspecialchars($distanceLabel, ENT_QUOTES, 'UTF-8') ?>
          </div>
          <?php endif; ?>
        </div>
        <div class="card-divider"></div>
        <div class="card-footer">
          <div>
            <?php if ($price !== ''): ?>
            <div class="card-price">
              <span class="price-label">Starting from</span>
              <div class="price-value"><?= htmlspecialchars($price, ENT_QUOTES, 'UTF-8') ?> <span>/ person</span></div>
            </div>
            <?php endif; ?>
            <?php if ($rating !== ''): ?>
            <div class="card-rating" style="margin-top:6px">
              <div class="stars">
                <svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                <svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                <svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                <svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                <svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
              </div>
              <span class="rating-text"><?= htmlspecialchars($rating, ENT_QUOTES, 'UTF-8') ?></span>
            </div>
            <?php endif; ?>
          </div>
          <a href="<?=$activeNav?>/<?= $item['slug'] ?>" class="card-book-btn">Book Now</a>
        </div>
      </div>
    </article>

<?php


require_once __DIR__ . '/../includes/config.php';

$slug = trim((string) ($_GET['slug'] ?? ''));
$package = null;

if ($slug !== '' && preg_match('/^[a-z0-9-]+$/i', $slug)) {
    try {
        $stmt = db()->prepare(
            'SELECT id, badge, image_url, tags, title, slug, content, 
             duration, vehicle_type, distance_in_km, price, rating, data_categories,
             meta_description, page_keywords
             FROM packages
             WHERE active = 1 AND type = :type AND slug = :slug
             LIMIT 1'
        );
        $stmt->execute([':type' => 'taxi', ':slug' => $slug]);
        $package = $stmt->fetch() ?: null;
    } catch (Throwable $e) {
        error_log('Failed to load package: ' . $e->getMessage());
    }
}

if ($package) {
    $pageTitle = $package['title'] . ' — BookMyGaddi';
    $packagePrice = is_numeric($package['price'] ?? null)
        ? '₹' . number_format((float) $package['price'], 0, '.', ',')
        : (string) ($package['price'] ?? '');
    $packageDistance = ($package['distance_in_km'] ?? '') !== '' && is_numeric($package['distance_in_km'])
        ? number_format((float) $package['distance_in_km'], 0) . ' km'
        : (string) ($package['distance_in_km'] ?? '');

    $packageContentRaw = trim((string) ($package['content'] ?? ''));
    $packageContentHtml = '';
    if ($packageContentRaw !== '') {
        $allowedTags = '<table><tr><td><th><tbody><thead><tfoot><caption><colgroup><col><tr><td><th><tbody><thead><tfoot><caption><colgroup><col><p><br><br/><strong><b><em><i><ul><ol><li><h2><h3><h4>';
        $packageContentHtml = str_contains($packageContentRaw, '<')
            ? strip_tags($packageContentRaw, $allowedTags)
            : nl2br(htmlspecialchars($packageContentRaw, ENT_QUOTES, 'UTF-8'));
    }

    $badgeText = trim((string) ($package['badge'] ?? ''));
    $badgeClass = 'card-badge';
    if ($badgeText !== '') {
        $badgeLower = strtolower($badgeText);
        if (str_contains($badgeLower, 'new')) {
            $badgeClass .= ' new';
        } elseif (str_contains($badgeLower, 'hot') || str_contains($badgeLower, 'popular') || str_contains($badgeLower, 'deal')) {
            $badgeClass .= ' hot';
        }
    }
}

$pageTitle = $package['title'];
$pageDescription = $package['meta_description'];
$pageKeywords = $package['page_keywords'];
$pageAuthor = "BookMyGaddi";
$pageRobots = 'index, follow';

$activeNav = 'taxi';
$pageScript = '/assets/js/contact-form.js';
$pageStylesheet = '/assets/css/taxi-contact.css';

$contactFormPrefix = 'taxi';
$contactTitle = 'Contact Us';
$contactSubtitle = 'Share your trip details and we will get back to you shortly.';
$contactApiUrl = '/api/contact.php';
$contactServiceType = 'taxi';

require_once __DIR__ . '/../includes/head.php';
require_once __DIR__ . '/../includes/header.php';



?>

<main class="taxi-contact-page">
  <div class="taxi-contact-grid">
    <div class="taxi-contact-info">
      <?php if ($package): ?>
        <?php if (!empty($package['image_url'])): ?>
        <div class="taxi-package-hero-wrap">
          <img class="taxi-package-hero" src="<?= htmlspecialchars($package['image_url'], ENT_QUOTES, 'UTF-8') ?>" alt="<?= htmlspecialchars($package['title'], ENT_QUOTES, 'UTF-8') ?>">
          <?php if (!empty($badgeText)): ?>
          <span class="<?= htmlspecialchars($badgeClass, ENT_QUOTES, 'UTF-8') ?> taxi-package-badge-overlay"><?= htmlspecialchars($badgeText, ENT_QUOTES, 'UTF-8') ?></span>
          <?php endif; ?>
          <?php if (!empty($package['rating'])): ?>
          <p class="taxi-package-rating-overlay">
            <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
            <?= htmlspecialchars($package['rating'], ENT_QUOTES, 'UTF-8') ?>
          </p>
          <?php endif; ?>
        </div>
        <?php elseif (!empty($package['badge'])): ?>
        <span class="taxi-package-badge"><?= htmlspecialchars($package['badge'], ENT_QUOTES, 'UTF-8') ?></span>
        <?php endif; ?>
        <?php if (empty($package['image_url']) && !empty($package['rating'])): ?>
        <p class="taxi-package-rating">
          <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
          <?= htmlspecialchars($package['rating'], ENT_QUOTES, 'UTF-8') ?>
        </p>
        <?php endif; ?>
        <h2><?= htmlspecialchars($package['title'], ENT_QUOTES, 'UTF-8') ?></h1>
        <?php if (!empty($package['tags'])): ?>
        <p class="taxi-package-tags"><?= htmlspecialchars($package['tags'], ENT_QUOTES, 'UTF-8') ?></p>
        <?php endif; ?>
        <?php if (!empty($packageContentHtml)): ?>
        <div class="taxi-package-content">
          <div class="taxi-package-content-body"><?= $packageContentHtml ?></div>
        </div>
        <?php endif; ?>
        <div class="taxi-package-stats">
          <?php if (!empty($package['duration'])): ?>
          <div class="taxi-stat">
            <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
            <span class="taxi-stat-label">Duration</span>
            <span class="taxi-stat-value"><?= htmlspecialchars($package['duration'], ENT_QUOTES, 'UTF-8') ?></span>
          </div>
          <?php endif; ?>
          <?php if (!empty($package['vehicle_type'])): ?>
          <div class="taxi-stat">
            <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round"><path d="M7 17m-2 0a2 2 0 1 0 4 0a2 2 0 1 0-4 0"/><path d="M17 17m-2 0a2 2 0 1 0 4 0a2 2 0 1 0-4 0"/><path d="M5 17H3v-6l2-5h9l4 5h1a2 2 0 0 1 2 2v4h-2"/></svg>
            <span class="taxi-stat-label">Vehicle</span>
            <span class="taxi-stat-value"><?= htmlspecialchars($package['vehicle_type'], ENT_QUOTES, 'UTF-8') ?></span>
          </div>
          <?php endif; ?>
          <?php if ($packageDistance !== ''): ?>
          <div class="taxi-stat">
            <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
            <span class="taxi-stat-label">Distance</span>
            <span class="taxi-stat-value"><?= htmlspecialchars($packageDistance, ENT_QUOTES, 'UTF-8') ?></span>
          </div>
          <?php endif; ?>
          <?php if ($packagePrice !== ''): ?>
          <div class="taxi-stat taxi-stat-price">
            <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 3h12"/><path d="M6 8h12"/><path d="M6 13l8.5 8"/><path d="M6 13h3"/><path d="M9 13c6.667 0 6.667-10 0-10"/></svg>
            <span class="taxi-stat-label">Price</span>
            <span class="taxi-stat-value"><?= htmlspecialchars($packagePrice, ENT_QUOTES, 'UTF-8') ?></span>
          </div>
          <?php endif; ?>
        </div>
      <?php else: ?>
        <h1>Package <em>Not Found</em></h1>
        <p>The taxi package you are looking for is unavailable. Use the form to send us your requirements or browse all packages on the home page.</p>
        <p><a class="btn-primary" href="/index.php" style="display:inline-block;margin-top:12px;">View All Packages</a></p>
      <?php endif; ?>
    </div>

    <?php
    $contactPackageSlug = $package['slug'] ?? '';
    require __DIR__ . '/../includes/partials/contact-us.php';
    ?>
  </div>
</main>

<?php
require_once __DIR__ . '/../includes/footer.php';
require_once __DIR__ . '/../includes/scripts.php';

<?php
$pageTitle = 'BookMyGaddi — Explore. Wander. Discover.';
$activeNav = 'taxi';
$pageScript = 'assets/js/index.js';

require_once __DIR__ . '/../includes/config.php';

require_once __DIR__ . '/../includes/head.php';
require_once __DIR__ . '/../includes/header.php';
?>

<?php print_r($_GET) ?>

<?php
require_once __DIR__ . '/../includes/footer.php';
?>
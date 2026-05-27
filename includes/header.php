<?php
$navActiveStyle = ' style="color:var(--gold)"';
?>
<!-- ── HEADER ── -->
<header>
  <a class="logo" href="index.php">
    <div class="logo-icon">
      <svg viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
        <path d="M10 2C7.24 2 5 4.24 5 7c0 3.75 5 11 5 11s5-7.25 5-11c0-2.76-2.24-5-5-5zm0 6.5c-0.83 0-1.5-0.67-1.5-1.5S9.17 5.5 10 5.5s1.5 0.67 1.5 1.5S10.83 8.5 10 8.5z"/>
      </svg>
    </div>
    <div class="logo-text">BookMy<span>Gaddi</span>.in</div>
  </a>

  <nav>
    <a href="index.php"<?= $activeNav === 'taxi' ? $navActiveStyle : '' ?>>Taxi Services</a>
    <a href="tour.php"<?= $activeNav === 'tour' ? $navActiveStyle : '' ?>>Tour Packages</a>
    <a href="bus.php"<?= $activeNav === 'bus' ? $navActiveStyle : '' ?>>Bus Services</a>
    <a href="truck.php"<?= $activeNav === 'truck' ? $navActiveStyle : '' ?>>Truck Services</a>
    <a href="#">About</a>

  </nav>

  <a class="btn-primary btn-call" href="tel:9915235434" aria-label="Call us at 9915235434">
   <strong> Call Us: 9915235434</strong>
  </a>
</header>

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
    <a href="taxi.php"<?= $activeNav === 'taxi' ? $navActiveStyle : '' ?>>Taxi Services</a>
    <a href="index.php#packages"<?= $activeNav === 'tours' ? $navActiveStyle : '' ?>>Tour Packages</a>
    <a href="#">Experiences</a>
    <a href="#">About</a>
    <a href="#">Blog</a>
  </nav>

  <a class="btn-primary" href="#packages">Book Now</a>
</header>

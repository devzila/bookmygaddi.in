// Wishlist toggle
function toggleWish(btn) {
  btn.classList.toggle('liked');
}

// Mobile navigation
(function initMobileNav() {
  const header = document.querySelector('.site-header');
  const nav = document.getElementById('site-nav');
  const toggle = document.querySelector('.nav-toggle');
  const overlay = document.querySelector('.nav-overlay');
  if (!header || !nav || !toggle || !overlay) return;

  function setOpen(open) {
    nav.classList.toggle('is-open', open);
    overlay.classList.toggle('is-visible', open);
    overlay.setAttribute('aria-hidden', open ? 'false' : 'true');
    toggle.setAttribute('aria-expanded', open ? 'true' : 'false');
    toggle.setAttribute('aria-label', open ? 'Close menu' : 'Open menu');
    document.body.classList.toggle('nav-open', open);
  }

  function closeMenu() {
    setOpen(false);
  }

  toggle.addEventListener('click', () => {
    setOpen(!nav.classList.contains('is-open'));
  });

  overlay.addEventListener('click', closeMenu);

  nav.querySelectorAll('a').forEach((link) => {
    link.addEventListener('click', closeMenu);
  });

  window.addEventListener('resize', () => {
    if (window.innerWidth > 768) closeMenu();
  });

  document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape') closeMenu();
  });
})();

// Scroll-triggered header style
window.addEventListener('scroll', () => {
  const header = document.querySelector('.site-header');
  if (!header) return;
  if (window.scrollY > 60) {
    header.style.background = 'rgba(13, 27, 42, 0.97)';
  } else {
    header.style.background = 'rgba(13, 27, 42, 0.85)';
  }
});

// Fade-in keyframe for filtered cards
const fadeStyle = document.createElement('style');
fadeStyle.textContent = '@keyframes fadeIn { from { opacity:0; transform:translateY(12px); } to { opacity:1; transform:translateY(0); } }';
document.head.appendChild(fadeStyle);

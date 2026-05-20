// Wishlist toggle
function toggleWish(btn) {
  btn.classList.toggle('liked');
}

// Scroll-triggered header style
window.addEventListener('scroll', () => {
  const header = document.querySelector('header');
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

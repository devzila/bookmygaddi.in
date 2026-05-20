// Tour package category filter
function filterCards(cat, btn) {
  document.querySelectorAll('.filter-tab').forEach(t => t.classList.remove('active'));
  btn.classList.add('active');

  document.querySelectorAll('.package-card').forEach(card => {
    const cats = card.dataset.cat || '';
    if (cat === 'all' || cats.includes(cat)) {
      card.style.display = '';
      card.style.animation = 'fadeIn 0.4s ease forwards';
    } else {
      card.style.display = 'none';
    }
  });
}

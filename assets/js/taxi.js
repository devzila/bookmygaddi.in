let activeCategory = 'all';

function cardMatchesFilters(card) {
  const destEl = document.getElementById('searchDestination');
  const durEl = document.getElementById('searchDuration');
  const vehEl = document.getElementById('searchVehicle');
  if (!destEl || !durEl || !vehEl) return true;

  const dest = destEl.value;
  const dur = durEl.value;
  const veh = vehEl.value;
  if (dest !== 'all' && card.dataset.dest !== dest) return false;
  if (dur !== 'all' && card.dataset.duration !== dur) return false;
  if (veh !== 'all' && card.dataset.vehicle !== veh) return false;
  const cats = card.dataset.cat || '';
  if (activeCategory !== 'all' && !cats.includes(activeCategory)) return false;
  return true;
}

function applyFilters() {
  document.querySelectorAll('.package-card').forEach(card => {
    if (cardMatchesFilters(card)) {
      card.style.display = '';
      card.style.animation = 'fadeIn 0.4s ease forwards';
    } else {
      card.style.display = 'none';
    }
  });
}

function filterCards(cat, btn) {
  document.querySelectorAll('.filter-tab').forEach(t => t.classList.remove('active'));
  btn.classList.add('active');
  activeCategory = cat;
  applyFilters();
}

document.addEventListener('DOMContentLoaded', () => {
  const searchBtn = document.querySelector('.search-btn');
  if (searchBtn) searchBtn.addEventListener('click', applyFilters);
  ['searchDestination', 'searchDuration', 'searchVehicle'].forEach(id => {
    const el = document.getElementById(id);
    if (el) el.addEventListener('change', applyFilters);
  });
});

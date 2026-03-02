// ── MOBILE NAV ──────────────────────────────────────
function openMob() {
  document.getElementById('mobNav').classList.add('open');
  document.getElementById('mobOverlay').classList.add('open');
  document.body.style.overflow = 'hidden';
}
function closeMob() {
  document.getElementById('mobNav').classList.remove('open');
  document.getElementById('mobOverlay').classList.remove('open');
  document.body.style.overflow = '';
}

// ── STICKY HEADER ────────────────────────────────────
const header = document.getElementById('siteHeader');
window.addEventListener('scroll', () => {
  header.classList.toggle('scrolled', window.scrollY > 50);
}, { passive: true });

// ── SCROLL REVEAL ────────────────────────────────────
// FIX 1: lower threshold to 0.01 so elements trigger earlier
const revealObs = new IntersectionObserver((entries) => {
  entries.forEach(e => {
    if (e.isIntersecting) {
      e.target.classList.add('visible');
      revealObs.unobserve(e.target);
    }
  });
}, { threshold: 0.01, rootMargin: '0px 0px -50px 0px' });

document.querySelectorAll('.reveal, .reveal-left, .reveal-right').forEach(el => revealObs.observe(el));

// FIX 3: Fallback — force-show ALL reveal elements after 400ms
// This guarantees nothing stays invisible on direct page landings
setTimeout(() => {
  document.querySelectorAll('.reveal, .reveal-left, .reveal-right').forEach(el => {
    el.classList.add('visible');
  });
}, 400);

// ── FAQ ACCORDION ────────────────────────────────────
document.querySelectorAll('.faq-q').forEach(btn => {
  btn.addEventListener('click', () => {
    const item = btn.closest('.faq-item');
    const isOpen = item.classList.contains('open');
    document.querySelectorAll('.faq-item.open').forEach(i => i.classList.remove('open'));
    if (!isOpen) item.classList.add('open');
  });
});

// ── SMOOTH SCROLL for anchor links ───────────────────
document.querySelectorAll('a[href^="#"]').forEach(a => {
  a.addEventListener('click', e => {
    const target = document.querySelector(a.getAttribute('href'));
    if (target) {
      e.preventDefault();
      target.scrollIntoView({ behavior: 'smooth' });
    }
  });
});

// ── COUNTER ANIMATION ────────────────────────────────
function animateCounter(el) {
  const target = parseInt(el.dataset.count, 10);
  const suffix = el.dataset.suffix || '';
  let current = 0;
  const step = Math.max(1, Math.ceil(target / 60));
  const timer = setInterval(() => {
    current = Math.min(current + step, target);
    el.textContent = current.toLocaleString('en-IN') + suffix;
    if (current >= target) clearInterval(timer);
  }, 20);
}

const counterObs = new IntersectionObserver((entries) => {
  entries.forEach(e => {
    if (e.isIntersecting) {
      e.target.querySelectorAll('[data-count]').forEach(animateCounter);
      counterObs.unobserve(e.target);
    }
  });
}, { threshold: 0.4 });

document.querySelectorAll('.stats-row, .hero-stats').forEach(el => counterObs.observe(el));
// ── THEME TOGGLE ─────────────────────────────────────
// ── THEME TOGGLE UNIFIED LOGIC ───────────────────────
function toggleTheme() {
  const body = document.body;
  // Change to toggle 'dark-theme'
  const isDark = body.classList.toggle('dark-theme');
  localStorage.setItem('bizi-theme', isDark ? 'dark' : 'light');
}

(function() {
  const body = document.body;

  // Set default behavior: If 'dark' is saved, apply it. 
  // Otherwise, it stays light (the new default).
  if (localStorage.getItem('bizi-theme') === 'dark') {
    body.classList.add('dark-theme');
  }

  document.addEventListener('click', function(e) {
    const btn = e.target.closest('#themeToggle, .theme-toggle');
    if (btn) {
      e.preventDefault();
      toggleTheme();
    }
  });
})();
/* ===================================================
   Portfolio Kleiton Ferreira — app.js
   Scroll reveal, navbar, mobile menu
   =================================================== */

// ---- Navbar scroll effect ----
const navbar = document.getElementById('navbar');
window.addEventListener('scroll', () => {
  if (window.scrollY > 40) {
    navbar.classList.add('scrolled');
  } else {
    navbar.classList.remove('scrolled');
  }
}, { passive: true });

// ---- Mobile menu ----
const menuBtn = document.getElementById('menuBtn');
const mobileMenu = document.getElementById('mobileMenu');
menuBtn?.addEventListener('click', () => {
  mobileMenu.classList.toggle('hidden');
});
function closeMobile() {
  mobileMenu?.classList.add('hidden');
}

// ---- Scroll Reveal ----
const revealEls = document.querySelectorAll('.reveal');

const revealObserver = new IntersectionObserver((entries) => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      entry.target.classList.add('visible');
      // Stagger siblings
      const siblings = entry.target.parentElement?.querySelectorAll('.reveal');
      if (siblings) {
        let delay = 0;
        siblings.forEach(sib => {
          if (!sib.classList.contains('visible')) {
            sib.style.transitionDelay = delay + 'ms';
            delay += 80;
          }
        });
      }
    }
  });
}, {
  threshold: 0.12,
  rootMargin: '0px 0px -40px 0px'
});

revealEls.forEach(el => revealObserver.observe(el));

// ---- Smooth active nav link ----
const sections = document.querySelectorAll('section[id]');
const navLinks = document.querySelectorAll('nav a[href^="#"]');

const sectionObserver = new IntersectionObserver((entries) => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      navLinks.forEach(link => {
        link.classList.remove('text-ink');
        if (link.getAttribute('href') === '#' + entry.target.id) {
          link.classList.add('text-ink');
        }
      });
    }
  });
}, { threshold: 0.4 });

sections.forEach(s => sectionObserver.observe(s));

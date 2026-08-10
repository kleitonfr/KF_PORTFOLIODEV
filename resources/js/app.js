// ============================================================
// Portfolio Kleiton Ferreira — app.js
// Scroll reveal, navbar scrolled, mobile menu
// ============================================================

import './bootstrap';
import gsap from 'gsap';
import { ScrollTrigger } from 'gsap/ScrollTrigger';
gsap.registerPlugin(ScrollTrigger);

const menuBtn = document.getElementById('menuBtn');
const mobileMenu = document.getElementById('mobileMenu');

menuBtn?.addEventListener('click', () => {
    const isHidden = mobileMenu?.classList.toggle('hidden');
    menuBtn.setAttribute('aria-expanded', isHidden ? 'false' : 'true');
    menuBtn.textContent = isHidden ? 'Menu' : 'Fechar';
});

window.closeMobile = () => {
    mobileMenu?.classList.add('hidden');
    menuBtn?.setAttribute('aria-expanded', 'false');
    if (menuBtn) menuBtn.textContent = 'Menu';
};

const revealEls = document.querySelectorAll('.reveal');
const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
        if (!entry.isIntersecting) return;

        const siblings = [...(entry.target.parentElement?.querySelectorAll('.reveal') ?? [])];
        let delay = 0;

        siblings.forEach((sib) => {
            if (!sib.classList.contains('visible')) {
                sib.style.transitionDelay = `${delay}ms`;
                delay += 80;
            }
        });

        entry.target.classList.add('visible');
    });
}, {
    threshold: 0.12,
    rootMargin: '0px 0px -36px 0px',
});

revealEls.forEach((el) => observer.observe(el));

const sections = document.querySelectorAll('section[id]');
const navLinks = document.querySelectorAll('nav a[href^="#"]');

const sectionObs = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
        if (!entry.isIntersecting) return;

        navLinks.forEach((link) => {
            const active = link.getAttribute('href') === `#${entry.target.id}`;
            link.classList.toggle('text-sun', active);
            link.classList.toggle('text-white', !active);
        });
    });
}, { threshold: 0.4 });

sections.forEach((section) => sectionObs.observe(section));

// ── Navbar: borda/sombra ao rolar ──
const navbar = document.getElementById('navbar');
const toggleNavbarScrolled = () => navbar?.classList.toggle('is-scrolled', window.scrollY > 12);
toggleNavbarScrolled();
window.addEventListener('scroll', toggleNavbarScrolled, { passive: true });

// ── Lightbox: qualquer elemento com [data-lightbox-trigger] abre a imagem ampliada ──
const lightbox = document.getElementById('lightbox');
const lightboxImage = document.getElementById('lightboxImage');
const lightboxClose = document.getElementById('lightboxClose');

const openLightbox = (src, alt = '') => {
    if (!lightbox || !lightboxImage) return;
    lightboxImage.src = src;
    lightboxImage.alt = alt;
    lightbox.classList.add('is-open');
    document.body.style.overflow = 'hidden';
};

const closeLightbox = () => {
    if (!lightbox) return;
    lightbox.classList.remove('is-open');
    document.body.style.overflow = '';
};

document.querySelectorAll('[data-lightbox-trigger]').forEach((el) => {
    el.addEventListener('click', () => {
        openLightbox(el.getAttribute('data-lightbox-src'), el.getAttribute('aria-label') || '');
    });
});

lightboxClose?.addEventListener('click', closeLightbox);
lightbox?.addEventListener('click', (e) => { if (e.target === lightbox) closeLightbox(); });
document.addEventListener('keydown', (e) => { if (e.key === 'Escape') closeLightbox(); });



/* Animações realizadas com GSAP (biblioteca de controle de animações) e ScrollTrigger (plugin do GSAP para animações baseadas em rolagem) */


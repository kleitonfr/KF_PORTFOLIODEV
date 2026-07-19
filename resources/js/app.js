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
    mobileMenu?.classList.toggle('hidden');
});

window.closeMobile = () => mobileMenu?.classList.add('hidden');

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



/* Animações realizadas com GSAP (biblioteca de controle de animações) e ScrollTrigger (plugin do GSAP para animações baseadas em rolagem) */


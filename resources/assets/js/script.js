// ============================================
// Dr. Rahul B Varma - Main JavaScript
// ============================================

// Initialize AOS (Animate On Scroll)
document.addEventListener('DOMContentLoaded', function() {
    if (typeof AOS !== 'undefined') {
        AOS.init({
            duration: 800,
            easing: 'ease-out-cubic',
            once: true,
            offset: 100,
            delay: 0
        });
    }
});

// Navbar Scroll Effect
const header = document.querySelector('.site-header');
let lastScroll = 0;

if (header) {
    window.addEventListener('scroll', function() {
        const currentScroll = window.pageYOffset;
        
        if (currentScroll > 50) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }
        
        lastScroll = currentScroll;
    });
}

// Mobile full-screen sidebar (single navbar for mobile)
(function() {
    var sidebar = document.getElementById('mobileSidebar');
    var backdrop = document.getElementById('mobileSidebarBackdrop');
    var toggler = document.getElementById('mobileMenuToggler');
    var closeBtn = document.getElementById('mobileSidebarClose');
    if (!sidebar || !toggler) return;

    function openSidebar() {
        sidebar.classList.add('is-open');
        sidebar.setAttribute('aria-hidden', 'false');
        if (backdrop) backdrop.classList.add('is-visible');
        toggler.classList.remove('collapsed');
        toggler.setAttribute('aria-expanded', 'true');
        document.body.style.overflow = 'hidden';
    }
    function closeSidebar() {
        sidebar.classList.remove('is-open');
        sidebar.setAttribute('aria-hidden', 'true');
        if (backdrop) backdrop.classList.remove('is-visible');
        toggler.classList.add('collapsed');
        toggler.setAttribute('aria-expanded', 'false');
        document.body.style.overflow = '';
        document.querySelectorAll('.mobile-sidebar__sublist.is-open').forEach(function(el) { el.classList.remove('is-open'); });
        document.querySelectorAll('.mobile-sidebar__expand.is-open').forEach(function(el) { el.classList.remove('is-open'); });
    }

    toggler.addEventListener('click', function(e) {
        e.preventDefault();
        e.stopPropagation();
        if (sidebar.classList.contains('is-open')) closeSidebar();
        else openSidebar();
    });
    if (closeBtn) closeBtn.addEventListener('click', closeSidebar);
    if (backdrop) backdrop.addEventListener('click', closeSidebar);

    document.querySelectorAll('.mobile-sidebar__expand').forEach(function(btn) {
        btn.addEventListener('click', function() {
            var subId = this.getAttribute('data-sub');
            var sub = subId ? document.getElementById(subId) : null;
            if (sub) {
                sub.classList.toggle('is-open');
                this.classList.toggle('is-open');
            }
        });
    });

    window.addEventListener('resize', function() {
        if (window.innerWidth >= 992 && sidebar.classList.contains('is-open')) closeSidebar();
    });
})();

// Stats Counter Animation
function animateCounter(element, target, duration = 2000) {
    let start = 0;
    const increment = target / (duration / 16);
    const timer = setInterval(() => {
        start += increment;
        if (start >= target) {
            element.textContent = target.toLocaleString();
            clearInterval(timer);
        } else {
            element.textContent = Math.floor(start).toLocaleString();
        }
    }, 16);
}

// Intersection Observer for Stats
const statsObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            const statNumber = entry.target.querySelector('.stat-number');
            if (statNumber) {
                const count = parseInt(statNumber.getAttribute('data-count'));
                if (count && !statNumber.classList.contains('animated')) {
                    statNumber.classList.add('animated');
                    animateCounter(statNumber, count);
                }
            }
            statsObserver.unobserve(entry.target);
        }
    });
}, { threshold: 0.5 });

document.addEventListener('DOMContentLoaded', function() {
    const statCards = document.querySelectorAll('.stat-card');
    statCards.forEach(card => {
        statsObserver.observe(card);
    });
});

// Testimonial Slider
let currentTestimonial = 0;
const testimonialSlides = document.querySelectorAll('.testimonial-slide');
const testimonialDots = document.querySelectorAll('.dot');

function showTestimonial(index) {
    testimonialSlides.forEach((slide, i) => {
        slide.classList.remove('active');
        if (i === index) {
            slide.classList.add('active');
        }
    });
    
    testimonialDots.forEach((dot, i) => {
        dot.classList.remove('active');
        if (i === index) {
            dot.classList.add('active');
        }
    });
}

function nextTestimonial() {
    currentTestimonial = (currentTestimonial + 1) % testimonialSlides.length;
    showTestimonial(currentTestimonial);
}

// Auto-play testimonials
let testimonialInterval;

function startTestimonialSlider() {
    if (testimonialSlides.length > 0) {
        testimonialInterval = setInterval(nextTestimonial, 5000);
    }
}

// Dot navigation for testimonials
testimonialDots.forEach((dot, index) => {
    dot.addEventListener('click', function() {
        currentTestimonial = index;
        showTestimonial(currentTestimonial);
        clearInterval(testimonialInterval);
        startTestimonialSlider();
    });
});

// Start slider on page load
document.addEventListener('DOMContentLoaded', function() {
    if (testimonialSlides.length > 0) {
        startTestimonialSlider();
    }
});

// Back to Top (Up Arrow) – show after scroll, smooth scroll on click
(function() {
    const backToTop = document.getElementById('backToTop');
    if (!backToTop) return;
    const showAfter = 400;
    function toggleVisibility() {
        if (window.pageYOffset > showAfter) {
            backToTop.classList.add('is-visible');
        } else {
            backToTop.classList.remove('is-visible');
        }
    }
    window.addEventListener('scroll', toggleVisibility, { passive: true });
    toggleVisibility();
    backToTop.addEventListener('click', function(e) {
        e.preventDefault();
        window.scrollTo({ top: 0, behavior: 'smooth' });
    });
})();

// Smooth Scroll for Anchor Links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
        const href = this.getAttribute('href');
        if (href !== '#' && href !== '#contact') {
            e.preventDefault();
            const target = document.querySelector(href);
            if (target) {
                const headerOffset = 80;
                const elementPosition = target.getBoundingClientRect().top;
                const offsetPosition = elementPosition + window.pageYOffset - headerOffset;

                window.scrollTo({
                    top: offsetPosition,
                    behavior: 'smooth'
                });
                
                // Close mobile menu if open
                closeMobileNav();
            }
        }
    });
});

// Active Menu Link Highlight
function setActiveMenuLink() {
    const currentPath = window.location.pathname;
    const navLinks = document.querySelectorAll('.nav-link');
    
    navLinks.forEach(link => {
        const href = link.getAttribute('href');
        if (href === currentPath || (currentPath === '/' && href === '#home')) {
            link.classList.add('active');
        } else {
            link.classList.remove('active');
        }
    });
}

document.addEventListener('DOMContentLoaded', function() {
    setActiveMenuLink();
});

// Gallery Lightbox (Magnific Popup for .magnific-popup-link on gallery page)
if (typeof $ !== 'undefined' && $.fn.magnificPopup) {
    $(document).ready(function() {
        if ($('.magnific-popup-link').length) {
            $('.magnific-popup-link').magnificPopup({
                type: 'image',
                gallery: { enabled: true },
                mainClass: 'mfp-with-zoom',
                removalDelay: 300,
                titleSrc: function() {
                    return '';
                }
            });
        }
    });
}

// Optional: GSAP Hero Text Animation
if (typeof gsap !== 'undefined') {
    document.addEventListener('DOMContentLoaded', function() {
        const heroTitle = document.querySelector('.hero-title');
        if (heroTitle) {
            gsap.from(heroTitle, {
                duration: 1,
                y: 30,
                opacity: 0,
                ease: 'power3.out'
            });
        }
    });
}

// Console welcome message
console.log('%cDr. Rahul B Varma Website', 'color: #006F8F; font-size: 20px; font-weight: bold;');
console.log('%cExpert Medical Care | Critical Care & Diabetes Specialist', 'color: #A6B7BF; font-size: 14px;');

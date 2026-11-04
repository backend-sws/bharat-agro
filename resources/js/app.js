import { gsap } from 'gsap';
import { ScrollTrigger } from 'gsap/ScrollTrigger';

gsap.registerPlugin(ScrollTrigger);

// Make gsap available globally if needed
window.gsap = gsap;
window.ScrollTrigger = ScrollTrigger;

document.addEventListener('DOMContentLoaded', () => {
    // 1. Hero Slider Animation
    const slides = document.querySelectorAll('.hero-slide');
    const dots = document.querySelectorAll('.hero-dot');
    let currentSlide = 0;
    let slideInterval;

    if (slides.length > 0) {
        function showSlide(index) {
            slides.forEach((slide, i) => {
                if (i === index) {
                    slide.classList.remove('opacity-0', 'pointer-events-none');
                    slide.classList.add('opacity-100', 'pointer-events-auto');

                    const textElements = slide.querySelectorAll('.slide-animate');
                    gsap.fromTo(
                        textElements,
                        { opacity: 0, y: 30 },
                        { opacity: 1, y: 0, duration: 0.8, stagger: 0.15, ease: 'power2.out' }
                    );
                } else {
                    slide.classList.add('opacity-0', 'pointer-events-none');
                    slide.classList.remove('opacity-100', 'pointer-events-auto');
                }
            });

            dots.forEach((dot, i) => {
                if (i === index) {
                    dot.classList.add('w-8', 'bg-amber-400');
                    dot.classList.remove('w-3', 'bg-white/50');
                } else {
                    dot.classList.remove('w-8', 'bg-amber-400');
                    dot.classList.add('w-3', 'bg-white/50');
                }
            });

            currentSlide = index;
        }

        function nextSlide() {
            const next = (currentSlide + 1) % slides.length;
            showSlide(next);
        }

        function prevSlide() {
            const prev = (currentSlide - 1 + slides.length) % slides.length;
            showSlide(prev);
        }

        const nextBtn = document.getElementById('hero-next');
        const prevBtn = document.getElementById('hero-prev');

        if (nextBtn) nextBtn.addEventListener('click', () => { nextSlide(); resetTimer(); });
        if (prevBtn) prevBtn.addEventListener('click', () => { prevSlide(); resetTimer(); });

        dots.forEach((dot, idx) => {
            dot.addEventListener('click', () => {
                showSlide(idx);
                resetTimer();
            });
        });

        function resetTimer() {
            clearInterval(slideInterval);
            slideInterval = setInterval(nextSlide, 5000);
        }

        showSlide(0);
        resetTimer();
    }

    // 2. ScrollTrigger Animations
    gsap.utils.toArray('.gsap-fade-up').forEach((elem) => {
        gsap.from(elem, {
            scrollTrigger: {
                trigger: elem,
                start: 'top 85%',
                toggleActions: 'play none none none',
            },
            opacity: 0,
            y: 40,
            duration: 0.8,
            ease: 'power3.out',
        });
    });

    gsap.utils.toArray('.gsap-stagger-parent').forEach((parent) => {
        const items = parent.querySelectorAll('.gsap-stagger-item');
        if (items.length > 0) {
            gsap.from(items, {
                scrollTrigger: {
                    trigger: parent,
                    start: 'top 80%',
                    toggleActions: 'play none none none',
                },
                opacity: 0,
                y: 35,
                duration: 0.6,
                stagger: 0.1,
                ease: 'power2.out',
            });
        }
    });

    // 3. Stats Counter Animation
    const counterElems = document.querySelectorAll('.stat-counter');
    counterElems.forEach((counter) => {
        const target = parseInt(counter.getAttribute('data-target') || '0', 10);
        const suffix = counter.getAttribute('data-suffix') || '';

        ScrollTrigger.create({
            trigger: counter,
            start: 'top 85%',
            once: true,
            onEnter: () => {
                const obj = { count: 0 };
                gsap.to(obj, {
                    count: target,
                    duration: 2,
                    ease: 'power1.out',
                    onUpdate: () => {
                        counter.textContent = Math.floor(obj.count) + suffix;
                    },
                });
            },
        });
    });

    // 4. Interactive Product Category Filtering (Homepage)
    const filterBtns = document.querySelectorAll('.product-filter-btn');
    const productItems = document.querySelectorAll('.home-product-card');

    filterBtns.forEach((btn) => {
        btn.addEventListener('click', () => {
            filterBtns.forEach((b) => {
                b.classList.remove('bg-blue-900', 'text-white', 'border-blue-900', 'shadow-md');
                b.classList.add('bg-white', 'text-slate-700', 'border-slate-200');
            });
            btn.classList.add('bg-blue-900', 'text-white', 'border-blue-900', 'shadow-md');
            btn.classList.remove('bg-white', 'text-slate-700', 'border-slate-200');

            const selectedCategory = btn.getAttribute('data-category');

            productItems.forEach((card) => {
                const cardCategory = card.getAttribute('data-category');
                if (selectedCategory === 'all' || cardCategory === selectedCategory) {
                    card.style.display = 'block';
                    gsap.fromTo(
                        card,
                        { opacity: 0, scale: 0.95, y: 15 },
                        { opacity: 1, scale: 1, y: 0, duration: 0.4, ease: 'power2.out' }
                    );
                } else {
                    card.style.display = 'none';
                }
            });
        });
    });

    // 5. Quotation Modal
    const quoteModal = document.getElementById('quotation-modal');
    const modalBackdrop = document.getElementById('modal-backdrop');
    const modalContent = document.getElementById('modal-content');
    const machineInput = document.getElementById('quote-machine-name');
    const openModalBtns = document.querySelectorAll('.open-quote-modal');
    const closeModalBtns = document.querySelectorAll('.close-quote-modal');

    function openModal(machineName = '') {
        if (!quoteModal) return;
        if (machineInput && machineName) {
            machineInput.value = machineName;
        }
        quoteModal.classList.remove('hidden');
        document.body.classList.add('overflow-hidden');

        gsap.fromTo(modalBackdrop, { opacity: 0 }, { opacity: 1, duration: 0.25 });
        gsap.fromTo(
            modalContent,
            { opacity: 0, scale: 0.9, y: 20 },
            { opacity: 1, scale: 1, y: 0, duration: 0.35, ease: 'back.out(1.5)' }
        );
    }

    function closeModal() {
        if (!quoteModal) return;
        gsap.to(modalBackdrop, { opacity: 0, duration: 0.2 });
        gsap.to(modalContent, {
            opacity: 0,
            scale: 0.9,
            y: 15,
            duration: 0.2,
            onComplete: () => {
                quoteModal.classList.add('hidden');
                document.body.classList.remove('overflow-hidden');
            },
        });
    }

    openModalBtns.forEach((btn) => {
        btn.addEventListener('click', (e) => {
            e.preventDefault();
            const machine = btn.getAttribute('data-machine') || '';
            openModal(machine);
        });
    });

    closeModalBtns.forEach((btn) => {
        btn.addEventListener('click', (e) => {
            e.preventDefault();
            closeModal();
        });
    });

    if (modalBackdrop) {
        modalBackdrop.addEventListener('click', closeModal);
    }

    // Listen to escape key
    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape' && quoteModal && !quoteModal.classList.contains('hidden')) {
            closeModal();
        }
    });

    // 6. Modern Mobile Menu Drawer & Accordions
    const mobileMenuBtn = document.getElementById('mobile-menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');
    const mobileMenuBackdrop = document.getElementById('mobile-menu-backdrop');
    const hamburgerIcon = document.getElementById('hamburger-icon');
    const closeIcon = document.getElementById('close-icon');

    let isMobileMenuOpen = false;

    function openMobileMenu() {
        if (!mobileMenu) return;
        isMobileMenuOpen = true;

        mobileMenu.classList.remove('-translate-y-4', 'opacity-0', 'pointer-events-none');
        mobileMenu.classList.add('translate-y-0', 'opacity-100', 'pointer-events-auto');

        if (mobileMenuBackdrop) {
            mobileMenuBackdrop.classList.remove('hidden');
            requestAnimationFrame(() => {
                mobileMenuBackdrop.classList.remove('opacity-0');
                mobileMenuBackdrop.classList.add('opacity-100');
            });
        }

        if (hamburgerIcon) hamburgerIcon.classList.add('hidden');
        if (closeIcon) closeIcon.classList.remove('hidden');
        if (mobileMenuBtn) mobileMenuBtn.setAttribute('aria-expanded', 'true');
        document.body.classList.add('overflow-hidden');
    }

    function closeMobileMenu() {
        if (!mobileMenu || !isMobileMenuOpen) return;
        isMobileMenuOpen = false;

        mobileMenu.classList.add('-translate-y-4', 'opacity-0', 'pointer-events-none');
        mobileMenu.classList.remove('translate-y-0', 'opacity-100', 'pointer-events-auto');

        if (mobileMenuBackdrop) {
            mobileMenuBackdrop.classList.add('opacity-0');
            mobileMenuBackdrop.classList.remove('opacity-100');
            setTimeout(() => {
                if (!isMobileMenuOpen) mobileMenuBackdrop.classList.add('hidden');
            }, 300);
        }

        if (hamburgerIcon) hamburgerIcon.classList.remove('hidden');
        if (closeIcon) closeIcon.classList.add('hidden');
        if (mobileMenuBtn) mobileMenuBtn.setAttribute('aria-expanded', 'false');
        document.body.classList.remove('overflow-hidden');
    }

    if (mobileMenuBtn && mobileMenu) {
        mobileMenuBtn.addEventListener('click', (e) => {
            e.stopPropagation();
            if (isMobileMenuOpen) {
                closeMobileMenu();
            } else {
                openMobileMenu();
            }
        });
    }

    if (mobileMenuBackdrop) {
        mobileMenuBackdrop.addEventListener('click', closeMobileMenu);
    }

    // Auto-close drawer on tapping navigation links
    document.querySelectorAll('.mobile-nav-link').forEach((link) => {
        link.addEventListener('click', closeMobileMenu);
    });

    // Close on escape key
    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape' && isMobileMenuOpen) {
            closeMobileMenu();
        }
    });

    // Close mobile menu if resized to desktop viewport (>= 1280px)
    window.addEventListener('resize', () => {
        if (window.innerWidth >= 1280 && isMobileMenuOpen) {
            closeMobileMenu();
        }
    });

    // Mobile Catalog Accordion
    const mobileCatalogBtn = document.getElementById('mobile-catalog-btn');
    const mobileCatalogSubmenu = document.getElementById('mobile-catalog-submenu');
    const mobileCatalogArrow = document.getElementById('mobile-catalog-arrow');

    if (mobileCatalogBtn && mobileCatalogSubmenu) {
        mobileCatalogBtn.addEventListener('click', (e) => {
            e.stopPropagation();
            const isHidden = mobileCatalogSubmenu.classList.contains('hidden');
            if (isHidden) {
                mobileCatalogSubmenu.classList.remove('hidden');
                if (mobileCatalogArrow) mobileCatalogArrow.classList.add('rotate-180');
            } else {
                mobileCatalogSubmenu.classList.add('hidden');
                if (mobileCatalogArrow) mobileCatalogArrow.classList.remove('rotate-180');
            }
        });
    }

    // Mobile Schemes Accordion
    const mobileSchemesBtn = document.getElementById('mobile-schemes-btn');
    const mobileSchemesSubmenu = document.getElementById('mobile-schemes-submenu');
    const mobileSchemesArrow = document.getElementById('mobile-schemes-arrow');

    if (mobileSchemesBtn && mobileSchemesSubmenu) {
        mobileSchemesBtn.addEventListener('click', (e) => {
            e.stopPropagation();
            const isHidden = mobileSchemesSubmenu.classList.contains('hidden');
            if (isHidden) {
                mobileSchemesSubmenu.classList.remove('hidden');
                if (mobileSchemesArrow) mobileSchemesArrow.classList.add('rotate-180');
            } else {
                mobileSchemesSubmenu.classList.add('hidden');
                if (mobileSchemesArrow) mobileSchemesArrow.classList.remove('rotate-180');
            }
        });
    }
});

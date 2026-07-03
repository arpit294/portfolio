// GSAP & ScrollTrigger Animations, Typed.js Setup
document.addEventListener('DOMContentLoaded', () => {
    // 1. Preloader Transition
    const preloader = document.getElementById('preloader');
    const barFill = document.querySelector('.loader-bar-fill');
    
    if (preloader && barFill) {
        setTimeout(() => { barFill.style.width = '40%'; }, 200);
        setTimeout(() => { barFill.style.width = '75%'; }, 1000);
        setTimeout(() => { barFill.style.width = '100%'; }, 1800);
        setTimeout(() => {
            preloader.classList.add('loaded');
            document.body.style.overflowY = 'auto';
            initHeroAnimations();
        }, 2400);
    } else {
        initHeroAnimations();
    }

    // 2. Typed.js Initialization
    if (typeof Typed !== 'undefined') {
        const typedEl = document.getElementById('typed-text');
        if (typedEl) {
            new Typed('#typed-text', {
                strings: [
                    'PHP Laravel Developer',
                    'Backend System Architect',
                    'RESTful API Specialist',
                    'Cloud Engineer (Learning)'
                ],
                typeSpeed: 50,
                backSpeed: 30,
                backDelay: 2000,
                loop: true
            });
        }
    }

    // 3. AOS Library
    if (typeof AOS !== 'undefined') {
        AOS.init({
            duration: 800,
            once: true,
            offset: 80,
            easing: 'ease-out-cubic'
        });
    }

    function initHeroAnimations() {
        if (typeof gsap === 'undefined') return;
        gsap.registerPlugin(ScrollTrigger);

        // Hero text reveal
        gsap.from('.hero-content > *', {
            y: 50,
            opacity: 0,
            duration: 1,
            stagger: 0.15,
            ease: 'power3.out'
        });

        gsap.from('.hero-illustration', {
            scale: 0.85,
            opacity: 0,
            duration: 1.2,
            ease: 'back.out(1.5)',
            delay: 0.3
        });

        // Parallax background text
        gsap.to('.hero-bg-text', {
            yPercent: 40,
            ease: 'none',
            scrollTrigger: {
                trigger: '.hero-section',
                start: 'top top',
                end: 'bottom top',
                scrub: true
            }
        });

        // Animated Stats Counters
        const statsCounters = document.querySelectorAll('.counter-val');
        statsCounters.forEach(counter => {
            let targetText = counter.getAttribute('data-target') || '0';
            let numericVal = parseInt(targetText.replace(/\D/g, '')) || 0;
            let suffix = targetText.replace(/[0-9]/g, '');

            ScrollTrigger.create({
                trigger: counter,
                start: 'top 85%',
                once: true,
                onEnter: () => {
                    let obj = { val: 0 };
                    gsap.to(obj, {
                        val: numericVal,
                        duration: 2,
                        ease: 'power2.out',
                        onUpdate: () => {
                            counter.innerText = Math.floor(obj.val) + suffix;
                        }
                    });
                }
            });
        });

        // Staggered glass cards reveal on scroll
        gsap.utils.toArray('.stagger-grid').forEach(grid => {
            const cards = grid.querySelectorAll('.glass-card');
            gsap.from(cards, {
                y: 60,
                opacity: 0,
                duration: 0.8,
                stagger: 0.12,
                ease: 'power3.out',
                scrollTrigger: {
                    trigger: grid,
                    start: 'top 80%'
                }
            });
        });
    }
});

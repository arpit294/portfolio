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

    // 2. Typed.js Initialization (Removed - replaced with static subtitle)
    // if (typeof Typed !== 'undefined') { ... }

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

        // SplitType Cinematic Text Reveals
        if (typeof SplitType !== 'undefined') {
            const splitTitles = new SplitType('.font-heading:not(#typed-text)', { types: 'words, chars' });
            gsap.from(splitTitles.chars, {
                opacity: 0,
                y: 50,
                rotateX: -90,
                stagger: 0.02,
                duration: 1.2,
                ease: 'power4.out',
                scrollTrigger: {
                    trigger: '.hero-section',
                    start: 'top 80%',
                }
            });
            
            // Add scroll trigger for other titles
            document.querySelectorAll('section .font-heading').forEach(title => {
                const split = new SplitType(title, { types: 'chars' });
                gsap.from(split.chars, {
                    opacity: 0,
                    scale: 2,
                    stagger: 0.03,
                    duration: 1,
                    ease: 'expo.out',
                    scrollTrigger: { trigger: title, start: 'top 85%' }
                });
            });
        }

        // Hero content reveal (non-text)
        gsap.from('.hero-content p, .hero-content .d-flex, .unique-name', {
            y: 30,
            opacity: 0,
            duration: 1.5,
            stagger: 0.2,
            ease: 'power3.out',
            delay: 0.5
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

        // Staggered glass cards reveal on scroll with extreme 3D transforms
        // (Commented out to prevent opacity: 0 glitch on scroll)
        /*
        gsap.utils.toArray('.stagger-grid').forEach(grid => {
            const cards = grid.querySelectorAll('.glass-card');
            gsap.from(cards, {
                y: 100,
                z: -200,
                rotateX: 15,
                opacity: 0,
                duration: 1.2,
                stagger: 0.15,
                ease: 'power4.out',
                scrollTrigger: {
                    trigger: grid,
                    start: 'top 85%'
                }
            });
        });
        */
        
        // Deep Parallax for all sections
        gsap.utils.toArray('section').forEach(sec => {
            gsap.from(sec, {
                y: 50,
                opacity: 0.5,
                duration: 1.5,
                ease: 'power2.out',
                scrollTrigger: {
                    trigger: sec,
                    start: 'top 95%',
                    end: 'top 20%',
                    scrub: 1
                }
            });
        });
    }
});

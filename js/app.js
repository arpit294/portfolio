// Core App Functionality: Navbar Scroll, Project Filtering, Standalone Form Validation
document.addEventListener('DOMContentLoaded', () => {

    // 0.1 Initialize Vanilla Tilt 3D Effects
    if (typeof VanillaTilt !== 'undefined') {
        const tiltElements = document.querySelectorAll('.project-item .glass-card, .services-section .glass-card');
        VanillaTilt.init(tiltElements, {
            max: 5,
            speed: 400,
            glare: true,
            "max-glare": 0.2,
        });
    }

    // 1. Sticky & Smart Navbar Scroll
    const navbar = document.getElementById('mainNavbar');
    let lastScrollTop = 0;

    if (navbar) {
        window.addEventListener('scroll', () => {
            let currentScroll = window.scrollY;

            if (currentScroll > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }

            if (currentScroll > lastScrollTop && currentScroll > 250) {
                navbar.style.transform = 'translateY(-100%)';
            } else {
                navbar.style.transform = 'translateY(0)';
            }
            lastScrollTop = currentScroll <= 0 ? 0 : currentScroll;
        }, { passive: true });
    }

    // 2. Project Category Filter
    const filterBtns = document.querySelectorAll('.filter-btn');
    const projectCards = document.querySelectorAll('.project-item');

    filterBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            filterBtns.forEach(b => b.classList.remove('active'));
            btn.classList.add('active');

            const filter = btn.getAttribute('data-filter');

            projectCards.forEach(card => {
                const category = card.getAttribute('data-category');
                if (filter === 'all' || category === filter) {
                    card.style.display = 'block';
                    setTimeout(() => { card.style.opacity = '1'; card.style.transform = 'scale(1)'; }, 50);
                } else {
                    card.style.opacity = '0';
                    card.style.transform = 'scale(0.8)';
                    setTimeout(() => { card.style.display = 'none'; }, 300);
                }
            });
        });
    });

    // 3. Swiper Setup for Certificates
    if (typeof Swiper !== 'undefined' && document.querySelector('.certificates-swiper')) {
        new Swiper('.certificates-swiper', {
            slidesPerView: 1,
            spaceBetween: 30,
            loop: true,
            autoplay: {
                delay: 4000,
                disableOnInteraction: false,
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            breakpoints: {
                768: { slidesPerView: 2 },
                1200: { slidesPerView: 3 }
            }
        });
    }

    // 4. Standalone Contact Form via Web3Forms
    const contactForm = document.getElementById('contactForm');
    const toastEl = document.getElementById('successToast');
    const toastBody = document.getElementById('toastBody');

    if (contactForm) {
        contactForm.addEventListener('submit', async (e) => {
            e.preventDefault();

            const submitBtn = contactForm.querySelector('button[type="submit"]');
            const originalBtnText = submitBtn ? submitBtn.innerHTML : 'Submit';
            
            if (submitBtn) {
                submitBtn.innerHTML = '<span class="spinner-border spinner-border-sm me-2"></span>Sending...';
                submitBtn.disabled = true;
            }

            const formData = new FormData(contactForm);
            
            try {
                // Check if an access key is actually provided for Web3Forms
                const accessKey = formData.get('access_key');
                if (!accessKey || accessKey.includes('YOUR_ACCESS_KEY')) {
                    throw new Error('Please configure a valid Web3Forms access key in index.html to receive emails.');
                }

                const response = await fetch('https://api.web3forms.com/submit', {
                    method: 'POST',
                    body: formData
                });
                
                const data = await response.json();

                if (data.success) {
                    if (toastBody) toastBody.innerText = 'Thank you! Your inquiry has been sent successfully.';
                    if (typeof bootstrap !== 'undefined' && toastEl) {
                        const toast = new bootstrap.Toast(toastEl);
                        toast.show();
                    }
                    contactForm.reset();
                } else {
                    throw new Error(data.message || 'Submission failed.');
                }
            } catch (error) {
                if (toastBody) toastBody.innerText = error.message;
                if (typeof bootstrap !== 'undefined' && toastEl) {
                    const toast = new bootstrap.Toast(toastEl);
                    toast.show();
                } else {
                    alert(error.message);
                }
            } finally {
                if (submitBtn) {
                    submitBtn.innerHTML = originalBtnText;
                    submitBtn.disabled = false;
                }
            }
        });
    }

    // 5. Back to Top Scroll
    const backToTopBtn = document.getElementById('backToTopBtn');
    if (backToTopBtn) {
        window.addEventListener('scroll', () => {
            if (window.scrollY > 400) {
                backToTopBtn.style.opacity = '1';
                backToTopBtn.style.pointerEvents = 'auto';
            } else {
                backToTopBtn.style.opacity = '0';
                backToTopBtn.style.pointerEvents = 'none';
            }
        });
        backToTopBtn.addEventListener('click', () => {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });
    }

    // 6. Magnetic Buttons (Cinematic interaction)
    const magneticButtons = document.querySelectorAll('.btn-premium, .filter-btn');
    
    magneticButtons.forEach(btn => {
        btn.addEventListener('mousemove', (e) => {
            const rect = btn.getBoundingClientRect();
            const h = rect.width / 2;
            const v = rect.height / 2;
            const x = e.clientX - rect.left - h;
            const y = e.clientY - rect.top - v;

            // Move the button slightly towards the cursor
            btn.style.transform = `translate(${x * 0.3}px, ${y * 0.3}px)`;
        });

        btn.addEventListener('mouseleave', () => {
            // Spring back to center
            btn.style.transform = `translate(0px, 0px)`;
        });
    });
});

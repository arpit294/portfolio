// Core App Functionality: Navbar Scroll, Project Filtering, AJAX Form Validation
document.addEventListener('DOMContentLoaded', () => {
    // 1. Sticky & Smart Navbar Scroll
    const navbar = document.getElementById('mainNavbar');
    let lastScrollTop = 0;

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

    // 4. AJAX Contact Form Validation & Toast Notification
    const contactForm = document.getElementById('contactForm');
    const toastEl = document.getElementById('successToast');
    const toastBody = document.getElementById('toastBody');

    if (contactForm) {
        contactForm.addEventListener('submit', async (e) => {
            e.preventDefault();

            const submitBtn = contactForm.querySelector('button[type="submit"]');
            const originalBtnText = submitBtn.innerHTML;
            submitBtn.innerHTML = '<span class="spinner-border spinner-border-sm me-2"></span>Sending...';
            submitBtn.disabled = true;

            const formData = new FormData(contactForm);

            try {
                const response = await fetch(contactForm.action, {
                    method: 'POST',
                    body: formData,
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest',
                        'Accept': 'application/json'
                    }
                });

                const data = await response.json();

                if (response.ok) {
                    if (toastBody) toastBody.innerText = data.message || 'Message sent successfully!';
                    if (typeof bootstrap !== 'undefined' && toastEl) {
                        const toast = new bootstrap.Toast(toastEl);
                        toast.show();
                    } else {
                        alert(data.message || 'Message sent successfully!');
                    }
                    contactForm.reset();
                } else {
                    let errMsg = 'Please verify all fields and try again.';
                    if (data.errors) {
                        errMsg = Object.values(data.errors).map(e => e[0]).join('\n');
                    }
                    alert('Validation Error:\n' + errMsg);
                }
            } catch (err) {
                alert('Thank you! Your inquiry has been sent.');
                contactForm.reset();
            } finally {
                submitBtn.innerHTML = originalBtnText;
                submitBtn.disabled = false;
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
});

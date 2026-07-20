// Custom Smooth Magnetic Cursor
document.addEventListener('DOMContentLoaded', () => {
    const cursorDot = document.getElementById('cursor-dot');
    const cursorRing = document.getElementById('cursor-ring');

    if (!cursorDot || !cursorRing) return;

    let mouseX = -100, mouseY = -100;
    let ringX = -100, ringY = -100;

    window.addEventListener('mousemove', (e) => {
        mouseX = e.clientX;
        mouseY = e.clientY;
        cursorDot.style.transform = `translate3d(${mouseX}px, ${mouseY}px, 0)`;
    });

    function renderRing() {
        // Increased from 0.15 to 0.6 to remove the "late reply" lag while keeping it smooth
        ringX += (mouseX - ringX) * 0.6;
        ringY += (mouseY - ringY) * 0.6;
        cursorRing.style.transform = `translate3d(${ringX}px, ${ringY}px, 0)`;
        requestAnimationFrame(renderRing);
    }
    renderRing();

    // Hover scale and magnetic attraction
    const hoverElements = document.querySelectorAll('a, button, .interactive-card, input, textarea');
    hoverElements.forEach(el => {
        el.addEventListener('mouseenter', () => {
            cursorRing.classList.add('hover-active');
            cursorDot.classList.add('hover-active');
        });
        el.addEventListener('mouseleave', () => {
            cursorRing.classList.remove('hover-active');
            cursorDot.classList.remove('hover-active');
            el.style.transform = '';
        });

        // Magnetic effect for buttons
        if (el.classList.contains('btn-premium') || el.classList.contains('magnetic-btn')) {
            el.addEventListener('mousemove', (e) => {
                const rect = el.getBoundingClientRect();
                const x = e.clientX - rect.left - rect.width / 2;
                const y = e.clientY - rect.top - rect.height / 2;
                el.style.transform = `translate(${x * 0.25}px, ${y * 0.25}px)`;
            });
        }
    });
});

<style>
    @media (pointer: fine) {
        #cursor-dot {
            width: 8px;
            height: 8px;
            background: #00f3ff;
            border-radius: 50%;
            position: fixed;
            top: 0;
            left: 0;
            pointer-events: none;
            z-index: 10000;
            box-shadow: 0 0 10px #00f3ff;
            transition: transform 0.05s linear, width 0.3s ease, height 0.3s ease, background 0.3s ease;
        }
        #cursor-ring {
            width: 40px;
            height: 40px;
            border: 1px solid rgba(0, 243, 255, 0.4);
            border-radius: 50%;
            position: fixed;
            top: -16px;
            left: -16px;
            pointer-events: none;
            z-index: 9999;
            transition: transform 0.15s ease-out, border-color 0.3s ease, transform 0.3s ease;
            mix-blend-mode: screen;
        }
        #cursor-dot.hover-active {
            background: #b026ff;
            box-shadow: 0 0 15px #b026ff;
            transform: scale(1.5);
        }
        #cursor-ring.hover-active {
            border-color: #b026ff;
            transform: scale(1.6);
            background: rgba(176, 38, 255, 0.08);
        }
    }
    @media (pointer: coarse) {
        #cursor-dot, #cursor-ring { display: none !important; }
    }
</style>
<div id="cursor-dot" class="d-none d-lg-block"></div>
<div id="cursor-ring" class="d-none d-lg-block"></div>

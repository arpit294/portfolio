<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Arpit Vadhiyari | PHP Laravel Developer & Backend System Architect</title>
    <meta name="description" content="Award-winning portfolio of Arpit Vadhiyari, an enterprise PHP Laravel Developer specializing in MVC architecture, secure REST APIs, and scalable database solutions.">
    <meta name="keywords" content="Arpit Vadhiyari, PHP Developer, Laravel Developer, Backend Developer, MVC Architecture, AWS Cloud Engineer">
    <meta name="author" content="Arpit Vadhiyari">

    <!-- Favicon -->
    <link rel="icon" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'><rect width='100' height='100' rx='20' fill='%2300f3ff'/><text x='50%' y='68%' font-size='55' font-weight='900' font-family='sans-serif' text-anchor='middle' fill='%23050505'>AV</text></svg>" type="image/svg+xml">

    <!-- Bootstrap 5.3 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Font Awesome & Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Swiper.js & AOS Animation Libraries -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">

    <!-- Custom Premium Styles -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animations.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
</head>
<body style="overflow-y: hidden;">

    <!-- Preloader Screen -->
    @include('partials.loader')

    <!-- Custom Smooth Magnetic Cursor -->
    @include('partials.cursor')

    <!-- Interactive Canvas & Noise Background -->
    <canvas id="bg-canvas"></canvas>
    <div class="noise-overlay"></div>

    <!-- Bootstrap Glassmorphism Navbar -->
    @include('partials.navbar')

    <!-- Main Content Area -->
    <main>
        @yield('content')
    </main>

    <!-- Footer Area -->
    @include('partials.footer')

    <!-- Toast Notification for Form Success -->
    <div class="toast-container position-fixed bottom-0 end-0 p-4" style="z-index: 1080;">
        <div id="successToast" class="toast glass-card glow-border-blue text-white border-0" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="d-flex align-items-center justify-content-between p-2">
                <div class="d-flex align-items-center gap-2">
                    <i class="bi bi-check-circle-fill text-neon-cyan fs-4"></i>
                    <strong class="me-auto text-neon-blue font-heading">Success!</strong>
                </div>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body pt-0 text-muted" id="toastBody">
                Message successfully submitted!
            </div>
        </div>
    </div>

    <!-- CDNs: Bootstrap JS, GSAP, ScrollTrigger, Typed.js, Swiper, AOS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.1.0/typed.umd.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

    <!-- Custom Application Scripts -->
    <script src="{{ asset('js/particles.js') }}"></script>
    <script src="{{ asset('js/cursor.js') }}"></script>
    <script src="{{ asset('js/gsap.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>

<section id="hero" class="hero-section overflow-hidden">
    <!-- Huge Transparent Background Text -->
    <div class="hero-bg-text font-heading">BUILD CREATE DEPLOY</div>

    <div class="container position-relative z-1">
        <div class="row align-items-center gy-5">
            <!-- Left Side Content -->
            <div class="col-lg-7 hero-content text-center text-lg-start">
                <div class="d-inline-flex align-items-center gap-2 px-3 py-1 mb-4 rounded-pill glass-card glow-border-blue" style="padding: 6px 16px !important;">
                    <span class="spinner-grow spinner-grow-sm text-neon-cyan" role="status"></span>
                    <span class="text-neon-cyan small fw-bold tracking-wider">AVAILABLE FOR LARAVEL PROJECTS</span>
                </div>

                <h1 class="display-3 fw-bold tracking-tight mb-2 text-white">
                    Hello, I'm <br>
                    <span class="text-gradient font-heading" style="font-size: 1.1em;">ARPIT VADHIYARI</span>
                </h1>

                <!-- Typed.js Rotating Text Wrapper -->
                <div class="fs-3 fw-semibold mb-4 font-heading" style="min-height: 48px;">
                    <span class="text-muted">I am a </span>
                    <span id="typed-text" class="text-neon-blue border-bottom border-info border-2 pb-1"></span>
                </div>

                <p class="lead text-muted mb-5 pe-lg-5" style="font-size: 1.15rem; line-height: 1.8;">
                    I build scalable Laravel applications, secure backend systems, responsive web interfaces, and modern database-driven solutions using <strong class="text-white">PHP, Laravel, MySQL, JavaScript, Bootstrap,</strong> and <strong class="text-white">AWS</strong>.
                </p>

                <!-- Hero Action Buttons -->
                <div class="d-flex flex-wrap gap-3 justify-content-center justify-content-lg-start">
                    <a href="#projects" class="btn btn-premium px-4 py-3 d-flex align-items-center gap-2">
                        <span>View Projects</span>
                        <i class="bi bi-arrow-right"></i>
                    </a>
                    <a href="#contact" class="btn btn-outline-neon px-4 py-3 d-flex align-items-center gap-2">
                        <i class="bi bi-send-fill text-neon-blue"></i>
                        <span>Hire Me</span>
                    </a>
                    <a href="#" class="btn glass-card px-4 py-3 text-white d-flex align-items-center gap-2 border-secondary" style="padding: 12px 24px !important;" onclick="alert('Resume download initialized...'); return false;">
                        <i class="bi bi-file-earmark-arrow-down text-neon-purple"></i>
                        <span>Download Resume</span>
                    </a>
                </div>

                <!-- Mini Tech Highlights Stack -->
                <div class="d-flex align-items-center justify-content-center justify-content-lg-start gap-4 mt-5 pt-3 border-top border-secondary border-opacity-25">
                    <div class="d-flex align-items-center gap-2 text-muted small">
                        <i class="fa-brands fa-laravel text-danger fs-4"></i>
                        <span>Laravel 12 MVC</span>
                    </div>
                    <div class="d-flex align-items-center gap-2 text-muted small">
                        <i class="fa-brands fa-php text-indigo fs-4" style="color: #8892be;"></i>
                        <span>PHP 8.3+</span>
                    </div>
                    <div class="d-flex align-items-center gap-2 text-muted small">
                        <i class="bi bi-database-fill text-info fs-5"></i>
                        <span>MySQL Eloquent</span>
                    </div>
                </div>
            </div>

            <!-- Right Side Interactive Illustration -->
            <div class="col-lg-5 hero-illustration">
                <div class="position-relative p-4 d-flex justify-content-center align-items-center">
                    
                    <!-- Ambient Glow Orbit -->
                    <div class="position-absolute rounded-circle animate-pulse-glow" style="width: 320px; height: 320px; background: radial-gradient(circle, rgba(0,243,255,0.2) 0%, rgba(176,38,255,0.15) 60%, transparent 100%); filter: blur(40px); z-index: 0;"></div>

                    <!-- Main Developer Code Mockup -->
                    <div class="glass-card glow-border-blue p-4 position-relative z-1 w-100 shadow-lg" style="border-radius: 24px; background: rgba(10, 10, 15, 0.7);">
                        
                        <div class="d-flex align-items-center justify-content-between mb-3 border-bottom border-secondary pb-2">
                            <div class="d-flex gap-2">
                                <span class="rounded-circle bg-danger d-inline-block" style="width: 12px; height: 12px;"></span>
                                <span class="rounded-circle bg-warning d-inline-block" style="width: 12px; height: 12px;"></span>
                                <span class="rounded-circle bg-success d-inline-block" style="width: 12px; height: 12px;"></span>
                            </div>
                            <span class="font-code text-muted small">HomeController.php</span>
                            <i class="fa-brands fa-laravel text-danger fs-5"></i>
                        </div>

                        <pre class="font-code text-start mb-0 small" style="color: #d1d5db; line-height: 1.7; overflow-x: hidden;"><code class="language-php"><span class="text-neon-purple">namespace</span> App\Http\Controllers;

<span class="text-neon-purple">class</span> <span class="text-warning">HomeController</span> <span class="text-neon-purple">extends</span> Controller
{
    <span class="text-neon-purple">public function</span> <span class="text-neon-blue">index</span>()
    {
        <span class="text-neon-cyan">$developer</span> = [
            <span class="text-success">'name'</span>  => <span class="text-warning">'Arpit Vadhiyari'</span>,
            <span class="text-success">'role'</span>  => <span class="text-warning">'PHP Laravel Developer'</span>,
            <span class="text-success">'stack'</span> => [<span class="text-warning">'Laravel 12'</span>, <span class="text-warning">'MVC'</span>],
            <span class="text-success">'db'</span>    => <span class="text-warning">'MySQL / Eloquent'</span>,
        ];

        <span class="text-neon-purple">return</span> view(<span class="text-warning">'portfolio.awwwards'</span>, <span class="text-neon-cyan">compact</span>(<span class="text-warning">'developer'</span>));
    }
}</code></pre>
                    </div>

                    <!-- Floating Technology Badges Around Illustration -->
                    <div class="floating-code-badge position-absolute top-0 start-0 animate-float glow-border-purple d-flex align-items-center gap-2" style="z-index: 2;">
                        <i class="fa-brands fa-laravel text-danger fs-4"></i>
                        <span>Laravel 12 Engine</span>
                    </div>

                    <div class="floating-code-badge position-absolute bottom-0 end-0 animate-float-delayed glow-border-blue d-flex align-items-center gap-2" style="z-index: 2; margin-bottom: -15px;">
                        <i class="fa-brands fa-aws text-warning fs-4"></i>
                        <span>AWS Architecture</span>
                    </div>

                    <div class="floating-code-badge position-absolute top-50 end-0 translate-middle-y animate-float glow-border-blue d-flex align-items-center gap-2" style="z-index: 2; right: -20px !important;">
                        <i class="bi bi-database-fill text-info fs-5"></i>
                        <span>MySQL Query</span>
                    </div>

                    <div class="floating-code-badge position-absolute bottom-0 start-0 animate-float-delayed d-flex align-items-center gap-2" style="z-index: 2; margin-bottom: 20px; left: -10px !important;">
                        <i class="bi bi-code-slash text-neon-cyan fs-5"></i>
                        <span>REST API Ready</span>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

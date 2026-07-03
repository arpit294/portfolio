<section id="services" class="services-section position-relative">
    <div class="container">
        <!-- Section Header -->
        <div class="text-center mb-5 pb-3" data-aos="fade-up">
            <span class="section-badge">05 // OFFERINGS & SOLUTIONS</span>
            <h2 class="section-title">Specialized <span class="text-gradient">Backend Services</span></h2>
            <p class="text-muted mx-auto" style="max-width: 650px;">
                Providing high-impact backend engineering, modular API design, and seamless system integrations.
            </p>
        </div>

        <div class="row g-4 stagger-grid">
            @foreach($services as $index => $srv)
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="{{ $index * 100 }}">
                    <div class="glass-card p-4 glow-border-blue h-100 d-flex flex-column justify-content-between interactive-card">
                        
                        <div>
                            <!-- Floating Icon Badge -->
                            <div class="d-inline-flex align-items-center justify-content-center rounded-4 mb-4 p-3 animate-float" style="background: rgba(255, 255, 255, 0.04); border: 1px solid rgba(0, 243, 255, 0.2); width: 65px; height: 65px;">
                                <i class="{{ $srv['icon'] }} fs-2"></i>
                            </div>

                            <h3 class="h5 fw-bold text-white font-heading mb-3">{{ $srv['title'] }}</h3>

                            <p class="text-muted small mb-4" style="line-height: 1.7;">
                                {{ $srv['desc'] }}
                            </p>
                        </div>

                        <div class="pt-3 border-top border-secondary border-opacity-25 d-flex align-items-center justify-content-between">
                            <span class="font-code text-neon-blue small">Laravel 12 MVC</span>
                            <a href="#contact" class="text-white small fw-bold text-decoration-none d-flex align-items-center gap-1 hover-glow">
                                <span>Discuss Project</span>
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>

                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

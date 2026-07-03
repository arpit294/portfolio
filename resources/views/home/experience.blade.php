<section id="experience" class="experience-section position-relative">
    <div class="container">
        <!-- Section Header -->
        <div class="text-center mb-5 pb-3" data-aos="fade-up">
            <span class="section-badge">04 // CAREER TRAJECTORY</span>
            <h2 class="section-title">Industry <span class="text-gradient">Experience</span></h2>
            <p class="text-muted mx-auto" style="max-width: 650px;">
                Proven track record delivering scalable full-stack Laravel solutions within agile development pipelines.
            </p>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="timeline">
                    @foreach($experience as $exp)
                        <div class="timeline-item" data-aos="fade-left">
                            <div class="timeline-dot" style="top: 10px; width: 36px; height: 36px; left: -43px;">
                                <i class="bi bi-building-fill text-neon-blue fs-6"></i>
                            </div>

                            <div class="glass-card p-5 glow-border-purple position-relative overflow-hidden">
                                <div class="position-absolute top-0 end-0 p-4 opacity-10 d-none d-md-block">
                                    <i class="fa-brands fa-laravel display-2 text-danger"></i>
                                </div>

                                <div class="d-flex flex-wrap align-items-center justify-content-between gap-3 mb-3 border-bottom border-secondary pb-3">
                                    <div>
                                        <h3 class="h4 fw-bold text-white font-heading mb-1">{{ $exp['position'] }}</h3>
                                        <h4 class="h5 text-neon-cyan mb-0 fw-semibold">{{ $exp['company'] }}</h4>
                                    </div>
                                    <div class="text-md-end">
                                        <span class="badge bg-dark border border-info text-neon-blue font-code px-3 py-2 mb-1">{{ $exp['period'] }}</span>
                                        <div class="small text-muted font-code">{{ $exp['location'] }}</div>
                                    </div>
                                </div>

                                <h5 class="small text-white font-heading text-uppercase tracking-wider mb-3">Key Responsibilities & Deliverables:</h5>

                                <ul class="list-unstyled row g-3 mb-4">
                                    @foreach($exp['responsibilities'] as $resp)
                                        <li class="col-md-6 d-flex align-items-start gap-2">
                                            <i class="bi bi-caret-right-fill text-neon-purple mt-1"></i>
                                            <span class="text-muted small" style="line-height: 1.6;">{{ $resp }}</span>
                                        </li>
                                    @endforeach
                                </ul>

                                <!-- Competency Tags -->
                                <div class="d-flex flex-wrap gap-2 pt-3 border-top border-secondary border-opacity-25">
                                    <span class="badge bg-dark border border-secondary text-light font-code">Laravel CRUD</span>
                                    <span class="badge bg-dark border border-secondary text-light font-code">Authentication Guard</span>
                                    <span class="badge bg-dark border border-secondary text-light font-code">Blade Engine</span>
                                    <span class="badge bg-dark border border-secondary text-light font-code">Bootstrap UI</span>
                                    <span class="badge bg-dark border border-secondary text-light font-code">REST API Development</span>
                                    <span class="badge bg-dark border border-secondary text-light font-code">Database Normalization</span>
                                    <span class="badge bg-dark border border-secondary text-light font-code">Bug Fixing</span>
                                    <span class="badge bg-dark border border-secondary text-light font-code">Git Version Control</span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

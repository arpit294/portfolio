<section id="about" class="about-section position-relative">
    <div class="container">
        <!-- Section Header -->
        <div class="text-center mb-5 pb-3" data-aos="fade-up">
            <span class="section-badge">01 // BIOGRAPHY & MILESTONES</span>
            <h2 class="section-title">Architecting Digital Experiences with <span class="text-gradient">Precision</span></h2>
            <p class="text-muted mx-auto" style="max-width: 650px;">
                Merging clean backend engineering with sleek frontend aesthetics to create enterprise-ready web solutions.
            </p>
        </div>

        <!-- Stats Counter Row -->
        <div class="row g-4 mb-5 pb-4 stagger-grid" data-aos="fade-up">
            @foreach($aboutStats as $stat)
                <div class="col-6 col-md-3">
                    <div class="glass-card text-center p-4 glow-border-blue h-100 d-flex flex-column justify-content-center">
                        <h3 class="display-5 fw-bold text-neon-blue font-heading counter-val mb-1" data-target="{{ $stat['count'] }}">0</h3>
                        <p class="text-muted small fw-semibold text-uppercase tracking-wider mb-0">{{ $stat['label'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="row g-5 align-items-center">
            <!-- Left Column: Biography Glass Card -->
            <div class="col-lg-6" data-aos="fade-right">
                <div class="glass-card p-5 glow-border-purple position-relative overflow-hidden h-100">
                    <div class="position-absolute top-0 end-0 p-3 opacity-10">
                        <i class="fa-brands fa-php display-1 text-white"></i>
                    </div>

                    <span class="badge bg-purple text-white mb-3 px-3 py-2 rounded-pill font-code" style="background: rgba(176,38,255,0.2); border: 1px solid var(--neon-purple);">PHP Laravel Specialist</span>

                    <h3 class="h2 fw-bold text-white mb-4">Dedicated to High-Quality Software Architecture</h3>

                    <p class="text-muted mb-4" style="line-height: 1.8;">
                        Hello! I am <strong class="text-white">Arpit Vadhiyari</strong>, an ambitious and detail-oriented software developer specializing in <strong class="text-neon-cyan">PHP 8.3+</strong> and the <strong class="text-neon-blue">Laravel 12 Framework</strong>. My engineering philosophy revolves around adherence to solid object-oriented principles, modular separation of concerns (MVC), and database query optimization.
                    </p>

                    <p class="text-muted mb-4" style="line-height: 1.8;">
                        During my hands-on internship at <strong class="text-white">Web Expert Infotech</strong>, I successfully built complex database-driven portals, RESTful APIs, and responsive Blade user interfaces. Currently pursuing my <strong class="text-white">Master's Degree</strong>, I am expanding my horizons into cloud computing, actively learning <strong class="text-warning">AWS cloud architecture</strong> to deploy scalable, highly available web applications.
                    </p>

                    <div class="d-flex align-items-center gap-4 pt-3 border-top border-secondary border-opacity-25">
                        <div>
                            <span class="text-muted small d-block">Core Focus</span>
                            <strong class="text-white">Backend Systems & APIs</strong>
                        </div>
                        <div>
                            <span class="text-muted small d-block">Current Status</span>
                            <span class="text-neon-green fw-bold"><i class="bi bi-circle-fill text-success small me-1"></i> Open for Opportunities</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Column: Interactive Education & Journey Timeline -->
            <div class="col-lg-6" data-aos="fade-left">
                <h3 class="h4 font-heading fw-bold text-white mb-4 d-flex align-items-center gap-2">
                    <i class="bi bi-compass-fill text-neon-blue"></i> Academic & Professional Timeline
                </h3>

                <div class="timeline">
                    @foreach($timeline as $item)
                        <div class="timeline-item">
                            <div class="timeline-dot">
                                <i class="bi {{ $item['icon'] }} small"></i>
                            </div>
                            <div class="glass-card p-4 glow-border-blue">
                                <div class="d-flex justify-content-between align-items-center flex-wrap gap-2 mb-2">
                                    <span class="text-neon-cyan small font-code fw-bold">{{ $item['period'] }}</span>
                                    <span class="badge rounded-pill bg-dark border border-info small px-3 py-1">{{ $item['badge'] }}</span>
                                </div>
                                <h4 class="h5 fw-bold text-white mb-1">{{ $item['title'] }}</h4>
                                <h5 class="small text-neon-purple fw-semibold mb-3">{{ $item['institution'] }}</h5>
                                <p class="text-muted small mb-0">{{ $item['description'] }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

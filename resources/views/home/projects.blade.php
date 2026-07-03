<section id="projects" class="projects-section position-relative">
    <div class="container">
        <!-- Section Header -->
        <div class="text-center mb-5 pb-2" data-aos="fade-up">
            <span class="section-badge">03 // FEATURED WORK</span>
            <h2 class="section-title">Production-Grade <span class="text-gradient">Laravel Systems</span></h2>
            <p class="text-muted mx-auto" style="max-width: 650px;">
                Explore robust backend architectures, high-performance database algorithms, and full-stack solutions built with Laravel MVC.
            </p>

            <!-- Filter Buttons -->
            <div class="d-flex flex-wrap justify-content-center gap-2 mt-4">
                <button class="filter-btn active" data-filter="all">All Systems</button>
                <button class="filter-btn" data-filter="enterprise">Enterprise Portals</button>
                <button class="filter-btn" data-filter="backend">Backend Engines</button>
                <button class="filter-btn" data-filter="fullstack">Fullstack CMS</button>
            </div>
        </div>

        <!-- Projects Grid -->
        <div class="row g-4 stagger-grid">
            @foreach($projects as $project)
                <div class="col-lg-4 col-md-6 project-item" data-category="{{ $project['category'] }}">
                    <div class="glass-card p-0 glow-border-blue h-100 d-flex flex-column overflow-hidden">
                        
                        <!-- Project Image & Overlay -->
                        <div class="position-relative overflow-hidden" style="height: 220px;">
                            <img src="{{ $project['image'] }}" alt="{{ $project['title'] }}" class="w-100 h-100 object-fit-cover" style="transition: transform 0.6s ease;">
                            <div class="position-absolute top-0 end-0 m-3 z-1">
                                <span class="badge bg-dark border border-info text-neon-cyan font-code px-3 py-1 text-uppercase">{{ $project['category'] }}</span>
                            </div>
                            <div class="position-absolute inset-0 bg-dark bg-opacity-50 d-flex align-items-center justify-content-center opacity-0 hover-overlay" style="transition: opacity 0.3s ease;">
                                <button type="button" class="btn btn-premium rounded-pill px-4 py-2" data-bs-toggle="modal" data-bs-target="#projectModal{{ $project['id'] }}">
                                    <i class="bi bi-eye-fill me-1"></i> Preview System
                                </button>
                            </div>
                        </div>

                        <!-- Project Details -->
                        <div class="p-4 d-flex flex-column flex-grow-1">
                            <h3 class="h5 fw-bold text-white font-heading mb-2">{{ $project['title'] }}</h3>
                            <p class="text-muted small mb-4 flex-grow-1" style="line-height: 1.6;">
                                {{ Str::limit($project['description'], 110) }}
                            </p>

                            <!-- Tech Stack Pills -->
                            <div class="d-flex flex-wrap gap-1 mb-4">
                                @foreach($project['tech'] as $t)
                                    <span class="badge bg-dark border border-secondary text-muted font-code small">{{ $t }}</span>
                                @endforeach
                            </div>

                            <!-- Action Buttons -->
                            <div class="d-flex align-items-center justify-content-between pt-3 border-top border-secondary border-opacity-25 mt-auto">
                                <button type="button" class="btn btn-sm btn-outline-neon px-3 py-1 rounded-pill" data-bs-toggle="modal" data-bs-target="#projectModal{{ $project['id'] }}">
                                    Architecture Details
                                </button>
                                <div class="d-flex gap-2">
                                    <a href="{{ $project['github'] }}" target="_blank" class="btn btn-sm glass-card text-white p-2 d-flex align-items-center justify-content-center rounded-circle" style="width: 36px; height: 36px;" title="View Source on GitHub">
                                        <i class="fa-brands fa-github fs-6"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Animated Modal for Project Specification -->
                <div class="modal fade" id="projectModal{{ $project['id'] }}" tabindex="-1" aria-labelledby="projectModalLabel{{ $project['id'] }}" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered">
                        <div class="modal-content glass-card glow-border-purple text-white border-0 p-3" style="background: rgba(8, 8, 12, 0.98) !important;">
                            <div class="modal-header border-bottom border-secondary pb-3">
                                <h4 class="modal-title font-heading fw-bold d-flex align-items-center gap-2" id="projectModalLabel{{ $project['id'] }}">
                                    <i class="fa-brands fa-laravel text-danger"></i> {{ $project['title'] }}
                                </h4>
                                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body pt-4">
                                <div class="row g-4 align-items-center">
                                    <div class="col-lg-6">
                                        <img src="{{ $project['image'] }}" class="img-fluid rounded-4 border border-secondary shadow" alt="{{ $project['title'] }}">
                                    </div>
                                    <div class="col-lg-6">
                                        <h5 class="text-neon-cyan font-heading fw-bold mb-3">System Overview</h5>
                                        <p class="text-muted small mb-4" style="line-height: 1.7;">{{ $project['description'] }}</p>
                                        
                                        <h6 class="text-white font-heading fw-bold mb-2">Key Architectural Features:</h6>
                                        <ul class="list-unstyled d-flex flex-column gap-2 mb-4">
                                            @foreach($project['features'] as $feat)
                                                <li class="d-flex align-items-start gap-2 small text-muted">
                                                    <i class="bi bi-check2-circle text-neon-blue mt-1"></i>
                                                    <span>{{ $feat }}</span>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                                <div class="mt-4 pt-3 border-top border-secondary d-flex flex-wrap align-items-center justify-content-between gap-3">
                                    <div class="d-flex flex-wrap gap-1">
                                        @foreach($project['tech'] as $t)
                                            <span class="badge bg-purple text-white font-code">{{ $t }}</span>
                                        @endforeach
                                    </div>
                                    <div class="d-flex gap-3">
                                        <a href="{{ $project['github'] }}" target="_blank" class="btn btn-premium px-4 py-2 d-flex align-items-center gap-2">
                                            <i class="fa-brands fa-github"></i> Source Code repository
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<style>
    .project-item .position-relative:hover img { transform: scale(1.08); }
    .project-item .position-relative:hover .hover-overlay { opacity: 1 !important; }
</style>

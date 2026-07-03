<section id="certificates" class="certificates-section position-relative overflow-hidden">
    <div class="container">
        <!-- Section Header -->
        <div class="text-center mb-5 pb-3" data-aos="fade-up">
            <span class="section-badge">06 // RECOGNITION & ACCOLADES</span>
            <h2 class="section-title">Verified <span class="text-gradient">Certificates</span></h2>
            <p class="text-muted mx-auto" style="max-width: 650px;">
                Formal training and accredited certifications showcasing deep domain knowledge in PHP, Laravel, and Modern Web Architecture.
            </p>
        </div>

        <!-- Swiper Carousel Container -->
        <div class="swiper certificates-swiper pb-5" data-aos="fade-up">
            <div class="swiper-wrapper">
                @foreach($certificates as $index => $cert)
                    <div class="swiper-slide">
                        <div class="glass-card p-0 glow-border-purple h-100 d-flex flex-column overflow-hidden">
                            <!-- Certificate Thumbnail -->
                            <div class="position-relative overflow-hidden" style="height: 240px;">
                                <img src="{{ $cert['image'] }}" alt="{{ $cert['title'] }}" class="w-100 h-100 object-fit-cover" style="transition: transform 0.5s ease;">
                                <div class="position-absolute top-0 end-0 m-3 z-1">
                                    <span class="badge bg-purple text-white font-code px-3 py-1">{{ $cert['date'] }}</span>
                                </div>
                                <div class="position-absolute inset-0 bg-dark bg-opacity-50 d-flex align-items-center justify-content-center opacity-0 hover-overlay" style="transition: opacity 0.3s ease;">
                                    <button type="button" class="btn btn-premium rounded-pill px-4 py-2" data-bs-toggle="modal" data-bs-target="#certModal{{ $index }}">
                                        <i class="bi bi-zoom-in me-1"></i> Preview Certificate
                                    </button>
                                </div>
                            </div>

                            <!-- Details -->
                            <div class="p-4 d-flex flex-column flex-grow-1">
                                <span class="text-neon-cyan small font-code fw-semibold mb-1">{{ $cert['issuer'] }}</span>
                                <h3 class="h5 fw-bold text-white font-heading mb-3">{{ $cert['title'] }}</h3>
                                <p class="text-muted small mb-4 flex-grow-1" style="line-height: 1.6;">{{ $cert['desc'] }}</p>

                                <div class="pt-3 border-top border-secondary border-opacity-25 d-flex justify-content-between align-items-center">
                                    <span class="badge bg-dark border border-secondary text-muted font-code small">Verified Credentials</span>
                                    <button type="button" class="btn btn-link text-neon-blue p-0 small text-decoration-none" data-bs-toggle="modal" data-bs-target="#certModal{{ $index }}">
                                        View Credential <i class="bi bi-arrow-up-right"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Lightbox Modal for Certificate -->
                    <div class="modal fade" id="certModal{{ $index }}" tabindex="-1" aria-labelledby="certModalLabel{{ $index }}" aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-dialog-centered">
                            <div class="modal-content glass-card glow-border-blue text-white border-0 p-2" style="background: rgba(8, 8, 12, 0.98) !important;">
                                <div class="modal-header border-bottom border-secondary pb-3">
                                    <h5 class="modal-title font-heading fw-bold d-flex align-items-center gap-2" id="certModalLabel{{ $index }}">
                                        <i class="bi bi-patch-check-fill text-neon-cyan"></i> {{ $cert['title'] }}
                                    </h5>
                                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body text-center p-4">
                                    <img src="{{ $cert['image'] }}" class="img-fluid rounded border border-secondary shadow-lg mb-4" alt="{{ $cert['title'] }}">
                                    <h6 class="text-neon-blue font-heading">{{ $cert['issuer'] }}</h6>
                                    <p class="text-muted small mx-auto" style="max-width: 600px;">{{ $cert['desc'] }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <!-- Pagination dots -->
            <div class="swiper-pagination position-relative mt-4"></div>
        </div>
    </div>
</section>

<style>
    .swiper-slide .position-relative:hover img { transform: scale(1.06); }
    .swiper-slide .position-relative:hover .hover-overlay { opacity: 1 !important; }
    .swiper-pagination-bullet { background: rgba(255,255,255,0.3); width: 10px; height: 10px; opacity: 1; }
    .swiper-pagination-bullet-active { background: var(--neon-blue); width: 25px; border-radius: 5px; box-shadow: 0 0 10px var(--neon-blue); }
</style>

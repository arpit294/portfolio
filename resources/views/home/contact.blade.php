<section id="contact" class="contact-section position-relative pb-5">
    <div class="container">
        <!-- Section Header -->
        <div class="text-center mb-5 pb-3" data-aos="fade-up">
            <span class="section-badge">07 // LET'S COLLABORATE</span>
            <h2 class="section-title">Initiate <span class="text-gradient">Communication</span></h2>
            <p class="text-muted mx-auto" style="max-width: 650px;">
                Ready to build an award-winning web application or optimize your backend infrastructure? Drop me a message below.
            </p>
        </div>

        <div class="row g-5 align-items-stretch">
            <!-- Contact Info Cards & Social Matrix -->
            <div class="col-lg-5" data-aos="fade-right">
                <div class="d-flex flex-column gap-4 h-100 justify-content-between">
                    <div class="glass-card p-4 glow-border-blue">
                        <h3 class="h4 font-heading fw-bold text-white mb-3 d-flex align-items-center gap-2">
                            <i class="bi bi-chat-dots-fill text-neon-cyan"></i> Direct Contact Matrix
                        </h3>
                        <p class="text-muted small mb-4">
                            Whether you have an enterprise project, full-time opportunity, or technical inquiry, I reply within 12 hours.
                        </p>

                        <div class="d-flex flex-column gap-3">
                            <a href="mailto:arpitvadhiyari@gmail.com" class="d-flex align-items-center gap-3 p-3 rounded-4 glass-card text-decoration-none border-secondary border-opacity-50">
                                <div class="rounded-circle d-flex align-items-center justify-content-center bg-dark text-neon-blue" style="width: 45px; height: 45px; min-width: 45px;">
                                    <i class="bi bi-envelope-at-fill fs-5"></i>
                                </div>
                                <div>
                                    <span class="text-muted small d-block">Electronic Mail</span>
                                    <strong class="text-white font-code small">arpitvadhiyari@gmail.com</strong>
                                </div>
                            </a>

                            <a href="https://wa.me/910000000000" target="_blank" class="d-flex align-items-center gap-3 p-3 rounded-4 glass-card text-decoration-none border-secondary border-opacity-50">
                                <div class="rounded-circle d-flex align-items-center justify-content-center bg-dark text-success" style="width: 45px; height: 45px; min-width: 45px;">
                                    <i class="fa-brands fa-whatsapp fs-4"></i>
                                </div>
                                <div>
                                    <span class="text-muted small d-block">Instant WhatsApp</span>
                                    <strong class="text-white font-code small">+91 Developer Direct</strong>
                                </div>
                            </a>

                            <div class="d-flex align-items-center gap-3 p-3 rounded-4 glass-card border-secondary border-opacity-50">
                                <div class="rounded-circle d-flex align-items-center justify-content-center bg-dark text-neon-purple" style="width: 45px; height: 45px; min-width: 45px;">
                                    <i class="bi bi-geo-alt-fill fs-5"></i>
                                </div>
                                <div>
                                    <span class="text-muted small d-block">Development Lab</span>
                                    <strong class="text-white font-code small">Gujarat, India (Remote Available)</strong>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Interactive Google Map Box -->
                    <div class="glass-card p-2 glow-border-purple position-relative overflow-hidden" style="height: 180px;">
                        <iframe 
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d238133.15238148815!2d72.68220795!3d21.1591425!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be04e59411d1563%3A0xfe4558290938b042!2sSurat%2C%20Gujarat!5e0!3m2!1sen!2sin!4v1700000000000!5m2!1sen!2sin" 
                            width="100%" height="100%" style="border:0; border-radius: 16px; filter: invert(90%) hue-rotate(180deg) brightness(85%) contrast(85%);" 
                            allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                        <div class="position-absolute bottom-0 start-0 m-3 px-3 py-1 rounded bg-dark border border-info small font-code text-neon-cyan">
                            <i class="bi bi-pin-map-fill me-1"></i> HQ Coordinates
                        </div>
                    </div>
                </div>
            </div>

            <!-- Laravel Form Validation Container -->
            <div class="col-lg-7" data-aos="fade-left">
                <div class="glass-card p-5 glow-border-blue h-100">
                    <h3 class="h4 font-heading fw-bold text-white mb-4">Send an Inquiry Endpoint</h3>

                    @if(session('success'))
                        <div class="alert alert-success glass-card border-success text-white mb-4">
                            <i class="bi bi-check-circle-fill me-2 text-success"></i> {{ session('success') }}
                        </div>
                    @endif

                    <form id="contactForm" action="{{ route('contact.store') }}" method="POST">
                        @csrf
                        <div class="row g-4">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control custom-input @error('name') is-invalid @enderror" id="nameInput" name="name" placeholder="Your Name" required value="{{ old('name') }}">
                                    <label for="nameInput" class="text-muted small"><i class="bi bi-person me-1"></i> Full Name</label>
                                    @error('name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control custom-input @error('email') is-invalid @enderror" id="emailInput" name="email" placeholder="name@example.com" required value="{{ old('email') }}">
                                    <label for="emailInput" class="text-muted small"><i class="bi bi-envelope me-1"></i> Email Address</label>
                                    @error('email')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control custom-input @error('subject') is-invalid @enderror" id="subjectInput" name="subject" placeholder="Project Subject" required value="{{ old('subject') }}">
                                    <label for="subjectInput" class="text-muted small"><i class="bi bi-tag me-1"></i> Project Subject / Inquiry Type</label>
                                    @error('subject')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control custom-input @error('message') is-invalid @enderror" id="messageInput" name="message" placeholder="Leave a comment here" style="height: 160px" required>{{ old('message') }}</textarea>
                                    <label for="messageInput" class="text-muted small"><i class="bi bi-chat-text me-1"></i> Project Specifications & Requirements</label>
                                    @error('message')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-12 d-flex justify-content-between align-items-center pt-2">
                                <span class="small text-muted font-code"><i class="bi bi-shield-lock-fill text-neon-blue"></i> Protected by Laravel CSRF Guard</span>
                                <button type="submit" class="btn btn-premium px-5 py-3 d-flex align-items-center gap-2">
                                    <span>Transmit Message</span>
                                    <i class="bi bi-send-fill"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .custom-input {
        background: rgba(255, 255, 255, 0.04) !important;
        border: 1px solid rgba(255, 255, 255, 0.1) !important;
        color: #fff !important;
        border-radius: 12px !important;
        transition: all 0.3s ease;
    }
    .custom-input:focus {
        background: rgba(255, 255, 255, 0.08) !important;
        border-color: var(--neon-blue) !important;
        box-shadow: 0 0 15px rgba(0, 243, 255, 0.25) !important;
    }
    .form-floating label {
        color: #9ca3af;
    }
</style>

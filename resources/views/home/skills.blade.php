<section id="skills" class="skills-section position-relative">
    <div class="container">
        <!-- Section Header -->
        <div class="text-center mb-5 pb-3" data-aos="fade-up">
            <span class="section-badge">02 // TECHNICAL PROFICIENCY</span>
            <h2 class="section-title">Mastered Stack & <span class="text-gradient">Engineering Tools</span></h2>
            <p class="text-muted mx-auto" style="max-width: 650px;">
                Strictly architected around high-performance PHP, modern Laravel MVC conventions, normalized databases, and clean UI components.
            </p>
        </div>

        <div class="row g-4 stagger-grid">
            @foreach($skills as $category => $skillList)
                <div class="col-lg-6" data-aos="fade-up">
                    <div class="glass-card p-4 glow-border-blue h-100">
                        <div class="d-flex align-items-center justify-content-between mb-4 border-bottom border-secondary pb-3">
                            <h3 class="h5 fw-bold font-heading text-white mb-0 d-flex align-items-center gap-2">
                                @if($category == 'Frontend')
                                    <i class="bi bi-window-desktop text-neon-cyan fs-4"></i>
                                @elseif($category == 'Backend')
                                    <i class="bi bi-cpu-fill text-neon-purple fs-4"></i>
                                @elseif($category == 'Database')
                                    <i class="bi bi-server text-neon-blue fs-4"></i>
                                @else
                                    <i class="bi bi-tools text-warning fs-4"></i>
                                @endif
                                {{ $category }} Architecture
                            </h3>
                            <span class="badge bg-dark border border-secondary text-muted font-code">{{ count($skillList) }} Core Skills</span>
                        </div>

                        <div class="d-flex flex-column gap-4">
                            @foreach($skillList as $item)
                                <div class="skill-item">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <div class="d-flex align-items-center gap-2">
                                            <i class="{{ $item['icon'] }} fs-5"></i>
                                            <span class="fw-semibold text-white font-body">{{ $item['name'] }}</span>
                                        </div>
                                        <span class="font-code text-neon-blue fw-bold small">{{ $item['percent'] }}%</span>
                                    </div>
                                    <div class="progress" style="height: 8px; background-color: rgba(255,255,255,0.06); border-radius: 10px; overflow: hidden;">
                                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" 
                                             style="width: {{ $item['percent'] }}%; background: linear-gradient(90deg, var(--neon-blue), var(--neon-purple)); border-radius: 10px;" 
                                             aria-valuenow="{{ $item['percent'] }}" aria-valuemin="0" aria-valuemax="100">
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

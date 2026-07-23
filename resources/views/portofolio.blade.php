<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="{{ asset('img/icon.png') }}">
    <title>{{ $profile['name'] }} — Portofolio</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@500;600;700&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/portofolio.css') }}">
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>

    <!-- scroll progress arc (signature element) -->
    <svg class="progress-arc" viewBox="0 0 64 64" aria-hidden="true">
        <circle class="progress-arc__track" cx="32" cy="32" r="28" />
        <circle class="progress-arc__bar" cx="32" cy="32" r="28" />
    </svg>

    <header class="nav" id="nav">
        <a href="#hero" class="nav__brand">

            <img
                src="{{ asset('img/profile.jpeg') }}"
                alt="Prasetyo"
                class="brand-avatar">

            Prasetyo<span>.</span>

        </a>
        <nav class="nav__links" id="navLinks">
            <a href="#about" data-reveal-skip>Tentang</a>
            <a href="#experience" data-reveal-skip>Pengalaman</a>
            <a href="#projects" data-reveal-skip>Proyek</a>
            <a href="#skills" data-reveal-skip>Skills</a>
            <a href="#contact" class="nav__cta" data-reveal-skip>Kontak</a>
        </nav>
        <button class="nav__toggle" id="navToggle" aria-label="Buka menu" aria-expanded="false">
            <span></span><span></span><span></span>
        </button>
    </header>

    <main>
        <!-- ABOUT -->
        <section class="section about-hero" id="about">

            <div class="about-heading reveal" data-reveal>
                <span class="hero-subtitle">
                    HELLO I'M
                </span>

                <h1 class="about-name">
                    Prasetyo
                    <br>
                    Angga
                    <br>
                    Permana
                </h1>

                <p class="about-role">
                    {{ $profile['role'] }}
                </p>

            </div>

            <div class="about-grid">

                <div class="about-photo reveal" data-reveal>

                    <img src="{{ asset('img/profile.jpeg') }}" alt="{{ $profile['name'] }}">

                </div>

                <div class="about-content reveal" data-reveal>
                    <p>
                        {{ $profile['bio'] }}
                    </p>

                    <div class="hero-buttons">
                        <a href="#projects" class="btn btn--primary">
                            <i class="bi bi-grid-3x3-gap-fill"></i>
                            Project
                        </a>

                        <a href="{{ asset('cv/CV-Prasetyo-Angga-Permana.pdf') }}"
                            class="btn btn--ghost"
                            target="_blank"
                            rel="noopener">
                            <i class="bi bi-download"></i>
                            Download CV
                        </a>

                    </div>
                </div>
            </div>

            <div class="about-info">
                <div class="about-item">
                    <i class="bi bi-geo-alt-fill"></i>
                    <div>
                        <strong>Domisili</strong>
                        <span>{{ $profile['location'] }}</span>
                    </div>
                </div>

                <div class="about-item">
                    <i class="bi bi-mortarboard-fill"></i>
                    <div>
                        <strong>Pendidikan</strong>
                        <span>S1 Informatika Unsoed</span>
                    </div>
                </div>

                <div class="about-item">
                    <i class="bi bi-envelope-fill"></i>
                    <div>
                        <strong>Email</strong>
                        <span>{{ $profile['email'] }}</span>
                    </div>
                </div>

                <div class="about-item">
                    <i class="bi bi-telephone-fill"></i>
                    <div>
                        <strong>Telepon</strong>
                        <span>{{ $profile['phone'] }}</span>
                    </div>
                </div>

            </div>

            <div class="about-stat reveal" data-reveal>

                <div class="about-stat-card">
                    <h2 class="counter" data-target="9">10 +</h2>
                    <span>Projects</span>
                </div>

                <div class="about-stat-card">
                    <h2 class="counter" data-target="4">12</h2>
                    <span>Certificates</span>
                </div>

                <div class="about-stat-card">
                    <h2 class="counter" data-target="3">≤ 1</h2>
                    <span>Years Experience</span>
                </div>

                <div class="about-stat-card">
                    <h2>3.65</h2>
                    <span>GPA / IPK</span>
                </div>

            </div>

            <div class="education-timeline reveal" data-reveal>

                @foreach($education as $e)

                <div class="education-card">

                    <div class="education-icon">
                        <i class="bi bi-mortarboard-fill"></i>
                    </div>

                    <div>

                        <h4>{{ $e['school'] }}</h4>

                        <span>{{ $e['detail'] }}</span>

                        <small>{{ $e['place'] }} • {{ $e['period'] }}</small>

                    </div>

                </div>

                @endforeach

            </div>

        </section>

        <!-- EXPERIENCE -->
        <section class="section section--alt" id="experience">

            <div class="section__head reveal" data-reveal>
                <span class="eyebrow">Experience</span>
                <h2>Pengalaman</h2>
                <p>Perjalanan saya selama kuliah melalui magang, organisasi, dan kepanitiaan.</p>
            </div>

            <!-- MAGANG -->
            <div class="experience-group reveal" data-reveal>

                <h3 class="experience-title">
                    <i class="bi bi-briefcase-fill"></i>
                    Pengalaman Magang
                </h3>

                <div class="experience-grid">

                    @foreach($internships as $item)

                    <div class="experience-card">

                        <div class="experience-icon">
                            <i class="bi {{ $item['icon'] }}"></i>
                        </div>

                        <div class="experience-content">

                            <h4>{{ $item['title'] }}</h4>

                            <span>{{ $item['company'] }}</span>

                            <small>{{ $item['period'] }}</small>

                            <ul>
                                @foreach($item['points'] as $point)
                                <li>{{ $point }}</li>
                                @endforeach
                            </ul>

                        </div>

                    </div>

                    @endforeach

                </div>

            </div>

            <!-- ORGANISASI -->
            <div class="experience-group reveal" data-reveal>

                <h3 class="experience-title">
                    <i class="bi bi-people-fill"></i>
                    Organisasi
                </h3>

                <div class="experience-grid">

                    @foreach($organizations as $item)

                    <div class="experience-card">

                        <div class="experience-icon">
                            <i class="bi {{ $item['icon'] }}"></i>
                        </div>

                        <div class="experience-content">

                            <h4>{{ $item['title'] }}</h4>

                            <span>{{ $item['position'] }}</span>

                            <small>{{ $item['period'] }}</small>

                        </div>

                    </div>

                    @endforeach

                </div>

            </div>

            <!-- KEPANITIAAN -->
            <div class="experience-group reveal" data-reveal>

                <h3 class="experience-title">
                    <i class="bi bi-award-fill"></i>
                    Kepanitiaan
                </h3>

                <div class="experience-grid">

                    @foreach($committees as $item)

                    <div class="experience-card">

                        <div class="experience-icon">
                            <i class="bi {{ $item['icon'] }}"></i>
                        </div>

                        <div class="experience-content">

                            <h4>{{ $item['title'] }}</h4>

                            <span>{{ $item['position'] }}</span>

                            <small>{{ $item['period'] }}</small>

                        </div>

                    </div>

                    @endforeach

                </div>

            </div>

        </section>

        <!-- PROJECTS -->
        <section class="section" id="projects">

            <div class="section__head reveal" data-reveal>

                <span class="eyebrow">
                    Portfolio
                </span>

                <h2>
                    Featured Projects
                </h2>

                <p>
                    Beberapa project yang pernah saya kerjakan selama perkuliahan,
                    magang, maupun project pribadi.
                </p>

            </div>

            <div class="filter-row reveal" data-reveal>

                <button class="filter-btn is-active" data-filter="all">
                    Semua
                </button>

                <button class="filter-btn" data-filter="Web Development">
                    Web Development
                </button>

                <button class="filter-btn" data-filter="UI/UX Design">
                    UI / UX
                </button>

                <button class="filter-btn" data-filter="Mobile Development">
                    Mobile
                </button>

            </div>

            <div class="project-grid">

                @foreach($projects as $p)

                <article
                    class="project-card reveal"
                    data-category="{{ $p['category'] }}"
                    data-reveal>

                    <div class="project-image">
                        <img
                            src="{{ asset($p['image']) }}"
                            alt="{{ $p['name'] }}">

                        <span class="project-category">
                            {{ $p['category'] }}
                        </span>
                    </div>

                    <div class="project-body">
                        <div class="project-header">
                            <div>
                                <h3>{{ $p['name'] }}</h3>
                                <small>
                                    <i class="bi bi-calendar3"></i>
                                    {{ $p['year'] }}</small>
                            </div>

                            <span class="project-status">
                                <i class="bi bi-patch-check-fill"></i>
                                {{ $p['status'] }}
                            </span>
                        </div>

                        <p>
                            {{ $p['desc'] }}
                        </p>

                        <div class="project-tech">
                            @foreach($p['tech'] as $tech)
                            <span>
                                {{ $tech }}
                            </span>
                            @endforeach
                        </div>

                        <div class="project-tags">
                            @foreach($p['tags'] as $tag)
                            <span class="chip">
                                {{ $tag }}
                            </span>
                            @endforeach
                        </div>

                        <div class="project-footer">

                            <a
                                href="{{ $p['github'] }}"
                                class="project-link">

                                <i class="bi bi-file-earmark-text"></i>

                                Doc

                            </a>

                            <a
                                href="{{ $p['demo'] }}"
                                class="project-link">

                                <i class="bi bi-box-arrow-up-right"></i>

                                Demo

                            </a>

                        </div>

                    </div>

                </article>

                @endforeach

            </div>

        </section>

        <!-- SKILLS -->
        <section class="section section--alt" id="skills">
            <div class="section__head reveal" data-reveal>
                <span class="eyebrow">Kemampuan</span>
                <h2>Skills &amp; Tools</h2>
            </div>
            <div class="skills-grid">
                @foreach ($skills as $group => $items)
                <div class="skills-card reveal" data-reveal>
                    <h3>{{ $group }}</h3>
                    <div class="chip-row">
                        @foreach ($items as $item)
                        <span class="chip chip--skill">{{ $item }}</span>
                        @endforeach
                    </div>
                </div>
                @endforeach
            </div>
        </section>

        <!-- AWARDS -->
        <section class="section" id="awards">

            <div class="section__head reveal" data-reveal>
                <span class="eyebrow">CERTIFICATE</span>
                <h2>Sertifikat & Penghargaan</h2>
                <p>Pencapaian, sertifikasi, dan pengalaman yang telah saya raih selama perkuliahan maupun kegiatan organisasi.</p>
            </div>

            <div class="award-grid">

                @foreach($awards as $award)

                <div class="award-card reveal" data-reveal>

                    <div class="award-image">
                        <img src="{{ asset($award['image']) }}" alt="{{ $award['title'] }}">
                    </div>

                    <div class="award-body">

                        <div class="award-year">
                            <i class="bi bi-calendar-event-fill"></i>
                            {{ $award['year'] }}
                        </div>

                        <h3>{{ $award['title'] }}</h3>

                        <p>{{ $award['desc'] }}</p>

                        <button
                            class="award-btn preview-btn"
                            data-image="{{ asset($award['image']) }}"
                            data-title="{{ $award['title'] }}"
                            data-desc="{{ $award['desc'] }}">

                            <i class="bi bi-eye-fill"></i>
                            View Certificate

                        </button>

                    </div>

                </div>

                @endforeach

            </div>

        </section>

        <!-- CONTACT -->
        <section class="section" id="contact">

            <div class="section__head reveal" data-reveal>
                <span class="eyebrow">CONTACT</span>
                <h2>Mari Berkolaborasi</h2>
                <p>
                    Saya terbuka untuk peluang magang, freelance, maupun full-time.
                    Jangan ragu untuk menghubungi saya.
                </p>
            </div>

            <div class="contact-wrapper">

                <div class="contact-card reveal" data-reveal>

                    <div class="contact-icon">
                        <i class="bi bi-envelope-fill"></i>
                    </div>

                    <div class="contact-body">
                        <h3>Email</h3>

                        <p>{{ $contact['email'] }}</p>

                        <a href="mailto:{{ $contact['email'] }}">
                            Kirim Email
                        </a>
                    </div>

                </div>

                <div class="contact-card reveal" data-reveal>

                    <div class="contact-icon">
                        <i class="bi bi-whatsapp"></i>
                    </div>

                    <div class="contact-body">
                        <h3>WhatsApp</h3>

                        <p>{{ $contact['whatsapp'] }}</p>

                        <a href="https://wa.me/6285725872794" target="_blank">
                            Chat WhatsApp
                        </a>
                    </div>

                </div>

                <div class="contact-card reveal" data-reveal>

                    <div class="contact-icon">
                        <i class="bi bi-linkedin"></i>
                    </div>

                    <div class="contact-body">
                        <h3>LinkedIn</h3>

                        <p>{{ $contact['linkedin'] }}</p>

                        <a href="#">
                            Lihat Profil
                        </a>
                    </div>

                </div>

                <div class="contact-card reveal" data-reveal>

                    <div class="contact-icon">
                        <i class="bi bi-github"></i>
                    </div>

                    <div class="contact-body">
                        <h3>GitHub</h3>

                        <p>{{ $contact['github'] }}</p>

                        <a href="https://github.com/prasetyoangga07" target="_blank">
                            Repository
                        </a>
                    </div>

                </div>

            </div>

            <div class="contact-action reveal" data-reveal>

                <a href="{{ asset('cv/CV-Prasetyo-Angga-Permana.pdf') }}"
                    class="btn btn--ghost"
                    target="_blank"
                    rel="noopener">
                    <i class="bi bi-download"></i>
                    Download CV
                </a>

                <button
                    class="btn btn--ghost"
                    onclick="document.getElementById('hireModal').classList.add('show')">

                    <i class="bi bi-send-fill"></i>
                    Hire Me

                </button>

            </div>

        </section>

    </main>

    </main>

    <footer class="footer">
        <p>&copy; {{ date('Y') }} {{ $profile['name'] }}. Dibuat dengan Laravel.</p>
        <button class="back-to-top" id="backToTop" aria-label="Kembali ke atas">↑</button>
    </footer>

    <!-- Certificate Modal -->
    <div class="certificate-modal" id="certificateModal">
        <div class="certificate-modal-content">

            <button class="certificate-close" id="certificateClose">
                <i class="bi bi-x-lg"></i>
            </button>

            <img id="certificateImage" src="" alt="Certificate">

            <div class="certificate-info">
                <h3 id="certificateTitle"></h3>
                <p id="certificateDesc"></p>
            </div>

        </div>
    </div>

    <!-- Hire Modal -->
    <div
        class="hire-modal"
        id="hireModal"
        onclick="if(event.target===this)this.classList.remove('show')">

        <div class="hire-box">

            <button
                class="hire-close"
                onclick="document.getElementById('hireModal').classList.remove('show')">
                <i class="bi bi-x-lg"></i>
            </button>

            <h3>Hire Me</h3>

            <p>Pilih media untuk menghubungi saya.</p>

            <a href="https://wa.me/6285725872794"
                target="_blank"
                class="hire-option">

                <i class="bi bi-whatsapp"></i>
                WhatsApp

            </a>

            <a href="https://mail.google.com/mail/?view=cm&fs=1&to={{ $contact['email'] }}&su=Collaboration%20Opportunity&body=Hi%20Prasetyo,%0A%0AI%20came%20across%20your%20portfolio%20and%20I'm%20interested%20in%20discussing%20a%20collaboration%20opportunity.%0A%0ALooking%20forward%20to%20hearing%20from%20you."
                target="_blank"
                rel="noopener noreferrer"
                class="hire-option">

                <i class="bi bi-envelope-fill"></i>
                Email

            </a>

        </div>

    </div>

    <script src="{{ asset('js/portofolio.js') }}"></script>

</body>

</html>
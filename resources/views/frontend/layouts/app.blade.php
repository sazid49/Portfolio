<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Developer Portfolio</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700;900&family=DM+Sans:wght@400;500;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}">
</head>

<body>
    <div class="background-gradient"></div>

    <!-- Navigation -->
    <nav>
        <div class="logo">Portfolio</div>
        <ul>
            <li><a href="#home">Home</a></li>
            <li><a href="#skills">Skills</a></li>
            <li><a href="#experience">Experience</a></li>
            <li><a href="#projects">Projects</a></li>
            <li><a href="#testimonials">Testimonials</a></li>
            <li><a href="#contact">Contact</a></li>
            @auth
                <li>
                    <a href="{{ url('/dashboard') }}"
                        class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] border-[#19140035] hover:border-[#1915014a] border text-[#1b1b18] dark:border-[#3E3E3A] dark:hover:border-[#62605b] rounded-sm text-sm leading-normal">
                        Dashboard
                    </a>
                </li>
            @endauth
        </ul>
    </nav>

    @yield('content')

    <!-- Contact Section -->
    <section id="contact">
        <h2 class="section-title">Let's <span class="gradient-text">Connect</span></h2>
        <p class="section-subtitle">
            Interested in working together? Let's discuss your next project
        </p>
        <div class="contact-container">
            <div class="contact-info">
                <div class="contact-item">
                    <div class="contact-icon">📧</div>
                    <div class="contact-label">Email</div>
                    <div class="contact-value">{{ $profile->email }}</div>
                </div>
                <div class="contact-item">
                    <div class="contact-icon">📱</div>
                    <div class="contact-label">Phone</div>
                    <div class="contact-value">{{ $profile->phone }}</div>
                </div>
                <div class="contact-item">
                    <div class="contact-icon">📍</div>
                    <div class="contact-label">Location</div>
                    <div class="contact-value">{{ $profile->location }}</div>
                </div>
            </div>
            <div class="cv-download">
                <a href="{{ asset('storage/' . $profile->cv_file) }}" class="btn-cv" download>Download My CV</a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="social-links">
            <a href="#" class="social-link">💼</a>
            <a href="#" class="social-link">🔗</a>
            <a href="#" class="social-link">📧</a>
            <a href="#" class="social-link">💻</a>
        </div>
        <p>&copy; 2026 Laravel Developer Portfolio. All rights reserved.</p>
    </footer>

    <script>
        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Add fade-in animation on scroll
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -100px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('fade-in-up');
                    observer.unobserve(entry.target);
                }
            });
        }, observerOptions);

        document.querySelectorAll('.skill-card, .experience-card, .project-card, .testimonial-card').forEach(el => {
            observer.observe(el);
        });

        // Parallax effect for background
        window.addEventListener('scroll', () => {
            const scrolled = window.pageYOffset;
            const gradient = document.querySelector('.background-gradient');
            gradient.style.transform = `translateY(${scrolled * 0.5}px)`;
        });
    </script>
</body>

</html>

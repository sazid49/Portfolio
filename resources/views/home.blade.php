<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Developer Portfolio</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700;900&family=DM+Sans:wght@400;500;700&display=swap"
        rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root {
            --primary: #FF2D55;
            --secondary: #5E60CE;
            --accent: #48CAE4;
            --dark: #0A0E27;
            --darker: #050816;
            --light: #F8F9FA;
            --gray: #94A3B8;
        }

        body {
            font-family: 'DM Sans', sans-serif;
            background: var(--darker);
            color: var(--light);
            overflow-x: hidden;
            line-height: 1.6;
        }

        /* Animated Background */
        .background-gradient {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            background: var(--darker);
            overflow: hidden;
        }

        .background-gradient::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -50%;
            width: 100%;
            height: 100%;
            background: radial-gradient(circle, rgba(94, 96, 206, 0.15) 0%, transparent 70%);
            animation: float 20s ease-in-out infinite;
        }

        .background-gradient::after {
            content: '';
            position: absolute;
            bottom: -50%;
            left: -50%;
            width: 100%;
            height: 100%;
            background: radial-gradient(circle, rgba(255, 45, 85, 0.1) 0%, transparent 70%);
            animation: float 25s ease-in-out infinite reverse;
        }

        @keyframes float {

            0%,
            100% {
                transform: translate(0, 0) scale(1);
            }

            50% {
                transform: translate(-30px, 30px) scale(1.1);
            }
        }

        /* Navigation */
        nav {
            position: fixed;
            top: 0;
            width: 100%;
            padding: 2rem 5%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            z-index: 1000;
            background: rgba(10, 14, 39, 0.8);
            backdrop-filter: blur(10px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }

        .logo {
            font-family: 'Playfair Display', serif;
            font-size: 1.5rem;
            font-weight: 900;
            color: var(--primary);
        }

        nav ul {
            display: flex;
            list-style: none;
            gap: 2.5rem;
        }

        nav a {
            color: var(--gray);
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s;
            position: relative;
        }

        nav a::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0;
            height: 2px;
            background: var(--primary);
            transition: width 0.3s;
        }

        nav a:hover {
            color: var(--light);
        }

        nav a:hover::after {
            width: 100%;
        }

        /* Hero Section */
        .hero {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 8rem 5% 4rem;
            position: relative;
        }

        .hero-content {
            flex: 1;
            max-width: 600px;
        }

        .hero-tag {
            display: inline-block;
            padding: 0.5rem 1.5rem;
            background: rgba(255, 45, 85, 0.1);
            border: 1px solid rgba(255, 45, 85, 0.3);
            border-radius: 50px;
            color: var(--primary);
            font-size: 0.9rem;
            font-weight: 600;
            margin-bottom: 2rem;
            animation: slideInLeft 0.8s ease-out;
        }

        .hero h1 {
            font-family: 'Playfair Display', serif;
            font-size: 4.5rem;
            font-weight: 900;
            line-height: 1.1;
            margin-bottom: 1.5rem;
            animation: slideInLeft 0.8s ease-out 0.2s both;
        }

        .hero h1 .gradient-text {
            color: var(--primary);
            display: inline-block;
        }

        .hero p {
            font-size: 1.2rem;
            color: var(--gray);
            margin-bottom: 3rem;
            max-width: 500px;
            animation: slideInLeft 0.8s ease-out 0.4s both;
        }

        .hero-buttons {
            display: flex;
            gap: 1.5rem;
            animation: slideInLeft 0.8s ease-out 0.6s both;
        }

        .btn {
            padding: 1rem 2.5rem;
            border: none;
            border-radius: 50px;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s;
            text-decoration: none;
            display: inline-block;
        }

        .btn-primary {
            background: var(--primary);
            color: white;
            box-shadow: 0 10px 30px rgba(255, 45, 85, 0.3);
        }

        .btn-primary:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 40px rgba(255, 45, 85, 0.4);
        }

        .btn-outline {
            background: transparent;
            color: var(--light);
            border: 2px solid rgba(255, 255, 255, 0.2);
        }

        .btn-outline:hover {
            border-color: var(--primary);
            color: var(--primary);
            transform: translateY(-3px);
        }

        /* Hero Image */
        .hero-image {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            animation: slideInRight 1s ease-out 0.5s both;
        }

        .image-wrapper {
            position: relative;
            width: 400px;
            height: 400px;
        }

        .image-wrapper::before {
            content: '';
            position: absolute;
            top: -20px;
            left: -20px;
            right: 20px;
            bottom: 20px;
            background: var(--primary);
            border-radius: 30% 70% 70% 30% / 30% 30% 70% 70%;
            animation: morph 8s ease-in-out infinite;
            z-index: -1;
            opacity: 0.3;
        }

        .hero-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 30% 70% 70% 30% / 30% 30% 70% 70%;
            animation: morph 8s ease-in-out infinite;
            border: 3px solid rgba(255, 255, 255, 0.1);
        }

        @keyframes morph {

            0%,
            100% {
                border-radius: 30% 70% 70% 30% / 30% 30% 70% 70%;
            }

            50% {
                border-radius: 70% 30% 30% 70% / 70% 70% 30% 30%;
            }
        }

        /* Section Styles */
        section {
            padding: 6rem 5%;
            position: relative;
        }

        .section-title {
            font-family: 'Playfair Display', serif;
            font-size: 3rem;
            font-weight: 900;
            margin-bottom: 1rem;
            text-align: center;
        }

        .section-subtitle {
            text-align: center;
            color: var(--gray);
            font-size: 1.1rem;
            margin-bottom: 4rem;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
        }

        /* Skills Section */
        .skills-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
            gap: 2rem;
            max-width: 1000px;
            margin: 0 auto;
        }

        .skill-card {
            background: rgba(255, 255, 255, 0.03);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 20px;
            padding: 2rem;
            text-align: center;
            transition: all 0.3s;
            cursor: pointer;
        }

        .skill-card:hover {
            transform: translateY(-10px);
            background: rgba(255, 255, 255, 0.05);
            border-color: var(--primary);
            box-shadow: 0 20px 40px rgba(255, 45, 85, 0.2);
        }

        .skill-icon {
            font-size: 3rem;
            margin-bottom: 1rem;
            display: inline-block;
            filter: grayscale(1);
            transition: filter 0.3s;
        }

        .skill-card:hover .skill-icon {
            filter: grayscale(0);
        }

        .skill-card h3 {
            font-size: 1.2rem;
            margin-bottom: 0.5rem;
        }

        .skill-level {
            color: var(--gray);
            font-size: 0.9rem;
        }

        /* Experience Section */
        .experience-container {
            max-width: 900px;
            margin: 0 auto;
        }

        .experience-card {
            background: rgba(255, 255, 255, 0.03);
            border-left: 4px solid var(--primary);
            border-radius: 15px;
            padding: 2.5rem;
            margin-bottom: 2rem;
            transition: all 0.3s;
        }

        .experience-card:hover {
            transform: translateX(10px);
            background: rgba(255, 255, 255, 0.05);
            box-shadow: -10px 10px 40px rgba(255, 45, 85, 0.15);
        }

        .experience-header {
            display: flex;
            justify-content: space-between;
            align-items: start;
            margin-bottom: 1rem;
        }

        .experience-title {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--light);
        }

        .experience-duration {
            background: rgba(94, 96, 206, 0.2);
            color: var(--secondary);
            padding: 0.5rem 1rem;
            border-radius: 20px;
            font-size: 0.9rem;
            font-weight: 600;
        }

        .experience-description {
            color: var(--gray);
            line-height: 1.8;
        }

        /* Projects Section */
        .projects-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2.5rem;
            max-width: 1200px;
            margin: 0 auto;
        }

        .project-card {
            background: rgba(255, 255, 255, 0.03);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 20px;
            overflow: hidden;
            transition: all 0.3s;
            cursor: pointer;
        }

        .project-card:hover {
            transform: translateY(-10px);
            border-color: var(--primary);
            box-shadow: 0 20px 60px rgba(255, 45, 85, 0.2);
        }

        .project-image {
            width: 100%;
            height: 200px;
            background: var(--secondary);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 4rem;
            position: relative;
            overflow: hidden;
        }

        .project-image::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(255, 45, 85, 0.4);
            transform: translateX(-100%);
            transition: transform 0.5s;
        }

        .project-card:hover .project-image::before {
            transform: translateX(0);
        }

        .project-content {
            padding: 2rem;
        }

        .project-title {
            font-size: 1.5rem;
            font-weight: 700;
            margin-bottom: 1rem;
        }

        .project-description {
            color: var(--gray);
            margin-bottom: 1.5rem;
            line-height: 1.7;
        }

        .project-tags {
            display: flex;
            flex-wrap: wrap;
            gap: 0.5rem;
        }

        .tag {
            background: rgba(72, 202, 228, 0.1);
            color: var(--accent);
            padding: 0.4rem 1rem;
            border-radius: 20px;
            font-size: 0.85rem;
            font-weight: 600;
        }

        /* Testimonials Section */
        .testimonials-container {
            max-width: 1200px;
            margin: 0 auto;
        }

        .testimonials-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 2.5rem;
        }

        .testimonial-card {
            background: rgba(255, 255, 255, 0.03);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 20px;
            padding: 2.5rem;
            position: relative;
            transition: all 0.3s;
        }

        .testimonial-card::before {
            content: '"';
            position: absolute;
            top: 20px;
            left: 25px;
            font-size: 5rem;
            color: var(--primary);
            opacity: 0.2;
            font-family: 'Playfair Display', serif;
            line-height: 1;
        }

        .testimonial-card:hover {
            transform: translateY(-10px);
            border-color: var(--primary);
            background: rgba(255, 255, 255, 0.05);
            box-shadow: 0 20px 40px rgba(255, 45, 85, 0.2);
        }

        .testimonial-text {
            color: var(--light);
            font-size: 1.05rem;
            line-height: 1.8;
            margin-bottom: 2rem;
            position: relative;
            z-index: 1;
        }

        .testimonial-author {
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .author-avatar {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            background: var(--secondary);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            font-weight: 700;
            color: white;
            flex-shrink: 0;
        }

        .author-info h4 {
            color: var(--light);
            font-size: 1.1rem;
            font-weight: 700;
            margin-bottom: 0.3rem;
        }

        .author-info p {
            color: var(--gray);
            font-size: 0.9rem;
        }

        .rating {
            margin-top: 1.5rem;
            display: flex;
            gap: 0.3rem;
        }

        .star {
            color: #FFD700;
            font-size: 1.2rem;
        }

        /* Contact Section */
        .contact-container {
            max-width: 600px;
            margin: 0 auto;
            text-align: center;
        }

        .contact-info {
            display: flex;
            justify-content: center;
            gap: 2rem;
            margin-top: 3rem;
            flex-wrap: wrap;
        }

        .cv-download {
            margin-top: 3rem;
        }

        .btn-cv {
            padding: 1.2rem 3rem;
            background: var(--secondary);
            color: white;
            border: none;
            border-radius: 50px;
            font-size: 1.1rem;
            font-weight: 700;
            cursor: pointer;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 0.8rem;
            transition: all 0.3s;
            box-shadow: 0 10px 30px rgba(94, 96, 206, 0.3);
        }

        .btn-cv:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 40px rgba(94, 96, 206, 0.5);
            background: var(--accent);
        }

        .btn-cv::before {
            content: '📥';
            font-size: 1.3rem;
        }

        .contact-item {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 0.5rem;
            padding: 1.5rem;
            background: rgba(255, 255, 255, 0.03);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 15px;
            transition: all 0.3s;
            flex: 1;
            min-width: 150px;
        }

        .contact-item:hover {
            border-color: var(--primary);
            transform: translateY(-5px);
            background: rgba(255, 255, 255, 0.05);
        }

        .contact-icon {
            font-size: 2rem;
        }

        .contact-label {
            color: var(--gray);
            font-size: 0.9rem;
        }

        .contact-value {
            color: var(--light);
            font-weight: 600;
        }

        /* Footer */
        footer {
            text-align: center;
            padding: 3rem 5%;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            color: var(--gray);
        }

        .social-links {
            display: flex;
            justify-content: center;
            gap: 1.5rem;
            margin-bottom: 2rem;
        }

        .social-link {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.1);
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--light);
            text-decoration: none;
            font-size: 1.3rem;
            transition: all 0.3s;
        }

        .social-link:hover {
            background: var(--primary);
            border-color: var(--primary);
            transform: translateY(-5px);
        }

        /* Animations */
        @keyframes slideInLeft {
            from {
                opacity: 0;
                transform: translateX(-50px);
            }

            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        @keyframes slideInRight {
            from {
                opacity: 0;
                transform: translateX(50px);
            }

            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .fade-in-up {
            animation: fadeInUp 0.8s ease-out;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .hero {
                flex-direction: column-reverse;
                text-align: center;
                padding-top: 6rem;
            }

            .hero-content {
                max-width: 100%;
            }

            .hero h1 {
                font-size: 3rem;
            }

            .hero-buttons {
                justify-content: center;
            }

            .image-wrapper {
                width: 300px;
                height: 300px;
                margin-bottom: 3rem;
            }

            nav ul {
                gap: 1.5rem;
            }

            nav {
                padding: 1.5rem 5%;
            }

            .section-title {
                font-size: 2rem;
            }

            .skills-grid {
                grid-template-columns: repeat(auto-fit, minmax(120px, 1fr));
            }

            .experience-header {
                flex-direction: column;
                gap: 1rem;
            }
        }

        /* GRID */
        .testimonials-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }

        /* CARD */
        .testimonial-card {
            background: rgba(255, 255, 255, 0.03);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 20px;
            padding: 30px;
            transition: 0.3s;
        }

        .testimonial-card:hover {
            transform: translateY(-8px);
            border-color: #FF2D55;
            box-shadow: 0 20px 40px rgba(255, 45, 85, 0.2);
        }

        /* TEXT */
        .testimonial-text {
            color: #ccc;
            line-height: 1.8;
            margin-bottom: 25px;
        }

        /* AUTHOR SECTION */
        .testimonial-author {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        /* AVATAR (MAIN FIX) */
        .author-avatar {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            overflow: hidden;
            /* 🔥 IMPORTANT */
            display: flex;
            align-items: center;
            justify-content: center;
            background: #2d3748;
            color: white;
            font-weight: bold;
            flex-shrink: 0;
        }

        /* IMAGE INSIDE AVATAR */
        .author-avatar img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            /* 🔥 IMPORTANT */
        }

        /* INFO */
        .author-info h4 {
            color: white;
            margin-bottom: 4px;
        }

        .author-info p {
            color: #aaa;
            font-size: 14px;
        }

        /* RATING */
        .rating {
            margin-top: 15px;
        }

        .star {
            color: #FFD700;
            font-size: 18px;
        }
    </style>
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

    <!-- Hero Section -->
    <section class="hero" id="home">
        <div class="hero-content">
            <div class="hero-tag">Laravel Developer</div>
            <h1>
                Building <span class="gradient-text">Powerful</span><br>
                Web Applications
            </h1>
            <p>
                Crafting robust and scalable web solutions with Laravel, PHP, and modern JavaScript frameworks.
                3 years of experience turning ideas into reality.
            </p>
            <div class="hero-buttons">
                <a href="#projects" class="btn btn-primary">View My Work</a>
                <a href="#contact" class="btn btn-outline">Get In Touch</a>
            </div>
        </div>
        <div class="hero-image">
            <div class="image-wrapper">
                <img src="{{ asset('IMG_20260424_221524.png') }}" alt="Developer Portrait">
            </div>
        </div>
    </section>

    <!-- Skills Section -->
    <section id="skills">
        <h2 class="section-title">Technical <span class="gradient-text">Skills</span></h2>
        <p class="section-subtitle">
            Proficient in modern web development technologies and frameworks
        </p>
        <div class="skills-grid">
            @foreach ($skills as $skill)
                <div class="skill-card">
                    <div class="skill-icon">{{ $skill->icon }}</div>
                    <h3>{{ $skill->name }}</h3>
                    <div class="skill-level">{{ $skill->level }}</div>
                </div>
            @endforeach
        </div>
    </section>

    <!-- Experience Section -->
    <section id="experience">
        <h2 class="section-title">Professional <span class="gradient-text">Experience</span></h2>
        <p class="section-subtitle">
            3 years of building innovative web solutions
        </p>
        <div class="experience-container">

            @foreach ($experiences as $experience)
                <div class="experience-card">
                    <div class="experience-header">
                        <div>
                            <h3 class="experience-title">{{ $experience->title }}</h3>
                            <p style="color: var(--gray); margin-top: 0.5rem;">{{ $experience->company }}</p>
                        </div>
                        <div class="experience-duration">{{ $experience->duration }}</div>
                    </div>
                    <p class="experience-description">
                        {{ $experience->description }}
                    </p>
                </div>
            @endforeach

        </div>
    </section>

    <!-- Projects Section -->
    <section id="projects">
        <h2 class="section-title">Featured <span class="gradient-text">Projects</span></h2>
        <p class="section-subtitle">
            Showcasing some of my best work across various domains
        </p>
        <div class="projects-grid">
            @foreach ($projects as $project)
                <div class="project-card">
                    <div class="project-image">{{ $project->icon }}</div>
                    <div class="project-content">
                        <h3 class="project-title">{{ $project->title }}</h3>
                        <p class="project-description">
                            {{ $project->description }}
                        </p>
                        <div class="project-tags">
                            @foreach ($project->tags as $tag)
                                <span class="tag">{{ $tag->tag }}</span>
                            @endforeach

                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </section>

    <!-- Testimonials Section -->
    <section id="testimonials">
        <h2 class="section-title">Client <span class="gradient-text">Testimonials</span></h2>
        <p class="section-subtitle">
            What clients say about working with me
        </p>
        <div class="testimonials-container">
            <div class="testimonials-grid">
                @foreach ($testimonials as $testimonial)
                    <div class="testimonial-card">

                        <!-- MESSAGE -->
                        <p class="testimonial-text">
                            "{{ $testimonial->message }}"
                        </p>

                        <!-- AUTHOR -->
                        <div class="testimonial-author">

                            <!-- AVATAR -->
                            <div class="author-avatar">
                                @if ($testimonial->avatar)
                                    <img src="{{ asset('storage/' . $testimonial->avatar) }}" alt="">
                                @else
                                    {{ strtoupper(substr($testimonial->name, 0, 2)) }}
                                @endif
                            </div>

                            <!-- INFO -->
                            <div class="author-info">
                                <h4>{{ $testimonial->name }}</h4>
                                <p>{{ $testimonial->designation }}, {{ $testimonial->company }}</p>
                            </div>

                        </div>

                        <!-- ⭐ RATING -->
                        <div class="rating">
                            @for ($i = 1; $i <= 5; $i++)
                                <span class="star">
                                    {{ $i <= $testimonial->rating ? '★' : '☆' }}
                                </span>
                            @endfor
                        </div>

                    </div>
                @endforeach
            </div>
        </div>
    </section>

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
                    <div class="contact-value">your.email@example.com</div>
                </div>
                <div class="contact-item">
                    <div class="contact-icon">📱</div>
                    <div class="contact-label">Phone</div>
                    <div class="contact-value">+880 XXX-XXXX</div>
                </div>
                <div class="contact-item">
                    <div class="contact-icon">📍</div>
                    <div class="contact-label">Location</div>
                    <div class="contact-value">Dhaka, Bangladesh</div>
                </div>
            </div>
            <div class="cv-download">
                <a href="#" class="btn-cv" download>Download My CV</a>
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

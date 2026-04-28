@extends('frontend.layouts.app')

@section('content')
    <!-- Hero Section -->
    <section class="hero" id="home">
        <div class="hero-content">
            <div class="hero-tag">{{ $profile->name }}</div>
            <h1>
                {{ $profile->title }}
            </h1>
            <p>
                {{ $profile->description }}
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
@endsection

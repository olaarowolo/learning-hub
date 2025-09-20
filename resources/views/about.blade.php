@extends('layouts.app')

@section('title', 'About Learning Hub - Interactive Educational Resources by OA Tutors')

@section('meta')
    <!-- SEO Meta Tags -->
    <meta name="description" content="Learn about Learning Hub by OA Tutors - An interactive educational platform providing comprehensive resources for UK and Nigerian curricula, featuring engaging lessons, activities, and our unique Purpose-in-Motion™ program.">
    <meta name="keywords" content="about learning hub, OA Tutors, educational platform, UK curriculum, Nigerian curriculum, EYFS, KS1, KS2, KS3, KS4, KS5, Primary, JSS, SSS, Purpose-in-Motion, interactive learning">
    <meta name="author" content="OA Tutors">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="https://learn.oatutors.co.uk/about" />

    @include('partials.meta-favicons')

    <link rel="stylesheet" href="{{ asset('css/search.css') }}">
@endsection

@section('content')
<a class="skip-link" href="#main-content">Skip to content</a>

<main id="main-content">
    <!-- Hero Section -->
    <section class="hero-section" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white; padding: 4rem 0; text-align: center;">
        <div style="max-width: 1200px; margin: 0 auto; padding: 0 1rem;">
            <h1 style="font-size: 3rem; margin-bottom: 1rem; font-weight: 700;">About Learning Hub</h1>
            <p style="font-size: 1.25rem; margin-bottom: 2rem; opacity: 0.9;">Empowering learners across the UK and Nigeria with comprehensive, interactive educational resources</p>
        </div>
    </section>

    <!-- Mission Section -->
    <section style="padding: 4rem 0; background: #f8f9fa;">
        <div style="max-width: 1200px; margin: 0 auto; padding: 0 1rem;">
            <div style="text-align: center; margin-bottom: 3rem;">
                <h2 style="font-size: 2.5rem; margin-bottom: 1rem; color: #2c3e50;">Our Mission</h2>
                <p style="font-size: 1.1rem; color: #6c757d; max-width: 800px; margin: 0 auto;">To provide accessible, high-quality educational resources that inspire learning and foster academic excellence across different curricula and educational stages.</p>
            </div>

            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 2rem; margin-top: 3rem;">
                <div style="background: white; padding: 2rem; border-radius: 10px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); text-align: center;">
                    <div style="width: 60px; height: 60px; background: #667eea; border-radius: 50%; margin: 0 auto 1rem; display: flex; align-items: center; justify-content: center; color: white; font-size: 1.5rem; font-weight: bold;">🎓</div>
                    <h3 style="margin-bottom: 1rem; color: #2c3e50;">Quality Education</h3>
                    <p style="color: #6c757d;">Delivering comprehensive, curriculum-aligned educational content that meets international standards.</p>
                </div>

                <div style="background: white; padding: 2rem; border-radius: 10px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); text-align: center;">
                    <div style="width: 60px; height: 60px; background: #764ba2; border-radius: 50%; margin: 0 auto 1rem; display: flex; align-items: center; justify-content: center; color: white; font-size: 1.5rem; font-weight: bold;">🌍</div>
                    <h3 style="margin-bottom: 1rem; color: #2c3e50;">Global Accessibility</h3>
                    <p style="color: #6c757d;">Supporting both UK and Nigerian educational systems to serve diverse learning communities worldwide.</p>
                </div>

                <div style="background: white; padding: 2rem; border-radius: 10px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); text-align: center;">
                    <div style="width: 60px; height: 60px; background: #f093fb; border-radius: 50%; margin: 0 auto 1rem; display: flex; align-items: center; justify-content: center; color: white; font-size: 1.5rem; font-weight: bold;">🚀</div>
                    <h3 style="margin-bottom: 1rem; color: #2c3e50;">Innovation</h3>
                    <p style="color: #6c757d;">Embracing cutting-edge educational technology and interactive learning methodologies.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- What We Offer Section -->
    <section style="padding: 4rem 0;">
        <div style="max-width: 1200px; margin: 0 auto; padding: 0 1rem;">
            <h2 style="text-align: center; font-size: 2.5rem; margin-bottom: 3rem; color: #2c3e50;">What We Offer</h2>

            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(350px, 1fr)); gap: 3rem;">
                <div>
                    <h3 style="font-size: 1.5rem; margin-bottom: 1rem; color: #667eea;">📚 Comprehensive Curriculum Coverage</h3>
                    <ul style="list-style: none; padding: 0; color: #6c757d;">
                        <li style="margin-bottom: 0.5rem; padding-left: 1.5rem; position: relative;">Early Years Foundation Stage (EYFS)</li>
                        <li style="margin-bottom: 0.5rem; padding-left: 1.5rem; position: relative;">Key Stage 1 & 2 (Years 1-6)</li>
                        <li style="margin-bottom: 0.5rem; padding-left: 1.5rem; position: relative;">Key Stage 3 & 4 (Years 7-11)</li>
                        <li style="margin-bottom: 0.5rem; padding-left: 1.5rem; position: relative;">Key Stage 5 (Years 12-13)</li>
                        <li style="margin-bottom: 0.5rem; padding-left: 1.5rem; position: relative;">Nigerian Curriculum (Primary 1-6, JSS 1-3, SSS 1-3)</li>
                    </ul>
                </div>

                <div>
                    <h3 style="font-size: 1.5rem; margin-bottom: 1rem; color: #764ba2;">🎯 Interactive Learning Experience</h3>
                    <ul style="list-style: none; padding: 0; color: #6c757d;">
                        <li style="margin-bottom: 0.5rem; padding-left: 1.5rem; position: relative;">Engaging lesson plans and activities</li>
                        <li style="margin-bottom: 0.5rem; padding-left: 1.5rem; position: relative;">Interactive worksheets and resources</li>
                        <li style="margin-bottom: 0.5rem; padding-left: 1.5rem; position: relative;">Progress tracking and assessment tools</li>
                        <li style="margin-bottom: 0.5rem; padding-left: 1.5rem; position: relative;">Multimedia learning materials</li>
                        <li style="margin-bottom: 0.5rem; padding-left: 1.5rem; position: relative;">Personalized learning paths</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Purpose-in-Motion Section -->
    <section style="padding: 4rem 0; background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%); color: white;">
        <div style="max-width: 1200px; margin: 0 auto; padding: 0 1rem; text-align: center;">
            <h2 style="font-size: 2.5rem; margin-bottom: 2rem;">Purpose-in-Motion™ Program</h2>
            <p style="font-size: 1.2rem; margin-bottom: 2rem; opacity: 0.9; max-width: 800px; margin-left: auto; margin-right: auto;">
                Our signature program designed to help students discover their purpose while developing essential life skills and academic excellence.
            </p>
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 2rem; margin-top: 3rem;">
                <div style="background: rgba(255,255,255,0.1); padding: 2rem; border-radius: 10px; backdrop-filter: blur(10px);">
                    <h4 style="margin-bottom: 1rem; font-size: 1.2rem;">Self-Discovery</h4>
                    <p style="opacity: 0.8;">Guided activities to help students identify their strengths, interests, and aspirations.</p>
                </div>
                <div style="background: rgba(255,255,255,0.1); padding: 2rem; border-radius: 10px; backdrop-filter: blur(10px);">
                    <h4 style="margin-bottom: 1rem; font-size: 1.2rem;">Goal Setting</h4>
                    <p style="opacity: 0.8;">Structured frameworks for setting and achieving both short-term and long-term objectives.</p>
                </div>
                <div style="background: rgba(255,255,255,0.1); padding: 2rem; border-radius: 10px; backdrop-filter: blur(10px);">
                    <h4 style="margin-bottom: 1rem; font-size: 1.2rem;">Life Skills</h4>
                    <p style="opacity: 0.8;">Essential skills for personal development, career readiness, and lifelong learning.</p>
                </div>
            </div>
            <div style="margin-top: 3rem;">
                <a href="{{ url('/data/purpose/index.html') }}" style="background: white; color: #f5576c; padding: 1rem 2rem; border-radius: 25px; text-decoration: none; font-weight: 600; display: inline-block; transition: transform 0.3s ease;" onmouseover="this.style.transform='translateY(-2px)'" onmouseout="this.style.transform='translateY(0)'">
                    Learn More About Purpose-in-Motion™
                </a>
            </div>
        </div>
    </section>

    <!-- Technology Integration Section -->
    <section style="padding: 4rem 0; background: #f8f9fa;">
        <div style="max-width: 1200px; margin: 0 auto; padding: 0 1rem;">
            <h2 style="text-align: center; font-size: 2.5rem; margin-bottom: 3rem; color: #2c3e50;">Technology Integration</h2>
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 3rem;">
                <div style="text-align: center;">
                    <div style="width: 80px; height: 80px; background: #667eea; border-radius: 50%; margin: 0 auto 1rem; display: flex; align-items: center; justify-content: center; color: white; font-size: 2rem;">📱</div>
                    <h3 style="margin-bottom: 1rem; color: #2c3e50;">Moodle Integration</h3>
                    <p style="color: #6c757d;">Seamless integration with Moodle Learning Management System for enhanced course delivery and student management.</p>
                </div>
                <div style="text-align: center;">
                    <div style="width: 80px; height: 80px; background: #764ba2; border-radius: 50%; margin: 0 auto 1rem; display: flex; align-items: center; justify-content: center; color: white; font-size: 2rem;">⚡</div>
                    <h3 style="margin-bottom: 1rem; color: #2c3e50;">Modern Framework</h3>
                    <p style="color: #6c757d;">Built with Laravel and modern web technologies to ensure fast, secure, and scalable performance.</p>
                </div>
                <div style="text-align: center;">
                    <div style="width: 80px; height: 80px; background: #f093fb; border-radius: 50%; margin: 0 auto 1rem; display: flex; align-items: center; justify-content: center; color: white; font-size: 2rem;">📊</div>
                    <h3 style="margin-bottom: 1rem; color: #2c3e50;">Progress Tracking</h3>
                    <p style="color: #6c757d;">Advanced analytics and progress tracking to monitor student development and achievement.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action Section -->
    <section style="padding: 4rem 0; text-align: center;">
        <div style="max-width: 800px; margin: 0 auto; padding: 0 1rem;">
            <h2 style="font-size: 2.5rem; margin-bottom: 1rem; color: #2c3e50;">Ready to Start Your Learning Journey?</h2>
            <p style="font-size: 1.2rem; margin-bottom: 2rem; color: #6c757d;">Join thousands of students already benefiting from our comprehensive educational resources.</p>
            <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;">
                <a href="{{ route('register') }}" style="background: #667eea; color: white; padding: 1rem 2rem; border-radius: 25px; text-decoration: none; font-weight: 600; display: inline-block; transition: transform 0.3s ease;" onmouseover="this.style.transform='translateY(-2px)'" onmouseout="this.style.transform='translateY(0)'">
                    Get Started Today
                </a>
                <a href="{{ url('/') }}" style="background: transparent; color: #667eea; padding: 1rem 2rem; border: 2px solid #667eea; border-radius: 25px; text-decoration: none; font-weight: 600; display: inline-block; transition: all 0.3s ease;" onmouseover="this.style.background='#667eea'; this.style.color='white'" onmouseout="this.style.background='transparent'; this.style.color='#667eea'">
                    Explore Resources
                </a>
            </div>
        </div>
    </section>
</main>

<script src="{{ asset('js/nav.js') }}"></script>
@endsection

@push('styles')
<style>
    .hero-section h1 {
        animation: fadeInUp 1s ease-out;
    }

    .hero-section p {
        animation: fadeInUp 1s ease-out 0.2s both;
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

    .year-grid, .grid {
        display: grid;
        gap: 1rem;
    }

    .year-card {
        background: white;
        padding: 1.5rem;
        border-radius: 10px;
        text-decoration: none;
        color: #2c3e50;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    }

    .year-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 5px 20px rgba(0,0,0,0.15);
    }

    .ks-heading {
        text-align: center;
        margin: 3rem 0 2rem;
        font-size: 2rem;
        color: #2c3e50;
        position: relative;
    }

    .ks-heading::after {
        content: '';
        display: block;
        width: 60px;
        height: 3px;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        margin: 1rem auto 0;
        border-radius: 2px;
    }

    @media (max-width: 768px) {
        .hero-section h1 {
            font-size: 2rem;
        }

        .hero-section p {
            font-size: 1rem;
        }

        .ks-heading {
            font-size: 1.5rem;
        }
    }
</style>
@endpush

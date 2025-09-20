@extends('layouts.app')

@section('title', 'Purpose-in-Motion™ – OA Tutors')

@section('meta')
    <!-- SEO Meta Tags -->
    <meta name="description" content="Learning Hub by OA Tutors - Interactive educational resources for EYFS, KS1, KS2, KS3, KS4, and KS5. Discover engaging lessons, activities, and Purpose-in-Motion™ program.">
    <meta name="keywords" content="learning hub, OA Tutors, education, EYFS, KS1, KS2, KS3, KS4, KS5, curriculum, lessons, activities, Purpose-in-Motion">
    <meta name="author" content="OA Tutors">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="https://learn.oatutors.co.uk/" />

    @include('partials.meta-favicons')

    <link rel="stylesheet" href="{{ asset('css/search.css') }}">
@endsection

@section('content')
<a class="skip-link" href="#main-content">Skip to content</a>

<main id="main-content">
    <!-- Hero Section -->
    <section class="hero-section" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white; padding: 4rem 0; text-align: center;">
        <div style="max-width: 1200px; margin: 0 auto; padding: 0 1rem;">
            <h1 style="font-size: 3rem; margin-bottom: 1rem; font-weight: 700;">Purpose-in-Motion™</h1>
            <p style="font-size: 1.25rem; margin-bottom: 2rem; opacity: 0.9;">Beyond Grades. Towards Purpose. We help children and teens discover their WHY, so school becomes a stepping stone, not a stumbling block.</p>
        </div>
    </section>

    <!-- Mission Section -->
    <section style="padding: 4rem 0; background: #f8f9fa;">
        <div style="max-width: 1200px; margin: 0 auto; padding: 0 1rem;">
            <div style="text-align: center; margin-bottom: 3rem;">
                <h2 style="font-size: 2.5rem; margin-bottom: 1rem; color: #2c3e50;">Why Parents Need This</h2>
                <p style="font-size: 1.1rem; color: #6c757d; max-width: 800px; margin: 0 auto;">Does this sound familiar? "My child doesn’t see the point of studying." "My teen feels lost about the future." "My child is bright but unmotivated."</p>
            </div>
        </div>
    </section>

    <!-- Packages Section -->
    <section style="padding: 4rem 0;">
        <div style="max-width: 1200px; margin: 0 auto; padding: 0 1rem;">
            <h2 style="text-align: center; font-size: 2.5rem; margin-bottom: 3rem; color: #2c3e50;">Our Packages</h2>

            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 2rem;">
                <div style="background: white; padding: 2rem; border-radius: 10px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); text-align: center;">
                    <h3 style="margin-bottom: 1rem; color: #2c3e50;">Starter Path</h3>
                    <p style="color: #6c757d;">Ages 8–11 | Primary School</p>
                    <ul style="list-style: none; padding: 0; color: #6c757d;">
                        <li>Focus on self-awareness and why learning matters</li>
                        <li>Link school subjects to real-life applications</li>
                        <li>Early purpose discovery exercises: values, interests, natural talents</li>
                    </ul>
                    <p><strong>Price:</strong> £40/month (add-on) or £100 standalone</p>
                </div>

                <div style="background: white; padding: 2rem; border-radius: 10px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); text-align: center;">
                    <h3 style="margin-bottom: 1rem; color: #2c3e50;">Momentum Path</h3>
                    <p style="color: #6c757d;">Ages 11–14 | Secondary School</p>
                    <ul style="list-style: none; padding: 0; color: #6c757d;">
                        <li>Connect school learning to career possibilities</li>
                        <li>Motivation, discipline, and long-term planning</li>
                        <li>School subjects → career purpose mapping exercises</li>
                    </ul>
                    <p><strong>Price:</strong> £60/month</p>
                </div>

                <div style="background: white; padding: 2rem; border-radius: 10px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); text-align: center;">
                    <h3 style="margin-bottom: 1rem; color: #2c3e50;">Launch Path</h3>
                    <p style="color: #6c757d;">Ages 15–18 | GCSE / A-Level</p>
                    <ul style="list-style: none; padding: 0; color: #6c757d;">
                        <li>Deep dive into career direction and life purpose alignment</li>
                        <li>Tools for goal-setting, productivity, career exploration</li>
                        <li>“Purpose Portfolio”: personalized roadmap for your teen</li>
                    </ul>
                    <p><strong>Price:</strong> £90/month</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action Section -->
    <section style="padding: 4rem 0; text-align: center;">
        <div style="max-width: 800px; margin: 0 auto; padding: 0 1rem;">
            <h2 style="font-size: 2.5rem; margin-bottom: 1rem; color: #2c3e50;">Ready to Start Your Journey?</h2>
            <p style="font-size: 1.2rem; margin-bottom: 2rem; color: #6c757d;">Book a free discovery call or add Purpose Coaching to your existing tutoring package.</p>
            <a href="{{ route('book-now.form') }}" style="background: #667eea; color: white; padding: 1rem 2rem; border-radius: 25px; text-decoration: none; font-weight: 600; display: inline-block; transition: transform 0.3s ease;" onmouseover="this.style.transform='translateY(-2px)'" onmouseout="this.style.transform='translateY(0)'"><strong>Book Now</strong></a>
        </div>
    </section>
</main>

<script src="{{ asset('js/nav.js') }}"></script>
@endsection

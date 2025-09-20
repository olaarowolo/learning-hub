@extends('layouts.app')

@section('title', 'Interactive Activities - Learning Hub')

@section('meta')
    <!-- SEO Meta Tags -->
    <meta name="description" content="Engaging and interactive activities for all key stages, from EYFS to KS5. Explore fun learning resources on the Learning Hub by OA Tutors.">
    <meta name="keywords" content="interactive activities, learning games, education, EYFS, KS1, KS2, KS3, KS4, KS5, OA Tutors">
    <meta name="author" content="OA Tutors">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="{{ url('/activities') }}">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url('/activities') }}">
    <meta property="og:title" content="Interactive Activities - Learning Hub by OA Tutors">
    <meta property="og:description" content="Engaging and interactive activities for all key stages, from EYFS to KS5.">
    <meta property="og:image" content="{{ asset('favicons/android-icon-192x192.png') }}">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ url('/activities') }}">
    <meta property="twitter:title" content="Interactive Activities - Learning Hub by OA Tutors">
    <meta property="twitter:description" content="Engaging and interactive activities for all key stages, from EYFS to KS5.">
    <meta property="twitter:image" content="{{ asset('favicons/android-icon-192x192.png') }}">

    <!-- Favicon Links -->
    <link rel="icon" type="image/x-icon" href="{{ asset('favicons/favicon.ico') }}">
    <link rel="apple-touch-icon" href="{{ asset('favicons/apple-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicons/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicons/favicon-16x16.png') }}">
@endsection

@section('content')
<header>
    <nav aria-label="breadcrumb" class="breadcrumb-nav">
        <a href="{{ route('home') }}">Home</a> >
        <span>Activities</span>
    </nav>
    <h1>Interactive Activities</h1>
    <p>Discover fun and engaging activities for every year group!</p>
</header>

<main id="main-content">
    <!-- EYFS -->
    <h2 class="ks-heading">Early Years Foundation Stage</h2>
    <div class="year-grid">
        <a href="{{ route('br.yeargroups.KS0.y0.yr0-index') }}" class="year-card reception"><h2>Pre-School Ideas</h2></a>
        <a href="{{ route('br.yeargroups.EYFS.y0.yrR-index') }}" class="year-card reception"><h2>Reception</h2></a>
    </div>

    <!-- KS1 -->
    <h2 class="ks-heading">Key Stage 1</h2>
    <div class="year-grid">
        <a href="{{ route('br.yeargroups.KS1.y1.yr1-index') }}" class="year-card year-1"><h2>Year 1</h2></a>
        <a href="{{ route('br.yeargroups.KS1.y2.yr2-index') }}" class="year-card year-2"><h2>Year 2</h2></a>
    </div>

    <!-- KS2 -->
    <h2 class="ks-heading">Key Stage 2</h2>
    <div class="year-grid">
        <a href="{{ route('br.yeargroups.KS2.y3.yr3-index') }}" class="year-card year-3"><h2>Year 3</h2></a>
        <a href="{{ route('br.yeargroups.KS2.y4.yr4-index') }}" class="year-card year-4"><h2>Year 4</h2></a>
        <a href="{{ route('br.yeargroups.KS2.y5.yr5-index') }}" class="year-card year-5"><h2>Year 5</h2></a>
        <a href="{{ route('br.yeargroups.KS2.y6.yr6-index') }}" class="year-card year-6"><h2>Year 6</h2></a>
    </div>

    <!-- KS3 -->
    <h2 class="ks-heading">Key Stage 3</h2>
    <div class="year-grid">
        <a href="{{ route('br.yeargroups.KS3.y7.yr7-index') }}" class="year-card year-7"><h2>Year 7</h2></a>
        <a href="{{ route('br.yeargroups.KS3.y8.yr8-index') }}" class="year-card year-8"><h2>Year 8</h2></a>
        <a href="{{ route('br.yeargroups.KS3.y9.yr9-index') }}" class="year-card year-9"><h2>Year 9</h2></a>
    </div>

    <!-- KS4 -->
    <h2 class="ks-heading">Key Stage 4</h2>
    <div class="year-grid">
        <a href="{{ route('br.yeargroups.KS4.y10.yr10-index') }}" class="year-card year-10"><h2>Year 10</h2></a>
        <a href="{{ route('br.yeargroups.KS4.y11.yr11-index') }}" class="year-card year-11"><h2>Year 11</h2></a>
    </div>

    <!-- KS5 -->
    <h2 class="ks-heading">Key Stage 5</h2>
    <div class="year-grid">
        <a href="{{ route('br.yeargroups.KS5.y12.yr12-index') }}" class="year-card year-12"><h2>Year 12</h2></a>
        <a href="{{ route('br.yeargroups.KS5.y13.yr13-index') }}" class="year-card year-13"><h2>Year 13</h2></a>
    </div>
</main>

<footer>
    <div class="footer-container">
        <!-- About -->
        <div class="footer-column">
            <h4>About Learning Hub</h4>
            <p>Learning Hub provides interactive, curriculum-aligned educational resources for students in the UK. Helping children build confidence and mastery in core subjects.</p>
            <p id="copyright-year">© 2025 OA Tutors</p>
        </div>

        <!-- Quick Links -->
        <div class="footer-column">
            <h4>Quick Links</h4>
            <ul>
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="/maths.html">Maths</a></li>
                <li><a href="/english.html">English</a></li>
                <li><a href="/contact.html">Contact</a></li>
                <li><a href="/privacy.html">Privacy Policy</a></li>
                <li><a href="/terms.html">Terms of Service</a></li>
                <li><a href="/safeguarding.html">Safeguarding</a></li>
            </ul>
        </div>

        <!-- Resources -->
        <div class="footer-column">
            <h4>Resources</h4>
            <ul>
                <li><a href="{{ route('activities.index') }}">Activities</a></li>
                <li><a href="/worksheets.html">Worksheets</a></li>
                <li><a href="{{ route('blog.index') }}">Blog</a></li>
            </ul>
        </div>

        <!-- Contact & Social -->
        <div class="footer-column">
            <h4>Contact & Follow Us</h4>
            <p>Email: <a href="mailto:info@oatutors.co.uk">info@oatutors.co.uk</a></p>
            <p>Phone: <a href="tel:+441234567890">+44 123 456 7890</a></p>
            <div class="social-icons">
                <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                <a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </div>

    <!-- Bottom Bar -->
    <div class="footer-bottom">
        <p>Designed & Developed by <a href="https://oatutors.co.uk">OA Tutors</a> • All Rights Reserved • <a href="/terms.html">Terms of Service</a> • <a href="/privacy.html">Privacy Policy</a> • <a href="/safeguarding.html">Safeguarding</a></p>
    </div>
</footer>

<button id="scrollTopBtn" aria-label="Back to top" title="Back to top">↑</button>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        // Dynamic copyright year
        const yearEl = document.getElementById("copyright-year");
        if (yearEl) {
            const currentYear = new Date().getFullYear();
            yearEl.textContent = `© ${currentYear} OA Tutors`;
        }

        // Scroll to top button
        const scrollTopBtn = document.getElementById("scrollTopBtn");
        if (scrollTopBtn) {
            window.addEventListener("scroll", () => {
                scrollTopBtn.style.display = document.documentElement.scrollTop > 300 ? "flex" : "none";
            });
            scrollTopBtn.addEventListener("click", () => window.scrollTo({ top: 0, behavior: "smooth" }));
        }
    });
</script>
@endsection

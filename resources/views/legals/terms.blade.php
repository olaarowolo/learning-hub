@extends('layouts.app')

@section('title', 'Terms of Service')

@section('content')
@include('partials.breadcrumb', ['title' => $breadcrumbTitle ?? 'Terms of Service'])

<div class="container my-5">
    <header class="text-center">
        <h1>Terms of Service</h1>
        <p>Welcome to Learning Hub by OA Tutors</p>
    </header>

    <main>
        <div class="terms-content">
            <p>These Terms of Service govern your use of our educational resources and website.</p>

            <h2>1. Acceptance of Terms</h2>
            <p>By accessing or using our services, you agree to be bound by these Terms of Service and our Privacy Policy.</p>

            <h2>2. Use of Services</h2>
            <ul>
                <li>You agree to use the services only for lawful educational purposes.</li>
                <li>You will not misuse or interfere with the services.</li>
                <li>We reserve the right to suspend or terminate access for violations.</li>
            </ul>

            <h2>3. Intellectual Property</h2>
            <p>All content provided is owned by OA Tutors or its licensors and is protected by copyright laws.</p>

            <h2>4. Disclaimer of Warranties</h2>
            <p>Our services are provided "as is" without warranties of any kind.</p>

            <h2>5. Limitation of Liability</h2>
            <p>OA Tutors is not liable for any damages arising from the use of our services.</p>

            <h2>6. Changes to Terms</h2>
            <p>We may update these Terms of Service at any time. Continued use constitutes acceptance of changes.</p>

            <h2>7. Contact Us</h2>
            <p>If you have any questions about these Terms, please contact us:</p>
            <ul>
                <li>Email: <a href="mailto:terms@oatutors.co.uk">terms@oatutors.co.uk</a></li>
            </ul>

            <p class="last-updated"><em>Last updated: {{ now()->format('F j, Y') }}</em></p>
        </div>
    </main>
</div>

<style>
    :root {
        --primary: #2196f3;
        --bg-color: #f8f9fa;
        --text-dark: #343a40;
        --text-light: #6c757d;
        --card-bg: #ffffff;
        --border-color: #dee2e6;
    }
    body {
        font-family: 'Poppins', sans-serif;
        background-color: var(--bg-color);
        color: var(--text-dark);
        line-height: 1.6;
    }
    header {
        background: linear-gradient(45deg, var(--primary), #64b5f6);
        color: white;
        padding: 2rem;
        border-radius: 10px;
        margin-bottom: 2rem;
    }
    header h1 {
        font-size: 2rem;
        margin-bottom: 0.5rem;
        font-weight: 700;
        text-shadow: 1px 1px 3px rgba(0,0,0,0.2);
    }
    header p {
        font-size: 1.2rem;
        font-weight: 500;
        opacity: 0.9;
    }
    main {
        max-width: 900px;
        margin: auto;
        background-color: var(--card-bg);
        border-radius: 15px;
        padding: 2.5rem 2rem;
        box-shadow: 0 8px 20px rgba(0,0,0,0.08);
    }
    .terms-content h2 {
        color: var(--primary);
        margin-top: 2.5rem;
        margin-bottom: 1rem;
        font-size: 1.8rem;
        font-weight: 700;
        border-bottom: 2px solid var(--primary);
        padding-bottom: 0.4rem;
    }
    .terms-content p,
    .terms-content ul,
    .terms-content li {
        margin-bottom: 1rem;
        font-size: 1.2rem;
        color: #555;
    }
    .terms-content ul {
        padding-left: 1.5rem;
        list-style: disc;
    }
    .terms-content a {
        color: var(--primary);
        text-decoration: none;
        font-weight: 600;
    }
    .terms-content a:hover {
        text-decoration: underline;
    }
    .last-updated {
        margin-top: 2rem;
        font-size: 0.95rem;
        color: var(--text-light);
        text-align: right;
    }
</style>
@endsection

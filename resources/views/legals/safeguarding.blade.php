@extends('layouts.app')

@section('title', 'Safeguarding')

@section('content')
@include('partials.breadcrumb', ['title' => $breadcrumbTitle ?? 'Safeguarding'])

<div class="container my-5">
    <header class="text-center">
        <h1>Safeguarding</h1>
        <p>At Learning Hub by OA Tutors, safeguarding the welfare and well-being of children and young people is our highest priority. We are committed to creating a safe, supportive, and inclusive environment for all users of our educational resources.</p>
    </header>

    <main>
        <div class="terms-content">
            <h2>Our Safeguarding Principles</h2>
            <ul>
                <li>We promote the welfare of children and young people and protect them from harm.</li>
                <li>We ensure that all content is appropriate, safe, and supportive for our audience.</li>
                <li>We comply with all relevant UK safeguarding legislation and guidance.</li>
                <li>We provide clear reporting procedures for any safeguarding concerns.</li>
                <li>We train our staff and contributors on safeguarding best practices.</li>
            </ul>

            <h2>Responsibilities</h2>
            <p>All staff, contributors, and users have a responsibility to uphold safeguarding standards. This includes:</p>
            <ul>
                <li>Reporting any concerns about child safety or welfare promptly.</li>
                <li>Ensuring that all interactions and content respect the dignity and rights of children.</li>
                <li>Maintaining confidentiality and data protection in line with our Privacy Policy.</li>
            </ul>

            <h2>Reporting Concerns</h2>
            <p>If you have any safeguarding concerns related to Learning Hub or its content, please contact us immediately:</p>
            <ul>
                <li>Email: <a href="mailto:safeguarding@oatutors.co.uk">safeguarding@oatutors.co.uk</a></li>
                <li>Phone: +44 123 456 7890</li>
                <li>Address: OA Tutors, [Your Address], United Kingdom</li>
            </ul>

            <h2>Further Information</h2>
            <p>For more information on safeguarding policies and guidance, please visit the UK Government website: <a href="https://www.gov.uk/government/publications/keeping-children-safe-in-education--2" target="_blank" rel="noopener noreferrer">Keeping Children Safe in Education</a>.</p>

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

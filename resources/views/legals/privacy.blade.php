@extends('layouts.app')

@section('title', 'Privacy Policy')

@section('content')
@include('partials.breadcrumb', ['title' => $breadcrumbTitle ?? 'Privacy Policy'])

<div class="container my-5">
    <header class="text-center">
        <h1>Privacy Policy</h1>
        <p>Learning Hub by OA Tutors is committed to protecting your privacy and ensuring the security of your personal information. This Privacy Policy explains how we collect, use, and safeguard your data when you use our educational resources.</p>
    </header>

    <main>
        <div class="terms-content">
            <h2>1. Information We Collect</h2>
            <h3>Personal Information</h3>
            <p>We may collect personal information such as:</p>
            <ul>
                <li>Name and contact details (email, phone number)</li>
                <li>School or educational institution information</li>
                <li>Age group or year level of students</li>
            </ul>

            <h3>Usage Data</h3>
            <p>We automatically collect certain information about your use of our website:</p>
            <ul>
                <li>IP address and location data</li>
                <li>Browser type and version</li>
                <li>Pages visited and time spent on our site</li>
                <li>Device information</li>
            </ul>

            <h3>Cookies and Tracking Technologies</h3>
            <p>We use cookies and similar technologies to enhance your experience on our website. These help us:</p>
            <ul>
                <li>Remember your preferences</li>
                <li>Analyze website traffic and usage</li>
                <li>Provide personalized content</li>
                <li>Ensure website security</li>
            </ul>

            <h2>2. How We Use Your Information</h2>
            <p>We use the information we collect to:</p>
            <ul>
                <li>Provide and maintain our educational services</li>
                <li>Improve our website and learning resources</li>
                <li>Communicate with you about our services</li>
                <li>Ensure compliance with educational standards</li>
                <li>Protect against fraud and abuse</li>
            </ul>

            <h2>3. Children's Privacy</h2>
            <p>Our services are designed for educational use by children and young people. We are particularly mindful of protecting children's privacy:</p>
            <ul>
                <li>We do not knowingly collect personal information from children under 13 without parental consent</li>
                <li>Any data collected is used solely for educational purposes</li>
                <li>We comply with UK data protection laws, including the Data Protection Act 2018 and GDPR</li>
                <li>Parents and guardians have the right to review, modify, or delete their child's information</li>
            </ul>

            <h2>4. Information Sharing and Disclosure</h2>
            <p>We do not sell, trade, or otherwise transfer your personal information to third parties, except in the following circumstances:</p>
            <ul>
                <li>With your explicit consent</li>
                <li>To comply with legal obligations</li>
                <li>To protect our rights or the rights of others</li>
                <li>In connection with a business transfer or merger</li>
            </ul>

            <h2>5. Data Security</h2>
            <p>We implement appropriate technical and organizational measures to protect your personal information against unauthorized access, alteration, disclosure, or destruction. These measures include:</p>
            <ul>
                <li>SSL/TLS encryption for data transmission</li>
                <li>Secure hosting and storage solutions</li>
                <li>Regular security audits and updates</li>
                <li>Access controls and employee training</li>
            </ul>

            <h2>6. Your Rights</h2>
            <p>Under applicable data protection laws, you have the following rights:</p>
            <ul>
                <li><strong>Access:</strong> Request a copy of your personal data</li>
                <li><strong>Rectification:</strong> Correct inaccurate or incomplete data</li>
                <li><strong>Erasure:</strong> Request deletion of your data</li>
                <li><strong>Restriction:</strong> Limit how we process your data</li>
                <li><strong>Portability:</strong> Receive your data in a structured format</li>
                <li><strong>Objection:</strong> Object to processing based on legitimate interests</li>
            </ul>

            <h2>7. Cookies Policy</h2>
            <p>You can control cookies through your browser settings. However, disabling certain cookies may affect the functionality of our website.</p>

            <h2>8. Third-Party Links</h2>
            <p>Our website may contain links to third-party websites. We are not responsible for the privacy practices of these external sites. We encourage you to review their privacy policies.</p>

            <h2>9. Changes to This Privacy Policy</h2>
            <p>We may update this Privacy Policy from time to time. We will notify you of any significant changes by posting the new policy on this page and updating the "Last updated" date.</p>

            <h2>10. Contact Us</h2>
            <p>If you have any questions about this Privacy Policy or our data practices, please contact us:</p>
            <ul>
                <li>Email: <a href="mailto:privacy@oatutors.co.uk">privacy@oatutors.co.uk</a></li>
            </ul>

            <p>By using Learning Hub, you consent to the collection and use of information in accordance with this Privacy Policy.</p>

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
    .terms-content h3 {
        color: var(--text-dark);
        margin-top: 1.5rem;
        margin-bottom: 0.5rem;
        font-size: 1.4rem;
        font-weight: 600;
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

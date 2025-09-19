@extends('layouts.app')

@section('title', 'Registration Successful')

@section('content')
@include('partials.breadcrumb', ['title' => 'Registration Successful'])

<div class="container my-5">
    <header class="text-center">
        <h1>Registration Successful!</h1>
        <p>Welcome to Learning Hub by OA Tutors. Your account has been created successfully.</p>
    </header>

    <main>
        <div class="terms-content">
            <p>Thank you for registering with us. You can now access our educational resources and start your learning journey.</p>

            <div class="text-center mt-4">
                <a href="/login" class="btn btn-primary btn-lg">Go to Login</a>
            </div>
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
    .terms-content p {
        margin-bottom: 1rem;
        font-size: 1.2rem;
        color: #555;
        text-align: center;
    }
    .btn-primary {
        background-color: var(--primary);
        border-color: var(--primary);
    }
    .btn-primary:hover {
        background-color: #1976d2;
        border-color: #1976d2;
    }
</style>
@endsection

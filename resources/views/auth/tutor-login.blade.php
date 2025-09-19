@extends('layouts.app')

@section('title', 'Tutor Login')

@section('content')
@include('partials.breadcrumb', ['title' => 'Tutor Login'])

<div class="container my-5">
    <header class="text-center">
        <h1>Tutor Login</h1>
        <p>Welcome back, Tutor! Access your Teaching Dashboard</p>
    </header>

    <main>
        <div class="terms-content">
            <form method="POST" action="{{ route('tutor.login.post') }}">
                @csrf
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required>
                    @error('email')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                    @error('password')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-success btn-block">Login as Tutor</button>
            </form>

            <div class="text-center mt-3">
                <p>Are you a student? <a href="{{ route('student.login') }}">Login as Student</a></p>
                <p>Don't have an account? <a href="{{ route('register') }}">Register here</a></p>
            </div>
        </div>
    </main>
</div>

<style>
    :root {
        --primary: #28a745;
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
        background: linear-gradient(45deg, var(--primary), #20c997);
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
        max-width: 600px;
        margin: auto;
        background-color: var(--card-bg);
        border-radius: 15px;
        padding: 2.5rem 2rem;
        box-shadow: 0 8px 20px rgba(0,0,0,0.08);
    }
    .form-group {
        margin-bottom: 1rem;
    }
    .btn-success {
        background-color: var(--primary);
        border-color: var(--primary);
    }
    .btn-success:hover {
        background-color: #218838;
        border-color: #1e7e34;
    }
    .btn-block {
        width: 100%;
    }
    .text-danger {
        color: #dc3545;
        font-size: 0.875rem;
    }
</style>
@endsection

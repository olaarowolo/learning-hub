@extends('layouts.app')

@section('title', 'Register')

@section('content')
@include('partials.breadcrumb', ['title' => 'Register'])

<div class="container my-5">
    <header class="text-center">
        <h1>Register</h1>
        <p>Join Learning Hub by OA Tutors</p>
    </header>

    <main>
        <div class="terms-content">
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="role">Role</label>
                    <select class="form-control" id="role" name="role" required>
                        <option value="student">Student</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <div class="form-group">
                    <label for="password_confirmation">Confirm Password</label>
                    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
                </div>

                <div class="parent-contact-section" style="display: none;">
                    <h4 style="color: var(--primary); margin-top: 2rem; margin-bottom: 1rem;">Parent/Guardian Contact Information</h4>
                    <p style="color: var(--text-light); font-size: 0.9rem; margin-bottom: 1rem;">
                        If you are under 18, please provide your parent or guardian's contact information.
                    </p>
                    <div class="form-group">
                        <label for="parent_email">Parent/Guardian Email</label>
                        <input type="email" class="form-control" id="parent_email" name="parent_email">
                    </div>
                    <div class="form-group">
                        <label for="parent_phone">Parent/Guardian Phone</label>
                        <input type="tel" class="form-control" id="parent_phone" name="parent_phone">
                    </div>
                </div>

                <div class="form-group" style="margin-top: 2rem;">
                    <label for="date_of_birth">Date of Birth</label>
                    <input type="date" class="form-control" id="date_of_birth" name="date_of_birth">
                </div>

                <button type="submit" class="btn btn-primary">Register</button>
            </form>
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
    .btn-primary {
        background-color: var(--primary);
        border-color: var(--primary);
    }
    .btn-primary:hover {
        background-color: #1976d2;
        border-color: #1976d2;
    }
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const dateOfBirthInput = document.getElementById('date_of_birth');
    const parentContactSection = document.querySelector('.parent-contact-section');
    const parentEmailInput = document.getElementById('parent_email');
    const parentPhoneInput = document.getElementById('parent_phone');

    function checkAge() {
        if (dateOfBirthInput.value) {
            const birthDate = new Date(dateOfBirthInput.value);
            const today = new Date();
            const age = today.getFullYear() - birthDate.getFullYear();
            const monthDiff = today.getMonth() - birthDate.getMonth();

            if (monthDiff < 0 || (monthDiff === 0 && today.getDate() < birthDate.getDate())) {
                age--;
            }

            if (age < 18) {
                parentContactSection.style.display = 'block';
                parentEmailInput.required = true;
                parentPhoneInput.required = true;
            } else {
                parentContactSection.style.display = 'none';
                parentEmailInput.required = false;
                parentPhoneInput.required = false;
                parentEmailInput.value = '';
                parentPhoneInput.value = '';
            }
        } else {
            parentContactSection.style.display = 'none';
            parentEmailInput.required = false;
            parentPhoneInput.required = false;
        }
    }

    dateOfBirthInput.addEventListener('change', checkAge);
    dateOfBirthInput.addEventListener('input', checkAge);
});
</script>
@endsection

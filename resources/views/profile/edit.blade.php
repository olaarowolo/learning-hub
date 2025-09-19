@extends('layouts.app')

@section('title', 'Edit Profile')

@section('content')
@include('partials.breadcrumb', ['title' => 'Edit Profile'])

<div class="container my-5">
    <header class="text-center">
        <h1>Edit Profile</h1>
        <p>Update your profile information</p>
    </header>

    <main>
        <div class="edit-profile-content">
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="{{ route('profile.update') }}">
                @csrf

                <div class="form-section">
                    <h3>Basic Information</h3>
                    <div class="form-group">
                        <label for="name">Name *</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $user->name) }}" required>
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="tel" class="form-control" id="phone" name="phone" value="{{ old('phone', $profile->phone ?? '') }}">
                    </div>
                    <div class="form-group">
                        <label for="date_of_birth">Date of Birth</label>
                        <input type="date" class="form-control" id="date_of_birth" name="date_of_birth" value="{{ old('date_of_birth', $profile->date_of_birth ? $profile->date_of_birth->format('Y-m-d') : '') }}">
                    </div>
                </div>

                <div class="form-section">
                    <h3>Educational Information</h3>
                    <div class="form-group">
                        <label for="school_name">School Name</label>
                        <input type="text" class="form-control" id="school_name" name="school_name" value="{{ old('school_name', $profile->school_name ?? '') }}">
                    </div>
                    <div class="form-group">
                        <label for="school_location">School Location</label>
                        <input type="text" class="form-control" id="school_location" name="school_location" value="{{ old('school_location', $profile->school_location ?? '') }}">
                    </div>
                    <div class="form-group">
                        <label for="grade_level">Grade Level</label>
                        <input type="text" class="form-control" id="grade_level" name="grade_level" value="{{ old('grade_level', $profile->grade_level ?? '') }}">
                    </div>
                    <div class="form-group">
                        <label for="curriculum">Curriculum</label>
                        <select class="form-control" id="curriculum" name="curriculum">
                            <option value="">Select Curriculum</option>
                            <option value="uk" {{ old('curriculum', $profile->curriculum ?? '') == 'uk' ? 'selected' : '' }}>UK</option>
                            <option value="ng" {{ old('curriculum', $profile->curriculum ?? '') == 'ng' ? 'selected' : '' }}>Nigeria</option>
                        </select>
                    </div>
                </div>

                <div class="form-section">
                    <h3>Learning Preferences</h3>
                    <div class="form-group">
                        <label for="subject_preferences">Subject Preferences (comma-separated)</label>
                        <input type="text" class="form-control" id="subject_preferences" name="subject_preferences" value="{{ old('subject_preferences', $profile->subject_preferences ? implode(', ', json_decode($profile->subject_preferences)) : '') }}" placeholder="e.g., Mathematics, English, Science">
                    </div>
                    <div class="form-group">
                        <label for="timezone">Timezone</label>
                        <input type="text" class="form-control" id="timezone" name="timezone" value="{{ old('timezone', $profile->timezone ?? '') }}" placeholder="e.g., UTC, GMT+1">
                    </div>
                    <div class="form-group">
                        <label class="checkbox-label">
                            <input type="checkbox" id="notifications_enabled" name="notifications_enabled" value="1" {{ old('notifications_enabled', $profile->notifications_enabled ?? false) ? 'checked' : '' }}>
                            Enable notifications
                        </label>
                    </div>
                </div>

                <div class="form-section">
                    <h3>Parent/Guardian Contact</h3>
                    <div class="form-group">
                        <label for="parent_email">Parent/Guardian Email</label>
                        <input type="email" class="form-control" id="parent_email" name="parent_email" value="{{ old('parent_email', $profile->parent_email ?? '') }}">
                    </div>
                    <div class="form-group">
                        <label for="parent_phone">Parent/Guardian Phone</label>
                        <input type="tel" class="form-control" id="parent_phone" name="parent_phone" value="{{ old('parent_phone', $profile->parent_phone ?? '') }}">
                    </div>
                </div>

                <div class="form-actions">
                    <button type="submit" class="btn btn-primary">Update Profile</button>
                    <a href="{{ route('profile') }}" class="btn btn-secondary">Cancel</a>
                </div>
            </form>
        </div>
    </main>
</div>

<style>
    .edit-profile-content {
        max-width: 800px;
        margin: auto;
        background-color: #ffffff;
        border-radius: 15px;
        padding: 2.5rem 2rem;
        box-shadow: 0 8px 20px rgba(0,0,0,0.08);
        font-family: 'Poppins', sans-serif;
        color: #343a40;
    }

    .edit-profile-content h1 {
        color: #2196f3;
        margin-bottom: 2rem;
        font-weight: 700;
        text-align: center;
    }

    .form-section {
        margin-bottom: 2.5rem;
        padding: 1.5rem;
        background-color: #f8f9fa;
        border-radius: 10px;
        border-left: 4px solid #2196f3;
    }

    .form-section h3 {
        color: #2196f3;
        margin-bottom: 1.5rem;
        font-weight: 600;
        font-size: 1.4rem;
    }

    .form-group {
        margin-bottom: 1.5rem;
    }

    .form-group label {
        display: block;
        margin-bottom: 0.5rem;
        font-weight: 500;
        color: #495057;
    }

    .form-control {
        width: 100%;
        padding: 0.75rem;
        border: 1px solid #ced4da;
        border-radius: 5px;
        font-size: 1rem;
        transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    }

    .form-control:focus {
        border-color: #2196f3;
        outline: 0;
        box-shadow: 0 0 0 0.2rem rgba(33, 150, 243, 0.25);
    }

    .checkbox-label {
        display: flex;
        align-items: center;
        cursor: pointer;
        font-weight: normal;
    }

    .checkbox-label input[type="checkbox"] {
        margin-right: 0.5rem;
        width: auto;
    }

    .form-actions {
        text-align: center;
        margin-top: 2rem;
    }

    .btn {
        display: inline-block;
        padding: 0.75rem 1.5rem;
        margin: 0 0.5rem;
        border: none;
        border-radius: 5px;
        text-decoration: none;
        font-size: 1rem;
        font-weight: 500;
        cursor: pointer;
        transition: all 0.15s ease-in-out;
    }

    .btn-primary {
        background-color: #2196f3;
        color: white;
    }

    .btn-primary:hover {
        background-color: #1976d2;
        color: white;
    }

    .btn-secondary {
        background-color: #6c757d;
        color: white;
    }

    .btn-secondary:hover {
        background-color: #545b62;
        color: white;
    }

    .alert {
        padding: 1rem;
        margin-bottom: 1.5rem;
        border: 1px solid transparent;
        border-radius: 5px;
    }

    .alert-success {
        color: #155724;
        background-color: #d4edda;
        border-color: #c3e6cb;
    }

    .alert-danger {
        color: #721c24;
        background-color: #f8d7da;
        border-color: #f5c6cb;
    }

    .alert ul {
        margin: 0;
        padding-left: 1.5rem;
    }
</style>
@endsection

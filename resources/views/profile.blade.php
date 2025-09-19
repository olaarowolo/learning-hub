@extends('layouts.app')
@extends('layouts.app')

@section('title', 'User Profile')

@section('content')
@include('partials.breadcrumb', ['title' => 'User Profile'])

<div class="container my-5">
    <header class="text-center">
        <h1>User Profile</h1>
        <p>Welcome, {{ Auth::user()->name }}</p>
        <div class="profile-actions">
            <a href="{{ route('profile.edit') }}" class="btn btn-primary edit-profile-btn">Edit Profile</a>
            @if(Auth::user()->profile && Auth::user()->profile->role === 'tutor')
                <a href="{{ route('tutor.students') }}" class="btn btn-secondary view-students-btn">View Students</a>
            @endif
        </div>
    </header>

    <main>
        <div class="profile-content">
            <h2>Profile Details</h2>
            <div class="profile-section">
                <h3>Basic Information</h3>
                <ul>
                    <li><strong>Name:</strong> {{ Auth::user()->name }}</li>
                    <li><strong>Email:</strong> {{ Auth::user()->email }}</li>
                    <li><strong>Phone:</strong> {{ Auth::user()->profile->phone ?? 'Not provided' }}</li>
                    <li><strong>Date of Birth:</strong> {{ Auth::user()->profile->date_of_birth ? Auth::user()->profile->date_of_birth->format('F j, Y') : 'Not provided' }}</li>
                    <li><strong>Member since:</strong> {{ Auth::user()->created_at->format('F j, Y') }}</li>
                </ul>
            </div>

            <div class="profile-section">
                <h3>Educational Information</h3>
                <ul>
                    <li><strong>Role:</strong> {{ ucfirst(Auth::user()->profile->role ?? 'Not specified') }}</li>
                    <li><strong>School:</strong> {{ Auth::user()->profile->school_name ?? 'Not provided' }}</li>
                    <li><strong>Location:</strong> {{ Auth::user()->profile->school_location ?? 'Not provided' }}</li>
                    <li><strong>Grade Level:</strong> {{ Auth::user()->profile->grade_level ?? 'Not provided' }}</li>
                    <li><strong>Curriculum:</strong> {{ strtoupper(Auth::user()->profile->curriculum ?? 'Not specified') }}</li>
                </ul>
            </div>

            <div class="profile-section">
                <h3>Learning Preferences</h3>
                <ul>
                    <li><strong>Learning Goals:</strong>
                        @if(Auth::user()->profile->learning_goals)
                            <ul class="goals-list">
                                @foreach(json_decode(Auth::user()->profile->learning_goals) as $goal)
                                    <li>{{ $goal }}</li>
                                @endforeach
                            </ul>
                        @else
                            Not specified
                        @endif
                    </li>
                    <li><strong>Subject Preferences:</strong>
                        @if(Auth::user()->profile->subject_preferences)
                            {{ implode(', ', json_decode(Auth::user()->profile->subject_preferences)) }}
                        @else
                            Not specified
                        @endif
                    </li>
                    <li><strong>Notifications:</strong> {{ Auth::user()->profile->notifications_enabled ? 'Enabled' : 'Disabled' }}</li>
                    <li><strong>Timezone:</strong> {{ Auth::user()->profile->timezone ?? 'UTC' }}</li>
                </ul>
            </div>

            @if(Auth::user()->profile->parent_email || Auth::user()->profile->parent_phone)
            <div class="profile-section">
                <h3>Parent/Guardian Contact</h3>
                <ul>
                    <li><strong>Parent Email:</strong> {{ Auth::user()->profile->parent_email ?? 'Not provided' }}</li>
                    <li><strong>Parent Phone:</strong> {{ Auth::user()->profile->parent_phone ?? 'Not provided' }}</li>
                </ul>
            </div>
            @endif
        </div>
    </main>
</div>

<style>
    .profile-content {
        max-width: 800px;
        margin: auto;
        background-color: #ffffff;
        border-radius: 15px;
        padding: 2.5rem 2rem;
        box-shadow: 0 8px 20px rgba(0,0,0,0.08);
        font-family: 'Poppins', sans-serif;
        color: #343a40;
    }
    .profile-content h2 {
        color: #2196f3;
        margin-bottom: 2rem;
        font-weight: 700;
        text-align: center;
    }
    .profile-section {
        margin-bottom: 2.5rem;
        padding: 1.5rem;
        background-color: #f8f9fa;
        border-radius: 10px;
        border-left: 4px solid #2196f3;
    }
    .profile-section h3 {
        color: #2196f3;
        margin-bottom: 1rem;
        font-weight: 600;
        font-size: 1.4rem;
    }
    .profile-content ul {
        list-style: none;
        padding: 0;
        font-size: 1.1rem;
    }
    .profile-content li {
        margin-bottom: 0.8rem;
        padding: 0.5rem 0;
        border-bottom: 1px solid #e9ecef;
    }
    .profile-content li:last-child {
        border-bottom: none;
        margin-bottom: 0;
    }
    .goals-list {
        margin-top: 0.5rem;
        padding-left: 1rem;
    }
    .goals-list li {
        margin-bottom: 0.3rem;
        border-bottom: none;
        font-style: italic;
        color: #6c757d;
    }
    .goals-list li:before {
        content: "• ";
        color: #2196f3;
        font-weight: bold;
    }
</style>
@endsection

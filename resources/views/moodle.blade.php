@extends('layouts.app')

@section('title', 'Moodle Integration')

@section('content')
    <div class="container py-4">
        <h1 class="mb-3"><img src="{{ asset('favicons/moodle-icon.png') }}" alt="Moodle" style="width: 24px; height: 24px; margin-right: 10px; filter: invert(1);"> Moodle Courses</h1>

        @if(isset($error))
            <div class="alert alert-danger">
                <h4 class="alert-heading">Connection Error!</h4>
                <p>{{ $error }}</p>
                <hr>
                <p class="mb-0">Please check your Moodle configuration (URL, token, and web service permissions) in your <code>.env</code> file and in your Moodle site administration.</p>
            </div>
        @elseif(isset($courses) && is_array($courses) && count($courses) > 0)
            <ul class="course-list">
                @foreach ($courses as $course)
                    <li>
                        <form method="POST" action="{{ route('moodle.enrol') }}" style="display:inline;">
                            @csrf
                            <input type="hidden" name="course_id" value="{{ $course['id'] ?? '' }}">
                            <button type="submit" class="btn btn-link p-0 m-0 align-baseline">
                                <strong>{{ $course['fullname'] ?? 'N/A' }}</strong>
                                @if(!empty($course['shortname']))
                                    <span class="text-muted">({{ $course['shortname'] }})</span>
                                @endif
                            </button>
                        </form>
                    </li>
                @endforeach
            </ul>
        @else
            <div class="alert alert-warning">
                No courses available at the moment.
            </div>
        @endif
    </div>
@endsection

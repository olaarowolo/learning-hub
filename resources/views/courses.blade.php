@extends('layouts.app')

@section('title', 'All Courses')

@push('styles')
<style>
.course-card {
    transition: transform .2s ease-in-out, box-shadow .2s ease-in-out;
    height: 100%;
    display: flex;
    flex-direction: column;
}
.course-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 20px rgba(0,0,0,0.12);
}
.course-card .card-body {
    display: flex;
    flex-direction: column;
    flex-grow: 1;
}
.course-card .card-title {
    font-weight: 600;
}
.course-card .btn {
    margin-top: auto;
}
</style>
@endpush

@section('content')
<div class="container mt-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>My Courses</h1>
        <div>
            <a href="#" class="btn btn-primary">Browse Course Catalog</a>
        </div>
    </div>

    <div class="row">
        @forelse ($courses as $course)
            <div class="col-md-4 mb-4">
                <div class="card course-card">
                    <img src="{{ $course->image_url }}" class="card-img-top" alt="Course image for {{ $course->title }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $course->title }}</h5>
                        <p class="card-text text-muted">{{ $course->description }}</p>

                        @if ($course->progress > 0)
                            <div class="progress mb-2" style="height: 20px;">
                                <div class="progress-bar @if($course->progress < 20) bg-warning @else bg-success @endif" role="progressbar" style="width: {{ $course->progress }}%;" aria-valuenow="{{ $course->progress }}" aria-valuemin="0" aria-valuemax="100">
                                    {{ $course->progress }}%
                                </div>
                            </div>
                            <a href="{{ route('courses.show', $course) }}" class="btn btn-success btn-block">Continue Course</a>
                        @else
                            {{-- Assuming 0% progress means enrolled but not started --}}
                            <a href="{{ route('courses.show', $course) }}" class="btn btn-primary btn-block mt-auto">Start Course</a>
                        @endif
                    </div>
                </div>
            </div>
        @empty
            <div class="col">
                <div class="alert alert-warning" id="no-courses-alert">No courses are available at the moment.</div>
            </div>
        @endforelse
    </div>
</div>

@endsection

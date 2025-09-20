@extends('layouts.blog')

@section('title', $post->title)

@section('meta')
    <!-- SEO Meta Tags -->
    <meta name="description" content="{{ Str::limit($post->content, 150) }}">
    <meta name="author" content="{{ $post->author }}">
    <meta name="keywords" content="Learning Tips, Education, OA Tutors">
    <link rel="canonical" href="{{ url()->current() }}">
    <link rel="icon" type="image/x-icon" href="{{ asset('favicons/favicon.ico') }}">
@endsection

@section('content')
<div class="blog-post">
    <div class="featured-image" style="background-image: url('{{ $post->featured_image_url ?? asset('images/default-featured.jpg') }}');">
    </div>
    <h1>{{ $post->title }}</h1>
    <p class="meta">
        <span class="author">By {{ $post->author }}</span> |
        <span class="date">{{ $post->created_at->format('F j, Y') }}</span>
    </p>
    <div class="content">
        {!! nl2br(e($post->content)) !!}
    </div>
</div>
@endsection

@push('styles')
<link rel="stylesheet" href="{{ asset('css/blog.css') }}">
@endpush

@push('scripts')
<script src="{{ asset('js/blog.js') }}"></script>
@endpush

@extends('layouts.blog')

@section('title', $post->title)

@section('meta')
    <!-- SEO Meta Tags -->
    <meta name="description" content="{{ $post->excerpt }}">
    <meta name="author" content="{{ $post->author }}">
    <link rel="canonical" href="{{ url()->current() }}">
    <link rel="icon" type="image/x-icon" href="{{ asset('favicons/favicon.ico') }}">
@endsection

@section('content')
<div class="blog-post">
    <h1>{{ $post->title }}</h1>
    <p class="meta">By {{ $post->author }} on {{ $post->published_at->format('M. d, Y') }}</p>
    <div class="content">
        {!! $post->content !!}
    </div>
</div>
@endsection

@push('styles')
<link rel="stylesheet" href="{{ asset('css/blog.css') }}">
@endpush

@push('scripts')
<script src="{{ asset('js/blog.js') }}"></script>
@endpush

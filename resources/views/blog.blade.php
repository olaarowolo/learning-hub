@extends('layouts.blog')

@section('title', 'Blog - Learning Hub')

@section('meta')
    <!-- SEO Meta Tags -->
    <meta name="description" content="The Learning Hub blog, featuring articles on education, learning tips, and updates from OA Tutors.">
    <meta name="author" content="OA Tutors">
    <link rel="canonical" href="{{ url('/blog') }}">
    <link rel="icon" type="image/x-icon" href="{{ asset('favicons/favicon.ico') }}">
@endsection

@section('content')
@foreach ($posts as $post)
<div class="blog-card">
    <div class="meta">
      <div class="photo" style="background-image: url('https://oatutors.co.uk/assets/img/11plus.jpeg')"></div>
      <ul class="details">
        <li class="author"><a href="#">{{ $post->author }}</a></li>
        <li class="date">{{ $post->published_at->format('M. d, Y') }}</li>
      </ul>
    </div>
    <div class="description">
      <h1>{{ $post->title }}</h1>
      <p>{{ Str::limit($post->content, 150) }}</p>
      <p class="read-more">
        <a href="{{ route('blog.show', $post->id) }}">Read More</a>
      </p>
    </div>
</div>
@endforeach

@endsection

@push('styles')
<link rel="stylesheet" href="{{ asset('css/blog.css') }}">
@endpush

@push('scripts')
<script src="{{ asset('js/blog.js') }}"></script>
@endpush

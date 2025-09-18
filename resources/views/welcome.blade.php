@extends('layouts.app')

@section('title', \Illuminate\Support\Str::lower(request('location')) === 'ng' ? 'Learning Hub - Nigeria Curriculum by OA Tutors' : 'Learning Hub - by OA Tutors')

@section('meta')
    <!-- SEO Meta Tags -->
    <meta name="description" content="Learning Hub by OA Tutors - Interactive educational resources for " . (\Illuminate\Support\Str::lower(request('location')) === 'ng' ? 'Primary 1-6, JSS1-3, SSS1-3.' : 'EYFS, KS1, KS2, KS3, KS4, and KS5.') . " Discover engaging lessons, activities, and Purpose-in-Motion™ program.">
    <meta name="keywords" content="learning hub, OA Tutors, education, " . (\Illuminate\Support\Str::lower(request('location')) === 'ng' ? 'Primary, JSS, SSS, Nigeria curriculum' : 'EYFS, KS1, KS2, KS3, KS4, KS5, curriculum') . ", lessons, activities, Purpose-in-Motion">
    <meta name="author" content="OA Tutors">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="https://learn.oatutors.co.uk/" />

    <link rel="stylesheet" href="{{ asset('css/search.css') }}">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://learn.oatutors.co.uk/">
    <meta property="og:title" content="Learning Hub - " . (\Illuminate\Support\Str::lower(request('location')) === 'ng' ? 'Nigeria Curriculum ' : '') . "by OA Tutors">
    <meta property="og:description" content="Interactive educational resources for " . (\Illuminate\Support\Str::lower(request('location')) === 'ng' ? 'Primary 1-6, JSS1-3, SSS1-3.' : 'EYFS to KS5.') . " Discover engaging lessons and Purpose-in-Motion™ program.">
    <meta property="og:image" content="https://learn.oatutors.co.uk/favicons/android-icon-192x192.png">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://learn.oatutors.co.uk/">
    <meta property="twitter:title" content="Learning Hub - " . (\Illuminate\Support\Str::lower(request('location')) === 'ng' ? 'Nigeria Curriculum ' : '') . "by OA Tutors">
    <meta property="twitter:description" content="Interactive educational resources for " . (\Illuminate\Support\Str::lower(request('location')) === 'ng' ? 'Primary 1-6, JSS1-3, SSS1-3.' : 'EYFS to KS5.') . " Discover engaging lessons and Purpose-in-Motion™ program.">
    <meta property="twitter:image" content="https://learn.oatutors.co.uk/favicons/android-icon-192x192.png">
@endsection

@section('content')
<a class="skip-link" href="#main-content">Skip to content</a>

{{-- @include('partials.navbar') --}}
<main id="main-content">
    @include('partials.home-hero')
  @if(\Illuminate\Support\Str::lower(request('location')) === 'ng')
    <!-- Primary -->
    <h2 id="primary" class="ks-heading">Primary</h2>
    <div class="year-grid">
      <a href="#" id="primary-1" class="year-card primary-1"><h2>Primary 1</h2></a>
      <a href="#" id="primary-2" class="year-card primary-2"><h2>Primary 2</h2></a>
      <a href="#" id="primary-3" class="year-card primary-3"><h2>Primary 3</h2></a>
      <a href="#" id="primary-4" class="year-card primary-4"><h2>Primary 4</h2></a>
      <a href="#" id="primary-5" class="year-card primary-5"><h2>Primary 5</h2></a>
      <a href="#" id="primary-6" class="year-card primary-6"><h2>Primary 6</h2></a>
    </div>

    <!-- JSS -->
    <h2 id="jss" class="ks-heading">Junior Secondary School (JSS)</h2>
    <div class="year-grid">
      <a href="#" id="jss-1" class="year-card jss-1"><h2>JSS 1</h2></a>
      <a href="#" id="jss-2" class="year-card jss-2"><h2>JSS 2</h2></a>
      <a href="#" id="jss-3" class="year-card jss-3"><h2>JSS 3</h2></a>
    </div>

    <!-- SSS -->
    <h2 id="sss" class="ks-heading">Senior Secondary School (SSS)</h2>
    <div class="year-grid">
      <a href="#" id="sss-1" class="year-card sss-1"><h2>SSS 1</h2></a>
      <a href="#" id="sss-2" class="year-card sss-2"><h2>SSS 2</h2></a>
      <a href="#" id="sss-3" class="year-card sss-3"><h2>SSS 3</h2></a>
    </div>
  @else
    <!-- KS1 -->
    <h2 id="ks1" class="ks-heading">Key Stage 1</h2>
    <div class="year-grid">
      <a href="{{ url('/data/yeargroups/KS0/y0/yr0-index.html') }}" id="pre-school" class="year-card reception"><h2>Pre-School Ideas</h2></a>
      <a href="{{ url('/data/yeargroups/EYFS/y0/yrR-index.html') }}" id="reception" class="year-card reception"><h2>Reception</h2></a>
      <a href="{{ url('/data/yeargroups/KS1/y1/yr1-index.html') }}" id="year-1" class="year-card year-1"><h2>Year 1</h2></a>
      <a href="{{ url('/data/yeargroups/KS1/y2/yr2-index.html') }}" id="year-2" class="year-card year-2"><h2>Year 2</h2></a>
    </div>

    <!-- KS2 -->
    <h2 id="ks2" class="ks-heading">Key Stage 2</h2>
    <div class="year-grid">
      <a href="{{ url('/data/yeargroups/KS2/y3/yr3-index.html') }}" id="year-3" class="year-card year-3"><h2>Year 3</h2></a>
      <a href="{{ url('/data/yeargroups/KS2/y4/yr4-index.html') }}" id="year-4" class="year-card year-4"><h2>Year 4</h2></a>
      <a href="{{ url('/data/yeargroups/KS2/y5/yr5-index.html') }}" id="year-5" class="year-card year-5"><h2>Year 5</h2></a>
      <a href="{{ url('/data/yeargroups/KS2/y6/yr6-index.html') }}" id="year-6" class="year-card year-6"><h2>Year 6</h2></a>
    </div>

    <!-- KS3 -->
    <h2 id="ks3" class="ks-heading">Key Stage 3</h2>
    <div class="year-grid">
      <a href="{{ url('/data/yeargroups/KS3/y7/yr7-index.html') }}" id="year-7" class="year-card year-7"><h2>Year 7</h2></a>
      <a href="{{ url('/data/yeargroups/KS3/y8/yr8-index.html') }}" id="year-8" class="year-card year-8"><h2>Year 8</h2></a>
      <a href="{{ url('/data/yeargroups/KS3/y9/yr9-index.html') }}" id="year-9" class="year-card year-9"><h2>Year 9</h2></a>
    </div>

    <!-- KS4 -->
    <h2 id="ks4" class="ks-heading">Key Stage 4</h2>
    <div class="year-grid">
      <a href="{{ url('/data/yeargroups/KS4/y10/yr10-index.html') }}" id="year-10" class="year-card year-10"><h2>Year 10</h2></a>
      <a href="{{ url('/data/yeargroups/KS4/y11/yr11-index.html') }}" id="year-11" class="year-card year-11"><h2>Year 11</h2></a>
    </div>

    <!-- KS5 -->
    <h2 id="ks5" class="ks-heading">Key Stage 5</h2>
    <div class="year-grid">
      <a href="{{ url('/data/yeargroups/KS5/y12/yr12-index.html') }}" id="year-12" class="year-card year-12"><h2>Year 12</h2></a>
      <a href="{{ url('/data/yeargroups/KS5/y13/yr13-index.html') }}" id="year-13" class="year-card year-13"><h2>Year 13</h2></a>
    </div>

    <!-- Purpose-in-Motion -->
    <h2 id="purpose" class="ks-heading">Purpose-in-Motion™</h2>
    <div style="max-width:960px;margin:0 auto 3rem;padding:0 1rem;text-align:center;color:var(--text-light)">
      <p><strong>Purpose-in-Motion™</strong> — short blurb or link to the program page.</p>
      <p><a href="{{ url('/data/purpose/index.html') }}" style="color:var(--primary);font-weight:700;text-decoration:underline">Learn more</a></p>
    </div>
  @endif
</main>

{{-- @include('partials.footer') --}}
<script src="{{ asset('js/nav.js') }}"></script>
<script src="{{ asset('js/search.js') }}"></script>
@endsection

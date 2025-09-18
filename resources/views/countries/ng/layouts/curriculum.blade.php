@extends('countries.ng.layouts.app')

@section('ng-content')
    <div class="curriculum-container">
        <div class="curriculum-header">
            <h1>@yield('curriculum-title', 'Nigeria Curriculum')</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item"><a href="/ng">Nigeria</a></li>
                    <li class="breadcrumb-item active" aria-current="page">@yield('curriculum-name')</li>
                </ol>
            </nav>
        </div>

        <div class="curriculum-content">
            @yield('curriculum-content')
        </div>
    </div>
@endsection

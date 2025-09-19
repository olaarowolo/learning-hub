@extends('countries.br.layouts.app')

@section('br-content')
    <div class="curriculum-container">
        <div class="curriculum-header">
            <h1>@yield('curriculum-title', 'Britain Curriculum')</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item"><a href="/br">Britain</a></li>
                    <li class="breadcrumb-item active" aria-current="page">@yield('curriculum-name')</li>
                </ol>
            </nav>
        </div>

        <div class="curriculum-content">
            @yield('curriculum-content')
        </div>
    </div>
@endsection

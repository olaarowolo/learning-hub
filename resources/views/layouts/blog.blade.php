<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title')</title>

    @yield('meta')

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <!-- App Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('css/search.css') }}">
    <link rel="stylesheet" href="{{ asset('css/breadcrumb.css') }}">
    <link rel="stylesheet" href="/build/assets/blog-CiWrjka2.css">

    {{-- Remix Icons --}}
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet" />

    <!-- Vite Assets -->
    @vite(['resources/css/app.css', 'resources/css/side-nav.scss', 'resources/js/app.js', 'resources/js/side-nav.js'])

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <style>
        @media (max-width: 576px) {
            .year-grid {
                grid-template-columns: 1fr 1fr;
                gap: 0.75rem;
            }

            .year-card {
                padding: 1rem 0.5rem;
                min-height: 60px;
                border-radius: 8px;
            }

            .year-card h2 {
                font-size: 1rem;
            }
        }

        @media (min-width: 577px) {
            .sidebar-toggler {
                display: none;
            }
        }

        /* Switch Toggle Styles */
        .switch {
            position: relative;
            display: inline-block;
            width: 60px;
            height: 34px;
        }

        .switch input {
            opacity: 0;
            width: 0;
            height: 0;
        }

        .slider {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #ccc;
            transition: .4s;
        }

        .slider:before {
            position: absolute;
            content: "";
            height: 26px;
            width: 26px;
            left: 4px;
            bottom: 4px;
            background-color: white;
            transition: .4s;
        }

        input:checked+.slider {
            background-color: #2196F3;
        }

        input:focus+.slider {
            box-shadow: 0 0 1px #2196F3;
        }

        input:checked+.slider:before {
            transform: translateX(26px);
        }

        .slider.round {
            border-radius: 34px;
        }

        .slider.round:before {
            border-radius: 50%;
        }

        /* Sidebar menu item color fix */
        .sidebar .menu .menu-item a {
            /* Use a semi-transparent white for non-active items for better visual hierarchy */
            color: rgba(255, 255, 255, 0.7) !important;
        }

        .sidebar .menu .menu-item.active>a,
        .sidebar .menu .menu-item:hover>a,
        .sidebar .menu .sub-menu.open>a {
            /* Use solid white for active, hovered, or open sub-menu parent items */
            color: #ffffff !important;
        }
    </style>

    @stack('styles')
</head>

<body>
    <div class="layout has-sidebar fixed-sidebar fixed-header">
        @include('layouts.sidebar') <!-- Sidebar included here -->
        <div id="overlay" class="overlay"></div>
        <main class="content">
            <a id="btn-toggle" href="#" class="sidebar-toggler break-point-sm">
                <i class="ri-menu-line ri-xl"></i>
            </a>
            @yield('content')
        </main>
    </div>

    @stack('scripts')
</body>

</html>

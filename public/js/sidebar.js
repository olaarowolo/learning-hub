document.addEventListener('DOMContentLoaded', function () {
    const btnCollapse = document.getElementById('btn-collapse');
    const sidebar = document.getElementById('sidebar');

    if (btnCollapse && sidebar) {
        btnCollapse.addEventListener('click', function () {
            sidebar.classList.toggle('collapsed');
        });
    }
});

<!-- filepath: c:\Users\user\OneDrive\Downloads\learning-hub\resources\views\layouts\app.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
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
    <link href="{{ asset('css/sidebar.css') }}" rel="stylesheet">

    {{-- Remix Icons --}}
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet" />

    <!-- Vite Assets -->
    @vite(['resources/css/app.css', 'resources/css/side-nav.scss', 'resources/js/app.js', 'resources/js/side-nav.js'])

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="{{ asset('js/sidebar.js') }}"></script>

    @stack('styles')
</head>
<body>
    <div class="layout has-sidebar fixed-sidebar fixed-header">
        @include('layouts.sidebar') <!-- Include the sidebar -->
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
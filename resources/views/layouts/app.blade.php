<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>@yield('title', 'App')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- ✅ Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- ✅ Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <!-- ✅ Your custom CSS (optional for overrides) -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/landing_page.css') }}">
</head>
<body class="bg-light">

    {{-- Orange strip at the top --}}
    <div class="orange-strip"></div>

    {{-- Navbar partial overlapping orange strip --}}
    <div class="navbar-wrapper">
        @include('layouts.navbar')
    </div>

       {{-- Main content --}}
    <main class="main-content">
        @yield('content')
    </main>

    {{-- Footer --}}
    @include('layouts.footer')

    <!-- ✅ Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- ✅ Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <!-- ✅ Custom JS -->
    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>


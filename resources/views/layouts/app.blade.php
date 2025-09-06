<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>@yield('title', 'App')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- ✅ Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- ✅ Your custom CSS (optional for overrides) -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body class="bg-light">

    {{-- Orange strip at the top --}}
    <div style="width: 100%; height: 60px; background-color: #FF7F00;"></div>

    {{-- Navbar partial (overlapping orange strip) --}}
    <div style="margin-top: -50px; z-index: 10; position: relative;">
        @include('layouts.navbar')
    </div>

    {{-- main content --}}
    <main class="container mx-auto px-4 pt-6 pb-24 md:pb-6">
        @yield('content')
    </main>

    <!-- ✅ Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>


</html>

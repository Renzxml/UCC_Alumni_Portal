<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>@yield('title', 'User_App')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- Tailwind (you can keep your build tooling instead) --}}
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    {{-- Alpine.js --}}
    <script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

    {{-- your custom CSS --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/user.css') }}">
</head>
<body class="bg-gray-100 min-h-screen">

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

</body>


</html>

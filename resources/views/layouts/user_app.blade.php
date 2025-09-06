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
</head>
<body class="bg-gray-100 min-h-screen">

    {{-- Orange strip at the top --}}
    <div style="width: 100%; height: 60px; background-color: #FF7F00;"></div>

    {{-- Navbar partial (overlapping orange strip) --}}
    <div style="margin-top: -50px; z-index: 10; position: relative;">
        @include('layouts.user_navbar')
    </div>

    {{-- main content --}}
    <main class="container mx-auto px-4 pt-6 pb-24 md:pb-6">
        @yield('content')
    </main>

</body>


</html>

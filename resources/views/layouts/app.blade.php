<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>@yield('title', 'App')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- Tailwind (you can keep your build tooling instead) --}}
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    {{-- Alpine.js --}}
    <script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

    {{-- your custom CSS --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body class="bg-gray-100 min-h-screen">

    {{-- Navbar partial (contains desktop + mobile top + mobile bottom) --}}
    @include('layouts.navbar')

    {{-- main content: pb-24 ensures content won't be hidden by bottom nav on mobile --}}
    <main class="container mx-auto px-4 pt-6 pb-24 md:pb-6">
        @yield('content')
    </main>

</body>
</html>

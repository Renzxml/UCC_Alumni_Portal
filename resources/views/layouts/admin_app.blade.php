<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>@yield('title', 'admin_app')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- Tailwind (you can keep your build tooling instead) --}}
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    {{-- Alpine.js --}}
    <script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

    {{-- your custom CSS --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
</head>
<body class="flex">

    {{-- Admin Sidebar --}}
    @include('layouts.admin_sidebar')

    {{-- Main Content --}}
    <div class="flex-1 p-6 bg-gray-100 min-h-screen">
        @yield('content')
    </div>

</body>
</html>

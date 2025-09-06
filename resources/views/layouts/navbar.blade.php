{{-- resources/views/layouts/navbar.blade.php --}}
<div 
    x-data="{ tab: localStorage.getItem('mobileTab') || 'home' }"
    x-init="$watch('tab', value => localStorage.setItem('mobileTab', value))"
    class="relative"
>

    {{-- Desktop Navbar --}}
    <div class="navbar-orange h-24 relative hidden md:block">
        <nav class="absolute bottom-0 left-1/2 transform -translate-x-1/2 
                    navbar-green text-white rounded-lg shadow-lg px-6 py-4
                    flex items-center justify-between w-11/12 max-w-6xl">

            {{-- Logo + Title --}}
            <div class="flex items-center space-x-2">
                <img src="{{ asset('images/logo.png') }}" alt="Logo" class="h-8 w-8">
                <span class="font-bold text-lg">UCC Alumni Portal</span>
            </div>

            {{-- Menu Links --}}
            <ul class="flex space-x-6">
                <li><a href="{{ route('welcome') }}">Home</a></li>
                <li><a href="{{ url('/careers') }}">Careers</a></li>
                <li><a href="{{ url('/online_services') }}">Online Services</a></li>
                <li><a href="{{ url('/events') }}">Events</a></li>
                <li><a href="{{ url('/about') }}">About</a></li>
                <li><a href="{{ url('/community') }}">Community</a></li>
                <li><a href="{{ url('/login') }}">Login</a></li>
            </ul>
        </nav>
    </div>

    {{-- Mobile View --}}
    <div class="md:hidden">

        {{-- Dynamic Top Bar --}}
        <nav class="navbar-green p-3">
            <template x-if="tab === 'home'">
                <ul class="flex justify-around text-sm">
                    <li><a href="{{ route('welcome') }}" class="hover:text-orange-400">Overview</a></li>
                    <li><a href="{{ url('/news') }}" class="hover:text-orange-400">News</a></li>
                    <li><a href="{{ url('/events') }}" class="hover:text-orange-400">Events</a></li>
                </ul>
            </template>

            <template x-if="tab === 'profile'">
                <ul class="flex justify-around text-sm">
                    <li><a href="{{ url('/profile') }}" class="hover:text-orange-400">My Info</a></li>
                    <li><a href="{{ url('/friends') }}" class="hover:text-orange-400">Connections</a></li>
                    <li><a href="{{ url('/photos') }}" class="hover:text-orange-400">Photos</a></li>
                </ul>
            </template>

            <template x-if="tab === 'settings'">
                <ul class="flex justify-around text-sm">
                    <li><a href="{{ url('/settings') }}" class="hover:text-orange-400">Preferences</a></li>
                    <li><a href="{{ url('/security') }}" class="hover:text-orange-400">Security</a></li>
                    <li><a href="{{ url('/help') }}" class="hover:text-orange-400">Help</a></li>
                </ul>
            </template>
        </nav>

        {{-- Bottom Tab Bar --}}
        <nav class="fixed bottom-0 left-0 right-0 z-50 navbar-orange border-t navbar-border">
            <ul class="flex justify-around p-2">
                <li class="flex-1">
                    <button
                        type="button"
                        @click="tab = 'home'"
                        :class="tab === 'home' ? 'text-green-900 font-bold' : 'text-white'"
                        class="w-full flex flex-col items-center text-xs focus:outline-none">
                        <span class="text-lg">🏠</span>
                        <span class="mt-1">Home</span>
                    </button>
                </li>

                <li class="flex-1">
                    <button
                        type="button"
                        @click="tab = 'profile'"
                        :class="tab === 'profile' ? 'text-green-900 font-bold' : 'text-white'"
                        class="w-full flex flex-col items-center text-xs focus:outline-none">
                        <span class="text-lg">👤</span>
                        <span class="mt-1">Profile</span>
                    </button>
                </li>

                <li class="flex-1">
                    <button
                        type="button"
                        @click="tab = 'settings'"
                        :class="tab === 'settings' ? 'text-green-900 font-bold' : 'text-white'"
                        class="w-full flex flex-col items-center text-xs focus:outline-none">
                        <span class="text-lg">⚙️</span>
                        <span class="mt-1">Settings</span>
                    </button>
                </li>
            </ul>
        </nav>
    </div>
</div>

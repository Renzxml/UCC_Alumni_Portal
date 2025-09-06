{{-- resources/views/layouts/navbar.blade.php --}}
<div x-data="{ tab: localStorage.getItem('mobileTab') || 'home' }"
     x-init="$watch('tab', value => localStorage.setItem('mobileTab', value))">

    {{-- Desktop Top Navbar (visible on md and up) --}}
    <nav class="bg-gray-800 p-4 text-white hidden md:block">
        <div class="container mx-auto flex items-center justify-between">
            <a href="{{ route('dashboard') }}" class="text-xl font-bold">AlumniLink</a>
            <ul class="flex space-x-6">
                <li><a href="{{ route('dashboard') }}" class="hover:text-gray-300">Dashboard</a></li>
                <li><a href="{{ url('/profile') }}" class="hover:text-gray-300">Profile</a></li>
                <li><a href="{{ url('/settings') }}" class="hover:text-gray-300">Settings</a></li>
                <li><a href="{{ url('/logout') }}" class="hover:text-gray-300">Logout</a></li>
            </ul>
        </div>
    </nav>

    {{-- Mobile Top Navbar (changes by tab) --}}
    <nav class="bg-gray-800 text-white p-2 md:hidden">
        {{-- Home tab top menu --}}
        <template x-if="tab === 'home'">
            <ul class="flex justify-around">
                <li><a href="{{ route('dashboard') }}" class="hover:text-gray-300">Overview</a></li>
                <li><a href="{{ url('/news') }}" class="hover:text-gray-300">News</a></li>
                <li><a href="{{ url('/events') }}" class="hover:text-gray-300">Events</a></li>
            </ul>
        </template>

        {{-- Profile tab top menu --}}
        <template x-if="tab === 'profile'">
            <ul class="flex justify-around">
                <li><a href="{{ url('/profile') }}" class="hover:text-gray-300">My Info</a></li>
                <li><a href="{{ url('/friends') }}" class="hover:text-gray-300">Connections</a></li>
                <li><a href="{{ url('/photos') }}" class="hover:text-gray-300">Photos</a></li>
            </ul>
        </template>

        {{-- Settings tab top menu --}}
        <template x-if="tab === 'settings'">
            <ul class="flex justify-around">
                <li><a href="{{ url('/settings') }}" class="hover:text-gray-300">Preferences</a></li>
                <li><a href="{{ url('/security') }}" class="hover:text-gray-300">Security</a></li>
                <li><a href="{{ url('/help') }}" class="hover:text-gray-300">Help</a></li>
            </ul>
        </template>
    </nav>

    {{-- Mobile Bottom Tab Bar (persistent) --}}
    <nav class="fixed bottom-0 left-0 right-0 md:hidden z-50 border-t border-gray-700 bg-gray-800/95">
        <ul class="flex justify-around p-2">
            <li class="flex-1">
                <button
                    type="button"
                    @click="tab = 'home'"
                    :class="tab === 'home' ? 'text-blue-400' : 'text-white'"
                    class="w-full flex flex-col items-center text-xs focus:outline-none">
                    <span class="text-lg">🏠</span>
                    <span class="mt-1">Home</span>
                </button>
            </li>

            <li class="flex-1">
                <button
                    type="button"
                    @click="tab = 'profile'"
                    :class="tab === 'profile' ? 'text-blue-400' : 'text-white'"
                    class="w-full flex flex-col items-center text-xs focus:outline-none">
                    <span class="text-lg">👤</span>
                    <span class="mt-1">Profile</span>
                </button>
            </li>

            <li class="flex-1">
                <button
                    type="button"
                    @click="tab = 'settings'"
                    :class="tab === 'settings' ? 'text-blue-400' : 'text-white'"
                    class="w-full flex flex-col items-center text-xs focus:outline-none">
                    <span class="text-lg">⚙️</span>
                    <span class="mt-1">Settings</span>
                </button>
            </li>
        </ul>
    </nav>
</div>

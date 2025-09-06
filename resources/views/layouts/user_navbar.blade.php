{{-- resources/views/layouts/user_navbar.blade.php --}}
<div x-data="{ tab: localStorage.getItem('mobileTab') || 'home' }"
     x-init="$watch('tab', value => localStorage.setItem('mobileTab', value))"
     class="navbar-wrapper">

    {{-- Desktop Navbar --}}
    <div class="navbar-desktop">
        <nav class="navbar-desktop-inner navbar-green">
            {{-- Logo + Title --}}
            <div class="navbar-logo">
                <img src="{{ asset('images/logo.png') }}" alt="Logo">
                <span>UCC Alumni Portal</span>
            </div>

            {{-- Menu Links --}}
            <ul class="navbar-links">
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
    <div class="navbar-mobile">
        <nav class="navbar-mobile-top navbar-green">
            <template x-if="tab === 'home'">
                <ul class="mobile-links">
                    <li><a href="{{ route('welcome') }}">Overview</a></li>
                    <li><a href="{{ url('/news') }}">News</a></li>
                    <li><a href="{{ url('/events') }}">Events</a></li>
                </ul>
            </template>

            <template x-if="tab === 'profile'">
                <ul class="mobile-links">
                    <li><a href="{{ url('/profile') }}">My Info</a></li>
                    <li><a href="{{ url('/friends') }}">Connections</a></li>
                    <li><a href="{{ url('/photos') }}">Photos</a></li>
                </ul>
            </template>

            <template x-if="tab === 'settings'">
                <ul class="mobile-links">
                    <li><a href="{{ url('/settings') }}">Preferences</a></li>
                    <li><a href="{{ url('/security') }}">Security</a></li>
                    <li><a href="{{ url('/help') }}">Help</a></li>
                </ul>
            </template>
        </nav>

        {{-- Bottom Tab Bar --}}
        <nav class="navbar-mobile-bottom navbar-orange navbar-border">
            <ul class="bottom-tabs">
                <li>
                    <button type="button" @click="tab = 'home'" :class="tab === 'home' ? 'active' : ''">
                        <span>🏠</span>
                        <span>Home</span>
                    </button>
                </li>
                <li>
                    <button type="button" @click="tab = 'profile'" :class="tab === 'profile' ? 'active' : ''">
                        <span>👤</span>
                        <span>Profile</span>
                    </button>
                </li>
                <li>
                    <button type="button" @click="tab = 'settings'" :class="tab === 'settings' ? 'active' : ''">
                        <span>⚙️</span>
                        <span>Settings</span>
                    </button>
                </li>
            </ul>
        </nav>
    </div>
</div>

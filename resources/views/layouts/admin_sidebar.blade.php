<div class="admin-sidebar">
    <!-- Logo and System Name -->
    <div class="sidebar-logo">
        <img src="{{ asset('images/logo.png') }}" alt="UCC Logo">
        <h2>UCC Alumni Portal</h2>
    </div>

    <!-- Sidebar Buttons -->
    <nav class="sidebar-nav">
        <a href="{{ route('dashboard') }}">Dashboard</a>
        <a href="{{ route('alumni') }}">Alumni Directory</a>
        <a href="{{ route('ID_request') }}">ID Request</a>
        <a href="{{ route('community_management') }}">Community Management</a>
        <a href="{{ route('analytics') }}">Analytics</a>
        <a href="{{ route('admin_management') }}">Admin Management</a>
        <a href="{{ route('support_request') }}">Support Request</a>
    </nav>
</div>

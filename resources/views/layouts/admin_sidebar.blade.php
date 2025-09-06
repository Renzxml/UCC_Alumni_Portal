<div style="width:250px; height:100vh; background:#2F5429; color:#fff; display:flex; flex-direction:column; align-items:center; padding:30px 0;">
    <!-- Logo and System Name -->
    <div style="display:flex; flex-direction:column; align-items:center; margin-bottom:40px;">
        <img src="{{ asset('images/logo.png') }}" alt="UCC Logo" style="width:60px; height:60px; margin-bottom:10px;">
        <h2 style="font-size:1.3rem; font-weight:bold; text-align:center;">UCC Alumni Portal</h2>
    </div>
    <!-- Sidebar Buttons -->
    <nav style="width:100%;">
        <a href="{{ route('dashboard') }}" 
           style="display:block; padding:12px 30px; color:#fff; text-decoration:none; border-radius:6px; margin-bottom:8px; transition: background 0.2s;"
           onmouseover="this.style.background='#FF7F00'" 
           onmouseout="this.style.background='transparent'">Dashboard</a>

        <a href="{{ route('alumni') }}" 
           style="display:block; padding:12px 30px; color:#fff; text-decoration:none; border-radius:6px; margin-bottom:8px; transition: background 0.2s;"
           onmouseover="this.style.background='#FF7F00'" 
           onmouseout="this.style.background='transparent'">Alumni Directory</a>

        <a href="{{ route('ID_request') }}" 
           style="display:block; padding:12px 30px; color:#fff; text-decoration:none; border-radius:6px; margin-bottom:8px; transition: background 0.2s;"
           onmouseover="this.style.background='#FF7F00'" 
           onmouseout="this.style.background='transparent'">ID Request</a>

        <a href="{{ route('community_management') }}" 
           style="display:block; padding:12px 30px; color:#fff; text-decoration:none; border-radius:6px; margin-bottom:8px; transition: background 0.2s;"
           onmouseover="this.style.background='#FF7F00'" 
           onmouseout="this.style.background='transparent'">Community Management</a>

        <a href="{{ route('analytics') }}" 
           style="display:block; padding:12px 30px; color:#fff; text-decoration:none; border-radius:6px; margin-bottom:8px; transition: background 0.2s;"
           onmouseover="this.style.background='#FF7F00'" 
           onmouseout="this.style.background='transparent'">Analytics</a>

        <a href="{{ route('admin_management') }}" 
           style="display:block; padding:12px 30px; color:#fff; text-decoration:none; border-radius:6px; margin-bottom:8px; transition: background 0.2s;"
           onmouseover="this.style.background='#FF7F00'" 
           onmouseout="this.style.background='transparent'">Admin Management</a>

        <a href="{{ route('support_request') }}" 
           style="display:block; padding:12px 30px; color:#fff; text-decoration:none; border-radius:6px; margin-bottom:8px; transition: background 0.2s;"
           onmouseover="this.style.background='#FF7F00'" 
           onmouseout="this.style.background='transparent'">Support Request</a>
    </nav>
</div>

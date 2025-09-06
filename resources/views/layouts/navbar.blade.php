<nav class="navbar navbar-expand-lg" style="background-color: #ff6600; height: 100px;">
  <div class="container">
    
    <!-- Green floating navbar -->
    <div class="bg-success w-100 rounded shadow-lg px-4 py-2 d-flex align-items-center justify-content-between" 
         style="background-color:#006400 !important;">

      <!-- Logo + Text -->
      <div class="d-flex align-items-center">
        <img src="{{ asset('images/logo.png') }}" alt="Logo" class="me-2" style="height: 50px; width: 50px;">
        <div class="d-flex flex-column lh-1 text-white fw-bold">
          <span>UCC Alumni</span>
          <span>Portal</span>
        </div>
      </div>

      <!-- Menu Links -->
      <button class="navbar-toggler bg-light ms-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto fw-semibold">
          <li class="nav-item"><a class="nav-link text-white" href="{{ route('welcome') }}">Home</a></li>
          <li class="nav-item"><a class="nav-link text-white" href="{{ url('/careers') }}">Careers</a></li>
          <li class="nav-item"><a class="nav-link text-white" href="{{ url('/online_services') }}">Online Services</a></li>
          <li class="nav-item"><a class="nav-link text-white" href="{{ url('/events') }}">Events</a></li>
          <li class="nav-item"><a class="nav-link text-white" href="{{ url('/about') }}">About</a></li>
          <li class="nav-item"><a class="nav-link text-white" href="{{ url('/community') }}">Community</a></li>
          <li class="nav-item"><a class="nav-link text-white" href="{{ url('/login') }}">Login</a></li>
        </ul>
      </div>
    </div>

  </div>
</nav>

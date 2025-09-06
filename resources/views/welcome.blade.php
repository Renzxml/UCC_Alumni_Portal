<!doctype html>
<html>
<head>
    <title>UCC Alumni Link</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body class="bg-dark text-light">

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
  <div class="container">
    <a class="navbar-brand" href="#">UCC Alumni Link</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link" href="#landing">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
        <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ url('/register') }}">Register</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ url('/login') }}">Login</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- Hero / Landing Section -->
<section id="landing" class="vh-100 d-flex align-items-center justify-content-center text-center">
  <div>
    <h1 class="display-4 fw-bold">Welcome to UCC Alumni Link</h1>
    <p class="lead">Stay connected with fellow alumni, share experiences, and grow together.</p>
    <a href="{{ url('/register') }}" class="btn btn-lg btn-light mt-3">Join Us</a>
  </div>
</section>

<!-- About Us Section -->
<section id="about" class="py-5 bg-secondary text-light">
  <div class="container">
    <h2 class="text-center mb-4">About Us</h2>
    <p class="text-center">The UCC Alumni Link is a platform for graduates of UCC to network, share opportunities, and stay connected with the community. Whether you're just starting your career or already established, we help you stay in touch.</p>
  </div>
</section>

<!-- Contact Section -->
<section id="contact" class="py-5 bg-dark">
  <div class="container">
    <h2 class="text-center mb-4">Contact</h2>
    <p class="text-center">Have questions? Reach out to us via <a href="mailto:alumni@ucc.edu" class="text-info">alumni@ucc.edu</a></p>
  </div>
</section>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
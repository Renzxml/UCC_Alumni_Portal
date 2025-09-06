@extends('layouts.app')

@section('title', 'Welcome')

@section('content')

<!-- Hero / Landing Section -->
<section id="landing" class="vh-100 d-flex align-items-center justify-content-center text-center">
  <div>
    <h1 class="display-4 fw-bold">Welcome to UCC Alumni Link</h1>
    <p class="lead">Stay connected with fellow alumni, share experiences, and grow together.</p>
    <a href="{{ url('/register') }}" class="btn btn-lg btn-light mt-3">Join Us</a>
  </div>
</section>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
@endsection
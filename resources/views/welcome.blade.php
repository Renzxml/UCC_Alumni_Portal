@extends('layouts.app')

@section('title', 'Welcome')

@section('content')

<!-- Full Width Carousel Section -->
<section id="landing">
    <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <!-- Slide 1 -->
            <div class="carousel-item active">
                <img src="{{ asset('images/front.jpg') }}" class="d-block w-100" alt="UCC Building">
            </div>
            <!-- Slide 2 -->
            <div class="carousel-item">
                <img src="{{ asset('images/UCCC.jpg') }}" class="d-block w-100" alt="UCC Campus">
            </div>
        </div>

        <!-- Carousel controls -->
        <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>
</section>

<!-- Announcements Section -->
<section id="announcements" class="py-5 bg-light text-center">
    <div class="container">
        <h2 class="mb-4 text-success">Announcements</h2>
        <div class="row">
            <div class="col-md-4 mb-3">
                <div class="card shadow-sm border-0">
                    <div class="card-body">
                        <h5 class="card-title">Announcement 1</h5>
                        <p class="card-text">Details about the first announcement go here.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card shadow-sm border-0">
                    <div class="card-body">
                        <h5 class="card-title">Announcement 2</h5>
                        <p class="card-text">Details about the second announcement go here.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card shadow-sm border-0">
                    <div class="card-body">
                        <h5 class="card-title">Announcement 3</h5>
                        <p class="card-text">Details about the third announcement go here.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.bundle.min.js"></script>
@endsection
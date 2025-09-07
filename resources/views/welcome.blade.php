@extends('layouts.app')

@section('title', 'Welcome')

@section('content')

<!-- Full Width Carousel Section -->
<section id="landing">
    <div class="ratio ratio-21x9">
        <img src="{{ asset('images/background.jpg') }}" 
             class="w-100 h-100 object-fit-cover" 
             alt="UCC Campus">
    </div>
</section>



<!-- Announcements Section -->
<section id="announcements" class="py-5 bg-light text-center">
    <div class="container">

        <!-- Section Title -->
        <h2 class="fw-bold text-success">Announcements</h2>
        <p class="text-muted mb-5">
            Stay informed with the latest updates! Keep up with everything that’s happening—
            explore our news and announcements now.
        </p>

        <!-- Announcement Cards -->
        <div class="row g-4">

            <!-- Card 1 -->
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm">
                    <!-- Placeholder for image -->
                    <div class="bg-secondary rounded mb-3" style="height: 250px;"></div>
                    <div class="card-body text-start">
                        <h5 class="fw-bold text-success">Title</h5>
                        <p class="text-muted mb-1">MM-DD-YYYY</p>
                        <p class="card-text">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit...
                        </p>
                        <a href="#" class="btn btn-success rounded-pill px-4 fw-bold">
                            Continue Reading
                        </a>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="bg-secondary rounded mb-3" style="height: 250px;"></div>
                    <div class="card-body text-start">
                        <h5 class="fw-bold text-success">Title</h5>
                        <p class="text-muted mb-1">MM-DD-YYYY</p>
                        <p class="card-text">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit...
                        </p>
                        <a href="#" class="btn btn-success rounded-pill px-4 fw-bold">
                            Continue Reading
                        </a>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="bg-secondary rounded mb-3" style="height: 250px;"></div>
                    <div class="card-body text-start">
                        <h5 class="fw-bold text-success">Title</h5>
                        <p class="text-muted mb-1">MM-DD-YYYY</p>
                        <p class="card-text">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit...
                        </p>
                        <a href="#" class="btn btn-success rounded-pill px-4 fw-bold">
                            Continue Reading
                        </a>
                    </div>
                </div>
            </div>

        </div>

        <!-- View All Button -->
        <div class="mt-5">
            <a href="#" class="btn btn-success rounded-pill px-4 fw-bold">
                View all Announcements
            </a>
        </div>

    </div>
</section>


<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.bundle.min.js"></script>
@endsection
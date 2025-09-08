@extends('layouts.app')

@section('title', 'Welcome')

@section('content')

<!-- Full Width Carousel Section -->
<section id="landing">
    <div class="ratio ratio-21x9">
        <img src="{{ asset('images/b&wucc.jpg') }}" 
             class="w-100 h-100 object-fit-cover" 
             alt="UCC Campus">

        <!-- Overlay content -->
        <div class="overlay-content">
            <img src="{{ asset('images/logo.png') }}" alt="UCC Logo">
            <div class="d-flex flex-column justify-content-center">
                <h2 class="fw-bold display-5">About The University of Caloocan City</h2>
                <p class="fs-5">
                    The University of Caloocan City (abbreviated as UCC) is a public-type local 
                    university established in 1971 and formerly called Caloocan City Community 
                    College and Caloocan City Polytechnic College. Its south campus is located 
                    at Biglang Awa St., Grace Park East, 12th Avenue, Caloocan, Metro Manila, 
                    Philippines (also known as EDSA/Biglang Awa Campus) and the north campuses 
                    are Camarin Business Campus, Congressional Campus, and Engineering Campus 
                    (Barangay 176, Bagong Silang).
                </p>
            </div>
        </div>
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

<section id="services" class="py-5" style="background-color: #D4EDDA;">
    <div class="container text-center">

        <!-- Section Title -->
        <h2 class="fw-bold text-success mb-5">Online Services</h2>

        <div class="row g-4">

            <!-- Service 1 -->
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm rounded-4">
                    <div class="bg-light rounded-4 d-flex align-items-center justify-content-center mb-3 overflow-hidden" style="height: 200px;">
                        <img src="{{ asset('images/b&wucc.jpg') }}" 
                             alt="Alumni ID" 
                             class="img-fluid h-100 w-100 object-fit-cover rounded-4">
                    </div>
                    <div class="card-body">
                        <h5 class="fw-bold text-success">Alumni ID</h5>
                        <p class="text-muted">
                            Body text for whatever you'd like to say. Add main takeaway points, quotes, or anecdotes.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Service 2 -->
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm rounded-4">
                    <div class="bg-light rounded-4 d-flex align-items-center justify-content-center mb-3 overflow-hidden" style="height: 200px;">
                        <img src="{{ asset('images/b&wucc.jpg') }}" 
                             alt="Year Book" 
                             class="img-fluid h-100 w-100 object-fit-cover rounded-4">
                    </div>
                    <div class="card-body">
                        <h5 class="fw-bold text-success">Year Book</h5>
                        <p class="text-muted">
                            Body text for whatever you'd like to say. Add main takeaway points, quotes, or anecdotes.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Service 3 -->
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm rounded-4">
                    <div class="bg-light rounded-4 d-flex align-items-center justify-content-center mb-3 overflow-hidden" style="height: 200px;">
                        <img src="{{ asset('images/b&wucc.jpg') }}" 
                             alt="2 in 1 Package" 
                             class="img-fluid h-100 w-100 object-fit-cover rounded-4">
                    </div>
                    <div class="card-body">
                        <h5 class="fw-bold text-success">2 in 1 Package</h5>
                        <p class="text-muted">
                            Body text for whatever you'd like to say. Add main takeaway points, quotes, or anecdotes.
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>



<section id="events" class="py-5 bg-light">
  <div class="container-fluid">
    <h2 class="fw-bold text-success text-center mb-5">Events</h2>

    <div class="swiper mySwiper">
      <div class="swiper-wrapper">

        @for ($i = 1; $i <= 5; $i++)
          <div class="swiper-slide">
            <div class="card shadow-sm border-0 text-center">
              <img src="{{ asset('images/b&wucc.jpg') }}" class="card-img-top" alt="Event {{ $i }}">
              <div class="card-body">
                <h5 class="fw-bold text-success">Title {{ $i }}</h5>
                <small class="text-muted d-block">MM-DD-YYYY</small>
                <p class="small">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                <a href="#" class="btn btn-success px-4 rounded-pill fw-bold">Continue Reading</a>
              </div>
            </div>
          </div>
        @endfor

      </div>

      <!-- Arrows -->
      <div class="swiper-button-prev"></div>
      <div class="swiper-button-next"></div>
    </div>
  </div>
</section>




<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.bundle.min.js"></script>
@endsection
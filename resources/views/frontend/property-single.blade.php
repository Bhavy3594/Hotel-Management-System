@extends('frontend.layouts.main')

@section('title', 'Classic Ocean View Suite — Seaplace Luxury Hotel')

@section('content')

  <!-- ================ Banner Area ================= -->	
  <section class="inner-page-banner" id="property-detail" style="background: url('{{ asset('frontend/img/home/header-bg.jpg') }}') center center / cover no-repeat;">
    <div class="container h-100">
      <div class="contact-banner">
        <div class="text-center text-white">
          <h1 class="text-white font-weight-bold display-4">Classic Ocean View Suite</h1>
          <nav aria-label="breadcrumb" class="banner-breadcrumb mt-3">
            <ol class="breadcrumb justify-content-center bg-transparent p-0 m-0">
              <li class="breadcrumb-item"><a href="{{ url('/') }}" class="text-white-50">Home</a></li>
              <li class="breadcrumb-item"><a href="{{ url('/properties') }}" class="text-white-50">Accommodations</a></li>
              <li class="breadcrumb-item active text-gold" style="color: var(--primary-gold);" aria-current="page">Classic Ocean View Suite</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </section>
  <!-- ================ End Banner Area ================= -->

  <!-- ================ Property Detail Showcase ================= -->
  <section class="section-margin py-5">
    <div class="container">
      <div class="row">
        <!-- Main Content Area -->
        <div class="col-lg-8 mb-5 mb-lg-0">
          <!-- Room Gallery Main Image -->
          <div class="card border-0 shadow-sm rounded-lg overflow-hidden mb-4">
            <img src="{{ asset('frontend/img/home/explore1.png') }}" class="img-fluid w-100" style="max-height: 480px; object-fit: cover;" alt="Classic Ocean Suite Large">
          </div>

          <!-- Thumbnail Gallery Row -->
          <div class="row mb-5">
            <div class="col-4">
              <img src="{{ asset('frontend/img/home/explore2.png') }}" class="img-fluid rounded shadow-sm" alt="Bedroom detail">
            </div>
            <div class="col-4">
              <img src="{{ asset('frontend/img/home/explore5.png') }}" class="img-fluid rounded shadow-sm" alt="Balcony View">
            </div>
            <div class="col-4">
              <img src="{{ asset('frontend/img/home/special.png') }}" class="img-fluid rounded shadow-sm" alt="Marble Bath">
            </div>
          </div>

          <!-- Room Overview -->
          <div class="room-details-content mb-5">
            <h3 class="font-weight-bold mb-3" style="font-family: var(--font-serif); font-size: 2rem; color: var(--navy-deep);">Exquisite Coastal Haven</h3>
            <p class="text-muted" style="line-height: 1.8; font-size: 1.05rem;">
              Immerse yourself in sheer tranquility with our Classic Ocean View Suite. Designed with understated elegance, this 650 sq. ft. sanctuary features custom Italian hardwood furnishings, hand-woven textiles, and private floor-to-ceiling glass doors opening directly onto an oceanfront terrace.
            </p>
            <p class="text-muted" style="line-height: 1.8; font-size: 1.05rem;">
              Unwind in a signature Super King bed outfitted with 800-thread-count Egyptian cotton linens, or step into the spa-inspired marble bathroom featuring a rain shower, deep soaking tub, and bespoke organic amenities.
            </p>
          </div>

          <!-- Amenities Grid -->
          <div class="card border-0 shadow-sm p-4 rounded-lg mb-5" style="background: #fafbfc; border-left: 4px solid var(--primary-gold) !important;">
            <h4 class="font-weight-bold mb-4" style="color: var(--navy-deep);">Luxury Suite Amenities</h4>
            <div class="row">
              <div class="col-md-6 mb-3 d-flex align-items-center">
                <i class="fas fa-water text-gold mr-3" style="font-size: 1.2rem; color: var(--primary-gold);"></i>
                <span class="font-weight-500">Private Ocean Balcony</span>
              </div>
              <div class="col-md-6 mb-3 d-flex align-items-center">
                <i class="fas fa-bed text-gold mr-3" style="font-size: 1.2rem; color: var(--primary-gold);"></i>
                <span class="font-weight-500">Super King Plush Bedding</span>
              </div>
              <div class="col-md-6 mb-3 d-flex align-items-center">
                <i class="fas fa-bath text-gold mr-3" style="font-size: 1.2rem; color: var(--primary-gold);"></i>
                <span class="font-weight-500">Marble Bathroom & Rain Shower</span>
              </div>
              <div class="col-md-6 mb-3 d-flex align-items-center">
                <i class="fas fa-wifi text-gold mr-3" style="font-size: 1.2rem; color: var(--primary-gold);"></i>
                <span class="font-weight-500">High-Speed Fiber Wi-Fi</span>
              </div>
              <div class="col-md-6 mb-3 d-flex align-items-center">
                <i class="fas fa-concierge-bell text-gold mr-3" style="font-size: 1.2rem; color: var(--primary-gold);"></i>
                <span class="font-weight-500">24/7 Private Butler Service</span>
              </div>
              <div class="col-md-6 mb-3 d-flex align-items-center">
                <i class="fas fa-cocktail text-gold mr-3" style="font-size: 1.2rem; color: var(--primary-gold);"></i>
                <span class="font-weight-500">Stocked Artisanal Mini-Bar</span>
              </div>
            </div>
          </div>

          <!-- Specifications Table -->
          <div class="mb-5">
            <h4 class="font-weight-bold mb-3" style="color: var(--navy-deep);">Suite Specifications</h4>
            <table class="table table-bordered shadow-sm rounded">
              <tbody>
                <tr>
                  <th scope="row" class="bg-light" style="width: 35%;">Room Size</th>
                  <td>650 Sq. Ft. / 60 Sq. M.</td>
                </tr>
                <tr>
                  <th scope="row" class="bg-light">Occupancy</th>
                  <td>Up to 2 Adults & 1 Child</td>
                </tr>
                <tr>
                  <th scope="row" class="bg-light">Bed Type</th>
                  <td>1 Plush Super King Bed</td>
                </tr>
                <tr>
                  <th scope="row" class="bg-light">View</th>
                  <td>Panoramic Ocean Horizon</td>
                </tr>
                <tr>
                  <th scope="row" class="bg-light">Check-In / Check-Out</th>
                  <td>3:00 PM / 12:00 PM Express</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>

        <!-- Sidebar Reservation Card -->
        <div class="col-lg-4">
          <div class="card border-0 shadow-lg rounded-lg p-4 sticky-top" style="top: 100px; z-index: 10;">
            <div class="d-flex justify-content-between align-items-center border-bottom pb-3 mb-4">
              <div>
                <span class="text-uppercase text-muted font-weight-bold" style="font-size: 0.8rem;">Nightly Rate</span>
                <h2 class="font-weight-bold text-gold m-0" style="color: var(--primary-gold);">$150 <small class="text-muted" style="font-size: 0.9rem;">/ Night</small></h2>
              </div>
              <span class="badge badge-success px-3 py-2" style="font-size: 0.8rem;">Available Now</span>
            </div>

            <form action="{{ route('booking.submit') }}" method="POST">
              @csrf

              @if(session('booking_success'))
                <div class="alert alert-success mb-3 p-2 small">
                  <i class="fas fa-check-circle mr-1"></i> {{ session('booking_success') }}
                </div>
              @endif

              <div class="form-group mb-3">
                <label class="font-weight-bold text-uppercase" style="font-size: 11px; letter-spacing: 1px;">Guest Full Name</label>
                <input type="text" name="name" class="form-control" placeholder="John Doe" required>
              </div>

              <div class="form-group mb-3">
                <label class="font-weight-bold text-uppercase" style="font-size: 11px; letter-spacing: 1px;">Check-In Date</label>
                <input type="date" name="arrival" class="form-control" min="{{ date('Y-m-d') }}" required>
              </div>

              <div class="form-group mb-3">
                <label class="font-weight-bold text-uppercase" style="font-size: 11px; letter-spacing: 1px;">Check-Out Date</label>
                <input type="date" name="departure" class="form-control" required>
              </div>

              <div class="form-row mb-3">
                <div class="col">
                  <label class="font-weight-bold text-uppercase" style="font-size: 11px; letter-spacing: 1px;">Adults</label>
                  <select name="adults" class="form-control" required>
                    <option value="1">1 Adult</option>
                    <option value="2" selected>2 Adults</option>
                    <option value="3">3 Adults</option>
                  </select>
                </div>
                <div class="col">
                  <label class="font-weight-bold text-uppercase" style="font-size: 11px; letter-spacing: 1px;">Children</label>
                  <select name="children" class="form-control" required>
                    <option value="0" selected>0 Children</option>
                    <option value="1">1 Child</option>
                    <option value="2">2 Children</option>
                  </select>
                </div>
              </div>

              <input type="hidden" name="rooms" value="1">

              <button type="submit" class="button button-hero btn-block text-center mt-4">Confirm Reservation</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ================ End Property Detail Showcase ================= -->

@endsection

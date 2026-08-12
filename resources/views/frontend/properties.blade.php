@extends('frontend.layouts.main')

@section('title', 'Rooms & Suites — Seaplace Luxury Hotel')

@section('content')

  <!-- ================ Banner Area ================= -->	
  <section class="inner-page-banner" id="properties" style="background: url('{{ asset('frontend/img/home/header-bg.jpg') }}') center center / cover no-repeat;">
    <div class="container h-100">
      <div class="contact-banner">
        <div class="text-center text-white">
          <h1 class="text-white font-weight-bold display-4">Rooms & Accommodations</h1>
          <nav aria-label="breadcrumb" class="banner-breadcrumb mt-3">
            <ol class="breadcrumb justify-content-center bg-transparent p-0 m-0">
              <li class="breadcrumb-item"><a href="{{ url('/') }}" class="text-white-50">Home</a></li>
              <li class="breadcrumb-item active text-gold" style="color: var(--primary-gold);" aria-current="page">Accommodations</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </section>
  <!-- ================ End Banner Area ================= -->

  <!-- ================ Booking Search Bar ================= -->	
  <section class="form-search-position mb-5">
    <div class="container">
      <form class="form-search" action="{{ route('booking.submit') }}" method="POST">
        @csrf
        
        @if(session('booking_success'))
          <div class="alert alert-success mb-4">
            <i class="fas fa-check-circle mr-2"></i> {{ session('booking_success') }}
          </div>
        @endif

        <div class="row gutters-19">
          <div class="col-lg-4 mb-3 mb-lg-0">
            <label class="font-weight-600 text-uppercase" style="font-size: 11px; letter-spacing: 1px; color: var(--text-muted);">Guest Full Name</label>
            <input class="form-control" type="text" name="name" placeholder="John Doe" value="{{ old('name') }}" required>
          </div>
          <div class="col-lg-4 mb-3 mb-lg-0">
            <label class="font-weight-600 text-uppercase" style="font-size: 11px; letter-spacing: 1px; color: var(--text-muted);">Check-In Date</label>
            <input class="form-control" type="date" name="arrival" value="{{ old('arrival') }}" min="{{ date('Y-m-d') }}" required>
          </div>
          <div class="col-lg-4 mb-3 mb-lg-0">
            <label class="font-weight-600 text-uppercase" style="font-size: 11px; letter-spacing: 1px; color: var(--text-muted);">Check-Out Date</label>
            <input class="form-control" type="date" name="departure" value="{{ old('departure') }}" required>
          </div>
        </div>

        <div class="row gutters-19 mt-3">
          <div class="col-lg-3 col-sm-6 mb-3 mb-lg-0">
            <label class="font-weight-600 text-uppercase" style="font-size: 11px; letter-spacing: 1px; color: var(--text-muted);">Number of Rooms</label>
            <select name="rooms" id="rooms" class="w-100" required>
              <option value="1">1 Room</option>
              <option value="2">2 Rooms</option>
              <option value="3">3 Rooms</option>
              <option value="4+">4+ Rooms</option>
            </select>
          </div>
          <div class="col-lg-3 col-sm-6 mb-3 mb-lg-0">
            <label class="font-weight-600 text-uppercase" style="font-size: 11px; letter-spacing: 1px; color: var(--text-muted);">Adults</label>
            <select name="adults" id="adults" class="w-100" required>
              <option value="1">1 Adult</option>
              <option value="2">2 Adults</option>
              <option value="3">3 Adults</option>
              <option value="4+">4+ Adults</option>
            </select>
          </div>
          <div class="col-lg-3 col-sm-6 mb-3 mb-lg-0">
            <label class="font-weight-600 text-uppercase" style="font-size: 11px; letter-spacing: 1px; color: var(--text-muted);">Children</label>
            <select name="children" id="children" class="w-100" required>
              <option value="0">0 Children</option>
              <option value="1">1 Child</option>
              <option value="2">2 Children</option>
              <option value="3+">3+ Children</option>
            </select>
          </div>
          <div class="col-lg-3 col-sm-6 align-self-end">
            <button type="submit">Check Availability</button>
          </div>
        </div>
      </form>
    </div>
  </section>
  <!-- ================ End Booking Search Bar ================= -->	

  <!-- ================ Rooms Catalog Grid ================= -->
  <section class="section-margin py-5">
    <div class="container">
      <div class="section-intro text-center pb-5">
        <div class="section-intro__style mb-2">
          <img src="{{ asset('frontend/img/home/bed-icon.png') }}" alt="Bed Icon">
        </div>
        <h2 class="section-intro__title">Our Exclusive Suites</h2>
      </div>

      <div class="row">
        <!-- Room 1 -->
        <div class="col-md-6 col-lg-4 mb-4">
          <div class="card card-explore h-100">
            <div class="card-explore__img">
              <img class="card-img" src="{{ asset('frontend/img/home/explore1.png') }}" alt="Classic Ocean Suite">
              <div class="card-explore__price">$150.00 <span>/ Night</span></div>
            </div>
            <div class="card-body d-flex flex-column justify-content-between">
              <div>
                <h4 class="card-title"><a href="{{ route('properties.single') }}">Classic Ocean Suite</a></h4>
                <p class="text-muted">Plush king bed, private sea view balcony, luxury marble bath, and complimentary Wi-Fi.</p>
              </div>
              <a class="button button-hero btn-block text-center mt-3" href="{{ url('/contact') }}">Reserve Suite</a>
            </div>
          </div>
        </div>

        <!-- Room 2 -->
        <div class="col-md-6 col-lg-4 mb-4">
          <div class="card card-explore h-100">
            <div class="card-explore__img">
              <img class="card-img" src="{{ asset('frontend/img/home/explore2.png') }}" alt="Premium Horizon Room">
              <div class="card-explore__price">$170.00 <span>/ Night</span></div>
            </div>
            <div class="card-body d-flex flex-column justify-content-between">
              <div>
                <h4 class="card-title"><a href="{{ route('properties.single') }}">Premium Horizon Room</a></h4>
                <p class="text-muted">Panoramic floor-to-ceiling sea views, soaking tub, executive desk, and espresso bar.</p>
              </div>
              <a class="button button-hero btn-block text-center mt-3" href="{{ url('/contact') }}">Reserve Suite</a>
            </div>
          </div>
        </div>

        <!-- Room 3 -->
        <div class="col-md-6 col-lg-4 mb-4">
          <div class="card card-explore h-100">
            <div class="card-explore__img">
              <img class="card-img" src="{{ asset('frontend/img/home/explore3.png') }}" alt="Family Penthouse Suite">
              <div class="card-explore__price">$190.00 <span>/ Night</span></div>
            </div>
            <div class="card-body d-flex flex-column justify-content-between">
              <div>
                <h4 class="card-title"><a href="{{ route('properties.single') }}">Family Penthouse Suite</a></h4>
                <p class="text-muted">Two king bedrooms, spacious lounge, private terrace, and 24/7 butler service.</p>
              </div>
              <a class="button button-hero btn-block text-center mt-3" href="{{ url('/contact') }}">Reserve Suite</a>
            </div>
          </div>
        </div>

        <!-- Room 4 -->
        <div class="col-md-6 col-lg-4 mb-4">
          <div class="card card-explore h-100">
            <div class="card-explore__img">
              <img class="card-img" src="{{ asset('frontend/img/home/explore4.png') }}" alt="Single Executive Room">
              <div class="card-explore__price">$120.00 <span>/ Night</span></div>
            </div>
            <div class="card-body d-flex flex-column justify-content-between">
              <div>
                <h4 class="card-title"><a href="{{ route('properties.single') }}">Single Executive Room</a></h4>
                <p class="text-muted">Refined room designed for business solo travelers, high-speed fiber internet, and workspace.</p>
              </div>
              <a class="button button-hero btn-block text-center mt-3" href="{{ url('/contact') }}">Reserve Suite</a>
            </div>
          </div>
        </div>

        <!-- Room 5 -->
        <div class="col-md-6 col-lg-4 mb-4">
          <div class="card card-explore h-100">
            <div class="card-explore__img">
              <img class="card-img" src="{{ asset('frontend/img/home/explore5.png') }}" alt="Beachfront Villa Suite">
              <div class="card-explore__price">$250.00 <span>/ Night</span></div>
            </div>
            <div class="card-body d-flex flex-column justify-content-between">
              <div>
                <h4 class="card-title"><a href="{{ route('properties.single') }}">Beachfront Villa Suite</a></h4>
                <p class="text-muted">Private coastal villa featuring outdoor plunge pool, direct sand access, and sun deck.</p>
              </div>
              <a class="button button-hero btn-block text-center mt-3" href="{{ url('/contact') }}">Reserve Suite</a>
            </div>
          </div>
        </div>

        <!-- Room 6 -->
        <div class="col-md-6 col-lg-4 mb-4">
          <div class="card card-explore h-100">
            <div class="card-explore__img">
              <img class="card-img" src="{{ asset('frontend/img/home/explore6.png') }}" alt="Royal Presidential Suite">
              <div class="card-explore__price">$300.00 <span>/ Night</span></div>
            </div>
            <div class="card-body d-flex flex-column justify-content-between">
              <div>
                <h4 class="card-title"><a href="{{ route('properties.single') }}">Royal Presidential Suite</a></h4>
                <p class="text-muted">The ultimate luxury experience: double height ceilings, master jacuzzi, and private chef.</p>
              </div>
              <a class="button button-hero btn-block text-center mt-3" href="{{ url('/contact') }}">Reserve Suite</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ================ End Rooms Catalog Grid ================= -->	

@endsection
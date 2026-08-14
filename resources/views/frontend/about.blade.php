@extends('frontend.layouts.main')

@section('title', 'About Us — Seaplace Luxury Hotel')

@section('content')

  <!-- ================ Banner Area ================= -->	
  <section class="inner-page-banner" id="about" style="background: url('{{ asset('frontend/img/home/header-bg.jpg') }}') center center / cover no-repeat;">
    <div class="container h-100">
      <div class="blog-banner">
        <div class="text-center text-white">
          <h1 class="text-white font-weight-bold display-4">About Seaplace</h1>
        </div>
      </div>
    </div>
  </section>
  <!-- ================ End Banner Area ================= -->

  <!-- ================ Welcome Section Start ================= -->	
  <section class="welcome py-5">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-5 mb-4 mb-lg-0">
          <div class="row no-gutters welcome-images">
            <div class="col-sm-7 pr-2 mb-2">
              <div class="card border-0 shadow-sm rounded-lg overflow-hidden">
                <img class="img-fluid" src="{{ asset('frontend/img/home/welcomeBanner1.png') }}" alt="Banner 1">
              </div>
            </div>
            <div class="col-sm-5 mb-2">
              <div class="card border-0 shadow-sm rounded-lg overflow-hidden">
                <img class="img-fluid" src="{{ asset('frontend/img/home/welcomeBanner2.png') }}" alt="Banner 2">
              </div>
            </div>
            <div class="col-lg-12">
              <div class="card border-0 shadow-sm rounded-lg overflow-hidden">
                <img class="img-fluid" src="{{ asset('frontend/img/home/welcomeBanner3.png') }}" alt="Banner 3">
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-7 pl-lg-5">
          <div class="welcome-content">
            <span class="text-uppercase text-gold font-weight-bold" style="letter-spacing: 2px; color: var(--primary-gold);">Our Heritage & Philosophy</span>
            <h2 class="mb-4 mt-2 font-weight-bold" style="font-size: 2.4rem;">Where Elegance Meets Coastal Serenity</h2>
            <p class="text-muted" style="line-height: 1.8;">
              Founded with a vision to redefine world-class hospitality, Seaplace Hotel & Resort combines timeless architectural beauty with modern luxury. Situated along an exclusive stretch of oceanfront, our residence provides guests with a peaceful sanctuary from the ordinary.
            </p>
            <p class="text-muted mb-4" style="line-height: 1.8;">
              Every detail—from hand-selected linens to farm-to-table culinary creations—is curated to celebrate the fine art of living well.
            </p>
            
            <div class="row pt-3">
              <div class="col-sm-6 mb-3">
                <div class="d-flex align-items-center">
                  <i class="fas fa-award fa-2x mr-3" style="color: var(--primary-gold);"></i>
                  <div>
                    <h5 class="m-0 font-weight-bold">5-Star Rated</h5>
                    <small class="text-muted">Global Luxury Hotel Award</small>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 mb-3">
                <div class="d-flex align-items-center">
                  <i class="fas fa-concierge-bell fa-2x mr-3" style="color: var(--primary-gold);"></i>
                  <div>
                    <h5 class="m-0 font-weight-bold">24/7 Butler Service</h5>
                    <small class="text-muted">Bespoke Guest Care</small>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ================ Welcome Section End ================= -->	

  <!-- ================ Special Facilities Start ================= -->
  <section class="section-padding py-5 bg-light">
    <div class="container">
      <div class="section-intro text-center pb-5">
        <div class="section-intro__style mb-2">
          <img src="{{ asset('frontend/img/home/bed-icon.png') }}" alt="Bed Icon">
        </div>
        <h2 class="section-intro__title">Signature Facilities</h2>
      </div>

      <div class="row">
        <div class="col-md-6 col-lg-4 mb-4">
          <div class="card border-0 shadow-sm p-4 h-100 rounded-lg">
            <div class="media align-items-center mb-3">
              <span class="card-special__icon mr-3" style="font-size: 2rem; color: var(--primary-gold);"><i class="ti-home"></i></span>
              <div class="media-body">
                <h4 class="card-special__title m-0 font-weight-bold">Grand Event Hall</h4>
              </div>
            </div>
            <p class="text-muted m-0">State-of-the-art corporate conference facilities, gala banquet rooms, and wedding pavilions.</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-4 mb-4">
          <div class="card border-0 shadow-sm p-4 h-100 rounded-lg">
            <div class="media align-items-center mb-3">
              <span class="card-special__icon mr-3" style="font-size: 2rem; color: var(--primary-gold);"><i class="ti-bell"></i></span>
              <div class="media-body">
                <h4 class="card-special__title m-0 font-weight-bold">Infinity Edge Pool</h4>
              </div>
            </div>
            <p class="text-muted m-0">Temperature-controlled oceanfront infinity pool complete with private sun cabanas and cocktail lounge.</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-4 mb-4">
          <div class="card border-0 shadow-sm p-4 h-100 rounded-lg">
            <div class="media align-items-center mb-3">
              <span class="card-special__icon mr-3" style="font-size: 2rem; color: var(--primary-gold);"><i class="ti-car"></i></span>
              <div class="media-body">
                <h4 class="card-special__title m-0 font-weight-bold">Chauffeur & Valet</h4>
              </div>
            </div>
            <p class="text-muted m-0">Private airport transfer, luxury vehicle rental fleet, and complimentary 24/7 valet parking.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ================ Special Facilities End ================= -->

@endsection
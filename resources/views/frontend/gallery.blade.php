@extends('frontend.layouts.main')

@section('title', 'Resort & Property Gallery — Seaplace Luxury Hotel')

@section('content')

  <!-- ================ Banner Area ================= -->	
  <section class="inner-page-banner" id="gallery" style="background: url('{{ asset('frontend/img/home/header-bg.jpg') }}') center center / cover no-repeat;">
    <div class="container h-100">
      <div class="contact-banner">
        <div class="text-center text-white">
          <h1 class="text-white font-weight-bold display-4">Resort & Property Gallery</h1>
        </div>
      </div>
    </div>
  </section>
  <!-- ================ End Banner Area ================= -->
	
  <!-- ================ Gallery Section Start ================= -->	
  <section class="section-margin py-5">
    <div class="container">
      <div class="section-intro text-center pb-5">
        <div class="section-intro__style mb-2">
          <img src="{{ asset('frontend/img/home/bed-icon.png') }}" alt="Bed Icon">
        </div>
        <h2 class="section-intro__title">Explore Our Luxury Property</h2>
        <p class="text-muted mt-2">Immerse yourself in our oceanfront suites, infinity pools, and signature resort sanctuaries.</p>
      </div>

      <!-- Luxury Gallery Showcase Grid -->
      <div class="row">
        <!-- Item 1: Classic Ocean View Suite -->
        <div class="col-md-6 col-lg-4 mb-4">
          <div class="card card-explore border-0 h-100 overflow-hidden shadow-sm">
            <div class="card-explore__img relative">
              <a href="{{ asset('frontend/img/home/explore1.png') }}" class="img-gal">
                <img class="card-img w-100" src="{{ asset('frontend/img/home/explore1.png') }}" alt="Classic Ocean View Suite">
                <div class="card-img-overlay d-flex align-items-end p-3 text-white" style="background: linear-gradient(180deg, transparent 40%, rgba(11,19,43,0.85) 100%);">
                  <div>
                    <span class="badge badge-gold mb-1" style="background: var(--primary-gold); color: #fff;">Luxury Suite</span>
                    <h5 class="m-0 font-weight-bold text-white">Classic Ocean View Suite</h5>
                  </div>
                </div>
              </a>
            </div>
          </div>
        </div>

        <!-- Item 2: Premium Executive Suite -->
        <div class="col-md-6 col-lg-4 mb-4">
          <div class="card card-explore border-0 h-100 overflow-hidden shadow-sm">
            <div class="card-explore__img relative">
              <a href="{{ asset('frontend/img/home/explore2.png') }}" class="img-gal">
                <img class="card-img w-100" src="{{ asset('frontend/img/home/explore2.png') }}" alt="Premium Executive Suite">
                <div class="card-img-overlay d-flex align-items-end p-3 text-white" style="background: linear-gradient(180deg, transparent 40%, rgba(11,19,43,0.85) 100%);">
                  <div>
                    <span class="badge badge-gold mb-1" style="background: var(--primary-gold); color: #fff;">Executive Suite</span>
                    <h5 class="m-0 font-weight-bold text-white">Premium Executive Suite</h5>
                  </div>
                </div>
              </a>
            </div>
          </div>
        </div>

        <!-- Item 3: Royal Family Penthouse -->
        <div class="col-md-6 col-lg-4 mb-4">
          <div class="card card-explore border-0 h-100 overflow-hidden shadow-sm">
            <div class="card-explore__img relative">
              <a href="{{ asset('frontend/img/home/explore3.png') }}" class="img-gal">
                <img class="card-img w-100" src="{{ asset('frontend/img/home/explore3.png') }}" alt="Royal Family Penthouse">
                <div class="card-img-overlay d-flex align-items-end p-3 text-white" style="background: linear-gradient(180deg, transparent 40%, rgba(11,19,43,0.85) 100%);">
                  <div>
                    <span class="badge badge-gold mb-1" style="background: var(--primary-gold); color: #fff;">Penthouse</span>
                    <h5 class="m-0 font-weight-bold text-white">Royal Family Penthouse</h5>
                  </div>
                </div>
              </a>
            </div>
          </div>
        </div>

        <!-- Item 4: Beachfront Villa & Plunge Pool -->
        <div class="col-md-6 col-lg-4 mb-4">
          <div class="card card-explore border-0 h-100 overflow-hidden shadow-sm">
            <div class="card-explore__img relative">
              <a href="{{ asset('frontend/img/home/explore5.png') }}" class="img-gal">
                <img class="card-img w-100" src="{{ asset('frontend/img/home/explore5.png') }}" alt="Beachfront Villa Suite">
                <div class="card-img-overlay d-flex align-items-end p-3 text-white" style="background: linear-gradient(180deg, transparent 40%, rgba(11,19,43,0.85) 100%);">
                  <div>
                    <span class="badge badge-gold mb-1" style="background: var(--primary-gold); color: #fff;">Private Villa</span>
                    <h5 class="m-0 font-weight-bold text-white">Beachfront Villa & Plunge Pool</h5>
                  </div>
                </div>
              </a>
            </div>
          </div>
        </div>

        <!-- Item 5: Royal Presidential Suite -->
        <div class="col-md-6 col-lg-4 mb-4">
          <div class="card card-explore border-0 h-100 overflow-hidden shadow-sm">
            <div class="card-explore__img relative">
              <a href="{{ asset('frontend/img/home/explore6.png') }}" class="img-gal">
                <img class="card-img w-100" src="{{ asset('frontend/img/home/explore6.png') }}" alt="Royal Presidential Suite">
                <div class="card-img-overlay d-flex align-items-end p-3 text-white" style="background: linear-gradient(180deg, transparent 40%, rgba(11,19,43,0.85) 100%);">
                  <div>
                    <span class="badge badge-gold mb-1" style="background: var(--primary-gold); color: #fff;">Presidential</span>
                    <h5 class="m-0 font-weight-bold text-white">Royal Presidential Suite</h5>
                  </div>
                </div>
              </a>
            </div>
          </div>
        </div>

        <!-- Item 6: Sunset Balcony Lounge -->
        <div class="col-md-6 col-lg-4 mb-4">
          <div class="card card-explore border-0 h-100 overflow-hidden shadow-sm">
            <div class="card-explore__img relative">
              <a href="{{ asset('frontend/img/home/welcomeBanner1.png') }}" class="img-gal">
                <img class="card-img w-100" src="{{ asset('frontend/img/home/welcomeBanner1.png') }}" alt="Sunset Balcony Lounge">
                <div class="card-img-overlay d-flex align-items-end p-3 text-white" style="background: linear-gradient(180deg, transparent 40%, rgba(11,19,43,0.85) 100%);">
                  <div>
                    <span class="badge badge-gold mb-1" style="background: var(--primary-gold); color: #fff;">Resort Amenity</span>
                    <h5 class="m-0 font-weight-bold text-white">Sunset Ocean Lounge</h5>
                  </div>
                </div>
              </a>
            </div>
          </div>
        </div>

        <!-- Item 7: Infinity Edge Swimming Pool -->
        <div class="col-md-6 col-lg-6 mb-4">
          <div class="card card-explore border-0 h-100 overflow-hidden shadow-sm">
            <div class="card-explore__img relative">
              <a href="{{ asset('frontend/img/home/welcomeBanner2.png') }}" class="img-gal">
                <img class="card-img w-100" src="{{ asset('frontend/img/home/welcomeBanner2.png') }}" alt="Infinity Edge Pool">
                <div class="card-img-overlay d-flex align-items-end p-4 text-white" style="background: linear-gradient(180deg, transparent 40%, rgba(11,19,43,0.85) 100%);">
                  <div>
                    <span class="badge badge-gold mb-1" style="background: var(--primary-gold); color: #fff;">Infinity Pool</span>
                    <h4 class="m-0 font-weight-bold text-white">Oceanfront Infinity Edge Pool & Cabanas</h4>
                  </div>
                </div>
              </a>
            </div>
          </div>
        </div>

        <!-- Item 8: Signature Wellness Spa -->
        <div class="col-md-6 col-lg-6 mb-4">
          <div class="card card-explore border-0 h-100 overflow-hidden shadow-sm">
            <div class="card-explore__img relative">
              <a href="{{ asset('frontend/img/home/welcomeBanner3.png') }}" class="img-gal">
                <img class="card-img w-100" src="{{ asset('frontend/img/home/welcomeBanner3.png') }}" alt="Signature Spa">
                <div class="card-img-overlay d-flex align-items-end p-4 text-white" style="background: linear-gradient(180deg, transparent 40%, rgba(11,19,43,0.85) 100%);">
                  <div>
                    <span class="badge badge-gold mb-1" style="background: var(--primary-gold); color: #fff;">Wellness Spa</span>
                    <h4 class="m-0 font-weight-bold text-white">Signature Hydrotherapy & Seawater Spa</h4>
                  </div>
                </div>
              </a>
            </div>
          </div>
        </div>

        <!-- Item 9: Grand Event & Banquet Hall -->
        <div class="col-12 mb-4">
          <div class="card card-explore border-0 overflow-hidden shadow-sm">
            <div class="card-explore__img relative">
              <a href="{{ asset('frontend/img/home/special.png') }}" class="img-gal">
                <img class="card-img w-100" src="{{ asset('frontend/img/home/special.png') }}" alt="Grand Banquet Hall">
                <div class="card-img-overlay d-flex align-items-end p-4 text-white" style="background: linear-gradient(180deg, transparent 30%, rgba(11,19,43,0.85) 100%);">
                  <div>
                    <span class="badge badge-gold mb-2" style="background: var(--primary-gold); color: #fff;">Gala & Pavilion</span>
                    <h3 class="m-0 font-weight-bold text-white">Grand Oceanfront Conference & Wedding Pavilion</h3>
                  </div>
                </div>
              </a>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>
  <!-- ================ Gallery Section End ================= -->	

@endsection
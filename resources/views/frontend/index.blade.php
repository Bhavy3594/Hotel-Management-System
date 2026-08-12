@extends('frontend.layouts.main')

@section('title', 'Seaplace — Luxury Oceanfront Hotel & Resort')

@section('content')

  <!-- ================ Home Banner Area Start ================= --> 
  <section class="home-banner-area" id="home">
    <div class="container h-100">
      <div class="home-banner">
        <div class="text-center">
          <h4>See What a Difference a Stay Makes</h4>
          <h1>Luxury <em>is</em> Personal</h1>
          <a class="button button-hero mt-3" href="{{ url('/properties') }}">Explore Rooms</a>
        </div>
      </div>
    </div>
  </section>
  <!-- ================ Home Banner Area End ================= -->


  <!-- ================ Welcome Section Start ================= --> 
  <section class="welcome py-5">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-5 mb-4 mb-lg-0">
          <div class="row no-gutters welcome-images">
            <div class="col-sm-7 pr-2 mb-2">
              <div class="card border-0 shadow-sm rounded-lg overflow-hidden">
                <img class="img-fluid" src="{{ asset('frontend/img/home/welcomeBanner1.png') }}" alt="Welcome Image 1">
              </div>
            </div>
            <div class="col-sm-5 mb-2">
              <div class="card border-0 shadow-sm rounded-lg overflow-hidden">
                <img class="img-fluid" src="{{ asset('frontend/img/home/welcomeBanner2.png') }}" alt="Welcome Image 2">
              </div>
            </div>
            <div class="col-lg-12">
              <div class="card border-0 shadow-sm rounded-lg overflow-hidden">
                <img class="img-fluid" src="{{ asset('frontend/img/home/welcomeBanner3.png') }}" alt="Welcome Image 3">
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-7 pl-lg-5">
          <div class="welcome-content">
            <span class="text-uppercase text-gold font-weight-bold" style="letter-spacing: 2px; color: var(--primary-gold);">Sanctuary of Comfort</span>
            <h2 class="mb-4 mt-2 font-weight-bold" style="font-size: 2.4rem;">Welcome to Seaplace Luxury Residence</h2>
            <p class="text-muted" style="line-height: 1.8;">
              Nestled along pristine coastal shores, Seaplace Luxury Hotel offers an exquisite retreat designed for discernment and serenity. Every suite is meticulously crafted to deliver panoramic ocean views, unmatched comfort, and personalized 5-star hospitality.
            </p>
            <p class="text-muted mb-4" style="line-height: 1.8;">
              Immerse yourself in world-class culinary experiences, revitalizing spa treatments, and seamless private concierge services tailored to make your stay unforgettable.
            </p>
            <a class="button button-hero" href="{{ url('/about') }}">Discover Our Story</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ================ Welcome Section End ================= --> 

  <!-- ================ Explore Rooms Section Start ================= -->
  <section class="section-margin py-5 bg-light">
    <div class="container">
      <div class="section-intro text-center pb-5">
        <div class="section-intro__style mb-2">
          <img src="{{ asset('frontend/img/home/bed-icon.png') }}" alt="Bed Icon">
        </div>
        <h2 class="section-intro__title">Explore Our Luxury Accommodations</h2>
      </div>

      <div class="row">
        <div class="col-md-6 col-lg-4 mb-4">
          <div class="card card-explore">
            <div class="card-explore__img">
              <img class="card-img" src="{{ asset('frontend/img/home/explore1.png') }}" alt="Classic Bed Room">
              <div class="card-explore__price">$150.00 <span>/ Night</span></div>
            </div>
            <div class="card-body">
              <h4 class="card-title"><a href="{{ url('/properties') }}">Classic Ocean View Suite</a></h4>
              <p class="card-text text-muted">Spacious room featuring king-size bedding, ocean balcony, and private marble bath.</p>
              <a class="card-explore__link font-weight-bold text-gold" style="color: var(--primary-gold);" href="{{ url('/properties') }}">View Details <i class="ti-arrow-right ml-1"></i></a>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-4 mb-4">
          <div class="card card-explore">
            <div class="card-explore__img">
              <img class="card-img" src="{{ asset('frontend/img/home/explore2.png') }}" alt="Premium Room">
              <div class="card-explore__price">$170.00 <span>/ Night</span></div>
            </div>
            <div class="card-body">
              <h4 class="card-title"><a href="{{ url('/properties') }}">Premium Executive Suite</a></h4>
              <p class="card-text text-muted">Elevated floor suite with panoramic horizon views, executive lounge access, and soaking tub.</p>
              <a class="card-explore__link font-weight-bold text-gold" style="color: var(--primary-gold);" href="{{ url('/properties') }}">View Details <i class="ti-arrow-right ml-1"></i></a>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-4 mb-4">
          <div class="card card-explore">
            <div class="card-explore__img">
              <img class="card-img" src="{{ asset('frontend/img/home/explore3.png') }}" alt="Family Room">
              <div class="card-explore__price">$190.00 <span>/ Night</span></div>
            </div>
            <div class="card-body">
              <h4 class="card-title"><a href="{{ url('/properties') }}">Royal Family Penthouse</a></h4>
              <p class="card-text text-muted">Multi-bedroom penthouse featuring private terrace, dining salon, and 24/7 butler service.</p>
              <a class="card-explore__link font-weight-bold text-gold" style="color: var(--primary-gold);" href="{{ url('/properties') }}">View Details <i class="ti-arrow-right ml-1"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ================ Explore Rooms Section End ================= --> 


  <!-- ================ Special Facilities Start ================= -->
  <section class="section-padding py-5">
    <div class="container">
      <div class="section-intro text-center pb-5">
        <div class="section-intro__style mb-2">
          <img src="{{ asset('frontend/img/home/bed-icon.png') }}" alt="Bed Icon">
        </div>
        <h2 class="section-intro__title">Exclusive Hotel Amenities</h2>
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

  <!-- ================ Testimonials Start ================= -->
  <section class="section-margin py-5 bg-light">
    <div class="container">
      <div class="section-intro text-center pb-5">
        <div class="section-intro__style mb-2">
          <img src="{{ asset('frontend/img/home/bed-icon.png') }}" alt="Bed Icon">
        </div>
        <h2 class="section-intro__title">Guest Reviews & Testimonials</h2>
      </div>

      <div class="owl-carousel owl-theme testi-carousel">
        <div class="testi-carousel__item p-4 bg-white rounded-lg shadow-sm">
          <div class="media align-items-center">
            <div class="testi-carousel__img mr-3">
              <img class="rounded-circle" src="{{ asset('frontend/img/home/testimonial1.png') }}" width="70" alt="Guest 1">
            </div>
            <div class="media-body">
              <p class="font-italic text-muted mb-2">"An unparalleled luxury experience. From the breathtaking balcony sunset to the exceptional dining, Seaplace exceeded every expectation."</p>
              <h5 class="m-0 font-weight-bold">Robert Mack</h5>
              <small class="text-gold" style="color: var(--primary-gold);">Verified Executive Guest</small>
            </div>
          </div>
        </div>

        <div class="testi-carousel__item p-4 bg-white rounded-lg shadow-sm">
          <div class="media align-items-center">
            <div class="testi-carousel__img mr-3">
              <img class="rounded-circle" src="{{ asset('frontend/img/home/testimonial2.png') }}" width="70" alt="Guest 2">
            </div>
            <div class="media-body">
              <p class="font-italic text-muted mb-2">"The private butler service and wellness spa transformed our anniversary getaway into sheer perfection. We cannot wait to return!"</p>
              <h5 class="m-0 font-weight-bold">Elena Rostova</h5>
              <small class="text-gold" style="color: var(--primary-gold);">International Traveler</small>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ================ Testimonials End ================= -->

@endsection
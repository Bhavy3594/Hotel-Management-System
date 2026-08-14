@extends('frontend.layouts.main')

@section('title', 'Contact Us — Seaplace Luxury Hotel')

@section('content')

  <!-- ================ Banner Area ================= -->	
  <section class="inner-page-banner" id="contact" style="background: url('{{ asset('frontend/img/home/header-bg.jpg') }}') center center / cover no-repeat;">
    <div class="container h-100">
      <div class="contact-banner">
        <div class="text-center text-white">
          <h1 class="text-white font-weight-bold display-4">Contact Our Concierge</h1>
        </div>
      </div>
    </div>
  </section>
  <!-- ================ End Banner Area ================= -->

  <!-- ================ Contact Section Start ================= -->	
  <section class="section-margin py-5">
    <div class="container">

      <!-- Success & Validation Alerts -->
      @if(session('success'))
        <div class="alert alert-success mb-4 p-3">
          <i class="fas fa-check-circle mr-2"></i> {{ session('success') }}
        </div>
      @endif

      @if($errors->any())
        <div class="alert alert-danger mb-4 p-3">
          <ul class="mb-0 pl-3">
            @foreach($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
      @endif

      <div class="row">
        <!-- Contact Info Cards -->
        <div class="col-lg-4 mb-4 mb-lg-0">
          <div class="p-4 bg-light rounded-lg shadow-sm h-100">
            <h4 class="font-weight-bold mb-4" style="color: var(--primary-dark);">Get In Touch</h4>

            <div class="media contact-info mb-4">
              <span class="contact-info__icon mr-3" style="font-size: 1.5rem; color: var(--primary-gold);"><i class="ti-home"></i></span>
              <div class="media-body">
                <h5 class="m-0 font-weight-bold">Seaplace Resort</h5>
                <p class="text-muted m-0">Santa Monica Boulevard, Malibu Beach, CA</p>
              </div>
            </div>

            <div class="media contact-info mb-4">
              <span class="contact-info__icon mr-3" style="font-size: 1.5rem; color: var(--primary-gold);"><i class="ti-headphone"></i></span>
              <div class="media-body">
                <h5 class="m-0 font-weight-bold">Concierge Hotline</h5>
                <p class="text-muted m-0"><a href="tel:+123655233" style="color: var(--primary-gold);">+12 365 5233</a> (24/7 Available)</p>
              </div>
            </div>

            <div class="media contact-info">
              <span class="contact-info__icon mr-3" style="font-size: 1.5rem; color: var(--primary-gold);"><i class="ti-email"></i></span>
              <div class="media-body">
                <h5 class="m-0 font-weight-bold">Email Inquiries</h5>
                <p class="text-muted m-0"><a href="mailto:info@seaplacehotel.com" style="color: var(--primary-gold);">info@seaplacehotel.com</a></p>
              </div>
            </div>
          </div>
        </div>

        <!-- Contact Submission Form -->
        <div class="col-lg-8">
          <div class="p-4 bg-white rounded-lg shadow-sm border">
            <h4 class="font-weight-bold mb-4" style="color: var(--primary-dark);">Send Us A Direct Message</h4>
            
            <form class="contact_form" action="{{ route('contact.submit') }}" method="POST">
              @csrf

              <div class="row">
                <div class="col-md-6 mb-3">
                  <label class="font-weight-600 text-uppercase" style="font-size: 11px; letter-spacing: 1px; color: var(--text-muted);">Your Name</label>
                  <input type="text" name="name" class="form-control" style="height: 48px; border-radius: 8px;" placeholder="John Doe" value="{{ old('name') }}" required>
                </div>

                <div class="col-md-6 mb-3">
                  <label class="font-weight-600 text-uppercase" style="font-size: 11px; letter-spacing: 1px; color: var(--text-muted);">Your Email</label>
                  <input type="email" name="email" class="form-control" style="height: 48px; border-radius: 8px;" placeholder="john@example.com" value="{{ old('email') }}" required>
                </div>

                <div class="col-md-12 mb-3">
                  <label class="font-weight-600 text-uppercase" style="font-size: 11px; letter-spacing: 1px; color: var(--text-muted);">Subject</label>
                  <input type="text" name="subject" class="form-control" style="height: 48px; border-radius: 8px;" placeholder="Inquiry topic..." value="{{ old('subject') }}">
                </div>

                <div class="col-md-12 mb-4">
                  <label class="font-weight-600 text-uppercase" style="font-size: 11px; letter-spacing: 1px; color: var(--text-muted);">Message</label>
                  <textarea name="message" rows="5" class="form-control" style="border-radius: 8px;" placeholder="How can our concierge assist you?" required>{{ old('message') }}</textarea>
                </div>

                <div class="col-md-12 text-right">
                  <button type="submit" class="button button-hero">Send Message</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>

    </div>
  </section>
  <!-- ================ Contact Section End ================= -->	

@endsection
@extends('frontend.layouts.main')

@section('title', 'Featured Journal Article — Seaplace Luxury Hotel')

@section('content')

  <!-- ================ Banner Area ================= -->	
  <section class="inner-page-banner" id="blog-single" style="background: url('{{ asset('frontend/img/home/header-bg.jpg') }}') center center / cover no-repeat;">
    <div class="container h-100">
      <div class="blog-banner">
        <div class="text-center text-white">
          <h1 class="text-white font-weight-bold display-4">Journal Article</h1>
          <nav aria-label="breadcrumb" class="banner-breadcrumb mt-3">
            <ol class="breadcrumb justify-content-center bg-transparent p-0 m-0">
              <li class="breadcrumb-item"><a href="{{ url('/') }}" class="text-white-50">Home</a></li>
              <li class="breadcrumb-item"><a href="{{ url('/blog') }}" class="text-white-50">Journal</a></li>
              <li class="breadcrumb-item active text-gold" style="color: var(--primary-gold);" aria-current="page">Story</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </section>
  <!-- ================ End Banner Area ================= -->

  <!-- ================ Main Article Area ================= -->
  <section class="blog_area single-post-area py-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 posts-list">
          
          <div class="card border-0 shadow-sm rounded-lg overflow-hidden mb-5">
            <img class="img-fluid" src="{{ asset('frontend/img/blog/feature-img1.jpg') }}" alt="Featured Image">
            <div class="card-body p-4 p-md-5">
              
              <div class="d-flex align-items-center mb-3 text-muted" style="font-size: 13px;">
                <span class="mr-3"><i class="far fa-user text-gold mr-1" style="color: var(--primary-gold);"></i> Chef Antoine Laurent</span>
                <span class="mr-3"><i class="far fa-calendar-alt text-gold mr-1" style="color: var(--primary-gold);"></i> August 10, 2026</span>
                <span><i class="far fa-comments text-gold mr-1" style="color: var(--primary-gold);"></i> Comments Community</span>
              </div>

              <h2 class="font-weight-bold mb-4" style="color: var(--primary-dark);">The Art of Farm-to-Table Oceanfront Gastronomy</h2>
              
              <p class="lead text-muted" style="line-height: 1.8;">
                At Seaplace Hotel & Resort, dining is not merely a meal—it is a sensory celebration of coastal ecology, artisanal craftsmanship, and culinary passion.
              </p>
              
              <p class="text-muted" style="line-height: 1.8;">
                Every morning, our culinary team works hand-in-hand with local organic farms and sustainable ocean fisheries to source peak-season ingredients. From line-caught Mediterranean sea bass to freshly harvested herbs from our private garden, each dish tells a rich narrative of flavor.
              </p>

              <blockquote class="p-4 my-4 bg-light rounded-lg border-left border-gold" style="border-left: 4px solid var(--primary-gold); font-style: italic;">
                "True luxury culinary art requires absolute respect for raw ingredients, environmental harmony, and uncompromised presentation."
              </blockquote>

              <p class="text-muted" style="line-height: 1.8;">
                Guests are invited to pair their dinners with selections from our sommelier's cellar, which houses over 1,200 rare international vintages and limited-edition coastal reserves.
              </p>

            </div>
          </div>

          <!-- Comment Submission Form -->
          <div class="card border-0 shadow-sm rounded-lg p-4 p-md-5 mb-5">
            <h4 class="font-weight-bold mb-4" style="color: var(--primary-dark);">Leave A Thoughtful Comment</h4>

            @if(session('comment_success'))
              <div class="alert alert-success mb-4 p-3">
                <i class="fas fa-check-circle mr-2"></i> {{ session('comment_success') }}
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

            <form action="{{ route('comment.submit') }}" method="POST">
              @csrf
              <input type="hidden" name="blog_id" value="1">

              <div class="row">
                <div class="col-md-6 mb-3">
                  <label class="font-weight-600 text-uppercase" style="font-size: 11px; letter-spacing: 1px; color: var(--text-muted);">Your Full Name</label>
                  <input type="text" name="name" class="form-control" style="height: 48px; border-radius: 8px;" placeholder="John Doe" value="{{ old('name') }}" required>
                </div>
                <div class="col-md-6 mb-3">
                  <label class="font-weight-600 text-uppercase" style="font-size: 11px; letter-spacing: 1px; color: var(--text-muted);">Email Address</label>
                  <input type="email" name="email" class="form-control" style="height: 48px; border-radius: 8px;" placeholder="john@example.com" value="{{ old('email') }}" required>
                </div>
                <div class="col-md-12 mb-3">
                  <label class="font-weight-600 text-uppercase" style="font-size: 11px; letter-spacing: 1px; color: var(--text-muted);">Comment Message</label>
                  <textarea name="message" rows="5" class="form-control" style="border-radius: 8px;" placeholder="Share your experience or thought..." required>{{ old('message') }}</textarea>
                </div>
                <div class="col-md-12 text-right">
                  <button type="submit" class="button button-hero">Submit Comment</button>
                </div>
              </div>
            </form>
          </div>

        </div>

        <!-- Sidebar -->
        <div class="col-lg-4">
          <div class="p-4 bg-light rounded-lg shadow-sm">
            <aside class="single_sidebar_widget author_widget text-center mb-4 pb-4 border-bottom">
              <img class="author_img rounded-circle mb-3" src="{{ asset('frontend/img/blog/author.png') }}" width="100" alt="Author">
              <h5 class="font-weight-bold m-0">Charlie Barber</h5>
              <small class="text-gold" style="color: var(--primary-gold);">Executive Editor</small>
            </aside>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ================ End Main Article Area ================= -->

@endsection
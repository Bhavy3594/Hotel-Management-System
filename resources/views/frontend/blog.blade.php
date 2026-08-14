@extends('frontend.layouts.main')

@section('title', 'Journal & News — Seaplace Luxury Hotel')

@section('content')

  <!-- ================ Banner Area ================= -->	
  <section class="inner-page-banner" id="blog" style="background: url('{{ asset('frontend/img/home/header-bg.jpg') }}') center center / cover no-repeat;">
    <div class="container h-100">
      <div class="blog-banner">
        <div class="text-center text-white">
          <h1 class="text-white font-weight-bold display-4">Hotel Journal & Stories</h1>
        </div>
      </div>
    </div>
  </section>
  <!-- ================ End Banner Area ================= -->

  <!-- ================ Blog Categories Area ================= -->
  <section class="blog_categorie_area py-5">
    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-lg-4 mb-4">
          <div class="card border-0 overflow-hidden shadow-sm rounded-lg">
            <img class="card-img rounded-0" src="{{ asset('frontend/img/blog/cat-post/cat-post-3.jpg') }}" alt="Social Life">
            <div class="card-img-overlay d-flex align-items-center justify-content-center text-center text-white" style="background: rgba(11,19,43,0.5);">
              <div>
                <a href="{{ url('/blog-single') }}" class="text-white font-weight-bold h4">Luxury Lifestyle</a>
                <p class="m-0 text-white-50">Coastal living & bespoke wellness</p>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-lg-4 mb-4">
          <div class="card border-0 overflow-hidden shadow-sm rounded-lg">
            <img class="card-img rounded-0" src="{{ asset('frontend/img/blog/cat-post/cat-post-2.jpg') }}" alt="Politics">
            <div class="card-img-overlay d-flex align-items-center justify-content-center text-center text-white" style="background: rgba(11,19,43,0.5);">
              <div>
                <a href="{{ url('/blog-single') }}" class="text-white font-weight-bold h4">Fine Dining</a>
                <p class="m-0 text-white-50">Michelin star culinary creations</p>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-lg-4 mb-4">
          <div class="card border-0 overflow-hidden shadow-sm rounded-lg">
            <img class="card-img rounded-0" src="{{ asset('frontend/img/blog/cat-post/cat-post-1.jpg') }}" alt="Food">
            <div class="card-img-overlay d-flex align-items-center justify-content-center text-center text-white" style="background: rgba(11,19,43,0.5);">
              <div>
                <a href="{{ url('/blog-single') }}" class="text-white font-weight-bold h4">Travel & Excursions</a>
                <p class="m-0 text-white-50">Private yacht & ocean safaris</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ================ End Blog Categories Area ================= -->

  <!-- ================ Main Blog Area ================= -->
  <section class="blog_area pb-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <div class="blog_left_sidebar">
            
            <article class="card border-0 shadow-sm mb-4 rounded-lg overflow-hidden">
              <img class="card-img-top" src="{{ asset('frontend/img/blog/main-blog/m-blog-1.jpg') }}" alt="Article 1">
              <div class="card-body p-4">
                <div class="mb-2 text-muted" style="font-size: 13px;">
                  <span class="mr-3"><i class="far fa-user text-gold mr-1" style="color: var(--primary-gold);"></i> Chef Antoine Laurent</span>
                  <span class="mr-3"><i class="far fa-calendar-alt text-gold mr-1" style="color: var(--primary-gold);"></i> August 10, 2026</span>
                  <span><i class="far fa-comments text-gold mr-1" style="color: var(--primary-gold);"></i> 06 Comments</span>
                </div>
                <h3 class="font-weight-bold mb-3"><a href="{{ url('/blog-single') }}" style="color: var(--primary-dark);">The Art of Farm-to-Table Oceanfront Gastronomy</a></h3>
                <p class="text-muted" style="line-height: 1.8;">
                  Discover how our Michelin-starred culinary team pairs freshly harvested coastal ingredients with fine vintage wines to elevate every dining experience.
                </p>
                <a class="button button-hero btn-sm text-white" href="{{ url('/blog-single') }}">Read Full Story</a>
              </div>
            </article>

            <article class="card border-0 shadow-sm mb-4 rounded-lg overflow-hidden">
              <img class="card-img-top" src="{{ asset('frontend/img/blog/main-blog/m-blog-2.jpg') }}" alt="Article 2">
              <div class="card-body p-4">
                <div class="mb-2 text-muted" style="font-size: 13px;">
                  <span class="mr-3"><i class="far fa-user text-gold mr-1" style="color: var(--primary-gold);"></i> Sophia Rossi</span>
                  <span class="mr-3"><i class="far fa-calendar-alt text-gold mr-1" style="color: var(--primary-gold);"></i> July 28, 2026</span>
                  <span><i class="far fa-comments text-gold mr-1" style="color: var(--primary-gold);"></i> 12 Comments</span>
                </div>
                <h3 class="font-weight-bold mb-3"><a href="{{ url('/blog-single') }}" style="color: var(--primary-dark);">Holistic Wellness: Marine Hydrotherapy Spa Retreats</a></h3>
                <p class="text-muted" style="line-height: 1.8;">
                  An insider guide to our signature seawater hydrotherapy, sea-salt scrubs, and private sound bath meditation rituals.
                </p>
                <a class="button button-hero btn-sm text-white" href="{{ url('/blog-single') }}">Read Full Story</a>
              </div>
            </article>

          </div>
        </div>

        <!-- Sidebar Widget -->
        <div class="col-lg-4">
          <div class="p-4 bg-light rounded-lg shadow-sm">
            <aside class="single_sidebar_widget author_widget text-center mb-4 pb-4 border-bottom">
              <img class="author_img rounded-circle mb-3" src="{{ asset('frontend/img/blog/author.png') }}" width="100" alt="Author">
              <h5 class="font-weight-bold m-0">Charlie Barber</h5>
              <small class="text-gold" style="color: var(--primary-gold);">Chief Hospitality Editor</small>
              <p class="text-muted mt-2" style="font-size: 13px;">Sharing insights on luxury living, coastal retreats, and world-class resort experiences.</p>
            </aside>

            <aside class="single_sidebar_widget popular_post_widget">
              <h5 class="font-weight-bold mb-3">Popular Journal Posts</h5>
              <div class="media post_item mb-3">
                <img src="{{ asset('frontend/img/blog/popular-post/post1.jpg') }}" class="mr-3 rounded" width="60" alt="post">
                <div class="media-body">
                  <h6 class="m-0 font-weight-bold"><a href="{{ url('/blog-single') }}" class="text-dark">Sunset Private Yacht Charters</a></h6>
                  <small class="text-muted">2 Hours ago</small>
                </div>
              </div>
              <div class="media post_item">
                <img src="{{ asset('frontend/img/blog/popular-post/post2.jpg') }}" class="mr-3 rounded" width="60" alt="post">
                <div class="media-body">
                  <h6 class="m-0 font-weight-bold"><a href="{{ url('/blog-single') }}" class="text-dark">Designing Penthouse Interiors</a></h6>
                  <small class="text-muted">5 Hours ago</small>
                </div>
              </div>
            </aside>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ================ End Main Blog Area ================= -->

@endsection
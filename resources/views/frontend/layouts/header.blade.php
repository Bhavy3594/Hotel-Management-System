<header class="header_area">
  <!-- Top Header Bar -->
  <div class="header-top">
    <div class="container">
      <div class="d-flex align-items-center justify-content-between">
        <div id="logo">
          <a href="{{ url('/') }}" class="d-flex align-items-center">
            <img src="{{ asset('frontend/img/Logo-gold.png') }}" alt="Seaplace Hotel Logo" title="Seaplace Hotel" height="42" />
          </a>
        </div>
        <div class="d-none d-md-flex align-items-center">
          <div class="media header-top-info mr-4">
            <span class="header-top-info__icon"><i class="fas fa-phone-volume"></i></span>
            <div class="media-body">
              <p class="m-0 text-muted" style="font-size: 11px; text-transform: uppercase; letter-spacing: 1px;">Reservations Line</p>
              <p class="m-0"><a href="tel:+123655233">+12 365 5233</a></p>
            </div>
          </div>
          <div class="media header-top-info">
            <span class="header-top-info__icon"><i class="fas fa-envelope"></i></span>
            <div class="media-body">
              <p class="m-0 text-muted" style="font-size: 11px; text-transform: uppercase; letter-spacing: 1px;">24/7 Concierge Desk</p>
              <p class="m-0"><a href="mailto:info@seaplacehotel.com">info@seaplacehotel.com</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Main Navigation Menu -->
  <div class="main_menu">
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container">
        
        <button class="navbar-toggler" type="button" data-toggle="collapse"
          data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>

        <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
          <ul class="nav navbar-nav menu_nav mr-auto">
            <li class="nav-item {{ request()->is('/') ? 'active' : '' }}">
              <a class="nav-link" href="{{ url('/') }}">Home</a>
            </li>
            <li class="nav-item {{ request()->is('about') ? 'active' : '' }}">
              <a class="nav-link" href="{{ url('/about') }}">About Us</a>
            </li>
            <li class="nav-item {{ request()->is('properties') ? 'active' : '' }}">
              <a class="nav-link" href="{{ url('/properties') }}">Rooms & Suites</a>
            </li>
            <li class="nav-item {{ request()->is('gallery') ? 'active' : '' }}">
              <a class="nav-link" href="{{ url('/gallery') }}">Gallery</a>
            </li>
            <li class="nav-item submenu dropdown {{ request()->is('blog*') ? 'active' : '' }}">
              <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                Journal & News
              </a>
              <ul class="dropdown-menu">
                <li class="nav-item {{ request()->is('blog') ? 'active' : '' }}"><a class="nav-link" href="{{ url('/blog') }}">All Articles</a></li>
                <li class="nav-item {{ request()->is('blog-single') ? 'active' : '' }}"><a class="nav-link" href="{{ url('/blog-single') }}">Featured Story</a></li>
              </ul>
            </li>
            <li class="nav-item {{ request()->is('contact') ? 'active' : '' }}">
              <a class="nav-link" href="{{ url('/contact') }}">Contact Us</a>
            </li>
          </ul>

          <ul class="social-icons d-none d-lg-flex align-items-center mb-0">
            <li><a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a></li>
            <li><a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a></li>
            <li><a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a></li>
            <li><a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a></li>
          </ul>
        </div>
      </div>
    </nav>
  </div>
</header>
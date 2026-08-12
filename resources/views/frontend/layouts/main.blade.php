<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>@yield('title', 'Seaplace Luxury Hotel & Resort')</title>
  
  <link rel="icon" href="{{ asset('frontend/img/favicon.png') }}" type="image/png">
  
  <!-- Vendor Stylesheets -->
  <link rel="stylesheet" href="{{ asset('frontend/vendors/bootstrap/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('frontend/vendors/fontawesome/css/all.min.css') }}">
  <link rel="stylesheet" href="{{ asset('frontend/vendors/themify-icons/themify-icons.css') }}">
  <link rel="stylesheet" href="{{ asset('frontend/vendors/linericon/style.css') }}">
  <link rel="stylesheet" href="{{ asset('frontend/vendors/magnefic-popup/magnific-popup.css') }}">
  <link rel="stylesheet" href="{{ asset('frontend/vendors/owl-carousel/owl.theme.default.min.css') }}">
  <link rel="stylesheet" href="{{ asset('frontend/vendors/owl-carousel/owl.carousel.min.css') }}">
  <link rel="stylesheet" href="{{ asset('frontend/vendors/nice-select/nice-select.css') }}">
  
  <!-- Main & Luxury Custom Styles -->
  <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('frontend/css/custom-luxury.css') }}">
  
  @stack('styles')
</head>
<body>

  <!-- ================= Header Area ================= -->
  @include('frontend.layouts.header')
  <!-- ================= Header Area End ================= -->

  <!-- ================= Main Body Content ================= -->
  <main class="site-main">
    @yield('content')
  </main>
  <!-- ================= Main Body Content End ================= -->

  <!-- ================= Footer Area ================= -->
  @include('frontend.layouts.footer')
  <!-- ================= Footer Area End ================= -->

  <!-- Vendor Scripts -->
  <script src="{{ asset('frontend/vendors/jquery/jquery-3.2.1.min.js') }}"></script>
  <script src="{{ asset('frontend/vendors/bootstrap/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('frontend/vendors/magnefic-popup/jquery.magnific-popup.min.js') }}"></script>
  <script src="{{ asset('frontend/vendors/owl-carousel/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('frontend/vendors/easing.min.js') }}"></script>
  <script src="{{ asset('frontend/vendors/superfish.min.js') }}"></script>
  <script src="{{ asset('frontend/vendors/nice-select/jquery.nice-select.min.js') }}"></script>
  <script src="{{ asset('frontend/vendors/jquery.ajaxchimp.min.js') }}"></script>
  <script src="{{ asset('frontend/vendors/mail-script.js') }}"></script>
  <script src="{{ asset('frontend/js/main.js') }}"></script>
  
  @stack('scripts')
</body>
</html>
<footer class="footer-area section-gap">
  <div class="container">
    <div class="row">
      <div class="col-xl-3 col-sm-6 mb-4 mb-xl-0 single-footer-widget">
        <h4>About Seaplace</h4>
        <p style="font-size: 14px; line-height: 1.8; color: rgba(255,255,255,0.7);">
          Experience the pinnacle of luxury, oceanfront serenity, and bespoke hospitality at Seaplace Hotel & Suites.
        </p>
      </div>

      <div class="col-xl-3 col-sm-6 mb-4 mb-xl-0 single-footer-widget">
        <h4>Navigation</h4>
        <ul>
          <li><a href="{{ url('/') }}">Home</a></li>
          <li><a href="{{ url('/about') }}">About Us</a></li>
          <li><a href="{{ url('/properties') }}">Rooms & Suites</a></li>
          <li><a href="{{ url('/gallery') }}">Gallery</a></li>
          <li><a href="{{ url('/contact') }}">Contact Us</a></li>
        </ul>
      </div>

      <div class="col-xl-3 col-sm-6 mb-4 mb-xl-0 single-footer-widget">
        <h4>Amenities</h4>
        <ul>
          <li><a href="#">Oceanfront Infinity Pool</a></li>
          <li><a href="#">Signature Wellness Spa</a></li>
          <li><a href="#">Michelin Star Fine Dining</a></li>
          <li><a href="#">Private Beach Access</a></li>
          <li><a href="#">24/7 Butler Service</a></li>
        </ul>
      </div>

      <div class="col-xl-3 col-md-6 mb-4 mb-xl-0 single-footer-widget">
        <h4>Newsletter</h4>
        <p style="font-size: 14px; color: rgba(255,255,255,0.7);">Subscribe for exclusive seasonal offers and VIP privileges.</p>
        
        <div class="form-wrap" id="mc_embed_signup">
          @if(session('success'))
            <div class="alert alert-success mt-2 mb-2 p-2" style="font-size: 12px;">
              {{ session('success') }}
            </div>
          @endif
          @if($errors->has('email'))
            <div class="alert alert-danger mt-2 mb-2 p-2" style="font-size: 12px;">
              {{ $errors->first('email') }}
            </div>
          @endif

          <form action="{{ route('newsletter.submit') }}" method="POST" class="form-inline mt-3">
            @csrf
            <div class="input-group w-100">
              <input class="form-control" name="email" placeholder="Enter your email" required type="email" style="height: 44px; border-radius: 8px 0 0 8px; font-size: 13px;">
              <div class="input-group-append">
                <button type="submit" class="btn btn-default text-uppercase" style="background: var(--primary-gold); color: #fff; font-weight: 600; border-radius: 0 8px 8px 0; padding: 0 16px; font-size: 13px;">Join</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>

    <div class="footer-bottom row align-items-center text-center text-lg-left mt-5">
      <p class="footer-text m-0 col-lg-8 col-md-12" style="font-size: 13px;">
        Copyright &copy;<script>document.write(new Date().getFullYear());</script> Seaplace Luxury Hotel & Resort. All rights reserved.
      </p>
      <div class="col-lg-4 col-md-12 text-center text-lg-right footer-social mt-3 mt-lg-0">
        <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
        <a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
        <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
        <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
      </div>
    </div>
  </div>
</footer>
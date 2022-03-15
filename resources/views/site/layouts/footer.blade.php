

<footer>
  <div class="container">
    <div class="footer-content">
      <div class="row">
        <div class="col-lg-4 col-md-6">
          <div class="footer-box">
            <div class="text">  <a  class="footer-logo" href="{{ url('/') }}">
             <img class="img-fluid mb-4" data-src="{{asset(settings()->logo)}}" alt=""></a>
              <p class="text-justify">{{ strip_tags( settings()->description ) }}</p>
            </div>
            <div class="social-links">
              <div class="links"><a class="bi bi-facebook" href="{{settings()->facebook}}"></a><a class="bi bi-twitter" href="{{settings()->twitter}}"></a><a class="bi bi-instagram" href="{{settings()->instagram}}"></a><a class="bi bi-linkedin" href="{{settings()->linkedin}}"></a></div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="footer-box">
            <h3>روابط الموقع</h3>

               <ul class="map-links">
              <li><a href="{{ url('/') }}">الرئيسية</a></li>
              <li><a href="{{ url('/about') }}"> من نحن  </a></li>
              <li><a href="{{ url('/pre-order') }}"> طلب خدمة </a></li>
              <li><a href="{{ url('/contact') }}"> تواصل معنا  </a></li>


            </ul>
            </li>
          </div>
        </div>
        <div class="col-lg-4 col-md-12">
          <div class="footer-box">
            <h3>خدماتنا</h3>

              <ul class="map-links">
              @if(getServices())

                 @foreach (getServices() as $service)
                     <li><a  href="{{ route('service-details',$service->id)}}">{{ $service->name }}</a></li>

                 @endforeach

              @endif
              </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="copyright">
      <div class="copy-text">
        <p>{{  settings()->copyright; }}</a></p>
      </div>
    </div>
  </div>
</footer>
<!--footer part-->

<!--scripts-->
<script src="{{ asset('site')}}/js/jquery-3.6.0.min.js"></script>
<script src="{{ asset('site')}}/js/jquery.lazy.min.js"></script>

<script src="{{ asset('site')}}/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('site')}}/js/owl.carousel.min.js"></script>
<script src="{{ asset('site')}}/js/jquery.fancybox.min.js"></script>
<script src="{{ asset('site')}}/js/jquery.waypoints.min.js"></script>
<script src="{{ asset('site')}}/js/jquery.counterup.min.js"></script>
<script src="{{ asset('site')}}/js/wow.min.js"></script>
<script src="{{ asset('site')}}/js/script.js"></script>
@stack('js')
</body>
</html>

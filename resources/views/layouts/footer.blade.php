<footer class="ftco-footer ftco-section">
    <div class="container">
      <div class="row mb-5">
        <div class="col-md">
          <div class="ftco-footer-widget mb-4">
            <h2 class="ftco-heading-2">@lang('footer.media')</h2>
            <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate">
                  <a href="https://www.linkedin.com/in/azizbek-jo-rayev-266370274/" target="_blank"><span class="icon-linkedin"></span></a>
                </li>
                <li class="ftco-animate">
                  <a href="https://t.me/humblebek" target="_blank"><span class="icon-telegram"></span></a>
                </li>
                <li class="ftco-animate">
                  <a href="https://www.instagram.com/az1zbek_juraev/" target="_blank"><span class="icon-instagram"></span></a>
                </li>
                <li class="ftco-animate">
                  <a href="https://github.com/humblebek" target="_blank"><span class="icon-github"></span></a>
                </li>
              </ul>

          </div>
        </div>
        <div class="col-md">
          <div class="ftco-footer-widget mb-4 ml-md-4">
            <h2 class="ftco-heading-2">@lang('footer.link')</h2>
            <ul class="list-unstyled">
              <li><a href="#home-section"><span class="icon-long-arrow-right mr-2"></span>@lang('navbar.home')</a></li>
              <li><a href="#about-section"><span class="icon-long-arrow-right mr-2"></span>@lang('navbar.about')</a></li>
              <li><a href="#services-section"><span class="icon-long-arrow-right mr-2"></span>@lang('navbar.services')</a></li>
              <li><a href="#projects-section"><span class="icon-long-arrow-right mr-2"></span>@lang('navbar.projects')</a></li>
              <li><a href="#contact-section"><span class="icon-long-arrow-right mr-2"></span>@lang('navbar.contact')</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md">
           <div class="ftco-footer-widget mb-4">
            <h2 class="ftco-heading-2">@lang('footer.service')</h2>
            @foreach ($service  as $servic )
            <ul class="list-unstyled">
              <li><a href="#services-section"><span class="icon-long-arrow-right mr-2" style="font-weight:bold;">{{ $servic ['name_'.\App::getLocale()]}}</span></a></li>
              {{-- <li><a href="#services-section"><span class="icon-long-arrow-right mr-2"></span>Web Development</a></li>
              <li><a href="#services-section"><span class="icon-long-arrow-right mr-2"></span>Business Strategy</a></li>
              <li><a href="#services-section"><span class="icon-long-arrow-right mr-2"></span>Data Analysis</a></li>
              <li><a href="#services-section"><span class="icon-long-arrow-right mr-2"></span>Graphic Design</a></li> --}}
            </ul>
            @endforeach
          </div>
        </div>
        <div class="col-md">
          <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">@lang('footer.question')?</h2>
              <div class="block-23 mb-3">
                @foreach ( $about as $item)
                <ul>
                  <li><span class="icon icon-map-marker"></span><span class="text">{{ $item['adress_'.\App::getLocale()] }}</span></li>
                  <li><a href="#"><span class="icon icon-phone"></span><span class="text">{{ $item->phone }}</span></a></li>
                  <li><a href="#"><span class="icon icon-envelope"></span><span class="text">{{ $item->email }}</span></a></li>
                </ul>
                @endforeach
              </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 text-center">

          <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
        </div>
      </div>
    </div>
  </footer>



<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


<script src="js/jquery.min.js"></script>
<script src="js/jquery-migrate-3.0.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/aos.js"></script>
<script src="js/jquery.animateNumber.min.js"></script>
<script src="js/scrollax.min.js"></script>

<script src="js/main.js"></script>

</body>
</html>

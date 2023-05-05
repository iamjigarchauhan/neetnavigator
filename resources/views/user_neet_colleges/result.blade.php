<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>{{ (isset($pageTitle) ? __($pageTitle) : env('APP_NAME')) }}</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="{{ asset('assets/home/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/home/css/fontawesome-all.css') }}">
<link rel="stylesheet" href="{{ asset('assets/home/css/flaticon.css') }}">
<link rel="stylesheet" href="{{ asset('assets/home/css/animate.css') }}">
<link rel="stylesheet" href="{{ asset('assets/home/css/jquery.fancybox.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/home/css/jquery.mCustomScrollbar.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/home/css/odometer-theme-default.css') }}">
<link rel="stylesheet" href="{{ asset('assets/home/css/owl.carousel.css') }}">
<link rel="stylesheet" href="{{ asset('assets/home/css/nice-select.css') }}">
<link rel="stylesheet" href="{{ asset('assets/home/css/style.css') }}">
<style>
  .header-style-two .yl-main-navigation .dropdown:after {
    content: '';
  }
</style>
</head>
<body class="yl-home">
<!-- preloader - start -->
<div id="yl-preloader"></div>
<div class="up">
<a href="#" class="scrollup text-center"><i class="fas fa-chevron-up"></i></a>
</div>
<!-- Start of header section
    ============================================= -->
    <header id="yl-header" class="yl-header-main header-style-two">
      <div class="container">
          <div class="yl-header-content clearfix">
            <div class="yl-brand-logo float-left"><a href="#"><img src="assets/img/logo/logo3.png" alt=""></a> 
            </div>
            <div class="yl-main-nav-wrap">
                <nav class="yl-main-navigation float-left ul-li">
                  <ul id="main-nav" class="navbar-nav text-capitalize clearfix">
                    <li class="dropdown">
                      <a href="{{ route('home')}}">Home</a>
                    </li>
                    <li class="dropdown">
                      <a href="{{ route('overview')}}">Overview</a>
                    </li>
                    <li class="dropdown">
                      <a href="{{ route('services')}}">Services</a>
                    </li>
                    <li class="dropdown">
                      <a href="{{ route('register-user')}}">Student Account</a>
                    </li>
                    <li class="dropdown">
                      <a href="{{ route('contact')}}">Contact</a>
                    </li>
                  </ul>
                </nav>
                {{-- <div class="yl-mobile-menu-wrap">
                  <div class="yl-mobile_menu position-relative">
                      <div class="yl-mobile_menu_button yl-open_mobile_menu">
                        <i class="fas fa-bars"></i>
                      </div>
                      <div class="yl-mobile_menu_wrap">
                        <div class="mobile_menu_overlay yl-open_mobile_menu"></div>
                        <div class="yl-mobile_menu_content">
                            <div class="yl-mobile_menu_close yl-open_mobile_menu">
                              <i class="fas fa-times"></i>
                            </div>
                            <div class="m-brand-logo text-center">
                              <a href="#"><img src="assets/img/logo/logo4.png" alt=""></a>
                            </div>
                            <nav class="yl-mobile-main-navigation  clearfix ul-li">
                              <ul id="m-main-nav" class="navbar-nav text-capitalize clearfix">
                                  <li class="dropdown">
                                    <a href="#">Home</a>
                                    <ul class="dropdown-menu clearfix">
                                        <li><a target="_blank" href="index.html">Home Page 1</a></li>
                                        <li><a target="_blank" href="index-2.html">Home Page 2</a></li>
                                        <li><a target="_blank" href="index-3.html">Home Page 3</a></li>
                                        <li><a target="_blank" href="index-4.html">Home Page 4</a></li>
                                    </ul>
                                  </li>
                                  <li><a href="about.html">About</a></li>
                                  <li class="dropdown">
                                    <a href="#">Course</a>
                                    <ul class="dropdown-menu clearfix">
                                        <li><a target="_blank" href="course.html">Course</a></li>
                                        <li><a target="_blank" href="course-details.html">Course Details</a></li>
                                    </ul>
                                  </li>
                                  <li class="dropdown">
                                    <a href="#">Pages</a>
                                    <ul class="dropdown-menu clearfix">
                                        <li><a target="_blank" href="gallery.html">Gallery</a></li>
                                        <li><a target="_blank" href="contact.html">Contact</a></li>
                                        <li><a target="_blank" href="event.html">Event</a></li>
                                        <li><a target="_blank" href="event-details.html">Event Details</a></li>
                                        <li><a target="_blank" href="faq.html">Faq</a></li>
                                        <li><a target="_blank" href="404.html">404</a></li>
                                    </ul>
                                  </li>
                                  <li class="dropdown">
                                    <a href="#">Blog</a>
                                    <ul class="dropdown-menu clearfix">
                                        <li><a target="_blank" href="blog-1.html">Blog 1</a></li>
                                        <li><a target="_blank" href="blog-2.html">Blog 2</a></li>
                                        <li><a target="_blank" href="blog-details-1.html">Blog Details 1</a></li>
                                        <li><a target="_blank" href="blog-details-2.html">Blog Details 2</a></li>
                                    </ul>
                                  </li>
                                  <li class="dropdown">
                                    <a href="#">Instructor</a>
                                    <ul class="dropdown-menu clearfix">
                                        <li><a target="_blank" href="instructor.html">Instructor</a></li>
                                        <li><a target="_blank" href="instructor-details.html">Instructor Details</a></li>
                                    </ul>
                                  </li>
                              </ul>
                            </nav>
                        </div>
                      </div>
                  </div>
                  <!-- /Mobile-Menu -->
                </div> --}}
            </div>
            {{-- <div class="yl-header-cart-login float-right">
                <div class="yl-top-cart-login">
                  <button><i class="fas fa-shopping-cart"></i></button>
                </div>
                <div class="yl-top-cart-login">
                  <button data-toggle="modal" data-target="#exampleModal"><i class="fas fa-user"></i></button>
                </div>
            </div> --}}
          </div>
      </div>
    </header>
    <section id="yl-category" class="yl-category-section">
    <div class="card">
        <!--begin::Card body-->
        <div class="card-body pt-6">
            <div class="final-section">
                <!--begin::Step 3-->
                <div class="flex-column">
                    <!--begin::estimated colleges-->
                    @include('user_neet_colleges._estimated_college_list', array('class' => 'mb-5 mb-xl-10', 'dataTable' => $dataTable))
                    <!--end::estimated colleges-->
                </div>
                <!--end::Step 3-->
            </div>
        </div>
        <!--end::Card body-->
    </div>
    </section>
<footer id="yl-footer" class="yl-footer-section-2" data-background="assets/img/f-bg.jpg">
    <div class="container">
        <div class="yl-footer-content-wrap">
          <div class="row">
              <div class="col-lg-3 col-md-6">
                <div class="yl-footer-widget">
                    <div class="yl-footer-logo-widget yl-headline pera-content">
                      <div class="yl-footer-logo">
                          <a href="#"><img src="assets/img/logo/logo4.png" alt=""></a>
                      </div>
                      <p>We work with a passion of taking challenges and creating new ones in advertising sector.</p>
                      <a class="footer-logo-btn text-center text-uppercase" href="#">About us</a>
                    </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-6">
                <div class="yl-footer-widget">
                    <div class="yl-footer-newslatter-widget pera-content">
                      <h3 class="widget-title">Newsletter</h3>
                      <p>Subscribe our newsletter to get our
                          latest update & news
                      </p>
                      <form action="#">
                          <input type="email" placeholder="Your mail address">
                          <button type="submit"><i class="far fa-paper-plane"></i></button>
                      </form>
                      <div class="yl-footer-social ul-li">
                          <ul>
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-behance"></i></a></li>
                            <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                          </ul>
                      </div>
                    </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-6">
                <div class="yl-footer-widget">
                    <div class="yl-footer-info-widget ul-li">
                      <h3 class="widget-title">Official info:</h3>
                      <ul>
                          <li>
                            <i class="fas fa-map-marker-alt"></i> 
                            <a href="#">30 Commercial Road
                            Fratton, Australia</a>
                          </li>
                          <li>
                            <i class="fas fa-phone"></i><a href="#">1-888-452-1505</a>
                          </li>
                      </ul>
                      <div class="office-open-hour">
                          <span>Open Hours: </span>
                          <p>Mon - Sat: 8 am - 5 pm,
                            Sunday: CLOSED
                          </p>
                      </div>
                    </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-6">
                <div class="yl-footer-widget">
                    <div class="yl-footer-instagram-widget">
                      <h3 class="widget-title">Instagram</h3>
                      <div class="insta-feed ul-li clearfix">
                          <ul>
                            <li><a href="!#"><img src="assets/img/instagram/ins1.jpg" alt=""><i class="fab fa-instagram"></i></a></li>
                            <li><a href="!#"><img src="assets/img/instagram/ins2.jpg" alt=""><i class="fab fa-instagram"></i></a></li>
                            <li><a href="!#"><img src="assets/img/instagram/ins3.jpg" alt=""><i class="fab fa-instagram"></i></a></li>
                            <li><a href="!#"><img src="assets/img/instagram/ins4.jpg" alt=""><i class="fab fa-instagram"></i></a></li>
                            <li><a href="!#"><img src="assets/img/instagram/ins5.jpg" alt=""><i class="fab fa-instagram"></i></a></li>
                            <li><a href="!#"><img src="assets/img/instagram/ins6.jpg" alt=""><i class="fab fa-instagram"></i></a></li>
                          </ul>
                      </div>
                    </div>
                </div>
              </div>
          </div>
        </div>
        <div class="yl-footer-copyright text-center"><span>© 2020 Yale - Education. All rights reserved.</span></div>
    </div>
  </footer>
<!-- End of Footer section
  ============================================= -->
  <script src="{{ asset('assets/home/js/jquery.js') }}"></script>
  <script src="{{ asset('assets/home/js/popper.min.js') }}"></script>
  <script src="{{ asset('assets/home/js/appear.js') }}"></script>
  <script src="{{ asset('assets/home/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('assets/home/js/wow.min.js') }}"></script>
  <script src="{{ asset('assets/home/js/jquery.fancybox.js') }}"></script>
  <script src="{{ asset('assets/home/js/owl.js') }}"></script>
  <script src="{{ asset('assets/home/js/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('assets/home/js/imagesloaded.pkgd.min.js') }}"></script>
  <script src="{{ asset('assets/home/js/masonry.pkgd.min.js') }}"></script>
  <script src="{{ asset('assets/home/js/odometer.js') }}"></script>
  <script src="{{ asset('assets/home/js/custom.js') }}"></script>
</body>
</html>
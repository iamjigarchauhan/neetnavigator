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
<link rel="stylesheet" href="{{ asset('assets/home/css/style.css') }}">
</head>
<body class="yl-home">
<!-- preloader - start -->
<div id="yl-preloader"></div>
<div class="up">
<a href="#" class="scrollup text-center"><i class="fas fa-chevron-up"></i></a>
</div>
<!-- Start of header section
    ============================================= -->
    <header id="yl-header" class="yl-header-main header-style-three">
      <div class="yl-header-three clearfix">
          <div class="container">
            <div class="yl-brand-logo float-left">
                <a href="{{ route('home')}}"><img src="{{asset('assets/img/logo.png')}}" alt=""></a>
            </div>
            {{-- <div class="yl-header-cart-login float-right">
                <div class="yl-top-cart-login">
                  <button><i class="fas fa-shopping-cart"></i></button>
                </div>
                <div class="yl-top-cart-login">
                    <button data-toggle="modal" data-target="#exampleModal"><i class="fas fa-user"></i></button>
                </div>
            </div> --}}
            <div class="yl-main-nav-wrap  float-right">
                <nav class="yl-main-navigation ul-li">
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
                      {{-- <li><a href="about.html">About</a></li>
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
                      </li> --}}
                  </ul>
                </nav>
            </div>
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
      </div>
    </header>
<!-- End of header section
    ============================================= -->

<!-- Start of slider section
    ============================================= -->   
    <section id="yl-slider-2" class="yl-slider-section-2">
      <div id="yl-main-slider-2" class="yl-main-slider-wrap owl-carousel">
          <div class="slider-main-item-2 position-relative">
            <div class="slider-main-img img-zooming" data-background="assets/img/banner/bn-bg2.jpg"></div>
            <div class="slider-overlay"></div>
            <div class="container">
                <div class="slider-main-text yl-headline text-center pera-content">
                  <span>Build Your Career with Yale</span>
                  <h1>
                      Learning From Home with our expert instructors
                  </h1>
                  <a href="#">Browse Course</a>
                </div>
            </div>
          </div>
          <div class="slider-main-item-2 position-relative">
            <div class="slider-main-img img-zooming" data-background="assets/img/d2.jpg"></div>
            <div class="slider-overlay"></div>
            <div class="container">
                <div class="slider-main-text yl-headline text-center pera-content">
                  <span>Build Your Career with Yale</span>
                  <h1>
                      Learning From Home with our expert instructors
                  </h1>
                  <a href="#">Browse Course</a>
                </div>
            </div>
          </div>
          <div class="slider-main-item-2 position-relative">
            <div class="slider-main-img img-zooming" data-background="assets/img/banner/bn-bg2.jpg"></div>
            <div class="slider-overlay"></div>
            <div class="container">
                <div class="slider-main-text yl-headline text-center pera-content">
                  <span>Build Your Career with Yale</span>
                  <h1>
                      Learning From Home with our expert instructors
                  </h1>
                  <a href="#">Browse Course</a>
                </div>
            </div>
          </div>
      </div>
    </section>
<!-- End of slider section
    ============================================= -->

<!-- Start of category section
    ============================================= --> 
    <section id="yl-category-2" class="yl-category-section-2">
      <div class="container">
          <div class="yl-section-title text-center yl-headline yl-title-style-two position-relative">
            <p class="title-watermark">Categories</p>
            <span>Top Categories</span>
            <h2>Browse By Category.
            </h2>
          </div>
          <div class="yl-category-content-2">
            <div class="row">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                  <div class="yl-category-innerbox-2 text-center">
                      <div class="yl-category-icon">
                        <i class="flaticon-atom"></i>
                      </div>
                      <div class="yl-category-text yl-headline">
                        <h3><a href="#">Computer Science</a></h3>
                      </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="100ms" data-wow-duration="1500ms">
                  <div class="yl-category-innerbox-2 text-center">
                      <div class="yl-category-icon">
                        <i class="flaticon-design"></i>
                      </div>
                      <div class="yl-category-text yl-headline">
                        <h3><a href="#">UI/UX Design</a></h3>
                      </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                  <div class="yl-category-innerbox-2 text-center">
                      <div class="yl-category-icon">
                        <i class="flaticon-global-network"></i>
                      </div>
                      <div class="yl-category-text yl-headline">
                        <h3><a href="#">Language Learning</a></h3>
                      </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                  <div class="yl-category-innerbox-2 text-center">
                      <div class="yl-category-icon">
                        <i class="flaticon-smile"></i>
                      </div>
                      <div class="yl-category-text yl-headline">
                        <h3><a href="#">Creative Idea</a></h3>
                      </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                  <div class="yl-category-innerbox-2 text-center">
                      <div class="yl-category-icon">
                        <i class="flaticon-business-presentation"></i>
                      </div>
                      <div class="yl-category-text yl-headline">
                        <h3><a href="#">Presentation Chart</a></h3>
                      </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="500ms" data-wow-duration="1500ms">
                  <div class="yl-category-innerbox-2 text-center">
                      <div class="yl-category-icon">
                        <i class="flaticon-briefcase"></i>
                      </div>
                      <div class="yl-category-text yl-headline">
                        <h3><a href="#">Business Learning</a></h3>
                      </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                  <div class="yl-category-innerbox-2 text-center">
                      <div class="yl-category-icon">
                        <i class="flaticon-graduation-cap"></i>
                      </div>
                      <div class="yl-category-text yl-headline">
                        <h3><a href="#">Graduate Courese</a></h3>
                      </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="700ms" data-wow-duration="1500ms">
                  <div class="yl-category-innerbox-2 text-center">
                      <div class="yl-category-icon">
                        <i class="flaticon-presentation"></i>
                      </div>
                      <div class="yl-category-text yl-headline">
                        <h3><a href="#">Freelancing</a></h3>
                      </div>
                  </div>
                </div>
            </div>
          </div>
      </div>
    </section>      
<!-- End of category section
    ============================================= -->

<!-- Start of course  section
    ============================================= -->        
    <section id="yl-course-3" class="yl-course-section-3">
      <div class="container">
          <div class="yl-section-title text-center yl-headline yl-title-style-two position-relative">
            <p class="title-watermark">Courses</p>
            <span>Courses</span>
            <h2>Featured Courses.
            </h2>
          </div>
          <div class="yl-course-content-3">
            <div class="row">
                <div class="col-lg-4 col-md-6 wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                  <div class="yl-popular-course-img-text">
                      <div class="yl-popular-course-img text-center">
                        <img src="assets/img/course/cpc1.jpg" alt="">
                      </div>
                      <div class="yl-popular-course-text">
                        <div class="popular-course-fee clearfix">
                            <span>Course Fee:  </span>
                            <div class="course-fee-amount">
                              <del>$59</del>
                              <strong>$39</strong>
                            </div>
                        </div>
                        <div class="popular-course-title yl-headline">
                            <h3><a href="#">User Experience Research
                            &amp; Design</a></h3>
                            <div class="yl-course-meta">
                              <a href="#"><i class="fas fa-file"></i>14 Lessons</a>
                              <a href="#"><i class="fas fa-user"></i> 20 Students</a>
                            </div>
                        </div>
                        <div class="popular-course-rate clearfix ul-li">
                            <div class="p-rate-vote float-left">
                              <ul>
                                  <li><i class="fas fa-star"></i></li>
                                  <li><i class="fas fa-star"></i></li>
                                  <li><i class="fas fa-star"></i></li>
                                  <li><i class="fas fa-star"></i></li>
                                  <li><i class="fas fa-star"></i></li>
                              </ul>
                              <span>(12 Votes)</span>
                            </div>
                            <div class="p-course-btn float-right">
                              <a href="#"><i class="fas fa-chevron-right"></i></a>
                            </div>
                        </div>
                      </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                  <div class="yl-popular-course-img-text">
                      <div class="yl-popular-course-img text-center">
                        <img src="assets/img/course/cpc2.jpg" alt="">
                      </div>
                      <div class="yl-popular-course-text">
                        <div class="popular-course-fee clearfix">
                            <span>Course Fee:  </span>
                            <div class="course-fee-amount">
                              <del>$59</del>
                              <strong>$39</strong>
                            </div>
                        </div>
                        <div class="popular-course-title yl-headline">
                            <h3><a href="#">Copyright  Law in Music System
                              Course
                            </a> </h3>
                            <div class="yl-course-meta">
                              <a href="#"><i class="fas fa-file"></i>14 Lessons</a>
                              <a href="#"><i class="fas fa-user"></i> 20 Students</a>
                            </div>
                        </div>
                        <div class="popular-course-rate clearfix ul-li">
                            <div class="p-rate-vote float-left">
                              <ul>
                                  <li><i class="fas fa-star"></i></li>
                                  <li><i class="fas fa-star"></i></li>
                                  <li><i class="fas fa-star"></i></li>
                                  <li><i class="fas fa-star"></i></li>
                                  <li><i class="fas fa-star"></i></li>
                              </ul>
                              <span>(12 Votes)</span>
                            </div>
                            <div class="p-course-btn float-right">
                              <a href="#"><i class="fas fa-chevron-right"></i></a>
                            </div>
                        </div>
                      </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                  <div class="yl-popular-course-img-text">
                      <div class="yl-popular-course-img text-center">
                        <img src="assets/img/course/cpc3.jpg" alt="">
                      </div>
                      <div class="yl-popular-course-text">
                        <div class="popular-course-fee clearfix">
                            <span>Course Fee:  </span>
                            <div class="course-fee-amount">
                              <del>$59</del>
                              <strong>$39</strong>
                            </div>
                        </div>
                        <div class="popular-course-title yl-headline">
                            <h3><a href="#">Master of Public Mental Health
                            Course</a></h3>
                            <div class="yl-course-meta">
                              <a href="#"><i class="fas fa-file"></i>14 Lessons</a>
                              <a href="#"><i class="fas fa-user"></i> 20 Students</a>
                            </div>
                        </div>
                        <div class="popular-course-rate clearfix ul-li">
                            <div class="p-rate-vote float-left">
                              <ul>
                                  <li><i class="fas fa-star"></i></li>
                                  <li><i class="fas fa-star"></i></li>
                                  <li><i class="fas fa-star"></i></li>
                                  <li><i class="fas fa-star"></i></li>
                                  <li><i class="fas fa-star"></i></li>
                              </ul>
                              <span>(12 Votes)</span>
                            </div>
                            <div class="p-course-btn float-right">
                              <a href="#"><i class="fas fa-chevron-right"></i></a>
                            </div>
                        </div>
                      </div>
                  </div>
                </div>
            </div>
          </div>
      </div>
    </section>
<!-- End of course  section
    ============================================= -->

<!-- Start of course  search section
    ============================================= -->
    <section id="yl-course-search-3" class="yl-course-search-section-3">
      <div class="container">
          <div class="yl-section-title text-center yl-headline yl-title-style-two position-relative">
            <p class="title-watermark">Browse</p>
            <span>Extend Your Skill</span>
            <h2>Search Yale Courses.
            </h2>
          </div>
          <div class="search-course-content">
            <div class="search-form-wrap position-relative">
                <form action="#">
                  <input type="text" placeholder="Search what do you want to learn?">
                  <button type="submit">Search</button>
                </form>
            </div>
            <div class="yl-fun-fact-wrapper">
                <div class="row">
                  <div class="col-lg-3 col-sm-6">
                      <div class="yl-fun-fact-inner">
                        <div class="yl-fun-fact-icon position-relative float-left">
                            <i class="flaticon-file"></i>
                        </div>
                        <div class="yl-fun-fact-text yl-headline pera-content">
                            <span class="odometer" data-count="12000">00 </span><strong>+</strong>
                            <p>Live Lectures</p>
                        </div>
                      </div>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                      <div class="yl-fun-fact-inner">
                        <div class="yl-fun-fact-icon position-relative float-left">
                            <i class="flaticon-graduation-cap"></i>
                        </div>
                        <div class="yl-fun-fact-text yl-headline pera-content">
                            <span class="odometer" data-count="5">00 </span><strong>k+</strong>
                            <p>Total Graduate</p>
                        </div>
                      </div>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                      <div class="yl-fun-fact-inner">
                        <div class="yl-fun-fact-icon position-relative float-left">
                            <i class="fas fa-users"></i>
                        </div>
                        <div class="yl-fun-fact-text yl-headline pera-content">
                            <span class="odometer" data-count="15">00 </span><strong>k+</strong>
                            <p>Active Students</p>
                        </div>
                      </div>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                      <div class="yl-fun-fact-inner">
                        <div class="yl-fun-fact-icon position-relative float-left">
                            <i class="flaticon-like"></i>
                        </div>
                        <div class="yl-fun-fact-text yl-headline pera-content">
                            <span class="odometer" data-count="10000">00 </span><strong>k+</strong>
                            <p>Total Thumbs</p>
                        </div>
                      </div>
                  </div>
                </div>
            </div>
          </div>
      </div>
    </section>        
<!-- End of course search section
    ============================================= -->

<!-- Start of course  search section
    ============================================= -->
    <section id="yl-instructor" class="yl-instructor-section-wrap">
      <div class="container">
          <div class="yl-section-title text-left yl-headline  position-relative">
            <span>Instructors</span>
            <h2>Expert Instructors
            </h2>
          </div>
          <div class="yl-instructor-slide-wrap">
            <div id="yl-instructor-slider" class="yl-instructor-slide-area owl-carousel">
                <div class="yl-instructor-img-text text-center position-relative wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                  <div class="yl-instructor-img position-relative">
                      <img src="assets/img/teacher/inst-1.jpg" alt="">
                  </div>
                  <div class="yl-instructor-text yl-headline position-relative">
                      <h3><a href="#">James Olsen</a></h3>
                      <span class="yl-ins-degi">Web Developer</span>
                      <span class="yl-ins-course-no">60 Course</span>
                  </div>
                </div>
                <div class="yl-instructor-img-text text-center position-relative wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                  <div class="yl-instructor-img position-relative">
                      <img src="assets/img/teacher/inst-2.jpg" alt="">
                  </div>
                  <div class="yl-instructor-text yl-headline position-relative">
                      <h3><a href="#">Ivy Landon</a></h3>
                      <span class="yl-ins-degi">Web Developer</span>
                      <span class="yl-ins-course-no">60 Course</span>
                  </div>
                </div>
                <div class="yl-instructor-img-text text-center position-relative wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                  <div class="yl-instructor-img position-relative">
                      <img src="assets/img/teacher/inst-3.jpg" alt="">
                  </div>
                  <div class="yl-instructor-text yl-headline position-relative">
                      <h3><a href="#">Tom Anderson</a></h3>
                      <span class="yl-ins-degi">Web Developer</span>
                      <span class="yl-ins-course-no">60 Course</span>
                  </div>
                </div>
                <div class="yl-instructor-img-text text-center position-relative wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                  <div class="yl-instructor-img position-relative">
                      <img src="assets/img/teacher/inst-4.jpg" alt="">
                  </div>
                  <div class="yl-instructor-text yl-headline position-relative">
                      <h3><a href="#">Rebeca Lanham</a></h3>
                      <span class="yl-ins-degi">Web Developer</span>
                      <span class="yl-ins-course-no">60 Course</span>
                  </div>
                </div>
                <div class="yl-instructor-img-text text-center position-relative">
                  <div class="yl-instructor-img position-relative">
                      <img src="assets/img/teacher/inst-5.jpg" alt="">
                  </div>
                  <div class="yl-instructor-text yl-headline position-relative">
                      <h3><a href="#">Williaum Hadson</a></h3>
                      <span class="yl-ins-degi">Web Developer</span>
                      <span class="yl-ins-course-no">60 Course</span>
                  </div>
                </div>
                <div class="yl-instructor-img-text text-center position-relative">
                  <div class="yl-instructor-img position-relative">
                      <img src="assets/img/teacher/inst-11.jpg" alt="">
                  </div>
                  <div class="yl-instructor-text yl-headline position-relative">
                      <h3><a href="#">Cole Parker</a></h3>
                      <span class="yl-ins-degi">Web Developer</span>
                      <span class="yl-ins-course-no">60 Course</span>
                  </div>
                </div>
            </div>
          </div>
      </div>
    </section>
<!-- Start of course  search section
    ============================================= -->

<!-- Start of Event  search section
    ============================================= -->             
    <section id="yl-event-wrap" class="yl-event-wrap-section">
      <div class="container">
          <div class="yl-section-title text-center yl-headline yl-title-style-two position-relative">
            <p class="title-watermark">Event</p>
            <span>Next Event</span>
            <h2>Upcoming Events
            </h2>
          </div>
          <div class="yl-event-content-wrap">
            <div class="row">
                <div class="col-lg-4 col-md-6 wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                  <div class="yl-event-innerbox yl-headline">
                      <div class="yl-event-img">
                        <img src="assets/img/event/ev1.jpg" alt="">
                      </div>
                      <div class="yl-event-text position-relative">
                        <div class="event-date text-center">
                            09
                            <span>dec</span>
                        </div>
                        <h3><a href="#">A day long workshop on music production</a></h3>
                        <div class="yl-event-meta">
                            <a href=""><i class="fas fa-map-marker-alt"></i> Florida University</a>
                            <a href=""><i class="far fa-clock"></i> 10.00am - 12.00pm</a>
                        </div>
                      </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="10ms" data-wow-duration="1500ms">
                  <div class="yl-event-innerbox yl-headline">
                      <div class="yl-event-img">
                        <img src="assets/img/event/ev2.jpg" alt="">
                      </div>
                      <div class="yl-event-text position-relative">
                        <div class="event-date text-center">
                            09
                            <span>dec</span>
                        </div>
                        <h3><a href="#">Put your hands dirty with user experience</a></h3>
                        <div class="yl-event-meta">
                            <a href=""><i class="fas fa-map-marker-alt"></i> Florida University</a>
                            <a href=""><i class="far fa-clock"></i> 10.00am - 12.00pm</a>
                        </div>
                      </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInRight" data-wow-delay="300ms" data-wow-duration="1500ms">
                  <div class="yl-event-innerbox yl-headline">
                      <div class="yl-event-img">
                        <img src="assets/img/event/ev3.jpg" alt="">
                      </div>
                      <div class="yl-event-text position-relative">
                        <div class="event-date text-center">
                            09
                            <span>dec</span>
                        </div>
                        <h3><a href="#">Hadns on workshop to starting a new course</a></h3>
                        <div class="yl-event-meta">
                            <a href=""><i class="fas fa-map-marker-alt"></i> Florida University</a>
                            <a href=""><i class="far fa-clock"></i> 10.00am - 12.00pm</a>
                        </div>
                      </div>
                  </div>
                </div>
            </div>
          </div>
      </div>
    </section>
<!-- End of Event  search section
    ============================================= -->

<!-- Start of Faq section
    ============================================= -->
    {{-- <section id="yl-shop-wrap" class="yl-shop-wrap-section">
      <div class="container">
          <div class="yl-section-title text-center yl-headline yl-title-style-two position-relative">
            <span>Popular Product</span>
            <h2>Best Product
            </h2>
          </div>
          <div class="yl-product-content">
            <div class="row">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                  <div class="yl-product-wrap clearfix">
                      <div class="yl-product-img position-relative">
                        <img src="assets/img/product/pro1.png" alt="">
                        <div class="yl-product-cart">
                            <a href="#"><i class="fas fa-shopping-cart"></i></a>
                        </div>
                      </div>
                      <div class="yl-product-text yl-headline">
                        <h3><a href="#">Javascript Learning Book</a></h3>
                        <div class="yl-product-price">
                            <span>$60 <del>$85</del></span>
                        </div>
                      </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                  <div class="yl-product-wrap clearfix">
                      <div class="yl-product-img position-relative">
                        <img src="assets/img/product/pd2.jpg" alt="">
                        <div class="yl-product-cart">
                            <a href="#"><i class="fas fa-shopping-cart"></i></a>
                        </div>
                      </div>
                      <div class="yl-product-text yl-headline">
                        <h3><a href="#">Learning Meterials</a></h3>
                        <div class="yl-product-price">
                            <span>$60 <del>$85</del></span>
                        </div>
                      </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                  <div class="yl-product-wrap clearfix">
                      <div class="yl-product-img position-relative">
                        <img src="assets/img/product/pro2.png" alt="">
                        <div class="yl-product-cart">
                            <a href="#"><i class="fas fa-shopping-cart"></i></a>
                        </div>
                      </div>
                      <div class="yl-product-text yl-headline">
                        <h3><a href="#">Timer Digital Watch</a></h3>
                        <div class="yl-product-price">
                            <span>$60 <del>$85</del></span>
                        </div>
                      </div>
                  </div>
                </div>
            </div>
            <div class="yl-shop-btn text-center">
                <a href="#">Shop More</a>
            </div>
          </div>
      </div>
    </section>        --}}
<!-- End of Faq  search section
    ============================================= -->

      <!-- Start of blog section 2
          ============================================= -->
          <section id="yl-blog-2" class="yl-blog-section-2">
            <div class="container">
                <div class="yl-section-title text-center yl-headline yl-title-style-two position-relative">
                  <p class="title-watermark">Latest News</p>
                  <span>Latest News </span>
                  <h2>We have many courses in our
                      top Categories
                  </h2>
                </div>
                <div class="yl-blog-content-2">
                  <div id="yl-blog-slider-2" class="yl-blog-slide-2 owl-carousel">
                      <div class="yl-blog-img-text-2 yl-headline pera-content wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="yl-blog-img-2 position-relative">
                            <div class="yl-blog-img-warap-2 position-relative">
                              <img src="assets/img/blg-2.1.jpg" alt="">
                            </div>
                            <div class="yl-blog-date-2 text-center">
                              <a href="#">10<span>Feb/20</span></a>
                            </div>
                        </div>
                        <div class="yl-blog-text-2">
                            <div class="yl-blog-meta-2 text-uppercase">
                              <a href="#">BY admin</a>
                              <a href="#">0 comments</a>
                            </div>
                            <div class="yl-blog-title-text-2">
                              <h3><a href="#">We would love to share a
                              similar experience</a></h3>
                              <p>Lorem ipsum dolor sit amet, consectetur
                                  adipiscing elit, sed do...
                              </p>
                              <a class="yl-blog-more text-uppercase" href="#">Read more <span>+</span></a>
                            </div>
                        </div>
                      </div>
                      <div class="yl-blog-img-text-2 yl-headline pera-content wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                        <div class="yl-blog-img-2 position-relative">
                            <div class="yl-blog-img-warap-2 position-relative">
                              <img src="assets/img/blg-2.2.jpg" alt="">
                            </div>
                            <div class="yl-blog-date-2 text-center">
                              <a href="#">12<span>Oct/20</span></a>
                            </div>
                        </div>
                        <div class="yl-blog-text-2">
                            <div class="yl-blog-meta-2 text-uppercase">
                              <a href="#">BY admin</a>
                              <a href="#">0 comments</a>
                            </div>
                            <div class="yl-blog-title-text-2">
                              <h3><a href="#">New study reveals flaws in
                              UK Coronavirus testing...</a> </h3>
                              <p>Lorem ipsum dolor sit amet, consectetur
                                  adipiscing elit, sed do...
                              </p>
                              <a class="yl-blog-more text-uppercase" href="#">Read more <span>+</span></a>
                            </div>
                        </div>
                      </div>
                      <div class="yl-blog-img-text-2 yl-headline pera-content wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                        <div class="yl-blog-img-2 position-relative">
                            <div class="yl-blog-img-warap-2 position-relative">
                              <img src="assets/img/blg-2.3.jpg" alt="">
                            </div>
                            <div class="yl-blog-date-2 text-center">
                              <a href="#">15<span>Nov/20</span></a>
                            </div>
                        </div>
                        <div class="yl-blog-text-2">
                            <div class="yl-blog-meta-2 text-uppercase">
                              <a href="#">BY admin</a>
                              <a href="#">0 comments</a>
                            </div>
                            <div class="yl-blog-title-text-2">
                              <h3><a href="#">Engineers ready to supply local business...</a> </h3>
                              <p>Lorem ipsum dolor sit amet, consectetur
                                  adipiscing elit, sed do...
                              </p>
                              <a class="yl-blog-more text-uppercase" href="#">Read more <span>+</span></a>
                            </div>
                        </div>
                      </div>
                      <div class="yl-blog-img-text-2 yl-headline pera-content">
                        <div class="yl-blog-img-2 position-relative">
                            <div class="yl-blog-img-warap-2 position-relative">
                              <img src="assets/img/blg-2.1.jpg" alt="">
                            </div>
                            <div class="yl-blog-date-2 text-center">
                              <a href="#">12<span>Oct/20</span></a>
                            </div>
                        </div>
                        <div class="yl-blog-text-2">
                            <div class="yl-blog-meta-2 text-uppercase">
                              <a href="#">BY admin</a>
                              <a href="#">0 comments</a>
                            </div>
                            <div class="yl-blog-title-text-2">
                              <h3><a href="#">We would love to share a
                              similar experience</a></h3>
                              <p>Lorem ipsum dolor sit amet, consectetur
                                  adipiscing elit, sed do...
                              </p>
                              <a class="yl-blog-more text-uppercase" href="#">Read more <span>+</span></a>
                            </div>
                        </div>
                      </div>
                      <div class="yl-blog-img-text-2 yl-headline pera-content">
                        <div class="yl-blog-img-2 position-relative">
                            <div class="yl-blog-img-warap-2 position-relative">
                              <img src="assets/img/blg-2.2.jpg" alt="">
                            </div>
                            <div class="yl-blog-date-2 text-center">
                              <a href="#">18<span>Mar/20</span></a>
                            </div>
                        </div>
                        <div class="yl-blog-text-2">
                            <div class="yl-blog-meta-2 text-uppercase">
                              <a href="#">BY admin</a>
                              <a href="#">0 comments</a>
                            </div>
                            <div class="yl-blog-title-text-2">
                              <h3><a href="#">New study reveals flaws in
                              UK Coronavirus testing...</a> </h3>
                              <p>Lorem ipsum dolor sit amet, consectetur
                                  adipiscing elit, sed do...
                              </p>
                              <a class="yl-blog-more text-uppercase" href="#">Read more <span>+</span></a>
                            </div>
                        </div>
                      </div>
                      <div class="yl-blog-img-text-2 yl-headline pera-content">
                        <div class="yl-blog-img-2 position-relative">
                            <div class="yl-blog-img-warap-2 position-relative">
                              <img src="assets/img/blg-2.3.jpg" alt="">
                            </div>
                            <div class="yl-blog-date-2 text-center">
                              <a href="#">12<span>Oct/20</span></a>
                            </div>
                        </div>
                        <div class="yl-blog-text-2">
                            <div class="yl-blog-meta-2 text-uppercase">
                              <a href="#">BY admin</a>
                              <a href="#">0 comments</a>
                            </div>
                            <div class="yl-blog-title-text-2">
                              <h3><a href="#">Engineers ready to supply local business...</a></h3>
                              <p>Lorem ipsum dolor sit amet, consectetur
                                  adipiscing elit, sed do...
                              </p>
                              <a class="yl-blog-more text-uppercase" href="#">Read more <span>+</span></a>
                            </div>
                        </div>
                      </div>
                  </div>
                </div>
            </div>
          </section>
<!-- End of blog section 2
    ============================================= -->                    
<!-- Start of Newslatter section
    ============================================= -->     
    <section id="yl-newslatter" class="yl-newslatter-section-2 position-relative">
      <div class="container">
          <div class="yl-newslatter-content">
            <div class="row">
                <div class="col-md-6">
                  <div class="yl-newslatter-text-icon">
                      <div class="yl-newslatter-icon float-left">
                        <i class="flaticon-email"></i>
                      </div>
                      <div class="yl-newslatter-text yl-headline">
                        <h3>Subscribe to a Newsletter!</h3>
                        <span>You will get our update instantly! <img src="assets/img/like.png" alt=""></span>
                      </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="yl-newslatter-form position-relative">
                      <form action="#">
                        <input type="email" placeholder="Enter your mail address...">
                        <button>Submit <i class="fas fa-arrow-right"></i></button>
                      </form>
                  </div>
                </div>
            </div>
          </div>
      </div>
    </section>
<!-- End of Newslatter section
    ============================================= -->
<!-- Start of Footer  section
    ============================================= -->  
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
    
  <!-- Login-Sign Form -->
    <div class="modal yl-login-modal fade" id="exampleModal" tabindex="-1" role="dialog"  aria-hidden="true">
      <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="yl-modal-header position-relative" data-background="assets/img/banner/lg-bg.jpg">
                <div class="yl-login-head text-center pera-content">
                  <a href="#"><img src="assets/img/logo/logo5.png" alt=""></a>
                  <p>Boamco laboris nisi ut aliquip ex ea commodo conseq nderit in voluptate velit esse</p>
                </div>
            </div>
            <div class="modal-body">
                <div class="yl-modal-signup-login-tab">
                  <div class="yl-faq-tab-btn ul-li">
                      <ul id="tabs" class="nav text-center nav-tabs faq-tab-btn-area">
                        <li class="nav-item"><a href="#" data-target="#login" data-toggle="tab" class="nav-link text-capitalize active">Login</a></li>
                        <li class="nav-item"><a href="#" data-target="#signUp" data-toggle="tab" class="nav-link text-capitalize">Sign Up</a></li>
                      </ul>
                  </div>
                  <div id="tabsContent" class="tab-content">
                      <div id="login" class="tab-pane fade active show">
                        <div class="yl-login-content pera-content text-center">
                            <form action="#" method="post">
                              <input type="text" placeholder="Username or email">
                              <input type="text" placeholder="Password">
                              <div class="yl-login-label clearfix">
                                  <span><input type="checkbox">Remember me</span>
                                  <a href="#">Forget Password?</a>
                              </div>
                              <button type="submit">Submit</button>
                            </form>
                            <p>Don’t have any account? <a href="#">Signup</a></p>
                        </div>
                      </div>
                      <div id="signUp" class="tab-pane fade">
                        <div class="yl-sign-up-content pera-content text-center">
                            <form action="#" method="post">
                              <input type="text" placeholder="First Name">
                              <input type="text" placeholder="Last Name">
                              <input type="email" placeholder="Email address">
                              <input type="text" placeholder="Username">
                              <input type="text" placeholder="Password">
                              <input type="text" placeholder="Confirm password">
                              <div class="yl-login-label clearfix">
                                  <span><input type="checkbox">By clicking signup you are agree to our terms of service</span>
                              </div>
                              <button type="submit">Submit</button>
                            </form>
                            <p>Already have an account? <a href="#">Log in</a></p>
                        </div>
                      </div>
                  </div>
                </div>
            </div>
          </div>
      </div>
    </div>     
    <!-- JS library -->
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
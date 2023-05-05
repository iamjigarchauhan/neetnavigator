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
            <div class="yl-brand-logo float-left"><a href="#"><img style="max-height: 50px" src="{{asset('assets/img/logo.png')}}" alt=""></a> 
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
<!-- Start of header section
    ============================================= -->
<!-- Start of slider section
    ============================================= -->    
    <section id="yl-banner" class="yl-banner-section">
      <span class="banner-dot-square position-absolute dot-square1"></span>
      <span class="banner-dot-square position-absolute dot-square2"></span>
      <span class="banner-dot-square position-absolute dot-square3"></span>
      <span class="banner-dot-square position-absolute dot-square4"></span>
      <div class="yl-banner-content position-relative">
          <div class="yl-banner-img">
            <img src="assets/img/banner.png" alt="">
          </div>
          <div class="container">
            <div class="yl-banner-text yl-headline pera-content position-relative">
                <div class="yl-banner-tag">
                  <span>During COVID-19</span>
                  <p>We emphasize on health & sanitise issues</p>
                </div>
                <h1 class="cd-headline letters scale">Gathering the brightest
                  minds for a
                  <span class="cd-words-wrapper">
                      <b class="is-visible">better-world.</b>
                      <b> Helping-Hand.</b>
                      <b> Make-Idea.</b>
                  </span>
                </h1>
                <p>Collaborate Consulting exists to find the place where to
                  being seemingly disparate interests meet. This undergraduate course teaches students what it was like.
                </p>
                <div class="yl-banner-btn-wrap clearfix">
                  <div class="yl-banner-btn text-center">
                      <a href="#">All Courses <i class="flaticon-right-arrow"></i></a>
                  </div>
                  <div class="yl-banner-play text-center position-relative">
                      <a class="video_box" href="https://www.youtube.com/watch?v=gUYjYEGbxEY">
                        <i class="fas fa-play"></i>
                        <span class="video_btn_border border_wrap-1"></span>
                        <span class="video_btn_border border_wrap-2"></span>
                        <span class="video_btn_border border_wrap-3"></span>
                      </a>
                  </div>
                </div>
                <div class="banner-water-mark">Yale</div>
            </div>
          </div>
      </div>
    </section>
<!--End of Slider section
    ============================================= -->
    <div class="banner-search-select clearfix">
      <div class="container">
          <div class="banner-search-form position-relative">
            <span class="banner-search-shape1 position-absolute" data-parallax='{"x" : 70}'><img src="assets/img/cr-shape1.png" alt=""></span>
            <span class="banner-search-shape2 position-absolute" data-parallax='{"x" : -70}'><img src="assets/img/cr-shape2.png" alt=""></span>
            <form action="#">
                <div class="yl-select-option-wrap">
                  <div class="banner-select-option">
                      <select>
                        <option data-display="Course Type">Course Type </option>
                        <option value="1">Weekly</option>
                        <option value="2">Monthly</option>
                        <option value="4">Yearly</option>
                      </select>
                  </div>
                  <div class="banner-select-option">
                      <select>
                        <option data-display="Language ">Language </option>
                        <option value="1">English</option>
                        <option value="2">German</option>
                        <option value="4">Spanish</option>
                      </select>
                  </div>
                  <div class="banner-select-option">
                      <select>
                        <option data-display="Skill">Skill</option>
                        <option value="1">Developer</option>
                        <option value="2">Designer</option>
                        <option value="4">Marketer</option>
                      </select>
                  </div>
                </div>
                <button type="submit"><i class="fas fa-search"></i> Search</button>
            </form>
          </div>
          <div class="select-apply-btn">
            <p>Are you qualified to teach our Students?  <a href="#">Apply Now</a></p>
          </div>
      </div>
    </div>
<!-- Start of category section
    ============================================= -->        
    <section id="yl-category" class="yl-category-section">
      <div class="container">
          <div class="yl-section-title text-center yl-headline yl-title-style-two position-relative">
            <p class="title-watermark">Categories</p>
            <span>Top Categories</span>
            <h2>We have many courses in our
                top Categories
            </h2>
          </div>
          <div id="yl-category-slide" class="yl-category-slide-content owl-carousel">
            <div class="yl-category-img-text yl-headline position-relative wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                <div class="yl-category-text-icon">
                  <div class="yl-category-icon float-left">
                      <i class="flaticon-atom"></i>
                  </div>
                  <div class="yl-category-text">
                      <h3><a href="#">Computer Science</a></h3>
                      <span>14 Courses</span>
                  </div>
                </div>
                <div class="yl-category-img text-center">
                  <img src="assets/img/ct1.jpg" alt="">
                </div>
                <div class="yl-category-hover-icon text-center">
                  <a href="#"><i class="fas fa-plus"></i></a>
                </div>
            </div>
            <div class="yl-category-img-text yl-headline position-relative wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                <div class="yl-category-text-icon">
                  <div class="yl-category-icon float-left">
                      <i class="flaticon-design"></i>
                  </div>
                  <div class="yl-category-text">
                      <h3><a href="#">UI/UX Design</a></h3>
                      <span>14 Courses</span>
                  </div>
                </div>
                <div class="yl-category-img text-center">
                  <img src="assets/img/ct2.jpg" alt="">
                </div>
                <div class="yl-category-hover-icon text-center">
                  <a href="#"><i class="fas fa-plus"></i></a>
                </div>
            </div>
            <div class="yl-category-img-text yl-headline position-relative wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                <div class="yl-category-text-icon">
                  <div class="yl-category-icon float-left">
                      <i class="flaticon-global-network"></i>
                  </div>
                  <div class="yl-category-text">
                      <h3><a href="#">Language Learning</a></h3>
                      <span>14 Courses</span>
                  </div>
                </div>
                <div class="yl-category-img text-center">
                  <img src="assets/img/ct3.jpg" alt="">
                </div>
                <div class="yl-category-hover-icon text-center">
                  <a href="#"><i class="fas fa-plus"></i></a>
                </div>
            </div>
            <div class="yl-category-img-text yl-headline position-relative wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                <div class="yl-category-text-icon">
                  <div class="yl-category-icon float-left">
                      <i class="flaticon-atom"></i>
                  </div>
                  <div class="yl-category-text">
                      <h3><a href="#">Computer Science</a></h3>
                      <span>14 Courses</span>
                  </div>
                </div>
                <div class="yl-category-img text-center">
                  <img src="assets/img/ct1.jpg" alt="">
                </div>
                <div class="yl-category-hover-icon text-center">
                  <a href="#"><i class="fas fa-plus"></i></a>
                </div>
            </div>
            <div class="yl-category-img-text yl-headline position-relative">
                <div class="yl-category-text-icon">
                  <div class="yl-category-icon float-left">
                      <i class="flaticon-design"></i>
                  </div>
                  <div class="yl-category-text">
                      <h3><a href="#">UI/UX Design</a></h3>
                      <span>14 Courses</span>
                  </div>
                </div>
                <div class="yl-category-img text-center">
                  <img src="assets/img/ct2.jpg" alt="">
                </div>
                <div class="yl-category-hover-icon text-center">
                  <a href="#"><i class="fas fa-plus"></i></a>
                </div>
            </div>
            <div class="yl-category-img-text yl-headline position-relative">
                <div class="yl-category-text-icon">
                  <div class="yl-category-icon float-left">
                      <i class="flaticon-global-network"></i>
                  </div>
                  <div class="yl-category-text">
                      <h3><a href="#">Language Learning</a></h3>
                      <span>14 Courses</span>
                  </div>
                </div>
                <div class="yl-category-img text-center">
                  <img src="assets/img/ct3.jpg" alt="">
                </div>
                <div class="yl-category-hover-icon text-center">
                  <a href="#"><i class="fas fa-plus"></i></a>
                </div>
            </div>
          </div>
      </div>
    </section>
<!-- End of category section
    ============================================= --> 
<!-- Start of Popular course section
    ============================================= -->
    <section id="yl-popular-course" class="yl-popular-course-section">
      <div class="container">
          <div class="yl-section-title text-center yl-headline yl-title-style-two position-relative">
            <p class="title-watermark">Course</p>
            <span>Our Popular Courses </span>
            <h2>The largest selection of courses
                for learning for students
            </h2>
          </div>
          <div class="yl-popular-course-content">
            <div class="row">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                  <div class="yl-popular-course-img-text">
                      <div class="yl-popular-course-img text-center">
                        <img src="assets/img/course/pc1.jpg" alt="">
                      </div>
                      <div class="yl-popular-course-text">
                        <div class="popular-course-fee">
                            <span>Course Fee:  </span>
                            <del>$59</del>
                            <strong>$39</strong>
                        </div>
                        <div class="popular-course-title yl-headline">
                            <h3><a href="#">User Experience Research
                            & Design</a>
                        </h3>
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
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="100ms" data-wow-duration="1500ms">
                <div class="yl-popular-course-img-text">
                  <div class="yl-popular-course-img text-center">
                      <img src="assets/img/course/pc2.jpg" alt="">
                  </div>
                  <div class="yl-popular-course-text">
                      <div class="popular-course-fee">
                        <span>Course Fee:  </span>
                        <del>$59</del>
                        <strong>$39</strong>
                      </div>
                      <div class="popular-course-title yl-headline">
                        <h3><a href="#">Copyright  Law in Music Course</a>
                        </h3>
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
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                <div class="yl-popular-course-img-text">
                  <div class="yl-popular-course-img text-center">
                      <img src="assets/img/course/pc3.jpg" alt="">
                  </div>
                  <div class="yl-popular-course-text">
                      <div class="popular-course-fee">
                        <span>Course Fee:  </span>
                        <del>$59</del>
                        <strong>$39</strong>
                      </div>
                      <div class="popular-course-title yl-headline">
                        <h3><a href="#">Master of Public Health Course</a>
                        </h3>
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
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                <div class="yl-popular-course-img-text">
                  <div class="yl-popular-course-img text-center">
                      <img src="assets/img/course/pc4.jpg" alt="">
                  </div>
                  <div class="yl-popular-course-text">
                      <div class="popular-course-fee">
                        <span>Course Fee:  </span>
                        <del>$59</del>
                        <strong>$39</strong>
                      </div>
                      <div class="popular-course-title yl-headline">
                        <h3><a href="#">User Experience Research
                        & Design</a>
                      </h3>
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
          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
            <div class="yl-popular-course-img-text">
                <div class="yl-popular-course-img text-center">
                  <img src="assets/img/course/pc5.jpg" alt="">
                </div>
                <div class="yl-popular-course-text">
                  <div class="popular-course-fee">
                      <span>Course Fee:  </span>
                      <del>$59</del>
                      <strong>$39</strong>
                  </div>
                  <div class="popular-course-title yl-headline">
                      <h3><a href="#">Digital Marketing and SMM Course</a>
                      </h3>
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
          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="500ms" data-wow-duration="1500ms">
            <div class="yl-popular-course-img-text">
                <div class="yl-popular-course-img text-center">
                  <img src="assets/img/course/pc6.jpg" alt="">
                </div>
                <div class="yl-popular-course-text">
                  <div class="popular-course-fee">
                      <span>Course Fee:  </span>
                      <del>$59</del>
                      <strong>$39</strong>
                  </div>
                  <div class="popular-course-title yl-headline">
                      <h3><a href="#">Graphic Design and Logo Design Course</a>
                      </h3>
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
          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
            <div class="yl-popular-course-img-text">
                <div class="yl-popular-course-img text-center">
                  <img src="assets/img/course/pc7.jpg" alt="">
                </div>
                <div class="yl-popular-course-text">
                  <div class="popular-course-fee">
                      <span>Course Fee:  </span>
                      <del>$59</del>
                      <strong>$39</strong>
                  </div>
                  <div class="popular-course-title yl-headline">
                      <h3><a href="#">Computer Basic Startup Ultricies Vitae</a>
                      </h3>
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
          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="700ms" data-wow-duration="1500ms">
            <div class="yl-popular-course-img-text">
                <div class="yl-popular-course-img text-center">
                  <img src="assets/img/course/pc8.jpg" alt="">
                </div>
                <div class="yl-popular-course-text">
                  <div class="popular-course-fee">
                      <span>Course Fee:  </span>
                      <del>$59</del>
                      <strong>$39</strong>
                  </div>
                  <div class="popular-course-title yl-headline">
                      <h3><a href="#">Molecular Biology, Biotechnology Courses</a>
                      </h3>
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
      <div class="yl-popular-course-btn text-center">
          <a href="#">All Courses <i class="fas fa-arrow-right"></i></a>
      </div>
    </div>
</div>
</section>
<!-- End of Popular course section
    ============================================= -->
<!-- Start of Rwgistration section 2
    ============================================= -->   
    <section id="yl-registration-2" class="yl-registration-section-2 position-relative">
      <div class="container">
          <div class="yl-registration-content-2 position-relative yl-headline pera-content">
            <span class="registration-side-img position-absolute wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms"><img src="assets/img/rm1.png" alt=""></span>
            <div class="registration-text-2">
                <h3>Get 10% Off on registration
                  fee for <span>COVID-19</span>
                </h3>
                <p>The last step you need to take to be allowed to follow a course is to be registered on it.</p>
                <a href="#">Register now</a>
            </div>
          </div>
      </div>
    </section>
<!-- End of Rwgistration section 2
    ============================================= -->
<!-- Start of testimonial section 2
    ============================================= -->
    <section id="yl-testimonial-2" class="yl-testimonial-section-2">
      <div class="container">
          <div class="yl-section-title text-center yl-headline yl-title-style-two position-relative">
            <p class="title-watermark">Testimonials</p>
            <span>Testimonials </span>
            <h2>We have many courses in our
                top Categories
            </h2>
          </div>
          <div class="yl-testimonial-content-2">
            <div id="yl-testimonial-slide-2" class="yl-testimonial-wrap-2 owl-carousel">
                <div class="yl-testimonial-img-text-2 yl-headline position-relative pera-content wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                  <div class="yl-testimonial-icon-2">
                      <i class="fas fa-quote-right"></i>
                  </div>
                  <div class="yl-testimonial-text-2">
                      <h3>Best Support ever!</h3>
                      <p>5 stars for design quality, but also for prompt new customer service and great attention to details work.</p>
                  </div>
                  <div class="yl-testimonial-author-2 clearfix">
                      <div class="yl-testi-author-img-2 position-relative float-left">
                        <img src="assets/img/testi-a1.jpg" alt="">
                      </div>
                      <div class="yl-testi-author-text-2">
                        <h4><a href="#">Alina Lora</a></h4>
                        <span>Formar Manager.</span>
                      </div>
                  </div>
                </div>
                <div class="yl-testimonial-img-text-2 yl-headline position-relative pera-content wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                  <div class="yl-testimonial-icon-2">
                      <i class="fas fa-quote-right"></i>
                  </div>
                  <div class="yl-testimonial-text-2">
                      <h3>Good cleaning service</h3>
                      <p>5 stars for design quality, but also for prompt new customer service and great attention to details work.</p>
                  </div>
                  <div class="yl-testimonial-author-2 clearfix">
                      <div class="yl-testi-author-img-2 position-relative float-left">
                        <img src="assets/img/testi-a2.jpg" alt="">
                      </div>
                      <div class="yl-testi-author-text-2">
                        <h4><a href="#">Tanir Fro</a></h4>
                        <span>Formar Manager.</span>
                      </div>
                  </div>
                </div>
                <div class="yl-testimonial-img-text-2 yl-headline position-relative pera-content wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                  <div class="yl-testimonial-icon-2">
                      <i class="fas fa-quote-right"></i>
                  </div>
                  <div class="yl-testimonial-text-2">
                      <h3>Service satisfaction!</h3>
                      <p>5 stars for design quality, but also for prompt new customer service and great attention to details work.</p>
                  </div>
                  <div class="yl-testimonial-author-2 clearfix">
                      <div class="yl-testi-author-img-2 position-relative float-left">
                        <img src="assets/img/testi-a3.jpg" alt="">
                      </div>
                      <div class="yl-testi-author-text-2">
                        <h4><a href="#">Leofar Lord</a></h4>
                        <span>Formar Manager.</span>
                      </div>
                  </div>
                </div>
                <div class="yl-testimonial-img-text-2 yl-headline position-relative pera-content wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                  <div class="yl-testimonial-icon-2">
                      <i class="fas fa-quote-right"></i>
                  </div>
                  <div class="yl-testimonial-text-2">
                      <h3>Best teaching tips!</h3>
                      <p>5 stars for design quality, but also for prompt new customer service and great attention to details work.</p>
                  </div>
                  <div class="yl-testimonial-author-2 clearfix">
                      <div class="yl-testi-author-img-2 position-relative float-left">
                        <img src="assets/img/testi-a4.jpg" alt="">
                      </div>
                      <div class="yl-testi-author-text-2">
                        <h4><a href="#">Rohit Grow</a></h4>
                        <span>Formar Manager.</span>
                      </div>
                  </div>
                </div>
                <div class="yl-testimonial-img-text-2 yl-headline position-relative pera-content">
                  <div class="yl-testimonial-icon-2">
                      <i class="fas fa-quote-right"></i>
                  </div>
                  <div class="yl-testimonial-text-2">
                      <h3>Best Support ever!</h3>
                      <p>5 stars for design quality, but also for prompt new customer service and great attention to details work.</p>
                  </div>
                  <div class="yl-testimonial-author-2 clearfix">
                      <div class="yl-testi-author-img-2 position-relative float-left">
                        <img src="assets/img/testi-a1.jpg" alt="">
                      </div>
                      <div class="yl-testi-author-text-2">
                        <h4><a href="#">Alina Lora</a></h4>
                        <span>Formar Manager.</span>
                      </div>
                  </div>
                </div>
                <div class="yl-testimonial-img-text-2 yl-headline position-relative pera-content">
                  <div class="yl-testimonial-icon-2">
                      <i class="fas fa-quote-right"></i>
                  </div>
                  <div class="yl-testimonial-text-2">
                      <h3>Good cleaning service</h3>
                      <p>5 stars for design quality, but also for prompt new customer service and great attention to details work.</p>
                  </div>
                  <div class="yl-testimonial-author-2 clearfix">
                      <div class="yl-testi-author-img-2 position-relative float-left">
                        <img src="assets/img/testi-a2.jpg" alt="">
                      </div>
                      <div class="yl-testi-author-text-2">
                        <h4><a href="#">Tanir Fro</a></h4>
                        <span>Formar Manager.</span>
                      </div>
                  </div>
                </div>
                <div class="yl-testimonial-img-text-2 yl-headline position-relative pera-content">
                  <div class="yl-testimonial-icon-2">
                      <i class="fas fa-quote-right"></i>
                  </div>
                  <div class="yl-testimonial-text-2">
                      <h3>Service satisfaction!</h3>
                      <p>5 stars for design quality, but also for prompt new customer service and great attention to details work.</p>
                  </div>
                  <div class="yl-testimonial-author-2 clearfix">
                      <div class="yl-testi-author-img-2 position-relative float-left">
                        <img src="assets/img/testi-a3.jpg" alt="">
                      </div>
                      <div class="yl-testi-author-text-2">
                        <h4><a href="#">Leofar Lord</a></h4>
                        <span>Formar Manager.</span>
                      </div>
                  </div>
                </div>
                <div class="yl-testimonial-img-text-2 yl-headline position-relative pera-content">
                  <div class="yl-testimonial-icon-2">
                      <i class="fas fa-quote-right"></i>
                  </div>
                  <div class="yl-testimonial-text-2">
                      <h3>Best teaching tips!</h3>
                      <p>5 stars for design quality, but also for prompt new customer service and great attention to details work.</p>
                  </div>
                  <div class="yl-testimonial-author-2 clearfix">
                      <div class="yl-testi-author-img-2 position-relative float-left">
                        <img src="assets/img/testi-a4.jpg" alt="">
                      </div>
                      <div class="yl-testi-author-text-2">
                        <h4><a href="#">Rohit Grow</a></h4>
                        <span>Formar Manager.</span>
                      </div>
                  </div>
                </div>
            </div>
          </div>
      </div>
    </section>
<!-- End of testimonial section 2
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
                <div class="yl-blog-img-text-2 yl-headline pera-content wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
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
                <div class="yl-blog-img-text-2 yl-headline pera-content wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
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
                <div class="yl-blog-img-text-2 yl-headline pera-content wow fadeInLeft" data-wow-delay="600ms" data-wow-duration="1500ms">
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
    <script src="{{ asset('assets/home/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('assets/home/js/typer.js') }}"></script>
    <script src="{{ asset('assets/home/js/custom.js') }}"></script>
</body>
</html>
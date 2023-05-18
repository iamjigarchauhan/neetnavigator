@extends('layouts.app')
@section('content')
<!-- Login-Sign Form -->
{{-- <div class="modal yl-login-modal fade" id="exampleModal" tabindex="-1" role="dialog"  aria-hidden="true">
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
</div>    --}}
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
      <img src="{{ asset('assets/home/img/banner.png')}}" alt="">
    </div>
    <div class="container">
      <div class="yl-banner-text yl-headline pera-content position-relative">
        <div class="yl-banner-tag">
          <span>MBBS IN INDIA</span>
          <p>NO DONATION REQUIRED</p>
        </div>
        <h1 class="cd-headline letters scale">HELPING STUDENTS
          TO GET ADMISSION IN
          <span class="cd-words-wrapper">
            <b class="is-visible"> INDIA.</b>
            <b> ABROAD.</b>
          </span>
        </h1>
        <p>Through the Atmia Neet College Predictor, students can predict their INDIAN Medical Colleges and get added to the admission, we help students through the Official Counseling form fill till Admission of the student.
        </p>
        <div class="yl-banner-btn-wrap clearfix">
          <div class="yl-banner-btn text-center">
            <a href="{{ route('register-user')}}">PREDICT COLLEGE NOW <i class="flaticon-right-arrow"></i></a>
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
        <div class="banner-water-mark">ATIMA</div>
      </div>
    </div>
  </div>
</section>
<!--End of Slider section
============================================= -->
<div class="banner-search-select clearfix">
  <div class="container">
    <div class="banner-search-form position-relative">
      <span class="banner-search-shape1 position-absolute" data-parallax='{"x" : 70}'><img src="{{asset('assets/home/img/cr-shape1.png')}}" alt=""></span>
      <span class="banner-search-shape2 position-absolute" data-parallax='{"x" : -70}'><img src="{{asset('assets/home/img/cr-shape2.png')}}" alt=""></span>
      <form action="{{ route('register-user') }}" target="_blank">
        <div class="yl-select-option-wrap">
          <div class="banner-select-option">
            <select>
              <option data-display="Course Type">Type of Colleges </option>
              <option value="1">ALL INDIA QUOTA</option>
              <option value="2">AIIMS</option>
              <option value="4">JIPMER</option>
              <option value="5">DEEMED UNIVERSITY</option>
              <option value="6">AFMC</option>
              <option value="7">BHU</option>
              <option value="8">AMU</option>
            </select>
          </div>
          <div class="banner-select-option">
            <select>
              <option data-display="Language ">Category </option>
              <option value="1">OPEN</option>
              <option value="2">OBC</option>
              <option value="4">EWS</option>
              <option value="5">SC</option>
              <option value="6">ST</option>
            </select>
          </div>
        </div>
        <button type="submit"><i class="fas fa-search"></i> PREDICT</button>
      </form>
    </div>
    <div class="select-apply-btn">
      <p>Do you want to predict your medical college now? <a href="http://neetnavigator.atmianeet.in/neet-college/user">Predict Now</a></p>
    </div>
  </div>
</div>
<!-- Start of category section
============================================= -->
<section id="yl-category" class="yl-category-section">
  <div class="container">
    <div class="yl-section-title text-center yl-headline yl-title-style-two position-relative">
      <p class="title-watermark">Colleges</p>
      <span>TYPES MEDICAL COLLEGES IN INDIA</span>
      <h2>There are different types of medical Colleges in India with Different Numbers of Seats.
      </h2>
    </div>
    <div id="yl-category-slide" class="yl-category-slide-content owl-carousel">
      <div class="yl-category-img-text yl-headline position-relative wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
        <div class="yl-category-text-icon">
          <div class="yl-category-icon float-left">
            <i class="flaticon-atom"></i>
          </div>
          <div class="yl-category-text">
            <h3><a href="#">Government Medical</a></h3>
            <span>324 Colleges</span>
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
            <h3><a href="#">Private Medical</a></h3>
            <span>49 Colleges</span>
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
            <h3><a href="#">AIIMS</a></h3>
            <span>20 Colleges</span>
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
            <h3><a href="#">JIPMER</a></h3>
            <span>2 Colleges</span>
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
            <h3><a href="#">AFMC</a></h3>
            <span>1 College</span>
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
            <h3><a href="#">BHIU</a></h3>
            <span>1 College</span>
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
      <p class="title-watermark">COLLEGES</p>
      <span>MEDICAL COLLEGES OF INDIA </span>
      <h2>The largest selection of courses
        for learning for students
      </h2>
    </div>
    <div class="yl-popular-course-content">
      <div class="row">
        @php
        $colleges = \App\Models\College::all()->random(8);
        @endphp
        @foreach($colleges as $key => $college)
        <div class="col-lg-3 col-md-4 col-6">
          <div class="yl-popular-course-img-text">
            {{-- <div class="yl-popular-course-img text-center">
                  <img src="{{ asset('assets/home/img/course/cpc1.jpg')}}" alt="">
          </div> --}}
          <div class="yl-popular-course-text">
            <div class="popular-course-fee clearfix">
              <span>{{ $college->institution_type}} </span>
              <div class="course-fee-amount mt-2">
                @if($college->total_fee > 0)
                <strong>INR {{ formatNumber($college->total_fee) }}</strong>
                @endif
              </div>
            </div>
            <div class="popular-course-title yl-headline">
              <h3><a href="#">{{ $college->name}}</a>
              </h3>
              <div class="yl-course-meta">
                <a href="#" class="mr-0"><i class="fas fa-map-marker"></i>{{ ucfirst(strtolower($college->city->name))}}, {{ $college->state->name }}</a>
                <a href="#"><b>{{ $college->annual_seat}}</b> Seats</a>
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
      @endforeach
      {{-- <div class="yl-popular-course-btn text-center">
            <a href="#">All Courses <i class="fas fa-arrow-right"></i></a>
        </div> --}}
    </div>
    {{-- <div class="yl-popular-course-btn text-center">
        <a href="#">All Courses <i class="fas fa-arrow-right"></i></a>
      </div> --}}
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
      <span class="registration-side-img position-absolute wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms"><img src="{{ asset('assets/home/img/qr.png')}}" alt=""></span>
      <div class="registration-text-2">
        <h3>MBBS COUNSELING
          free for <span>INDIA & ABROAD</span>
        </h3>
        <p>MBBS counseling in India Guidance for form filling and seat selection.</p>
        <a href="https://t.me/atmiambbsindia">Join now</a>
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
            <!-- <h3>Best Support ever!</h3> -->
            <p>UV GUllas, has all modern facilities available and tutors are supporting as well. Atmia Hostel is well furnished and it's walking distance from college. They provide vegetarian Indian food and CEBU is a safe city to live nothing to worry about safety here. </p>
          </div>
          <div class="yl-testimonial-author-2 clearfix">
            <div class="yl-testi-author-img-2 position-relative float-left">
              <img src="assets/img/testi-a1.png" alt="">
            </div>
            <div class="yl-testi-author-text-2">
              <h4><a href="#">Doshi Harshil</a></h4>
              <span>(Gujarat, India)</span>
            </div>
          </div>
        </div>
        <div class="yl-testimonial-img-text-2 yl-headline position-relative pera-content wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
          <div class="yl-testimonial-icon-2">
            <i class="fas fa-quote-right"></i>
          </div>
          <div class="yl-testimonial-text-2">
            <!-- <h3>Good cleaning service</h3> -->
            <p>Hello friends, I got to Know About the UV College from Dr. Chirag, He is like an elder brother always support us, makes sure all our needs are fulfilled. All facilities in the college is awesome and I recommend UV to all aspiring students planning to take course of medicine go for the Best.</p>
          </div>
          <div class="yl-testimonial-author-2 clearfix">
            <div class="yl-testi-author-img-2 position-relative float-left">
              <img src="assets/img/testi-a2.png" alt="">
            </div>
            <div class="yl-testi-author-text-2">
              <h4><a href="#">Sneddon Peire</a></h4>
              <span>(Maharashtra, India)</span>
            </div>
          </div>
        </div>
        <div class="yl-testimonial-img-text-2 yl-headline position-relative pera-content wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
          <div class="yl-testimonial-icon-2">
            <i class="fas fa-quote-right"></i>
          </div>
          <div class="yl-testimonial-text-2">
            <!-- <h3>Service satisfaction!</h3> -->
            <p>I am studying in UV Gullas college of Medicine I was suggested this collegeby Atmia Education, students not only from India entire world comes here, my best friend and classmate is from the basic question arose in my mind before I came here, will I get good food as I am vegetarian and these is Non-Veg Country. Atmia provides me the best food. Hostel is very good and security is excellent. If we have any difficulty seniors are alos very supportive and staff of atmia is always there to help. UV is the Best. </p>
          </div>
          <div class="yl-testimonial-author-2 clearfix">
            <div class="yl-testi-author-img-2 position-relative float-left">
              <img src="assets/img/testi-a3.png" alt="">
            </div>
            <div class="yl-testi-author-text-2">
              <h4><a href="#">Simran Jalandre </a></h4>
              <span>(Madhya Pradesh, India)</span>
            </div>
          </div>
        </div>
        <div class="yl-testimonial-img-text-2 yl-headline position-relative pera-content wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
          <div class="yl-testimonial-icon-2">
            <i class="fas fa-quote-right"></i>
          </div>
          <div class="yl-testimonial-text-2">
            <!-- <h3>Best teaching tips!</h3> -->
            <p>To all students who want to serve the society, want to become doctor, In Entire India you will not have the better Option than Atmia Education. The Honest and Committed Team. </p>
          </div>
          <div class="yl-testimonial-author-2 clearfix">
            <div class="yl-testi-author-img-2 position-relative float-left">
              <img src="assets/img/testi-a4.png" alt="">
            </div>
            <div class="yl-testi-author-text-2">
              <h4><a href="#">Dr. Zarna Dhamecha (MCI Topper) </a></h4>
              <span>(Gujarat, India)</span>
            </div>
          </div>
        </div>
        <div class="yl-testimonial-img-text-2 yl-headline position-relative pera-content">
          <div class="yl-testimonial-icon-2">
            <i class="fas fa-quote-right"></i>
          </div>
          <div class="yl-testimonial-text-2">
            <!-- <h3>Best Support ever!</h3> -->
            <p>I am Currently Working @Tata Main Hospital, Jamshedpur. My Journey Started with Atmia Education, The Guidance and Help Provided by them has helped me lot in my life, Thank you Dr. Manish & Dr. Chirag. </p>
          </div>
          <div class="yl-testimonial-author-2 clearfix">
            <div class="yl-testi-author-img-2 position-relative float-left">
              <img src="assets/img/testi-a5.png" alt="">
            </div>
            <div class="yl-testi-author-text-2">
              <h4><a href="#">Dr. Uttam Kalariya</a></h4>
              <span>(MCI & PG-NEET Topper)</span>
            </div>
          </div>
        </div>
        <div class="yl-testimonial-img-text-2 yl-headline position-relative pera-content">
          <div class="yl-testimonial-icon-2">
            <i class="fas fa-quote-right"></i>
          </div>
          <div class="yl-testimonial-text-2">
            <!-- <h3>Good cleaning service</h3> -->
            <p>Thank you for your Guidance & Support. Atmia have always helped me in all challenges. The professionalism and caring the team has, I appreciate it very much.</p>
          </div>
          <div class="yl-testimonial-author-2 clearfix">
            <div class="yl-testi-author-img-2 position-relative float-left">
              <img src="assets/img/testi-a6.png" alt="">
            </div>
            <div class="yl-testi-author-text-2">
              <h4><a href="#">Dr. Rajat Thummar</a></h4>
              <!-- <span>Formar Manager.</span> -->
            </div>
          </div>
        </div>
        <div class="yl-testimonial-img-text-2 yl-headline position-relative pera-content">
          <div class="yl-testimonial-icon-2">
            <i class="fas fa-quote-right"></i>
          </div>
          <div class="yl-testimonial-text-2">
            <!-- <h3>Service satisfaction!</h3> -->
            <p>To all Aspiring Doctors, To Study MBBS Abroad and Stay Apart from Family is always difficult, but it was made easy for us by Atmia Team and I had excellent group, this journey in my life will always be remembered forever. Thank you Dr. Chirag. </p>
          </div>
          <div class="yl-testimonial-author-2 clearfix">
            <div class="yl-testi-author-img-2 position-relative float-left">
              <img src="assets/img/testi-a7.png" alt="">
            </div>
            <div class="yl-testi-author-text-2">
              <h4><a href="#">Dr. Ritee Chanababa</a></h4>
              <!-- <span>Formar Manager.</span> -->
            </div>
          </div>
        </div>
        <div class="yl-testimonial-img-text-2 yl-headline position-relative pera-content">
          <div class="yl-testimonial-icon-2">
            <i class="fas fa-quote-right"></i>
          </div>
          <div class="yl-testimonial-text-2">
            <!-- <h3>Best teaching tips!</h3> -->
            <p>I can never thank you enough for all your services atmia has provided and always supported & Guided me, the team is Commited and deserves to be honoured. I will always pray to God for your betterment. </p>
          </div>
          <div class="yl-testimonial-author-2 clearfix">
            <div class="yl-testi-author-img-2 position-relative float-left">
              <img src="assets/img/testi-a8.png" alt="">
            </div>
            <div class="yl-testi-author-text-2">
              <h4><a href="#">Dr. Neha Gohel</a></h4>
              <!-- <span>Formar Manager.</span> -->
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
      <p class="title-watermark">Events</p>
      <span>Events </span>
      <h2>We have many courses in our
        top Categories
      </h2>
    </div>
    @php
      $events = \App\Models\Blog::take(4)->get();
    @endphp
    <div class="yl-blog-content-2 pt-5">
      @foreach ($events as $item)
      <div id="yl-blog-slider-2" class="yl-blog-slide-2 owl-carousel">
        <div class="yl-blog-img-text-2 yl-headline pera-content wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
          <div class="yl-blog-img-2 position-relative">
            <div class="yl-blog-img-warap-2 position-relative">
              <img src="{{ asset("assets/home/img/blg-2.4.jpg")}}" alt="">
            </div>
            <div class="yl-blog-date-2 text-center">
              <a href="#">{{ date('d', strtotime($item->created_at)) }}<span>{{ date('M / y', strtotime($item->created_at)) }}</span></a>
            </div>
          </div>
          <div class="yl-blog-text-2">
            <div class="yl-blog-meta-2 text-uppercase">
              <a href="#">BY admin</a>
              {{-- <a href="#">0 comments</a> --}}
            </div>
            <div class="yl-blog-title-text-2">
              <h3><a href="{{ route('single',['slug'=>$item->slug])}}">{{ $item->title ?? '' }}</a></h3>
              <p> {{ $item->description ?? ''}}
              </p>
              <a class="yl-blog-more text-uppercase" href="{{ route('single',['slug'=>$item->slug])}}">Read more <span>+</span></a>
            </div>
          </div>
        </div>
      </div>
      @endforeach      
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
@endsection
@section('scripts')
    <script src="{{ asset('assets/home/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('assets/home/js/custom.js') }}"></script>
@endsection
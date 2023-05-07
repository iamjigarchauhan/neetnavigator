@extends('layouts.app')
@section('content')
<section id="course-page-course" class="course-page-course-section">
  <div class="container mt-5">
    <div class="course-page-course-content">
       <div class="course-page-course-content-top">
          <div class="row">
             <div class="col-md-6">
                <div class="course-grid-top-bar">
                   <div class="course-grid-showing-result">
                      <div class="yl-course-grid-list float-left">
                         <a href="#"><i class="fas fa-th"></i></a>
                         <a href="#"><i class="fas fa-list"></i></a>
                      </div>
                      <span class="show-result-text">Showing {{ $colleges->firstItem() }} - {{ $colleges->currentPage() * $colleges->perPage() }} of {{ $totalcolleges }} results</span>
                   </div>
                </div>
             </div>
             <div class="col-md-6">
                <div class="course-grid-top-bar">
                   <div class="yl-course-search position-relative">
                      <form action="#" method="get">
                         <input type="text" placeholder="Enter your course">
                         <button>Search</button>
                      </form>
                   </div>
                </div>
             </div>
          </div>
       </div>
       <div class="course-page-courses-item">
          <div class="row">
             @foreach($colleges as $key => $college)
             <div class="col-lg-3 col-md-4">
               <div class="yl-popular-course-img-text">
                   {{-- <div class="yl-popular-course-img text-center">
                     <img src="{{ asset('assets/home/img/course/cpc1.jpg')}}" alt="">
                   </div> --}}
                   <div class="yl-popular-course-text">
                     <div class="popular-course-fee clearfix">
                         <span>{{ $college->institution_type}} </span>
                         {{-- <div class="course-fee-amount">
                           <del>$59</del>
                           <strong>$39</strong>
                         </div> --}}
                     </div>
                     <div class="popular-course-title yl-headline">
                         <h3><a href="#">{{ $college->name}}</a>
                         </h3>
                         <div class="yl-course-meta">
                           <a href="#" class="mr-0"><i class="fas fa-map-marker"></i>{{ ucfirst(strtolower($college->city->name))}}, {{ $college->state->state_code }}</a>
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

             {{-- <div class="col-lg-3 col-md-4">
                <div class="yl-popular-course-img-text">
                   <div class="yl-popular-course-img text-center">
                      <img src="{{ asset('assets/home/img/course/cpc2.jpg')}}" alt="">
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
                            </a>
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
             <div class="col-lg-3 col-md-4">
                <div class="yl-popular-course-img-text">
                   <div class="yl-popular-course-img text-center">
                      <img src="{{ asset('assets/home/img/course/cpc3.jpg')}}" alt="">
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
                            Course</a>
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
             <div class="col-lg-3 col-md-4">
                <div class="yl-popular-course-img-text">
                   <div class="yl-popular-course-img text-center">
                      <img src="{{ asset('assets/home/img/course/cpc4.jpg')}}" alt="">
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
                         <h3><a href="#">Digital Marketing and SMM
                            Course</a>
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
             <div class="col-lg-3 col-md-4">
                <div class="yl-popular-course-img-text">
                   <div class="yl-popular-course-img text-center">
                      <img src="{{ asset('assets/home/img/course/cpc5.jpg')}}" alt="">
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
                         <h3><a href="#">Graphic Design and Logo 
                            Design Course</a>
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
             <div class="col-lg-3 col-md-4">
                <div class="yl-popular-course-img-text">
                   <div class="yl-popular-course-img text-center">
                      <img src="{{ asset('assets/home/img/course/cpc6.jpg')}}" alt="">
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
                         <h3><a href="#">Computer Basic Startup
                            Ultricies Vitae</a>
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
             <div class="col-lg-3 col-md-4">
                <div class="yl-popular-course-img-text">
                   <div class="yl-popular-course-img text-center">
                      <img src="{{ asset('assets/home/img/course/cpc7.jpg')}}" alt="">
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
                         <h3><a href="#">Molecular & Medical Biology,
                            Biotechnology Courses</a>
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
             <div class="col-lg-3 col-md-4">
                <div class="yl-popular-course-img-text">
                   <div class="yl-popular-course-img text-center">
                      <img src="{{ asset('assets/home/img/course/cpc8.jpg')}}" alt="">
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
                         <h3><a href="#">Introduction Environmental
                            Science </a>
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
             </div> --}}
          </div>
          <div class="yl-course-pagination text-center ul-li">
             <ul>
               {{ $colleges->links() }}
               
             </ul>
          </div>
       </div>
    </div>
  </div>
</section>
@endsection

@extends('layouts.app')
@section('content')
@php
$fullCurrentUrl = url()->full();
@endphp
<section id="course-page-course" class="course-page-course-section">
   <div class="container mt-5">
      <div class="course-page-course-content">
         <div class="course-page-course-content-top">
            @include('user_neet_colleges._show_top_filter')
         </div>
      </div>
      <div class="course-page-courses-item">
         <div class="row mb-3">
            @include('user_neet_colleges._show_selected_filter')
         </div>
         <div class="row">
            <div class="col-md-3">
               @include('user_neet_colleges._show_left_filter')
            </div>
            <div class="col-md-9">
               <div class="row">
                  @foreach($colleges as $key => $college)
                  <div class="col-lg-4 col-md-6">
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
            </div>
         </div>
      </div>
      <div class="yl-course-pagination text-center ul-li">
         <ul>
            {{ $colleges->appends(request()->except('page'))->links() }}
         </ul>
      </div>
   </div>
   </div>
   </div>
</section>
@endsection
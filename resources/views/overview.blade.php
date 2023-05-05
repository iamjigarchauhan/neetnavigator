@extends('layouts.app')
@section('content')
<section id="yl-popular-course" class="yl-popular-course-section">
  <div class="container">
  </div>
</section>
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

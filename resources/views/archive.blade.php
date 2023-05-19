@extends('layouts.app') @section('content')
<section id="yl-breadcrumb" class="yl-breadcrumb-section position-relative" data-background="{{ asset('assets/home/img/banner/bn-bg1.jpg')}}">
  <span class="breadcrumb-overlay position-absolute"></span>
  <div class="container">
     <div class="yl-breadcrumb-content text-center yl-headline"> 
        <h2>Events</h2>
        <div class="yl-breadcrumb-item ul-li">
           <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('home')}}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Events</li>
         </ul>
      </div>
   </div>
</div>
</section>
<section id="yl-blog-feed" class="yl-blog-feed-section">
  <div class="container">
    <div class="row">
      <div class="col-lg-9">
          <div class="blog-feed-content-wrap">
              <div class="row justify-content-center">
                @foreach ($events as $item)
                <div class="col-lg-6 col-md-6">
                    <div class="yl-blog-img-text-2 yl-headline pera-content">
                      <div class="yl-blog-img-2 position-relative">
                          <div class="yl-blog-img-warap-2 position-relative">
                            <img src="{{ asset("assets/home/img/blg-2.4.jpg")}}" alt="">
                          </div>
                          <div class="yl-blog-date-2 text-center">
                            <a href="#">{{ date('d', strtotime($item->published_at)) }}<span>{{ date('M / y', strtotime($item->published_at)) }}</span></a>
                          </div>
                      </div>
                      <div class="yl-blog-text-2">
                          <div class="yl-blog-meta-2 text-uppercase">
                            <a href="#">BY admin</a>
                            {{-- <a href="#">0 comments</a> --}}
                          </div>
                          <div class="yl-blog-title-text-2">
                              <h3><a href="{{ route('single',['slug'=>$item->slug])}}">{{ $item->title ?? '' }}</a>
                              </h3>
                              <p> {{ print( strip_tags(substr($item->content,0, 200)) ?? '')}}
                              </p>
                              <a class="yl-blog-more text-uppercase" href="{{ route('single',['slug'=>$item->slug])}}">Read more <span>+</span></a>
                            </div>
                      </div>
                    </div>
                </div>
                @endforeach
              </div>
          </div>
      </div>
      @include('sections.blog_sidebar')
</div>
</section>
@endsection
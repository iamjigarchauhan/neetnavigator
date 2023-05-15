@extends('layouts.app') @section('content')
<section id="yl-breadcrumb" class="yl-breadcrumb-section position-relative" data-background="{{ asset('assets/home/img/banner/bn-bg1.jpg')}}">
  <span class="breadcrumb-overlay position-absolute"></span>
  <div class="container">
     <div class="yl-breadcrumb-content text-center yl-headline"> 
        <h2>Events</h2>
        <div class="yl-breadcrumb-item ul-li">
           <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('home')}}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Blog</li>
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
                            <a href="#">{{ date('d', strtotime($item->created_at)) }}<span>{{ date('M / y', strtotime($item->created_at)) }}</span></a>
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
                              <p>{{ $item->description ?? '' }}
                              </p>
                              <a class="yl-blog-more text-uppercase" href="#">Read more <span>+</span></a>
                          </div>
                      </div>
                    </div>
                </div>
                @endforeach
              </div>
          </div>
      </div>
      <div class="col-lg-3">
        <div class="yl-blog-sidebar">
           <div class="yl-blog-widget-wrap">
              <div class="yl-search-widget position-relative">
                 <form action="#" method="post">
                    <input type="text" placeholder="Search">
                    <button type="submit"><i class="fas fa-search"></i></button>
                 </form>
              </div>
           </div>
           <div class="yl-blog-widget-wrap">
              <div class="yl-category-widget yl-headline ul-li-block position-relative">
                 <h3 class="widget-title">Category</h3>
                 <ul>
                    <li><a href="#">Web Design</a></li>
                    <li><a href="#">Creative Design</a></li>
                    <li><a href="#">Development</a></li>
                    <li><a href="#">Sports</a></li>
                    <li><a href="#">Musics</a></li>
                    <li><a href="#">Creative Skills</a></li>
                    <li><a href="#">Sales & Marketing</a></li>
                 </ul>
              </div>
           </div>
           {{-- <div class="yl-blog-widget-wrap">
              <div class="yl-recent-blog-widget clearfix">
                 <h3 class="widget-title">Recent Posts</h3>
                 <div class="yl-recent-blog-img-text">
                    <div class="yl-recent-blog-img float-left">
                       <img src="assets/img/blg-rc1.jpg" alt="">
                    </div>
                    <div class="yl-recent-blog-text">
                       <span>Dec 12, 2020</span>
                       <h3><a href="#">Python Bootcamp
                       Zero to Hero</a></h3>
                    </div>
                 </div>
                 <div class="yl-recent-blog-img-text">
                    <div class="yl-recent-blog-img float-left">
                       <img src="assets/img/blg-rc2.jpg" alt="">
                    </div>
                    <div class="yl-recent-blog-text">
                       <span>Dec 12, 2020</span>
                       <h3><a href="#">Python Bootcamp
                       Zero to Hero</a></h3>
                    </div>
                 </div>
                 <div class="yl-recent-blog-img-text">
                    <div class="yl-recent-blog-img float-left">
                       <img src="assets/img/blg-rc3.jpg" alt="">
                    </div>
                    <div class="yl-recent-blog-text">
                       <span>Dec 12, 2020</span>
                       <h3><a href="#">Python Bootcamp
                       Zero to Hero</a></h3>
                    </div>
                 </div>
              </div>
           </div>
           <div class="yl-blog-widget-wrap">
              <div class="yl-blog-category-widget">
                 <h3 class="widget-title">Popular Tags</h3>
                 <div class="yl-blog-category-tag ul-li">
                    <a href="#">Design</a>
                    <a href="#">Development</a>
                    <a href="#">Photoshop</a>
                    <a href="#">Graphcis</a>
                    <a href="#">Management</a>
                    <a href="#">Web</a>
                 </div>
              </div>
           </div> --}}
        </div>
      </div>
</div>
</section>
@endsection
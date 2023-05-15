@extends('layouts.app') @section('content')
<section id="yl-breadcrumb" class="yl-breadcrumb-section position-relative" data-background="{{ asset('assets/home/img/banner/bn-bg1.jpg')}}">
  <span class="breadcrumb-overlay position-absolute"></span>
  <div class="container">
     <div class="yl-breadcrumb-content text-center yl-headline"> 
        <h2>{{ $blog->title }}</h2>
        <div class="yl-breadcrumb-item ul-li">
           <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('home')}}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Events</li>
         </ul>
      </div>
   </div>
</div>
</section>
<!-- End of breadcrumb section
============================================= -->

<!-- Start of blog details content section
============================================= -->
<section id="yl-blog-details" class="yl-blog-details-section">
  <div class="container">
     <div class="row">
        <div class="col-lg-9">
           <div class="yl-blog-details-content">
              <div class="yl-blog-details-wrap">
                 <div class="yl-blog-details-thumb">
                    <img src="assets/img/blg-th1.jpg" alt="">
                 </div>
                 <div class="yl-blog-details-text yl-headline">
                    <div class="yl-blog-meta-2 text-uppercase">
                       <a href="#">BY admin</a>
                       <a href="#">{{ date('F d, Y', strtotime($blog->created_at)) }}</a>
                       {{-- <a href="#">0 comments</a> --}}
                    </div>
                    <article>
                       {{! print($blog->content) }}
                    </article>
                    {{-- <div class="yl-post-cat-share clearfix">
                       <div class="yl-post-cat-wrap float-left">
                          <a href="#">Design</a>
                          <a href="#">Development</a>
                       </div>
                       <div class="yl-blog-list-share float-right">
                          <span class="blog-share-slug text-uppercase">Share</span>
                          <a href="#"><i class="fab fa-facebook-f"></i></a>
                          <a href="#"><i class="fab fa-twitter"></i></a>
                          <a href="#"><i class="fab fa-behance"></i></a>
                       </div>
                    </div> --}}
                 </div>
              </div>
              {{-- <div class="yl-blog-details-next-prev-wrap">
                 <div class="yl-blog-details-next-prev-item yl-headline">
                    <div class="yl-blog-next-prev-title">
                       <a href="#"> <i class="fas fa-chevron-left"></i> Prev Post</a>
                    </div>
                    <h3><a href="#">Learn your desired skill any time from any where</a></h3>
                 </div>
                 <div class="yl-blog-details-next-prev-item text-right yl-headline">
                    <div class="yl-blog-next-prev-title">
                       <a href="#"> Next Post <i class="fas fa-chevron-right"></i> </a>
                    </div>
                    <h3><a href="#">Your skill is your best friend to make a better career</a></h3>
                 </div>
              </div> --}}
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
              <div class="yl-blog-widget-wrap">
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
              </div>
           </div>
        </div>
     </div>
  </div>
</section>   
@endsection
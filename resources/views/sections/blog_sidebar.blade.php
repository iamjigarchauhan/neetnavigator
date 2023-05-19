<div class="col-lg-3">
   @isset($blog)
   <div class="yl-event-widget ul-li yl-headline">
      <h3 class="widget-title">Event Details</h3>
      <div class="event-details-widget-item">
         <div class="ed-inner-widget">
            <div class="ed-inner-title"><i class="fas fa-calendar-alt"></i> Date:</div>
            <span>{{ $blog->published_at }}</span>
         </div>
         <div class="ed-inner-widget">
            <div class="ed-inner-title"><i class="fas fa-clock"></i> Time:</div>
            <span>{{ $blog->from_time }} to {{ $blog->to_time }}</span>
         </div>
         <div class="ed-inner-widget">
            <div class="ed-inner-title"><i class="fas fa-map-marker-alt"></i> Location:</div>
            <span>{{ $blog->location }}</span>
         </div>
         <div class="ed-inner-widget">
            <div class="ed-inner-title"><i class="fas fa-dollar-sign"></i> Fees:</div>
           {{-- Free</b> --}}
           <b>{{ $blog->fee == 0 ? 'Free' : $blog->from_time  }}</b>
         </div>
      </div>
   </div>
   @endisset

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
          @php
            $blog_categories = \App\Models\BlogCategory::take(4)->get();
          @endphp

           <ul>
            @foreach ($blog_categories as $item)
                <li><a href="#">{{ $item->name }}</a></li>
            @endforeach
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
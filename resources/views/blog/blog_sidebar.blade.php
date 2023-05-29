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
           @php
            $blog_categories = \App\Models\BlogCategory::take(4)->get();
           @endphp
           <ul>
           @foreach ($blog_categories as $item)
                <li><a href="{{ route('blog.category',$item->slug)}}">{{ $item->name }}</a></li>
           @endforeach
           </ul>
        </div>
      </div>     
  </div>
</div>
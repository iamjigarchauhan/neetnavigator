@extends('layouts.app')
@section('seo')
<title>Meta Tags — Preview, Edit and Generate</title>
<meta name="title" content="Meta Tags — Preview, Edit and Generate">
<meta name="description" content="With Meta Tags you can edit and experiment with your content then preview how your webpage will look on Google, Facebook, Twitter and more!">

<!-- Open Graph / Facebook -->
<meta property="og:type" content="blog">
<meta property="og:url" content="{{ route('single',['slug'=>$blog->slug])}}">
<meta property="og:title" content="Meta Tags — Preview, Edit and Generate">
<meta property="og:description" content="With Meta Tags you can edit and experiment with your content then preview how your webpage will look on Google, Facebook, Twitter and more!">
<meta property="og:image" content="https://metatags.io/assets/meta-tags-16a33a6a8531e519cc0936fbba0ad904e52d35f34a46c97a2c9f6f7dd7d336f2.png">

<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="{{ route('single',['slug'=>$blog->slug])}}">
<meta property="twitter:title" content="Meta Tags — Preview, Edit and Generate">
<meta property="twitter:description" content="With Meta Tags you can edit and experiment with your content then preview how your webpage will look on Google, Facebook, Twitter and more!">
<meta property="twitter:image" content="https://metatags.io/assets/meta-tags-16a33a6a8531e519cc0936fbba0ad904e52d35f34a46c97a2c9f6f7dd7d336f2.png">
@endsection
@section('styles')
<link 
  href="https://cdn.jsdelivr.net/npm/shareon@2/dist/shareon.min.css"
  rel="stylesheet"
>@endsection
@section('content')
<section id="yl-breadcrumb" class="yl-breadcrumb-section position-relative" data-background="{{ asset('assets/home/img/banner/bn-bg1.jpg')}}">
  <span class="breadcrumb-overlay position-absolute"></span>
  <div class="container">
     <div class="yl-breadcrumb-content text-center yl-headline"> 
        <h2>{{ $blog->title }}</h2>
        <div class="yl-breadcrumb-item ul-li">
           <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('home')}}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ route('blogs')}}">Blogs</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ $blog->title}}</li>
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
                    {{-- <img src="assets/img/blg-th1.jpg" alt=""> --}}
                    @if($blog->hasMedia('Featured')) 
                    <img src="{{$blog->firstMedia('Featured')->getUrl()}}" alt="{{$blog->title}}">
                    @endif

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
                    <div class="yl-post-cat-share clearfix">
                       {{-- <div class="yl-post-cat-wrap float-left">
                          <a href="#">Design</a>
                          <a href="#">Development</a>
                       </div> --}}
                       <div class=" yl-blog-list-share float-right">
                          <span class="blog-share-slug text-uppercase">Share</span>
                          <div class="shareon">
                           <a class="messenger" href="#"></a>
                           <a class="twitter" href="#"></a>
                           <a class="reddit" href="#"></a>
                           {{-- <a class="linkedin" href="#"></a> --}}
                           <a class="whatsapp" href="#"></a>
                           <a class="telegram" href="#"></a>
                           <a class="pinterest" href="#"></a>
                           <a class="copy-url" href="#"></a>
                           </div>
                       </div>
                    </div>
                 </div>
              </div>
           </div>
        </div>
        @include('blog.blog_sidebar',['blog' => $blog])
     </div>
  </div>
</section>   
@endsection
@section('scripts')
<script
  src="https://cdn.jsdelivr.net/npm/shareon@2/dist/shareon.iife.js"
  defer
  init
></script>
<script>

Shareon.init();
</script>
@endsection
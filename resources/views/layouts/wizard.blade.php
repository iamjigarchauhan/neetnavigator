<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>{{ (isset($pageTitle) ? __($pageTitle) : env('APP_NAME')) }}</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="neetnavigator.com">
  <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
  <link rel="stylesheet" href="{{ asset('assets/wizard/style.css')}}">
  <meta name="robots" content="noindex, follow">
  {{-- <script nonce="72a527c4-a4ad-44d2-8178-ffe856767334">
    (function(w,d){!function(dk,dl,dm,dn){dk[dm]=dk[dm]||{};dk[dm].executed=[];dk.zaraz={deferred:[],listeners:[]};dk.zaraz.q=[];dk.zaraz._f=function(dp){return function(){var dq=Array.prototype.slice.call(arguments);dk.zaraz.q.push({m:dp,a:dq})}};for(const dr of["track","set","debug"])dk.zaraz[dr]=dk.zaraz._f(dr);dk.zaraz.init=()=>{var ds=dl.getElementsByTagName(dn)[0],dt=dl.createElement(dn),du=dl.getElementsByTagName("title")[0];du&&(dk[dm].t=dl.getElementsByTagName("title")[0].text);dk[dm].x=Math.random();dk[dm].w=dk.screen.width;dk[dm].h=dk.screen.height;dk[dm].j=dk.innerHeight;dk[dm].e=dk.innerWidth;dk[dm].l=dk.location.href;dk[dm].r=dl.referrer;dk[dm].k=dk.screen.colorDepth;dk[dm].n=dl.characterSet;dk[dm].o=(new Date).getTimezoneOffset();if(dk.dataLayer)for(const dy of Object.entries(Object.entries(dataLayer).reduce(((dz,dA)=>({...dz[1],...dA[1]})))))zaraz.set(dy[0],dy[1],{scope:"page"});dk[dm].q=[];for(;dk.zaraz.q.length;){const dB=dk.zaraz.q.shift();dk[dm].q.push(dB)}dt.defer=!0;for(const dC of[localStorage,sessionStorage])Object.keys(dC||{}).filter((dE=>dE.startsWith("_zaraz_"))).forEach((dD=>{try{dk[dm]["z_"+dD.slice(7)]=JSON.parse(dC.getItem(dD))}catch{dk[dm]["z_"+dD.slice(7)]=dC.getItem(dD)}}));dt.referrerPolicy="origin";dt.src="/cdn-cgi/zaraz/s.js?z="+btoa(encodeURIComponent(JSON.stringify(dk[dm])));ds.parentNode.insertBefore(dt,ds)};["complete","interactive"].includes(dl.readyState)?zaraz.init():dk.addEventListener("DOMContentLoaded",zaraz.init)}(w,d,"zarazData","script");})(window,document);
  </script> --}}
</head>
<body>
    <!-- Main Wrapper -->
    <div class="header-fixed">
        <a href="#" class="navbar-brand logo">
            <img src="{{asset('assets/img/logo.png')}}" class="img-fluid" alt="Logo">
        </a>
    </div>
    <div class="main-wrapper">
      
        {{-- include header --}}
        {{-- @include('sections.header') --}}

        @yield('content')
        {{-- include footer --}}
        {{-- @include('sections.footer') --}}
        @yield('scripts')
    </div>
</body>

</html>
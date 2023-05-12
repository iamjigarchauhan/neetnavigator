<header id="yl-header" class="yl-header-main header-style-two">
  <div class="container">
    <div class="yl-header-content clearfix">
      <div class="yl-brand-logo float-left"><a href="{{ route('home')}}"><img style="max-height: 50px" src="{{asset('assets/img/logo.png')}}" alt=""></a>
      </div>
      <div class="yl-main-nav-wrap">
        <nav class="yl-main-navigation float-left ul-li">
          <ul id="main-nav" class="navbar-nav text-capitalize clearfix">
            <li class="dropdown">
              <a href="{{ route('home')}}">Home</a>
            </li>
            <li class="dropdown">
              <a href="{{ route('overview')}}">Overview</a>
            </li>
            <li class="dropdown">
              <a href="{{ route('services')}}">Services</a>
            </li>
            <li class="dropdown">
              <a href="{{ route('contact')}}">Contact</a>
            </li>
            @auth
            <li class="dropdown">
                    <a href="{{ route('neet-college.user.index')}}">Predict </a>
            </li>
            <li class="dropdown float-right">
              <a href="#"><i class="fas fa-user"></i></a>
              <ul class="dropdown-menu clearfix">
                <li><a href="{{ route('neet-college.profile') }}">Profile</a></li>
                <li><a href="{{ route('signout') }}">Logout</a></li>
                {{-- <li><a target="_blank" href="instructor-details.html">Instructor Details</a></li> --}}
              </ul>
            </li>
            @else
            <li class="dropdown">
              <a href="{{ route('register-user')}}">Sign up</a>
            </li>
            @endauth
          </ul>
        </nav>
        <div class="yl-mobile-menu-wrap">
          <div class="yl-mobile_menu position-relative">
            <div class="yl-mobile_menu_button yl-open_mobile_menu">
              <i class="fas fa-bars"></i>
            </div>
            <div class="yl-mobile_menu_wrap">
              <div class="mobile_menu_overlay yl-open_mobile_menu"></div>
              <div class="yl-mobile_menu_content">
                <div class="yl-mobile_menu_close yl-open_mobile_menu">
                  <i class="fas fa-times"></i>
                </div>
                <div class="m-brand-logo text-center">
                  <a href="#"><img src="assets/img/logo/logo4.png" alt=""></a>
                </div>
                <nav class="yl-mobile-main-navigation  clearfix ul-li">
                  <ul id="m-main-nav" class="navbar-nav text-capitalize clearfix">
                    <li class="dropdown">
                      <a href="{{ route('home')}}">Home</a>
                    </li>
                    <li class="dropdown">
                      <a href="{{ route('overview')}}">Overview</a>
                    </li>
                    {{-- <li class="dropdown">
                      <a href="{{ route('services')}}">Services</a>
                    </li> --}}
                    <li class="dropdown">
                      <a href="{{ route('contact')}}">Contact</a>
                    </li>
                    @auth
                    <li class="dropdown float-right">
                      <a href="#"><i class="fas fa-user"></i></a>
                      <ul class="dropdown-menu clearfix">
                        <li><a href="{{ url('neet-college.index') }}">Profile</a></li>
                        <li><a href="{{ route('signout') }}">Logout</a></li>
                      </ul>
                    </li>
                    @else
                    <li class="dropdown">
                      <a href="{{ route('register-user')}}">Sign Up</a>
                    </li>
                    @endauth
                  </ul>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>
<!-- Header -->
<header class="header">
    <div class="header-fixed">
        <nav class="navbar navbar-expand-lg header-nav">
            <div class="navbar-header">
                <a id="mobile_btn" href="javascript:void(0);">
                    <span class="bar-icon">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                </a>
                <a href="/" class="navbar-brand logo">
                    <img src="{{asset('assets/img/logo.png')}}" class="img-fluid" alt="Logo">
                </a>
            </div>
            <div class="main-menu-wrapper">
                <div class="menu-header">
                    <a href="/" class="menu-logo">
                        <img src="{{asset('assets/img/logo.png')}}" class="img-fluid" alt="Logo">
                    </a>
                    <a id="menu_close" class="menu-close" href="javascript:void(0);">
                        <i class="fas fa-times"></i>
                    </a>
                </div>
                <ul class="main-nav">
                    <li class="@if(request()->is('home')) active @endif">
                        <a href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="@if(request()->is('overview')) active @endif">
                        <a href="{{ route('overview') }}">Overview</a>
                    </li>
                    <li class="@if(request()->is('services')) active @endif">
                        <a href="{{ route('services') }}">Services</a>
                    </li>
                    <li class="@if(request()->is('login') || request()->is('register') || request()->is('neet-college/user') || request()->is('neet-college/list')) active @endif">
                        <a href="{{ route('register-user') }}">Student Account</a>
                    </li>
                    <li class="@if(request()->is('contact')) active @endif">
                        <a href="{{ route('contact') }}">Contact</a>
                    </li>
                    @guest
                    @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('signout') }}">Logout</a>
                    </li>
                    @endguest
                </ul>
            </div>
            <ul class="nav header-navbar-rht d-none">
                <li class="nav-item">
                    <a class="nav-link @if(request()->is('overview')) header-login @endif" href="{{ route('overview') }}">Overview</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if(request()->is('services')) header-login @endif" href="{{ route('services') }}">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if(request()->is('login') || request()->is('register') || request()->is('neet-college/user')) header-login @endif" href="{{ route('register-user') }}">Student Account</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if(request()->is('contact')) header-login @endif" href="{{ route('contact') }}">Contact</a>
                </li>
                @guest
                @else
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('signout') }}">Logout</a>
                </li>
                @endguest
            </ul>
        </nav>
    </div>
</header>
<!-- /Header -->
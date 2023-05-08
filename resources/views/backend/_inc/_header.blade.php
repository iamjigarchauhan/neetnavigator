@php
$logo = App\Models\Setting::where('key','logo')->first();
$logoicon = App\Models\Setting::where('key','logo')->first();
@endphp
<nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
    <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
      <a class="navbar-brand brand-logo" href="#"><img src="{{ $logo !='' ? 'data:image/png;base64,'.$logo->value : asset('assets/img/logo.png') }}" class="mr-2" alt="logo"></a>
      <a class="navbar-brand brand-logo-mini" href="#"><img src="{{ $logoicon !='' ? 'data:image/png;base64,'.$logoicon->value : asset('assets/img/logo-icon.png') }}" alt="logo"></a>
    </div>
    <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
      <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
        <span class="icon-menu"></span>
      </button>
      <ul class="navbar-nav navbar-nav-right">
        <li class="nav-item nav-profile dropdown">
          <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
            <img src="https://ui-avatars.com/api/?name={{ auth()->user()->name }}" alt="profile">
          </a>
          <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
            @auth('admin')
            <a class="dropdown-item" title="Logout" href="{{ route('admin.logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
                <i class="ti-power-off text-primary"></i> Logout
            </a>
            @endauth
          </div>
        </li>
      </ul>
    </div>
</nav>
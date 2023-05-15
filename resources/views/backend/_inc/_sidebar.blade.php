<nav class="sidebar sidebar-offcanvas" id="sidebar">
  @auth('admin')
  <ul class="nav">
    <li class="nav-item">
      <a class="nav-link" href="{{ route('admin.dashboard')}}">
        <i class="icon-grid menu-icon"></i>
        <span class="menu-title">Dashboard</span>
      </a>
    </li>
    {{-- <li class="nav-item">
      <a class="nav-link" href="{{ route('admin.settings')}}">
        <i class="icon-cog menu-icon"></i>
        <span class="menu-title">Settings</span>
      </a>
    </li> --}}
    <li class="nav-item">
      <a class="nav-link" href="{{ route('admin.students')}}">
        <i class="icon-menu menu-icon"></i>
        <span class="menu-title">Students</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
        <i class="icon-layout menu-icon"></i>
        <span class="menu-title">Events</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="ui-basic">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="{{ route('admin.blogs')}}">Manage</a></li>
          <li class="nav-item"> <a class="nav-link" href="{{ route('admin.categories')}}">Categories</a></li>
         </ul>
      </div>
    </li>
    {{-- <li class="nav-item">
      <a class="nav-link" href="">
        <i class="icon-clock menu-icon"></i>
        <span class="menu-title">Events</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="">
        <i class="icon-ribbon menu-icon"></i>
        <span class="menu-title">Categories</span>
      </a>
    </li> --}}
    {{-- <li class="nav-item">
      <a class="nav-link" href="{{ route('admin.profile')}}">
        <i class="icon-head menu-icon"></i>
        <span class="menu-title">Profile</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ route('admin.change-password')}}">
        <i class="icon-lock menu-icon"></i>
        <span class="menu-title">Change Password</span>
      </a>
    </li> --}}
  </ul>
  @endauth
</nav>
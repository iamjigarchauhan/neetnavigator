<nav class="sidebar sidebar-offcanvas" id="sidebar">
    @auth('admin')
    <ul class="nav">
      <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.dashboard')}}">
          <i class="icon-grid menu-icon"></i>
          <span class="menu-title">Dashboard</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.settings')}}">
          <i class="icon-cog menu-icon"></i>
          <span class="menu-title">Settings</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.students')}}">
          <i class="icon-menu menu-icon"></i>
          <span class="menu-title">Students</span>
        </a>
      </li>
      <li class="nav-item">
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
      </li>
    </ul>
    @endauth
</nav>
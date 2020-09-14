<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <button type="button" id="sidebarCollapse" class="btn btn-info">
      <i class="fas fa-align-left"></i>
      <span></span>
    </button>
    <div class="navbar-collapse" id="navbarSupportedContent">
      <ul class="nav navbar-nav ml-auto">
        <li class="nav-item">
          <div class="dropdown">
            <img class="admin-img" src="{{asset('images/dashboard-01.jpg')}}">
            <a class="dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown">
              Hi, <span class="bg-admin">Admin</span>
            </a>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="{{route('admin.updateProfile')}}"><i class="fa fa-user" aria-hidden="true"></i> My Profile</a>
                <a class="dropdown-item" href="{{route('admin.changePassword')}}"><i class="fa fa-user" aria-hidden="true"></i> Change Password</a>
              <a class="dropdown-item" href="{{route('admin.logout')}}"><i class='fas fa-sign-out-alt'></i> Sign Out</a>
            </div>
          </div>
        </li>
      </ul>
    </div>
  </div>
</nav>

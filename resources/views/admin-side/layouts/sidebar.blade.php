<nav class="topnav navbar navbar-light">
    <button type="button" class="navbar-toggler text-muted mt-2 p-0 mr-3 collapseSidebar">
      <i class="fe fe-menu navbar-toggler-icon"></i>
    </button>
    <ul class="nav">
      <li class="nav-item nav-notif">
        <a class="nav-link text-muted my-2" style="padding-right: 0px;">
           <span style="color: black;"> <p>Hello, <b>{{Auth::user()->name}}</b> </p></span>
        </a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle text-muted pr-0" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <span class="avatar avatar-sm mt-2">
            <img src="{{asset('template/img/team-1.jpg')}}" alt="..." class="avatar-img rounded-circle">
          </span>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
          <form method="POST" action="{{ route('logout') }}">
            @csrf
            <a class="dropdown-item" href="{{route('logout')}}" onclick="event.preventDefault(); this.closest('form').submit();">
              <i class="fe fe-log-out fe-16"></i>
              Logout
            </a>
        </form>
          
        </div>
      </li>
    </ul>
  </nav>
<aside class="sidebar-left border-right bg-white shadow" id="leftSidebar" data-simplebar>
    <a href="#" class="btn collapseSidebar toggle-btn d-lg-none text-muted ml-2 mt-3" data-toggle="toggle">
      <i class="fe fe-x"><span class="sr-only"></span></i>
    </a>
    <nav class="vertnav navbar navbar-light">
      <!-- nav bar -->
      <div class="w-100 mb-4 d-flex">
        <a class="navbar-brand mx-auto mt-2 flex-fill text-center" href="#">
          <svg version="1.1" id="logo" class="navbar-brand-img brand-sm" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 120 120" xml:space="preserve">
            <g>
              <polygon class="st0" points="78,105 15,105 24,87 87,87 	" />
              <polygon class="st0" points="96,69 33,69 42,51 105,51 	" />
              <polygon class="st0" points="78,33 15,33 24,15 87,15 	" />
            </g>
          </svg>
          {{-- <img src="{{asset('template/img/team-1.jpg')}}" width="100px" height="auto" alt=""> --}}
        </a>
      </div>
      <ul class="navbar-nav flex-fill w-100 mb-2">
        <li class="nav-item dropdown">
          <a href="#dashboard" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
            <i class="fe fe-home fe-16"></i>
            <span class="ml-3 item-text">Dashboard</span><span class="sr-only">(current)</span>
          </a>
          <ul class="collapse list-unstyled pl-4 w-100" id="dashboard">
            <li class="nav-item">
              <a class="nav-link pl-3" href="#"><span class="ml-1 item-text">Analytics</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link pl-3" href="#"><span class="ml-1 item-text">Saas Dashboard</span></a>
            </li>
          </ul>
        </li>
      </ul>
      <p class="text-muted nav-heading mt-4 mb-1">
        <span>Feature</span>
      </p>
      <ul class="navbar-nav flex-fill w-100 mb-2">
        <li class="nav-item dropdown">
          <a href="#ui-elements" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
            <i class="fe fe-sun fe-16"></i>
            <span class="ml-3 item-text">Articles</span>
          </a>
          <ul class="collapse list-unstyled pl-4 w-100" id="ui-elements">
            <li class="nav-item">
              <a class="nav-link pl-3" href="{{route('admin.article.add')}}"><span class="ml-1 item-text">New</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link pl-3" href="{{route('admin.article.table')}}"><span class="ml-1 item-text">Article Table</span></a>
            </li>
          </ul>
        </li>
        <li class="nav-item w-100">
          <a class="nav-link" href="{{route('admin.idea')}}">
            <i class="fe fe-sunrise fe-16"></i>
            <span class="ml-3 item-text">Ideas</span>
            <span class="badge badge-pill badge-primary">New</span>
          </a>
        </li>
        <li class="nav-item w-100">
          <a class="nav-link" href="{{route('admin.resume')}}">
            <i class="fe fe-sunset fe-16"></i>
            <span class="ml-3 item-text">Resume</span>
            <span class="badge badge-pill badge-primary">New</span>
          </a>
        </li> 
      </ul>

    </nav>
</aside>
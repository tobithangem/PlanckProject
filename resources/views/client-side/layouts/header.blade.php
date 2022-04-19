<!-- Header -->
<header id="header" class="@yield('header-not-home')">
    @yield('extend-header')

    <div class="container">

      <div class="logo float-left">
        <!-- Uncomment below if you prefer to use an image logo -->
        <h1 class="text-light"><a href="#intro" class="scrollto"><span>Planck</span></a></h1>
        <!-- <a href="#header" class="scrollto"><img src="img/logo.png" alt="" class="img-fluid"></a> -->
      </div>

      <nav class="main-nav float-right d-none d-lg-block">
        <ul>
          <li class="@yield('home')"><a href="{{route('client-side.home')}}">Home</a></li>
          <li class="@yield('about')"><a href="{{route('client-side.about')}}">About</a></li>
          <li class="@yield('services')"><a href="{{route('client-side.services')}}">Services</a></li>
          <li class="@yield('careers')"><a href="{{route('client-side.careers')}}">Careers</a></li>
          <li class="@yield('contact')"><a href="{{route('client-side.contact')}}">Contact</a></li>
        </ul>
      </nav><!-- .main-nav -->
      
    </div>
</header>
<!-- End Header -->
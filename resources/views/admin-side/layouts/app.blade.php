<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="favicon.ico">
    <title>Planck Admin</title>
    <!-- Simple bar CSS -->
    <link rel="stylesheet" href="{{asset('template/css/simplebar.css')}}">
    <!-- Fonts CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Overpass:ital,wght@0,100;0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- Icons CSS -->
    <link rel="stylesheet" href="{{asset('template/css/feather.css')}}">

    <!-- Bootstrap CSS File -->
    <link rel="stylesheet" href="{{asset('template/css/dataTables.bootstrap4.css')}}">
    <!-- App CSS -->
    <link rel="stylesheet" href="{{asset('template/css/app-light.css')}}" id="lightTheme">
    <link href="{{asset('css/select2.min.css')}}" rel="stylesheet" />
    {{-- <link href="{{asset('template/lib/bootstrap/css/bootstrap.css')}}" rel="stylesheet" /> --}}
    

  </head>
  
  <body>
    <div class="vertical light">
        <div class="wrapper">
            @include('admin-side.layouts.sidebar')

            @yield('content')
          </div>
    </div>

    <script src="{{asset('template/js/jquery.min.js')}}"></script>
    <script src="{{asset('template/js/popper.min.js')}}"></script>
    <script src="{{asset('template/js/moment.min.js')}}"></script>
    <script src="{{asset('template/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('template/js/simplebar.min.js')}}"></script>
    <script src="{{asset('template/js/daterangepicker.js')}}"></script>
    <script src="{{asset('template/js/jquery.stickOnScroll.js')}}"></script>
    <script src="{{asset('template/js/tinycolor-min.js')}}"></script>
    <script src="{{asset('template/js/apps.js')}}"></script>
    <script src="{{asset('template/js/config.js')}}"></script>
    <script src="{{asset('js/select2.min.js')}}"></script>
    <script src="{{asset('template/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('temlate/js/dataTables.bootstrap4.min.js')}}"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->

    <!-- Select2 -->
    <script>
      $(document).ready(function(){
        var datax = ["Technology", "Math", "Biology"];
        $("#select2_multiple").select2({
          data:datax
        })
      });
    </script>

  </body>
</html>
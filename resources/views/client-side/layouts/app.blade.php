<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Planck Project</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="{{asset('template/img/favicon.png')}}" rel="icon">
  <link href="{{asset('template/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,500,600,700,700i|Montserrat:300,400,500,600,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="{{asset('template/lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="{{asset('template/lib/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
  <link href="{{asset('template/lib/animate/animate.min.css')}}" rel="stylesheet">
  <link href="{{asset('template/lib/ionicons/css/ionicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('template/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
  <link href="{{asset('template/lib/lightbox/css/lightbox.min.css')}}" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="{{asset('template/css/style.css')}}" rel="stylesheet">
  <link href="{{asset('css/style.css')}}" rel="stylesheet">
  <link href="{{asset('css/timeline.css')}}" rel="stylesheet">

</head>

<body>
    <!-- Header -->
    @include('client-side.layouts.header')

    @yield('content')

    <!-- Footer -->
    @include('client-side.layouts.footer')

  <!-- JavaScript Libraries -->
  <script src="{{asset('template/lib/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('template/lib/jquery/jquery-migrate.min.js')}}"></script>
  <script src="{{asset('template/lib/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('template/lib/easing/easing.min.js')}}"></script>
  <script src="{{asset('template/lib/mobile-nav/mobile-nav.js')}}"></script>
  <script src="{{asset('template/lib/wow/wow.min.js')}}"></script>
  <script src="{{asset('template/lib/waypoints/waypoints.min.js')}}"></script>
  <script src="{{asset('template/lib/counterup/counterup.min.js')}}"></script>
  <script src="{{asset('template/lib/owlcarousel/owl.carousel.min.js')}}"></script>
  <script src="{{asset('template/lib/isotope/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('template/lib/lightbox/js/lightbox.min.js')}}"></script>
  <!-- Contact Form JavaScript File -->
  <script src="{{asset('template/contactform/contactform.js')}}"></script>

  <!-- Template Main Javascript File -->
  <script src="{{asset('template/js/main.js')}}"></script>
  <script>
    // Add the following code if you want the name of the file appear on select
    $(".custom-file-input").on("change", function() {
      var fileName = $(this).val().split("\\").pop();
      $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
    });
    </script>

</body>
</html>
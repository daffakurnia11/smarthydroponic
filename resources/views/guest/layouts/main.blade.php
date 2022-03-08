<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/vendor/bootstrap5/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/vendor/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="/vendor/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="css/style.css?modify={{ date("Ymd") }}">

    <title>{{ $title }} - SMARTHYDROPONIC</title>
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-md navbar-dark">
      <div class="container">
        <a class="navbar-brand" href="/">Smarthydroponic</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link text-center {{ Request::is('/') ? 'active' : '' }}" href="/">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-center {{ Request::is('article') ? 'active' : '' }}" href="/article">Article</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-center {{ Request::is('monitoring') ? 'active' : '' }}" href="/monitoring">Monitoring</a>
            </li>
            @auth
            <li class="nav-item">
              <a class="nav-link text-center" href="/admin">Admin</a>
            </li>
            @else    
            <li class="nav-item">
              <a class="nav-link text-center" href="/login">Login</a>
            </li>
            @endauth
          </ul>
        </div>
      </div>
    </nav>
    <!-- End of Navbar -->

    @yield('content')

    <script src="/vendor/chartjs/dist/chart.min.js"></script>
    <script src="/vendor/bootstrap5/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/vendor/jquery/dist/jquery.js"></script>
    <script src="/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="js/script.js?modify={{ date("Ymd") }}"></script>
    <script>
      const swiper = new Swiper(".swiper", {
        // Optional parameters
        direction: "horizontal",
        loop: false,
        // Navigation arrows
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
        allowTouchMove: false,
      });
      $(function () {
        $(".swiper-button-prev").on("click", function () {
          if ($("#firstSlide").hasClass("swiper-slide-active")) {
            $("#firstButton").addClass("active");
          } else {
            $("#firstButton").removeClass("active");
          }
          if ($("#secondSlide").hasClass("swiper-slide-active")) {
            $("#secondButton").addClass("active");
          } else {
            $("#secondButton").removeClass("active");
          }
          if ($("#thirdSlide").hasClass("swiper-slide-active")) {
            $("#thirdButton").addClass("active");
          } else {
            $("#thirdButton").removeClass("active");
          }
        });
      });
      $(function () {
        $(".swiper-button-next").on("click", function () {
          if ($("#firstSlide").hasClass("swiper-slide-active")) {
            $("#firstButton").addClass("active");
          } else {
            $("#firstButton").removeClass("active");
          }
          if ($("#secondSlide").hasClass("swiper-slide-active")) {
            $("#secondButton").addClass("active");
          } else {
            $("#secondButton").removeClass("active");
          }
          if ($("#thirdSlide").hasClass("swiper-slide-active")) {
            $("#thirdButton").addClass("active");
          } else {
            $("#thirdButton").removeClass("active");
          }
        });
      });
    </script>
  </body>
</html>

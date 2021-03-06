<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />

  <link rel="icon" type="image/png" href="assets/img/hestia-icon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="theme-color" content="#1a3840">


  <title>
    Hestia19
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link href="assets/fonts/Hestia.css?family=Hestia-Regular" rel="stylesheet">
  <link href="assets/fonts/Galgo.css?family=Galgo" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="assets/css/material-kit.css?v=2.0.5" rel="stylesheet" />

  <link rel="stylesheet" href="assets/carousel/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="assets/carousel/assets/owl.theme.default.min.css">
  <link rel="stylesheet" href="assets/css/custom.css">
  <link rel="stylesheet" href="assets/css/main_style.css">
  <link rel="stylesheet" href="assets/loader/loader.css">
  <script src="assets/js/core/jquery.min.js" type="text/javascript"></script>
  <script src="assets/loader/loader.js" type="text/javascript"></script>
  <script type="text/javascript">
  function initmask() {
    var w = Math.max(document.documentElement.clientWidth, window.innerWidth || 0);
    if(w < 960){

      var x = document.getElementById("pcmask");
     x.setAttribute("src", "assets/img/mobile_phone_front_end.png");
    }
}
   </script>

</head>
<div id="preloader">
  <div id="status">&nbsp;</div>
</div>
  <body class="profile-page sidebar-collapse" onload="initmask()">
      <img src="assets/img/landing_mask.png" id="pcmask" data-parallax="true" style="height:100vh; width: 100%; overflow: hidden; z-index: 2; position: absolute;" alt="">
  <ul class="slideshow">
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
  </ul>

  <div style="z-index:3;">
    <nav class="navbar navbar-transparent navbar-color-on-scroll fixed-top navbar-expand-lg" color-on-scroll="100" id="sectionsNav">
      <div class="container-fluid">
        <div class="navbar-translate">

            <img style="max-height:40px;" class="mobile-show" src="assets/img/logo-inline-with-text.png">

          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only" style="color: black;">Toggle navigation</span>
            <span class="navbar-toggler-icon"></span>
            <span class="navbar-toggler-icon"></span>
            <span class="navbar-toggler-icon"></span>
          </button>

        </div>
        <div class="collapse navbar-collapse">
          <ul class="navbar-nav">
            <li class="nav-item ">
              &nbsp;&nbsp;
              &nbsp;&nbsp;
              &nbsp;&nbsp;
              &nbsp;&nbsp;
              &nbsp;&nbsp;
              &nbsp;&nbsp;
            </li>
          </ul>
          <ul class="navbar-nav mx-auto">
            <li class="nav-item fade-in">
              <a href="#" class="nav-link event-click " id="events">
                EVENTS
              </a>
            </li>
            <li class="nav-item fade-in">
              <a href="#" class="nav-link">
                SPONSORS
              </a>
            </li>
            <li class="nav-item d-none d-lg-block">
              <a class="navbar-brand my-auto" href="#">
                <img class="fade-in-top" id="loading" style="max-height: 75px;margin-top: -20px;" src="assets/img/logo.png" /></a>
            </li>
            <li class="nav-item fade-in">
              <a href="about/" class="nav-link">
                ABOUT
              </a>
            </li>
            <li class="nav-item fade-in">
              <a href="contact/" class="nav-link">
                CONTACT
              </a>
            </li>
          </ul>

          <ul class="navbar-nav">
            <li class="nav-item ">
              <a href="#" class="nav-link btn btn-outline-primary float-left " style="border-color:white; margin-left: 12%;">
                LOGIN
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container slider_text" style="z-index: 4; position: absolute;min-width:320px;">
      <h1>Hestia'19</h1>
      <h3 class="animate-right">Techno Cultural Fest</h3>
      <h3 class="animate-bottom">TKMCE Kollam</h3>
    </div>
  </div>
  <div class="container hider" style="padding-top: 115px;" id="overlay">
    <div class="overlay" id="darkbg"></div>
    <div class="owl-carousel owl-theme slide-in-bottom" id="carousel">
      <a href="technical">
      <div class="item auto-height" style="max-height:50vh;background-image: url('assets/img/technical_bg.jpg'); background-size: cover; background-position: top;box-shadow:inset 0 0 0 2000px rgba(0,0,0,0.5);"
        data-hash="technical">
        <div class="container" style="padding: 10px;position: absolute;top: 50%;left: 50%;transform: translateX(-50%) translateY(-50%);">
        <h1 class="title  event-name" style="">Technical</h1>
        </div>
      </div>
      </a>
      <a href="cultural">
      <div class="item auto-height" style="max-height:50vh;background-image: url('assets/img/cultural_bg.jpg'); background-size: cover; background-position: top;box-shadow:inset 0 0 0 2000px rgba(0,0,0,0.5);"
        data-hash="cultural">
        <div class="container" style="padding: 10px;position: absolute;top: 50%;left: 50%;transform: translateX(-50%) translateY(-50%);">
          <h1 class="title  event-name" style="">Cultural</h1>
        </div>
      </div>
      </a>
      <a href="#">
      <div class="item auto-height" style="max-height:50vh;background-image: url('assets/img/workshop_bg.jpg'); background-size: cover; background-position: top;box-shadow:inset 0 0 0 2000px rgba(0,0,0,0.5);"
        data-hash="workshops">
        <div class="container" style="padding: 10px;position: absolute;top: 50%;left: 50%;transform: translateX(-50%) translateY(-50%);">
          <h1 class="title  event-name " style="">Workshops</h1>
        </div>
      </div>
      </a>
      <a href="#">
      <div class="item auto-height" style="max-height:50vh;background-image: url('assets/img/online_bg.jpg'); background-size: cover; background-position: top;box-shadow:inset 0 0 0 2000px rgba(0,0,0,0.5);"
        data-hash="online">
        <div class="container" style="padding: 10px;position: absolute;top: 50%;left: 50%;transform: translateX(-50%) translateY(-50%);">
          <h1 class="title  event-name" style="">Online</h1>
        </div>
      </div>
      </a>
      <a href="#">
      <div class="item auto-height" style="max-height:50vh;background-image: url('assets/img/general_bg.jpg'); background-size: cover; background-position: top;box-shadow:inset 0 0 0 2000px rgba(0,0,0,0.5);"
      data-hash="general">
      <div class="container" style="padding: 10px;position: absolute;top: 50%;left: 50%;transform: translateX(-50%) translateY(-50%);">
        <h1 class="title  event-name" style="">General</h1>
      </div>
    </div>
    </a>


    </div>
  </div>



  <!--   Core JS Files   -->

  <script src="assets/carousel/owl.carousel.min.js"></script>
  <script src="assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="assets/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
  <script src="assets/js/plugins/moment.min.js"></script>
  <!--  Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
  <script src="assets/js/plugins/bootstrap-datetimepicker.js" type="text/javascript"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
  <!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
  <script src="assets/js/material-kit.js?v=2.0.5" type="text/javascript"></script>
  <script type="text/javascript">
    if($(window).width() < 960){
      $(".pcmask").attr("src", "assets/img/mobile_phone_front_end.png");
    }
   </script>

  <script>
    $('.owl-carousel').owlCarousel({
      centre: true,
      items: 1,
      stagePadding: 150,
      loop: true,
      margin: 0,
      URLhashListener:true,
      autoplayHoverPause:true,
      startPosition: 'events',
      nav: true,
      navText : ['<span class="carousel-control-prev-icon" aria-hidden="true"></span>', '<span class="carousel-control-next-icon" aria-hidden="true"></span>'],
      responsiveClass:true,
      responsive:{
        0:{
          items:1,
          stagePadding: 25,
        },
        600:{
          items:1,
          stagePadding: 100,
        },
        1000:{
          items:1,
          loop:true
        }
      }
    })
  </script>

  <script>
    $(document).ready(
      function(){
        $("#events").click("slow", function () {
          $("#overlay").fadeToggle(function(){
            $("#carousel").slideDown();
            $('.navbar-toggler').click();

          });
      });
    });

    $(document).ready(
      function(){
        $("#darkbg").click("slow", function () {
          $("#overlay").fadeToggle(function(){
            $("#carousel").toggle();
          });
      });
    });
  </script>



</body>

</html>

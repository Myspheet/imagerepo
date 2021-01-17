<!DOCTYPE html>
<html lang="en">

<head>

  <title>Photo Studio Full Screen</title>

  <meta charset="utf-8">
  <meta name="viewport"
    content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">




  <meta name="viewport" content="width=device-width, initial-scale=1">

  <script src="../cdn-cgi/apps/head/3ts2ksMwXvKRuG480KNifJ2_JNM.js"></script>
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
  <link rel="icon" href="favicon.ico" type="image/x-icon">

  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

  <link rel="stylesheet" href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}">

  <link rel="stylesheet" href="{{asset('assets/vendor/animsition/css/animsition.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/vendor/font-awesome/css/font-awesome.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/vendor/lightgallery/css/lightgallery.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/vendor/owl-carousel/css/owl.carousel.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/vendor/owl-carousel/css/owl.theme.default.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/vendor/ytplayer/css/jquery.mb.YTPlayer.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/vendor/animate.min.css')}}">

  <link rel="stylesheet" href="{{asset('assets/css/helper.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/theme.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/dark-style.css')}}">





</head>

<body id="body" class="animsition">

  <header class="section page-header page-header-full">
    <!-- RD Navbar-->
    <div class="rd-navbar-wrap">
      <nav class="rd-navbar" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed"
        data-md-layout="rd-navbar-static" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static"
        data-lg-device-layout="rd-navbar-static" data-md-stick-up-offset="80px" data-lg-stick-up-offset="46px"
        data-md-stick-up="true" data-lg-stick-up="true">
        <div class="rd-navbar-collapse-toggle rd-navbar-fixed-element-1" data-rd-navbar-toggle=".rd-navbar-collapse">
          <span></span></div>

        <div class="rd-navbar-main-outer">
          <div class="rd-navbar-main">
            <!-- RD Navbar Panel-->
            <div class="rd-navbar-panel">
              <!-- RD Navbar Toggle-->
              <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
              <!-- RD Navbar Brand -->
              <div class="rd-navbar-brand"><a class="brand" href="index.html"><img class="brand-logo-dark"
                    src="assets/img/logo-dark.png" alt="" width="172" height="32" /><img class="brand-logo-light"
                    src="assets/img/logo-light.png" alt="" width="172" height="32" /></a>
              </div>
            </div>
            <div class="rd-navbar-main-element">
              <div class="rd-navbar-nav-wrap">
                <!-- RD Navbar Nav-->
                <ul class="rd-navbar-nav">
                    <li><a href="{{ route('index') }}">Home</a>
                    </li>

                    <li>
                        <a href="{{ route('gallery') }}">Gallery</a>
                    </li>

                    @guest
                        <li>
                            <a href="{{ route('login') }}">Login</a>
                        </li>

                        <li>
                            <a href="{{ route('register') }}">Register</a>
                        </li>
                    @else
                        <li>
                            <a href="{{ route('dashboard.index') }}">Dashboard</a>
                        </li>
                    @endguest

                </ul>
              </div>
            </div>
          </div>
        </div>
      </nav>
    </div>
  </header>



  <div id="body-content">

    @yield('content')

    <section id="footer" class="footer-minimal no-margin-top bg-transparent">
      <div class="footer-inner">
        <div class="footer-container tt-wrap">
          <div class="row">
            <div class="col-md-6 col-md-push-6">

              <div class="social-buttons">
                <ul>
                  <li><a href="#" class="btn btn-social-min btn-default btn-link" title="Follow me on Facebook"
                      target="_blank"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="#" class="btn btn-social-min btn-default btn-link" title="Follow me on Twitter"
                      target="_blank"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#" class="btn btn-social-min btn-default btn-link" title="Follow me on Google+"
                      target="_blank"><i class="fa fa-google-plus"></i></a></li>
                  <li><a href="#" class="btn btn-social-min btn-default btn-link" title="Follow me on Pinterest"
                      target="_blank"><i class="fa fa-pinterest"></i></a></li>
                  <li><a href="#" class="btn btn-social-min btn-default btn-link" title="Follow me on Dribbble"
                      target="_blank"><i class="fa fa-dribbble"></i></a></li>
                  <li><a href="contact.html" class="btn btn-social-min btn-default btn-link" title="Drop me a line"
                      target="_blank"><i class="fa fa-envelope"></i></a></li>
                </ul>
              </div>

            </div>
            <div class="col-md-6 col-md-pull-6">

              <div class="footer-copyright">
                <p>&copy; 2018 / All rights reserved</p>

              </div>

            </div>
          </div>
        </div>
      </div>
    </section>

  </div>

  </div>




  <div class="snackbars" id="form-output-global"></div>




  <script src="{{asset('assets/js/core.min.js')}}"></script>


  <script src="{{asset('assets/js/script.js')}}"></script>

</body>

</html>

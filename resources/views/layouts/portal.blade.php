
<!doctype html>
<!--
Website By Miradontsoa / MiVFX
http://twitter.com/miradontsoa
http://miradontsoa.com
-->

<html class="no-js" lang="en">


<!-- Mirrored from demo.highhay.com/agenci/index-slideshow.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 24 Aug 2022 13:28:46 GMT -->
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">

  <!-- Page Title Here -->
  <title>iyoro - Fullscreen website template</title>

  <!-- Meta -->
  <!-- Page Description Here -->
  <meta name="description" content="A beautiful and creative portfolio template. It is mobile friend (responsive) and comes with smooth animations">

  <!-- Disable screen scaling-->
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, user-scalable=0">

  <!-- Twitter Meta -->
  <meta name="twitter:site" content="@miradontsoa">
  <meta name="twitter:creator" content="@miradontsoa">
  <meta name="twitter:card" content="summary">
  <meta name="twitter:title" content="Page Title">
  <meta name="twitter:description" content="Description of the page">
  <meta name="twitter:image" content="../img/bg-default.html">

  <!-- Facebook Meta -->
  <meta property="og:url" content="your website url here">
  <meta property="og:title" content="Page Title">
  <meta property="og:description" content="Description of the page">
  <meta property="og:type" content="website">
  <meta property="og:image" content="../img/bg-default.html">
  <meta property="og:image:secure_url" content="../img/bg-default.html">
  <meta property="og:image:type" content="image/jpg">
  <meta property="og:image:width" content="1200">
  <meta property="og:image:height" content="630">

  <!-- Place favicon.ico and apple-touch-icon(s) in the root directory -->
  <!-- Web fonts and Web Icons -->
  <link rel="stylesheet" href="fonts/notosans/stylesheet.css">
  <link rel="stylesheet" href="fonts/glacial/stylesheet.css">
  <link rel="stylesheet" href="fonts/montserrat/stylesheet.css">
  <link rel="stylesheet" href="fonts/playfair/stylesheet.css">
  <link rel="stylesheet" href="fonts/ionicons.min.css">
  <link rel="stylesheet" href="fonts/font-awesome.min.css">
  <link rel="stylesheet" href="../../indestructibletype.com/fonts/Jost.css" type="text/css"
  charset="utf-8" />

  <!-- Vendor CSS style -->
  <link rel="stylesheet" href="css/pageloader.css">

  <!-- Uncomment below to load individualy vendor CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="js/vendor/swiper.min.css">
  <link rel="stylesheet" href="js/vendor/jquery.fullpage.min.css">
  <link rel="stylesheet" href="js/vegas/vegas.min.css">

  <!-- Main CSS files -->
  <link rel="stylesheet" href="css/main.css">

  <!-- add alt layout here -->
  <link rel="stylesheet" href="css/style-bg.css">

  <script src="js/vendor/modernizr-2.7.1.min.js"></script>
</head>

<body id="menu" class="body-page">
  <!--[if lt IE 8]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

  <!-- Page Loader : just comment these lines to remove it -->
  <div class="page-loader" id="page-loader">
    <div>
      
      <p>welcome to iyoro</p>
    </div>
  </div>

  <!-- BEGIN OF site header Menu -->
  <header class="page-header navbar page-header-drawer menu-right logo-left topmenu-right ">

    <!-- Begin of menu icon toggler -->
    <button class="navbar-toggler site-menu-icon" id="navMenuIcon">
      <!-- Available class : menu-icon-dot / menu-icon-line-->
      <span class="menu-icon menu-icon-line">
        <span class="text show-menu-visible">Close</span>
        <span class="text hide-menu-visible">Menu</span>
        <span class="bars">
          <span class="bar1"></span>
          <span class="bar2"></span>
          <span class="bar3"></span>
        </span>
      </span>
    </button>
    <!-- End of menu icon toggler -->

    <!-- Begin of logo/brand -->
    <a class="navbar-brand" href="index-2.html#">
      <!-- Arrows scroll down/up -->
      <span class="logo">
        <img class="light-logo" src="img/logo.png" alt="Logo">
      </span>
      <span class="text">
        <span class="line">iyoro.</span>
      </span>
    </a>
    <!-- End of logo/brand -->

    <!-- begin of menu wrapper -->
    <div class="all-menu-wrapper" id="navbarMenu">

      <!-- Begin of hamburger mainmenu menu -->
      <nav class="navbar-mainmenu">
        <div class="mainmenu-bg"></div>
        <div class="mainmenu-content">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="index.html#home">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="gallery.html">Visite Rapide</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="item.html">Immersion</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="article.html">Histoire</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="demo.html">Carte</a>
            </li>
          </ul>
          <div class="navbar-desc">
            <div class="row">
              <div class="col col-12 col-lg-8">
                <p>Parcourez le Bénin depuis chez vous !
                </p>
              </div>
            </div>
          </div>
          <div class="navbar-footer">
            <div class="row no-gutters">
              <div class="col col-12 col-md-6">
                <div class="icons icons-margin">
                  <a class="btn-icon" href="#">
                    <i class="icon fa fa-instagram"></i>
                  </a>
                  <a class="btn-icon" href="#">
                    <i class="icon fa fa-twitter"></i>
                  </a>
                </div>
              </div>
              <div class="col col-12 col-md-6 footer-notes">
                <p class="text-right">Copyright - iyoro. 2024</p>
              </div>
            </div>
          </div>
        </div>
      </nav>
      <!-- End of hamburger mainmenu menu -->


    </div>
    <!-- end of menu wrapper -->

  </header>
  <!-- END OF site header Menu-->

  @yield('content')

    
  </main>
  <!-- END OF page main content -->

  <!-- BEGIN OF page footer -->
  <footer id="site-footer" class="page-footer d-none d-lg-block">

    <!-- Left content -->
    <div class="footer-left">
      <ul class="social">
        <li>
          <a href="http://twitter/miradontsoa">
            <i class="icon fa fa-twitter"></i>
          </a>
        </li>
        <li>
          <a href="http://instagram.com/miradontsoa">
            <i class="icon fa fa-instagram"></i>
          </a>
        </li>
      </ul>
    </div>
  </footer>
  <!-- END OF site footer -->

  <!-- scripts -->
  <!-- All Javascript plugins goes here -->
  <script src="js/vendor/jquery-1.12.4.min.js"></script>

  <!-- All vendor scripts -->
  <script src="js/vendor/scrolloverflow.min.js"></script>
  <script src="js/vendor/all.js"></script>
  <script src="js/particlejs/particles.min.js"></script>

  <!-- Countdown script -->
  <script src="js/jquery.downCount.js"></script>

  <!-- Form script -->
  <script src="js/form_script.js"></script>

  <!-- Javascript main files -->
  <script src="js/main.js"></script>


</body>


<!-- Mirrored from demo.highhay.com/agenci/index-slideshow.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 24 Aug 2022 13:28:46 GMT -->
</html>
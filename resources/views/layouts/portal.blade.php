
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
              <a class="nav-link" href="gallery.html">Gallery</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="item.html">Item</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="article.html">Article</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="demo.html">Demo</a>
            </li>
          </ul>
          <div class="navbar-desc">
            <div class="row">
              <div class="col col-12 col-lg-8">
                <p>This is our moto and it is just a placeholder text.
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

    <!-- Begin of register/login/signin section -->
    <div class="section section-register " data-section="register">

      <div class="section-cover-full bg-color cover-anim-off" data-bgcolor="#3f51b5"></div>

      <!-- Begin of section wrapper -->
      <div class="section-wrapper with-margin">

        <!-- content -->
        <div class="section-content anim">

          <div class="row">

            <div class="col-12 col-md-4 text-left">
              <!-- title and description -->
              <div class="title-desc pr-4">
                <h2 class="display-5 anim-2">Call to action.</h2>
              </div>
            </div>

            <div class="col-12 col-md-8">
              <!-- form container form-container-signup-->
              <div class="form-container-signup">

                <form class="send_email_form form-container" method="post" action="http://demo.highhay.com/agenci/ajaxserver/serverfile.php">
                  <div class="form-desc">
                    <p class="invite anim-4">Don't miss any news via email ! Register email if you agree :</p>
                    <div class="notice">
                      <span class="asterisk">*</span>you agree to send email</div>
                  </div>
                  <div class="form-input anim-5">
                    <div class="row">
                      <div class="col-12 col-md-8 col-lg-10">
                        <div class="form-group form-success-gone">
                          <label for="reg-email">Email Address *</label>
                          <input id="reg-email" name="email" class="form-control-line form-control-white" type="email"
                          required placeholder="your@email.address" data-validation-type="email"
                          />
                        </div>

                        <div class="form-group form-success-gone mb-0">
                          <button id="submit-email" name="submit_email" class="btn btn-outline-white form-success-gone mb-0">
                            <span class="text">Subscribe</span>
                          </button>
                        </div>
                      </div>
                      <div class="col-12 col-md-4 col-lg-2">
                      </div>
                    </div>
                    <div class="form-group mb-0">
                      <div>
                        <p class="email-ok invisible form-text-feedback form-success-visible">Your email has been registred, thank you.</p>
                      </div>
                    </div>
                  </div>
                </form>
                <!-- END send_email_form -->
              </div>
              <!-- End of form container form-container-signup-->

            </div>
          </div>
        </div>
        <!-- end of content -->
      </div>
      <!-- End of section wrapper -->

    </div>
    <!-- End of register/login/signin section -->

    <!-- Begin of contact section -->
    <div class="section section-contact " data-section="contact-info">

      <!-- Begin of section wrapper -->
      <div class="section-wrapper  with-margin">

        <div class="section-content">
          <div class="row">

            <!-- begin of title content -->
            <div class="col-12 col-lg-4 anim">
              <div class="title-desc pr-4">
                <h2 class="display-5 anim-2">Let's Talk.</h2>
              </div>

              <!-- Action button -->
              <div class="btns-action anim-3 contact-btns-action mb-4">
                <a class="btn btn-line show-contact-information" href="#">
                  <span class="text">Information</span>
                </a>
                <a class="btn btn-line show-contact-message" href="#">
                  <span class="text">Message</span>
                </a>
              </div>
            </div>
            <!-- end of title content -->

            <!-- begin of desc content -->
            <div class="col-12 col-lg-8">
              <!-- content -->
              <div class="section-content anim text-left">
                <!-- begin of slider -->
                <div class="slider-swiper-contact">
                  <!-- slider content-->
                  <div class="swiper-container slider-container">
                    <div class="item-list swiper-wrapper">
                      <!-- contact-information-slide -->
                      <div class="swiper-slide contact-information-slide">
                        <div class="contact-information" id="contact-information">
                          <!-- title and description -->
                          <div class="title-desc mb-0">
                            <div class="anim-4">
                              <p>Want to start an awesome projects or have questions
                                about our company and products found on our stores?
                                Feel free to talk to us, we will be happy to answser
                                you. Here is how to reach us:
                              </p>
                            </div>
                            <div class="address-container anim-5">
                              <div class="row">
                                <div class="col-12 col-md-6 col-lg-6">
                                  <h4 class="display-6 display-decor">Contact</h4>
                                  <p>Call: 01 234 567 89</p>
                                  <p>Email: ouremail@domain.com</p>

                                  <div class="icons icons-margin">
                                    <a class="btn-icon" href="#">
                                      <i class="icon fa fa-instagram"></i>
                                    </a>
                                    <a class="btn-icon" href="#">
                                      <i class="icon fa fa-twitter"></i>
                                    </a>
                                  </div>
                                </div>
                                <div class="col-12 col-md-6 col-lg-6">
                                  <h4 class="display-6 display-decor">Address</h4>
                                  <p>
                                    Company address
                                    <br>12 Street Turning Place
                                    <br>South Est, Antartica
                                  </p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- end of contact-information-slide -->

                      <!-- contact-message-slide -->
                      <div class="swiper-slide contact-message-slide">
                        <div class="contact-message">
                          <!-- title and description -->
                          <div class="title-desc">
                            <p class="">For questions about our company and products found on
                              our stores. Cras vitae neque molestie, rhoncus ipsum
                              sit amet, lobortis dui. Fusce in urna sem.</p>
                          </div>
                          <!-- begin of message container -->
                          <div class="message-form">
                            <div class="form-container form-container-card">
                              <!-- Message form container -->
                              <form class="send_message_form message form" method="post" action="http://demo.highhay.com/agenci/ajaxserver/serverfile.php"
                              id="message_form">
                                <div class="row">
                                  <div class="col-12 col-lg-6">
                                    <div class="form-group name">
                                      <input id="mes-name" name="name" type="text" placeholder="Name" class="form-control form-control-outline input-full thick form-success-clean"
                                      required>
                                    </div>
                                    <div class="form-group email">
                                      <input id="mes-email" type="email" placeholder="Email" name="email" class="form-control form-control-outline input-full thick form-success-clean"
                                      required>
                                    </div>
                                    <div class="form-group no-border">
                                      <textarea id="mes-text" placeholder="Message ..." name="message" class="form-control form-control-outline thick form-success-clean"
                                      required></textarea>

                                      <div>
                                        <p class="message-ok invisible form-text-feedback form-success-visible">Your message has been sent, thank you.</p>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-12 col-lg-6">
                                    <button id="submit-message" class="btn btn-outline-white email_b" name="submit_message">
                                      <span class="txt">Send Now</span>
                                      <span class="arrow-icon"></span>
                                    </button>
                                  </div>
                                </div>

                              </form>
                            </div>
                          </div>
                          <!-- end of message container -->
                        </div>
                      </div>
                      <!-- end of contact-message-slide -->

                    </div>
                  </div>
                </div>
                <!-- end of slider slider-swiper-gamma-->
              </div>
            </div>
            <!-- end of desc content -->
          </div>
        </div>

      </div>
      <!-- End of section wrapper -->

    </div>
    <!-- End of contact section -->
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
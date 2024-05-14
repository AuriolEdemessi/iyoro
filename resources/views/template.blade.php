@extends('layouts.portal')

@section('content')

 <!-- BEGIN OF page cover -->
 <div class="page-cover">
    <!-- Cover Background -->
    <div class="cover-bg bg-img" data-image-src="img/bg1.jpg"></div>

    <!-- BEGIN OF Slideshow Background - uncomment below to use background slideshow-->
    <div class="cover-bg slide-show scroll-animated">
      <i class='img' data-src='./img/bg1.jpg'></i>
      <i class='img' data-src='./img/bg2.jpg'></i>
     
    </div>
    <!-- END OF Slideshow Background -->

    <!-- Transluscent mask as filter -->
    <div class="cover-bg-mask bg-color" data-bgcolor="rgba(29, 29, 29, 0.5)"></div>
  </div>
  <!--END OF page cover -->

  <!-- BEGIN OF page main content -->
  <main class="page-main main-anim scrollpage-container " id="mainpage">



    <!-- Begin of home section -->
    <div class="section section-home fullscreen-md main-home section-bottom" data-section="home">
      <div class="section-cover home-cover">
      </div>
      <!-- Begin of section wrapper -->
      <div class="section-wrapper with-margin">
        <!-- content -->
        <div class="section-content anim">
          <div class="row c-wrapper">
            <div class="col-12 col-md-8 text-left">
              <!-- title and description -->
              <div class="title-desc mb-0">
                <h1 class="home-title anim-blur anim-2">
                  <span class="light">Découvrez le Bénin</span>
                  <span class="normal">d'aujourd'hui et d'hier.</span>
                </h1>
                <p class="anim-3">Profitez d'un tourisme immersif !</p>
              </div>
              <div class="home-btns btns-action anim-4">
                <a class="btn btn-line long-line" href="#projects">
                  <span class="text">Commencer</span>
                </a>
              </div>
            </div>

          </div>
        </div>

        <!-- Arrows scroll down/up -->
        <footer class="section-footer scrolldown">
          <a class="down">
            <span class="icon"></span>
            <span class="txt">Scroll</span>
          </a>
        </footer>
      </div>
      <!-- End of section wrapper -->
    </div>
    <!-- End of home section -->

    <!-- Begin of description section -->
    <div class="section fullscreen-md-off no-footer" data-section="about-us">

      <!-- Begin of section wrapper -->
      <div class="section-wrapper with-margin">

        <!-- content -->
        <div class="section-content anim">
          <div class="row">
            <div class="col-12 col-md-4 text-left">
              <!-- title and description -->
              <div class="title-desc pr-4">
                <h2 class="display-5 anim-2">Nous ne sommes pas qu'une agence de tourisme</h2>
              </div>

              <!-- Action button -->
              <div class="btns-action anim-3 mb-3">
                <a class="btn btn-line" href="#services">
                  <span class="text">Nos Services</span>
                </a>
              </div>
            </div>
            <div class="col-12 col-md-8 text-left">
              <!-- title and description -->
              <div class="title-desc anim-4">
                <p>Vivez une expérience entière comme si vous étiez sur place avec la réalité virtuelle.</p>
                <p>Profitez également de cette immersion pour vous replonger dans l'histoire des sites touristiques.
                </p>
                <p>Avec notre assistante virtuelle Fumi, vous aurez un accimpagnement personnalisé dans votre langue locale .
                </p>
              </div>

            </div>

          </div>
        </div>


      </div>
      <!-- End of section wrapper -->
    </div>
    <!-- End of description section -->



    <!-- Begin of slider section -->
    <div class="section section-slider " data-section="team">


      <!-- Begin of section wrapper -->
      <div class="section-wrapper fullwidth">
        <!-- begin of slider -->
        <div class="slider-swiper-beta">
          <!-- slider -->
          <div class="swiper-container slider-container">
            <div class="item-list swiper-wrapper">
              <!-- item -->
              <div class="swiper-slide">
                <div class="media-slide-item-beta">
                  <div class="media-bg bg-color" data-bgcolor="#2B2A54">

                  </div>
                  <div class="media-content text-anim">
                    <div class="row justify-content-between">
                      <div class="col col-12 col-md-4 col-lg-6 order-lg-2">
                        <div class="media-image">
                          <img class="img-block-off" src="img/items/img-people1.jpg" alt="Alt Text">
                        </div>
                      </div>
                      <div class="col center-v col-12 col-md-4 col-lg-6 order-lg-1">
                        <div class="media-body body-margin-right">
                          <h4 class="">Team Member</h4>
                          <h3 class="">Nicole Martine</h3>
                          <p>Digital Marketer</p>
                          <div class="btns-action">
                            <a class="btn btn-line" href="#">
                              <span class="text">Linkedin</span>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- item -->
              <div class="swiper-slide">
                <div class="media-slide-item-beta">
                  <div class="media-bg bg-color" data-bgcolor="rgb(219, 51, 74)">
                  </div>
                  <div class="media-content text-anim">
                    <div class="row justify-content-between">
                      <div class="col col-12 col-md-4 col-lg-6 order-lg-2">
                        <div class="media-image">
                          <img class="img-block-off" src="img/items/img-people2.jpg" alt="Alt Text">
                        </div>
                      </div>
                      <div class="col center-v col-12 col-md-4 col-lg-6">
                        <div class="media-body body-margin-right">
                          <h4 class="">Team Member</h4>
                          <h3 class="">Lucy Kate</h3>
                          <p>Public relationship</p>

                          <div class="btns-action">
                            <a class="btn btn-line" href="#">
                              <span class="text">Linkedin</span>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- item -->
              <div class="swiper-slide">
                <div class="media-slide-item-beta">
                  <div class="media-bg bg-color" data-bgcolor="rgb(55, 68, 99)">
                  </div>
                  <div class="media-content text-anim">
                    <div class="row justify-content-between">
                      <div class="col col-12 col-md-4 col-lg-6 order-lg-2">
                        <div class="media-image">
                          <img class="img-block-off" src="img/items/img-people3.jpg" alt="Alt Text">
                        </div>
                      </div>
                      <div class="col col-12 col-md-4 col-lg-6">
                        <div class="media-body body-margin-right">
                          <h4 class="">Team Member</h4>
                          <h3 class="">The Tweens</h3>
                          <p>Product Developer</p>

                          <div class="btns-action">
                            <a class="btn btn-line" href="#">
                              <span class="text">Linkedin</span>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>

          <!-- slider navigation -->
          <nav class="items-navigation">
            <!-- pagination -->
            <div class="items-pagination bar"></div>

            <!-- buttons -->
            <div class="items-buttons">
              <div class="items-button-prev">
                <a class="btn btn-transp-arrow " href="#">
                  <i class="icon">
                    <span class="arrow-left"></span>
                  </i>
                  <span class="text">Prev</span>
                </a>
              </div>
              <div class="items-button-next">
                <a class="btn btn-transp-arrow " href="#">
                  <span class="text">Next</span>
                  <i class="icon">
                    <span class="arrow-right"></span>
                  </i>
                </a>
              </div>
            </div>
          </nav>

        </div>
        <!-- end of slider slider-swiper-beta -->
      </div>


    </div>
    <!-- End of slider section -->

    <!-- Begin of list services/features section -->
    <div class="section section-list-feature " data-section="service" id="services">


      <!-- Begin of section wrapper -->
      <div class="section-wrapper with-margin">
        <!-- content -->
        <div class="section-content anim">
          <div class="section-content-header decor">
            <div class="row">
              <div class="col-12 col-md-4 text-left">
                <!-- title and description -->
                <div class="title-desc pr-4">
                  <h2 class="display-5 anim-2">Our services.</h2>
                </div>

              </div>
              <div class="col-12 col-md-8 text-left">
                <!-- title and description -->
                <div class="title-desc anim-4">
                  <p>Here are all services that we offer. This is just a placeholder
                    text and replace it with your awesome text.</p>
                </div>
              </div>
            </div>
          </div>

          <!-- service list -->
          <div class="list-items row anim-list">
            <div class="item col-12 col-lg-4">
              <div class="media media-service">
                <div class="media-body">
                  <h4 class="">Concept</h4>
                  <p>An awesome service that we offer to you. This is just a placeholder
                    text.</p>
                </div>
                <footer class="media-footer">
                  <a class="btn btn-line" href="item.html">
                    <span class="text">Details</span>
                  </a>
                </footer>
              </div>
            </div>
            <div class="item col-12 col-lg-4">
              <div class="media media-service">
                <div class="media-body">
                  <h4 class="">Design</h4>
                  <p>An awesome service that we offer to you. This is just a placeholder
                    text.</p>
                </div>
                <footer class="media-footer">
                  <a class="btn btn-line" href="item.html">
                    <span class="text">Details</span>
                  </a>
                </footer>
              </div>
            </div>
            <div class="item col-12 col-lg-4">
              <div class="media media-service mb-0">
                <div class="media-body">
                  <h4 class="">Analytics</h4>
                  <p>An awesome service that we offer to you. This is just a placeholder
                    text.</p>
                </div>
                <footer class="media-footer">
                  <a class="btn btn-line" href="item.html">
                    <span class="text">Details</span>
                  </a>
                </footer>
              </div>
            </div>
          </div>
          <!-- end of service list -->
        </div>

      </div>
      <!-- End of section wrapper -->

    </div>
    <!-- End of list services/features section -->

    <!-- Begin of slider section -->
    <div class="section section-slider " data-section="projects" id="projects">


      <!-- Begin of section wrapper -->
      <div class="section-wrapper fullwidth anim">
        <!-- begin of slider -->
        <div class="slider-swiper-alpha">
          <!-- slider -->
          <div class="swiper-container slider-container">
            <div class="item-list swiper-wrapper">
              <!-- item -->
              <div class="swiper-slide">
                <div class="media-slide-item-alpha">
                  <div class="media-image mask-black">
                    <img class="img-block" src="img/items/img-sample4.jpg" alt="Alt Text">
                  </div>
                  <div class="media-content fade-3">
                    <div class="row">
                      <div class="col col-12 col-md-4 col-lg-4">
                        <div class="media-body body-margin-right text-anim">
                          <h4 class="">Case Study</h4>
                          <h3 class="">Olympic Reflex</h3>
                          <p>Business branding, Marketing</p>

                          <div class="btns-action">
                            <a class="btn btn-line" href="#">
                              <span class="text">Linkedin</span>
                            </a>
                          </div>
                        </div>
                      </div>
                      <div class="col col-12 col-md-6 col-lg-6">
                        <div class="media-body centered">
                          <p>This is just a placeholder text. And this is a website
                            template, helping you to build modern and beautiful websites.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- item -->
              <div class="swiper-slide">
                <div class="media-slide-item-alpha">
                  <div class="media-image mask-black">
                    <img class="img-block" src="img/items/img-sample6.jpg" alt="Alt Text">
                  </div>
                  <div class="media-content">
                    <div class="row">
                      <div class="col col-12 col-md-4 col-lg-4">
                        <div class="media-body body-margin-right text-anim">
                          <h4 class="">Case Study</h4>
                          <h3 class="">Resto de l'Ouest</h3>
                          <p>App, Website</p>

                          <div class="btns-action">
                            <a class="btn btn-line" href="#">
                              <span class="text">Linkedin</span>
                            </a>
                          </div>
                        </div>
                      </div>
                      <div class="col col-12 col-md-6 col-lg-6">
                        <div class="media-body centered">
                          <p>This is just a placeholder text. And this is a website
                            template, helping you to build modern and beautiful websites.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- item -->
              <div class="swiper-slide">
                <div class="media-slide-item-alpha">
                  <div class="media-image mask-black">
                    <img class="img-block" src="img/items/img-sample8.jpg" alt="Alt Text">
                  </div>
                  <div class="media-content">
                    <div class="row">
                      <div class="col col-12 col-md-4 col-lg-4">
                        <div class="media-body body-margin-right text-anim">
                          <h4 class="">Case Study</h4>
                          <h3 class="">Car Showroom</h3>
                          <p>Couverture Photo</p>

                          <div class="btns-action">
                            <a class="btn btn-line" href="#">
                              <span class="text">Linkedin</span>
                            </a>
                          </div>
                        </div>
                      </div>
                      <div class="col col-12 col-md-6 col-lg-6">
                        <div class="media-body centered">
                          <p>This is just a placeholder text. And this is a website
                            template, helping you to build modern and beautiful websites.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>
          <!-- slider navigation -->
          <nav class="items-navigation">
            <!-- pagination -->
            <div class="items-pagination bar"></div>

            <!-- buttons -->
            <div class="items-buttons">
              <div class="items-button-prev">
                <a class="btn btn-transp-arrow " href="#">
                  <i class="icon">
                    <span class="arrow-left"></span>
                  </i>
                  <span class="text">Prev</span>
                </a>
              </div>
              <div class="items-button-next">
                <a class="btn btn-transp-arrow " href="#">
                  <span class="text">Next</span>
                  <i class="icon">
                    <span class="arrow-right"></span>
                  </i>
                </a>
              </div>
            </div>
          </nav>

        </div>
        <!-- end of slider slider-swiper-alpha -->
      </div>


    </div>
    <!-- End of slider section -->


    <!-- Begin of grid list section -->
    <div class="section " data-section="images">

      <!-- Begin of section wrapper -->
      <div class="section-wrapper with-margin">

        <!-- content -->
        <div class="section-content anim">
          <div class="title-desc title-margin text-center">
            <h2 class="display-3 display-title anim-2">Art selection</h2>
            <p class="anim-3">Here are some amazing arts. This is just a placeholder text.</p>
          </div>

          <div class="row row-random grid-media-aside-text fade-3">
            <!-- an item -->
            <div class="item col col-12 col-md-6 text-left">
              <div class="media-aside-text">
                <div class="media-image">
                  <img src="img/items/img-portrait2.jpg" alt="Alt Text">
                </div>
                <div class="media-body">
                  <h4 class="">Le saut</h4>
                  <p>Art, Photography</p>

                  <a class="btn btn-line" href="item.html">
                    <span class="text">Details</span>
                  </a>
                </div>
              </div>
            </div>
            <!-- an item -->
            <div class="item col col-12 col-md-6 text-left">
              <div class="media-aside-text">
                <div class="media-image">
                  <img src="img/items/img-portrait3.jpg" alt="Alt Text">
                </div>
                <div class="media-body">
                  <h4 class="">Fraise Ice</h4>
                  <p>Art culinaire</p>

                  <a class="btn btn-line" href="item.html">
                    <span class="text">Details</span>
                  </a>
                </div>
              </div>
            </div>
            <!-- an item -->
            <div class="item col col-12 col-md-6 text-left">
              <div class="media-aside-text">
                <div class="media-image">
                  <img src="img/items/img-portrait1.jpg" alt="Alt Text">
                </div>
                <div class="media-body">
                  <h4 class="">Pink Tree</h4>
                  <p>October 1960</p>

                  <a class="btn btn-line" href="item.html">
                    <span class="text">Details</span>
                  </a>
                </div>
              </div>
            </div>
            <!-- an item -->
            <div class="item col col-12 col-md-6 text-left">
              <div class="media-aside-text">
                <div class="media-image">
                  <img src="img/items/img-portrait4.jpg" alt="Alt Text">
                </div>
                <div class="media-body">
                  <h4 class="">Chaudière</h4>
                  <p>Interior design</p>

                  <a class="btn btn-line" href="item.html">
                    <span class="text">Details</span>
                  </a>
                </div>
              </div>
            </div>

          </div>
        </div>

      </div>
      <!-- End of section wrapper -->

    </div>
    <!-- End of grid list section -->

    <!-- Begin of image section -->
    <div class="section section-cover-image fp-auto-height no-footer" data-section="">

      <div class="section-cover  ">
        <img class="img-block" src="img/items/img-sample1.jpg" alt="cover">
      </div>
    </div>
    <!-- End of image section -->

    <!-- Begin of grid list section -->
    <div class="section " data-section="products">

      <!-- Begin of section wrapper -->
      <div class="section-wrapper with-margin">

        <!-- content -->
        <div class="section-content anim grouped-grid">
          <div class="section-content-header decor">
            <div class="row">
              <div class="col-12 col-md-4 text-left">
                <!-- title and description -->
                <div class="title-desc pr-4">
                  <h2 class="display-5 anim-2">Our products.</h2>
                </div>

              </div>
              <div class="col-12 col-md-8 text-left">
                <!-- title and description -->
                <div class="title-desc anim-4">
                  <p>Here are all the products that we offer. This is just a placeholder
                    text and replace it with your awesome text.</p>
                </div>
              </div>
            </div>
          </div>

          <div class="row grid-group">
            <div class="col col-12 col-lg-4 grid-title order-lg-1 anim-4">
              <h2 class="display-5 title-margin">Furnitures and Interior</h2>
            </div>
            <div class="col col-12 col-lg-8 grid-content order-lg-2 anim-5">
              <div class="row grid-media-card">
                <!-- an item -->
                <div class="item col col-12 col-md-6">
                  <div class="media-card">
                    <div class="media-image">
                      <header class="media-image-header">
                        <h5>Handcraft</h5>
                      </header>
                      <img src="img/items/img-sample1-square.jpg" alt="Alt Text">
                    </div>
                    <div class="media-body">
                      <div class="row no-gutters">
                        <div class="col-8">
                          <h4 class="media-title">Door Grid</h4>
                        </div>
                        <div class="col-4 text-right">
                          <h4 class="price">$120</h4>
                        </div>
                      </div>

                      <div class="row no-gutters">
                        <div class="col-12">
                          <p>Furniture for interior design</p>
                        </div>
                      </div>

                      <div class="row no-gutters media-footer">
                        <div class="col-12">
                          <a class="btn btn-line pr-0" href="#">
                            <span class="text">Buy</span>
                          </a>
                          <a class="btn btn-transp" href="item.html">
                            <span class="text">Details</span>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>


                <!-- an item -->
                <div class="item col col-12 col-md-6">
                  <div class="media-card">
                    <div class="media-image">
                      <header class="media-image-header">
                        <h5>Architecture</h5>
                      </header>
                      <img src="img/items/img-sample2-square.jpg" alt="Alt Text">
                    </div>
                    <div class="media-body">
                      <div class="row no-gutters">
                        <div class="col-8">
                          <h4 class="media-title">Escalator Spiral</h4>
                        </div>
                        <div class="col-4 text-right">
                          <h4 class="price">$120</h4>
                        </div>
                      </div>

                      <div class="row no-gutters">
                        <div class="col-12">
                          <p>Furniture for exterior design</p>
                        </div>
                      </div>

                      <div class="row no-gutters media-footer">
                        <div class="col-12">
                          <a class="btn btn-line pr-0" href="#">
                            <span class="text">Buy</span>
                          </a>
                          <a class="btn btn-transp" href="item.html">
                            <span class="text">Details</span>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>

          <div class="row grid-group">
            <div class="col col-12 col-lg-4 grid-title order-lg-2">
              <h2 class="display-5 title-margin">Deco and Painting</h2>
            </div>
            <div class="col col-12 col-lg-8 grid-content order-lg-1">
              <div class="row grid-media-card">

                <!-- an item -->
                <div class="item col col-12 col-md-6">
                  <div class="media-card">
                    <div class="media-image">
                      <img src="img/items/img-sample3-square.jpg" alt="Alt Text">
                    </div>
                    <div class="media-body">
                      <div class="row no-gutters">
                        <div class="col-8">
                          <h4 class="media-title">Candy Table</h4>
                        </div>
                        <div class="col-4 text-right">
                          <h4 class="price">$120</h4>
                        </div>
                      </div>

                      <div class="row no-gutters">
                        <div class="col-12">
                          <p>Furniture for interior design</p>
                        </div>
                      </div>

                      <div class="row no-gutters media-footer">
                        <div class="col-6">
                          <a class="btn btn-line" href="item.html">
                            <span class="text">Details</span>
                          </a>
                        </div>
                        <div class="col-6 text-right">
                          <a class="btn btn-transp" href="#">
                            <span class="text">Buy</span>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- an item -->
                <div class="item col col-12 col-md-6">
                  <div class="media-card">
                    <div class="media-image">
                      <img src="img/items/img-sample4-square.jpg" alt="Alt Text">
                    </div>
                    <div class="media-body">
                      <div class="row no-gutters">
                        <div class="col-8">
                          <h4 class="media-title">Modern Painting</h4>
                        </div>
                        <div class="col-4 text-right">
                          <h4 class="price">$120</h4>
                        </div>
                      </div>

                      <div class="row no-gutters">
                        <div class="col-12">
                          <p>Furniture for interior design</p>
                        </div>
                      </div>

                      <div class="row no-gutters media-footer">
                        <div class="col-6">
                          <a class="btn btn-line" href="item.html">
                            <span class="text">Details</span>
                          </a>
                        </div>
                        <div class="col-6 text-right">
                          <a class="btn btn-transp" href="#">
                            <span class="text">Buy</span>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>

      </div>
      <!-- End of section wrapper -->

    </div>
    <!-- End of grid list section -->

    <!-- Begin of slider/quotes section -->
    <div class="section section-list-feature " data-section="testimony">

      <div class="section-cover-full bg-img mask-black" data-image-src="./img/items/img-sample2.jpg"></div>
      <!-- Begin of section wrapper -->
      <div class="section-wrapper with-margin">
        <!-- content -->
        <div class="section-content anim">
          <div class="section-content-header">
            <div class="row">
              <div class="col-12 col-md-4 text-left">
                <!-- title and description -->
                <div class="title-desc pr-4">
                  <h2 class="display-5 anim-2">They trust us.</h2>
                </div>

              </div>
              <div class="col-12 col-md-8 text-left">
                <!-- title and description -->
                <div class="title-desc anim-4">
                  <p>More than 100 customers trust us. This is just a placeholder text
                    and replace it with your awesome text.</p>
                </div>

                <!-- number list -->
                <div class="list-items row anim-list">
                  <div class="item col-6 col-lg-4">
                    <div class="media media-number">
                      <div class="media-body">
                        <h4 class="">48+</h4>
                        <p>working hours.</p>
                      </div>
                    </div>
                  </div>
                  <div class="item col-6 col-lg-4">
                    <div class="media media-number">
                      <div class="media-body">
                        <h4 class="">100</h4>
                        <p>customers.</p>
                      </div>
                    </div>
                  </div>
                  <div class="item col-6 col-lg-4">
                    <div class="media media-number">
                      <div class="media-body">
                        <h4 class="">100</h4>
                        <p>products.</p>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end of number list -->
              </div>
            </div>
          </div>

          <!-- begin of slider -->
          <div class="slider-swiper-gamma anim-5">
            <!-- slider content-->
            <div class="swiper-container slider-container">
              <div class="item-list swiper-wrapper">
                <!-- item -->
                <div class="swiper-slide">
                  <div class="media-slide-item-gamma">
                    <div class="media-content text-anim">
                      <div class="row">
                        <div class="col col-12 col-md-4 col-lg-4">
                          <div class="media-image">
                            <img class="logo" src="img/icons/client1.png" alt="Alt Text">
                          </div>
                        </div>
                        <div class="col col-12 col-md-6 col-lg-6">
                          <div class="media-body">
                            <p>We got a better than expected result from them. This
                              is a sample testimony text so just replace it.</p>
                            <h4 class="">Henry K. CM Spiral Tech</h4>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- item -->
                <div class="swiper-slide">
                  <div class="media-slide-item-gamma">
                    <div class="media-content text-anim">
                      <div class="row">
                        <div class="col col-12 col-md-4 col-lg-4">
                          <div class="media-image">
                            <img class="logo" src="img/icons/client2.png" alt="Alt Text">
                          </div>
                        </div>
                        <div class="col col-12 col-md-6 col-lg-6">
                          <div class="media-body">
                            <p>We got a better than expected result from them. This
                              is a sample testimony text so just replace it.</p>
                            <h4 class="">John C. CEO First Startup</h4>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- item -->
                <div class="swiper-slide">
                  <div class="media-slide-item-gamma">
                    <div class="media-content text-anim">
                      <div class="row">
                        <div class="col col-12 col-md-4 col-lg-4">
                          <div class="media-image">
                            <img class="logo" src="img/icons/client3.png" alt="Alt Text">
                          </div>
                        </div>
                        <div class="col col-12 col-md-6 col-lg-6">
                          <div class="media-body">
                            <p>We got a better than expected result from them. This
                              is a sample testimony text so just replace it.</p>
                            <h4 class="">Dave B. CEO Bravo</h4>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>


              </div>
            </div>
            <!-- slider navigation -->
            <nav class="items-navigation">
              <!-- pagination -->
              <div class="items-pagination bar"></div>

            </nav>

          </div>
          <!-- end of slider slider-swiper-gamma-->
        </div>

      </div>
      <!-- End of section wrapper -->

    </div>
    <!-- End of slider/quotes section -->

@stop
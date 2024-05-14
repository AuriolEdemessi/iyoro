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




@stop
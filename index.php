
<?php
require_once('header.php');
?>

    <link rel="stylesheet" href="css/custom.css" type="text/css" />

    <style type="text/css">
        /*------ 4. SECTION WELCOME ------*/
    /*-----------------------------------*/
    section.welcome {
      padding: 6rem 0;
      background: #fff; }

    .welcome-title h2 {
      color: #121B22;
      font-size: 26px;
      font-weight: 600;
      margin-bottom: .8rem; }

    .welcome-img {
      text-align: right; }

    .welcome-title h2 span,
    .welcome-title h2 span {
      color: #0098ef;
      font-weight: 800; }

    .welcome-title h4 {
      color: #000;
      font-size: 22px;
      text-transform: uppercase; }

    .welcome-title {
      padding-bottom: 17px; }

    .welcome-content > p {
      color: #666;
      font-weight: 400; }

    .welcome-content > p span {
      color: #666;
      font-size: 16px;
      font-weight: 600; }

    .services-img,
    .services-desc {
      display: inline-block; }

    .services-img {
      float: left;
      margin-right: 16px; }

    .services-desc > h6 {
      color: #555;
      font-weight: 600; }

    .services-desc > p {
      color: #666;
      font-weight: 400;
      margin: 0; }

    .w-single-services {
      margin-bottom: 31px; }

    .w-single-services.no-mb {
      margin-bottom: 0px; }

    .welcome-services {
      padding-top: 34px; }

    .single-services .welcome-title {
      padding-top: 43px; }

    .single-services .welcome-content {
      padding-top: 17px; }

    .welcome .popup-youtube {
      background: #fff none repeat scroll 0 0;
      border-radius: 100%;
      color: #0098ef;
      font-size: 30px;
      height: 70px;
      left: 50%;
      line-height: 70px;
      position: absolute;
      text-align: center;
      top: 50%;
      -webkit-transform: translate(-50%, -50%);
              transform: translate(-50%, -50%);
      width: 70px;
      z-index: 9; }

    .welcome .popup-youtube i {
      margin-left: 5px; }

    .welcome .wprt-image-video .iq-waves {
      height: 352px;
      height: 22rem;
      left: 50%;
      position: absolute;
      top: 50%;
      -webkit-transform: translate(-50%, -50%);
              transform: translate(-50%, -50%);
      width: 352px;
      width: 22rem;
      z-index: 2; }

    .welcome .wprt-image-video .iq-waves .waves {
      -webkit-animation: 3s ease-in-out 0s normal none infinite running waves;
              animation: 3s ease-in-out 0s normal none infinite running waves;
      background: #0098ef none repeat scroll 0 0 padding-box;
      border-radius: 320px;
      height: 352px;
      height: 22rem;
      opacity: 0;
      -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
      position: absolute;
      width: 352px;
      width: 22rem; }

    .welcome .wprt-image-video .iq-waves .wave-1 {
      -webkit-animation-delay: 0s;
              animation-delay: 0s; }

    .welcome .wprt-image-video .iq-waves .wave-2 {
      -webkit-animation-delay: 1s;
              animation-delay: 1s; }

    .welcome .wprt-image-video .iq-waves .wave-3 {
      -webkit-animation-delay: 2s;
              animation-delay: 2s; }

    @-webkit-keyframes waves {
      0% {
        -webkit-transform: scale(0.2, 0.2);
                transform: scale(0.2, 0.2);
        opacity: 0;
        -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)"; }
      50% {
        opacity: 0.9;
        -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=90)"; }
      100% {
        -webkit-transform: scale(0.6, 0.6);
                transform: scale(0.6, 0.6);
        opacity: 0;
        -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)"; } }
    @keyframes waves {
      0% {
        -webkit-transform: scale(0.2, 0.2);
                transform: scale(0.2, 0.2);
        opacity: 0;
        -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)"; }
      50% {
        opacity: 0.9;
        -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=90)"; }
      100% {
        -webkit-transform: scale(0.6, 0.6);
                transform: scale(0.6, 0.6);
        opacity: 0;
        -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)"; } }
    @media screen and (max-width: 991px) {
      .welcome .wprt-image-video {
        margin-top: 2.5rem; } }
    @media screen and (max-width: 575px) {
      .w-single-services.no-mb.mbx {
        margin-bottom: 31px; }

      .welcome-title h2 {
        font-size: 20px; }

      .welcome-title h4 {
        font-size: 16px; }

      .welcome-content > p span {
        font-size: 15px; } }
    </style>
</head>
    <section id="slider" class="slider-element slider-parallax swiper_wrapper full-screen clearfix"  style="background: url('images/custom-images/section/slider/Green-Planet-Lands-Ltd.jpg'); background-size: cover;"  data-height-md="700" data-height-sm="500" data-height-xs="500">



        <div class="slider-parallax-inner">
            <video id="slider_bg_vdo" poster="images/bg.webp" id="bgvid" playsinline autoplay muted loop>
            <source src="vdo/bg.webm" type="video/webm">
            <source src="vdo/bg.mp4" type="video/mp4">
        </video>
            <div class="">
                <div class="">
                    <div class="swiper-slide dark" >
                        <div class="container clearfix" id="custom-welcome-slider-container">

                            <div class="slider-caption slider-caption-center" id="custom-slider-caption-for-welcome-slider">

                                <div class="heading-block center text-right" id="welcome-slider-heading-block">
                                    
                                    <div class="row">
                                      <div class="col-md-10 col-sm-10 col-xs-6">
                                        <h2 id="welcome-slider-h2-01" style="color: #01BCEE"><span style="color: #fff;">Welcome To </span> Banalata Landmark</h2>
                                      </div>
                                      <div class="col-md-2 col-sm-6 col-xs-12">
                                        <a href="projects1.php"><img style="max-width:170px; margin:0 auto" src="img/RGTLogo.jpg" class="img-responsive"></a>
                                        <a href="projects2.php"><img style="margin-top: 15px;" src="images/custom-images/logo/header-logo-01.png" class="img-fluid"></a>
                                      </div>
                                    </div>                                    
                                   
                                   <!-- <h2 class="welcome-slider-h2-02">Secure your future by investing today with the right people</h2> -->
                                    <!-- <a href="http://www.blueplanetgroup.com/" class="button button-rounded button-reveal button-large button-border tright" id="meet-our-button"><i class="icon-play"></i><span>VISIT BLUE PLANET GROUP</span></a> -->

                                </div>

                            </div>
                        </div>
                    </div>

                </div>


            </div>

        </div>

        <a href="#" data-scrollto="#content" data-offset="0" class="dark one-page-arrow"><img class="infinite animated fadeInDown" src="demos/business/images/mouse.svg" alt="" ></a>

    </section>

	<!--************** Our Projects ************************-->
    <section id="content"> 

        <div class="content-wrap our-projects-content-wrap">

            <div class="container our-project-custom-container clearfix" id="">


                <div class="row our-project-custom-row">

                    <div class="col-md-12 our-project-holding-column">

                        <h2 class="our-projects-h2">OUR PROJECTS</h2>

                        <p class="our-projects-p">Banalata LandMark is very professionally organized. Much time is devoted to research and proper planning. We have associated with top-ranking consulting Architects, Landscaping  Consultants,  Soil Investigators, Structural Engineers, Air conditioning Experts, Mechanical Engineers, Plumbing Experts, Electrical  Fire, and Safety companies. 
                        </p>


                        <a href="#" class="button button-rounded button-reveal button-large button-border tright" id="our-project-button" data-toggle="modal" data-target=".bs-example-modal-lg"><i class="icon-play"></i><span>PROJECTS LOCATION MAP</span></a>

                    </div>



                    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true"> <!-- Large modal -->
                        <div class="modal-dialog modal-lg">
                            <div class="modal-body">
                                <div class="modal-content">


                                    <div class="modal-body">

                                        <img src="img/Rivergate_map.jpg" id="project-location-map">


                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>


            </div>

        </div>

    </section><!-- Our Projects #content end -->

    <!-- <section id="content"  style="background:#f8f8f8 url(images/pattern.jpg) repeat;position: relative;">
    
        <div class="content-wrap our-projects-content-wrap">
    
            <div class="container our-project-custom-container clearfix" id="">
    
    
                <div class="row our-project-custom-row">
    
                    <div class="col-md-4 our-project-custom-col-md-4">
    
                        <div id="portfolio" class="portfolio grid-container portfolio-2 clearfix ">
    
                            <article class="portfolio-item pf-graphics pf-uielements" id="our-project-portfolio-item-article-tag">
    
    
    
                                <div class="portfolio-image">
                                    
                                    <img src="img/RGTLogo.jpg" class="img-responsive img-circle" alt="Play" _id="custom-our-project-play-button">
    
                                </div>
    
    
    
                            </article>
                        </div>
    
                    </div>
    
                    <div class="col-md-1 our-project-custom-col-md-1">
    
                        <hr class="hr-to-vertical" data-animate="fadeInDown">
    
                    </div>
    
                    <div class="col-md-7 our-project-holding-column">
    
                        <h2 class="our-projects-h2">OUR PROJECTS</h2>
    
                        <p class="our-projects-p">Banalata LandMark is very professionally organized. Much time is devoted to research and proper planning. As a matter of fact, 85% of the project sale is done during construction stage only. We have associated with top-ranking consulting Architects, Landscaping  Consultants,  Soil Investigators, Structural Engineers, Air conditioning Experts, Mechanical Engineers, Plumbing Experts, Electrical  Fire, and Safety companies. Banalata LandMark multidisciplinary specialist teams work, together to provide a seamless approach to the provision of its real estate investment advisory, project management, property management, and related real estate advisory services.
                        </p>
    
    
                        <a href="#" class="button button-rounded button-reveal button-large button-border tright" id="our-project-button" data-toggle="modal" data-target=".bs-example-modal-lg"><i class="icon-play"></i><span>PROJECTS LOCATION MAP</span></a>
    
                    </div>
    
    
    
                    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true"> 
                        <div class="modal-dialog modal-lg">
                            <div class="modal-body">
                                <div class="modal-content">
    
    
                                    <div class="modal-body">
    
                                        <img src="img/Rivergate_map.jpg" id="project-location-map">
    
    
                                    </div>
    
                                </div>
                            </div>
                        </div>
                    </div>
    
                </div>
    
    
            </div>
    
        </div>
    
    </section> -->


    




    <!-- Our Projects Palace Residence Section-->
    <section id="content" style="padding-left: 0px; padding-right: 0px;padding-top: 0px; padding-bottom: 0px;">
        <div class="grid" id="palace-residence-grid">
            <figure class="effect-lily palace-residence-effect-lily">
                <!-- <img src="images/custom-images/section/Palace/palace-2.png" id="palace-residence-background-img" alt="img12"/> -->
                <img src="images/custom-images/section/sister-concern/palace-residence-dhaka-5.jpg" id="palace-residence-background-img" alt="img12"/>
                <figcaption>
                    <div id="palace-residence-lily-fig-caption-div">
                        <h2><img src="img/RGTLogo.jpg" alt="Palace_Residence1" id="palace-residence-logo-01"  /></h2>
                        <p>Only a 5 KM from Airport & adjacent to Purbachal Sector-26.</p>
                        <p><a href="projects1.php" class="button button-rounded button-reveal button-large button-border tright" id="palace-residence-button"><i class="icon-play"></i><span>VIEW PROJECT</span></a>
                        </p>
                    </div>

                </figcaption>
            </figure>
            <figure class="effect-lily palace-residence-effect-lily">
                <img src="images/custom-images/section/Palace/palace-1.jpg" id="palace-residence-background-img" alt="img1"/>
                <figcaption>
                    <div id="palace-residence-lily-fig-caption-div">
                        <h2><img src="images/custom-images/logo/Palace_Residence2.png" alt="Palace_Residence1" id="palace-residence-logo-01"  /></h2>
                        <p>Only a 5 KM from Airport & adjacent to Purbachal Sector-26</p>
                        <p><a href="projects2.php" class="button button-rounded button-reveal button-large button-border tright" id="palace-residence-button"><i class="icon-play"></i><span>VIEW PROJECT</span></a>
                        </p>
                    </div>

                </figcaption>
            </figure>
        </div>
    </section>


    <!-- STAR SECTION WELCOME -->
    <section class="welcome" style="background:#f8f8f8 url(img/index.png) repeat;position: relative;">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-xs-12">
                    <div class="welcome-title">
                        <h2>WELCOME TO <span>FIND HOUSES</span></h2>
                        <h4>THE BEST PLACE TO FIND THE HOUSE YOU WANT.</h4>
                    </div>
                    <div class="welcome-content">
                        <p>The best place for elit, sed do eiusmod tempor dolor sit amet, conse ctetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et lorna aliquatd minimam, quis nostrud exercitation oris nisi ut aliquip ex ea.</p>
                    </div>
                    <div class="welcome-services">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-xs-12 ">
                                <div class="w-single-services">
                                    <div class="services-img img-1">
                                        <img src="images/1.png" width="32" alt="">
                                    </div>
                                    <div class="services-desc">
                                        <h6>Buy Property</h6>
                                        <p>We have the best properties
                                            <br> elit, sed do eiusmod tempe</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-xs-12 ">
                                <div class="w-single-services">
                                    <div class="services-img img-2">
                                        <img src="images/2.png" width="32" alt="">
                                    </div>
                                    <div class="services-desc">
                                        <h6>Rent Property</h6>
                                        <p>We have the best properties
                                            <br> elit, sed do eiusmod tempe</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-xs-12 ">
                                <div class="w-single-services no-mb mbx">
                                    <div class="services-img img-3">
                                        <img src="images/3.png" width="32" alt="">
                                    </div>
                                    <div class="services-desc">
                                        <h6>Real Estate Kit</h6>
                                        <p>We have the best properties
                                            <br> elit, sed do eiusmod tempe</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-xs-12 ">
                                <div class="w-single-services no-mb">
                                    <div class="services-img img-4">
                                        <img src="images/4.png" width="32" alt="">
                                    </div>
                                    <div class="services-desc">
                                        <h6>Sell Property</h6>
                                        <p>We have the best properties
                                            <br> elit, sed do eiusmod tempe</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-xs-12">
                    <div class="wprt-image-video w50">
                        <img alt="image" src="images/welcome.jpg">
                        <a class="icon-wrap popup-video popup-youtube" href="https://www.youtube.com/watch?v=2xHQqYRcrx4">
                            <img src="images/watch-video-button-png-2.png" style="width: 20px;">
                        </a>
                        <div class="iq-waves">
                            <div class="waves wave-1"></div>
                            <div class="waves wave-2"></div>
                            <div class="waves wave-3"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END SECTION WELCOME -->

    <!-- Palace Luxury Resort Section -->
    <!-- <section id="content" style="background: #f8f8f8 url(images/pattern.jpg) repeat">

        <div class="content-wrap palace-luxury-resort-custom-content-wrap" >

            <div class="container clearfix">

                <div class="heading-block palace-luxury-resort-custom-heading-block center">

                    <h2 class="palace-luxury-resort-h2">LUXURY RESORT</h2>

                    <span class="palace-luxury-resort-span">Banalata Landmark is brought to you by the same parent company that created the largest 5 Star resort in Bangladesh.&nbsp; It's an oasis in pristine nature where one can experience unparalleled luxury unlike anywhere in Bangladesh.</span>
                </div>

                <div class="center bottommargin">
                    <a href="https://www.youtube.com/watch?v=OBZU0Dy8f7M" data-lightbox="iframe" style="position: relative;">
                        <img src="images/custom-images/section/Palace/palace-luxury-resort-01.jpg" alt="Video" class="palace-luxury-resort-poster-img-for-video">
                        <span class="i-overlay" id="palace-luxury-resort-i-overlay" ><img src="images/custom-images/icon/video-play-icon.png" alt="Play"></span>
                    </a>
                </div>

            </div>
        </div>
    </section> -->



    <!-- Palace MEET OUR TEAM Section -->
    <!-- <section id="content" style="padding: 0px;">

        <div class="content-wrap nopadding">

            <div class="section parallax dark nomargin noborder" style="padding: 150px 0; background-image: url('images/custom-images/section/meet-our-team/meet-our-team-new.jpg');" data-bottom-top="background-position:0px 300px;" data-top-bottom="background-position:0px -300px;">
                <div class="container center clearfix">


                    <div class="heading-block center" id="meet-our-team-heading-block">

                        <h2 id="meet-our-team-h2-01">THE BEST INVESTMENTS</h2>
                        <h2 class="meet-our-team-h2-02">START WITH THE RIGHT PEOPLE</h2>

                        <a href="http://www.blueplanetgroup.com/" class="button button-rounded button-reveal button-large button-border tright" id="meet-our-button"><i class="icon-play"></i><span>VISIT BLUE PLANET GROUP</span></a>

                    </div>

                </div>
            </div>

        </div>
    </section> -->




    <!-- Why Us Section -->
    <section id="content">

        <div class="content-wrap">

            <div class="container clearfix">

                <div class="heading-block center" style="margin-bottom: 0px;">

                    <h2 class="palace-why-us-h2">WHY US</h2>

                    <p style="text-align: justify;font-weight: 300;font-family: 'Montserrat';font-size: 16px;color: #111111;margin-bottom: 30px;line-height: 32px;" _class="palace-why-us-span">
                        

                        Banalata Landmark is very professionally organized. Much time is devoted to research and proper planning. We have associated with top-ranking consulting Architects, Landscaping  Consultants,  Soil Investigators, Structural Engineers, Air conditioning Experts, Mechanical Engineers, Plumbing Experts, Electrical  Fire, and Safety companies. Bacon’s multidisciplinary specialist teams work, together to provide a seamless approach to the provision of its real estate investment advisory, project management, property management, and related real estate advisory services.

                        Banalata provided all sort of construction services for individual and company.   Banalata gives facility to our customers to design and construction service to construct his/her own property. An efficient team of engineers &  Architects of  Banalata Landmark Developments is the driving force in the mega success of a series of multi – storied residential apartments, commercial complex, shopping malls, and office towers etc…

                    </p>

                </div>

            </div>
        </div>
    </section>



    <!--  Palace-about-us Section-->
    <section id="content" style="padding-left: 0px; padding-right: 0px;padding-top: 0px; padding-bottom: 0px;">
        <div class="grid" id="palace-about-us-grid">
            <figure class="effect-lily palace-about-us-effect-lily">
                <img src="images/custom-images/section/Palace/palace-1.jpg" id="palace-about-us-background-img" alt="img12"/>
                <figcaption>
                    <div id="palace-about-us-lily-fig-caption-div">
                        <h2 >Proximity to Dhaka</h2>
                        <p>Just a 30 min drive from Dhaka in prime locations</p>
                        <p><a href="#" class="button button-rounded button-reveal button-large button-border tright" id="palace-about-us-button" data-toggle="modal" _data-target=".bs-example-modal-lg"><i class="icon-play"></i><span>VIEW MAP</span></a>
                        </p>
                    </div>

                </figcaption>
            </figure>
            <figure class="effect-lily palace-about-us-effect-lily">
                <img src="images/custom-images/section/Palace/palace-2.png" id="palace-about-us-background-img" alt="img1"/>
                <figcaption>
                    <div id="palace-about-us-lily-fig-caption-div">
                        <h2 >Purchased Land</h2>
                        <p>Existing land that we own that you visit and see for yourself</p>
                        <p><a _href="gallery.html" class="button button-rounded button-reveal button-large button-border tright" id="palace-about-us-button"><i class="icon-play"></i><span>VIEW GALLERY</span></a>
                        </p>
                    </div>

                </figcaption>
            </figure>
            <!-- <figure class="effect-lily palace-about-us-effect-lily">
                <img src="images/custom-images/section/Palace/palace-1.jpg" id="palace-about-us-background-img" alt="img12"/>
            
                <figcaption>
                    <div id="palace-about-us-lily-fig-caption-div">
                        <h2 >Instant Registration</h2>
                        <p>All plots come with instant registration upon booking</p>
                        <p>
                            <a href="#" class="button button-rounded button-reveal button-large button-border tright"  data-toggle="modal" _data-target=".bs-example-modal-lg-01" id="palace-about-us-button"><i class="icon-play"></i><span>LEARN MORE</span></a>
                        </p>
                    </div>
            
                </figcaption>
            </figure> 
            <figure class="effect-lily palace-about-us-effect-lily">
                <img src="images/custom-images/section/Palace/palace-2.png" id="palace-about-us-background-img" alt="img1"/>
                <figcaption>
                    <div id="palace-about-us-lily-fig-caption-div">
                        <h2 >Life Insurance</h2>
                        <p>Your investment is safe in the event of any unfortunate incident</p>
                        <p>
                            <a href="#"  class="button button-rounded button-reveal button-large button-border tright" data-toggle="modal" _data-target=".bs-example-modal-lg-02" id="palace-about-us-button"><i class="icon-play"></i><span>LEARN MORE</span></a>
                        </p>
                    </div>

                </figcaption>
            </figure>-->
            <figure class="effect-lily palace-about-us-effect-lily">
                <img src="images/custom-images/section/Palace/palace-1.jpg" id="palace-about-us-background-img" alt="img12"/>
                <figcaption>
                    <div id="palace-about-us-lily-fig-caption-div">
                        <h2 >Apartments</h2>
                        <p>Option to buy land and have us build your apartment with EMI option</p>
                        <p>
                            <a href="#" class="button button-rounded button-reveal button-large button-border tright" data-toggle="modal" _data-target=".bs-example-modal-lg-03" id="palace-about-us-button"><i class="icon-play"></i><span>LEARN MORE</span></a>
                        </p>
                    </div>

                </figcaption>
            </figure>

            <figure class="effect-lily palace-about-us-effect-lily">
                <img src="images/custom-images/section/Palace/palace-2.png" id="palace-about-us-background-img" alt="img1"/>
                <figcaption>
                    <div id="palace-about-us-lily-fig-caption-div">
                        <h2 >Handover on Time</h2>
                        <p>We guarantee to handover all projects on time</p>

                        <p>
                            <a href="#" class="button button-rounded button-reveal button-large button-border tright" data-toggle="modal" _data-target=".bs-example-modal-lg-04" id="palace-about-us-button"><i class="icon-play"></i><span>LEARN MORE</span></a>
                        </p>

                    </div>

                </figcaption>
            </figure>
        </div>
    </section>


<section>
    <div class="modal fade bs-example-modal-lg-01" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true"> <!-- Large modal -->
        <div class="modal-dialog modal-lg">
            <div class="modal-body">
                <div class="modal-content">


                    <div class="modal-body" style="padding: 0">

                        <img src="images/custom-images/section/palace-about-us/Post_02.jpg">


                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="modal fade bs-example-modal-lg-02" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true"> <!-- Large modal -->
        <div class="modal-dialog modal-lg">
            <div class="modal-body">
                <div class="modal-content">


                    <div class="modal-body" style="padding: 0">

                        <img src="images/custom-images/section/palace-about-us/Post_05.jpg">


                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="modal fade bs-example-modal-lg-03" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true"> <!-- Large modal -->
        <div class="modal-dialog modal-lg">
            <div class="modal-body">
                <div class="modal-content">


                    <div class="modal-body" style="padding: 0">

                        <img src="images/custom-images/section/palace-about-us/Post_03.jpg">


                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="modal fade bs-example-modal-lg-04" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true"> <!-- Large modal -->
        <div class="modal-dialog modal-lg">
            <div class="modal-body">
                <div class="modal-content">


                    <div class="modal-body" style="padding: 0">

                        <img src="images/custom-images/section/palace-about-us/Post_04.jpg">


                    </div>

                </div>
            </div>
        </div>
    </div>
</section>


    <!--  Palace-Contact-us Section-->
    <section id="content" style="padding: 0px; padding-bottom: 0px">

        <div class="content-wrap" style="padding-bottom: 0px; padding-top: 50px">

            <!-- Contact form -->
            <div class="section nobg nomargin nopadding clearfix" id="section-contact">
                <div class="container clearfix" style="text-align: center;">



                    <div class="heading-block center">
                        <h3 class="nott" id="palace-contact-header">CONTACT US</h3>
                        <span class="palace-contact-us-span">Get in touch with us today for any queries or to schedule a site visit with our team.</span>
                    </div>

                    <div class="clear"></div>

                    <div class="center bottommargin" id="address-text">

                        <abbr><span style="color: #206931; font-weight: 600;">Hotline:</span></abbr><br>
                        <abbr title="Phone Number"></abbr> (+88)01714500596 <br><br>

                        <abbr title="Email Address"></abbr><span style="color: #206931; font-weight: 600;">Email:</span><br> <span>banalatalandmark@gmail.com</span> <br><br>

                        <address>
                            <span style="color: #206931; font-weight: 600;">Corporate Office:</span><br>
                            House # 151, Road # 01
                            <br>DOHS BARIDHARA,Dhaka.
                        </address>
                    </div>
                </div>
                <!-- Google Map ============================================= -->
                <div class="col-md-12" style="padding: 0">



                    <!-- <iframe src="https://snazzymaps.com/embed/51979" width="100%" height="600px" style="border:none;"/></iframe> -->
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3650.0958759791256!2d90.41125701434969!3d23.815189492216472!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c7bb76d64a3f%3A0xa7a1d452d63901db!2sBanalata+Landmark!5e0!3m2!1sen!2sbd!4v1538075328206" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

                </div><!-- Google Map End -->

            </div>

        </div>

    </section>


<footer class="first-footer">
    <div class="top-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="netabout">
                        <a href="index.html" class="logo">
                            <img src="images/logo-footer.svg" alt="netcom">
                        </a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus impedit perferendis, laudantium molestiae ipsam rem veniam facere quos! Temporibus, minima culpa deleniti magnam.</p>
                        <a href="about.html" class="btn btn-secondary">Read More...</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="navigation">
                        <h3>Navigation</h3>
                        <div class="nav-footer">
                            <ul>
                                <li><a href="#">Home One</a></li>
                                <li><a href="#">Properties Right</a></li>
                                <li><a href="#">Properties List</a></li>
                                <li><a href="#">Property Details</a></li>
                                <li class="no-mgb"><a href="#">Agents Listing</a></li>
                            </ul>
                            <ul class="nav-right">
                                <li><a href="#">Agents Details</a></li>
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Blog Default</a></li>
                                <li><a href="#">Blog Details</a></li>
                                <li class="no-mgb"><a href="#">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="widget">
                        <h3>Twitter Feeds</h3>
                        <div class="twitter-widget contuct">
                            <div class="twitter-area">
                                <div class="single-item">
                                    <div class="icon-holder">
                                        <i class="fa fa-twitter" aria-hidden="true"></i>
                                    </div>
                                    <div class="text">
                                        <h5><a href="#">@findhouses</a> all share them with me baby said inspet.</h5>
                                        <h4>about 5 days ago</h4>
                                    </div>
                                </div>
                                <div class="single-item">
                                    <div class="icon-holder">
                                        <i class="fa fa-twitter" aria-hidden="true"></i>
                                    </div>
                                    <div class="text">
                                        <h5><a href="#">@findhouses</a> all share them with me baby said inspet.</h5>
                                        <h4>about 5 days ago</h4>
                                    </div>
                                </div>
                                <div class="single-item">
                                    <div class="icon-holder">
                                        <i class="fa fa-twitter" aria-hidden="true"></i>
                                    </div>
                                    <div class="text">
                                        <h5><a href="#">@findhouses</a> all share them with me baby said inspet.</h5>
                                        <h4>about 5 days ago</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="contactus">
                        <h3>Contact Us</h3>
                        <ul>
                            <li>
                                <div class="info">
                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                    <p class="in-p">House # 151,  Road # 01, DOHS BARIDHARA,Dhaka.</p>
                                </div>
                            </li>
                            <li>
                                <div class="info">
                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                    <p class="in-p">+8801714500596</p>
                                </div>
                            </li>
                            <li>
                                <div class="info">
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                    <p class="in-p ti">banalatalandmark@gmail.com</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!-- <ul class="netsocials">
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                    </ul> -->
                    <div class="palace-footer-social-icons-col col_last tright" style="float: left;">
                        <div class="fright clearfix" id="palace-footer-social-icons" style="">
                            <a href="#" _href="https://www.facebook.com/palaceresidence/" class="social-icon si-small si-rounded si-colored si-facebook" >
                                <i class="icon-facebook" ></i>
                                <i class="icon-facebook"></i>
                            </a>

                            <a href="#" _href="https://www.youtube.com/channel/UCq34GHREXfiZSCwYICvNYLg" class="social-icon si-small si-rounded si-colored si-youtube">
                                <i class="icon-youtube"></i>
                                <i class="icon-youtube"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<?php
require_once('footer.php');
?>

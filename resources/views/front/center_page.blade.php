@extends('gabarit_front.structure_pages')

@section('pages')

    <body  data-spy="scroll" data-target=".navbar" data-offset="90">

    <!--PreLoader-->
    <div class="loader">
        <div class="loader-inner">
            <div class="loader-blocks">
                <span class="block-1"></span>
                <span class="block-2"></span>
                <span class="block-3"></span>
                <span class="block-4"></span>
                <span class="block-5"></span>
                <span class="block-6"></span>
                <span class="block-7"></span>
                <span class="block-8"></span>
                <span class="block-9"></span>
                <span class="block-10"></span>
                <span class="block-11"></span>
                <span class="block-12"></span>
                <span class="block-13"></span>
                <span class="block-14"></span>
                <span class="block-15"></span>
                <span class="block-16"></span>
            </div>
        </div>
    </div>
    <!--PreLoader Ends-->

    <!-- header -->
    @include('gabarit_front.header')
    <!-- header -->




    <div class="row">
        <img style="width: 100% " alt="video img" src="images/slide-4.jpg">
    </div>






    <!-- breadcrumb -->
    <div class="breadcrumb-main">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="{{url('/')}}">{{__('Accueil')}}</a></li>
                <li class="active">{{__('Le Centre')}}</li>
            </ul>
        </div>
    </div>
    <!-- End breadcrumb -->

    <!--*About*-->
    <section id="mt_about">
        <div class="container">
            <div class="about_services">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="about-items text-end">
                            <div class="inner-heading">
                                <h3>{{__('A PROPOS DE NOUS')}}</h3>
                                <h2 class="mar-0">{{__('Découvrir notre Centre')}}</h2>
                            </div>
                            <p>Lorem ipsum gravida nibh vel velit auctor aliquetn sollicitudirem quibibendum auci elit cons equat ipsutis sem nibh  id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt  mauris. <br><br>Auci elit cons equat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet . Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt  mauris.
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="about-edu-bg">
                            <img src="images/about.png" alt="About">
                        </div>

                    </div>
                    <div class="col-xs-12">
                        <div class="about-form">
                            <div class="col-sm-9">
                                <div class="about-sch-form">
                                    <div class="event-title">
                                        <h2>Lorem ipsum gravida nibh </h2>
                                        <p class="white">Lorem ipsum gravida nibh vel velit auctor aliquetn sollicitudirem quibibendum auci elit cons equat ipsutis sem nibh  id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt  mauris.</p>
                                    </div> <!-- event title -->
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="smt-items mar-top-70">
                                    <a class="mt_btn_yellow" href="">Découvrir</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--*EndAbout*-->

    <!-- About Courses -->
    <div class="edu-courses about-edu-courses">
        <div class="container">
            <div class="row panel-grid-banner">
                <div class="col-sm-4 col-xs-12">
                    <div class="inner-grid text-end">
                        <div class="text-courses">
                            <i class="fa fa-laptop"></i>
                            <h3>{{__('Cours en Lignes')}}</h3>
                        </div>
                        <div class="courses-content">
                            <p>Auci elit cons equat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet</p>
                            <a href="#" class="mt_btn_yellow">{{__('Lire Plus')}}</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-12">
                    <div class="inner-grid text-end">
                        <div class="text-courses">
                            <i class="fa fa-users"></i>
                            <h3>{{__('Enseignants Qualifiés')}}</h3>
                        </div>
                        <div class="courses-content">
                            <p>Auci elit cons equat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet</p>
                            <a href="#" class="mt_btn_yellow">{{__('Lire Plus')}}</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-12">
                    <div class="inner-grid text-end">
                        <div class="text-courses">
                            <i class="fa fa-book"></i>
                            <h3>{{__('Bibliothèque et magasins')}}</h3>
                        </div>
                        <div class="courses-content">
                            <p>Auci elit cons equat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet</p>
                            <a href="#" class="mt_btn_yellow">{{__('Lire Plus')}}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End About Courses -->

    <!--* Mission Area*-->
    <section id="mission_main" class="mission-area section-padding">
        <div class="container">
            <div class="row text-end">
                <div class="col-lg-6 col-sm-6 col-xs-12">
                    <div class="mission-content">
                        <div class="inner-heading">
                            <h3>{{__('MISSION')}}</h3>
                            <h2>{{__('Notre vision du Centre')}}</h2>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p><br>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6 col-xs-12">
                    <div class="mission-progress-bar">
                        <div class="progress-wrap">
                            <h5>{{__('Résultats Connus')}}</h5>
                            <div class="progress">
                                <div class="progress-bar  color1" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">
                                    <span class="bar-width">95%</span>
                                </div>

                            </div>
                        </div>

                        <div class="progress-wrap">
                            <h5>{{__('Étude de Marché')}}</h5>
                            <div class="progress">
                                <div class="progress-bar  color1" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
                                    <span class="bar-width">60%</span>
                                </div>

                            </div>
                        </div>

                        <div class="progress-wrap">
                            <h5>
                                {{__('Conseil Stratégique')}}</h5>
                            <div class="progress">
                                <div class="progress-bar  color1" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                                    <span class="bar-width">90%</span>
                                </div>

                            </div>
                        </div>

                        <div class="progress-wrap">
                            <h5>{{__('Enseignement Numérique')}}</h5>
                            <div class="progress">
                                <div class="progress-bar  color1" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                                    <span class="bar-width">75%</span>
                                </div>

                            </div>
                        </div>

                        <div class="progress-wrap">
                            <h5>{{__('Online Reputation')}}</h5>
                            <div class="progress">
                                <div class="progress-bar  color1" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
                                    <span class="bar-width">80%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--* End Mission Area*-->

    <!--* Testimonial*-->
    <section id="const-testi" class="edu-testimonial text-end">
        <div class="container wow slideInDown" data-wow-duration="2s">
            <div class="row">
                <div class="col-sm-6">
                    <!-- section title -->
                    <div class="inner-heading">
                        <h3 class="white">{{__('TÉMOIGNAGES')}}</h3>
                        <h2 class="white">{{__('Voir ce que nos étudiants ont à dire')}}
                        </h2>
                        <div class="testimonial-abt">
                            <p class="white">Lorem ipsums dolors sit amet consectetur adipiselo elit sed do eiused tempor the incididunt ut labore et. Auci elit cons equat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet . Morbi accumsan ipsum velit.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="row slider-eductestimo">
                        <div class="col-sm-4">
                            <div class="item">
                                <div class="testimonial_main">
                                    <div class="client-pic"><img src="images/team/member-1.jpg" alt=""></div>
                                    <h4>
                                        <a href="#" class="text-uppercase"> Adam Sami</a>
                                        <span>Signalisation</span>
                                    </h4>
                                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal.</p>

                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="item">
                                <div class="testimonial_main">
                                    <div class="client-pic"><img src="images/team/member-2.jpg" alt=""></div>
                                    <h4>
                                        <a href="#" class="text-uppercase">Noura Fathi</a>
                                        <span>Signalisation</span>
                                    </h4>
                                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal.</p>

                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="item">
                                <div class="testimonial_main">
                                    <div class="client-pic"><img src="images/team/member-3.jpg" alt=""></div>
                                    <h4>
                                        <a href="#" class="text-uppercase">Imane Mamou</a>
                                        <span>Signalisation</span>
                                    </h4>
                                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal.</p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--* EndTestimonial*-->

    <!--* Fun And Facts*-->
    <section id="mt_fun" class="about-pg-mt section-inner">
        <div class="container">
            <div class="mt-statts">
                <div class="inner-heading">
                    <h3>POURQUOI NOUS CHOISIR</h3>
                    <h2>Différents cours au choix
                    </h2>
                </div>
                <div class="row facts_row">
                    <div class="col-md-8 col-sm-8 col-xs-12 facts_col">
                        <div class="fun-facts-main">
                            <div class="fun-facts_wrapper">
                                <i class="fa fa-trophy"></i>
                                <p class="fun-facts_figure timer" data-to="275" data-speed="3000"></p>
                                <span class="fun-facts_title"> PRIX </span>
                            </div>
                            <div class="fun-facts_wrapper">
                                <i class="fa fa-graduation-cap"></i>
                                <p class="fun-facts_figure timer" data-to="3282" data-speed="3000"></p>
                                <span class="fun-facts_title"> ÉLÈVES</span>
                            </div>
                            <div class="fun-facts_wrapper">
                                <i class="fa fa-university"></i>
                                <p class="fun-facts_figure timer" data-to="120" data-speed="3000"></p>
                                <span class="fun-facts_title"> ANS D'HISTOIRE</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="nets-facts">
                            <h2>Faites un Tour </h2>
                            <div class="pulses">
                                <button type="button" class="play-btn js-video-button" data-video-id='176543782' data-channel="vimeo"><i class="fa fa-play"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>









    <!--Location Map here-->
    <div id="map-container"></div>
    </section>
    <!--Contact US Ends-->

    <!--Site Footer Here-->
    @include('gabarit_front.footer')
    <!--Footer ends-->



    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{asset('js_front/jquery-3.1.1.min.js')}}"></script>

    <!--Bootstrap Core-->
    <script src="{{asset('js_front/popper.min.js')}}"></script>
    <script src="{{asset('js_front/bootstrap.min.js')}}"></script>

    <!--to view items on reach-->
    <script src="{{asset('js_front/jquery.appear.js')}}"></script>

    <!--Equal-Heights-->
    <script src="{{asset('js_front/jquery.matchHeight-min.js')}}"></script>

    <!--Owl Slider-->
    <script src="{{asset('js_front/owl.carousel.min.js')}}"></script>

    <!--number counters-->
    <script src="{{asset('js_front/jquery-countTo.js')}}"></script>

    <!--Parallax Background-->
    <script src="{{asset('js_front/parallaxie.js')}}"></script>

    <!--Cubefolio Gallery-->
    <script src="{{asset('js_front/jquery.cubeportfolio.min.js')}}"></script>

    <!--FancyBox popup-->
    <script src="{{asset('js_front/jquery.fancybox.min.js')}}"></script>

    <!-- Video Background-->
    <script src="{{asset('js_front/jquery.background-video.js')}}"></script>

    <!--TypeWriter-->
    <script src="{{asset('js_front/typewriter.js')}}"></script>

    <!--Particles-->
    <script src="{{asset('js_front/particles.min.js')}}"></script>

    <!--WOw animations-->
    <script src="{{asset('js_front/wow.min.js')}}"></script>

    <!--Revolution SLider-->
    <script src="{{asset('js_front/revolution/jquery.themepunch.tools.min.js')}}"></script>
    <script src="{{asset('js_front/revolution/jquery.themepunch.revolution.min.js')}}"></script>
    <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
    <script src="{{asset('js_front/revolution/extensions/revolution.extension.actions.min.js')}}"></script>
    <script src="{{asset('js_front/revolution/extensions/revolution.extension.carousel.min.js')}}"></script>
    <script src="{{asset('js_front/revolution/extensions/revolution.extension.kenburn.min.js')}}"></script>
    <script src="{{asset('js_front/revolution/extensions/revolution.extension.layeranimation.min.js')}}"></script>
    <script src="{{asset('js_front/revolution/extensions/revolution.extension.migration.min.js')}}"></script>
    <script src="{{asset('js_front/revolution/extensions/revolution.extension.navigation.min.js')}}"></script>
    <script src="{{asset('js_front/revolution/extensions/revolution.extension.parallax.min.js')}}"></script>
    <script src="{{asset('js_front/revolution/extensions/revolution.extension.slideanims.min.js')}}"></script>
    <script src="{{asset('js_front/revolution/extensions/revolution.extension.video.min.js')}}"></script>

    <!--Google Map API-->
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyAfzJrG8u_tUgBqK5M61cj_-ytj68rJwZA&language=ar"></script>
    <script src="{{asset('js_front/functions.js')}}"></script>
    <!-- Fancybox jquery --><script src="{{asset('js_front/new/jquery.fancybox.pack.js')}}"></script>
    <!-- Navigation jquery --><script src="{{asset('js_back/new/jquery.nav.js')}}"></script>
    <!-- Slick jquery --><script src="{{asset('js_front/new/slick.js')}}"></script>


    <script>
        /*======== Doucument Ready Function =========*/
        jQuery(document).ready(function () {
            var $window = $(window);

            $window.on( 'load', function () {
                $("#status").fadeOut();
                $("#preloader").delay(350).fadeOut("slow");
                $("body").delay(350).css({ "overflow": "visible" });


                /* Init Wow Js */
                new WOW().init();

                /*========= Masonry Grid Script ==========*/

                $(".grid-masonry").masonry({
                    // options...
                    itemSelector: ".grid-item",
                    columnWidth: ".grid-item",

                });

                /*========== End Masonry Grid ==========*/
                $('.slider-eductestimo').slick({
                    infinite: true,
                    autoplay: false,
                    arrows: false,
                    dots: false,
                    slidesToShow: 1,
                    slidesToScroll: 1
                });
                /* Preloader */

                $("#status").fadeOut();
                $("#preloader").delay(350).fadeOut("slow");

                /* END of Preloader */

            });

//Progress bar
            jQuery('.skillbar').each(function(){
                jQuery(this).find('.skillbar-bar').animate({
                    width:jQuery(this).attr('data-percent')
                },6000);
            });


        });

        $(document).ready(function() {
            $('.progress .progress-bar').css("width",
                function() {
                    return $(this).attr("aria-valuenow") + "%";
                }
            )
        });

        $('.slider-eductestimo').slick({
            infinite: true,
            autoplay: false,
            arrows: false,
            dots: false,
            slidesToShow: 1,
            slidesToScroll: 1
        });

        try {
            $(".fun-facts_wrapper").appear(function () {
                $(".timer").countTo();
            });
        } catch (err) {

            console.log(err.message);
        }
    </script>
    </body>

@endsection

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



    <!--Main Slider-->
    <div id="revo_main_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="classic4export" style="margin:0px auto;background-color:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">
        <!-- START REVOLUTION SLIDER 5.4.1 fullwidth mode -->
        <div id="rev_arrows" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.4.1">
            <ul> <!-- SLIDE  -->
                <li data-index="rs-first" data-transition="fadeout" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000"  data-thumb="images/arrow-slide1.jpg')}}"  data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off">
                    <!-- MAIN IMAGE -->
                    <img src="{{asset('images/arrow-slide1.jpg')}}"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>

                    <!-- LAYER NR. 1 -->
                    <div class="tp-caption tp-resizeme"
                         data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['-60','-60','-50','-50']"
                         data-width="none" data-height="none" data-type="text"
                         data-textAlign="['center','center','center','center']"
                         data-responsive_offset="on" data-start="1000"
                         data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1500,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'>
                        <h1 class="text-capitalize font-xlight whitecolor text-center">{{__("Explorer Notre Centre")}}</h1> </div>

                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption tp-resizeme"
                         data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                         data-width="none" data-height="none" data-type="text"
                         data-textAlign="['center','center','center','center']"
                         data-responsive_offset="on" data-start="1500"
                         data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1500,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'>
                        <h1 class="text-capitalize fontbold whitecolor text-center">{{__("Agir Ensemble")}}</h1> </div>

                    <!-- LAYER NR. 3 -->
                    <div class="tp-caption tp-resizeme"
                         data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['70','70','70','70']"
                         data-width="none" data-height="none" data-whitespace="nowrap" data-type="text"
                         data-textAlign="['center','center','center','center']"
                         data-responsive_offset="on" data-start="2000"
                         data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":2000,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'>
                        <h4 class="whitecolor font-light text-center">{!!__("Prévoir et prévenir les accidents de la route dérivés généralement de la méconnaissance du code <br> de la route, de la négligence ou du manque d'attention")!!}</h4> </div>
                </li>

                <!-- SLIDE  -->
                <li data-index="rs-second" data-transition="fadetotopfadefrombottom" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="Power3.easeInOut" data-easeout="Power3.easeInOut" data-masterspeed="1500"  data-thumb="images/arrow-slide2.jpg')}}">
                    <!-- MAIN IMAGE -->
                    <img src="{{asset('images/arrow-slide2.jpg')}}" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>

                    <!-- LAYER NR. 1 -->
                    <div class="tp-caption tp-resizeme"
                         data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['-60','-60','-50','-50']"
                         data-width="none" data-height="none" data-type="text"
                         data-textAlign="['center','center','center','center']"
                         data-responsive_offset="on" data-start="1000"
                         data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1500,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'>
                        <h1 class="text-capitalize font-xlight whitecolor text-center">{{__("Explorer Notre Centre")}}</h1> </div>

                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption tp-resizeme"
                         data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                         data-width="none" data-height="none" data-type="text"
                         data-textAlign="['center','center','center','center']"
                         data-responsive_offset="on" data-start="1500"
                         data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1500,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'>
                        <h1 class="text-capitalize fontbold whitecolor text-center">{{__("Agir Ensemble")}}</h1> </div>

                    <!-- LAYER NR. 3 -->
                    <div class="tp-caption tp-resizeme"
                         data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['70','70','70','70']"
                         data-width="none" data-height="none" data-whitespace="nowrap" data-type="text"
                         data-textAlign="['center','center','center','center']"
                         data-responsive_offset="on" data-start="2000"
                         data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":2000,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'>
                        <h4 class="whitecolor font-light text-center">{!!__("Prévoir et prévenir les accidents de la route dérivés généralement de la méconnaissance du code <br> de la route, de la négligence ou du manque d'attention")!!}</h4> </div>
                </li>



                </li>
            </ul>
        </div>
    </div>
    <!--Main Slider ends -->

    <!--Some Services-->
    <div class="container carousel-element">
        <div class="row">
            <div class="col-md-12">
                <div id="services-slider" class="owl-carousel">
                    <div class="item">
                        <div class="service-box">
                            <span class="bottom25"><i class="fa fa-clipboard"></i></span>
                            <h4 class="bottom10"><a href="javascript:void(0)">{{__('Obtenir de l’aide en sécurité')}}</a></h4>
                            <p class="white_p">{{__("Connaître et respecter les panneaux de signalisation et les règles de circulation")}}</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="service-box">
                            <span class="bottom25"><i class="fa fa-laptop"></i></span>
                            <h4 class="bottom10"><a href="javascript:void(0)">{{__('Changeons nos habitudes')}}</a></h4>
                            <p class="white_p">{{__("Développer des comportements et des attitudes responsables, civiques et sécuritaires en relation avec la circulation, dans notre rôle de piétons, de cyclistes et de voyageurs")}}</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="service-box">
                            <span class="bottom25"><i class="fa fa-support"></i></span>
                            <h4 class="bottom10"><a href="javascript:void(0)">{{__("S’améliorer en sécurité")}}</a></h4>
                            <p class="white_p">{{__("Posséder une réaction appropriée et sûre en tout temps lors de la conduite sur la route")}}</p>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
    <!--Some Services ends-->

    <!--Some Feature -->

    <section id="our-blog" class="half-section ">
        <div class="container">
            <div class="row reverse-direction">
                <div class="col-md-5 col-sm-12 ">
                    <div class="image hover-effect"><img src="{{asset('images/split-blog.jpg')}}" alt="our blog" class="equalheight"></div>
                </div>
                <div class="col-md-7 col-sm-12 ">
                    <div class="split-box center-block equalheight container-padding">
                        <div class="heading-title text-end">
               <span class="wow fadeIn position-left-sml" data-wow-delay="300ms">{{__('SENSIBILISER')}}
</span>
                            <h2 class="darkcolor bottom25 wow fadeIn text-end" data-wow-delay="350ms">{{__('Découvrir notre Centre')}}</h2>
                            <p class="bottom30 wow fadeInUp text-end" data-wow-delay="400ms">{{__("Les accidents de la route sont l’une des principales causes de mortalité dans le monde. À de nombreuses occasions, ces accidents sont évitables. Pour cela, la sécurité routière est essentielle pour atteindre l’objectif de réduction du taux d’accident. L’éducation routière est donc un outil indispensable pour renforcer la sécurité routière auprès du jeune public.")}}</p>
                            </p>


                            <a href="{{url('a-propos-de-nous')}}" class="button btnsecondary wow fadeInUp text-end" data-wow-delay="450ms">{{__('Lire Plus')}}</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>



    <!--Some Feature ends-->

    <!--Gallery-->
    <section id="portfolio-xe" class="bglight padding">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2 col-sm-12 text-center  ar-center-element">
                    <div class="heading-title wow fadeInUp" data-wow-delay="300ms">
                        <span>{{__('DERNIERS ÉVÈNEMENTS')}}</span>
                        <h3 class="darkcolor bottom10">{{__('Activités Fréquentes')}}</h3>
                        <p class="heading_space">{{__("Nos activités se basent sur une méthode pédagogique en sécurité théorique et pratique : les enfants dans la pratique montent aux vélos pour maitriser ce qu’ils ont appris dans la théorie par leurs professeurs qualifiés dans la formation et la Sécurité Routière.")}}</p>

                    </div>
                </div>
            </div>
            <div id="flat-gallery" class="cbp">
                <div class="cbp-item web logo">
                    <img src="{{asset('images/gallery-flat1.jpg')}}" alt="">
                    <div class="overlay center-block whitecolor">
                        <a class="plus" data-fancybox="gallery" href="images/gallery-flat1.jpg')}}"></a>
                        <h5 class="top30" style="text-align: center;">LA CONDUITE SOUS L’INFLUENCE DE STUPÉFIANTS</h5><br>
                        <p class="white_p">
                            <a href="javascript:void(0)" class="metabox top10 text-uppercase">
                                <i class="fa fa-user-o"></i> Ecole OUM HANI
                            </a>

                            <a href="javascript:void(0)" class="metabox top10 text-uppercase">
                                <i class="fa fa-calendar"></i> 22 Oct,19
                            </a>
                        </p>

                    </div>
                </div>
                <div class="cbp-item graphic print">
                    <img src="{{asset('images/gallery-flat2.jpg')}}" alt="">
                    <div class="overlay center-block whitecolor">
                        <a class="plus" data-fancybox="gallery" href="images/gallery-flat1.jpg')}}"></a>
                        <h5 class="top30" style="text-align: center;">LA CONDUITE SOUS L’INFLUENCE DE STUPÉFIANTS</h5><br>
                        <p class="white_p">
                            <a href="javascript:void(0)" class="metabox top10 text-uppercase">
                                <i class="fa fa-user-o"></i> Ecole OUM HANI
                            </a>

                            <a href="javascript:void(0)" class="metabox top10 text-uppercase">
                                <i class="fa fa-calendar"></i> 22 Oct,19
                            </a>
                        </p>

                    </div>
                </div>
                <div class="cbp-item logo graphic">
                    <img src="{{asset('images/gallery-flat3.jpg')}}" alt="">
                    <div class="overlay center-block whitecolor">
                        <a class="plus" data-fancybox="gallery" href="{{asset('images/gallery-flat1.jpg')}}"></a>
                        <h5 class="top30" style="text-align: center;">LA CONDUITE SOUS L’INFLUENCE DE STUPÉFIANTS</h5><br>
                        <p class="white_p">
                            <a href="javascript:void(0)" class="metabox top10 text-uppercase">
                                <i class="fa fa-user-o"></i> Ecole OUM HANI
                            </a>

                            <a href="javascript:void(0)" class="metabox top10 text-uppercase">
                                <i class="fa fa-calendar"></i> 22 Oct,19
                            </a>
                        </p>

                    </div>
                </div>
                <div class="cbp-item print">
                    <img src="{{asset('images/gallery-flat4.jpg')}}" alt="">
                    <div class="overlay center-block whitecolor">
                        <a class="plus" data-fancybox="gallery" href="images/gallery-flat1.jpg')}}"></a>
                        <h5 class="top30" style="text-align: center;">LA CONDUITE SOUS L’INFLUENCE DE STUPÉFIANTS</h5><br>
                        <p class="white_p">
                            <a href="javascript:void(0)" class="metabox top10 text-uppercase">
                                <i class="fa fa-user-o"></i> Ecole OUM HANI
                            </a>

                            <a href="javascript:void(0)" class="metabox top10 text-uppercase">
                                <i class="fa fa-calendar"></i> 22 Oct,19
                            </a>
                        </p>

                    </div>
                </div>
                <div class="cbp-item logo">
                    <img src="{{asset('images/gallery-flat5.jpg')}}" alt="">
                    <div class="overlay center-block whitecolor">
                        <a class="plus" data-fancybox="gallery" href="images/gallery-flat1.jpg')}}"></a>
                        <h5 class="top30" style="text-align: center;">LA CONDUITE SOUS L’INFLUENCE DE STUPÉFIANTS</h5><br>
                        <p class="white_p">
                            <a href="javascript:void(0)" class="metabox top10 text-uppercase">
                                <i class="fa fa-user-o"></i> Ecole OUM HANI
                            </a>

                            <a href="javascript:void(0)" class="metabox top10 text-uppercase">
                                <i class="fa fa-calendar"></i> 22 Oct,19
                            </a>
                        </p>

                    </div>
                </div>
                <div class="cbp-item web print graphic">
                    <img src="{{asset('images/gallery-flat6.jpg')}}" alt="">
                    <div class="overlay center-block whitecolor">
                        <a class="plus" data-fancybox="gallery" href="images/gallery-flat1.jpg')}}"></a>
                        <h5 class="top30" style="text-align: center;">LA CONDUITE SOUS L’INFLUENCE DE STUPÉFIANTS</h5><br>
                        <p class="white_p">
                            <a href="javascript:void(0)" class="metabox top10 text-uppercase">
                                <i class="fa fa-user-o"></i> Ecole OUM HANI
                            </a>

                            <a href="javascript:void(0)" class="metabox top10 text-uppercase">
                                <i class="fa fa-calendar"></i> 22 Oct,19
                            </a>
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Gallery ends -->

    <!-- Our Blogs -->

    <!--Our Blogs Ends-->

    <!-- Our Team-->
    <section id="our-team" class="padding bglight">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2 col-sm-12 text-center ar-center-element">
                    <div class="heading-title wow fadeInUp" data-wow-delay="300ms">
               <span class="">{{__('FORMATEURS')}}
</span>
                        <h2 class="darkcolor bottom20">{{__('Rencontrez nos Formateurs')}}</h2>
                        <p class="heading_space">{{__("Les cours en théorie et en pratique sont donnés par des enseignants qualifiés en sécurité Routière et agrées, dotés d’expérience en la matière et ayant l’engagement de transmettre leur savoir-faire aux élèves pour qu’ils deviennent des ambassadeurs de la sécurité.")}}</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div id="ourteam-slider" class="owl-carousel">
                        <div class="item">
                            <div class="team-box">
                                <div class="image">
                                    <img src="{{asset('images/team-3.jpg')}}" alt="">
                                </div>
                                <div class="team-content gradient_bg whitecolor">
                                    <h3>Mourad Ihssane</h3>
                                    <p class="white_p">Signalisation</p> <br><br>
                                    <div class="progress-bars ">
                                        <p class="white_p">Curabitur mollis bibendum luctus. Duis suscipit vitae dui sed suscipit. Vestibulum auctor nunc vitae diam eleifend, in maximus metus sollicitudin. Quisque vitae sodales lectus. Nam porttitor justo sed mi finibus, vel tristique risus faucibus. </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="team-box">
                                <div class="image">
                                    <img src="{{asset('images/team-2.jpg')}}" alt="">
                                </div>
                                <div class="team-content gradient_bg whitecolor">
                                    <h3>Ilham Samir</h3>
                                    <p class="white_p">Signalisation</p> <br><br>
                                    <div class="progress-bars ">
                                        <p class="white_p" >Curabitur mollis bibendum luctus. Duis suscipit vitae dui sed suscipit. Vestibulum auctor nunc vitae diam eleifend, in maximus metus sollicitudin. Quisque vitae sodales lectus. Nam porttitor justo sed mi finibus, vel tristique risus faucibus. </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="team-box">
                                <div class="image">
                                    <img src="{{asset('images/team-1.jpg')}}" alt="">
                                </div>
                                <div class="team-content gradient_bg whitecolor">
                                    <h3>Amal Mahjoubi</h3>
                                    <p class="white_p">Signalisation</p> <br><br>
                                    <div class="progress-bars ">
                                        <p  class="white_p">Curabitur mollis bibendum luctus. Duis suscipit vitae dui sed suscipit. Vestibulum auctor nunc vitae diam eleifend, in maximus metus sollicitudin. Quisque vitae sodales lectus. Nam porttitor justo sed mi finibus, vel tristique risus faucibus. </p>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Our Team ends-->

    <!-- Video Click -->
    <section id="video-bg" class="video-parallax padding_top">
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-sm-7 wow fadeInLeft" data-wow-delay="300ms">
                    <div class="heading-title text-md-left text-center padding_bottom">
                        <span class="text-end">{{__('VOUS VOULEZ DEVENIR AMBASSADEUR ?')}} </span>
                        <h2 class="fontregular bottom20 darkcolor  text-end">{{__('Savoir Plus')}}</h2>
                        <p class="text-end">{{__("L’éducation sur la route aspire à cultiver chez le « petit » être humain une série de comportements, d’habitudes et de valeurs qui conduisent à une meilleure coexistence et au respect des droits de la route. Une personne doit marcher sur des voies publiques présentant un certain nombre de dangers, ce qui impose de penser à un ensemble de règles pour assurer la sécurité. Pour apprendre cet ensemble de règles, il faudra d'abord les appliquer au centre de sécurité routière pour enfants d'Alsa et devenir ainsi Ambassadeur de sécurité.")}}</p>
                        <a href="#contactus" class="button btnprimary top20 pagescroll position-left ">{{__('Contactez Nous')}}</a>
                    </div>
                </div>
                <div class="col-md-5 col-sm-5 padding_bottom wow fadeInRight" data-wow-delay="350ms">
                    <div class="image hover-effect">
                        <img alt="video img" src="{{asset('images/video-click.jpg')}}">

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Video Click-->











    <!-- Partners -->
    <section id="logos" class="padding partners">
        <div class="container">
            <h3 class="invisible">hidden</h3>
            <div class="row">
                <div class="col-md-12 col-sm-12">

                    <div id="partners-slider" class="owl-carousel">
                        <div class="item">
                            <div class="logo-item"> <img src="{{asset('img/logo-alsa.png')}}" alt="logo"></div>
                        </div>
                        <div class="item">
                            <div class="logo-item"> <img src="{{asset('img/Ministére.png')}}" alt="logo"></div>
                        </div>
                        <div class="item">
                            <div class="logo-item"><img src="{{asset('img/iniatiative.png')}}" alt="logo"></div>
                        </div>
                        <div class="item">
                            <div class="logo-item"><img src="{{asset('img/comité.png')}}" alt="logo"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Partners Ends-->

    @include('gabarit_front.contact')

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

    </body>

@endsection

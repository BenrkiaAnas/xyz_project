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






    <div class="row"  >
        <img style="width: 100% " alt="video img" src="{{asset('images/slide-3.jpg')}}">
    </div>



    <div class="breadcrumb-main">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="{{url('/')}}">{{__('Accueil')}}</a></li>
                <li class="active">{{__('Contact')}}</li>
            </ul>
        </div>
    </div>
    <!-- End breadcrumb -->

    <!-- Video Click -->
    <!--<section id="video-bg" class="video-parallax padding_top">
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-sm-7 wow fadeInLeft" data-wow-delay="300ms">
                    <div class="heading-title text-md-left text-center padding_bottom">
                        <span>VOUS VOULEZ DEVENIR UN FORMATEUR ?</span>
                        <h2 class="fontregular bottom20 darkcolor">Savoir Plus</h2>
                        <p>Lorem ipsum gravida nibh vel velit auctor aliquetn sollicitudirem quibibendum auci elit cons equat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt mauris. </p>
                        <a href="#contactus" class="button btnprimary top20  ">Contactez Nous</a>
                    </div>
                </div>
                <div class="col-md-5 col-sm-5 padding_bottom wow fadeInRight" data-wow-delay="350ms">
                    <div class="image hover-effect">
                        <img alt="video img" src="images/video-click.jpg">

                    </div>
                </div>
            </div>
        </div>
    </section>-->
    <!--Video Click-->















    <!-- Contact US -->
    @include('gabarit_front.contact')
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

    </body>

@endsection



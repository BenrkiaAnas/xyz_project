<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>ALsa</title>
    <link href="images/favicon.png" rel="icon">
    <link rel="stylesheet" href="{{asset('css_front/plugins.css')}}">
    <link rel="stylesheet" href="{{asset('css_front/style.css')}}">
    <link rel="stylesheet" href="{{asset('css_front/style1.css')}}">
    <link rel="stylesheet" href="{{asset('lib/font-awesome/css/font-awesome.css')}}"/>


</head>
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
<header class="site-header transparent-sidemenu">
    <nav class="navbar navbar-expand-lg transparent-bg static-nav">
        <div class="container">
            <a class="navbar-brand" href="index.html">
                <img src="{{asset('images/logo-transparent.png')}}" alt="logo">
            </a>
            <button class="navbar-toggler navbar-toggler-right collapsed" type="button" data-toggle="collapse" data-target="#xenav">
                <span> </span>
                <span> </span>
                <span> </span>
            </button>






            <div class="collapse navbar-collapse" id="xenav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item ">
                        <a class="nav-link  " href="{{url('/')}}">Acceuil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  " href="{{url('a-propos-de-nous')}}">Le Centre</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link  " href="gallery.html">Galerie</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  " href="faq.html">FAQ</a>
                    </li>

                    <li class="nav-item active">
                        <a class="nav-link  " href="{{url('contact-nous')}}">Contact</a>
                    </li>
                </ul>
            </div>
        </div>

        <!--side menu open button-->
        <a href="javascript:void(0)" class="d-none d-lg-inline-block sidemenu_btn" id="sidemenu_toggle">
            <span></span> <span></span> <span></span>
        </a>
    </nav>

    <!-- side menu -->
    <div class="side-menu">
        <div class="inner-wrapper">
            <span class="btn-close" id="btn_sideNavClose"><i></i><i></i></span>
            <nav class="side-nav">
                <ul class="navbar-nav w-100">
                    <li class="nav-item ">
                        <a class="nav-link  " href="{{url('/')}}">Acceuil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  " href="{{url('a-propos-de-nous')}}">Le Centre</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link  " href="gallery.html">Galerie</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  " href="faq.html">FAQ</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link  " href="{{url('contact-nous')}}">Contact</a>
                    </li>
                </ul>
            </nav>

            <div class="side-footer w-100">
                <ul class="social-icons-simple white top40">
                    <li><a href="javascript:void(0)"><i class="fa fa-facebook"></i> </a> </li>
                    <li><a href="javascript:void(0)"><i class="fa fa-instagram"></i> </a> </li>
                    <li><a href="javascript:void(0)"><i class="fa fa-twitter"></i> </a> </li>
                </ul>
                <p class="whitecolor">© Copyright 2019 - ALSA Tous les droits sont réservés</p>
            </div>
        </div>
    </div>
    <a id="close_side_menu" href="javascript:void(0);"></a>
    <!-- End side menu -->
</header>
<!-- header -->






<div class="row"  >
    <img style="width: 100% " alt="video img" src="images/slide-3.jpg">
</div>



<div class="breadcrumb-main">
    <div class="container">
        <ul class="breadcrumb">
            <li><a href="{{url('/')}}">Acceuil</a></li>
            <li class="active">Contact</li>
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
<footer id="site-footer" class="padding_half">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 text-center">
                <ul class="social-icons bottom25 wow fadeInUp" data-wow-delay="300ms">
                    <li><a href="javascript:void(0)"><i class="fa fa-facebook"></i> </a> </li>
                    <li><a href="javascript:void(0)"><i class="fa fa-google-plus"></i> </a> </li>
                    <li><a href="javascript:void(0)"><i class="fa fa-instagram"></i> </a> </li>
                </ul>
                <p class="copyrights wow fadeInUp" data-wow-delay="350ms"> © Copyright 2019 - ALSA Tous les droits sont réservés </p>
            </div>
        </div>
    </div>
</footer>
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
</html>

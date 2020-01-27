<!-- header -->
<header class="site-header transparent-sidemenu">
    <nav class="navbar navbar-expand-lg transparent-bg static-nav">
        <div class="container">
                <a class="navbar-brand left-image" href="index.html" >
                    <img src="images/logo-transparent.png" alt="logo">
                </a>

            <button class="navbar-toggler navbar-toggler-right collapsed" type="button" data-toggle="collapse" data-target="#xenav">
                <span> </span>
                <span> </span>
                <span> </span>
            </button>






            <div class="collapse navbar-collapse" id="xenav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item ">
                        <a class="nav-link  " href="{{url('/')}}">{{__('Accueil')}}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  " href="{{url('a-propos-de-nous')}}">{{__('Le Centre')}}</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link  " href="{{url('galerie')}}">{{__('Galerie')}}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  " href="{{url('faq')}}">{{__('FAQ')}}</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link  " href="{{url('contact-nous')}}">{{__('Contact')}}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  " style="display: inline-block; padding-left: 0 !important; padding-right: 0 !important" href="{{ url('locale/fr') }}" >Fr</a>
                        <a class="nav-link  " style="display: inline-block; padding-left: 0 !important; padding-right: 0 !important" href="{{ url('locale/ar') }}" >Ar</a>
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
                        <a class="nav-link  " href="{{url('/')}}">{{__('Accueil')}}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  " href="{{url('a-propos-de-nous')}}">{{__('Le Centre')}}</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link  " href="{{url('galerie')}}">{{__('Galerie')}}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  " href="{{url('faq')}}">{{__('FAQ')}}</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link  " href="{{url('contact-nous')}}">{{__('Contact')}}</a>
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




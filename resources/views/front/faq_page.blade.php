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
        <img style="width: 100% " alt="video img" src="{{asset('images/slide-2.jpg')}}">
    </div>






    <!-- breadcrumb -->
    <div class="breadcrumb-main">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="{{url('/')}}">{{__('Accueil')}}</a></li>
                <li class="active">{{__('FAQ')}}</li>
            </ul>
        </div>
    </div>
    <!-- End breadcrumb -->

    <!--* faq Section*=-->
    <section id="faq" class="section-inner">
        <div class="container">
            <div class="services-detail">
                <!-- section title -->
                <div class="inner-heading  text-end">
                    <h3>{{__('VOS QUESTIONS')}}</h3>
                    <h2>{{__('Question Fréquemment Posée')}}</h2>
                </div>
                <div class="accrodion-grp faq-accrodion" data-grp-name="faq-accrodion">
                    @foreach ($faqs as $faq)
                        @if (App::isLocale('fr'))
                            <div class="accrodion">
                                <div class="accrodion-title">
                                    <h4>{{$faq['question']['fr']}}</h4>
                                </div>
                                <div class="accrodion-content" style="display: block;">
                                    <div class="inner">
                                        <p>{{$faq['reponse']['fr']}}</p>
                                    </div><!-- /.inner -->
                                </div>
                            </div>

                        @else

                            <div class="accrodion text-end">
                                <div class="accrodion-title">
                                    <h4>{{$faq['question']['ar']}}</h4>
                                </div>
                                <div class="accrodion-content" style="display: block;">
                                    <div class="inner">
                                        <p>{{$faq['reponse']['ar']}}</p>
                                    </div><!-- /.inner -->
                                </div>
                            </div>

                        @endif

                    @endforeach



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
    <!-- Slick jquery --><script src="{{asset('js_back/new/slick.js')}}"></script>

    <script>
        /*======== Doucument Ready Function =========*/
        if ($('.accrodion-grp').length) {
            var accrodionGrp = $('.accrodion-grp');
            accrodionGrp.each(function () {
                var accrodionName = $(this).data('grp-name');
                var Self = $(this);
                var accordion = Self.find('.accrodion');
                Self.addClass(accrodionName);
                Self.find('.accrodion .accrodion-content').hide();
                Self.find('.accrodion.active').find('.accrodion-content').show();
                accordion.each(function() {
                    $(this).find('.accrodion-title').on('click', function () {
                        if ($(this).parent().hasClass('active') === false ) {
                            $('.accrodion-grp.'+accrodionName).find('.accrodion').removeClass('active');
                            $('.accrodion-grp.'+accrodionName).find('.accrodion').find('.accrodion-content').slideUp();
                            $(this).parent().addClass('active');
                            $(this).parent().find('.accrodion-content').slideDown();
                        };


                    });
                });
            });

        };
    </script>
    </body>





@endsection

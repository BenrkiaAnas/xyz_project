@if(!Auth::check())
    <script type="text/javascript">window.location.pathname = '/'</script>
@endif

<!DOCTYPE html>
<html lang="fr">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- Twitter -->

        <meta name="twitter:site" content="@themepixels">
        <meta name="twitter:creator" content="@themepixels">
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="Amanda">
        <meta name="twitter:description" content="Premium Quality and Responsive UI for Dashboard.">
        <meta name="twitter:image" content="http://themepixels.me/amanda/img/amanda-social.png">

        <!-- Facebook -->
        <meta property="og:url" content="http://themepixels.me/amanda">
        <meta property="og:title" content="Bracket">
        <meta property="og:description" content="Premium Quality and Responsive UI for Dashboard.">

        <meta property="og:image" content="http://themepixels.me/amanda/img/amanda-social.png">
        <meta property="og:image:secure_url" content="http://themepixels.me/amanda/img/amanda-social.png">
        <meta property="og:image:type" content="image/png">
        <meta property="og:image:width" content="1200">
        <meta property="og:image:height" content="600">

        <!-- Meta -->
        <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
        <meta name="author" content="ThemePixels">


        <title>Thermodity|NJT</title>

        <!-- vendor css -->
        <link href="{{ asset('lib/font-awesome/css/font-awesome.css') }}" rel="stylesheet">
        <link href="{{ asset('lib/Ionicons/css/ionicons.css') }}" rel="stylesheet">
        <link href="{{ asset('lib/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet">
        <link href="{{ asset('lib/jquery-toggles/toggles-full.css') }}" rel="stylesheet">
        <link href="{{ asset('lib/rickshaw/rickshaw.min.css') }}" rel="stylesheet">
        <link href="{{asset('lib/highlightjs/github.css')}}" rel="stylesheet">
        <link href="{{asset('/lib/datatables/jquery.dataTables.css')}}" rel="stylesheet">
        <link href="{{'/lib/select2/css/select2.min.css'}}" rel="stylesheet">
        <!-- Amanda CSS -->
        <link rel="stylesheet" href="{{ asset('css_back/amanda.css') }}">






    </head>
    <body>
    @include("back_gabarit.header")
    @include('back_gabarit.sidenav')
    <div class="am-mainpanel">
        <div class="am-pagebody">


            @yield('content')
        </div><!-- am-pagebody -->
        @include('back_gabarit.footer')
    </div><!-- am-mainpanel -->
    </body>

    <script  src="{{asset('lib/jquery/jquery.js')}}"></script>
    <script  src="{{asset('lib/popper.js/popper.js')}}"></script>
    <script  src="{{asset('lib/bootstrap/bootstrap.js')}}"></script>
    <script  src="{{asset('lib/jquery-ui/jquery-ui.js')}}"></script>
    <script  src="{{asset('lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js')}}"></script>
    <script  src="{{asset('lib/jquery-toggles/toggles.min.js')}}"></script>
    <script  src="{{asset('lib/highlightjs/highlight.pack.js')}}"></script>
    <script  src="{{asset('lib/datatables/jquery.dataTables.js')}}"></script>
    <script  src="{{asset('lib/datatables-responsive/dataTables.responsive.js')}}"></script>

    <script  src="{{asset('js_back/amanda.js')}}"></script>



</html>

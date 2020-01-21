<!--check auth please-->

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


    <title>ALSA</title>

    <!-- vendor css -->
    <link rel="stylesheet" href="http://demo.itsolutionstuff.com/plugin/croppie.css">
    <link href="{{ asset('lib/font-awesome/css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/Ionicons/css/ionicons.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/jquery-toggles/toggles-full.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/rickshaw/rickshaw.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/highlightjs/github.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/datatables/jquery.dataTables.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/select2/css/select2.min.css')}}" rel="stylesheet">
    <!-- Amanda CSS -->
    <link rel="stylesheet" href="{{ asset('css_back/amanda.css') }}">


    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>




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
    <script src="http://demo.itsolutionstuff.com/plugin/croppie.js"></script>
    <script type="text/javascript">
        $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
        });
        
        function uploadDemo(id,width,height)
        {
            $uploadCrop = $('#upload-demo_'+id).croppie({
            enableExif: false,
            viewport: {
                width: width ,
                height: height,
                type: 'square'
            },
            boundary: {
                width: 300,
                height: 300
            }
        });
        console.log(width);
        }
        //e for event 
        //i to increment the id
        //width height to crop
        function onChangeImage(e,i,id,width,height)
        {
            var reader = new FileReader();
        
            alert(e)
            console.log(e)
            reader.onload = function (e) {
                $uploadCrop.croppie('bind', {
                    url: e.target.result
                }).then(function(){
                    console.log('jQuery bind complete');
                });
            }
            reader.readAsDataURL(e.target.files[0]);
            uploadDemo(i,width,height);
            document.getElementById(id).style.display='block';
            
        }
        
        function uploadResult()
        {
          var table=new Array();
          $('#this').html('@CSRF');  
          $('img.image-cropped').each(function() {
               src=$(this).attr('src');
               $('#this').append('@CSRF<input type="hidden" value="'+src+'" name="dataSrc[]">');   
               table.push(src);
                 });
                 console.log(table);
          $('#this').submit(); 

        }
        
        
        
        $('.upload-result_0').on('click', function (ev) {
            $uploadCrop.croppie('result', {
                type: 'canvas',
                size: 'viewport'
            }).then(function (resp) {
                html = '<img class="image-cropped" src="' + resp + '" name="tab[]"/>';
                $("#upload-demo-i_"+0).html(html);
            });
        });
        $('.upload-result_1').on('click', function (ev) {
            $uploadCrop.croppie('result', {
                type: 'canvas',
                size: 'viewport'
            }).then(function (resp) {
                html = '<img class="image-cropped" src="' + resp + '" name="tab[]"/>';
                $("#upload-demo-i_"+1).html(html);
            });
        });
        $('.upload-result_2').on('click', function (ev) {
            $uploadCrop.croppie('result', {
                type: 'canvas',
                size: 'viewport'
            }).then(function (resp) {
                html = '<img class="image-cropped" src="' + resp + '" name="tab[]" />';
                $("#upload-demo-i_"+2).html(html);
            });
        });
        $('.upload-result_3').on('click', function (ev) {
            $uploadCrop.croppie('result', {
                type: 'canvas',
                size: 'viewport'
            }).then(function (resp) {
                html = '<img class="image-cropped" src="' + resp + '" name="tab[]" />';
                $("#upload-demo-i_"+3).html(html);
            });
        });
        $('.upload-result_4').on('click', function (ev) {
            $uploadCrop.croppie('result', {
                type: 'canvas',
                size: 'viewport'
            }).then(function (resp) {
                html = '<img class="image-cropped" src="' + resp + '" name="tab[]"/>';
                $("#upload-demo-i_"+4).html(html);
            });
        });
        $('.upload-result_5').on('click', function (ev) {
            $uploadCrop.croppie('result', {
                type: 'canvas',
                size: 'viewport'
            }).then(function (resp) {
                html = '<img class="image-cropped" src="' + resp + '" name="tab[]"/>';
                $("#upload-demo-i_"+5).html(html);
            });
        });
        $('.upload-result_6').on('click', function (ev) {
            $uploadCrop.croppie('result', {
                type: 'canvas',
                size: 'viewport'
            }).then(function (resp) {
                html = '<img class="image-cropped" src="' + resp + '" name="tab[]"/>';
                $("#upload-demo-i_"+6).html(html);
            });
        });
  
      $(function(){
        'use strict';

        $('#datatable1').DataTable({
          responsive: true,
          language: {
            searchPlaceholder: '{{__("Rechercher")}} ...',
            sSearch: '',
            lengthMenu: '_MENU_ {{__("Éléments")}} / {{__("Page")}}',
          }
        });

        $('#datatable2').DataTable({
          bLengthChange: false,
          searching: false,
          responsive: true
        });

        // Select2
        $('.dataTables_length select').select2({ minimumResultsForSearch: Infinity });

      });

        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();
        });

      /*those function related to view roles by @hamza*/
      /*end section of @hamza*/
      </script>
      

</html>

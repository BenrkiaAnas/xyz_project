@extends('dashboard')
@section('content')
<!-- Gallery -->
<section id="the-gallery" class="wide-gallery inner-gallery section-inner">
    <div class="container">
        <!-- section title -->
        <div class="inner-heading">
        </div>
        <div class="row">
            <div class="col-sm-4 mix">
                <div class="item ">
                    <a href="{{url('toCrop/?width=380&height=209.5&position=1')}}" title="">
                       <?php  
                       if(App\Gallery::getImagePosition('1'))
                        echo "<img src='".App\Gallery::getImagePosition('1')."' width='380' height='209.5' >";
                    else 
                        echo "<img src='https://dummyimage.com/380x209/000/fff'width='380' height='209.5' >";
                    ;?>
                       
                </a>
            </div>
            <div class="item ">
                <a href="{{url('toCrop/?width=380&height=209.5&position=2')}}" title="">
                   <?php  
                if(App\Gallery::getImagePosition('2'))
                    echo "<img src='".App\Gallery::getImagePosition('2')."' width='380' height='209.5' >";
                else 
                    echo "<img src='https://dummyimage.com/380x209/000/fff' width='380' height='209.5'>";
                ;?>
                
            </a>
        </div>
    </div>
    <div class="col-sm-4 mix">
        <div class="item ">
            <a href="{{url('toCrop/?width=380&height=418.2&position=3')}}" title="">
                <?php  
                if(App\Gallery::getImagePosition('3'))
                    echo "<img src='".App\Gallery::getImagePosition('3')."' width='380' height='418.2'>";
                else 
                    echo "<img src='https://dummyimage.com/380x418.2/807680/fff' width='380' height='418.2'>";
                ;?>
                
            </a>
        </div>
    </div>
    <div class="col-sm-4 mix">
        <div class="item ">
            <a href="{{url('toCrop/?width=380&height=209&position=4')}}" title="">
                <?php  
                if(App\Gallery::getImagePosition('4'))
                    echo "<img src='".App\Gallery::getImagePosition('4')."' width='380' height='209.5'>";
                else 
                    echo " <img src='https://dummyimage.com/380x209/000/fff'width='380' height='209.5'>";
                ;?>
                
            </a>
        </div>
        <div class="item ">
            <a href="{{url('toCrop/?width=380&height=209&position=5')}}" title="">
                 <?php  
                if(App\Gallery::getImagePosition('5'))
                    echo "<img src='".App\Gallery::getImagePosition('5')."' width='380' height='209.5'>";
                else 
                    echo "<img src='https://dummyimage.com/380x209/000/fff' width='380' height='209.5'>";
                ;?>
                
                
            </a>
        </div>
    </div>
    <div class="col-sm-6 mix">
        <div class="item ">
            <a href="{{url('toCrop/?width=570&height=313.5&position=6')}}" title="">
                 <?php  
                if(App\Gallery::getImagePosition('6'))
                    echo "<img src='".App\Gallery::getImagePosition('6')."' width='570' height='313.5' >";
                else 
                    echo "<img src='https://dummyimage.com/570x313.5/ebc3eb/000000' width='570' height='313.5' >";
                ;?>
                
            </a>
        </div>
    </div>
    <div class="col-sm-6 mix">
        <div class="item ">
            <a href="{{url('toCrop/?width=570&height=313.5&position=7')}}" title="">
                 <?php  
                if(App\Gallery::getImagePosition('7'))
                    echo "<img src='".App\Gallery::getImagePosition('7')."' width='570' height='313.5' >";
                else 
                    echo "<img src='https://dummyimage.com/570x313.5/ebc3eb/000000'width='570' height='313.5'>";
                ;?>
                
                
            </a>
        </div>
    </div>
</div>
</div>
</section>




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
<script src="{{asset('lib/popper.js/popper.js')}}"></script>
<script src="{{asset('lib/bootstrap/bootstrap.js')}}"></script>
<script src="{{asset('lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js')}}"></script>
<script src="{{asset('lib/jquery-toggles/toggles.min.js')}}"></script>
<script src="{{asset('lib/highlightjs/highlight.pack.js')}}"></script>

<script src="{{asset('/js/amanda.js')}}"></script>
<!--Google Map API-->
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyAfzJrG8u_tUgBqK5M61cj_-ytj68rJwZA&language=ar"></script>
<script src="{{asset('js_front/functions.js')}}"></script>
<!-- Magnific Popup JS --><script src="{{asset('js_front/new/jquery.magnific-popup.min.js')}}"></script>
<!-- custom image popup Jquery -->
<script src="{{asset('js_front/new/custom-magnificpopup.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.2/croppie.js"></script>
<script type="text/javascript">

    var resize = $('#upload-demo').croppie({
        enableExif: true,
        enableOrientation: true,
        viewport: { // Default { width: 100, height: 100, type: 'square' }
        width: 200,
        height: 200,
            // type: 'circle' //square
        },
        boundary: {
            width: 300,
            height: 300
        }
    });


    $('#image').on('change', function () {
        var reader = new FileReader();
        reader.onload = function (e) {
            resize.croppie('bind',{
                url: e.target.result
            }).then(function(){
                console.log('jQuery bind complete');
            });
        }
        reader.readAsDataURL(this.files[0]);
    });


    $('.btn-info').on('click', function (ev) {
        resize.croppie('result', {
            type: 'canvas',
            size: 'viewport'
        }).then(function (img) {
            var image_cr=$('#image_part').val(img);
            alert(image_cr);
            $('#formPart').submit();
        });
    });
</script>
@endsection

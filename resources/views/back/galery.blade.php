<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>ALsa</title>
	<link href="{{asset('images/favicon.png')}}" rel="icon">
	<link href="{{asset('css_front/new/default.css')}}" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="{{asset('css_front/plugins.css')}}">
	<link rel="stylesheet" href="{{asset('css_front/style.css')}}">
	<link rel="stylesheet" href="{{asset('css_front/style1.css')}}">
	<link href="{{asset('css_front/new/magnific-popup.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('css_front/font-awesome.min.css')}}" rel="stylesheet" type="text/css">


</head>
<body  data-spy="scroll" data-target=".navbar" data-offset="90">
<!-- Gallery -->
<section id="the-gallery" class="wide-gallery inner-gallery section-inner">
	<div class="container">
		<!-- section title -->
		<div class="inner-heading">
		</div>
		<div class="row">
			<div class="col-sm-6 mix">
				<div class="item ">
					<a data-toggle="modal" data-target="#modaldemo3"> <img src="https://dummyimage.com/570x313.5/ebc3eb/000000" alt=""></a>
					<i class="fas-upload"></i>
				</div>
			</div>
		</div>
	</div>
</section>
<div id="modaldemo3" class="modal fade">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content tx-size-sm">
			<div class="modal-header pd-x-20">
				<h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Image 1</h6>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body pd-20">
				<div class="col-lg-5 mg-l-2 mg-l-15">
					<div class="form-group">
						<input class="form-control" onchange="onChangeImage(event,0,'btn_1',380,209)" type="file" name="">

					</div>
				</div>
				<div class="col-lg-5 mg-l-2 mg-l-15">
					<div class="form-group">
						<div id="upload-demo_0" style="background:#e1e1e1;width:319.98px;height:175.98px;"></div>


					</div>
					<!---Apercu d'image cropped--->
					<h2>blco d'image after crop</h2>
					<div id="upload-demo-i_0" ></div>
				</div>
			</div><!-- modal-body -->
			<div class="modal-footer">
				<button type="button" class="btn btn-info pd-x-20">Save changes</button>
				<button id="btn_1" class="btn btn-success upload-result_0" style="display:none" required>Apercu</button>
				<button type="button" class="btn btn-secondary pd-x-20" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div><!-- modal-dialog -->
</div>



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
<script src="http://demo.itsolutionstuff.com/plugin/croppie.js"></script>
<script type="text/javascript">

	function uploadDemo(id,width,height)
	{
		$uploadCrop = $('#upload-demo_'+id).croppie({
			enableExif: false,
			viewport: {
				width: 319.98 ,
				height: 319.98,
				type: 'square'
			},
			boundary: {
				width: 319.98,
				height: 319.98
			}
		});

	}
	//e for event
	//i to increment the id
	//width height to crop
	function onChangeImage(e,i,id,width,height)
	{
		var reader = new FileReader();
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


	$('.upload-result_0').on('click', function (ev) {
		$uploadCrop.croppie('result', {
			type: 'canvas',
			size: 'viewport'
		}).then(function (resp) {
			html = '<img height="319.98" height="319.98" class="image-cropped" src="' + resp + '" name="tab[]"/>';
			$("#upload-demo-i_"+0).html(html);
		});
	});
</script>
</body>
</html>

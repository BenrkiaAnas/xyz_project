<html lang="en">
<head>
  <title></title>
  <script src="http://demo.itsolutionstuff.com/plugin/jquery.js"></script>
  <script src="http://demo.itsolutionstuff.com/plugin/croppie.js"></script>
  <link rel="stylesheet" href="http://demo.itsolutionstuff.com/plugin/bootstrap-3.min.css">
  <link rel="stylesheet" href="http://demo.itsolutionstuff.com/plugin/croppie.css">
  <meta name="csrf-token" content="{{ csrf_token() }}">
</head>


<body>
<div class="container">
	<div class="panel panel-default">
	  <div class="panel-heading">Laravel crop image before upload using croppie plugins</div>
	  <div class="panel-body">


	  	<div class="row">
	  		<div class="col-md-4 text-center">
				<div id="upload-demo_0" style="width:350px;background-image: url('https://dummyimage.com/380x209/000/fff')"></div>
				<div id="upload-demo_1" style="background-image: url('https://dummyimage.com/380x209/000/fff')"></div>
				<div id="upload-demo_2" style="background-image: url('https://dummyimage.com/380x209/000/fff')"></div>
	  		</div>
	  		<div class="col-md-4" style="padding-top:30px;">
				<strong>Select Image:</strong>
				<br/>
				<input type="file" onchange="onChangeImage(event,0,'btn_1',319.98,175.98)">
				<button id="btn_1" class="btn btn-success upload-result_0" style="display:none" required>Apercu</button>
				<input type="file" onchange="onChangeImage(event,1,'btn_2',380,418.2)">
				<button id="btn_2" class="btn btn-success upload-result_1" style="display:none">Apercu</button>
				<input type="file" onchange="onChangeImage(event,2,'btn_3',570,313.5)">
				<button id="btn_3" class="btn btn-success upload-result_2" style="display:none">Apercu</button>
				<br/>


	  		</div>

			  380 418.2
			  570 313.5
	  		<div class="col-md-4" style="">
				<div id="upload-demo-i_0" style="background:#e1e1e1;width:319.98px;height:175.98px;margin-top:30px"></div>
				<div id="upload-demo-i_1" style="background:#e1e1e1;width:319.98px;height:175.98px;margin-top:30px"></div>
				<div id="upload-demo-i_2" style="background:#e1e1e1;width:319.98px;height:175.98px;margin-top:30px"></div>
	  		</div>
	  	</div>


	  </div>
	</div>
</div>


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

}



$('.upload-result_0').on('click', function (ev) {
	$uploadCrop.croppie('result', {
		type: 'canvas',
		size: 'viewport'
	}).then(function (resp) {
		html = '<img src="' + resp + '" />';
		$("#upload-demo-i_"+0).html(html);
	});
});
$('.upload-result_1').on('click', function (ev) {
	$uploadCrop.croppie('result', {
		type: 'canvas',
		size: 'viewport'
	}).then(function (resp) {
		html = '<img src="' + resp + '" />';
		$("#upload-demo-i_"+1).html(html);
	});
});
$('.upload-result_2').on('click', function (ev) {
	$uploadCrop.croppie('result', {
		type: 'canvas',
		size: 'viewport'
	}).then(function (resp) {
		html = '<img src="' + resp + '" />';
		$("#upload-demo-i_"+2).html(html);
	});
});

</script>


</body>
</html>

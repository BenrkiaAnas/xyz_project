@extends('dashboard')
@section('content')
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/cropper/2.3.4/cropper.min.css">
<form action="{{url('image/gallery')}}" method="post" enctype="multipart/form-data">
  {{csrf_field()}}
  <div class="card pd-20 pd-sm-40">
   <h6 class="card-body-title">{{ __('Question') }}</h6>
   <p class="mg-b-20 mg-sm-b-30"></p>

   <div class="row">
    <label class="col-sm-4 form-control-label">{{ __('lieu') }} : <span class="tx-danger">*</span></label>
    <div class="col-sm-8 mg-t-10 mg-sm-t-0">
      <input type="text" name="lieu"  class="form-control" placeholder="{{ __('Entrez le lieu') }}" required>
    </div>
  </div>
  <div class="row mg-t-20">
    <label class="col-sm-4 form-control-label">{{ __('description') }}: <span class="tx-danger">*</span></label>
    <div class="col-sm-8 mg-t-10 mg-sm-t-0">
      <textarea rows="2" class="form-control"  name="description" placeholder="{{ __('Entrez la description d evenements') }}" required></textarea>
    </div>
  </div>
  <p class="mg-b-20 mg-sm-b-30"></p>

  <div class="row">
    <label class="col-sm-4 form-control-label">{{ __('المكان') }} : <span class="tx-danger">*</span></label>
    <div class="col-sm-8 mg-t-10 mg-sm-t-0">
      <input type="text" name="lieu_ar"  class="form-control" placeholder="{{ __(' المكان ') }}" required>
    </div>
  </div>
  <div class="row mg-t-20">
    <label class="col-sm-4 form-control-label">{{ __('  الوصف ') }}: <span class="tx-danger">*</span></label>
    <div class="col-sm-8 mg-t-10 mg-sm-t-0">
      <textarea rows="2" class="form-control"  name="description_ar" placeholder="{{ __('  الوصف ') }}" required></textarea>
    </div>
  </div>
  <div class="row mg-t-20">
    <label class="col-sm-4 form-control-label">{{ __('  تاريخ ') }}/{{ __('Date') }}: : <span class="tx-danger">*</span></label>
    <div class="col-sm-8 mg-t-10 mg-sm-t-0">
     <input type="date" class="form-control" name="date">
   </div>
 </div>
 <h6 class="card-body-title">{{ __("Traitement d'\image") }}</h6>
 <div class="row ">
  <br><br>
  <input type="file" id="file-input" class="form-control">

  <br><br>
  <!-- leftbox -->
  <div class="col-md-6">
    <div class="result"></div>
    <label> Width</label>
    <input type="number" class="img-w" value="<?php echo $_GET['width'] ?>" min="100" max="1200" disabled />
    <label> Height</label>
    <input type="number" class="img-h" value="<?php echo $_GET['height'] ?>" min="100" max="1200" disabled />
  </div>
  <div  class="row">
    <!-- right div  -->
    <div class="col-md-6">
     <div class="box">
    </div>
    <div class="box-2 img-result hide">
      <!-- result of crop -->
      <img class="cropped" class="form-control" src="" alt="" name="cropped_image">
      <input  type="hidden" id="imagehidden" name="cropped_image">
      <input  type="hidden" value="<?php echo $_GET['position'] ?>" name="position">
    </div>
     <div class="col-md-12">

    </div>
  </div>
  <!-- end right div -->
  <!-- left div  -->
  <div class="col-md-6">
    <div class="box-2 col-md-6">
      <div class="result"></div>
    </div>
    <!-- configuration  div  -->
    <div class="box col-md-6">
      <div class="options hide">
       
      </div>
      <!-- save btn -->
      
      <!-- download btn -->

    </div>


  </div>
  <!--end left div  -->
</div>

</div>
<button style="background-color: #2c455f" class="btn btn-info save hide form-control" >Save</button>
<button type="submit" >Terminer</button>
</div>
</div>

</form>
<script type="text/javascript">
    // vars
    let result = document.querySelector('.result'),
    img_result = document.querySelector('.img-result'),
    img_w = document.querySelector('.img-w'),
    img_h = document.querySelector('.img-h'),
    options = document.querySelector('.options'),
    save = document.querySelector('.save'),
    cropped = document.querySelector('.cropped'),
    dwn = document.querySelector('.download'),
    upload = document.querySelector('#file-input'),
    cropper = '';

// on change show image with crop options
upload.addEventListener('change', (e) => {
  if (e.target.files.length) {
    // start file reader
    const reader = new FileReader();
    reader.onload = (e)=> {
      if(e.target.result){
        // create new image
        let img = document.createElement('img');
        img.id = 'image';
        img.src = e.target.result
        // clean result before
        result.innerHTML = '';
        // append new image
        result.appendChild(img);
        // show save btn and options
        save.classList.remove('hide');
        options.classList.remove('hide');
        // init cropper
        cropper = new Cropper(img);
      }
    };
    reader.readAsDataURL(e.target.files[0]);
  }
});

// save on click
save.addEventListener('click',(e)=>{
  e.preventDefault();
  // get result to data uri
  let imgSrc = cropper.getCroppedCanvas({
    width: img_w.value // input value
  }).toDataURL();
  // remove hide class of img
  cropped.classList.remove('hide');
  img_result.classList.remove('hide');
  // show image cropped
  cropped.src = imgSrc;
  document.getElementById('imagehidden').value=imgSrc;
  dwn.classList.remove('hide');
  dwn.download = 'imagename.png';
  dwn.setAttribute('href',imgSrc);
});

</script>
@endsection
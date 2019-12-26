@extends('dashboard')
@section('content')
<form action="{{url('create/gallery')}}" method="POST">
    @csrf
    <div class="card pd-20 pd-sm-40">
    {{$i=0}}
    @foreach ($images as $image )
    <input type="hidden" name="data[{{$i}}][image]" value="{{$image}}" />
    <div class="card-header card-header-default">{{$image}}</div><br> 
    <h6 class="card-body-title"><img src="{{asset('img/'.$image)}}"></h6>
        <p class="mg-b-20 mg-sm-b-30"></p>

        <div class="row">
            <div class="col-sm-6">
                <label class="col-sm-4 form-control-label">{{ __('Lieu') }} : <span class="tx-danger">*</span></label>
          <div class="col-sm-8 mg-t-10 mg-sm-t-0">
            <input type="text" name="data[{{$i}}][lieu]"  class="form-control date" placeholder="{{ __('Entrez la question') }}" >
          </div>
          <label class="col-sm-4 form-control-label">{{ __('Detail') }} : <span class="tx-danger">*</span></label>
          <div class="col-sm-8 mg-t-10 mg-sm-t-0">
            <textarea type="text" name="data[{{$i}}][detail]"  class="form-control" placeholder="{{ __('Entrez la question') }}" ></textarea>
          </div>
          <label class="col-sm-4 form-control-label">{{ __('question') }} : <span class="tx-danger">*</span></label>
          <div class="col-sm-8 mg-t-10 mg-sm-t-0">
            <input type="date" name="data[{{$i}}][date]"  class="form-control" placeholder="{{ __('Entrez la question') }}" >
          </div>
            </div>
            <div class="col-sm-6">
                <label class="col-sm-4 form-control-label">{{ __('المكان ') }} : <span class="tx-danger">*</span></label>
          <div class="col-sm-8 mg-t-10 mg-sm-t-0">
            <input type="text" name="data[{{$i}}][lieu_ar]"  class="form-control" placeholder="{{ __('Entrez la question') }}" >
          </div>
          <label class="col-sm-4 form-control-label">{{ __('تفاصيل الحدث') }} : <span class="tx-danger">*</span></label>
          <div class="col-sm-8 mg-t-10 mg-sm-t-0">
            <textarea type="text" name="data[{{$i}}][detail_ar]"  class="form-control" placeholder="{{ __('Entrez la question') }}" ></textarea>
          </div>
        </div>
          
        </div>
        <br>
        {{$i++}}
    @endforeach
</div>
<input type="submit" class="form-control" value="Enrigistrer" style="color:blue"> 
</div>

</form>   
 @endsection
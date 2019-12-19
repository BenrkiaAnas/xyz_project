@extends('dashboard')
@section('content')
<form action="{{url('faqs/create')}}" method="post">
{{csrf_field()}}
<div class="card pd-20 pd-sm-40">
        <h6 class="card-body-title">{{ __('Question') }}</h6>
        <p class="mg-b-20 mg-sm-b-30"></p>

        <div class="row">
          <label class="col-sm-4 form-control-label">{{ __('question') }} : <span class="tx-danger">*</span></label>
          <div class="col-sm-8 mg-t-10 mg-sm-t-0">
            <input type="text" name="question"  class="form-control" placeholder="{{ __('Entrez la question') }}" required>
          </div>
        </div>
        <div class="row mg-t-20">
              <label class="col-sm-4 form-control-label">{{ __('reponse') }}: <span class="tx-danger">*</span></label>
              <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                <textarea rows="2" class="form-control"  name="reponse" placeholder="{{ __('Entrez la reponse') }}" required></textarea>
              </div>
        </div>
        <div class="row row-xs mg-t-30">
            <div class="form-layout-footer">
              <button class="btn btn-info mg-r-5" name="action" value="refresh" >{{__('Enregistrer et Continuer')}}</button>
              <button class="btn btn-info mg-r-5" name="action" value="list" >{{__('Enregistrer et Fin')}}</button>
              <a class="btn btn-secondary" href="{{ URL::previous()}}">{{__('Annuler')}}</a>
            </div>
          </div>
        </div>
  </div>
</form>
@endsection
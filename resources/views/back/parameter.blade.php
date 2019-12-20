@extends('dashboard')
@section('content')
    <form action="{{url('/paramter/editPassword')}}" method="POST">
        {{csrf_field()}}

        <div class="card pd-20 pd-sm-40">

            <br>
            <div class="card-header card-header-default">
                Parametre
            </div>
        <!-- <div class="row mg-t-20">
            <label class="col-sm-1"></label>
            <label class="col-sm-3 form-control-label">{{ __('Ancien Mot de Passe') }} : <span class="tx-danger">*</span></label>
            <div class="col-sm-6 mg-t-10 mg-sm-t-0">
              <input id="oldPassword" type="text" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" name="oldPassword" placeholder="{{ __('Entrez votre ancien Mot de Passe') }}" onfocusout="testPassword()" required >
              <div id="divOldPassword">

              </div>
            </div>
          </div> -->
            <div class="row mg-t-20">
                <label class="col-sm-1"></label>
                <label class="col-sm-3 form-control-label">{{ __('Nouveau Mot de Passe') }} : <span class="tx-danger">*</span></label>
                <div class="col-sm-6 mg-t-10 mg-sm-t-0">
                    <input type="text" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="{{ __('Entrez Votre Mot de Passe') }}" required >
                    @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                    @endif
                </div>
            </div>
            <div class="row mg-t-20">
                <label class="col-sm-1"></label>
                <label class="col-sm-3 form-control-label">{{ __('Confirmation de Mot de Passe') }} : <span class="tx-danger">*</span></label>
                <div class="col-sm-6 mg-t-10 mg-sm-t-0">
                    <input type="text" class="form-control" value="" placeholder="{{ __('Retapez Votre Mot de Passe') }}" required >
                    @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                    @endif
                </div>
            </div>
            <div class="row row-xs mg-t-30">
                <div class="col-sm-8 mg-l-auto">
                    <div class="form-layout-footer">
                        <button type="submit" class="btn btn-info mg-r-5" >{{ __('Editer') }}</button>
                        <a class="btn btn-secondary" href="{{ URL::previous()}}">{{__('Annuler')}}</a>
                    </div>
                </div>
            </div>


            <!-- <script type="text/javascript">
              function testPassword()
              {

                var password=document.getElementById('oldPassword').value;
                alert('hello '+password);
                 $.ajax({
                    url: '/verifyOldPassword',
                    data:{oldpassword:password},
                    type: "GET",
                    success: function(data){
                        $('#divOldPassword').html('<span  class="invalid-feedback" role="alert"><strong>Password correct</strong></span>');
                        console.log(data)
                    },
                   error: function (data) {
                           $('#divOldPassword').html('<span  class="invalid-feedback" role="alert"><strong>Password incorect</strong></span>');
                           console.log(data)
                        }
                });
              }
            </script> -->
            <!--  </form>-->
        </div>
    </form>
@endsection

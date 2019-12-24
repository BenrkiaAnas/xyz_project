 @if(Auth::check())
 <script type="text/javascript">window.location.pathname = '/home'</script>
@endif 
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">

    <!-- Facebook -->
    <!-- Meta -->
    <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="author" content="ThemePixels">


    <title>NJT | Alsa</title>

    <!-- vendor css -->
    <link href="{{asset('lib/font-awesome/css/font-awesome.css')}}" rel="stylesheet">
    <link href="{{asset('lib/Ionicons/css/ionicons.css')}}" rel="stylesheet">
    <link href="{{asset('lib/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet">

    <!-- Amanda CSS -->
    <link rel="stylesheet" href="{{asset('css_back/amanda.css')}}">
  </head>

  <body>

    <div class="am-signin-wrapper">
      <div class="am-signin-box">
        <div class="row no-gutters">
          <div class="col-lg-5">
            <div>
              <h2>ALSA</h2>
              <p></p>
              

              <hr>
                <p>SECURITE</p>
<!-- Vous n'avez pas de compte? <br> <a href="{{url('/register')}}">s'inscrire maintenant?</a></p> -->
            </div>
          </div>
          <div class="col-lg-7">
            <form method="POST" action="{{ route('login') }}">
              {{csrf_field()}}
            <h5 class="tx-gray-800 mg-b-25">Connectez-vous à votre compte</h5>

            <div class="form-group">
              <label for="email" class="form-control-label">Email</label>
              <input  class="form-control" id="email" type="text" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus placeholder="Enter your email">

               @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                              <strong>{{ $errors->first('email') }}</strong>
                         </span>
                @endif
            </div><!-- form-group -->

            <div class="form-group">
              <label for="password" class="form-control-label">{{ __('Mot de passe') }}</label>
              <input  id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
              @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('password') }}</strong>
                    </span>
               @endif
            </div><!-- form-group -->
                <div class="form-group mg-b-20">
                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}">
                            Mot De Passe Oublié
                        </a>
                    @endif
                </div>

            
              <button type="submit" class="btn btn-block">
                {{ __('se connecter') }}
              </button>
            </form>
            
          </div><!-- col-7 -->
        </div><!-- row -->
        <p class="tx-center tx-white-5 tx-12 mg-t-15">Copyright &copy; 2019. All Rights Reserved. NJT GROUP</p>
       <!-- B -->
      </div><!-- signin-box -->
    </div><!-- am-signin-wrapper -->

    <script src="{{asset('lib/jquery/jquery.js')}}"></script>
    <script src="{{asset('lib/popper.js/popper.js')}}"></script>
    <script src="{{asset('lib/bootstrap/bootstrap.js')}}"></script>
    <script src="{{asset('lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js')}}"></script>

    <script src="{{asset('js_back/amanda.js')}}"></script>
  </body>
</html>

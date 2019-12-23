<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

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


    <title>NJT | THERMODITY</title>

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
                    <h2>NJT|GROUPE</h2>
                    <p></p>
                    <p></p>

                    <hr>
                    <p>SECURITE</p>
                </div>
            </div>
            <div class="col-lg-7">
                <form method="POST" action="{{ route('password.email') }}">
                    @csrf
                    <h5 class="tx-gray-800 mg-b-25">Connectez-vous à votre compte</h5>

                    <div class="form-group">
                        <label for="email" class="form-control-label">{{ __('Addresse E-Mail') }}</label>
                        <input  id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('email') }}</strong>
              </span>
                        @endif
                    </div><!-- form-group -->
                    <!-- form-group -->
                    <button type="submit" class="btn btn-primary">
                        {{ __('récupérer') }}
                    </button>
                </form>

            </div><!-- col-7 -->
        </div><!-- row -->
        <p class="tx-center tx-white-5 tx-12 mg-t-15">Copyright &copy; 2019. All Rights Reserved. NJT GROUP</p>
    </div><!-- signin-box -->
</div><!-- am-signin-wrapper -->

<script src="{{asset('lib/jquery/jquery.js')}}"></script>
<script src="{{asset('lib/popper.js/popper.js')}}"></script>
<script src="{{asset('lib/bootstrap/bootstrap.js')}}"></script>
<script src="{{asset('lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js')}}"></script>

<script src="{{asset('js_back/amanda.js')}}"></script>
</body>
</html>

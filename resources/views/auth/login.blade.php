<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login V9</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="{{ url('images/icons/favicon.ico')}}"/>
    <link rel="stylesheet" type="text/css" href="{{ url('vendor/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ url('fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ url('fonts/iconic/css/material-design-iconic-font.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ url('vendor/animate/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ url('vendor/css-hamburgers/hamburgers.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ url('vendor/animsition/css/animsition.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ url('vendor/select2/select2.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ url('vendor/daterangepicker/daterangepicker.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ url('css/util.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ url('css/main.css')}}">
</head>
<body>
    
    
    <div class="container-login100" style="background-image: url('{{ url('images/bg-01.jpg')}}');">
        <div class="wrap-login100 p-l-55 p-r-55 p-t-80 p-b-30" style="opacity: 0.8">
            <form class="login100-form validate-form" method="post" action="{{ route('login') }}">
                {{ csrf_field() }}

                <h3 style="text-align: center; margin-bottom: 10px">Sign In</h3>


                <div class="wrap-input100 validate-input m-b-20" data-validate="Enter username or email">
                    <input class="input100" type="text" name="email" placeholder="Email" autofocus>
                    <span class="focus-input100"></span>
                </div>
                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif

                <div class="wrap-input100 validate-input m-b-25" data-validate = "Enter password">
                    <input class="input100" type="password" name="password" placeholder="password" required>
                    <span class="focus-input100"></span>
                </div>
                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif

                <div class="container-login100-form-btn">
                    <button class="login100-form-btn">
                        Sign In
                    </button>
                </div>
            </form>
        </div>
    </div>

    <div id="dropDownSelect1"></div>
    <script src="{{ url('vendor/jquery/jquery-3.2.1.min.js')}}"></script>
    <script src="{{ url('vendor/animsition/js/animsition.min.js')}}"></script>
    <script src="{{ url('vendor/bootstrap/js/popper.js')}}"></script>
    <script src="{{ url('vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{ url('vendor/select2/select2.min.js')}}"></script>
    <script src="{{ url('vendor/daterangepicker/moment.min.js')}}"></script>
    <script src="{{ url('vendor/daterangepicker/daterangepicker.js')}}"></script>
    <script src="{{ url('vendor/countdowntime/countdowntime.js')}}"></script>
    <script src="{{ url('js/main.js')}}"></script>

</body>
</html>

{{-- 

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Login</div>

                <div class="panel-body">
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}

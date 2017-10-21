




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ URL::asset('plugins/images/favicon.png')}}">
    <title>{{ config('app.name') }}</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Bootstrap Core CSS -->
    <link href="{{ URL::asset('bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- animation CSS -->
    <link href="{{ URL::asset('css/animate.css')}}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ URL::asset('css/style.css')}}" rel="stylesheet">
    <!-- color CSS -->
    <link href="{{ URL::asset('css/colors/blue.css')}}" id="theme"  rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        .login-box{background:#ffffff!important }
    </style>
</head>
<body>

<!-- Preloader -->
<div class="preloader">
    <div class="cssload-speeding-wheel"></div>
</div>
<section id="wrapper" class="login-register">
    <div class="login-box login-sidebar">
        <div class="white-box">
            <form class="form-horizontal" method="POST" id="loginform" action="{{ route('password.request2') }}">
                {{ csrf_field() }}

                <h3 class="box-title m-b-20">Şifre Sıfırlama</h3>

                <div class="form-group">
                    <div class="col-xs-12 ">

                        <input id="email" type="text" class="form-control" name="kod" required="" placeholder="Kodu giriniz">
                        <input id="" type="hidden" class="form-control" name="email" required="" value="{{$email}}" >
                        <input id="" type="hidden" class="form-control" name="yenipass" required="" value="{{$yenipass}}" >


                    </div>
                </div>


                <div class="form-group text-center m-t-20">
                    <div class="col-xs-12">
                        <button class="btn btn-primary btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Sıfırla</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
</section>
<!-- jQuery -->
<script src="{{ URL::asset('plugins/bower_components/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap Core JavaScript -->
<script src="{{ URL::asset('bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- Menu Plugin JavaScript -->
<script src="{{ URL::asset('plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js')}}"></script>

<!--slimscroll JavaScript -->
<script src="{{ URL::asset('js/jquery.slimscroll.js')}}"></script>
<!--Wave Effects -->
<script src="{{ URL::asset('js/waves.js')}}"></script>
<!-- Custom Theme JavaScript -->
<script src="{{ URL::asset('js/custom.min.js')}}"></script>
<!--Style Switcher -->
<script src="{{ URL::asset('plugins/bower_components/styleswitcher/jQuery.style.switcher.js')}}"></script>
</body>
</html>



















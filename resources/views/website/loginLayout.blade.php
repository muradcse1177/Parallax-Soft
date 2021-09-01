<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login || Parallax Soft Inc</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="{{url('public/login-asset/images/icons/favicon.ico')}}"/>
    <!--===============================================================================================-->
    <link  href="{{url('public/login-asset/vendor/bootstrap/css/bootstrap.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{url('public/login-asset/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{url('public/login-asset/fonts/iconic/css/material-design-iconic-font.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{url('public/login-asset/vendor/animate/animate.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{url('public/login-asset/vendor/css-hamburgers/hamburgers.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{url('public/login-asset/vendor/animsition/css/animsition.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{url('public/login-asset/vendor/select2/select2.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{url('public/login-asset/vendor/daterangepicker/daterangepicker.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{url('public/login-asset/css/main.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('public/login-asset/css/util.css')}}">
    <!--===============================================================================================-->
</head>
<body>
@yield('content')

<div id="dropDownSelect1"></div>
<!--===============================================================================================-->
<script src="{{url('public/login-asset/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
<script src="{{url('public/login-asset/vendor/animsition/js/animsition.min.js')}}"></script>
<!--===============================================================================================-->
<script src="{{url('public/login-asset/vendor/bootstrap/js/popper.js')}}"></script>
<script src="{{url('public/login-asset/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
<script src="{{url('public/login-asset/vendor/select2/select2.min.js')}}"></script>
<!--===============================================================================================-->
<script src="{{url('public/login-asset/vendor/daterangepicker/moment.min.js')}}"></script>
<script src="{{url('public/login-asset/vendor/daterangepicker/daterangepicker.js')}}"></script>
<!--===============================================================================================-->
<script src="{{url('public/login-asset/vendor/countdowntime/countdowntime.js')}}"></script>
<!--===============================================================================================-->
<script src="{{url('public/login-asset/js/main.js')}}"></script>

</body>
</html>

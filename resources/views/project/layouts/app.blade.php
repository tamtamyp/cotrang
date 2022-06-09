<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>@yield('title')</title>	
    <link rel="shortcut icon" type="image/x-icon" href="{{ setting('site_favicon', '') }}">
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400italic,700,700italic,900,900italic&amp;subset=latin,latin-ext" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open%20Sans:300,400,400italic,600,600italic,700,700italic&amp;subset=latin,latin-ext" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="{{asset('project/css/animate.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('project/css/font-awesome.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('project/css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('project/css/owl.carousel.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('project/css/chosen.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('project/css/style.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('project/css/color-01.css')}}">
    @stack('css')
</head>
<body class="home-page home-01 ">

	<!-- mobile menu -->
    @include('project.layouts.partials.mobileMenu')

	<!--header-->
	@include('project.layouts.partials.header')

	@yield('content')

	<!--footer-->
    @include('project.layouts.partials.footer')

	<script src="{{asset('project/js/jquery-1.12.4.minb8ff.js?ver=1.12.4')}}"></script>
	<script src="{{asset('project/js/jquery-ui-1.12.4.minb8ff.js?ver=1.12.4')}}"></script>
	<script src="{{asset('project/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('project/js/jquery.flexslider.js')}}"></script>
	<script src="{{asset('project/js/chosen.jquery.min.js')}}"></script>
	<script src="{{asset('project/js/owl.carousel.min.js')}}"></script>
	<script src="{{asset('project/js/jquery.countdown.min.js')}}"></script>
	<script src="{{asset('project/js/jquery.sticky.js')}}"></script>
	<script src="{{asset('project/js/functions.js')}}"></script>
	@include('vendor.lara-izitoast.toast')
    @stack('js')
</body>
</html>
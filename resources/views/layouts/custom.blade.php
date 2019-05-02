<!DOCTYPE html>
<html lang="dk">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<!-- SETS THE INITIAL ZOOM LEVEL, WHEN THE BROWSER IS LOADED -->
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- NOINDEX = DO NOT INDEX THIS PAGE ON THE WEB, NOFOLLOW = DO NOT FOLLOW LINKS ON THIS PAGE -->
        <meta name="robots" content="noindex, nofollow">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'CarStoreApi') }}</title>

		<!-- DESCRIPTION OF WHAT IS ON THE PAGE -->
		<meta name="description" content="A group project that showcase cars">

		<meta name="author" content="Linus">
		<meta name="generator" content="Group: #TheRoyaleApples">

		<!-- Sets the logo img for the tab bar in the browser -->
		<link rel="icon" type="image/png" href="{{ asset('/img/site/logo.jpg') }}">


		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
		<script src="https://use.fontawesome.com/625025ab71.js"></script>

		{{-- <link href="{{ asset('css/vendor.css') }}" rel="stylesheet">	 --}}
		<link href="{{ asset('css/custom.css') }}" rel="stylesheet">

	</head>
	<body>

		<!-- Header -->
		<header id="layout-header">
			@include('partials.header')
		</header>

		<!-- Nav -->
		<nav id="layout-nav">
			@include('partials.nav')
		</nav>

		<!-- Content -->
		<div id="layout-content">
			@yield('content')
		</div>

		<!-- Footer -->
		<footer id="layout-footer">
			@include('partials.footer')
		</footer>

		<!-- Scripts -->

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
 		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>

 		{{-- <script src="{{ asset('js/jquery.js') }}"></script> --}}
		<script src="{{ asset('js/scripts.js') }}"></script>

	</body>
</html>

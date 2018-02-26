<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Styles -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body class="px-lg-5 bg-secondary">
	<div class="body-container mx-lg-4 bg-light">
		<div class="topbar px-4 py-1">
			<div class="topbar links">
				<!-- <a href="" class="text-uppercase">home</a> -->
				<a href="" class="text-uppercase">login</a>
				<a href="" class="text-uppercase">register</a>
			</div>
			<div class="topbar social text-light">
				<i class="fab fa-facebook-square fa-2x"></i>
				<i class="fab fa-twitter-square fa-2x"></i>
				<i class="fab fa-google-plus-square fa-2x"></i>
				<i class="fas fa-rss-square fa-2x"></i>
			</div>
		</div><!-- end topbar -->

		<div class="main px-4 py-3">
			<div class="header">
				<div class="header name text-uppercase"><h1 class="header big m-0">newsmoto</h1><small>your online news magazine</small></div>
			</div><!-- end header -->
			<div class="nav text-light">
				<a href="" class="nav link p-3">
					<i class="fas fa-home fa-2x"></i>
				</a>
				<a href="" class="nav link p-3">
					<h5 class="m-0">Business</h5>
				</a>
				<a href="" class="nav link p-3">
					<h5 class="m-0">Music</h5>
				</a>
				<a href="" class="nav link p-3">
					<h5 class="m-0">Movies</h5>
				</a>
				<a href="" class="nav link p-3">
					<h5 class="m-0">Lifestyle</h5>
				</a>
				<a href="" class="nav link p-3">
					<h5 class="m-0">Sports</h5>
				</a>
				<a href="" class="nav link p-3">
					<h5 class="m-0">Tech</h5>
				</a>
				<a href="" class="nav link p-3">
					<h5 class="m-0">Entertainment</h5>
				</a>
				<a href="" class="nav button random p-3">
					<i class="fas fa-random fa-2x"></i>
				</a>
				<a href="" class="nav button search p-3">
					<i class="fas fa-search fa-2x"></i>
				</a>
			</div><!-- end nav -->

			<div class="breaking">
				<div class="breaking icon text-light text-uppercase p-2"><i class="fas fa-bolt"></i> Breaking news</div>
				<div class="breaking carousel"></div>
			</div>

			@yield('content')

			@include('partials.home-aside')
		</div><!-- end main -->
		@include('partials.home-content-list')
		<div class="footer px-4 py-3 text-light">
			Copyright &copy rickycabugawan 2018
		</div><!-- end footer -->

	</div><!-- end body-container -->

    <!-- Scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>

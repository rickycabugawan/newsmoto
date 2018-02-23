<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>NewsMOTO</title>

    <!-- Styles -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body class="px-lg-5 bg-secondary">
	<div class="body-container mx-lg-4 bg-light">
		<div class="topbar">
			<div class="topbar links">
				<!-- <a href="" class="text-uppercase">home</a> -->
				<a href="" class="text-uppercase">login</a>
				<a href="" class="text-uppercase">register</a>
			</div>
			<div class="topbar social">
				<i class="fab fa-facebook-square"></i>
				<i class="fab fa-twitter-square"></i>
				<i class="fab fa-google-plus-square"></i>
				<i class="fas fa-rss-square"></i>
			</div>
		</div><!-- end topbar -->

		<div class="main">
			<div class="header">
				<div class="header name text-uppercase"><h1 class="m-0">newsmoto</h1><small>your news, our news</small></div>
			</div><!-- end header -->
			<div class="nav">
				<div class="nav link">
					<i class="fas fa-home"></i>
				</div>
				<div class="nav link">
					<h3>News</h3>
				</div>
				<div class="nav link">
					<h3>Business</h3>
				</div>
				<div class="nav link">
					<h3>Music</h3>
				</div>
				<div class="nav link">
					<h3>Movies</h3>
				</div>
				<div class="nav link">
					<h3>Lifestyle</h3>
				</div>
				<div class="nav link">
					<h3>Sports</h3>
				</div>
				<div class="nav link">
					<h3>Tech</h3>
				</div>
				<div class="nav link">
					<h3>Entertainment</h3>
				</div>
				<div class="nav button">
					<i class="fas fa-random"></i>
				</div>
				<div class="nav button">
					<i class="fas fa-search"></i>
				</div>
			</div><!-- end nav -->
			<div class="breaking">
				<div class="breaking icon"><i class="fas fa-bolt"></i> Breaking</div>
				<div class="breaking carousel"></div>
			</div>
			<div>
				@include('partials.news-trending')
			</div>
			<div>
				@include('partials.news-business')
			</div>
			

		</div><!-- end main -->
	</div><!-- end body-container -->

    <!-- Scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>

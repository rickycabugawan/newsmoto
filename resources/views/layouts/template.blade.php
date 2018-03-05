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
    <link href="{{ asset('slick/slick.css') }}" rel="stylesheet">
    <link href="{{ asset('slick/slick-theme.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body class="px-lg-5 bg-secondary">
	<div class="body-container mx-lg-4 bg-light">
		<div class="topbar px-4 py-1">
			<div class="topbar links">
				@auth
                    <div class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu p-0" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">Logout
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </div>
                @else
                    <a href="#" data-toggle="modal" data-target="#loginModal" class="text-uppercase">Login</a>
                    <a href="#" data-toggle="modal" data-target="#registerModal" class="text-uppercase">Register</a>
                    @include('partials.login-modal')
                    @include('partials.register-modal')
                @endauth	
			</div>
			<div class="topbar social text-light">
				<i class="fab fa-facebook-square fa-2x"></i>
				<i class="fab fa-twitter-square fa-2x"></i>
				<i class="fab fa-google-plus-square fa-2x"></i>
				<i class="fas fa-rss-square fa-2x"></i>
			</div>
		</div><!-- end topbar -->

		<div class="main px-0 px-md-4 py-3">
			<div class="header">
				<div class="header name text-uppercase"><h1 class="header big m-0">newsmoto</h1><small>your online news magazine</small></div>
			</div><!-- end header -->
			<div class="nav text-light">
				<div class="nav-container">
				<a href="/" class="nav link p-3">
					<i class="fas fa-home fa-2x"></i>
				</a>
				<a href="/label/business" class="nav link p-3 d-none d-md-none d-lg-block">
					<h5 class="m-0">Business</h5>
				</a>
				<a href="/label/music" class="nav link p-3 d-none d-md-none d-lg-block">
					<h5 class="m-0">Music</h5>
				</a>
				<a href="/label/movies" class="nav link p-3 d-none d-md-none d-lg-block">
					<h5 class="m-0">Movies</h5>
				</a>
				<a href="/label/lifestyle" class="nav link p-3 d-none d-md-none d-lg-block">
					<h5 class="m-0">Lifestyle</h5>
				</a>
				<a href="/label/sports" class="nav link p-3 d-none d-md-none d-lg-block">
					<h5 class="m-0">Sports</h5>
				</a>
				<a href="/label/tech" class="nav link p-3 d-none d-md-none d-lg-block">
					<h5 class="m-0">Tech</h5>
				</a>
				<a href="/label/entertainment" class="nav link p-3 d-none d-md-none d-lg-block">
					<h5 class="m-0">Entertainment</h5>
				</a>
				<a href="/random" class="nav button random p-3">
					<i class="fas fa-random fa-2x"></i>
				</a>
				</div>
				<input type="text" name="search" class="search-box ml-5 pl-5 ml-md-0 pl-md-3 py-2" placeholder="Enter your search term..."></input>
				<button type="button" class="nav button search p-3">
					<i class="fas fa-search fa-2x"></i>
				</button>
			</div><!-- end nav -->

			<div class="breaking">
				<div class="breaking icon text-light text-uppercase p-2"><i class="fas fa-bolt"></i> <span class="d-none d-md-inline-block">Breaking news</span></div>
				<div class="breaking carousel">
					@foreach($most_recent_articles as $article)
						<span class="pr-3 breaking carousel-item news">
							<img class="m-1" src="{{$article->image}}">
							<a href="/label/{{$article->category}}" class="p-1 text-uppercase news-item category {{$article->category}}"><small>{{$article->category}}</small></a>
							<a href="/articles/{{$article->id}}" class="m-1 breaking carousel-item title"><small>{{$article->title}}</small></a>
						</span>
					@endforeach
				</div>
			</div>

			@yield('content')

			@include('partials.home-aside')
		</div><!-- end main -->
		@include('partials.home-content-list')
		<div class="footer px-4 py-3 text-light">
			Copyright &copy rickycabugawan 2018
		</div><!-- end footer -->

	</div><!-- end body-container -->

	@include('partials.back2top')

    <!-- Scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('slick/slick.min.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>

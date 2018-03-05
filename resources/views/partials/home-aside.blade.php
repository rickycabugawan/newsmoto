<div class="aside outer-container border-left border-muted pl-0 pl-md-3">

	<div class="aside social-counter inner-container">
		<div class="social-counter header">
			<h5 class="text-uppercase m-0"><i class="fas fa-align-left"></i> social counter</h5>
		</div>
		<div class="social-counter body my-2">
			<div class="social-item">
				<div class="social-item logo py-3" data-color="#3b5999"><i class="fab fa-facebook-f fa-2x"></i></div>
				<div class="social-item counter">
					<div class="social-item count">5.5M</div>
					<div class="social-item context">Likes</div>
				</div>
			</div>
			<div class="social-item">
				<div class="social-item logo p-3" data-color="#55acee"><i class="fab fa-twitter fa-2x"></i></div>
				<div class="social-item counter">
					<div class="social-item count">2.2M</div>
					<div class="social-item context">Followers</div>
				</div>
			</div>
			<div class="social-item">
				<div class="social-item logo p-3" data-color="#dd4b39"><i class="fab fa-google-plus-g fa-2x"></i></div>
				<div class="social-item counter">
					<div class="social-item count">105.4K</div>
					<div class="social-item context">Likes</div>
				</div>
			</div>
			<div class="social-item">
				<div class="social-item logo p-3" data-color="#f57d00"><i class="fas fa-rss fa-2x"></i></div>
				<div class="social-item counter">
					<div class="social-item count">50.2K</div>
					<div class="social-item context">Readers</div>
				</div>
			</div>
			<div class="social-item">
				<div class="social-item logo p-3" data-color="#cd201f"><i class="fab fa-youtube fa-2x"></i></div>
				<div class="social-item counter">
					<div class="social-item count">3.5M</div>
					<div class="social-item context">Subscribers</div>
				</div>
			</div>
			<div class="social-item">
				<div class="social-item logo p-3" data-color="#34465d"><i class="fab fa-tumblr fa-2x"></i></div>
				<div class="social-item counter">
					<div class="social-item count">1.5M</div>
					<div class="social-item context">Followers</div>
				</div>
			</div>
			<div class="social-item">
				<div class="social-item logo p-3" data-color="#1ab7ea"><i class="fab fa-vimeo fa-2x"></i></div>
				<div class="social-item counter">
					<div class="social-item count">23.6K</div>
					<div class="social-item context">Subscribers</div>
				</div>
			</div>
			<div class="social-item">
				<div class="social-item logo p-3" data-color="#e4405f"><i class="fab fa-instagram fa-2x"></i></div>
				<div class="social-item counter">
					<div class="social-item count">10.4KM</div>
					<div class="social-item context">Followers</div>
				</div>
			</div>
		</div>
	</div>{{-- end social counter --}}

	<div class="aside most-list inner-container">
		<nav>
		  <div class="nav nav-tabs" id="nav-tab" role="tablist">
		    <a class="nav-item nav-link active text-uppercase border-0" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true"><i class="fas fa-rss d-none d-md-inline"></i>recent</a>
		    <a class="nav-item nav-link text-uppercase border-0" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false"><i class="fas fa-star d-none d-md-inline"></i>popular</a>
		    <a class="nav-item nav-link text-uppercase border-0" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false"><i class="fas fa-file-alt d-none d-md-inline"></i>comments</a>
		  </div>
		</nav>
		<div class="tab-content" id="nav-tabContent">
			<div class="tab-pane fade show active most-list item-container" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">

				@foreach($most_recent_articles as $article)
					<div class="news most-list common news-item smaller py-3">
						<div class="news-item common inner-container mr-3">
							<div class="news-item common image" style="background-image:url({{URL::asset($article->image)}})"></div>
						</div>
							<div class="news-item common title"><a href="/articles/{{$article->id}}">{{$article->title}}</a></div>
							<div class="news-item common date-posted"><i class="far fa-calendar-alt"></i>{{$article->created_at->toFormattedDateString()}}</div>
							<div class="news-item common author"><i class="fas fa-user"></i>{{strtok($article->user->name," ")}}</div>
					</div>
				@endforeach
				
			</div>

			<div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">

				@foreach($most_popular_articles as $article)
					<div class="news most-list common news-item smaller py-3">
						<div class="news-item common inner-container mr-3">
							<div class="news-item common image" style="background-image:url({{$article->image}})"></div>
						</div>
							<div class="news-item common title"><a href="/articles/{{$article->id}}">{{$article->title}}</a></div>
							<div class="news-item common date-posted"><i class="fas fa-comments"></i></i>{{$article->comment->count()}} Comments</div>
							<div class="news-item common author"><i class="fas fa-user"></i>{{strtok($article->user->name," ")}}</div>
					</div>
				@endforeach

			</div>

			<div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab"
			>
				@foreach($most_recent_comments as $comment)
					<div class="news most-list common comment news-item smaller py-3">
						<div class="news-item common inner-container mx-2">
							<div class="border border-dark news-item common image comment rounded-circle" style="background-image:url(/images/account.png)"></div>
						</div>
							<div class="news-item common title"><a href="/articles/{{$comment->article->id}}#cmt{{$comment->id}}">{{strtok($comment->user->name," ")}}</a></div>
							<div class="news-item common date-posted">"{{$comment->comment_content}}"</div>
							
					</div>
				@endforeach

			</div>
		</div>

	</div>{{-- end most-list --}}
	<div class="aside category-list inner-container">
		<div class="category-list header">
			<h5 class="text-uppercase m-0"><i class="fas fa-align-left"></i> category</h5>
		</div>
		<div class="category-list body my-2">
			<a href="/label/business" class="category-item my-1">
				<span class="px-2 py-1 text-secondary"><i class="fas fa-tag"></i></span><span class="text-uppercase">business</span><span class="category-item counter px-2 py-1">4</span>
			</a>
			<a href="/label/music" class="category-item my-1" >
				<span class="px-2 py-1 text-secondary"><i class="fas fa-tag"></i></span><span class="text-uppercase">music</span><span class="category-item counter px-2 py-1">4</span>
			</a>
			<a href="/label/entertainment" class="category-item my-1" >
				<span class="px-2 py-1 text-secondary"><i class="fas fa-tag"></i></span><span class="text-uppercase">entertainment</span><span class="category-item counter px-2 py-1">4</span>
			</a>
			<a href="/label/lifestyle" class="category-item my-1" >
				<span class="px-2 py-1 text-secondary"><i class="fas fa-tag"></i></span><span class="text-uppercase">lifestyle</span><span class="category-item counter px-2 py-1">4</span>
			</a>
			<a href="/label/movies" class="category-item my-1" >
				<span class="px-2 py-1 text-secondary"><i class="fas fa-tag"></i></span><span class="text-uppercase">movies</span><span class="category-item counter px-2 py-1">4</span>
			</a>
			<a href="/label/sports" class="category-item my-1" >
				<span class="px-2 py-1 text-secondary"><i class="fas fa-tag"></i></span><span class="text-uppercase">sports</span><span class="category-item counter px-2 py-1">4</span>
			</a>
			<a href="/label/tech" class="category-item my-1" >
				<span class="px-2 py-1 text-secondary"><i class="fas fa-tag"></i></span><span class="text-uppercase">tech</span><span class="category-item counter px-2 py-1">4</span>
			</a>
		</div>

	</div>{{-- end blog-archive --}}
	<div class="aside blog-archive inner-container">
		<div class="blog-archive header">
			<h5 class="text-uppercase m-0"><i class="fas fa-align-left"></i> news archive</h5>
		</div>
		<div class="blog-archive body mt-2">
			<select class="archive selection my-2">
				<option selected disabled>Select Month</option>
				@foreach($archives as $archive)
				<option>{{$archive->created_at->format('M Y')}}</option>
				@endforeach
			</select>
		</div>

	</div>{{-- end news-letter --}}

	<div class="aside news-letter inner-container">
		<div class="news-letter header">
			<h5 class="text-uppercase m-0"><i class="fas fa-align-left"></i> newsletter</h5>
		</div>
		<div class="news-letter body my-3 p-3">
			<span class="text-uppercase text-light">subscribe to our newsletter. get our latest articles delivered to your email</span>
			<input class="text-center" type="text" name="" placeholder="Email Address">
			<button class="btn btn-sm text-uppercase">submit</button>
		</div>

	</div>{{-- end news-letter --}}

</div>
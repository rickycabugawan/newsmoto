<div class="content-list item-container px-4 pt-3">
	<div class="content-list item popular">
		<div class="content-list item header text-uppercase">
			<h5 class="m-0"><i class="fas fa-align-left"></i> popular post</h5>
		</div>
		@foreach($most_popular_articles as $article)
		<div class="news content-list common news-item smaller pb-2">
			<div class="news-item common inner-container my-2 mr-2">
				<div class="news-item common image" style="background-image:url({{$article->image}})"></div>
			</div>
				<div class="news-item common title"><a href="/articles/{{$article->id}}">{{$article->title}}</a></div>
				<div class="news-item common date-posted"><i class="fas fa-comments"></i></i>{{$article->comment->count()}} Comments</div>
				<div class="news-item common author"><i class="fas fa-user"></i>{{strtok($article->user->name," ")}}</div>
		</div>    
		@endforeach
		


	</div>
	<div class="content-list item recent">
		<div class="content-list item header text-uppercase">
			<h5 class="m-0"><i class="fas fa-align-left"></i> recent post</h5>
		</div>

		
		@foreach($most_recent_articles as $article)
		
		<div class="news content-list common news-item smaller pb-2">
			<div class="news-item common inner-container my-2 mr-2">
				<div class="news-item common image" style="background-image:url({{$article->image}})"></div>
			</div>
				<div class="news-item common title"><a href="/articles/{{$article->id}}">{{$article->title}}</a></div>
				<div class="news-item common date-posted"><i class="far fa-calendar-alt"></i>{{$article->created_at->toFormattedDateString()}}</div>
				<div class="news-item common author"><i class="fas fa-user"></i>{{strtok($article->user->name," ")}}</div>
		</div>    
		@endforeach

	</div>
	<div class="content-list item random">
		<div class="content-list item header text-uppercase">
			<h5 class="m-0"><i class="fas fa-align-left"></i> random post</h5>
		</div>
		@foreach($random_posts as $article)
		
		<div class="news content-list common news-item smaller pb-2">
			<div class="news-item common inner-container my-2 mr-2">
				<div class="news-item common image" style="background-image:url({{$article->image}})"></div>
			</div>
				<div class="news-item common title"><a href="/articles/{{$article->id}}">{{$article->title}}</a></div>
				<div class="news-item common date-posted"><i class="far fa-calendar-alt"></i>{{$article->created_at->toFormattedDateString()}}</div>
				<div class="news-item common author"><i class="fas fa-user"></i>{{strtok($article->user->name," ")}}</div>
		</div>    
		@endforeach
	</div>
</div>
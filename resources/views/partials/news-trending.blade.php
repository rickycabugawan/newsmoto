<div class="news trending text-light">

	@foreach($featured_articles->take(2) as $article)
	<div class="news news-item trending large">
		<div class="news-item trending image" style="background-image:url({{asset($article->image)}})"></div>

		<div class='news-item date {{$article->category}} px-1 ml-3'>
			<span class="news-item date day">{{$article->created_at->format('d')}}</span>
			<span class="news-item date month">{{$article->created_at->format('M')}}</span>
			<span class="news-item date year">{{$article->created_at->year}}</span>
		</div>
		<div class="news-item details-container ml-3">
			<div class="news-item category {{$article->category}} px-1"><a href="/label/{{$article->category}}">{{ucfirst($article->category)}}</a></div>
			<div class="news-item title"><a href="/articles/{{$article->id}}">{{$article->title}}</a></div>
			<div class="news-item date-posted"><i class="far fa-calendar-alt"></i>{{$article->created_at->toFormattedDateString()}}</div>
			<div class="news-item author"><i class="fas fa-user"></i>{{strtok($article->user->name," ")}}</div>
			<div class="news-item preview text">{{str_limit(str_after($article->content,'<p>'),250)}}</div>
		</div>
	</div>
	@endforeach
	
	@foreach($featured_articles->slice(2) as $article)
	<div class="news news-item trending small">

		<div class="news-item trending image" style="background-image:url({{asset($article->image)}})"></div>

		<div class="news-item date {{$article->category}} px-1 ml-3">
			<span class="news-item date day">{{$article->created_at->format('d')}}</span>
			<span class="news-item date month">{{$article->created_at->format('M')}}</span>
			<span class="news-item date year">{{$article->created_at->year}}</span>
		</div>
		<div class="news-item details-container ml-3">
			<div class="news-item category {{$article->category}} px-1"><a href="/label/{{$article->category}}">{{ucfirst($article->category)}}</a></div>
			<div class="news-item title"><a href="/articles/{{$article->id}}">{{$article->title}}</a></div>
			<div class="news-item date-posted"><i class="far fa-calendar-alt"></i>{{$article->created_at->toFormattedDateString()}}</div>
			<div class="news-item author"><i class="fas fa-user"></i>{{strtok($article->user->name," ")}}</div>
			<div class="news-item preview text">{{str_limit(str_after($article->content,'<p>'),150)}}</div>
		</div>
	</div>
	@endforeach

	
</div>

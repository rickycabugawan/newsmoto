<div class="news entertainment">
	<div class="news entertainment common header">
		<a href="" class="text-uppercase header-title px-2 py-1"><i class="fas fa-rss-square"></i> entertainment</a>
		<a href="" class="more px-1 my-2 text-uppercase">more <i class="fas fa-angle-right"></i></a>
	</div>
	<div class="news entertainment items-container">

		@foreach($entertainment_articles->take(1) as $article)
		<div class="news entertainment common news-item large p-3">
			<div class="news-item common inner-container">
				<div class="news-item common image" style="background-image:url({{$article->image}})"></div>
				<div class="news-item common date px-1 ml-3">
					<span class="news-item date day">{{$article->created_at->format('d')}}</span>
					<span class="news-item date month">{{$article->created_at->format('M')}}</span>
					<span class="news-item date year">{{$article->created_at->year}}</span>
				</div>
				<a href="/label/{{$article->category}}" class="news-item common {{$article->category}} category px-1 ml-3">{{ucfirst($article->category)}}</a>
				<div class="news-item common title ml-3 mb-2"><a href="/articles/{{$article->id}}">{{$article->title}}</a></div>
			</div>
			<div class="news-item common preview text">{{str_limit(str_after($article->content,'<p>'),180)}}</div>
			<a href="/articles/{{$article->id}}" class="news-item common btn btn-dark text-light">Read More <i class="fas fa-angle-double-right"></i></a>
		</div>
		@endforeach

		@foreach($entertainment_articles->slice(1) as $article)
		<div class="news entertainment common news-item smaller pb-2">
			<div class="news-item common inner-container">
				<div class="news-item common image" style="background-image:url({{$article->image}})"></div>
			</div>
				<div class="news-item common title"><a href="/articles/{{$article->id}}">{{$article->title}}</a></div>
				<div class="news-item common date-posted"><i class="far fa-calendar-alt"></i>{{$article->created_at->toFormattedDateString()}}</div>
				<div class="news-item common author"><i class="fas fa-user"></i>{{strtok($article->user->name," ")}}</div>
		</div>
		@endforeach
	</div>
</div>
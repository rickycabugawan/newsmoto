<div class="news business">
	<div class="news business common header">
		<a href="/label/business" class="text-uppercase header-title px-2 py-1"><i class="fas fa-rss-square"></i> business</a>
		<a href="/label/business" class="more px-1 my-2 text-uppercase">more <i class="fas fa-angle-right"></i></a>
	</div>

	@foreach($business_articles as $article)
	<div class="news business items-container">
		<div class="news business common news-item large p-3">
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
	</div>
</div>
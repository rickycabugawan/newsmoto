<div class="news lifestyle">
	<div class="news lifestyle common header">
		<a href="/label/lifestyle" class="text-uppercase header-title px-2 py-1"><i class="fas fa-rss-square"></i> lifestyle</a>
		<a href="/label/lifestyle" class="more px-1 my-2 text-uppercase">more <i class="fas fa-angle-right"></i></a>
	</div>
	<div class="news lifestyle items-container">
		@foreach($lifestyle_articles as $article)
		<div class="news lifestyle common news-item small">
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
		</div>
		@endforeach
	</div>
</div>
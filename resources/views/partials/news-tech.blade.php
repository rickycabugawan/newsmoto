<div class="news tech">
	<div class="news tech common header">
		<a href="/label/tech" class="text-uppercase header-title px-2 py-1"><i class="fas fa-rss-square"></i> tech</a>
		<a href="/label/tech" class="more px-1 my-2 text-uppercase">more <i class="fas fa-angle-right"></i></a>
	</div>
	<div class="news tech items-container">
		@foreach($tech_articles as $article)
		<div class="news tech common news-item small">
			<div class="news-item common inner-container">
				<div class="news-item common image" style="background-image:url({{$article->image}})"></div>
				<a href="/label/{{$article->category}}" class="news-item common {{$article->category}} category px-1 ml-3">{{ucfirst($article->category)}}</a>
				<div class="news-item common title ml-3 mb-2"><a href="/articles/{{$article->id}}">{{$article->title}}</a></div>
			</div>
		</div>
		@endforeach
	</div>
</div>
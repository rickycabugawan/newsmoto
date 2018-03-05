<div class="articles-list-container">
	<div class="articles-list header card pt-3 pb-2 px-3 mx-lg-5">
			<i class="fas fa-tag fa-2x"></i><span">Showing posts with label <span class="articles-list category">{{ucfirst($category)}}</span>.</span>
	</div>
	<div class="articles-list-main">

		@foreach($category_articles as $article)
		<div class="news {{$category}} common news-item large">
			<div class="news-item common inner-container">
				<div class="news-item common image" style="background-image:url({{$article->image}})"></div>
				<div class="news-item {{$category}} common date px-1 ml-3">
					<span class="news-item date day">{{$article->created_at->format('d')}}</span>
					<span class="news-item date month">{{$article->created_at->format('M')}}</span>
					<span class="news-item date year">{{$article->created_at->year}}</span>
				</div>
				<a href="" class="news-item common {{$article->category}} category px-1 ml-3 mb-3">{{ucfirst($article->category)}}</a>
			</div>
			<div class="inner-container2">
				<div class="news-item common title"><a href="/articles/{{$article->id}}">{{$article->title}}</a></div>
					<div class="news-item common date-posted"><i class="far fa-calendar-alt"></i>{{$article->created_at->toFormattedDateString()}}</div>
					<div class="news-item common author"><i class="fas fa-user"></i>{{strtok($article->user->name," ")}}</div>
				<div class="news-item common preview text">{{str_limit(str_after($article->content,'<p>'),180)}}</div>
				<a href="/articles/{{$article->id}}" class="news-item common btn btn-dark text-light">Read More <i class="fas fa-angle-double-right"></i></a>
			</div>
		</div>
		@endforeach
	</div>
</div>
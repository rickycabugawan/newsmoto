
<div class="article-main">
	    
	<nav aria-label="breadcrumb">
	  <ol class="breadcrumb p-2">
	    <li class="breadcrumb-item"><a href="/">Home</a></li>
	    <li class="breadcrumb-item"><a href="/label/{{$this_article->category}}">{{ucfirst($this_article->category)}}</a></li>
	    <li class="breadcrumb-item active">{{$this_article->title}}</li>
	  </ol>
	</nav>

	<div class="article head-container">
		<h1 class="article head-title">{{$this_article->title}}</h1>
		<div class="article details-container">
			<span class="article head-author"><i class="fas fa-user"></i> {{strtok($this_article->user->name," ")}}</span>
			<span class="article head-time-posted"><i class="far fa-clock"></i> {{$this_article->created_at->diffForHumans()}}</span>
			<span class="article head-category"><i class="fas fa-folder-open"></i> {{ucfirst($this_article->category)}}</span>
		</div>
	</div>
	<hr>
	<div class="article article-head-image" contenteditable="true">
		<img class="img-fluid" src="{{URL::asset($this_article->image)}}" >
	</div>

	<div class="article article-body">
		{!!$this_article->content!!}
	</div>{{-- end article-body --}}
	<hr>
	<div class="card article article-labels rounded-0 p-2 my-4">
		<span class="article label-label font-weight-bold text-uppercase"><i class="fas fa-tags"></i> labels:</span>
		<a href="/label/{{$this_article->category}}" class="text-uppercase article label-item py-1 px-2">{{$this_article->category}}</a>
	</div>
	<div class="article author-box p-3 my-4">
		<div class="author-box author-image-container mr-3 bg-light">
			<img class="author-box author-image" src="{{/images/account.png)}}">
		</div>
		<div class="author-box box-name mt-2">About <span class="author-name">{{strtok($this_article->user->name," ")}}</span></div>
		<div class="author-box about mb-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat.</div>
	</div>

	<div class="article related-post">
		<div class="news sports">
			<div class="news related common header">
				<a href="/label/{{$this_article->category}}" class="text-uppercase header-title py-1">related news</a>
				<a href="/label/{{$this_article->category}}" class="more px-1 my-2 text-uppercase">more <i class="fas fa-angle-right"></i></a>
			</div>
			<div class="card news sports items-container related rounded-0 p-3 my-2 ">

				@foreach($related_articles as $article)
				<div class="news common news-item small">
					<div class="news-item common inner-container">
						<div class="news-item common image" style="background-image:url({{$article->image}})"></div>
						<div class="news-item common {{$article->category}} date px-1 ml-3">
							<span class="news-item date day">{{$article->created_at->format('d')}}</span>
							<span class="news-item date month">{{$article->created_at->format('M')}}</span>
							<span class="news-item date year">{{$article->created_at->year}}</span>
						</div>
						<a href="" class="news-item common {{$article->category}} category px-1 ml-3">{{ucfirst($article->category)}}</a>
						<div class="news-item common title ml-3 mb-2"><a href="/articles/{{$article->id}}">{{$article->title}}</a></div>
					</div>
				</div>
				@endforeach
			</div>
		</div>
	</div>


	<div class="card article comment-box rounded-0 p-3">
		<div class="comment-box head">
			<div class="text-uppercase p-2"><i class="fas fa-comments"></i> post a comment</div>
			<div class="comment-count p-2">{{$this_article->comment->count()}} comments:</div>
		</div>
		<div class="comment-box comment-list">
			@if($this_article->comment->count()>0)
			@foreach($this_article->comment->sortBy('created_at') as $comment)
			<div class="comment-box comment-item mb-2" id="cmt{{$comment->id}}">
					<div class="comment-item image-container border border-dark">
						<img class="comment-item image img-fluid" src="{{/images/account.png}}">
					</div>
					<div class="comment-item card">
					  <div class="comment-item card-header">
					    <span class="comment-item user-name">{{$comment->user->name}}</span>
					    <span class="comment-item head-time-posted"><i class="far fa-clock"></i> {{$comment->created_at->diffForHumans()}}</span>
					  </div>
					  	<div class="card-body">
					    	<p class="card-text">{{$comment->comment_content}}</p>
						    <div class="comment-button-group">
						    	@if(Auth::check())
								    <button class="btn btn-sm btn-secondary rounded-0" data-toggle="collapse" data-target=".reply{{$comment->id}}"><i class="fas fa-reply"></i> Reply</button>
								    @if(($comment->user->id == Auth::user()->id)||(Auth::user()->isAdmin))
								    <button data-index="{{$comment->id}}" class="comment-delete btn btn-sm btn-secondary rounded-0"><i class="fas fa-trash-alt"></i> Delete</button>
								    @endif
							    @endif
						    </div>
						</div>
					</div>	

					<div class="comment-box add-reply mb-2 collapse reply{{$comment->id}}" id="reply{{$comment->id}}">
						<div class="comment-item add-reply card">
						  <div class="card-body">
						    <textarea class="add-reply" name="reply-text" placeholder="Enter your reply..."></textarea>
						    <div class="comment-button-group">
							    <button class="btn btn-sm reply-publish btn-primary rounded-0" data-index='{{$comment->id}}'><i class="fas fa-pencil-alt"></i> Publish</button>
					    	</div>
						  </div>
						</div>
					</div>

					@if($comment->reply->count()>0)
					

					<a class="reply-list-button text-dark reply-list-button{{$comment->id}}" data-toggle="collapse" href="#reply-list{{$comment->id}}"><i class="fas fa-caret-down"></i> {{$comment->reply->count()}} 
						@if($comment->reply->count()>1)
							{{'replies'}}
						@else 
							{{'reply'}}
						@endif
					</a>
					@endif

					<div class="reply-list collapse show" id="reply-list{{$comment->id}}">
						@foreach($comment->reply->sortBy('created_at') as $reply)
						<div class="comment-box reply-item mb-2">
							<div class="comment-item image-container border border-dark">
								<img class="comment-item image img-fluid" src="{{URL::asset('/images/account.png')}}">
							</div>
							<div class="comment-item card">
							  <div class="comment-item card-header">
							    <span class="comment-item user-name">{{$reply->user->name}}</span>
							    <span class="comment-item head-time-posted"><i class="far fa-clock"></i> {{$reply->created_at->diffForHumans()}}</span>
							  </div>
							  <div class="card-body">
							    <p class="card-text">{{$reply->reply_content}}</p>
							    <div class="comment-button-group">
						    	@if(Auth::check())
								    @if(($reply->user->id == Auth::user()->id)||(Auth::user()->isAdmin))
								    <button data-index="{{$reply->id}}" data-index-comment="{{$reply->comment->id}}" class="reply-delete btn btn-sm btn-secondary rounded-0"><i class="fas fa-trash-alt"></i> Delete</button>
								    @endif
							    @endif
						    </div>
							  </div>
							</div>
						</div>
						@endforeach

						

					</div>{{-- end reply-list --}}

					
					
				</div>{{-- end comment-item --}}
				@endforeach
				@endif
			@guest
			<h4 class="text-center"><a href="#" data-toggle="modal" data-target="#loginModal" class="text-dark">Login</a> or <a href="#" data-toggle="modal" data-target="#registerModal" class="text-dark">Register</a> to Post a Comment</h4>
			@endguest
			@if(Auth::check())
			<div><a data-toggle="collapse" href="#reply{{$this_article->id}}" class="btn btn-sm btn-secondary rounded-0 mb-2"><i class="fas fa-reply"></i> Add Comment</a></div>

			<div class="comment-box add-reply mb-2 collapse" id="reply{{$this_article->id}}">
				<div class="comment-item add-reply card">
				  <div class="card-body">
				    <textarea class="add-reply" name="comment-text" placeholder="Enter your comment..."></textarea>
				    <div class="comment-button-group">
					    <button data-index='{{$this_article->id}}' class="btn btn-sm comment-publish btn-primary rounded-0"><i class="fas fa-pencil-alt"></i> Publish</button>
			    	</div>
				  </div>
				</div>
			</div>
			@endif
			
		</div>{{-- end comment-list --}}

	</div>

</div>{{-- end article-main --}}




			




				

<div class="content-list item-container px-4 pt-3">
	<div class="content-list item popular">
		<div class="content-list item header text-uppercase">
			<h5 class="m-0"><i class="fas fa-align-left"></i> popular post</h5>
		</div>
		@for ($i = 0; $i <5; $i++)
		
		<div class="news content-list common news-item smaller pb-2">
			<div class="news-item common inner-container my-2 mr-2">
				<div class="news-item common image" style="background-image:url(/images/music2.jpg)"></div>
			</div>
				<div class="news-item common title"><a href="">Lorem ipsum dolor sit amet</a></div>
				<div class="news-item common date-posted"><i class="far fa-calendar-alt"></i>Feb 22, 2018</div>
				<div class="news-item common author"><i class="fas fa-user"></i>Admin</div>
		</div>    
		@endfor
	</div>
	<div class="content-list item recent">
		<div class="content-list item header text-uppercase">
			<h5 class="m-0"><i class="fas fa-align-left"></i> recent post</h5>
		</div>
		@for ($i = 0; $i <5; $i++)
		
		<div class="news content-list common news-item smaller pb-2">
			<div class="news-item common inner-container my-2 mr-2">
				<div class="news-item common image" style="background-image:url(/images/music2.jpg)"></div>
			</div>
				<div class="news-item common title"><a href="">Lorem ipsum dolor sit amet</a></div>
				<div class="news-item common date-posted"><i class="far fa-calendar-alt"></i>Feb 22, 2018</div>
				<div class="news-item common author"><i class="fas fa-user"></i>Admin</div>
		</div>    
		@endfor
	</div>
	<div class="content-list item random">
		<div class="content-list item header text-uppercase">
			<h5 class="m-0"><i class="fas fa-align-left"></i> random post</h5>
		</div>
		@for ($i = 0; $i <5; $i++)
		
		<div class="news content-list common news-item smaller pb-2">
			<div class="news-item common inner-container my-2 mr-2">
				<div class="news-item common image" style="background-image:url(/images/music2.jpg)"></div>
			</div>
				<div class="news-item common title"><a href="">Lorem ipsum dolor sit amet</a></div>
				<div class="news-item common date-posted"><i class="far fa-calendar-alt"></i>Feb 22, 2018</div>
				<div class="news-item common author"><i class="fas fa-user"></i>Admin</div>
		</div>    
		@endfor
	</div>
</div>

/*search box*/
$('.nav.button.search').click(function() { 
	if ($(this).prev().css("left") == "0px") {
		$(this).prev().animate({left: '100%'});
	}
	else
    
	$(this).prev().animate({left: '0'});
	$(this).prev().focus();
	})

/*search box ajax*/

$(document).ready(function() {

  $('.search-box').keydown(function(event) {

  	var search = $(this).val();

    if (event.keyCode == 13) {
   	window.location.replace("/search/"+search)
    }
  });

});

/*breaking news carousel*/

$('.breaking.carousel').slick({
	arrows: false,
	slidesToShow: 3,
  	infinite: true,
  	autoplay: true,
  	autoplaySpeed: 1,
  	speed:5000,
  	cssEase: 'linear',
  	draggable: false,
      responsive: [
    {
      breakpoint: 960,
      settings: {
        slidesToShow: 2,
      }
    },
  
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});

$(document).ready(function(){
	$('.main .breaking').css('visibility','visible')
})

/*archive*/

$(document).ready(function() {

  $('.archive.selection').change(function(event) {

    var search = $(this).val();

    window.location.replace("/archive/"+search)
    
  });

});

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

/*publish comment*/

$(document).on('click','.comment-publish',function(){
  var content = $(this).parent().prev('textarea').val();
  var articleId = $(this).data('index');
  console.log(content + "<br>");
  console.log(articleId + "<br>");

  $.post("/comments", {
    content: content,
    article_id : articleId
  }, function(){
    $(".article.comment-box").load(location.href + " .article.comment-box>*", "");
    })
})

/*publish reply*/

$(document).on('click','.reply-publish',function(){
  var content = $(this).parent().prev('textarea').val();
  var commentId = $(this).data('index');
  /*console.log(content + "<br>");
  console.log(commentId + "<br>");*/

  $.post("/replies", {
    content: content,
    comment_id : commentId
  }, function(data){
      $(".comment-box.comment-list").load(location.href + " .comment-box.comment-list>*", "");
      })

})

/*deletecomment*/

$(document).on('click','.comment-delete',function(){
  var thisInClick = this;
  var commentId = $(this).data('index');
  // console.log(commentId + "<br>");
  $.ajax({
        type:   'DELETE',
        url:    '/comments/' + commentId,
        success: function(){
            $(thisInClick).closest('.comment-box.comment-item').fadeOut();
            $(".article.comment-box").load(location.href + " .article.comment-box>*", "");
        }
    });
})

/*delete reply*/

$(document).on('click','.reply-delete',function(){
  var thisInClick = this;
  var replyId = $(this).data('index');
  var commentId = $(this).data('index-comment');
  // console.log(commentId + "<br>");
  $.ajax({
        type:   'DELETE',
        url:    '/replies/' + replyId,
        success: function(){
            $(thisInClick).closest('.comment-box.reply-item').fadeOut();
            $(".comment-box.comment-list").load(location.href + " .comment-box.comment-list>*", "");
        }
    });
})

if ($(".nav.button.search").css("position") == "absolute" ){
        $(".search-box").attr('placeholder','Search...');
      }




/*----------back2top button---------*/

  //Check to see if the window is top if not then display button
$(window).scroll(function(){
    if ($(this).scrollTop() > 200) {
        $('.back2top').fadeIn();
    } else {
        $('.back2top').fadeOut();
    }
});

//Click event to scroll to top
$('.back2top').click(function(){
    $('html, body').animate({scrollTop : 0},800);
    return false;
});

/*-------price range slider----------*/


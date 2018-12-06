		$(function(){
			$(".left-nav>li>a>img").hover(function(){
            
                var oldsrc = $(this).attr("src");
                var newsrc = oldsrc.replace(".png","-h.png");
                $(this).attr("src",newsrc);

            },function(){
                var oldsrc = $(this).attr("src");
                var newsrc = oldsrc.replace("-h.png",".png");
                $(this).attr("src",newsrc);

            })
		});
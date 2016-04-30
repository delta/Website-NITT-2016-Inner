    $(document).ready(function() 
	{
		var $sidebar = $(".MenuSlider");
		$sidebar.css('left',-$sidebar.outerWidth());
		$sidebar.css('display','none');
		var $footer = $(".footer");
		var $header = $("header");
		var $body = $("body");
		var $content = $(".contentSide");
		//var mh=$page.height()+$footer.height()+$header.height();
		var mh=$("body").outerHeight();
		console.log("Width"+(3/4)*$(window).width());
		
		var sidemenu=$('.sidebarslider').children().children().children().children().eq(1);
		var heading=$('.sidebarslider').children().children().children().children().eq(0);
		var headingstatic=$('.sidebar').children().children().children().children().eq(0);
		
		$('.sidebarslider').children().children().children().children().eq(0).css('height',(3/10)*$(window).width());
		$('.sidebar').children().children().children().children().eq(1).css('max-height',$content.height()-headingstatic.height());
		
		console.log($content.height());
		console.log(headingstatic.height());
		console.log($('.sidebar').children().children().children().children().eq(1).height());
		
		$('.sidebarslider').children().children().children().css('max-height',$(window).height());
		$('.sidebarslider').children().children().children().css('min-height',$(window).height());
		$('.sidebarslider').children().children().children().css('overflow-y','scroll');
		sidemenu.css('max-width',(3/4)*$(window).width());
		sidemenu.css('min-width',(3/4)*$(window).width());
		heading.css('max-width',(3/4)*$(window).width());
		heading.css('min-width',(3/4)*$(window).width());
		sidemenu.css('overflow-x','scroll');
		$(".toggler").on("click", function toggleSidebar()
		{
				var $sidebar = $(".MenuSlider");
				$sidebar.css('display','block');
				if(parseInt($sidebar.css('left'),10)==0)
					$body.css('overflow','auto');
				else
					$body.css('overflow','hidden');
				$sidebar.animate({ left: parseInt($sidebar.css('left'),10) == 0 ? -$sidebar.outerWidth(): 0});
		});
	});
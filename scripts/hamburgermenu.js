    $(document).ready(function() 
	{
		var $sidebar = $(".MenuSlider");
		$sidebar.css('left',-$sidebar.outerWidth());
		$sidebar.css('display','none');
		var $page = $(".whitespace");
		var $footer = $(".footer");
		var $header = $("header");
		var $body = $("body");
		//var mh=$page.height()+$footer.height()+$header.height();
		var mh=$("body").outerHeight();
		console.log(mh);
		
		$('.sidebarslider').children().children().children().children().eq(0).css('height',(3/10)*screen.width);
		
		var sidemenu=$('.sidebarslider').children().children().children().children().eq(1);
		$('.sidebarslider').children().children().children().css('max-height',screen.height);
		$('.sidebarslider').children().children().children().css('min-height',screen.height	);
		$('.sidebarslider').children().children().children().css('overflow-y','scroll');
		sidemenu.css('max-width',(3/4)*screen.width);
		sidemenu.css('min-width',(3/4)*screen.width);
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
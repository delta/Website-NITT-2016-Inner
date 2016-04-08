    $(document).ready(function() 
	{
		var $sidebar = $(".MenuSlider");
		$sidebar.css('left',-$sidebar.outerWidth());
		$sidebar.css('display','none');
		var $page = $(".page");
		var $footer = $(".footer");
		var mh=$page.height()+$footer.height();
		console.log(mh);
		var sidemenu=$('.sidebarslider').children().children().children().children().eq(1);
		$('.sidebarslider').children().children().children().css('max-height',mh);
		$('.sidebarslider').children().children().children().css('overflow-y','scroll');
		sidemenu.css('max-width',screen.width/2);
		sidemenu.css('overflow-x','scroll');
		$(".toggler").on("click", function toggleSidebar()
		{
				var $sidebar = $(".MenuSlider");
				$sidebar.css('display','block');
				$sidebar.animate({ left: parseInt($sidebar.css('left'),10) == 0 ? -$sidebar.outerWidth(): 0});
		});
	});
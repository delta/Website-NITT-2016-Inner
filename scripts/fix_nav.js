$(document).ready(function() {
$(document).scroll(function scroll_fix_nav	() {
  var is_small_res = ( $( '.visible-xs' ).css( 'display' ) === 'block' );
 if(is_small_res){ 
  var headerHeight = $('header').outerHeight(true)-$('[id="k-menu affix"]').outerHeight();
  if(window.scrollY >= headerHeight)
  	{
  		if($('[id="k-menu affix"]').attr('class') == 'k-main-navig')
  		{$('[id="k-menu affix"]').toggleClass('k-main-navig navbar-fixed-top');
    	 
  			$('.navbar-fixed-top').css("background-color" , 'rgba(255, 255, 255, 1)');
    	}

    }  
  else{
  	if($('[id="k-menu affix"]').attr('class') == 'navbar-fixed-top')
  	{$('[id="k-menu affix"]').toggleClass('navbar-fixed-top k-main-navig');
	 $('.k-main-navig').css("background-color" , '#FFFFFF')
	 }
		
	
  }

}
});
// else {
// 	$(".k-main-navig").css("visibility", "hidden");
// }
});

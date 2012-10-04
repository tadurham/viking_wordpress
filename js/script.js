jQuery(document).ready(function(){
    // map locations landing page hover actions
	jQuery('.mapTile').hover(
	   function(){
    	   jQuery(this).children('.mapImage').stop().animate({top:'80px'}, 1000, 'easeOutQuint' );
	   },function(){
    	   jQuery(this).children('.mapImage').stop().animate({top:'0'}, 500, 'easeInQuint');
	   });
}); 
jQuery(document).ready(function(){

    // map locations landing page hover actions
	jQuery('.mapTile').hover(
	   function(){
    	   jQuery(this).children('.mapImage').stop().animate({top:'80px'}, 1000, 'easeOutQuint' );
	   },function(){
    	   jQuery(this).children('.mapImage').stop().animate({top:'0'}, 500, 'easeInQuint');
	   });
	   
    // resources show/hide action
    jQuery('.page-template-page-resources-php .coreContent').hide();
    
    jQuery('.page-template-page-resources-php .toggle').toggle(function(event) {
        event.preventDefault();
        console.log('Showing resources');
        jQuery(this).parent().parent().children('.coreContent').slideDown();
    }, function() {
        event.preventDefault();
        console.log('Hiding resources');
        jQuery(this).parent().parent().children('.coreContent').slideUp();
    });
}); 
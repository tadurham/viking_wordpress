jQuery(document).ready(function(){

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
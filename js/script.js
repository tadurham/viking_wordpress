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
    
    // classes show/hide action
    jQuery('.page-template-page-classes-php .classesContent').hide();
    jQuery('.page-template-page-classes-php .hyperlink a.lessInfoLink').hide();
    jQuery('.page-template-page-classes-php .moreInfoLink').click(function(){
       //show content
       jQuery(this).parent().parent().children('.copy').children('.classesContent').slideDown();
       // swap link 
       jQuery(this).hide();
       jQuery(this).siblings('.lessInfoLink').show();
    });

    jQuery('.page-template-page-classes-php .lessInfoLink').click(function(){
       //show content
       jQuery(this).parent().parent().children('.copy').children('.classesContent').slideUp();
       // swap link 
       jQuery(this).hide();
       jQuery(this).siblings('.moreInfoLink').show();
    });

}); 
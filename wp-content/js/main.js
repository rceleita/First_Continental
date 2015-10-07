jQuery(function(){
	// HOMES DIV
	jQuery('a').click(function(){
    jQuery('html, body').animate({
        scrollTop: jQuery( jQuery.attr(this, 'href') ).offset().top -130
    }, 500);
    return false;
});
});
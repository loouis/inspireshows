// JavaScript Document
jQuery(window).load(function(){ 
								
	if (jQuery('.nohide').is(':checked') ) {
		jQuery('.hidden').show();
	}

	jQuery('.nohide').click(function() {
		jQuery('.hidden').show();
	});
	
	jQuery('.hide').click(function() {
		jQuery('.hidden').hide();
	});
	

});
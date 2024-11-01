 jQuery(document).ready(function(){
	jQuery('.admin_options').hide();
	jQuery('.admin_title h3').click(function(){	
		jQuery('.admin_options').hide();
		jQuery('.admin_title h3').removeClass('active');
		jQuery(this).addClass('active');			
		jQuery(this).parent().next('.admin_options').show();
		jQuery('#selectedformtab').val(jQuery(this).parent().attr('data-id'));
	});
	
	if (jQuery('#selectedformtab').val() == '') {
		jQuery('.admin_title h3:first').addClass('active');
		jQuery('.admin_title h3:first').parent().next('.admin_options').show();
		jQuery('#selectedformtab').val(1);
	}
	else {
		var tab = jQuery('#selectedformtab').val();
		jQuery('#admin_title'+tab+' h3').addClass('active');
		jQuery('#admin_title'+tab+' h3').parent().next('.admin_options').show();
		jQuery('#selectedformtab').val(tab);
	}
	var target = '';
});
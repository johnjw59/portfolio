$(document).ready(function() {
	$("#various1").fancybox({
		'titlePosition'		: 'inside',
		'transitionIn'		: 'none',
		'transitionOut'		: 'none'
	});
});
jQuery(document).ready(function() {
	if ( $.cookie('serioussoups_12') == null ){
		$("#various1").trigger('click');
		$.cookie('serioussoups_12', 'visited', {expires: 60, path: '/'});	
	}
});
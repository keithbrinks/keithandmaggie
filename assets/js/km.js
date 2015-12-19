jQuery(function($) {
	$('#countdown').countdown('2016/04/09', function(event) {
		$(this).html(event.strftime('%D days'));
	});
});

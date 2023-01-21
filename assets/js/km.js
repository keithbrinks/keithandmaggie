jQuery(function($) {
	$('#countdown').countdown('2016/04/09', {elapse: true}).on('update.countdown', function(event) {
		if (event.elapsed) {
			$(this).html(event.strftime('Married for %D days!'));
		} else {
			$(this).html(event.strftime('%D days'));
		}
	});
});

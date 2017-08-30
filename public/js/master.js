(function ($) {
	$(function() {
		var alert = $('#alert');
		
		if (alert.length > 0) {
			alert.addClass('shown').delay(5000).queue(function(){
			    $(this).removeClass('shown').dequeue();
			});
		} else {
			alert.removeClass('shown');
		}

		alert.find('.close').click(function (){
			alert.removeClass('shown');	
		});
	});
})(jQuery);
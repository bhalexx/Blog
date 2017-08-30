(function ($) {
	$(function() {
		$('form').find('.submit').click(function(event) {
			event.preventDefault();
			var label = $('input[name="label"]').val(),
				error = false,
				errorMessage = '';

			if (label.trim() === '') {
				error = true;
				errorMessage = "Le label est obligatoire.";
			} 

			if (!error) {
				$('form').submit();
			} else {
				$('.flash').html('<div id="alert" class="alert alert-error">' + errorMessage + '</div>');
				$('.flash #alert').addClass('shown').delay(5000).queue(function(){
				    $(this).removeClass('shown').dequeue();
				});
			}
		});
	});
})(jQuery);
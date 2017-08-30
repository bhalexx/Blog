(function ($) {
	$(function() {
		$('form').find('.submit').click(function(event) {
			event.preventDefault();
			var author = $('input[name="author"]').val(),
			 	content = $('textarea[name="content"]').val(),
				error = false,
				errorMessage = '';

			if (author.trim() === '') {
				error = true;
				errorMessage = "Le nom/pseudo est obligatoire.";
			} else if (content.trim() === '') {
				error = true;
				errorMessage = "Le contenu est obligatoire.";
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
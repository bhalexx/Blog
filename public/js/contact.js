(function ($) {
	$(function() {
		$('form').find('.submit').click(function(event) {
			event.preventDefault();
			var name = $('input[name="name"]').val(),
				mail = $('input[name="mail"]').val(),
				mailRegex = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/,
			 	message = $('textarea[name="message"]').val(),
				error = false,
				errorMessage = '';

			if (name.trim() === '') {
				error = true;
				errorMessage = "Donnez-moi votre nom, ce sera plus simple :)";
			} else if (mail.trim() === '') {
				error = true;
				errorMessage = "Sans votre adresse email, je ne pourrai pas vous répondre !";
			} else if (!mailRegex.test(mail)) {
				error = true;
				errorMessage = "Votre adresse email semble incorrecte !";
			} else if (message.trim() === '') {
				error = true;
				errorMessage = "Vous n'avez rien à me dire ?";
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
(function ($) {
	$(function() {
		$('select').select2({
			placeholder: 'Sélectionnez le(s) tag(s) associé(s) à cet article.',
			maximumSelectionLength: 3,
			language: {
				noResults: function() {
			     	return "Aucun résultat trouvé.";
			    },
			    maximumSelected: function () {
			    	return "L'article doit être associé à 3 tags maximum."
			    }
			}
		});
	});
})(jQuery);
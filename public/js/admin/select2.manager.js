(function ($) {
	$(function() {
		var that = this;

		/**
		 * Checks select validity
		 * @return {bool} select validity
		 */
		that.checkSelectValidity = function () {
			var valid = $('select').val() !== null && $('select').val().length > 0;
			$('#tags_valid').val(valid);
		};

		/**
		 * Select2.js instanciation
		 */
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

		/**
		 * Check select validity
		 */
		that.checkSelectValidity();

		/**
		 * Check select validity on select value change
		 */
		$('select').on('change', function () {
			that.checkSelectValidity();
		});
	});
})(jQuery);
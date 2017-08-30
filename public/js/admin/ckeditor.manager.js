(function ($, ckeditor) {
	$(function() {
		ckeditor.replace('content', {
			language: 'fr',
			toolbar: [
				{ name: 'document', items : [ 'Source' ] },
				{ name: 'clipboard', items : [ 'Cut', 'Copy', 'Paste', 'PasteText', 'PasteFromWord', '-', 'Undo', 'Redo' ] },
				{ name: 'forms', items : [ 'Form', 'Checkbox', 'Radio', 'TextField', 'Textarea', 'Select', 'Button', 'ImageButton', 'HiddenField' ] },
				'/',
				{ name: 'basicstyles', items : [ 'Bold', 'Italic', 'Underline', 'Strike', 'Subscript', 'Superscript', '-', 'RemoveFormat' ] },
				{ name: 'paragraph', items : [ 'NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', '-', 'Blockquote', '-', 'JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock', '-', 'BidiLtr', 'BidiRtl' ] },
				{ name: 'links', items : [ 'Link', 'Unlink', 'Anchor' ] },
				{ name: 'insert', items : [ 'Table', 'HorizontalRule', 'SpecialChar' ] },
				{ name: 'styles', items : [ 'Styles', 'Format' ] },
				{ name: 'tools', items : [ 'Maximize', '-', 'About' ] }
			]
		});
	});
})(jQuery, CKEDITOR);
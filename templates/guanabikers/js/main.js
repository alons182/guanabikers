(function($){
	var menu = $('.menu');	


	$('.btn-menu').on('click', function (e) {
	
		menu.toggle();

		e.preventDefault();
	});

	$('.gallery-itemLink').colorbox({
		rel:'gallery-tour'
		/*width: '95%',
		height: '95%',
		maxWidth: '960px',
		maxHeight: '960px'*/
	});

})(jQuery);

(function($){
	var menu = $('.menu');	


	$('.btn-menu').on('click', function (e) {
	
		menu.toggle();

		e.preventDefault();
	});

	$('.gallery-itemLink').colorbox({rel:'gallery-tour'});

})(jQuery);

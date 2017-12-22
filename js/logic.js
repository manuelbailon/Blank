jQuery.noConflict();
	(function( $ ) {
		$(function() {

		$('.carousel-testimonios').slick();
		
		// HEADER
		function fixDivBarra() {
			var $cache = $('.header'); 
				if ($(window).scrollTop() > 50)
				$cache.addClass('headeron');
			
			else
				$cache.removeClass('headeron');
				$cache.addClass('headeroff');
		}
		jQuery(window).scroll(fixDivBarra);
		fixDivBarra();
	
	 });
})(jQuery);

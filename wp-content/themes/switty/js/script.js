( function( $ ) {
	$(document).ready(function() {

		//Add img-responsive class to all images
		 $('body img').addClass("img-responsive");

		//do not add img-responsive class to elementor templates, may be they handle it.
		$('body .elementor-fluid img').removeClass("img-responsive");

		//nav after scroll add css
		$(window).scroll(function () {
			if( $(this).scrollTop() > 0 ) {
				$('#navbar').addClass('afterscroolnav');
			} else {
				$('#navbar').removeClass('afterscroolnav');
			}
		});

		// masonry posts loop
		var $container = $('.grid');
		$container.imagesLoaded(function(){
			$container.masonry({
			itemSelector: '.gridpostloop'
			//percentPosition: true
			});
		});


		}); // .end ready
} )( jQuery ); //.end function

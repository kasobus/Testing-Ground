
(function($) {
// To use lazy loading, set a data-lazy attribute
// on your img tags and leave off the src

$('.slider').slick({
 lazyLoad: 'progressive',
	  slidesToShow: 1,
	  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 2000,
	adaptiveHeight: true,
	dots: true,
  infinite: true,
  speed: 1000,
  fade: true,
	 swipe: true,
  touchMove: true,
  touchThreshold: 5,
  vertical: false
					});
						
})(jQuery); // Fully reference jQuery after this point.
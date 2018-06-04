$(document).ready(function(){
	
	"use strict";
	
	// Slider
	$('.sliders').owlCarousel({
		loop:true,
		autoplay:false,
		dots:false,
		touchDrag : false,
		mouseDrag : false,
		autoplay:true,
		autoplayTimeout:5000,
		nav: true,
		navText:['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
		responsive:{
			0:{
				items:1
			},
			600:{
				items:1
			},
			1000:{
				items:1
			}
		}
	});

}(jQuery));	
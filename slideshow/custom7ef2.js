jQuery(document).ready(function ($) {

//////////////////////////////////////////////////////////////////////////
//				Slider
//////////////////////////////////////////////////////////////////////////
	
        $(".slider-large, .slider-medium").owlCarousel({
		  autoPlay: 5000,
          slideSpeed : 500,
          paginationSpeed : 500,
          singleItem : true,
		  navigation: true,
		  pagination: false,
		  stopOnHover: true,
		  transitionStyle : "backSlide"
        });			
	


});





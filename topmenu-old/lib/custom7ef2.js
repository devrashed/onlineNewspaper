


//////////////////////////////////////////////////////////////////////////
//				Infinite Scroll
//////////////////////////////////////////////////////////////////////////
/*	var $container = $('#content_masonry');
  $container.infinitescroll({
    navSelector  : "div.pagination-more",            
    nextSelector : "div.more-previous a",                   
    itemSelector : "#content_masonry div.loop-post-content",
	 loading: {
          msgText: "",
          finishedMsg: '<span>No more posts to load.</span> <style type="text/css">.pagination-more{ display:none !important;}</style>'
        }
		
  },

      function( newElements ) {
      jQuerynewElems.imagesLoaded(function(){
        });	                      
  });
  

    jQuery(window).unbind('.infscr');
	jQuery('div.more-previous a').click(function(){jQuery('#content_masonry').infinitescroll('retrieve');
	return false;
	});
*/
//////////////////////////////////////////////////////////////////////////
//				Real time
//////////////////////////////////////////////////////////////////////////

// Create a newDate() object

	
//////////////////////////////////////////////////////////////////////////
//				Mobile menu
//////////////////////////////////////////////////////////////////////////
		
	 // $(".open").pageslide()
//////////////////////////////////////////////////////////////////////////
//				Ticker
//////////////////////////////////////////////////////////////////////////
	  
/*    var marquee = jQuery("#mycrawler"); 
	var time_multiplier = 18;
	var current;
	
	marquee.hover(function(){
		current.pause();
	}, function(){
		current.resume();
	})
	
    var reset = function() {
		current = jQuery(this);
		var item_width = jQuery(this).outerWidth();
		
		var time = time_multiplier * jQuery(this).outerWidth(); 
        jQuery(this).animate({ 'margin-left': -item_width }, time, 'linear', function(){
			var clone_item = jQuery(this).clone();
			clone_item.css({ 'margin-left': '0' });
			marquee.append(clone_item);
	
			jQuery(this).remove();
			reset.call(marquee.children().filter(':first'));
		});	
    };
	
    reset.call(marquee.children().filter(':first'));*/
	
	
//////////////////////////////////////////////////////////////////////////	
// Menu
//////////////////////////////////////////////////////////////////////////
	

	
//////////////////////////////////////////////////////////////////////////
//				Carousel
//////////////////////////////////////////////////////////////////////////

/* $(".owl_carousel").owlCarousel({
        items : 4,
        itemsDesktop : [1199,3],
        itemsDesktopSmall : [979,3],
		itemsMobile : [767,1],
		pagination: false,
		navigation: true	
      });

 $(".owl_carousel_builder").owlCarousel({
        items : 3,
        itemsDesktop : [1199,3],
        itemsDesktopSmall : [979,2],
		itemsMobile : [767,1],
		pagination: false,
		navigation: true	
      });*/	  
	  
	    
	
//////////////////////////////////////////////////////////////////////////
//				Audio / Video
//////////////////////////////////////////////////////////////////////////
	
	/*$('audio').mediaelementplayer({
			audioWidth: '100%'
		});  */


//////////////////////////////////////////////////////////////////////////
//				Slider
//////////////////////////////////////////////////////////////////////////
	
      /*  $(".slider-large, .slider-medium").owlCarousel({
		  autoPlay: 5000,
          slideSpeed : 500,
          paginationSpeed : 500,
          singleItem : true,
		  navigation: true,
		  pagination: false,
		  stopOnHover: true,
		  transitionStyle : "backSlide"
        });*/			
	
//////////////////////////////////////////////////////////////////////////
//				Add class
//////////////////////////////////////////////////////////////////////////

/*jQuery().waypoint && (jQuery(".appear_animation").waypoint(function () {
        if (!jQuery(this).hasClass("animate_css_stlye animate_start")) {
            var e = jQuery(this);
            setTimeout(function () {
                e.addClass("animate_css_stlye animate_start")
            }, 20)
        }
    }, {
        offset: "85%",
        triggerOnce: !0
    }));
	
jQuery().waypoint && (jQuery(" .reviewbox").waypoint(function () {
        if (!jQuery(this).hasClass("animation_bar_width")) {
            var e = jQuery(this);
            setTimeout(function () {
                e.addClass("animation_bar_width")
            }, 20)
        }
    }, {
        offset: "85%",
        triggerOnce: !0
    }));	
*/		
//////////////////////////////////////////////////////////////////////////
//				Tab
//////////////////////////////////////////////////////////////////////////	
	
/*    var $tabsNav = $('.tabs'),
        $tabsNavLis = $tabsNav.children('li');
    $tabsNav.each(function () {
        var $this = $(this);
        $this.next().children('.tab-content').stop(true, true).hide()
            .first().show();
       $this.children('li').first().addClass('active').stop(true, true).show();
    });
    $tabsNavLis.on('click', function (e) {
        var $this = $(this);
        $this.siblings().removeClass('active').end()
            .addClass('active');
        $this.parent().next().children('.tab-content').stop(true, true).hide()
            .siblings($this.find('a').attr('href')).fadeIn();
        e.preventDefault();
    });
	
    var $tabsNav = $('.tabs1'),
        $tabsNavLis = $tabsNav.children('li');
    $tabsNav.each(function () {
        var $this = $(this);
        $this.next().children('.tab-content1').stop(true, true).hide()
            .first().show();
       $this.children('li').first().addClass('active').stop(true, true).show();
    });
    $tabsNavLis.on('click', function (e) {
        var $this = $(this);
        $this.siblings().removeClass('active').end()
            .addClass('active');
        $this.parent().next().children('.tab-content1').stop(true, true).hide()
            .siblings($this.find('a').attr('href')).fadeIn();
        e.preventDefault();
    });	
	
	
	    var $tabsNav = $('.hover_tab_post_large'),
        $tabsNavLis = $tabsNav.children('li');
    $tabsNav.each(function () {
        var $this = $(this);
        $this.next().children('.tab-content').stop(true, true).hide()
            .first().show();
       $this.children('li').first().addClass('active').stop(true, true).show();
    });
    $tabsNavLis.on('hover', function (e) {
        var $this = $(this);
        $this.siblings().removeClass('active').end()
            .addClass('active');
        $this.parent().next().children('.tab-content').stop(true, true).hide()
            .siblings($this.find('a').attr('href')).fadeIn();
        e.preventDefault();
    });
*/


//////////////////////////////////////////////////////////////////////////
//				Go to top
//////////////////////////////////////////////////////////////////////////

	/*jQuery(window).scroll(function () {
		if (jQuery(this).scrollTop() > 500) {
			jQuery("#go-top").fadeIn();
		} else {
			jQuery("#go-top").fadeOut();
		}
	});
	$("#go-top").click(function () {
		jQuery("body,html").animate({ scrollTop: 0 }, 800 );
		return false;
	});		
*/
//////////////////////////////////////////////////////////////////////////
//				Video responsive
//////////////////////////////////////////////////////////////////////////

/*fluidvids.init({
      selector: 'iframe',
      players: ['www.youtube.com', 'player.vimeo.com']
    });*/

//////////////////////////////////////////////////////////////////////////
//				Sticky
//////////////////////////////////////////////////////////////////////////	







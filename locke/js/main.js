jQuery(function($) {
	$('.menu-button button').on('click', function(e) {
		e.preventDefault();
		$(this).parent().siblings('nav').toggleClass('open');
	});

	$('#testimonial-section-slider').slick({
		infinite: true,
		slidesToShow: 1,
		slidesToScroll: 1,
		dots: true,
		prevArrow: '<button type="button" class="slick-prev"><i class="icon-angle-left"></i></button>',
		nextArrow: '<button type="button" class="slick-next"><i class="icon-angle-right"></i></button>',
		adaptiveHeight: true,
		slide: 'li'
	});

	$('.three-slider').slick({
		infinite: true,
		slidesToShow: 3,
		slidesToScroll: 3,
		dots: true,
		prevArrow: '<button type="button" class="slick-prev"><i class="icon-angle-left"></i></button>',
		nextArrow: '<button type="button" class="slick-next"><i class="icon-angle-right"></i></button>',
		responsive: [{
			breakpoint: 960,
			settings: {
				slidesToShow: 3,
				arrows: false,
			}
		},{
			breakpoint: 768,
			settings: {
				slidesToShow: 2,
				arrows: false,
			}
		},{
			breakpoint: 600,
			settings: {
				slidesToShow: 1,
				arrows: false,
			}
		}]
	});


		$('.three-slider').magnificPopup({
		delegate: 'a',
		type: 'image',
		tLoading: 'Loading image #%curr%...',
		mainClass: 'mfp-img-mobile',
		gallery: {
			enabled: true,
			navigateByImgClick: true,
			preload: [0,1] // Will preload 0 - before current, and 1 after the current image
		},
		image: {
			tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',

		}
	});


/*
	$('.fc-day-grid-event').on('click', function(){
		e.preventDefault();
	});
*/

});
$(document).ready(function() {

	var maxHeight = -1;

    $('.column-content .column').each(function() {
      maxHeight = maxHeight > $(this).height() ? maxHeight : $(this).height();
    });

    $('.column-content .column').each(function() {
      $(this).height(maxHeight + 10);
    });

	$('.tabs').responsiveTabs({
		startCollapsed: 'accordion'
	});

	$('.gallery-tabs').responsiveTabs({
		//startCollapsed: 'accordion',
		activate: function(e, tab) {
	    	$('.three-slider').slick('setPosition');
	    },
	});

	$('#home-banner').isotope({
		// set itemSelector so .grid-sizer is not used in layout
		itemSelector: '.box',
		percentPosition: true,
		masonry: {
			// use element for option
			columnWidth: '.grid-sizer',

			gutter: 4
		}
	});
	$('.grid').isotope({
		layoutMode: 'packery',
		itemSelector: '.grid-item',
		packery: {
			columnWidth: 226,
			gutter: 10
		}
	});
	$('.filter-button-group').on('click', 'button', function() {
		var filterValue = $(this).attr('data-filter');
		$('.grid').isotope( {
			filter: filterValue
		});
	});

	var $win = $(window),
      $con = $('.grid'),
      $imgs = $(".grid-item img");

     $con.isotope();

     $con.on('layoutComplete', function(){
         $win.trigger("scroll");
     });

     $imgs.lazyload({
         failure_limit: Math.max($imgs.length - 1, 0)
     });


	$('.button-group').each(function(i, buttonGroup) {
		var $buttonGroup = $(buttonGroup);
		$buttonGroup.on('click', 'button', function() {
			$buttonGroup.find('.is-checked').removeClass('is-checked');
			$(this).addClass('is-checked');
		});
	});
});

$(function() {
  $('nav a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});

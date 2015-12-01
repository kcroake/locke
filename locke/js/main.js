jQuery(function($) {
	$('.menu-button button').on('click', function(e) {
		e.preventDefault();
		$(this).parent().siblings('nav').toggleClass('open');
	});
	
	$('#home-gallery .grid').magnificPopup({
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
	
});
$(document).ready(function() {
	//     $("#home-banner").mason({
	//     itemSelector: ".box",
	//     ratio: 1.5,
	//     sizes: [
	//         [1,1],
	//         [1,2],
	//         [2,2]
	//     ],
	//     columns: [
	//         [0,480,1],
	//         [480,780,2],
	//         [780,1080,3],
	//         [1080,1320,3],
	//         [1320,1680,3]
	//     ],
	//     promoted: [
	//     ],
	//     filler: {
	//         itemSelector: '.fillerBox',
	//         filler_class: 'custom_filler',
	//         keepDataAndEvents: false
	//     },
	//     layout: 'fluid',
	//     gutter: 5
	// },function(){
	//     console.log("COMPLETE!")
	// });
	$('.tabs').responsiveTabs({
		startCollapsed: 'accordion'
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
			gutter: 10
		}
	});
	$('.filter-button-group').on('click', 'button', function() {
		var filterValue = $(this).attr('data-filter');
		$('.grid').isotope({
			filter: filterValue
		});
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
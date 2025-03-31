;(function(jQuery, window, document, undefined) {
	var $win = jQuery(window);
	var $doc = jQuery(document);

	$doc.ready(function($) {

		//Fullscreener
		jQuery('.slide-image img, .section-background img, .main-head-background img').fullscreener();

		//Slider
		var $carousel = jQuery('.slider');


				auto: {
					timeoutDuration: 10000
				}


		$carousel.each( function() {
			var $this = jQuery(this);
			var prev = $this.find('.prev');
			var next = $this.find('.next');
			var paging = $this.find('.paging');
			var slider = $this.find('.slides');

			slider.carouFredSel({
				responsive: true,
				prev: prev,
				next: next,
				swipe: {
					onTouch: true
				},

                                auto: {
                                        timeoutDuration: 10000
                                }


			});
		});




                //Tips
                jQuery('.slider-tips .slides').carouFredSel({
                        responsive: true,
                        height: 'variable',
                        swipe: {
                                onTouch: true
                        },
                        items: {
                                height: 'variable'
                        },

			prev: {
                                button: function(){
                                        return jQuery('.tips-controls').find(".prev");                     
                                }
			},
			next: {
				button: function(){
					return jQuery('.tips-controls').find(".next");
				}
			},
                        auto: {
                                play: false
                        }
                         
                });    


                //Testimonials
                jQuery('.slider-testimonials .slides').carouFredSel({
			responsive: true,
			height: 'variable',
			swipe: {
				onTouch: true
			},
			items: {
				height: 'variable'
			},
                        prev: {
                                button: function(){
                                        return jQuery('.slider-testimonial-actions').find(".slider-prev");
                                }
                        },
                        next: {
                                button: function(){
                                        return jQuery('.slider-testimonial-actions').find(".slider-next");
                                }
                        },
                        auto: {
                                play: false
                        }

                });


window.onload = function() {
	jQuery(".section-slider-banner .banner-slides").carouFredSel({
		items: 1,
		responsive: true,
		height: 'variable',
		swipe: {
			onTouch: true
		},
		items: {
			visible: 1,
			height: 'variable'
		},
		scroll: {
			duration: 1000
		},
		prev: {
	        button: function(){
	            return jQuery(this).parents(".section-slider-banner").find(".prev");
	        }
	    },
	    next: {
	        button: function(){
	            return jQuery(this).parents(".section-slider-banner").find(".next");
	        }
	    }
	});
};



		var showThatManyItems; 
		var $win = $(window);

		if ( $win.width() < 768 ) {
			showThatManyItems = 2
		} else {
			showThatManyItems = 6
		}


		//Slider Logos
		jQuery('.slider-logos .slides').carouFredSel({
			responsive: true,
			height: 'variable', 
			width: '100%',
			scroll: {
				items: 1
			},
			items: {
				height: 'variable',
				visible: showThatManyItems
			}

		});


		$('.btn-menu').on('click', function (e){

			$('.nav').toggleClass('expanded');

			e.preventDefault();
		})

	jQuery('.btn-go-top').on('click', function(event){
		event.preventDefault();
		_scrollTo(0);
	});

	// if(jQuery('#map').length) {
	// 	window.addEventListener('load', initMap);
	// }

		$( '.nav ul > li:has(ul)' ).doubleTapToGo(); 


		//Placeholders
		jQuery.fn.doPlaceholders = function() {
			if (jQuery.support.placeholder) {
				return this;
			}

			var $fields = this.filter(function () {
				// Don't re-initialize
				return !jQuery(this).data('didPlaceholders');
			});

			$fields.on('focus blur', function(event) {
				var placeholder = this.getAttribute('placeholder');

				if (event.type === 'focus' && placeholder === this.value) {
					this.value = '';
				} else if (event.type === 'blur' && this.value === '') {
					this.value = placeholder;
				}
			});

			// Set the initial value to the title
			$fields.each(function() {
				if (this.value === '') {
					this.value = this.getAttribute('placeholder');
				}
			});

			// Mark the fields as initialized
			$fields.data('didPlaceholders', true);

			// Alllow
			return $fields;
		};

		jQuery.support.placeholder = (function() {
			return 'placeholder' in document.createElement('input');
		})();

		// Don't select elements if placeholder is natively supported
		if (!jQuery.support.placeholder) {
			jQuery('input[placeholder], textarea[placeholder]').doPlaceholders();
		}






jQuery('.nav a[href]').filter(function() { 
    return /(-request-quote.php)$/.test( jQuery(this).attr('href'))
}).addClass('nav-appointment-button');




        var $win = $(window);
	$win.on('resize', function (){

		if ( $win.width() < 768 ) {
			var showThatManyItems = 2; 
			    $('.slider-logos .slides').trigger('configuration', [
			        'items', {
			            visible : showThatManyItems
			        }
			    ], true);
			} else {
				var showThatManyItems = 6; 
			    $('.slider-logos .slides').trigger('configuration', [
			        'items', {
			            visible : showThatManyItems
			        }
			    ], true);
			}
		})

		$('.footer-call-btn-overlay .btn__close').on('click', function(e) {

			e.preventDefault();
			$('.footer-call-btn-overlay').slideUp();

		});




	});

	$win.load(function() {
		jQuery.fn.equalizeHeight = function() {
			var maxHeight = 0, itemHeight;

			for (var i = 0; i < this.length; i++) {
				itemHeight = jQuery(this[i]).height();
				if (maxHeight < itemHeight) {
					maxHeight = itemHeight;
				}
			}

			return this.height(maxHeight);
		}

		jQuery('.widget').equalizeHeight();

	});




})(jQuery, window, document);

jQuery(window).scroll(function(){
	var scrollPos = jQuery(window).scrollTop();

	// show go top button
	if(scrollPos >= 200){
		jQuery('body').addClass('show-go-top');
	}else{
		jQuery('body').removeClass('show-go-top');
	}

});// end window scroll

function _scrollTo(_value){
	jQuery('html,body').delay(100).animate({scrollTop:_value}, 1000);
}

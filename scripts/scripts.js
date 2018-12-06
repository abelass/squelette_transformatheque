// Typekit

(function(d) {

	var config = {

		kitId: 'duc5aao',

		scriptTimeout: 3000,

		async: true
	},
	
	h =				d.documentElement,
	t =				setTimeout(
						function() {
							h.className = h.className.replace(/\bwf-loading\b/g,"") + " wf-inactive";
						},
					config.scriptTimeout),
	tk =			d.createElement("script"),
	f =				false,
	s =				d.getElementsByTagName("script")[0],a;

	h.className	+= 	" wf-loading";
	
	tk.src =		'https://use.typekit.net/' + config.kitId + '.js';
	
	tk.async =		true;
	
	tk.onload =		tk.onreadystatechange = function() {
						a =	this.readyState;

						if ( f || a && a !== "complete" && a !== "loaded" )
							return;

						f=true;

						clearTimeout(t);

						try {
							Typekit.load(config);
						}

						catch(e){}
					};

	s.parentNode.insertBefore(tk, s);
})(document);

// FLIP animations

(function ($) {

	// Get the width, height, offsets, and opacities
	// Store the values in dataPos
	$.fn.FLIPfirst = 	function() {

		return this.each(function() {

			var	element =		$(this),
				boundsFirst =	element[0].getBoundingClientRect(),
				opacityFirst =	element.css('opacity');
			
			element.data(
				'dataPos', { 
					boundsFirst: 		boundsFirst,
					opacityFirst: 		opacityFirst
				}
			);
		});
	},

	$.fn.FLIPlast = 	function() {

		this.each(function() {

			var element = 			$(this);

			var boundsFirst = 		element.data('dataPos').boundsFirst,
				opacityFirst = 		element.data('dataPos').opacityFirst;
				boundsLast = 		element[0].getBoundingClientRect(),

			// Calculate the difference
				scaleX = 			boundsFirst.width 	/ 	boundsLast.width,
				scaleY =			boundsFirst.height 	/ 	boundsLast.height,
			    invertX = 			boundsFirst.left 	- 	boundsLast.left,
			    invertY = 			boundsFirst.top 	- 	boundsLast.top,
			   	opacity =			opacityFirst,

			// Save the transform
			   	flip =				'transform: translate(' + invertX + 'px, ' + invertY + 'px) scale(' + scaleX + ', ' + scaleY + '); opacity: ' + opacity + ';';

			element.data(
				'dataPos', {
					flip: 			flip
				}
			);
			
		});

		// Apply the transformation
		return this.each(function() {

			var element = 			$(this),
				elementStyle =		element.data('dataPos').flip;

			element.attr('style', elementStyle).addClass('is-flipped');
		})

		// element.attr('style', 'transform: translate(' + invertX + 'px, ' + invertY + 'px) scale(' + scaleX + ', ' + scaleY + '); opacity: ' + opacity + ';');
	},

	$.fn.FLIPplay = 	function() {

		var elements = 		this,
			elementCount = 	elements.length;

		return elements.each(function(index) {

			if ( index === elementCount - 1 ) {

				// Wait for the next frame
				requestAnimationFrame(function() {

					// Animate the element
					elements.addClass('animate');

					// Reset the transform
					elements.attr('style', '');
				});
				
				// Reset the animation
				elements.on( 'transitionend', Drupal.behaviors.astral.FLIPtidy );

			}
		});
		
		elements = '';
	},

	$.fn.FLIPtidy = 		function() {

		var element = $('.animate');

		element.off('transitionend');
		
		element.removeClass('animate is-flipped');
	}
}) (jQuery);

// UI 

(function ($) {

	// Change theme

	$.fn.changeTheme = 		function() {
		var page = 			$('.page'),
			themeItem = 	this,
			theme = 		themeItem.attr('data-theme');

		page.attr('data-theme', theme);
	};

	$('.themes__item').click(function() {

		$(this).changeTheme();
	});

	// Increment number input

	$.fn.numberIncrement =	function() {
			var input = 		$('.js-num-increment'),
				value =			input.val(),
				minus =			$('.js-num-minus'),
				plus =			$('.js-num-plus');

			if ( this.hasClass('js-num-minus') ) {

				var value = value - 1;

				console.log(value);
			}

			if ( this.hasClass('js-num-plus') ) {

				var value = value + 1;

				console.log(value);
			}
	};

	$('.js-num').click(function(event) {

		var 	input = 		$('.js-num-increment'),
				value =			input.val(),
				minus =			$('.js-num-minus'),
				plus =			$('.js-num-plus');

		if ( $(this).hasClass('js-num-minus') ) {

			value = parseInt(value) - 1;

			input.val(value);
		}

		if ( $(this).hasClass('js-num-plus') ) {

			value = parseInt(value) + 1;

			input.val(value);

		}
	});

	// $.fn.galleryOpen = function() {
	// 	var image =				$('.js-gallery__image'),
	// 		lightbox =			$('.js-lightbox');
	// };

	$('.js-gallery__image').click(function(event) {
		var image = 			$(this),
			lightbox = 			$('.js-lightbox'),
			lightboxImage = 	$('.js-lightbox__image'),
			body = 				$('body');

		if ( lightbox.hasClass('is-closed') ) {

			var imageSource =	image.children('img').attr('src');

			lightbox.removeClass('is-closed').addClass('is-open');

			body.addClass('is-noScroll');
		}
	});

	$('.js-lightbox').click(function(event) {

		if ( $(this).hasClass('is-open') ) {

			// console.log('wow');


		}
	});

	$(document).keyup(function(e) {
		
		if (e.keyCode === 27) {
			
			$('.js-lightbox').removeClass('is-open').addClass('is-closed');
		}
	});

	$('.js-search').click(function(event) {

		if ( $(this).hasClass('is-closed') ) {

			$(this).removeClass('is-closed').addClass('is-open');
		}

		else {

			$(this).removeClass('is-open').addClass('is-closed');
		}

		$('.nav--main').toggleClass('is-searchOpen');
	});

	$.fn.openCard = 	function() {

		var
			elements = 		card.add(otherCards).add(footer).add(header);

		elements.FLIPfirst();

		// If card is not active...
		if ( card.hasClass('is-closed') ) {
			
			// Get the coordinates and status of all cards
			card.status();
					
			var cardHeight =	card[0].getBoundingClientRect().height,
				cardMargin = 	card.css('margin-bottom'),
				cardOffset = 	cardHeight + parseInt(cardMargin),
				cardCount = 	$('.card').length,
				nextCard = 		$('.card').eq(card.index() + 1),
				prevCard = 		$('.card').eq(card.index() - 1),
				layoutContentOffset = $(window).scrollTop();

			body.attr('data-offset', layoutContentOffset);
			

			if ( card.index() === cardCount - 1) {

				cardMargin = 	parseInt(cardMargin),
				// cardMargin = 	cardMargin,
				cardOffset = 	cardHeight + cardMargin;

				// console.log(cardOffset);

				prevCard.addClass('is-padding-bottom');

			} else {

				nextCard.addClass('is-padding-top');
			}
			
			body.get(0).style.setProperty('--cardOffsetY', cardOffset + 'px');

			// Activate card
			card.removeClass('is-closed').addClass('is-opening');

			otherCards.addClass('is-inactive');

			$('body, #page').removeClass('is-ready').addClass('is-exiting').attr('data-pt', 'card-open');

			$(window).scrollTop(0);

			// Log the activated card's index
			var activeCardIndex = card.index('.card');

			body.data('activeCardIndex', activeCardIndex);
		}

		elements.FLIPlast().FLIPplay();
	};

	$.fn.openSearch = 		function() {

		// Collect transitioning elements
		var navBar =		$('.nav--main'),
			navList = 		navBar.children('.nav__list'),
			navItem =		navList.children('.nav__item'),
			search =		$('.js-search'),
			searchButton = 	search.children('.btn--search'),
			searchInput = 	search.children('.input--search')
			// elements = 		
			;

		// If the searchbar is closed
			// Open the searchbar
			// Close the main menu
			// Focus the searchbar
			// Remove the event listener from the search button
			// Animate
		
		// If the searchbar is open
			// Do nothing

			// If clicking outside searchbox
				// Close the searchbar
				// Open the main menu
				// Animate
	};

	// $.fn.openSection = 	function() {

	// 	var
	// 		// elements = 		,
	// 		section =		$('.js-card__section'),
	// 		otherSections = $('.js-card__section').not(section),
	// 		roll =			section.children('.js-card__roll'),
	// 		card = 			roll.children('.js-card');

	// 	// elements.FLIPfirst();

	// 	// If card is not active...
	// 	if ( section.hasClass('is-closed') ) {
			
	// 		// Activate card
	// 		section.removeClass('is-closed').addClass('is-open');

	// 		otherSections.removeClass('is-closed').addClass('is-hidden');
	// 	}
	// };

	$('.js-card__section').click(function(event) {
		var
			// elements = 		,
			section =		$(this),
			sectionCover = 	section.children('.section__cover'),
			otherSections = $('.js-card__section').not(section),
			roll =			section.children('.js-card__roll'),
			card = 			roll.children('.js-card');

			// console.log(section);

		// If card is not active...
		if ( section.hasClass('is-closed') ) {
			
			// Activate card
			section.removeClass('is-closed').addClass('is-open');

			otherSections.removeClass('is-closed').addClass('is-hidden');

		} else if ( section.hasClass('is-hidden') ) {

			section.removeClass('is-hidden').addClass('is-open');

			if ( otherSections.hasClass('is-open') ) {

				otherSections.removeClass('is-open is-hidden').addClass('is-hidden');
			}
		} else if ( section.hasClass('is-open') ) {
			
			// section.removeClass('is-open').addClass('is-closed');	

			// otherSections.removeClass('is-hidden').addClass('is-closed');			
		}
	});

	// $('.js-card__section--close').click(function(event) {
	// 	var
	// 		// elements = 		,
	// 		section =		$(this).parents('.js-card__section.is-open'),
	// 		// otherSections = $('.card__grid.is-hidden'),
	// 		roll =			section.children('.card__roll'),
	// 		card = 			roll.children('.js-card');

	// 		// console.log(this);
	// 		console.log(section);

	// 		// section.addClass('hello');

	// 		section.removeClass('is-open').addClass('is-closed');

	// 		// otherSections.removeClass('is-hidden').addClass('is-closed');
	// 	// }
	// });
}) (jQuery);
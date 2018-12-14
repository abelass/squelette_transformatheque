(function ($) {

  // Get the width, height, offsets, and opacities
  // Store the values in dataPos
  $.fn.FLIPfirst =  function() {

    return this.each(function() {

      var element =   $(this),
        boundsFirst = element[0].getBoundingClientRect(),
        opacityFirst =  element.css('opacity');
      
      element.data(
        'dataPos', { 
          boundsFirst:    boundsFirst,
          opacityFirst:     opacityFirst
        }
      );
    });
  },

  $.fn.FLIPlast =   function() {

    this.each(function() {

      var element =       $(this);

      var boundsFirst =     element.data('dataPos').boundsFirst,
        opacityFirst =    element.data('dataPos').opacityFirst;
        boundsLast =    element[0].getBoundingClientRect(),

      // Calculate the difference
        scaleX =      boundsFirst.width   /   boundsLast.width,
        scaleY =      boundsFirst.height  /   boundsLast.height,
          invertX =       boundsFirst.left  -   boundsLast.left,
          invertY =       boundsFirst.top   -   boundsLast.top,
          opacity =     opacityFirst,

      // Save the transform
          flip =        'transform: translate(' + invertX + 'px, ' + invertY + 'px) scale(' + scaleX + ', ' + scaleY + '); opacity: ' + opacity + ';';

      element.data(
        'dataPos', {
          flip:       flip
        }
      );
      
    });

    // Apply the transformation
    return this.each(function() {

      var element =       $(this),
        elementStyle =    element.data('dataPos').flip;

      element.attr('style', elementStyle).addClass('is-flipped');
    })

    // element.attr('style', 'transform: translate(' + invertX + 'px, ' + invertY + 'px) scale(' + scaleX + ', ' + scaleY + '); opacity: ' + opacity + ';');
  },

  $.fn.FLIPplay =   function() {

    var elements =    this,
      elementCount =  elements.length;

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

  $.fn.page__headerScroll =     function() {

    var didScroll,
      lastScrollTop = 0,
      delta =     72,
      header =    this,
      navbarHeight =  header.outerHeight();

    // On scroll, let the interval function know the user has scrolled

      $(window).scroll(function() {
          didScroll = true;
      });

      setInterval(function() {
          if (didScroll) {
              hasScrolled();
              didScroll = false;
          }
      }, 250);

      function hasScrolled() {
          var st = $(window).scrollTop(),
            header = $('.page__header');
          
          // Make sure they scroll more than delta
          if(Math.abs(lastScrollTop - st) <= delta) {
              return;
          }
          
          // If they scrolled down and are past the navbar, add class .nav-up.
          // This is necessary so you never see what is "behind" the navbar.
          if (st > lastScrollTop && st > navbarHeight){
              // Scroll Down
              header.addClass('is-up');
          } else {
              // Scroll Up
              if(st + $(window).height() < $(document).height()) {
                  header.removeClass('is-up');
              }
          }
          
          lastScrollTop = st;
      }
  },

  $.fn.topScroll =      function() {

    var didScroll,
      lastScrollTop = 0,
      delta =     10,
      scroller =    this,
      scrollerHeight =  scroller.outerHeight();

    // On scroll, let the interval function know the user has scrolled

      $(window).scroll(function() {
          didScroll = true;
      });

      setInterval(function() {
          if (didScroll) {
              hasScrolled();
              didScroll = false;
          }
      }, 500);

      function hasScrolled() {
          var st = $(window).scrollTop(),
            scroller = $('.scroll-to-top');
          
          // Make sure they scroll more than delta
          if(Math.abs(lastScrollTop - st) <= delta) {
              return;
          }
          
          // If they scrolled down and are past the navbar, add class .nav-up.
          // This is necessary so you never see what is "behind" the navbar.
          if (st > lastScrollTop && st > scrollerHeight){
              // Scroll Down
              scroller.addClass('is-up');
          } else {
              // Scroll Up
              if(st + $(window).height() < $(document).height()) {
                  scroller.removeClass('is-up');
              }
          }
          
          lastScrollTop = st;
      }
  }
}) (jQuery);
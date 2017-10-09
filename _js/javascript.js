
$('#section2-car').owlCarousel({
	smartSpeed:1000,
	autoplay:true,
	center:false,
	stagePadding:30,
    loop:true,
	items:2,
    slideBy:'page',
    margin:50,
    nav:false,
    responsive:{
        0:{
            items:1
        },
        700:{
            items:2
        },
        1000:{
            items:3
        }
    }
})


$('#footer-car').owlCarousel({
    smartSpeed:1000,
    autoplay:true,
    center:true,
    stagePadding:150,
    loop:true,
    items:3,
    slideBy:1,
    margin:150,
    nav:false,
    dots: false,
    responsive:{
        0:{
            items:1,
            margin:50,
            stagePadding: 10
        },
        700:{
            items:2,
            margin:50,
            stagePadding: 10
        },
        1000:{
            items:3
        }
    }
})

$('#noticias-car').owlCarousel({
    smartSpeed:1000,
    autoplay:true,
    center:true,
    stagePadding:20,
    loop:true,
    items:3,
    slideBy:'page',
    margin:50,
    nav:false,
    dots: false,
    responsive:{
        0:{
            items:1,
            margin:50,
            stagePadding: 10
        },
        700:{
            items:2,
            margin:50,
            stagePadding: 10
        },
        1000:{
            items:3
        }
    }
})


// Select all links with hashes
$('a[href*="#"]')
  // Remove links that don't actually link to anything
  .not('[href="#"]')
  .not('[href="#0"]')
  .click(function(event) {
    // On-page links
    if (
      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
      && 
      location.hostname == this.hostname
    ) {
      // Figure out element to scroll to
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      // Does a scroll target exist?
      if (target.length) {
        // Only prevent default if animation is actually gonna happen
        event.preventDefault();
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000, function() {
          // Callback after animation
          // Must change focus!
          var $target = $(target);
          $target.focus();
          if ($target.is(":focus")) { // Checking if the target was focused
            return false;
          } else {
            $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
            $target.focus(); // Set focus again
          };
        });
      }
    }
  });


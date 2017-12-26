(function($) {
    "use strict"; // Start of use strict

/*loadpagina*/
$('#preloader').fadeOut('slow');
$('body').css({'overflow':'visible'});


// In your JS
var delay = 250;
$(".animated").each(function(){
  setTimeout(function() {
    $(this).removeClass("animated-paused");
  }, delay);
  delay = delay + delay;
});

//add class on Wordpress
$('.navbar-collapse ul li a').addClass("page-scroll");

// jQuery for page scrolling feature - requires jQuery Easing plugin
$('a.page-scroll').bind('click', function(event) {
    var $anchor = $(this);
    $('html, body').stop().animate({
        scrollTop: ($($anchor.attr('href')).offset().top - 45)
    }, 1250, 'easeInOutExpo');
    event.preventDefault();
});

// Highlight the top nav as scrolling occurs
$('body').scrollspy({
    target: '.navbar',
    offset: 50
});

// Closes the Responsive Menu on Menu Item Click
$('.navbar-collapse ul li a').click(function() {
    $('.navbar-toggle:visible').click();
});

// Offset for Main Navigation
$('#mainNav').affix({
    offset: {
        top: 40
    }
})


var wow = new WOW(
  {
    boxClass:     'wow',      // animated element css class (default is wow)
    animateClass: 'animated', // animation css class (default is animated)
    offset:       200,          // distance to the element when triggering the animation (default is 0)
    mobile:       true,       // trigger animations on mobile devices (default is true)
    live:         true,       // act on asynchronously loaded content (default is true)
    callback:     function(box) {
      // the callback is fired every time an animation is started
      // the argument that is passed in is the DOM node being animated
      // console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
    }
  }
  );
  wow.init();


$('.slick').slick({
    dots: false,
    arrows:true,
    infinite: true,
    speed: 500,
    fade: true,
    cssEase: 'linear',
    autoplay:true
});

var myMixitUp = document.querySelector('.elmixitup');

var mixer = mixitup(myMixitUp);
 
 

})(jQuery); // End of use strict





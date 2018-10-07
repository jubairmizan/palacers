$WIN = $(window);


var toggleButton = $('.header-menu-toggle'),
    nav = $('.header-nav-wrap');

toggleButton.on('click', function(event){
    event.preventDefault();

    toggleButton.toggleClass('is-clicked');
    nav.slideToggle();
});

if (toggleButton.is(':visible')) nav.addClass('mobile');

$WIN.on('resize', function() {
    if (toggleButton.is(':visible')) nav.addClass('mobile');
    else nav.removeClass('mobile');
});

nav.find('a').on("click", function() {

    if (nav.hasClass('mobile')) {
        toggleButton.toggleClass('is-clicked');
        nav.slideToggle();
    }
});


/* Move header*/
var hdr = $('header'),
    // triggerHeight = hero.outerHeight() - 170;
    triggerHeight = 170;

$WIN.on('scroll', function () {
    var loc = $WIN.scrollTop();

    if (loc > triggerHeight) {
        hdr.addClass('sticky');
    } else {
        hdr.removeClass('sticky');
    }

    if (loc > triggerHeight + 20) {
        hdr.addClass('offset');
    } else {
        hdr.removeClass('offset');
    }

    if (loc > triggerHeight + 150) {
        hdr.addClass('scrolling');
    } else {
        hdr.removeClass('scrolling');
    }

});

/************************************
 * Superfish navigation menu
 ************************************/
$(document).ready(function() {

    var zrq = $('.zrq');
    if (zrq.length === 0) {
        return;
    }


    // clone menu for mobile
    $("#original-menu ul.sf-menu").clone().appendTo("#nav-menu-mobile");

    $("#nav-menu-mobile ul").removeClass("sf-menu");

    // initialize slide menu
    $.slidebars();

    // initialize superfish dropdown menus
    $('nav#original-menu').superfish({
        delay: 0,
        speed: 0,
        speedOut: 0,
        cssArrows: false,
        autoArrows: false // disable generation of arr
    });

    if ($('.page-home').length > 0) {
        $('header.header').css('background-color', 'rgba(255, 255, 255, 0)');
        $('#original-menu .sf-menu li').css('background-color', 'rgba(255, 255, 255, 0)');
        $('#original-menu .sf-menu li a').css('background-color', 'rgba(255, 255, 255, 0)');
        $('html').css('overflow-y', 'hidden');
    }

    $('#sb-site').css('overflow-y', 'hidden');

    // Initializes the lazy-load library
    echo.init({
        offset: 100,
        throttle: 250,
        unload: false
    });
});


/************************************
 * Onscroll event to shrink header
 ************************************/
$(window).scroll(function() {
    if ($(document).scrollTop() > 100) {
        // console.log($(document).scrollTop());
        $('.header').addClass('smaller');
    } else {
        $('.header').removeClass('smaller');
    }
});


/************************************
 * Dropdown event
 ************************************/
$("#year").change(function(e) {
    window.location.href = "?year=" + $(this).val();
});


/************************************
 * Initialize Lightbox 
 ************************************/
$('.da-thumbs').magnificPopup({
    delegate: 'a', // child items selector, by clicking on it popup will open
    type: 'image',
    disableOn: function() {
        if ($(window).width() < 850) {
            return false;
        }
        return true;
    },
    gallery: {
        // options for gallery
        enabled: true
    },
    image: {
        // options for image content type
        titleSrc: 'title'
    }
    // other options
});

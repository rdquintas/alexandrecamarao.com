/************************************
 * Superfish navigation menu
 ************************************/
$(document).ready(function() {
    var example = $('nav#original-menu').superfish({
        delay: 0,
        speed: 0,
        speedOut: 0,
        cssArrows: false,
        autoArrows: false // disable generation of arr
    });

    if ($('.page-home').length > 0) {
        $('header.header').css('background-color', 'rgba(255, 255, 255, 0)');
        $('.sf-menu li').css('background-color', 'rgba(255, 255, 255, 0)');
        $('.sf-menu li a').css('background-color', 'rgba(255, 255, 255, 0)');
        $('section.footer').css('position', 'absolute');
        $('section.footer').css('bottom', '0px');
        $('section.footer').css('height', '0px');

        $.supersized({
            slides: [{
                image: window.home_page_img,
                title: 'Image Credit: Maria Kazvan'
            }]
        });
    }
    
    // var theWindow = $(window),
    //     $bg = $("img#bg"),
    //     aspectRatio = $bg.width() / $bg.height();

    // function resizeBg() {
    //     if ((theWindow.width() / theWindow.height()) < aspectRatio) {
    //         $bg.removeClass().addClass('bgheight');
    //     } else {
    //         $bg.removeClass().addClass('bgwidth');
    //     }
    // }

    // theWindow.resize(resizeBg).trigger("resize");


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
 * burger icon click event (mobile only)
 ************************************/
$(".burger-icon").on("click", function(e) {
    e.preventDefault();
    $("nav#mobile-menu").toggleClass("move");
    $(".container").toggleClass("move");
    $(window).scrollTop(0);
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

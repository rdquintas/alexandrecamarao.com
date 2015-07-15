/************************************
 * Superfish navigation menu
 ************************************/
$(document).ready(function() {
    var example = $('nav#original-menu').superfish({
        delay: 0,
        speed: 0,
        speedOut: 0,
        // cssArrows: false,
        autoArrows: false // disable generation of arr
    });

    // Initializes the hoverdir stuff
    $(window).resize(function() {
        if ($(window).width() <= 850) {
            $(' #da-thumbs > li ').hoverdir("destroy");
        } else {
            $(' #da-thumbs > li ').hoverdir();
        }
    });

    // Initializes the hoverdir stuff
    if ($(window).width() <= 850) {
        $(' #da-thumbs > li ').hoverdir("destroy");
    } else {
        $(' #da-thumbs > li ').hoverdir();
    }

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

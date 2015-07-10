/************************************
 * Superfish navigation menu
 ************************************/
$(document).ready(function() {
    var example = $('#super-fish-menu').superfish({
        delay: 0,
        speed: 0,
        speedOut: 0,
        // cssArrows: false,
        autoArrows: false // disable generation of arr
    });
});


// $("#zrq").on("click", function(e) {
//     $.ajax({
//             // url: "/user/themes/zrq/templates/teste.php",
//             url: "/teste",
//             cache: false
//         })
//         .done(function(html) {
//             $(".teste_zrq").append(html);
//         });
// });



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


// /************************************
//  * Initializes the lazy-load library
//  ************************************/
// $(document).ready(function() {
//     echo.init({
//         offset: 100,
//         throttle: 250,
//         unload: false
//     });
// });

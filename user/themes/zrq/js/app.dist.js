

/************************************
 * Superfish navigation menu
 ************************************/
$(document).ready(function() {
    var example = $('#super-fish-menu').superfish({
        delay: 1000, // one second delay on mouseout
        animation: {
            opacity: 'show',
            height: 'show'
        }, // fade-in and slide-down animation
        speed: 'fast', // faster animation speed
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
 * Dropdown event
 ************************************/
$("#year").change(function(e) {
    window.location.href = "?year=" + $(this).val();
});


/************************************
 * Initializes the lazy-load library
 ************************************/
echo.init({
    offset: 100,
    throttle: 250,
    unload: false
});

$(document).ready(function() {
    //
});


// Dropdown event
$("#year").change(function(e) {
    window.location.href = "?year=" + $(this).val();
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

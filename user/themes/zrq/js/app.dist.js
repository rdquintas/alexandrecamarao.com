$(document).ready(function() {
    //
});


// Dropdown event
$("#year").change(function(e) {
    window.location.href = "?year=" + $(this).val();
});

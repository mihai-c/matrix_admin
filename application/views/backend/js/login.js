$('[data-toggle="tooltip"]').tooltip();
$(".preloader").fadeOut();
// ==============================================================
// Login and Recover Password
// ==============================================================
$('#to-recover').on("click", function() {
    $("#loginform").slideUp();
    $("#recoverform").fadeIn();
});
$('#to-login').click(function(){

    $("#recoverform").hide();
    $("#loginform").fadeIn();
});
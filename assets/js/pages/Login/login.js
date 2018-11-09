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
$(".toggle-password").click(function() {
    $(this).toggleClass("fa-eye fa-eye-slash");
    var input = $($(this).attr("toggle"));
    var inputField = $('#userpwd');
    if (inputField.attr("type") == "password") {
        inputField.attr("type", "text");
    } else {
        inputField.attr("type", "password");
    }
});
$('#loginform').submit(function(){
    var userName = $('#username').val().replace(/^\s+|\s+$/g,"");
    var userPwd = $('#userpwd').val().replace(/^\s+|\s+$/g,"");

    if(userName.length == 0 || userPwd.length == 0){
        if(userName.length == 0){
            $('#username').attr('required', true);
        } else {
            $('#username').attr('required', false);
        }
        if(userPwd.length == 0){
            $('#userpwd').attr('required', true);
        } else {
            $('#userpwd').attr('required', false);
        }
        return false;
    } else {
        return true;
    }

});
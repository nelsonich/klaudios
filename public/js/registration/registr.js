$(document).ready(function () {
    $('input[id="termsAndConditions"]').click(function(){
        if($(this).prop("checked") == true){
            $("#registrationForm").find('button[type="submit"]').attr('disabled', false);
        }
        else if($(this).prop("checked") == false){
            $("#registrationForm").find('button[type="submit"]').attr('disabled', true);
        }
    });
});

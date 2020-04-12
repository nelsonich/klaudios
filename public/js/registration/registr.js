$(document).ready(function () {
    $('input[id="termsAndConditions"]').click(function(){
        if($(this).prop("checked") == true){
            $("#registrationForm").find('button[type="submit"]').attr('disabled', false);
        }
        else if($(this).prop("checked") == false){
            $("#registrationForm").find('button[type="submit"]').attr('disabled', true);
        }
    });

    $('.file-upload-input').on('change', readURL);

    function readURL() {
        let that = $(this).get(0);
        console.log(that.files[0]);
        let formData = new FormData();
        formData.append('file', that.files[0]);
        $.ajax({
            url: '/home/edit-profile-avatar',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            method: 'post',
            data: formData,
            dataType: 'json',
            cache: false,
            contentType: false,
            processData: false,
            success: function (res) {
                console.log(res);
            },
            error: function (err) {
                console.log(err);
            }
        });

        if (that.files && that.files[0]) {

            var reader = new FileReader();

            reader.onload = function (e) {
                $('.image-upload-wrap').hide();

                $('.file-upload-image').attr('src', e.target.result);
                $('.file-upload-content').show();

                $('.image-title').html(that.files[0].name);
            };

            reader.readAsDataURL(that.files[0]);
        } else {
            console.log('error');
        }
    }
});

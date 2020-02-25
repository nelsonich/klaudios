$(document).ready(function() {
    $(".closeAlert").on('click', function() {
        $(this).parent().remove();
    });



    /* Change Lang Status */
    $(".changeLangStatus").on('change', function () {
        let that = $(this);
        let langId = that.data('langid');
        $.ajax({
            url: 'languages/change-lang-status',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            method: 'post',
            data: {
                langId: langId,
            },
            dataType: 'json',
            success: function (response) {
                    console.log(response);
                if (response === "ok") {
                }
            },
            error: function (err) {
                console.log(err);
            }
        });
    });
});

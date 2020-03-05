$(document).ready(function () {
    $('#acceptNext').on('click', function () {
        $.ajax({
            url: 'home/acceptNextGameModal',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            method: 'post',
            dataType: 'json',
            success: function (response) {
                if (response === 'ok') {
                    $('div.dialog').hide();
                    $("#games").addClass("active");
                    $("#userSettingsDropdown").css({
                        "display": "block",
                        "z-index": "999999",
                    });

                }
            },
            error: function (err) {
                console.log(err);
            }
        });
    });
});

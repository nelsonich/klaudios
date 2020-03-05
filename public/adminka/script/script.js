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

    $(".gameAnswers").on('click', function () {
        let that = $(this);
        that.parent().find('.rightAnswer').removeClass('rightAnswer');
        that.addClass('rightAnswer');
        let gameId = that.data('gameid');
        let answerId = that.data('answerid');
        $.ajax({
            url: 'games/change-right-answer',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            method: 'post',
            data: {
                gameId: gameId,
                answerId: answerId,
            },
            dataType: 'json',
            success: function (response) {
                console.log(response);
            },
            error: function (err) {
                console.log(err);
            }
        });
    });
});

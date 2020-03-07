$(document).ready(function() {
    $(".closeAlert").on('click', function() {
        $(this).parent().remove();
    });

    changeGameCategory();

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

    /* Games */
    $("#inputGroupSelectGameCategory").on('change', function () {
        let value = $(this).val();
        localStorage.setItem("gameCategory", value);
        changeGameCategory();
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

    /* Change Category Status */
    $(".changeGameCatStatus").on('change', function () {
        let that = $(this);
        let catId = that.data('catid');
        $.ajax({
            url: 'games-categories/edit-category-status',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            method: 'post',
            data: {
                catId: catId,
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

    function changeGameCategory() {
        let gameCat = localStorage.getItem("gameCategory");
        console.log(gameCat);
        let option = $("#inputGroupSelectGameCategory > option");
        $.each(option, function (index, value) {
            if (gameCat == null) {
                $(value).attr("selected", "selected");
            } else if($(value).val() == gameCat) {
                console.log($(value).val(), gameCat, index);
                $(value).attr("selected", "selected");
            }
        });
    }
});

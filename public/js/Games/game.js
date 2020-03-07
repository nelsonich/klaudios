$(document).ready(function () {
    if ($('a.active').length === 0) {
        let menuItems = $('a.nav-link');

        let endAnswer = menuItems.length - 1;
        menuItems.eq(endAnswer).addClass('active');
        menuItems.eq(endAnswer).attr('aria-selected', true);
        let endAnswerBlock = menuItems.eq(endAnswer).attr('aria-controls');
        $(`#${endAnswerBlock}`).addClass('active show');
    }
    $('.answer').on('click', function () {
        $('.answer').removeClass('selected');
        $(this).addClass('selected');

        $("#selectAnswer").removeAttr("disabled");
    });

    $("#selectAnswer").on('click', function () {
        let that = $(this);
        let answer = $('.selected');

        if (answer.hasClass('rightAnswer')) return;
        let answerId = answer.data('answerid');
        let gameId = answer.data('gameid');
        $.ajax({
            url: '/home/select-answer',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            method: 'post',
            data: {
                answerId: answerId,
                gameId: gameId,
            },
            dataType: 'json',
            success: function (response) {
                if (!response) {
                    answer.addClass('wrongAnswer');
                    that.attr('disabled', true);
                } else {
                    $('.answer').addClass("wrongAnswer");
                    answer.removeClass("wrongAnswer");
                    answer.addClass('rightAnswer');


                    nextGame(that);
                }
            },
            error: function (err) {
                console.log(err);
            }
        });
    });

    function nextGame(that) {
        let activeLink = $("a.active");

        that.attr('disabled', true);
        activeLink.attr('aria-selected', false);
        activeLink.removeClass('active show');
        activeLink.parent().next().find('a').removeClass('disabled');
        activeLink.parent().next().find('a').addClass('active');
        activeLink.parent().next().find('a').attr('aria-selected', true);
        let activeLinkId = activeLink.attr('aria-controls');
        let nextActiveLink = $(`#${activeLinkId}`);
        if (nextActiveLink.next().find('.answer').length === 0) {
            $("#finish").show();
            return;
        }
        nextActiveLink.removeClass('active show');
        nextActiveLink.next().addClass('active show');
        nextActiveLink.next().find('.answer').removeClass('wrongAnswer');
    }
    // $('[data-toggle="tooltip"]').tooltip();
});

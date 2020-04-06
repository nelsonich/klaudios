$(document).ready(function () {
    $(".likeNews").on('click', function () {
        let that = $(this);
        let newsId = that.data('newsid');
        let routeName = that.data('routename');
        $.ajax({
            url: routeName,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            method: 'post',
            data: {
                newsId: newsId,
            },
            dataType: 'json',
            success: function (response) {
                if(response === "created") {
                    that.addClass('activeLike');
                    that.attr('title', 'dislike');
                } else if(response === "deleted") {
                    that.removeClass('activeLike');
                    that.attr('title', 'like');
                }
            },
            error: function (err) {
                console.log(err);
            }
        });
    });
    //Tooltip

    $('span[data-toggle=tooltip]').tooltip({ boundary: 'window' });

});

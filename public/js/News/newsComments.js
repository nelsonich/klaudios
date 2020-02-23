$(document).ready(function () {
    var getUrlParameter = function getUrlParameter() {
        var sPageURL = window.location.href,
            sURLVariables = sPageURL.split('/');

        console.log(sPageURL);

        return sURLVariables;
    };

    getNewsComments();
    function getNewsComments() {
        let getUrl = getUrlParameter();
        let newsId = getUrl[getUrl.length - 1];
        let routeName = $('.comment_block').data('routename');
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
                if (response.length > 0) {
                    $.each(response, function (index, value) {
                        let data = `<div class="new_comment">
                                        <ul class="user_comment">
                                            <div class="comment_body">
                                                <p>${ value['comment'] }</p>
                                            </div>
                                            <div class="comment_toolbar">
                                                <div class="comment_details">
                                                    <ul>
                                                        <li><i class="fa fa-calendar"></i> ${ value['created_at'] }</li>
                                                        <li><i class="fa fa-pencil"></i> <span class="user">@${ value['get_commented_user']['user_name'] }</span></li>
                                                    </ul>
                                                </div>
                                                <div class="comment_tools">
                                                    <ul>
<!--                                                        <li><i class="fa fa-share-alt"></i></li>-->
<!--                                                        <li><i class="fa fa-reply"></i></li>-->
                                                        <li class="loveComment ${ value['get_comment_loves'] ? 'activeLove' : '' }" data-commentId="${value['id']}"><i class="fa fa-heart love"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </ul>
                                    </div>`;
                        $(".new_comment_container").append(data);
                    });
                } else {
                    $(".new_comment_container").append("No Comments");
                }
            },
            error: function (err) {
                console.log(err);
            }
        });
    }

    $("#createComment").on('keydown', function (event) {
        let that = $(this);

        if (event.keyCode === 13) {
            if (that.val() === "") {
                that.addClass('emptyField');
                return;
            }
            let getUrl = getUrlParameter();
            let newsId = getUrl[getUrl.length - 1];
            let routeName = $('.comment_block').data('createcommentroutename');
            let comment = that.val();
            $.ajax({
                url: routeName,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                method: 'post',
                data: {
                    newsId: newsId,
                    comment: comment,
                },
                dataType: 'json',
                success: function (response) {
                    if (response) {
                        $(".new_comment_container").empty();
                        getNewsComments();
                        that.val('');
                    }
                },
                error: function (err) {
                    console.log(err);
                }
            });
        }
    });

    $(document).on('click', '.loveComment', function () {
        let that = $(this);
        let routeName = $('.comment_block').data('likecommentroutename');
        let commentId = that.data('commentid');
        $.ajax({
            url: routeName,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            method: 'post',
            data: {
                commentId: commentId,
            },
            dataType: 'json',
            success: function (response) {
                if(response === "created") {
                    that.addClass('activeLove');
                    that.attr('title', 'dislove');
                } else if(response === "deleted") {
                    that.removeClass('activeLove');
                    that.attr('title', 'Love');
                }
            },
            error: function (err) {
                console.log(err);
            }
        });
    });
});

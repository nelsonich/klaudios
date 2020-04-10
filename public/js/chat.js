$(function () {
    var receiver_id = '';
    var my_id = $('.users').data('userid');
    $(document).ready(function () {
        // ajax setup form csrf token
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        // Enable pusher logging - don't include this in production
        Pusher.logToConsole = false;
        var pusher = new Pusher('53ec86b0b55db378b5ad', {
            cluster: 'ap2',
            forceTLS: true
        });
        var channel = pusher.subscribe('my-channel');
        channel.bind('my-event', function (data) {
            // alert(JSON.stringify(data));
            if (my_id == data.from) {
                $('#' + data.to).click();
            } else if (my_id == data.to) {
                if (receiver_id == data.from) {
                    // if receiver is selected, reload the selected user ...
                    $('#' + data.from).click();
                } else {
                    // if receiver is not seleted, add notification for that user
                    var pending = parseInt($('#' + data.from).find('.pending').html());
                    if (pending) {
                        $('#' + data.from).find('.pending').html(pending + 1);
                    } else {
                        $('#' + data.from).append('<span class="pending">1</span>');
                    }
                }
            }
        });
        $('.user').on('click', function () {
            let messages = $('#messages');
            $('.user').removeClass('active');
            messages.text('Loading...');
            $(this).addClass('active');
            $(this).find('.pending').remove();
            receiver_id = $(this).attr('id');
            $.ajax({
                type: "get",
                url: "/home/message/" + receiver_id, // need to create this route
                data: "",
                cache: false,
                success: function (data) {
                    messages.removeClass('chooseUser');
                    messages.html(data);
                    scrollToBottomFunc();
                    console.clear();
                }
            });
        });

        $(document).on('keyup', '.input-text input', function (e) {
            let message = $(this).val();
            // check if enter key is pressed and message is not null also receiver is selected
            if (e.keyCode === 13 && message !== '' && receiver_id !== '') {
                $(this).val(''); // while pressed enter text box will be empty
                $(this).attr({'disabled': true, 'placeholder': "loading..."});
                let datastr = "receiver_id=" + receiver_id + "&message=" + message;
                $.ajax({
                    type: "post",
                    url: "message", // need to create this post route
                    data: datastr,
                    cache: false,
                    success: function (data) {
                    },
                    error: function (jqXHR, status, err) {
                    },
                    complete: function () {
                        scrollToBottomFunc();
                    }
                })
            }
        });
    });
    // make a function to scroll down auto
    function scrollToBottomFunc() {
        $('.message-wrapper').animate({
            scrollTop: $('.message-wrapper').get(0).scrollHeight
        }, 50);
    }
});

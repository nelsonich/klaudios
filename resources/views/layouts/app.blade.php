<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ asset('images/klaudios.png') }}">
    <script type='text/javascript' src='{{ url("https://platform-api.sharethis.com/js/sharethis.js#property=5e88b9a6fc9e860019dac106&product=inline-share-buttons&cms=website") }}' async='async'></script>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/requestQuote.js') }}"></script>
    <script src="{{ asset('js/News/likeNews.js') }}"></script>
    <script src="{{ asset('js/registration/registr.js') }}"></script>
{{--    <script src="{{ asset('js/material_js/material.min.js') }}"></script>--}}
    <script src="{{ asset('js/material_js/mdb.js') }}"></script>
    <script src="{{ asset('js/jquery-ui.js') }}"></script>
    @stack('scripts')

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="{{ url('https://fonts.googleapis.com/css?family=Nunito') }}" rel="stylesheet">
    <link href="{{ url('https://fonts.googleapis.com/icon?family=Material+Icons') }}" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('css/default/scrollBar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/login_and_reg.css') }}">
    <link rel="stylesheet" href="{{ asset('css/news/news.css') }}">
    <link rel="stylesheet" href="{{ asset('css/socButtons.css') }}">
    <link rel="stylesheet" href="{{ asset('css/news/newsComments.css') }}">
{{--    <link rel="stylesheet" href="{{ asset('css/material_css/material.min.css') }}">--}}
{{--    <link rel="stylesheet" href="{{ asset('css/material_css/mdb.lite.min.css') }}">--}}
    <link rel="stylesheet" href="{{ asset('css/material_css/mdb.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jquery-ui.css') }}">
    @stack('css')
</head>
<body>
    <div id="app">
        <header>
            @include('layouts.header')
        </header>

        <main class="py-4">
            @yield('content')
        </main>

        <footer class="py-4 shadow-sm">
            @include('layouts.footer')
        </footer>
    </div>

    <script src="{{ url('https://js.pusher.com/5.1/pusher.min.js') }}"></script>
    <script>
        var receiver_id = '';
        var my_id = "{{ Auth::id() }}";
        $(document).ready(function () {
            // ajax setup form csrf token
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            // Enable pusher logging - don't include this in production
            Pusher.logToConsole = true;
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
            $('.user').click(function () {
                $('.user').removeClass('active');
                $(this).addClass('active');
                $(this).find('.pending').remove();
                receiver_id = $(this).attr('id');
                $.ajax({
                    type: "get",
                    url: "/home/message/" + receiver_id, // need to create this route
                    data: "",
                    cache: false,
                    success: function (data) {
                        $('#messages').html(data);
                        scrollToBottomFunc();
                    }
                });
            });
            $(document).on('keyup', '.input-text input', function (e) {
                var message = $(this).val();
                // check if enter key is pressed and message is not null also receiver is selected
                if (e.keyCode == 13 && message != '' && receiver_id != '') {
                    $(this).val(''); // while pressed enter text box will be empty
                    var datastr = "receiver_id=" + receiver_id + "&message=" + message;
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
    </script>
</body>
</html>

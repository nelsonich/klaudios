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
</body>
</html>

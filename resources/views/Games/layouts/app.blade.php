<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ asset('images/klaudios.png') }}">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/Games/game.js') }}"></script>
    @stack('scripts')

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="{{ url('https://fonts.googleapis.com/css?family=Nunito') }}" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('css/default/scrollBar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Games/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Games/loader.css') }}">
    @stack('css')
</head>
<body>
    <div id="app">
        <header>
            @include('Games.layouts.header')
        </header>

        <main class="py-4">
            @yield('content')
        </main>

        <footer class="py-4 shadow-sm">
            @include('Games.layouts.footer')
        </footer>
    </div>
</body>
</html>

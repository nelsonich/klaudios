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
  <script src="{{ asset('adminka/script/leftNav.js') }}"></script>
  <script src="{{ asset('adminka/script/script.js') }}"></script>
  <script src="{{ asset('adminka/plugins/ckeditor/ckeditor.js') }}"></script>


  <!-- Fonts -->
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

  <!-- Styles -->
  <link href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <link rel="stylesheet" href="{{ asset('css/default/scrollBar.css') }}">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('adminka/admin.css') }}">
</head>
<body>
  <div id="app">
    <header>
      @include('dashboard.layouts.header')
    </header>

    <main class="py-4">
      @yield('content')
    </main>

    <footer class="py-4 shadow-sm text-center">
      @include('dashboard.layouts.footer')
    </footer>
  </div>

  <script>
    var editors = document.querySelectorAll('.editor');
    for(var i = 0; i < editors.length; i++) {
      ClassicEditor
        .create(editors[i])
        .catch( error => {
            console.error( error );
        });
    }
  </script>
</body>
</html>

<div id="mySidenav" class="sidenav">
    <a class="navbar-brand p-0 text-center" href="{{ url('/dashboard') }}">
        <img src="{{ asset('images/klaudios.png') }}" alt="{{ config('app.name', 'KLAUDIOS') }}" class="logo" />
    </a>
    <a href="javascript:void(0)" class="closeLeftBar">&times;</a>
    <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle w-100" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Static Pages
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="{{ url('dashboard/about') }}">About</a>
            <a class="dropdown-item" href="{{ url('dashboard/features') }}">Features</a>
{{--            <a class="dropdown-item" href="{{ url('dashboard/faq') }}">FAQ</a>--}}
            <a class="dropdown-item" href="{{ url('dashboard/static-information') }}">Static Information</a>
        </div>
    </div>

    <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle w-100" type="button" id="dropdownMenuButtonTerms" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Terms
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButtonTerms">
            <a class="dropdown-item" href="{{ url('dashboard/terms/terms-and-conditions') }}">Terms</a>
            <a class="dropdown-item" href="{{ url('dashboard/terms/privacy-policy') }}">Privacy Policy</a>
            <a class="dropdown-item" href="{{ url('dashboard/terms/cookies-policy') }}">Cookies Policy</a>
        </div>
    </div>
    <a href="{{ url('dashboard/news') }}">News</a>
    <a href="{{ url('dashboard/request-quote') }}">Request Quote</a>
    <a href="{{ url('dashboard/languages') }}">Languages</a>
    <a href="{{ url('dashboard/games') }}">Games</a>
    <a href="{{ url('dashboard/games-categories') }}">Game Categories</a>
    <a href="{{ url('dashboard/change-games-answers') }}">Edit Games</a>
</div>

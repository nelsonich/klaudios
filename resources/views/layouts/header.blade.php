<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm pt-0 pb-0">
    <div class="container">
        <a class="navbar-brand p-0" href="{{ url('/') }}">
            <img src="{{ asset('images/klaudios.png') }}" alt="{{ config('app.name', 'KLAUDIOS') }}" class="logo" />
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto justify-content-end">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownTerms" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{ trans('menu.terms', [], \Session::get('locale')) }}
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownTerms">
                        <a class="dropdown-item" href="{{ url('/terms') }}" title="{{ trans('menu.terms.terms', [], \Session::get('locale')) }}">
                            {{ trans('menu.terms.terms', [], \Session::get('locale')) }}
                        </a>
                        <a class="dropdown-item" href="{{ url('/privacy') }}" title="{{ trans('menu.terms.privacy', [], \Session::get('locale')) }}">
                            {{ trans('menu.terms.privacy', [], \Session::get('locale')) }}
                        </a>
                        <a class="dropdown-item" href="{{ url('/cookies') }}" title="{{ trans('menu.terms.cookies', [], \Session::get('locale')) }}">
                            {{ trans('menu.terms.cookies', [], \Session::get('locale')) }}
                        </a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('faq') }}">
                        {{ trans('menu.faq', [], \Session::get('locale')) }}
                    </a>
                </li>
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">
                            {{ trans('menu.login', [], \Session::get('locale')) }}
                        </a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">
                                {{ trans('menu.registration', [], \Session::get('locale')) }}
                            </a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->user_name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown" id="userSettingsDropdown">
                            @if(\Auth::user()->role == "superadmin")
                                <a href="{{ url('/dashboard') }}" class="dropdown-item">
                                    Dashboard
                                </a>
                            @endif
                            <a href="{{ url('home/profile') }}" class="dropdown-item">
                                {{ trans('menu.profile', [], \Session::get('locale')) }}
                            </a>
                            <a href="{{ url('home') }}" class="dropdown-item">
                                {{ trans('menu.home', [], \Session::get('locale')) }}
                            </a>
                            <a href="{{ url('home/games', ['complexity_id' => 1]) }}" class="dropdown-item" id="games">
                                {{ trans('menu.games', [], \Session::get('locale')) }}
                            </a>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ trans('menu.logout', [], \Session::get('locale')) }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-globe"></i>
                        {{-- Change !!! --}}
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" style="width: 80px !important;min-width: 0;">
                        @foreach($languages as $lang)
                            <a class="dropdown-item {{ $lang->lang == \Session::get('locale') ? "active" : "" }}" href="{{ url('/lang', $lang->lang) }}" title="{{ $lang->lang }}">
                                <img src="{{ asset('images/lang/' . $lang->image) }}" alt="{{ $lang->lang }}" class="w-100">
                            </a>
                        @endforeach
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>

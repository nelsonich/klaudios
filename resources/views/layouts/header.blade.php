{{--@dd(app()->getLocale())--}}
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
                <li class="nav-item ml-1" style="width: 15%;">
                    <a class="nav-link" href="{{ url('/lang', 'en') }}" title="EN">
                        <img src="{{ asset('images/lang/en.png') }}" alt="English" class="w-100">
                    </a>
                </li>
                <li class="nav-item ml-1" style="width: 15%;" title="RU">
                    <a class="nav-link" href="{{ url('/lang', 'ru') }}">
                        <img src="{{ asset('images/lang/ru.png') }}" alt="Russian" class="w-100">
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

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ trans('menu.logout', [], \Session::get('locale')) }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>

                            <a href="{{ url('home/profile') }}" class="dropdown-item">
                                {{ trans('menu.profile', [], \Session::get('locale')) }}
                            </a>
                            <a href="{{ url('home') }}" class="dropdown-item">
                                {{ trans('menu.home', [], \Session::get('locale')) }}
                            </a>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>

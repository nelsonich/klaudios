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
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{ trans('menu.language', [], \Session::get('locale')) }}
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" style="width: 80px !important;min-width: 0;">
                        @foreach($languages as $lang)
                            <a class="dropdown-item" href="{{ url('/lang', $lang->lang) }}" title="{{ $lang->lang }}">
                                <img src="{{ asset('images/lang/' . $lang->image) }}" alt="{{ $lang->lang }}" class="w-100">
                            </a>
                        @endforeach
                    </div>
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
                            <a href="{{ url('home/profile') }}" class="dropdown-item">
                                {{ trans('menu.profile', [], \Session::get('locale')) }}
                            </a>
                            <a href="{{ url('home') }}" class="dropdown-item">
                                {{ trans('menu.home', [], \Session::get('locale')) }}
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
            </ul>
        </div>
    </div>
</nav>

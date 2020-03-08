<nav class="navbar navbar-expand-md navbar-light shadow-sm pt-0 pb-0">
    <div class="container">
        <a class="navbar-brand p-0" href="{{ url('/home/games/1') }}">
            <img src="{{ asset('images/Games/logo/pinterest_profile_image.png') }}" alt="{{ config('app.name', 'KLAUDIOS') }}" class="logo w-25" />
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
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->user_name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown" id="userSettingsDropdown">
                        <a href="{{ url('home') }}" class="dropdown-item">
                            {{ trans('menu.home', [], \Session::get('locale')) }}
                        </a>

                        <a href="{{ url('/home/rating') }}" class="dropdown-item">
                            {{ trans('menu.rating', [], \Session::get('locale')) }}
                        </a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>

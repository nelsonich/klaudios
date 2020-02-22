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
          <a class="dropdown-item" href="{{ url('dashboard/static-information') }}">Static Information</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </div>
    <a href="{{ url('dashboard/news') }}">News</a>
    <a href="#">Services</a>
    <a href="#">Clients</a>
    <a href="#">Contact</a>
</div>
@extends('layouts.app')
@section('title', 'Klaudios | Home')
@section('description', 'On this Klaudios page you can find the news you are interested in and find out the air temperature')
@section('content')
<div class="container">

    <div class="row">
        <div class="col-md-6 mb-3">
            <div class="card">
                <div class="card-header">
                    {{ trans('form.dashboard', [], \Session::get('locale')) }}
                    <a class="float-right" href="{{ url('home/profile') }}">
                        <i class="fas fa-user-edit fa-2x"></i>
                    </a>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h5>
                        <i class="fas fa-user"></i>
                        <span class="ml-2">{{ $user->first_name }} {{ $user->last_name }}</span>
                    </h5>

                    <h5>
                        <i class="fas fa-user-tie"></i>
                        <span class="ml-2">{{ $user->user_name }}</span>
                    </h5>

                    <h5>
                        <i class="fas fa-envelope"></i>
                        <span class="ml-2">{{ $user->email }}</span>
                    </h5>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <!-- Classic tabs -->
            <div class="classic-tabs mx-2">

                <ul class="nav navbar primary-color tabs-cyan" id="myClassicTabShadow" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link text-white waves-light active show" id="weather-tab-classic-shadow" data-toggle="tab" href="#weather-classic-shadow"
                           role="tab" aria-controls="weather-classic-shadow" aria-selected="true">
                            <i class="fas fa-cloud-sun"></i>
                            {{ trans('menu.weather', [], \Session::get('locale')) }}
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white waves-light" id="follow-tab-classic-shadow" data-toggle="tab" href="#follow-classic-shadow"
                           role="tab" aria-controls="follow-classic-shadow" aria-selected="false">Follow</a>
                    </li>
                </ul>

                <div class="tab-content card p-3" id="myClassicTabContentShadow">
                    <div class="tab-pane fade active show" id="weather-classic-shadow" data-country="{{ $country }}" role="tabpanel" aria-labelledby="weather-tab-classic-shadow">
                        @include('weather')
                    </div>
                    <div class="tab-pane fade" id="follow-classic-shadow" role="tabpanel" aria-labelledby="follow-tab-classic-shadow">
                        <p>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut
                            aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse
                            quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?</p>
                    </div>
                </div>

            </div>
            <!-- Classic tabs -->
        </div>
    </div>

    {{-- News --}}
    @include('news.news')

    {{-- New Idea Game include game accepting modal--}}
    @if($user['getAuthGameStatus']->is_game === 0)
        @include('Games.gameAcceptModal')
    @endif
</div>
@endsection

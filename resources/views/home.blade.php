@extends('layouts.app')
@section('title', 'Klaudios | Home')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
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

@extends('Games.layouts.app')
@section('title', 'Klaudios | Rating')
@section('content')
    <div class="container">
        <div class="table-responsive">
            <table id="rating" class="table table-hover table-dark">
                <caption>
                    <a href="{{ url('/home/games', ['complexity_id' => \Session::get('complexity_id')]) }}" class="text-white">
                        <i class="far fa-hand-point-left"></i>
                    </a>
                    {{ trans('menu.rating', [], \Session::get('locale')) }}
                </caption>
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Rating</th>
                </tr>
                </thead>
                <tbody>
                @php($step = 0)
                @foreach($sortByRightAnswersCount as $key => $item)
                    @php($step++)
                    <tr class="{{ $item['user']['id'] === \Auth::id() ? "active" : "" }}">
                        <th scope="row">{{ $item['user']['id'] }}</th>
                        <th scope="row">{{ $item['user']['first_name'] }}</th>
                        <th scope="row">{{ $item['user']['last_name'] }}</th>
                        <th scope="row">{{ $item['user']['email'] }}</th>
                        <th scope="row">
                            @switch($step)
                                @case(1)
                                <img src="{{ asset('images/Games/rating/1.png') }}" alt="Rating" class="img-fluid" style="width: 70px;height: 70px">
                                @break

                                @case(2)
                                <img src="{{ asset('images/Games/rating/2.png') }}" alt="Rating" class="img-fluid" style="width: 70px;height: 70px">
                                @break

                                @case(3)
                                <img src="{{ asset('images/Games/rating/3.png') }}" alt="Rating" class="img-fluid" style="width: 70px;height: 70px">
                                @break
                            @endswitch
                        </th>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

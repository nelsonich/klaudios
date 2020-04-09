@extends('layouts.app')
@section('title', 'Klaudios | Chat')
@push('css')
    <link rel="stylesheet" href="{{ asset('css/Chat/chat.css') }}">
@endpush
@section('content')
    <div class="container chat">
        <div class="row">
            <div class="col-md-4 pr-0">
                <div class="user-wrapper">
                    <ul class="users" data-userId="{{ \Auth::id() }}">
                        @foreach($users as $user)
                            <li class="user" id="{{ $user->id }}">
                                <div class="media">
                                    <div class="media-left">
                                        <img src="{{ url('https://via.placeholder.com/150') }}" alt="" class="media-object">
                                    </div>

                                    <div class="media-body">
                                        <p class="name">{{ $user->user_name }}</p>
                                        <p class="email">{{ $user->email }}</p>
                                    </div>
                                </div>
                                {{--will show unread count notification--}}
                                @if($user->unread)
                                    <span class="pending">{{ $user->unread }}</span>
                                @endif
                                @if(count($user->getUserUnreadMessages) > 0)
                                    <span class="pending">{{ count($user->getUserUnreadMessages) }}</span>
                                @endif
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>

            <div class="col-md-8 pl-0" id="messages"></div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('plugins/pusher.min.js') }}"></script>
    <script src="{{ asset('js/chat.js') }}"></script>
@endpush

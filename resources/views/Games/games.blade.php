@extends('Games.layouts.app')
@section('title', 'Klaudios | Games')
@section('content')
    <div class="container">
        @include('Games.sections.category')
        @include('Games.sections.games')
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('js/Games/loader.js') }}"></script>
@endpush

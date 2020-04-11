@extends('Games.layouts.app')
@section('title', 'Klaudios | Welcome Games Word')
@section('description', 'In Klaudios Games you can play and collect stars to win your position in the prize field.')

@section('content')
    <div class="container">
        @include('Games.sections.gameComplexity')
        @include('Games.sections.gameCategories')
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('js/Games/loader.js') }}"></script>
@endpush

@extends('Games.layouts.app')
@section('title', 'Klaudios | Welcome Games Word')
@section('content')
    <div class="container">
        @include('Games.sections.gameComplexity')
        @include('Games.sections.gameCategories')
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('js/Games/loader.js') }}"></script>
@endpush

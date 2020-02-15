@extends('layouts.app')
@section('title', 'Klaudios | Welcome')
@section('content')
    <div class="container">
        @include('sections.aboutUs')
        @include('sections.features')
        @include('sections.contactUs')
    </div>
@endsection
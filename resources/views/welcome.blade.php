@extends('layouts.app')
@section('title', 'Klaudios | Welcome')
@section('description', 'Join the millions of people who organize life and work with Klaudios.')
@section('content')
    <div class="container">
        @include('sections.aboutUs')
        @include('sections.features')
        @include('sections.contactUs')
    </div>
@endsection

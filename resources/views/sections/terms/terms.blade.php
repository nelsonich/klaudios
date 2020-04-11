@extends('layouts.app')
@section('title', 'Klaudios | Terms And Conditions')
@section('description', 'A Terms and Conditions Agreement Klaudios is a contract that contains acceptable terms, rules, guidelines and other useful sections that users must agree to use or access our website.')
@section('content')
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-12 text-center">
                <h1 title="{{ trans('menu.terms.terms', [], \Session::get('locale')) }}">{{ trans('menu.terms.terms', [], \Session::get('locale')) }}</h1>
            </div>
        </div>

        {!! $terms->description !!}
    </div>
@endsection

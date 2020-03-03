@extends('layouts.app')
@section('title', 'Klaudios | Terms And Conditions')
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

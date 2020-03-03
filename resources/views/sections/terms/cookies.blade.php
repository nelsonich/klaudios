@extends('layouts.app')
@section('title', 'Klaudios | Privacy Policy')
@section('content')
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-12 text-center">
                <h1 title="{{ trans('menu.terms.cookies', [], \Session::get('locale')) }}">{{ trans('menu.terms.cookies', [], \Session::get('locale')) }}</h1>
            </div>
        </div>

        {!! $cookie->description !!}
    </div>
@endsection

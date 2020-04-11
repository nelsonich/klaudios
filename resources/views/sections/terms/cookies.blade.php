@extends('layouts.app')
@section('title', 'Klaudios | Cookies Policy')
@section('description', 'A cookie policy is used to inform visitors to our site that we use cookies on our website, web application or mobile application.')

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

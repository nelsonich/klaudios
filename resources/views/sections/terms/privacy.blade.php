@extends('layouts.app')
@section('title', 'Klaudios | Privacy Policy')
@section('description', 'A Privacy Policy is an important legal document that lets users understand the various ways a website might be collecting personal information. The purpose of a Privacy Policy is to inform users of your data collection practices in order to protect the customers privacy.')
@section('content')
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-12 text-center">
                <h1 title="{{ trans('menu.terms.privacy', [], \Session::get('locale')) }}">{{ trans('menu.terms.privacy', [], \Session::get('locale')) }}</h1>
            </div>
        </div>

        {!! $privacy->description !!}
    </div>
@endsection

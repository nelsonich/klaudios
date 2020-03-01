@extends('dashboard.layouts.app')
@section('title', 'Klaudios | Features')
@section('content')
    @include('dashboard.asides.leftMenu')
    <div class="container">
        <div class="row justify-content-center">
            <table class="table table-striped table-dark mb-5">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Image</th>
                        <th scope="col">Lang</th>
                        <th scope="col">Edit</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($languages as $lang)
                        <tr>
                            <th scope="row">{{ $lang->id }}</th>
                            <th scope="row">
                                <img src="{{ asset('images/lang/' . $lang->image) }}" alt="{{ $lang->lang }}" class="img-fluid w-10" />
                            </th>
                            <th scope="row" class="lang">{{ $lang->lang }}</th>
                            <th scope="row">
                                <input type="checkbox" class="changeLangStatus" {{ $lang->lang == "en" ? "disabled" : "" }} data-langId="{{ $lang->id }}" {{ $lang->status == 1 ? "checked" : "" }} id="{{ $lang->lang }}" name="{{ $lang->lang }}" value="{{ $lang->lang }}">
                                <label for="{{ $lang->lang }}"></label>
                            </th>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

@include('dashboard.layouts.messages')

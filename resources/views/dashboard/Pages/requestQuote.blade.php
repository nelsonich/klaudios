@extends('dashboard.layouts.app')
@section('title', 'Klaudios | Request Quotes')
@section('content')
    @include('dashboard.asides.leftMenu')
    <div class="container">
        <div class="row justify-content-center">
            <table class="table table-striped table-dark mb-5">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">First Name</th>
                        <th scope="col">Last Name</th>
                        <th scope="col">Subject</th>
                        <th scope="col">Message</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($requestQuotes as $request)
                        <tr>
                            <th scope="row">{{ $request->id }}</th>
                            <th scope="row">{{ $request->firstName }}</th>
                            <th scope="row">{{ $request->lastName }}</th>
                            <th scope="row">{{ $request->subject }}</th>
                            <th scope="row">{{ $request->message }}</th>
                        </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th scope="row" colspan="5" class="justify-content-end">
                            {{ $requestQuotes->links('pagination::bootstrap-5') }}
                        </th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
@include('dashboard.layouts.messages')
@endsection

@extends('dashboard.layouts.app')
@section('title', 'Klaudios | Dashboard')
@section('content')
@include('dashboard.asides.leftMenu')
<div class="container">
    <div class="row justify-content-center">
        <table class="table table-striped table-dark">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">User Name</th>
                    <th scope="col">E-Mail</th>
                </tr>
            </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <th scope="row">{{ $user->id }}</th>
                    <th scope="row">{{ $user->first_name }}</th>
                    <th scope="row">{{ $user->last_name }}</th>
                    <th scope="row">{{ $user->user_name }}</th>
                    <th scope="row">{{ $user->email }}</th>
                </tr>
            @endforeach
        </tbody>
        </table>
    </div>
</div>
@endsection

@extends('layouts.app')
@section('title', 'Klaudios | Profile')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="accordion" id="accordionExample">
                    @include('Profile.profile_messages')
                    @if($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="card">
                        <div class="card-header" id="headingEditProfileDetails">
                            <h2 class="mb-0">
                                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseEditProfile" aria-expanded="true" aria-controls="collapseEditProfile">
                                    {{ trans('menu.editProfile', [], \Session::get('locale')) }}
                                </button>
                            </h2>
                        </div>

                        <div id="collapseEditProfile" class="collapse show" aria-labelledby="headingEditProfileDetails" data-parent="#accordionExample">
                            <div class="card-body">
                                <div class="card">
                                    <div class="card-header">
                                        {{ trans('menu.editProfile', [], \Session::get('locale')) }}
                                    </div>

                                    <div class="card-body">
                                        <form action="{{ route('edit-profile') }}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <div class="input-group input-group-sm mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="firstName">
                                                        {{ trans('form.firstname', [], \Session::get('locale')) }}
                                                    </span>
                                                </div>
                                                <input type="text" name="first_name" class="form-control" aria-label="Title" aria-describedby="title" value="{{ $user->first_name }}">
                                            </div>
                                            <div class="input-group input-group-sm mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="lastName">
                                                        {{ trans('form.lastname', [], \Session::get('locale')) }}
                                                    </span>
                                                </div>
                                                <input type="text" name="last_name" class="form-control" aria-label="Title" aria-describedby="title" value="{{ $user->last_name }}">
                                            </div>
                                            <div class="input-group input-group-sm mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="userName">
                                                        {{ trans('form.username', [], \Session::get('locale')) }}
                                                    </span>
                                                </div>
                                                <input type="text" name="user_name" class="form-control" aria-label="Title" aria-describedby="title" readonly value="{{ $user->user_name }}">
                                            </div>
                                            <div class="input-group input-group-sm mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="email">
                                                        {{ trans('form.email', [], \Session::get('locale')) }}
                                                    </span>
                                                </div>
                                                <input type="text" name="email" class="form-control" aria-label="Title" aria-describedby="title" readonly value="{{ $user->email }}">
                                            </div>
                                            <div class="row justify-content-end">
                                                <button type="submit" class="btn btn-success mr-3">
                                                    {{ trans('menu.edit', [], \Session::get('locale')) }}
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingEditProfilePassword">
                            <h2 class="mb-0">
                                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseEditProfilePassword" aria-expanded="true" aria-controls="collapseEditProfilePassword">
                                    {{ trans('menu.editProfilePassword', [], \Session::get('locale')) }}
                                </button>
                            </h2>
                        </div>

                        <div id="collapseEditProfilePassword" class="collapse" aria-labelledby="headingEditProfilePassword" data-parent="#accordionExample">
                            <div class="card-body">
                                <div class="card">
                                    <div class="card-header">
                                        {{ trans('menu.editProfilePassword', [], \Session::get('locale')) }}
                                    </div>

                                    <div class="card-body">
                                        <form action="{{ route('edit-profile-password') }}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <div class="input-group input-group-sm mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="oldPassword">
                                                        {{ trans('form.oldPassword', [], \Session::get('locale')) }}
                                                    </span>
                                                </div>
                                                <input type="password" name="oldPassword" class="form-control" aria-label="Title" aria-describedby="title">
                                            </div>
                                            <div class="input-group input-group-sm mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="newPassword">
                                                        {{ trans('form.newPassword', [], \Session::get('locale')) }}
                                                    </span>
                                                </div>
                                                <input type="password" name="newPassword" class="form-control" aria-label="Title" aria-describedby="title">
                                            </div>
                                            <div class="input-group input-group-sm mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="confirmNewPassword">
                                                        {{ trans('form.confirmPassword', [], \Session::get('locale')) }}
                                                    </span>
                                                </div>
                                                <input type="password" name="confirmNewPassword" class="form-control" aria-label="Title" aria-describedby="title">
                                            </div>
                                            <div class="row justify-content-end">
                                                <button type="submit" class="btn btn-success mr-3">
                                                    {{ trans('menu.edit', [], \Session::get('locale')) }}
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

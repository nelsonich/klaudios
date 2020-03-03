@extends('layouts.app')
@section('title', 'Klaudios | Registration')
@section('content')
<div class="container" id="registrationForm">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ trans('menu.registration', [], \Session::get('locale')) }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="first_name"
                            class="col-md-4 col-sm-4 col-2 col-form-label text-md-right text-sm-right">
                                <i class="fas fa-user"></i>
                            </label>

                            <div class="col-md-6 col-sm-6 col-8">
                                <input id="first_name"
                                type="text"
                                class="form-control @error('first_name') is-invalid @enderror"
                                name="first_name" value="{{ old('first_name') }}"
                                autocomplete="first_name"
                                autofocus
                                placeholder="{{ trans('form.firstname', [], \Session::get('locale')) }}" />

                                @error('first_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="last_name"
                            class="col-md-4 col-sm-4 col-2 col-form-label text-md-right text-sm-right">
                                <i class="fas fa-user"></i>
                            </label>

                            <div class="col-md-6 col-sm-6 col-8">
                                <input id="last_name"
                                type="text"
                                class="form-control @error('last_name') is-invalid @enderror"
                                name="last_name" value="{{ old('last_name') }}"
                                autocomplete="last_name"
                                autofocus
                                placeholder="{{ trans('form.lastname', [], \Session::get('locale')) }}" />

                                @error('last_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="user_name"
                            class="col-md-4 col-sm-4 col-2 col-form-label text-md-right text-sm-right">
                                <i class="fas fa-user-tie"></i>
                            </label>

                            <div class="col-md-6 col-sm-6 col-8">
                                <input id="user_name"
                                type="text"
                                class="form-control @error('user_name') is-invalid @enderror"
                                name="user_name" value="{{ old('user_name') }}"
                                autocomplete="user_name"
                                autofocus
                                placeholder="{{ trans('form.username', [], \Session::get('locale')) }}" />

                                @error('user_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email"
                            class="col-md-4 col-sm-4 col-2 col-form-label text-md-right text-sm-right">
                                <i class="far fa-envelope"></i>
                            </label>

                            <div class="col-md-6 col-sm-6 col-8">
                                <input id="email"
                                type="email"
                                class="form-control @error('email') is-invalid @enderror"
                                name="email" value="{{ old('email') }}"
                                autocomplete="email"
                                placeholder="{{ trans('form.email', [], \Session::get('locale')) }}" />

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password"
                            class="col-md-4 col-sm-4 col-2 col-form-label text-md-right text-sm-right">
                                <i class="fas fa-lock"></i>
                            </label>

                            <div class="col-md-6 col-sm-6 col-8">
                                <input id="password"
                                type="password"
                                class="form-control @error('password') is-invalid @enderror"
                                name="password"
                                autocomplete="new-password"
                                placeholder="{{ trans('form.password', [], \Session::get('locale')) }}" />

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm"
                            class="col-md-4 col-sm-4 col-2 col-form-label text-md-right text-sm-right">
                                <i class="fas fa-lock"></i>
                            </label>

                            <div class="col-md-6 col-sm-6 col-8">
                                <input id="password-confirm"
                                type="password"
                                class="form-control"
                                name="password_confirmation"
                                autocomplete="new-password"
                                placeholder="{{ trans('form.confirmPassword', [], \Session::get('locale')) }}" />
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-10 col-sm-10 col-10 d-flex justify-content-end mx-auto">
                                <input id="termsAndConditions"
                                       type="checkbox"
                                       class="mr-2"
                                       name="termsAndConditions"
                                       autocomplete="termsAndConditions"
                                       style="align-self: center;"/>
                                <label for="termsAndConditions" class="mb-0">
                                    I consent with Klaudios <a style="text-decoration: underline;" target="_blank" href="{{ url('terms') }}">Terms & Conditions</a>
                                </label>
                            </div>
                            <p class="mx-auto text-center">Your personal data will be processed in accordance with our <a style="text-decoration: underline;" target="_blank" href="{{ url('privacy') }}">Privacy Policy</a>.</p>
                        </div>

                        <div class="form-group row mb-0 text-center">
                            <div class="col-md">
                                <button type="submit" class="btn btn-warning" disabled="true">
                                    {{ trans('menu.registration', [], \Session::get('locale')) }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

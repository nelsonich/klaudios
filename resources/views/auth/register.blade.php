@extends('layouts.app')
@section('title', 'Klaudios | Registration')
@push('css')
    <link rel="stylesheet" href="{{ asset('css/login_and_reg.css') }}">
@endpush
@section('content')
<div class="container" id="registrationForm">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h1>{{ trans('menu.registration', [], \Session::get('locale')) }}</h1>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}" class="needs-validation" novalidate>
                        @csrf

                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="md-form">
                                    <i class="fas fa-user prefix"></i>
                                    <label for="first_name">{{ trans('form.firstname', [], \Session::get('locale')) }}</label>
                                    <input id="first_name"
                                           type="text"
                                           class="form-control @error('first_name') is-invalid @enderror"
                                           name="first_name" value="{{ old('first_name') }}"
                                           autocomplete="off" />

                                    @error('first_name')
                                    <span class="invalid-feedback text-right" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="md-form">
                                    <i class="fas fa-user prefix"></i>
                                    <label for="last_name">{{ trans('form.lastname', [], \Session::get('locale')) }}</label>
                                    <input id="last_name"
                                           type="text"
                                           class="form-control @error('last_name') is-invalid @enderror"
                                           name="last_name" value="{{ old('last_name') }}"
                                           autocomplete="off" />

                                    @error('last_name')
                                    <span class="invalid-feedback text-right" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="md-form">
                                    <i class="fas fa-user-tie prefix"></i>
                                    <label for="user_name">{{ trans('form.username', [], \Session::get('locale')) }}</label>
                                    <input id="user_name"
                                           type="text"
                                           class="form-control @error('user_name') is-invalid @enderror"
                                           name="user_name" value="{{ old('user_name') }}"
                                           autocomplete="off" />

                                    @error('user_name')
                                    <span class="invalid-feedback text-right" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="md-form">
                                    <i class="fas fa-envelope prefix"></i>
                                    <label for="email">{{ trans('form.email', [], \Session::get('locale')) }}</label>
                                    <input id="email"
                                           type="email"
                                           class="form-control @error('email') is-invalid @enderror"
                                           name="email" value="{{ old('email') }}"
                                           autocomplete="off" />

                                    @error('email')
                                    <span class="invalid-feedback text-right" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="md-form">
                                    <i class="fas fa-lock prefix"></i>
                                    <label for="password">{{ trans('form.password', [], \Session::get('locale')) }}</label>
                                    <input id="password"
                                           type="password"
                                           class="form-control @error('password') is-invalid @enderror"
                                           name="password"
                                           autocomplete="off" />

                                    @error('password')
                                    <span class="invalid-feedback text-right" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="md-form">
                                    <i class="fas fa-lock prefix"></i>
                                    <label for="password-confirm">{{ trans('form.confirmPassword', [], \Session::get('locale')) }}</label>
                                    <input id="password-confirm"
                                           type="password"
                                           class="form-control"
                                           name="password_confirmation"
                                           autocomplete="off" />
                                </div>
                            </div>
                        </div>

                        <div class="form-row mt-1 mb-2">
                            <div>
                                <p>
                                    <label for="termsAndConditions">
                                        I consent with Klaudios <a style="text-decoration: underline;" target="_blank" href="{{ url('terms') }}">Terms & Conditions</a>
                                    </label>
                                    <input id="termsAndConditions"
                                           type="checkbox"
                                           name="termsAndConditions"
                                           autocomplete="termsAndConditions"
                                           style="align-self: center;"/>
                                </p>
                            </div>
                            <p class="m-0">Your personal data will be processed in accordance with our <a style="text-decoration: underline;" target="_blank" href="{{ url('privacy') }}">Privacy Policy</a>.</p>
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

@push('scripts')
    <script src="{{ asset('js/registration/registr.js') }}"></script>
@endpush

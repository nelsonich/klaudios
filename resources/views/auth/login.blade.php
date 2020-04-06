@extends('layouts.app')
@section('title', 'Klaudios | Login')
@section('content')
<div class="container" id="loginForm">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h1>{{ trans('menu.login', [], \Session::get('locale')) }}</h1>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}" class="needs-validation" novalidate>
                        @csrf

                        <div class="form-row">

                            <div class="md-form w-100">
                                <i class="fas fa-envelope prefix"></i>
                                <label for="email">
                                    {{ trans('form.email', [], \Session::get('locale')) }}
                                </label>
                                <input id="email"
                                type="text"
                                class="form-control @error('email') is-invalid @enderror"
                                name="email" value="{{ old('email') }}"
                                autocomplete="off"
                                />

                                @error('email')
                                    <span class="invalid-feedback text-right" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            {{--<label for="password" class="col-md-4 col-sm-4 col-2 col-form-label text-md-right text-sm-right">
                                <i class="fas fa-lock"></i>
                            </label>--}}

                            <div class="md-form w-100">
                                <i class="fas fa-lock prefix"></i>
                                <label for="password">{{ trans('form.password', [], \Session::get('locale')) }}</label>
                                <input id="password"
                                    type="password"
                                    class="form-control @error('password') is-invalid @enderror"
                                    name="password"
                                    autocomplete="current-password" />
                                @error('password')
                                    <span class="invalid-feedback text-light" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        {{-- <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div> --}}

                        <div class="form-group row mb-0 text-center">
                            <div class="col-md">
                                <button type="submit" class="btn btn-warning">
                                    {{ trans('menu.login', [], \Session::get('locale')) }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link d-block" href="{{ route('password.request') }}">
                                        {{ trans('form.forgotPassword', [], \Session::get('locale')) }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

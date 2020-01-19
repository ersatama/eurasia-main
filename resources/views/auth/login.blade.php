@extends('layouts.mainApp')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4 login">
            <div class="login-header">Вход в личный кабинет</div>
            <div class="card-body">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group">
                        <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror login-input" name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus placeholder="{{__('main.phone_number')}}">
                        @error('phone')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror login-input" name="password" required autocomplete="current-password" placeholder="{{ __('Password') }}">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="remember" name="remember">
                            <label class="custom-control-label col-form-label login-remember" for="remember">{{ __('Remember Me') }}</label>
                        </div>
                    </div>
                    <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-login">
                                {{ __('Login') }}
                            </button>
                            <a class="login-reset" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>

                    </div>
                </form>
                <div class="form-group" style="margin: 0;">
                    <a href="/register">
                        <button type="submit" class="btn btn-info btn-login btn-register">
                            {{ __('Register') }}
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
    <script src="{{asset('js/form.js')}}" defer></script>
@endsection
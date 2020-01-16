@extends('layouts.mainApp')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4 login">
            <div class="login-header">{{ __('main.register') }}</div>
            <div class="card-body">
                <form id="register" method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="form-group">
                        <input id="name" minlength="1" maxlength="140" type="text" class="form-control @error('name') is-invalid @enderror login-input" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="{{ __('main.name') }}">
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input id="surname" minlength="1" maxlength="140" type="text" class="form-control @error('surname') is-invalid @enderror login-input" name="surname" value="{{ old('surname') }}" required autocomplete="surname" autofocus placeholder="{{ __('main.surname') }}">
                        @error('surname')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input id="lastname" minlength="1" maxlength="140" type="text" class="form-control @error('lastname') is-invalid @enderror login-input" name="lastname" value="{{ old('lastname') }}" autocomplete="lastname" autofocus placeholder="{{ __('main.lastname') }}">
                        @error('lastname')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input id="iin" maxlength="12" type="input" class="form-control @error('iin') is-invalid @enderror login-input" name="iin" value="{{ old('iin') }}" required autocomplete="iin" placeholder="{{ __('main.iin') }}">
                        @error('iin')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input id="phone" type="input" class="form-control @error('phone') is-invalid @enderror login-input" name="phone" value="{{ old('phone') }}" required autocomplete="phone" placeholder="+7(777) 777-77-77">
                        @error('phone')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror login-input" name="password" required autocomplete="new-password" placeholder="{{ __('main.password') }}">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input id="password-confirm" type="password" class="form-control login-input" name="password_confirmation" required autocomplete="new-password" placeholder="{{ __('main.confirm_password') }}">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-login">
                            {{ __('main.register') }}
                        </button>
                    </div>
                </form>
                <div class="form-group" style="margin: 0;">
                    <a href="/login">
                        <button type="submit" class="btn btn-info btn-login btn-info">
                            {{ __('main.login') }}
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
    <script src="{{asset('js/register.js')}}" defer></script>
@endsection

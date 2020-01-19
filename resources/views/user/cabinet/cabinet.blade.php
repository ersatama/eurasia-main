@extends('layouts.mainApp')
@section('content')
<div class="container">
    <div class="row">
        @include('user.layout.sidebar')
        <div class="col-md-9">
            <h3>Мой кабинет</h3>
            <br>
            <form action="/cabinet" method="POST">
                @csrf
                <h6 class="main-nav__title site-color">Пароль</h6>
                <br>
                @if (isset($password))
                <div class="form-group row">
                        <label class="col-sm-2 col-form-label"></label>
                        <div class="col-sm-5">
                            <div class="alert {{$password[0]}}" role="alert">{{$password[1]}}</div>
                        </div>
                </div>
                @endif
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">{{__('main.current_password')}}</label>
                    <div class="col-sm-5">
                        <input type="password" class="form-control login-input @error('old') is-invalid @enderror" name="old" required minlength="8" maxlength="255" autocomplete="none">
                        @error('old')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">{{__('main.new_password')}}</label>
                    <div class="col-sm-5">
                        <input type="password" class="form-control login-input @error('new') is-invalid @enderror" name="new" required minlength="8" maxlength="255" autocomplete="none">
                        @error('new')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">{{__('main.confirm_password')}}</label>
                    <div class="col-sm-5">
                        <input type="password" class="form-control login-input @error('confirm') is-invalid @enderror" name="confirm" required minlength="8" maxlength="255" autocomplete="none">
                        @error('confirm')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-5">
                        <button type="submit" class="btn btn-success float-right btn-login">{{__('main.change_password')}}</button>
                    </div>
                </div>
            </form>
            <br>
            <br>
        </div>
    </div>
</div>
@endsection

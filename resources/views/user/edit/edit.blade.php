@extends('layouts.mainApp')
@section('content')
<div class="container">
    <div class="row">
        @include('user.layout.sidebar')
        <div class="col-md-9">
            <h3>Редактирование </h3>
            <br>
            <form action="/edit" method="POST">
                @csrf
                <h6 class="main-nav__title site-color">Личная информация</h6>
                <br>
                <div class="form-group row">
                    <label for="name" class="col-sm-2 col-form-label">{{__('main.name')}}</label>
                    <div class="col-sm-5">
                        <input type="text" value="{{Auth::user()->name}}" class="form-control login-input @error('name') is-invalid @enderror" id="name" name="name" required>
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label for="surname" class="col-sm-2 col-form-label">{{__('main.surname')}}</label>
                    <div class="col-sm-5">
                        <input type="text" value="{{Auth::user()->surname}}" class="form-control login-input @error('surname') is-invalid @enderror" name="surname" required>
                        @error('surname')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label for="lastname" class="col-sm-2 col-form-label">{{__('main.lastname')}}</label>
                    <div class="col-sm-5">
                        <input type="text" value="{{Auth::user()->lastname}}" class="form-control login-input @error('lastname') is-invalid @enderror" name="lastname">
                        @error('lastname')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">{{__('main.iin')}}</label>
                    <div class="col-sm-5">
                        <input type="text" value="{{Auth::user()->iin}}" class="form-control login-input" id="inputEmail3" readonly>
                    </div>
                </div>
                <br>
                <h6 class="main-nav__title site-color">Контактная информация</h6>
                <br>
                <div class="form-group row">
                    <label for="iin" class="col-sm-2 col-form-label">{{__('main.phone_number')}}</label>
                    <div class="col-sm-5">
                        <input type="text" value="{{Auth::user()->phone}}" class="form-control login-input" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">{{__('main.email')}}</label>
                    <div class="col-sm-5">
                        <input type="email" value="{{Auth::user()->email}}" class="form-control login-input @error('email') is-invalid @enderror" name="email" autocomplete="email" @if(Auth::user()->email) readonly @endif>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <br>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-5">
                        <button type="submit" class="btn btn-primary float-right btn-login">{{__('main.save')}}</button>
                    </div>
                </div>
            </form>
            <br>
            <br>
        </div>
    </div>
</div>
@endsection

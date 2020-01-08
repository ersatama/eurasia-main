@extends('layouts.mainApp')
@section('content')
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-12 col-md-5">
                    <form action="#">
                        <h4 class="mb-4 mt-md-5">Войти</h4>
                        <input required type="text" placeholder="E-mail" class="form-control mb-2">
                        <input required type="text" placeholder="Пароль" class="form-control mb-2">
                        <div class="row">
                            <div class="col-6">
                                <div class="row">
                                    <div class="col" style="display: flex;">
                                        <input class="sign-checkbox" type="checkbox">
                                        <p>Запомнить меня</p>
                                    </div>
                                </div>
                            </div>
                            <p class="col-6 sign-passLos">Забыли пароль?</p>
                        </div>
                        <button type="submit" class="btn btn_a">Войти</button>
                    </form>
                </div>
                <div class="col-12 col-md-6 mt-4 mt-md-0 sign-right p-md-5 pt-3 pt-md-0 pb-3 pb-md-0">
                    <h4>Выписка полиса без регистрации</h4>
                    <p>Туроператорам не зарегистрированным в системе Страховщика.</p>
                    <p>Создание страхового сертификата/полиса без регистрации.</p>
                    <a href="/register">
                        <button class="btn btn_a">Оформить</button>
                    </a>
                </div>
            </div>
        </div>
@endsection

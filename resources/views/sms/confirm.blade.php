@extends('layouts.mainApp')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h4 class="text-center">Подтверждение номера телефона!</h4>
                <p class="text-center">На ваш номер {{Auth::user()->phone}} был отправлен 6 значный код для подтверждения номера телефона</p>
                <div class="row justify-content-center mt-5">
                    <div class="col-6">
                        <div class="row code-input">
                            <div class="col-2">
                                <input type="text" maxlength="1">
                            </div>
                            <div class="col-2">
                                <input type="text" maxlength="1">
                            </div>
                            <div class="col-2">
                                <input type="text" maxlength="1">
                            </div>
                            <div class="col-2">
                                <input type="text" maxlength="1">
                            </div>
                            <div class="col-2">
                                <input type="text" maxlength="1">
                            </div>
                            <div class="col-2">
                                <input type="text" maxlength="1">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center mt-5">
                    <a href="/logout">
                        <button class="btn btn-success">Отмена</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script src="{{ asset('js/sms.js') }}" defer></script>
@endsection

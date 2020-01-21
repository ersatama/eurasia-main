@extends('layouts.mainApp')
@section('content')
<div class="container">
    <div class="row">
        @include('user.layout.sidebar')
        <div class="col-md-9">
            @if(Auth::user()->status === 'admin')
                <h3>Все договоры</h3>
                <br>
                <div class="row mb-4">
                    <div class="col-12">
                        here
                    </div>
                </div>
            @else
                <h3>Мой договоры страхования</h3>
                <br>
                <div class="row mb-4">
                    <div class="col-12">
                        <h6>Страхования от несчастных случаев</h6>
                        <table class="table table-hover table-sm table-bordered" style="font-size: 12px;">
                            <thead class="table-head">
                            <tr>
                                <th scope="col">Страхователь</th>
                                <th scope="col">Застрахованный</th>
                                <th scope="col">Выгодополучатель</th>
                                <th scope="col">Страховая сумма</th>
                                <th scope="col">Страховая премия</th>
                                <th scope="col" colspan="2">Период действия договора</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td scope="row">Серик Иванов</td>
                                <td>Серик Иванов</td>
                                <td>Иван Иванов</td>
                                <td>1 000 000,00 KZT</td>
                                <td>3 000,00 KZT</td>
                                <td>05.12.2019</td>
                                <td>04.12.2020</td>
                            </tr>
                            <tr>
                                <td scope="row">Серик Иванов</td>
                                <td>Серик Иванов</td>
                                <td>Иван Иванов</td>
                                <td>1 000 000,00 KZT</td>
                                <td>3 000,00 KZT</td>
                                <td>05.12.2019</td>
                                <td>04.12.2020</td>
                            </tr>
                            </tbody>
                        </table>
                        <div class="row">
                            <div class="col-6">Страховая премия оплачена</div>
                            <div class="col-6">
                                <button class="btn btn-success btn-sm float-right btn-web">Внести изменения</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-12">
                        <h6>Страхования жизни</h6>
                        <table class="table table-hover table-sm table-bordered" style="font-size: 12px;">
                            <thead class="table-head">
                            <tr>
                                <th scope="col">Страхователь</th>
                                <th scope="col">Застрахованный</th>
                                <th scope="col">Выгодополучатель</th>
                                <th scope="col">Страховая сумма</th>
                                <th scope="col">Страховая премия</th>
                                <th scope="col" colspan="2">Период действия договора</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td scope="row">Серик Иванов</td>
                                <td>Серик Иванов</td>
                                <td>Иван Иванов</td>
                                <td>1 000 000,00 KZT</td>
                                <td>3 000,00 KZT</td>
                                <td>05.12.2019</td>
                                <td>04.12.2020</td>
                            </tr>
                            <tr>
                                <td scope="row">Серик Иванов</td>
                                <td>Серик Иванов</td>
                                <td>Иван Иванов</td>
                                <td>1 000 000,00 KZT</td>
                                <td>3 000,00 KZT</td>
                                <td>05.12.2019</td>
                                <td>04.12.2020</td>
                            </tr>
                            </tbody>
                        </table>
                        <div class="row">
                            <div class="col-6">Страховая премия оплачена</div>
                            <div class="col-6">
                                <button class="btn btn-success btn-sm float-right btn-web">Внести изменения</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-12">
                        <h6>Аннуитетное страхование</h6>
                        <table class="table table-hover table-sm table-bordered" style="font-size: 12px;">
                            <thead class="table-head">
                            <tr>
                                <th scope="col">Страхователь</th>
                                <th scope="col">Застрахованный</th>
                                <th scope="col">Выгодополучатель</th>
                                <th scope="col">Страховая сумма</th>
                                <th scope="col">Страховая премия</th>
                                <th scope="col" colspan="2">Период действия договора</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td scope="row">Серик Иванов</td>
                                <td>Серик Иванов</td>
                                <td>Иван Иванов</td>
                                <td>1 000 000,00 KZT</td>
                                <td>3 000,00 KZT</td>
                                <td>05.12.2019</td>
                                <td>04.12.2020</td>
                            </tr>
                            <tr>
                                <td scope="row">Серик Иванов</td>
                                <td>Серик Иванов</td>
                                <td>Иван Иванов</td>
                                <td>1 000 000,00 KZT</td>
                                <td>3 000,00 KZT</td>
                                <td>05.12.2019</td>
                                <td>04.12.2020</td>
                            </tr>
                            </tbody>
                        </table>
                        <div class="row">
                            <div class="col-6">Страховая премия оплачена</div>
                            <div class="col-6">
                                <button class="btn btn-success btn-sm float-right btn-web">Внести изменения</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-12">
                        <h6>Обязательное страхование туриста</h6>
                        <table class="table table-hover table-sm table-bordered" style="font-size: 12px;">
                            <thead class="table-head">
                            <tr>
                                <th scope="col">Страхователь</th>
                                <th scope="col">Застрахованный</th>
                                <th scope="col">Выгодополучатель</th>
                                <th scope="col">Страховая сумма</th>
                                <th scope="col">Страховая премия</th>
                                <th scope="col" colspan="2">Период действия договора</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td scope="row">Серик Иванов</td>
                                <td>Серик Иванов</td>
                                <td>Иван Иванов</td>
                                <td>1 000 000,00 KZT</td>
                                <td>3 000,00 KZT</td>
                                <td>05.12.2019</td>
                                <td>04.12.2020</td>
                            </tr>
                            <tr>
                                <td scope="row">Серик Иванов</td>
                                <td>Серик Иванов</td>
                                <td>Иван Иванов</td>
                                <td>1 000 000,00 KZT</td>
                                <td>3 000,00 KZT</td>
                                <td>05.12.2019</td>
                                <td>04.12.2020</td>
                            </tr>
                            </tbody>
                        </table>
                        <div class="row">
                            <div class="col-6">Страховая премия оплачена</div>
                            <div class="col-6">
                                <button class="btn btn-success btn-sm float-right btn-web">Внести изменения</button>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
</div>
@endsection

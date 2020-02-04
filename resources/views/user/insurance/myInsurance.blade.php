@extends('layouts.mainApp')
@section('content')
<div class="container">
    <div class="row">
        @include('user.layout.sidebar')
        @php
            $insurance_1 = false;
            $insurance_2 = false;

            foreach ($data as $item) {
                if ($item->type === 2) {
                    $insurance_2 = true;
                } elseif ($item->type === 1) {
                    $insurance_1 = true;
                }
            }
        @endphp
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
                        @if ($insurance_2)
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
                                @foreach($data as $item)
                                    @if ($item->type === 2)
                                        <tr>
                                            <td scope="row">{{join(' ',[Auth::user()->surname,Auth::user()->name,Auth::user()->lastname])}}</td>
                                            <td>{{join(' ',[Auth::user()->surname,Auth::user()->name,Auth::user()->lastname])}}</td>
                                            <td>{{$item->surname}} {{$item->name}} {{$item->lastname}}</td>
                                            <td>{{$item->sum}} KZT</td>
                                            <td>{{round($item->prize, 2)}} KZT</td>
                                            <td>{{date("d.m.Y", strtotime($item->start))}}</td>
                                            <td>{{date("d.m.Y", strtotime(date("d.m.Y", strtotime($item->start)) . " + 365 day"))}}</td>
                                        </tr>
                                    @endif
                                @endforeach
                                </tbody>
                            </table>
                            <div class="row">
                                <div class="col-6">Страховая не премия оплачена</div>
                                <div class="col-6">
                                    <button class="btn btn-success btn-sm float-right btn-web">Внести изменения</button>
                                </div>
                            </div>
                        @else
                            <div class="row">
                                <div class="col-6">Пусто</div>
                            </div>
                        @endif
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-12">
                        <h6>Страхования жизни</h6>
                        @if($insurance_1)

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
                                @foreach($data as $item)
                                    @if ($item->type === 1)
                                        <tr>
                                            <td scope="row">{{join(' ',[Auth::user()->surname,Auth::user()->name,Auth::user()->lastname])}}</td>
                                            <td>{{join(' ',[Auth::user()->surname,Auth::user()->name,Auth::user()->lastname])}}</td>
                                            <td>{{$item->surname}} {{$item->name}} {{$item->lastname}}</td>
                                            <td>{{$item->sum}} KZT</td>
                                            <td>{{round($item->prize, 2)}} KZT</td>
                                            <td>{{date("d.m.Y", strtotime($item->start))}}</td>
                                            <td>{{date("d.m.Y", strtotime(date("d.m.Y", strtotime($item->start)) . " + 365 day"))}}</td>
                                        </tr>
                                    @endif
                                @endforeach
                                </tbody>
                            </table>
                            <div class="row">
                                <div class="col-6">Страховая не премия оплачена</div>
                                <div class="col-6">
                                    <button class="btn btn-success btn-sm float-right btn-web">Внести изменения</button>
                                </div>
                            </div>
                        @else
                            <div class="row">
                                <div class="col-6">Пусто</div>
                            </div>
                        @endif
                    </div>
                </div>
            @endif
        </div>
    </div>
</div>
@endsection

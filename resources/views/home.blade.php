@extends('layouts.mainApp')
@section('content')
    <div class="container">
        <div class="row">
            @include('user.layout.sidebar')
            <div class="col-md-9">
                @if(Auth::user()->status === 'admin')

                @else
                    @php
                        $body = [['Дата расчета',date('d.m.Y'),'input',false],['Страховая сумма','1 000 000,00 ₸','input',false],['Дата рождения',['1990'],'select',false],['Пол',['Мужщина','Женщина'],'select',false]];
                        $out = [['Возраст','22 лет','input',true],['Срок страхования','12 месяцев','input',true],['Страховая премия','10 000,00 ₸','input',true]];
                        $insurances = [
                            ['id' => 'lifeInsurance','img' => 'landing-page-list__link_3','title' => 'Страхование жизни','body' => $body, 'out' => $out],
                            ['id' => 'endowmentInsurance','img' => 'landing-page-list__link_4','title' => 'Аннуитетное страхование','body' => $body, 'out' => $out],
                            ['id' => 'accidentInsurance','img' => 'landing-page-list__link_1','title' => 'Страхование от несчастных случаев','body' => $body],
                            ['id' => 'annuityInsurance','img' => 'landing-page-list__link_2','title' => 'Аннуитетное страхование','body' => $body, 'out' => $out],
                            ['id' => 'touristInsurance','img' => 'landing-page-list__link_13','title' => 'Обязательное страхование туриста','body' => $body, 'out' => $out],
                            ['id' => 'insurance','img' => 'landing-page-list__link_1','title' => 'Страхование работников от несчастных случаев','body' => $body, 'out' => $out]
                            ];
                    @endphp
                    @foreach($insurances as $insurance)
                        @include('layouts.modal.insurance',$insurance)
                    @endforeach
                    <h3>Наши Услуги</h3>
                    <div class="row mt-4 product-list">
                        <div class="col-sm-6 col-md-6 col-lg-4">
                            <div class="product">
                                <div class="product__img landing-page-list__link_3">
                                    <div class="product__img__logo">
                                        <img src="/img/logo_1.svg">
                                    </div>
                                </div>
                                <div class="product__title">Страхование жизни</div>
                                <div class="product__desc link_active">Финансовая поддержка для вашей семьи на случай
                                    непредвиденных событий.
                                </div>
                                <div class="product-btn-main">
                                    <button class="btn btn-success btn-login btn-sm product-btn" data-toggle="modal"
                                            data-target="#lifeInsurance">Заключить договор
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4">
                            <div class="product">
                                <div class="product__img landing-page-list__link_4">
                                    <div class="product__img__logo">
                                        <img src="/img/logo_1.svg" width="44" height="44">
                                    </div>
                                </div>
                                <div class="product__title">Накопительное страхование жизни</div>
                                <div class="product__desc link_active">Программа страхования предназначена для защиты.
                                </div>
                                <div class="product-btn-main">
                                    <button class="btn btn-success btn-login btn-sm product-btn" data-toggle="modal"
                                            data-target="#endowmentInsurance">Заключить договор
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4">
                            <div class="product">
                                <div class="product__img landing-page-list__link_1">
                                    <div class="product__img__logo">
                                        <img src="/img/logo_1.svg" width="44" height="44">
                                    </div>
                                </div>
                                <div class="product__title">Страхование от несчастных случаев</div>
                                <div class="product__desc link_active">Программа страхования предназначена для защиты от
                                    непредвиденных рисков и расходов, возникающих при поездке за рубеж по туристическому
                                    пакету.
                                </div>
                                <div class="product-btn-main">
                                    <button class="btn btn-success btn-login btn-sm product-btn" data-toggle="modal"
                                            data-target="#accidentInsurance">Заключить договор
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4">
                            <div class="product">
                                <div class="product__img landing-page-list__link_2">
                                    <div class="product__img__logo">
                                        <img src="/img/logo_1.svg" width="44" height="44">
                                    </div>
                                </div>
                                <div class="product__title">Аннуитетное страхование</div>
                                <div class="product__desc link_active">Выплаты пострадавшему работнику или лицам,
                                    имеющим право на возмещение вреда.
                                </div>
                                <div class="product-btn-main">
                                    <button class="btn btn-success btn-login btn-sm product-btn" data-toggle="modal"
                                            data-target="#annuityInsurance">Заключить договор
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4">
                            <div class="product">
                                <div class="product__img landing-page-list__link_13">
                                    <div class="product__img__logo">
                                        <img src="/img/logo_1.svg" width="44" height="44">
                                    </div>
                                </div>
                                <div class="product__title">Обязательное страхование туриста</div>
                                <div class="product__desc link_active">Программа страхования предназначена для защиты от
                                    непредвиденных рисков и расходов, возникающих при поездке за рубеж по туристическому
                                    пакету.
                                </div>
                                <div class="product-btn-main">
                                    <button class="btn btn-success btn-login btn-sm product-btn" data-toggle="modal"
                                            data-target="#touristInsurance">Заключить договор
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4">
                            <div class="product">
                                <div class="product__img landing-page-list__link_1">
                                    <div class="product__img__logo">
                                        <img src="/img/logo_1.svg" width="44" height="44">
                                    </div>
                                </div>
                                <div class="product__title">Страхование работников от несчастных случаев</div>
                                <div class="product__desc link_active">Обязательное страхование работников от несчастных
                                    случаев (ОСНС).
                                </div>
                                <div class="product-btn-main">
                                    <button class="btn btn-success btn-login btn-sm product-btn" data-toggle="modal"
                                            data-target="#insurance">Заключить договор
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--
                    <div class="row">
                        <div class="col-sm-6">
                            <a href="/employee_insurance" class="landing-page-list__link landing-page-list__link_0 landing-page-list__link_1">
                                <span class="landing-page-list__title">Страхование работников от несчастных случаев</span>
                            </a>
                        </div>
                        <div class="col-sm-6">
                            <a href="/annuity_insurance" class="landing-page-list__link landing-page-list__link_0 landing-page-list__link_2">
                                <span class="landing-page-list__title">Аннуитетное страхование</span>
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <a href="/life_insurance" class="landing-page-list__link landing-page-list__link_0 landing-page-list__link_3">
                                <span class="landing-page-list__title">Страхование жизни</span>
                            </a>
                        </div>
                        <div class="col-sm-6">
                            <a href="/travel_insurance" class="landing-page-list__link landing-page-list__link_0 landing-page-list__link_13">
                                <span class="landing-page-list__title">Обязательное страхование туриста</span>
                            </a>
                        </div>
                    </div>-->
                @endif
            </div>
        </div>
    </div>
    <br>
@endsection

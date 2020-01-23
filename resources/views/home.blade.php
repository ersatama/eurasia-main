@extends('layouts.mainApp')
@section('content')
<div class="container">
    <div class="row">
        @include('user.layout.sidebar')
        <div class="col-md-9">
            @if(Auth::user()->status === 'admin')

            @else

                <h3>Наши Услуги</h3>
                <div class="row mt-4 product-list">
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="product">
                            <div class="product__img landing-page-list__link_1">
                                <div class="product__img__logo">
                                    <img src="/img/logo_1.svg" width="44" height="44">
                                </div>
                            </div>
                            <div class="product__title">Страхование работников от несчастных случаев</div>
                            <div class="product__desc link_active">Обязательное страхование работников от несчастных случаев (ОСНС).</div>
                            <div class="product-btn-main">
                                <button class="btn btn-success btn-login btn-sm product-btn">Заключить договор</button>
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
                            <div class="product__desc link_active">Выплаты пострадавшему работнику или лицам, имеющим право на возмещение вреда.</div>
                            <div class="product-btn-main">
                                <button class="btn btn-success btn-login btn-sm product-btn">Заключить договор</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="product">
                            <div class="product__img landing-page-list__link_3">
                                <div class="product__img__logo">
                                    <img src="/img/logo_1.svg">
                                </div>
                            </div>
                            <div class="product__title">Страхование жизни</div>
                            <div class="product__desc link_active">Финансовая поддержка для вашей семьи на случай непредвиденных событий.</div>
                            <div class="product-btn-main">
                                <button class="btn btn-success btn-login btn-sm product-btn" data-toggle="modal" data-target="#exampleModalCenter">Заключить договор</button>
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
                            <div class="product__desc link_active">Программа страхования предназначена для защиты от непредвиденных рисков и расходов, возникающих при поездке за рубеж по туристическому пакету.</div>
                            <div class="product-btn-main">
                                <button class="btn btn-success btn-login btn-sm product-btn">Заключить договор</button>
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
                            <div class="product__title">Обязательное страхование жизни</div>
                            <div class="product__desc link_active">Программа страхования предназначена для защиты от непредвиденных рисков и расходов, возникающих при поездке за рубеж по туристическому пакету.</div>
                            <div class="product-btn-main">
                                <button class="btn btn-success btn-login btn-sm product-btn">Заключить договор</button>
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
                            <div class="product__title">Страхование от несчастных случаев</div>
                            <div class="product__desc link_active">Программа страхования предназначена для защиты от непредвиденных рисков и расходов, возникающих при поездке за рубеж по туристическому пакету.</div>
                            <div class="product-btn-main">
                                <button class="btn btn-success btn-login btn-sm product-btn">Заключить договор</button>
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

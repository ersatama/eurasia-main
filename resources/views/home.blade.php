@extends('layouts.mainApp')
@section('content')
    <div class="container">
        <div class="row">
            @include('user.layout.sidebar')
            <div class="col-md-9">
                @if(Auth::user()->status === 'admin')
                @else
                    @php
                    //Auth::user()->iin '03.06.1994'
                        $list = App\Models\Tariff\tariff::select('year', 'male', 'female')->get();//940603300497
                        $body = [['Дата расчета',date('d.m.Y'),'input',true,'date'],['Страховая сумма','','input',false,'sum'],['Дата рождения',date('d.m.Y', strtotime(join('', [Auth::user()->iin[2],Auth::user()->iin[3],'/',Auth::user()->iin[4],Auth::user()->iin[5],'/',Auth::user()->iin[0],Auth::user()->iin[1]]))),'input',true,'birth'],['Пол',['Мужчина','Женщина'],'select',false,'sex']];

                        $out = [['Возраст (18-65)','','input',true,'year'],['Срок страхования','12 месяцев','input',true,'duration'],['Страховая премия','0,00 ₸','input',true,'prize']];

                        $insurances = [
                            ['id' => 'lifeInsurance','img' => 'landing-page-list__link_3','title' => 'Страхование жизни','body' => $body, 'out' => $out, 'data'=>$list],
                            ['id' => 'endowmentInsurance','img' => 'landing-page-list__link_4','title' => 'Накопительное страхование жизни','body' => $body, 'out' => $out],
                            ['id' => 'accidentInsurance','img' => 'landing-page-list__link_1','title' => 'Страхование от несчастных случаев','body' => $body],
                            ['id' => 'annuityInsurance','img' => 'landing-page-list__link_2','title' => 'Аннуитетное страхование','body' => $body, 'out' => $out],
                            ['id' => 'touristInsurance','img' => 'landing-page-list__link_13','title' => 'Обязательное страхование туриста','body' => $body, 'out' => $out],
                            ['id' => 'insurance','img' => 'landing-page-list__link_1','title' => 'Страхование работников от несчастных случаев','body' => $body, 'out' => $out]
                            ];
                    @endphp
                    @foreach($insurances as $insurance)
                        @include('layouts.modal.insurance',$insurance)
                    @endforeach
                    @include('layouts.modal.profile')
                @section('scripts')
                    <script src="{{ asset('js/jquery.maskMoney.js') }}" defer></script>
                    <script src="{{ asset('js/form-modal.js') }}" defer></script>
                    <script src="{{ asset('js/form.js') }}" defer></script>
                @endsection
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
                                        onclick="$('#lifeInsurance').modal({show: true});">Заключить договор
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
                                        onclick="$('#endowmentInsurance').modal({show: true});">Заключить договор
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
                                        onclick="$('#accidentInsurance').modal({show: true});">Заключить договор
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
                            <div class="product__desc link_active">Обязательное страхование работников от несчастных  случаев (ОСНС).</div>
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

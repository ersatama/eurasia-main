@extends('layouts.mainApp')
@section('content')
<div class="page-content">
    <div class="container text-center mb-4">
        <div class="row justify-content-md-center">
            <div class="col-12 col-md-11 col-lg-8">
                <h1>{{__('main.timely_insurance_payments')}}</h1>
                <p class="subheader">{{__('main.from_a_subsidiary_of_the_leading_company_on_the_insurance_market')}}</p>
            </div>
        </div>
    </div>
    <section class="container">
        <div class="row landing-page-list">
            <div class="col-12 col-md-6 landing-page__item mx-auto">
                <a href="/employee_insurance" class="landing-page-list__link landing-page-list__link_1">
                    <span class="landing-page-list__title">{{__('main.employees_insurance_against_accidents')}}</span>
                </a>
            </div>
            <div class="col-12 col-md-6 landing-page__item mx-auto">
                <a href="/annuity_insurance" class="landing-page-list__link landing-page-list__link_2">
                    <span class="landing-page-list__title">{{__('main.annuity_insurance')}}</span>
                </a>
            </div>
            <div class="col-12 col-md-6 landing-page__item mx-auto">
                <a href="/life_insurance" class="landing-page-list__link landing-page-list__link_3">
                    <span class="landing-page-list__title">{{__('main.life_insurance')}}</span>
                </a>
            </div>
            <div class="col-12 col-md-6 landing-page__item mx-auto">
                <a href="/travel_insurance" class="landing-page-list__link landing-page-list__link_13">
                    <span class="landing-page-list__title">{{__('main.mandatory_travel_insurance')}}</span>
                </a>
            </div>
        </div>
    </section>
    <section class="container mb-5 main-page__about">
        <div class="row justify-content-md-center mb-5">
            <div class="col-12 col-md-10 col-lg-8 pt-5">
                <p class="text-center">{{__('main.title_1')}}</p>
            </div>
        </div>
        <div class="row justify-content-md-center">
            <div class="col-12 col-md-11 text-center">
                <h3>{{__('main.financial_stability_ratings_of_eurasia_ic_jsc')}}</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-6 mb-2 inter-rating__col">
                <div class="inter-rating__item">
                    <figure>
                        <img src="//eurasia-life.com/static/tmp-003.png" alt="BBB-" data-image="qj2ia939ysti">
                    </figure>
                    <h3 class="d-inline-block ml-4">
                        BBB
                        <small class="d-block gray">{{__('main.outlook_stable')}}</small>
                    </h3>
                    <p class="mt-4">{{__('main.title_2')}}</p>
                </div>
            </div>
            <div class="col-12 col-md-6 mb-2 inter-rating__col">
                <div class="inter-rating__item">
                    <figure><img src="//eurasia-life.com/static/tmp-002.png" alt="B++" data-image="abytozu2qzce"></figure>
                    <h3 class="d-inline-block ml-4">
                        B++
                        <small class="d-block gray">{{__('main.outlook_stable')}}</small>
                    </h3>
                    <p class="mt-4">
                        {{__('main.title_3')}}
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="container mb-5">
        <h2 class="text-center mb-4">{{__('main.company_news')}}</h2>
        <div class="row mb-4">
            <div class="col-12 col-md-4">
                <p>
                    <small class="gray">05 ноября 2019</small>
                </p>
                <p>
                    <a href="/news/28-strahovanie-zhizni-prostymi-slovami-o-slozhnom">
                        <img src="img/resized/000/000/062-o0pNl/62--300.jpg" class="w-100 mb-2" alt="{{__('main.title_4')}}" title="{{__('main.title_4')}}">
                        {{__('main.title_4')}}
                    </a>
                </p>
            </div>
            <div class="col-12 col-md-4">
                <p>
                    <small class="gray">07 октября 2019</small>
                </p>
                <p>
                    <a href="/news/19-ustavnyj-kapital-kszh-evraziya-prevysit-sovokupnyj-kapital-otrasli">
                        <img src="img/resized/000/000/058-y-0oH/58--300.jpg" class="w-100 mb-2" alt="{{__('main.title_5')}}" title="{{__('main.title_5')}}">
                        {{__('main.title_5')}}
                    </a>
                </p>
            </div>
            <div class="col-12 col-md-4">
                <p>
                    <small class="gray">29 июля 2019</small>
                </p>
                <p>
                    <a href="/news/13-gulmira-ubegalieva-kszh-evraziya-strahovanie-zhizni-eto-sotsialno-vazhno-eto-zabota-o-blizkih">
                        <img src="/img/resized/000/000/051-XL1FkD7M_/51--300.jpg" class="w-100 mb-2" alt="{{__('main.title_6')}}" title="{{__('main.title_6')}}">
                        {{__('main.title_6')}}
                    </a>
                </p>
            </div>
        </div>
        <div class="font-weight-bold">
            <a href="/news">{{__('main.archive_news')}}</a>
        </div>
    </section>
</div>
@endsection

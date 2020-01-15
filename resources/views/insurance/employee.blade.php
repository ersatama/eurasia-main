@extends('layouts.mainApp')
@section('content')
<section class="landing-page">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1>{{__('main.employee_care')}}</h1>
            </div>
            <div class="col-12 col-md-10 mx-auto text-center">
                <p class="landing-page__subheader">{{__('main.title_15')}}</p>
            </div>
            <div class="col-12 mt-3 text-center">
                <a href="#osns-calculator" class="btn btn_a scroll-to">{{__('main.find_out_the_cost_of_insurance')}}</a>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 round-up mt-4 panorama-warp">
                <div class="panorama">
                    <img src="/img/landing-1.jpg" id="pano-img" alt="{{__('main.employee_care')}}">
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div id="osns-penalty" class="row">
            <div class="col-12 mt-3">
                <h2>{{__('main.osns_agreement')}}</h2>
            </div>
            <div class="col-12 mt-3 osns-toggle-wrap">
                <ul class="list-inline osns-toggle">
                    <li class="list-inline-item">
                        <span class="osns-toggle__no active">{{__('main.no')}}</span>
                    </li>
                    <li class="list-inline-item">
                        <span class="osns-toggle__yes">{{__('main.yes')}}</span>
                    </li>
                </ul>
            </div>
            <div class="col-12 penalty-info pt-4 pb-3">
                <div class="penalty-info__no-policy">
                    <div class="row">
                        <div class="col-12 mb-3">
                            <small class="gray">{{__('main.title_16')}}</small>
                            <h3 class="mt-2">{{__('main.title_17')}}</h3>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="penalty-info__item">
                                <span class="penalty-info__mrp">160 МРП</span>
                                <span class="penalty-info__tg">404 000 тг</span>
                                <p class="penalty-info__text">{{__('main.title_18')}}</p>
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="penalty-info__item">
                                <span class="penalty-info__mrp">400 МРП</span>
                                <span class="penalty-info__tg">1 010 000 тг</span>
                                <p class="penalty-info__text">{{__('main.title_19')}}</p>
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="penalty-info__item">
                                <span class="penalty-info__mrp">1000 МРП</span>
                                <span class="penalty-info__tg">2 525 000 тг</span>
                                <p class="penalty-info__text">{{__('main.title_20')}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!---->
        </div>
    </div>
    <br><br>
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-8 mx-auto">
                <ul id="osns-about-list" class="list-unstyled osns-about-list">
                    <li class="">
                        <a href="">{{__('main.contract_terms')}}</a>
                        <!---->
                    </li>
                    <li class="">
                        <a href="">{{__('main.What_risks_does_the_contract_cover')}}</a>
                        <!---->
                    </li>
                    <li class="">
                        <a href="">{{__('main.osn_tariffs')}}</a>
                        <!---->
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<script>
    let i18n = {
        a1: '{{__('main.cost_calculation')}}',
        a2: '{{__('main.type_of_activity_for_oked')}}',
        a3: '{{__('main.title_21')}}',
        a4: '{{__('main.annual_payroll')}}',
        a5: '{{__('main.title_22')}}',
        a6: '{{__('main.title_23')}}',
        a7: '{{__('main.title_24')}}',
        a10: '{{__('main.insurance_cost')}}',
        a11: '{{__('main.title_25')}}',
        a12: '{{__('main.submit_your_application')}}',
        a13: '{{__('main.we_will_call_you_back_within_10_minutes')}}'
    };
</script>
<section class="green-bg round-top round-bottom">
    <div class="container">
        <div class="row my-5 calculator-wrap" id="osns-calculator">
            <div class="col-12 col-md-8 order-2 order-md-1" id="calculator">
                <calculator csrf="{{ csrf_token() }}" form-name="/employee_insurance"></calculator>
            </div>
            <div class="col-12 col-md-4 order-1 order-md-2">
                <div class="mediator">
                    <span class="mediator__text">{{__('main.title_14')}}</span><br>
                    <img src="img/logo_1.svg" width="44" height="42">
                </div>
            </div>
        </div>
    </div>
</section>
@include('footer.page_path',['page' => __('main.employees_insurance_against_accidents')])
@endsection
@section('styles')
    <link href="{{ asset('css/vue-multiselect.min.css') }}" rel="stylesheet">
@endsection
@section('scripts')
    <script src="{{ asset('js/vue-multiselect.min.js?v=1558059784') }}"></script>
    <script src="{{ asset('js/calculator.js?v=1567666965') }}"></script>
@endsection

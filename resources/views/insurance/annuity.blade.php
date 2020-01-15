@extends('layouts.mainApp')
@section('content')
<section class="landing-page">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1>{{__('main.annuity_insurance_under_osns')}}</h1>
            </div>
            <div class="col-12 col-md-10 mx-auto text-center">
                <p class="landing-page__subheader">{{__('main.title_8')}}</p>
            </div>
            <div class="col-12 mt-3 text-center">
                <a href="#form" class="btn btn_a scroll-to">{{__('main.submit_your_application')}}</a>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 round-up mt-4 panorama-warp">
                <div class="panorama">
                    <img src="https://eurasia-life.com/tmp/landing-2.jpg" id="pano-img" alt="{{__('main.annuity_insurance_under_osns')}}">
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-10 mx-auto mt-4">
                <p class="text-center">{{__('main.title_9')}}</p>
            </div>
        </div>
        <div class="row text-center my-4 benefits">
            <div class="col-12">
                <h2>{{__('main.benefits')}}</h2>
            </div>
            <div class="col-12 col-md-4 mb-3">
                <div class="benefits__item">
                    <div>
                        <img src="/img/verified.svg" width="61" height="74">
                        <br><br>
                        {{__('main.title_10')}}
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 mb-3">
                <div class="benefits__item">
                    <div>
                        <img src="/img/users.svg" width="77" height="77">
                        <br><br>
                        {{__('main.title_11')}}
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 mb-3">
                <div class="benefits__item">
                    <div>
                        <img src="/img/wallet.svg" width="71" height="67">
                        <br><br>
                        {{__('main.title_12')}}
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-8 mx-auto mt-3">
                <ul id="osns-about-list" class="list-unstyled osns-about-list">
                    <li class="">
                        <a href="">{{__('main.insurance_payment_terms')}}</a>
                        <!---->
                    </li>
                    <li class="">
                        <a href="">{{__('main.how_does_the_contract_work')}}</a>
                        <!---->
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
@include('forms.application_for_insurance',['url' => '/annuity_insurance'])
@include('footer.page_path',['page' => __('main.annuity_insurance')])
@endsection

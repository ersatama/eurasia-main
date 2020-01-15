@extends('layouts.mainApp')
@section('content')
<section class="landing-page">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1>{{__('main.life_insurance')}}</h1>
            </div>
            <div class="col-12 col-md-10 mx-auto text-center">
                <p class="landing-page__subheader">{{__('main.title_26')}}</p>
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
                    <img src="/img/landing-3.jpg" id="pano-img" alt="{{__('main.life_insurance')}}">
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row my-4 benefits benefits_left">
            <div class="col-12 text-center">
                <h2>{{__('main.pension')}}</h2>
            </div>
            <div class="col-12 col-md-6 mb-3">
                <div class="benefits__item">
                    <div>
                        <svg width="46" height="56" xmlns="http://www.w3.org/2000/svg"><path d="M28.75 0h-23C2.587 0 .029 2.52.029 5.6L0 50.4C0 53.48 2.559 56 5.721 56H40.25c3.163 0 5.75-2.52 5.75-5.6V16.8L28.75 0zm5.75 44.8h-23v-5.6h23v5.6zm0-11.2h-23V28h23v5.6zm-8.625-14V4.2l15.813 15.4H25.874z" fill="#3AAB47" fill-rule="nonzero"></path></svg>
                        <span class="_">{{__('main.repayment_of_a_loan_on_time')}}</span>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 mb-3">
                <div class="benefits__item">
                    <div>
                        <svg width="54" height="65" xmlns="http://www.w3.org/2000/svg"><path d="M27 0L0 11.818v17.727C0 45.943 11.52 61.277 27 65c15.48-3.723 27-19.057 27-35.455V11.818L27 0zm-6 47.273L9 35.455l4.23-4.166L21 38.91l19.77-19.47L45 23.636 21 47.273z" fill="#3AAB47" fill-rule="nonzero"></path></svg>
                        <span class="_">{{__('main.protection_of_the_rights_of_heirs_in_the_case_of_a_loan')}}</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-8 mx-auto mt-md-4">
                <ul id="osns-about-list" class="list-unstyled osns-about-list">
                    <li class="">
                        <a href="">{{__('main.What_risks_does_the_contract_cover')}}</a>
                        <!---->
                    </li>
                    <li class="">
                        <a href="">{{__('main.contract_terms')}}</a>
                        <!---->
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
@include('forms.application_for_insurance',['url' => '/life_insurance'])
@include('footer.page_path',['page' => __('main.life_insurance')])
@endsection

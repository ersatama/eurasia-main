@extends('layouts.mainApp')
@section('content')
<section class="landing-page">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1>{{__('main.mandatory_travel_insurance')}}</h1>
            </div>
            <div class="col-12 col-md-10 mx-auto text-center">
                <p class="landing-page__subheader">{{__('main.title_27')}}</p>
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
                    <img src="/img/landing-4.jpg" id="pano-img" alt="{{__('main.mandatory_travel_insurance')}}">
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="ro">
            <div class="col-12 col-md-10 mx-auto mt-4">
                <p>{{__('main.title_28')}}</p>
                <p>{{__('main.title_29')}}</p>
                <p>{{__('main.title_30')}}</p>
                <p>@lang('main.title_31')</p>
                <p>{{__('main.title_32')}}</p>
                <ul>
                    <li>{{__('main.title_33',['phone'=>'+7 495 775 09 99'])}}</li>
                    <li>{{__('main.title_34',['phone'=>'+ 357 (24) 625 099'])}}</li>
                    <li>{{__('main.title_35',['phone'=>'+ 7 (495) 775 09 99'])}}</li>
                </ul>
                <p>{{__('main.title_36')}}</p>
            </div>
        </div>
        <div class="ro">
            <div class="col-12 col-md-10 mx-auto mt-4">
                <h2>{{__('main.title_37')}}</h2>
                <p>{{__('main.title_38')}}</p>
                <p>{{__('main.title_39')}}</p>
                <ul>
                    <li>{{__('main.surname_first_name')}}</li>
                    <li>{{__('main.insurance_policy_certificate_number')}}</li>
                    <li>{{__('main.location_and_telephone_number')}}</li>
                    <li>{{__('main.circumstances_in_which_the_insured_event_occurred')}}</li>
                    <li>{{__('main.what_help_is_required')}}</li>
                </ul>
                <p>{{__('main.title_40')}}</p>
            </div>
        </div>
        <div class="ro">
            <div class="col-12 col-md-10 mx-auto mt-4">
                <h2>{{__('main.important_to_know')}}</h2>
                <p>{{__('main.title_41')}}</p>
                <p>{{__('main.title_42')}}</p>
                <p>{{__('main.title_43')}}</p>
                <p>{{__('main.title_44')}}</p>
                <p>
                    <a href="/login" target="_blank" rel="nofollow">{{__('main.go_to_your_personal_account')}}</a>
                </p>
            </div>
        </div>
    </div>
</section>
@include('forms.application_for_insurance',['url' => '/travel_insurance'])
@include('footer.page_path',['page' => __('main.mandatory_travel_insurance')])
@endsection

@extends('layouts.mainApp')
@section('content')
<div class="container">
    <div class="row">
        @include('user.layout.sidebar')
        <div class="col-md-9">
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
            </div>
        </div>
    </div>
</div>
<br>
@endsection

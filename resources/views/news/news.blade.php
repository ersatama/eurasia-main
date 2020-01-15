@extends('layouts.mainApp')
@section('content')
<div class="container">
    @include('header.page_path', ['title' => __('main.news')])
    <h1>{{__('main.news_eurasia')}}</h1>
    <div id="post-list">
        <div class="row news-list">
            <div class="col-12 col-md-4 mb-3" data-key="28">
                <p>
                    <small class="gray">05.11.2019</small>
                </p>
                <p>
                    <a href="/ru/news/28-strahovanie-zhizni-prostymi-slovami-o-slozhnom">
                        <img src="/img/resized/000/000/062-o0pNl/62--300.jpg" class="w-100 mb-2" alt="{{__('main.title_4')}}" title="{{__('main.title_4')}}">
                        {{__('main.title_4')}}
                    </a>
                </p>
            </div>
            <div class="col-12 col-md-4 mb-3" data-key="19">
                <p>
                    <small class="gray">07.10.2019</small>
                </p>
                <p>
                    <a href="/ru/news/19-ustavnyj-kapital-kszh-evraziya-prevysit-sovokupnyj-kapital-otrasli">
                        <img src="/img/resized/000/000/058-y-0oH/58--300.jpg" class="w-100 mb-2" alt="{{__('main.title_5')}}" title="{{__('main.title_5')}}">
                        {{__('main.title_5')}}
                    </a>
                </p>
            </div>
            <div class="col-12 col-md-4 mb-3" data-key="13">
                <p>
                    <small class="gray">29.07.2019</small>
                </p>
                <p>
                    <a href="/ru/news/13-gulmira-ubegalieva-kszh-evraziya-strahovanie-zhizni-eto-sotsialno-vazhno-eto-zabota-o-blizkih">
                        <img src="/img/resized/000/000/051-XL1FkD7M_/51--300.jpg" class="w-100 mb-2" alt="{{__('main.title_6')}}" title="{{__('main.title_6')}}">
                        {{__('main.title_6')}}
                    </a>
                </p>
            </div>
            <div class="col-12 col-md-4 mb-3" data-key="10">
                <p>
                    <small class="gray">11.03.2019</small>
                </p>
                <p>
                    <a href="/ru/news/10-kszh-evraziya-7-j-igrok-na-rynke-strahovaniya-zhizni">
                        <img src="/img/resized/000/000/019-h0TtedwKx/19--300.jpg" class="w-100 mb-2" alt="{{__('main.title_7')}}" title="{{__('main.title_7')}}">
                        {{__('main.title_7')}}
                    </a>
                </p>
            </div>
        </div>
    </div>
</div>
@endsection

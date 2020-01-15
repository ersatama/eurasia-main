@extends('layouts.mainApp')
@section('content')
<section class="text-page">
    <div class="container text-page__content pb-5">
        <div class="row">
            @include('header.page_path', ['title' => __('main.audit')])
            <div class="col-12 col-md-8 user-content">
                <ul>
                    <li>
                        <a href="{{asset('storage/res/7R8LT059.pdf')}}" target="_blank" data-file="59" data-name="Форма 1,2  рус на 01.10.2019.PDF" rel="nofollow">Финансовая отчётность за 3 квартал 2019 года</a>
                    </li>
                    <li>
                        <a href="{{asset('storage/res/feJN5003.pdf')}}" target="_blank" data-file="3" data-name="1fin_2019.pdf" rel="nofollow"></a>
                        <a href="{{asset('storage/res/w8G4_035.pdf')}}" target="_blank" data-file="35" data-name="Форма 1,2  рус на 01.07.2019.PDF" rel="nofollow">Финансовая отчётность за 2 квартал 2019 года</a>
                    </li>
                    <li>
                        <a href="{{asset('storage/res/feJN5003.pdf')}}" target="_blank" data-file="3" data-name="1fin_2019.pdf" rel="nofollow">Финансовая отчётность за 1 квартал 2019 года</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
@endsection

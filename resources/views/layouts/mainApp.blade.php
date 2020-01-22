<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" itemscope="itemscope" itemtype="http://schema.org/WebSite">
<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# website: http://ogp.me/ns/website#">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- CSRF Token -->
    <meta name="csrf-param" content="csrf">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="description" content="Компания по страхованию жизни «Евразия» гарантирует страховые выплаты без занижения суммы страхового возмещения">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">

    <meta property="og:title" content="«Евразия» – страхование жизни, ОСНС, пенсионный аннуитет">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://eurasia-life.com/">
    <meta property="og:image" content="https://eurasia-life.com/share-big-v1.png">
    <meta property="og:description" content="Компания по страхованию жизни «Евразия» гарантирует страховые выплаты без занижения суммы страхового возмещения">
    <meta property="og:site_name" content="Евразия Лайф">
    <meta property="og:locale" content="ru_RU">

    <link type="application/rss+xml" href="/rss" title="RSS" rel="alternate">
    <link href="https://eurasia-life.com/" rel="canonical">
    <link href="https://eurasia-life.com/share-big-v1.png" rel="image_src">


    <!--[if lt IE9]>
    <script src="//oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <![endif]-->
    <!--[if lt IE9]>
    <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="apple-touch-icon" sizes="180x180" href="/img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/img/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#a1d5f6">
    <meta name="theme-color" content="#ffffff">

    <meta name="yandex-verification" content="1087d51d7b27085b">
    <meta name="google-site-verification" content="9PN9HAoy4D6SRu2mFFlYwPQCt2RyiXFX87m7Q0txqQU">

    <!-- Yandex.Metrika counter -->
    <script type="text/javascript">
        (function (m, e, t, r, i, k, a) {
            m[i] = m[i] || function () {
                (m[i].a = m[i].a || []).push(arguments)
            };
            m[i].l = 1 * new Date();
            k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(k, a)
        })
        (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

        ym(53126011, "init", {
            clickmap: true,
            trackLinks: true,
            accurateTrackBounce: true,
            webvisor: true
        });
    </script>
    <noscript></noscript>



    <!-- Scripts -->
<!--<script src="{{ asset('js/jquery-3.4.1.min.js') }}" defer></script>
    <script src="{{ asset('js/jquery.maskedinput.js') }}" defer></script>
    <script src="{{ asset('js/jquery.datetimepicker.full.min.js') }}" defer></script>-->
    <script src="https://use.fontawesome.com/4318ac312d.js"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <style>.landing-page-list__link_1 { background-image: url("/img/001.jpg") }.landing-page-list__link_2 { background-image: url("/img/002.jpg") }.landing-page-list__link_3 { background-image: url("/img/003.jpg") }.landing-page-list__link_13 { background-image: url("/img/005.jpg") }</style>
    @yield('styles')
</head>
<body>
<header class="header">
    <div class=" nav-container">
        <div class="container">
            <div class="row pt-3 pb-4 d-md-none">
                <div class="col-6 pt-1">
                    <ul class="lang-nav list-inline d-inline-block">
                        <li class="list-inline-item active">ru</li>
                        <li class="list-inline-item"><a href="/kz">kz</a></li>
                        <li class="list-inline-item"><a href="/en">en</a></li>
                    </ul>
                </div>
                <div class="col-6 text-right">
                    <a href="#" id="close-menu"><svg width="41" height="41" xmlns="http://www.w3.org/2000/svg"><g fill-rule="nonzero" fill="none"><path d="M39.933 10.453c-.17-.683-1.618-6.699-7.365-8.917C29.078.17 22.99 0 20.521 0c-2.469 0-8.556.213-12.047 1.536-5.96 2.304-7.321 8.66-7.407 8.917-.723 3.029-1.106 6.4-1.064 10.026 0 3.626.34 6.997 1.064 10.026.043.256 1.448 6.655 7.407 8.96C11.965 40.828 18.052 41 20.521 41c2.47 0 8.557-.213 12.047-1.536 5.96-2.304 7.322-8.66 7.365-8.917.723-3.029 1.106-6.4 1.064-10.026 0-3.669-.34-7.04-1.064-10.068zm.063 10.07c.047 3.737-.326 7.24-1.071 10.323 0 .046-1.305 5.744-6.29 7.66-2.329.887-6.894 1.447-12.112 1.494-5.264-.047-9.783-.607-12.159-1.495-4.984-1.915-6.289-7.66-6.289-7.706-.745-3.083-1.118-6.54-1.071-10.322-.047-3.737.326-7.24 1.071-10.323 0-.046 1.305-5.744 6.29-7.66C10.693 1.608 15.258 1.048 20.476 1c5.264.047 9.783.607 12.159 1.495 4.984 1.915 6.289 7.613 6.289 7.706.745 3.083 1.118 6.54 1.071 10.322z" fill="#778E93"></path><path d="M15.053 27.568l12.015-12.015a1.49 1.49 0 0 0 .003-2.124 1.49 1.49 0 0 0-2.124.003L12.932 25.447a1.49 1.49 0 0 0-.003 2.124c.593.593 1.561.56 2.124-.003z" fill="#3AAB47"></path><path d="M27.098 25.477L15.053 13.432a1.49 1.49 0 0 0-2.124-.003 1.49 1.49 0 0 0 .003 2.124l12.013 12.014a1.49 1.49 0 0 0 2.125.003c.624-.562.591-1.53.028-2.093z" fill="#3AAB47"></path></g></svg></a>
                </div>
            </div>
            <nav class="main-nav">
                <ul class="main-nav__items" itemscope="" itemtype="http://www.schema.org/SiteNavigationElement">
                    <li class="main-nav__item" itemprop="name">
                        <a href="/employee_insurance" class="main-nav__link" itemprop="url">
                            <span class="main-nav__title">{{__('main.employees_insurance_against_accidents')}}</span>
                        </a>
                    </li>
                    <li class="main-nav__item" itemprop="name">
                        <a href="/annuity_insurance" class="main-nav__link" itemprop="url">
                            <span class="main-nav__title">{{__('main.annuity_insurance')}}</span>
                        </a>
                    </li>
                    <li class="main-nav__item" itemprop="name">
                        <a href="/life_insurance" class="main-nav__link" itemprop="url">
                            <span class="main-nav__title">{{__('main.life_insurance')}}</span>
                        </a>
                    </li>
                    <li class="main-nav__item" itemprop="name">
                        <a href="/travel_insurance" class="main-nav__link" itemprop="url">
                            <span class="main-nav__title">{{__('main.mandatory_travel_insurance')}}</span>
                        </a>
                    </li>
                    <li class="main-nav__item main-nav__item_light" itemprop="name">
                        <a href="/about" class="main-nav__link" itemprop="url">
                            <span class="main-nav__title">{{__('main.about')}}</span>
                        </a>
                    </li>
                    <li class="main-nav__item main-nav__item_light" itemprop="name">
                        <a href="/audit" class="main-nav__link" itemprop="url">
                            <span class="main-nav__title">{{__('main.audit')}}</span>
                        </a>
                    </li>
                    <li class="main-nav__item main-nav__item_light" itemprop="name">
                        <a href="/news" class="main-nav__link" itemprop="url">
                            <span class="main-nav__title">{{__('main.news')}}</span>
                        </a>
                    </li>
                    <li class="main-nav__item" itemprop="name">
                        @if(Auth::check())
                            @if (Auth::user()->status === 'user')
                                <div class="main-nav__title-login">
                                    <div class="main-nav__title-login__left">
                                        <a href="/messages">
                                            <i class="fa fa-envelope" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                    <div class="main-nav__title-login__right">
                                        <a href="/edit">
                                            <div class="main-nav__title-login__name">{{Auth::user()->name}} {{Auth::user()->surname}} {{Auth::user()->lastname}}</div>
                                        </a>
                                        <a href="/home">
                                            <div class="main-nav__title-login__item">Заявить страховой случай</div>
                                        </a>
                                        <a href="/my_insurance">
                                            <div class="main-nav__title-login__item">Мои договоры</div>
                                        </a>
                                    </div>
                                </div>
                            @else
                                <div class="main-nav__title-login">
                                    <div class="main-nav__title-login__left">
                                        <a href="/messages">
                                            <i class="fa fa-envelope" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                    <div class="main-nav__title-login__right">
                                        <a href="/edit">
                                            <div class="main-nav__title-login__name">{{Auth::user()->name}} {{Auth::user()->surname}} {{Auth::user()->lastname}}</div>
                                        </a>
                                        <a href="/home">
                                            <div class="main-nav__title-login__item">Статистика</div>
                                        </a>
                                        <a href="/my_insurance">
                                            <div class="main-nav__title-login__item">Все договоры</div>
                                        </a>
                                    </div>
                                </div>
                            @endif
                        @else
                        <a href="/login">
                            <div class="main-nav__title" style="position: absolute; top: 50%; transform: translateY(-50%);">Личный кабинет</div>
                        </a>
                        @endif
                    </li>
                </ul>
            </nav>
            <div class="row d-md-none">
                <div class="col-12 pt-4 pb-5 text-center">
                    <div class="mb-3">
                        <a class="header__phone" href="tel:88000800099">8 800 080-00-99</a>
                    </div>
                    <div>
                        <a class="btn btn_c btn-sm" href="#callback" data-toggle="modal" data-target="#callback">{{__('main.call_back')}}</a>                                </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-2 mt-md-3">
        <div class="row">
            <div class="col-6 col-md-3">
                <a href="/" class="image-link site-logo">
                    <img src="{{__('img.logo')}}" id="site-logo">
                </a>
            </div>
            <div class="col-6 col-md-9 pt-2 text-right">
                <ul class="list-inline d-none d-md-block">
                    <li class="list-inline-item">
                        <a class="header__phone" href="tel:88000800099">8 800 080-00-99</a>
                    </li>
                    <li class="list-inline-item d-md-none d-lg-inline-block">
                        <a class="btn btn_c btn-sm" href="#callback" data-toggle="modal" data-target="#callback">{{__('main.call_back')}}</a>
                    </li>
                    <li class="list-inline-item">
                        <ul class="lang-nav list-inline d-inline-block">
                            <li class="list-inline-item active">ru</li>
                            <li class="list-inline-item">
                                <a href="/kz">kz</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="/en">en</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <ul class="list-inline d-md-none">
                    <li class="list-inline-item">
                        <a href="tel:88000800099">
                            <svg width="41" height="41" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><path d="M39.933 10.453c-.17-.683-1.618-6.699-7.365-8.917C29.078.17 22.99 0 20.521 0c-2.469 0-8.556.213-12.047 1.536-5.96 2.304-7.321 8.66-7.407 8.917-.723 3.029-1.106 6.4-1.064 10.026 0 3.626.34 6.997 1.064 10.026.043.256 1.448 6.655 7.407 8.96C11.965 40.828 18.052 41 20.521 41c2.47 0 8.557-.213 12.047-1.536 5.96-2.304 7.322-8.66 7.365-8.917.723-3.029 1.106-6.4 1.064-10.026 0-3.669-.34-7.04-1.064-10.068zm.063 10.07c.047 3.737-.326 7.24-1.071 10.323 0 .046-1.305 5.744-6.29 7.66-2.329.887-6.894 1.447-12.112 1.494-5.264-.047-9.783-.607-12.159-1.495-4.984-1.915-6.289-7.66-6.289-7.706-.745-3.083-1.118-6.54-1.071-10.322-.047-3.737.326-7.24 1.071-10.323 0-.046 1.305-5.744 6.29-7.66C10.693 1.608 15.258 1.048 20.476 1c5.264.047 9.783.607 12.159 1.495 4.984 1.915 6.289 7.613 6.289 7.706.745 3.083 1.118 6.54 1.071 10.322z" fill="#778E93" fill-opacity=".5" fill-rule="nonzero"></path><path d="M12.489 9.184c2.507-1.4 5.4 5.66 5.41 5.68a.35.35 0 0 1-.097.403c-3.207 2.771 4.034 10.097 6.951 7.046a.365.365 0 0 1 .42-.09c.02.01 7.12 3.056 5.618 5.48-5.859 9.458-28.18-12.996-18.302-18.52z" fill="#3AAB47"></path></g></svg>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#" id="open-menu"><svg width="41" height="41" xmlns="http://www.w3.org/2000/svg"><g fill-rule="nonzero" fill="none"><path d="M39.933 10.453c-.17-.683-1.618-6.699-7.365-8.917C29.078.17 22.99 0 20.521 0c-2.469 0-8.556.213-12.047 1.536-5.96 2.304-7.321 8.66-7.407 8.917-.723 3.029-1.106 6.4-1.064 10.026 0 3.626.34 6.997 1.064 10.026.043.256 1.448 6.655 7.407 8.96C11.965 40.828 18.052 41 20.521 41c2.47 0 8.557-.213 12.047-1.536 5.96-2.304 7.322-8.66 7.365-8.917.723-3.029 1.106-6.4 1.064-10.026 0-3.669-.34-7.04-1.064-10.068zm.063 10.07c.047 3.737-.326 7.24-1.071 10.323 0 .046-1.305 5.744-6.29 7.66-2.329.887-6.894 1.447-12.112 1.494-5.264-.047-9.783-.607-12.159-1.495-4.984-1.915-6.289-7.66-6.289-7.706-.745-3.083-1.118-6.54-1.071-10.322-.047-3.737.326-7.24 1.071-10.323 0-.046 1.305-5.744 6.29-7.66C10.693 1.608 15.258 1.048 20.476 1c5.264.047 9.783.607 12.159 1.495 4.984 1.915 6.289 7.613 6.289 7.706.745 3.083 1.118 6.54 1.071 10.322z" fill-opacity=".5" fill="#778E93"></path><path d="M11.504 14h16.992A1.49 1.49 0 0 0 30 12.5c0-.838-.664-1.5-1.504-1.5H11.504A1.49 1.49 0 0 0 10 12.5c0 .838.708 1.5 1.504 1.5zM28.54 19H11.504A1.49 1.49 0 0 0 10 20.5c0 .838.664 1.5 1.504 1.5h16.992A1.49 1.49 0 0 0 30 20.5c0-.838-.664-1.5-1.46-1.5zM28.538 27H11.504A1.49 1.49 0 0 0 10 28.5c0 .838.664 1.5 1.504 1.5h16.99a1.49 1.49 0 0 0 1.504-1.5c.044-.838-.664-1.5-1.46-1.5z" fill="#3AAB47"></path></g></svg></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>
<div class="page-content">
    @yield('content')
</div>
<footer class="footer text-center text-md-left mb-5">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-8">
                <p class="copyright">{{__('main.company')}}</p>
                <ul class="list-inline mb-1">
                    <li class="list-inline-item my-2">
                        <a href="/news">{{__('main.news')}}</a>
                    </li>
                    <li class="list-inline-item my-2">
                        <a href="/about">{{__('main.about')}}</a>
                    </li>
                    <li class="list-inline-item my-2">
                        <a href="/audit">{{__('main.audit')}}</a>
                    </li>
                    <li class="list-inline-item d-block d-md-inline-block my-2">
                        <address class="m-0">
                            <a href="https://yandex.kz/maps/-/CCulR68L" target="_blank">
                                <svg width="12" height="18" xmlns="http://www.w3.org/2000/svg"><path d="M6 1.5c2.397 0 4.5 1.963 4.5 4.202 0 2.32-1.87 5.348-4.5 9.495-2.63-4.147-4.5-7.176-4.5-9.495C1.5 3.463 3.603 1.5 6 1.5zM6 0C2.852 0 0 2.552 0 5.702 0 8.85 2.602 12.609 6 18c3.398-5.391 6-9.15 6-12.298C12 2.552 9.15 0 6 0zm0 8.25a2.25 2.25 0 1 1 0-4.5 2.25 2.25 0 0 1 0 4.5z" fill="#3AAB47"></path></svg>
                                {{__('main.address')}}
                            </a>
                        </address>
                    </li>
                    <li class="list-inline-item d-block d-md-inline-block my-2">
                        <a href="https://www.facebook.com/Eurasia-Life-Insurance-Company-2276336165939708/" target="_blank" class="mr-1"><svg width="24" height="24" xmlns="http://www.w3.org/2000/svg"><path d="M19 0H5a5 5 0 0 0-5 5v14a5 5 0 0 0 5 5h14a5 5 0 0 0 5-5V5a5 5 0 0 0-5-5zm-3 7h-1.924C13.461 7 13 7.252 13 7.889V9h3l-.238 3H13v8h-3v-8H8V9h2V7.077C10 5.055 11.064 4 13.461 4H16v3z" fill="#3AAB47" fill-rule="nonzero"></path></svg></a>
                        <a href="https://www.instagram.com/eurasia_life_insurance_company/" target="_blank"><svg width="24" height="24" xmlns="http://www.w3.org/2000/svg"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 1 0 0 12.324 6.162 6.162 0 0 0 0-12.324zM12 16a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm6.406-11.845a1.44 1.44 0 1 0 0 2.881 1.44 1.44 0 0 0 0-2.881z" fill="#3AAB47" fill-rule="nonzero"></path></svg></a>
                    </li>
                </ul>
                <p class="pt-3 gray small">{{__('main.license')}}</p>
            </div>
        </div>
    </div>
</footer>

<script src="{{ asset('js/vendor.js?v=1567666965') }}" defer></script>
<script src="{{ asset('js/app.js?v=1567666964') }}" defer></script>
<script src="{{ asset('js/jquery-3.4.1.min.js') }}" defer></script>
<script src="{{ asset('js/notify.min.js') }}" defer></script>
<script src="{{ asset('js/jquery.maskedinput.js') }}" defer></script>
<script src="{{ asset('js/jquery.datetimepicker.full.min.js') }}" defer></script>
@yield('scripts')
</body>
</html>

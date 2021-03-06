@extends('layouts.mainApp')
@section('content')
<section class="text-page">
    <div class="container text-page__content pb-5">
        <div class="row">
            @include('header.page_path', ['title' => __('main.about')])
            <div class="col-12 col-md-8 user-content">
                <p></p>
                <p>
                    {{__('main.title_45')}}
                    <br>
                    {{__('main.title_46')}}
                </p>
                <table>
                    <tbody>
                        <tr>
                            <td>
                                <img src="/img/c88-M047.jpg" data-image="47">
                            </td>
                            <td>
                                <img src="/img/ybFl7OwTiS048.jpg" data-image="48">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <img src="/img/RojE_dE3i008.jpg" data-image="8">
                            </td>
                            <td>
                                <img src="/img/52kvcPpF5009.jpg" data-image="9">
                            </td>
                        </tr>
                    </tbody>
                </table>
                <p>
                    <strong>Сведения об&nbsp;акционерах:</strong>
                </p>
                <p>@lang('main.title_47')</p>
                <p>
                    <strong>Совет директоров:</strong>
                </p>
                <ul>
                    <li>Уманов Борис Григорьевич&nbsp;— Председатель Совета Директоров<br>Дата назначения: 08.01.2019&nbsp;г.</li>
                    <li>Ащеулов Рустем Сапарбекович&nbsp;— Независимый Директор <br>Дата назначения: 08.01.2019&nbsp;г.</li>
                    <li>Убегалиева Гульмира Кайрулловна&nbsp;— Член Совета Директоров<br>Дата назначения: 22.01.2019&nbsp;г.</li>
                </ul>
                <p>
                    <strong>Руководство</strong>
                </p>
                <ul>
                    <li>Убегалиева Гульмира Кайрулловна&nbsp;— Председатель Правления<br>
                        Дата назначения: 22.01.2019&nbsp;г.</li>
                    <li>Снеговской Михаил Олегович&nbsp;— Заместитель Председателя Правления<br>
                        Дата назначения: 09.01.2019&nbsp;г.</li>
                    <li>Сосновский Алексей Александрович&nbsp;— Заместитель Председателя Правления<br>
                        Дата назначения: 19.04.2019&nbsp;г.</li>
                    <li>Хон Ирина Эдуардовна&nbsp;— Главный Бухгалтер, Член Правления<br>Дата назначения: 09.01.2019&nbsp;г.</li>
                </ul>
                <p>
                    <a href="//eurasia-life.com/files/000/000/q1P39038.xlsx" data-file="38" data-name="Реестр агентов.xlsx" rel="nofollow">&nbsp;</a>
                    <a href="//eurasia-life.com/files/000/000/g25x4p053.xlsx" data-file="53" data-name="Реестр страховых агентов_20.08.2019_КСЖ.xlsx" rel="nofollow"></a>
                    <a href="//eurasia-life.com/files/000/000/CwFcT_G055.xlsx" data-file="55" data-name="реестр агентов на 01.10.2019 Нац Банк.xlsx" rel="nofollow"></a>
                    <a href="//eurasia-life.com/files/000/000/uIfkga694_063.xlsx" data-file="63" data-name="Реестр страховых агентов_20.11.2019_КСЖ.xlsx" rel="nofollow"></a>
                    <a href="{{asset('storage/res/hdqMwJ9g066.xls')}}" data-file="66" data-name="Реестр агентов на 01.01.2020 Нац Банк.xls" rel="nofollow">{{__('main.agent_registry')}}</a>
                    <a href="//eurasia-life.com/files/000/000/BlEwkek031.xlsx" data-file="31" data-name="reestr_agentov_02.07.2019.xlsx" rel="nofollow"></a>
                </p>
                <p><strong>Контакты</strong></p>
                <p>050004, г. Алматы, ул. Желтоксан, 59<br>
                    Тел.: +7 (727) 258 75 58; +7 (727) 258 75 57<br>
                    email: info@eulife.&nbsp;kz<br><br>Режим работы:<br>
                    Пн-Пт: 09.00-19.00<br></p>
                <p><strong>Сведения об участиях в ассоциациях и союзах</strong></p>
                <p>10&nbsp;января 2019 года между АО&nbsp;«КСЖ «Евразия» и&nbsp;АО&nbsp;«ФГСВ» был заключен Договор участия в&nbsp;Фонде гарантирования страховых выплат.<br>Адрес АО&nbsp;«Фонд гарантирования страховых выплат»: Республика Казахстан, 050000, г. Алматы, ул. Рыскулбекова, д.&nbsp;28, блок&nbsp;7 (ЖК&nbsp;Бай-тал).</p>
                <p><strong>Филиалы:</strong></p>
                <p><strong>г. Актау</strong><br>
                    Микрорайон 4, здание 42,<br>
                    Тел.: +7 (7292) 50-60-62<br>
                    Тел.: +7 (7292) 50-54-57<br>
                    Тел.: +7 (7292) 50-60-67<br>
                    Тел.: +7 (7292) 50-60-68<br>
                    Пн.-Пт: с 9:00 до 19:00<br>
                    СБ: с 10:00 до 16:00</p>
                <p><strong>г. Актобе</strong><br>
                    пр. Санкибай Батыра, дом 28К<br>
                    Тел.:+7 (7132) 55-66-37<br>
                    Тел.:+7 (7132) 51-99-96<br>
                    Тел.:+7 (7132) 55-66-39<br>
                    Пн.-Пт: с 9:00 до 19:00<br>
                    СБ: с 10:00 до 16:00</p>
                <p><strong>г. Алматы</strong><br>
                    пр. Абая, дом 150, кв. 849,<br>
                    +7 (727) 258-43-36<br>
                    Пн.-Пт: с 9:00 до 19:00<br>
                    СБ: с 10:00 до 16:00</p>
                <p><strong>г. Нур-Султан</strong><br>
                    пр. Кабанбай батыра, 6/1 офис 101 , Бизнес Центр "Каскад"<br>
                    Тел.:+7 (7172) 92-51-79<br>
                    Тел.:+7 (7172) 92-51-49<br>
                    Тел.:+7 (7172) 92-51-59<br>
                    Пн.-Пт: с 9:00 до 19:00<br>
                    СБ: с 10:00 до 16:00</p>
                <p><strong>г. Атырау</strong><br>
                    ул. Бақтыгерей Құлманов, дом 107<br>
                    Тел.:+7 (7122) 20-01-40<br>
                    Тел.:+7 (7122) 20-01-42<br>
                    Пн.-Пт: с 9:00 до 19:00<br>
                    СБ: с 10:00 до 16:00</p>
                <p><strong>г. Караганда</strong><br>
                    район имени Казыбек Би, ул. Тишбека Аханова, дом 58<br>
                    Тел.:+7 (7212) 56-39-99<br>
                    Пн.-Пт: с 9:00 до 19:00<br>
                    СБ: с 10:00 до 16:00</p>
                <p><strong>г. Кокшетау</strong><br>
                    ул. Зарапа Темирбекова, дом 50, н.п. 23<br>
                    Тел.:+7 (7162) 91-17-07<br>
                    Пн.-Пт: с 9:00 до 19:00<br>
                    СБ: с 10:00 до 16:00</p>
                <p><strong>г. Костанай</strong><br>
                    ул. М. Дулатова, здание 90, корпус 2<br>
                    Тел.:+7 (7142) 54-54-00<br>
                    Тел.:+7 (7142) 53-19-00<br>
                    Тел.:+7 (7142) 53-26-36<br>
                    Пн.-Пт: с 9:00 до 19:00<br>
                    СБ: с 10:00 до 16:00</p>
                <p><strong>г. Павлодар</strong><br>
                    ул. Академика Сатпаева, 46<br>
                    Тел.:+7 (7182) 32-10-76<br>
                    Пн.-Пт: с 9:00 до 19:00<br>
                    СБ: с 10:00 до 16:00</p>
                <p><strong>г. Петропавловск</strong><br>
                    ул. Интернациональная, дом 41А<br>
                    Тел.:+7 (7152) 36-10-31<br>
                    Пн.-Пт: с 9:00 до 19:00<br>
                    СБ: с 10:00 до 16:00</p>
                <p><strong>г. Талдыкорган</strong><br>
                    ул. Т.Шевченко, дом 136<br>
                    Тел.:+7 (7282) 24 78 82<br>
                    Пн.-Пт: с 9:00 до 19:00<br>
                    СБ: с 10:00 до 16:00</p>
                <p><strong>г. Уральск</strong><br>
                    пр. Абулхаир Хана, строение 2А<br>
                    Тел.:+7 (7112) 55 44 02<br>
                    Пн.-Пт: с 9:00 до 19:00<br>
                    СБ: с 10:00 до 16:00</p>
                <p><strong>г. Усть-Каменогорск</strong><br>
                    М.Горького, дом 67, кв. 1<br>
                    Тел.:+7 (7232) 26-51-21<br>
                    Пн.-Пт: с 9:00 до 19:00<br>
                    СБ: с 10:00 до 16:00</p>
                <p><strong>г. Шымкент</strong><br>
                    ул. Желтоксан, здание 7<br>
                    Тел.:+7 (7252) 99-77-21<br>
                    Пн.-Пт: с 9:00 до 19:00<br>
                    СБ: с 10:00 до 16:00</p>
                <p><strong>г. Тараз</strong><br>
                    ул. Абдирахмана Айтиева, дом 8<br>
                    Тел.:+7 (726) 255-72-23<br>
                    Пн.-Пт: с 9:00 до 19:00</p>
                <p><strong>г. Кызылорда</strong><br>
                    ул. Ыбырай Жахаев, строение 7А<br>
                    Тел.:+7 (7242) 40-73-62<br>
                    Пн.-Пт: с 9:00 до 19:00</p>
                <p><strong>г. Туркестан</strong><br>
                    ул. С. Кожанов, дом 21<br>
                    Тел.:+7 (72533) 78 90 44<br>
                    Сот.:+7 708 47 89 044<br>
                    Пн.-Пт: с 9:00 до 19:00</p>
                <p><strong>г. Семей</strong><br>
                    ул. Дулатова, дом 135, кв. 2<br>
                    Сот.:+7 705 240 44 08<br>
                    Пн.-Пт: с 9:00 до 19:00
                </p>
            </div>
        </div>
    </div>
</section>
@endsection

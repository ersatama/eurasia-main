@if(Auth::user()->status === 'user')
    <div class="col-md-3">
        <ul class="list-group list-group-flush">
            <a href="/home" class="@if(Request::is('home')) link_active @endif">
                <li class="list-group-item">Главная</li>
            </a>
            <a href="/cabinet" class="@if(Request::is('cabinet')) link_active @endif">
                <li class="list-group-item">Мой кабинет</li>
            </a>
            <a href="/edit" class="@if(Request::is('edit')) link_active @endif">
                <li class="list-group-item">Редактрование</li>
            </a>
            <a href="/my_insurance" class="@if(Request::is('my_insurance')) link_active @endif">
                <li class="list-group-item">Мои договоры</li>
            </a>
            <a href="/messages" class="@if(Request::is('messages')) link_active @endif">
                <li class="list-group-item">Сообщения</li>
            </a>
            <a href="/logout">
                <li class="list-group-item">Выйти</li>
            </a>
        </ul>
    </div>
@else
    <div class="col-md-3">
        <ul class="list-group list-group-flush">
            <a href="/home" class="@if(Request::is('home')) link_active @endif">
                <li class="list-group-item">Главная</li>
            </a>
            <a href="/cabinet" class="@if(Request::is('cabinet')) link_active @endif">
                <li class="list-group-item">Мой кабинет</li>
            </a>
            <a href="/edit" class="@if(Request::is('edit')) link_active @endif">
                <li class="list-group-item">Редактрование</li>
            </a>
            <a href="/my_insurance" class="@if(Request::is('my_insurance')) link_active @endif">
                <li class="list-group-item">Все договоры</li>
            </a>
            <a href="/messages" class="@if(Request::is('messages')) link_active @endif">
                <li class="list-group-item">Сообщения</li>
            </a>
            <a href="/statistics" class="@if(Request::is('statistics')) link_active @endif">
                <li class="list-group-item">Статистика</li>
            </a>
            <a href="/frontend" class="@if(Request::is('frontend')) link_active @endif">
                <li class="list-group-item">Посадочные</li>
            </a>
            <a href="/posts" class="@if(Request::is('posts')) link_active @endif">
                <li class="list-group-item">Новости</li>
            </a>
            <a href="/logout">
                <li class="list-group-item">Выйти</li>
            </a>
        </ul>
    </div>
@endif

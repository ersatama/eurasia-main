@extends('layouts.mainApp')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <ul class="list-group list-group-flush">
                <a href="/home">
                    <li class="list-group-item">Главная</li>
                </a>
                <a href="/edit">
                    <li class="list-group-item">Редактрование</li>
                </a>
                <a href="/my_insurance">
                    <li class="list-group-item">Мои договоры</li>
                </a>
                <a href="/logout">
                    <li class="list-group-item">Выйти</li>
                </a>
            </ul>
        </div>
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

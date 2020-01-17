@extends('layouts.mainApp')
@section('content')
<div class="container">
    <div class="row">
        @include('user.layout.sidebar')
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <pre>
                    @php
                    print_r(Auth::user())
                    @endphp
                        </pre>
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

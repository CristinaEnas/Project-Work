@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <h1>Benvenuto nel monde dei dischi</h1>
                @auth
                    <p>Benvenuto, {{ Auth::user()->name }}</p>
                @else
                    <p>Benvenuto!</p>
                @endauth
            </div>
        </div>
    </div>
@endsection

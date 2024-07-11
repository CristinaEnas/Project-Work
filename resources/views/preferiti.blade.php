@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <h1>Benvenuto nella nostra applicazione</h1>
                @auth
                    <p>Benvenuto, {{ Auth::user()->name }}</p>
                    <h2>Ecco la lista dei miei preferiti</h2>
                @else
                    <p>Benvenuto!</p>
                @endauth
            </div>
        </div>
    </div>
@endsection
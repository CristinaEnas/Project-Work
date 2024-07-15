@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <h1>Benvenuto nella Dashboard</h1>
                <h2>Inizia qui la tua gestione delle varie Sezioni!</h2>
                <div>
                    <a href="{{ route('admin.tracks.index') }}">Gestione Brani</a>
                </div>
                <div>
                    <a href="{{ route('admin.albums.index') }}">Gestione Album</a>
                </div>
                <div>
                    <a href="{{ route('admin.artists.index') }}">Gestione Artisti</a>
                </div>
                <div>
                    <a href="{{ route('admin.genres.index') }}">Gestione Generi</a>
                </div>
            </div>
        </div>
    </div>
@endsection
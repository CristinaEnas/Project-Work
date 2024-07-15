@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <h1>Sezione Artisti </h1>
                <h2>Inizia qui la tua gestione degli Artisti! </h2>
                <div>
                    <a href="{{ route('admin.dashboard') }}">Torna indietro</a>
                </div>
                <div>
                    <a href="{{ route('admin.albums.index') }}">Gestione Album</a>
                </div>
                <div>
                    <a href="{{ route('admin.tracks.index') }}">Gestione Brani</a>
                </div>
                <div>
                    <a href="{{ route('admin.genres.index') }}">Gestione Generi</a>
                </div>
            </div>
        </div>
    </div>
@endsection

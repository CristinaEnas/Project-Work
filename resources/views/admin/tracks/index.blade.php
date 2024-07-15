@extends('layouts.admin')

@section('content')
    <div class="container">
        {{-- @dd($tracks) ok ma non visualizza gli attributi --}}
        <div class="row justify-content-center">
            <div class="col-12">
                <h1>Sezione Brani </h1>
                <h2>Inizia qui la tua gestione dei Brani! </h2>
                <div>
                    <a href="{{ route('admin.dashboard') }}">Torna indietro</a>
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
        <div class="row">
            @foreach($tracks as $track)
            {{-- @dd($track) ok --}}
            <div class="col-md-4 mb4">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                      <h5 class="card-title"> Titolo Brano: {{$track->title}} </h5>
                      <h6 class="card-subtitle mb-2 text-body-secondary">Album: {{$track->album_id}} </h6>
                      <p class="card-text">Artista:  </p>
                    </div>
                  </div>
            </div>
            @endforeach
        </div>
    </div>



@endsection
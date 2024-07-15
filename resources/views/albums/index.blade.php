@extends('layouts.app')

@section('title', 'Albums')

@section('content')
    <div>
        {{-- @dd($albums) --}}
        <h1>Questa è la pagina degli Album</h1>
        <div class="row">
            @foreach ($albums as $album)
                <div class="col-md-4 mb-4">
                    {{-- @dd($album) --}}
                    <div class="card" style="width: 18rem;">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Titolo: {{ $album->name}} </h5>
                            <h5 class="card-title">Artista:
                            @if ($album->artist)
                                {{ $album->artist->name }}
                            @else
                                 <h2>Artista: Non Trovato </h2>
                            @endif </h5>
                            <h5 class="card-title">Anno di pubblicazione: {{ $album->year}} </h5>
                            <a href=" {{route('albums.show', $album->id)}} " class="btn btn-primary"> Mostra dettagli</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
@endsection

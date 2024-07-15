@extends('layouts.app')

@section('title', 'Albums')

@section('content')
    <div>

        {{-- @dd($albums) --}}
        <h1>Questa è la pagina dei Album</h1>
         <div class="row">
            @foreach ($albums as $album)
                 @dd($album)
                <div class="col-md-4 mb-4">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title"> Titolo Album: {{ $album->name }} </h5>
                            <h5 class="card-title"> Anno di pubblicazione: {{ $album->year }} </h5>
                            <a href="{{ route('albums.show', $album->id) }}" class="card-link">Mostra dettagli</a>
                        </div>
                    </div>
                </div>
             @endforeach 
        </div>

    </div>
@endsection

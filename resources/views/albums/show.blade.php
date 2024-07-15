@extends('layouts.app')

@section('title', 'Album')


@section('content')
    <h1>Pagina dettaglio: </h1>
    <h3>{{ $album->name }}</h3>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif
    <h2>Titolo: {{ $album->name }}</h2>
    @if ($album->artist)
        {{ $album->artist->name }}
    @else
     <h2>Artista: Non Trovato </h2>
    @endif
    
    <h2>Anno publicazione: {{ $album->year }}</h2>



@endsection

@extends('layouts.app')

@section('title', 'Album')
@section('content')
    @dd($album)
    <h1>Pagina dettaglio album</h1>
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

    @if ($album)
        <h2>Titolo: {{ $album->name }}</h2>
        <p>Anno publicazione: {{ $album->year }}</p>
    @else
        <p>Album non trovato.</p>
    @endif
@endsection

@extends('layouts.admin')

@section('title', 'Lista Albums')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <h1>Sezione Album</h1>
                <h2>Inizia qui la tua gestione degli Album! </h2>
                <div>
                    <a href="{{ route('admin.dashboard') }}">Torna indietro</a>
                </div>
                <div>
                    <a href="{{ route('admin.genres.index') }}">Gestione Generi</a>
                </div>
                <div>
                    <a href="{{ route('admin.tracks.index') }}">Gestione Brani</a>
                </div>
                <div>
                    <a href="{{ route('admin.artists.index') }}">Gestione Artisti</a>
                </div>
            </div>
        </div>
    </div>

    <div>

        <h1>Lista degli album</h1>
        <a href="">Inserisci un nuovo Album</a>
        {{-- @dd($albums) ok --}}
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Titolo</th>
                    <th scope="col">Artista</th>
                    <th scope="col">Anno</th>
                    <th scope="col">Poster</th>
                    <th scope="col">Operazioni</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($albums as $album)
                {{-- @dd($album) ok--}}
                    <tr>
                        <th scope="row"> {{$album->name}} </th>
                        <td> {{$album->artist_id}} </td>
                        <td> {{$album->year}} </td>
                        <td> {{$album->poster}} </td>
                        <td>
                            <a href="">Modifica</a>
                            <form action="">
                                <input type="submit" value="Elimina">
                            </form>
                        </td>
                    </tr>
                @endforeach
                
            </tbody>
        </table>

    </div>
@endsection

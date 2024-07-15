@extends('layouts.admin')

@section('title', 'Inserimento album')

@section('content')

<div class="container">
    <h1>Inserimento Album</h1>

    <form method="POST" action=" {{ route('admin.albums.store')}} ">
        @csrf 
        @method('POST')
        <div class="mb-3">
          <label for="name" class="form-label">Titolo</label>
          <input type="text" class="form-control" id="name" name="name" >
        </div>
        <div class="mb-3">
            <label for="artist_id" class="form-label">Artista</label>
            <input type="text" class="form-control" id="artist_id" name="artist_id" >
          </div>
          <div class="mb-3">
            <label for="year" class="form-label">Anno</label>
            <input type="text" class="form-control" id="year" name="year" >
          </div>
          <div class="mb-3">
            <label for="poster" class="form-label">Poster </label>
            <input class="form-control" type="file" id="poster" name="poster" multiple>
          </div>
        <button type="submit" class="btn btn-primary">Invia</button>
      </form>
</div>


@endsection
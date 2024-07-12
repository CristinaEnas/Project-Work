@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <p class="">Pagina Richiesta Info</p>
                    <div class="card-body">
                        <h5 class="card-title text-center mb-4">Inserisci qui le tue Domande</h5>
                        {{-- alert --}}
                        @if (session('success'))
                            <div class='alert alert-success'>
                                {{ session('success') }}
                            </div>
                        @endif
                        <form method="POST" action="{{ route('sendEmail') }}">
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label">Nome</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="mb-3">
                                <label for="message" class="form-label">Messaggio</label>
                                <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Invia Messaggio</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

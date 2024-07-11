@extends('layouts.app')
<link rel="stylesheet" href="{{ asset('css/contact.css') }}">
@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <p class="text-center p-4">Benvenuto !</p>
                    <div class="card-body">
                        <h5 class="card-title text-center mb-4">Modello di Contatto</h5>
                        {{-- allert --}}
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                        {{-- endAllert --}}
                        <form action="{{ route('sendEmail') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="nome" class="form-label">Nome</label>
                                <input type="text" class="form-control" id="nome" name="nome" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="mb-3">
                                <label for="messaggio" class="form-label">Messaggio</label>
                                <textarea class="form-control" id="messaggio" name="messaggio" rows="5" required></textarea>
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

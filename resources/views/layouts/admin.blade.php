<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Dashboard Admin') }}</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @stack('styles')
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="{{ route('home') }}">Home Principale </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.albums.index') }}">Gestione Album</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.artists.index') }}">Gestione Artisti</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.tracks.index')}}">Gestione Brani</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.genres.index')}}">Gestione Generi</a>
                    </li>
                </div>
    </header>

    
    <main class="py-4">
        @yield('content')
    </main>


    <footer>
        <div class="container">
            <p class="text-center">&copy; {{ date('Y') }} {{ config('app.name', 'Laravel') }}. All rights reserved.
            </p>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    @stack('scripts')
</body>

</html>

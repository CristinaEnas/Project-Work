<?php

use App\Http\Controllers\AlbumController;
use App\Http\Controllers\ArtistController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\TrackController;
use App\Models\Album;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//* rotta home prima pagina

// Route::get('/', function () {
//     return view('home');
// })->name('home');

Route::get('/', [HomeController::class, 'index'])->name('home');

//? rotta per visualizzare gli album e un singolo album
Route::get('/albums', [HomeController::class, 'index'])->name('albums.index');
Route::get('/albums/{album}', [HomeController::class, 'show'])->name('albums.show');



//* rotta home dopo la registrazione 
Route::get('/home', function () {
    return view('home');
})->name('home');

//* rotta pagina contatti richiesta info (utente_info)
Route::get('/contact', function(){
    return view('contact');
})->name('email');

Route::post('/send-email', [EmailController::class, 'sendEmail'])->name('sendEmail');

//* rotta solo per chi è authenticato "preferiti";
Route::middleware(['auth'])->group(function(){
    Route::get('/preferiti', function() {
        return view('preferiti');
    })->name('preferiti');
});


//! Rotte Sezione Admin

//! rotta dashboard statica
Route::get('admin/dashboard', function (){
    return view('admin.dashboard');
})->name('admin.dashboard');

//!rotte parametriche Trackontroller
Route::get('admin/tracks', [TrackController::class, 'index'])->name('admin.tracks.index');
Route::get('admin/albums', [AlbumController::class, 'index'])->name('admin.albums.index');
Route::get('admin/artists', [ArtistController::class, 'index'])->name('admin.artists.index');
Route::get('admin/genres', [GenreController::class, 'index'])->name('admin.genres.index');

Route::get('/admin/create-album', [AlbumController::class, 'create'])->name('admin.albums.create');
Route::post('/admin/albums', [AlbumController::class, 'store'])->name('admin.albums.store');
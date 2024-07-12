<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EmailController;

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

// rotta home prima pagina

// Route::get('/', function () {
//     return view('home');
// })->name('home');

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/albums', [HomeController::class, 'index'])->name('albums.index');
Route::get('/albums/{album}', [HomeController::class, 'index'])->name('albums.show');


// rotta home dopo la registrazione 
Route::get('/home', function () {
    return view('home');
})->name('home');

//rotta pagina contatti richiesta info (utente_info)
Route::get('/contact', function(){
    return view('contact');
})->name('email');

Route::post('/send-email', [EmailController::class, 'sendEmail'])->name('sendEmail');

// rotta solo per chi è authenticato "preferiti";
Route::middleware(['auth'])->group(function(){
    Route::get('/preferiti', function() {
        return view('preferiti');
    })->name('preferiti');
});



// Rotte Sezione Admin

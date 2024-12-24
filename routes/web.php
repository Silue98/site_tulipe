<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('front.index');
});

Route::get('/notre-societe', function () {
    return view('front.qui_sommes_nous');
});

Route::get('/notre-presence', function () {
    return view('front.presence');
});
Route::get('/notre-actualite', function () {
    return view('front.actualite');
});
Route::get('/nos-produits', function () {
    return view('front.produits');
});

Route::get('/volume-et-tendance', function () {
    return view('front.voluem_tendance');
});

Route::get('/notre-equipe', function () {
    return view('front.equipe');
});

Route::get('/poissons', function () {
    return view('front.poissons');
});

Route::get('/boeufs', function () {
    return view('front.boeufs');
});

Route::get('/veaux', function () {
    return view('front.veaux');
});

Route::get('/agneaux', function () {
    return view('front.agneaux');
});

Route::get('/chevres', function () {
    return view('front.chevres');
});

Route::get('/contactez-nous', function () {
    return view('front.contact');
});


Route::get('/notre-galerie', function () {
    return view('front.galerie');
});

Route::get('/notre-actualite', function () {
    return view('front.actualite');
});



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::resource('/commande', App\Http\Controllers\CommandeController::class);

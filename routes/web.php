<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SandwichsController;
use App\Http\Controllers\BoissonsController;
use App\Http\Controllers\SnacksController;



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

// Route principale redirigeant vers l'accueil
Route::get('/', function () {
    return redirect()->route('accueil');
})->name('root');

// Page d'accueil
Route::get('/accueil', function () {
    return view('index');
})->name('accueil');

// Menus
Route::get('/menus', function () {
    return view('menus');
})->name('menus');

// Sandwichs
Route::get('/sandwichs', [SandwichsController::class, 'show'])->name('sandwichs');

// Boissons
Route::get('/boissons', [BoissonsController::class, 'show'])->name('boissons');

// Snacks
Route::get('/snacks', [SnacksController::class, 'show'])->name('snacks');


Route::get('/panier', function () {
    return view('panier');
})->name('panier');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/profil', function () {
    return view('profil');
})->name('profil');
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
Route::get('/sandwichs', function () {
    return view('sandwichs');
})->name('sandwichs');

// Boissons
Route::get('/boissons', function () {
    return view('boissons');
})->name('boissons');

// Snacks
Route::get('/snacks', function () {
    return view('snacks');
})->name('snacks');

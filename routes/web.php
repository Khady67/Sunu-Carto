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
    return view('pages/accueil');
})->name('accueil');

Route::get('/Réseaux Mobiles', function () {
    return view('pages/rm');
})->name('réseaux_mobiles');

Route::get('/FM-TV', function () {
    return view('pages/fm-tv');
})->name('fm_tv');

Route::get('/A Propos', function () {
    return view('pages/aPropos');
})->name('a_propos');
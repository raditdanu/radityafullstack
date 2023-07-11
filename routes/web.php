<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\PendudukController;
use App\Http\Controllers\LoginController;

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
    return view('login');
});

Route::get('/dashboard', 'PendudukController@index');

Route::get('/create', function () {
    return view('create');
});

Route::post('/login', function () {
    return view('create');
});

Route::post('/penduduk', [PendudukController::class, 'store'])->name('penduduk.store');
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
    return view('home');
});

// Simulate Championship
Route::post('/simulation', 'App\Http\Controllers\GameController@simulation')->name('simulation');

// Get List Championships
Route::get('/list', 'App\Http\Controllers\ResultController@listChampionships')->name('listChampionships');

// View Others Championships
Route::get('/others/{id}', 'App\Http\Controllers\ResultController@othersChampionships')->name('othersChampionships');
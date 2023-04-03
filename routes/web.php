<?php

use Illuminate\Support\Facades\Route;

/*
Rutas
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');

//Crear rutas para secciones del sidebar
Route::middleware(['auth'])->group(function () {
Route::resource('actividad11', 'App\Http\Controllers\HomeController');
Route::get('inicio', 'App\Http\Controllers\HomeController@go_inicio')->name('menu.inicio'); 
Route::get('tienda', 'App\Http\Controllers\HomeController@go_tienda')->name('menu.tienda'); 
Route::get('ubicacion', 'App\Http\Controllers\HomeController@go_ubicacion')->name('menu.ubicacion'); 

});
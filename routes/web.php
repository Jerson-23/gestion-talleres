<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TallereController;
use App\Http\Controllers\SesioneController;
use App\Http\Controllers\NivelDificultadeController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('/talleres', TallereController::class, );
Route::resource('/sesiones', SesioneController::class, );
Route::resource('/niveles', NivelDificultadeController::class, );

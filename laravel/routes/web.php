<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home.inicio');
});
Route::get('/escolher-funcao', function () {
    return view('home.pagina_escolher_funcao');
})->name('pagina_escolher_funcao');

Route::prefix('registar')->group(function () {
    Route::get('/cliente', function () {
        return view('registar.cliente');
    })->name('registar.cliente');

    Route::get('/freelancer', function () {
        return view('registar.freelancer');
    })->name('registar.freelancer');
});



<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home.inicio');
});
Route::get('/escolher-funcao', function () {
    return view('home.pagina_escolher_funcao');
})->name('pagina_escolher_funcao');

Route::get('/register/client', [RegisterController::class, 'showClientForm'])
     ->name('register.client');

Route::get('/register/freelancer', [RegisterController::class, 'showFreelancerForm'])
     ->name('register.freelancer');



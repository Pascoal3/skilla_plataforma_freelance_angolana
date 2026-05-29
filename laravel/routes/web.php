<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home.inicio');
});

Route::get('/', function () {
    return view('home.inicio');
})->name('home.inicio');

Route::get('/login', function () {
    return view('registar.tela_login');
})->name('registar.tela_login');


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

Route::get('/registar/cliente', function () {
    return view('registar.cliente');
})->name('registar.cliente');

Route::get('/registar/freelancer', function () {
    return view('registar.freelancer');
})->name('registar.freelancer');

use App\Http\Controllers\ProfileController;

Route::prefix('profiles')->group(function () {
    Route::get('/{id}', [ProfileController::class, 'show']);
    Route::put('/{id}', [ProfileController::class, 'update']);
    Route::post('/{id}/skills', [ProfileController::class, 'updateSkills']);
});

Route::get('painel/cliente/teste', function (){
    return view('painel.painel_cliente');
});
Route::get('painel/freelancer/teste', function (){
    return view('painel.painel_freelancer');
});

Route::get('/login/teste', function (){
    return view('registar.tela_login');
});
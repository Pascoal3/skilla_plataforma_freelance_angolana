<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;

// ============================================
// PÁGINAS PÚBLICAS
// ============================================

Route::get('/', function () {
    return view('home.inicio');
})->name('inicio');

Route::get('/escolher-funcao', function () {
    return view('home.pagina_escolher_funcao');
})->name('pagina_escolher_funcao');

// ============================================
// AUTENTICAÇÃO
// ============================================

Route::get('/login', function () {
    return view('registar.tela_login');
})->name('login');

// Formulários de registro (GET)
Route::prefix('registar')->group(function () {
    Route::get('/cliente', function () {
        return view('registar.cliente');
    })->name('registar.cliente');

    Route::get('/freelancer', function () {
        return view('registar.freelancer');
    })->name('registar.freelancer');
});

// Processar registro (POST)
Route::post('/registar', [AuthController::class, 'registar'])->name('registar');

// ============================================
// PERFIS
// ============================================

Route::prefix('profiles')->group(function () {
    Route::get('/{id}', [ProfileController::class, 'show']);
    Route::put('/{id}', [ProfileController::class, 'update']);
    Route::post('/{id}/skills', [ProfileController::class, 'updateSkills']);
});

// ============================================
// PAINÉIS (teste)
// ============================================

Route::get('/painel/cliente', function () {
    return view('painel.painel_cliente');
})->name('painel.cliente');

Route::get('/painel/freelancer', function () {
    return view('painel.painel_freelancer');
})->name('painel.freelancer');
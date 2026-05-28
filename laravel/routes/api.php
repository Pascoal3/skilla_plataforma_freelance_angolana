<?php

use App\Http\Controllers\JobController;

Route::prefix('jobs')->group(function () {
    Route::get('/', [JobController::class, 'index']); // Listar abertos
    Route::post('/save', [JobController::class, 'store']); // Salvar rascunho
    Route::patch('/{id}/publish', [JobController::class, 'publish']); // Publicar
    Route::post('/{id}/skills', [JobController::class, 'updateSkills']); // Habilidades
});

use App\Http\Controllers\WalletController;

Route::prefix('wallet')->group(function () {
    Route::get('/balance', [WalletController::class, 'balance']);
    Route::post('/deposit', [WalletController::class, 'deposit']);
});
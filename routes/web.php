<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GameController;

// HOME → stuur direct naar games (fix voor jouw fout)
Route::get('/', function () {
    return redirect('/games');
});

// READ
Route::get('games', [GameController::class, 'index']);

// CREATE
Route::get('games/create', [GameController::class, 'create']);
Route::post('games/store', [GameController::class, 'store']);

// UPDATE
Route::get('games/edit/{id}', [GameController::class, 'edit']);
Route::post('games/update/{id}', [GameController::class, 'update']);

// DELETE
Route::post('games/destroy/{id}', [GameController::class, 'destroy']);

// SHOW (detailpagina)
Route::get('/games/show/{id}', [GameController::class, 'show']);

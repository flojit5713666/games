<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// READ
Route::get('games', [App\Http\Controllers\GameController::class, 'index']);

// CREATE
Route::get('games/create', [App\Http\Controllers\GameController::class, 'create']);
Route::post('games/store', [App\Http\Controllers\GameController::class, 'store']);

// UPDATE (nieuw toegevoegd)
Route::get('games/edit/{id}', [App\Http\Controllers\GameController::class, 'edit']);
Route::post('games/update/{id}', [App\Http\Controllers\GameController::class, 'update']);

Route::post('games/destroy/{id}', [App\Http\Controllers\GameController::class, 'destroy']);

use App\Http\Controllers\GameController;

Route::get('/games/show/{id}', [GameController::class, 'show']);

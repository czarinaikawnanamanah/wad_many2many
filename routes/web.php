<?php

use App\Http\Controllers\GameController;
use App\Models\Game;
use App\Models\Player;

Route::get('games', [GameController::class, 'index']);
Route::post('games', [GameController::class, 'store']);
Route::get('games/{id}', [GameController::class, 'show']);
Route::put('games/{id}', [GameController::class, 'update']);
Route::delete('games/{id}', [GameController::class, 'destroy']);

Route::get('user/{id}', function ($id) {
    $user = App\Models\User::find($id);
    dd($user);
});

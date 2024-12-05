<?php

use App\Models\City;
use App\Models\Game;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');
Route::get('/games', function () {

    return Game::all();
});

Route::get('/elenco-comuni', function () {

    return City::all();
});

Route::get('/games/{id}', function ($id) {
    return Game::find($id);
});

Route::post('/games/{id}/update', function (Request $request) {
    return Game::update();
});

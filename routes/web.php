<?php

use Illuminate\Support\Facades\Route;

Route::get('/', fn () => redirect()->route('players.index'))->name('home');

Route::get('/login', [App\Http\Controllers\AuthController::class, 'index'])->name('login.index');
Route::post('/login', [App\Http\Controllers\AuthController::class, 'store'])->name('login');

Route::get("cards/",[App\Http\Controllers\CardController::class, "index"])->name("cards.index");
Route::get("cards/player/{player}", [App\Http\Controllers\CardController::class, "card_list"])->name("cards.player");
Route::get("cards/cardset/{cardSet}", [App\Http\Controllers\CardController::class, "card_list_sets"])->name("cards.cardset");
Route::get('cardsets/', [App\Http\Controllers\CardSetController::class, 'index'])->name('cardsets.index');

Route::resource("players", App\Http\Controllers\PlayerController::class)->only('index');

Route::middleware('auth')->group(function () {
    Route::post('/logout', [App\Http\Controllers\AuthController::class, 'destroy'])->name('logout');
});

Route::fallback(fn () => view('404'))->name('404');

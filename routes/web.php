<?php

use Illuminate\Support\Facades\Route;

Route::get('/', fn () => redirect()->route('players.index'))->name('home');
Route::resource("players", App\Http\Controllers\PlayerController::class)->only('index');
Route::get("cards/",[App\Http\Controllers\CardController::class, "index"])->name("cards.index");
Route::get("cards/player/{player}", [App\Http\Controllers\CardController::class, "card_list"])->name("cards.player");
Route::get("cards/cardset/{cardSet}", [App\Http\Controllers\CardController::class, "card_list_sets"])->name("cards.cardset");
Route::get('cardsets/', [App\Http\Controllers\CardSetController::class, 'index'])->name('cardsets.index');

Route::fallback(fn () => view('404'))->name('404');

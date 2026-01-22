<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CardSet;
use App\Models\Card;
use App\Models\Player;

class CardController extends Controller
{
    public function index() {
        $cards = Card::latest()->take(25)->get();
        return view('cards.index', ['cards' => $cards, 'title' => 'All Cards']);
    }

    public function card_list(Player $player)
    {
        return view(
            'cards.card_list',
            [
                'cards' => Card::where('player_id', $player->id)->get()
                    ->sortBy('card_num')
                    ->sortBy('cardSet.card_set_name')
                    ->sortBy('cardSet.year'),
                'title' => "$player->first_name $player->last_name Cards"
            ]
        );
    }

    public function card_list_sets(CardSet $cardSet)
    {
        return view(
            'cards.card_list_sets',
            [
                'cards' => Card::where('card_set_id', $cardSet->id)->get()
                    ->sortBy('card_num')
                    ->sortBy('cardSet.card_set_name')
                    ->sortBy('cardSet.year'),
                'title' => "$cardSet->year $cardSet->card_set_name Cards"
            ]
        );
    }

    public function create(Request $request)
    {
        return view("cards.create", [
            "players" => Player::all()
        ]);
    }

    public function store(Request $request)
    {
        //
    }

    public function update(Request $request, Player $player)
    {
        //
    }

}

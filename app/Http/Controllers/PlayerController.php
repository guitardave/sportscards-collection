<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Player;
use Illuminate\Support\Facades\Gate;

class PlayerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $players = Player::all()->sortBy('last_name');
        return view("players.index", ["players" => $players]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        Gate::authorize('create', Player::class);
        return view("players.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
        ]);
        if($validated) {
            Player::create($validated);
        }
        return redirect()->route('players.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        Gate::authorize('update', Player::find($id));
        return view("players.edit");
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Player $player)
    {
        $validated = $request->validate([
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
        ]);
        if($validated) {
            $player->update($validated);
        }
        return redirect()->route('players.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $player = Player::findOrFail($id);
        if ($player->cardList->count() > 0)
            return redirect()->route('players.index')->with('error', 'Cannot delete player with cards.');
        $player->delete();
        return redirect()->route('players.index');
    }
}

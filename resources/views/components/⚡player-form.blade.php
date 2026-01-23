<?php

use App\Models\Player;
use Livewire\Attributes\Validate;
use Livewire\Component;

new class extends Component {

    #[Validate('required|min:2|max:255')]
    public $first_name;

    #[Validate('required|min:2|max:255')]
    public $last_name;

    public function checkPlayer() {
        return Player::where('first_name', $this->first_name)->where('last_name', $this->last_name)->exists();
    }

    public function createPlayer()
    {
        $this->validate();
        if(!$this->checkPlayer()) {
            Player::create([
                'first_name' => $this->first_name,
                'last_name' => $this->last_name
            ]);
            $this->dispatch('createPlayer');
        }
    }

    public function render() {
        return view('components.⚡player-form');
    }
};
?>

<div>
    <form class="bg-slate-700 p-6 border border-gray-200">
        <div class="flex gap-4 items-center">
            <div class="flex-col">
                <label for="first_name">First Name</label>
                <input type="text" class="py-2 px-1 font-medium rounded-md border border-gray-200" wire:model.live="first_name">
                @error('first_name')
                    <div class="mt-2 mb-4">
                        <span class="text-red-400 text-xs mt-4">{{ $message }}</span>
                    </div>
                @enderror
            </div>
            <div class="flex-col">
                <label for="last_name">Last Name</label>
                <input type="text" class="py-2 px-1 rounded-md border border-gray-200" wire:model.live="last_name">
                @error('last_name')
                    <div class="mt-2 mb-4">
                        <span class="text-red-400 text-xs mt-4">{{ $message }}</span>
                    </div>
                @enderror
            </div>
        </div>
        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-6" wire:click.prevent="createPlayer">Add Player</button>
    </form>
</div>

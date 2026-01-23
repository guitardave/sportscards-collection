<?php

use App\Models\CardSet;
use Livewire\Attributes\Validate;
use Livewire\Component;

new class extends Component {

    #[Validate('required|min_digits:4|max_digits:4')]
    public int $year;

    #[Validate('required|min:3|max:255')]
    public string $card_set_name;

    public string $sport = 'Baseball';

    public function createCardSet()
    {
        $this->validate();
        if (!CardSet::where('year', $this->year)->where('card_set_name', $this->card_set_name)->where('sport', $this->sport)->exists()) {
            CardSet::create([
                'year' => $this->year,
                'card_set_name' => $this->card_set_name,
                'sport' => $this->sport
            ]);
            $this->dispatch('createCardSet');
        }
    }

    public function render()
    {
        return view('components.⚡card-set-form');
    }
};
?>

<div>
    <form class="bg-slate-700 p-6 border border-gray-200">
        @csrf
        <div class="flex gap-4 items-center">
            <div class="flex-col">
                <label for="year">Year</label>
                <input class="py-2 px-1 font-medium rounded-md border border-gray-200" type="number" name="year"
                       placeholder="{{ date('Y') }}" wire:model="year">
                @error('year')
                <div class="mt-2 mb-4">
                    <span class="text-red-400 text-xs mt-4">{{ $message }}</span>
                </div>
                @enderror
            </div>
            <div class="flex-col">
                <label for="card_set_name">Card Set Name</label>
                <input class="py-2 px-1 font-medium rounded-md border border-gray-200" type="text" name="card_set_name"
                       placeholder="Card Set Name" wire:model="card_set_name">
                @error('card_set_name')
                <div class="mt-2 mb-4">
                    <span class="text-red-400 text-xs mt-4">{{ $message }}</span>
                </div>
                @enderror
            </div>
        </div>
        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-6"
                wire:click.prevent="createCardSet">Create Card Set
        </button>
    </form>
</div>

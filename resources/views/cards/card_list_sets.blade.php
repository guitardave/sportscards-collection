<x-app>
    <h1 class="text-2xl font-bold mb-4">{{ $title ?? 'Cards'}}</h1>

    <table class="min-w-full bg-slate-700 border border-gray-200 px-40 mb-10">
        <thead>
            <tr>
                <th class="py-2 px-4 border-b border-gray-200 text-left">Player</th>
                <th class="py-2 px-4 border-b border-gray-200 text-left">Subset/Info</th>
                <th class="py-2 px-4 border-b border-gray-200 text-left">Card Number</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($cards as $card)
                <tr>
                    <td class="py-2 px-4 border-b border-gray-200">
                        <a class="hover:underline" href="{{ route('cards.player', $card->player) }}">{{ $card->player->first_name }} {{ $card->player->last_name }}</a>
                    </td>
                    <td class="py-2 px-4 border-b border-gray-200">
                        {{ $card->subset_info }}
                    </td>
                    <td class="py-2 px-4 border-b border-gray-200">
                        {{ $card->card_num }}
                    </td>
                </tr>
            @empty
                <tr>
                    <td class="py-2 px-4 border-b border-gray-200 text-center" colspan="3">
                        No cards found for this set.
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>
</x-app>

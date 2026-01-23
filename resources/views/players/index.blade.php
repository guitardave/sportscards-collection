<x-app>
    <h1 class="text-2xl font-bold mb-4">Players</h1>

    <table class="min-w-full bg-slate-700 border border-gray-200">
        <thead>
            <tr>
                <th class="py-2 px-4 border-b border-gray-200 text-left">Name</th>
                <th class="py-2 px-4 border-b border-gray-200 text-left">Card Count</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($players as $player)
                <tr>
                    <td class="py-2 px-4 border-b border-gray-200">
                        <a href="{{ route('cards.player', $player) }}" class="hover:underline">
                            {{ $player->first_name }} {{ $player->last_name }}
                        </a>
                    </td>
                    <td class="py-2 px-4 border-b border-gray-200">
                        {{ $player->cardList->count() }}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</x-app>

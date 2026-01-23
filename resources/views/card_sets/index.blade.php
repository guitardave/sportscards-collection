<x-app>
    <h1 class="text-2xl font-bold mb-4">Card Sets</h1>

    <table class="min-w-full bg-slate-700 border border-gray-200 px-40 mb-10">
        <thead>
            <tr>
                <th class="py-2 px-4 border-b border-gray-200 text-left">Card Set Name</th>
                <th class="py-2 px-4 border-b border-gray-200 text-left">Card Count</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cardSets as $cardSet)
                <tr>
                    <td class="py-2 px-4 border-b border-gray-200">
                        <a href="{{ route('cards.cardset', ['cardSet' => $cardSet]) }}" class="hover:underline">{{ $cardSet->year }} {{ $cardSet->card_set_name }}</a>
                    </td>
                    <td class="py-2 px-4 border-b border-gray-200">
                        {{ $cardSet->cards->count() }}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</x-app>

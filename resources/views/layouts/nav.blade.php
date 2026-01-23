<nav class="mb-8 flex justify-between text-lg font-medium bg-slate-700 px-8 py-4">
    <ul class="flex justify-between space-x-8 font-semibold text-gray-100">
        <li><a class="hover:underline" href="{{ route('cards.index') }}">Most Recent Cards</a></li>
        <li><a class="hover:underline" href="{{ route('cardsets.index') }}">Card Sets</a></li>
        <li><a class="hover:underline" href="{{ route('players.index') }}">Players</a></li>
    </ul>
    <ul class="flex space-x-8 font-semibold text-gray-100">
        <li>
            @if (auth()->check())
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button class="hover:underline"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0 0 13.5 3h-6a2.25 2.25 0 0 0-2.25 2.25v13.5A2.25 2.25 0 0 0 7.5 21h6a2.25 2.25 0 0 0 2.25-2.25V15m3 0 3-3m0 0-3-3m3 3H9" />
                        </svg>
                    </button>
                </form>
            @else
                <a href="{{ route('login.index') }}" class="hover:underline"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 9V5.25A2.25 2.25 0 0 1 10.5 3h6a2.25 2.25 0 0 1 2.25 2.25v13.5A2.25 2.25 0 0 1 16.5 21h-6a2.25 2.25 0 0 1-2.25-2.25V15M12 9l3 3m0 0-3 3m3-3H2.25" />
                    </svg>
                </a>
            @endif
        </li>
    </ul>
</nav>

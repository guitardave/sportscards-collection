<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'Sports Cards Collection' }}</title>
    <script src="//unpkg.com/alpinejs" defer></script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @livewireStyles
</head>
<body class="justify-center bg-slate-900 text-slate-100">
<nav class="mb-8 flex justify-between text-lg font-medium bg-gray-400 px-8 py-4">
    <ul class="flex justify-between space-x-8 font-semibold text-gray-900">
        <li><a class="hover:underline" href="{{ route('cards.index') }}">Most Recent Cards</a></li>
        <li><a class="hover:underline" href="{{ route('cardsets.index') }}">Card Sets</a></li>
        <li><a class="hover:underline" href="{{ route('players.index') }}">Players</a></li>
    </ul>
    <ul class="flex space-x-8 font-semibold text-gray-900">
        <li>Login</li>
    </ul>
</nav>
<div class="container mx-auto px-8">
    {{ $slot }}
</div>


@livewireScripts
</body>
</html>

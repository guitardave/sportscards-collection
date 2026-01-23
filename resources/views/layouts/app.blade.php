<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'Sports Cards Collection' }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @livewireStyles
</head>
<body class="justify-center bg-slate-900 text-slate-100">

@include('layouts.nav')

<div class="container mx-auto px-8">
    @include('partials.alerts')
    {{ $slot }}
</div>
<footer class="text-center mt-8 mb-8 text-xs text-gray-500">
    &copy; {{ date('Y') }} DC Sports Cards Collection. All rights reserved.
</footer>

@livewireScripts
</body>
</html>

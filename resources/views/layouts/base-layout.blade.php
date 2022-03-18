<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Article')</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Get Livewire Styles -->
    @livewireStyles
</head>
<body>
<div class="font-sans text-gray-900 antialiased">
    {{ $slot }}
</div>
<footer>
    © 2021 -
    <script>document.write(new Date().getFullYear());</script>
    Copyright:
    <a class="text-gray-800" href="https://3gear.net/">{{ config('app.name') }}</a>
</footer>
<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>

<!-- Get Livewire Scripts -->
@livewireScripts
</body>
</html>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<x-partials.head/>

<body>

<x-partials.nav/>

<div class="font-sans text-gray-900 antialiased">
    {{ $slot }}
</div>

<x-partials.footer/>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>

<!-- Get Livewire Scripts -->
@livewireScripts
</body>
</html>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="shortcut icon" href="{{ asset('HRCCClogo.png') }}" type="image/x-icon">
        <title>{{ config('app.name', 'Christ Community Church - Loving God, Loving People') }}</title>
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="text-gray-900 antialiased">
        @include('web.partials.psa')
        @include('web.partials.navbar', ['topLevelMenuItems' => $topLevelMenuItems])
        @yield('content')
        @include('web.partials.footer')

        @livewireScripts()
    </body>
</html>

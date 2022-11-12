<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <x-html-head/>

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Scripts -->
        @vite(['resources/js/app.js'])
    </head>
    <body>
        <div class="font-sans antialiased text-gray-900">
            {{ $slot }}
        </div>
        @include('layouts.common')
    </body>
</html>

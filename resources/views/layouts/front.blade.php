<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <x-html-head/>

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;900&display=swap" rel="stylesheet">

        <!-- Scripts -->
        @vite(['resources/js/app.js'])
    </head>
    <body>
        <div id="main-content" class="font-sans antialiased text-gray-900" style="display: none">
            {{ $slot }}
        </div>
        <x-front-skeleton/>
        @include('layouts.common')
    </body>
</html>

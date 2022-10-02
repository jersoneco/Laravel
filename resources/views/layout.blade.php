<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ url('css/site.css') }}">
    </head>
    <body>
        <div class="relative p-4">
            <nav>
                <a href="{{ route('home.index') }}">Home</a>
                <a href="{{ route('home.about') }}">About</a>
                <a href="{{ route('home.contact') }}">Contact</a>
            </nav>
        </div>
        <div class="relative flex items-top justify-center">
            @yield('content')
        </div>
            @yield('script')
    </body>
</html>

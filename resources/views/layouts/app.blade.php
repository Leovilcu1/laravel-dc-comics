<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Comics</title>

        {{-- Includiamo gli assets con la direttiva @vite --}}
        @vite('resources/js/app.js')
    </head>
    <body class="text-center">
        <header>
            <h1>HEADER</h1>
        <main>
            @yield('content')
        </main>
        <footer>
            <h1>FOOTER</h1>
        </footer>
    </body>
</html>
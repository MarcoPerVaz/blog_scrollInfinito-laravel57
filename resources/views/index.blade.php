<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        {{-- CSS --}}
        <link rel="stylesheet" href="{{ asset( 'css/app.css' ) }}">    

        <title>Blog | Scroll Infinito</title>

    </head>
    <body>

        <div id="app">
            {{-- Componente --}}
            <posts></posts>
        </div>

        {{-- Scripts --}}
        <script src="{{ asset( 'js/app.js' ) }}"></script>        

    </body>
</html>

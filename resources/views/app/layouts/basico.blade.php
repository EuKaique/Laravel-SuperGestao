<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Super Gestão - @yield('titulo')</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="{{ asset('css/estilo_basico.css') }}">
    </head>

    <body>
        @include('app.layouts._partials.topo')
        @yield('conteudo')
        <script src="{{ asset('js/main.js') }}" ></script>
    </body>
</html>

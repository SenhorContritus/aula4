<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>
        </style>
    </head>
    <body class="antialiased">
        <h3>Novo Usuário</h3>
        <form action="/contato" method="post">
            {{ csrf_field() }}
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="">
            <label for="celular">Celular:</label>
            <input type="text" name="celular" id="">
            <input type="submit" value="ok">
        </form>
    </body>
</html>

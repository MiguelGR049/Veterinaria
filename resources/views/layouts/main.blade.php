<!doctype html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{ asset('css/b5/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font_awesome/all.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">

    <!-- Scripts -->
    <script src="{{ asset('js/jquery/jquery.js') }}"></script>
    <script src="{{ asset('js/font_awesome/all.js') }}"></script>
    <script src="{{ asset('js/b5/popper.js') }}"></script>
    <script src="{{ asset('js/b5/bootstrap.js') }}"></script>

    <title>{{ $titulo_pagina }}</title>
</head>

<body>

    @yield('contenido')

    <script src="{{ asset('js/main.js') }}"></script>

</body>

</html>
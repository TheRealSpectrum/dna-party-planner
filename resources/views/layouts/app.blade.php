<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Party Planner - @yield("title")</title>

    {{-- Favicon --}}
    <link rel="shortcut icon" type="image/jpg" href="{{ asset("img/logo.svg") }}"/>
    
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/146730865b.js" crossorigin="anonymous"></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>
<div class="flex flex-col min-h-screen">
<header>
    @include("layouts.header")
</header>

<body class="antialiased flex-grow">
    @yield("content")
</body>

<footer>
    @include("layouts.footer")
</footer>
</div>
</html>

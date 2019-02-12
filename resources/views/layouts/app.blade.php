<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Robotikk.org - @yield('title')</title>

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="img/logo.png">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/robotikk.css') }}" rel="stylesheet">
    @yield('styles')
</head>
<body class="bg-dark-main">
    <div id="app">
        <navigation route="{home:{{ route('home') }}}"></navigation>

    </div>
</body>
</html>

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
        <nav class="navbar navbar-expand-md bg-dark-second">
            <a class="navbar-brand theme-main-text" href="{{ route('home') }}">
                <img src="img/logo.png" class="d-inline-block align-top" alt="" width="30" height="30">
                Robotikk.org
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <!-- Left nav -->
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link theme-main-text" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="navbar-nav mr-auto">
                        <a class="nav-link theme-main-text" href="{{ route('discord') }}">Discord</a>
                    </li>
                    <li class="navbar-nav mr-auto">
                        <a class="nav-link theme-main-text" href="{{ route('github') }}">GitHub</a>
                    </li>
                </ul>
                <!-- Right nav -->
                <ul class="navbar-nav ml-auto">
                    @guest
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">Register</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('api.logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('api.logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                    <li class="navbar-nav mr-auto">
                        <a class="nav-link theme-main-text" href="{{ route('login') }}">Log in</a>
                    </li>
                </ul>
                <!-- Search -->
                <form class="form-inline mt-2 mt-md-0">
                    <input class="form-control mr-sm-2 btn-outline-theme bg-dark-main" type="text" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-theme bg-second my-2 bg-dark-main my-sm-0" type="submit">Go</button>
                </form>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>

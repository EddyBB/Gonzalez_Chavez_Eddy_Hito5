<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Ideal Cruceros') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm ms-auto">
            <div class="container">
                <a href="/"><img class="float-start" src="../../img/header/crucero.png" title="Ideal Cruceros" alt="" style="width:40px;height:40px;"></a>
                <a class="navbar-brand" href="/">Ideal Cruceros</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
        </nav>

        <main class="py-4 bg-image d-flex justify-content-center align-items-center" style="background-image: url('/img/login/login-background.jpg');
            height: 100vh; width: auto; background-repeat: no-repeat; background-size: 100%;">
            @yield('content')
        </main>
    </div>
</body>
</html>
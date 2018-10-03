<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Stichting Star') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('../css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('../css/auth.css') }}" rel="stylesheet">
    <link href="{{ asset('../css/bootstrap.css') }}" rel="stylesheet">
</head>
<body id="login_background">
<div class="container">
    <nav class="navbar navbar-expand-md navbar-dark navbar-laravel ">

        <button class="navbar-toggler" type="button" data-toggle="collapse"
                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
                <a class="navbar-brand text-dark" href="{{ url('/') }}">
                    {{ config('app.name', 'Stichting Star') }}
                </a>
            </ul>
            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto justify-content-end">
                <!-- Authentication Links -->
                @guest
                    <li><a class="nav-link text-dark" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                    <li><a class="nav-link text-dark" href="{{ route('register') }}">{{ __('Register') }}</a></li>
                @endguest

            </ul>
        </div>
    </nav>

</div>

<main class="py-4">
    @yield('content')
</main>
</div>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <meta name="description" content="StichtingStar - Home"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'StichtingStar') | StichtingStar</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('../images/favicon.ico') }}"/>

    @section('styles')
        <link rel="stylesheet" type="text/css" href="{{asset("../css/StichtingStarCss - Main.css")}}">
        <link rel="stylesheet" type="text/css" href="{{asset("../css/bootstrap.css")}}">
    @show

</head>
<body>
    <header>
        <section class="container BlocksDimension">
            <img src=" {{ asset('../images/logo.png') }}" id="logo"/>
            <nav class="navbar navbar-expand-sm navbar-light">
                <div class="navbar-collapse collapse justify-content-center" id="navbar2">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="{{url('/')}}">Home <span class="sr-only">Home</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/pagina/feitenencijfers') }}">Feiten &
                                Cijfers</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/pagina/toezichtenafspraken') }}">Toezicht &
                                Afspraken</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/pagina/Samenwerkingsverbanden') }}">Samenwerkingsverbanden</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/pagina/Contact') }}">Contact</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </section>
    </header>
    @yield('content')


    @extends ('layouts.footer')

</body>
</html>


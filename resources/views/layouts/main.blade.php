<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <meta name="description" content="StichtingStar - Home"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Starfish') | Starfish</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('../images/favicon.ico') }}"/>

    @section('styles')
        <link rel="stylesheet" href="{{asset("../open-iconic-master/font/css/open-iconic-bootstrap.css")}}">
        <link rel="stylesheet" type="text/css" href="{{asset("../css/starfish.css")}}">
        <link rel="stylesheet" type="text/css" href="{{asset("../css/bootstrap.css")}}">
    @show

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
<header>
    <section class="container">

    </section>

</header>
@yield('content')
<script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>


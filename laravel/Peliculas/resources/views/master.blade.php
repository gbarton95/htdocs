<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/personal.css') }}">
    <title>@yield('main_title')</title>
</head>

<body>
    <div class="principal-izq">
        <img id="free" src="{{ asset('images/itsfree_header.gif') }}">
        @include('nav')
    </div>

    <div class="principal-dch">
        @yield('content')
    </div>
</body>

</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Veamos</title>
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
</head>
<body>
   
    @yield('cabecera')

    @include("layouts.navegadorBoot")

    @yield('infoGeneral')
 
    @yield('pie')
    <p>Esto es un pie general para todas las páginas</p>


</body>
</html>
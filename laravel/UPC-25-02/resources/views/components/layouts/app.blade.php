<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    @vite(['resources/js/app.js'])
    <title>{{ $title ?? 'daw2' }}</title>
</head>
<x-layouts.navigate />
<body class="d-flex flex-column min-vh-100">
    {{-- se tiene que poner el nombre de la carpeta y del archivo
         en la etiqueta para poder mostrar el menu
    --}}


    <hr size="8px" color="black">
    {{-- content --}}
    {{ $slot }}


    <!-- <footer class="bg-dark text-light py-3 mt-auto">
        <div class="container text-center">
        ©2024 Slime Dungeon
        </div>
    </footer> -->

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

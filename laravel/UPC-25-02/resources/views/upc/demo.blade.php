<x-layouts.app>
    <x-slot name="title">
        Slime Dungeon
    </x-slot>
    <style>
        body {
            background-color: #1C2135;
        }
        .banner {
            background-image: url('ruta/de/la/imagen.jpg'); /* Reemplaza 'ruta/de/la/imagen.jpg' con la ruta de la imagen de la pancarta */
            background-size: cover;
            background-position: center;
            height: 350px; /* Altura deseada de la pancarta */
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            text-align: center;
            font-size: 2rem;
        }
    </style>
    <br>
    <h1 class="text-center text-white"><b>Demo Slime Dungeon</b></h1>
    <br>
    <img src="./images/5.jpg" style="width: 400px; height: 300px; display: block; margin: 0 auto;">

    <div class="banner">
        <div>
            <h2>Welcome to Slime Dungeon!</h2>
            <p>Discover a world of adventure and challenge.</p>
        </div>
    </div>
</x-layouts.app>

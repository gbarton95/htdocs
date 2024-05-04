<x-layouts.app>
    <x-slot name="title">
        Slime Dungeon
    </x-slot>
    <style>
        body {
            background-color: #1C2135;
        }
        .card-img-top {
            height: 300px; /* Establece la altura deseada */
            object-fit: cover; /* Escala la imagen para que llene el contenedor manteniendo la relación de aspecto */
        }
    </style>
    <br>
    <h1 class="text-center text-white"><b>Web developers</b></h1>
    <br>
    <br>

    <div class="container">
        <div class="row">
            <div class="col-md-3 mb-4">
                <div class="card">
                    <img src="./images/3.jpg" class="card-img-top img-fluid">
                    <div class="card-body">
                        <h5 class="card-title">Eloy Gonzalez</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card">
                    <img src="./images/4.jpeg" class="card-img-top img-fluid">
                    <div class="card-body">
                        <h5 class="card-title">Dario Gracia</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card">
                    <img src="./images/2.jpeg" class="card-img-top img-fluid">
                    <div class="card-body">
                        <h5 class="card-title">Pierre Godoy</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card">
                    <img src="./images/1.jpeg" class="card-img-top img-fluid">
                    <div class="card-body">
                        <h5 class="card-title">Joel Comes</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layouts.app>

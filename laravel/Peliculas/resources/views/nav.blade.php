<div class="content-izq">
    <h2 class="txt-centrado"><a href="{{ route('index') }}">PELICULAS ONLINE</a></h2>
    <div class="cont-botones cont-botones1">
        <a href="{{ route('new') }}" class="boton">Últimas novedades</a>
        <a href="{{ route('estrenos') }}" class="boton">Próximos estrenos</a>
    </div>

    <h2>titulo:</h2>
    <div class="buscador">
        <!--<form action=""></form>-->
        <input type="text"><input type="image" class="lupa" src="{{ asset('images/lupa.png') }}">
    </div>
    <h2>director:</h2>
    <div class="buscador">
        <input type="text"><input type="image" class="lupa" src="{{ asset('images/lupa.png') }}">
    </div>
    <h2>género:</h2>
    <form action="{{ route('genero') }}" method="GET" class="cont-botones">
        <button type="submit" name="genero" value="Accion">Acción</button>
        <button type="submit" name="genero" value="Aventura">Aventura</button>
        <button type="submit" name="genero" value="CienciaFiccion">Ciencia Ficción</button>
        <button type="submit" name="genero" value="Comedia">Comedia</button>
        <button type="submit" name="genero" value="Drama">Drama</button>
        <button type="submit" name="genero" value="Historia">Historia</button>
        <button type="submit" name="genero" value="Fantasia">Fantasía</button>
        <button type="submit" name="genero" value="Animacion">Animación</button>
        <button type="submit" name="genero" value="Romance">Romance</button>
        <button type="submit" name="genero" value="Terror">Terror</button>
    </form>
</div>
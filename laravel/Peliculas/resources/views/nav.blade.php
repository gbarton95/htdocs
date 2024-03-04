<div class="content-izq">
    <h2 class="txt-centrado"><a href="{{ route('index') }}">PELICULAS ONLINE</a></h2>
    <div class="cont-botones cont-botones1">
        <a href="{{ route('new') }}" class="boton">Últimas novedades</a>
        <a href="{{ route('estrenos') }}" class="boton">Próximos estrenos</a>
    </div>

    <h2>titulo:</h2>
    <form action="{{ route('porTitulo') }}" class="buscador">
        <input type="text" name="titulillo"><input type="image" class="lupa" src="{{ asset('images/lupa.png') }}">
        <!--Un input type="image" actúa como botón de envío por defecto cuando se coloca dentro de un formulario!!-->
    </form>

    <h2>director:</h2>
    <form action="{{ route('porDirector') }}" class="buscador">
        <input type="text" name="directorcillo"><input type="image" class="lupa" src="{{ asset('images/lupa.png') }}">
    </form>

    <h2>género:</h2>
    <form action="{{ route('genero') }}" method="GET" class="cont-botones">
        <button type="submit" name="genero" value="1">Acción</button>
        <button type="submit" name="genero" value="2">Animación</button>
        <button type="submit" name="genero" value="3">Aventura</button>
        <button type="submit" name="genero" value="4">Ciencia Ficción</button>
        <button type="submit" name="genero" value="5">Comedia</button>
        <button type="submit" name="genero" value="6">Drama</button>
        <button type="submit" name="genero" value="7">Fantasía</button>
        <button type="submit" name="genero" value="8">Historia</button>
        <button type="submit" name="genero" value="9">Romance</button>
        <button type="submit" name="genero" value="10">Terror</button>
    </form>
</div>

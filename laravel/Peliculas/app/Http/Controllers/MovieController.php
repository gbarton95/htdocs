<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;
use App\Models\Movie;
use Illuminate\Support\Facades\DB;

class MovieController extends Controller
{
    public function index()
    {
        $generos = Genre::all();
        $movies = Movie::all();
        $titulo = "CATÁLOGO DE PELÍCULAS";
        return view('index', ['Movies'=>$movies, 'Generos'=>$generos, 'titulo'=>$titulo]);
    }


    /*Para tener todo lo posible, necesitas chequear las relaciones del modelo*/
    public function show($id_peli)
    {
        /*Primero encuentra la peli por el id del parámetro y luego...*/
        $peli = Movie::find($id_peli);
        /*Saca todo el resto de la ***información del modelo*** de esa peli para pasarla a la vista:*/
        $director = $peli->director;
        $lead_Actor = $peli->leadActor;
        $writers = $peli->writers;
        $genre = $peli->genre;        

        /*Aquí queda poner primero la ***vista*** a la que queremos que nos lleve
        y los datos que le pasamos a la vista en un array asociativo:*/
        return view('pelicula', ['peli'=>$peli, 'dire'=>$director, 'prota'=>$lead_Actor, 'genero'=>$genre, 
        'guionistas'=>$writers]); /*Cuidadín que los guionistas son un array*/
    }

    public function novedades()
    {
        /* El array de novedades toma de la tabla 'movies' aquellas que cumplan con la sentencia SQL y las cojo con get 
            Puedo utilizar varias condiciones */
        $novedades = DB::table('movies')
                          ->where('release_date', '>', '2024-01-01')
                          ->where('release_date', '<', date('Y-m-d')) /* Mira el uso de la fecha actual y el formato */
                          ->get();
        $titulo = "ÚLTIMAS NOVEDADES";
        return view('index', ['Movies'=>$novedades, 'titulo'=>$titulo]);
    }

    public function estrenos()
    {
        $estrenos = DB::table('movies')
                          ->where('release_date', '>', date('Y-m-d')) 
                          ->get();
        $titulo = "PRÓXIMOS ESTRENOS";
        return view('index', ['Movies'=>$estrenos, 'titulo'=>$titulo]);
    }

    public function genero(Request $submiteado)
    {
        $idGenero = $submiteado->genero;
        $generoPelis = DB::table('movies')
                        ->where('genre_id', 'LIKE', $idGenero)
                        ->get();
        $titulo = "CATALOGO DE PELÍCULAS"; //Si en vez del id hubiera pasado el nombre por request, podría haberlo incluido en el título
        return view('index', ['Movies'=>$generoPelis, 'titulo'=>$titulo]);
    }

    public function titulo(Request $busqueda)
    {
        $title = $busqueda->input('titulillo'); /* Sacamos del request el input a través del name */
        $listaPeliculas = DB::table('movies') /* Listado de peliculas con el nombre parecido al titulillo */
                          ->where('title', 'LIKE', '%'.$title.'%')
                          ->get();
        $titulo = "Búsqueda: " . $title ;
        return view('index', ['Movies'=>$listaPeliculas, 'titulo'=>$titulo]);
    }

    public function director(Request $busqueda)
    {
        /* Aquí tenemos la complicación de que el director no está en la tabla movies, sino en directors.
            Obtendremos los ids que coincidan y los buscaremos en el listado de peliculas luego. 
            También podríamos hacer un join y sacar de una sola tabla las peliculas que tengan directores
            cuyo nombre o apellido coincidan. */
        $director = $busqueda->input('directorcillo');
        $posiblesdirectores = DB::table('directors')
                          ->where('name', 'LIKE', '%'.$director.'%')
                          ->orWhere('surname', 'LIKE', '%'.$director.'%')
                          ->pluck('id'); /* PLUCK para extraer una lista de valores de una única columna  */

        $listaPeliculas = DB::table('movies')
        ->whereIn('director_id', $posiblesdirectores) /* donde en director_id pueda haber cualquiera de los $posiblesdirectores */
        ->get();
        $titulo = "Búsqueda: " . $director ;
        return view('index', ['Movies'=>$listaPeliculas, 'titulo'=>$titulo]);

        /* También podría haber hecho:
        
        Si es muy lioso, utiliza el db:raw
        $listaPeliculas = DB::raw('sentencia-SQL');

        */
    }

}

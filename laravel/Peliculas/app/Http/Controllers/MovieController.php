<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;
use Illuminate\Support\Facades\DB;

class MovieController extends Controller
{
    public function index()
    {
        $movies = Movie::all();
        return view('index', ['Movies'=>$movies]);
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
        return view('index', ['Movies'=>$novedades]);
    }

    public function estrenos()
    {
        $estrenos = DB::table('movies')
                          ->where('release_date', '>', date('Y-m-d')) 
                          ->get();
        return view('index', ['Movies'=>$estrenos]);
    }

    public function titulo($busqueda)
    {
        $title = '%' . $busqueda . '%';
        $listaPeliculas = DB::table('movies')
                          ->where('title', 'LIKE', $title)
                          ->get();
        return view('index', ['listaPeliculas'=>$listaPeliculas]);
    }

}

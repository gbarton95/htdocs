<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EjemploController extends Controller
{
    public function inicio($id) {
        return "Estás en el inicio del sitio y el valor pasado por parámetro es " . $id;
    }

    public function primeraPagina() {
        return view ("primeraPagina");
    }
}

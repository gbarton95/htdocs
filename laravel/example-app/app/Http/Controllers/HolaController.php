<?php

namespace App\Http\Controllers;

class HolaController extends Controller
{
    // Controlador
    public function __invoke()
    {
        return "Hola, señores";
    }

    public function show($nombre) {
        $data['nombre'] = $nombre;
        return view('hola', $data);
    }

}

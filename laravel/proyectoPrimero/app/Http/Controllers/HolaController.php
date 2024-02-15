<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HolaController extends Controller
{
    public function __invoke(){
        return "Hola, gentuza";
    }

    public function show($nombre){
        $data['nombre'] = $nombre;
        return view('hola', $data);
    }

    public function store(Request $r) {
        $email = $r->get("email");
    }

    public function store2() {
        $email = request("email");
    }
}
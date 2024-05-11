<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Sesion;
use App\Models\Perro;
use Illuminate\Support\Facades\Session;

class SesionController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $sesiones = Sesion::where('user_id', $user->id)
            ->orderBy('inicio')    
            ->get();
        
        return view('sesion.index', ['sesiones' => $sesiones]);
    }

    public function createSesion($id)
    {
        $perro = Perro::find($id);
        return view('sesion.create', ['perro'=>$perro]);
    }

    public function store(Request $request)
    {
        $sesion = new Sesion();
        $user = auth()->user()->id;

        $sesion->user_id = $user;
        $sesion->perro_id = $request->perro_id;
        $sesion->asunto = $request->asunto;
        $sesion->ubicacion = $request->ubicacion;
        $sesion->inicio = $request->inicio;
        $sesion->duracion = $request->duracion;
        $sesion->done = false;

        $sesion->save();

        return redirect()->route('sesion.index')->with('success', 'La sesión ha sido creada.');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

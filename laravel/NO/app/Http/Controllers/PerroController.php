<?php

namespace App\Http\Controllers;
use App\Models\Perro;
use App\Models\Propietario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PerroController extends Controller
{
    public function index()
    {
        $perros = Perro::all();
        return view('perros', ['perros' => $perros]);
    }

    public function create(Request $request)
    {
        $perro = Perro::create([
            'nombre' => $request->nombre,
            'raza' => $request->raza,
            'edad' => $request->edad,
            'propietario_id' => $request->propietario_id,
        ]);
    
        // Redirigir o devolver respuesta
        return redirect()->route('perros.index')->with('success', 'Perro creado exitosamente');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
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

    public function search(Request $word){
        $perros = DB::table('perros')
                ->where('nombre', 'LIKE', '%'.$word.'%')
                // ->join('propietarios', 'perros.propietario_id', '=', 'propietarios.id')
                // ->select('perros.*', 'propietarios.nombre')
                // ->where('perros.nombre', 'LIKE', '%'.$word.'%')
                // ->orWhere('perros.raza', 'LIKE', '%'.$word.'%')
                // ->orWhere('propietarios.nombre', 'LIKE', '%'.$word.'%')
                // ->orWhere('propietarios.telefono', 'LIKE', '%'.$word.'%')
                ->get();
        return view('perros', ['perros'=>$perros]);
    }

    public function detalle()
    {
       // $perro = perro con el id del request

        return view('perrosdetalle');
    }
}

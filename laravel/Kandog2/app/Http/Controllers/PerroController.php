<?php

namespace App\Http\Controllers;
use App\Models\Perro;
use App\Models\Propietario;
use Illuminate\Http\Request;


class PerroController extends Controller
{
    
    public function index()
    {
        $perros = Perro::all();
        return view('perro.index', ['perros' => $perros]);
    }

   
    public function create()
    {
        //Lleva a la vista del formulario
        return view('perro.create');
    }

    
    public function store(Request $request)
    {
        //Aquí introducimos los valores del formulario de create
        Perro::create($request->all());
        return "El perro se ha añadido a tu lista.";
    }

    
    public function show(string $id)
    {
        $perro = Perro::find($id);

        $propietario = $perro->propietario_id;
        $nombre = $perro->nombre;
        $edad = $perro->edad;
        $sexo = $perro->sexo;
        $raza = $perro->raza;
        $peso = $perro->peso;
        $PPP = $perro->PPP;
        $anotaciones = $perro->anotaciones;

        return view('perro.detalle', ['propietario'=>$propietario, 'nombre' => $nombre, 'edad' => $edad, 'sexo' => $sexo, 'raza' => $raza, 'peso' => $peso, 'PPP' => $PPP, 'anotaciones' => $anotaciones]);
    }

    
    public function edit($id)
    {
        $perro = Perro::find($id);
        $propietarios = Propietario::all();

        return view('perro.edit', compact('perro', 'propietarios'));
    }

    
    public function update(Request $request, $id)
    {
        $perro = Perro::find($id);
        
        $perro->nombre = $request->nombre;
        $perro->edad = $request->edad;
        $perro->sexo = $request->sexo;
        $perro->raza = $request->raza;
        $perro->peso = $request->peso;
        $perro->PPP = $request->PPP;
        $perro->anotaciones = $request->anotaciones;

        $perro->save();


        return redirect()->route('perro.index')->with('success', 'Perro modificado con éxito.');
    }

    
    public function destroy(string $id)
    {
        $perro = Perro::find($id);
        $perro->delete();
        return redirect()->route('perro.index')->with('success', 'Perro eliminado con éxito.');
    }
}

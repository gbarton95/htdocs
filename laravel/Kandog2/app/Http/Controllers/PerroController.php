<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Perro;

class PerroController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function index()
    {
        $user = auth()->user();
        $buscar = false;
        $perros = Perro::where('user_id', $user->id)
            // ->where('active', '0')
            ->get();
        return view('perro.index', ['perros' => $perros, 'buscar'=>$buscar]);
    }

    public function search(Request $busqueda)
    {
        $buscar=true;
        $user = auth()->user();
        $userRequest = $busqueda->input('searchDog');
        $perros = DB::table('perros')
            ->where('user_id', $user->id)
            ->where(function ($query) use ($userRequest) {
                $query->where('nombre', 'LIKE', '%' . $userRequest . '%')
                    ->orWhere('telefono', 'LIKE', '%' . $userRequest . '%')
                    ->orWhere('tutor_nombre', 'LIKE', '%' . $userRequest . '%');
             })
            ->get();
        return view('perro.index', ['perros'=>$perros, 'buscar'=>$buscar]);
    }
   
    public function create()
    {
        //Lleva a la vista del formulario
        return view('perro.create');
    }
    
    public function store(Request $request)
    {
        //Aquí introducimos los valores del formulario de create
        $perro = new Perro();
        $user = auth()->user()->id;

        $perro->user_id = $user;
        $perro->nombre = $request->nombre;
        $perro->edad = $request->edad;
        $perro->sexo = $request->sexo;
        $perro->raza = $request->raza;
        $perro->peso = number_format($request->peso);
        $perro->PPP = $request->PPP;
        $perro->anotaciones = $request->anotaciones;
        $perro->tutor_nombre= $request->tutor_nombre;
        $perro->tutor_apellidos= $request->tutor_apellidos;
        $perro->telefono= $request->telefono;
        $perro->email= $request->email;
        $perro->codigo_postal= $request->codigo_postal;

        $perro->save();

        return redirect()->route('perro.index')->with('success', 'El perro se ha añadido a tu lista.');
    }

    
    public function show(string $id)
    {
        $perro = Perro::find($id);

        $nombre = $perro->nombre;
        $edad = $perro->edad;
        $sexo = $perro->sexo;
        $raza = $perro->raza;
        $peso = $perro->peso;
        $PPP = $perro->PPP;
        $anotaciones = $perro->anotaciones;
        $tutor_nombre= $perro->tutor_nombre;
        $tutor_apellidos= $perro->tutor_apellidos;
        $telefono= $perro->telefono;
        $email= $perro->email;
        $codigo_postal= $perro->codigo_postal;

        return view('perro.show', ['nombre' => $nombre, 'edad' => $edad, 'sexo' => $sexo, 'raza' => $raza, 
        'peso' => $peso, 'PPP' => $PPP, 'anotaciones' => $anotaciones, 'tutor_nombre'=> $tutor_nombre, 
        'tutor_apellidos'=>$tutor_apellidos, 'telefono'=>$telefono, 'email'=>$email, 'codigo_postal'=>$codigo_postal]);
    }

    
    public function edit(Perro $perro)
    {
        // $perro = Perro::find($id);
        return view('perro.edit', compact('perro'));
    }

    
    public function update(Request $request)
    {
        $perro = $request->input('editarPerro');
        
        $perro->nombre = $request->nombre;
        $perro->edad = $request->edad;
        $perro->sexo = $request->sexo;
        $perro->raza = $request->raza;
        $perro->peso = $request->peso;
        $perro->PPP = $request->PPP;
        $perro->anotaciones = $request->anotaciones;
        $perro->tutor_nombre= $request->tutor_nombre;
        $perro->tutor_apellidos= $request->tutor_apellidos;
        $perro->telefono= $request->telefono;
        $perro->email= $request->email;
        $perro->codigo_postal= $request->codigo_postal;
    
        $perro->save();


        return redirect()->route('perro.index')->with('success', 'Perro modificado con éxito.');
    }

    
    public function destroy(string $id)
    {
        $perro = Perro::find($id);
        $perro->delete();
        return redirect()->route('perro.index')->with('success', 'Perro eliminado con éxito.');
    }

    public function ordenarTabla(Request $request){
        $user = auth()->user();
        $buscar = false;
        $columna = $request->input('columna');
        $perros = Perro::where('user_id', $user->id)
            ->orderBy($columna)
            ->get();
        return view('perro.index', ['perros' => $perros, 'buscar'=>$buscar])->render();
    }
}

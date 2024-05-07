<?php

namespace App\Http\Controllers;
use App\Models\Perro;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PerroController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function index()
    {
        $user = auth()->user();
        $perros = Perro::where('user_id', $user->id)->get();
        return view('perro.index', ['perros' => $perros]);
    }

    public function search(Request $busqueda)
    {
        $userRequest = $busqueda->input('searchDog'); /* Sacamos del request el input a través del name */
        $perros = DB::table('perros') /* Listado de perros con que contengan algún valor como ese */
                          ->where('nombre', 'LIKE', '%'.$userRequest.'%')
                          ->orwhere('telefono', 'LIKE', '%'.$userRequest.'%')
                          ->orwhere('tutor_nombre', 'LIKE', '%'.$userRequest.'%')
                          ->get();

        return view('perro.index', ['perros'=>$perros]);
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
}

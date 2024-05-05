<?php

namespace App\Http\Controllers;

use App\Models\Evento;
use Illuminate\Http\Request;

class EventoController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function index(){
        $all_events = Evento::all();

        $events = [];

        foreach ($all_events as $event){

            $events[] = [
                'titulo' => $event->titulo,
                'tipo'=>$event->tipo,
                'start_date' => $event->start_date,
                'end_date' => $event->end_date,
                'ubicacion' => $event->ubicacion,
                'estado' => $event->estado
            ];
        }

        return view('calendar.index', ['events' => $events]);
    }
    
    public function create()
    {
        return view('calendar.create');
    }


    public function store(Request $request)
    {
        Evento::create([$request->all()]);

    }
    public function update(Request $request ,$id)
    {
        $event = Evento::find($id);
        
        $event->titulo = $request->titulo;
        $event->tipo = $request->tipo;
        $event->start_date = $request->start_date;
        $event->end_date = $request->end_date;
        $event->ubicacion = $request->ubicacion;
        $event->estado = $request->estado;

        $event->save();

        return redirect()->route('calendar.index')->with('success', 'Cita modificada con éxito.');
    }

    public function destroy($id)
    {
        $event = Evento::find($id);
        $event->delete();
        return redirect()->route('calendar.index')->with('success', 'Cita eliminada.');
    }

}

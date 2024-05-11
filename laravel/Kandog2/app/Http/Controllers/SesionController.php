<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Sesion;
use App\Models\Perro;



class SesionController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $sesiones = Sesion::where('user_id', $user->id)
            ->where('inicio')
            ->orderBy('inicio')    
            ->get();
        return view('sesion.index', ['sesiones' => $sesiones]);
    }

    public function createSesion(string $id)
    {
        $perro = Perro::find($id);
        return view('sesion.create', ['perro'=>$perro]);
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
}

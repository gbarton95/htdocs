<?php

namespace App\Http\Controllers;
use App\Models\Tournament;
use Illuminate\Http\Request;

class TournamentController extends Controller
{
    public function index() {

        $tournaments = Tournament::paginate(10);

        //return $posts;

        return view('tournaments.index', compact('tournaments'));

        // return view('index', ['frase' => $frase]);

        //otras formas de pasar parametros de la view:
        // return view('index', compact('frase'));

    }

    public function create() {

        $frase = "Aqui se mostraran los FORMULARIOS DE CREACION DE POSTS:";
       // $categories = Category::all();
        //$users = User::all();

        return view('tournaments.create', compact('frase' ));

    }

    public function store(Request $request) {

        Tournament::create($request->all());
        return "El post se creó con éxito";
        // return $request;

    }

    public function show(Tournament $tournament) {
        // primera forma
        // return view('posts.show', [
        //     'post' => $post
        // ]);

        // segunda forma con el método compact
        // return view('posts.show', compact('post'));

        // tercera forma con el método with
        //return view('posts.show')->with('post', $post);
        $frase = "Aqui se mostraran el CONTENIDO DE POSTS:";

        return view('tournaments.show', compact('tournament', 'frase'));

    }

    public function edit($tournament) {
        return view('tournaments.edit');
    }

    public function update($tournament) {
        return "Aquí se actualizará el post del parámetro";
    }

    public function destroy(Tournament $tournament) {
        $tournament->delete();
        return redirect()->route('tournaments.index');
    }
}

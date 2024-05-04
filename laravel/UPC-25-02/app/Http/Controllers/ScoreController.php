<?php

namespace App\Http\Controllers;
use App\Models\Score;
use App\Models\Character;
use App\Models\Tournament;
use Illuminate\Http\Request;

class ScoreController extends Controller
{
    public function index() {

        $frase = "Aqui se mostraran el LISTADO DE Scores:";
        $scores = Score::paginate(10);

        //return $posts;

        return view('scores.index', compact('scores', 'frase'));

        // return view('index', ['frase' => $frase]);

        //otras formas de pasar parametros de la view:
        // return view('index', compact('frase'));

    }

 
    public function create() {

        $frase = "Aqui se mostraran los FORMULARIOS DE CREACION DE POSTS:";
        $tournaments = Tournament::all();
        $characters = Character::all();
       // $categories = Category::all();
        //$users = User::all();

        return view('scores.create', compact('frase','tournaments','characters' ));

    }

    public function store(Request $request) {

        Score::create($request->all());
        return redirect()->route('scores.index');
        // return $request;

    }

    public function edit(Score $score) {
        $tournaments = Tournament::all();
        $characters = Character::all();
        return view('scores.edit', compact('tournaments','characters','score' ));
    }


    public function destroy(Score $score) {
        $score->delete();
        return redirect()->route('scores.index');
    }

    public function update(Request $request, $id)
    {

        $score = Score::find($id);

        $score->character_id = $request->character_id;
        $score->tournament_id = $request->tournament_id;
        $score->score = $request->score;

        $score->save();

        return redirect()->route('scores.index')
                        ->with('success','Score Has Been updated successfully');
    }
}

   
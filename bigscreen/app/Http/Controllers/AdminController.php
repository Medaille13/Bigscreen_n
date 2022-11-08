<?php

namespace App\Http\Controllers;
use App\Models\Question;
use App\Models\Answer;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //récupérer les questions de la bdd
    public function recuperationquestion(Request $request){
        $quest = Question::all();
        return view("administration.question",compact('quest'));
        
    }

    //récupérer les réponses
    public function recuperationreponse(Request $request){
        $answers = Answer::all();
        return view("administration.reponse",compact('answers'));
        
    }
}

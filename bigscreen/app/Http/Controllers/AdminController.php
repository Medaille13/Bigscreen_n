<?php

namespace App\Http\Controllers;
use App\Models\Question;
use App\Models\Answer;
use App\Models\People;
use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    
    //récupérer le numéro de la question, la question, le type
    public function tableauquestion(){
        $questions=Question::with('type')->get();
        return view("administration.question",compact('questions'));
    }
    
    
    //récupérer le numéro de la question, la question, et la réponse
    
    public function recuperationreponsequestion(){
        $users = People::with('answers_with_question')->get();
        
        //dd($users->toArray());         
        return view("administration.reponse",compact('users'));
        //('answers')->get();
    }
}

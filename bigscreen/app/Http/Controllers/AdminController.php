<?php

namespace App\Http\Controllers;
use App\Models\Question;
use App\Models\Answer;
use App\Models\People;
use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //inscription partie administration 
    public function inscription(Request $request){
        Admin::create([
            "username"=>$request->username,
            "password"=>$request->password,
        ]);
        return redirect()->route('ConnexionAdm');
    }

    //connexion à la partie administration
    public function read(Request $request){
        $admin = Admin::where("username",$request->username)->where("password",$request->password)->first();
        if(!is_null($admin)){
            Session(["enligne"=>$admin]);
            return redirect()->route("administrationaccueil");
        }
    }
    //récupérer les questions de la bdd
    /*public function recuperationnumeroquestiontype(Request $request){
        $allquestions=Question::with('type')->get();
        return view("administration.question",compact('allquestions'));
        
    }*/


    //récupérer le numéro de la question, la question, le type
    public function tableauquestion(Request $request){
        $questions=Question::all();
        $user = People::with('answers')->first();
        return view("administration.question",compact('questions'));
    }

    
    /*
    //récupérer les réponses
    public function recuperationreponse(Request $request){
        $quest = Question::all();
        $answers = Answer::all();
        $user = People::with('answers')->get();
        return view("administration.reponse",compact('answers','quest','user'));
        
    }



    //récupérer les réponses 9/11/2022
    $questions = Question::all();          
    $user = People::where('hash','=', urldecode($hash))->with('answers')->first();
    //dd($user->answers[9]->reponse); 
    
    if(!is_null($user)){ 
        //dump($user->toArray());
        return view("utilisateur.resultat",compact('questions','user'));
    }else{
        $information = 'La page demandée n\'existe pas';
        return redirect()->route('formulairesatisfaction')->with('error',$information);
    }  */
}

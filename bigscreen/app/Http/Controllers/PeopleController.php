<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\Answer;
use App\Models\AnswerChoice;
use App\Models\People;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PeopleController extends Controller
{
    //récupération Question + AnswerChoice
    public function getquestion(){
        $quest = Question::all();
        //dump(session()->all());
        $choice = AnswerChoice::all();
        $user= null;
        return view("utilisateur.accueil",compact('quest','choice','user'));
    }
    
    public function displayuserreponse($hash){
        $questions = Question::all();          
        $user = People::where('hash','=', urldecode($hash))->with('answers')->first();
        //dd($user->answers[9]->reponse);         
        if(!is_null($user)){ 
            //dump($user->toArray());
            return view("utilisateur.resultat",compact('questions','user'));
        }else{
            $information = 'La page demandée n\'existe pas';
            return redirect()->route('formulairesatisfaction')->with('error',$information);
        }           
    }
    
    //sauvegarde des réponses de l'utilisateur
    public function postanswer(Request $request){
        People::create([
            'email'=>$request->mail,
            'hash'=>md5($request->mail.date("Y-m-d H:i:s"))
        ]);
        $user=People::where('email',$request->mail)->first();
        Answer::create([
            'question_id'=>1,
            'people_id'=>$user->id,
            'reponse'=>$request->mail,
        ]);
        Answer::create([
            'question_id'=>2,
            'people_id'=>$user->id,
            'reponse'=>$request->age,
        ]);
        Answer::create([
            'question_id'=>3,
            'people_id'=>$user->id,
            'reponse'=>$request->sexe,
        ]);
        Answer::create([
            'question_id'=>4,
            'people_id'=>$user->id,
            'reponse'=>$request->foyer,
        ]);
        Answer::create([
            'question_id'=>5,
            'people_id'=>$user->id,
            'reponse'=>$request->profession,
        ]);
        Answer::create([
            'question_id'=>6,
            'people_id'=>$user->id,
            'reponse'=>$request->MarqueCasqueUtilise,
        ]);
        Answer::create([
            'question_id'=>7,
            'people_id'=>$user->id,
            'reponse'=>$request->MagasinAppli,
        ]);
        Answer::create([
            'question_id'=>8,
            'people_id'=>$user->id,
            'reponse'=>$request->CasqueAchat,
        ]);
        Answer::create([
            'question_id'=>9,
            'people_id'=>$user->id,
            'reponse'=>$request->foyercasque,
        ]);
        Answer::create([
            'question_id'=>10,
            'people_id'=>$user->id,
            'reponse'=>$request->utilise,
        ]);
        Answer::create([
            'question_id'=>11,
            'people_id'=>$user->id,
            'reponse'=>$request->qualite,
        ]);
        Answer::create([
            'question_id'=>12,
            'people_id'=>$user->id,
            'reponse'=>$request->confort,
        ]);
        Answer::create([
            'question_id'=>13,
            'people_id'=>$user->id,
            'reponse'=>$request->connexion,
        ]);
        Answer::create([
            'question_id'=>14,
            'people_id'=>$user->id,
            'reponse'=>$request->dimension,
        ]);
        Answer::create([
            'question_id'=>15,
            'people_id'=>$user->id,
            'reponse'=>$request->graphismes,
        ]);
        Answer::create([
            'question_id'=>16,
            'people_id'=>$user->id,
            'reponse'=>$request->notifouinon,
        ]);
        Answer::create([
            'question_id'=>17,
            'people_id'=>$user->id,
            'reponse'=>$request->rejoindreouinon,
        ]);
        Answer::create([
            'question_id'=>18,
            'people_id'=>$user->id,
            'reponse'=>$request->enregistrerouinon,
        ]);
        Answer::create([
            'question_id'=>19,
            'people_id'=>$user->id,
            'reponse'=>$request->exclusifsouinon,
        ]);
        Answer::create([
            'question_id'=>20,
            'people_id'=>$user->id,
            'reponse'=>$request->reve,
        ]);        
        return back()->with('success',route('displayuserreponse',['hash'=>urlencode($user->hash)]));
    }   
}
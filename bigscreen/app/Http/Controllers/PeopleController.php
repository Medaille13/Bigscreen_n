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
        $choice = AnswerChoice::all();
        $user= null;
        return view("Utilisateurs\accueil",compact('quest','choice','user'));
    }

    public function getuserquestion($hash){
        $quest = Question::all();        
        $choice = AnswerChoice::all();   
        $user = People::where('email',Hash::make($hash))->first(); 
        if(!is_null($user)){dump($user);}    
        return view("Utilisateurs\accueil",compact('quest','choice','user'));
    }
    
    //sauvegarde des réponses de l'utilisateur
    public function postanswer(Request $request){
        People::create([
            'email'=>$request->mail
        ]);
        $user=People::where('url',$request->mail)->first();
        Answers::create([
            'question_id'=>1,
            'people_id'=>$user->id,
            'reponse'=>$request->mail,
        ]);
        Answers::create([
            'question_id'=>2,
            'people_id'=>$user->id,
            'reponse'=>$request->age,
        ]);
        Answers::create([
            'question_id'=>3,
            'people_id'=>$user->id,
            'reponse'=>$request->sexe,
        ]);
        Answers::create([
            'question_id'=>4,
            'people_id'=>$user->id,
            'reponse'=>$request->foyer,
        ]);
        Answers::create([
            'question_id'=>5,
            'people_id'=>$user->id,
            'reponse'=>$request->profession,
        ]);
        Answers::create([
            'question_id'=>6,
            'people_id'=>$user->id,
            'reponse'=>$request->MarqueCasqueUtilise,
        ]);
        Answers::create([
            'question_id'=>7,
            'people_id'=>$user->id,
            'reponse'=>$request->MagasinAppli,
        ]);
        Answers::create([
            'question_id'=>8,
            'people_id'=>$user->id,
            'reponse'=>$request->CasqueAchat,
        ]);
        Answers::create([
            'question_id'=>9,
            'people_id'=>$user->id,
            'reponse'=>$request->foyercasque,
        ]);
        Answers::create([
            'question_id'=>10,
            'people_id'=>$user->id,
            'reponse'=>$request->utilise,
        ]);
        Answers::create([
            'question_id'=>11,
            'people_id'=>$user->id,
            'reponse'=>$request->qualite,
        ]);
        Answers::create([
            'question_id'=>12,
            'people_id'=>$user->id,
            'reponse'=>$request->confort,
        ]);
        Answers::create([
            'question_id'=>13,
            'people_id'=>$user->id,
            'reponse'=>$request->connexion,
        ]);
        Answers::create([
            'question_id'=>14,
            'people_id'=>$user->id,
            'reponse'=>$request->dimension,
        ]);
        Answers::create([
            'question_id'=>15,
            'people_id'=>$user->id,
            'reponse'=>$request->graphismes,
        ]);
        Answers::create([
            'question_id'=>16,
            'people_id'=>$user->id,
            'reponse'=>$request->notifouinon,
        ]);
        Answers::create([
            'question_id'=>17,
            'people_id'=>$user->id,
            'reponse'=>$request->rejoindreouinon,
        ]);
        Answers::create([
            'question_id'=>18,
            'people_id'=>$user->id,
            'reponse'=>$request->enregistrerouinon,
        ]);
        Answers::create([
            'question_id'=>19,
            'people_id'=>$user->id,
            'reponse'=>$request->exclusifsouinon,
        ]);
        Answers::create([
            'question_id'=>20,
            'people_id'=>$user->id,
            'reponse'=>$request->reve,
        ]);

        $message = 'Toute l’équipe de Bigscreen vous remercie pour votre engagement. Grâce à votre investissement, nous vous préparons une application toujours plus facile à utiliser, seul ou en famille.
        Si vous désirez consulter vos réponse ultérieurement, vous pouvez consultez cette adresse: '.(route('getuserquestion',['hash',Hash::make($people->url)])); 
        return back()->with('success',$message);
    }

}
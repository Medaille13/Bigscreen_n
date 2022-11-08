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
        dump(session()->all());
        $choice = AnswerChoice::all();
        $user= null;
        return view("utilisateur.accueil",compact('quest','choice','user'));
    }
    
    public function getuserquestion($hash){
        $quest = Question::all();        
        $choice = AnswerChoice::all();   
        $user = People::where('hash','=', urldecode($hash))->first(); 
        
        if(!is_null($user)){ 
            dump($user->toArray());
            return view("utilisateur.resultat",compact('quest','choice','user'));
        }else{
            $information = 'La page demandée n\'existe pas';
            return redirect()->route('formulairesatisfaction')->with('error',$information);
        }   
                
    }
    
    //sauvegarde des réponses de l'utilisateur
    public function postanswer(Request $request){
        People::create([
            'email'=>$request->mail,
            'hash'=>Hash::make($request->mail.date("Y-m-d H:i:s"))
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
        
        $message = 'Toute l’équipe de Bigscreen vous remercie pour votre engagement. Grâce à votre investissement, nous vous préparons une application toujours plus facile à utiliser, seul ou en famille.
        Si vous désirez consulter vos réponse ultérieurement, vous pouvez consultez cette adresse: '.(route('getuserquestion',['hash'=>urlencode($user->hash)])); 
        return back()->with('success',$message);
    }
    
    
}
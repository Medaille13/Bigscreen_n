<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Answer;

class GraphiqueController extends Controller
{
    
    function index(){  
        
        $reponsesA = Answer::where('question_id',6)->pluck('reponse');
        //dd($reponses); on récupere toutes les reponses de la question 6
        $countsA = ['Occulus Rift/s'=>0, 'HTC Vive'=>0, 'Windows Mixed Reality'=>0, 'PSVR'=>0];
        //dump($counts);
        foreach($reponsesA as $reponse){
            $countsA[$reponse]++;
        }
        
        $reponsesB = Answer::where('question_id',7)->pluck('reponse');
        $countsB = ['SteamVR'=>0, 'Occulus store'=>0, 'Viveport'=>0,'Playstation VR'=>0, 'Google Play'=>0, 'Windows store'=>0];
        foreach($reponsesB as $reponse){
            $countsB[$reponse]++;
        }
        
        $reponsesC = Answer::where('question_id',10)->pluck('reponse');
        $countsC = ['Regarder des émissions TV en direct'=>0, 'Regarder des films'=>0, 'Jouer en solo'=>0, 'Jouer en team'=>0];
        //dump($counts);
        foreach($reponsesC as $reponse){
            $countsC[$reponse]++;
        }
        
        $reponsesD = Answer::whereBetween('question_id',[11, 15])->get()->groupBy('question_id');
        //dd($reponses->toArray());
        $countsD = array(); //array() > tableau vide compatible toutes les versions php
        foreach($reponsesD as $key=>$reponse){
            //dump($key, $reponse->sortBy('reponse')->pluck('reponse')->countBy()->toArray());
            $countsD[$key] = $reponse->sortBy('reponse')->pluck('reponse')->countBy()->toArray();
        }
        //le reponse entre () provient de la base de données
        
        //dd($counts);
        return view('administration.accueil', compact('countsA','countsB','countsC','countsD'));   
    }
    
    
}



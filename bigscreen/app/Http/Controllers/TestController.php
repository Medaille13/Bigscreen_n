<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;
use App\Models\People;
use App\Models\Answer;


class TestController extends Controller
{
    //
    public function index(){
        $allquestions=Question::with('type','answer_choices')->get();
        //$allpeoples=People::all();    
        $allpeoples=People::take(3)->get();        
        
        foreach ($allpeoples as $people) {
            foreach ($allquestions as $question) {
                $answer=new Answer();
                $answer->question_id = $question->id;
                $answer->people_id = $people->id;
                
                $reponse = '';
                switch ($question->type->libelle){
                    case 'A':
                        $reponse = $question->answer_choices->pluck('reponse')->random();
                        break;
                        
                        case 'B':
                            //dump($question->titre);
                            if ($question->titre == 'Quel est votre email ?'){
                                $reponse = "faker email";
                            }
                            if ($question->titre == 'Quel est votre âge ?'){
                                $reponse = "faker âge ";
                            }
                            if ($question->titre == 'Quel est votre profession ?'){
                                $reponse = "faker profession ";
                            }
                            if ($question->titre == 'Quelle nouvelle fonctionnalité de vos rêve devrait exister sur Bigscreen ?'){
                                $reponse = "faker fonctionnalité ";
                            }
                            
                            break;
                            //si le titre == votre email? alors réponse sera faker email
                            
                            case 'C':
                                $reponse = $question->answer_choices->pluck('reponse')->random();
                                break;   
                                
                            }
                            $answer->reponse = $reponse;                   
                            
                        }
                    }
                    
                    
                    
                    dd($allquestions->toArray(),$allpeoples->toArray());
                }
                
                
            }

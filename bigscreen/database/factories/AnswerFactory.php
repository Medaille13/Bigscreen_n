<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use App\Models\Question;
use App\Models\People;
/**
* @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
*/
class AnswerFactory extends Factory
{
    /**
    * Define the model's default state.
    *
    * @return array<string, mixed>
    */
    public function definition()
    {
        
        
        $allquestions=Question::with('type','answer_choices')->get();
        $allpeoples=People::all();   
        
        foreach ($allpeoples as $people) {
            foreach ($allquestions as $question) { 
                $reponse = '';
                switch ($question->type->libelle){
                    case 'A':
                        $reponse = $question->answer_choices->pluck('reponse')->random();
                        break;
                        
                        case 'B':
                            if ($question->titre == 'Quel est votre email ?'){
                                $reponse = $people->email ;
                            }
                            if ($question->titre == 'Quel est votre âge ?'){
                                $reponse = fake()->numberBetween(18, 100);
                            }
                            if ($question->titre == 'Quel est votre profession ?'){
                                $reponse = fake()->jobTitle();
                            }
                            if ($question->titre == 'Quelle nouvelle fonctionnalité de vos rêve devrait exister sur Bigscreen ?'){
                                $reponse = fake()->sentences();
                            }
                            break;
                            
                            case 'C':
                                $reponse = $question->answer_choices->pluck('reponse')->random();
                                break;   
                            }  
                        
                            return [
                                'question_id' => $question->id,
                                'people_id' => $people->id,
                                'reponse' => $reponse,
                                'created_at'=> date("Y-m-d H:i:s"),
                            ];              
                            }
                        } 
                        
                    }  
                    
                }

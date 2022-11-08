<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Answer;
use App\Models\Question;
use App\Models\People;
use Faker\Factory as Faker;


class AnswerSeeder extends Seeder
{
    /**
    * Run the database seeds.
    *
    * @return void
    */
    public function run()
    {
        
        $allquestions=Question::with('type','answer_choices')->get();
        //création d'un utilisateur en mémoire /
        for($j=0;$j<20;$j++){
            $people = People::factory()->create();
            
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
                                $reponse = fake()->sentence();
                            }
                            break;
                            
                            case 'C':
                                $reponse = $question->answer_choices->pluck('reponse')->random();
                                break;   
                            }  
                            $data=['question_id' => $question->id,
                            'people_id' => $people->id,
                            'reponse' => $reponse,
                            'created_at'=> date("Y-m-d H:i:s")];
                            
                            DB::table('answers')->insert($data);                   
                                    
                        } }
                    } 
                    
                }
                
                
                
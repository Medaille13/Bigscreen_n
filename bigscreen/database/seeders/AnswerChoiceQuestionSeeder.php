<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\QuestionSeeder;
use Illuminate\Database\AnswersChoiceSeeder;

class AnswerChoiceQuestionSeeder extends Seeder
{
    /**
    * Run the database seeds.
    *
    * @return void
    */
    public function run()
    {
        // DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        //appel à la table questions
        $qcm1 = DB::table('questions')->where("titre", '=', "Quel est votre sexe ?")->get(['id'])[0]->id;
        $qcm2 = DB::table('questions')->where("titre", '=', 'Combien y a-t-il de personne dans votre foyer (adultes et enfants) ?')->get(['id'])[0]->id;
        $qcm3 = DB::table('questions')->where("titre", '=', 'Quel marque de casque VR utilisez vous ?')->get(['id'])[0]->id;
        $qcm4 = DB::table('questions')->where("titre", '=', 'Sur quel magasin d’application achetez vous des contenus VR ?')->get(['id'])[0]->id;
        $qcm5=  DB::table('questions')->where("titre", '=', 'Quel casque envisagez-vous d’acheter dans un futur proche ?')->get(['id'])[0]->id;
        $qcm6 = DB::table('questions')->where("titre", '=', 'Au sein de votre foyer, combien de personne utilisent votre casque VR pour regarder Bigscreen ?')->get(['id'])[0]->id;
        $qcm7 = DB::table('questions')->where("titre", '=', 'Vous utilisez principalement Bigscreen pour :')->get(['id'])[0]->id;
        $qcm8 = DB::table('questions')->where("titre", '=', 'Combien donnez vous de point pour la qualité de l’image sur Bigscreen ?')->get(['id'])[0]->id;
        $qcm9 = DB::table('questions')->where("titre", '=', 'Combien donnez vous de point pour le confort d’utilisation de l’interface Bigscreen ?')->get(['id'])[0]->id;
        $qcm10 = DB::table('questions')->where("titre", '=', 'Combien donnez vous de point pour la connexion réseau de Bigscreen ?')->get(['id'])[0]->id;
        $qcm11 = DB::table('questions')->where("titre", '=', 'Combien donnez vous de point pour la qualité des graphismes 3D dans Bigscreen ?')->get(['id'])[0]->id;
        $qcm12 = DB::table('questions')->where("titre", '=', 'Combien donnez vous de point pour la qualité audio dans Bigscreen ?')->get(['id'])[0]->id;
        $qcm13 = DB::table('questions')->where("titre", '=', 'Aimeriez vous avoir des notifications plus précises au cours de vos sessions Bigscreen ?')->get(['id'])[0]->id;
        $qcm14 = DB::table('questions')->where("titre", '=', 'Aimeriez vous pouvoir inviter un ami à rejoindre votre session via son smartphone ?')->get(['id'])[0]->id;
        $qcm15 = DB::table('questions')->where("titre", '=', 'Aimeriez vous pouvoir enregistrer des émissions TV pour pouvoir les regarder ultérieurement ?')->get(['id'])[0]->id;
        $qcm16 = DB::table('questions')->where("titre", '=', 'Aimeriez vous jouer à des jeux exclusifs sur votre Bigscreen ?')->get(['id'])[0]->id;
        
        //Appel à la table answer_choices
        $rep1a = DB::table('answer_choices')->where('reponse', '=', 'Homme')->get(['id'])[0]->id;
        $rep1b = DB::table('answer_choices')->where('reponse', '=', 'Femme')->get(['id'])[0]->id;
        $rep1c = DB::table('answer_choices')->where('reponse', '=', 'Préfere ne pas répondre')->get(['id'])[0]->id;
        
        $rep2a = DB::table('answer_choices')->where('reponse', '=', '1')->get(['id'])[0]->id;
        $rep2b = DB::table('answer_choices')->where('reponse', '=', '2')->get(['id'])[0]->id;
        $rep2c = DB::table('answer_choices')->where('reponse', '=', '3')->get(['id'])[0]->id;
        $rep2d = DB::table('answer_choices')->where('reponse', '=', '4')->get(['id'])[0]->id;
        $rep2e = DB::table('answer_choices')->where('reponse', '=', '5')->get(['id'])[0]->id;
        
        $rep3a = DB::table('answer_choices')->where('reponse', '=', 'Occulus Rift/s')->get(['id'])[0]->id;
        $rep3b = DB::table('answer_choices')->where('reponse', '=', 'HTC Vive')->get(['id'])[0]->id;
        $rep3c = DB::table('answer_choices')->where('reponse', '=', 'Windows Mixed Reality')->get(['id'])[0]->id;
        $rep3d = DB::table('answer_choices')->where('reponse', '=', 'PSVR')->get(['id'])[0]->id;
        
        $rep4a = DB::table('answer_choices')->where('reponse', '=', 'SteamVR')->get(['id'])[0]->id;
        $rep4b = DB::table('answer_choices')->where('reponse', '=', 'Occulus store')->get(['id'])[0]->id;
        $rep4c = DB::table('answer_choices')->where('reponse', '=', 'Viveport')->get(['id'])[0]->id;
        $rep4d = DB::table('answer_choices')->where('reponse', '=', 'Playstation VR')->get(['id'])[0]->id;
        $rep4e = DB::table('answer_choices')->where('reponse', '=', 'Google Play')->get(['id'])[0]->id;
        $rep4f = DB::table('answer_choices')->where('reponse', '=', 'Windows store')->get(['id'])[0]->id;
        
        $rep5a = DB::table('answer_choices')->where('reponse', '=', 'Occulus Quest')->get(['id'])[0]->id;
        $rep5b = DB::table('answer_choices')->where('reponse', '=', 'Occulus Go')->get(['id'])[0]->id;
        $rep5c = DB::table('answer_choices')->where('reponse', '=', 'HTC Vive Pro')->get(['id'])[0]->id;
        $rep5d = DB::table('answer_choices')->where('reponse', '=', 'Autre')->get(['id'])[0]->id;
        $rep5e = DB::table('answer_choices')->where('reponse', '=', 'Aucun')->get(['id'])[0]->id;
        
        $rep6a = DB::table('answer_choices')->where('reponse', '=', 'Regarder des émissions TV en direct')->get(['id'])[0]->id;
        $rep6b = DB::table('answer_choices')->where('reponse', '=', 'Regarder des films')->get(['id'])[0]->id;
        $rep6c = DB::table('answer_choices')->where('reponse', '=', 'Jouer en solo')->get(['id'])[0]->id;
        $rep6d = DB::table('answer_choices')->where('reponse', '=', 'Jouer en team')->get(['id'])[0]->id;
        
        $rep7a = DB::table('answer_choices')->where('reponse', '=', 'Oui')->get(['id'])[0]->id;
        $rep7b = DB::table('answer_choices')->where('reponse', '=', 'Non')->get(['id'])[0]->id;
        
        
        //insertion des qcm et des réponses associées
        DB::table('answer_choice_question')->insert([
            ['question_id'=>$qcm1,'answer_choice_id'=>$rep1a],
            ['question_id'=>$qcm1,'answer_choice_id'=>$rep1b],
            ['question_id'=>$qcm1,'answer_choice_id'=>$rep1c],
            
            ['question_id'=>$qcm2,'answer_choice_id'=>$rep2a],
            ['question_id'=>$qcm2,'answer_choice_id'=>$rep2b],
            ['question_id'=>$qcm2,'answer_choice_id'=>$rep2c],
            ['question_id'=>$qcm2,'answer_choice_id'=>$rep2d],
            ['question_id'=>$qcm2,'answer_choice_id'=>$rep2e],
            
            ['question_id'=>$qcm3,'answer_choice_id'=>$rep3a],
            ['question_id'=>$qcm3,'answer_choice_id'=>$rep3b],
            ['question_id'=>$qcm3,'answer_choice_id'=>$rep3c],
            ['question_id'=>$qcm3,'answer_choice_id'=>$rep3d],
            
            ['question_id'=>$qcm4,'answer_choice_id'=>$rep4a],
            ['question_id'=>$qcm4,'answer_choice_id'=>$rep4b],
            ['question_id'=>$qcm4,'answer_choice_id'=>$rep4c],
            ['question_id'=>$qcm4,'answer_choice_id'=>$rep4d],
            ['question_id'=>$qcm4,'answer_choice_id'=>$rep4e],
            ['question_id'=>$qcm4,'answer_choice_id'=>$rep4f],
            
            ['question_id'=>$qcm5,'answer_choice_id'=>$rep5a],
            ['question_id'=>$qcm5,'answer_choice_id'=>$rep5b],
            ['question_id'=>$qcm5,'answer_choice_id'=>$rep5c],
            ['question_id'=>$qcm5,'answer_choice_id'=>$rep5d],
            ['question_id'=>$qcm5,'answer_choice_id'=>$rep5e],
            
            ['question_id'=>$qcm6,'answer_choice_id'=>$rep2a],
            ['question_id'=>$qcm6,'answer_choice_id'=>$rep2b],
            ['question_id'=>$qcm6,'answer_choice_id'=>$rep2c],
            ['question_id'=>$qcm6,'answer_choice_id'=>$rep2d],
            ['question_id'=>$qcm6,'answer_choice_id'=>$rep2e],            
            
            ['question_id'=>$qcm7,'answer_choice_id'=>$rep6a],
            ['question_id'=>$qcm7,'answer_choice_id'=>$rep6b],
            ['question_id'=>$qcm7,'answer_choice_id'=>$rep6c],
            ['question_id'=>$qcm7,'answer_choice_id'=>$rep6d],
            
            ['question_id'=>$qcm8,'answer_choice_id'=>$rep2a],
            ['question_id'=>$qcm8,'answer_choice_id'=>$rep2b],
            ['question_id'=>$qcm8,'answer_choice_id'=>$rep2c],
            ['question_id'=>$qcm8,'answer_choice_id'=>$rep2d],
            ['question_id'=>$qcm8,'answer_choice_id'=>$rep2e], 
            
            ['question_id'=>$qcm9,'answer_choice_id'=>$rep2a],
            ['question_id'=>$qcm9,'answer_choice_id'=>$rep2b],
            ['question_id'=>$qcm9,'answer_choice_id'=>$rep2c],
            ['question_id'=>$qcm9,'answer_choice_id'=>$rep2d],
            ['question_id'=>$qcm9,'answer_choice_id'=>$rep2e], 
            
            ['question_id'=>$qcm10,'answer_choice_id'=>$rep2a],
            ['question_id'=>$qcm10,'answer_choice_id'=>$rep2b],
            ['question_id'=>$qcm10,'answer_choice_id'=>$rep2c],
            ['question_id'=>$qcm10,'answer_choice_id'=>$rep2d],
            ['question_id'=>$qcm10,'answer_choice_id'=>$rep2e],
            
            ['question_id'=>$qcm11,'answer_choice_id'=>$rep2a],
            ['question_id'=>$qcm11,'answer_choice_id'=>$rep2b],
            ['question_id'=>$qcm11,'answer_choice_id'=>$rep2c],
            ['question_id'=>$qcm11,'answer_choice_id'=>$rep2d],
            ['question_id'=>$qcm11,'answer_choice_id'=>$rep2e],
            
            ['question_id'=>$qcm12,'answer_choice_id'=>$rep2a],
            ['question_id'=>$qcm12,'answer_choice_id'=>$rep2b],
            ['question_id'=>$qcm12,'answer_choice_id'=>$rep2c],
            ['question_id'=>$qcm12,'answer_choice_id'=>$rep2d],
            ['question_id'=>$qcm12,'answer_choice_id'=>$rep2e], 
            
            ['question_id'=>$qcm13,'answer_choice_id'=>$rep7a],            
            ['question_id'=>$qcm13,'answer_choice_id'=>$rep7b],
            
            ['question_id'=>$qcm14,'answer_choice_id'=>$rep7a],            
            ['question_id'=>$qcm14,'answer_choice_id'=>$rep7b],
            
            ['question_id'=>$qcm15,'answer_choice_id'=>$rep7a],            
            ['question_id'=>$qcm15,'answer_choice_id'=>$rep7b],
            
            ['question_id'=>$qcm16,'answer_choice_id'=>$rep7a],            
            ['question_id'=>$qcm16,'answer_choice_id'=>$rep7b],
            
        ]);
        
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}

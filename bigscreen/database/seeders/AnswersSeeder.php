<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\QuestionSeeder;
use Illuminate\Database\AnswersChoiceSeeder;
use Illuminate\Database\PeopleSeeder;
use Illuminate\Database\TypeSeeder;
use Illuminate\Database\AnswersChoiceQuestionSeeder;
use Faker\Factory as Faker;


class AnswersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $quest1 = DB::table('questions')->where('titre', '=', 'Quel est votre email ?')->get(['id'])[0]->id;
        $quest2 = DB::table('questions')->where('titre', '=', 'Quel est votre âge ?')->get(['id'])[0]->id;
        $qcm1 = DB::table('questions')->where('titre', '=', 'Quel est votre sexe ?')->get(['id'])[0]->id;
        $quest3 = DB::table('questions')->where('titre', '=', 'Quel est votre profession ?')->get(['id'])[0]->id;
        $quest4 = DB::table('questions')->where('titre', '=', 'Quelle nouvelle fonctionnalité de vos rêve devrait exister sur Bigscreen ?')->get(['id'])[0]->id;
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

        //liste des utilisateurs
        $peoples = DB::table('peoples')->get();

        // people 1
        $people1 = $peoples[0]->id;

        // questions Type A : Choix multiple
        // $qcm1 Quel est votre votre sexe ?
        // $rep1a / $rep1b / $rep1c Homme, Femme, Ne pas répondre
        $sexe = ["Homme", "Femme", "Préfere ne pas répondre"];
        DB::table('answers')->insert([
            ['people_id'           => $people1,
            'question_id'        => $qcm1,           
            'reponse_typeA'      => "Homme",//$sexe[rand(0,2)],
            'reponse_typeB'      => "null",
            'reponse_typeC'      => "null",],
        ]);

        // $qcm3 Quel marque de casque VR utilisez vous ?'
        // $rep3a / $rep3b / $rep3c /$rep3d
        $reponseQCM3 = ["Occulus Rift/s", "HTC Vive", "Windows Mixed Reality", "PSVR"];
        DB::table('answers')->insert([
            ['people_id'           => $people1,
            'question_id'        => $qcm3,           
            'reponse_typeA'      => $reponseQCM3[rand(0,3)],
            'reponse_typeB'      => null,
            'reponse_typeC'      => null,],
        ]);
        
        // $qcm4 Sur quel magasin d’application achetez vous des contenus VR ?
        // $rep4a / $rep4b / $rep4c  /$rep4d / $rep4e / $rep4f
        $reponseQCM4 = ["SteamVR", "Occulus store", "Viveport", "Playstation VR","Google Play","Windows store"];
        DB::table('answers')->insert([
            ['people_id'           => $people1,
            'question_id'        => $qcm4,           
            'reponse_typeA'      => $reponseQCM4[rand(0,3)],
            'reponse_typeB'      => null,
            'reponse_typeC'      => null,],
        ]);
        
        // $qcm5 Quel casque envisagez-vous d’acheter dans un futur proche ?
        // $rep5a / $rep5b / $rep5c / $rep5d / $rep5e
        $reponseQCM5 = ["Occulus Quest", "Occulus Go", "HTC Vive Pro", "Autre","Aucun"];
        DB::table('answers')->insert([
            ['people_id'           => $people1,
            'question_id'        => $qcm5,           
            'reponse_typeA'      => $reponseQCM5[rand(0,4)],
            'reponse_typeB'      => null,
            'reponse_typeC'      => null,],
        ]);
        
        // $qcm6 'Au sein de votre foyer, combien de personne utilisent votre casque VR pour regarder Bigscreen ?
        DB::table('answers')->insert([
            ['people_id'           => $people1,
            'question_id'        => $qcm6,           
            'reponse_typeA'      => (string) rand(1,5),
            'reponse_typeB'      => null,
            'reponse_typeC'      => null,],
        ]);
        
        // $qcm7 Vous utilisez principalement Bigscreen pour :
        // $rep6a / $rep6b / $rep6c / $rep6d
        $reponseQCM7 = ["Regarder des émissions TV en direct", "Regarder des films", "Jouer en solo", "Jouer en team"];
        DB::table('answers')->insert([
            ['people_id'           => $people1,
            'question_id'        => $qcm7,           
            'reponse_typeA'      => $reponseQCM7[rand(0,3)],
            'reponse_typeB'      => null,
            'reponse_typeC'      => null,],
        ]);
        
        // $qcm13 Aimeriez vous avoir des notifications plus précises au cours de vos sessions Bigscreen ?'
        // $rep7a / $rep7b OUI / NON
        $ouinon = ["Oui", "Non"];
        DB::table('answers')->insert([
            ['people_id'           => $people1,
            'question_id'        => $qcm13,           
            'reponse_typeA'      => $ouinon[rand(0,1)],
            'reponse_typeB'      => null,
            'reponse_typeC'      => null,],
        ]);
        
        // $qcm14 Aimeriez vous pouvoir inviter un ami à rejoindre votre session via son smartphone
        // $rep7a / $rep7b OUI / NON
        DB::table('answers')->insert([
            ['people_id'           => $people1,
            'question_id'        => $qcm14,           
            'reponse_typeA'      => $ouinon[rand(0,1)],
            'reponse_typeB'      => null,
            'reponse_typeC'      => null,],
        ]);
        
        // $qcm15 Aimeriez vous pouvoir enregistrer des émissions TV pour pouvoir les regarder ultérieurement ?
        // $rep7a / $rep7b OUI / NON
        DB::table('answers')->insert([
            ['people_id'           => $people1,
            'question_id'        => $qcm15,           
            'reponse_typeA'      => $ouinon[rand(0,1)],
            'reponse_typeB'      => null,
            'reponse_typeC'      => null,],
        ]);
        
        // $qcm16 Aimeriez vous jouer à des jeux exclusifs sur votre Bigscreen ?
        // $rep7a / $rep7b OUI / NON
        DB::table('answers')->insert([
            ['people_id'           => $people1,
            'question_id'        => $qcm16,           
            'reponse_typeA'      => $ouinon[rand(0,1)],
            'reponse_typeB'      => null,
            'reponse_typeC'      => null,],
        ]);
        
        

// -----------------------------------------------------------
// -----------------------------------------------------------
// -----------------------------------------------------------
        // questions Type B : champs libre
        // >$quest1,$quest2,$quest3,$quest4
        // Création d'un faker, utiliser uniquement dans les champs libre
        // $faker = Faker::create();
        // questions 1 : Quel est votre email ?
        DB::table('answers')->insert([
                ['people_id'           => $people1,
                'question_id'        => $quest1,           
                'reponse_typeA'      => null,
                // 'reponse_typeB'      => $faker->email(),
                'reponse_typeB'      => "lem@gmail.com",
                'reponse_typeC'      => null,],
        ]);
        
        // questions 2 : Votre age
        DB::table('answers')->insert([
            ['people_id'           => $people1,
            'question_id'        => $quest2,           
            'reponse_typeA'      => null,
            'reponse_typeB'      => (string) rand(18, 90),
            'reponse_typeC'      => null,],
        ]);

        // questions 5 : Votre profession
        DB::table('answers')->insert([
            ['people_id'           => $people1,
            'question_id'        => $quest3,           
            'reponse_typeA'      => null,
            'reponse_typeB'      => "Boulanger",
            'reponse_typeC'      => null,],
        ]);
        
        // questions 20 : Quelle nouvelle fonctionnalité de vos rêve devrait exister sur Bigscreen ?
        DB::table('answers')->insert([
            ['people_id'           => $people1,
            'question_id'        => $quest4,           
            'reponse_typeA'      => null,
            'reponse_typeB'      => "Recevoir un mail avec les réponses en PDF",
            'reponse_typeC'      => null,],
        ]);


// -----------------------------------------------------------
// -----------------------------------------------------------
// -----------------------------------------------------------
        // questions Type C : Numérique
        // $qcm2 Combien y a-t-il de personne dans votre foyer (adultes et enfants) ?
        DB::table('answers')->insert([
            ['people_id'           => $people1,
            'question_id'        => $qcm2,           
            'reponse_typeA'      => null,
            'reponse_typeB'      => null,
            'reponse_typeC'      => "1",],
        ]);

        // $qcm8 Combien donnez vous de point pour la qualité de l’image sur Bigscreen ?
        DB::table('answers')->insert([
            ['people_id'           => $people1,
            'question_id'        => $qcm8,           
            'reponse_typeA'      => null,
            'reponse_typeB'      => null,
            'reponse_typeC'      => "1",],
        ]);

        // $qcm9 Combien donnez vous de point pour le confort d’utilisation de l’interface Bigscreen ?
        DB::table('answers')->insert([
            ['people_id'           => $people1,
            'question_id'        => $qcm9,           
            'reponse_typeA'      => null,
            'reponse_typeB'      => null,
            'reponse_typeC'      => (string) rand(1,5),],
        ]);

        // $qcm10 Combien donnez vous de point pour la connexion réseau de Bigscreen ?
        DB::table('answers')->insert([
            ['people_id'           => $people1,
            'question_id'        => $qcm10,           
            'reponse_typeA'      => null,
            'reponse_typeB'      => null,
            'reponse_typeC'      => (string) rand(1,5),],
        ]);

        // $qcm11 Combien donnez vous de point pour la qualité des graphismes 3D dans Bigscreen ?
        DB::table('answers')->insert([
            ['people_id'           => $people1,
            'question_id'        => $qcm11,           
            'reponse_typeA'      => null,
            'reponse_typeB'      => null,
            'reponse_typeC'      => (string) rand(1,5),],
        ]);

        // $qcm12 Combien donnez vous de point pour la qualité audio dans Bigscreen ?
        DB::table('answers')->insert([
            ['people_id'           => $people1,
            'question_id'        => $qcm12,           
            'reponse_typeA'      => null,
            'reponse_typeB'      => null,
            'reponse_typeC'      => (string) rand(1,5),],
        ]);





    }
}

 
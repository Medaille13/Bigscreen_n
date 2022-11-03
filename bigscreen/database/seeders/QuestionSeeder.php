<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\TypeSeeder;

class QuestionSeeder extends Seeder
{
    /**
    * Run the database seeds.
    *
    * @return void
    */
    public function run()
    {
        // DB::statement('SET FOREIGN_KEY_CHECKS=0;');           
       
        $typeA = DB::table('types')->where('libelle', '=', 'A')->get(['id'])[0]->id;
        $typeB = DB::table('types')->where('libelle', '=', 'B')->get(['id'])[0]->id;
        $typeC = DB::table('types')->where('libelle', '=', 'C')->get(['id'])[0]->id;

        DB::table('questions')->insert([
            ['type_id'=>$typeB,'titre'=> 'Quel est votre email ?'],
            ['type_id'=>$typeB,'titre'=> 'Quel est votre âge ?'],
            ['type_id'=>$typeA,'titre'=> 'Quel est votre sexe ?'],
            ['type_id'=>$typeC,'titre'=> 'Combien y a-t-il de personne dans votre foyer (adultes et enfants) ?'],
            ['type_id'=>$typeB,'titre'=> 'Quel est votre profession ?'],
            ['type_id'=>$typeA,'titre'=> 'Quel marque de casque VR utilisez vous ?'],
            ['type_id'=>$typeA,'titre'=> 'Sur quel magasin d’application achetez vous des contenus VR ?'],
            ['type_id'=>$typeA,'titre'=> 'Quel casque envisagez-vous d’acheter dans un futur proche ?'],
            ['type_id'=>$typeC,'titre'=> 'Au sein de votre foyer, combien de personne utilisent votre casque VR pour regarder Bigscreen ?'],
            ['type_id'=>$typeA,'titre'=> 'Vous utilisez principalement Bigscreen pour :'],
            ['type_id'=>$typeC,'titre'=> 'Combien donnez vous de point pour la qualité de l’image sur Bigscreen ?'],
            ['type_id'=>$typeC,'titre'=> 'Combien donnez vous de point pour le confort d’utilisation de l’interface Bigscreen ?'],
            ['type_id'=>$typeC,'titre'=> 'Combien donnez vous de point pour la connexion réseau de Bigscreen ?'],
            ['type_id'=>$typeC,'titre'=> 'Combien donnez vous de point pour la qualité des graphismes 3D dans Bigscreen ?'],
            ['type_id'=>$typeC,'titre'=> 'Combien donnez vous de point pour la qualité audio dans Bigscreen ?'],
            ['type_id'=>$typeA,'titre'=> 'Aimeriez vous avoir des notifications plus précises au cours de vos sessions Bigscreen ?'],
            ['type_id'=>$typeA,'titre'=> 'Aimeriez vous pouvoir inviter un ami à rejoindre votre session via son smartphone ?'],
            ['type_id'=>$typeA,'titre'=> 'Aimeriez vous pouvoir enregistrer des émissions TV pour pouvoir les regarder ultérieurement ?'],
            ['type_id'=>$typeA,'titre'=> 'Aimeriez vous jouer à des jeux exclusifs sur votre Bigscreen ?'],
            ['type_id'=>$typeB,'titre'=> 'Quelle nouvelle fonctionnalité de vos rêve devrait exister sur Bigscreen ?'], 
        ]);
    }
}

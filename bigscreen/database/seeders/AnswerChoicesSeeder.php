<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class AnswerChoicesSeeder extends Seeder
{
    /**
    * Run the database seeds.
    *
    * @return void
    */
    public function run()
    {       
        DB::table('answer_choices')->insert([
            ['reponse'=> 'Homme'],
            ['reponse'=> 'Femme'],
            ['reponse'=> 'Préfere ne pas répondre'],
            ['reponse'=> '1'],
            ['reponse'=> '2'],
            ['reponse'=> '3'],
            ['reponse'=> '4'],
            ['reponse'=> '5'],
            ['reponse'=> 'Occulus Rift/s'],
            ['reponse'=> 'HTC Vive'],
            ['reponse'=> 'Windows Mixed Reality'],
            ['reponse'=> 'PSVR'],
            ['reponse'=> 'SteamVR'],
            ['reponse'=> 'Occulus store'],
            ['reponse'=> 'Viveport'],
            ['reponse'=> 'Playstation VR'],
            ['reponse'=> 'Google Play'],
            ['reponse'=> 'Windows store'],
            ['reponse'=> 'Occulus Quest'],
            ['reponse'=> 'Occulus Go'],
            ['reponse'=> 'HTC Vive Pro'],
            ['reponse'=> 'Autre'],
            ['reponse'=> 'Aucun'],
            ['reponse'=> 'Regarder des émissions TV en direct'],
            ['reponse'=> 'Regarder des films'],
            ['reponse'=> 'Jouer en solo'],
            ['reponse'=> 'Jouer en team'],
            ['reponse'=> 'Aucun'],
            ['reponse'=> 'Oui'],
            ['reponse'=> 'Non'],
        ]);
    }
}

<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
                {
            $this->call([       
                AnswerChoiceQuestionSeeder::class,
                AnswerChoicesSeeder::class,
                AnswersSeeder::class,
                PeopleSeeder::class,
                QuestionSeeder::class,
                TypeSeeder::class,                           
            ]);
        }
    }
}

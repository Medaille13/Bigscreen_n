<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\People;

class PeopleSeeder extends Seeder

{
    
    /**
    * Run the database seeders.
    *
    * @return void
    */
    public function run()
    {
        People::factory()
        ->count(50)
        ->create();
    }
    
}

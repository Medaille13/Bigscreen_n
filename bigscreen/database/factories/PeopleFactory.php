<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

/**
* @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\People>
*/
class PeopleFactory extends Factory
{
    /**
    * Define the model's default state.
    *
    * @return array<string, mixed>
    */
    public function definition()
    {
        $fakeemail= fake()->unique()->safeEmail();
        
        return [
            'email'=> $fakeemail,
            'hash'=> md5($fakeemail.time()),
            'created_at'=> date("Y-m-d H:i:s"),
        ];
    }
}

<?php

use Illuminate\Database\Seeder;

use \App\State;

use Faker\Generator as Faker;


class StatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        for ($i = 0; $i < 10; $i++){
            $newState = new State();
            $newState->name = $faker->name;
            $newState->population = $faker->unique()->randomDigitNotNull();
            $newState->size = $faker->unique()->randomDigitNotNull();
            $newState->language = $faker->name;
            $newState->government = $faker->name;

            $newState->save();
        }
    }
}




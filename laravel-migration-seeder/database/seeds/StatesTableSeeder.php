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
        $languages = ['inglese','frnacese','spagnolo','sardo', 'spagnolo', 'finlandese', 'coreano', 'napoletano', 'pugliese'];
        $government = ['repubblica', 'stato federale', 'monarchia', 'unione', 'boh', 'altroboh', 'altroaltroboh', 'qualcosa', 'altro qualcosa', 'altro qualcosa ancora'];

        for ($i = 0; $i < 10; $i++){
            $newState = new State();
            $newState->name = $faker->state();
            $newState->population = $faker->numberBetween(100000, 600000);
            $newState->size = $faker->randomFloat(1, 100000, 200000);
            $newState->language = array_rand($languages);
            $newState->government = array_rand($government);

            $newState->save();
        }
    }
}




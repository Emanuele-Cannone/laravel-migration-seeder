<?php

use Illuminate\Database\Seeder;
use \App\State;

class StatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $States = [
            [
             'nome' => 'Inghilterra',
             'language' => 'Inglese'
            ],
            [
             'nome' => 'Italia',
             'language' => 'Italiano'
            ],
            [
             'nome' => 'Svezia',
             'language' => 'Svedese'
            ],
            [
             'nome' => 'Spagna',
             'language' => 'Spagnolo'
            ],
            [
             'nome' => 'Portogallo',
             'language' => 'Portoghese'
            ],
            
        ];
        foreach ($States as $item) {
            
            $NewState =  new State();
            $NewState->name = $item['nome'];
            $NewState->population = rand(100000, 500000);
            $NewState->size = 12.34;
            $NewState->government = 'Repubblica';
            $NewState->language = $item['language'];

            $NewState->save();
        }
    }
}




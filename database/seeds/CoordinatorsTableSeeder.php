<?php

use App\Coordinator;
use Illuminate\Database\Seeder;

class CoordinatorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Coordinator::create([
        	'first_name' => 'Eliezer',
            'last_name' => 'Hernández',
        ]);
    }
}

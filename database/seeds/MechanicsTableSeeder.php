<?php

use App\Mechanic;
use Illuminate\Database\Seeder;

class MechanicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Mechanic::create([
        	'first_name' => 'Eliezer',
            'last_name' => 'Hernández',
        ]);
    }
}

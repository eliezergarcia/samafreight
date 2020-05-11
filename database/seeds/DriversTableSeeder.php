<?php

use App\Driver;
use Illuminate\Database\Seeder;

class DriversTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Driver::create([
        	'first_name' => 'Eliezer',
            'last_name' => 'Hernández',
        ]);
    }
}

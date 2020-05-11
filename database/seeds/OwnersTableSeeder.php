<?php

use App\Owner;
use Illuminate\Database\Seeder;

class OwnersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Owner::create([
        	'name' => 'LUIS MANUEL SALAZAR MATA'
        ]);

        Owner::create([
        	'name' => 'LUIS MANUEL SALAZAR GARZA'
        ]);
        
        Owner::create([
        	'name' => 'IRMA GARZA ARRATIA'
        ]);

        Owner::create([
        	'name' => 'LILIA MATA VENTURA'
        ]);

    }
}

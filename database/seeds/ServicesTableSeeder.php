<?php

use App\Service;
use Illuminate\Database\Seeder;

class ServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Service::create([
        	'type' => 'TRUCK',
        	'name' => 'PARTICULAR',
            'color' => 'warning'
        ]);

        Service::create([
        	'type' => 'TRUCK',
        	'name' => 'TRANSFER',
            'color' => 'primary'
        ]);

        Service::create([
        	'type' => 'TRUCK',
        	'name' => 'S.P.F.',
            'color' => 'brand'
        ]);
    }
}

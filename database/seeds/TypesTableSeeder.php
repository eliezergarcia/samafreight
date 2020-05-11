<?php

use App\Type;
use Illuminate\Database\Seeder;

class TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Type::create([
            'type' => 'TRUCK',
        	'name' => 'VAGONETA'
        ]);

        Type::create([
            'type' => 'TRUCK',
        	'name' => 'REDILAS'
        ]);

        Type::create([
            'type' => 'TRUCK',
        	'name' => 'PICK UP'
        ]);

        Type::create([
            'type' => 'TRUCK',
        	'name' => 'VAN'
        ]);

        Type::create([
            'type' => 'TRUCK',
        	'name' => 'CORTO'
        ]);

        Type::create([
            'type' => 'TRUCK',
        	'name' => 'TRACTOR'
        ]);

        Type::create([
            'type' => 'BOX',
            'name' => 'CAJA SECA'
        ]);
    }
}

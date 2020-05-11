<?php

use App\Brand;
use Illuminate\Database\Seeder;

class BrandsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Brand::create([
        	'name' => 'FORD'
        ]);

        Brand::create([
        	'name' => 'NISSAN'
        ]);

        Brand::create([
        	'name' => 'DODGE'
        ]);

        Brand::create([
        	'name' => 'INTERNATIONAL'
        ]);

        Brand::create([
        	'name' => 'CHEVROLET'
        ]);

        Brand::create([
        	'name' => 'FREIGHTLINER'
        ]);

        Brand::create([
        	'name' => 'DINA'
        ]);

        Brand::create([
        	'name' => 'FAMSA'
        ]);
        
        Brand::create([
        	'name' => 'VOLVO'
        ]);

        Brand::create([
            'name' => 'WABASH'
        ]);

        Brand::create([
            'name' => 'UTILITY'
        ]);
    }
}

<?php

use App\Truck;
use Illuminate\Database\Seeder;

class TrucksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Truck::create([
        	'number' => 'EXPLORER',
            'type_id' => 1,
            'brand_id' => 1,
            'serie' => '1FMEU73E77UB78299',
            'plates' => '757TPW2',
            'year' => '2007',
            'weight' => '0',
            'service_id' => 1,
            'owner_id' => 1
        ]);

        DB::table('assigned_types')->insert([
            ['truck_id' => 1, 'type_id' => 1]
        ]);

        DB::table('assigned_brands_trucks')->insert([
            ['truck_id' => 1, 'brand_truck_id' => 1]
        ]);

        DB::table('assigned_services_trucks')->insert([
            ['truck_id' => 1, 'service_truck_id' => 1]
        ]);

        DB::table('assigned_owners_trucks')->insert([
            ['truck_id' => 1, 'owner_truck_id' => 1]
        ]);

        Truck::create([
        	'number' => 'ESTAQUITAS',
            'type_id' => 2,
            'brand_id' => 2,
            'serie' => '3N6DD25T6EK028970',
            'plates' => 'WM11833',
            'year' => '2014',
            'weight' => '0',
            'service_id' => 1,
            'owner_id' => 2
        ]);

        DB::table('assigned_types')->insert([
            ['truck_id' => 2, 'type_id' => 2]
        ]);

        DB::table('assigned_brands_trucks')->insert([
            ['truck_id' => 2, 'brand_truck_id' => 2]
        ]);

        DB::table('assigned_services_trucks')->insert([
            ['truck_id' => 2, 'service_truck_id' => 1]
        ]);

        DB::table('assigned_owners_trucks')->insert([
            ['truck_id' => 2, 'owner_truck_id' => 2]
        ]);

        Truck::create([
        	'number' => 'RANGER',
            'type_id' => 3,
            'brand_id' => 1,
            'serie' => '1FTYR14U85PA37128',
            'plates' => 'NO',
            'year' => '2005',
            'weight' => '0',
            'service_id' => 1,
            'owner_id' => 1
        ]);

        DB::table('assigned_types')->insert([
            ['truck_id' => 3, 'type_id' => 3]
        ]);

        DB::table('assigned_brands_trucks')->insert([
            ['truck_id' => 3, 'brand_truck_id' => 1]
        ]);

        DB::table('assigned_services_trucks')->insert([
            ['truck_id' => 3, 'service_truck_id' => 1]
        ]);

        DB::table('assigned_owners_trucks')->insert([
            ['truck_id' => 3, 'owner_truck_id' => 1]
        ]);

        Truck::create([
        	'number' => 'CARAVAN',
            'type_id' => 4,
            'brand_id' => 3,
            'serie' => '2B4GP44312R745643',
            'plates' => 'XRE6634',
            'year' => '2002',
            'weight' => '0',
            'service_id' => 1,
            'owner_id' => 1
        ]);

        DB::table('assigned_types')->insert([
            ['truck_id' => 4, 'type_id' => 4]
        ]);

        DB::table('assigned_brands_trucks')->insert([
            ['truck_id' => 4, 'brand_truck_id' => 3]
        ]);

        DB::table('assigned_services_trucks')->insert([
            ['truck_id' => 4, 'service_truck_id' => 1]
        ]);

        DB::table('assigned_owners_trucks')->insert([
            ['truck_id' => 4, 'owner_truck_id' => 1]
        ]);

        Truck::create([
        	'number' => 'C2',
            'type_id' => 4,
            'brand_id' => 1,
            'serie' => '1FBJS31S8VHB44988',
            'plates' => 'XHH5296',
            'year' => '1997',
            'weight' => '0',
            'service_id' => 1,
            'owner_id' => 1
        ]);

        DB::table('assigned_types')->insert([
            ['truck_id' => 5, 'type_id' => 4]
        ]);

        DB::table('assigned_brands_trucks')->insert([
            ['truck_id' => 5, 'brand_truck_id' => 1]
        ]);

        DB::table('assigned_services_trucks')->insert([
            ['truck_id' => 5, 'service_truck_id' => 1]
        ]);

        DB::table('assigned_owners_trucks')->insert([
            ['truck_id' => 5, 'owner_truck_id' => 1]
        ]);

        Truck::create([
        	'number' => 'C3',
            'type_id' => 4,
            'brand_id' => 1,
            'serie' => '1FBJS31H4RHA31176',
            'plates' => '876TPU4',
            'year' => '1994',
            'weight' => '0',
            'service_id' => 1,
            'owner_id' => 1
        ]);

        DB::table('assigned_types')->insert([
            ['truck_id' => 6, 'type_id' => 4]
        ]);

        DB::table('assigned_brands_trucks')->insert([
            ['truck_id' => 6, 'brand_truck_id' => 1]
        ]);

        DB::table('assigned_services_trucks')->insert([
            ['truck_id' => 6, 'service_truck_id' => 1]
        ]);

        DB::table('assigned_owners_trucks')->insert([
            ['truck_id' => 6, 'owner_truck_id' => 1]
        ]);

        Truck::create([
            'number' => 'C4',
            'type_id' => 5,
            'brand_id' => 4,
            'serie' => '1HTSCZWM6LH252343',
            'plates' => '060SP5',
            'year' => '1990',
            'weight' => '6.6',
            'service_id' => 2,
            'owner_id' => 1
        ]);

        DB::table('assigned_types')->insert([
            ['truck_id' => 7, 'type_id' => 5]
        ]);

        DB::table('assigned_brands_trucks')->insert([
            ['truck_id' => 7, 'brand_truck_id' => 4]
        ]);

        DB::table('assigned_services_trucks')->insert([
            ['truck_id' => 7, 'service_truck_id' => 2]
        ]);

        DB::table('assigned_owners_trucks')->insert([
            ['truck_id' => 7, 'owner_truck_id' => 1]
        ]);

        Truck::create([
            'number' => 'C5',
            'type_id' => 5,
            'brand_id' => 4,
            'serie' => '1HTSDAAN2TH250409',
            'plates' => '246SP5',
            'year' => '1996',
            'weight' => '6.61',
            'service_id' => 2,
            'owner_id' => 1
        ]);

        DB::table('assigned_types')->insert([
            ['truck_id' => 8, 'type_id' => 5]
        ]);

        DB::table('assigned_brands_trucks')->insert([
            ['truck_id' => 8, 'brand_truck_id' => 4]
        ]);

        DB::table('assigned_services_trucks')->insert([
            ['truck_id' => 8, 'service_truck_id' => 2]
        ]);

        DB::table('assigned_owners_trucks')->insert([
            ['truck_id' => 8, 'owner_truck_id' => 1]
        ]);

        Truck::create([
            'number' => 'C6',
            'type_id' => 5,
            'brand_id' => 4,
            'serie' => '8150011ME5318',
            'plates' => '586AL1',
            'year' => '1975',
            'weight' => '4.3',
            'service_id' => 3,
            'owner_id' => 1
        ]);

        DB::table('assigned_types')->insert([
            ['truck_id' => 9, 'type_id' => 5]
        ]);

        DB::table('assigned_brands_trucks')->insert([
            ['truck_id' => 9, 'brand_truck_id' => 4]
        ]);

        DB::table('assigned_services_trucks')->insert([
            ['truck_id' => 9, 'service_truck_id' => 3]
        ]);

        DB::table('assigned_owners_trucks')->insert([
            ['truck_id' => 9, 'owner_truck_id' => 1]
        ]);

        Truck::create([
            'number' => 'C7',
            'type_id' => 5,
            'brand_id' => 4,
            'serie' => '1HTSDAAN6XH638863',
            'plates' => '376su3',
            'year' => '1999',
            'weight' => '4.5',
            'service_id' => 2,
            'owner_id' => 1
        ]);

        DB::table('assigned_types')->insert([
            ['truck_id' => 10, 'type_id' => 5]
        ]);

        DB::table('assigned_brands_trucks')->insert([
            ['truck_id' => 10, 'brand_truck_id' => 4]
        ]);

        DB::table('assigned_services_trucks')->insert([
            ['truck_id' => 10, 'service_truck_id' => 2]
        ]);

        DB::table('assigned_owners_trucks')->insert([
            ['truck_id' => 10, 'owner_truck_id' => 1]
        ]);

        Truck::create([
            'number' => 'C8',
            'type_id' => 5,
            'brand_id' => 1,
            'serie' => 'AC5JXS35853',
            'plates' => '932AT8',
            'year' => '1981',
            'weight' => '5.8',
            'service_id' => 3,
            'owner_id' => 1
        ]);

        DB::table('assigned_types')->insert([
            ['truck_id' => 11, 'type_id' => 5]
        ]);

        DB::table('assigned_brands_trucks')->insert([
            ['truck_id' => 11, 'brand_truck_id' => 1]
        ]);

        DB::table('assigned_services_trucks')->insert([
            ['truck_id' => 11, 'service_truck_id' => 3]
        ]);

        DB::table('assigned_owners_trucks')->insert([
            ['truck_id' => 11, 'owner_truck_id' => 1]
        ]);

        Truck::create([
            'number' => 'C9',
            'type_id' => 5,
            'brand_id' => 4,
            'serie' => '1HTSCABN4TH265883',
            'plates' => '091SU3',
            'year' => '1996',
            'weight' => '6.48',
            'service_id' => 2,
            'owner_id' => 1
        ]);

        DB::table('assigned_types')->insert([
            ['truck_id' => 12, 'type_id' => 5]
        ]);

        DB::table('assigned_brands_trucks')->insert([
            ['truck_id' => 12, 'brand_truck_id' => 4]
        ]);

        DB::table('assigned_services_trucks')->insert([
            ['truck_id' => 12, 'service_truck_id' => 2]
        ]);

        DB::table('assigned_owners_trucks')->insert([
            ['truck_id' => 12, 'owner_truck_id' => 1]
        ]);

        Truck::create([
            'number' => 'C10',
            'type_id' => 4,
            'brand_id' => 5,
            'serie' => '1GNFG154691156159',
            'plates' => '698TPW6',
            'year' => '2009',
            'weight' => '0',
            'service_id' => 1,
            'owner_id' => 1
        ]);

        DB::table('assigned_types')->insert([
            ['truck_id' => 13, 'type_id' => 4]
        ]);

        DB::table('assigned_brands_trucks')->insert([
            ['truck_id' => 13, 'brand_truck_id' => 5]
        ]);

        DB::table('assigned_services_trucks')->insert([
            ['truck_id' => 13, 'service_truck_id' => 1]
        ]);

        DB::table('assigned_owners_trucks')->insert([
            ['truck_id' => 13, 'owner_truck_id' => 1]
        ]);

        Truck::create([
            'number' => 'C11',
            'type_id' => 5,
            'brand_id' => 4,
            'serie' => '1HTMMAAL07H358167',
            'plates' => '938EX5',
            'year' => '2007',
            'weight' => '5',
            'service_id' => 3,
            'owner_id' => 1
        ]);

        DB::table('assigned_types')->insert([
            ['truck_id' => 14, 'type_id' => 5]
        ]);

        DB::table('assigned_brands_trucks')->insert([
            ['truck_id' => 14, 'brand_truck_id' => 4]
        ]);

        DB::table('assigned_services_trucks')->insert([
            ['truck_id' => 14, 'service_truck_id' => 3]
        ]);

        DB::table('assigned_owners_trucks')->insert([
            ['truck_id' => 14, 'owner_truck_id' => 1]
        ]);

        Truck::create([
            'number' => 'O1',
            'type_id' => 6,
            'brand_id' => 6,
            'serie' => '1FV7D0Y97RP433023',
            'plates' => '610SR7',
            'year' => '1994',
            'weight' => '8.07',
            'service_id' => 2,
            'owner_id' => 1
        ]);

        DB::table('assigned_types')->insert([
            ['truck_id' => 15, 'type_id' => 6]
        ]);

        DB::table('assigned_brands_trucks')->insert([
            ['truck_id' => 15, 'brand_truck_id' => 6]
        ]);

        DB::table('assigned_services_trucks')->insert([
            ['truck_id' => 15, 'service_truck_id' => 2]
        ]);

        DB::table('assigned_owners_trucks')->insert([
            ['truck_id' => 15, 'owner_truck_id' => 1]
        ]);

        Truck::create([
            'number' => '199',
            'type_id' => 6,
            'brand_id' => 4,
            'serie' => '1HSRKG2R7MH344199',
            'plates' => '935SN2',
            'year' => '1991',
            'weight' => '6.85',
            'service_id' => 2,
            'owner_id' => 3
        ]);

        DB::table('assigned_types')->insert([
            ['truck_id' => 16, 'type_id' => 6]
        ]);

        DB::table('assigned_brands_trucks')->insert([
            ['truck_id' => 16, 'brand_truck_id' => 4]
        ]);

        DB::table('assigned_services_trucks')->insert([
            ['truck_id' => 16, 'service_truck_id' => 2]
        ]);

        DB::table('assigned_owners_trucks')->insert([
            ['truck_id' => 16, 'owner_truck_id' => 3]
        ]);

        Truck::create([
            'number' => '200',
            'type_id' => 6,
            'brand_id' => 4,
            'serie' => '1HSRKG2RXMH344200',
            'plates' => '936SN2',
            'year' => '1991',
            'weight' => '6.85',
            'service_id' => 2,
            'owner_id' => 4
        ]);

        DB::table('assigned_types')->insert([
            ['truck_id' => 17, 'type_id' => 6]
        ]);

        DB::table('assigned_brands_trucks')->insert([
            ['truck_id' => 17, 'brand_truck_id' => 4]
        ]);

        DB::table('assigned_services_trucks')->insert([
            ['truck_id' => 17, 'service_truck_id' => 2]
        ]);

        DB::table('assigned_owners_trucks')->insert([
            ['truck_id' => 17, 'owner_truck_id' => 4]
        ]);

        Truck::create([
            'number' => '203',
            'type_id' => 6,
            'brand_id' => 6,
            'serie' => '1FUYACYBXNH481383',
            'plates' => '471SN3',
            'year' => '1992',
            'weight' => '6.48',
            'service_id' => 2,
            'owner_id' => 3
        ]);

        DB::table('assigned_types')->insert([
            ['truck_id' => 18, 'type_id' => 6]
        ]);

        DB::table('assigned_brands_trucks')->insert([
            ['truck_id' => 18, 'brand_truck_id' => 6]
        ]);

        DB::table('assigned_services_trucks')->insert([
            ['truck_id' => 18, 'service_truck_id' => 2]
        ]);

        DB::table('assigned_owners_trucks')->insert([
            ['truck_id' => 18, 'owner_truck_id' => 3]
        ]);

        Truck::create([
            'number' => '207',
            'type_id' => 6,
            'brand_id' => 4,
            'serie' => '1HSRKBXR4MH342728',
            'plates' => '836SP2',
            'year' => '1991',
            'weight' => '6.05',
            'service_id' => 2,
            'owner_id' => 3
        ]);

        DB::table('assigned_types')->insert([
            ['truck_id' => 19, 'type_id' => 6]
        ]);

        DB::table('assigned_brands_trucks')->insert([
            ['truck_id' => 19, 'brand_truck_id' => 4]
        ]);

        DB::table('assigned_services_trucks')->insert([
            ['truck_id' => 19, 'service_truck_id' => 2]
        ]);

        DB::table('assigned_owners_trucks')->insert([
            ['truck_id' => 19, 'owner_truck_id' => 3]
        ]);

        Truck::create([
            'number' => '208',
            'type_id' => 6,
            'brand_id' => 1,
            'serie' => '1FTYY95SXSVA08798',
            'plates' => '054SP5',
            'year' => '1995',
            'weight' => '5.44',
            'service_id' => 2,
            'owner_id' => 1
        ]);

        DB::table('assigned_types')->insert([
            ['truck_id' => 20, 'type_id' => 6]
        ]);

        DB::table('assigned_brands_trucks')->insert([
            ['truck_id' => 20, 'brand_truck_id' => 1]
        ]);

        DB::table('assigned_services_trucks')->insert([
            ['truck_id' => 20, 'service_truck_id' => 2]
        ]);

        DB::table('assigned_owners_trucks')->insert([
            ['truck_id' => 20, 'owner_truck_id' => 1]
        ]);

        Truck::create([
            'number' => '211',
            'type_id' => 6,
            'brand_id' => 4,
            'serie' => '1HSRDGTR9KH686680',
            'plates' => '158SP5',
            'year' => '1989',
            'weight' => '6.05',
            'service_id' => 2,
            'owner_id' => 1
        ]);

        DB::table('assigned_types')->insert([
            ['truck_id' => 21, 'type_id' => 6]
        ]);

        DB::table('assigned_brands_trucks')->insert([
            ['truck_id' => 21, 'brand_truck_id' => 4]
        ]);

        DB::table('assigned_services_trucks')->insert([
            ['truck_id' => 21, 'service_truck_id' => 2]
        ]);

        DB::table('assigned_owners_trucks')->insert([
            ['truck_id' => 21, 'owner_truck_id' => 1]
        ]);

        Truck::create([
            'number' => '215',
            'type_id' => 6,
            'brand_id' => 9,
            'serie' => '4VG7DEPF3WN747671',
            'plates' => '613SR7',
            'year' => '1998',
            'weight' => '7.9',
            'service_id' => 2,
            'owner_id' => 1
        ]);

        DB::table('assigned_types')->insert([
            ['truck_id' => 22, 'type_id' => 6]
        ]);

        DB::table('assigned_brands_trucks')->insert([
            ['truck_id' => 22, 'brand_truck_id' => 9]
        ]);

        DB::table('assigned_services_trucks')->insert([
            ['truck_id' => 22, 'service_truck_id' => 2]
        ]);

        DB::table('assigned_owners_trucks')->insert([
            ['truck_id' => 22, 'owner_truck_id' => 1]
        ]);

        Truck::create([
            'number' => '216',
            'type_id' => 6,
            'brand_id' => 7,
            'serie' => 'serie   005607',
            'plates' => '195EV3',
            'year' => '1967',
            'weight' => '8',
            'service_id' => 3,
            'owner_id' => 1
        ]);

        DB::table('assigned_types')->insert([
            ['truck_id' => 23, 'type_id' => 6]
        ]);

        DB::table('assigned_brands_trucks')->insert([
            ['truck_id' => 23, 'brand_truck_id' => 7]
        ]);

        DB::table('assigned_services_trucks')->insert([
            ['truck_id' => 23, 'service_truck_id' => 3]
        ]);

        DB::table('assigned_owners_trucks')->insert([
            ['truck_id' => 23, 'owner_truck_id' => 1]
        ]);

        Truck::create([
            'number' => '217',
            'type_id' => 6,
            'brand_id' => 4,
            'serie' => '2HSFMAHR2WC046574',
            'plates' => '611SR7',
            'year' => '1998',
            'weight' => '8.07',
            'service_id' => 2,
            'owner_id' => 1
        ]);

        DB::table('assigned_types')->insert([
            ['truck_id' => 24, 'type_id' => 6]
        ]);

        DB::table('assigned_brands_trucks')->insert([
            ['truck_id' => 24, 'brand_truck_id' => 4]
        ]);

        DB::table('assigned_services_trucks')->insert([
            ['truck_id' => 24, 'service_truck_id' => 2]
        ]);

        DB::table('assigned_owners_trucks')->insert([
            ['truck_id' => 24, 'owner_truck_id' => 1]
        ]);

        Truck::create([
            'number' => '218',
            'type_id' => 6,
            'brand_id' => 6,
            'serie' => '1FUYDMCB9SP568701',
            'plates' => '241SR8',
            'year' => '1995',
            'weight' => '7.61',
            'service_id' => 2,
            'owner_id' => 1
        ]);

        DB::table('assigned_types')->insert([
            ['truck_id' => 25, 'type_id' => 6]
        ]);

        DB::table('assigned_brands_trucks')->insert([
            ['truck_id' => 25, 'brand_truck_id' => 6]
        ]);

        DB::table('assigned_services_trucks')->insert([
            ['truck_id' => 25, 'service_truck_id' => 2]
        ]);

        DB::table('assigned_owners_trucks')->insert([
            ['truck_id' => 25, 'owner_truck_id' => 1]
        ]);

        Truck::create([
            'number' => '219',
            'type_id' => 6,
            'brand_id' => 6,
            'serie' => '1FUYDMCB1SP568692',
            'plates' => '240SR8',
            'year' => '1995',
            'weight' => '7.61',
            'service_id' => 2,
            'owner_id' => 1
        ]);

        DB::table('assigned_types')->insert([
            ['truck_id' => 26, 'type_id' => 6]
        ]);

        DB::table('assigned_brands_trucks')->insert([
            ['truck_id' => 26, 'brand_truck_id' => 6]
        ]);

        DB::table('assigned_services_trucks')->insert([
            ['truck_id' => 26, 'service_truck_id' => 2]
        ]);

        DB::table('assigned_owners_trucks')->insert([
            ['truck_id' => 26, 'owner_truck_id' => 1]
        ]);

        Truck::create([
            'number' => '220',
            'type_id' => 6,
            'brand_id' => 6,
            'serie' => '1FUYDMCBXRP533448',
            'plates' => '238SR8',
            'year' => '1994',
            'weight' => '6.61',
            'service_id' => 2,
            'owner_id' => 1
        ]);

        DB::table('assigned_types')->insert([
            ['truck_id' => 27, 'type_id' => 6]
        ]);

        DB::table('assigned_brands_trucks')->insert([
            ['truck_id' => 27, 'brand_truck_id' => 6]
        ]);

        DB::table('assigned_services_trucks')->insert([
            ['truck_id' => 27, 'service_truck_id' => 2]
        ]);

        DB::table('assigned_owners_trucks')->insert([
            ['truck_id' => 27, 'owner_truck_id' => 1]
        ]);

        Truck::create([
            'number' => '221',
            'type_id' => 6,
            'brand_id' => 8,
            'serie' => 'CF257VMEB00628',
            'plates' => '002EN4',
            'year' => '1990',
            'weight' => '7',
            'service_id' => 3,
            'owner_id' => 1
        ]);

        DB::table('assigned_types')->insert([
            ['truck_id' => 28, 'type_id' => 6]
        ]);

        DB::table('assigned_brands_trucks')->insert([
            ['truck_id' => 28, 'brand_truck_id' => 8]
        ]);

        DB::table('assigned_services_trucks')->insert([
            ['truck_id' => 28, 'service_truck_id' => 3]
        ]);

        DB::table('assigned_owners_trucks')->insert([
            ['truck_id' => 28, 'owner_truck_id' => 1]
        ]);

        Truck::create([
            'number' => '222',
            'type_id' => 6,
            'brand_id' => 1,
            'serie' => '1FTYY95R6RVA03654',
            'plates' => '239SR8',
            'year' => '1994',
            'weight' => '6.61',
            'service_id' => 2,
            'owner_id' => 1
        ]);

        DB::table('assigned_types')->insert([
            ['truck_id' => 29, 'type_id' => 6]
        ]);

        DB::table('assigned_brands_trucks')->insert([
            ['truck_id' => 29, 'brand_truck_id' => 1]
        ]);

        DB::table('assigned_services_trucks')->insert([
            ['truck_id' => 29, 'service_truck_id' => 2]
        ]);

        DB::table('assigned_owners_trucks')->insert([
            ['truck_id' => 29, 'owner_truck_id' => 1]
        ]);

        Truck::create([
            'number' => '223',
            'type_id' => 6,
            'brand_id' => 4,
            'serie' => '2HSFRAHR8XC081266',
            'plates' => '522SR8',
            'year' => '1999',
            'weight' => '7.5',
            'service_id' => 2,
            'owner_id' => 1
        ]);

        DB::table('assigned_types')->insert([
            ['truck_id' => 30, 'type_id' => 6]
        ]);

        DB::table('assigned_brands_trucks')->insert([
            ['truck_id' => 30, 'brand_truck_id' => 4]
        ]);

        DB::table('assigned_services_trucks')->insert([
            ['truck_id' => 30, 'service_truck_id' => 2]
        ]);

        DB::table('assigned_owners_trucks')->insert([
            ['truck_id' => 30, 'owner_truck_id' => 1]
        ]);

        Truck::create([
            'number' => '224',
            'type_id' => 6,
            'brand_id' => 4,
            'serie' => '2HSFRAHR1XC084574',
            'plates' => '523SR8',
            'year' => '1999',
            'weight' => '7.5',
            'service_id' => 2,
            'owner_id' => 1
        ]);

        DB::table('assigned_types')->insert([
            ['truck_id' => 31, 'type_id' => 6]
        ]);

        DB::table('assigned_brands_trucks')->insert([
            ['truck_id' => 31, 'brand_truck_id' => 4]
        ]);

        DB::table('assigned_services_trucks')->insert([
            ['truck_id' => 31, 'service_truck_id' => 2]
        ]);

        DB::table('assigned_owners_trucks')->insert([
            ['truck_id' => 31, 'owner_truck_id' => 1]
        ]);

        Truck::create([
            'number' => '225',
            'type_id' => 6,
            'brand_id' => 4,
            'serie' => '2HSCEAPR75C051690',
            'plates' => '752ES7',
            'year' => '2005',
            'weight' => '8.5',
            'service_id' => 3,
            'owner_id' => 1
        ]);

        DB::table('assigned_types')->insert([
            ['truck_id' => 32, 'type_id' => 6]
        ]);

        DB::table('assigned_brands_trucks')->insert([
            ['truck_id' => 32, 'brand_truck_id' => 4]
        ]);

        DB::table('assigned_services_trucks')->insert([
            ['truck_id' => 32, 'service_truck_id' => 3]
        ]);

        DB::table('assigned_owners_trucks')->insert([
            ['truck_id' => 32, 'owner_truck_id' => 1]
        ]);

        Truck::create([
            'number' => '226',
            'type_id' => 6,
            'brand_id' => 4,
            'serie' => '2HSCEAPRX5C051697',
            'plates' => '753ES7',
            'year' => '2005',
            'weight' => '8.5',
            'service_id' => 3,
            'owner_id' => 1
        ]);

        DB::table('assigned_types')->insert([
            ['truck_id' => 33, 'type_id' => 6]
        ]);

        DB::table('assigned_brands_trucks')->insert([
            ['truck_id' => 33, 'brand_truck_id' => 4]
        ]);

        DB::table('assigned_services_trucks')->insert([
            ['truck_id' => 33, 'service_truck_id' => 3]
        ]);

        DB::table('assigned_owners_trucks')->insert([
            ['truck_id' => 33, 'owner_truck_id' => 1]
        ]);

        Truck::create([
            'number' => '227',
            'type_id' => 6,
            'brand_id' => 4,
            'serie' => '3HSCEAPR75N022124',
            'plates' => '754ES7',
            'year' => '2005',
            'weight' => '8.5',
            'service_id' => 3,
            'owner_id' => 1
        ]);

        DB::table('assigned_types')->insert([
            ['truck_id' => 34, 'type_id' => 6]
        ]);

        DB::table('assigned_brands_trucks')->insert([
            ['truck_id' => 34, 'brand_truck_id' => 4]
        ]);

        DB::table('assigned_services_trucks')->insert([
            ['truck_id' => 34, 'service_truck_id' => 3]
        ]);

        DB::table('assigned_owners_trucks')->insert([
            ['truck_id' => 34, 'owner_truck_id' => 1]
        ]);

        Truck::create([
            'number' => '228',
            'type_id' => 6,
            'brand_id' => 6,
            'serie' => '1FUJA6CK56LW66756',
            'plates' => '800ES7',
            'year' => '2006',
            'weight' => '9',
            'service_id' => 3,
            'owner_id' => 1
        ]);

        DB::table('assigned_types')->insert([
            ['truck_id' => 35, 'type_id' => 6]
        ]);

        DB::table('assigned_brands_trucks')->insert([
            ['truck_id' => 35, 'brand_truck_id' => 6]
        ]);

        DB::table('assigned_services_trucks')->insert([
            ['truck_id' => 35, 'service_truck_id' => 3]
        ]);

        DB::table('assigned_owners_trucks')->insert([
            ['truck_id' => 35, 'owner_truck_id' => 1]
        ]);

        Truck::create([
            'number' => '331',
            'type_id' => 6,
            'brand_id' => 4,
            'serie' => '2HSCEAPR55C025766',
            'plates' => '877EX5',
            'year' => '2005',
            'weight' => '8.5',
            'service_id' => 3,
            'owner_id' => 1
        ]);

        DB::table('assigned_types')->insert([
            ['truck_id' => 36, 'type_id' => 6]
        ]);

        DB::table('assigned_brands_trucks')->insert([
            ['truck_id' => 36, 'brand_truck_id' => 4]
        ]);

        DB::table('assigned_services_trucks')->insert([
            ['truck_id' => 36, 'service_truck_id' => 3]
        ]);

        DB::table('assigned_owners_trucks')->insert([
            ['truck_id' => 36, 'owner_truck_id' => 1]
        ]);

        Truck::create([
            'number' => '232',
            'type_id' => 6,
            'brand_id' => 6,
            'serie' => '1FUJA6CKX5LM22745',
            'plates' => '878EX5',
            'year' => '2005',
            'weight' => '9',
            'service_id' => 3,
            'owner_id' => 1
        ]);

        DB::table('assigned_types')->insert([
            ['truck_id' => 37, 'type_id' => 6]
        ]);

        DB::table('assigned_brands_trucks')->insert([
            ['truck_id' => 37, 'brand_truck_id' => 6]
        ]);

        DB::table('assigned_services_trucks')->insert([
            ['truck_id' => 37, 'service_truck_id' => 3]
        ]);

        DB::table('assigned_owners_trucks')->insert([
            ['truck_id' => 37, 'owner_truck_id' => 1]
        ]);

        Truck::create([
            'number' => '233',
            'type_id' => 6,
            'brand_id' => 4,
            'serie' => '2HSCNAPR16C212293',
            'plates' => '383EZ6',
            'year' => '2006',
            'weight' => '8',
            'service_id' => 3,
            'owner_id' => 1
        ]);

        DB::table('assigned_types')->insert([
            ['truck_id' => 38, 'type_id' => 6]
        ]);

        DB::table('assigned_brands_trucks')->insert([
            ['truck_id' => 38, 'brand_truck_id' => 4]
        ]);

        DB::table('assigned_services_trucks')->insert([
            ['truck_id' => 38, 'service_truck_id' => 3]
        ]);

        DB::table('assigned_owners_trucks')->insert([
            ['truck_id' => 38, 'owner_truck_id' => 1]
        ]);

        Truck::create([
            'number' => '234',
            'type_id' => 6,
            'brand_id' => 4,
            'serie' => '2HSCNAPR97C371483',
            'plates' => '382EZ6',
            'year' => '2007',
            'weight' => '8',
            'service_id' => 3,
            'owner_id' => 1
        ]);

        DB::table('assigned_types')->insert([
            ['truck_id' => 39, 'type_id' => 6]
        ]);

        DB::table('assigned_brands_trucks')->insert([
            ['truck_id' => 39, 'brand_truck_id' => 4]
        ]);

        DB::table('assigned_services_trucks')->insert([
            ['truck_id' => 39, 'service_truck_id' => 3]
        ]);

        DB::table('assigned_owners_trucks')->insert([
            ['truck_id' => 39, 'owner_truck_id' => 1]
        ]);

        Truck::create([
            'number' => '304',
            'type_id' => 6,
            'brand_id' => 6,
            'serie' => '1FUEYRYB8HP310532',
            'plates' => '442SU3',
            'year' => '1987',
            'weight' => '6.61',
            'service_id' => 2,
            'owner_id' => 3
        ]);

        DB::table('assigned_types')->insert([
            ['truck_id' => 40, 'type_id' => 6]
        ]);

        DB::table('assigned_brands_trucks')->insert([
            ['truck_id' => 40, 'brand_truck_id' => 6]
        ]);

        DB::table('assigned_services_trucks')->insert([
            ['truck_id' => 40, 'service_truck_id' => 2]
        ]);

        DB::table('assigned_owners_trucks')->insert([
            ['truck_id' => 40, 'owner_truck_id' => 3]
        ]);

        Truck::create([
            'number' => '305',
            'type_id' => 6,
            'brand_id' => 6,
            'serie' => '1FUPACXB7MP396566',
            'plates' => '134SU3',
            'year' => '1991',
            'weight' => '7.23',
            'service_id' => 2,
            'owner_id' => 1
        ]);

        DB::table('assigned_types')->insert([
            ['truck_id' => 41, 'type_id' => 6]
        ]);

        DB::table('assigned_brands_trucks')->insert([
            ['truck_id' => 41, 'brand_truck_id' => 6]
        ]);

        DB::table('assigned_services_trucks')->insert([
            ['truck_id' => 41, 'service_truck_id' => 2]
        ]);

        DB::table('assigned_owners_trucks')->insert([
            ['truck_id' => 41, 'owner_truck_id' => 1]
        ]);

        Truck::create([
            'number' => '306',
            'type_id' => 6,
            'brand_id' => 9,
            'serie' => '4V1WBBPF3SN711368',
            'plates' => '014ST7',
            'year' => '1995',
            'weight' => '7.2',
            'service_id' => 2,
            'owner_id' => 1
        ]);

        DB::table('assigned_types')->insert([
            ['truck_id' => 42, 'type_id' => 6]
        ]);

        DB::table('assigned_brands_trucks')->insert([
            ['truck_id' => 42, 'brand_truck_id' => 9]
        ]);

        DB::table('assigned_services_trucks')->insert([
            ['truck_id' => 42, 'service_truck_id' => 2]
        ]);

        DB::table('assigned_owners_trucks')->insert([
            ['truck_id' => 42, 'owner_truck_id' => 1]
        ]);
    }
}

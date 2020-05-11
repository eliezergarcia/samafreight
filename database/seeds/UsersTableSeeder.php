<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
        	'first_name' => 'Eliezer',
            'last_name' => 'Hernández',
            'user_name' => 'eliezerhdz',
            'email' => '2dcc.eh@gmail.com',
            'role' => 'Administracion',
            'password' => 'Eligar07',
            'password_encrypted' => 'Eligar07',
            'avatar' => '',
            'contact_phone' => '8129368475',
            'birthday_date' => '1995/07/31',
        ]);

        User::create([
            'first_name' => 'Luis',
            'last_name' => 'Salazar',
            'user_name' => 'luissalazar',
            'email' => 'albertosg@transportessama.com',
            'role' => 'Administracion',
            'password' => 'albertosg',
            'password_encrypted' => 'albertosg',
            'avatar' => '',
            'contact_phone' => '8129368475',
            'birthday_date' => '1995/07/31',
        ]);

        User::create([
            'first_name' => 'Ernesto',
            'last_name' => 'Gonzalez',
            'user_name' => 'ernestogzz',
            'email' => 'egonzalez@transportessama.com',
            'role' => 'Administracion',
            'password' => 'egonzalez',
            'password_encrypted' => 'egonzalez',
            'avatar' => '',
            'contact_phone' => '8129368475',
            'birthday_date' => '1995/07/31',
        ]);

    }
}


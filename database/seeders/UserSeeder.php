<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')-> insert([
            [
                'id' => '0012879654',
                'name' => 'Rara Chadwick',
                'email' => 'RaraChad01@gmail.com',
                'password' => Hash::make('alexa')
            ],
            [
                'id' => '0012867054',
                'name' => 'Alvaro Roma',
                'email' => 'Alvaroma15@gmail.com',
                'password' => Hash::make('cendekia')
            ]
       ]);
    }
}

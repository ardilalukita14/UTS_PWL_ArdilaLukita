<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class AdminSeeder extends Seeder
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
            'username' => 'rarachad._',
            'name' => 'Rara Chadwick',
            'address' => 'Jln.Bali No 81',
            'email' => 'RaraChad01@gmail.com',
            'no_handphone' => '089132516256',
            'password' => Hash::make('alexacendekia1')
        ],
        [
            'id' => '0012867054',
            'username' => 'varoma15_',
            'name' => 'Alvaro Roma',
            'dddress' => 'Jln.Kutai No 123',
            'email' => 'Alvaroma15@gmail.com',
            'no_handphone' => '085116432789',
            'password' => Hash::make('alexacendekia2')
        ]

        ]);
        }
    }
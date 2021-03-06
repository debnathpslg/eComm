<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class user_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            [
                'name' => 'Partha Debnath',
                'email' => 'partha.aastha@gmail.com',
                'password' => Hash::make('12345'),
            ],
            [
                'name' => 'Md Alam',
                'email' => 'alam.aastha@gmail.com',
                'password' => Hash::make('12345'),
            ],
            [
                'name' => 'Pravat Sarkar',
                'email' => 'pravat.aastha@gmail.com',
                'password' => Hash::make('12345'),
            ],
        ]);
    }
}

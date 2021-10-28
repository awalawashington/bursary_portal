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
        DB::table('users')->insert([
            'name' => 'Washington Awala',
            'email' => 'washingtonawala32@gmail.com',
            'phone_number' => '+2547917472452',
            'password' => Hash::make('Awala@2021'),
        ]);
    }
}

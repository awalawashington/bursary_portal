<?php

namespace Database\Seeders;

use Carbon\Carbon;
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
        DB::table('admins')->insert([
            'name' => 'Otiato Jacklinus Msangia',
            'email' => 'jacklinusotiato2@gmail.com',
            'email_verified_at' => Carbon::now(),
            'phone_number' => '0716161616',
            'position' => 'PRESIDENT',
            'password' => Hash::make('jacklinusotiato2@gmail.com'),
            'profile_picture' => 'otiato.jpg',
        ]);

        DB::table('admins')->insert([
            'name' => 'Kipkemoi Haron',
            'email' => 'kipkemoiharon57@gmail.com',
            'email_verified_at' => Carbon::now(),
            'phone_number' => '0713544101',
            'position' => 'SECRETARY GENERAL',
            'password' => Hash::make('kipkemoiharon57@gmail.com'),
            'profile_picture' => 'slate.jpg',
        ]);

        DB::table('admins')->insert([
            'name' => 'Catherine Mwende',
            'email' => 'mwendec347@gmail.com',
            'email_verified_at' => Carbon::now(),
            'phone_number' => '0700899325',
            'position' => 'FINANCE SECRETARY',
            'password' => Hash::make('mwendec347@gmail.com'),
            'profile_picture' => 'cate.jpg',
        ]);

        DB::table('admins')->insert([
            'name' => 'Makau Ngila',
            'email' => 'gilbertmakau@gmail.com',
            'email_verified_at' => Carbon::now(),
            'phone_number' => '0742113780',
            'position' => 'ACADEMIC SECRETARY',
            'password' => Hash::make('gilbertmakau@gmail.com'),
            'profile_picture' => 'makau.jpg',
        ]);

        DB::table('admins')->insert([
            'name' => 'Fatuma Hassan Haro',
            'email' => 'fatumahassan2196@gmail.com',
            'email_verified_at' => Carbon::now(),
            'phone_number' => '0790633680',
            'position' => 'DEPUTY PRESIDENT',
            'password' => Hash::make('fatumahassan2196@gmail.com'),
            'profile_picture' => 'fatuma.jpg',
        ]);

        DB::table('admins')->insert([
            'name' => 'Ogare James',
            'email' => 'jamesogare2017@gmail.com',
            'email_verified_at' => Carbon::now(),
            'phone_number' => '0719263439',
            'position' => 'SPEAKER',
            'password' => Hash::make('jamesogare2017@gmail.com'),
            'profile_picture' => 'ogare.jpg',
        ]);

        DB::table('admins')->insert([
            'name' => 'Developer',
            'email' => 'washingtonawala32@gmail.com',
            'email_verified_at' => Carbon::now(),
            'phone_number' => '0791747252',
            'position' => 'DEVELOPER',
            'password' => Hash::make('Awala$2021'),
            'profile_picture' => 'developer.jpg',
        ]);
    }
}

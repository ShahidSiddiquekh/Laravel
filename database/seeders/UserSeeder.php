<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Fascades\DB;
use Illuminate\Support\Fascades\Hash;

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
            'name' => 'Shahid Siddique Khan',
            'email' => 'shahid.siddique@iplex.co',
            'password' => Hash::make('1234')
        ]);
    }
}
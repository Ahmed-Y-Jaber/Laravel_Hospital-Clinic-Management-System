<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();


        // User::create([
        DB::table('users')->insert([
        [
            'name' => 'userh',
            'email' => 'userh@hh.hh',
            'password' => Hash::make('123456'),
        ]
        ]);
    }
}

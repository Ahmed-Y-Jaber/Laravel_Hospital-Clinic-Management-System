<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->delete();


        // User::create([
        DB::table('admins')->insert([
        [
            'name' => 'adminh',
            'email' => 'adminh@hh.hh',
            'password' => Hash::make('123456'),
        ]
        ]);
    }
}

<?php

namespace Database\Seeders;

use App\Models\RayEmployee;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class RayEmployeeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('ray_employees')->delete();


        // // User::create([
        // DB::table('ray_employees')->insert([
        // [
        //     'name' => 'عبد الله ابو عمرة',
        //     'email' => 'xray@hh.hh',
        //     'password' => Hash::make('123456'),
        // ]
        // ]);

        $ray_employee = new RayEmployee();
        $ray_employee->name = 'عبد الله ابو عمرة';
        $ray_employee->email = 'xray@hh.hh';
        $ray_employee->password = Hash::make('123456');
        $ray_employee->save();
    }
}

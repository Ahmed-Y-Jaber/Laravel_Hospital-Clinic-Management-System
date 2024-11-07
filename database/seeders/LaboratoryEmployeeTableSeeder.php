<?php

namespace Database\Seeders;

use App\Models\LaboratorieEmployee;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class LaboratoryEmployeeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $lab_employee = new LaboratorieEmployee();
        $lab_employee->name = 'قيس اسماعيل';
        $lab_employee->email = 'lab@hh.hh';
        $lab_employee->password = Hash::make('123456');
        $lab_employee->save();
    }
}

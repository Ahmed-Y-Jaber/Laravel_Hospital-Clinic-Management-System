<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $this->call([
            UserTableSeeder::class,
            AdminTableSeeder::class,
          //  AppointmentSeeder::class,
            SectionTableSeeder::class,
            DoctorTableSeeder::class,
            ImageTableSeeder::class,
            PatientTableSeeder::class,
            ServiceTableSeeder::class,
            RayEmployeeTableSeeder::class,
            LaboratoryEmployeeTableSeeder::class,

        ]);

    }
}

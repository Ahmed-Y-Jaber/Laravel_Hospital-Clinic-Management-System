<?php

namespace Database\Seeders;

use App\Models\Appointment;
use App\Models\Doctor;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class DoctorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    //    $doctors =  Doctor::factory()->count(30)->create();
        Doctor::factory()->count(30)->create();

// تم ايقاف المواعيد في السيدر بعد عمل الفرونت

        // foreach ($doctors as $doctor){
        //     $Appointments = Appointment::all()->random()->id;
        //     $doctor->doctorappointments()->attach($Appointments); //doctorappointments the name of relation from doctor model

        // }

        //attach -- take id of doctor and id of appoinment and past it in appoinment_doctor table


        // كود بطريقة ثانية
//        $Appointments = Appointment::all();
//       Doctor::all()->each(function ($doctor) use ($Appointments) { //  بعمل فنكشن دكتور واستخدم الابوينمنتس الي فوق
//           $doctor->doctorappointments()->attach(
//               $Appointments->random(rand(1,7))->pluck('id')->toArray()
//           );
//       });
    }
}

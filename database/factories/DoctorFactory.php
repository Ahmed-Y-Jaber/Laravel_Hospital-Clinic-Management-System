<?php

namespace Database\Factories;

use App\Models\Doctor;
use App\Models\Section;
use Illuminate\Database\Eloquent\Factories\Factory;

class DoctorFactory extends Factory
{

    protected $model = Doctor::class;

    public function definition()
    {
        return [
            'name' => $this->faker->name, // لازم اضيف الحقول التي سوف تتم ترجمتها

            // doctor_translations السابق يضاف في جدول
            // doctors والتالي في جدول

            'email' => $this->faker->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'section_id' => Section::all()->random()->id,
            'phone' => $this->faker->phoneNumber,


        ];
    }
}

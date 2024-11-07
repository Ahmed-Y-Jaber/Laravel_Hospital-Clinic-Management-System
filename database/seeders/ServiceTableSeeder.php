<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;

class ServiceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Services = new Service();

        $Services->price='100';
        $Services->description;
        $Services->status='1';
        $Services->save();

        //insert trans
        $Services->name = 'تبييض اسنان';

        $Services->save();
    }
}

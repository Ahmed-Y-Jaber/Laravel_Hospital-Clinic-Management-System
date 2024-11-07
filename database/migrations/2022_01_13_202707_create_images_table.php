<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('images', function (Blueprint $table) {
            $table->id();
            $table->string('filename');
            $table->integer('imageable_id');    // علاقة مع id الخاص بالدكتور او المريض    //able يجب اضافتها بعد الاسم كما هي
            $table->string('imageable_type');   // type هو نوع الصورة تابعة للدكتور او المريض وهكذا// able يجب اضافتها بعد الاسم كما هي
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('images');
    }
}

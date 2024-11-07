<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePivotServiceGroupTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Service_Group', function (Blueprint $table) {
            $table->id();
            $table->foreignId('Group_id')->references('id')->on('groups')->onDelete('cascade');
            $table->foreignId('Service_id')->references('id')->on('Services')->onDelete('cascade');
            $table->integer('quantity');
            //في البايفوت تابل كل عمود يكون مرتبط مع الذي يقابله في الجدول الاخر
            // وفي حال وجود عمود غير مرتبط مثل quantity
            // يتم الربط من خلال العلاقة في الموديل من خلال with
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
        Schema::dropIfExists('Service_Group');
    }
}

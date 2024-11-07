<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSectionTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('section_translations', function (Blueprint $table) {

            $table->id();
            $table->string('locale')->index();

            // Foreign key to the main model
            // $table->unsignedBigInteger('section_id'); يتم الاستغناء عن هذا السطر باضافلا foreignid
            $table->unique(['section_id', 'locale']);
            // $table->foreign('section_id')->references('id')->on('sections')->onDelete('cascade');
            $table->foreignId('section_id')->references('id')->on('sections')->onDelete('cascade');

            // fields you want to translate
            $table->string('name');
            $table->longText('description')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('section_translations');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLabHaematologiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lab_haematologies', function (Blueprint $table) {
            $table->id();
            $table->foreignId('invoice_id')->references('id')->on('invoices')->onDelete('cascade');
            $table->foreignId('patient_id')->references('id')->on('patients')->onDelete('cascade');
            $table->foreignId('doctor_id')->references('id')->on('doctors')->onDelete('cascade');
            $table->foreignId('employee_id')->references('id')->on('laboratorie_employees')->onDelete('cascade');
            $table->date('lab_date');
            $table->double('HGB')->nullable();
            $table->double('n_HGB')->nullable();
            $table->double('HCT')->nullable();
            $table->double('n_HCT')->nullable();
            $table->double('RBCs')->nullable();
            $table->double('n_RBCs')->nullable();
            $table->double('MCV')->nullable();
            $table->double('n_MCV')->nullable();
            $table->double('MCH')->nullable();
            $table->double('n_MCH')->nullable();
            $table->double('MCHC')->nullable();
            $table->double('n_MCHC')->nullable();
            $table->double('PLT')->nullable();
            $table->double('n_PLT')->nullable();
            $table->double('WBCs')->nullable();
            $table->double('n_WBCs')->nullable();
            $table->double('Blood_Group')->nullable();
            $table->double('n_Blood_Group')->nullable();
            $table->double('Rh')->nullable();
            $table->double('n_Rh')->nullable();
            $table->double('Reticulocyte_Count')->nullable();
            $table->double('n_Reticulocyte_Count')->nullable();
            $table->double('Neutrophils')->nullable();
            $table->double('n_Neutrophils')->nullable();
            $table->double('Lymphocytes')->nullable();
            $table->double('n_Lymphocytes')->nullable();
            $table->double('Monocytes')->nullable();
            $table->double('n_Monocytes')->nullable();
            $table->double('Eosinophils')->nullable();
            $table->double('n_Eosinophils')->nullable();
            $table->double('Basophils')->nullable();
            $table->double('n_Basophils')->nullable();
            $table->double('Abnormal_Cells')->nullable();
            $table->double('n_Abnormal_Cells')->nullable();
            $table->double('Bleeding_time')->nullable();
            $table->double('n_Bleeding_time')->nullable();
            $table->double('Clotting_Time')->nullable();
            $table->double('n_Clotting_Time')->nullable();
            $table->double('PT')->nullable();
            $table->double('n_PT')->nullable();
            $table->double('Activity')->nullable();
            $table->double('n_Activity')->nullable();
            $table->double('Control')->nullable();
            $table->double('n_Control')->nullable();
            $table->double('INR')->nullable();
            $table->double('n_INR')->nullable();
            $table->double('APTT')->nullable();
            $table->double('n_APTT')->nullable();
            $table->double('Fibrinogen')->nullable();
            $table->double('n_Fibrinogen')->nullable();
            $table->double('Factor')->nullable();
            $table->double('n_Factor')->nullable();
            $table->double('ESR1')->nullable();
            $table->double('ESR2')->nullable();
            $table->double('n_ESR')->nullable();

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
        Schema::dropIfExists('lab_haematologies');
    }
}

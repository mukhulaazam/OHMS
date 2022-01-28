<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInPatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('in_patients', function (Blueprint $table) {
            $table->id();
            $table->foreignId('doctor_id')->constrained()->cascadeOnDelete();
            $table->string('serial_no')->unique();
            $table->string('p_name', 50);
            $table->string('p_phone', 50);
            $table->string('g_name', 50);
            $table->string('g_phone', 50);
            $table->tinyInteger('gender');
            $table->string('age', 30);
            $table->string('blood_group', 30);
            $table->string('height', 50);
            $table->string('weight', 50);
            $table->string('bp', 50);
            $table->string('symptoms', 50);
            $table->string('address', 110);
            $table->dateTime('admission_date', 0);
            $table->string('case', 110);
            $table->string('casualty', 10);
            $table->string('old_patient', 10);
            $table->string('reference', 60);
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
        Schema::dropIfExists('in_patients');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teleconsultations', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->bigInteger('patient_id');
            $table->bigInteger('creator');
            //$table->uuid('type_teleconsultation_id');
            $table->dateTime('date_heure');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('teleconsultations');
    }
};

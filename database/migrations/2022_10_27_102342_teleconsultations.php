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
            $table->id();
            $table->uuid('uuid')->nullable();
            $table->bigInteger('patient_id');
            $table->bigInteger('creator');
            $table->dateTime('date_heure');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('teleconsables', function (Blueprint $table) {
            $table->bigInteger('telecons_id');
            $table->morphs('teleconsable');
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

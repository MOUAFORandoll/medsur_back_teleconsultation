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
            $table->longText('cat')->nullable();
            $table->longText('description_diagnostic');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('teleconsultationables', function (Blueprint $table) {
            $table->bigInteger('teleconsultation_id');
            $table->morphs('teleconsultationable');
            $table->json('data')->nullable();
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

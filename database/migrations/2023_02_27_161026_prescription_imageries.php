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
        Schema::create('prescription_imageries', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid')->nullable();
            $table->bigInteger('patient_id');
            $table->bigInteger('creator');
            $table->bigInteger('ligne_temps_id')->nullable();
            $table->bigInteger('medecin_id');
            $table->bigInteger('niveau_urgence_id');
            $table->longText('renseignement_clinique');
            $table->longText('information_clinique');
            $table->longText('explication_demande_diagnostic');
            $table->longText('autre')->nullable();
            $table->dateTime('date_heure');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('prescription_imagerieables', function (Blueprint $table) {
            $table->bigInteger('prescription_imagerie_id');
            $table->morphs('prescription_imagerieable');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('prescription_imageries');
    }
};

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
        Schema::create('examen_analyses', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid')->nullable();
            $table->bigInteger('patient_id');
            $table->bigInteger('creator');
            $table->bigInteger('ligne_temps_id')->nullable();
            $table->bigInteger('medecin_id');
            $table->bigInteger('etablissement_id');
            $table->bigInteger('option_financement_id');
            $table->bigInteger('raison_prescription_id');
            $table->bigInteger('niveau_urgence_id');
            $table->bigInteger('etablissement_id');
            $table->longText('renseignement_clinique');
            $table->dateTime('date_heure');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('examen_analyseables', function (Blueprint $table) {
            $table->bigInteger('examen_analyse_id');
            $table->morphs('examen_analyseable');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('examen_analyses');
    }
};

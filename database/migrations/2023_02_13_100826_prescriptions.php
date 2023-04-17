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
        Schema::create('prescriptions', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid')->nullable();
            $table->bigInteger('patient_id');
            $table->bigInteger('creator');
            $table->bigInteger('medecin_id');
            $table->bigInteger('ligne_temps_id')->nullable();
            $table->bigInteger('niveau_urgence_id');
            $table->dateTime('date_heure');
            $table->longText('motif');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('prescriptionables', function (Blueprint $table) {
            $table->bigInteger('prescription_id');
            $table->morphs('prescriptionable');
            $table->string("quantite_lors_une_prise")->nullable();
            $table->string("duree_traitement")->nullable();
            $table->string("nombre_de_prise")->nullable();
            $table->string("nombre_renouvelement")->nullable();
            $table->string("nombre_de_fois")->nullable();
            $table->string("intervalle_entre_deux_prises")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('prescriptions');
    }
};

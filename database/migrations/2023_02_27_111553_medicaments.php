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
        Schema::create('medicaments', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid')->nullable();
            $table->bigInteger('unite_presentation_id');
            $table->bigInteger('voie_administration_id');
            $table->bigInteger('conditionnement_id')->nullable();
            $table->string('nom_commerciale');
            $table->string('code')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });


        Schema::create('prescription_medicament', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('medicament_id');
            $table->bigInteger('prescription_id');
            $table->integer('quantite_lors_une_prise')->nullable();
            $table->string('duree_traitement')->nullable();
            $table->integer('nombre_de_prise')->nullable();
            $table->integer('nombre_renouvelement')->nullable();
            $table->integer('nombre_de_fois')->nullable();
            $table->integer('intervalle_entre_deux_prises')->nullable();
            $table->integer('nombre_unite_achat')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('medicamentables', function (Blueprint $table) {
            $table->bigInteger('medicament_id');
            $table->morphs('medicamentable');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists(['prescription_medicament', 'medicaments']);
    }
};

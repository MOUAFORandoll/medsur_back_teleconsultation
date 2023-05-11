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

            $table->text('forme_pharmaceutique')->nullable();
            $table->text('voie_administration_id')->nullable();
            $table->bigInteger('categorie_medicamenteuse_id')->nullable();

            $table->bigInteger('horaire_de_prises_id')->nullable();
            //$table->bigInteger('relation_alimentaires_id')->nullable();

            $table->bigInteger('unite_presentation_id');
            $table->bigInteger('prescription_id')->nullable();
            $table->bigInteger('conditionnement_id')->nullable();
            $table->string('denomination');
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
            $table->string('nombre_de_prise')->nullable();
            $table->integer('nombre_renouvelement')->nullable();
            $table->integer('nombre_de_fois')->nullable();
            $table->string('intervalle_entre_deux_prises')->nullable();
            $table->integer('nombre_unite_achat')->nullable();

            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('medicamentables', function (Blueprint $table) {
            $table->bigInteger('medicament_id');
            $table->morphs('medicamentable');
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
        Schema::dropIfExists(['prescription_medicament', 'medicaments']);
    }
};

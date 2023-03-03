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
        Schema::create('bon_prises_en_charges', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid')->nullable();
            $table->bigInteger('patient_id');
            $table->bigInteger('creator');
            $table->bigInteger('ligne_temps_id')->nullable();
            $table->bigInteger('niveau_urgence_id');
            $table->bigInteger('medecin_id');
            $table->bigInteger('etablissement_id')->nullable();
            $table->longText('plainte');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('bon_prises_en_chargeables', function (Blueprint $table) {
            $table->bigInteger('bon_prise_en_charge_id');
            $table->morphs('bon_prises_en_chargeable');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bon_prises_en_charges');
    }
};

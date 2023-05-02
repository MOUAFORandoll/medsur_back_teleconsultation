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
        Schema::table('medicaments', function (Blueprint $table) {
            $table->bigInteger('horaire_de_prises_id')->nullable();
            $table->bigInteger('relation_alimentaires_id')->nullable();
        });
        // unite_presentation_id
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('medicaments', function (Blueprint $table) {
            $table->bigInteger('voie_administration_id')->change();
        });
    }
};

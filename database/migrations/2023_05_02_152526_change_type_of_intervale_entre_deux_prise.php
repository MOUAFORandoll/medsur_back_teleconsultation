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
        Schema::table('prescription_medicament', function (Blueprint $table) {
            $table->string('intervalle_entre_deux_prises')->nullable()->change();
            $table->string('nombre_de_prise')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('prescription_medicament', function (Blueprint $table) {
            $table->string('intervalle_entre_deux_prises')->nullable()->change();
            $table->string('nombre_de_prise')->nullable()->change();
        });
    }
};

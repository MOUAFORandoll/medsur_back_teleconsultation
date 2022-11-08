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
        Schema::create('etablissement_examen_complementaire', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid')->nullable();
            $table->bigInteger('etablissement_id');
            $table->bigInteger('examen_complementaire_id');
            $table->double('prix');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('etablissement_examen_complementaire');
    }
};

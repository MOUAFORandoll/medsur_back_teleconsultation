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
        Schema::create('statuts', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid')->nullable();
            $table->string('valeur');
            $table->text('description')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('statutables', function (Blueprint $table) {
            $table->bigInteger('statut_id');
            $table->morphs('statutable');
        });

        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('statuts');
    }
};

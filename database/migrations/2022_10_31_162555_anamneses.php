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
        Schema::create('anamneses', function (Blueprint $table) {
            $table->id()->startingValue(75);
            $table->uuid('uuid')->nullable();
            $table->string('fr_description');
            $table->string('en_description')->nullable();
            $table->string('slug');
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
        Schema::dropIfExists('anamneses');
    }
};

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
        Schema::create('types', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid')->nullable();
            $table->string('libelle');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('typeables', function (Blueprint $table) {
            $table->bigInteger('type_id');
            $table->morphs('typeable');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists(['types', 'typeables']);
    }
};

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
            $table->longText('plainte');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('bon_prises_en_chargeables', function (Blueprint $table) {
            $table->bigInteger('bon_prises_en_charge_id');
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

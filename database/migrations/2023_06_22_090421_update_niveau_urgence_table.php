<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * 
     * ddds
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('niveau_urgences', function (Blueprint $table) {

            $table->text('description_en')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('niveau_urgences', function (Blueprint $table) {
            $table->dropColumn('description_en');
        });
    }
};

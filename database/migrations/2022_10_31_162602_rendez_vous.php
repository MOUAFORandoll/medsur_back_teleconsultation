<?php

use App\Enums\Statut;
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
        Schema::create('rendez_vous', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid')->nullable();
            $table->bigInteger('creator')->nullable();
            $table->bigInteger('consultation_id')->nullable();
            $table->bigInteger('etablissement_id')->nullable();
            $table->bigInteger('ligne_temps_id')->nullable();
            $table->bigInteger('parent_id')->nullable();
            $table->bigInteger('patient_id');
            $table->bigInteger('praticien_id')->nullable();
            $table->bigInteger('sourceable_id')->nullable();
            $table->bigInteger('statut_id');
            $table->string('sourceable_type')->nullable();
            $table->string('initiateur')->nullable();
            $table->string('nom_medecin')->nullable();
            $table->text('motifs')->nullable();
            $table->dateTime('date')->nullable();
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
        Schema::dropIfExists('rendez_vous');
    }
};

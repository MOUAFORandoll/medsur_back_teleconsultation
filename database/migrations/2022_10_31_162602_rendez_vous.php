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
            $table->uuid('id')->primary();
            $table->uuid('creator')->nullable();
            $table->uuid('consultation_id')->nullable();
            $table->uuid('etablissement_id')->nullable();
            $table->uuid('ligne_temps_id')->nullable();
            $table->uuid('parent_id')->nullable();
            $table->uuid('patient_id');
            $table->uuid('praticien_id')->nullable();
            $table->uuid('sourceable_id')->nullable();
            $table->uuid('statut_id');
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

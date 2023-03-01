<?php

namespace Database\Seeders;

use App\Models\Etablissement;
use App\Models\ExamenAnalyse;
use App\Models\ExamenComplementaire;
use App\Models\OptionFinancement;
use App\Models\RaisonPrescription;
use App\Models\Teleconsultation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ExamenAnalyseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach(ExamenAnalyse::factory()->count(10)->create() as $examen){
            $examen->etablissements()->sync(Etablissement::inRandomOrder()->limit(1)->get());
            $examen->option_financements()->sync(OptionFinancement::inRandomOrder()->limit(3)->get());
            $examen->raison_prescriptions()->sync(RaisonPrescription::inRandomOrder()->limit(3)->get());
            $examen->examen_complementaires()->sync(ExamenComplementaire::inRandomOrder()->limit(10)->get());
            $examen->teleconsultations()->sync(Teleconsultation::inRandomOrder()->limit(1)->get());
        }
    }
}

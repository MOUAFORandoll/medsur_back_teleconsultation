<?php

namespace Database\Seeders;

use App\Models\BonPriseEnCharge;
use App\Models\Etablissement;
use App\Models\ExamenComplementaire;
use App\Models\Motif;
use App\Models\OptionFinancement;
use App\Models\RaisonPrescription;
use App\Models\RendezVous;
use App\Models\Teleconsultation;
use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BonPriseEnChargeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach(BonPriseEnCharge::factory()->count(30)->create() as $examen){
            $examen->etablissements()->sync(Etablissement::inRandomOrder()->limit(1)->get());
            $examen->option_financements()->sync(OptionFinancement::inRandomOrder()->limit(3)->get());
            $examen->raison_prescriptions()->sync(RaisonPrescription::inRandomOrder()->limit(3)->get());
            $examen->examen_complementaires()->sync(ExamenComplementaire::inRandomOrder()->limit(10)->get());
            $examen->motifs()->sync(Motif::inRandomOrder()->limit(3)->get());
            $examen->type_teleconsultations()->sync(Type::has('teleconsultations')->inRandomOrder()->limit(3)->get());
            $examen->teleconsultations()->sync(Teleconsultation::inRandomOrder()->limit(1)->get());
            $examen->rendezVous()->sync(RendezVous::inRandomOrder()->limit(1)->get());
        }
    }
}

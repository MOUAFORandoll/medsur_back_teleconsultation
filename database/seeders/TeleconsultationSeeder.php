<?php

namespace Database\Seeders;

use App\Models\Allergie;
use App\Models\Anamnese;
use App\Models\Antecedent;
use App\Models\Etablissement;
use App\Models\ExamenClinique;
use App\Models\ExamenComplementaire;
use App\Models\Motif;
use App\Models\RendezVous;
use App\Models\Teleconsultation;
use App\Models\Type;
use App\Models\TypeTeleconsultation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeleconsultationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = array(
            array('libelle' => 'Général'),
            array('libelle' => 'Cardio-vasculaire'),
            array('libelle' => 'Pulmonaire'),
            array('libelle' => 'Gastro-intestinal'),
            array('libelle' => 'Ostéo-articulaire'),
            array('libelle' => 'Neurologique'),
            array('libelle' => 'Dermatologique'),
            array('libelle' => 'Psychiatrique')
        );

        foreach($types as $type){
            $type = Type::where('libelle', $type['libelle'])->first();
            if(is_null($type)){
                $type = Type::create($type);
                $type->teleconsultations()->sync(Teleconsultation::factory()->count(1)->create());
                foreach($type->teleconsultations as $teleconsultation){
                    $teleconsultation->motifs()->sync(Motif::inRandomOrder()->limit(3)->get());
                    $teleconsultation->allergies()->sync(Allergie::inRandomOrder()->limit(3)->get());
                    $teleconsultation->anamneses()->sync(Anamnese::inRandomOrder()->limit(3)->get());
                    $teleconsultation->antededents()->sync(Antecedent::inRandomOrder()->limit(3)->get());
                    $teleconsultation->examenCliniques()->sync(ExamenClinique::inRandomOrder()->limit(3)->get());
                    $teleconsultation->etablissements()->sync(Etablissement::inRandomOrder()->limit(1)->get());
                    $teleconsultation->examenComplementaires()->sync(ExamenComplementaire::inRandomOrder()->limit(7)->get());
                    $teleconsultation->rendezVous()->sync(RendezVous::inRandomOrder()->limit(5)->get());
                }
            }else{
                $type->teleconsultations()->sync(Teleconsultation::factory()->count(1)->create());
                foreach($type->teleconsultations as $teleconsultation){
                    $teleconsultation->motifs()->sync(Motif::inRandomOrder()->limit(3)->get());
                    $teleconsultation->allergies()->sync(Allergie::inRandomOrder()->limit(3)->get());
                    $teleconsultation->anamneses()->sync(Anamnese::inRandomOrder()->limit(3)->get());
                    $teleconsultation->antededents()->sync(Antecedent::inRandomOrder()->limit(3)->get());
                    $teleconsultation->examenCliniques()->sync(ExamenClinique::inRandomOrder()->limit(3)->get());
                    $teleconsultation->etablissements()->sync(Etablissement::inRandomOrder()->limit(1)->get());
                    $teleconsultation->examenComplementaires()->sync(ExamenComplementaire::inRandomOrder()->limit(7)->get());
                    $teleconsultation->rendezVous()->sync(RendezVous::inRandomOrder()->limit(5)->get());
                }
            }
        }
    }
}

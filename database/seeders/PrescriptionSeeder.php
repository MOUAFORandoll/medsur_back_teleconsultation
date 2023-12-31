<?php

namespace Database\Seeders;

use App\Models\Conditionnement;
use App\Models\Etablissement;
use App\Models\ExamenComplementaire;
use App\Models\FormeMedicamenteuse;
use App\Models\HoraireDePrise;
use App\Models\IntervalleDePrise;
use App\Models\Medicament;
use App\Models\OptionFinancement;
use App\Models\Prescription;
use App\Models\RaisonPrescription;
use App\Models\RelationAlimentation;
use App\Models\Teleconsultation;
use App\Models\VoieAdministration;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PrescriptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach(Prescription::factory()->count(30)->create() as $prescription){

            $medicaments = Medicament::factory()->count(3)->create();
            foreach($medicaments as $medicament){
                $medicament->prescriptions()->attach($prescription, [
                    'quantite_lors_une_prise' => rand(1, 7),
                    'duree_traitement' => rand(1, 7),
                    'nombre_de_prise' => rand(1, 7),
                    'nombre_renouvelement' => rand(1, 7),
                    'nombre_de_fois' => rand(1, 7),
                    'intervalle_entre_deux_prises' => rand(1, 7),
                    'nombre_unite_achat' => rand(1, 3)
                ]);
            }


            foreach($prescription->medicaments as $medicament){
                $medicament->horaire_de_prises()->sync(HoraireDePrise::inRandomOrder()->limit(3)->get());
                $medicament->conditionnements()->sync(Conditionnement::inRandomOrder()->limit(1)->get());
                $medicament->intervalle_de_prises()->sync(IntervalleDePrise::inRandomOrder()->limit(3)->get());
                $medicament->relation_alimentaires()->sync(RelationAlimentation::inRandomOrder()->limit(3)->get());
                $medicament->forme_medicamenteuses()->sync(FormeMedicamenteuse::inRandomOrder()->limit(1)->get());
                $medicament->voie_administrations()->sync(VoieAdministration::inRandomOrder()->limit(1)->get());

            }

            $prescription->etablissements()->sync(Etablissement::inRandomOrder()->limit(1)->get());
            $prescription->option_financements()->sync(OptionFinancement::inRandomOrder()->limit(3)->get());
            $prescription->raison_prescriptions()->sync(RaisonPrescription::inRandomOrder()->limit(3)->get());
            //$prescription->examen_complementaires()->sync(ExamenComplementaire::inRandomOrder()->limit(10)->get());
            $prescription->teleconsultations()->sync(Teleconsultation::inRandomOrder()->limit(1)->get());
        }
    }
}

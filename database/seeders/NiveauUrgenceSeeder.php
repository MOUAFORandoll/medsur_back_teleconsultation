<?php

namespace Database\Seeders;

use App\Models\NiveauUrgence;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NiveauUrgenceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $niveaux = [
            ['valeur' => 1, 'description' => "Urgences sans risque particulier, cette situation ne nécessite pas de soins d'urgence, la prise en charge peut être différée", 'description_en' => "Emergencies without particular risk, this situation does not require emergency care, management can be postponed"],
            ['valeur' => 2, 'description' => "Urgences sans risque particulier, cette situation ne nécessite pas de soins d'urgence, la prise en charge peut être différée", 'description_en' => "Emergencies without particular risk, this situation does not require emergency care, management can be postponed"],
            ['valeur' => 3, 'description' => "Urgence modérée, la vie du patient n'est pas en danger, son état est stable mais pourrait nécessiter des investigations complémentaires", 'description_en' => "Moderate emergency, the patient's life is not in danger, his condition is stable but may require further investigation"],
            ['valeur' => 4, 'description' => "Urgence majeure avec risque vital potentiel. La situation du patient pourrait s'aggraver rapidement", 'description_en' => "Major emergency with potential life-threatening risk. The patient's situation could worsen rapidly"],
            ['valeur' => 5, 'description' => "Urgence vitale, la prise en charge médicale est immédiate", 'description_en' => "Vital emergency, medical care is immediate"],
        ];

        foreach ($niveaux as $niveau) {
            NiveauUrgence::create($niveau);
        }
    }
}

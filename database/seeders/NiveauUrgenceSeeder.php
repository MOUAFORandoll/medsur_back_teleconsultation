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
            ['valeur' => 1, 'description' => "Urgences sans risque particulier, cette situation ne nécessite pas de soins d'urgence, la prise en charge peut être différée"],
            ['valeur' => 2, 'description' => "Urgences sans risque particulier, cette situation ne nécessite pas de soins d'urgence, la prise en charge peut être différée"],
            ['valeur' => 3, 'description' => "Urgence modérée, la vie du patient n'est pas en danger, son état est stable mais pourrait nécessiter des investigations complémentaires"],
            ['valeur' => 4, 'description' => "Urgence majeure avec risque vital potentiel. La situation du patient pourrait s'aggraver rapidement"],
            ['valeur' => 5, 'description' => "Urgence vitale, la prise en charge médicale est immédiate"],
        ];

        foreach($niveaux as $niveau){
            NiveauUrgence::create($niveau);
        }
    }
}

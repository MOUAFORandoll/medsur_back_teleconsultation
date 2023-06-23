<?php

namespace Database\Seeders;

use App\Models\NiveauUrgence;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NiveauUrgenceUpdateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $niveaux = [
            "Emergencies without particular risk, this situation does not require emergency care, management can be postponed",
            "Emergencies without particular risk, this situation does not require emergency care, management can be postponed",
            "Moderate emergency, the patient's life is not in danger, his condition is stable but may require further investigation",
            "Major emergency with potential life-threatening risk. The patient's situation could worsen rapidly",
            "Vital emergency, medical care is immediate"
        ];
        $niveauxU = NiveauUrgence::get();
        foreach($niveauxU as $i => $niveau){
            $niveau =  $niveauxU[$i];
            $niveau->description_en = $niveaux[$i];
            $niveau->save();
        }
    }
}

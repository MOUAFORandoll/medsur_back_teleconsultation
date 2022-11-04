<?php

namespace Database\Seeders;

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
            $exist_type = Type::where('libelle', $type['libelle'])->first();
            if(is_null($exist_type)){
                $type = Type::create($type);
                $type->teleconsultations()->sync(Teleconsultation::factory()->count(10)->create());
            }
        }
    }
}

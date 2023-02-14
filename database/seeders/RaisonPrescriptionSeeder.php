<?php

namespace Database\Seeders;

use App\Models\RaisonPrescription;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class RaisonPrescriptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $raison_prescriptions = [
            ['uuid' => Str::uuid()->toString(), 'libelle' => "hospitalisé"],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "soins à domicile"],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "prévention volontaire (check-up)"],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "médecine du travail"],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "Autres"]
        ];
        foreach($raison_prescriptions as $raison_prescription){
          RaisonPrescription::create($raison_prescription);
        }
    }
}

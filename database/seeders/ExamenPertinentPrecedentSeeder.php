<?php

namespace Database\Seeders;

use App\Models\ExamenPertinentPrecedent;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ExamenPertinentPrecedentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $examen_pertinents = [
            ['uuid' => Str::uuid()->toString(), 'libelle' => "CT"],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "RMN"],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "Echographie"],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "Autres"],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "Inconnu"]
        ];
        foreach($examen_pertinents as $examen_pertinent){
            ExamenPertinentPrecedent::create($examen_pertinent);
        }
    }
}

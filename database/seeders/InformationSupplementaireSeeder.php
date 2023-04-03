<?php

namespace Database\Seeders;

use App\Models\InformationSupplementaire;
use App\Models\RelationAlimentation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class InformationSupplementaireSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $information_supplementaires = [
            ['uuid' => Str::uuid()->toString(), 'libelle' => "Allergie"],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "Diabète"],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "Insuffisance rénale"],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "Grossesse"],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "Implant"]
        ];
        foreach($information_supplementaires as $information_supplementaire){
          InformationSupplementaire::create($information_supplementaire);
        }
    }
}

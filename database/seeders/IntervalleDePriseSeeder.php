<?php

namespace Database\Seeders;

use App\Models\IntervalleDePrise;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class IntervalleDePriseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $intervalle_de_prises = [
            ['uuid' => Str::uuid()->toString(), 'libelle' => "Matin"],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "Midi"],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "Après-midi"],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "Soir"],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "Coucher"]
        ];
        foreach($intervalle_de_prises as $intervalle_de_prise){
            IntervalleDePrise::create($intervalle_de_prise);
        }
    }
}

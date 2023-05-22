<?php

namespace Database\Seeders;

use App\Models\HoraireDePrise;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class HoraireDePriseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $horaire_de_prises = [
            ['uuid' => Str::uuid()->toString(), 'libelle' => "Matin"],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "Midi"],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "Après-midi"],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "Soir"],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "Coucher"]
        ];

        foreach($horaire_de_prises as $horaire_de_prise){
            HoraireDePrise::create($horaire_de_prise);
        }
    }
}

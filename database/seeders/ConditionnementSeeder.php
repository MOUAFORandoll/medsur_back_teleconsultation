<?php

namespace Database\Seeders;

use App\Models\Conditionnement;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ConditionnementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $conditionnements = [
            ['uuid' => Str::uuid()->toString(), 'libelle' => "Ampoule"],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "Applicateur oral pré-rempli"],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "Bande"],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "Boîte"],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "Bouteille"],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "Bouteille de gaz"],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "Cartouche"],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "Cartouche doseuse"],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "Fiole"],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "Flacon compte-gouttes"],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "Injecteur pré-rempli"],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "Plaquette / blister de Comprimé"],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "Plaquette / Blister unidose"],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "Poche"],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "Pot"],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "Récipient unidose"],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "Sac"],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "Sachet"],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "Seringue orale préremplie"],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "Seringue préremplie"],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "Sonde gastro-entérale pré-remplie"],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "Stylo prérempli"],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "Tube"],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "Vaporisateur"]
        ];
        foreach($conditionnements as $conditionnement){
          Conditionnement::create($conditionnement);
        }
    }
}


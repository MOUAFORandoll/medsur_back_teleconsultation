<?php

namespace Database\Seeders;

use App\Models\UnitePresentation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UnitePresentationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $unite_presentations = [
            ['uuid' => Str::uuid()->toString(), 'libelle' => "Ampoule"],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "Applicateur"],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "Sac"],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "Cloque"],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "Bouteille"],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "Comprimé"],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "Capsule"],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "Cartouche"],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "Chewing-gum"],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "Tasse"],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "Cylindre"],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "Pansement"],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "Goutte"],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "Film"],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "Implant"],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "Inhalateur"],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "Pot"],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "Lyophilisat"],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "Matrice"],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "Tampon"],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "Papier"],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "Pastille"],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "Stylo"],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "Pendentif"],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "Pessaire"],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "Pilule"],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "Pipette"],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "Plâtre"],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "Poche"],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "Sachet"],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "Éponge"],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "Cuillère"],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "Bâton"],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "Paille"],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "Bande"],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "Suppositoire"],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "Écouvillon"],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "Seringue"],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "Système"],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "Comprimé"],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "Tampon"],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "Fil"],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "Tube"],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "Fiole"]
        ];
        foreach($unite_presentations as $unite_presentation){
            UnitePresentation::create($unite_presentation);
        }
    }
}











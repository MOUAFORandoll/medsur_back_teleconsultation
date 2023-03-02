<?php

namespace Database\Seeders;

use App\Models\RelationAlimentation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class RelationAlimentaireSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $relation_alimentaires = [
            ['uuid' => Str::uuid()->toString(), 'libelle' => "1 h avant le déjeuner."],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "En dehors des repas si traitement local (parasitose intestinale). Eviter les repas riches en graisses."],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "Éviter la prise concomitante de produits laitiers ou autre aliment riche en calcium ou en fer : sardines en conserve, etc."],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "Eviter le jus de pamplemousse."],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "Eviter le millepertuis."],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "Eviter les repas riches en graisses et riches en calories."],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "Eviter les repas riches en graisses."],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "Limiter la consommation du thon au cours du traitement."],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "Ne pas prendre de  boissons alcoolisées, notamment chez les conducteurs de véhicules ou les utilisateurs de machines."],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "Per os : prise ½ h à1 h avant les repas."],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "Prise > 30 min avant ou 2 h après les repas."],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "Prise 1 h avant ou ≥ 2 h après produits laitiers,"],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "Prise 1 h avant ou 2 h après les repas, avec de l'eau."],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "Prise à distance des repas avec un grand verre d'eau sauf en cas d'antécédents de gastralgies."],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "Prise à distance des repas préférable ou avec un repas léger non gras en cas de nausées ou de troubles digestifs."],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "Prise à distance des repas."],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "Prise à jeun, au moins 2 heures avant ou 2 heures après le repas, uniquement avec de l'eau."],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "Prise à jeun. A distance des repas contenant beaucoup de graisses."],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "Prise au cours du repas. Dissoudre le comprimé dans un grand verre d’eau."],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "Prise au milieu des repas. Boire un grand verre d'eau."],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "Prise avec le repas."],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "Prise en dehors des repas."],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "Prise immédiatement après le repas."],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "Prise immédiatement après les repas."],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "Réduire la consommation de thé et de café durant le traitement."],
        ];
        foreach($relation_alimentaires as $relation_alimentaire){
          RelationAlimentation::create($relation_alimentaire);
        }
    }
}

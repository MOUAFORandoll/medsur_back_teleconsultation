<?php

namespace Database\Seeders;

use App\Models\Statut;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StatutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $statuts = [
            ['valeur' => "En attente", 'description' => "L'alerte a été bien reçu par le service médical et est en attente de traitement"],
            ['valeur' => "En cours", 'description' => "Nous avons déjà affecté le médecin responsable de cette prise en charge"],
            ['valeur' => "Terminé", 'description' => "La téléconsultation a été fait et le diagnostic posé"]
          ];
        foreach($statuts as $statut){
          Statut::create($statut);
        }
    }
}

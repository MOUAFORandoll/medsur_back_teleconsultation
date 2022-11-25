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
            ['valeur' => "En attente", 'description' => "En attente"],
            ['valeur' => "En cours", 'description' => "En cours"],
            ['valeur' => "Terminé", 'description' => "Terminé"]
          ];
          foreach($statuts as $statut){
            Statut::create($statut);
          }
    }
}

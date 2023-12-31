<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            StatutSeeder::class,
            AntecedentSeeder::class,
            AnamneseSeeder::class,
            AllergieSeeder::class,
            MotifSeeder::class,
            ExamenCliniqueSeeder::class,
            RendezVousSeeder::class,
            EtablissementSeeder::class,
            NiveauUrgenceSeeder::class,
            ExamenComplementaireSeeder::class,
            EtablissementExamenComplementaireSeeder::class,
            TeleconsultationSeeder::class,
            OptionFinancementSeeder::class,
            RaisonPrescriptionSeeder::class,
            ExamenAnalyseSeeder::class,
            BonPriseEnChargeSeeder::class,
            ExamenPertinentPrecedentSeeder::class,
            InformationSupplementaireSeeder::class,
            PrescriptionImagerieSeeder::class,
            ExamenComplementaireUpdateSeeder::class,
            NiveauUrgenceUpdateSeeder::class
        ]);
    }

}

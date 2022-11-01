<?php

namespace Database\Seeders;

use App\Models\Teleconsultation;
use App\Models\TypeTeleconsultation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeleconsultationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Teleconsultation::factory()->count(50)->create();
    }
}

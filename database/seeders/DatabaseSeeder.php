<?php

namespace Database\Seeders;

use App\Models\Antecedent;
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
        $this->call([TeleconsultationSeeder::class, AntecedentSeeder::class]);
    }
}

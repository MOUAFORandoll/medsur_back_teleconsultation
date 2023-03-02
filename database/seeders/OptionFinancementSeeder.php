<?php

namespace Database\Seeders;

use App\Models\OptionFinancement;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class OptionFinancementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $option_financements = [
            ['uuid' => Str::uuid()->toString(), 'libelle' => "Medicasure prépaid"],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "Medicasure Postpaid"],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "Medicahome prépaid"],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "Medicahome postpaid"],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "Assurance classique prépaid"],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "Assurance tiers-payant"],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "Cas social"],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "100% Patient"]
        ];
        foreach($option_financements as $option_financement){
          OptionFinancement::create($option_financement);
        }
    }
}

<?php

namespace Database\Seeders;

use App\Models\CategorieMedicamenteuse;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategorieMedicamenteuseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categorie_medicamenteuses = [
            ['uuid' => Str::uuid()->toString(), 'libelle' => "AURICULAIRE"],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "CUTANEE/TRANSDERMIQUE"],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "DENTAIRE"],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "ENDOCERVICAL"],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "EXTRACORPOREL"],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "GASTRIQUE"],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "GASTROENTERAL"],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "INTESTINAL"],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "INTRAMAMMAIRE"],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "INTRAPERITONEALE"],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "INTRA-UTERIN"],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "INTRAVESICAL / URETRAL"],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "NASALE"],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "OCULAIRE"],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "ORAL"],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "ORO-MUQUEUX"],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "PARENTERAL"],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "PULMONAIRE"],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "RECTAL"],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "VAGINAL"],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "INCONNU / DIVERS"]
        ];
        foreach($categorie_medicamenteuses as $categorie_medicamenteuse){
          CategorieMedicamenteuse::create($categorie_medicamenteuse);
        }
    }
}

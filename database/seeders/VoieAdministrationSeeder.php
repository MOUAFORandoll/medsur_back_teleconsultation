<?php

namespace Database\Seeders;

use App\Models\VoieAdministration;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class VoieAdministrationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $voie_administrations = [
            ['uuid' => Str::uuid()->toString(), 'libelle' => "Hémodialyse"],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "Implantation"],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "Infiltration"],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "Ionophorèse"],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "Scarification de la peau"],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "Usage cutané"],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "Usage dentaire"],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "Usage intestinal"],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "Usage intracartilagineux"],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "Usage intra-épidermique"],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "Usage intra-osseux"],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "Usage intra-sternal"],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "Usage intra-utérin"],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "Usage périosseux"],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "Usage rectal"],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "Utilisation auriculaire"],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "Utilisation buccale"],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "Utilisation endocervicale"],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "Utilisation endosinusienne"],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "Utilisation endotrachéopulmonaire"],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "Utilisation épilésionnelle"],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "Utilisation extra-amniotique"],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "Utilisation extracorporelle"],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "Utilisation extrapleurale"],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "Utilisation gastrique"],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "Utilisation gastro-entérale"],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "Utilisation gingivale"],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "Utilisation intra-amniotique"],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "Utilisation intra-artérielle"],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "Utilisation intra-articulaire"],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "Utilisation intraboursière"],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "Utilisation intracamérale"],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "Utilisation intracardiaque"],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "Utilisation intra-caverneuse"],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "Utilisation intracérébrale"],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "Utilisation intracérébroventriculaire"],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "Utilisation intracervicale"],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "Utilisation intracholangiopancréatique"],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "Utilisation intracornéenne"],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "Utilisation intracoronaire"],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "Utilisation intradermique"],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "Utilisation intradiscale"],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "Utilisation intraglandulaire"],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "Utilisation intralésionnelle"],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "Utilisation intralymphatique"],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "Utilisation intramusculaire"],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "Utilisation intraoculaire"],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "Utilisation intrapéricardique"],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "Utilisation intrapéritonéale"],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "Utilisation intrapleurale"],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "Utilisation intraportail"],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "Utilisation intraprostatique"],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "Utilisation intrasternale"],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "Utilisation intrathécale"],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "Utilisation intratumorale"],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "Utilisation intra-utérine"],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "Utilisation intraveineuse"],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "Utilisation intravésicale"],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "Utilisation intravitréenne"],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "Utilisation juxtasclérale postérieure"],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "Utilisation laryngopharyngée"],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "Utilisation nasale"],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "Utilisation oculaire"],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "Utilisation oromucosale"],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "Utilisation oropharyngée"],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "Utilisation par inhalation"],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "Utilisation parodontale"],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "Utilisation périarticulaire"],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "Utilisation péridurale"],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "Utilisation périlésionnelle"],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "Utilisation périneurale"],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "Utilisation péritumorale"],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "Utilisation rétrobulbaire"],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "Utilisation sous-conjonctivale"],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "Utilisation sous-cutanée"],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "Utilisation sous-muqueuse"],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "Utilisation sous-rétinienne"],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "Utilisation sublinguale"],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "Utilisation transdermique"],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "Utilisation urétrale"],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "Utilisation vaginale"],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "Voie d'administration non applicable"],
            ['uuid' => Str::uuid()->toString(), 'libelle' => "Voie orale"],
        ];
        foreach($voie_administrations as $voie_administration){
          VoieAdministration::create($voie_administration);
        }
    }
}


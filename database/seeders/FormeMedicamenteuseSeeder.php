<?php

namespace Database\Seeders;

use App\Models\CategorieMedicamenteuse;
use App\Models\FormeMedicamenteuse;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class FormeMedicamenteuseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /**
         * AURICULAIRE
         */
        $auriculaire = CategorieMedicamenteuse::firstWhere('libelle', 'AURICULAIRE');
        $auriculaires = [
            ['categorie_medicamenteuse_id' => $auriculaire->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Bain d'oreille, émulsion"],
            ['categorie_medicamenteuse_id' => $auriculaire->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Bâton d'oreille"],
            ['categorie_medicamenteuse_id' => $auriculaire->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Crème pour les oreilles"],
            ['categorie_medicamenteuse_id' => $auriculaire->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Gel auriculaire"],
            ['categorie_medicamenteuse_id' => $auriculaire->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Gouttes auriculaires, émulsion"],
            ['categorie_medicamenteuse_id' => $auriculaire->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Gouttes auriculaires, poudre pour suspension"],
            ['categorie_medicamenteuse_id' => $auriculaire->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Gouttes auriculaires, solution"],
            ['categorie_medicamenteuse_id' => $auriculaire->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Gouttes auriculaires, suspension"],
            ['categorie_medicamenteuse_id' => $auriculaire->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Gouttes auriculaires/nasales, suspension"],
            ['categorie_medicamenteuse_id' => $auriculaire->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Gouttes auriculaires/oculaires, solution"],
            ['categorie_medicamenteuse_id' => $auriculaire->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Gouttes auriculaires/oculaires, suspension"],
            ['categorie_medicamenteuse_id' => $auriculaire->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Gouttes auriculaires/oculaires/nasales, solution"],
            ['categorie_medicamenteuse_id' => $auriculaire->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Pommade auriculaire"],
            ['categorie_medicamenteuse_id' => $auriculaire->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Pommade pour les oreilles/yeux"],
            ['categorie_medicamenteuse_id' => $auriculaire->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Poudre d'oreille"],
            ['categorie_medicamenteuse_id' => $auriculaire->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Solution de lavage des oreilles"],
            ['categorie_medicamenteuse_id' => $auriculaire->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Spray auriculaire, émulsion"],
            ['categorie_medicamenteuse_id' => $auriculaire->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Spray auriculaire, solution"],
            ['categorie_medicamenteuse_id' => $auriculaire->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Spray auriculaire, suspension"],
            ['categorie_medicamenteuse_id' => $auriculaire->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Tampon d'oreille"]
        ];
        foreach($auriculaires as $auri){
          FormeMedicamenteuse::create($auri);
        }

        /**
         * CUTANEE/TRANSDERMIQUE
         */
        $cutanee = CategorieMedicamenteuse::firstWhere('libelle', 'CUTANEE/TRANSDERMIQUE');
        $cutanees = [
            ['categorie_medicamenteuse_id' => $cutanee->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Additif de bain"],
            ['categorie_medicamenteuse_id' => $cutanee->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Collodion"],
            ['categorie_medicamenteuse_id' => $cutanee->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Concentré pour émulsion cutanée"],
            ['categorie_medicamenteuse_id' => $cutanee->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Concentré pour solution cutanée"],
            ['categorie_medicamenteuse_id' => $cutanee->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Concentré pour spray cutané, émulsion"],
            ['categorie_medicamenteuse_id' => $cutanee->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Crème"],
            ['categorie_medicamenteuse_id' => $cutanee->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Émulsion cutanée"],
            ['categorie_medicamenteuse_id' => $cutanee->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Mousse cutanée"],
            ['categorie_medicamenteuse_id' => $cutanee->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Liquide cutané"],
            ['categorie_medicamenteuse_id' => $cutanee->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Pâte cutanée"],
            ['categorie_medicamenteuse_id' => $cutanee->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Patch cutané"],
            ['categorie_medicamenteuse_id' => $cutanee->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Poudre cutanée"],
            ['categorie_medicamenteuse_id' => $cutanee->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Solution cutanée"],
            ['categorie_medicamenteuse_id' => $cutanee->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Solution cutanée/concentré pour solution buccale"],
            ['categorie_medicamenteuse_id' => $cutanee->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Spray cutané, émulsion"],
            ['categorie_medicamenteuse_id' => $cutanee->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Spray cutané, pommade"],
            ['categorie_medicamenteuse_id' => $cutanee->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Spray cutané, poudre"],
            ['categorie_medicamenteuse_id' => $cutanee->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Spray cutané, solution"],
            ['categorie_medicamenteuse_id' => $cutanee->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Spray cutané, suspension"],
            ['categorie_medicamenteuse_id' => $cutanee->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Bâton cutané"],
            ['categorie_medicamenteuse_id' => $cutanee->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Suspension cutanée"],
            ['categorie_medicamenteuse_id' => $cutanee->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Pommade cutanée/nasale"],
            ['categorie_medicamenteuse_id' => $cutanee->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Solution cutanée/oromucosale"],
            ['categorie_medicamenteuse_id' => $cutanee->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Gel"],
            ['categorie_medicamenteuse_id' => $cutanee->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Gel pour gel"],
            ['categorie_medicamenteuse_id' => $cutanee->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Écouvillon cutané imprégné"],
            ['categorie_medicamenteuse_id' => $cutanee->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Pansement imprégné"],
            ['categorie_medicamenteuse_id' => $cutanee->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Vernis à ongles médicamenteux"],
            ['categorie_medicamenteuse_id' => $cutanee->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Emplâtre médicamenteux"],
            ['categorie_medicamenteuse_id' => $cutanee->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Larves médicinales"],
            ['categorie_medicamenteuse_id' => $cutanee->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Sangsue médicinale"],
            ['categorie_medicamenteuse_id' => $cutanee->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Pommade"],
            ['categorie_medicamenteuse_id' => $cutanee->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Plâtre pour test de provocation"],
            ['categorie_medicamenteuse_id' => $cutanee->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Cataplasme"],
            ['categorie_medicamenteuse_id' => $cutanee->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Poudre pour solution cutanée"],
            ['categorie_medicamenteuse_id' => $cutanee->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Poudre pour gel"],
            ['categorie_medicamenteuse_id' => $cutanee->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Poudre pour solution injectable/test cutané"],
            ['categorie_medicamenteuse_id' => $cutanee->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Poudre pour solution pour ionophorèse"],
            ['categorie_medicamenteuse_id' => $cutanee->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Poudre pour solution pour test cutané"],
            ['categorie_medicamenteuse_id' => $cutanee->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Shampooing"],
            ['categorie_medicamenteuse_id' => $cutanee->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Solution injectable/test cutané"],
            ['categorie_medicamenteuse_id' => $cutanee->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Solution pour iontophorèse"],
            ['categorie_medicamenteuse_id' => $cutanee->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Solution pour test cutané"],
            ['categorie_medicamenteuse_id' => $cutanee->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Solution pour test de grattage cutané"],
            ['categorie_medicamenteuse_id' => $cutanee->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Émulsion ponctuelle"],
            ['categorie_medicamenteuse_id' => $cutanee->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Solution ponctuelle"],
            ['categorie_medicamenteuse_id' => $cutanee->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Suspension ponctuelle"],
            ['categorie_medicamenteuse_id' => $cutanee->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Comprimé pour solution cutanée"],
            ['categorie_medicamenteuse_id' => $cutanee->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Gel transdermique"],
            ['categorie_medicamenteuse_id' => $cutanee->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Pommade transdermique"],
            ['categorie_medicamenteuse_id' => $cutanee->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Patch transdermique"],
            ['categorie_medicamenteuse_id' => $cutanee->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Solution transdermique"],
            ['categorie_medicamenteuse_id' => $cutanee->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Spray transdermique, solution"],
            ['categorie_medicamenteuse_id' => $cutanee->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Système transdermique"]
        ];
        foreach($cutanees as $cutane){
          FormeMedicamenteuse::create($cutane);
        }

        /**
         * DENTAIRE
         */
        $dentaire = CategorieMedicamenteuse::firstWhere('libelle', 'DENTAIRE');
        $dentaires = [
            ['categorie_medicamenteuse_id' => $dentaire->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Émulsion dentaire"],
            ['categorie_medicamenteuse_id' => $dentaire->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Gel dentaire"],
            ['categorie_medicamenteuse_id' => $dentaire->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Dentifrice"],
            ['categorie_medicamenteuse_id' => $dentaire->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Gel parodontal"],
            ['categorie_medicamenteuse_id' => $dentaire->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Poudre pour ciment dentaire"],
            ['categorie_medicamenteuse_id' => $dentaire->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Pâte dentaire"],
            ['categorie_medicamenteuse_id' => $dentaire->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Poudre dentaire"],
            ['categorie_medicamenteuse_id' => $dentaire->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Solution dentaire"],
            ['categorie_medicamenteuse_id' => $dentaire->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Bâton dentaire"],
            ['categorie_medicamenteuse_id' => $dentaire->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Suspension dentaire"],
            ['categorie_medicamenteuse_id' => $dentaire->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Insert parodontal"],
            ['categorie_medicamenteuse_id' => $dentaire->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Poudre parodontale"],
            ['categorie_medicamenteuse_id' => $dentaire->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Poudre pour gel dentaire"],
            ['categorie_medicamenteuse_id' => $dentaire->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Poudre pour solution dentaire"],
            ['categorie_medicamenteuse_id' => $dentaire->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Solution pour ciment dentaire"],
        ];
        foreach($dentaires as $dent){
          FormeMedicamenteuse::create($dent);
        }

        /**
         * ENDOCERVICAL
         */
        $endocervical = CategorieMedicamenteuse::firstWhere('libelle', 'ENDOCERVICAL');
        $endocervicals = [
            ['categorie_medicamenteuse_id' => $endocervical->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Gel endocervical"],
            ['categorie_medicamenteuse_id' => $endocervical->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Poudre pour gel endocervical"],
        ];
        foreach($endocervicals as $endocervica){
          FormeMedicamenteuse::create($endocervica);
        }

        /**
         * EXTRACORPOREL
         */
        $extracorporel = CategorieMedicamenteuse::firstWhere('libelle', 'EXTRACORPOREL');
        $extracorporels = [
            ['categorie_medicamenteuse_id' => $extracorporel->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Solution à diluer pour hémodialyse"],
            ['categorie_medicamenteuse_id' => $extracorporel->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Poudre pour solution à diluer pour hémodialyse"],
            ['categorie_medicamenteuse_id' => $extracorporel->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Solution pour la modification de la fraction sanguine"],
            ['categorie_medicamenteuse_id' => $extracorporel->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Solution pour la cardioplégie/préservation des organes"],
            ['categorie_medicamenteuse_id' => $extracorporel->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Solution pour hémodiafiltration"],
            ['categorie_medicamenteuse_id' => $extracorporel->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Solution pour hémodialyse"],
            ['categorie_medicamenteuse_id' => $extracorporel->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Solution pour hémodialyse/hémofiltration"],
            ['categorie_medicamenteuse_id' => $extracorporel->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Solution pour hémofiltration"],
            ['categorie_medicamenteuse_id' => $extracorporel->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Solution pour la préservation des organes"]
        ];
        foreach($extracorporels as $extracor){
          FormeMedicamenteuse::create($extracor);
        }

        /**
         * GASTRIQUE
         */
        $gastrique = CategorieMedicamenteuse::firstWhere('libelle', 'GASTRIQUE');
        $gastriques = [
            ['categorie_medicamenteuse_id' => $gastrique->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Irrigation de l'estomac"]
        ];
        foreach($gastriques as $gastriqu){
          FormeMedicamenteuse::create($gastriqu);
        }

        /**
         * GASTROENTERAL
         */
        $gastroenteral = CategorieMedicamenteuse::firstWhere('libelle', 'GASTROENTERAL');
        $gastroenterals = [
            ['categorie_medicamenteuse_id' => $gastroenteral->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Solution gastro-entérale"],
            ['categorie_medicamenteuse_id' => $gastroenteral->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Émulsion gastro-entérale"],
            ['categorie_medicamenteuse_id' => $gastroenteral->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Suspension gastro-entérale"]
        ];
        foreach($gastroenterals as $gastroentera){
          FormeMedicamenteuse::create($gastroentera);
        }

        /**
         * INTRAMAMMAIRE
         */
        $intramammaire = CategorieMedicamenteuse::firstWhere('libelle', 'INTRAMAMMAIRE');
        $intramammaires = [
            ['categorie_medicamenteuse_id' => $intramammaire->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Gel intramammaire"],
            ['categorie_medicamenteuse_id' => $intramammaire->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Bâton de tétine"],
            ['categorie_medicamenteuse_id' => $intramammaire->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Émulsion intramammaire"],
            ['categorie_medicamenteuse_id' => $intramammaire->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Pommade intramammaire"],
            ['categorie_medicamenteuse_id' => $intramammaire->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Solution intramammaire"],
            ['categorie_medicamenteuse_id' => $intramammaire->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Suspension intramammaire"]
        ];
        foreach($intramammaires as $intramammair){
          FormeMedicamenteuse::create($intramammair);
        }

        /**
         * INTRAPERITONEALE
         */
        $intraperitoneale = CategorieMedicamenteuse::firstWhere('libelle', 'INTRAPERITONEALE');
        $intraperitoneales = [
            ['categorie_medicamenteuse_id' => $intraperitoneale->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Solution intrapéritonéale"],
            ['categorie_medicamenteuse_id' => $intraperitoneale->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Solution à diluer pour dialyse péritonéale"],
            ['categorie_medicamenteuse_id' => $intraperitoneale->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Solution pour dialyse péritonéale"]
        ];
        foreach($intraperitoneales as $intraperitoneal){
          FormeMedicamenteuse::create($intraperitoneal);
        }

        /**
         * INTRA-UTERIN
         */
        $intra_uterin = CategorieMedicamenteuse::firstWhere('libelle', 'INTRA-UTERIN');
        $intra_uterins = [
            ['categorie_medicamenteuse_id' => $intra_uterin->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Gel intra-utérin"],
            ['categorie_medicamenteuse_id' => $intra_uterin->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Système de livraison intra-utérine"],
        ];
        foreach($intra_uterins as $intra){
          FormeMedicamenteuse::create($intra);
        }

        /**
         * INTRAVESICAL / URETRAL
         */
        $intravesical = CategorieMedicamenteuse::firstWhere('libelle', 'INTRAVESICAL / URETRAL');
        $intravesicals = [
            ['categorie_medicamenteuse_id' => $intravesical->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Émulsion urétrale"],
            ['categorie_medicamenteuse_id' => $intravesical->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Concentré pour solution intravésicale"],
            ['categorie_medicamenteuse_id' => $intravesical->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Suspension intravésicale"],
            ['categorie_medicamenteuse_id' => $intravesical->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Bâton urétral"],
            ['categorie_medicamenteuse_id' => $intravesical->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Poudre pour l'irrigation de la vessie"],
            ['categorie_medicamenteuse_id' => $intravesical->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Poudre pour concentré pour suspension intravésicale"],
            ['categorie_medicamenteuse_id' => $intravesical->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Gel urétral"],
            ['categorie_medicamenteuse_id' => $intravesical->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Poudre pour solution intravésicale"],
            ['categorie_medicamenteuse_id' => $intravesical->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Poudre pour solution intravésicale/solution injectable"],
            ['categorie_medicamenteuse_id' => $intravesical->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Irrigation de la vessie"],
            ['categorie_medicamenteuse_id' => $intravesical->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Solution intravésicale"],
            ['categorie_medicamenteuse_id' => $intravesical->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Solution intravésicale/solution injectable"],
            ['categorie_medicamenteuse_id' => $intravesical->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Pommade urétrale"],
        ];
        foreach($intravesicals as $intra){
          FormeMedicamenteuse::create($intra);
        }

        /**
         * NASALE
         */
        $nasale = CategorieMedicamenteuse::firstWhere('libelle', 'NASALE');
        $nasales = [
            ['categorie_medicamenteuse_id' => $nasale->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Gouttes nasales, suspension"],
            ['categorie_medicamenteuse_id' => $nasale->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Gouttes nasales, poudre pour solution"],
            ['categorie_medicamenteuse_id' => $nasale->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Solution endosinusienne"],
            ['categorie_medicamenteuse_id' => $nasale->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Gouttes auriculaires/oculaires/nasales, solution"],
            ['categorie_medicamenteuse_id' => $nasale->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Spray nasal, poudre pour solution"],
            ['categorie_medicamenteuse_id' => $nasale->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Poudre nasale"],
            ['categorie_medicamenteuse_id' => $nasale->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Vaporisateur nasal, émulsion"],
            ['categorie_medicamenteuse_id' => $nasale->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Lavage endosinusien, suspension"],
            ['categorie_medicamenteuse_id' => $nasale->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Gargarisme/lavage nasal"],
            ['categorie_medicamenteuse_id' => $nasale->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Gel nasal"],
            ['categorie_medicamenteuse_id' => $nasale->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Crème nasale"],
            ['categorie_medicamenteuse_id' => $nasale->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Gouttes nasales, émulsion"],
            ['categorie_medicamenteuse_id' => $nasale->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Pommade cutanée/nasale"],
            ['categorie_medicamenteuse_id' => $nasale->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Gouttes auriculaires/nasales, suspension"],
            ['categorie_medicamenteuse_id' => $nasale->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Gouttes nasales, solution"],
            ['categorie_medicamenteuse_id' => $nasale->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Pommade nasale"],
            ['categorie_medicamenteuse_id' => $nasale->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Spray nasal, solution"],
            ['categorie_medicamenteuse_id' => $nasale->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Spray nasal, solution/solution oro-muqueuse"],
            ['categorie_medicamenteuse_id' => $nasale->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Vaporisateur nasal, suspension"],
            ['categorie_medicamenteuse_id' => $nasale->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Bâton nasal"],
            ['categorie_medicamenteuse_id' => $nasale->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Lavage nasal"],
            ['categorie_medicamenteuse_id' => $nasale->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Solution nasale/oromucosale"],
            ['categorie_medicamenteuse_id' => $nasale->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Spray nasal/oromuqueux, solution"],
            ['categorie_medicamenteuse_id' => $nasale->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Poudre pour solution endosinusienne"],
            ['categorie_medicamenteuse_id' => $nasale->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Solution pour test de provocation"]
        ];
        foreach($nasales as $intra){
          FormeMedicamenteuse::create($intra);
        }

        /**
         * OCULAIRE
         */
        $occulaire = CategorieMedicamenteuse::firstWhere('libelle', 'OCULAIRE');
        $occulaires = [
            ['categorie_medicamenteuse_id' => $occulaire->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Collyre, solvant pour reconstitution"],
            ['categorie_medicamenteuse_id' => $occulaire->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Collyre, solution à libération prolongée"],
            ['categorie_medicamenteuse_id' => $occulaire->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Solution à diluer pour irrigation intraoculaire"],
            ['categorie_medicamenteuse_id' => $occulaire->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Gouttes auriculaires/oculaires, solution"],
            ['categorie_medicamenteuse_id' => $occulaire->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Pommade pour les oreilles/yeux"],
            ['categorie_medicamenteuse_id' => $occulaire->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Insert ophtalmique"],
            ['categorie_medicamenteuse_id' => $occulaire->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Gouttes pour les yeux, suspension"],
            ['categorie_medicamenteuse_id' => $occulaire->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Gouttes auriculaires/oculaires, suspension"],
            ['categorie_medicamenteuse_id' => $occulaire->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Gouttes auriculaires/oculaires/nasales, solution"],
            ['categorie_medicamenteuse_id' => $occulaire->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Crème contour des yeux"],
            ['categorie_medicamenteuse_id' => $occulaire->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Collyre, émulsion"],
            ['categorie_medicamenteuse_id' => $occulaire->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Collyre, poudre pour solution"],
            ['categorie_medicamenteuse_id' => $occulaire->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Collyre, poudre pour suspension"],
            ['categorie_medicamenteuse_id' => $occulaire->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Collyre, solution"],
            ['categorie_medicamenteuse_id' => $occulaire->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Gel contour des yeux"],
            ['categorie_medicamenteuse_id' => $occulaire->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Lotion pour les yeux"],
            ['categorie_medicamenteuse_id' => $occulaire->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Lotion oculaire, solvant pour reconstitution"],
            ['categorie_medicamenteuse_id' => $occulaire->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Pommade pour les yeux"],
            ['categorie_medicamenteuse_id' => $occulaire->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Solution d'instillation intraoculaire"],
            ['categorie_medicamenteuse_id' => $occulaire->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Bande ophtalmique"],
            ['categorie_medicamenteuse_id' => $occulaire->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Poudre pour solution d'instillation intraoculaire"],
            ['categorie_medicamenteuse_id' => $occulaire->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Poudre pour solution pour irrigation intraoculaire"],
            ['categorie_medicamenteuse_id' => $occulaire->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Solution pour irrigation intraoculaire"],
            ['categorie_medicamenteuse_id' => $occulaire->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Solution pour test de provocation"],
            ['categorie_medicamenteuse_id' => $occulaire->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Solvant pour solution pour irrigation intraoculaire"]
        ];
        foreach($occulaires as $intra){
          FormeMedicamenteuse::create($intra);
        }

        /**
         * ORAL
         */
        $oral = CategorieMedicamenteuse::firstWhere('libelle', 'ORAL');
        $orals = [
            ['categorie_medicamenteuse_id' => $oral->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Concentré pour suspension buvable"],
            ['categorie_medicamenteuse_id' => $oral->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Comprimé"],
            ['categorie_medicamenteuse_id' => $oral->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Comprimé à croquer"],
            ['categorie_medicamenteuse_id' => $oral->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Gélule, molle"],
            ['categorie_medicamenteuse_id' => $oral->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Gélule à croquer, molle"],
            ['categorie_medicamenteuse_id' => $oral->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Comprimé effervescent"],
            ['categorie_medicamenteuse_id' => $oral->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Comprimés dispersibles pour doseur"],
            ['categorie_medicamenteuse_id' => $oral->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Granulés effervescents pour suspension buvable"],
            ['categorie_medicamenteuse_id' => $oral->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Comprimé à croquer/dispersible"],
            ['categorie_medicamenteuse_id' => $oral->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Granulés effervescents"],
            ['categorie_medicamenteuse_id' => $oral->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Granulés enrobés"],
            ['categorie_medicamenteuse_id' => $oral->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Comprimé enrobé"],
            ['categorie_medicamenteuse_id' => $oral->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Solution à diluer pour solution buvable"],
            ['categorie_medicamenteuse_id' => $oral->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Gélule dure"],
            ['categorie_medicamenteuse_id' => $oral->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Solution à diluer pour solution buvable/rectale"],
            ['categorie_medicamenteuse_id' => $oral->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Comprimé dispersible"],
            ['categorie_medicamenteuse_id' => $oral->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Poudre effervescente"],
            ['categorie_medicamenteuse_id' => $oral->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Granulés pelliculés"],
            ['categorie_medicamenteuse_id' => $oral->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Comprimé pelliculé"],
            ['categorie_medicamenteuse_id' => $oral->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Gélule gastro-résistante, dure"],
            ['categorie_medicamenteuse_id' => $oral->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Gélule gastro-résistante, molle"],
            ['categorie_medicamenteuse_id' => $oral->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Granulés gastro-résistants"],
            ['categorie_medicamenteuse_id' => $oral->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Granulés gastro-résistants pour suspension buvable"],
            ['categorie_medicamenteuse_id' => $oral->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Suspension buvable gastro-résistante"],
            ['categorie_medicamenteuse_id' => $oral->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Poudre gastro-résistante pour suspension buvable"],
            ['categorie_medicamenteuse_id' => $oral->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Comprimé gastro-résistant"],
            ['categorie_medicamenteuse_id' => $oral->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Granulés"],
            ['categorie_medicamenteuse_id' => $oral->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Granulés pour solution buvable"],
            ['categorie_medicamenteuse_id' => $oral->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Granulés pour suspension buvable"],
            ['categorie_medicamenteuse_id' => $oral->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Granulés pour suspension buvable/rectale"],
            ['categorie_medicamenteuse_id' => $oral->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Granulés pour sirop"],
            ['categorie_medicamenteuse_id' => $oral->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Thé aux herbes"],
            ['categorie_medicamenteuse_id' => $oral->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Tisane instantanée"],
            ['categorie_medicamenteuse_id' => $oral->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Chewing-gum médicamenteux"],
            ['categorie_medicamenteuse_id' => $oral->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Gélule à libération modifiée, dure"],
            ['categorie_medicamenteuse_id' => $oral->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Gélule à libération modifiée, molle"],
            ['categorie_medicamenteuse_id' => $oral->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Granulés à libération modifiée"],
            ['categorie_medicamenteuse_id' => $oral->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Granulés à libération modifiée pour suspension buvable"],
            ['categorie_medicamenteuse_id' => $oral->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Suspension buvable à libération modifiée"],
            ['categorie_medicamenteuse_id' => $oral->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Comprimé à libération modifiée"],
            ['categorie_medicamenteuse_id' => $oral->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Gouttes orales, émulsion"],
            ['categorie_medicamenteuse_id' => $oral->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Gouttes orales, granulés pour solution"],
            ['categorie_medicamenteuse_id' => $oral->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Gouttes orales, liquide"],
            ['categorie_medicamenteuse_id' => $oral->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Gouttes orales, poudre pour suspension"],
            ['categorie_medicamenteuse_id' => $oral->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Gouttes orales, solution"],
            ['categorie_medicamenteuse_id' => $oral->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Gouttes orales, suspension"],
            ['categorie_medicamenteuse_id' => $oral->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Émulsion orale"],
            ['categorie_medicamenteuse_id' => $oral->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Gel buccal"],
            ['categorie_medicamenteuse_id' => $oral->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Gomme orale"],
            ['categorie_medicamenteuse_id' => $oral->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Matériel oral à base de plantes"],
            ['categorie_medicamenteuse_id' => $oral->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Liquide oral"],
            ['categorie_medicamenteuse_id' => $oral->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Lyophilisat oral"],
            ['categorie_medicamenteuse_id' => $oral->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Pâte orale"],
            ['categorie_medicamenteuse_id' => $oral->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Poudre orale"],
            ['categorie_medicamenteuse_id' => $oral->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Solution orale"],
            ['categorie_medicamenteuse_id' => $oral->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Solution buvable/concentré pour solution pour inhalation par nébuliseur"],
            ['categorie_medicamenteuse_id' => $oral->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Suspension buvable"],
            ['categorie_medicamenteuse_id' => $oral->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Solution orale/rectale"],
            ['categorie_medicamenteuse_id' => $oral->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Suspension orale/rectale"],
            ['categorie_medicamenteuse_id' => $oral->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Film orodispersible"],
            ['categorie_medicamenteuse_id' => $oral->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Comprimé orodispersible"],
            ['categorie_medicamenteuse_id' => $oral->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Pilules"],
            ['categorie_medicamenteuse_id' => $oral->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Poudre pour solution buvable"],
            ['categorie_medicamenteuse_id' => $oral->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Poudre pour suspension buvable"],
            ['categorie_medicamenteuse_id' => $oral->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Poudre pour suspension buvable/rectale"],
            ['categorie_medicamenteuse_id' => $oral->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Poudre pour sirop"],
            ['categorie_medicamenteuse_id' => $oral->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Gélule à libération prolongée, dure"],
            ['categorie_medicamenteuse_id' => $oral->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Gélule à libération prolongée, molle"],
            ['categorie_medicamenteuse_id' => $oral->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Granulés à libération prolongée"],
            ['categorie_medicamenteuse_id' => $oral->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Granulés à libération prolongée pour suspension buvable"],
            ['categorie_medicamenteuse_id' => $oral->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Suspension buvable à libération prolongée"],
            ['categorie_medicamenteuse_id' => $oral->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Comprimé à libération prolongée"],
            ['categorie_medicamenteuse_id' => $oral->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Comprimé soluble"],
            ['categorie_medicamenteuse_id' => $oral->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Suspension pour suspension buvable"],
            ['categorie_medicamenteuse_id' => $oral->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Sirop"],
            ['categorie_medicamenteuse_id' => $oral->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Pastille"],
            ['categorie_medicamenteuse_id' => $oral->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Pastille capteur"]
        ];
        foreach($orals as $intra){
          FormeMedicamenteuse::create($intra);
        }

        /**
         * ORO-MUQUEUX
         */
        $oro_muqueu = CategorieMedicamenteuse::firstWhere('libelle', 'ORO-MUQUEUX');
        $oro_muqueus = [
            ['categorie_medicamenteuse_id' => $oro_muqueu->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Gargarisme, bain de bouche"],
            ['categorie_medicamenteuse_id' => $oro_muqueu->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Gargarisme, poudre pour solution"],
            ['categorie_medicamenteuse_id' => $oro_muqueu->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Film buccal"],
            ['categorie_medicamenteuse_id' => $oro_muqueu->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Solution cutanée/concentré pour solution buccale"],
            ['categorie_medicamenteuse_id' => $oro_muqueu->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Comprimé buccal"],
            ['categorie_medicamenteuse_id' => $oro_muqueu->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Pastille comprimée"],
            ['categorie_medicamenteuse_id' => $oro_muqueu->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Concentré pour gargarisme"],
            ['categorie_medicamenteuse_id' => $oro_muqueu->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Concentré pour solution buccale"],
            ['categorie_medicamenteuse_id' => $oro_muqueu->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Pâte gingivale"],
            ['categorie_medicamenteuse_id' => $oro_muqueu->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Solution laryngopharyngée"],
            ['categorie_medicamenteuse_id' => $oro_muqueu->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Solution cutanée/oromucosale"],
            ['categorie_medicamenteuse_id' => $oro_muqueu->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Solution gingivale"],
            ['categorie_medicamenteuse_id' => $oro_muqueu->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Gargarisme/lavage nasal"],
            ['categorie_medicamenteuse_id' => $oro_muqueu->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Gargarisme"],
            ['categorie_medicamenteuse_id' => $oro_muqueu->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Gargarisme, comprimé pour solution"],
            ['categorie_medicamenteuse_id' => $oro_muqueu->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Gel gingival"],
            ['categorie_medicamenteuse_id' => $oro_muqueu->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Spray laryngopharyngé, solution"],
            ['categorie_medicamenteuse_id' => $oro_muqueu->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Chewing-gum médicamenteux"],
            ['categorie_medicamenteuse_id' => $oro_muqueu->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Bain de bouche"],
            ['categorie_medicamenteuse_id' => $oro_muqueu->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Bain de bouche, poudre pour solution"],
            ['categorie_medicamenteuse_id' => $oro_muqueu->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Bain de bouche, comprimé pour solution"],
            ['categorie_medicamenteuse_id' => $oro_muqueu->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Comprimé buccal muco-adhésif"],
            ['categorie_medicamenteuse_id' => $oro_muqueu->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Spray nasal, solution/solution oro-muqueuse"],
            ['categorie_medicamenteuse_id' => $oro_muqueu->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Solution nasale/oromucosale"],
            ['categorie_medicamenteuse_id' => $oro_muqueu->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Spray nasal/oromuqueux, solution"],
            ['categorie_medicamenteuse_id' => $oro_muqueu->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Capsule oromucosale"],
            ['categorie_medicamenteuse_id' => $oro_muqueu->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Crème buccale"],
            ['categorie_medicamenteuse_id' => $oro_muqueu->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Gouttes oromucosales"],
            ['categorie_medicamenteuse_id' => $oro_muqueu->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Film oromucqueux"],
            ['categorie_medicamenteuse_id' => $oro_muqueu->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Gel buccal"],
            ['categorie_medicamenteuse_id' => $oro_muqueu->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Pommade buccale"],
            ['categorie_medicamenteuse_id' => $oro_muqueu->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Pâte buccale"],
            ['categorie_medicamenteuse_id' => $oro_muqueu->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Patch oromuqueux"],
            ['categorie_medicamenteuse_id' => $oro_muqueu->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Poche buccale"],
            ['categorie_medicamenteuse_id' => $oro_muqueu->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Solution buccale"],
            ['categorie_medicamenteuse_id' => $oro_muqueu->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Spray buccal, émulsion"],
            ['categorie_medicamenteuse_id' => $oro_muqueu->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Spray buccal, solution"],
            ['categorie_medicamenteuse_id' => $oro_muqueu->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Spray buccal, suspension"],
            ['categorie_medicamenteuse_id' => $oro_muqueu->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Suspension buccale"],
            ['categorie_medicamenteuse_id' => $oro_muqueu->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Solution oromuqueuse/laryngopharyngée"],
            ['categorie_medicamenteuse_id' => $oro_muqueu->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Solution/spray oromuqueux/laryngopharyngé, solution"],
            ['categorie_medicamenteuse_id' => $oro_muqueu->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Pastille"],
            ['categorie_medicamenteuse_id' => $oro_muqueu->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Pilules"],
            ['categorie_medicamenteuse_id' => $oro_muqueu->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Poudre pour gel gingival"],
            ['categorie_medicamenteuse_id' => $oro_muqueu->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Film sublingual"],
            ['categorie_medicamenteuse_id' => $oro_muqueu->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Lyophilisat sublingual"],
            ['categorie_medicamenteuse_id' => $oro_muqueu->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Poudre sublinguale"],
            ['categorie_medicamenteuse_id' => $oro_muqueu->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Spray sublingual, émulsion"],
            ['categorie_medicamenteuse_id' => $oro_muqueu->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Spray sublingual, solution"],
            ['categorie_medicamenteuse_id' => $oro_muqueu->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Spray sublingual, suspension"],
            ['categorie_medicamenteuse_id' => $oro_muqueu->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Comprimé sublingual"]
        ];
        foreach($oro_muqueus as $intra){
          FormeMedicamenteuse::create($intra);
        }

        /**
         * PARENTERAL
         */
        $parenteral = CategorieMedicamenteuse::firstWhere('libelle', 'PARENTERAL');
        $parenterals = [
            ['categorie_medicamenteuse_id' => $parenteral->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Dispersion injectable"],
            ['categorie_medicamenteuse_id' => $parenteral->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Dispersion pour concentré pour dispersion pour perfusion"],
            ['categorie_medicamenteuse_id' => $parenteral->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Solution à diluer pour hémodialyse"],
            ['categorie_medicamenteuse_id' => $parenteral->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Concentré pour dispersion injectable"],
            ['categorie_medicamenteuse_id' => $parenteral->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Concentré pour émulsion pour perfusion"],
            ['categorie_medicamenteuse_id' => $parenteral->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Concentré pour émulsion injectable"],
            ['categorie_medicamenteuse_id' => $parenteral->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Gaz pour dispersion pour infusion"],
            ['categorie_medicamenteuse_id' => $parenteral->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Émulsion pour émulsion pour injection"],
            ['categorie_medicamenteuse_id' => $parenteral->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Émulsion pour infusion"],
            ['categorie_medicamenteuse_id' => $parenteral->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Solution à diluer pour perfusion"],
            ['categorie_medicamenteuse_id' => $parenteral->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Solution à diluer pour injection"],
            ['categorie_medicamenteuse_id' => $parenteral->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Dispersion pour injection/perfusion"],
            ['categorie_medicamenteuse_id' => $parenteral->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Solution à diluer pour injection/perfusion"],
            ['categorie_medicamenteuse_id' => $parenteral->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Solution à diluer pour suspension injectable"],
            ['categorie_medicamenteuse_id' => $parenteral->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Solution à diluer pour solution à diluer pour perfusion"],
            ['categorie_medicamenteuse_id' => $parenteral->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Concentré pour dispersion pour perfusion"],
            ['categorie_medicamenteuse_id' => $parenteral->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Dispersion pour perfusion"],
            ['categorie_medicamenteuse_id' => $parenteral->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Émulsion injectable"],
            ['categorie_medicamenteuse_id' => $parenteral->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Émulsion pour injection/perfusion"],
            ['categorie_medicamenteuse_id' => $parenteral->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Émulsion pour suspension injectable"],
            ['categorie_medicamenteuse_id' => $parenteral->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Gaz à dispersion pour injection"],
            ['categorie_medicamenteuse_id' => $parenteral->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Gélules injectables"],
            ['categorie_medicamenteuse_id' => $parenteral->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Granulés pour suspension injectable"],
            ['categorie_medicamenteuse_id' => $parenteral->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Implant"],
            ['categorie_medicamenteuse_id' => $parenteral->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Chaîne d'implantation"],
            ['categorie_medicamenteuse_id' => $parenteral->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Matrice d'implantation"],
            ['categorie_medicamenteuse_id' => $parenteral->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Pâte d'implantation"],
            ['categorie_medicamenteuse_id' => $parenteral->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Suspension d'implantation"],
            ['categorie_medicamenteuse_id' => $parenteral->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Comprimé d'implantation"],
            ['categorie_medicamenteuse_id' => $parenteral->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Solution intravésicale/solution injectable"],
            ['categorie_medicamenteuse_id' => $parenteral->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Équivalent tissu vivant"],
            ['categorie_medicamenteuse_id' => $parenteral->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Matrice pour matrice d'implantation"],
            ['categorie_medicamenteuse_id' => $parenteral->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Poudre pour concentré pour dispersion pour perfusion"],
            ['categorie_medicamenteuse_id' => $parenteral->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Poudre pour solution à diluer pour hémodialyse"],
            ['categorie_medicamenteuse_id' => $parenteral->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Poudre pour solution à diluer pour perfusion"],
            ['categorie_medicamenteuse_id' => $parenteral->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Poudre pour solution à diluer pour solution injectable/pour perfusion"],
            ['categorie_medicamenteuse_id' => $parenteral->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Poudre pour dispersion pour perfusion"],
            ['categorie_medicamenteuse_id' => $parenteral->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Poudre pour dispersion injectable"],
            ['categorie_medicamenteuse_id' => $parenteral->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Poudre pour matrice d'implantation"],
            ['categorie_medicamenteuse_id' => $parenteral->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Poudre pour pâte d'implantation"],
            ['categorie_medicamenteuse_id' => $parenteral->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Poudre pour suspension d'implantation"],
            ['categorie_medicamenteuse_id' => $parenteral->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Poudre pour solution intravésicale/solution injectable"],
            ['categorie_medicamenteuse_id' => $parenteral->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Poudre pour suspension injectable à libération prolongée"],
            ['categorie_medicamenteuse_id' => $parenteral->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Poudre pour solution pour perfusion"],
            ['categorie_medicamenteuse_id' => $parenteral->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Poudre pour solution injectable"],
            ['categorie_medicamenteuse_id' => $parenteral->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Poudre pour solution injectable/pour perfusion"],
            ['categorie_medicamenteuse_id' => $parenteral->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Poudre pour solution injectable/test cutané"],
            ['categorie_medicamenteuse_id' => $parenteral->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Poudre pour suspension injectable"],
            ['categorie_medicamenteuse_id' => $parenteral->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Dispersion injectable à libération prolongée"],
            ['categorie_medicamenteuse_id' => $parenteral->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Solution injectable à libération prolongée"],
            ['categorie_medicamenteuse_id' => $parenteral->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Suspension injectable à libération prolongée"],
            ['categorie_medicamenteuse_id' => $parenteral->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Solution pour la cardioplégie"],
            ['categorie_medicamenteuse_id' => $parenteral->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Solution pour la cardioplégie/préservation des organes"],
            ['categorie_medicamenteuse_id' => $parenteral->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Solution pour hémodiafiltration"],
            ['categorie_medicamenteuse_id' => $parenteral->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Solution pour hémodialyse"],
            ['categorie_medicamenteuse_id' => $parenteral->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Solution pour hémodialyse/hémofiltration"],
            ['categorie_medicamenteuse_id' => $parenteral->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Solution pour hémofiltration"],
            ['categorie_medicamenteuse_id' => $parenteral->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Solution pour perfusion"],
            ['categorie_medicamenteuse_id' => $parenteral->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Solution injectable"],
            ['categorie_medicamenteuse_id' => $parenteral->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Solution injectable/pour perfusion"],
            ['categorie_medicamenteuse_id' => $parenteral->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Solution injectable/test cutané"],
            ['categorie_medicamenteuse_id' => $parenteral->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Solution pour solution pour perfusion"],
            ['categorie_medicamenteuse_id' => $parenteral->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Solution pour solution injectable"],
            ['categorie_medicamenteuse_id' => $parenteral->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Solution pour suspension injectable"],
            ['categorie_medicamenteuse_id' => $parenteral->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Solvant pour usage parentéral"],
            ['categorie_medicamenteuse_id' => $parenteral->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Solvant pour solution pour perfusion"],
            ['categorie_medicamenteuse_id' => $parenteral->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Suspension pour émulsion injectable"],
            ['categorie_medicamenteuse_id' => $parenteral->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Suspension injectable"],
            ['categorie_medicamenteuse_id' => $parenteral->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Suspension pour suspension injectable"]
        ];
        foreach($parenterals as $intra){
          FormeMedicamenteuse::create($intra);
        }

        /**
         * PULMONAIRE
         */
        $pulmonaire = CategorieMedicamenteuse::firstWhere('libelle', 'PULMONAIRE');
        $pulmonaires = [
            ['categorie_medicamenteuse_id' => $pulmonaire->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Instillation endotrachéopulmonaire, suspension"],
            ['categorie_medicamenteuse_id' => $pulmonaire->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Inhalation vapeur, poudre"],
            ['categorie_medicamenteuse_id' => $pulmonaire->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Vapeur d'inhalation, bouchon imprégné"],
            ['categorie_medicamenteuse_id' => $pulmonaire->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Poudre pour inhalation"],
            ['categorie_medicamenteuse_id' => $pulmonaire->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Poudre pour inhalation, gélule"],
            ['categorie_medicamenteuse_id' => $pulmonaire->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Solution pour inhalation"],
            ['categorie_medicamenteuse_id' => $pulmonaire->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Concentré pour solution de nébulisation"],
            ['categorie_medicamenteuse_id' => $pulmonaire->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Instillation endotrachéopulmonaire, poudre pour solution"],
            ['categorie_medicamenteuse_id' => $pulmonaire->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Instillation endotrachéopulmonaire, poudre pour suspension"],
            ['categorie_medicamenteuse_id' => $pulmonaire->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Instillation endotrachéo-pulmonaire, solution"],
            ['categorie_medicamenteuse_id' => $pulmonaire->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Poudre pour inhalation, pré-distribuée"],
            ['categorie_medicamenteuse_id' => $pulmonaire->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Poudre pour inhalation, comprimé"],
            ['categorie_medicamenteuse_id' => $pulmonaire->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Vapeur d'inhalation, capsule"],
            ['categorie_medicamenteuse_id' => $pulmonaire->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Inhalation vapeur, comprimé effervescent"],
            ['categorie_medicamenteuse_id' => $pulmonaire->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Vapeur d'inhalation, émulsion"],
            ['categorie_medicamenteuse_id' => $pulmonaire->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Vapeur d'inhalation, tampon imprégné"],
            ['categorie_medicamenteuse_id' => $pulmonaire->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Vapeur d'inhalation, liquide"],
            ['categorie_medicamenteuse_id' => $pulmonaire->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Vapeur d'inhalation, pommade"],
            ['categorie_medicamenteuse_id' => $pulmonaire->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Vapeur d'inhalation, solution"],
            ['categorie_medicamenteuse_id' => $pulmonaire->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Vapeur d'inhalation, comprimé"],
            ['categorie_medicamenteuse_id' => $pulmonaire->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Gaz médicinal, comprimé"],
            ['categorie_medicamenteuse_id' => $pulmonaire->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Gaz médicinal, cryogénique"],
            ['categorie_medicamenteuse_id' => $pulmonaire->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Gaz médicinal, liquéfié"],
            ['categorie_medicamenteuse_id' => $pulmonaire->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Dispersion par nébulisation"],
            ['categorie_medicamenteuse_id' => $pulmonaire->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Émulsion pour nébuliseur"],
            ['categorie_medicamenteuse_id' => $pulmonaire->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Solution de nébulisation"],
            ['categorie_medicamenteuse_id' => $pulmonaire->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Suspension nébuliseur"],
            ['categorie_medicamenteuse_id' => $pulmonaire->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Solution buvable/concentré pour solution pour inhalation par nébuliseur"],
            ['categorie_medicamenteuse_id' => $pulmonaire->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Poudre pour solution nébuliseur"],
            ['categorie_medicamenteuse_id' => $pulmonaire->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Poudre pour suspension pour nébuliseur"],
            ['categorie_medicamenteuse_id' => $pulmonaire->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Inhalation sous pression, émulsion"],
            ['categorie_medicamenteuse_id' => $pulmonaire->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Inhalation sous pression, solution"],
            ['categorie_medicamenteuse_id' => $pulmonaire->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Inhalation sous pression, suspension"],
            ['categorie_medicamenteuse_id' => $pulmonaire->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Solution pour test de provocation"]
        ];
        foreach($pulmonaires as $pulmo){
          FormeMedicamenteuse::create($pulmo);
        }

        /**
         * RECTAL
         */
        $rectal = CategorieMedicamenteuse::firstWhere('libelle', 'RECTAL');
        $rectals = [
            ['categorie_medicamenteuse_id' => $rectal->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Solution à diluer pour solution buvable/rectale"],
            ['categorie_medicamenteuse_id' => $rectal->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Granulés pour suspension rectale"],
            ['categorie_medicamenteuse_id' => $rectal->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Solution à diluer pour solution buvable/rectale"],
            ['categorie_medicamenteuse_id' => $rectal->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Granulés pour suspension buvable/rectale"],
            ['categorie_medicamenteuse_id' => $rectal->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Solution orale/rectale"],
            ['categorie_medicamenteuse_id' => $rectal->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Suspension orale/rectale"],
            ['categorie_medicamenteuse_id' => $rectal->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Poudre pour suspension buvable/rectale"],
            ['categorie_medicamenteuse_id' => $rectal->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Poudre pour solution rectale"],
            ['categorie_medicamenteuse_id' => $rectal->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Poudre pour suspension rectale"],
            ['categorie_medicamenteuse_id' => $rectal->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Capsule rectale"],
            ['categorie_medicamenteuse_id' => $rectal->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Crème rectale"],
            ['categorie_medicamenteuse_id' => $rectal->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Émulsion rectale"],
            ['categorie_medicamenteuse_id' => $rectal->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Mousse rectale"],
            ['categorie_medicamenteuse_id' => $rectal->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Gel rectal"],
            ['categorie_medicamenteuse_id' => $rectal->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Pommade rectale"],
            ['categorie_medicamenteuse_id' => $rectal->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Solution rectale"],
            ['categorie_medicamenteuse_id' => $rectal->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Suspension rectale"],
            ['categorie_medicamenteuse_id' => $rectal->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Tampon rectal"],
            ['categorie_medicamenteuse_id' => $rectal->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Suppositoire"],
            ['categorie_medicamenteuse_id' => $rectal->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Comprimé pour solution rectale"],
            ['categorie_medicamenteuse_id' => $rectal->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Comprimé pour suspension rectale"]
        ];
        foreach($rectals as $intra){
          FormeMedicamenteuse::create($intra);
        }

        /**
         * VAGINAL
         */
        $vaginal = CategorieMedicamenteuse::firstWhere('libelle', 'VAGINAL');
        $vaginals = [
            ['categorie_medicamenteuse_id' => $vaginal->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Système d'administration vaginale"],
            ['categorie_medicamenteuse_id' => $vaginal->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Comprimé vaginal effervescent"],
            ['categorie_medicamenteuse_id' => $vaginal->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Poudre pour solution vaginale"],
            ['categorie_medicamenteuse_id' => $vaginal->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Granulés pour solution vaginale"],
            ['categorie_medicamenteuse_id' => $vaginal->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Tampon vaginal médicamenteux"],
            ['categorie_medicamenteuse_id' => $vaginal->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Pessaire"],
            ['categorie_medicamenteuse_id' => $vaginal->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Solution vaginale"],
            ['categorie_medicamenteuse_id' => $vaginal->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Suspension vaginale"],
            ['categorie_medicamenteuse_id' => $vaginal->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Pessaire à libération prolongée"],
            ['categorie_medicamenteuse_id' => $vaginal->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Comprimé pour solution vaginale"],
            ['categorie_medicamenteuse_id' => $vaginal->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Gel vaginal"],
            ['categorie_medicamenteuse_id' => $vaginal->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Capsule vaginale dure"],
            ['categorie_medicamenteuse_id' => $vaginal->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Capsule vaginale, molle"],
            ['categorie_medicamenteuse_id' => $vaginal->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Crème vaginale"],
            ['categorie_medicamenteuse_id' => $vaginal->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Émulsion vaginale"],
            ['categorie_medicamenteuse_id' => $vaginal->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Mousse vaginale"],
            ['categorie_medicamenteuse_id' => $vaginal->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Pommade vaginale"],
            ['categorie_medicamenteuse_id' => $vaginal->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Comprimé vaginal"]
        ];
        foreach($vaginals as $intra){
          FormeMedicamenteuse::create($intra);
        }

        /**
         * INCONNU / DIVERS
         */
        $inconnu = CategorieMedicamenteuse::firstWhere('libelle', 'INCONNU / DIVERS');
        $inconnus = [
            ['categorie_medicamenteuse_id' => $inconnu->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Bouchon imprégné"],
            ['categorie_medicamenteuse_id' => $inconnu->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Concentré pour émulsion de pulvérisation"],
            ['categorie_medicamenteuse_id' => $inconnu->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Laque pour prothèses dentaires"],
            ['categorie_medicamenteuse_id' => $inconnu->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Solution épilésionnelle"],
            ['categorie_medicamenteuse_id' => $inconnu->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Tampon imprégné"],
            ['categorie_medicamenteuse_id' => $inconnu->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Solutions d'irrigation"],
            ['categorie_medicamenteuse_id' => $inconnu->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Kit pour préparation radiopharmaceutique"],
            ['categorie_medicamenteuse_id' => $inconnu->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Éponge médicamenteuse"],
            ['categorie_medicamenteuse_id' => $inconnu->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Fil médicamenteux"],
            ['categorie_medicamenteuse_id' => $inconnu->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Poudre pour solution épilésionnelle"],
            ['categorie_medicamenteuse_id' => $inconnu->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Poudre pour mastic"],
            ['categorie_medicamenteuse_id' => $inconnu->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Solution pour plaies à libération prolongée"],
            ['categorie_medicamenteuse_id' => $inconnu->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Générateur de radionucléides"],
            ['categorie_medicamenteuse_id' => $inconnu->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Précurseur radiopharmaceutique"],
            ['categorie_medicamenteuse_id' => $inconnu->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Précurseur radiopharmaceutique, solution"],
            ['categorie_medicamenteuse_id' => $inconnu->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Scellant"],
            ['categorie_medicamenteuse_id' => $inconnu->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Matrice d'étanchéité"],
            ['categorie_medicamenteuse_id' => $inconnu->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Poudre d'étanchéité"],
            ['categorie_medicamenteuse_id' => $inconnu->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Solution pour scellant"],
            ['categorie_medicamenteuse_id' => $inconnu->id, 'uuid' => Str::uuid()->toString(), 'libelle' => "Bâton de blessure"]
        ];
        foreach($inconnus as $intra){
          FormeMedicamenteuse::create($intra);
        }
    }
}


















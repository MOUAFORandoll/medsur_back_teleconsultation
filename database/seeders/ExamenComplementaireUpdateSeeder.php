<?php

namespace Database\Seeders;

use App\Models\ExamenComplementaire;
use App\Models\Type;
use Illuminate\Support\Str;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ExamenComplementaireUpdateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = array(
            ['ORL', 'OTO-RHINO-LARYNGOLOGIE'],
            ['ANAPATH', 'ANAPATHOLOGIE'],
            ['BAC', 'BACTERIOLOGIE'],
            ['BIO', 'BIOCHIMIE'],
            ['COR', 'CHIRURGIE ORTHOPEDIQUE'],
            ['CVL', 'CHIRURGIE VISCERALE'],
            ['DER', 'DERMATOLOGIE'],
            ['EF', 'EXPLORATIONS FONCTIONNELLES'],
            ['GAS', 'HEPATO GASTRO ENTEROLOGIE'],
            ['GO', 'GYNECOLOGIE & OBSTETRIQUE'],
            ['HEMA', 'HEMATOLOGIE'],
            ['HOR', 'HORMONOLOGIE'],
            ['IM', 'IMAGERIE MEDICALE'],
            ['IMSER', 'IMMUNO-SEROLOGIE'],
            ['KIN', 'KINESITHERAPIE'],
            ['MAR', 'MARQUEUR'],
            ['NEURO', 'NEUROLOGIE'],
            ['OPH', 'OPHTAMOLOGIE'],
            ['PAR', 'PARASITOLOGIE'],
            ['PNEU', 'PNEUMOLOGIE'],
            ['PSYCHO', 'PSYCHOLOGIE'],
            ['REA', 'ANESTHESIE - REANIMATION'],
            ['RH', 'RHUMATOLOGIE'],
            ['SIF', 'SOINS INFIRMIERS'],
            ['STO', 'STOMATOLOGIE'],
            ['URG', 'URGENCES'],
            ['URO', 'UROLOGIE']
        );

        foreach($types as $type){
            /**
             * Nous créons ou mettons à jour les types d'examens
             */
            $n_type = Type::where('libelle', $type[0])->first();
            if(is_null($n_type)){
                $n_type = Type::create(['libelle' => $type[0], 'description' => $type[1]]);
            }else{
                $n_type->description = $type[1];
                $n_type->save();
            }
            /** ORL */
            if($type[0] == "ORL"){
                $examen_complementaires = ['AUDIOGRAMME', 'AUDIOMÉTR1E SPÉCIAL DE L’ENFANT', 'AUDIOMETRIE TONALE', 'BILAN DE LA PATHOLOGIE DU LANGAGE ORAL/ ÉCRIT', 'BILAN FONCTIONNEL DE LA PHONATION',
                    'BILAN PHONÉTIQUE DU LANGAGE', 'BIOPSIE DU LARYNX + LARYNGOSCOPE DIRECTE EN SUSPENSION', 'BIOPSIE ORL (PRÉLÈVEMENT D\'ORGANE)', 'BRONCHOSCOPIE', 'BRONCHOSCOPIES ITÉRATIVES', 'CAVOSCOPIE (ENDOSCOPIE DU CAVUM)',
                    'DÉPISTAGE DE LA SURDITÉ', 'EXAMEN D’APTITUDE À L’ACQUISITION DU LANGAGE ORAL/ ÉCRIT', 'EXAMEN LABYRINTHIQUE', 'EXPLORATION CHIRURGICALE DE L’OREILLE MOYENNE', 'IMPEDANCEMETRIE + REFLEXES STAPEDIENS', 'NASO- FIBROSCOPIE + BIOPSIE', 'NASO-FIBROSCOPIE',
                    'PEA (AUDIO-ÉLECTROENCÉPHALOGRAMME)', 'PEA (POTENTIELS ÉVOQUÉS AUDITIFS) : ADULTE ET ENFANT > 8 ANS', 'PEA (POTENTIELS ÉVOQUÉS AUDITIFS) : ENFANT «. 8 ANS 1', 'RSOFIBROSCOPIE', 'RSOPHAGOSCOPIE', 'SINUSCOPIE', 'SINUSCOPIE + BIOPSIE', 'TESTS DE PROVOCATION PAR VOIE NASALE'];
                foreach($examen_complementaires as $examen_complementaire){
                    if(is_null(ExamenComplementaire::where('fr_description', $examen_complementaire)->first())){
                        $new_examen_complementaire = ExamenComplementaire::create(['fr_description' => $examen_complementaire, 'prix' => 0, 'slug' => Str::slug($examen_complementaire).'-'.time()]);
                        $new_examen_complementaire->types()->sync($n_type);
                    }
                }
            }

            /**
             *  ANAPATH
             */
            if($type[0] == "ANAPATH"){
                $examen_complementaires = [ 'BIOPSIE DU COL SOUS COLPOSCOPIE', 'BIOPSIE DU COL SOUS COLPOSCOPIE', 'BIOPSIE DU COL SOUS COLPOSCOPIE', 'BIOPSIE DU COL SOUS COLPOSCOPIE', 'BIOPSIE DU COL SOUS COLPOSCOPIE', 'BIOPSIE DU COL SOUS COLPOSCOPIE', 'BIOPSIE DU COL SOUS COLPOSCOPIE'];
                foreach($examen_complementaires as $examen_complementaire){
                    if(is_null(ExamenComplementaire::where('fr_description', $examen_complementaire)->first())){
                        $new_examen_complementaire = ExamenComplementaire::create(['fr_description' => $examen_complementaire, 'prix' => 0, 'slug' => Str::slug($examen_complementaire).'-'.time()]);
                        $new_examen_complementaire->types()->sync($n_type);
                    }
                }
            }

            /**
             *  BAC
             */
            if($type[0] == "BAC"){

                $examen_complementaires = ['EXAMEN MICROSCOPIQUE DE RECHERCHE DE BACILLES ACIDO-ALCOOLO-RESISTANTS (BAAR)', 'COPROCULTURE', 'CULOT URINAIRE', 'EXAMEN CYTOBACTERIOLOGIQUE DES URINES (ECBU) + ANTIBIOGRAMME (ATB)', 'EXAMEN CYTOBACTERIOLOGIQUE DES URINES (ECBU) SIMPLE', 'EXAMEN CYTOLOGIE DES LIQUIDES DE PONCTIONS',
                'HEMOCULTURE', 'MYCOPLASME', 'PRELEVEMENT CERVICO-VAGINAL (PCV)', 'PRELEVEMENT CERVICO-VAGINAL (PCV)  + ANTIBIOGRAMME (ATB)', 'PRELEVEMENT DE PUS (PONCTION-ASPIRATION-BIOPSIE) + ANTIBIOGRAMME (ATB)', 'PRELEVEMENT URETRAL (PU)', 'PRELEVEMENT URETRAL (PU) + ANTIBIOGRAMME (ATB)', 'SPERMOCULTURE', 'SPERMOGRAMME'];
                foreach($examen_complementaires as $examen_complementaire){
                    if(is_null(ExamenComplementaire::where('fr_description', $examen_complementaire)->first())){
                        $new_examen_complementaire = ExamenComplementaire::create(['fr_description' => $examen_complementaire, 'prix' => 0, 'slug' => Str::slug($examen_complementaire).'-'.time()]);
                        $new_examen_complementaire->types()->sync($n_type);
                    }
                }
            }

            /**
             *  BIO
             */
            if($type[0] == "BIO"){
                $examen_complementaires = ['ACIDE FOLIQUE', 'ACIDE URIQUE', 'ALANINE AMINOTRANSFÉRASE (ALAT) OU GLUTAMAT-PYRUVAT-TRANSAMINASE (GPT)', 'ALBUMINE-SUCRE', 'ALBUMINÉMIE',
                'ALBUMINURIE', 'AMYLASE', 'ASPARTATE AMINOTRANSFÉRASE ASAT OU GLUTAMIC-OXALOACETIC TRANSAMINASE (GOT)', 'BANDELETTE URINAIRE COMBI 11',
                'BILAN LIPIDIQUE', 'BILIRUBINE DIRECTE', 'BILIRUBINE TOTALE', 'CALCIUM', 'CALCIUM CORRIGÉ', 'CALCIUM IONISÉ', 'CHIMIE DU LIQUIDE D\'ASCITE (RATIO/GRADIENT)',
                'CHIMIE DU LIQUIDE PLEURAL (RATIO)', 'CHIMIE DU LIQUIDE DE PONCTION', 'CHIMIE LIQUIDE CÉPHALORACHIDIEN (LCR)', 'CHLORE', 'CHOLESTEROL HDL', 'CHOLESTEROL LDL',
                'CHOLESTEROL TOTAL', 'CLAIRANCE CRÉATININE', 'CLAIRANCE UREE', 'COEFFICIENT DE SATURATION DE LA TRANSFERRINE', 'CREATINE PHOSPHOKINASE (CPK)', 'CRÉATININE', 
                'ELECTROPHORÉSE DES LIPIDES', 'ELECTROPHORÉSE DES PROTÉINES', 'ELECTROPHORÉSE DES PROTIDES', 'FER SERIQUE', 'FERRITINE', 'FIBRINOGÈNE', 'GAMMA-GLUTAMYLTRANSFÉRASE (GGT)', 
                'GAZ DU SANG', 'GLUCOSE', 'GLUCOSE-6-PHOSPHATE DÉSHYDROGÉNASE (G6PD)', 'GLYCÉMIE À JEUN (GLUCOMÈTRE)', 'GLYCÉMIE POST PRANDIALE GPP', 'HAPTOGLOBINE', 'HÉMOGLOBINE GLYQUÉE', 
                'HYPERGLYCEMIE PROVOQUE', '"IMMUNOFIXATION DES PROTEINES', '(IMMUNOÉLECTROPHORÈSE)"', 'IONOGRAMME SANGUIN COMPLET (NA, K,CL,CA,MG)', 'IONOGRAMME SANGUIN SIMPLE (NA, K,', 'LACTASE', 
                'LACTATE DESHYDROGENASE (LDH)', 'LIPASÉMIE', 'LIPIDES TOTAUX (LIPIDEMIE)', 'MAGNÉSIUM', 'MAGNÉSIUM ERYTHROCYTAIRE', 'MICROALBUMINURIE', 'PHOSPHATASE ACIDE PHOSPHATIQUE', 
                'PHOSPHATASE ALCALINE (PAL)', 'PHOSPHORE', 'POTASSIUM', 'PROFIL LIPIDIQUE', 'PROTÉINE DE 24H', 'PROTÉINÉMIE (PROTÉINE TOTALE)', 'PROTEINEMIE TOTALE', 'PROTIDES TOTAUX, GLOBULINEMIE', 
                'SELS ET PIGMENTS BILIAIRES', 'SODIUM', 'TEST D’O’SULLIVAN', 'TRANSFERRINE', 'TRIGLYCERIDES', 'URÉE', 'VITAMINE B12'];
                foreach($examen_complementaires as $examen_complementaire){
                    if(is_null(ExamenComplementaire::where('fr_description', $examen_complementaire)->first())){
                        $new_examen_complementaire = ExamenComplementaire::create(['fr_description' => $examen_complementaire, 'prix' => 0, 'slug' => Str::slug($examen_complementaire).'-'.time()]);
                        $new_examen_complementaire->types()->sync($n_type);
                    }
                }
            }

            /**
             *  COR
             */
            if($type[0] == "COR"){
                $examen_complementaires = [ 'ABLATION D\'U N SEGMENT OU D\'UN POUMON','ABLATION MATÉRIEL D\'OSTÉOSYNTHÈSE BASSIN','ABLATION MATÉRIEL D\'OSTÉOSYNTHÈSE MEMBRE INFÉRIEUR','ABLATION MATÉRIEL D\'OSTÉOSYNTHÈSE MEMBRE SUPÉRIEUR " \'','ABLATION MATÉRIEL D’OSTÉOSYNTHÈSE RACHIS','ABLATION PLÂTRE','AMPUTATION COUDE','AMPUTATION D\'UNI DOIGT','A PUTATION D\'UN ORTEIL','AMPUTATION HANCHE', 
                'AMPUTATION JAMBE', 'AMPUTATION PIED', 'AMPUTATION POIGNET', 'AMPUTATION PLUS D’UN DOIGT', 'AMPUTATION PLUS D\'UN ORTEIL', 'ARTHRODÈSE CHEVILLE i', 'ARTHRODÈSE DU MEMBRE SUPÉRIEUR /I - 2 ARTICULATIONS', 'ARTHRODÈSE DU MEMBRE SUPÉRIEUR/PLUS DE 2 ARTICULATIONS', 'ARTHRODÈSE GENOU', 'ARTHRODÈSE HANCHE', 'ARTHROPLASTIE ÉPAULE', 'ARTHROPLASTIE GENOU', 'ARTHROPLASTIE HANCHE BIPOLAIRE', 
                'ARTHROPLASTIE HANCHE MONO POLAIRE', 'ARTHROSCOPIES + MÉNISECTOMIES', 'ARTHROSCOPIES DIAGNOSTIQUES', 'ASPIRATION OU DRAINAGE ENDO-CAVITAIRE', 'AUTOPLASTIE POUR LAMBEAU ET TRANSPOSITION DE DOIGTS', 'BIOPSIES DE TISSUS SOUS ANESTHÉSIE', 'BIOPSIES OSSEUSES', 'CANAL CARPIEN CHIRURGICAL', 'CANAL CARPIEN ENDOSCOPIQUE', 'CONFECTION DE PLÂTRE SANS ANESTHÉSIE',
                'CONFECTION DE PLÂTRE SOUS ANESTHÉSIE GÉNÉRALE', 'CONTENTION CEINTURES', 'CONTENTION COLLIER', 'CONTENTION MINERVE', 'CORRECTION DE SÉQUELLES PARALYTIQUES SOMME DES SOUS ACTES POSÉS', 'CURE CHIRURGICALE DE HERNIES DISCALE ET LA MINECTOME', 'CURE CHIRURGICALE D\'ONGLE INCARNÉ', 'CURE CHIRURGICALE D\'UNE INFECTION + OSTÉOSYNTHÈSE DE FRACTURE DU BASSIN', 
                'CURE CHIRURGICALE D\'UNE INFECTION+ OSTÉOSYNTHÈSE DE FRACTURE CONDYLIENNE DU FÉMUR FERMÉE', 'CURE CHIRURGICALE D’UNE INFECTION+ OSTÉOSYNTHÈSE DE FRACTURE DE COL FÉMORAL', 'CURE CHIRURGICALE D\'UNE INFECTIÛN+ OSTÉOSYNTHÈSE DE FRACTURE DE COTYLE', 'CURE CHIRURGICALE D\'UNE INFECTION+ PSEUDARTHROSE DE FRACTURE BI-MALLÉOLAIRE FERMÉE', 
                'CURE CHIRURGICALE D\'UNE INFECTION+ PSEUDARTHROSE DE FRACTURE CLAVICULE', 'CURE CHIRURGICALE D\'UNE INFECTION+ PSEUDARTHROSE DE FRACTURE DE PIED', 'CURE CHIRURGICALE D\'UNE INFECTION+ PSEUDARTHROSE DE FRACTURE DOIGTS', 'CURE CHIRURGICALE D\'UNE INFECTION+ PSEUDARTHROSE DE FRACTURE FÉMORALE', 'CURE CHIRURGICALE D\'UNE IN FECTION+PSEUDARTHROSE DE FRACTURE FERMÉE / 1 OS AVANT-BRAS', 
                'CURE CHIRURGICALE D\'UNE INFECTION+ PSEUDARTHROSE DE FRACTURE FERMÉE /2 OS AVANT-BRAS', 'CURE CHIRURGICALE D\'UNE INFECTION+ PSEUDARTHROSE DE FRACTURE FERMÉE DE JAMBE', 'CURE CHIRURGICALE D\'UNE INFECTION+ PSEUDARTHROSE DE FRACTURE HUMÉRUS FERMÉE', 'CURE CHIRURGICALE D\'UNE INFECTION+ PSEUDARTHROSE DE FRACTURE OMOPLATE', 'CURE CHIRURGICALE D\'UNE INFECTION+ PSEUDARTHROSE DE FRACTURE UNI MALLÉOLAIRE FERMÉE', 
                'CURE DE PLAIE TRAUMATIQUE SANS ANESTHÉSIE', 'CURE DE PLAIE TRAUMATIQUE SOUS ANESTHÉSIE', 'CURE DE PSEUDARTHROSE DE FRACTURE / EXTRÉMITÉS INF.', 'CURE DE PSEUDARTHROSE DE FRACTURE / EXTRÉMITÉS SUP.', 'CURE DE PSEUDARTHROSE DE FRACTURE AVANT BRAS', 'CURE DE PSEUDARTHROSE DE FRACTURE BI-MALLÉOLAIRE FERMÉE', 'CURE DE.PSEUDARTHROSE DE FRACTURE BRAS', 'CURE DE PSEUDARTHROSE DE FRACTURE CLAVICULE', 'CURE DE PSEUDARTHROSE DE FRACTURE CLAVICULE + CONTENTION',
                'CURE DE PSEUDARTHROSE DE FRACTURE DE PIED', 'CURE DE PSEUDARTHROSE DE FRACTURE DOIGT', 'CURE DE PSEUDARTHROSE DE FRACTURE DOIGfS', 'CURE DE PSEUDARTHROSE DE FRACTURE FÉMORALE', 'CURE DE PSEUDARTHROSE DE FRACTURE FERMÉE / 1 OS AVANT-BRAS', 'CURE DE PSEUDARTHROSE DE FRACTURE FERMÉE/2 OS AVANT-BRAS', 'CURE DE PSEUDARTHROSE DE FRACTURE FERMÉE DE JAMBE', 'CURE DE PSEUDARTHROSE DE FRACTURE HUMÉRUS FERMÉE', 
                'CURE DE PSEUDARTHROSE DE FRACTURE OMOPLATE', 'CURE DE PSEUDARTHROSE DE FRACTURE UNI MALLÉOLAIRE FERMÉE', 'CURE DE PSEUDARTHROSE DIAPHYSE FÉMORALE', 'CURE DE PSEUDARTHROSE FRACTURE FÉMUR + PLÂTRE', 'CURE DE PSEUDARTHROSE FRACTURE JAMBE + PLÂTRE', 'CURE DE RUPTURE TENDON D\'ACHILLE', 'CURE D(-HALLUS VALGUS', 'DIAPHYSE FÉMORALE', 'DIAPHYSE FERMÉE DE JAMBE', 'EVACUATION DRAINAGE DES ÉPANCHEMENTS SÉRO-HÉMATIQUES',
                'EXÉRÈSE TUMEUR PROFONDE', 'EXÉRÈSE TUMEUR SUPERFICIELLE', 'EXOSOSECTOMIE OU DE SÉQUESTRE', 'EXTIRPATION D\'UN ABCÈS FROID\'RACHIS', 'EXTRACTION DE CORPS ÉTRANGERS SOUS ANESTHÉSIE', 'GREFFE DERMO ÉPIDERMIQUE / DIAMÈTRE DE PLUS DE 200 CM2', 'GREFFE DERMO ÉPIDERMIQUE / DIAMÈTRE ENTRE 1 ET 50 CM2', 'GREFFE DERMO ÉPIDERMIQUE / DIAMÈTRE ENTRE 50 ET 200 CM2', 'GREFFE NERVEUSE ET VASCULAIRE', 'INCISION ABCÈS PROFOND', 
                'INCISION ABCÈS SUPERFICIEL', 'INFILTRATION', 'INJECTION INTRADERMIQUE', 'INJECTION MÉTHODE DE BESREDKA', 'INJECTION SOUS-CUTANÉE', 'ION DEVEINES', 'LAMBEAUX LIBRES MAINS', 'LAMBEAUX LIBRES PIEDS',
                'LAMBEAUX LIBRES PIEDS ET MAINS', 'LAMBEAUX THORACIQUES OU ABDOMINAUX', 'LIGAMENTOPLASTIE', 'MOBILISATION ARTICULAIRE SOUS NARCOSE', 'NETTOYAGE D\'UNE BRÛLURE / ENTRE 10 ET 20 % DE LA SURFACE DU CORPS', 'NETTOYAGE D\'UNE BRÛLURE / MOINS DE 10 % DE LA SURFACE DU CORPS', 'NETTOYAGE D\'UNE BRÛLURE / PLUS 20 % DE LA SURFACE DU CORPS', 'OSTÉOSYNTHÈSE DE DISJONCTION STERNO-CLAVICULAIRE', 
                'OSTÉOSYNTHÈSE DE FRACTURE / EXTRÉMITÉS INF.', 'OSTÉOSYNTH ÈSE DE FRACTURE / EXTRÉMITÉS SUP.', 'OSTÉOSYNTHÈSE DE FRACTURE BI-MALLÉOLAIRE FERMÉE', 'OSTÉOSYNTHÈSE DE FRACTURE CLAVICULE', 'OSTÉOSYNTHÈSE DE FRACTURE CONDYLIENNE DU FÉMUR FERMÉE', 'OSTÉOSYNTHÈSE DE FRACTURE DE COL FÉMORAL', 'OSTÉOSYNTHÈSE DE FRACTURE DE COTYLE', 'OSTÉOSYNTHÈSE DE FRACTURE DE PIED', 'OSTÉOSYNTHÈSE DE FRACTURE DOIGTS', 
                'OSTÉOSYNTHÈSE DE FRACTURE DU BASSIN', 'OSTÉOSYNTHÈSE DE FRACTURE FÉMORALE', 'OSTÉOSYNTHÈSE DE FRACTURE FERMÉE / 1 OS AVANT-BRAS', 'OSTÉOSYNTHÈSE DE FRACTURE FERMÉE /2 OS AVANT-BRAS', 'OSTÉOSYNTHÈSE DE FRACTURE FERMÉE DE JAMBE', 'OSTÉOSYNTHÈSE DE FRACTURE FERMÉE DE ROTULE', 'OSTÉOSYNTHÈSE DE FRACTURE HUMÉRUS FERMÉE', 'OSTÉOSYNTHÈSE DE FRACTURE OMOPLATE', 'OSTÉOSYNTHÈSE DE FRACTURE UNI MALLÉOLAIRE FERMÉE', 
                'OSTÉOSYNTHÈSE DE FRACTURE VERTÉBRALE ;', 'OSTÉOTOMIE AVANT BRAS', 'OSTÉOTOMIE DOIGT OU ORTEIL', 'OSTÉOTOMIE FÉMORALE', 'OSTÉOTOMIE JAMBE', 'PANSEMENT AVEC PARAGE ET RÉGULARISATION', 'PANSEMENT COMPLIQUÉ AVEC PARAGE SANS ANESTHÉSIE', 'PANSEMENT D|-UNE BRÛLURE/ ENTRE 10 ET 20 % DE LA SURFACE DU CORPS', 'PANSEMENT Df-UNE BRÛLURE / MOINS DE 10 % DE LA SURFACE DU CORPS', 'PANSEMENT Df-UNE BRÛLURE/ PLUS 20 % DE LASURFACE DU CORPS', 
                'PLASTIE CUTANÉE Df-UNE BRIDE', 'PLÂTRE BI-CRURAL', 'PLÂTRE BI-JAMBIER', 'PLÂTRE CORSET', 'PLÂTRE CORSET-MINERVE', 'PLEUROTOMIE AVEC RÉSECTION COSTALE', 'PONCTION BIOPSIE DE LA PLÈVRE', 'PONCTION DELA PLÈVRE', 'PONCTION ÉVACUATRICE DE LA PLÈVRE', 'PONCTIONS ÉVACUATRICES + INFILTRATION', 'POUCE À RESSORT', 'RÉDUCTION DE FRACTURE AVANT BRAS', 'RÉDUCTION DE FRACTURE BRAS', 'RÉDUCTION DE FRACTURE CHEVILLE', 'RÉDUCTION DE FRACTURE CLAVICULE + CONTENTION', 'RÉDUCTION DE FRACTURE DOIGT', 'RÉDUCTION DE FRACTURE JAMBE + PLÂTRE', 'RÉDUCTION DE FRACTURE PIED\'+ PLÂTRE', 'RÉDUCTION FRACTURE FÉMUR + PLÂTRE', 'RÉDUCTION NON SANGLANTE DE LUXATION FERMÉE DU MEMBRE SUPÉRIEUR', 'RÉDUCTION SANGLANTE DE LUXATION DU MEMBRE INFÉRIEUR',
                 'RÉDUCTION SANGLANTE DE LUXATION DU MEMBRE SUPÉRIEUR', 'RÉDUCTION SANGLANTE DE LUXATION FERMÉE DU MEMBRE INFÉRIEUR', 'RÉDUCTION SECONDAIRE DE LUXATION DU MEMBRE INFÉRIEUR', 'RÉDUCTION SECONDAIRE DE LUXATION DU MEMBRE SUPÉRIEUR', 'RÉDUCTION SECONDAIRE DE LUXATION FERMÉE DU MEMBRE INFÉRIEUR', 'RÉDUCTION SECONDAIRE DE LUXATION FERMÉE DU MEMBRE SUPÉRIEUR', 'RÉGULARISATION ÉPLUCHAGE ET SUTURE DES PARTIES MOLLES', 'RÉGULARISATION,ÉPLUCHAGE ET SUTURE D ,1 F LAIE DES PARTIES MOLLES', 'RÉGULARISATION,ÉPLUCHAGE ET SUTURE D K PLAN SUPERFICIEL', 'RÉGULARISATION,ÉPLUCHAGE ET SUTURE ÉVENTUELLE D K PLAN SUPERFICIEL', 'RÉPARATION DES HERNIES MUSCULAIRES', 'RÉPARATION PRIMAIRE DE RUPTURE 1 TENDON EXTENSEUR', 'RÉPARATION PRIMAIRE DE RUPTURE 1 TENDON FLÉCHISSEUR', 
                'RÉPARATION PRIMAIRE DE RUPTURE PLUSIEURS TENDONS EXTENSEURS', 'RÉPARATION PRIMAIRE DE RUPTURE PLUSIEURS TENDONS FLÉCHISSEURS', 'RÉPARATION PRIMAIRE D’UN NERF', 'RÉPARATION PRIMAIRE D\'UN VAISSEAU', 'RÉPARATION SECONDAIRE DE RUPTURE 1 TENDON EXTENSEUR', 'RÉPARATION SECONDAIRE DE RUPTURE 1 TENDON FLÉCHISSEUR', 'RÉPARATION SECONDAIRE DE RUPTURE PLUSIEURS TENDONS EXTENSEURS', 'RÉPARATION SECONDAIRE DE RUPTURE PLUSIEURS TENDONS FLÉCHISSEURS', 'RÉPARATION SECONDAIRE D\'UN NERF', 'RÉPARATION SECONDAIRE D\'UN VAISSEAU', 'REPRISE PTH,TPG', 'RÉSECTION DELA PREMIÈRE CÔTE', 'RÉSECTION D\'UNE CÔTE', 'REVISION D\'AMPUTATION', 'RX PEROPÉRATOIRE', 'SOINS DE KINÉSITHÉRAPIE', 'SUTURE PLAIE SOUS ANESTHÉSIE LOCALE', 'SYNOVECTOMIE', 
                'TENOLYSE DES EXTENSEURS OU FLÉCHISSEURS', 'TRACTION DE MEMBRE AVEC ANESTHÉSIE', 'TRACTION DE MEMBRE SANS ANESTHÉSIE', 'TRAITEMENT DES ANOMALIES DE LA PAROI THORACIQUE', 'TRAITEMENT NON SANGLANTS DES TRAUMATISMES FERMÉS DU THORAX'];
                foreach($examen_complementaires as $examen_complementaire){
                    if(is_null(ExamenComplementaire::where('fr_description', $examen_complementaire)->first())){
                        $new_examen_complementaire = ExamenComplementaire::create(['fr_description' => $examen_complementaire, 'prix' => 0, 'slug' => Str::slug($examen_complementaire).'-'.time()]);
                        $new_examen_complementaire->types()->sync($n_type);
                    }
                }
            }

            /**
             *  CVL
             */
            if($type[0] == "CVL"){
                $examen_complementaires = ['ANUSCOPIE', 'ANUSCOPIE AVEC BIOPSIE', 'BREATH TEST_ENDOSCOPIE', 'COLOSCOPIE AU DELA DE L`ANGLE GAUCHE AVEC BIOPSIE_ENDOSCOPIE', 'COLOSCOPIE AU DELA DE L\'ANGLE GAUCHE_ENDOSCOPIE', 'COLOSCOPIE SANS BIOPSIE AVEC ANESTHESIE_ENDOSCOPIE',
                'COLOSCOPIE TOTALE AVEC BIOPSIE SOUS ANESTHESIE_ENDOSCOPIE', 'COLOSCOPIE TOTALE AVEC BIOPSIE_ENDOSCOPIE', 'COLOSCOPIE TOTALE SANS BIOPSIE_ENDOSCOPIE', 'COLOSCOPIE PARTIELLE',  'ENDOSCOPIE OESO GASTRO DUODENALE',  'ENDOSCOPIE OESO GASTRO DUODENALE AVEC BIOPSIE',
                'ENDOSCOPIE OESO GASTRO DUODENALE AVEC TEST A L\'UREASE',  'LAPAROSCOPIE AVEC BIOPSIE',  'LAPAROSCOPIE DIAGNOSTIC SIMPLE',  'OESOPHAGOSCOPIE',  'PH METRIE OESOPHAGIENNE DES 24H',  'RECTOSIGMOÏDOSCOPIE',  'RECTOSIGMOÏDOSCOPIE AVEC BIOPSIE'];
                foreach($examen_complementaires as $examen_complementaire){
                    if(is_null(ExamenComplementaire::where('fr_description', $examen_complementaire)->first())){
                        $new_examen_complementaire = ExamenComplementaire::create(['fr_description' => $examen_complementaire, 'prix' => 0, 'slug' => Str::slug($examen_complementaire).'-'.time()]);
                        $new_examen_complementaire->types()->sync($n_type);
                    }
                }
            }

            /**
             *  DER
             */
            if($type[0] == "DER"){

                $examen_complementaires = ['ABLATION D ANGIOME SOUS CUTANÉE', 'ABLATION D UNE TUMEUR CUTANÉE PAR AUTOPLASTIE LOCALE', 'ABLATION DUNE TUMEUR CUTANÉE PAR GREFFE', 'ABLATION DE L ONGLE', 'ABLATION DE LYMPHANGIOME SOUS CUTANÉE', 'ABLATION DES PETITES TUMEURS BÉNIGNES CUTANÉES', 'ABLATION DES PETITES TUMEURS BÉNIGNES ÉPIDERMIQUE / SÉANCE', 'ABLATION DES PETITES TUMEURS BÉNIGNES SOUS APONÉVROTIQUES', 'ABLATION DES PETITES TUMEURS BÉNIGNES SOUS CUTANÉES', 'ABLATION XANTHE LESMA LÉSION UNIQUE',
                'BIOPSIE CUTANÉE', 'CRYOTHÉRAPIE / SÉANCE', 'CURE RADICALE DE L [-ONGLE INCARNÉE', 'DESTRUCTION D 1 VERRUE PLANTAIRE', 'DESTRUCTION D UNE VERRUE VULGAIRE', 'DESTRUCTION DE CONDYLOMES ACUMINES / SÉANCE', 'DESTRUCTION DE PETITES TUMEURS SOUS UNGUÉALES EN PLUSIEURS SÉANCES', 'DESTRUCTION DE PETITES TUMEURS SOUS UNGUÉALES EN UNE SÉANCE', 'DESTRUCTION DE VERRUES PLANTAIRES / PAR VERRUE SUPPLÉMENTAIRE',
                'DESTRUCTION DE VERRUES PLANTAIRES /ENTRE 2 ET 4', 'DESTRUCTION DES PETITES TUMEURS BÉNIGNES CUTANÉES', 'DESTRUCTION DES PETITES TUMEURS BÉNIGNES ÉPIDERMIQUE/SÉANCE', 'DESTRUCTION DES PETITES TUMEURS BÉNIGNES SOUS APONÉVROTIQUES', 'DESTRUCTION DES PETITES TUMEURS BÉNIGNES SOUS CUTANÉES', 'DESTRUCTION DES VERRUES PÉRI UNGUÉALE EN UNE SÉANCE', 'DESTRUCTION DES VERRUES PÉRI UNGUÉALES EN PLUSIEURS SÉANCES',
                'DESTRUCTION PAR VERRUE VULGAIRE SUPPLÉMENTAIRE', 'DESTRUCTION VERRUES VULGAIRES / ENTRE 2 ET 4', 'DESTRUCTION XANTHE LESMA LÉSION UNIQUE', 'DRAINAGE D UNE COLLECTION ASSOCIÉE-SUPERFICIELLE', 'DRAINAGE D’UNE COLLECTION ISOLÉE SUPERFICIELLE', 'ELECTROCOAGULATION PAPILLOMES GÉNITAUX EXTERNE D 1 GLAND ET MÉTAL', 'ELECTROCOAGULATION PAPILLOMES GÉNITAUX EXTERNE DE MULTIPLES GLANDS ET MÉTAUX',
                'EXCISION D’UN ANTHRAX', 'EXCISION DES HYGROMAS', 'EXÉRÈSE D’UN GANGLION', 'EXÉRÈSE D’UNE ADÉNOPATHIE', 'INCISION D’UNE CICATRICE VICIEUSE + SUTURE', 'INCISION D UNECOLLECTION ASSOCIÉE SUPERFICIELLE', 'INCISION D UNECOLLECTION ISOLÉE SUPERFICIELLE', 'INFILTRATION MÉDICAMENTEUSE INTRA LÉSIONNELLE', 'INFILTRATION MÉDICAMENTEUSE SOUS LÉSIONNELLE', 'PONCTION D ABCÈS OU DE GANGLION', 'PONCTION GANGLION', 'SUTURE SECONDAIRE D’UNE PLAIE APRÈS AVIVEMENT'];
                foreach($examen_complementaires as $examen_complementaire){
                    if(is_null(ExamenComplementaire::where('fr_description', $examen_complementaire)->first())){
                        $new_examen_complementaire = ExamenComplementaire::create(['fr_description' => $examen_complementaire, 'prix' => 0, 'slug' => Str::slug($examen_complementaire).'-'.time()]);
                        $new_examen_complementaire->types()->sync($n_type);
                    }
                }
            }

            /**
             *  EF
             */
            if($type[0] == "EF"){

                $examen_complementaires = ['ÉCHOCARDIOGRAPHIE D’EFFORT SUR BICYCLETTE ERGONOMIQUE', 'ÉCHOCARDIOGRAPHIE DE STRESS', 'ÉCHOCARDIOGRAPHIE TRANSOESOPHAGIENNE', 'ÉCHOCARDIOGRAPHIE TRANSTHORACIQUE', 'ÉPREUVE D’EFFORT MÉTABOLIQUE SUR BICYCLETTE ERGONOMIQUE', 'ÉPREUVE D’EFFORT SUR BICYCLETTE ERGONOMIQUE', 'ÉPREUVE D’EFFORT SUR TAPIS ROULANT', 'HOLTER RYTHMIQUE DE 24 H', 'HOLTER RYTHMIQUE DE 72 H', 'MAPA - MESURE AMBULATOIRE DE LA PRESSION ARTÉRIELLE','TILT TEST','POLYGRAPHE',
            ];
                foreach($examen_complementaires as $examen_complementaire){
                    if(is_null(ExamenComplementaire::where('fr_description', $examen_complementaire)->first())){
                        $new_examen_complementaire = ExamenComplementaire::create(['fr_description' => $examen_complementaire, 'prix' => 0, 'slug' => Str::slug($examen_complementaire).'-'.time()]);
                        $new_examen_complementaire->types()->sync($n_type);
                    }
                }
            }

            /**
             *  GAS
             */
            if($type[0] == "GAS"){
                $examen_complementaires = ['ANUSCOPIE','ANUSCOPIE + LIGATURE DES HÉMORROÏDES PAR SEANCE','BIOPSIE EN ENDOSCOPIE','COLOSCOPIE GAUCHE',
                'COLOSCOPIE TOTALE','COLOSCOPIE TOTALE + POLYPECTOMIE','FIBROSCOPIE','FIBROSCOPIE + EXTRACTION DES CORPS ÉTRANGERS',
                'FIBROSCOPIE + LIGATURE DES VARICES OESOPHAGIENNES','RECTOSCOPIE', 'RECTOSIGMOIDOSCOPIE'];
                foreach($examen_complementaires as $examen_complementaire){
                    if(is_null(ExamenComplementaire::where('fr_description', $examen_complementaire)->first())){
                        $new_examen_complementaire = ExamenComplementaire::create(['fr_description' => $examen_complementaire, 'prix' => 0, 'slug' => Str::slug($examen_complementaire).'-'.time()]);
                        $new_examen_complementaire->types()->sync($n_type);
                    }
                }
            }

            /**
             *  GO
             */
            if($type[0] == "GO"){

                $examen_complementaires = ['ECHOGRAPHIE ABDOMINO PELVIENNE','ECHOGRAPHIE DOPPLER OBSTETRICALE (T2 - T3)','ECHOGRAPHIE MAMMAIRE','ECHOGRAPHIE OBSTETRICALE (T1 GROSSESSE SIMPLE OU MULTIPLE)',
                'ECHOGRAPHIE OBSTETRICALE (T2 - T3 GROSSE SIMPLE)','ECHOGRAPHIE OBSTETRICALE (T2 - T3 GROSSESSE MULTIPLE)','ECHOGRAPHIE OBSTETRICALE (T2 -T3 MORPHOLOGIQUE - RECHERCHE DES MALFORMATIONS',
                'ECHOGRAPHIE PELVIENNE','ECHOGRAPHIE PELVIENNE (SUS PUBIENNE + ENDO VAGINALE)','ECHOGRAPHIE VESICO PROSTATIQUE COMPLEMENTAIRE', 'EXAMEN DU COL SOUS AG', 'HYSTEROSONOGRAPHIE'];
                foreach($examen_complementaires as $examen_complementaire){
                    if(is_null(ExamenComplementaire::where('fr_description', $examen_complementaire)->first())){
                        $new_examen_complementaire = ExamenComplementaire::create(['fr_description' => $examen_complementaire, 'prix' => 0, 'slug' => Str::slug($examen_complementaire).'-'.time()]);
                        $new_examen_complementaire->types()->sync($n_type);
                    }
                }
            }

            /**
             *  HEMA
             */
            if($type[0] == "HEMA"){
                $examen_complementaires = ['COMBINE TEMPS DE PROTHROMBINE (TP) ET TEMPS DE CEPHALINE ACTIVE (TCA)','COMBINE TEMPS DE PROTHROMBINE (TP) ET TEMPS DE CEPHALINE ACTIVE (TCA) ET INTERNATIONAL NORMALISED RATION (INR)',
                'COOMBS DIRECT','COOMBS INDIRECT','ELECTROPHORÈSES D’HÉMOGLOBINE ELHB','FIBRINOGENE','FROTTIS DU MYELOGRAMME','FROTTIS SANGUIN','GROUPE SANGUIN/ RHÉSUS (GS/RH)','INTERNATIONAL NORMALISED RATION (INR)', 
                'MYOGLOBINE', 'NUMÉRATION FORMULE SANGUINE (NFS)', 'TAUX DE RETICULOCYTES', 'TEMPS DE CEPHALINE ACTIVE (TCA) OU KAOLIN (TCK)', 'TEMPS DE PROTHROMBINE (TP)', 'TEMPS DE QUICK (TQ)', 'TEMPS DE COAGULATION', 
                'TEMPS DE SAIGNEMENT', 'TEST D\'EMMEL', 'VITESSE DE SÉDIMENTATION (VS)'];
                foreach($examen_complementaires as $examen_complementaire){
                    if(is_null(ExamenComplementaire::where('fr_description', $examen_complementaire)->first())){
                        $new_examen_complementaire = ExamenComplementaire::create(['fr_description' => $examen_complementaire, 'prix' => 0, 'slug' => Str::slug($examen_complementaire).'-'.time()]);
                        $new_examen_complementaire->types()->sync($n_type);
                    }
                }
            }

            /**
             *  HOR
             */
            if($type[0] == "HOR"){
                $examen_complementaires = ['(CTNI/CK-MB/MYO) RAPID QUANTITATIVE TEST', 'BETA GONADOTROPHINE CHORIONIQUE HUMAINE (Β-HCG) PLAMATIQUE ET QUANTITATIF', 'BETA GONADOTROPHINE CHORIONIQUE HUMAINE (Β-HCG) PLAMATIQUE QUALITATIF', 'CARDIAC MUSCLE CREATINE TROPONIN I (CTNI)',
                'CORTISOL', 'CORTISOL LIBRE (URINE DE 24H)', 'CREATINE KINASE HYBRIDIZATION TYPE (CK-MB)', 'D-DIMERES', 'FOLLICLE-STIMULATING HORMONE (FSH)', '"NT-PRO BNP (', 'BRAIN NATRIURETIC PEPTIDE)"', 'LUTANE HORMONE (LH)', 'OESTRADIOL (E2)',
                 'PROGESTERONE', 'PROLACTINE LIBRE', 'PROSTATE-SPECIFIC ANTIGEN (PSA) LIBRE', 'PROSTATE-SPECIFIC ANTIGEN (PSA) TOTAL', 'TESTOSTÉRONE', 'THYROID-STIMULATING HORMONE (TSH)', 'THYROXINE T4 LIBRE', 'TRIIODOTHYRONINE T3 TOTALE'];
                foreach($examen_complementaires as $examen_complementaire){
                    if(is_null(ExamenComplementaire::where('fr_description', $examen_complementaire)->first())){
                        $new_examen_complementaire = ExamenComplementaire::create(['fr_description' => $examen_complementaire, 'prix' => 0, 'slug' => Str::slug($examen_complementaire).'-'.time()]);
                        $new_examen_complementaire->types()->sync($n_type);
                    }
                }
            }

            /**
             *  IM
             */
            if($type[0] == "IM"){
                $examen_complementaires = ['RX UROCYSTOGRAPHIE', 'RX UROGRAPHIE INTRA VEINEUSE + MICTION', 'SACCORADICULOGRAPHIE', 'SCANNER ABDOMINAL / ARBRE URINAIRE', 'SCANNER ABDOMINAL / ARBRE URINAIRE PLUS LOPAMIRON', 'SCANNER AVEC INJECTION PAR SEGMENT', 
                'SCANNER AVEC INJECTION PAR SEGMENT (CML)', 'SCANNER BASSIN', 'SCANNER CEREBRAL PEDIATRIQUE', 'SCANNER CEREBRAL/LOMBAIRE A.I',  'SCANNER CEREBRAL/LOMBAIRE A.I PLUS LOPAMIRON',  'SCANNER CEREBRAL/LOMBAIRE S.I',  
                'SCANNER CERVICAL',  'SCANNER CERVICAL PLUS LOPAMIRON',  'SCANNER CERVICAL SI TRAUMA',  'SCANNER CORPS ENTIER',  'SCANNER CRÂNO-FACIAL',  'SCANNER DE L\'OREILLE',  'SCANNER DE LA CUISSE',  'SCANNER DES EXTREMITES',  
                'SCANNER DES ROCHERS',  'SCANNER DES VOIES OPTIQUES',  'SCANNER DU CAVUM',  'SCANNER DU COU',  'SCANNER DU GENOU',  'SCANNER LARYNX',  'SCANNER LARYNX PLUS LOPAMIRON',  'SCANNER MASSIF FACIAL',  'SCANNER MASSIF FACIAL PLUS INJECTION',  
                'SCANNER ORBITE',  'SCANNER PAROTIDE',  'SCANNER PEDIATRIQUE PAR SEGMENT AVEC OU SANS INJECTION',  'SCANNER SELLE TURCIQUE',  'SCANNER SINUS SANS INJECTION',  'SCANNER SURENALIENNE',  'SCANNER SURENALIENNE PLUS LOPAMIRON', 
                 'SCANNER THORACIQUE AVEC INJECTION',  'SCANNER THORACIQUE SANS INJECTION',  'SCANOMETRIE DES M.I',  'SCHULLER COMPARATIF',  'SINUS F/P',  'URO SCANNER AVEC INJECTION',  'URO SCANNER SANS INJECTION'];
                foreach($examen_complementaires as $examen_complementaire){
                    if(is_null(ExamenComplementaire::where('fr_description', $examen_complementaire)->first())){
                        $new_examen_complementaire = ExamenComplementaire::create(['fr_description' => $examen_complementaire, 'prix' => 0, 'slug' => Str::slug($examen_complementaire).'-'.time()]);
                        $new_examen_complementaire->types()->sync($n_type);
                    }
                }
            }

            /**
             *  IMSER
             */
            if($type[0] == "IMSER"){

                $examen_complementaires = ['ANTISTREPTOLYSINE O (ASLO)', 'BILHARZIOSE', 'C-REACTIVE PROTEINE (CRP) ULTRA-SENSIBLE', 'CHARGE VIRALE ARN HÉPATITE B', 'CHARGE VIRALE ARN HÉPATITE C', 'CHLAMYDIA DIRECT', 'CHLAMYDIA IGG ELISA', 'CHLAMYDIA IGG+IGM ELISA', 'CHLAMYDIA IGM ELISA', 'CHLAMYDIA QUALITATIF IGM', 'FACTEUR RHUMATOÏDE (FR)',
                 'G TEST', 'H PYLORI (DÉPISTAGE)', 'HÉPATITE B (AGHBS DÉPISTAGE)', 'HÉPATITE B CONFIRMATION', 'HÉPATITE C (ACHCV DÉPISTAGE)', 'HÉPATITE C CONFIRMATION', 'HERPES VIRUS SIMPLEX I (IGG ET IGM)', 'HERPES VIRUS SIMPLEX I IGG', 'HERPES VIRUS SIMPLEX IGM', 
                 'HERPES VIRUS SIMPLEX II (IGG ET IGM)', 'HERPES VIRUS SIMPLEX II IGG', 'HUMAN IMMUNODEFICIENCY VIRUS (HIV) (DÉPISTAGE)', 'HUMAN IMMUNODEFICIENCY VIRUS (HIV) 1 ET 2 AC+AG VIDAS', 'HUMAN IMMUNODEFICIENCY VIRUS (HIV) CONFIRMATION', 'IMMUNOGLOBULINES DE TYPE E (IGE) TOTALES', 'PROCALCITONINE (PCT)', 'PROTÉINE C RÉACTIVE (CRP)', 
                 'RUBEOLE IGG + IGM ELISA', 'RUBEOLE IGG ELISA', 'RUBÉOLE IGG/IGM QUALITATIF', 'RUBEOLE IGM ELISA', 'RUBEOLE IGM ELISA', 'SÉROLOGIE SCHISTOSOMIASE', 'SYPHILIS (TPHA/VDRL OU RPR)', 'TOXOPLASMOSE IGG ELISA', 'TOXOPLASMOSE IGG/IGM QUALITATIF', 'TOXOPLASMOSE IGG+IGM ELISA', 'TOXOPLASMOSE IGM ELISA', 'WIDAL & FÉLIX SUR PLAQUE', 
            ];
                foreach($examen_complementaires as $examen_complementaire){
                    if(is_null(ExamenComplementaire::where('fr_description', $examen_complementaire)->first())){
                        $new_examen_complementaire = ExamenComplementaire::create(['fr_description' => $examen_complementaire, 'prix' => 0, 'slug' => Str::slug($examen_complementaire).'-'.time()]);
                        $new_examen_complementaire->types()->sync($n_type);
                    }
                }
            }

            /**
             *  KIN
             */
            if($type[0] == "KIN"){
                $examen_complementaires = ['ACTES DE KINESITHERAPIE A DOMICILE', 'APPAREILLAGE /SÉANCE', 'BALNÉOTHÉRAPIE/SÉANCE', 'ELECTROTHÉ RAPIE / SÉANCE', 'MASSAGE/SÉANCE', 'MÉCANOTHÉRAPIE / SÉANCE', 
                'RÉÉDUCATION EN GYNÉCOLOGIE/ SÉANCE', 'RÉÉDUCATION EN NEUROCHIRURGIE / SÉANCE', 'RÉÉDUCATION EN NEUROLOGIE / SÉANCE', 'RÉÉDUCATION EN ORTHOPÉDIE / SÉANCE', 'RÉÉDUCATION EN PÉDIATRIE / SÉANCE', 
                'RÉÉDUCATION EN PNEUMOLOGIE / SÉANCE', 'RÉÉDUCATION EN RHUMATOLOGIE/SÉANCE', 'RÉÉDUCATION EN TRAUMATOLOGIE/SÉANCE', 'SEANCE KINE', 'SOINS DE KINESITHERAPIE A DOMICILE AGENTS CNPS'];
                foreach($examen_complementaires as $examen_complementaire){
                    if(is_null(ExamenComplementaire::where('fr_description', $examen_complementaire)->first())){
                        $new_examen_complementaire = ExamenComplementaire::create(['fr_description' => $examen_complementaire, 'prix' => 0, 'slug' => Str::slug($examen_complementaire).'-'.time()]);
                        $new_examen_complementaire->types()->sync($n_type);
                    }
                }
            }

            /**
             *  MAR
             */
            if($type[0] == "MAR"){
                $examen_complementaires = ['ALPHA-FŒTOPROTÉINE (AFP)','ANTIGÈNE CARCINOEMBRYONNAIRE (ACE)','ANTIGÈNE TUMORAL 125 (CA 125)','ANTIGÈNE TUMORAL 19-9 (CA 19-9)',
                'ANTIGÈNE TUMORAL 15-3 (CA 15-3)','CYFRA 21-1','GASTRINE'];
                foreach($examen_complementaires as $examen_complementaire){
                    if(is_null(ExamenComplementaire::where('fr_description', $examen_complementaire)->first())){
                        $new_examen_complementaire = ExamenComplementaire::create(['fr_description' => $examen_complementaire, 'prix' => 0, 'slug' => Str::slug($examen_complementaire).'-'.time()]);
                        $new_examen_complementaire->types()->sync($n_type);
                    }
                }
            }

            /**
             *  NEURO
             */
            if($type[0] == "NEURO"){
                $examen_complementaires = [ 'ELECTROENCEPHALOGRAMME LONGUE DUREE','ELECTROENCEPHALOGRAMME STANDARD','ELECTROMYOGRAPHIE','ELECTROMYOGRAPHIE 4 MEMBRES','ELECTROMYOGRAPHIE_LAMAT','PONCTION LOMBAIRE'];
                foreach($examen_complementaires as $examen_complementaire){
                    if(is_null(ExamenComplementaire::where('fr_description', $examen_complementaire)->first())){
                        $new_examen_complementaire = ExamenComplementaire::create(['fr_description' => $examen_complementaire, 'prix' => 0, 'slug' => Str::slug($examen_complementaire).'-'.time()]);
                        $new_examen_complementaire->types()->sync($n_type);
                    }
                }
            }

            /**
             *  OPH
             */
            if($type[0] == "OPH"){

                $examen_complementaires = ['CHAMP VISUEL AUTOMATIQUE', 'CHAMP VISUEL AUTOMATIQUE TOP', 'CHAMP VISUEL DE GOLDMANN', 'CHIRURGIE DU NYSTAGMUS', 'CONTRÔLE ORTHOPTIQUE ISOLÉ', 'COURBE D-ADAPTATION À L’OBSCURITÉ', 'COURBE DETONOMÈTRIE ÉLECTRONIQUE', 'ELECTRORÉTINOGRAPHIE', 'EPREUVES DE PROVOCATION DANS LE GLAUCOME', 'EVISCERATION', 
                    'EXAMEN DE LA MOTILITÉ OCULAIRE', 'EXAMEN SENSORIO-MOTEUR', 'FOND D\'OEIL (F.O)', 'FLUOROMÉTRIE', 'FLUOROSCOPIE', 'GONIOSCOPIE', 'ORBITOMÈTRIE', 'PACHIMETRIE', 'PÉRIMÈTRIE SUIVIE', 'RÉFRACTOMÉTRIE (RFMA)', 'RÉFRACTOMÉTRIE AVEC CYCLOPLÉGIE', 'REMPLACEMENT DU VITRÉ PAR VOIE POSTÉRIEURE',
                    'RÉPARATION PLAIE PALPÉBRALE AVEC RECTION BORD LIBRE', 'RÉTINOGRAPHIE MYDRIATIQUE', 'RÉTINOGRAPHIE NON MYDRIATIQUE ISOLÉE', 'ROTH 28 HUE', 'SECTION DE BRIDES VITRÉENNES PAR VOIE ANTÉRIEURE', 'SKIACOPIE (SKIA)',
                    'SUTURE DE PLAIES CUTANÉO-MUQUEUSES DES PAUPIÈRES', 'TEST DE COULEUR', 'TEST DE LANTHONY', 'TONOGRAPHIE AU TONOMÈTRE DE SCHIOTZ', 'TONOGRAPHIE AU TONOMÈTRE ÉLECTRONIQUE', 'TRABÉCULECTOMIE', 'VISION DE COULEUR'];
                foreach($examen_complementaires as $examen_complementaire){
                    if(is_null(ExamenComplementaire::where('fr_description', $examen_complementaire)->first())){
                        $new_examen_complementaire = ExamenComplementaire::create(['fr_description' => $examen_complementaire, 'prix' => 0, 'slug' => Str::slug($examen_complementaire).'-'.time()]);
                        $new_examen_complementaire->types()->sync($n_type);
                    }
                }
            }

            /**
             *  PAR
             */
            if($type[0] == "PAR"){

                $examen_complementaires = ['COPROLOGIE OU SELLES +TECHNIQUES DE CONCENTRATION', 'GOUTTE EPAISSE (GE)', 'RECHERCHE DES MICROFILAIRES (RMF)', 'SANG OCCULTRE', 
                'SKIN-SNIP TEST', 'TDR PALUDISME'];
                foreach($examen_complementaires as $examen_complementaire){
                    if(is_null(ExamenComplementaire::where('fr_description', $examen_complementaire)->first())){
                        $new_examen_complementaire = ExamenComplementaire::create(['fr_description' => $examen_complementaire, 'prix' => 0, 'slug' => Str::slug($examen_complementaire).'-'.time()]);
                        $new_examen_complementaire->types()->sync($n_type);
                    }
                }
            }

            /**
             *  PNEU
             */
            if($type[0] == "PNEU"){
                $examen_complementaires = ['BIOPSIE PLEURALE', 'FIBROSCOPIE', 'SPIROMETRIE'];
                foreach($examen_complementaires as $examen_complementaire){
                    if(is_null(ExamenComplementaire::where('fr_description', $examen_complementaire)->first())){
                        $new_examen_complementaire = ExamenComplementaire::create(['fr_description' => $examen_complementaire, 'prix' => 0, 'slug' => Str::slug($examen_complementaire).'-'.time()]);
                        $new_examen_complementaire->types()->sync($n_type);
                    }
                }
            }

             /**
             *  PSYCHO
             */
            if($type[0] == "PSYCHO"){
                $examen_complementaires = [
                'EATING DISORDER INVENTORY 2 (EDI)', 'ÉCHELLE CLINIQUE DE COLÈRE - CLINICAL ANGER SCALE (CAS)', 'ECHELLE COGNITIVE D’ATTACHEMENT AUX BENZODIAZÉPINES (ECAB)', 'ECHELLE COMPORTEMENTALE D\'ANXIÉTÉ ET PHOBIE DE VÉRA (ECAP)',
                'ECHELLE D’ANXIÉTÉ SOCIALE / LIEBOWITZ SOCIAL ANXIETY SCALE (LSAS)', 'ECHELLE D’ESTIME DE SOI SOCIALE DE ROSENBERG (RSE)', 'ECHELLE D’OBSESSION-COMPULSION DE YALE-BROWN (YB-OCS)',
                'ÉCHELLE D\'AFFIRMATION DE SOI DE CUNGI ET REY', 'ECHELLE D\'ANXIÉTÉ MULTIDIMENSIONNELLE POUR ENFANTS (MASC)', 'ECHELLE D\'ATTENTION ET DE PLEINE CONSCIENCE (MAAS)', 'ECHELLE D\'ATTITUDES DYSFONCTIONNELLES DE WEISSMAN ET BECK (DAS)', 'ECHELLE D\'AUTOÉVALUATION DE L\'ANOREXIE MENTALE - EATING ATTITUDE TEST (EAT-40)', 'ÉCHELLE DE COMMUNICATION DE CUNGI ET REY', 'ÉCHELLE DE DÉPRESSION DE MONTGOMERY ET ASBERG (MADRS)', 'ECHELLE DE DÉSESPOIR DE BECK / BECK HOPELESSNESS SCALE (BHS)', 'ÉCHELLE DE FUSION PENSÉE-FORME', 'ECHELLE DE L\'ÉTAT DE STRESS POST-TRAUMATIQUE - POSTTRAUMATIC STRESS DISORDER CHECKLIST SCALE (PCLS)',
                'ÉCHELLE DE MÉLANCOLIE DE BECH ET RAFAELSEN (MES)', 'ECHELLE DE SOMNOLENCE D\'EPWORTH (ESS)', 'ECHELLE DES CROYANCES ET ATTITUDES DYSFONCTIONNELLES À PROPOS DU SOMMEIL (CAS)', 'ECHELLE D\'ÉVALUATION DE LA DÉPRESSION CHEZ L\'ENFANT (CDRS-R)', 'ECHELLE D\'IDÉATION SUICIDAIRE DE BECK (BSS)', 'ECHELLE D\'INTOLÉRANCE À L\'INCERTITUDE (EII)', 'ECHELLE D\'OBSESSION COMPULSION DE YALE-BROWN POUR ENFANTS (CY-BOCS)', 'ECHELLE RÉVISÉE D’IMPACT D’ÉVÉNEMENT TRAUMATISANT - HOROWITZ (IES)', 'FIVE FACETS MINDFULNESS QUESTIONNAIRE (FFMQ)', 
                'INDEX DE RÉACTION AU STRESS POST-TRAUMATIQUE DE L\'ENFANT (CPTS-RI)', 'INDEX DE SÉVÉRITÉ DE L\'INSOMNIE (ISI)', 'INVENTAIRE D\'ANXIÉTÉ SITUATIONNELLE ET DE TRAIT D\'ANXIÉTÉ-FORME Y (IASTA-Y)', 'INVENTAIRE DE DÉPRESSION DE BECK OU BECK DEPRESSION INVENTORY (IDB)', 'INVENTAIRE DE DÉPRESSION DE L\'ENFANT (CDI)', 'INVENTAIRE DE DÉTRESSE PÉRITRAUMATIQUE (PDI)', 
                'INVENTAIRE DE MOBILITÉ POUR L\'AGORAPHOBIE DE CHAMBLESS (IMA)', 'INVENTAIRE DES CROYANCES RELATIVES AUX OBSESSIONS (ICRO)', 'INVENTAIRE DES OBSESSIONS-COMPULSION DE MAUDSLEY (MOCI)', 
                'L’ÉCHELLE D’INSIGHT COGNITIF DE BECK (BCIS)', 'L’ÉCHELLE D’INSIGHT DE BIRCHWOOD (BIS)', 'L’ÉCHELLE RÉVISÉE DES CROYANCES AU SUJET DES VOIX (BVAQ-R)', 'LE QUESTIONNAIRE DES PEURS DE MARKS ET MATHEWS', 'L\'ÉCHELLE D\'AFFIRMATION DE SOI DE RATHUS / RATHUS ASSERTIVENESS SCHEDULE', 'L\'ÉCHELLE D\'ANXIÉTÉ ET DE DÉPRESSION POUR ENFANTS RÉVISÉE DE CHORPITA (RCADS)', 'L\'INVENTAIRE D\'ANXIÉTÉ DE BECK / BECK ANXIETY INVENTORY (BAI)', 'LISTE DES ACTIVITÉS OBSESSIVES-COMPULSIVES (LAO)', 'QUESTIONNAIRE AUDIT / ALCOHOL USE DISORDERS IDENTIFICATION TEST (AUDIT)', 'QUESTIONNAIRE D\'ANXIÉTÉ POUR ENFANTS DE SPENCE (SCAS)', 'QUESTIONNAIRE DE CHRONOTYPE RÉVISÉ (MEQ-SA)', 
                'QUESTIONNAIRE DE REPÉRAGE DE LA CONSOMMATION DE CANNABIS (CAST)', 'QUESTIONNAIRE DES COGNITIONS AGORAPHOBIQUES DE CHAMBLESS', 'QUESTIONNAIRE DES CONDUITES INTERPERSONNELLES (QCI)', 'QUESTIONNAIRE DES EXPÉRIENCES DE DISSOCIATION PÉRITRAUMATIQUE (PDEQ)', 'QUESTIONNAIRE DES INQUIÉTUDES DE PENN STATE, VERSION ENFANTS ET ADOLESCENTS', 'QUESTIONNAIRE DES SCHÉMAS DE YOUNG (YSQ – L3)', 'QUESTIONNAIRE FOR EATING DISORDER DIAGNOSIS (Q-EDD)', 'QUESTIONNAIRE SUR LES INQUIÉTUDES DE PENN STATE (QIPS)', 'SCALE TO ASSESS UNAWARENESS OF MENTAL DISORDER (SUMD)', 
                'SCARED-R-51', 'SEANCE DE PSYCHOEDUCATION', 'SEANCE DE PSYCHOTERAPIE', 'SOUTIEN PSYCHOLOGIQUE', 'STAGES OF RECOVERY INSTRUMENT (STORI)', 'TEST D’INVENTAIRE DE BURNOUT DE MASLACH (MBI)', 'TEST DE FAGERSTRÖM (FAGERSTROM)', 'TEST DE HONC (HOOKED ON NICOTINE CHECKLIST) (HONC)', 'TEST ECHELLE D\'ANXIETE', 'TEST ECHELLE DE BECK', 'TEST ECHELLE DE DEPRESSION', 'TEST ECHELLE DE TRAUMA', 'TEST ECHELLE D\'ESTIME DE SOI'
                ];
                foreach($examen_complementaires as $examen_complementaire){
                    if(is_null(ExamenComplementaire::where('fr_description', $examen_complementaire)->first())){
                        $new_examen_complementaire = ExamenComplementaire::create(['fr_description' => $examen_complementaire, 'prix' => 0, 'slug' => Str::slug($examen_complementaire).'-'.time()]);
                        $new_examen_complementaire->types()->sync($n_type);
                    }
                }
            }

             /**
             *  REA
             */
            if($type[0] == "REA"){

                $examen_complementaires = [
                    'ADMINISTRATION D ADRE > 8 MCG / KG / MIN','ADMINISTRATION DE DOBU > 8 MCG / KG / MIN','ADMINISTRATION DE DOPA> 8 MCG / KG / MIN','ADMINISTRATION DE MONOXYDE D AZOTE [NO] INHALÉ , CHEZ UN PATIENT VENTILÉ','ADMINISTRATION DE NORADRE > 8 MCG / KG / MIN','ALIMENTATION ENTÉRALE > 35 K CAL / KG / J','ALIMENTATION ENTÉRALE > 35 KCAL / KG / J','ALIMENTATION ENTÉRALE 20 À 35 KCAL/KG/.','ALIMENTATION ENTÉRALE 20 À 35 KCAL / KG / J','ALIMENTATION ENTÉRALE ET PARENTÉRALE > 35 KCAL / KG / J', 'ALIMENTATION PARENTÉRALE > 35 KCAL / KG / J', 'ALIMENTATION PARENTÉRALE > 35 KCAL / KG / J', 'ALIMENTATION PARENTÉRALE 20 À 35 KCAL / KG / J', 'ALIMENTATION PARENTÉRALE 20 À 35 KCAL /KG /J', 'ASPIRATION DES VAS ET MISE EN PLACE D UN DISPOSITIF NASO PHARYNGÉ', 'ASPIRATION DES VAS ET MISE EN PLACE D UN DISPOSITIF ORO PHARYNGÉ', 'BRONCHOSCOPIE RIGIDE', 'C.P.A.P. NON INVASIVE', 'CEC POUR RECHAUFFEMENT D UNE HYPOTHERMIE ACCIDENTELLE', 'CHIMIO MULTIPLE PAR ACCÈS VEINEUX IMPLANTÉ <12 H', 'CHIMIO MULTIPLE PAR VOIE INTRAVEIN EUSE TRANSCUTANÉE < 12 H', 'CHIMIO SIMPLE PAR ACCÈS VEINEUX IMPLANTÉ < 12 H', 'CHIMIO SIMPLE PAR VOIE INTRAVEINEUSE TRANSCUTANÉE < 12 H', 'CHOC ÉLECTRIQUE EXTERNE EN URGENCE', 'CIRCULATION EXTRACORPORELLE', 'CIRCULATION EXTRACORPORELLE POUR RECHAUFFEMENT D UNE HYPTHERMIE', 'CONDITIONNEMENT ET MOBILISATION PATIENT DANS MATELAS COQUILLE', 'CONTREPULSION INTRAAORTIQUE', 'DÉCHOQUAGE', 'DÉFI B RI LATION AU DÉFIBRILLATEUR MANUEL', 'DÉFIBRILLATION AU DÉFIBRILLATEUR AUTOMATIQUE', 'DÉFIBRILLATION AU DÉFIBRILLATEUR SEMI-AUTOMATIQUE', 'DÉRIVATION LCR VENTRICULAIRE EXTERNE', 'DÉSOBSTRUCTION DE SITE IMPLANTABLE PAR THROMBOLYTIQUE', 'DÉSOBSTRUCTION DE VOIE TUNNELISÉE PAR TH ROMBOLYTIQUE', 'DRAINAGE THORACIQUE', 'ECHOGRAPH IE POUR ANESTHÉSIE LOCORÉGIONALE', 'FI02 DO,6', 'FI02 DO,6 / 4SH', 'FIBRINOLYSE IN SITU DE L ARTÈRE PULMONAIRE', 'FIBRINOLYSE IN SITU DE L ARTÈRE PULMONAIRE', 'FIBROASPIRATION SUR ABORD TRACHÉAL', 'FIBROSCOPIE BRONCHIQUE AVEC LBA SANS ABORD TRACHÉAL', 'FIBROSCOPIE BRONCHIQUE AVEC LBA SUR ABORD TRACHÉAL', 'FIBROSCOPIE BRONCHIQUE AVEC LBA SUR ABORD TRACHÉAL', 'FIBROSCOPIE BRONCHIQUE SANS ABORD TRACHÉAL', 'FIBROSCOPIE BRONCHIQUE SUR ABORD TRACHÉAL', 'FIBROSCOPIE BRONCHIQUE SUR ABORD TRACHÉAL', 'FIBROSCOPIE BRONCHIQUE+ BIOPSIE BRONCHIQUE SANS GUIDAGE', 'FI02 >0,6', 'FI02 > 0,6+DÉCUBITUS VENTRAL', 'FORFAIT BLOC OPÉRATOIRE', 'FORFAIT POUR GESTES DE SURVIE', 'GAZOMÉTRIE ARTÉRIELLE', 'INSPIRATOIRE AVEC PEP/24 H', 'INTUBATION', 'INTUBATION HORS ANESTHÉSIE', 'INTUBATION SOUS FIBROSCOPIE', 'INTUBATION TRACHÉALE AVEC INSTILLATION DE SURFACTANT EXOGÈNE', 'INTUBATION TRACHÉALE AVEC INSTILLATION DE SURFACTANT EXOGÈNE', 'IRRIGATION-DRAINAGE D UNE FISTULE D UN VISCÈRE ABDOMINAL', 'MASSAGE CARDIAQUE EXTERNE', 'MISE EN PLACE D UN COLLIER CERVICAL', 'MISE EN PLACE D UNE MINERVE COLLIER CERVICAL', 'MOBILISATION TRAUMATISÉ DU RACHIS', 'NÉBULISATION D UN AGENT THÉRAPEUTIQUE + SURVEILLANCE SP02 ETF.0 2H', 'NÉBULISATION D UN AGENT THÉRAPEUTIQUE + SURVEILLANCE SP02 ET F.C. > 2H', 'OXYGÉNOTH ÉRAPIE AVEC SURVEILLANCE CONTINUE', 'POSE D UN CATHÉTER CARDIAQUE DROITSWAN GANZ', 'POSE D UN CATHÉTER OMBILICAL', 'POSE D UN CATHÉTER SUS PUBIEN', 'POSE D UN CATHÉTER VEINEUX CENTRAL', 'POSE D UN CATHÉTER VEINEUX OMBILICAL', 'POSE D UN DISPOSITIF DE MESURE DE LA SJ02', 'POSE DE CATHETER ARTÉRIEL', 'POSE DE DISPOSITIF INTRA ARTÉRIEL DE SURVEILLANCE DE LA PA 1', 'POSE DE PLUSIEURS DRAINS THORACIQUES POUR IRRIGATION LAVAGE PLEURALE', 'POSE VOIE D EXCEPTION', 'POSE VOIE INTRA OSSEUSE', 'POSE VOIE VEINEUSE CENTRALE CHEZ ADULTE AVEC ÉCHOGU1DAGE', 'POSE VOIE VEINEUSE CENTRALE CHEZ ADULTE SANS ÉCHOGUIDAGE', 'POSE VOIE VEINEUSE CENTRALE CHEZ ENFANT', 'PRÉLÈVEMENT BRONCHIQUE DISTAL PROTÉGÉ AVEC FIBROSCOPIE', 'PRÉLÈVEMENT BRONCHIQUE DISTAL PROTÉGÉ SANS FIBROSCOPIE .', 'REMPLISSAGE VASCULAIRE > 50 ML / KG /24 H', 'REMPLISSAGE VASCULAIRE > 50 ML / KG < 24 H', 'RESSUSCITATION CARDIORESPIRATOIRE', 'RESSUSCITATION CARDIORESPIRATOIRE AVEC INTUBATION INTRATRACHÉALE', 'RESSUSCITATION CARDIORESPIRATOIRE DANS BLOC MÉDICO-TECHNIQUE', 'RESSUSCITATION CARDIORESPIRATOIRE HORS BLOC MÉDICO-TECH.', 'SÉANCE D IRRIGATION LAVAGE PLEURAL', 'SÉDATION ET CURARISATION AVEC SURVEILLANCE DE LA CURARISATION / 24H', 'SÉDATION ET CURARISATION CONTINUES AVEC SURVEILLANCE DE CURARISATION / 24H', 'SEVRAGE', 'SUPPLÉANCE HÉMO ET VENTILATOIRE SUR MORT CÉRÉBRALE', 'SUPPLÉANCE HÉMODYNAMIQUE / 24H', 'SUPPLÉANCE HÉMODYNAMIQUE ET VENTILATOIRE D UN COMA', 'SUPPLÉANCE HÉMODYNAMIQUE ET VENTILATOIRE D UN COMA DÉPASSÉ', 'SURVEILLANCE CONTINUE E.C.G. + TA + SP02', 'SURVEILLANCE CONTINUE PA PAR VOIE INVASIVE', 'SURVEILLANCE CONTINUE PAR CATHÉTER SWAN-GANZ +/- SV02', 'SURVEILLANCE CONTINUE PVC PAR VOIE INVASIVE', 'TAM PONNEMENT DE VARICES OESOGASTRIQUES PAR SONDE À BALLONNET', 'TAMPONNEMENT DE VARICES OESOGASTRIQUES PAR SONDE À BALLONNET', 'TRACHÉOTOMIE', 'TRACHÉOTOMIE PERCUTANÉE', 'TRANSFUSION DÉCONCENTRÉ ERYTHROCYTAIRE < 1/2 MASSE SANGUINE / 24H', 'TRANSFUSIO N DE PRODUIT SANGUIN LABILE NON ÉRYTHROCYTAIRE DU NN', 'TRANSFUSION DE PRODUITS SANGUINS LABILES (P.S.L) NON ÉRYTRHOCYTAIRES', 'TRANSFUSION SIMULTANÉE DE 2 P.S.L NON ÉRYTHROCYTAIRES', 'TRANSFUSION SIMULTANÉE DE 2 P.S.L. NON ÉRYTHROCYTAIRES', 'TRANSFUSION SIMULTANÉE DE 2 P.S.L NON ÉRYTHROCYTAIRES POUR C.I.V.D,', 'V.M. AVEC PEP > 6', 'V.M. AVEC PEP D 6', 'V.M, AVEC PEP D 6/48H', 'V.M. PAR OSCILLATIONS', 'V.N.I POUR INSUFFISANCE RESPIRATOIRE AIGUE. E2H/12H', 'V.N.I. CONTINUE', 'V.N.I. CONTINUE', 'V.N.I. POUR INSUFFISANCE RESPIRATOIRE AIGUE<2H/12HEURES', 'V.S. SUR INTUBATION', 'V.S. SUR TRACHÉOTOMIE', 'VASOACTIVE ! 24 H', 'VENTILATION À CIRCUIT FERMÉ', 'VENTILATION AU RESPIRATEUR DE TRANSPORT POUR UNE DURÉE < 3 HEURES', 'VENTILATION AU RESPIRATEUR DE TRANSPORT POUR UNE DURÉE > 3 HEURES', 'VENTILATION MANUELLE OU PAR BOUCHE À BOUCHE', 'VENTILATION MÉCANIQUE', 'VENTILATION MÉCANIQUE À POUMONS SÉPAF.ÉS / 24 HEURES', 'VENTILATION SPONTANÉE AU MASQUE FAplAJ. PAR CANULE NASALE', 'VENTILATION SPONTANÉE AU MASQUE FACIAL PAR CANULE NASOPHARYNGÉE', 'VNI', 'XV.M. AVEC Fl02 > 0,6', 'X V. M. AVEC F102 > 0,6 ET DÉCUBITUS VENTRAL', 'X V. M. AVEC PEP < 6 ET DÉCUBITUS VENTRAL', 'XV.M. AVEC PEP >6', 'XV.M. PAR OSCILLATIONS',
                ];
                foreach($examen_complementaires as $examen_complementaire){
                    if(is_null(ExamenComplementaire::where('fr_description', $examen_complementaire)->first())){
                        $new_examen_complementaire = ExamenComplementaire::create(['fr_description' => $examen_complementaire, 'prix' => 0, 'slug' => Str::slug($examen_complementaire).'-'.time()]);
                        $new_examen_complementaire->types()->sync($n_type);
                    }
                }
            }

             /**
             *  RH
             */
            if($type[0] == "RH"){
                $examen_complementaires = ['INFILTRATIONS ARTBATICULAIRES', 'INFILTRATIONS ARTICULAIRES - HANCHE', 'INFILTRATIONS ARTICULAIRES (CHEVILLES, GENOUX)', 'INFILTRATIONS EPIDURALES', 'PONCTION ARTICULAIRE - HANCHE', 'PONCTIONS ARTICULAIRES (COUDES, EPAULES, GENOUX, CHEVILLES)', 'VISCOSUPPLEMENTATION'];
                foreach($examen_complementaires as $examen_complementaire){
                    if(is_null(ExamenComplementaire::where('fr_description', $examen_complementaire)->first())){
                        $new_examen_complementaire = ExamenComplementaire::create(['fr_description' => $examen_complementaire, 'prix' => 0, 'slug' => Str::slug($examen_complementaire).'-'.time()]);
                        $new_examen_complementaire->types()->sync($n_type);
                    }
                }
            }

            /**
            *  SIF
            */
            if($type[0] == "SIF"){

                $examen_complementaires = [
                    'ABLATION CATH ETER OMBILICAL', 'ABLATION D\'UN BOUCHON DE CERUMEN', 'ABLATION D\'UN CORPS ÉTRANGER NASAL', 'ABLATION D\'UN CORPS ÉTRANGER NON ENCLAVÉ CONDUIT AUDITIF', 'ABLATION FILS', 'ABLATION REDON OU DRAIN', 'ABLATION SONDE URINAIRE', 'ABLATION VOIE VEINEUSE', 'ACTIVITÉS DE NURSING PARJOUR', 'ALIMENTATION ENTÉRALE PAR EN DÉCLIVE/ PAR SÉANCE', 'ALIMENTATION ENTÉRALE PAR NUTRI-POMPE/ PAR SÉANCE', 'ALIMENTATION ENTÉRALE PAR VOIE JÉJUNALE /PAR SÉANCE', 'ALIMENTATION PAR SONDE/SÉANCE DE GAVAGE', 'ARRÊT DISPOSITIF D f-U NE TRANSFUSION', 'ARRÊT DU CATHÉTER VEINEUX CENTRAL', 'ARRÊT DU DISPOSITIF DU CATHÉTER VEINEUX', 'ASPIRATION PAR SONDE DETRACHÉOTOMIE', 'BAIN ASSISTÉ', 'BAIN BEBE', 'CATHÉTÉRISME URÉTRAL CHEZ L HOMME', 'CATHÉTÉRISME URÉTRAL CHEZ LA FEMME', 'CATHÉTÉRISME URÉTRAL- ENFANT DE MOINS DE CINQ ANS', 'CERTIFICAT D\'ACCOUCHEMENT', 'CHANGEMENT DE SONDE DE TRACHÉOTOMIE', 'CHANGEMENT DE CANULE DETRACHÉOTOMIE', 'CHANGEMENT PERFUSION', 'CIRCONCISION D’INFIRMIER', 'ÉDUCATION À L AUTO-SONDAGE ENTRE UNE ET 10 SÉANCES.', 'ÉDUCATION À L AUTO-SONDAGE PLUS DE 10 SÉANCES.', 'ENREGISTREMENT DE BDC PENDANT TRENTE MINUTES', 'ÉPISIOTOMIE', 'EXAMEN DU BASSIN À LA PREMIÈRE CONSULTATION PRÉNATALE', 'EXTRACTION DE FÉCALOME CHEZ GRABATAIRE', 'EXTRACTION DE FÉCALOME DANS DES CAS ISOLÉS', 'FREIN DE LANGUE', 'FROTTIS VAGINAL', 'GAVAGE SIMPLE', 'GAVAGE TULIPE', 'GRAND\'PANSEMENT', 'IMPLANT SOUS-CUTANÉ', 'INDUCTION DU TRAVAIL', 'INJECTION ALLERGÈNE / SÉRIE DE 20 SÉANCES', 'INJECTION D\'UN VACCIN', 'INJECTION D’UN IMPLANTSOUS-CUTANÉ', 'INJECTION EN GOUTTE À GOUTTE SOUS-CUTANÉE,', 'INJECTION INTRA-RECTALE', 'INJECTION INTRADERMIQUE', 'INJECTION INTRAMUSCULAIRE', 'INJECTION INTRAVEINEUSE DIRECTE EN SÉRIE PAR TUBULURE', 'INJECTION INTRAVEINEUSE DIRECTE/ ENFANT MOINS DE 5 ANS', 'INJECTION INTRAVEINEUSE LENTE DIRECTE ISOLÉE', 'INJECTION PAR POUSSE SERINGUE', 'INJECTION SÉRUM ORIGINE HUMAINE OU ANIMALE (MÉTHODE DE BESREDKA)', 'INJECTION SOUS CONJONCTIVALE', 'INJECTION SOUS-CUTANEE (S/C)', 'INJECTION VAGINALE', 'INJECTIONS INTRAMUSCULAIRE', 'INJECTIONS IVD', 'INJECTIONS IVD\'SURTUBULURE', 'INJECTIONS SC OU IDR', 'INSTILLATION VÉSICAL', 'LANGE BEBE', 'LAVAGE GASTRIQUE', 'LAVAGE OCULAIRE', 'LAVAGE OREILLE', 'LAVAGE SINUS', 'LAVAGE VÉSICAL', 'LAVEMENT ÉVACUATEUR', 'LAVEMENT MÉDICAMENTEUX', 'LECTURE D\'UN TIMBRE TUBERCULINIQUE', 'MÉCHAGE SIMPLE POUR ÉPISTAXIS UNI OU BILATÉRAL', 'MENACE D\'ACCOUCHEMENT PRÉMATURÉ (REPOS STRICT AU LIT)', 'MISE EN PLACE D\'UN IMPLANTSOUS-CUTANÉ', 'MONITORAGE AU BLOC OPÉRATOIRE', 'NURSING APRÈS ÉPISIOTOMIE OU DÉCHIRURE PÉRINÉALE', 'NURSING COMATEUX', 'NURSING PRÉMATURÉS', 'OXYGÉNOTHÉRAPIE PAR CONDENSATEUR/ JOUR', 'OXYGÉNOTHÉRAPIE/HEURE', 'PANSEM ENT D\'ULCÈRE SURFACE INFÉRIEURE À 60 CM2', 'PANSEMENT CÉSARIENNE', 'PANSEMENT CHIRURGICALE NÉCESSITANT UN MÉCHAGE OU UNE IRRIGATION', 'PANSEMENT D\'ESCARRE', 'PANSEMENT D\'ULCÈRE SURFACE SUPÉRIEURE À 60 CM2', 'PANSEMENT DE BRÛLURE SURFACE INFÉRIEURE À 5%', 'PANSEMENT DE BRÛLURE SURFACE SUPÉRIEURE À 5%', 'PANSEMENT DE FISTULE DIGESTIVE.', 'PANSEMENT DE GREFFE CUTANÉE, SURFACE INFÉRIEURE À 60 CM2', 'PANSEMENT DE GREFFE CUTANÉE, SURFACE SUPÉRIEURE À 60 CM2', 'PANSEMENT DE PLAIE CHIMIQUE SURFACE INFÉRIEURE À S%', 'PANSEMENT DE PLAIE CHIMIQUE SURFACE SUPÉRIEURE À5%', 'PANSEMENT DE PLAIE THERMIQUE SURFACE INFÉRIEURE À 5%', 'PANSEMENT DE PLAIE THERMIQUE SURFACE SUPÉRIEURE À 5%', 'PANSEMENT DE STOMIE', 'PANSEMENT DE TRACHÉOTOMIE', 'PANSEMENT MOYEN (PM)', 'PANSEMENT OCULAIRE', 'PANSEMENT OMBILICAL', 'PANSEMENT OMBILICAL', 'PANSEMENT POUR PERTE DE SUBSTANCE NÉOPLASIQUE', 'PANSEMENT POUR PERTE DESUBSTANCE TRAUMATIQUE', 'PETIT PANSEMENT (PP)', 'PHOTOTHERAPIE/JOUR', 'PHOTOTHERAPIE/SEANCE', 'POSE DE PERFUSION INTRA RECTALE', 'POSE DE PERFUSION PAR VOIE SOUS-CUTANÉE OU RECTALE', 'POSE DE PERFUSION VEINEUSE', 'POSE ISOLÉE D\'UN ÉTUI PÉNIEN/JOUR', 'POSE PÉNIFLOW', 'POSE PERFUSION', 'POSE POCHE A URINE', 'POSE SONDE GASTRIQUE', 'POSE SONDE RECTALE', 'POSE SONDE URÉTRALE - ENFANT DE MOINS DE CINQ ANS', 'POSE SONDE URÉTRALE CHEZ L HOMME', 'POSE SONDE URÉTRALE CHEZ LA FEMME', 'POSE SONDE URINAIRE', 'POSE SONDE URINAIRE CHEZ LA FEMME', 'POSE SONDE URINAIRE-ENFANT DE MOINS DE CINQ ANS', 'POSE SONDE VÉSICALE - ENFANT DE MOINS DE CINQ ANS', 'POSE SONDE VÉSICALE CHEZ L HOMME', 'POSE SONDE VÉSICALE CHEZ LA FEMME', 'POSE TRANSFUSION SANGUINE', 'PRÉLÈVEMENT (PUS, DIVERS)', 'PRÉLÈVEMENT ASEPTIQUE CUTANÉ', 'PRÉLÈVEMENT ASEPTIQUE DE SÉCRÉTIONS MUQUEUSES', 'PRÉLÈVEMENT D\'URINE POUR EXAMENS CYTOLOGIQUES', 'PRÉLÈVEMENT D\'URINE POUR EXAMENS PARASITO', 'PRÉLÈVEMENT D\'URINE POUR EXAMENS VIROLOGIQUES', 'PRÉLÈVEMENT D’URINE POUR EXAMENS BACTÉRIO', 'PRÉLÈVEMENT D’URINE POUR EXAMENS MYCOLOGIQUES', 'PRÉLÈVEMENT DE SELLES', 'PRÉLÈVEMENT ECBU', 'PRÉLÈVEMENT FROTTIS VAGINAL', 'PRÉLÈVEMENT GORGE', 'PRÉLÈVEMENT MULTIPLE DE SANG ENTRE 1 ET 4 TUBES', 'PRÉLÈVEMENT MULTIPLE DE SANG PLUS DE 4 TUBES', 'PRÉLÈVEMENT OREILLE', 'PRÉLÈVEMENT PULPAIRE', 'PRÉLÈVEMENT SANGUIN', 'PRELEVEMENT SANGUIN POUR ANALYSE', 'PRÉLÈVEMENT SIL', 'PRÉLÈVEMENT SUR TUBULURE', 'PRÉLÈVEMENT U RETRO-VAGINAL', 'PRÉPARATION DU CHAMP OPÉRATOIRE PAR PROTECTION PAR CHAMP STÉRILE', 'PRISE TENSION OCULAIRE', 'PULVÉRISATION DE PRODUIT', 'REANIMATION BEBE', 'RÉANIMATION DU NOUVEAU-NÉ', 'RETRAIT DISPOSITIF D (-UNE TRANSFUSION', 'RETRAIT DU DISPOSITIF DU CATHÉTER VEINEUX', 'SAIGNÉE', 'SCARIFICATION', 'SÉANCE AEROSOL', 'SOINS D (-ACCOMPAGNEMENT FIN DE VIE', 'SOINS DE BOUCHE', 'SOINS DIVERS CHIRURGIE', 'SOINS DIVERS GYNÉCOLOGIE', 'SOINS DIVERS MATERNITÉ', 'SOINS DIVERS MÉDECINE GÉNÉRALE ET DIÉTÉT.', 'SOINS DIVERS PÉDIATRIE', 'SOINS DIVERS PÉDIATRIE A', 'SOINS DU PÉRINÉE', 'SOINS POST OPÉRATOIRES (SURVEILLANCE)', 'SURVEILLANCE CHIRURGIE SALLE À COMPTER DE J4', 'SURVEILLANCE DEUNE MENACE DIACCO U CH EM EN T PRÉMATURÉ', 'SURVEILLANCE GYNÉCOLOGIE', 'SURVEILLANCE ISOLEMENT THÉRAPEUTIQUE', 'SURVEILLANCE MÉDECINE', 'SURVEILLANCE NÉONATALOGIE', 'SURVEILLANCE PÉDIATRIE', 'SURVEILLANCE PHOTOTHÉRAPIE', 'SURVEILLANCE RÉVEIL POST ANESTHÉSIQUE', 'SURVEILLANCE SALLE D\'ACCOUCHEMENT', 'SURVEILLANCE SOINS AMBULATOIRES', 'SURVEILLANCE SOINS INTENSIFS', 'SURVEILLANCE SUITES DE COUCHES', 'TEST TUBERCULINIQUE', 'TOILETTE', 'TRANSFUSION SANGUINE', 'UTILISATION DU POUSSE-SERINGUE ÉLECTRIQUE',
                ];
                foreach($examen_complementaires as $examen_complementaire){
                    if(is_null(ExamenComplementaire::where('fr_description', $examen_complementaire)->first())){
                        $new_examen_complementaire = ExamenComplementaire::create(['fr_description' => $examen_complementaire, 'prix' => 0, 'slug' => Str::slug($examen_complementaire).'-'.time()]);
                        $new_examen_complementaire->types()->sync($n_type);
                    }
                }
            }

            /**
            *  STO
            */
            if($type[0] == "STO"){

                $examen_complementaires = ['RADIOGRAPHIE','RADIOGRAPHIE RÉTROALVÉOLAIRE'];
                foreach($examen_complementaires as $examen_complementaire){
                    if(is_null(ExamenComplementaire::where('fr_description', $examen_complementaire)->first())){
                        $new_examen_complementaire = ExamenComplementaire::create(['fr_description' => $examen_complementaire, 'prix' => 0, 'slug' => Str::slug($examen_complementaire).'-'.time()]);
                        $new_examen_complementaire->types()->sync($n_type);
                    }
                }
            }

            /**
            *  URG
            */
            if($type[0] == "URG"){
                $examen_complementaires = [
                    'ABLATION DE FILS', 'ABLATION DE FILSOU D’AGRAFES, DIX OU MOINS, Y COMPRIS LE PANSEMENT ÉVENTUEL', 'ABLATION DES TUMEURS BENIGNES DU CANAL ANAL', 'ABLATION DES TUMEURS BENIGNES DU RECTUM', 'ABLATION DES TUMEURS BENIGNES DU RECTUM PAR  ELECTROCOAGULATION', 'ABLATION DES TUMEURS BENIGNES DU SIGMOîDE', 'ABLATION DE FILSOU D\'AGRAFES, PLUS DE DIX, Y COMPRIS LE PANSEMENT ÉVENTUEL', 'ABLATION ONGLE INCARNE', 'ABLATION PLATRE', 'ABLATION PAR ELECTROCOAGULATION DE PAPILOMATOSE DU CANAL ANAL ET DE LA MARGE DE L\'ANUS', 'ACCÈS VASCULAIRE VEINEUX PÉRIPHÉRIQUE', 'ADAPTATION DES RÉGLAGES D\'UNE VENTILATION NON EFFRACTIVE PAR MESURES RÉPÉTÉES DES GAZ DU SANG', 'ADMINISTRATION! CONTINUE PAR VOIE PÉRIDURALE', 'ADMINISTRATIF! ET SURVEILLANCE D\'UNE THÉRAPEUTIQUE CHEZ PATIENT PSYCHIATRIQUE', 'ADMINISTRATION ET SURVEILLANCE D\'UNE THÉRAPEUTIQUE ORALE', 'ADMINISTRATION INTRAPLEURALE D\'AGENT PHARMACOLOGIQUE AU LONG COURS', 'ALIMENTATION ENTÉRALE PAR GAVAGE OU EN DÉCLIVE OU PAR NUTRI-POMPE, Y COMPRIS LA SURVEILLANCE, PAR SÉANCE •', 'ALIMENTATION ENTÉRALE PAR VOIE JÉJUNALE AVEC SONDAGE DE LA STOMIE, Y COMPRIS LE PANSEMENT ET LA SURVEILLANCE, PAR SÉANCE', 'ANALGÉSIE-SÉDATION', 'ANESTHESIE SPHINCTERIENNE POUR FISSURE ANALE', 'ARRÊT ET RETRAIT DU DISPOSITIF DE LA PERFUSION ET PANSEMENT ÉVENTUEL', 'ARRÊT ET RETRAIT DU DISPOSITIF, Y COMPRIS L HÉPARINISATION ET LE PANSEMENT', 'ASPIRATION DES VAS ET MISE EN PLACE D\'UN DISPOSITIF ORO OU NASO PHARYNGÉ', 'ASPIRATION INTRABRONCHIQUE À VISÉE THÉRAPEUTIQUE CHEZ UN PATIENT INTUBÉ OU TRACHÉOTOMISÉ /JOURS', 'AUTRE PANSEMENT', 'BRANCHEMENT DE LA PERFUSION ET MISE EN ROUTE DU DISPOSITIF', 'CATHÉTER PÉRITONÉAL : SOINS AU SÉRUM PHYSIOLOGIQUE ET PANSEMENT', 'CATHÉTER VEINEUX CENTRAL OU SITE IMPLANTABLE : HÉPARINISATION ET PANSEMENT', 'CATHÉTÉRISME U RÉTRAL CHEZ L’HOMME', 'CATHÉTÉRISME U RÉTRAL CHEZ LA FEMME', 'CHANGEMENT DE FLACON(S)', 'CHANGEMENT DE FLACON(S) OU BRANCHEMENT SUR UN DISPOSITIF EN PLACE', 'CHANGEMENT DE SONDE A DEMEURE', 'CHANGEMENT DESONDE URINAIRE CHEZ L’HOMME', 'CHANGEMENT DESONDE URINAIRE CHEZ LA FEMME', 'CHANGEMENT POCHE DE COLOSTOMIE', 'CHOC ÉLECTRIQU E CARDIAQUE TRANSCUTANÉ [CAPDIOVERSION EXTERNE], EN DEHORS DE L’URGENCE', 'CHOC ÉLECTRIQUE CARDIAQUETgANSCUTANÉ [CARDIOVERSION EXTERNE], EN URGENCE', 'CIRCULATION EXTRACORPORELLE', 'COAGULATION D\'UNE LESION A LA PINCE CHAUDE', 'COAGULATION D\'UNE LESION AU PLASMA ARGON', 'CONDITIONNEMENT ET MOBILISATION PATIENT DANS MATELAS COQUILLE', 'CONDITIONNEMENT ET MOBILISATION PATIENT DANS MATELAS COQUILLE', 'CONSTAT DE DÉCÈS', 'CORRECTION D\'UNE DÉSHYDRATATION', 'DÉFIBRILATION AU DÉFIBRILLATEUR MANUEL (DÉCHOQUAGE)', 'DÉFIBRILATION AU DÉFIBRILLATEUR MANUEL (DÉCHOQUAGE) AVEC SÉDATION', 'DÉFIBRILLATION AU DÉFIBRILLATEUR AUTOMATIQUE OU SEMI-AUTOMATIQUE', 'DILATATION OESOPHAGIENNE SOUS CONTROLE ENDOSCOPIQUE', 'DOSSIER CTA', 'DRAINAGE DE PNEUMOTHORAX', 'DRAINAGE D\'UN ÉPANCHEMENT DE LA CAVITÉ PLEURALE, PAR VOIE TRANSCUTANÉE SANS GUIDAGE', 'ÉDUCATION À L’AUTO-SONDAGE COMPRENANT LE SONDAGE ÉVENTUEL, AVEC UN MAXIMUM DE DIX SÉANCES', 'ENREGISTREMENT CONTINU DE LA SATURATION SANGUINE EN OXYGÈNE PAR\'MESURE TRANSCUTANÉE [SP02] [OXYMÉTRIE DE POULS], PENDANT AU MOINS 6 HEURES', 'ÉVACUATION D\'UN ÉPANCHEMENT DE LA CAVITÉ PLEURALE, PAR VOIE TRANSCUTANÉE SANS GUIDAGE', 'EXSANGUINOTRANSFUSION D\'ÉPURATION OU DE SUBSTITUTION', 'EXSANGUINOTRANSFUSION D\'ÉPURATION OU DE SUBSTITUTION, CHEZ LE NOUVEAU-NÉ', 'EXSUFFLATION DE PNEUMOTHORAX À L’AIGUILLE', 'EXTRACTION DE FÉCALOME OU EXTRACTION MANUELLE DES SELLES', 'FIBROSCOPIE DU LARYNX ET DE LA TRACHÉE', 'FORFAIT OXYGÉNOTHÉRAPIE LONGUE DURÉE (> 5 HEURES) /JOUR', 'FORFAIT POUR GESTES DE SURVIE (VENTILATION À CIRCUIT FERMÉ, MOBILISATION TRAUMATISÉ DU ■ RACHIS)', 'FORFAIT POUR SEANCE DE CHIMIOTHERAPIE D\'UNE DUREE SUPERIEURE A 1H', 'GAVAGE PAR NUTRIPOMPE', 'HOSPITALISATION DU JOUR EN PEDIATRIE', 'IMMOBILISATION PAR ATTÈLE PLÂTRÉE', 'INFILTRATION PÉRIDURALE EN INJECTION UNIQUE (Y COMPRIS ANESTHÉSIE CAUDALE)', 'INJECTION D\'UN 1MPLANTSOUS-CUTANÉ', 'INJECTION D’ANALGÉSIQUE(S, À L’EXCLUSION DE LA PREMIÈRE, PAR L’INTERMÉDIAIRE D\'UN CATHÉTER INTRATHÉCAL OU PÉRIDURAL', 'INJECTION D’UN SÉRUM D\'ORIGINE HUMAINE OU ANIMALE, Y COMPRIS LA SURVEILLANCE', 'INJECTION EN GOUTTE À GOUTT£J?AR VOIE RECTALE', 'INJECTION INTRADERMIQUE', 'INJECTION INTRAMUSCULAIRE', 'INJECTION INTRAMUSCULAIRE OU SOUS-CUTANÉE', 'INJECTION INTRAPLEURALE D\'AGENT PHARMACOLOGIQUE, PAR VOIE TRANSCUTANÉE', 'INJECTION INTRAVEINEUSE', 'INJECTION INTRAVEINEUSE DIRECTE', 'INJECTION INTRAVEINEUSE DIRECTE CHEZ UN ENFANT DE MOINS DE CINQ ANS', 'INJECTION INTRAVEINEUSE D J-UN PRODUIT DE CHIMIOTHÉRAPIE ANTICANCÉREUSE', 'INJECTION INTRAVEINEUSE PAR L’INTERMÉDIAIRE D\'UN CATHÉTER CENTRAL, Y COMPRIS L HÉPARINISATION ET LE PANSEMENT', 'INJECTION INTRAVEINEUSE PAR L’INTERMÉDIAIRE D\'UN SITE IMPLANTÉ, Y COMPRIS L HÉPARINISATION ET LE PANSEMENT', 'INJECTION SCLEROSANTES POUR HEMORROÏDES INTERNES (avec max 10 seances) PAR SEANCE', 'INJECTION RECTALE', 'INJECTION SOUS-CUTANÉE', 'INJECTION SOUS-CUTANÉE D\'INSULINE', 'INJECTION VAGINALE', 'INSTILLATION ET/OU LAVAGE VÉSICAL (SONDE EN PLACE)', 'INTUBATION TRACHÉALE', 'INTUBATION TRACHÉALE EN DEHORS D\'UN BLOC MÉDICOTECHNIQUE', 'INTUBATION TRACHÉALE, PAR FIBROSCOPIE OU DISPOSITIF LARYNGÉ', 'LARYNGOSCOPIE INDIRECTE AU LARYNGOSCOPE RIGIDE', 'LARYNGOSCOPE INDIRECTE AU LARYNGOSCOPE RIGIDE, AVEC EXAMEN STROBOSCOPIQUE DU LARYNX', 'LAVAGE DE L\'ESTOMAC', 'LAVAGE D\'UN SINUS', 'LAVEMENT ÉVACUATEUR', 'LAVEMENT ÉVACUATEUR OU MÉDICAMENTEUX', 'LECTURE D\'UN TIMBRE TUBERCULINIQUE ET TRANSMISSION D\'INFORMATIONS AU MÉDECIN', 'LIGATURE VARICES OESOPHAGIENNES PAR SEANCE', 'MANOMETRIE OESOPHAGIENNE', 'MASSAGE CARDIAQUE EXTERNE', 'MESURE TRANSCUTANÉE DE LA TENSION PARTIELLE EN OXYGÈNE [TCP02] AU REPOS', 'MISE A PLAT DES ABCES ET FISTULES INTRA SPHINCTERIENS', 'MISE EN OBSERVATION (TOUTES LES 4 HEURES)', 'MISE EN PLACE D\'UNE ENDOPROTHESE BILIAIRE AVEC SPHINCTEROTOMIE', 'MISE EN PLACE D\'UNE MINERVE (COLLIER CERVICAL)', 'MISE EN PLACE ET CHANGEMENT PAR VOIE ENDOSCOPIQUE D\'UNE ENDOPROTHESE BILIAIRE', 'MISE EN PLACE ET SURVEILLANCE D\'UNE ANALGÉSIE CONTRÔLÉE PAR LA PATIENT', 'MISE EN ROUTE ET SURVEILLANCE D\'UN TRAITEMENT PAR OXYGÉNOTHÉRAPIE CHEZ UN INSUFFISANT RESPIRATOIRE .', 'NÉBULISATION D’AGENT THÉRAPEUTIQUE À DESTINATION BRONCHIQUE [AÉROSOL] /SÉANCE', 'ORGANISATION DE LA SURVEILLANCE DE LA PERFUSION DE MOINS DE HUIT HEURES', 'ORGANISATION DE LA SURVEILLANCE DE LA PERFUSION DE MOINS DE HUIT HEURES', 'ORGANISATION DE LA SURVEILLANCE DE LA PERFUSION DE PLUS DE HUIT HEURES', 'OXYGÉNOTHÉRAPIE DISCONTINUE/HEURE', 'PANSEMENT CHIRURGICAL AVEC MATÉRIEL D\'OSTÉOSYNTHÈSE EXTÉRIORISÉ', 'PANSEMENT D’AMPUTATION NÉCESSITANT DÉTERSION, ÉPLUCHAGE ET RÉGULARISATION', 'PANSEMENT DE BRÛLURE ÉTENDUE OU DE PLAIE CHIMIQUE OU THERMIQUE ÉTENDUE, SUR UNE SURFACE SUPÉRIE URE À 5 % DE LA SURFACE CORPORELLE', 'PANSEMENT DE CATHÉTER(S) VEINEUX CENTRAL OU PÉRITONÉAL SANS HÉPARINISATION', 'PANSEMENT DE FISTULE DIGESTIVE', 'PANSEMENT DE STOMIE', 'PANSEMENT DE TRACHÉOTOMIE, Y COMPRIS L ASPILATION ET L ÉVENTUEL CHANGEMENT.DE. CANULE OU SONDE', 'PANSEMENT D’ESCARRE PROFONDE ET ÉTENDUE ATTEIGNANT LES MUSCLES OU LES TENDONS', 'PANSEMENT D’ULCÈRE ÉTENDU OU DE GREFFE CUTANÉE, SUR UNE SURFACE SUPÉRIEURE À 60 CM', 'PANSEMENT LOURD’FT COMPLEXE POUR UN PATIENT DIABÉTIQUE INSULINO-TRAITÉ', 'PH-METRIE OESOPHAGIENNE PROLONGEE AVEC EPREUVES DE PROVOCATION EVENTUELLE (durée min 12h)', 'PH-METRIE OESOPHAGIENNE COURTE AVEC EPREUVES DE PROVOCATION EVENTUELLE (durée min 12h)', 'PONCTION D’ASCITE DIAGNOSTIQUE', 'PONCTION D’ASCITE ÉVACUATRICE', 'PONCTION LOMBAIRE', 'PONCTION PLEURALE AVISÉE DIAGNOSTIQUE', 'PONCTION SUS-PUBIENNE', 'POSE DE PERFUSION PAR VOIE SOUS-CUTANÉE OU RECTALE', 'POSE DE PLUSIEURS DRAINS THORACIQUES POUR IRRIGATION-LAVAGE PLEURALE, PAR VOIE TRANSCUTANÉE', 'POSE DE SONDE GASTRIQUE', 'POSE DES BAS ANTITHROMBOSE', 'POSE D\'UN CATHÉTER DANS LA VEINE JUGULAIRE INTERNE, PAR CERVICOTOMIE', 'POSE D’UN CATHÉTER VEINEUX CENTRAL POUR SURVEILLANCE DE LA PVC, PAR VOIE TRANSCUTANÉE', 'POSE D’UN CATHÉTER VEINEUX CENTRAL, PAR VOIE TRANSCUTANÉE', 'POSE D’UN CATHÉTER VEINEUX OMBILICAL', 'POSE D\'UN DISPOSITIF DE MESURE DE LA SATURATION JUGULAIRE EN OXYGÈNE, PAR VOIE VEINEUSE TRANSCUTANÉE', 'POSE D\'UN DRAIN THORACIQUE POUR LAVAGE PLEURAL, PAR VOIE TRANSCUTANÉE', 'POSE D’UN GARROT ARTÉRIEL', 'POSE D’UN MASQUE LARYNGÉ OU D\'UN COMBITUBE', 'POSE D’UNE SONDE GASTRIQUE (OU NASOGASTRIQUE)', 'POSE D\'UNE SONDE RECTALE', 'POSE D’UNE VESSIE DE GLACE', 'POSE ISOLÉE D\'UN ÉTUI PÉNIEN (PÉNIFLOW)', 'POSE OU CHANGEMENT D\'UN DISPOSITIF INTRAVEINEUX', 'POSE PLATRE MEMBRE SUPERIEUR', 'POSE SON DE NASOGASTRIQUE', 'POSE SON DE NASOGASTRIQUE', 'POSE VOIE D\'EXCEPTION (INTRAOSSEUSE)', 'POSE VOIE VEINEUSE CENTRALE CHEZ ADULTE AVEC ÉCHOGUIDAGE', 'POSE VOIE VEINEUSE CENTRALE CHEZ ADULTE SANS ÉCHOGUIDAGE', 'POSE VOIE VEINEUSE CENTRALE CHEZ ENFANT', 'PRÉLÈVEMENT ASEPTIQUE CUTANÉ OU DE SÉCRÉTIONS MUQUEUSES, PRÉLÈVEMENT DE SELLES OU URINES', 'PRÉLÈVEMENT DE SANG ARTÉRIEL AVEC GAZOMÉTRIE SANGUINE ET MESURE DU PH, SANS ÉPREUVE HYPEROXIE', 'PRÉLÈVEMENT PAR PONCTION VEINEUSE DIRECTE', 'PRELEVEMENT SANGUIN', 'PRÉLÈVEMENT SANGUIN ARTÉRIEL', 'PRÉPARATION, REMPLISSAGE, PROGRAMMATION DE MATÉRIEL POUR PERFUSION À DOMICILE : INFUSEUR, POMPE PORTABLE, POUSSE-SERINGUE', 'PRÉPARATION, REMPLISSAGE, PROGRAMMATION DE MATÉRIEL POUR PERFUSION EN EXTRAHOSPITALIER : INFUSEUR, POMPE PORTABLE, POUSSE-SERINGUE', 'PULVÉRISATION DE PRODUIT(S) MÉDICAMENTEUX', 'RAPPORT D\'EXPERTISE MÉDICALE', 'RÉADAPTATION (RÉÉDUCATION) DE VESSIE NEUROLOGIQUE COMPRENANT LE SONDAGE ÉVENTUEL', 'RÉALISATION DE TEST TUBERCULINIQUE', 'RÉDUCTION D\'UNE LUXATION', 'RÉGLAGE DU DÉBIT D\'OXYGÈNE PAR MESURES RÉPÉTÉES DES GAZ DU SANG', 'RESECTION D\'UN DIVERTICULE CERVICAL DE L\'OESOPHAGE', 'RESSUSCITATION CARDIORESPIRATOIRE +/- C.E.E. DANS BLOC MÉDICO-TECHNIQUE', 'RESSUSCITATION CARDIORESPIRATOIRE AVEC INTUBATION TRACHÉALE, DANS UN BLOC MÉDICOTECHNIQUE', 'RESSUSCITATION CARDIORESPIRATOIRE AVEC INTUBATION TRACHÉALE, EN DEHORS D’UN BLOC', 'SAIGNÉE', 'SAIGNÉE THÉRAPEUTIQUE', 'SAIGNÉE THÉRAPEUTIQUE AVEC TRANSFUSION DE CONCENTRÉ DE GLOBULES ROUGES, CHEZ LE NOUVEAU-NÉ', 'SCLEROSE D\'UNE LESION A L\'ADRENALINE', 'SCLEROSE VARICES OESOPHAGIENNES PAR SEANCE', 'SÉANCE D\'AÉROSOLTHÉRAPIE', 'SÉANCE DE LAVAGE PLEURAL, PAR UN DISPOSITIF IMPLANTÉ', 'SÉANCE D\'ENTRETIEN DE CATHÉTER(S) EN DEHORS DES PERFUSIONS, Y COMPRIS LE PANSEMENT', 'SÉANCE D\'HYPNOSE À VISÉE ANTALGIQUE', 'SÉANCE D\'IRRIGATION-LAVAGE PLEURALE', 'SÉANCES D\'AÉROSOLS À VISÉE PROPHYLACTIQUE', 'SÉDATION POUR AGITATION', 'SÉDATION POUR EMG', 'SÉDATION POUR EXAMEN EN IMAGERIE', 'SÉDATION POUR PEA', 'SÉDATION POUR PES (POTENTIELS ÉVOQUÉS SOMESTHÉSIQUES CÉRÉBRAUX)', 'SOINS DE BOUCHE AVEC APPLICATION DE PRODUITS MÉDICAMENTEUX', 'SOINS GYNÉCOLOGIQUES AU DÉCOURS IMMÉDIAT D\'UN TRAITEMENT PAR CURIETHÉRAPIE.', 'SPHINCTEROTOMIE ENDOSCOPIQUE OU PAPILLOSPHINCTEROTOMIE ENDOSCOPIQUE', 'STIMULATION CARDIAQUE TEMPORAIRE, PAR VOIE VEINEUSE TRANSCUTANÉE', 'SURVEILLANCE CONTINUE DE LA SATURATION JUGULAIRE EN OXYGÈNE PAR DISPOSITIF IV PAR 24 HEURES', 'SURVEILLANCE DE LA FRÉQUENCE CARDIAQUE, PENDANT AU MOINS 2 HEURES', 'SURVEILLANCE DE LA PRESSION ARTÉRIELLE EFFRACTIVE [SANGLANTE] ET/OU DE LA PVC', 'SURVEILLANCE DE LA SATURATION EN OXYGÈNE PAR MESURE TRANSCUTANÉE [SP02]', 'SURVEILLANCE ET OBSERVATION D\'UN PATIENT DIABÉTIQUE INSULINO-TRAITË PAR PASSAGE', 'SUTURE 1 POINT', 'SUTURE 10 POINTS', 'SUTURE 11 POINTS', 'SUTURE 12 POINTS', 'SUTURE 13 POINTS', 'SUTURE 14 POINTS', 'SUTURE 15 POINTS', 'SUTURE 16 POINTS', 'SUTURE 17 POINTS', 'SUTURE 18 POINTS', 'SUTURE 2 POINTS', 'SUTURE 3 POINTS', 'SUTURE 4 POINTS', 'SUTURE 5 POINTS', 'SUTURE 6 POINTS', 'SUTURE 7 POINTS', 'SUTURE 8 POINTS', 'SUTURE 9 POINTS', 'TEMPS D\'OXYGIENATION (2500 F/HEURE)', 'TRANSFUSION DE CONCENTRÉ DE GLOBULES ROUGES', 'TRANSFUSION SANGUINE EN AMBULATOIRE', 'TRAITEMENT DES ABCES ET FISTULES A TRAJET SIMPLE', 'TRAITEMENT DES ABCES EXTRA-SPHINCTERIENS A TRAJET MULTIRAMIFIE', 'TRAITEMENT HEMORROIDES PAR EXCISION', 'TRAITEMENT HEMORROIDES PAR CRYOYHERAPIE', 'TRAITEMENT HEMORROIDES PAR LIGATURE ELASTIQUE (MAX 5 SEANCES) PAR SEANCE', 'TRAITEMENT DES HEMORROÏDES CIRCULAIRES PAR RESECTION SOUS-MUQUEUSE (type MILLIGAN-MORGAN)', 'TRAITEMENT DE LA FISSURE ANALE PAR INJECTION SCLEROSANTES (max 3 séances) PAR SEANCE, NON COMPRIS L\'ANESTHESIE', 'TRAITEMENT FISSURE ANAL: EXCISION PAR ELECTROCOAGULATION', 'TRAITEMENT DE LA FISSURE PAR DILATATION ANALE', 'TUBAGE GASTRIQUE', 'VENTILATION AU RESPIRATEUR DE TRANSPORT POUR UNE DURÉE < 3 HEURES', 'VENTILATION AU RESPIRATEUR DE TRANSPORT POUR UNE DURÉE > 3 HEURES', 'VENTILATION MANUELLE OU PAR BOUCHE À BOUCHE', 'VENTILATION MÉCANIQUE CONTINUE AU MASQUE FACIAL /JOUR', 'VENTILATION MÉCANIQUE DISCONTINUE AU MASQUE FACIAL OU PAR EMBOUT BUCCAL /JOUR', 'VENTILATION MÉCANIQUE INTRATRACHÉALE /JOUR', 'VENTILATION PAR VOIE TRACHÉALE AVEC MCE POUR RÉTABLISSEMENT D\'UNE EFFICACITÉ CIRCULATOIRE DANS BLOC MÉDICOTECHNIQUE', 'VENTILATION SPONTANÉE AU MASQUE FACIAL, PAR CANULE NASALE OU PAR SONDE NASOPHARYMGÊE /JOURS', 'VENTILATION SPONTANÉE SUR SONDE D\'INTUBATION TRACHÉALE AU COURS DU SEVRAGE/JOUR', 'VENTILATION SPONTANÉE SUR TRACHÉOTOMIE AU COURS DU SEVRAGE D\'UNE VENTILATION /JOUR'
                ];
                foreach($examen_complementaires as $examen_complementaire){
                    if(is_null(ExamenComplementaire::where('fr_description', $examen_complementaire)->first())){
                        $new_examen_complementaire = ExamenComplementaire::create(['fr_description' => $examen_complementaire, 'prix' => 0, 'slug' => Str::slug($examen_complementaire).'-'.time()]);
                        $new_examen_complementaire->types()->sync($n_type);
                    }
                }
            }

            /**
            *  URO
            */
            if($type[0] == "URO"){
                $examen_complementaires = ['BIOPSIE PROSTATIQUE ECHO GUIDEE', 'CYSTOSCOPIE DIAGNOSTIQUE', 'DÉBITMÉTRIE', 'ECHOGRAPHIE ABDOMINO PELVIENNE + PROSTATE', 'ECHOGRAPHIE DES VOIES URINAIRES', 'ECHOGRAPHIE DOPPLER DES ARTERES RENALES', 'ECHOGRAPHIE DOPPLER PENIENNE', 'ECHOGRAPHIE VESICO PROSTATIQUE', 'ECHOGRAPHIE VESICO PROSTATIQUE COMPLEMENTAIRE', 'ÉTUDE URODYNAMIQUE DU BAS APPAREIL URINAIRE'];
                foreach($examen_complementaires as $examen_complementaire){
                    if(is_null(ExamenComplementaire::where('fr_description', $examen_complementaire)->first())){
                        $new_examen_complementaire = ExamenComplementaire::create(['fr_description' => $examen_complementaire, 'prix' => 0, 'slug' => Str::slug($examen_complementaire).'-'.time()]);
                        $new_examen_complementaire->types()->sync($n_type);
                    }
                }
            }

        }
    }
}

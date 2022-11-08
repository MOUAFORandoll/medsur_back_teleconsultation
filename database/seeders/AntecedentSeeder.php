<?php

namespace Database\Seeders;

use App\Models\Antecedent;
use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AntecedentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $date = date('Y-m-d H:i:s');
        $types = array(
            array('libelle' => 'jhgjgh', 'created_at' => $date, 'updated_at' => $date),
            array('libelle' => 'Médical', 'created_at' => $date, 'updated_at' => $date),
            array('libelle' => 'Chirurgical-Coeliosocpie', 'created_at' => $date, 'updated_at' => $date),
            array('libelle' => 'Chirugical', 'created_at' => $date, 'updated_at' => $date),
            array('libelle' => 'Familial', 'created_at' => $date, 'updated_at' => $date),
            array('libelle' => 'Gynéco-obstétrique', 'created_at' => $date, 'updated_at' => $date)
        );
        foreach($types as $type){
            Type::create($type);
        }

       

        $antecedents = array(
  array('id' => '1','dossier_medical_id' => '2','description' => 'ghjghj','date' => NULL,'type' => 'jhgjgh','created_at' => '2019-10-11 13:51:59','updated_at' => '2019-10-11 14:28:16','deleted_at' => '2019-10-11 14:28:16','slug' => 'jhgjgh-1570805519'),
  array('id' => '2','dossier_medical_id' => '3','description' => 'Pneumonie','date' => NULL,'type' => 'Médical','created_at' => '2019-10-15 11:58:12','updated_at' => '2019-10-15 15:32:53','deleted_at' => '2019-10-15 15:32:53','slug' => 'medical-1571144292'),
  array('id' => '3','dossier_medical_id' => '3','description' => 'Appendicectomie','date' => NULL,'type' => 'Chirurgical-Coeliosocpie','created_at' => '2019-10-19 16:34:24','updated_at' => '2019-10-19 16:34:24','deleted_at' => NULL,'slug' => 'chirurgical-coeliosocpie-1571506464'),
  array('id' => '4','dossier_medical_id' => '3','description' => 'sdfsdfds','date' => '2019-02-02','type' => 'Chirugical','created_at' => '2019-11-08 14:29:23','updated_at' => '2019-11-08 14:29:23','deleted_at' => NULL,'slug' => 'chirugical-1573223363'),
  array('id' => '5','dossier_medical_id' => '3','description' => 'sdsddsf','date' => '2018-12-20','type' => 'Familial','created_at' => '2019-11-08 14:29:43','updated_at' => '2019-11-08 14:29:43','deleted_at' => NULL,'slug' => 'familial-1573223383'),
  array('id' => '6','dossier_medical_id' => '11','description' => 'erezrze','date' => '2019-02-03','type' => 'Chirugical','created_at' => '2019-11-19 18:46:22','updated_at' => '2019-11-21 12:38:01','deleted_at' => '2019-11-21 12:38:01','slug' => 'chirugical-1574189182'),
  array('id' => '7','dossier_medical_id' => '10','description' => 'Fausse couche','date' => '2019-07-02','type' => 'Gynéco-obstétrique','created_at' => '2019-11-20 20:58:44','updated_at' => '2019-11-20 20:58:44','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1574283524'),
  array('id' => '8','dossier_medical_id' => '9','description' => 'tombé tombé','date' => '2000-05-03','type' => 'Familial','created_at' => '2019-11-21 12:08:28','updated_at' => '2019-11-21 12:08:28','deleted_at' => NULL,'slug' => 'familial-1574338108'),
  array('id' => '9','dossier_medical_id' => '7','description' => 'Antecedent de personne tres cool mais colerique','date' => '2019-11-04','type' => 'Médical','created_at' => '2019-11-23 17:31:57','updated_at' => '2019-11-23 17:31:57','deleted_at' => NULL,'slug' => 'medical-1574530317'),
  array('id' => '10','dossier_medical_id' => '5','description' => 'Appendicectomie','date' => '1988-10-05','type' => 'Chirugical','created_at' => '2019-11-23 19:01:14','updated_at' => '2019-11-23 19:01:14','deleted_at' => NULL,'slug' => 'chirugical-1574535674'),
  array('id' => '11','dossier_medical_id' => '7','description' => 'Nouvelle antecedent','date' => '2019-11-04','type' => 'Médical','created_at' => '2019-11-23 19:03:57','updated_at' => '2019-11-23 19:03:57','deleted_at' => NULL,'slug' => 'medical-1574535837'),
  array('id' => '12','dossier_medical_id' => '9','description' => 'Migraine','date' => '2019-02-20','type' => 'Médical','created_at' => '2019-11-24 12:27:43','updated_at' => '2019-11-24 12:27:43','deleted_at' => NULL,'slug' => 'medical-1574598463'),
  array('id' => '13','dossier_medical_id' => '9','description' => 'Artérite oblitérante des membres inférieurs','date' => '1991-02-02','type' => 'Médical','created_at' => '2019-11-24 12:29:40','updated_at' => '2019-11-24 12:29:40','deleted_at' => NULL,'slug' => 'medical-1574598580'),
  array('id' => '14','dossier_medical_id' => '9','description' => 'Angioplastie stenting artère poplitée gauche','date' => '1991-05-03','type' => 'Chirugical','created_at' => '2019-11-24 12:30:25','updated_at' => '2019-11-24 12:30:25','deleted_at' => NULL,'slug' => 'chirugical-1574598625'),
  array('id' => '15','dossier_medical_id' => '9','description' => 'HTA','date' => '2015-01-12','type' => 'Médical','created_at' => '2019-11-24 12:31:52','updated_at' => '2019-11-24 12:31:52','deleted_at' => NULL,'slug' => 'medical-1574598712'),
  array('id' => '16','dossier_medical_id' => '17','description' => 'Hypertension artérielle','date' => '2019-12-06','type' => 'Médical','created_at' => '2019-11-28 20:10:47','updated_at' => '2021-01-26 16:56:17','deleted_at' => NULL,'slug' => 'medical-1574971847'),
  array('id' => '17','dossier_medical_id' => '17','description' => 'Insuffisance rénale terminale avec une dialyse passagère et une anémie rénale','date' => '2019-12-06','type' => 'Médical','created_at' => '2019-11-28 20:15:29','updated_at' => '2021-01-26 16:57:53','deleted_at' => NULL,'slug' => 'medical-1574972129'),
  array('id' => '18','dossier_medical_id' => '19','description' => 'HTA connue depuis 4 ans non sous traitement.
pas diabetique','date' => '2019-11-29','type' => 'Médical','created_at' => '2019-12-02 10:58:48','updated_at' => '2019-12-02 10:58:48','deleted_at' => NULL,'slug' => 'medical-1575284328'),
  array('id' => '19','dossier_medical_id' => '19','description' => 'HTA connue depuis 4 ans, non sous traitement.','date' => '2015-10-02','type' => 'Médical','created_at' => '2019-12-02 11:00:02','updated_at' => '2019-12-02 11:00:02','deleted_at' => NULL,'slug' => 'medical-1575284402'),
  array('id' => '20','dossier_medical_id' => '19','description' => 'G2P1011
ménopausée depuis plus de 5 ans, ne prend aucun traitement hormonal substitutif;
dépistage du cancer du col de l uterus et du cancer du sein, non documenté','date' => '2014-02-10','type' => 'Gynéco-obstétrique','created_at' => '2019-12-02 11:05:28','updated_at' => '2019-12-02 11:05:28','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1575284728'),
  array('id' => '21','dossier_medical_id' => '19','description' => 'tantes paternelles hypertendues
fils hypertendu
notion de cancer digestif chez la mère','date' => '2019-02-12','type' => 'Familial','created_at' => '2019-12-02 11:06:57','updated_at' => '2019-12-02 11:06:57','deleted_at' => NULL,'slug' => 'familial-1575284817'),
  array('id' => '22','dossier_medical_id' => '20','description' => 'epigastralgie chronique
pas de diabète
pas d\'hypertension artérielle','date' => '2015-01-25','type' => 'Médical','created_at' => '2019-12-03 11:20:09','updated_at' => '2019-12-03 11:20:09','deleted_at' => NULL,'slug' => 'medical-1575372009'),
  array('id' => '23','dossier_medical_id' => '20','description' => 'G8P7007
ménopausée depuis plus de 20ans
dépistage du cancer du col de l\'utérus: jamais réalisé','date' => '2012-03-12','type' => 'Gynéco-obstétrique','created_at' => '2019-12-03 11:22:34','updated_at' => '2019-12-03 11:22:34','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1575372154'),
  array('id' => '24','dossier_medical_id' => '7','description' => 'kvjl;mbl% !','date' => NULL,'type' => 'Médical','created_at' => '2019-12-03 22:15:18','updated_at' => '2019-12-03 22:15:18','deleted_at' => NULL,'slug' => 'medical-1575411318'),
  array('id' => '25','dossier_medical_id' => '21','description' => 'Suivi pour ADK mammaire invasif de grade histo-pronostic III (SBR) du sein droit depuis 2016 par Dr. ELOUNDOU Albertine, oncologue Thérapeute ; Dr. TAGNE Emmanuel, Gynécologue obstétricien ; Dr. TOTSA Chirurgien

Diagnostiqué en 2016 à la suite d’un examen histologique d’une pièce de biopsie mammaire post-mastectomie 

 Adéno-carcinome mammaire invasif de grade histo-pronostic III selon Scarff, Bloom et Richardson modifiée ; Ag CA 15-3 : 10.9 u/ml.

 Bilans d’extension : TDM Thoracique  Aspect évoquant une extension tumorale à savoir un envahissement ganglionnaire axillaire bilatéral et une lymphangite carcinomateuse ; Rx rachis cervical et lombo-sacré  normale ; Rx bassin  normale. Rx crane  normale ; Echo abdominale  sans particularités.

Chimiothérapie à base de DOCETAXEL (TAXOTERE ®) : 04 séances faites (dernière : 17/10/2019).','date' => '2016-07-03','type' => 'Médical','created_at' => '2019-12-04 10:06:07','updated_at' => '2019-12-04 10:06:07','deleted_at' => NULL,'slug' => 'medical-1575453967'),
  array('id' => '26','dossier_medical_id' => '21','description' => '1986 : Césarienne d’urgence pour SFA + procidence du cordon, extraction d’un mort-né, suites opératoires simples.

 1996 : Nodulectomie pour nodule du sein droit, suites opératoires simples.


 2003 : Hystérectomie pour utérus polymyomateux, suites opératoires simples.

 2015 : A subit plusieurs interventions chirurgicales pour polytraumatisme (bassin et membre inférieur droit) post accident de la voie publique en 2013, complications post opératoires à type de raccourcissement du membre inférieur droit

 2016 : AMOS, suites opératoires simples ; mastectomie totale droite pour ADK mammaire, suites opératoires simples.','date' => '2019-10-10','type' => 'Chirugical','created_at' => '2019-12-04 10:11:38','updated_at' => '2019-12-04 10:11:38','deleted_at' => NULL,'slug' => 'chirugical-1575454298'),
  array('id' => '27','dossier_medical_id' => '21','description' => 'G3P3.0.0.2

Ménopausé

Dépistage du cancer du col de l’utérus : jamais réalisé','date' => '2019-06-04','type' => 'Gynéco-obstétrique','created_at' => '2019-12-04 10:27:46','updated_at' => '2019-12-04 10:27:46','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1575455266'),
  array('id' => '28','dossier_medical_id' => '24','description' => 'DT2 insulino-dépendant connue depuis 2005 sous METFORMINE 1000 (1cp/j) UMALOC 6-6-6 UI et LANTUS 0-0-20 UI','date' => '2005-06-20','type' => 'Médical','created_at' => '2019-12-05 08:38:03','updated_at' => '2019-12-05 08:38:03','deleted_at' => NULL,'slug' => 'medical-1575535083'),
  array('id' => '29','dossier_medical_id' => '24','description' => 'Myomectomie + hystérectomie totale faite en 2017 indiquée pour utérus polymyomateux. Suite opératoire sans particularité','date' => '2017-07-20','type' => 'Chirugical','created_at' => '2019-12-05 08:38:46','updated_at' => '2019-12-05 08:38:46','deleted_at' => NULL,'slug' => 'chirugical-1575535126'),
  array('id' => '30','dossier_medical_id' => '24','description' => 'G3P3002
✓ Ménopause à 45 ans
✓ Dépistage du cancer du sein : mammographie réalisée en 2018 sans particularité','date' => '2018-07-20','type' => 'Gynéco-obstétrique','created_at' => '2019-12-05 08:39:55','updated_at' => '2019-12-05 08:39:55','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1575535195'),
  array('id' => '31','dossier_medical_id' => '25','description' => 'HTA (aucun)
Diabète (aucun)','date' => '2019-12-06','type' => 'Médical','created_at' => '2019-12-06 10:41:10','updated_at' => '2019-12-06 10:41:10','deleted_at' => NULL,'slug' => 'medical-1575628870'),
  array('id' => '32','dossier_medical_id' => '25','description' => 'RAS','date' => '2019-12-06','type' => 'Chirugical','created_at' => '2019-12-06 10:43:03','updated_at' => '2019-12-06 10:43:03','deleted_at' => NULL,'slug' => 'chirugical-1575628983'),
  array('id' => '33','dossier_medical_id' => '25','description' => 'G5P5005','date' => '2019-12-06','type' => 'Gynéco-obstétrique','created_at' => '2019-12-06 10:51:36','updated_at' => '2019-12-06 10:51:36','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1575629496'),
  array('id' => '34','dossier_medical_id' => '26','description' => 'HTA (connu depuis 2 ans)
Diabète (chez son frère)','date' => '2019-12-06','type' => 'Médical','created_at' => '2019-12-06 11:17:02','updated_at' => '2019-12-06 11:17:02','deleted_at' => NULL,'slug' => 'medical-1575631022'),
  array('id' => '35','dossier_medical_id' => '28','description' => 'douleurs abdominales chroniques ayant bénéficié de plusieurs investigations.
✓ HTA connu sous AMLODIPINE 10 1cp/jr, observant et compliant au traitement.
Suivi pour hypertrophie de la prostate sous DAXAZOCIN 4mg 1cp/jr
✓ Porteur d’une HVC
✓ Notion d’hémorragie digestive haute il y a 3 ans
✓ Traité sous MECTIZAN (3cures) + savon antiseptique pour filariose lymphatique et cutanée.','date' => '2019-12-09','type' => 'Médical','created_at' => '2019-12-09 08:18:18','updated_at' => '2019-12-09 08:18:18','deleted_at' => NULL,'slug' => 'medical-1575879498'),
  array('id' => '36','dossier_medical_id' => '29','description' => 'Pas d’HTA ni de diabète
✓   Notion de constipation  chronique  d’étiologie  non étiquetée sous MHD ;
✓   Notion de lumbago,  de coccygodynie  chronique  et de crampes au membre inférieur  gauche sans étiologie  ni traitement  de fond ;
✓   Epigastralgique  chronique.','date' => '2019-12-09','type' => 'Médical','created_at' => '2019-12-09 10:46:29','updated_at' => '2019-12-09 10:46:29','deleted_at' => NULL,'slug' => 'medical-1575888389'),
  array('id' => '37','dossier_medical_id' => '29','description' => 'Myomectomie  il y a plusieurs années pour utérus polymyomateux,  suites opératoires simples  ;
✓   Port de prothèses dentaires suite à un trauma maxillo-facial  post AVP depuis plus de 10 ans','date' => '2009-05-02','type' => 'Chirugical','created_at' => '2019-12-09 10:47:14','updated_at' => '2019-12-09 10:47:14','deleted_at' => NULL,'slug' => 'chirugical-1575888434'),
  array('id' => '38','dossier_medical_id' => '29','description' => '✓   Ménopausée depuis l’âge de 42ans environ  ;
✓   Dépistage du cancer du col de l’utérus  en 2010 : jamais réalisé ;
✓   Dépistage du cancer du sein : jamais réalisé.','date' => '2002-05-02','type' => 'Gynéco-obstétrique','created_at' => '2019-12-09 10:48:08','updated_at' => '2019-12-09 10:48:08','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1575888488'),
  array('id' => '39','dossier_medical_id' => '31','description' => 'une gastrite.','date' => NULL,'type' => 'Médical','created_at' => '2019-12-10 09:51:48','updated_at' => '2019-12-10 09:51:48','deleted_at' => NULL,'slug' => 'medical-1575971508'),
  array('id' => '40','dossier_medical_id' => '32','description' => 'HTA➔ connue depuis 3 ans sous Lasilix, Aldactone, Tensionorme, Eneas
Diabète ➔ connu depuis plus de 25 sous ADO (Glibomet)
Bloc auriculo-ventriculaire de 3eme degré à l’E.C.G en 2018','date' => '2016-01-01','type' => 'Médical','created_at' => '2019-12-11 08:57:53','updated_at' => '2019-12-11 08:57:53','deleted_at' => NULL,'slug' => 'medical-1576054673'),
  array('id' => '41','dossier_medical_id' => '32','description' => 'Opérer pour cataracte de l’œil gauche en 2016','date' => '2016-01-01','type' => 'Chirugical','created_at' => '2019-12-11 08:58:19','updated_at' => '2019-12-11 08:58:19','deleted_at' => NULL,'slug' => 'chirugical-1576054699'),
  array('id' => '42','dossier_medical_id' => '7','description' => 'xcvxcvcxv','date' => '2019-11-25','type' => 'Médical','created_at' => '2019-12-11 10:52:41','updated_at' => '2019-12-11 10:52:41','deleted_at' => NULL,'slug' => 'medical-1576061561'),
  array('id' => '43','dossier_medical_id' => '33','description' => '•	En 1990, ostéosynthèse du MIG post AVP réalisée par un médecin Belge non documentée

•	Janvier 2019, opéré pour cataracte bilatérale à la Fondation ADLUCEM de

BEPANDA non documentée mais photographies de l’opération','date' => '1990-01-01','type' => 'Chirugical','created_at' => '2019-12-11 11:50:47','updated_at' => '2019-12-11 11:50:47','deleted_at' => NULL,'slug' => 'chirugical-1576065047'),
  array('id' => '44','dossier_medical_id' => '33','description' => 'RAS','date' => NULL,'type' => 'Médical','created_at' => '2019-12-11 11:50:58','updated_at' => '2019-12-11 11:50:58','deleted_at' => NULL,'slug' => 'medical-1576065058'),
  array('id' => '45','dossier_medical_id' => '34','description' => 'varicocèle  bilatérale  il y a environ 3 ans, suites opératoires simples','date' => NULL,'type' => 'Chirugical','created_at' => '2019-12-11 14:08:32','updated_at' => '2019-12-11 14:08:32','deleted_at' => NULL,'slug' => 'chirugical-1576073312'),
  array('id' => '46','dossier_medical_id' => '34','description' => 'RAS','date' => NULL,'type' => 'Médical','created_at' => '2019-12-11 14:08:42','updated_at' => '2019-12-11 14:08:42','deleted_at' => NULL,'slug' => 'medical-1576073322'),
  array('id' => '47','dossier_medical_id' => '35','description' => '✓ Hypertendu connu depuis plusieurs mois découverte de suite de consultations répétées pour asthénie, sous Cardiurine 50/25 1-0-0, observante et compliante au traitement
✓ Epigastralgie chronique intermittente sans traitement de fond
✓ Pas de diabète','date' => NULL,'type' => 'Médical','created_at' => '2019-12-11 20:33:12','updated_at' => '2019-12-11 20:33:12','deleted_at' => NULL,'slug' => 'medical-1576096392'),
  array('id' => '48','dossier_medical_id' => '35','description' => 'G4P4.0.0.4
o Aménorrhée secondaire (ménopause) depuis 20 ans environ
o Dépistage du cancer du col de l’utérus : jamais réalisé
o Dépistage du cancer du sein : jamais réalisé','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2019-12-11 20:33:34','updated_at' => '2019-12-11 20:33:34','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1576096414'),
  array('id' => '49','dossier_medical_id' => '35','description' => 'Conjoint : HTA connu sous traitement non documenté.','date' => NULL,'type' => 'Familial','created_at' => '2019-12-11 20:34:00','updated_at' => '2019-12-11 20:34:00','deleted_at' => NULL,'slug' => 'familial-1576096440'),
  array('id' => '50','dossier_medical_id' => '36','description' => 'gastrite chronique;   
une  notion    d\'hemiparesie     gauche   et hypoesthesie  il  y a 6 mois,   ayant  necessite   des  seances  de  kinesitherapie.   Elle  est  suivie pour  nevralgie  cervico-brachiale   bilaterale  par  le neurologue.','date' => '2019-01-01','type' => 'Médical','created_at' => '2019-12-13 10:23:24','updated_at' => '2019-12-13 10:23:24','deleted_at' => NULL,'slug' => 'medical-1576232604'),
  array('id' => '51','dossier_medical_id' => '37','description' => 'Il a comme antécédent une Hypertrophie de la prostate sous Tamsulosine.','date' => NULL,'type' => 'Médical','created_at' => '2019-12-13 10:43:52','updated_at' => '2019-12-13 10:43:52','deleted_at' => NULL,'slug' => 'medical-1576233832'),
  array('id' => '52','dossier_medical_id' => '39','description' => 'blenorroqle   ii y\'a 8 mois trolte  et guerri.
maladie hernorroidoire   depuis  environ  9ans ayant  beneficie   d\'un traitement   non documents  avec  periode   d\'exteriorisation    et reductlbllite   spontanee.','date' => NULL,'type' => 'Médical','created_at' => '2019-12-13 11:13:09','updated_at' => '2019-12-13 11:13:09','deleted_at' => NULL,'slug' => 'medical-1576235589'),
  array('id' => '53','dossier_medical_id' => '39','description' => 'patient   sexuellement   actif.','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2019-12-13 11:15:06','updated_at' => '2019-12-13 11:15:06','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1576235706'),
  array('id' => '54','dossier_medical_id' => '39','description' => 'n\'a jamais été opéré','date' => NULL,'type' => 'Chirugical','created_at' => '2019-12-13 11:21:46','updated_at' => '2019-12-13 11:21:46','deleted_at' => NULL,'slug' => 'chirugical-1576236106'),
  array('id' => '55','dossier_medical_id' => '40','description' => '✓   Névralgie cervico-brachiale il y a 2 ans PEC par kinésithérapie, port de collier cervical et un traitement médicamenteux non documenté ;
✓   Pas de diabète
✓   Pas d’HTA','date' => NULL,'type' => 'Médical','created_at' => '2019-12-16 13:15:34','updated_at' => '2019-12-16 13:15:34','deleted_at' => NULL,'slug' => 'medical-1576502134'),
  array('id' => '56','dossier_medical_id' => '40','description' => 'opérée  au  sein  gauche  en  1991  pour  hypertrophie  mammaire  dont

l’étiologie est mal précisée.','date' => NULL,'type' => 'Chirugical','created_at' => '2019-12-16 13:18:32','updated_at' => '2019-12-16 13:18:32','deleted_at' => NULL,'slug' => 'chirugical-1576502312'),
  array('id' => '57','dossier_medical_id' => '40','description' => 'G4P2022
✓   Ménopause à 45 ans
✓   Aucun dépistage pour cancer du sein ou cancer du col de l’utérus réalisés','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2019-12-16 13:19:04','updated_at' => '2019-12-16 13:19:04','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1576502344'),
  array('id' => '58','dossier_medical_id' => '41','description' => 'Lombosciatalgie  il y a 7 ans étiquetée  comme hernie  discale,  diagnostic  posé au scanner et confirmé par le Pr NJAMCHI à Yaoundé lors d’une consultation  au cours de laquelle  il  lui  a été prescrit : TRAMADOL  gélule,   OMEPRAZOLE  gélule,','date' => NULL,'type' => 'Médical','created_at' => '2019-12-16 14:05:04','updated_at' => '2019-12-16 14:05:04','deleted_at' => NULL,'slug' => 'medical-1576505104'),
  array('id' => '59','dossier_medical_id' => '41','description' => 'VOLTARENE suppositoire.  L’évolution  clinique  a été satisfaisante.  Cette PEC est non documentée.

HTA connu depuis plus de 5 ans polymédicalisée  :

o	T3   initial :  Fludex  cp  (1cp/j)  pendant  2  ans ;  Adalat  10mg  (1cp/j) pendant  1  an ;  Nifédipine  Denk  (1cp/j)  Captopril   Denk  50/12.5  cp (1cp/j)
o	T3   actuel  depuis  5  mois :  Tenoretic  50/12.5  (1cp/j) ;  Artofit  20mg cp(1cp/j) ; CardioAspirine  100mg cp (1cp/j) ; Captopril  Denk 50/25mg cp (1cp/j)

 Notion de crise d’infarctus  ? (Polypnée) diagnostiquée  à l’ECG non documenté.','date' => NULL,'type' => 'Médical','created_at' => '2019-12-16 14:07:04','updated_at' => '2019-12-16 14:07:04','deleted_at' => NULL,'slug' => 'medical-1576505224'),
  array('id' => '60','dossier_medical_id' => '41','description' => 'Kyste bénin au niveau  de l’articulation  du poignet G il y a 3 ans','date' => NULL,'type' => 'Chirugical','created_at' => '2019-12-16 14:07:26','updated_at' => '2019-12-16 14:07:26','deleted_at' => NULL,'slug' => 'chirugical-1576505246'),
  array('id' => '61','dossier_medical_id' => '41','description' => 'G5P5005

o Aménorrhée  secondaire (ménopause)  depuis 6 ans

o Dépistage du cancer du col de l’utérus  : 03 FCV réalisés, dernier réalisé il y a 3 ans.
Résultats  négatifs  d’après la patiente non documentés

o Dépistage  du  cancer  du  sein :  aucune  mammographie   réalisée   mais  palpation

bimanuelle  bilatérale  des seins au cours d’une consultation','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2019-12-16 14:08:18','updated_at' => '2019-12-16 14:08:18','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1576505298'),
  array('id' => '62','dossier_medical_id' => '42','description' => 'notion  de  douleur  mammaire   évoluant depuis  plusieurs années.
notion  de  masse mammaire   apaisant   et disparaissant   de  façon  spontanée depuis  plusieurs années.
notion  d\'IST  a chlamydiae a répétition.
FCV normal fait en avril 2019.','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2019-12-16 14:52:29','updated_at' => '2019-12-16 14:52:29','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1576507949'),
  array('id' => '63','dossier_medical_id' => '42','description' => 'pas de  notion  d\'HTA,  Diabète   ou autres  pathologie  chronique   connue. notion  de  gastrite  chronique','date' => NULL,'type' => 'Médical','created_at' => '2019-12-16 14:52:59','updated_at' => '2019-12-16 14:52:59','deleted_at' => NULL,'slug' => 'medical-1576507979'),
  array('id' => '64','dossier_medical_id' => '43','description' => 'Ménarches 13
Ménopause 0
Traitement Ménopause 0
Cycles réguliers ? Oui
Traitement hormonal de la ménopause célib
Nombre de jours du cycle 28
Dernier FCV 2000-01-01
Nombre de jours de règles 5
Dernière mammographie 2000-01-01
Nombre de changes par 2','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2019-12-17 10:09:51','updated_at' => '2019-12-17 10:09:51','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1576577391'),
  array('id' => '65','dossier_medical_id' => '43','description' => 'ras','date' => NULL,'type' => 'Familial','created_at' => '2019-12-17 10:10:42','updated_at' => '2019-12-17 10:10:42','deleted_at' => NULL,'slug' => 'familial-1576577442'),
  array('id' => '66','dossier_medical_id' => '44','description' => 'HTA connu depuis 8 ans sous BLOKIUM 100mg cp (1cp   par jour) sans notion de complication cardio ni cérébro-vasculaire
Non diabétique connu Non asthmatique Epigastralgie chronique','date' => NULL,'type' => 'Médical','created_at' => '2019-12-17 10:52:36','updated_at' => '2019-12-17 10:52:36','deleted_at' => NULL,'slug' => 'medical-1576579956'),
  array('id' => '67','dossier_medical_id' => '44','description' => 'Césarienne d’urgence en 2011 indiquée pour pré éclampsie sévère avec suites opératoires
simples','date' => NULL,'type' => 'Chirugical','created_at' => '2019-12-17 10:53:05','updated_at' => '2019-12-17 10:53:05','deleted_at' => NULL,'slug' => 'chirugical-1576579985'),
  array('id' => '68','dossier_medical_id' => '44','description' => 'DDR : 03/08/2019
G5P2030 : 03 fausses couches
01 MFIU
01 décès néonatal
Ménarche à 13 ans, durée des menstrues de 04 – 05 jours ; Pas de dysménorrhées
Pas de contraception
01 partenaire sexuel actuel Pas d’antécédent d’IST Antécédents de myomes utérins Ménorragies','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2019-12-17 10:54:07','updated_at' => '2019-12-17 10:54:07','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1576580047'),
  array('id' => '69','dossier_medical_id' => '47','description' => 'Hypertendu connu depuis quelques mois, de découverte fortuite au décours d’une consultation pour paludisme simple, sous PERINDOPRIL/INDAPAMIDE 10/12,5 : 1 – 0 – 0, avec notion de non observante au traitement. N’est pas connu diabétique.','date' => NULL,'type' => 'Médical','created_at' => '2019-12-20 10:29:19','updated_at' => '2019-12-20 10:29:19','deleted_at' => NULL,'slug' => 'medical-1576837759'),
  array('id' => '70','dossier_medical_id' => '47','description' => 'N’a jamais subi d’intervention chirurgicale','date' => NULL,'type' => 'Chirugical','created_at' => '2019-12-20 10:29:51','updated_at' => '2019-12-20 10:29:51','deleted_at' => NULL,'slug' => 'chirugical-1576837791'),
  array('id' => '71','dossier_medical_id' => '48','description' => 'HTA  connue  depuis  environ   5 ans  suivie   à la  clinique  cœur  et vie  de Douala,  sous EXFORGE   10/160mg   Cp  (AMLODIPINE+VALS ARTAN)   1cp/jour   compliante   et observante au traitement.','date' => NULL,'type' => 'Médical','created_at' => '2019-12-23 09:33:21','updated_at' => '2019-12-23 09:33:21','deleted_at' => NULL,'slug' => 'medical-1577093601'),
  array('id' => '72','dossier_medical_id' => '48','description' => 'Aucun','date' => NULL,'type' => 'Chirugical','created_at' => '2019-12-23 09:33:47','updated_at' => '2019-12-23 09:33:47','deleted_at' => NULL,'slug' => 'chirugical-1577093627'),
  array('id' => '73','dossier_medical_id' => '48','description' => 'G3P3003

Ménopausée

Dépistage du cancer du col : jamais réalisé','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2019-12-23 09:34:05','updated_at' => '2019-12-23 09:34:05','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1577093645'),
  array('id' => '74','dossier_medical_id' => '49','description' => 'HTA depuis 27 ans (1992) actuellment non suivie, découvert lors d\'un suivit médical suite au décès de son époux à l\'Hopital de Mbouda, chiffes tensionnels initiaux : non connus, traitement initial : non connu et arreté au bout de 1 an de traitement.','date' => NULL,'type' => 'Médical','created_at' => '2019-12-23 10:50:37','updated_at' => '2019-12-23 10:50:37','deleted_at' => NULL,'slug' => 'medical-1577098237'),
  array('id' => '75','dossier_medical_id' => '49','description' => 'Diabète découvert il y\'a plus de 10 ans lors d\'un examen de routine à l\'Hopital de Mbouda, non suivie.','date' => NULL,'type' => 'Médical','created_at' => '2019-12-23 10:51:28','updated_at' => '2019-12-23 10:51:28','deleted_at' => NULL,'slug' => 'medical-1577098288'),
  array('id' => '76','dossier_medical_id' => '50','description' => 'une notion d’HTA non traitée','date' => NULL,'type' => 'Médical','created_at' => '2019-12-23 11:51:28','updated_at' => '2019-12-23 11:51:28','deleted_at' => NULL,'slug' => 'medical-1577101888'),
  array('id' => '77','dossier_medical_id' => '50','description' => 'notion d’IST à Chlamydia traitée de longue date','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2019-12-23 11:51:50','updated_at' => '2019-12-23 11:51:50','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1577101910'),
  array('id' => '78','dossier_medical_id' => '51','description' => '✓   HTA connu  depuis plus  de 5 ans sous TRITAZIDE  5/25 (1cp/j) compliant  mais arrêt il y a une semaine.
✓   DT2 >5 ans en arrêt de traitement  depuis 3 semaines','date' => NULL,'type' => 'Médical','created_at' => '2019-12-23 12:26:06','updated_at' => '2019-12-23 12:26:06','deleted_at' => NULL,'slug' => 'medical-1577103966'),
  array('id' => '79','dossier_medical_id' => '52','description' => 'RAS','date' => NULL,'type' => 'Médical','created_at' => '2019-12-23 12:50:04','updated_at' => '2019-12-23 12:50:04','deleted_at' => NULL,'slug' => 'medical-1577105404'),
  array('id' => '80','dossier_medical_id' => '52','description' => 'RAS','date' => NULL,'type' => 'Médical','created_at' => '2019-12-23 13:11:27','updated_at' => '2019-12-23 13:11:27','deleted_at' => NULL,'slug' => 'medical-1577106687'),
  array('id' => '81','dossier_medical_id' => '53','description' => '✓   HTA connue  depuis  environ  1 an sous AMLODIPINE  10mg (1cp/j) suivie  à la clinique  BINGO-Douala compliante  au traitement  ;
✓   Diabétique   connue   depuis   1  an  sous  METFORMINE   500mg   Cp  (2cp*2/j)

compliante  au traitement  ;
✓   Notion d’épigastralgie  chronique  : une sérologie H. pylori négative faite le 09/04/19

à la clinique  BINGO, e le a bénéficié  d’un traitement  à base de BISMUTH 100Ml

+ OMEPRAZOLE 20mg (1cp/j) ;
✓   Notion de douleur traumatique  de l’épaule droite : le mécanisme  lésionnel survenue il y a 3 ans révèle qu’e le  aurait glissé  pendant qu’e le faisait  des tâches ménagères suivie  d’une chute de sa hauteur  avec réception  sur le côté D. La douleur  évolue cependant  par  poussées  exacerbée  par le  port  de charges  lourdes  malgré   une massothérapie  avec des baumes et la prise des antalgiques  ;','date' => NULL,'type' => 'Médical','created_at' => '2019-12-23 13:30:19','updated_at' => '2019-12-23 13:30:19','deleted_at' => NULL,'slug' => 'medical-1577107819'),
  array('id' => '82','dossier_medical_id' => '53','description' => 'Prise au long cours d’AINS et potions traditionnelles.','date' => NULL,'type' => 'Médical','created_at' => '2019-12-23 13:30:41','updated_at' => '2019-12-23 13:30:41','deleted_at' => NULL,'slug' => 'medical-1577107841'),
  array('id' => '83','dossier_medical_id' => '55','description' => 'pas de  notion  d\'HTA. diabète.  asthme  ou autre  pathologie  chronique connu','date' => NULL,'type' => 'Médical','created_at' => '2019-12-24 11:16:35','updated_at' => '2019-12-24 11:16:35','deleted_at' => NULL,'slug' => 'medical-1577186195'),
  array('id' => '84','dossier_medical_id' => '56','description' => 'pas de notion   d\'HTA ,  de diabète  connu','date' => NULL,'type' => 'Médical','created_at' => '2019-12-24 11:32:01','updated_at' => '2019-12-24 11:32:01','deleted_at' => NULL,'slug' => 'medical-1577187121'),
  array('id' => '85','dossier_medical_id' => '57','description' => '- HT A depuis  2010 suivi sous Ramipril 65mg  ; - Gastrite  chronique   suivi sous Pantoprazole   40mg - Paludisme  grave  associée  a une fièvre  typhoïde   avec
plusieurs récidives','date' => NULL,'type' => 'Médical','created_at' => '2019-12-24 12:59:56','updated_at' => '2019-12-24 12:59:56','deleted_at' => NULL,'slug' => 'medical-1577192396'),
  array('id' => '86','dossier_medical_id' => '58','description' => 'Diabète','date' => '2000-01-01','type' => 'Médical','created_at' => '2019-12-26 10:45:33','updated_at' => '2019-12-26 16:00:01','deleted_at' => '2019-12-26 16:00:01','slug' => 'medical-1577357133'),
  array('id' => '87','dossier_medical_id' => '58','description' => 'Chirurgie oculaire gauche pour cataracte','date' => '2016-01-01','type' => 'Chirugical','created_at' => '2019-12-26 10:46:58','updated_at' => '2019-12-26 10:48:08','deleted_at' => NULL,'slug' => 'chirugical-1577357218'),
  array('id' => '88','dossier_medical_id' => '58','description' => 'Diabète','date' => '2000-01-01','type' => 'Médical','created_at' => '2019-12-26 15:56:57','updated_at' => '2020-01-01 18:25:16','deleted_at' => '2020-01-01 18:25:16','slug' => 'medical-1577375817'),
  array('id' => '89','dossier_medical_id' => '58','description' => 'HBP','date' => '2019-12-20','type' => 'Médical','created_at' => '2020-01-01 18:24:53','updated_at' => '2020-01-01 18:24:53','deleted_at' => NULL,'slug' => 'medical-1577903093'),
  array('id' => '90','dossier_medical_id' => '59','description' => 'RAS','date' => NULL,'type' => 'Médical','created_at' => '2020-01-02 08:31:39','updated_at' => '2020-01-02 08:31:39','deleted_at' => NULL,'slug' => 'medical-1577953899'),
  array('id' => '91','dossier_medical_id' => '59','description' => 'RAS','date' => NULL,'type' => 'Chirugical','created_at' => '2020-01-02 08:31:52','updated_at' => '2020-01-02 08:31:52','deleted_at' => NULL,'slug' => 'chirugical-1577953912'),
  array('id' => '92','dossier_medical_id' => '60','description' => 'HTA:  diagnostiquee\'  ii y\'a 10 ans de rnoniere fortuite TA a la decouverte 180/100
mmhg initialemment sous mesures hygieno dietetiques puis suivie  par Dr David
Ekoua a l\'Hopital de district d\'Efoulan  mise sous Coveram  l cp/jr I     sous
Amlodipine 20 mg 1    cp/j.r (change  par la patiente  car coveram  couteux pour
elle) depuis 5 mois non observante. au traitement  bilans de lesion  d\'organnnes cibles:
Echodoppler cardiaque  fait le 06/06/2019 resultats: Aorte initiale  normale
VG non dilate,  hyperthrophie   du VG concentrique  .cinettque    homoqene.  VG
hvperkinetique.    F.EVG estimee a 80%,  PRVG  normale, legere   dilatation   de l\'OG.
p~s d\'HTAP,  VD normokinetique,    VCI  non dilate,  péricarde  libre
Uree: 0, 16 g/l /créatinine:  10,0  mg/I ,  FO: fait a l\'HCYle 08/07/2019 resultats
abscence   de  rétinophathie  diabétique.  rétinopathie   hypertensive  grade  I  de
Kirkendall,   radiographie du thorax non fait.','date' => NULL,'type' => 'Médical','created_at' => '2020-01-02 09:08:40','updated_at' => '2020-01-02 09:08:40','deleted_at' => NULL,'slug' => 'medical-1577956120'),
  array('id' => '93','dossier_medical_id' => '60','description' => 'DT2 11   y\'a 4 mois decouverte  fortuite  glycemle de decouverte  5g/l suivle par le
doteur Kamgang sous insuline (a pris 1    dose seulement)  plus metformine   1 OOOmg
1  cp*2/jr   (arret du traitement  volontaire),   HbA 1  C:  6,71 faite  ii y\'a 5 jours
Lombarthrose
II y\'a  5 ans scanner  lombaire  résultats disponible   fait  en guinee  équatoriale,
traitement  non documents  (orret volontaire   du traitement)
Gastrite  chronique:                                                                                                          · depuis  15  ans environ,   suivi par Dr Biwole Sida FOGO fait le 17 /09/201?  eel: Pan gastrite  erosive   beance  du cardia  et hernie   hiatale   par glissement.    Mise sous
orneprozole   1  cp*2/jr;  Motilium  1 cp*3/jr;   NO-spa  1  cp*2/jr
Consultation   rhumatoloqique:                                                                          di       e
suivie pour  lombo-sciatalgie    par le docteur   FOSSO au centre, des handicapés 
d\'Etoug-Ebe  sous Antalgex  T  1  cp*2/  jr, Renerve P  1  cp*2/JrS  (arret du troitement ca
symptomes  persistent)','date' => NULL,'type' => 'Médical','created_at' => '2020-01-02 09:11:08','updated_at' => '2020-01-02 09:11:08','deleted_at' => NULL,'slug' => 'medical-1577956268'),
  array('id' => '94','dossier_medical_id' => '60','description' => 'Pre-eclampsie   pendant   toutes ses grossesses sans traitement avec  une notion
de TAS  (180-160 mmhg)
Menopausee   ii y\'a  15 ans pas de suivi gynecologique
FCV: normal  ii y\'a  15 ans,  IST -, pas de rappport  sexuel depuis  plus de  10 ans','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2020-01-02 09:11:51','updated_at' => '2020-01-02 09:11:51','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1577956311'),
  array('id' => '95','dossier_medical_id' => '60','description' => 'Mere DT2 décédée
conjoint  décédé  de suite d\'un AVC','date' => NULL,'type' => 'Familial','created_at' => '2020-01-02 09:15:16','updated_at' => '2020-01-02 09:15:16','deleted_at' => NULL,'slug' => 'familial-1577956516'),
  array('id' => '96','dossier_medical_id' => '61','description' => 'hypertrophie bénigne de la prostate découvert il y’a environ 3 ans à l’Hôpital la Garnison -en contexte de douleur pelvienne et rétention aigue d’urine suivit sous  Permixon 1cp*2 / jr depuis environ 1 an,  compliant au traitement (on note un arrêt du traitement sur une durée d’environ 1  mois et demi ayant précédé l’épisode d’hématurie).','date' => NULL,'type' => 'Médical','created_at' => '2020-01-03 10:02:32','updated_at' => '2020-01-03 10:02:32','deleted_at' => NULL,'slug' => 'medical-1578045752'),
  array('id' => '97','dossier_medical_id' => '61','description' => 'RAS','date' => NULL,'type' => 'Chirugical','created_at' => '2020-01-03 10:03:13','updated_at' => '2020-01-03 10:03:13','deleted_at' => NULL,'slug' => 'chirugical-1578045793'),
  array('id' => '98','dossier_medical_id' => '61','description' => 'Ascendants : décédés : pas de pathologie chronique connue','date' => NULL,'type' => 'Familial','created_at' => '2020-01-03 10:03:26','updated_at' => '2020-01-03 10:03:26','deleted_at' => NULL,'slug' => 'familial-1578045806'),
  array('id' => '99','dossier_medical_id' => '61','description' => '⦁ Collatéraux : 5e/12 dont 7 décédés, le reste en bonne santé apparente','date' => NULL,'type' => 'Familial','created_at' => '2020-01-03 10:04:07','updated_at' => '2020-01-03 10:04:07','deleted_at' => NULL,'slug' => 'familial-1578045847'),
  array('id' => '100','dossier_medical_id' => '61','description' => 'hypertrophie bénigne de la prostate découvert il y’a environ 3 ans à l’Hôpital la Garnison -en contexte de douleur pelvienne et rétention aigue d’urine suivit sous  Permixon 1cp*2 / jr depuis environ 1 an,  compliant au traitement (on note un arrêt du traitement sur une durée d’environ 1  mois et demi ayant précédé l’épisode d’hématurie).','date' => NULL,'type' => 'Médical','created_at' => '2020-01-03 10:20:46','updated_at' => '2020-01-03 10:20:46','deleted_at' => NULL,'slug' => 'medical-1578046846'),
  array('id' => '101','dossier_medical_id' => '61','description' => 'Ascendants : décédés : pas de pathologie chronique connue
Collatéraux : 5e/12 dont 7 décédés, le reste en bonne santé apparente','date' => NULL,'type' => 'Familial','created_at' => '2020-01-03 10:21:31','updated_at' => '2020-01-03 10:21:31','deleted_at' => NULL,'slug' => 'familial-1578046891'),
  array('id' => '102','dossier_medical_id' => '62','description' => 'elle est hypertendue connu depuis 05 ans sous ramipril hydrochlorothiazide 5/25 ; 1 cp /jr , observante.

-Elle n’est pas diabétique connue

-Notion d’amaigrissement, environ 30kg de perdu en 1an.','date' => NULL,'type' => 'Médical','created_at' => '2020-01-03 10:49:23','updated_at' => '2020-01-03 10:49:23','deleted_at' => NULL,'slug' => 'medical-1578048563'),
  array('id' => '103','dossier_medical_id' => '62','description' => 'cholécystectomie réalisée en Italie le 30 Aout 2018, suites opératoires simples.','date' => NULL,'type' => 'Chirugical','created_at' => '2020-01-03 10:49:42','updated_at' => '2020-01-03 10:49:42','deleted_at' => NULL,'slug' => 'chirugical-1578048582'),
  array('id' => '104','dossier_medical_id' => '63','description' => 'pas de pathologie chronique connue','date' => NULL,'type' => 'Médical','created_at' => '2020-01-06 11:27:34','updated_at' => '2020-01-06 11:27:34','deleted_at' => NULL,'slug' => 'medical-1578310054'),
  array('id' => '105','dossier_medical_id' => '69','description' => '1.Notion de dyspnée   dons l\'enfance.(Asthme??).

2. Notion de cardiopathie a type d’hypertrophie Gauche  cores  réalisation d\'environ 5 radiographies  du thorax dont la dernière faite le 24/ l 0/2019.

ECG  montrant
- rythme sinusal  régulier
-  FC: 65bpm
- Déviation  axiale normale
- Trouble du processus de repolarisation   a la partie septale  apicale et latérale
basse.
plaintes récurrentes: Toux tantôt  sèche  tantôt  grasse,
Suivie  a la clinique  Saint  Pores par Dr Noufeli  (consultation   générale
Sous Digoxine 0,25  mg cp, Cardioaspirine  100mg cp.  Furosémide  40 mg cp
durant une période   non documentée.


3. Notion  de Pneumopathie   infectueuse  en juillet 2019 pris en charge  a l\'HJY  par Dr Teguia  Ricco
Fleming   1  g cp pdt  10 jrs mucomyst  200 1 sachet  *3/jr
Avis cardiologique   le  12/03/2019

4. Notion de douleur  articulaire  chronique
AINS  + Oméprazol  cp, Prednisolone  5mg 2cp*2/jrs pdt 7 jrs pas d\'HTA, pas de DT2','date' => NULL,'type' => 'Médical','created_at' => '2020-01-06 13:41:57','updated_at' => '2020-01-06 13:41:57','deleted_at' => NULL,'slug' => 'medical-1578318117'),
  array('id' => '106','dossier_medical_id' => '69','description' => 'Ablation d\'une tumeur du sein gauche  en 1994
Césarienne et Ligature des trompes en 1995
Ablation de lipome membre supérieur. jambe droite','date' => NULL,'type' => 'Chirugical','created_at' => '2020-01-06 13:42:20','updated_at' => '2020-01-06 13:42:20','deleted_at' => NULL,'slug' => 'chirugical-1578318140'),
  array('id' => '107','dossier_medical_id' => '69','description' => 'G11P1O110
Menauposée ii y\'o 1  o ans
FCV:jamais fait;  Mammographie pas faite','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2020-01-06 13:42:58','updated_at' => '2020-01-06 13:42:58','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1578318178'),
  array('id' => '108','dossier_medical_id' => '68','description' => '-Lombo-arthrose:   avec  radiographie  lombaire faite  en sept  2018
Lombodiscarthrose    débutante  étagée,  Ankylose  L 1-L2   avec  cassure  de  lordose physiologique  lombaire,   pincement   du disque  L5-S 1. 
sous Tramadol   cp   et Miorel  cp

-Consultation  par  le Professeur PEFURA   a l\'HJY le 11 /07/2019  pour  toux  sèche persistante  et dyspnée sifflante.

Conclusion:   Absence  de TVO, Pattern  restrictif  avec  amputation   de  la CV de
24%

- Réalisation   d\'une  échographie   pelvienne  le 26/02/2019   demandée  par  une résidente   en cardiologie   lors d\'une  consultation  pour  sa mère
montrant:   HBP hormogène  de  82.4g,  rein gauche   non  visualisation,   absence de  retentissement    sur le haut  appareil   urinaire,  examen   a completer  par  un
dosage   de  PSA.  pour  une  mémoire  multiples  lithiases vésiculaires. Valeurs  des PSA:  0.99ng/ml
Créatinémie:   13.61  mg/I        Uree: O. l 9g/l
Pas de notion   d\'HTA et de  DT2.','date' => NULL,'type' => 'Médical','created_at' => '2020-01-06 14:08:56','updated_at' => '2020-01-06 14:08:56','deleted_at' => NULL,'slug' => 'medical-1578319736'),
  array('id' => '109','dossier_medical_id' => '68','description' => 'Résection   transurétrale    de  la prostate   a l\'hôpital   de  Bingo   en 2007 pour  une
probale   HBP  de  suite  simple','date' => NULL,'type' => 'Chirugical','created_at' => '2020-01-06 14:09:34','updated_at' => '2020-01-06 14:09:34','deleted_at' => NULL,'slug' => 'chirugical-1578319774'),
  array('id' => '110','dossier_medical_id' => '67','description' => 'HTA➔ connue depuis 2010 sous un IEC 
Diabète ➔ connu depuis 2005 sous des ADO IDM en 2013','date' => NULL,'type' => 'Médical','created_at' => '2020-01-06 14:57:35','updated_at' => '2020-01-06 14:57:35','deleted_at' => NULL,'slug' => 'medical-1578322655'),
  array('id' => '111','dossier_medical_id' => '67','description' => 'Angioplastie coronaire en 2013

Allergie médicamenteuse : aucune

Tabac : nihil

Traitement encours : Glucophage, Daonil, Lisinopril','date' => NULL,'type' => 'Chirugical','created_at' => '2020-01-06 15:00:31','updated_at' => '2020-01-06 15:00:31','deleted_at' => NULL,'slug' => 'chirugical-1578322831'),
  array('id' => '112','dossier_medical_id' => '73','description' => 'HTA : Aucun
Diabète type 2 connu sous metformine 1000 : 1cp 2 fois / jour
Aurait été suivi pour une hyperthyroïdie objectivée par les bilans biologique mais ne s’en souvient pas','date' => NULL,'type' => 'Médical','created_at' => '2020-01-10 16:35:30','updated_at' => '2020-01-10 16:35:30','deleted_at' => NULL,'slug' => 'medical-1578674130'),
  array('id' => '113','dossier_medical_id' => '73','description' => 'Cure chirurgicale de fistule anale en avril 2019
Suivi depuis août 2019 pour adénocarcinome de la prostate par le Dr KAMADJOU Cyrille','date' => '2019-04-01','type' => 'Chirugical','created_at' => '2020-01-10 16:36:12','updated_at' => '2020-01-10 16:36:12','deleted_at' => NULL,'slug' => 'chirugical-1578674172'),
  array('id' => '114','dossier_medical_id' => '64','description' => 'HTA connue depuis 2017 sous TEMERIT 5mg (1cp/j) AMLODIPINE 5mg (1cp/j) TRITAZIDE 5/12,5 (1cp/j)
•	Fibrillation  auriculaire  connu  depuis  2  ans  sous  SINTRON  avec  surveillance régulière de INR (dernier INR 08/08/19 1,4 en baisse)
•   Maladie rénale chronique depuis 2017 diagnostic fait à l’échographie des reins

ayant mis en évidence une asymétrie rénale

•	Accès goutteux depuis plusieurs mois sous ZYLORIC 200mg (1cp/j) mais écart thérapeutique par patient.
•   Pas de pathologie prostatique

Pas de DT2','date' => NULL,'type' => 'Médical','created_at' => '2020-01-13 10:57:33','updated_at' => '2020-01-13 10:57:33','deleted_at' => NULL,'slug' => 'medical-1578913053'),
  array('id' => '115','dossier_medical_id' => '64','description' => 'Notion d’HTA terminale chez la grande sœur','date' => NULL,'type' => 'Familial','created_at' => '2020-01-13 10:58:17','updated_at' => '2020-01-13 10:58:17','deleted_at' => NULL,'slug' => 'familial-1578913097'),
  array('id' => '116','dossier_medical_id' => '64','description' => 'RAS','date' => NULL,'type' => 'Chirugical','created_at' => '2020-01-13 11:02:06','updated_at' => '2020-01-13 11:02:06','deleted_at' => NULL,'slug' => 'chirugical-1578913326'),
  array('id' => '117','dossier_medical_id' => '66','description' => 'HTA connu depuis 19 ans sous BIPRETERAX 5/12,5mg cp (1cp  par jour)
Pathologie pulmonaire chronique étiquetée comme asthme sans traitement de fond, et sous bouffées de SALBUTAMOL lors des crises
ATCD d’hypertrophie de la prostate sous PERMIXON mais traitement stoppé
ATCD  sinusite chronique traitée.','date' => NULL,'type' => 'Médical','created_at' => '2020-01-13 12:52:43','updated_at' => '2020-01-13 12:52:43','deleted_at' => NULL,'slug' => 'medical-1578919963'),
  array('id' => '118','dossier_medical_id' => '66','description' => 'Hernioraphie inguinale bilatérale il y a 02 ans 

Chirurgie de décompression du canal carpien, indiquée pour syndrome du canal carpien
bilatéral en mars 2018','date' => NULL,'type' => 'Chirugical','created_at' => '2020-01-13 12:53:02','updated_at' => '2020-01-13 12:53:02','deleted_at' => NULL,'slug' => 'chirugical-1578919982'),
  array('id' => '119','dossier_medical_id' => '66','description' => 'pas d’antécédents familiaux de maladie neuro dégénérative notion d’HTA et de diabète
pas de notion de cancer
pas de maladie génétique familiale','date' => NULL,'type' => 'Familial','created_at' => '2020-01-13 12:53:33','updated_at' => '2020-01-13 12:53:33','deleted_at' => NULL,'slug' => 'familial-1578920013'),
  array('id' => '120','dossier_medical_id' => '77','description' => 'Asthme diagnostiqué il y a 02 ans au décours d’une crise d’asthme aigu grave, initialement sous SERETIDE, mais traitement stoppé il y a 21 mois.
Syndrome ulcéreux gastroduodénal','date' => NULL,'type' => 'Médical','created_at' => '2020-01-15 09:17:13','updated_at' => '2020-01-15 09:17:13','deleted_at' => NULL,'slug' => 'medical-1579079833'),
  array('id' => '121','dossier_medical_id' => '77','description' => 'G0P0
Ménarche à 14 ans, durée menstrues 04 jours, durée des cycles 22 jours et réguliers
Pas de métrorragies, pas de dysménorrhées, pas de contraception
Pas de FCV réalisé','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2020-01-15 09:17:23','updated_at' => '2020-01-15 09:17:23','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1579079843'),
  array('id' => '122','dossier_medical_id' => '77','description' => 'n\'a jamais été opérée','date' => NULL,'type' => 'Chirugical','created_at' => '2020-01-15 09:17:38','updated_at' => '2020-01-15 09:17:38','deleted_at' => NULL,'slug' => 'chirugical-1579079858'),
  array('id' => '123','dossier_medical_id' => '77','description' => 'Diabète de type 2 et asthme chez la grand-mère
Diabète de type 2 chez le père','date' => NULL,'type' => 'Familial','created_at' => '2020-01-15 09:18:10','updated_at' => '2020-01-15 09:18:10','deleted_at' => NULL,'slug' => 'familial-1579079890'),
  array('id' => '124','dossier_medical_id' => '79','description' => 'Une affection de la prostate connue depuis deux ans (porteur d’une sonde urinaire),
Une lombarthrose.','date' => NULL,'type' => 'Médical','created_at' => '2020-01-15 12:34:35','updated_at' => '2020-01-15 12:34:35','deleted_at' => NULL,'slug' => 'medical-1579091675'),
  array('id' => '125','dossier_medical_id' => '80','description' => 'Orchidectomie et kystectomie il y a 3 ans','date' => NULL,'type' => 'Chirugical','created_at' => '2020-01-15 13:27:12','updated_at' => '2020-01-15 13:27:12','deleted_at' => NULL,'slug' => 'chirugical-1579094832'),
  array('id' => '126','dossier_medical_id' => '80','description' => 'insuffisance veineuse des membres inférieurs et cardiaque du côté de la mère','date' => NULL,'type' => 'Familial','created_at' => '2020-01-15 13:27:33','updated_at' => '2020-01-15 13:27:33','deleted_at' => NULL,'slug' => 'familial-1579094853'),
  array('id' => '127','dossier_medical_id' => '80','description' => 'RAS','date' => NULL,'type' => 'Médical','created_at' => '2020-01-15 13:27:41','updated_at' => '2020-01-15 13:27:41','deleted_at' => NULL,'slug' => 'medical-1579094861'),
  array('id' => '128','dossier_medical_id' => '85','description' => 'known hypertensive patient since 2012, on Hydrochlorothiazide 25mg; 1 tab daily.
not diabetic
no documented episode of epigartalgia.','date' => NULL,'type' => 'Médical','created_at' => '2020-01-20 20:33:33','updated_at' => '2020-01-20 20:33:33','deleted_at' => NULL,'slug' => 'medical-1579552413'),
  array('id' => '129','dossier_medical_id' => '85','description' => 'has never been operated upon.','date' => NULL,'type' => 'Chirugical','created_at' => '2020-01-20 20:34:10','updated_at' => '2020-01-20 20:34:10','deleted_at' => NULL,'slug' => 'chirugical-1579552450'),
  array('id' => '130','dossier_medical_id' => '85','description' => 'Father died of stroke last year
Mother in good health according to the patient.','date' => NULL,'type' => 'Familial','created_at' => '2020-01-20 20:35:01','updated_at' => '2020-01-20 20:35:01','deleted_at' => NULL,'slug' => 'familial-1579552501'),
  array('id' => '131','dossier_medical_id' => '86','description' => 'Ménarche: 12ans
Ménopause: 0
Cycle régulier: non
Traitement Menopause: 0
Nombre de jours de cycle: 30-32 jours
Dernier FCV jamais
Nombre de jours de règles: 4-5jours
Dernière mammographie: 01/11/2019
Nombre de changes par 4:','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2020-01-21 09:09:01','updated_at' => '2020-01-21 09:09:01','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1579597741'),
  array('id' => '132','dossier_medical_id' => '87','description' => 'Gestité: 3	Parité: 3
Conisation et/ou laser pour dysplasies: 0	Myomes: 0
Kyste ovarien: 0	Kyste ovarien: 0
Notes: 0	IST: 0
Ménarche: 12ans	Ménopause: 0
Cycle régulier: non	Traitement Menopause: 0
Nombre de jours de cycle: 30-32 jours	Dernier FCV jamais
Nombre de jours de règles: 4-5jours	Dernière mammographie: 01/11/2019
Nombre de changes par 4:','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2020-01-22 09:00:36','updated_at' => '2020-01-22 09:00:36','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1579683636'),
  array('id' => '133','dossier_medical_id' => '87','description' => 'Diabète: oui	Dystroîdies: 0
HTA: non	Cancer: oui
Tromboemboliques: 0	Autres: 0
Cardiovasculaire AVC et IDM: oui','date' => NULL,'type' => 'Familial','created_at' => '2020-01-22 09:01:13','updated_at' => '2020-01-22 09:01:13','deleted_at' => NULL,'slug' => 'familial-1579683673'),
  array('id' => '134','dossier_medical_id' => '62','description' => 'Hospitalisée le 02 novembre pendant 3 jours pour syndrome infectieux compliqué d’une anémie sévère
      Perte de plus de 30% de son poids depuis 2017(poids antérieur=103kgs
      HTA connue sous Ramipril','date' => NULL,'type' => 'Médical','created_at' => '2020-01-22 10:08:32','updated_at' => '2020-01-22 10:08:32','deleted_at' => NULL,'slug' => 'medical-1579687712'),
  array('id' => '135','dossier_medical_id' => '62','description' => 'Cholecystectomie faite en 2017 en Italie','date' => NULL,'type' => 'Chirugical','created_at' => '2020-01-22 10:16:25','updated_at' => '2020-01-22 10:16:25','deleted_at' => NULL,'slug' => 'chirugical-1579688185'),
  array('id' => '136','dossier_medical_id' => '62','description' => 'Hospitalisée le 02 novembre pendant 3 jours pour syndrome infectieux compliqué d’une anémie sévère
      Perte de plus de 30% de son poids depuis 2017(poids antérieur=103kgs
      HTA connue sous Ramipril','date' => NULL,'type' => 'Médical','created_at' => '2020-01-22 10:24:10','updated_at' => '2020-01-22 10:24:10','deleted_at' => NULL,'slug' => 'medical-1579688650'),
  array('id' => '137','dossier_medical_id' => '89','description' => 'Diabete mellitus type 2','date' => NULL,'type' => 'Médical','created_at' => '2020-01-23 12:26:09','updated_at' => '2020-01-23 12:26:09','deleted_at' => NULL,'slug' => 'medical-1579782369'),
  array('id' => '138','dossier_medical_id' => '89','description' => 'Diabète mellites de type 2 depuis 20 ans','date' => NULL,'type' => 'Médical','created_at' => '2020-01-23 13:10:36','updated_at' => '2020-01-23 13:10:36','deleted_at' => NULL,'slug' => 'medical-1579785036'),
  array('id' => '139','dossier_medical_id' => '88','description' => 'RAS','date' => NULL,'type' => 'Chirugical','created_at' => '2020-01-24 10:44:50','updated_at' => '2020-01-24 10:44:50','deleted_at' => NULL,'slug' => 'chirugical-1579862690'),
  array('id' => '140','dossier_medical_id' => '90','description' => 'Medicaux : HTA suivi  et non documentée  depuis   1994 avec  arrêt spontanée du traitement ii y a 2 ans.','date' => NULL,'type' => 'Médical','created_at' => '2020-01-24 11:56:43','updated_at' => '2020-01-24 11:56:43','deleted_at' => NULL,'slug' => 'medical-1579867003'),
  array('id' => '141','dossier_medical_id' => '90','description' => 'HTA suivi  et non documentée  depuis   1994 avec  arrêt spontanée du traitement ii y a 2 ans','date' => NULL,'type' => 'Médical','created_at' => '2020-01-24 12:40:50','updated_at' => '2020-01-24 12:40:50','deleted_at' => NULL,'slug' => 'medical-1579869650'),
  array('id' => '142','dossier_medical_id' => '76','description' => 'RAS','date' => NULL,'type' => 'Médical','created_at' => '2020-01-27 09:39:29','updated_at' => '2020-01-27 09:39:29','deleted_at' => NULL,'slug' => 'medical-1580117969'),
  array('id' => '143','dossier_medical_id' => '76','description' => 'RAS','date' => NULL,'type' => 'Chirugical','created_at' => '2020-01-27 09:39:40','updated_at' => '2020-01-27 09:39:40','deleted_at' => NULL,'slug' => 'chirugical-1580117980'),
  array('id' => '144','dossier_medical_id' => '76','description' => 'ménopausée 
G10P10019','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2020-01-27 09:40:09','updated_at' => '2020-01-27 09:40:09','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1580118009'),
  array('id' => '145','dossier_medical_id' => '91','description' => 'Bilharziose,  Hypertrophie   bénigne  de la prostate','date' => NULL,'type' => 'Médical','created_at' => '2020-01-28 12:08:04','updated_at' => '2020-01-28 12:08:04','deleted_at' => NULL,'slug' => 'medical-1580213284'),
  array('id' => '146','dossier_medical_id' => '91','description' => 'Intervention  endoscopique sur lithiase  urinaire, résection transurétrale sur HBP','date' => NULL,'type' => 'Chirugical','created_at' => '2020-01-28 12:16:13','updated_at' => '2020-01-28 12:16:13','deleted_at' => NULL,'slug' => 'chirugical-1580213773'),
  array('id' => '147','dossier_medical_id' => '36','description' => 'une  notion    d\'hémiparésie     gauche   et hypoesthésie  il  y a 6 mois,   ayant  nécessite   des  séances  de  kinésithérapie.','date' => NULL,'type' => 'Médical','created_at' => '2020-01-28 13:39:59','updated_at' => '2020-01-28 13:39:59','deleted_at' => NULL,'slug' => 'medical-1580218799'),
  array('id' => '148','dossier_medical_id' => '36','description' => 'G10P10.0.0.7

o Aménorrhée secondaire (ménopause) depuis l’âge de 45 ans

o Dépistage du cancer du col de l’utérus : jamais réalisé

o Dépistage du cancer du sein : jamais réalisé','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2020-01-28 14:10:13','updated_at' => '2020-01-28 14:10:13','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1580220613'),
  array('id' => '149','dossier_medical_id' => '36','description' => 'Notion d’hémiparésie gauche avec lourdeur des membres du même côté et une hypoesthésie  gauche  (AIT ?)  il  y  a  6  mois  ayant  bénéficié  des  séances  de kinésithérapie (1 séance/j pendant 30 jours) à domicile. Evolution clinique satisfaisante.','date' => NULL,'type' => 'Médical','created_at' => '2020-01-28 14:21:02','updated_at' => '2020-01-28 14:21:02','deleted_at' => NULL,'slug' => 'medical-1580221262'),
  array('id' => '150','dossier_medical_id' => '36','description' => 'G10P10.0.0.7

o Aménorrhée secondaire (ménopause) depuis l’âge de 45 ans

o Dépistage du cancer du col de l’utérus : jamais réalisé

o Dépistage du cancer du sein : jamais réalisé','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2020-01-28 14:21:34','updated_at' => '2020-01-28 14:21:34','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1580221294'),
  array('id' => '151','dossier_medical_id' => '44','description' => 'Parents décédés d\'un arrêt cardio-respiratoire n 2019','date' => NULL,'type' => 'Familial','created_at' => '2020-01-28 15:40:27','updated_at' => '2020-01-28 15:40:27','deleted_at' => NULL,'slug' => 'familial-1580226027'),
  array('id' => '152','dossier_medical_id' => '74','description' => 'RAS','date' => NULL,'type' => 'Médical','created_at' => '2020-02-04 13:04:55','updated_at' => '2020-02-04 13:04:55','deleted_at' => NULL,'slug' => 'medical-1580821495'),
  array('id' => '153','dossier_medical_id' => '74','description' => 'laparotomie exploratrice réalisée il y\'a plusieurs années mais non documentés.','date' => NULL,'type' => 'Chirugical','created_at' => '2020-02-04 13:05:23','updated_at' => '2020-02-04 13:05:23','deleted_at' => NULL,'slug' => 'chirugical-1580821523'),
  array('id' => '154','dossier_medical_id' => '92','description' => 'Suivi il y a quelques mois pour gonarthrite sur gonarthrose sévère et syndrome goutteux.
Actuellement sous tramadol 100 : 1cp*2/ jour pendant les crises de douleur','date' => NULL,'type' => 'Médical','created_at' => '2020-02-10 10:49:45','updated_at' => '2020-02-10 10:49:45','deleted_at' => NULL,'slug' => 'medical-1581331785'),
  array('id' => '155','dossier_medical_id' => '92','description' => 'Elle n\'est pas diabétique ni hypertendu connue','date' => NULL,'type' => 'Médical','created_at' => '2020-02-10 10:50:27','updated_at' => '2020-02-10 10:50:27','deleted_at' => NULL,'slug' => 'medical-1581331827'),
  array('id' => '156','dossier_medical_id' => '92','description' => 'RAS','date' => NULL,'type' => 'Chirugical','created_at' => '2020-02-10 10:50:38','updated_at' => '2020-02-10 10:50:38','deleted_at' => NULL,'slug' => 'chirugical-1581331838'),
  array('id' => '157','dossier_medical_id' => '92','description' => 'G10P5505 ; ménopausée il y a environ 10 ans','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2020-02-10 10:51:22','updated_at' => '2020-02-10 10:51:22','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1581331882'),
  array('id' => '158','dossier_medical_id' => '94','description' => 'Prostatectomie en 2010','date' => NULL,'type' => 'Chirugical','created_at' => '2020-02-13 15:47:12','updated_at' => '2020-02-13 15:47:12','deleted_at' => NULL,'slug' => 'chirugical-1581608832'),
  array('id' => '159','dossier_medical_id' => '94','description' => 'RAS','date' => NULL,'type' => 'Médical','created_at' => '2020-02-14 11:33:00','updated_at' => '2020-02-14 11:33:00','deleted_at' => NULL,'slug' => 'medical-1581679980'),
  array('id' => '160','dossier_medical_id' => '97','description' => 'RAS','date' => NULL,'type' => 'Médical','created_at' => '2020-02-14 12:12:27','updated_at' => '2020-02-14 12:12:27','deleted_at' => NULL,'slug' => 'medical-1581682347'),
  array('id' => '161','dossier_medical_id' => '97','description' => '° K13 ( 4-5 jours/ 28 jours); cycle régulier, pas de dysménorrhée; pas de métrorragie, pas de ménorragie, DDR: 20/01/20
°Coïtarche: 17 ans ; PSC: 3 ; PSA: 1 ; pas de dyspareunie , ni de saignement post coïtal.
°Contraception: compte son cycle
°IST: non
°Leucorrhées: couleur blanchâtre, de moyenne abondance , non fétide
°dépistage cancer du col de l\'utérus fait en 2018 (n\'ayant présenté aucune anomalie selon la patiente)

°G7P5025 (2 IVG ; 3 filles + 2 garçons) G1 et G2 : IVG
G3: en 2007; accouchement normal à terme d\'un enfant de sexe masculin ayant pesé 3800grs

G4: en 2010; accouchement normal à terme d\'un enfant de sexe feminin ayant pesé 3300grs

G5: en 2012; accouchement normal à terme d\'un enfant de sexe masculin ayant pesé 3800grs

G6: en 2015; accouchement normal à terme d\'un enfant de sexe feminin ayant pesé 3000grs (enfant atteint de trisomie 21)

G7: en 2018; accouchement à terme d\'un enfant de sexe feminin ayant pesé 3300grs ( 9 mois plustard la patiente note un écoulement mammaire gauche purulent te sanguinolent ce qui avait motivé une consultation chez Dr SANDJON ; des bilans ont été réalisé notament une mammographie , une échographie mammaire, et un examen anatomopatholigique dont les résultats sont non disponibles, mais n\'ayant rien montré en faveur d\'un processus malin selon la patiente.','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2020-02-14 12:13:23','updated_at' => '2020-02-14 12:13:23','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1581682403'),
  array('id' => '162','dossier_medical_id' => '97','description' => '*ascendants: grand-mère HTA. Grand-père et père DT2,
*collatéraux: 2ème/35 enfants ( issus d\'un foyer polygamique) et 2ème/5 coté maternel (4 filles + 1 garçon) ; fratrie en bonne santé apparente
*descendants: 5 enfants (3 filles + 2 garçons ); 1 fille de 5 ans atteint de trisomie 21 , le reste en bonne santé apparente.','date' => NULL,'type' => 'Familial','created_at' => '2020-02-14 12:14:03','updated_at' => '2020-02-14 12:14:03','deleted_at' => NULL,'slug' => 'familial-1581682443'),
  array('id' => '163','dossier_medical_id' => '93','description' => 'Gastralgie connue  évoluant depuis plus de 04ans non explorée
 Lombalgie  chronique évoluant depuis plus de 07 ans','date' => NULL,'type' => 'Médical','created_at' => '2020-02-14 15:54:57','updated_at' => '2020-06-17 11:22:47','deleted_at' => NULL,'slug' => 'medical-1581695697'),
  array('id' => '164','dossier_medical_id' => '93','description' => 'G6P4014
	Ménopausée
Frottis cervico-vaginal jamais réalisé','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2020-02-14 15:55:46','updated_at' => '2020-06-17 13:33:34','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1581695746'),
  array('id' => '165','dossier_medical_id' => '98','description' => 'HTA non contrôlée
Gastralgie  chronique Lombalgie  chronique','date' => NULL,'type' => 'Médical','created_at' => '2020-02-17 10:55:39','updated_at' => '2020-02-17 10:55:39','deleted_at' => NULL,'slug' => 'medical-1581936939'),
  array('id' => '166','dossier_medical_id' => '98','description' => 'G5P5005
	Ménopausée','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2020-02-17 10:55:58','updated_at' => '2020-02-17 10:55:58','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1581936958'),
  array('id' => '167','dossier_medical_id' => '99','description' => '^problème auditif depuis environ15 ans évoluant par crise à type de prurit du conduit auditif unilatéral au depart puis douloureux , associé a une éruption cutanée locale pouvant irradié du côté controlatéral , au scalp ou à l\'hémiface homolatérale.On note la fréquence des crises estimée à 1-2 / an (essai diagnostic étiologique évoqués lors de multiples consultations: allergique;
nerveuse; mycosique ).

^Déclarée goutteuse mais non traitée

^Arthrose non documentée

^Dépression il y\'a environ 15 ans (nouvel épisode il y\'a 3 semaines)','date' => NULL,'type' => 'Médical','created_at' => '2020-02-19 16:15:19','updated_at' => '2020-02-19 16:16:40','deleted_at' => NULL,'slug' => 'medical-1582128919'),
  array('id' => '168','dossier_medical_id' => '99','description' => '^ménopausée depuis 15 ans environ (pas sous traitement hormonal
substitutif)
^dépistage cancer du col et du sein fait il ya 4 ans sans particularité (non
documenté)
G7P4123 (1 grossesse gemellaire prématurée avec décès néonatal; 1 enfant
décédé à l\'âge de 2 ans; 2 avortement spontanés; 3 enfants vivants','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2020-02-19 16:42:43','updated_at' => '2020-02-19 16:42:43','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1582130563'),
  array('id' => '169','dossier_medical_id' => '99','description' => 'mère, grande soeur et petite soeur HTA et DT2
- Facteurs de risque cardiovasculaires
* non modifiables : age, ménopause
* modifiables : obésité grade 1, actvité physique pas régulière','date' => NULL,'type' => 'Familial','created_at' => '2020-02-19 16:43:30','updated_at' => '2020-02-19 16:43:30','deleted_at' => NULL,'slug' => 'familial-1582130610'),
  array('id' => '170','dossier_medical_id' => '89','description' => 'Hypertension artérielle','date' => '2020-02-01','type' => 'Médical','created_at' => '2020-02-20 09:31:08','updated_at' => '2020-02-20 09:31:08','deleted_at' => NULL,'slug' => 'medical-1582191068'),
  array('id' => '171','dossier_medical_id' => '101','description' => 'Notion d’exophtalmie résolutive sous Chophytol ?! HTA(-) diabète (-)','date' => NULL,'type' => 'Médical','created_at' => '2020-03-09 18:09:58','updated_at' => '2020-03-09 18:09:58','deleted_at' => NULL,'slug' => 'medical-1583777398'),
  array('id' => '172','dossier_medical_id' => '101','description' => 'N’a jamais subi d’intervention chirurgicale','date' => NULL,'type' => 'Chirugical','created_at' => '2020-03-09 18:10:32','updated_at' => '2020-03-09 18:10:32','deleted_at' => NULL,'slug' => 'chirugical-1583777432'),
  array('id' => '173','dossier_medical_id' => '102','description' => 'G7P7007
• Ménopause :45 ans
• Dépistage du cancer du col en 2018 par FCV','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2020-03-09 19:53:39','updated_at' => '2020-03-09 19:53:39','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1583783619'),
  array('id' => '174','dossier_medical_id' => '102','description' => 'épigastralgie intermittente ; HTA (-) diabète (-)','date' => NULL,'type' => 'Médical','created_at' => '2020-03-09 19:54:19','updated_at' => '2020-03-09 19:54:19','deleted_at' => NULL,'slug' => 'medical-1583783659'),
  array('id' => '175','dossier_medical_id' => '102','description' => 'hystérectomie totale en 2018 pour suspicion de Neo du col utérin sur ménométrorragie. Elle aurait bénéficié de 0 séances de chimiothérapie non documentées','date' => NULL,'type' => 'Chirugical','created_at' => '2020-03-09 19:55:03','updated_at' => '2020-03-09 19:55:03','deleted_at' => NULL,'slug' => 'chirugical-1583783703'),
  array('id' => '176','dossier_medical_id' => '103','description' => 'pathologie prostatique (HBP probable) diagnostic il y a 20 ans non PEC. Traitement actuel à bas de plantes naturelles.','date' => NULL,'type' => 'Médical','created_at' => '2020-03-09 20:14:01','updated_at' => '2020-03-09 20:14:01','deleted_at' => NULL,'slug' => 'medical-1583784841'),
  array('id' => '177','dossier_medical_id' => '104','description' => 'Diabète 0
Dysthyroïdies 0
HTA 0
Cancers 0
Thromboemboliques 0
Autres 0
Cardiovasculaires / AVC et IDM 0','date' => NULL,'type' => 'Familial','created_at' => '2020-03-11 22:11:27','updated_at' => '2020-03-11 22:11:27','deleted_at' => NULL,'slug' => 'familial-1583964687'),
  array('id' => '178','dossier_medical_id' => '104','description' => 'HTA 0
Dyslipidémie 0
Diabète 0
Notes 0','date' => NULL,'type' => 'Médical','created_at' => '2020-03-11 22:11:43','updated_at' => '2020-03-11 22:11:43','deleted_at' => NULL,'slug' => 'medical-1583964703'),
  array('id' => '179','dossier_medical_id' => '104','description' => 'Appendicectomie Non
Chirurgie pelvienne 0
Notes 0','date' => NULL,'type' => 'Chirugical','created_at' => '2020-03-11 22:12:09','updated_at' => '2020-03-11 22:12:09','deleted_at' => NULL,'slug' => 'chirugical-1583964729'),
  array('id' => '180','dossier_medical_id' => '91','description' => 'HTA : sous Amlo 5mg 1cp/jour ; Losartan 50mg : 1/2cp/jour ; Aspégic 81mg : 1cp/jour
                       Diabète = 0','date' => NULL,'type' => 'Médical','created_at' => '2020-03-12 16:13:19','updated_at' => '2020-03-12 16:13:19','deleted_at' => NULL,'slug' => 'medical-1584029599'),
  array('id' => '181','dossier_medical_id' => '105','description' => 'une tumeur maligne du sein pour laquelle elle a subi une chirurgie
axillaire gauche et plusieurs séances de radio et chimiothérapie','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2020-03-13 13:52:04','updated_at' => '2020-03-13 13:52:04','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1584107524'),
  array('id' => '182','dossier_medical_id' => '105','description' => 'une épigastralgie chronique sous Esoméprazole 20mg,une HTA sous Olmésartan 10mg et une insuffisance rénale
chronique au stade 4','date' => NULL,'type' => 'Médical','created_at' => '2020-03-13 13:56:53','updated_at' => '2020-03-13 13:56:53','deleted_at' => NULL,'slug' => 'medical-1584107813'),
  array('id' => '183','dossier_medical_id' => '107','description' => '-Diabétique connu depuis 06 ans sous Metformine 1000mg cp: 1cp/jr

-Glaucome  depuis plu de 10 ans.

-Adénome prostatique diagnostiqué il y a plusieurs années, traitement interrompu par le patient','date' => NULL,'type' => 'Médical','created_at' => '2020-03-19 15:54:22','updated_at' => '2020-06-24 18:17:31','deleted_at' => NULL,'slug' => 'medical-1584633262'),
  array('id' => '184','dossier_medical_id' => '107','description' => 'Chirurgie occulaire indiquee pour cataracte de l oeil gauche','date' => NULL,'type' => 'Chirugical','created_at' => '2020-03-19 15:55:00','updated_at' => '2020-03-19 15:55:00','deleted_at' => NULL,'slug' => 'chirugical-1584633300'),
  array('id' => '185','dossier_medical_id' => '104','description' => 'AIT','date' => '2020-03-09','type' => 'Médical','created_at' => '2020-03-20 10:59:16','updated_at' => '2020-03-20 10:59:16','deleted_at' => NULL,'slug' => 'medical-1584701956'),
  array('id' => '186','dossier_medical_id' => '108','description' => 'Césarienne en 2016 indiquée pour SFA sur macrosomie fœtale','date' => '2006-01-01','type' => 'Gynéco-obstétrique','created_at' => '2020-03-20 11:45:56','updated_at' => '2020-03-20 11:45:56','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1584704756'),
  array('id' => '187','dossier_medical_id' => '109','description' => 'ménopausée G4P4004','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2020-03-20 16:09:37','updated_at' => '2020-03-20 16:09:37','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1584720577'),
  array('id' => '188','dossier_medical_id' => '111','description' => 'hypertension artérielle connue depuis 10 ans sous Âmlodipine 1-0 et Détensiel 10,
l\'obésité
 ménopause\'','date' => NULL,'type' => 'Médical','created_at' => '2020-03-24 10:06:59','updated_at' => '2020-03-24 10:06:59','deleted_at' => NULL,'slug' => 'medical-1585044419'),
  array('id' => '189','dossier_medical_id' => '114','description' => 'Immunodéprimé au HIV depuis plusieurs années non observant 
 Diarrhées fréquentes prise en charge par plusieurs automédications depuis plusieurs années','date' => NULL,'type' => 'Médical','created_at' => '2020-03-24 11:20:52','updated_at' => '2020-03-24 11:20:52','deleted_at' => NULL,'slug' => 'medical-1585048852'),
  array('id' => '190','dossier_medical_id' => '117','description' => '⦁ Ulcère gastrique chronique sous Oméprazole 20mg, fait une fibroscopie il y\'a 4 ans environ en Allemagne. 
⦁ Hépatite C suivie il y\'a 2 ans par le docteur KOWO au CHU de Ydé. Déclarée guérie selon la patiente. 
⦁ Hypertension artérielle depuis 2 ans de découverte lors d\'un examen de routine à l\' HJY, sous Mésures hygiéno-diététique, TA bien équilibré selon la patiente, pas de bilans de lésion d\'organe cible fait.  
⦁ Arthrose multifocale (lombaire, cheville, genou droit) sous AINS et Myorelaxant ⦁ Myopie sous verres correcteurs','date' => NULL,'type' => 'Médical','created_at' => '2020-03-24 12:04:05','updated_at' => '2020-03-24 12:04:05','deleted_at' => NULL,'slug' => 'medical-1585051445'),
  array('id' => '191','dossier_medical_id' => '117','description' => 'Ostéosynthèse sur fracture du fémur gauche il y a 15 ans','date' => NULL,'type' => 'Chirugical','created_at' => '2020-03-24 12:05:15','updated_at' => '2020-03-24 12:05:15','deleted_at' => NULL,'slug' => 'chirugical-1585051515'),
  array('id' => '192','dossier_medical_id' => '117','description' => 'G5P4014    Ménopausée depuis plusieurs années , non suivie par un gynécologue,  FCV fait il y\'a un an : normal ( résultat non documenté), Mammographie faite il y\'a un an: normal (resultat non documenté).','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2020-03-24 12:05:57','updated_at' => '2020-03-24 12:05:57','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1585051557'),
  array('id' => '193','dossier_medical_id' => '117','description' => '⦁ Hypertension artérielle chez le papa et la maman ⦁ Accident Vasculaire cérébral chez le papa à l’âge de 80 ans et chez la maman à l’âge de 72 ans. ⦁ Diabète chez le papa ⦁ Gastralgie chez le papa Cancer de la prostate chez le papa à l’âge de 60 ans environ.','date' => NULL,'type' => 'Familial','created_at' => '2020-03-24 12:19:47','updated_at' => '2020-03-24 12:19:47','deleted_at' => NULL,'slug' => 'familial-1585052387'),
  array('id' => '194','dossier_medical_id' => '118','description' => 'HTA connue depuis 1mois sous traitement (Detensiel : bisoprolol* 1cp/jr )','date' => NULL,'type' => 'Médical','created_at' => '2020-03-30 10:04:35','updated_at' => '2020-03-30 10:04:35','deleted_at' => NULL,'slug' => 'medical-1585566275'),
  array('id' => '195','dossier_medical_id' => '121','description' => 'ID au VIH connu depuis 2003 sous Tenofovir-Lamivudine-Efavirenz.
charge virale realise il y a 03 mois est non-documente','date' => NULL,'type' => 'Médical','created_at' => '2020-04-03 09:59:16','updated_at' => '2020-04-03 09:59:16','deleted_at' => NULL,'slug' => 'medical-1585911556'),
  array('id' => '196','dossier_medical_id' => '124','description' => 'Malaria simple','date' => NULL,'type' => 'Médical','created_at' => '2020-04-08 12:28:10','updated_at' => '2020-04-08 12:28:10','deleted_at' => NULL,'slug' => 'medical-1586352490'),
  array('id' => '197','dossier_medical_id' => '127','description' => 'dernier déparasitage inconnu, pas de maladie chronique','date' => NULL,'type' => 'Médical','created_at' => '2020-04-09 13:31:38','updated_at' => '2020-04-09 13:31:38','deleted_at' => NULL,'slug' => 'medical-1586442698'),
  array('id' => '198','dossier_medical_id' => '129','description' => 'Epigastralgies
Œsophagite à béance cardinale
Toux irritative avec sensation de vers dans la gorge','date' => NULL,'type' => 'Médical','created_at' => '2020-04-13 10:23:47','updated_at' => '2020-04-13 10:23:47','deleted_at' => NULL,'slug' => 'medical-1586777027'),
  array('id' => '199','dossier_medical_id' => '129','description' => 'Césarienne il y a deux ans','date' => NULL,'type' => 'Chirugical','created_at' => '2020-04-13 10:24:52','updated_at' => '2020-04-13 10:24:52','deleted_at' => NULL,'slug' => 'chirugical-1586777092'),
  array('id' => '200','dossier_medical_id' => '129','description' => 'G1P001
DDR 21.03.2020','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2020-04-13 10:25:34','updated_at' => '2020-04-13 10:25:34','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1586777134'),
  array('id' => '201','dossier_medical_id' => '131','description' => '-Sœur de sa grande mère HTA
-Grande mère diabétique','date' => NULL,'type' => 'Familial','created_at' => '2020-04-14 07:39:24','updated_at' => '2020-04-14 07:39:24','deleted_at' => NULL,'slug' => 'familial-1586853564'),
  array('id' => '202','dossier_medical_id' => '130','description' => '- K11(3/26), regulier,  dysménorrhées:+ ; 
-coïtarche :17 ans , dyspareunies: +/- ; IST: chlamydia:/ ; mycoplasme:/; PCV :+ traité,  
- kyste:/ ; myomes: +/- 
-contraception : depo provera 
- FCV: non 
- autopalpation mammaire: non','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2020-04-14 08:35:01','updated_at' => '2020-04-14 08:35:01','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1586856901'),
  array('id' => '203','dossier_medical_id' => '130','description' => 'Aucune pathologie chronique connue','date' => NULL,'type' => 'Médical','created_at' => '2020-04-14 08:35:44','updated_at' => '2020-04-14 08:35:44','deleted_at' => NULL,'slug' => 'medical-1586856944'),
  array('id' => '204','dossier_medical_id' => '130','description' => 'Jamais opérée','date' => NULL,'type' => 'Chirugical','created_at' => '2020-04-14 08:36:12','updated_at' => '2020-04-14 08:36:12','deleted_at' => NULL,'slug' => 'chirugical-1586856972'),
  array('id' => '205','dossier_medical_id' => '130','description' => 'Conjoint:
- âgé de 31 ans , sans enfants, inspecteur du trésor, pas de pathologie chroniques connues , n\'a jamais été opéré 
-spermogramme: 
 *volume: 2ml
 *nombre: 56 millions 
 *mobilité : A:80% ; B:30%
 *vitalité :80%
 *morphologie: normale à 40%
 Conclusion: leucospermie
-vie commune :conjoint résident au nord','date' => NULL,'type' => 'Familial','created_at' => '2020-04-14 08:42:41','updated_at' => '2020-04-14 08:42:41','deleted_at' => NULL,'slug' => 'familial-1586857361'),
  array('id' => '206','dossier_medical_id' => '95','description' => 'Pneumonie','date' => NULL,'type' => 'Médical','created_at' => '2020-04-16 20:38:45','updated_at' => '2020-04-16 20:38:45','deleted_at' => NULL,'slug' => 'medical-1587073125'),
  array('id' => '207','dossier_medical_id' => '133','description' => 'Epigastralgie intermittente sans médication','date' => NULL,'type' => 'Médical','created_at' => '2020-04-18 13:13:42','updated_at' => '2020-04-18 13:13:42','deleted_at' => NULL,'slug' => 'medical-1587219222'),
  array('id' => '208','dossier_medical_id' => '133','description' => 'DDR : 24/07/19 G2P0020 (IVG et avortement spontané) 
Cycle : 23-24 jours irrégulier
 Contraception : aucune Dépistage du cancer du col : jamais réalisé','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2020-04-18 13:14:21','updated_at' => '2020-04-18 13:14:21','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1587219261'),
  array('id' => '209','dossier_medical_id' => '133','description' => 'Ascendants en bonne santé apparente - Fratrie : 4e née d’une famille de 5 enfants en bonne santé apparente - Pas de maladie génétique','date' => NULL,'type' => 'Familial','created_at' => '2020-04-18 13:14:48','updated_at' => '2020-04-18 13:14:48','deleted_at' => NULL,'slug' => 'familial-1587219288'),
  array('id' => '210','dossier_medical_id' => '136','description' => 'Hypertension artérielle','date' => '2014-01-01','type' => 'Médical','created_at' => '2020-04-18 15:26:30','updated_at' => '2020-04-18 15:26:30','deleted_at' => NULL,'slug' => 'medical-1587227190'),
  array('id' => '211','dossier_medical_id' => '137','description' => 'Diabète de Type 2 suivi (équilibré??) par Glucophage 1000mg 1-0-1 et Diapride 1Cp/jour','date' => '1992-01-01','type' => 'Médical','created_at' => '2020-04-19 12:47:05','updated_at' => '2020-04-19 12:47:05','deleted_at' => NULL,'slug' => 'medical-1587304025'),
  array('id' => '212','dossier_medical_id' => '137','description' => 'Glaucome','date' => NULL,'type' => 'Médical','created_at' => '2020-04-19 12:47:30','updated_at' => '2020-04-19 12:47:30','deleted_at' => NULL,'slug' => 'medical-1587304050'),
  array('id' => '213','dossier_medical_id' => '137','description' => '"Résection colique" dans le cadre d\'un ADC par Dr Tchanfong à la Clinique Saint Joseph à Yaoundé','date' => '2019-08-01','type' => 'Chirugical','created_at' => '2020-04-19 12:49:16','updated_at' => '2020-04-19 12:49:16','deleted_at' => NULL,'slug' => 'chirugical-1587304156'),
  array('id' => '214','dossier_medical_id' => '137','description' => 'Exploration chirurgicale sous anesthésie locale: Prélèvement d\'une masse néo-formée sur la ligne blanche en sous ombilicale et analyse. Par Dr Tchanfong Yaoundé','date' => '2020-03-12','type' => 'Chirugical','created_at' => '2020-04-19 12:53:47','updated_at' => '2020-04-19 12:53:47','deleted_at' => NULL,'slug' => 'chirugical-1587304427'),
  array('id' => '215','dossier_medical_id' => '137','description' => 'Hémorroïdes > fistules. Persiste de ns jours sans une plainte particulière','date' => '1987-01-01','type' => 'Médical','created_at' => '2020-04-19 13:02:12','updated_at' => '2020-04-19 13:02:12','deleted_at' => NULL,'slug' => 'medical-1587304932'),
  array('id' => '216','dossier_medical_id' => '138','description' => 'Hypertension artérielle','date' => '2000-01-01','type' => 'Médical','created_at' => '2020-04-20 06:02:02','updated_at' => '2020-04-20 06:02:57','deleted_at' => NULL,'slug' => 'medical-1587366122'),
  array('id' => '217','dossier_medical_id' => '138','description' => 'Dyslipidémie','date' => '2000-01-01','type' => 'Médical','created_at' => '2020-04-20 06:05:53','updated_at' => '2020-04-20 06:05:53','deleted_at' => NULL,'slug' => 'medical-1587366353'),
  array('id' => '218','dossier_medical_id' => '138','description' => 'Obésité morbide','date' => NULL,'type' => 'Médical','created_at' => '2020-04-20 06:06:16','updated_at' => '2020-04-20 06:06:16','deleted_at' => NULL,'slug' => 'medical-1587366376'),
  array('id' => '219','dossier_medical_id' => '138','description' => 'Traumatisme sévère craniofacial post AVP','date' => '1995-01-01','type' => 'Chirugical','created_at' => '2020-04-20 06:06:47','updated_at' => '2020-04-20 06:06:47','deleted_at' => NULL,'slug' => 'chirugical-1587366407'),
  array('id' => '220','dossier_medical_id' => '138','description' => 'G5P1041 ménopausée à l\'âge de 40 ans','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2020-04-20 06:07:36','updated_at' => '2020-04-20 06:07:36','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1587366456'),
  array('id' => '221','dossier_medical_id' => '138','description' => 'Diabète de type 2 chez la mère 
Cancer du sein chez 2 sœurs de la mère et cousine','date' => NULL,'type' => 'Familial','created_at' => '2020-04-20 06:08:53','updated_at' => '2020-04-20 06:08:53','deleted_at' => NULL,'slug' => 'familial-1587366533'),
  array('id' => '222','dossier_medical_id' => '139','description' => '-Lombarthrose pris en charge par kinésithérapie
- pas d\'HTA ,pas de diabète 
- epigastralgie: +/-','date' => '2018-01-01','type' => 'Médical','created_at' => '2020-04-20 12:48:10','updated_at' => '2020-04-20 13:29:12','deleted_at' => '2020-04-20 13:29:12','slug' => 'medical-1587390490'),
  array('id' => '223','dossier_medical_id' => '139','description' => 'Jamais opérée','date' => NULL,'type' => 'Chirugical','created_at' => '2020-04-20 12:48:30','updated_at' => '2020-04-20 12:48:30','deleted_at' => NULL,'slug' => 'chirugical-1587390510'),
  array('id' => '224','dossier_medical_id' => '139','description' => 'lombarthrose pris en charge par kinésithérapie','date' => NULL,'type' => 'Médical','created_at' => '2020-04-20 14:36:50','updated_at' => '2020-04-20 14:36:50','deleted_at' => NULL,'slug' => 'medical-1587397010'),
  array('id' => '225','dossier_medical_id' => '139','description' => 'G10P7035 (1 mort né; 3 fausses couches spontanées, 1 enfant décédé)
dépistage des cancers du col de l\'utérus et du sein fait en 2017 aucune anomalie décelée
ménopausée depuis plus de 20ans  ; pas de traitement hormonal substitutif','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2020-04-20 14:42:06','updated_at' => '2020-04-20 14:42:06','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1587397326'),
  array('id' => '226','dossier_medical_id' => '139','description' => 'père et mère diabétiques','date' => NULL,'type' => 'Familial','created_at' => '2020-04-20 14:42:45','updated_at' => '2020-04-20 14:42:45','deleted_at' => NULL,'slug' => 'familial-1587397365'),
  array('id' => '227','dossier_medical_id' => '140','description' => 'Pas d\'HTA ,pas de Diabète,','date' => NULL,'type' => 'Médical','created_at' => '2020-04-21 08:27:06','updated_at' => '2020-04-21 08:27:06','deleted_at' => NULL,'slug' => 'medical-1587461226'),
  array('id' => '228','dossier_medical_id' => '140','description' => 'Mère diabétique DCD
Grande sœur hypertendue','date' => NULL,'type' => 'Familial','created_at' => '2020-04-21 08:28:22','updated_at' => '2020-04-21 08:28:22','deleted_at' => NULL,'slug' => 'familial-1587461302'),
  array('id' => '229','dossier_medical_id' => '140','description' => 'G7P7006 (un enfant DCD)
Ménopausée depuis 3 ans , pas de traitement hormonal substitutif.
Dépistage des cancers du col de l\'utérus et du sein jamais fait.','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2020-04-21 08:31:43','updated_at' => '2020-04-21 08:31:43','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1587461503'),
  array('id' => '230','dossier_medical_id' => '141','description' => 'douleurs abdominales chroniques ayant bénéficié de plusieurs investigations.
✓ 2016
1. ENDOSCOPIE PHARYNGEE indiquée pour douleur pharyngée
Conclusion : Pharyngo-laryngite sur RGO
CAT: INNEXIUM, DISLEP, PEPSANE, LAROXYL
2. ECHOGRAPHIE ABDOMINALE indiquée pour douleurs épigastriques sur FIG
Conclusion : importante aérobilie, troubles dyspepsiques

2017
1. Suivie par Pr. MAPOURE Neurologue HGD pour NTJ + crampes intenses traitée sous LAROXYL gouttes ➔ 15 gouttes le soir au coucher dans ½ verre d’eau et HEXAQUINE ➔ 1 – 1 – 1
2. TDM ABDOMINO-PELVIEN indiqué pour douleur flanc gauche par Dr. MASSOM Annie Chirurgien Viscéral HGD
Conclusion : pas d’anomalie abdominale pouvant expliquer ces symptômes ; lombodiscarthrose modérée
CAT : CATAFLAM, MIOREL
✓ 2019
1. FIBROSCOPIE DIGESTIVE HAUTE indiquée pour douleurs de l’hypochondre gauche par Dr. BEKOLO Winnie Hépato-Gastro-Entérologue HGD
Conclusion : Aspect de gastropathie antrale pétéchiale ; test à l’urée (+)
CAT : OMICAP 20 + CLAMOXYL 1G + FLAGYL 500 + CLARIWIN 500 ➔ 1 – 0 – 1 pendant 14 jrs
2. COLONOSCOPIE TOTALE indiqué pour douleurs abdominales par Dr. BEKOLO Winnie Hépato-Gastro-Entérologue HGD
Conclusion : Exérèse d’un micro polype (diamètre < 5 mm) du colon ; résultats d’anatomo-pathologie en instance','date' => NULL,'type' => 'Médical','created_at' => '2020-04-22 06:26:03','updated_at' => '2020-04-22 06:26:03','deleted_at' => NULL,'slug' => 'medical-1587540363'),
  array('id' => '231','dossier_medical_id' => '141','description' => 'Ménopausée depuis plus d’une dizaine d’années.
o Dépistage du cancer du col de l’utérus en 2010 : pas de malignité au FCV
o Dépistage du cancer du sein : jamais réalisé','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2020-04-22 06:26:21','updated_at' => '2020-04-22 06:26:21','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1587540381'),
  array('id' => '232','dossier_medical_id' => '141','description' => 'Conjoint décédé en 2010 de suite d’un néo de la gorge non documenté.
- Mère de 04 enfants en bonne état de santé apparente','date' => NULL,'type' => 'Familial','created_at' => '2020-04-22 06:26:44','updated_at' => '2020-04-22 06:26:44','deleted_at' => NULL,'slug' => 'familial-1587540404'),
  array('id' => '233','dossier_medical_id' => '142','description' => 'Pas de pathologie chroniques connues','date' => NULL,'type' => 'Médical','created_at' => '2020-04-22 08:14:30','updated_at' => '2020-04-22 08:14:30','deleted_at' => NULL,'slug' => 'medical-1587546870'),
  array('id' => '234','dossier_medical_id' => '142','description' => 'G1P1 (fille âgée de 2ans), accouchement par voie basse compliqué de déchirure du périné
Menstruations régulières , pas de dysménorrhées','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2020-04-22 08:19:06','updated_at' => '2020-04-22 08:19:06','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1587547146'),
  array('id' => '235','dossier_medical_id' => '135','description' => 'Colectomie en 2018 indiqué pour cancer colorectal','date' => NULL,'type' => 'Chirugical','created_at' => '2020-04-23 12:08:25','updated_at' => '2020-04-23 12:08:25','deleted_at' => NULL,'slug' => 'chirugical-1587647305'),
  array('id' => '236','dossier_medical_id' => '145','description' => '*Immunologiques: état vaccinal à jour pour l\'âge    °BCG + VPO 0 faits le 12/09/19   °Pent 1 + Pnaumo13 1 + ROTA 1 faits le 17/10/19   °ROTA 2 + Pneumo 2 + Penta 2 + VPO 2 faits le 21/11/19   °Pneumo 3 + Penta 3 + VPI + VPO 3 faits le 26/12/19    °Vitamine "A" fait le 05/03/20   °Rendez-vous vaccinal le 04/06/20','date' => NULL,'type' => 'Médical','created_at' => '2020-04-27 15:00:29','updated_at' => '2020-04-27 15:00:29','deleted_at' => NULL,'slug' => 'medical-1588003229'),
  array('id' => '237','dossier_medical_id' => '145','description' => '*histoire de la grossesse: nourisson né à terme par césarienne sous rachianesthésie
*périnataux: cri immédiat ; inhalation du liquide amniotique ( mis sous traitement:?) , poids de naissance 4100grs  
*Alimentation:    ° Sous allaitement mixte jusqu\'à 7 mois   ° Sevré il y a 2 semaines    ° Alimentation actuelle faite de: blédine; cerelac; bouillies; legumes (carotte); +/- plats familiaux (poisson, pomme, poulet)   ° Horaires de repas (selon la maman): 
    06h : 120 - 150 ml de biberon ocmposé de blédine + lait NAN optipro       10h: 1 œuf      12 - 13h: pomme, soit poulet, soit poissons      21h: 180ml de biberon      si reveil à 03h : 120 - 150ml de biberon , ou de l\'eau
*Evolution du poids depuis la naissance :    °A la naissance (04/09/19) : 4100 grs    °Le 17/10/19:  6010 grs    °Le 21/11/19: 8300 grs    °Le 26/12/19: 9300 grs    °Le 27/04/20: 12.4 kg *langage: dit "papa" et "mama"
*circoncit il ya environ 6 mois 
*dentition: machoire supérieure (4 incisives ) ; machoire inférieure (2 incisives médianes , et une incisive latérale gauche en poussée) 
* fratrie: 1er né côté maternel et 4e/4 côté paternel 
- Familiaux * pas de notion de drépanocytose *Ehb mère: "AA"  ; Ehb père: ?','date' => NULL,'type' => 'Familial','created_at' => '2020-04-27 15:02:26','updated_at' => '2020-04-27 15:02:26','deleted_at' => NULL,'slug' => 'familial-1588003346'),
  array('id' => '238','dossier_medical_id' => '146','description' => 'Depuis près de 04 ans, le patient présenterait des mouvements anormaux de la mandibule et de langue d’installation progressive avec comme symptômes initiaux des clignotements des paupières supérieures associée à une baisse de l’acuité visuelle, le tout survenant de façon quotidienne et intermittente sans notion déficit sensitivomoteur, douleurs articulaires ni rash associé en contexte d’apyrexie. Une consultation ophtalmologique a donc été effectuée sans suite favorable et le patient aurait été transféré en consultation neurologique. Depuis lors, plusieurs consultations neurologiques ont été effectuées, notamment à l’hôpital régional de Bafoussam où il aurait été pris en charge avec du CLONAZEPAM gouttes, puis dans plusieurs centres de santé de la place où les différents traitements institués étaient à base de CARBAMAZEPINE et d’AMYTRIPTILINE. Puis une consultation a été faite à la clinique TOURNEQUOIS à Douala où un traitement à base de MODOPAR 150 et URBANYL 10 a été institué avec amendement des mouvements anormaux mais comme effet secondaire une asthénie profonde avec altération du mode de vie, ensuite à la clinique des POTIERS où il aurait été mis sous LIORESAL, puis dans plusieurs autres formations sanitaires et depuis Janvier 2019 à l’hôpital Laquintinie de Douala où il aurait été hospitalié en service de neurologie et suivi en consultation externe par le Pr KUATE.
Il nous est donc transféré par la famille pour avis ORL et Odontostomato.','date' => NULL,'type' => 'Médical','created_at' => '2020-04-29 13:28:55','updated_at' => '2020-04-29 13:33:50','deleted_at' => '2020-04-29 13:33:50','slug' => 'medical-1588170535'),
  array('id' => '239','dossier_medical_id' => '146','description' => 'Immuno-allergiques
GsRh : AB positif selon le patient
Aucune allergie connue
Pas de transfusion sanguine à son actif
Electrophorèse de l’hémoglobine inconnue','date' => NULL,'type' => 'Médical','created_at' => '2020-04-29 13:29:12','updated_at' => '2020-04-29 13:29:12','deleted_at' => NULL,'slug' => 'medical-1588170552'),
  array('id' => '240','dossier_medical_id' => '146','description' => 'La sœur cadette aurait présenté une symptomatologie à type de clignotement des paupières identique à la sienne il y a près de 9 ans mais avec disparition des symptômes
Pas de symptômes identiques chez les ascendants','date' => NULL,'type' => 'Familial','created_at' => '2020-04-29 13:30:18','updated_at' => '2020-04-29 13:30:18','deleted_at' => NULL,'slug' => 'familial-1588170618'),
  array('id' => '241','dossier_medical_id' => '110','description' => 'Notion de douleur mammaire droit ressenti lors d’un examen sénologique (palpation 
bilatérale mammaire) pour dépistage du cancer du sein dans une formation sanitaire 
à Yaoundé (KULENDA MEDICAL) non documenté ;
✓ Notion de lombalgie chronique d’allure mécanique évoluant par poussée ayant 
bénéficié d’un traitement à base d’antiinflammatoire/antalgique non précisé ;
✓ Notion d’épigastralgie irradiant vers le rachis dorsal spontanément résolutive sans 
traitement de fond évoluant par poussées ;
✓ Douleur à type de crampe intéressant les phalanges et l’articulation des poignets, 
bénéficiant d’un traitement à base ARNICA D12 prescrit lors d’un séjour en 
Allemagne.
✓ Pas de diabète
✓ Pas d’HTA','date' => NULL,'type' => 'Médical','created_at' => '2020-05-01 10:39:50','updated_at' => '2020-05-01 10:39:50','deleted_at' => NULL,'slug' => 'medical-1588333190'),
  array('id' => '242','dossier_medical_id' => '110','description' => 'G8P8008
✓ Ménopause à 45 ans
✓ Dépistage du cancer du sein : aucune mammographie réalisée, mais examen 
sénologique par palpation bimanuelle faite, la plus récente remonte à 4 jours.
✓ Dépistage du cancer du col de l’utérus fait lors de plusieurs consultations antérieures 
non documentées.','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2020-05-01 10:43:10','updated_at' => '2020-05-01 10:43:10','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1588333390'),
  array('id' => '243','dossier_medical_id' => '118','description' => '- arthrose de la tête fémorale gauche
- marche avec des béquilles ( à cause de l\'arthrose)','date' => NULL,'type' => 'Médical','created_at' => '2020-05-01 11:18:51','updated_at' => '2020-05-01 11:18:51','deleted_at' => NULL,'slug' => 'medical-1588335531'),
  array('id' => '244','dossier_medical_id' => '118','description' => '- pas de notion de cancer de la prostate dans la famille
- père décédé à plus de 80 ans','date' => NULL,'type' => 'Familial','created_at' => '2020-05-01 11:21:22','updated_at' => '2020-05-01 11:21:22','deleted_at' => NULL,'slug' => 'familial-1588335682'),
  array('id' => '245','dossier_medical_id' => '151','description' => 'Asthmatique connue depuis plus de 35 ans, initialement sous aminophiline et présentement sous seretide( salmeterol) spray: 5 pulvérisations pendant la crise','date' => '1985-01-01','type' => 'Médical','created_at' => '2020-05-04 12:12:02','updated_at' => '2020-10-14 06:17:30','deleted_at' => NULL,'slug' => 'medical-1588597922'),
  array('id' => '246','dossier_medical_id' => '151','description' => 'Douleur abdominale intermittente depuis Novembre 2019','date' => NULL,'type' => 'Médical','created_at' => '2020-05-04 13:07:10','updated_at' => '2020-05-04 13:07:10','deleted_at' => NULL,'slug' => 'medical-1588601230'),
  array('id' => '247','dossier_medical_id' => '151','description' => 'G10P9019, dernier enfant a 24ans.
Ménopausé
FCV (05/01/2020) : dysplasie de haut grade.
Biopsie du col de l\'utérus (06/02/2020): pas de malignité','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2020-05-04 13:09:22','updated_at' => '2020-05-04 13:09:22','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1588601362'),
  array('id' => '248','dossier_medical_id' => '151','description' => 'Herniorraphie gauche il y\'a 25 ans, suites opératoires simples.','date' => '1995-01-01','type' => 'Chirugical','created_at' => '2020-05-04 13:11:31','updated_at' => '2020-10-14 06:18:30','deleted_at' => NULL,'slug' => 'chirugical-1588601491'),
  array('id' => '249','dossier_medical_id' => '152','description' => 'suivi pour pathologie hémorrhoidaire','date' => NULL,'type' => 'Chirugical','created_at' => '2020-05-07 10:34:48','updated_at' => '2020-05-07 10:34:48','deleted_at' => NULL,'slug' => 'chirugical-1588851288'),
  array('id' => '250','dossier_medical_id' => '153','description' => 'Pas hypertendu ni diabétique
Notion de precordialgie gauche évoluant depuis plus de 5mois','date' => NULL,'type' => 'Médical','created_at' => '2020-05-09 14:34:17','updated_at' => '2020-05-09 14:34:17','deleted_at' => NULL,'slug' => 'medical-1589038457'),
  array('id' => '251','dossier_medical_id' => '154','description' => 'Cataracte bilatérale découverte en 2018

Arthrose lombaire diagnostiquée en 2016

Canal lombaire étroit en L3-L4, L4-L5 objectivé en 2018','date' => NULL,'type' => 'Médical','created_at' => '2020-05-11 09:49:22','updated_at' => '2020-05-11 09:49:22','deleted_at' => NULL,'slug' => 'medical-1589194162'),
  array('id' => '252','dossier_medical_id' => '154','description' => 'Hypothyroïdie diagnostiquée en 2018( TSH à 10,06, T3 et T4 normal)','date' => NULL,'type' => 'Médical','created_at' => '2020-05-11 09:50:21','updated_at' => '2020-05-11 09:50:21','deleted_at' => NULL,'slug' => 'medical-1589194221'),
  array('id' => '253','dossier_medical_id' => '148','description' => 'Pas diabétique ni hypertendu connu

ElHb SS ( drepanocytaire)','date' => NULL,'type' => 'Médical','created_at' => '2020-05-11 15:02:03','updated_at' => '2020-05-11 15:02:03','deleted_at' => NULL,'slug' => 'medical-1589212923'),
  array('id' => '254','dossier_medical_id' => '150','description' => 'Hernie inguinale gauche non douloureuse depuis plus d\'un an','date' => NULL,'type' => 'Chirugical','created_at' => '2020-05-15 11:26:37','updated_at' => '2020-05-15 11:26:37','deleted_at' => NULL,'slug' => 'chirugical-1589545597'),
  array('id' => '255','dossier_medical_id' => '153','description' => 'ras','date' => NULL,'type' => 'Chirugical','created_at' => '2020-05-18 12:09:49','updated_at' => '2020-05-18 12:09:49','deleted_at' => NULL,'slug' => 'chirugical-1589807389'),
  array('id' => '256','dossier_medical_id' => '156','description' => 'RAS','date' => NULL,'type' => 'Médical','created_at' => '2020-05-18 13:01:35','updated_at' => '2020-05-18 13:01:35','deleted_at' => NULL,'slug' => 'medical-1589810495'),
  array('id' => '257','dossier_medical_id' => '159','description' => 'HTA connu sous omelsartan + amlodipine 50/5mg cp 1cp/jr
Diabétique de type II connu sous metformine 500mg cp: 1cp/jr','date' => NULL,'type' => 'Médical','created_at' => '2020-05-22 11:55:00','updated_at' => '2020-05-22 11:55:00','deleted_at' => NULL,'slug' => 'medical-1590152100'),
  array('id' => '258','dossier_medical_id' => '160','description' => 'Hypertendu connu depuis plusieurs années
Cardiomyopathie hypertrophique du septum interventriculaire avec trouble de rythme supraventriculaire sous Nébivolol 5 mg cp; 1/4 cp / jr;  Périndopril 5mg cp; 1cp/jr, Cardioaspirine 100mg cp; 1cp/jr','date' => NULL,'type' => 'Médical','created_at' => '2020-05-22 12:05:54','updated_at' => '2020-07-02 08:06:43','deleted_at' => NULL,'slug' => 'medical-1590152754'),
  array('id' => '259','dossier_medical_id' => '158','description' => 'Hypertendu connu depuis 2007 sous perindopril + amlodipine 10/5 : 1cp/jr','date' => NULL,'type' => 'Médical','created_at' => '2020-05-22 16:48:18','updated_at' => '2020-05-22 16:48:18','deleted_at' => NULL,'slug' => 'medical-1590169698'),
  array('id' => '260','dossier_medical_id' => '158','description' => 'Diabétique depuis 2007 sous metformine 500mg cp : 1cp x 2/jr','date' => NULL,'type' => 'Médical','created_at' => '2020-05-22 16:48:53','updated_at' => '2020-05-22 16:48:53','deleted_at' => NULL,'slug' => 'medical-1590169733'),
  array('id' => '261','dossier_medical_id' => '158','description' => 'Tumeur loco-régionale de la prostate traité par radio+chimiothérapie en 2007','date' => NULL,'type' => 'Médical','created_at' => '2020-05-22 16:50:23','updated_at' => '2020-05-26 17:51:59','deleted_at' => NULL,'slug' => 'medical-1590169823'),
  array('id' => '262','dossier_medical_id' => '158','description' => 'Hépatite virale C diagnostiqué en Janvier 2020','date' => NULL,'type' => 'Médical','created_at' => '2020-05-22 16:56:14','updated_at' => '2020-05-22 16:56:14','deleted_at' => NULL,'slug' => 'medical-1590170174'),
  array('id' => '263','dossier_medical_id' => '161','description' => 'Diabétique connu depuis plus de 8mois','date' => NULL,'type' => 'Médical','created_at' => '2020-05-23 16:09:54','updated_at' => '2020-05-23 16:09:54','deleted_at' => NULL,'slug' => 'medical-1590253794'),
  array('id' => '264','dossier_medical_id' => '161','description' => 'N\'a jamais été opéré','date' => NULL,'type' => 'Chirugical','created_at' => '2020-05-23 16:12:57','updated_at' => '2020-05-23 16:12:57','deleted_at' => NULL,'slug' => 'chirugical-1590253977'),
  array('id' => '265','dossier_medical_id' => '161','description' => 'Test de VIH positif il y a plusieurs mois(non-accepté par le malade)','date' => NULL,'type' => 'Médical','created_at' => '2020-05-23 16:17:16','updated_at' => '2020-05-24 06:39:44','deleted_at' => NULL,'slug' => 'medical-1590254236'),
  array('id' => '266','dossier_medical_id' => '162','description' => 'Poussée HTA depuis quelques années ; 
épigastralgie ;','date' => NULL,'type' => 'Médical','created_at' => '2020-05-25 07:18:01','updated_at' => '2020-05-25 07:18:01','deleted_at' => NULL,'slug' => 'medical-1590394681'),
  array('id' => '267','dossier_medical_id' => '162','description' => 'amygdalectomie ; 
laparotomie pour adhérences péritonéales.','date' => NULL,'type' => 'Chirugical','created_at' => '2020-05-25 07:18:36','updated_at' => '2020-05-25 07:18:36','deleted_at' => NULL,'slug' => 'chirugical-1590394716'),
  array('id' => '268','dossier_medical_id' => '163','description' => 'HTA connu il y a plus de 10 ans, non suivi','date' => NULL,'type' => 'Médical','created_at' => '2020-05-25 11:30:38','updated_at' => '2020-05-25 11:30:38','deleted_at' => NULL,'slug' => 'medical-1590409838'),
  array('id' => '269','dossier_medical_id' => '163','description' => 'Glaucome diagnostiqué en 2017,sous monoprost','date' => NULL,'type' => 'Médical','created_at' => '2020-05-25 11:32:20','updated_at' => '2020-05-25 11:32:20','deleted_at' => NULL,'slug' => 'medical-1590409940'),
  array('id' => '270','dossier_medical_id' => '158','description' => 'Porteur d\'une prothèse de la hanche depuis 1998','date' => NULL,'type' => 'Chirugical','created_at' => '2020-05-26 17:50:36','updated_at' => '2020-05-26 17:50:36','deleted_at' => NULL,'slug' => 'chirugical-1590519036'),
  array('id' => '271','dossier_medical_id' => '164','description' => 'Épigastralgie connu','date' => NULL,'type' => 'Médical','created_at' => '2020-05-27 15:25:55','updated_at' => '2020-05-27 15:25:55','deleted_at' => NULL,'slug' => 'medical-1590596755'),
  array('id' => '272','dossier_medical_id' => '164','description' => 'Myomectomie en 2008, hystérectomie totale.
FCV jamais fait','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2020-05-27 15:26:32','updated_at' => '2020-06-22 09:38:41','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1590596792'),
  array('id' => '273','dossier_medical_id' => '167','description' => 'Lithiase biliaire dépistée par une échographie abdominale : 1ère crise le 20/12/2018 ; 2ème crise en décembre 2019 ; 3ème crise le 22/04/2020','date' => '2020-04-22','type' => 'Médical','created_at' => '2020-06-01 21:00:34','updated_at' => '2020-06-01 21:00:34','deleted_at' => NULL,'slug' => 'medical-1591048834'),
  array('id' => '274','dossier_medical_id' => '167','description' => 'Neuropathie périphérique des membres inférieurs depuis 2008, à type de perte de la sensibilité, jambes lourdes et parfois humides.','date' => '2008-01-01','type' => 'Médical','created_at' => '2020-06-01 21:01:21','updated_at' => '2020-06-01 21:01:21','deleted_at' => NULL,'slug' => 'medical-1591048881'),
  array('id' => '275','dossier_medical_id' => '167','description' => 'LAV + connue depuis 2008 découvert en contexte de maladie et sous traitement ARV : Duovir (lamivudine + zidovudine) + efavirenz : 1cp le matin à 10h puis 1cp le soir à 22h et Cotrimoxazole 960mg : 1cp le matin, suivi à l’Hôpital de District de Mvog-Ada ; patiente observante au traitement. Dernière charge virale indétectable (le 17/02/2020) ; taux de CD4 : ? Pas de pathologie opportuniste depuis la découverte.','date' => '2008-01-01','type' => 'Médical','created_at' => '2020-06-01 21:02:16','updated_at' => '2020-06-01 21:02:16','deleted_at' => NULL,'slug' => 'medical-1591048936'),
  array('id' => '276','dossier_medical_id' => '167','description' => 'Hémorroïdectomie','date' => '1987-01-01','type' => 'Chirugical','created_at' => '2020-06-01 21:02:41','updated_at' => '2020-06-01 21:02:41','deleted_at' => NULL,'slug' => 'chirugical-1591048961'),
  array('id' => '277','dossier_medical_id' => '167','description' => 'G3P1021 ; ménopausée depuis 8 ans, pas de traitement hormonal substitutif ; dernier coït il y a 2 ans ; dépistage des cancers du col de l’utérus et du sein jamais effectué ;','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2020-06-01 21:03:09','updated_at' => '2020-06-01 21:03:09','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1591048989'),
  array('id' => '278','dossier_medical_id' => '168','description' => 'hypertendue connue depuis 2012 (8 ans) ; initialement suivie par
un cardiologue et mise sous un traitement inconnu que la patiente interrompt
1 an après (2013) jusqu’en 2017. Ensuite une seconde consultation a été initié
et a conduit à une mise sous traitement qui n’a été pris que pendant 5 mois
(c\'est-à-dire en novembre 2017) puis arrêt jusqu’à nos jours.
NB : Actuellement et ce depuis une semaine la patiente est sous traitement de
la pharmacopée traditionnelle : 1 verre matin et 1 verre le soir (boisson à base
de plantes inconnues conseillée par une connaissance).
Pas de diabète','date' => NULL,'type' => 'Médical','created_at' => '2020-06-03 11:09:45','updated_at' => '2020-06-06 15:17:26','deleted_at' => '2020-06-06 15:17:26','slug' => 'medical-1591186185'),
  array('id' => '279','dossier_medical_id' => '168','description' => 'G8P8007 (1 mort-né)
Ménopausée depuis 3ans ; pas de traitement hormonal substitutif
Dépistage des cancers du col et de l’utérus jamais effectués','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2020-06-03 11:10:35','updated_at' => '2020-06-06 15:17:45','deleted_at' => '2020-06-06 15:17:45','slug' => 'gyneco-obstetrique-1591186235'),
  array('id' => '280','dossier_medical_id' => '168','description' => 'Notion de cancer du col de l’utérus chez la maman (décédée de suite de ce
cancer)','date' => NULL,'type' => 'Familial','created_at' => '2020-06-03 11:11:01','updated_at' => '2020-06-06 15:18:03','deleted_at' => '2020-06-06 15:18:03','slug' => 'familial-1591186261'),
  array('id' => '281','dossier_medical_id' => '170','description' => 'prostatite en 2013 traité pas d’HTA, pas de DT2 ; pas de goutte','date' => NULL,'type' => 'Médical','created_at' => '2020-06-03 11:26:47','updated_at' => '2020-06-03 11:26:47','deleted_at' => NULL,'slug' => 'medical-1591187207'),
  array('id' => '282','dossier_medical_id' => '170','description' => 'opéré en 2014 pour calcul rénal droit avec lésion de l’uretère
droit par le dit calcul compliquée de multiples troubles mictionnels à l’instar
de : faiblesse du jet, poussées abdominales lors des mictions, miction goutte à goutte, ainsi qu’une dysfonction érectile ceci depuis l’opération jusqu’à nos
jours. Intervention faite par Dr KAMENI Junior urologue à l’Hôpital central de
Yaoundé.','date' => NULL,'type' => 'Chirugical','created_at' => '2020-06-03 11:27:43','updated_at' => '2020-06-03 11:27:43','deleted_at' => NULL,'slug' => 'chirugical-1591187263'),
  array('id' => '283','dossier_medical_id' => '170','description' => 'Immuno allergiques : GSRH: inconnue ; Sérologies hépatite B : négative en
2013 ; hépatite C : positive en 2013 (non documenté) pris en charge par les
produits de la pharmacopée traditionnelle, pendant 6 mois après quoi le test
de contrôle s’est avéré être toujours positif, néanmoins l’on aurait noté une
diminution de la charge virale selon le patient. Allergie à tout objet ou toute
situation conduisant à exercer une pression sur la peau à type d’irritation avec
prurit (allergie objectivé en cours de consultation).','date' => NULL,'type' => 'Médical','created_at' => '2020-06-03 11:27:53','updated_at' => '2020-06-03 11:27:53','deleted_at' => NULL,'slug' => 'medical-1591187273'),
  array('id' => '284','dossier_medical_id' => '172','description' => 'G10P10.006 (4 enfants décédés) ;','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2020-06-03 22:27:51','updated_at' => '2020-06-03 22:27:51','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1591226871'),
  array('id' => '285','dossier_medical_id' => '172','description' => 'Ménopausée depuis 10 ans, pas de traitement hormonal substitutif
PCV fait en février 2020 : nombreux bacilles Gram+, rares Bacilles Gram-, flore de Doderlein type2 ; clue cells : absent ; conclusion PCV dans les limites de la
normale Frottis cervico-vaginal : fait en février 2020 et en conclusion : frottis cervicoutérin sub-atrophique, inflammatoire ; absence de lésion Malpighienne intraépithéliale ou de signe de malignité 
Mammographie : jamais faite','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2020-06-03 22:28:56','updated_at' => '2020-06-03 22:28:56','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1591226936'),
  array('id' => '286','dossier_medical_id' => '168','description' => 'HTA','date' => '2012-01-01','type' => 'Médical','created_at' => '2020-06-06 14:31:10','updated_at' => '2020-06-06 14:31:10','deleted_at' => NULL,'slug' => 'medical-1591457470'),
  array('id' => '287','dossier_medical_id' => '168','description' => 'G8P8007 (1 mort-né)','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2020-06-06 14:31:39','updated_at' => '2020-06-06 14:31:39','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1591457499'),
  array('id' => '288','dossier_medical_id' => '168','description' => 'Ménopausée depuis 3 ans ; pas de traitement hormonal substitutif','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2020-06-06 14:32:05','updated_at' => '2020-06-06 14:32:05','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1591457525'),
  array('id' => '289','dossier_medical_id' => '168','description' => 'Problème oculaire non spécifié','date' => NULL,'type' => 'Médical','created_at' => '2020-06-06 14:33:00','updated_at' => '2020-06-06 14:33:00','deleted_at' => NULL,'slug' => 'medical-1591457580'),
  array('id' => '290','dossier_medical_id' => '168','description' => 'Cancer du col de l’utérus chez la maman (décédée)','date' => NULL,'type' => 'Familial','created_at' => '2020-06-06 14:34:04','updated_at' => '2020-06-06 14:34:04','deleted_at' => NULL,'slug' => 'familial-1591457644'),
  array('id' => '291','dossier_medical_id' => '168','description' => 'Oncle maternelle diabétique','date' => NULL,'type' => 'Familial','created_at' => '2020-06-06 14:34:18','updated_at' => '2020-06-06 14:34:18','deleted_at' => NULL,'slug' => 'familial-1591457658'),
  array('id' => '292','dossier_medical_id' => '173','description' => 'HTA Connu non suivi','date' => NULL,'type' => 'Médical','created_at' => '2020-06-11 12:12:08','updated_at' => '2020-06-11 12:12:08','deleted_at' => NULL,'slug' => 'medical-1591881128'),
  array('id' => '293','dossier_medical_id' => '173','description' => 'traumatisme du pied G (3 ans) compliqué d’un hématome drainé par petite chirurgie, Suite simple. Elle n’aurait pas bénéficié d’une PEC avec HBPM','date' => NULL,'type' => 'Chirugical','created_at' => '2020-06-11 12:12:43','updated_at' => '2020-06-11 12:12:43','deleted_at' => NULL,'slug' => 'chirugical-1591881163'),
  array('id' => '294','dossier_medical_id' => '173','description' => 'Césarienne indiquée pour utérus myomateux ; puis hystérectomie totale à distance. 
G1P1, aucun dépistage cancer sein/col réalisé.','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2020-06-11 12:13:23','updated_at' => '2020-06-11 12:13:23','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1591881203'),
  array('id' => '295','dossier_medical_id' => '179','description' => 'Hépatite B viral non traité','date' => '2019-01-01','type' => 'Médical','created_at' => '2020-06-14 19:51:55','updated_at' => '2020-06-14 19:51:55','deleted_at' => NULL,'slug' => 'medical-1592167915'),
  array('id' => '296','dossier_medical_id' => '179','description' => 'Tentative de suicide en 2000','date' => NULL,'type' => 'Médical','created_at' => '2020-06-14 19:53:32','updated_at' => '2020-06-14 19:53:32','deleted_at' => NULL,'slug' => 'medical-1592168012'),
  array('id' => '297','dossier_medical_id' => '179','description' => 'Mère DT2 et HTA','date' => NULL,'type' => 'Familial','created_at' => '2020-06-14 19:54:11','updated_at' => '2020-06-14 19:54:11','deleted_at' => NULL,'slug' => 'familial-1592168051'),
  array('id' => '298','dossier_medical_id' => '72','description' => 'hypertendu connu depuis 06 ans sous captopril 25mg cp; 1 cp par jour','date' => NULL,'type' => 'Médical','created_at' => '2020-06-15 07:08:14','updated_at' => '2020-06-15 07:08:14','deleted_at' => NULL,'slug' => 'medical-1592208494'),
  array('id' => '299','dossier_medical_id' => '177','description' => 'Hypertendue connue depuis environ 2 ans découvert à l\'HCY est
sous arbitel 80mg 1/2cp/jour et observante au traitement

diabétique connue depuis environ 2 ans découvert à l\'HCY est sous diamicron
60mg 1cp/jour et glucophage 1000mgcp 1cp*2/jour et est observante au
traitement','date' => NULL,'type' => 'Médical','created_at' => '2020-06-15 07:13:06','updated_at' => '2020-06-15 07:13:06','deleted_at' => NULL,'slug' => 'medical-1592208786'),
  array('id' => '300','dossier_medical_id' => '177','description' => 'Césarienne en 1980 indiqué pour placenta praevia de suite
favorable

Hystérectomie total en 1986 indiqué pour HPP','date' => NULL,'type' => 'Chirugical','created_at' => '2020-06-15 07:17:30','updated_at' => '2020-06-15 07:17:30','deleted_at' => NULL,'slug' => 'chirugical-1592209050'),
  array('id' => '301','dossier_medical_id' => '180','description' => 'Osteosynthese avant bras droit il y a environ 45 ans, sous anesthésie générale','date' => NULL,'type' => 'Chirugical','created_at' => '2020-06-15 10:18:07','updated_at' => '2020-06-15 10:18:07','deleted_at' => NULL,'slug' => 'chirugical-1592219887'),
  array('id' => '302','dossier_medical_id' => '169','description' => 'HTA: non ; DT2: non; goutte: non;
 hémorragie digestive (haute et basse) dû à un ulcère gastrique en 2009 PEC à
l\'hôtpital général ; dernirre crise d\'épigastralgie en 2009 .','date' => NULL,'type' => 'Médical','created_at' => '2020-06-15 19:24:48','updated_at' => '2020-06-15 19:24:48','deleted_at' => NULL,'slug' => 'medical-1592252688'),
  array('id' => '303','dossier_medical_id' => '169','description' => 'grande sœur et petite sœur HTA et DT2
- notion de cancer dans la famille','date' => NULL,'type' => 'Familial','created_at' => '2020-06-15 19:25:19','updated_at' => '2020-06-15 19:25:19','deleted_at' => NULL,'slug' => 'familial-1592252719'),
  array('id' => '304','dossier_medical_id' => '175','description' => 'Pas de pathologie chronique connue','date' => NULL,'type' => 'Médical','created_at' => '2020-06-16 11:03:51','updated_at' => '2020-06-17 20:38:02','deleted_at' => '2020-06-17 20:38:02','slug' => 'medical-1592309031'),
  array('id' => '305','dossier_medical_id' => '175','description' => 'Fibromectomie vaginale par aspiration réalisée en Février 2019,suites simples.','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2020-06-16 11:05:16','updated_at' => '2020-06-16 11:05:16','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1592309116'),
  array('id' => '306','dossier_medical_id' => '181','description' => 'Hémorragie digestive basse','date' => '2012-01-01','type' => 'Médical','created_at' => '2020-06-17 08:31:47','updated_at' => '2020-06-17 08:31:47','deleted_at' => NULL,'slug' => 'medical-1592386307'),
  array('id' => '307','dossier_medical_id' => '181','description' => 'Cure de hernie inguinale gauche (hôpital des sœurs à Mvog-Béti Yaoundé)','date' => '2015-01-01','type' => 'Chirugical','created_at' => '2020-06-17 08:34:20','updated_at' => '2020-06-17 08:34:20','deleted_at' => NULL,'slug' => 'chirugical-1592386460'),
  array('id' => '308','dossier_medical_id' => '182','description' => 'HTA type 2 sous APROVASC (AMLODIPINE | IRBESARTAN)','date' => NULL,'type' => 'Médical','created_at' => '2020-06-20 09:24:26','updated_at' => '2020-06-20 09:29:08','deleted_at' => NULL,'slug' => 'medical-1592648666'),
  array('id' => '309','dossier_medical_id' => '182','description' => 'Fracture Malléolaire droite => Ostéosynthèse; Plaque pas encore retirée.','date' => '2019-01-20','type' => 'Chirugical','created_at' => '2020-06-20 09:26:51','updated_at' => '2020-06-20 09:26:51','deleted_at' => NULL,'slug' => 'chirugical-1592648811'),
  array('id' => '310','dossier_medical_id' => '182','description' => 'Sinusite ayant bénéficié une cure chirurgicale il y a plus de 15 ans','date' => NULL,'type' => 'Médical','created_at' => '2020-06-20 09:27:36','updated_at' => '2020-06-20 09:27:36','deleted_at' => NULL,'slug' => 'medical-1592648856'),
  array('id' => '311','dossier_medical_id' => '182','description' => 'Mammographie normale 
Pas de FCV','date' => '2018-06-20','type' => 'Médical','created_at' => '2020-06-20 09:28:41','updated_at' => '2020-06-20 09:28:41','deleted_at' => NULL,'slug' => 'medical-1592648921'),
  array('id' => '312','dossier_medical_id' => '182','description' => 'Fracture malléolaire Droite => Ostéosynthèse, plaque toujours à demeure.','date' => '2019-01-01','type' => 'Chirugical','created_at' => '2020-06-20 09:52:33','updated_at' => '2020-06-20 09:52:33','deleted_at' => NULL,'slug' => 'chirugical-1592650353'),
  array('id' => '313','dossier_medical_id' => '183','description' => 'Hypoacousie permanente secondaire à une otite moyenne aiguë à l\'âge de 3 ans','date' => '2004-01-01','type' => 'Médical','created_at' => '2020-06-23 08:23:22','updated_at' => '2020-06-23 08:53:06','deleted_at' => NULL,'slug' => 'medical-1592904202'),
  array('id' => '314','dossier_medical_id' => '184','description' => 'La patiente avait été dépistée hépatite virale C il y’a environ 1 ans dans un hôpital de Belgique lors d’un bilan de routine, était sous un traitement (non documenté), la patiente par la suite aurait été guérie de son hépatite C (non documenté selon la patiente).

Kyste corticale simple du rein droit découvert à l’Hôpital Jamot il y’a environ 3 ans.

Suivie pour douleur lombaire et arthrose depuis plusieurs années déjà par plusieurs rhumatologues et était sous traitement non documenté

HTA- ;  Diabète :-','date' => NULL,'type' => 'Médical','created_at' => '2020-06-23 17:45:38','updated_at' => '2020-06-23 17:45:38','deleted_at' => NULL,'slug' => 'medical-1592937938'),
  array('id' => '315','dossier_medical_id' => '184','description' => 'Hystérectomie totale il y’a environ 10 ans indiquée pour utérus polymyomateux, de suite favorable','date' => NULL,'type' => 'Chirugical','created_at' => '2020-06-23 17:46:07','updated_at' => '2020-06-23 17:46:07','deleted_at' => NULL,'slug' => 'chirugical-1592937967'),
  array('id' => '316','dossier_medical_id' => '184','description' => 'G7P5025
mammographie ; jamais faite','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2020-06-23 17:47:19','updated_at' => '2020-06-23 17:47:19','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1592938039'),
  array('id' => '317','dossier_medical_id' => '186','description' => 'HTA traitée','date' => '2017-01-01','type' => 'Médical','created_at' => '2020-06-24 10:51:16','updated_at' => '2020-06-24 10:51:16','deleted_at' => NULL,'slug' => 'medical-1592999476'),
  array('id' => '318','dossier_medical_id' => '186','description' => 'Surdité droite','date' => '1980-01-01','type' => 'Médical','created_at' => '2020-06-24 10:53:09','updated_at' => '2020-06-24 10:53:09','deleted_at' => NULL,'slug' => 'medical-1592999589'),
  array('id' => '319','dossier_medical_id' => '186','description' => 'Baisse de l\'acuité visuelle corrigée par port de verres','date' => '2017-01-01','type' => 'Médical','created_at' => '2020-06-24 10:54:44','updated_at' => '2020-06-24 10:54:44','deleted_at' => NULL,'slug' => 'medical-1592999684'),
  array('id' => '320','dossier_medical_id' => '186','description' => 'Probable otite moyenne aiguë pendant l\'enfance','date' => NULL,'type' => 'Médical','created_at' => '2020-06-24 10:55:26','updated_at' => '2020-06-24 10:55:26','deleted_at' => NULL,'slug' => 'medical-1592999726'),
  array('id' => '321','dossier_medical_id' => '186','description' => 'HTA chez les 2 grand-pères, le papa et chez 5 frères et sœurs.','date' => NULL,'type' => 'Familial','created_at' => '2020-06-24 10:57:37','updated_at' => '2020-06-24 10:57:37','deleted_at' => NULL,'slug' => 'familial-1592999857'),
  array('id' => '322','dossier_medical_id' => '187','description' => 'diabétique connue depuis plus de 20 ans, sous Metformine 500mg cp; 1cp x 2/ jr, non observante au traitement.','date' => NULL,'type' => 'Médical','created_at' => '2020-06-30 06:48:36','updated_at' => '2020-06-30 06:48:36','deleted_at' => NULL,'slug' => 'medical-1593503316'),
  array('id' => '323','dossier_medical_id' => '187','description' => 'G1P001
fille unique décédée il y a 05 ans','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2020-06-30 06:51:52','updated_at' => '2020-06-30 06:55:57','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1593503512'),
  array('id' => '324','dossier_medical_id' => '190','description' => 'Gastrite chronique diagnostiqué il y a 10 ans, 
Fibrocopies réalisées; 
Le 11/12/2011; gastrite antrale érythémateuse, bulbite érosive
Le 10/2015 ; reflux biliaire duodeno-gastrique sur gastrite antrale érythémato congestive','date' => NULL,'type' => 'Médical','created_at' => '2020-07-01 13:10:10','updated_at' => '2020-07-02 07:15:52','deleted_at' => NULL,'slug' => 'medical-1593612610'),
  array('id' => '325','dossier_medical_id' => '190','description' => 'G4P3013
Patiente ménopausée depuis plus de 10ans
FCV jamais fait','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2020-07-01 13:11:10','updated_at' => '2020-07-01 13:11:10','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1593612670'),
  array('id' => '326','dossier_medical_id' => '190','description' => 'Notion de Diabète chez le cousin et la cousine est porteuse d’une HTA.','date' => NULL,'type' => 'Familial','created_at' => '2020-07-01 13:11:38','updated_at' => '2020-07-01 13:11:38','deleted_at' => NULL,'slug' => 'familial-1593612698'),
  array('id' => '327','dossier_medical_id' => '188','description' => 'Drépanocytose','date' => NULL,'type' => 'Médical','created_at' => '2020-07-01 21:34:41','updated_at' => '2020-07-01 21:34:41','deleted_at' => NULL,'slug' => 'medical-1593642881'),
  array('id' => '328','dossier_medical_id' => '188','description' => 'Ostéonécrose de la tête fémorale','date' => NULL,'type' => 'Médical','created_at' => '2020-07-01 21:35:16','updated_at' => '2020-07-01 21:35:16','deleted_at' => NULL,'slug' => 'medical-1593642916'),
  array('id' => '329','dossier_medical_id' => '188','description' => 'Mère drépanocytaire homozygote décédée en 2008 de cause inconnue.
Père drépanocytaire hétérozygote (AS) en bonne santé apparente.','date' => NULL,'type' => 'Familial','created_at' => '2020-07-01 21:37:04','updated_at' => '2020-07-01 21:37:04','deleted_at' => NULL,'slug' => 'familial-1593643024'),
  array('id' => '330','dossier_medical_id' => '198','description' => 'trois interventions chirurgicales donc 2 au niveau du des organes génitaux externes et une laparotomie exploratrice toutes non documentées.','date' => NULL,'type' => 'Chirugical','created_at' => '2020-07-03 12:18:26','updated_at' => '2020-07-03 12:18:26','deleted_at' => NULL,'slug' => 'chirugical-1593782306'),
  array('id' => '331','dossier_medical_id' => '198','description' => 'Epigastralgie connu depuis plus de 05 ans, non explorée','date' => NULL,'type' => 'Médical','created_at' => '2020-07-03 12:19:09','updated_at' => '2020-07-03 12:19:09','deleted_at' => NULL,'slug' => 'medical-1593782349'),
  array('id' => '332','dossier_medical_id' => '198','description' => 'G0P0
Ménopausée depuis plus de 10 ans
FCV jamais fait','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2020-07-03 12:19:42','updated_at' => '2020-07-03 12:19:42','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1593782382'),
  array('id' => '333','dossier_medical_id' => '199','description' => 'Epigagastralgie chronique
 Pas hypertendu connu ni diabetique','date' => NULL,'type' => 'Médical','created_at' => '2020-07-10 10:21:11','updated_at' => '2020-07-10 10:21:11','deleted_at' => NULL,'slug' => 'medical-1594380071'),
  array('id' => '334','dossier_medical_id' => '199','description' => 'Opérée en 2018 pour calcul rénal','date' => NULL,'type' => 'Chirugical','created_at' => '2020-07-10 10:21:45','updated_at' => '2020-07-10 10:21:45','deleted_at' => NULL,'slug' => 'chirugical-1594380105'),
  array('id' => '335','dossier_medical_id' => '200','description' => 'HTA -','date' => NULL,'type' => 'Médical','created_at' => '2020-07-11 09:06:47','updated_at' => '2020-07-11 09:06:47','deleted_at' => NULL,'slug' => 'medical-1594462007'),
  array('id' => '336','dossier_medical_id' => '202','description' => 'DT2 connue depuis janvier 2020 sous glucophage 1g : 1cp*3/jour','date' => NULL,'type' => 'Médical','created_at' => '2020-07-22 11:48:56','updated_at' => '2020-07-22 11:48:56','deleted_at' => NULL,'slug' => 'medical-1595422136'),
  array('id' => '337','dossier_medical_id' => '202','description' => 'Notion de fracture du genou droit post accident de la voie  publique il y a 18 ans ce qui a conduit  arthroplastie du genou droit avec pose
de 7 vices ;  fracture du fémur droit ayant nécessité la pose d’une plaque vicée','date' => NULL,'type' => 'Chirugical','created_at' => '2020-07-22 11:52:23','updated_at' => '2020-07-22 11:52:23','deleted_at' => NULL,'slug' => 'chirugical-1595422343'),
  array('id' => '338','dossier_medical_id' => '203','description' => 'Notion réccurente de paludisme et fièvre typhoide documenté avec des
hospitalisations fréquentes','date' => NULL,'type' => 'Médical','created_at' => '2020-07-22 13:43:00','updated_at' => '2020-07-22 13:43:00','deleted_at' => NULL,'slug' => 'medical-1595428980'),
  array('id' => '339','dossier_medical_id' => '204','description' => 'Hypertendu connu depuis plusieurs années découverte de suite de consultatio ns répétées 
pour asthénie, sous Cardiurine  50/25 1-0-0, observante  au traitement
✓ Epigastralgie chronique intermittente sans traitement de fond','date' => NULL,'type' => 'Médical','created_at' => '2020-07-24 08:41:54','updated_at' => '2020-07-24 08:41:54','deleted_at' => NULL,'slug' => 'medical-1595583714'),
  array('id' => '340','dossier_medical_id' => '204','description' => 'Aménorrhée secondaire (ménopause) depuis 20 ans environ 
Dépistage du cancer du col de l’utérus : jamais réalisé
Dépistage du cancer du sein : jamais réalisé','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2020-07-24 08:42:10','updated_at' => '2020-07-24 08:42:10','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1595583730'),
  array('id' => '341','dossier_medical_id' => '204','description' => 'Conjoint : HTA connu sous traitement non documenté.','date' => NULL,'type' => 'Familial','created_at' => '2020-07-24 08:42:43','updated_at' => '2020-07-24 08:42:43','deleted_at' => NULL,'slug' => 'familial-1595583763'),
  array('id' => '342','dossier_medical_id' => '89','description' => 'Décompensation cardiaque','date' => NULL,'type' => 'Médical','created_at' => '2020-07-27 18:26:37','updated_at' => '2020-07-27 18:26:37','deleted_at' => NULL,'slug' => 'medical-1595877997'),
  array('id' => '343','dossier_medical_id' => '207','description' => 'G6P5015
Ménopausée depuis il y\'a environ 10 ans
pas de traitement hormonal subtitutif
Mammographie: Faite il y\'a 6 mois ( non documenté) sans particularité
FCV: il y\'a 6 mois (non documenté) sans particularité','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2020-07-29 10:37:33','updated_at' => '2020-07-29 10:37:33','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1596022653'),
  array('id' => '344','dossier_medical_id' => '208','description' => 'He is hypertensive on tritazide [1tab daily]

Also on aspirin 81mg 

History of urinary obstruction about a year ago and was followed by a herbalist and the problem was resolved a month later.

He is not diabetic 

Don\'t smoke 

Drinks alcohol occasionally

 No family history of chronic illness

No family history of sudden death','date' => NULL,'type' => 'Médical','created_at' => '2020-07-30 07:39:07','updated_at' => '2020-07-30 07:39:07','deleted_at' => NULL,'slug' => 'medical-1596098347'),
  array('id' => '345','dossier_medical_id' => '210','description' => '* Thyroïdectomie en 2013 indiquée pour goitre, faite au CHU de Yaoundé, pas de complication en per ou en post opératoire. Mise sous traitement substitutif (thyroxine 100mcg: 1cp/jour , patiente non observante au traitement)','date' => NULL,'type' => 'Chirugical','created_at' => '2020-08-05 10:18:32','updated_at' => '2020-08-05 10:18:32','deleted_at' => NULL,'slug' => 'chirugical-1596626312'),
  array('id' => '346','dossier_medical_id' => '210','description' => 'opérée en 2018 pour hernie de la ligne blanche: dans une clinique, pas de complications.','date' => NULL,'type' => 'Chirugical','created_at' => '2020-08-05 10:19:36','updated_at' => '2020-08-05 10:19:36','deleted_at' => NULL,'slug' => 'chirugical-1596626376'),
  array('id' => '347','dossier_medical_id' => '210','description' => 'G6P5015 (1 mort né), à la dernière grossesse notion de déchirure du col avec notion de traitement médicamenteux pendant environ 6 mois (non documenté)
  *ménopausée depuis 10 ans , pas de traitement hormonal substitutif
  * FCV (dernier réalisé il y a 2 ans : sans particularité). 
  * Notion de douleur pelvienne + écoulement purulent et sanguinolent  fréquente ( chaque année), ayant nécessité de nombreuses consultations.','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2020-08-05 10:21:05','updated_at' => '2020-08-05 10:21:05','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1596626465'),
  array('id' => '348','dossier_medical_id' => '210','description' => 'Immuno-allergiques: GS/RH:B+ (non documenté); sérologie VIH : négative il y a 2 ans , hépatite B et C: négatives il y a 2 ans environ, jamais transfusée.','date' => NULL,'type' => 'Médical','created_at' => '2020-08-05 13:01:40','updated_at' => '2020-08-05 13:01:40','deleted_at' => NULL,'slug' => 'medical-1596636100'),
  array('id' => '349','dossier_medical_id' => '211','description' => 'Ulcère gastro duodénal diagnostiqué en 1994, prise en charge en 1999.','date' => NULL,'type' => 'Médical','created_at' => '2020-08-06 16:09:29','updated_at' => '2020-08-06 16:09:29','deleted_at' => NULL,'slug' => 'medical-1596733769'),
  array('id' => '350','dossier_medical_id' => '213','description' => '* Ménarche: ? , durée :3jours; cycle: 28 jours , régulier; dysménorrhée: non ; ménorragie: non; métrorragie: non ; 
  * contraception: Dépoprovera
 * leucorrhée: blanchâtre , de petite abondance non fétides; 
 * IST: non ; sérologie chlamydia: négative (en 2020); 
  * dépistage des cancers du col de l\'utérus et du sein jamais faits
  
  * G4P3003
G1 en 2008:  Accouchement normal par voie basse d\'un nouveau-né de sexe féminin , ayant pesé: ?
G2 en 2010: Accouchement normal par voie basse d\'un nouveau-né de sexe masculin , ayant pesé: moins de 3500grs
G3 en 2012: Accouchement normal par voie basse d\'un nouveau-né de sexe féminin, ayant pesé: ?
G4 grossesse actuelle: 
    DDR: 07/11/2019; AG: 38 SA+ 01jour (selon l\'échographie du 2e Trimestre)  ; DPA:  31/07/2020  (selon l\'échographie du 2e trimestre
    nombre de CPN: 05
    paramètre en début de grossesse: poids: 82kg; TA:125/75mmhg; 
    Prophylaxie : anti-anémique(alfer 3N:1cp/jour); anti-palustre: 0 ; ; MILDA: + ; calcium+vitamine D: ; VAT: 5 doses prise lors des grossesses précédentes;
Bilans réalisés: 
       Biologiques : GE: 500 TPF/mm3 ;  sérologie VIH: négative (le 27/01/2020); NFS: hb: 11.2 g/dl; TPHA/VDRL: négatif ; AcHCV: négative (le 27/01/2020) ; AgHs: négative;  BU( albumine: négative; sucre: négative);  
chlamydia: négative ; toxoplasmose: IgG et IgM : négatives  
 
Bilans morphologique: 
      *échographie du 31/03/2019: GIUMFE de 22SA+ 04jours, discordant avec l\'âge théorique qui est de 20SA+2 jours (erreur de DDR) ; DPA: 31/07/2020; morphologie fœtale sans particularité; col long et fermé ; présentation siège, placenta fundique de grade I bien inséré, sexe féminin','date' => '2020-07-27','type' => 'Gynéco-obstétrique','created_at' => '2020-08-09 16:25:21','updated_at' => '2020-08-09 16:25:21','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1596993921'),
  array('id' => '351','dossier_medical_id' => '214','description' => 'HTA connu depuis 6 ans sous Amlodipine 10mg

Lombosciatalgie depuis plus de 15ans : ceinture de soutien dorsolombaire','date' => NULL,'type' => 'Médical','created_at' => '2020-08-10 09:56:40','updated_at' => '2020-08-10 09:56:40','deleted_at' => NULL,'slug' => 'medical-1597057000'),
  array('id' => '352','dossier_medical_id' => '209','description' => 'Epigastralgie à la prise de certains médicaments particulièrement les anti-inflammatoires','date' => NULL,'type' => 'Médical','created_at' => '2020-08-10 12:34:53','updated_at' => '2020-08-10 12:34:53','deleted_at' => NULL,'slug' => 'medical-1597066493'),
  array('id' => '353','dossier_medical_id' => '209','description' => 'Chute de sa hauteur avec double fracture du tibia et du perroné et fracture du radius pour lesquelles elle a été prise en charge à l\'Hôpital Protestant de Ndogbati par Dr KAMGUEP avec un traitement orthopédique et bonne consolidation au dernier contrôle.','date' => '2019-09-08','type' => 'Chirugical','created_at' => '2020-08-10 12:38:23','updated_at' => '2020-08-10 12:38:23','deleted_at' => NULL,'slug' => 'chirugical-1597066703'),
  array('id' => '354','dossier_medical_id' => '211','description' => 'Lombarthrose étagée','date' => NULL,'type' => 'Médical','created_at' => '2020-08-10 12:55:21','updated_at' => '2020-08-10 12:55:21','deleted_at' => NULL,'slug' => 'medical-1597067721'),
  array('id' => '355','dossier_medical_id' => '211','description' => 'Ablation d\'un lipome en 2019','date' => NULL,'type' => 'Chirugical','created_at' => '2020-08-10 12:55:50','updated_at' => '2020-08-10 12:55:50','deleted_at' => NULL,'slug' => 'chirugical-1597067750'),
  array('id' => '356','dossier_medical_id' => '216','description' => '* migraine avec aura depuis 1995 ayant nécessité de multiples consultations neurologiques (notamment à une clinique par Dr NDOH l’hôpital centrale de Yaoundé par Dr NDJAMCHI, et des bilans (scanner, électroencéphalogramme et autres bilans sanguins avaient été réalisés  tous non disponibles ce jour)  et de multiples traitements médicamenteux on été entrepris, l\'évolution avait été marquée par une diminution de l\'intensité et de la fréquence. Actuellement ne prend aucun traitement','date' => '1995-02-02','type' => 'Médical','created_at' => '2020-08-10 22:50:19','updated_at' => '2020-08-10 22:50:19','deleted_at' => NULL,'slug' => 'medical-1597103419'),
  array('id' => '357','dossier_medical_id' => '216','description' => 'asthmatique découvert vers 1990 sous ventoline spray ( 2 - 4 crises par an)
GS/RH: O+','date' => '1990-05-05','type' => 'Médical','created_at' => '2020-08-10 22:51:32','updated_at' => '2020-08-10 22:52:57','deleted_at' => NULL,'slug' => 'medical-1597103492'),
  array('id' => '358','dossier_medical_id' => '220','description' => 'ostéosynthèse par broche, suture des tendons et des nerfs digitaux D1 et D2, greffe de peau indiqué pour fracture articulaire métacarpo-trapézoïdien gauche, déficit cutanée rayon D1 et section des nerfs digitaux D1 et D2 il y’a 5 mois.
- Médicaux : pas d’HTA, pas de Diabète, pas d’épilepsie, pas d’autres pathologies chroniques connues','date' => NULL,'type' => 'Chirugical','created_at' => '2020-08-12 15:21:34','updated_at' => '2020-08-12 15:21:34','deleted_at' => NULL,'slug' => 'chirugical-1597249294'),
  array('id' => '359','dossier_medical_id' => '119','description' => 'Diabète de type 2','date' => '2020-05-01','type' => 'Médical','created_at' => '2020-08-13 14:17:16','updated_at' => '2020-08-13 14:17:16','deleted_at' => NULL,'slug' => 'medical-1597331836'),
  array('id' => '360','dossier_medical_id' => '119','description' => 'Epigastralgie','date' => NULL,'type' => 'Médical','created_at' => '2020-08-13 14:17:57','updated_at' => '2020-08-13 14:17:57','deleted_at' => NULL,'slug' => 'medical-1597331877'),
  array('id' => '361','dossier_medical_id' => '119','description' => 'Diabète de type 2 chez la mère','date' => NULL,'type' => 'Familial','created_at' => '2020-08-13 14:18:57','updated_at' => '2020-08-13 14:18:57','deleted_at' => NULL,'slug' => 'familial-1597331937'),
  array('id' => '362','dossier_medical_id' => '119','description' => 'HTA chez le grand frère','date' => NULL,'type' => 'Familial','created_at' => '2020-08-13 14:19:24','updated_at' => '2020-08-13 14:19:24','deleted_at' => NULL,'slug' => 'familial-1597331964'),
  array('id' => '363','dossier_medical_id' => '219','description' => 'Diabétique connu depuis plusieurs années sous Glibomet cp; 1cp x 2/jr','date' => NULL,'type' => 'Médical','created_at' => '2020-08-14 07:25:17','updated_at' => '2020-08-14 07:25:17','deleted_at' => NULL,'slug' => 'medical-1597393517'),
  array('id' => '364','dossier_medical_id' => '187','description' => 'DT2 connue depuis plus de 20 ans sous metformine 500 mg : 1CP 2 fois par jour non observante au traitement et diamicron (glicazide) 60mg : 1cp par jour le matin','date' => NULL,'type' => 'Médical','created_at' => '2020-08-16 09:39:52','updated_at' => '2020-08-16 09:39:52','deleted_at' => NULL,'slug' => 'medical-1597574392'),
  array('id' => '365','dossier_medical_id' => '187','description' => 'HTA connue depuis plus de 15 ans sous amlodipine 5mg cp : 1cp par jour et ramipril 5mg : 1 gel par jour','date' => NULL,'type' => 'Médical','created_at' => '2020-08-16 09:40:50','updated_at' => '2020-08-16 09:40:50','deleted_at' => NULL,'slug' => 'medical-1597574450'),
  array('id' => '366','dossier_medical_id' => '187','description' => 'Insuffisance rénale aiguë fonctionnelle diagnostiquée en Mai 2020 et corrigé en Juillet 2020','date' => NULL,'type' => 'Médical','created_at' => '2020-08-16 09:41:19','updated_at' => '2020-08-16 09:41:19','deleted_at' => NULL,'slug' => 'medical-1597574479'),
  array('id' => '367','dossier_medical_id' => '187','description' => 'Incontinence urinaire','date' => NULL,'type' => 'Médical','created_at' => '2020-08-16 09:41:53','updated_at' => '2020-08-16 09:41:53','deleted_at' => NULL,'slug' => 'medical-1597574513'),
  array('id' => '368','dossier_medical_id' => '222','description' => 'Aurait subit une biopsie de la prostate il y a quelques mois mais non
documenté.','date' => NULL,'type' => 'Chirugical','created_at' => '2020-08-17 07:29:11','updated_at' => '2020-08-17 07:29:11','deleted_at' => NULL,'slug' => 'chirugical-1597652951'),
  array('id' => '369','dossier_medical_id' => '224','description' => 'Intervention chirurgicale sur la colonne lombaire en 2005  d’indication non documentée.','date' => NULL,'type' => 'Chirugical','created_at' => '2020-08-17 09:57:57','updated_at' => '2020-08-17 09:57:57','deleted_at' => NULL,'slug' => 'chirugical-1597661876'),
  array('id' => '370','dossier_medical_id' => '224','description' => 'HTA connue depuis plus de 7 ans sous TRITHIAZIDE 10/12/25 : 1CP /jour ; 
CARDIO-ASPIRINE100 : 1CP/jour
Gonarthrose diagnostiqué il y a 05 ans en Europe','date' => NULL,'type' => 'Médical','created_at' => '2020-08-17 09:58:29','updated_at' => '2020-08-17 10:00:05','deleted_at' => NULL,'slug' => 'medical-1597661909'),
  array('id' => '371','dossier_medical_id' => '225','description' => 'G0P0 ; DDR : 14/08/2020
Ménarche : 16 ans ; durée des règles : 4 jours, durée du cycle : 16-18 jours (depuis les ménarches) ; irréguliers ; dysménorrhées : non ; métrorragie : non ; ménorragie : non
coïtarche: 18 ans ; Partenaire sexuel cumulé :2 ; Partenaire sexuel actuel : 1 ; dernier coït : il y a 2 jours non protégé ; 
IST: non; méthode de contraception: aucune','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2020-08-17 16:08:51','updated_at' => '2020-08-17 16:08:51','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1597684131'),
  array('id' => '372','dossier_medical_id' => '209','description' => 'Canal Lombaire rétréci arthrosique en L3 et L4 décompensé par une discopathie dégénérative L3-L4, L4-L5','date' => '2020-08-13','type' => 'Médical','created_at' => '2020-08-17 17:01:37','updated_at' => '2020-08-17 17:01:49','deleted_at' => NULL,'slug' => 'medical-1597687297'),
  array('id' => '373','dossier_medical_id' => '209','description' => 'Spondylartrhose étagée avc discarthrose basse et Zygarthrose L4-L5 droite, L5-S1 bilatérale','date' => '2020-08-13','type' => 'Médical','created_at' => '2020-08-17 17:02:04','updated_at' => '2020-08-17 17:02:04','deleted_at' => NULL,'slug' => 'medical-1597687324'),
  array('id' => '374','dossier_medical_id' => '227','description' => 'epileptique connu sous depakine 400 mg    200mg tout les 2 jours  derniere crise en 2007 

MILDA- 

jamais ete operer 

allergie-  aghbs? achcv? vih?','date' => NULL,'type' => 'Médical','created_at' => '2020-08-19 09:58:15','updated_at' => '2020-08-19 09:58:15','deleted_at' => NULL,'slug' => 'medical-1597834695'),
  array('id' => '375','dossier_medical_id' => '228','description' => 'multiples épisodes de vertige depuis 2015 aucun traitement aucune consultation','date' => NULL,'type' => 'Médical','created_at' => '2020-08-19 10:46:18','updated_at' => '2020-08-19 10:47:03','deleted_at' => '2020-08-19 10:47:03','slug' => 'medical-1597837578'),
  array('id' => '376','dossier_medical_id' => '228','description' => 'douleurs abdominales diffuses évoluant depuis 01 ans aucune consultation effectue sans facteurs declanchant','date' => NULL,'type' => 'Médical','created_at' => '2020-08-19 10:53:32','updated_at' => '2020-08-19 10:53:32','deleted_at' => NULL,'slug' => 'medical-1597838012'),
  array('id' => '377','dossier_medical_id' => '221','description' => 'Hystérectomie totale radicale en 2015 indiquée pour  dysplasie cervicale ; lipomectomie dorsale en 1981','date' => NULL,'type' => 'Chirugical','created_at' => '2020-08-19 11:04:05','updated_at' => '2020-08-19 11:04:05','deleted_at' => NULL,'slug' => 'chirugical-1597838645'),
  array('id' => '378','dossier_medical_id' => '226','description' => 'Céphalée chronique 
Hypermétropie depuis 1 an traitement initie : lentille correctrices','date' => NULL,'type' => 'Médical','created_at' => '2020-08-20 10:46:42','updated_at' => '2020-08-20 10:46:42','deleted_at' => NULL,'slug' => 'medical-1597924002'),
  array('id' => '379','dossier_medical_id' => '226','description' => 'G5P3003 ; DDR : 01-08-2020 cycle de 26 jours régulier règles de 5 jours menarche 14ans 
Coïtarche : 17ans 
MILDA +','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2020-08-20 10:48:31','updated_at' => '2020-08-20 10:48:31','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1597924111'),
  array('id' => '380','dossier_medical_id' => '226','description' => 'Père décédé suite  AVC  ( HTA connu )
Mère avec pathologie ophtalmologique 
Collatéraux : 1ère /7 (6 Frère Et Sœur En bonne santé) 
Fille pathologie ophtalmologique  non documenté','date' => NULL,'type' => 'Familial','created_at' => '2020-08-20 10:49:37','updated_at' => '2020-08-20 10:49:37','deleted_at' => NULL,'slug' => 'familial-1597924177'),
  array('id' => '381','dossier_medical_id' => '230','description' => '*ménarche: 14ans; durée : 4 jous; cycle de 25jours; régulier; pas de dysménorrhées; ni de métrorragie; ni de ménorragie
 *dépistage des cancer du col de l\'utérus et du sein jamais effectués
 *pas d\'IST

 *méthode de contraception: préservatif
 *G1P0 ;  DDR: 16/11/2020 ; DPA:30/08/2020 ; AG: 29SA+5jours','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2020-08-21 10:38:11','updated_at' => '2020-08-21 10:38:11','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1598009891'),
  array('id' => '382','dossier_medical_id' => '231','description' => '-Bronchite allergique et suspicion d’asthme en 2017 initialement sous Dontomycine : 1cp*2/jour ; medrol 16 : 2cp/jour ; ventoline en   spray : 2 *3/j. Bilan réalisé non concluant avec Spirométrie : VEMS 87% - CVF 90% - Tiffenau 73% par Dr Nyako 
-Hypertrophie prostate découvert en 2018 (volume : 44 ml) sous prostat formular (extrait d’huile de palme)
PSA : 3.1 ng/ml (30/07/18)
PSA : 5.2 ng/ml (12/11/18)
PSA total 3.8 ng/ml – Libre 1.7 ng/ml  % : 0.447 (06/02/20)
-Dernière glycémie à jeûn : 0.79 g/l','date' => NULL,'type' => 'Médical','created_at' => '2020-08-25 05:32:46','updated_at' => '2020-08-25 05:49:11','deleted_at' => NULL,'slug' => 'medical-1598337166'),
  array('id' => '383','dossier_medical_id' => '231','description' => 'RAS','date' => NULL,'type' => 'Chirugical','created_at' => '2020-08-25 05:37:40','updated_at' => '2020-08-25 05:37:40','deleted_at' => NULL,'slug' => 'chirugical-1598337460'),
  array('id' => '384','dossier_medical_id' => '231','description' => 'Frère décédé d’asthme','date' => NULL,'type' => 'Familial','created_at' => '2020-08-25 05:38:30','updated_at' => '2020-08-25 05:38:30','deleted_at' => NULL,'slug' => 'familial-1598337510'),
  array('id' => '385','dossier_medical_id' => '185','description' => 'ménarche:14; durée des règles: 5jours ; Cycle:28 jours et régulier
Dysménorrhées +/- ; dyspareunie-; métrorragies:- ; menométrorragie -;
Coïtarche: 20 ans
Nombre de partenaires sexuels cumulés:3 et actuels:1
Méthode contraceptive: préservatif
Dépistage du cancer du col de l\'utérus: jamais fait
Mammographie: jamais faite
Pas de notion D\'IST
Obstétrique: DDR:12/11/19; AG:36SA1JRS; DPA:23/08/20
G4P3003
G1: ANAT par voie basse d\'un nné de sexe F poids inconnu en 2009 au CS la
Charité de suite favorable
G2: ANAT par voie basse d\'un nné de sexe M, poids inconnu en 2015 au CS
Mandéla de suite favorable
G3: ANAT par voie basse d\'un nné de sexe M de poids inconnu au CS Mandéla
de suite favorable
G4: Grossesse actuelle
Volet prophylaxique:
Antianémique: fumafer cp: 1cp/jour
TPI: 2 doses
VAT: 4 doses;     MILDA+
Bilans biologiques faits : SeroVIH-, TPHA/VDRL-, GE-  faits le 18/05/20
AgHbs - fait le 16/06/20
Glycémie à jeun-; COMBI10-; GSRHO+, ACHCV-;
NFS HB à 10,7g/dl, VGM à 84,3fl; 
TCMH à 23,3 fl, GB à 6400/MM3, PLT à 246/MM3 faits le 22/06/20
Bilan morphologique: une échographie faite le 16/06/20 mettant en exergue','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2020-08-25 09:43:07','updated_at' => '2020-08-25 09:43:07','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1598352187'),
  array('id' => '386','dossier_medical_id' => '185','description' => 'une GIU monofoetale évolutive concordante normale de 30 SA 4jours, placenta
corporéal antérieur, LA normal , PFE 1185g, DPA:21/08/20','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2020-08-25 09:43:40','updated_at' => '2020-08-25 09:43:40','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1598352220'),
  array('id' => '387','dossier_medical_id' => '234','description' => 'asthme : non ; céphalées chronique depuis 4 mois ; pelvialgie
chronique depuis 1 an ; notion de port de verre correcteurs pendant 2-3
ans puis arrêt il y a 5 ans','date' => NULL,'type' => 'Médical','created_at' => '2020-08-25 10:38:23','updated_at' => '2020-08-25 10:38:23','deleted_at' => NULL,'slug' => 'medical-1598355503'),
  array('id' => '388','dossier_medical_id' => '234','description' => 'DDR : il y a 2 mois et demi ; notion d’aménorrhée non gravidique ;
Notion de prise de dépo provera il y a 3 ans concordant avec le début des
troubles du cycle menstruel.
Ménarche : 13 ans ; durée des règles : 3-6 ; durée du cycle : 29 jours
(avant la survenue du trouble du cycle il y a 3 ans) et actuellement : 1
mois et demi à 2 mois ;
Notion de dysménorrhées secondaire : prise en charge initialement par
du paracétamol ; spasfon, et actuellement ne cédant plus à ceux-ci.
Ménorragie : oui (dernière fois il y a 1 an); métrorragie : oui (plus d’une
semaine  il y a 2 ans environ). 
Coitarche : 17ans ; PSC : 3 , PSA : 1 ; dyspareunie : non ; saignement post
coïtal : non 
Contraception : pilule du lendemain
G0P0
Notion d’IST : non ; chlamydia : négative il  y a 8 mois environs 
Notion d’infection vaginale : il y a 4 mois
Dépistage des cancers du col et du sein jamais effectués','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2020-08-25 10:39:19','updated_at' => '2020-08-25 10:39:19','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1598355559'),
  array('id' => '389','dossier_medical_id' => '234','description' => 'Notion de cancer de l’ovaire chez la mère décédée
HTA : 2 grandes mères ; 1 cousine ; tantes
Notion de pathologie rénale : greffe de rein chez la cousine et plusieurs
en dialyse
Diabète : cousine ;','date' => NULL,'type' => 'Familial','created_at' => '2020-08-25 10:39:58','updated_at' => '2020-08-25 10:39:58','deleted_at' => NULL,'slug' => 'familial-1598355598'),
  array('id' => '390','dossier_medical_id' => '232','description' => 'Diabète de type 2 depuis un an sans traitement','date' => NULL,'type' => 'Médical','created_at' => '2020-08-25 19:40:55','updated_at' => '2020-08-25 19:59:11','deleted_at' => '2020-08-25 19:59:11','slug' => 'medical-1598388055'),
  array('id' => '391','dossier_medical_id' => '232','description' => 'Epigastralgie à H Pylori traité','date' => NULL,'type' => 'Médical','created_at' => '2020-08-25 19:41:15','updated_at' => '2020-09-07 21:29:04','deleted_at' => NULL,'slug' => 'medical-1598388075'),
  array('id' => '392','dossier_medical_id' => '232','description' => 'Laparotomie il y a 35 ans pour chirurgie de l\'oesophage','date' => NULL,'type' => 'Chirugical','created_at' => '2020-08-25 19:42:07','updated_at' => '2020-08-25 19:42:07','deleted_at' => NULL,'slug' => 'chirugical-1598388127'),
  array('id' => '393','dossier_medical_id' => '237','description' => 'MILDA+.
pas de pathologie chronique connue. 
PEV  ajour dᶦapres la mère et non documente. 
dernier déparasitage il ya 02 mois albendazole.
consommation dᶦ eau de forage.','date' => NULL,'type' => 'Médical','created_at' => '2020-08-26 09:03:43','updated_at' => '2020-08-27 05:26:10','deleted_at' => NULL,'slug' => 'medical-1598436223'),
  array('id' => '394','dossier_medical_id' => '237','description' => 'na jamais beneficie d intervention chirurgicale','date' => NULL,'type' => 'Chirugical','created_at' => '2020-08-26 09:28:12','updated_at' => '2020-08-26 09:28:12','deleted_at' => NULL,'slug' => 'chirugical-1598437692'),
  array('id' => '395','dossier_medical_id' => '234','description' => 'HTA chez les 2 grandes mères, tantes et cousine','date' => NULL,'type' => 'Familial','created_at' => '2020-08-27 18:30:50','updated_at' => '2020-08-27 18:30:50','deleted_at' => NULL,'slug' => 'familial-1598556650'),
  array('id' => '396','dossier_medical_id' => '234','description' => 'Cancer gynécologique chez la mère','date' => NULL,'type' => 'Familial','created_at' => '2020-08-27 18:33:34','updated_at' => '2020-08-27 18:33:34','deleted_at' => NULL,'slug' => 'familial-1598556814'),
  array('id' => '397','dossier_medical_id' => '229','description' => 'Pas de pathologies chroniques connues','date' => NULL,'type' => 'Médical','created_at' => '2020-08-28 09:14:57','updated_at' => '2020-08-28 09:14:57','deleted_at' => NULL,'slug' => 'medical-1598609697'),
  array('id' => '398','dossier_medical_id' => '229','description' => 'Césarienne en 2018 indiquée pour pré-éclampsie sévère sur grossesse gémellaire','date' => NULL,'type' => 'Chirugical','created_at' => '2020-08-28 09:15:45','updated_at' => '2020-08-28 09:15:45','deleted_at' => NULL,'slug' => 'chirugical-1598609745'),
  array('id' => '399','dossier_medical_id' => '229','description' => 'G6P2403 (4 FSC, 1 ANAT, 1 C/S sur grossesse gémellaire), DDR : 18/08/2020, contraceptif hormonal (non), reste SP','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2020-08-28 09:16:23','updated_at' => '2020-08-28 09:16:23','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1598609783'),
  array('id' => '400','dossier_medical_id' => '229','description' => 'RAS','date' => NULL,'type' => 'Familial','created_at' => '2020-08-28 09:16:37','updated_at' => '2020-08-28 09:16:37','deleted_at' => NULL,'slug' => 'familial-1598609797'),
  array('id' => '401','dossier_medical_id' => '240','description' => 'ne dors pas sous moustiquaire imprégnée a longue durée d’action 

gastrite chronique depuis plus de 05 ans  sous omepraole 20mg  et hydroxyde d’allulinum 200mg sachet  si crise','date' => NULL,'type' => 'Médical','created_at' => '2020-09-01 08:51:48','updated_at' => '2020-09-01 12:52:24','deleted_at' => NULL,'slug' => 'medical-1598953908'),
  array('id' => '402','dossier_medical_id' => '240','description' => 'DDR:16-08-2020.
g1p1001 Accouchement normal par voie basse le 23 juin 2019 sans complications.
patiente allaitante. 
  pas de contraception 
durée du cycle 28-30jours 
règles de 05 jours
pas de dysménorrhée chronique','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2020-09-01 08:53:30','updated_at' => '2020-09-05 13:56:53','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1598954010'),
  array('id' => '403','dossier_medical_id' => '241','description' => 'Ménopausée','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2020-09-01 14:24:43','updated_at' => '2021-09-30 12:03:54','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1598973883'),
  array('id' => '404','dossier_medical_id' => '241','description' => 'Césarienne en 1994','date' => NULL,'type' => 'Chirugical','created_at' => '2020-09-01 14:25:20','updated_at' => '2020-09-01 14:25:20','deleted_at' => NULL,'slug' => 'chirugical-1598973920'),
  array('id' => '405','dossier_medical_id' => '241','description' => 'Lipomectomie thoracique gauche en 2019','date' => NULL,'type' => 'Chirugical','created_at' => '2020-09-01 14:25:56','updated_at' => '2020-09-01 14:25:56','deleted_at' => NULL,'slug' => 'chirugical-1598973956'),
  array('id' => '406','dossier_medical_id' => '242','description' => 'GSRH : ?; sérologie VIH, Hépatites B et C il y a  5 mois environ tous négatif
PEV : à jour selon la maman','date' => NULL,'type' => 'Médical','created_at' => '2020-09-01 16:35:25','updated_at' => '2020-09-01 16:35:25','deleted_at' => NULL,'slug' => 'medical-1598981725'),
  array('id' => '407','dossier_medical_id' => '239','description' => 'Hypertendu depuis 38 ans','date' => NULL,'type' => 'Médical','created_at' => '2020-09-01 19:06:52','updated_at' => '2020-09-01 19:06:52','deleted_at' => NULL,'slug' => 'medical-1598990812'),
  array('id' => '408','dossier_medical_id' => '239','description' => 'Fibrillation auriculaire depuis un an','date' => NULL,'type' => 'Médical','created_at' => '2020-09-01 19:07:24','updated_at' => '2020-09-01 19:07:24','deleted_at' => NULL,'slug' => 'medical-1598990844'),
  array('id' => '409','dossier_medical_id' => '239','description' => 'Cardiomyopathie dilatée depuis 1 an','date' => NULL,'type' => 'Médical','created_at' => '2020-09-01 19:08:01','updated_at' => '2020-09-01 19:08:01','deleted_at' => NULL,'slug' => 'medical-1598990881'),
  array('id' => '410','dossier_medical_id' => '239','description' => 'Discopathie lombaire dégénérative depuis 1 an','date' => NULL,'type' => 'Médical','created_at' => '2020-09-01 19:08:44','updated_at' => '2020-09-01 19:08:44','deleted_at' => NULL,'slug' => 'medical-1598990924'),
  array('id' => '411','dossier_medical_id' => '190','description' => 'Lombarthrose étagée L3-L5','date' => NULL,'type' => 'Médical','created_at' => '2020-09-02 14:22:03','updated_at' => '2020-09-02 14:22:03','deleted_at' => NULL,'slug' => 'medical-1599060123'),
  array('id' => '412','dossier_medical_id' => '244','description' => 'patiente dormant sous moustiquaire imprégné a longue durée D’action   
pas de pathologie chronique connue a ce jour','date' => NULL,'type' => 'Médical','created_at' => '2020-09-03 16:45:13','updated_at' => '2020-09-04 05:10:51','deleted_at' => NULL,'slug' => 'medical-1599155113'),
  array('id' => '413','dossier_medical_id' => '244','description' => 'N’a jamais bénéficié d’une intervention chirurgicale','date' => NULL,'type' => 'Chirugical','created_at' => '2020-09-04 05:19:03','updated_at' => '2020-09-04 05:19:50','deleted_at' => '2020-09-04 05:19:50','slug' => 'chirugical-1599200343'),
  array('id' => '414','dossier_medical_id' => '244','description' => 'N’a jamais bénéficié d’une intervention chirurgicale','date' => '2020-09-03','type' => 'Chirugical','created_at' => '2020-09-04 05:19:39','updated_at' => '2020-09-04 05:19:39','deleted_at' => NULL,'slug' => 'chirugical-1599200379'),
  array('id' => '415','dossier_medical_id' => '244','description' => 'Date des dernière règle 08-07-2020   
age gestationnel actuel 8 sa + 1 jour 
G3P2012 

G1 en 2013 fausse couche spontanée 

G2 en 2014 accouchement par voie basse a terme  d’un nouveau ne  de sexe masculin 3000 gramme complique de déchirure périnéale suturé

G3 en 2015 accouchement a terme  par voie basse d’un nouveau ne  de sexe féminin  3000 gramme sans complication 


Nombre de partenaire sexuel actuel : 01 
Nombre de partenaire sexuel cumulé : 01 

aucune méthode de contraception','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2020-09-04 05:47:22','updated_at' => '2020-09-04 05:49:25','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1599202042'),
  array('id' => '416','dossier_medical_id' => '248','description' => 'Diabète de type 2 depuis 6 ans','date' => NULL,'type' => 'Médical','created_at' => '2020-09-04 14:27:16','updated_at' => '2020-09-04 14:27:16','deleted_at' => NULL,'slug' => 'medical-1599233236'),
  array('id' => '417','dossier_medical_id' => '248','description' => 'Epigastralgie','date' => NULL,'type' => 'Médical','created_at' => '2020-09-04 14:27:39','updated_at' => '2020-09-04 14:27:39','deleted_at' => NULL,'slug' => 'medical-1599233259'),
  array('id' => '418','dossier_medical_id' => '248','description' => 'Lombosciatalgie chronique','date' => NULL,'type' => 'Médical','created_at' => '2020-09-04 14:28:06','updated_at' => '2020-09-04 14:28:06','deleted_at' => NULL,'slug' => 'medical-1599233286'),
  array('id' => '419','dossier_medical_id' => '243','description' => 'Épigastralgie depuis plus de 10 ans, non exploré.
Prise régulière des anti-inflammatoires.','date' => NULL,'type' => 'Médical','created_at' => '2020-09-04 20:33:46','updated_at' => '2020-09-04 20:33:46','deleted_at' => NULL,'slug' => 'medical-1599255226'),
  array('id' => '420','dossier_medical_id' => '238','description' => 'Gynéco-obstétrique: 

G1P0

*DPA d’apres echgraphie du 01-07-2020    est prevu pour 25-08-2020 ; Ag actuelle 41sa+1jour 

 * K12(3/28),  régulier; dysménorrhée: de temps à autre; ménorragie: non ;   

* Coïtarche: 15 ans ; PSC:1 ; PSA:1

*dépistage des cancers du col et du sein jamais effectués

*IST: non

*méthode de contraceptive: préservatif; compte le cycle; 

*Coïtarche: 17ans ; PSC: 2 ; PSA: 1

 * grossesse actuelle : 
   une CPN éffectuée dans un centre de santé : à 19 SA

 - bilans 

   biologique: 

   *LAV: négatif le 08/05/2020 ( à refaire dans 3 mois le 08 août)

    *urine: albumine: 0.3 g/l ; sucre: négatif 

  *taux d\'hb: 10.9 g/l

  *hepatie B: positive le 08/05/2020

  *GE: positive traité par perfusion 

- morphologiques: une Echographie du 01/07/2020: GIU monofoetale normalement évolutive de 32SA+01jour ; DPA: 25/08/2020; PFE: 2045g; présentation céphalique; pas de circulaire du cordon

  - prophylaxie: antianémique: 
   *fefol: 1cp/jour 
  *calcium D3: 1cp*3/jour
  * TPI: 3 dose
 - VAT : 1 dose le 08/05/2020 , rendez-vous pour 2e dose manqué 

- paramètres en début de grossesse: 

 TA: 113/59mmhg;  poids: 72kg;','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2020-09-05 08:30:52','updated_at' => '2020-09-05 08:35:34','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1599298252'),
  array('id' => '421','dossier_medical_id' => '238','description' => '- ascendant: pas d\'HTA; pas de DT2; 
- collatéraux: 4é/4(3F+1G) tous en bonne santé apparente','date' => NULL,'type' => 'Familial','created_at' => '2020-09-05 08:46:06','updated_at' => '2020-09-05 08:46:06','deleted_at' => NULL,'slug' => 'familial-1599299166'),
  array('id' => '422','dossier_medical_id' => '250','description' => 'Gynécologique
- ménarche: 12-13ans ; durée des règles: 5-6 jours, durée cycle: 28 jours; irrégulier; dysménorrhées: oui ; ménorragie: non; métrorragie: non; 
- coitarche: 15 ans; PSC: 1 ; PSA:1 ; dyspareunie: non; saignement post coîtal: non; 
- leucorrhée de moyenne abondance non fétides
- IST: non 
- test chlamydia: jamais fait
- méthode contraceptive: préservatif
 
Obstétricaux:
- G4P3003; DDR:?;
- 1er enfant âgé de 5 ans et demi de sexe masculin, né à terme suite à un accouchement normal par voie basse, poids à la naissance 3000grs; 
- 2e âgé de 3 ans de sexe masculin, né à terme suite à un accouchement normal par voie basse, poids à la naissance 3500grs
-3e âgé de 2 ans de sexe masculin; né à terme suite à un accouchement normal par voie basse, poids à la naissance 2500grs
- Grossesse actuelle: DDR:? ; aucune CPN faite, aucun bilans 
NB: patiente ne faisant pas de CPN lors des grossesses','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2020-09-06 06:19:45','updated_at' => '2020-09-06 06:19:45','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1599376785'),
  array('id' => '423','dossier_medical_id' => '251','description' => '- hypertendu connu depuis 30 ans découverte à l’HCY est sous traitement non documenté  ; pas de diabète
- Suivi pour Hypertrophie bénigne de la prostate par un urologue de l’HGY est sous Permixon 160mg : 1cp/jour','date' => NULL,'type' => 'Médical','created_at' => '2020-09-06 08:43:35','updated_at' => '2020-09-06 08:43:35','deleted_at' => NULL,'slug' => 'medical-1599385415'),
  array('id' => '424','dossier_medical_id' => '251','description' => 'Appendicectomie faite il y’a plusieurs année déjà au CHUY (environ 40 ans) de suite favorable','date' => NULL,'type' => 'Chirugical','created_at' => '2020-09-06 08:44:01','updated_at' => '2020-09-06 08:44:01','deleted_at' => NULL,'slug' => 'chirugical-1599385441'),
  array('id' => '425','dossier_medical_id' => '251','description' => 'Herniorraphie inguinale droite faite il y’a 10 ans au CHUY de suite favorable','date' => NULL,'type' => 'Chirugical','created_at' => '2020-09-06 08:44:34','updated_at' => '2020-09-06 08:44:34','deleted_at' => NULL,'slug' => 'chirugical-1599385474'),
  array('id' => '426','dossier_medical_id' => '252','description' => 'HTA depuis environ 2 ans est sous traitement non documenté;
Notion d\'ulcère gastro diodénale depuis plusieurs années
A été prise en charge récemment (environ une semaine) pour accès palustre
simple
diabétique -','date' => NULL,'type' => 'Médical','created_at' => '2020-09-06 11:07:27','updated_at' => '2020-09-06 11:07:27','deleted_at' => NULL,'slug' => 'medical-1599394047'),
  array('id' => '427','dossier_medical_id' => '253','description' => 'Epigastralgie occasionnelle, reste SP','date' => NULL,'type' => 'Médical','created_at' => '2020-09-07 13:10:43','updated_at' => '2020-09-07 13:10:43','deleted_at' => NULL,'slug' => 'medical-1599487843'),
  array('id' => '428','dossier_medical_id' => '253','description' => 'RAS','date' => NULL,'type' => 'Chirugical','created_at' => '2020-09-07 13:11:00','updated_at' => '2020-09-07 13:11:00','deleted_at' => NULL,'slug' => 'chirugical-1599487860'),
  array('id' => '429','dossier_medical_id' => '253','description' => 'Ménopausé, reste SP','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2020-09-07 13:13:55','updated_at' => '2020-09-07 13:13:55','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1599488035'),
  array('id' => '430','dossier_medical_id' => '253','description' => 'Mari décédé il y\'a 2 ans de suites de courtes maladies à son domicile','date' => NULL,'type' => 'Familial','created_at' => '2020-09-07 13:14:28','updated_at' => '2020-09-07 15:05:11','deleted_at' => NULL,'slug' => 'familial-1599488068'),
  array('id' => '431','dossier_medical_id' => '254','description' => 'Epigastralgie chronique, reste SP','date' => NULL,'type' => 'Médical','created_at' => '2020-09-07 14:32:14','updated_at' => '2020-09-07 14:32:14','deleted_at' => NULL,'slug' => 'medical-1599492734'),
  array('id' => '432','dossier_medical_id' => '254','description' => 'Césarienne en 2018 indiquée pour double circulaire du cordon sur grossesse monofoetale','date' => NULL,'type' => 'Chirugical','created_at' => '2020-09-07 14:33:06','updated_at' => '2020-09-07 14:33:06','deleted_at' => NULL,'slug' => 'chirugical-1599492786'),
  array('id' => '433','dossier_medical_id' => '254','description' => 'DDR : 11/05/2020    DPA : 18/02/2021     AG : 17 SA    G2P1001, reste SP','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2020-09-07 14:35:49','updated_at' => '2020-09-07 14:35:49','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1599492949'),
  array('id' => '434','dossier_medical_id' => '254','description' => 'RAS','date' => NULL,'type' => 'Familial','created_at' => '2020-09-07 14:36:06','updated_at' => '2020-09-07 14:36:06','deleted_at' => NULL,'slug' => 'familial-1599492966'),
  array('id' => '435','dossier_medical_id' => '256','description' => 'Hypertrophie de la prostate probablement néoplasique avec sonde urinaire à demeure depuis deux semaines pour hydronéphrose bilatérale','date' => NULL,'type' => 'Médical','created_at' => '2020-09-07 21:08:43','updated_at' => '2020-09-07 21:08:43','deleted_at' => NULL,'slug' => 'medical-1599516523'),
  array('id' => '436','dossier_medical_id' => '256','description' => 'Hypertendu depuis 1 an sous NATRIXAM 1.5/5','date' => NULL,'type' => 'Médical','created_at' => '2020-09-07 21:09:29','updated_at' => '2020-09-07 21:09:29','deleted_at' => NULL,'slug' => 'medical-1599516569'),
  array('id' => '437','dossier_medical_id' => '256','description' => 'Thrombose veineuse profonde et insuffisance veineuse de la grande saphène gauche depuis juillet sous SINTROM et DAFLON arrêtés depuis deux semaines','date' => NULL,'type' => 'Médical','created_at' => '2020-09-07 21:10:46','updated_at' => '2020-09-07 21:10:46','deleted_at' => NULL,'slug' => 'medical-1599516646'),
  array('id' => '438','dossier_medical_id' => '256','description' => 'Cervicarthrose plus névralgie cervicobrachiale sous Tremadol 50 et GABEN','date' => NULL,'type' => 'Médical','created_at' => '2020-09-07 21:11:42','updated_at' => '2020-09-07 21:11:42','deleted_at' => NULL,'slug' => 'medical-1599516702'),
  array('id' => '439','dossier_medical_id' => '256','description' => 'Epigastralgie','date' => NULL,'type' => 'Médical','created_at' => '2020-09-07 21:11:59','updated_at' => '2020-09-07 21:11:59','deleted_at' => NULL,'slug' => 'medical-1599516719'),
  array('id' => '440','dossier_medical_id' => '243','description' => 'G1P1001
FCV jamais fait','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2020-09-09 05:47:03','updated_at' => '2020-09-09 05:47:03','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1599634023'),
  array('id' => '441','dossier_medical_id' => '258','description' => 'Pas de diabète ; pas d’HTA
NB : consultation cardiologique faite le 17/06/2019 dans une struccture hospitalière à Obobogo dont le motif de était une évaluation d’un syndrome métabolique, à l’enquête des systèmes : palpitations + ; dyspnée d’effort + ; 
TA : BG : 121/73 mmhg ; BD : 114/66 mmhg
Bilans réalisés le 17/06/2019 :
Glycémie à jeun : 1.32 g/l ; NFS : Hb à 13.8 g/dl','date' => NULL,'type' => 'Médical','created_at' => '2020-09-09 15:11:11','updated_at' => '2020-09-09 15:11:11','deleted_at' => NULL,'slug' => 'medical-1599667871'),
  array('id' => '442','dossier_medical_id' => '258','description' => 'G11P12OO12 (dont une paire de jumeaux)
Dépistage des cancers du sein et col de l’utérus : jamais effectués','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2020-09-09 15:11:39','updated_at' => '2020-09-09 15:11:39','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1599667899'),
  array('id' => '443','dossier_medical_id' => '260','description' => '* Hypertendu connu depuis 2012, découverte au cours d\'une prise de paramètres de façon anodine, sous fludex LP 1.5mg: 1cp/ jour le matin; Rosukaa (dosage?): 1cp/jour le matin ; observant au traitement;','date' => NULL,'type' => 'Médical','created_at' => '2020-09-10 10:12:41','updated_at' => '2020-09-10 14:49:33','deleted_at' => NULL,'slug' => 'medical-1599736361'),
  array('id' => '444','dossier_medical_id' => '261','description' => 'HTA depuis plus de 25 ans sous NOBIRETIC 5/12.5 et AMLOR 5mg','date' => NULL,'type' => 'Médical','created_at' => '2020-09-10 11:26:31','updated_at' => '2020-09-10 11:26:31','deleted_at' => NULL,'slug' => 'medical-1599740791'),
  array('id' => '445','dossier_medical_id' => '261','description' => 'Rhumatisme articulaire aigu depuis 15 ans sous METOTREXATE et MEDROL si douleurs','date' => NULL,'type' => 'Médical','created_at' => '2020-09-10 11:27:41','updated_at' => '2020-09-10 11:27:41','deleted_at' => NULL,'slug' => 'medical-1599740861'),
  array('id' => '446','dossier_medical_id' => '261','description' => 'G5P5004','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2020-09-10 11:28:07','updated_at' => '2020-09-10 11:28:07','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1599740887'),
  array('id' => '447','dossier_medical_id' => '261','description' => 'Hernie hiatale non opérée','date' => NULL,'type' => 'Chirugical','created_at' => '2020-09-10 11:28:34','updated_at' => '2020-09-10 11:28:34','deleted_at' => NULL,'slug' => 'chirugical-1599740914'),
  array('id' => '448','dossier_medical_id' => '261','description' => 'Hystérectomie en 2000','date' => NULL,'type' => 'Chirugical','created_at' => '2020-09-10 11:28:58','updated_at' => '2020-09-10 11:28:58','deleted_at' => NULL,'slug' => 'chirugical-1599740938'),
  array('id' => '449','dossier_medical_id' => '261','description' => 'Epigastralgie','date' => NULL,'type' => 'Médical','created_at' => '2020-09-10 11:29:19','updated_at' => '2020-09-10 11:29:19','deleted_at' => NULL,'slug' => 'medical-1599740959'),
  array('id' => '450','dossier_medical_id' => '260','description' => '* notion de prostatite en  2016 traité','date' => NULL,'type' => 'Médical','created_at' => '2020-09-10 14:50:21','updated_at' => '2020-09-10 14:50:21','deleted_at' => NULL,'slug' => 'medical-1599753021'),
  array('id' => '451','dossier_medical_id' => '262','description' => 'milda- 
pas de pathologie chronique connue','date' => NULL,'type' => 'Médical','created_at' => '2020-09-11 11:37:07','updated_at' => '2020-09-11 11:37:07','deleted_at' => NULL,'slug' => 'medical-1599827827'),
  array('id' => '452','dossier_medical_id' => '262','description' => 'jamais ete operer','date' => NULL,'type' => 'Chirugical','created_at' => '2020-09-11 11:37:24','updated_at' => '2020-09-11 11:37:24','deleted_at' => NULL,'slug' => 'chirugical-1599827844'),
  array('id' => '453','dossier_medical_id' => '264','description' => 'MILDA+ 
pas de pathologie chronique connue','date' => NULL,'type' => 'Médical','created_at' => '2020-09-11 15:10:08','updated_at' => '2020-09-11 15:10:08','deleted_at' => NULL,'slug' => 'medical-1599840608'),
  array('id' => '454','dossier_medical_id' => '264','description' => 'N’a jamais bénéficié d’une intervention chirurgicale','date' => NULL,'type' => 'Chirugical','created_at' => '2020-09-11 15:12:26','updated_at' => '2020-09-11 15:12:26','deleted_at' => NULL,'slug' => 'chirugical-1599840746'),
  array('id' => '455','dossier_medical_id' => '265','description' => 'première césarienne en 2007 pour placenta praevia, opéré à l’hôpital général , sans complication','date' => NULL,'type' => 'Chirugical','created_at' => '2020-09-16 11:05:23','updated_at' => '2020-09-16 11:05:23','deleted_at' => NULL,'slug' => 'chirugical-1600257923'),
  array('id' => '456','dossier_medical_id' => '265','description' => 'deuxième césarienne en 2008; pour utérus cicatriciel avec suspicion de macrosomie foetale; suite favorale','date' => NULL,'type' => 'Chirugical','created_at' => '2020-09-16 11:06:46','updated_at' => '2020-09-16 11:06:46','deleted_at' => NULL,'slug' => 'chirugical-1600258006'),
  array('id' => '457','dossier_medical_id' => '265','description' => 'Asthmatique depuis l\'âge de 16 ans, sous symbicort 100 mg: 1 bouffée par jour , ou 2 fois par jour en cas d\'essoufflement ou sifflement','date' => NULL,'type' => 'Médical','created_at' => '2020-09-16 11:09:47','updated_at' => '2020-09-16 11:09:47','deleted_at' => NULL,'slug' => 'medical-1600258187'),
  array('id' => '458','dossier_medical_id' => '265','description' => 'pneumonie en 2014 ( vaccin contre pneumonie 1e dose en 2015 ; 3e dose manquer en mars dû à la pandémie corona virus','date' => NULL,'type' => 'Médical','created_at' => '2020-09-16 11:13:27','updated_at' => '2020-09-16 11:13:27','deleted_at' => NULL,'slug' => 'medical-1600258407'),
  array('id' => '459','dossier_medical_id' => '266','description' => 'Epigastralgie','date' => NULL,'type' => 'Médical','created_at' => '2020-09-16 11:20:02','updated_at' => '2020-09-16 11:20:02','deleted_at' => NULL,'slug' => 'medical-1600258802'),
  array('id' => '460','dossier_medical_id' => '266','description' => 'G2P1011','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2020-09-16 11:20:40','updated_at' => '2020-09-16 11:20:40','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1600258840'),
  array('id' => '461','dossier_medical_id' => '267','description' => 'Suivi par un urologue au début de l\'année pour pathologie non précisée','date' => NULL,'type' => 'Médical','created_at' => '2020-09-16 11:57:46','updated_at' => '2020-09-16 11:57:46','deleted_at' => NULL,'slug' => 'medical-1600261066'),
  array('id' => '462','dossier_medical_id' => '267','description' => 'PVVIH sous TDF-3TC-EFV','date' => NULL,'type' => 'Médical','created_at' => '2020-09-16 11:58:48','updated_at' => '2020-09-16 11:58:48','deleted_at' => NULL,'slug' => 'medical-1600261128'),
  array('id' => '463','dossier_medical_id' => '269','description' => 'ascendant : 2 parents HTA; mère diabétique
Fratrie: 7e/7 soit 3 garçons +4 filles (toute la fratrie HTA)','date' => NULL,'type' => 'Familial','created_at' => '2020-09-16 14:08:21','updated_at' => '2020-09-16 14:08:21','deleted_at' => NULL,'slug' => 'familial-1600268901'),
  array('id' => '464','dossier_medical_id' => '270','description' => 'Hypertendu connue depuis 2012 , dernier Bilan HTA réalisé en 2014, non documenté','date' => NULL,'type' => 'Médical','created_at' => '2020-09-17 18:27:49','updated_at' => '2020-09-17 18:27:49','deleted_at' => NULL,'slug' => 'medical-1600370869'),
  array('id' => '465','dossier_medical_id' => '270','description' => 'Lombalgie chronique depuis plus de 5 ans','date' => NULL,'type' => 'Médical','created_at' => '2020-09-17 18:28:15','updated_at' => '2020-09-17 18:28:15','deleted_at' => NULL,'slug' => 'medical-1600370895'),
  array('id' => '466','dossier_medical_id' => '270','description' => 'Epigastralgie évoluant depuis plus de 20ans, FOGD réalisé en 2014 en Belgique, non documenté.','date' => NULL,'type' => 'Médical','created_at' => '2020-09-17 18:29:27','updated_at' => '2020-09-17 18:29:27','deleted_at' => NULL,'slug' => 'medical-1600370967'),
  array('id' => '467','dossier_medical_id' => '270','description' => 'FCV et Mammographie réalisé en Belgique en 2014 , non documentés','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2020-09-17 18:30:18','updated_at' => '2020-09-17 18:30:18','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1600371018'),
  array('id' => '468','dossier_medical_id' => '271','description' => 'césarienne G9, kystectomie abdominale','date' => NULL,'type' => 'Chirugical','created_at' => '2020-09-18 10:14:12','updated_at' => '2020-09-18 10:14:12','deleted_at' => NULL,'slug' => 'chirugical-1600427652'),
  array('id' => '469','dossier_medical_id' => '271','description' => 'HTA connue mal suivie ; épigastralgie chronique','date' => NULL,'type' => 'Médical','created_at' => '2020-09-18 10:14:54','updated_at' => '2020-09-18 10:14:54','deleted_at' => NULL,'slug' => 'medical-1600427694'),
  array('id' => '470','dossier_medical_id' => '271','description' => 'G11P10.0.1.9 (1 fausse couche 1 DCD) ; aucun bilans pour le dépistage des cancer du col/sein','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2020-09-18 10:15:14','updated_at' => '2020-09-18 10:15:14','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1600427714'),
  array('id' => '471','dossier_medical_id' => '272','description' => 'Epigastralgie','date' => NULL,'type' => 'Médical','created_at' => '2020-09-18 13:10:15','updated_at' => '2020-09-18 13:10:15','deleted_at' => NULL,'slug' => 'medical-1600438215'),
  array('id' => '472','dossier_medical_id' => '272','description' => 'Appendicectomie','date' => NULL,'type' => 'Chirugical','created_at' => '2020-09-18 13:13:57','updated_at' => '2020-09-18 13:13:57','deleted_at' => NULL,'slug' => 'chirugical-1600438437'),
  array('id' => '473','dossier_medical_id' => '273','description' => 'opérée en 2009 pour kyste ovarien (gauche? droit?) aux suite favorables','date' => NULL,'type' => 'Chirugical','created_at' => '2020-09-18 22:40:14','updated_at' => '2020-09-18 22:40:14','deleted_at' => NULL,'slug' => 'chirugical-1600472414'),
  array('id' => '474','dossier_medical_id' => '273','description' => 'notion d\'HTA chez le grand père et un oncle','date' => NULL,'type' => 'Familial','created_at' => '2020-09-18 22:41:32','updated_at' => '2020-09-18 22:41:32','deleted_at' => NULL,'slug' => 'familial-1600472492'),
  array('id' => '475','dossier_medical_id' => '274','description' => 'Hépatites B : positive depuis 2008 asyptômatique suivi par un hépatogastro entérologue (Dr ANKOINE)','date' => NULL,'type' => 'Médical','created_at' => '2020-09-19 05:42:08','updated_at' => '2020-09-19 05:42:08','deleted_at' => NULL,'slug' => 'medical-1600497728'),
  array('id' => '476','dossier_medical_id' => '276','description' => 'Gynécologique : DDR : 17-12-2019  AG actuelle 38sa+6jr 
Obstétricale : G2P0010 
G1 : il Ya deux ans avortement par aspiration 
G2 : grossesse actuelle 03 CPN effectuées  à l’hôpital de district de la cite verte  
Traitement préventif :  
-02 doses de TPI reçu 
-Tardyferon B9  1cp par jour depuis la 15ieme semaine d’aménorrhée  
- VAT deux doses reçues la dernière dose le 10 aout 2020 

Bilan Biologique :
GE Négative il ya 02 mois
Groupe Sanguin Et Rhésus : B rhésus +
Électrophorèse de l’hémoglobine : pas effectuée
NFS : pas effectuée
ECBU: pas effectuée
Glycémie A Jeun : pas effectuée
Pcv : pas effectuée
Hiv: pas effectuée
Tpha/Vdrl: pas effectuée
Sérologie Chlamydia: pas effectuée 
Sérologie Hépatite B Et C: pas effectuée 
Le 14/09/2020
GAJ : 0.9 g/l ; sero LAV : négative ; ACHCV/AgHbs : négatives ; Hb : 10.1 g/dl
Bilan Morphologique 
Une Échographie du Second Trimestre (du 09/07/2020)  GIUMFE de 28SA+5jours onforme aux termes cliniques, sexe masculin, présentation céphalique, morphologie fœtale normale placenta corporeal antérieur  bien inséré.et d\'échostructure normale; DPA: 26/09/2020
Echographie du 16/09/2020 : GIUMFE de 36SA ; DPA : 14/10/2020 ; 
PFE : 2781grs, , présentation céphalique, pas de circulaire du cordon','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2020-09-21 11:48:57','updated_at' => '2020-09-22 02:42:04','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1600692537'),
  array('id' => '477','dossier_medical_id' => '277','description' => 'Myope depuis plus de 10ans, porte les verres de correction','date' => NULL,'type' => 'Médical','created_at' => '2020-09-21 12:12:32','updated_at' => '2020-09-21 12:12:32','deleted_at' => NULL,'slug' => 'medical-1600693952'),
  array('id' => '478','dossier_medical_id' => '277','description' => 'Uveite diagnostiqué il y a 2 ans,prise de corticoïdes pendant 2 mois.','date' => NULL,'type' => 'Médical','created_at' => '2020-09-21 12:14:55','updated_at' => '2020-09-21 12:14:55','deleted_at' => NULL,'slug' => 'medical-1600694095'),
  array('id' => '479','dossier_medical_id' => '251','description' => 'Hépatite C traitée','date' => NULL,'type' => 'Médical','created_at' => '2020-09-22 11:13:42','updated_at' => '2020-09-22 11:13:42','deleted_at' => NULL,'slug' => 'medical-1600776822'),
  array('id' => '480','dossier_medical_id' => '252','description' => 'HTA','date' => '2018-01-01','type' => 'Médical','created_at' => '2020-09-22 12:28:24','updated_at' => '2020-09-22 12:28:24','deleted_at' => NULL,'slug' => 'medical-1600781304'),
  array('id' => '481','dossier_medical_id' => '252','description' => 'Ulcère gastro-duodénale','date' => NULL,'type' => 'Médical','created_at' => '2020-09-22 12:29:08','updated_at' => '2020-09-22 12:29:08','deleted_at' => NULL,'slug' => 'medical-1600781348'),
  array('id' => '482','dossier_medical_id' => '252','description' => 'Accès palustre','date' => NULL,'type' => 'Médical','created_at' => '2020-09-22 12:29:33','updated_at' => '2020-09-22 12:29:33','deleted_at' => NULL,'slug' => 'medical-1600781373'),
  array('id' => '483','dossier_medical_id' => '252','description' => 'Ostéonécrose de la tête fémorale droite','date' => '2017-01-01','type' => 'Médical','created_at' => '2020-09-22 12:54:08','updated_at' => '2020-09-22 12:54:08','deleted_at' => NULL,'slug' => 'medical-1600782848'),
  array('id' => '484','dossier_medical_id' => '291','description' => '•	Médicaux : HTA connue depuis 14 ans sous Natrixam 1.5/5mg Cp (1cp/j) compliante et observante ; épigastralgie intermittente rythmée par la prise d’AINS spontanément résolutive','date' => NULL,'type' => 'Médical','created_at' => '2020-09-23 12:52:14','updated_at' => '2020-09-23 12:52:14','deleted_at' => NULL,'slug' => 'medical-1600869134'),
  array('id' => '485','dossier_medical_id' => '291','description' => 'hystérectomie total sur utérus myomateux il y a 8 ans ; cure pour prolapsus rectale sur hémorroïde interne il y a environ 9 ans','date' => NULL,'type' => 'Chirugical','created_at' => '2020-09-23 12:54:40','updated_at' => '2020-09-23 12:54:40','deleted_at' => NULL,'slug' => 'chirugical-1600869280'),
  array('id' => '486','dossier_medical_id' => '291','description' => 'G6P5, dépistage Néo du col/sein jamais réalisés','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2020-09-23 12:55:18','updated_at' => '2020-09-23 12:55:18','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1600869318'),
  array('id' => '487','dossier_medical_id' => '282','description' => 'Lombalgie chronique','date' => NULL,'type' => 'Médical','created_at' => '2020-09-24 08:15:37','updated_at' => '2020-09-24 08:15:37','deleted_at' => NULL,'slug' => 'medical-1600938937'),
  array('id' => '488','dossier_medical_id' => '282','description' => 'G4P4004
Frottis cervico-vaginal jamais réalisé
Mamographie ; jamais réalisée','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2020-09-24 08:16:51','updated_at' => '2020-09-24 08:16:51','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1600939011'),
  array('id' => '489','dossier_medical_id' => '286','description' => 'Epigastralgie connue depuis plusieurs années non-exploré','date' => NULL,'type' => 'Médical','created_at' => '2020-09-24 08:41:56','updated_at' => '2020-09-24 08:41:56','deleted_at' => NULL,'slug' => 'medical-1600940516'),
  array('id' => '490','dossier_medical_id' => '285','description' => 'HTA connu depuis 2005, non controlée
AVC en 2009 avec sequelle motice sous cardioaspirine cp: 1cp/jr','date' => NULL,'type' => 'Médical','created_at' => '2020-09-24 09:13:36','updated_at' => '2020-09-24 09:13:36','deleted_at' => NULL,'slug' => 'medical-1600942416'),
  array('id' => '491','dossier_medical_id' => '257','description' => 'G5P3013 :
•	G1, G2 et G3 : ANAT en 2008, 2014 et 2018
•	G4 : FSC à environ 4 SA en 2019 (cause non déterminée)
•	G5 (DDR : 28/11/2019,  DPA : 20/08/2020,  AG : 44 SA)
-	2 CPN faites et 3 échographies réalisées
-	Bilan prénatal réalisé : Toxoplasmose : positif (21/04/2020), rubéole : positif (21/04/2020), AgHBs : négatif (04/05/2020), GsRh ???,  Sérologie SM ???','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2020-09-24 11:37:54','updated_at' => '2020-09-24 11:37:54','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1600951074'),
  array('id' => '492','dossier_medical_id' => '257','description' => 'Pas de pathologie chronique','date' => NULL,'type' => 'Médical','created_at' => '2020-09-24 11:38:19','updated_at' => '2020-09-24 11:38:19','deleted_at' => NULL,'slug' => 'medical-1600951099'),
  array('id' => '493','dossier_medical_id' => '257','description' => 'RAS','date' => NULL,'type' => 'Chirugical','created_at' => '2020-09-24 11:38:34','updated_at' => '2020-09-24 11:38:34','deleted_at' => NULL,'slug' => 'chirugical-1600951114'),
  array('id' => '494','dossier_medical_id' => '267','description' => 'appendicectomie a l’âge de 17ans','date' => NULL,'type' => 'Chirugical','created_at' => '2020-09-25 06:35:22','updated_at' => '2020-09-25 06:35:22','deleted_at' => NULL,'slug' => 'chirugical-1601019322'),
  array('id' => '495','dossier_medical_id' => '267','description' => '-	Conjointe en bonne santé apparente 
-	Descendants (deux enfants de 27 et 24 ans)
-	Père était HTA, Mère était HTA et DT2','date' => NULL,'type' => 'Familial','created_at' => '2020-09-25 06:39:10','updated_at' => '2020-09-25 06:39:10','deleted_at' => NULL,'slug' => 'familial-1601019550'),
  array('id' => '496','dossier_medical_id' => '281','description' => '	Diabétique connue depuis 18 ans mal observant actuellement sous Mixtard et Actrapid ;
	HTA depuis plusieurs années équilibrée sous un traitement non documenté et arrêter volontairement depuis 2 ans ;
	Cécité secondaire à une rétinopathie diabétique.','date' => NULL,'type' => 'Médical','created_at' => '2020-09-28 07:54:33','updated_at' => '2020-09-28 07:54:33','deleted_at' => NULL,'slug' => 'medical-1601283273'),
  array('id' => '497','dossier_medical_id' => '281','description' => 'Opéré en 2019 en Belgique pour cataracte indiquée pour rétinopathie diabétique probable. Suite op marquée par une perte progressive de la vue','date' => NULL,'type' => 'Chirugical','created_at' => '2020-09-28 07:55:04','updated_at' => '2020-09-28 07:55:04','deleted_at' => NULL,'slug' => 'chirugical-1601283304'),
  array('id' => '498','dossier_medical_id' => '281','description' => '	Collatéraux diabétique type I/II
	Descendants : père de 10 enfants en BSA
	Conjointe : HTA I transitoire liée au stress sous MHD','date' => NULL,'type' => 'Familial','created_at' => '2020-09-28 07:56:00','updated_at' => '2020-09-28 07:56:00','deleted_at' => NULL,'slug' => 'familial-1601283360'),
  array('id' => '499','dossier_medical_id' => '282','description' => 'Douleur lombaire à type de pincement','date' => '2012-02-05','type' => 'Médical','created_at' => '2020-09-28 13:55:23','updated_at' => '2020-09-28 13:55:23','deleted_at' => NULL,'slug' => 'medical-1601304923'),
  array('id' => '500','dossier_medical_id' => '283','description' => 'G9P9.0.0.8 (1 DCD) ; aucun bilans pour le dépistage des cancer du col/sein','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2020-09-28 14:41:06','updated_at' => '2020-09-28 14:41:06','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1601307666'),
  array('id' => '501','dossier_medical_id' => '283','description' => 'RAS','date' => NULL,'type' => 'Familial','created_at' => '2020-09-28 14:41:32','updated_at' => '2020-09-28 14:41:32','deleted_at' => NULL,'slug' => 'familial-1601307692'),
  array('id' => '502','dossier_medical_id' => '283','description' => 'Glaucome bilatéral (Depuis 8 ans environ présentement sous verres optiques ) pas de HTA  ; pas de DT2 ; épigastralgie chronique','date' => NULL,'type' => 'Médical','created_at' => '2020-09-28 14:53:14','updated_at' => '2020-09-28 14:53:14','deleted_at' => NULL,'slug' => 'medical-1601308394'),
  array('id' => '503','dossier_medical_id' => '297','description' => '-HTA connue depuis 10 ans sous TENSIONORME (1cp/j)
-Gastrite chronique soulagée par oméprazole
-Notion de crise goutteuse sous traitement non documenté','date' => NULL,'type' => 'Médical','created_at' => '2020-09-28 16:34:45','updated_at' => '2020-09-28 16:34:45','deleted_at' => NULL,'slug' => 'medical-1601314485'),
  array('id' => '504','dossier_medical_id' => '297','description' => 'opérée en 1984 par laparotomie pour hystérectomie totale sur probable déchirure du col en post partum (dernière grossesse)','date' => NULL,'type' => 'Chirugical','created_at' => '2020-09-28 16:35:21','updated_at' => '2020-09-28 16:35:21','deleted_at' => NULL,'slug' => 'chirugical-1601314521'),
  array('id' => '505','dossier_medical_id' => '297','description' => 'G10P8.0.2.8 ; 
Aucun bilans pour le dépistage des cancer du sein','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2020-09-28 16:36:02','updated_at' => '2020-09-28 16:36:02','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1601314562'),
  array('id' => '506','dossier_medical_id' => '297','description' => '-Collatéraux : HTA I transitoire
-Descendants : 1er né présenterai des troubles du comportement intermittent sur séquelle de méningite de l’enfant','date' => NULL,'type' => 'Familial','created_at' => '2020-09-28 16:36:33','updated_at' => '2020-09-28 16:36:33','deleted_at' => NULL,'slug' => 'familial-1601314593'),
  array('id' => '507','dossier_medical_id' => '284','description' => 'ne dors pas sous moustiquaire imprégné a longue durée d’action 
pas de pathologie chronique connue','date' => NULL,'type' => 'Médical','created_at' => '2020-09-29 10:14:59','updated_at' => '2020-09-29 10:14:59','deleted_at' => NULL,'slug' => 'medical-1601378099'),
  array('id' => '508','dossier_medical_id' => '284','description' => 'na jamais bénéficier d’une intervention chirurgicale','date' => NULL,'type' => 'Chirugical','created_at' => '2020-09-29 10:18:09','updated_at' => '2020-09-29 10:18:09','deleted_at' => NULL,'slug' => 'chirugical-1601378289'),
  array('id' => '509','dossier_medical_id' => '284','description' => 'ménopause depuis 20 ans 
G9P9009  02 enfant dcd cause probable des décès appendicite et INN


jamais effectué de mammographie 
j

amais fait de frottis cervico-vaginal','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2020-09-29 10:20:39','updated_at' => '2020-09-29 12:21:34','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1601378439'),
  array('id' => '510','dossier_medical_id' => '298','description' => 'MILDA(-)
pas de pathologie chronique connue','date' => NULL,'type' => 'Médical','created_at' => '2020-09-30 00:55:16','updated_at' => '2020-09-30 00:55:16','deleted_at' => NULL,'slug' => 'medical-1601430916'),
  array('id' => '511','dossier_medical_id' => '298','description' => 'jamais bénéficier dune intervention chirurgicale','date' => NULL,'type' => 'Chirugical','created_at' => '2020-09-30 00:56:03','updated_at' => '2020-09-30 00:56:03','deleted_at' => NULL,'slug' => 'chirugical-1601430963'),
  array('id' => '512','dossier_medical_id' => '254','description' => 'ddr 11-05-2020 dpa 18-02-2020 ag 20sa+1jour
aucune prophylaxie en cours 
aucun bilan biologique effectue 
bilan morphologique 01 Echographie obstétricale effectue en faveur dune grossesse intra-utérine mono-foetale évolutive conforme au terme clinique placenta bien insérer','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2020-09-30 06:14:47','updated_at' => '2020-09-30 06:14:47','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1601450087'),
  array('id' => '513','dossier_medical_id' => '299','description' => 'lombalgie chronique ; évoluant depuis 2000, ne suit aucun traitement actuellement','date' => NULL,'type' => 'Médical','created_at' => '2020-09-30 09:44:47','updated_at' => '2020-09-30 09:44:47','deleted_at' => NULL,'slug' => 'medical-1601462687'),
  array('id' => '514','dossier_medical_id' => '299','description' => 'G2P1011 ( 1 fausse couche il y a 37 ans, ayant nécessite un curetage qui d\'après la patiente avait été mal réalisé entraînant des complication: douleurs pelviennes chroniques qui de nos jours sont en régression) ;','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2020-09-30 09:51:09','updated_at' => '2020-09-30 09:51:09','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1601463069'),
  array('id' => '515','dossier_medical_id' => '299','description' => 'descendant: mère d\'un enfant âgé de 40 ans sexe masculin, en bonne santé apparente','date' => NULL,'type' => 'Familial','created_at' => '2020-09-30 09:52:13','updated_at' => '2020-09-30 09:52:13','deleted_at' => NULL,'slug' => 'familial-1601463133'),
  array('id' => '516','dossier_medical_id' => '300','description' => 'Notion d’hémorroïde  depuis plus de 20 ans, opérée en Allemagne il ya 10 ans, sans complication, puis mesures hygieno-diégétiques, crise survenant en cas  de non respect des mesure hygiéno-diététiques ou de stress; sous Daflon 1000mg: 1cp/jour pendant 2 jours lors des crises avec notion de sang dans les selles. dernière crise il y a une semaine','date' => NULL,'type' => 'Médical','created_at' => '2020-09-30 11:55:25','updated_at' => '2020-09-30 11:55:25','deleted_at' => NULL,'slug' => 'medical-1601470525'),
  array('id' => '517','dossier_medical_id' => '300','description' => 'Epigastralgie chronique depuis plus de 30 ans ayant nécessité des hospitalisations et des traitements inconnue sans notion de complication , ne prend aucun traitement','date' => NULL,'type' => 'Médical','created_at' => '2020-09-30 12:02:46','updated_at' => '2020-09-30 12:02:46','deleted_at' => NULL,'slug' => 'medical-1601470966'),
  array('id' => '518','dossier_medical_id' => '300','description' => 'notion de pincement L4-L5 suite à un traumatisme ne rendant l\'anté-flexion possible qu\'en fléchissant les genoux ou en aggrandissant le polygone de sustentation et entraînant des douleurs chroniques du rachis lombaire pris en charge par voltarene pommade en cas de douleurs','date' => NULL,'type' => 'Médical','created_at' => '2020-09-30 12:09:31','updated_at' => '2020-09-30 12:09:31','deleted_at' => NULL,'slug' => 'medical-1601471371'),
  array('id' => '519','dossier_medical_id' => '300','description' => 'G9P6036 ( 2 fausses couches + 1 avortement)
Ménopausée depuis 10 ans environ; pas de traitement hormonal substitutif
FCV il y a plus de 10 ans sans anomalie','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2020-09-30 12:12:16','updated_at' => '2020-09-30 12:12:16','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1601471536'),
  array('id' => '520','dossier_medical_id' => '300','description' => '- HTA: cousins, 
- Diabétiques: petit frère; cousins
- mère décédée de cancer de l\'estomac; maman ayant eu un cancer du sein
- père décédé de suite de cancer du poumon','date' => NULL,'type' => 'Familial','created_at' => '2020-09-30 12:15:06','updated_at' => '2020-09-30 12:15:06','deleted_at' => NULL,'slug' => 'familial-1601471706'),
  array('id' => '521','dossier_medical_id' => '300','description' => 'notion de lombarthrose étagée L3-L4 à S1 et coxarthrose gauche pris en charge par kinésithérapie','date' => NULL,'type' => 'Médical','created_at' => '2020-09-30 12:18:19','updated_at' => '2020-09-30 12:18:19','deleted_at' => NULL,'slug' => 'medical-1601471899'),
  array('id' => '522','dossier_medical_id' => '301','description' => 'patient goutteux depuis plus de 20 ans actuellement sous colchimax: 2cp/jour','date' => NULL,'type' => 'Médical','created_at' => '2020-09-30 13:37:13','updated_at' => '2020-09-30 13:37:13','deleted_at' => NULL,'slug' => 'medical-1601476633'),
  array('id' => '523','dossier_medical_id' => '301','description' => 'notion de TA élevée en 20/01/2020 (TA : 174/89 mmhg);  28/01/2020 ( TA: 158/92mmhg) ; 
02/03/2020 (TA: 160/92 mmhg) après cette dernière prise le patient est mit sous amlodipine 10mg: 1cp/jour  (que le patient ne prend que pendant 1 mois )','date' => NULL,'type' => 'Médical','created_at' => '2020-09-30 13:42:38','updated_at' => '2020-09-30 13:42:38','deleted_at' => NULL,'slug' => 'medical-1601476958'),
  array('id' => '524','dossier_medical_id' => '301','description' => '- DT2: grande soeur, neuveux, oncle
- HTA: ?','date' => NULL,'type' => 'Familial','created_at' => '2020-09-30 13:43:39','updated_at' => '2020-09-30 13:43:39','deleted_at' => NULL,'slug' => 'familial-1601477019'),
  array('id' => '525','dossier_medical_id' => '300','description' => 'Notion de crise d’anxiété? dépression? associée aux troubles du sommeil et chiffres tensionnels élevés suite aux conflits familiaux ayant motivé une consultation à l\'hôpital Jamot de Yaoundé et un traitement à base d\'anti HTA à été prescrit','date' => NULL,'type' => 'Médical','created_at' => '2020-10-01 12:25:31','updated_at' => '2020-10-01 12:25:31','deleted_at' => NULL,'slug' => 'medical-1601558731'),
  array('id' => '526','dossier_medical_id' => '302','description' => '*  Gynéco-obstétriques : G4P2011 ; DDR : 27/12/2019 ;  AG : 39 SA+ 6 jours
Menarche : 15 ;    durée des règles : 4 ;  cycle menstruel : ?
Dysménorrhée + ;  métrorragie : - ;    ménorragie - ; polymenorhée-
 IST :- ; nombres de partenaires sexuels cumulés : 7                                      ; méthode contraceptives : aucune    ; dépistage du cancer de l’utérus : -    
G4P2011  G1 :   ANAT d’un nné de sexe F en 2014 au centre de santé de Batchenga décédé  2 semaine plutard     
 G2  Avortement provoqué à environ 8 SA en 2015
G3 ANAT d’un nné de sexe M en 2017 dans un centre de santé en Mvogada
G4 : Grossesse actuelle ; DDR : 27/12/2019; 
Nombre CPN : 2 (patiente ne respectant pas les rendez-vous CPN) 
Bilans :
-	Biologiques du 03/06/2020
NFS : hb : 5.5 g/dl ; GB : 7100/mm3 ; pla : 546/mm3 (anémie sévère normocytaire hypochrome ; thrombocytose ; PEC par fer+acide folique : 1cp*3/jour jusqu’à l’accouchement)
Rubéole : IgG : Positive ; IgM : négative (patiente immunisée)
AgHbs : négative
AcHCV : négative
GSRH : B+ ;
Toxoplasmose : IgG : Positive ; IgM : négative (patiente immunisée)
Sérologie VIH : négative
Combi 2 : albumine : négative ; sucre : négatif
GE positive à 2367 TPF/mm3 de sang (PEC par artesun)
-	Morphologiques : 1e échographie 
Volet préventif :  
-	Anti-anémique : fer+acide folique : 1cp*3/jour
-	MILDA : non
-	TPI : 2
-	VAT : 0
Pathologie sur grossesse : accès palustre grave compliquée d’anémie sévère','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2020-10-01 12:53:57','updated_at' => '2020-10-02 07:29:24','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1601560437'),
  array('id' => '527','dossier_medical_id' => '303','description' => '- Gynécologiques:
 * ménarches: 11ans; durée: 4 jours; durée du cycle: 28 jours ; réguliers; dysménorrhées: non; ménorragie: non; métrorragie: non
 * coïtarche: 18 ans ; PSC: 3 ; PSA: 1 ; dyspareunie: non; saignement post coïtal: non; 
 * IST: non; test chlamydia jamais effectué
 * dépistages des col de l\'utérus et sein: jamais effectués 
 * leucorrhées de moyennes abondance, blanchâtre et non fétide 
G2P0010 ( une IVG en 2010); DDR:  juillet 2020 (date exacte ?);  AG: 15 SA+04jours 
CPN: aucune 
- échographie T1 (du 15/09/2020) : grossesse mono-foetale intra-utérine évolutive de 13 SA+01 jour; placenta antérieur de grade I, bas inséré affleurant l\'orifice interne du col ; DPA: 22/03/2021','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2020-10-02 11:09:13','updated_at' => '2020-10-02 11:39:48','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1601640553'),
  array('id' => '528','dossier_medical_id' => '304','description' => '-	Grands frère : asthmatique (décédé)
-	Père HTA','date' => NULL,'type' => 'Familial','created_at' => '2020-10-02 12:26:53','updated_at' => '2020-10-02 12:26:53','deleted_at' => NULL,'slug' => 'familial-1601645213'),
  array('id' => '529','dossier_medical_id' => '253','description' => 'VIH positif découvert aucours d\'une consultation il ya un mois sous traitement ( tenofovir lamivudine efavirenz : 1cp/ jour); observante au traitement','date' => NULL,'type' => 'Médical','created_at' => '2020-10-05 11:23:05','updated_at' => '2020-10-05 11:23:05','deleted_at' => NULL,'slug' => 'medical-1601900585'),
  array('id' => '530','dossier_medical_id' => '270','description' => '-	HTA connue depuis 9 ans sous FORZATEN 40/5 observante
-	Trouble de l’acuité visuelle depuis 8ans
-	Lombalgie chronique (15 ans) ayant motivé plusieurs séances de kinésithérapie et port de ceinture lombaire + imagerie en 2013
-	Notion de douleur dentaire il y a environ 1 mois ayant motivé une CS chez le dentiste qui aurait prescrit antalgique et ATB. Evolution marquée par la persistance de la douleur qui motive une nouvelle CS dentiste au cours laquelle on aurait effectué une incision et prescrire des ATB et bain de bouche','date' => NULL,'type' => 'Médical','created_at' => '2020-10-06 13:33:04','updated_at' => '2020-10-06 13:33:04','deleted_at' => NULL,'slug' => 'medical-1601994784'),
  array('id' => '531','dossier_medical_id' => '270','description' => '-	Myomectomie (1975)
-	Chirurgie périnéale dont l’indication n’est pas précisée (2008)
-	Notion de bourrelets hémorroïdaires, dernière crise il y a 3 semaines','date' => NULL,'type' => 'Chirugical','created_at' => '2020-10-06 13:33:44','updated_at' => '2020-10-06 13:33:44','deleted_at' => NULL,'slug' => 'chirugical-1601994824'),
  array('id' => '532','dossier_medical_id' => '306','description' => 'opéré pour varicocèle il y a 2 ans environs; sans complications','date' => NULL,'type' => 'Chirugical','created_at' => '2020-10-07 07:32:17','updated_at' => '2020-10-07 07:32:17','deleted_at' => NULL,'slug' => 'chirugical-1602059537'),
  array('id' => '533','dossier_medical_id' => '306','description' => 'DT2: tante','date' => NULL,'type' => 'Familial','created_at' => '2020-10-07 07:33:57','updated_at' => '2020-10-07 07:33:57','deleted_at' => NULL,'slug' => 'familial-1602059637'),
  array('id' => '534','dossier_medical_id' => '307','description' => 'Dors sous moustiquaire imprégné à longue durée d’action 
 na Pas de pathologie chronique connue','date' => NULL,'type' => 'Médical','created_at' => '2020-10-08 08:15:37','updated_at' => '2020-10-08 12:32:05','deleted_at' => NULL,'slug' => 'medical-1602148537'),
  array('id' => '535','dossier_medical_id' => '307','description' => 'Jamais bénéficié d’une intervention chirurgicale','date' => NULL,'type' => 'Chirugical','created_at' => '2020-10-08 08:18:29','updated_at' => '2020-10-08 08:18:29','deleted_at' => NULL,'slug' => 'chirugical-1602148709'),
  array('id' => '536','dossier_medical_id' => '307','description' => 'DDR 09-09-2020  aucune contraception  dysménorrhée++','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2020-10-08 08:24:24','updated_at' => '2020-10-08 08:24:24','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1602149064'),
  array('id' => '537','dossier_medical_id' => '308','description' => 'dors sous milda
tabagisme passif
contage tb-','date' => NULL,'type' => 'Médical','created_at' => '2020-10-08 10:02:00','updated_at' => '2020-10-08 10:02:00','deleted_at' => NULL,'slug' => 'medical-1602154920'),
  array('id' => '538','dossier_medical_id' => '97','description' => '*ascendants: grand-mère HTA. Grand-père et père DT2, 
  *collatéraux: 2ème/35 enfants ( issus d\'un foyer polygamique) et 2ème/5 coté maternel (4 filles + 1 garçon) ; fratrie en bonne santé apparente
  *descendants: 5 enfants (3 filles + 2 garçons ); 1 fille de 5 ans atteint de trisomie 21 , le reste en bonne santé apparente.','date' => NULL,'type' => 'Familial','created_at' => '2020-10-09 09:42:43','updated_at' => '2020-10-09 09:42:43','deleted_at' => NULL,'slug' => 'familial-1602240163'),
  array('id' => '539','dossier_medical_id' => '311','description' => 'RAS','date' => NULL,'type' => 'Familial','created_at' => '2020-10-10 13:51:37','updated_at' => '2020-10-10 13:51:37','deleted_at' => NULL,'slug' => 'familial-1602341497'),
  array('id' => '540','dossier_medical_id' => '313','description' => '-HTA connue depuis 15 ans sous Tritazide 5/12.5 (1cp/j) compliante et observante ; 
-Baisse d’acuité visuelle sur glaucome diagnostiqué  depuis plusieurs années verres correcteurs + collyres prescrit ; 
-Gastrite sous Inexium','date' => NULL,'type' => 'Médical','created_at' => '2020-10-13 12:00:51','updated_at' => '2020-10-13 12:00:51','deleted_at' => NULL,'slug' => 'medical-1602594051'),
  array('id' => '541','dossier_medical_id' => '313','description' => '-G6P5.0.1.5
-Bilan pour dépistage du cancer du col il y a 1 an non documenté','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2020-10-13 12:01:28','updated_at' => '2020-10-13 12:01:28','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1602594088'),
  array('id' => '542','dossier_medical_id' => '312','description' => 'Dors sous moustiquaire imprégné à longue durée d’action 
Pas de pathologie chronique connue 
Poids de naissance 4100g accouchement par voie haute indication inconnue','date' => NULL,'type' => 'Médical','created_at' => '2020-10-13 15:02:26','updated_at' => '2020-10-13 15:02:26','deleted_at' => NULL,'slug' => 'medical-1602604946'),
  array('id' => '543','dossier_medical_id' => '312','description' => 'N’a jamais bénéficié d’une intervention chirurgicale','date' => NULL,'type' => 'Chirugical','created_at' => '2020-10-13 15:03:21','updated_at' => '2020-10-13 15:03:21','deleted_at' => NULL,'slug' => 'chirugical-1602605001'),
  array('id' => '544','dossier_medical_id' => '314','description' => 'LOMBOARTHROSE BASSE
DISCOPATHIE BOMBANTE de L3 L4 à L5S1 sans conflit. Pour laquelle elle a fait une automédication(non documentée) à base d’injections (IM)  mensuellement
Pas de notion de diabète ou HTA connue
Epigastralgie depuis environ 15 ans','date' => '2017-01-01','type' => 'Médical','created_at' => '2020-10-20 11:22:25','updated_at' => '2020-10-23 06:18:21','deleted_at' => NULL,'slug' => 'medical-1603196545'),
  array('id' => '545','dossier_medical_id' => '314','description' => 'G11P10019 (1DCD)
           Ménopause à 45 ans
            FCV jamais fait, mammographie faite il y a environ 6 ans','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2020-10-20 11:22:53','updated_at' => '2020-10-23 06:16:16','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1603196573'),
  array('id' => '546','dossier_medical_id' => '315','description' => 'NON DOCUMENTE!!!
Notion de Myélome en 2017 ayant motivé environ  16 seances de chimiotherapie en 2018 puis une autogreffe 
Hypertendue connue depuis 2008, ayant recu plusieurs traitements antihypertenseur. Le tout dernier FLUDEX Cp stoppé il ya environ 1 an.
Pas de notion de diabète connue
Epigastralgie chronique intermittente','date' => NULL,'type' => 'Médical','created_at' => '2020-10-21 06:07:36','updated_at' => '2020-10-21 06:07:36','deleted_at' => NULL,'slug' => 'medical-1603264056'),
  array('id' => '547','dossier_medical_id' => '315','description' => 'Thyroidectomie indiquée pour goitre plongeant en 1992.','date' => NULL,'type' => 'Chirugical','created_at' => '2020-10-21 06:08:12','updated_at' => '2020-10-21 06:08:12','deleted_at' => NULL,'slug' => 'chirugical-1603264092'),
  array('id' => '548','dossier_medical_id' => '315','description' => 'G8P4043 (1DCD)
            Patiente ménopausée
            FCV fait il ya environ 4 ans, pas de mammographie faite','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2020-10-21 06:08:36','updated_at' => '2020-10-21 06:08:36','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1603264116'),
  array('id' => '549','dossier_medical_id' => '315','description' => 'Pas d’histoire de Cancer, ni de diabète','date' => NULL,'type' => 'Familial','created_at' => '2020-10-21 06:09:05','updated_at' => '2020-10-21 06:09:05','deleted_at' => NULL,'slug' => 'familial-1603264145'),
  array('id' => '550','dossier_medical_id' => '321','description' => '- glaucome cornéen central de l\'oeil droit depuis 9 ans environ sous traitement (collyres)','date' => NULL,'type' => 'Médical','created_at' => '2020-10-27 10:21:51','updated_at' => '2020-10-27 10:21:51','deleted_at' => NULL,'slug' => 'medical-1603794111'),
  array('id' => '551','dossier_medical_id' => '322','description' => 'G8P8005 (3 enfants décédés); 
ménopausé depuis 4 ans, pas de traitement hormonal substitutif','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2020-10-27 11:42:26','updated_at' => '2020-10-27 11:42:26','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1603798946'),
  array('id' => '552','dossier_medical_id' => '322','description' => 'Pas d\'HTA, pas de DT2','date' => NULL,'type' => 'Familial','created_at' => '2020-10-27 11:43:00','updated_at' => '2020-10-27 11:43:00','deleted_at' => NULL,'slug' => 'familial-1603798980'),
  array('id' => '553','dossier_medical_id' => '324','description' => 'type 2 diabetes mellitus','date' => '2012-01-01','type' => 'Médical','created_at' => '2020-10-28 10:08:01','updated_at' => '2020-10-28 10:08:01','deleted_at' => NULL,'slug' => 'medical-1603879681'),
  array('id' => '554','dossier_medical_id' => '324','description' => 'gouty arthritis','date' => '2017-01-01','type' => 'Médical','created_at' => '2020-10-28 10:08:54','updated_at' => '2020-10-28 10:08:54','deleted_at' => NULL,'slug' => 'medical-1603879734'),
  array('id' => '555','dossier_medical_id' => '324','description' => 'benigh prostatic hyperplasia','date' => NULL,'type' => 'Chirugical','created_at' => '2020-10-28 10:09:44','updated_at' => '2020-10-28 10:09:44','deleted_at' => NULL,'slug' => 'chirugical-1603879784'),
  array('id' => '556','dossier_medical_id' => '325','description' => 'Arthrose des chevilles diagnostiqué il y a 03 ans. Prise régulière d\'antalgiques/anti-inflammatoire lors des crises','date' => NULL,'type' => 'Médical','created_at' => '2020-10-29 09:34:38','updated_at' => '2020-10-29 09:34:38','deleted_at' => NULL,'slug' => 'medical-1603964078'),
  array('id' => '557','dossier_medical_id' => '325','description' => 'G4P3003
FCV normal il y a 03 ans
Mammographie :sans particularité il y a 03 ans
Ménopausée depuis plus de 10ans','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2020-10-29 09:35:55','updated_at' => '2020-10-29 09:35:55','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1603964155'),
  array('id' => '558','dossier_medical_id' => '326','description' => 'G0P0; DDR: il ya une semaine , IST: non;','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2020-10-29 14:18:35','updated_at' => '2020-10-29 14:18:35','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1603981115'),
  array('id' => '559','dossier_medical_id' => '323','description' => '•	Gynéco-obstétricaux : G9P12.0.0.12 (3 grossesses gémellaires par VB) ; Ménopause depuis >23 ans ; bilan (02 ans) pour dépistage cancer du col ; Mammographie (4 ans) lors d’un séjour en Europe','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2020-10-31 14:40:42','updated_at' => '2020-10-31 14:40:42','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1604155242'),
  array('id' => '560','dossier_medical_id' => '323','description' => 'lombalgie chronique, pas d’épigastralgie, pas HTA/DT2','date' => NULL,'type' => 'Médical','created_at' => '2020-10-31 14:41:16','updated_at' => '2020-10-31 14:41:16','deleted_at' => NULL,'slug' => 'medical-1604155276'),
  array('id' => '561','dossier_medical_id' => '329','description' => 'hypertension','date' => NULL,'type' => 'Médical','created_at' => '2020-11-03 10:05:39','updated_at' => '2020-11-03 10:05:39','deleted_at' => NULL,'slug' => 'medical-1604397939'),
  array('id' => '562','dossier_medical_id' => '329','description' => 'arthritis','date' => NULL,'type' => 'Médical','created_at' => '2020-11-03 10:06:06','updated_at' => '2020-11-03 10:06:06','deleted_at' => NULL,'slug' => 'medical-1604397966'),
  array('id' => '563','dossier_medical_id' => '331','description' => 'Curetage réalisé il y a 2 semaines au décours d\'une fausse couche spontanée il y a un mois','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2020-11-03 17:09:27','updated_at' => '2020-11-03 17:09:27','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1604423367'),
  array('id' => '564','dossier_medical_id' => '332','description' => 'type 2 diabetes mellitus','date' => NULL,'type' => 'Médical','created_at' => '2020-11-03 17:39:15','updated_at' => '2020-11-03 17:39:15','deleted_at' => NULL,'slug' => 'medical-1604425155'),
  array('id' => '565','dossier_medical_id' => '332','description' => 'benign prostatic hyperplasia','date' => NULL,'type' => 'Chirugical','created_at' => '2020-11-03 17:39:55','updated_at' => '2020-11-03 17:39:55','deleted_at' => NULL,'slug' => 'chirugical-1604425195'),
  array('id' => '566','dossier_medical_id' => '332','description' => 'prostatectomy','date' => '2020-02-01','type' => 'Chirugical','created_at' => '2020-11-03 17:40:43','updated_at' => '2020-11-03 17:40:43','deleted_at' => NULL,'slug' => 'chirugical-1604425243'),
  array('id' => '567','dossier_medical_id' => '334','description' => 'notion de crise hémorroïdaire sur prolapsus (sensation de boule au niveau de la marge anale) probablement dû à la constipation. Elle aurait bénéficié il y a 4 ans d’une excision chirurgicale non documenté au cours d’un séjour en Europe. Suite op marquée par un spotting intermittent qui tache le papier toilette. Actuellement pas de crise','date' => NULL,'type' => 'Chirugical','created_at' => '2020-11-07 10:35:49','updated_at' => '2020-11-07 10:35:49','deleted_at' => NULL,'slug' => 'chirugical-1604745349'),
  array('id' => '568','dossier_medical_id' => '334','description' => 'G3P3003 ; bilans de dépistage Néo du col/sein il y a 3 ans ; ménopause à 55 ans','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2020-11-07 10:41:57','updated_at' => '2020-11-07 10:41:57','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1604745717'),
  array('id' => '569','dossier_medical_id' => '335','description' => 'HTA 
Goutte
Hépatite C','date' => '2010-01-01','type' => 'Médical','created_at' => '2020-11-07 13:27:30','updated_at' => '2020-11-07 13:27:30','deleted_at' => NULL,'slug' => 'medical-1604755650'),
  array('id' => '570','dossier_medical_id' => '335','description' => 'Goutte, sous Colchicine 1MG  1cp/jr','date' => '2020-08-01','type' => 'Médical','created_at' => '2020-11-07 13:37:38','updated_at' => '2020-11-07 13:37:38','deleted_at' => NULL,'slug' => 'medical-1604756258'),
  array('id' => '571','dossier_medical_id' => '335','description' => 'Hépatite C','date' => '2016-01-01','type' => 'Médical','created_at' => '2020-11-07 13:38:25','updated_at' => '2020-11-07 13:38:25','deleted_at' => NULL,'slug' => 'medical-1604756305'),
  array('id' => '572','dossier_medical_id' => '335','description' => 'HTA et actuellement sous Amlodipine 10mg 1cp/jr et Triazide 25mg 1mg/jr','date' => '2010-01-01','type' => 'Médical','created_at' => '2020-11-07 13:40:57','updated_at' => '2020-11-07 13:40:57','deleted_at' => NULL,'slug' => 'medical-1604756457'),
  array('id' => '573','dossier_medical_id' => '337','description' => 'caesarian section','date' => NULL,'type' => 'Chirugical','created_at' => '2020-11-10 16:46:57','updated_at' => '2020-11-10 16:46:57','deleted_at' => NULL,'slug' => 'chirugical-1605026817'),
  array('id' => '574','dossier_medical_id' => '337','description' => 'appendicectomy','date' => '1993-01-01','type' => 'Chirugical','created_at' => '2020-11-10 16:47:46','updated_at' => '2020-11-10 16:47:46','deleted_at' => NULL,'slug' => 'chirugical-1605026866'),
  array('id' => '575','dossier_medical_id' => '338','description' => 'MILDA(+)
Dernier déparasitage mal connue','date' => NULL,'type' => 'Médical','created_at' => '2020-11-11 10:32:07','updated_at' => '2020-11-11 10:32:07','deleted_at' => NULL,'slug' => 'medical-1605090727'),
  array('id' => '576','dossier_medical_id' => '338','description' => 'N’a Jamais bénéficié d’une intervention chirurgicale','date' => NULL,'type' => 'Chirugical','created_at' => '2020-11-11 10:33:09','updated_at' => '2020-11-11 10:33:09','deleted_at' => NULL,'slug' => 'chirugical-1605090789'),
  array('id' => '577','dossier_medical_id' => '338','description' => 'DDR 06-11-2020   G1P0010','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2020-11-11 10:33:30','updated_at' => '2020-11-11 10:33:30','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1605090810'),
  array('id' => '578','dossier_medical_id' => '339','description' => 'MILDA (-)
Calendrier vaccinal à jour
OMA à l\'àge de 3 mois','date' => NULL,'type' => 'Médical','created_at' => '2020-11-12 08:01:56','updated_at' => '2020-11-12 08:01:56','deleted_at' => NULL,'slug' => 'medical-1605168116'),
  array('id' => '579','dossier_medical_id' => '339','description' => 'OMA à l\'age de 4 mois et traité
Calendrier vaccinal à jour
MILDA (-)','date' => NULL,'type' => 'Médical','created_at' => '2020-11-12 09:16:45','updated_at' => '2020-11-12 09:16:45','deleted_at' => NULL,'slug' => 'medical-1605172605'),
  array('id' => '580','dossier_medical_id' => '340','description' => 'right leg fracture repair','date' => '2002-01-01','type' => 'Chirugical','created_at' => '2020-11-13 07:24:50','updated_at' => '2020-11-13 07:24:50','deleted_at' => NULL,'slug' => 'chirugical-1605252290'),
  array('id' => '581','dossier_medical_id' => '341','description' => 'Blood cancer??? (Non documented)','date' => '2010-01-01','type' => 'Médical','created_at' => '2020-11-13 09:15:18','updated_at' => '2020-11-13 09:15:18','deleted_at' => NULL,'slug' => 'medical-1605258918'),
  array('id' => '582','dossier_medical_id' => '329','description' => 'Gastritis','date' => NULL,'type' => 'Médical','created_at' => '2020-11-13 11:09:47','updated_at' => '2020-11-13 11:09:47','deleted_at' => NULL,'slug' => 'medical-1605265787'),
  array('id' => '583','dossier_medical_id' => '342','description' => 'trouble du cycle menstruel à type de spanioménorrhée sur probable anovulation, elle aurait bénéficié de plusieurs traitement médicamenteux (hormonothérapie ?) non documenté. Mammographie il y a environ 1 mois non documenté','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2020-11-14 14:15:03','updated_at' => '2020-11-14 14:15:03','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1605363303'),
  array('id' => '584','dossier_medical_id' => '342','description' => 'amygdalectomie il y a plusieurs années','date' => NULL,'type' => 'Chirugical','created_at' => '2020-11-14 14:15:35','updated_at' => '2020-11-14 14:15:35','deleted_at' => NULL,'slug' => 'chirugical-1605363335'),
  array('id' => '585','dossier_medical_id' => '343','description' => 'Détresse respiratoire après la naissance','date' => NULL,'type' => 'Médical','created_at' => '2020-11-16 09:23:14','updated_at' => '2020-11-16 09:23:14','deleted_at' => NULL,'slug' => 'medical-1605518594'),
  array('id' => '586','dossier_medical_id' => '344','description' => 'Gatrite sous Gaviscon 1sachet si crise d\'épigastralgie ou Supralox 1càs','date' => '2011-01-01','type' => 'Médical','created_at' => '2020-11-16 10:26:20','updated_at' => '2020-11-16 10:26:20','deleted_at' => NULL,'slug' => 'medical-1605522380'),
  array('id' => '587','dossier_medical_id' => '241','description' => 'lombosciatalgie chronique évoluant depuis 1 an','date' => NULL,'type' => 'Médical','created_at' => '2020-11-17 09:07:47','updated_at' => '2020-11-17 09:07:47','deleted_at' => NULL,'slug' => 'medical-1605604067'),
  array('id' => '588','dossier_medical_id' => '241','description' => 'G3P3003 ; bilans de dépistage FCV il y a 4 ans ; ménopause à 50 ans','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2020-11-17 09:08:07','updated_at' => '2020-11-17 09:08:07','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1605604087'),
  array('id' => '589','dossier_medical_id' => '346','description' => 'MILDA(+) 
Nourrisson né à terme  par voie basse 3500G  sans complication 
Pev A Jours Sous Allaitement Mixte 
père tabagique mais ne fume pas à la maison','date' => NULL,'type' => 'Médical','created_at' => '2020-11-17 14:49:32','updated_at' => '2020-11-17 14:49:32','deleted_at' => NULL,'slug' => 'medical-1605624572'),
  array('id' => '590','dossier_medical_id' => '346','description' => 'N’a jamais bénéficié d’une intervention chirurgicale','date' => NULL,'type' => 'Chirugical','created_at' => '2020-11-17 14:49:57','updated_at' => '2020-11-17 14:49:57','deleted_at' => NULL,'slug' => 'chirugical-1605624597'),
  array('id' => '591','dossier_medical_id' => '346','description' => '6ieme dans une fratrie de 6   03 grandes sœurs et 02 grands frères 
Sa grande sœur 08 ans  tousse depuis 02 jours 
parents en bonne santé apparente','date' => NULL,'type' => 'Familial','created_at' => '2020-11-17 14:52:40','updated_at' => '2020-11-17 14:52:40','deleted_at' => NULL,'slug' => 'familial-1605624760'),
  array('id' => '592','dossier_medical_id' => '347','description' => 'MILDA+
pas de pathologie chronique connue 
dernier déparasitage mal connue','date' => NULL,'type' => 'Médical','created_at' => '2020-11-18 07:44:10','updated_at' => '2020-11-18 07:44:10','deleted_at' => NULL,'slug' => 'medical-1605685450'),
  array('id' => '593','dossier_medical_id' => '347','description' => 'na jamais bénéficié d’une intervention chirurgicale','date' => NULL,'type' => 'Chirugical','created_at' => '2020-11-18 07:45:45','updated_at' => '2020-11-18 07:45:45','deleted_at' => NULL,'slug' => 'chirugical-1605685545'),
  array('id' => '594','dossier_medical_id' => '347','description' => 'DDR:30-10-2020    G0P0   
contraception (- )','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2020-11-18 07:47:41','updated_at' => '2020-11-18 07:47:41','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1605685661'),
  array('id' => '595','dossier_medical_id' => '349','description' => '- G2P1011 , (fausse couche spontanée en août 2019
  G1: en 2016 , accouchement normal par voie basse d\'un nouveau-né de sexe masculin,
- ménarche: 13 ans, durée des règles: 3 jours; durée du cycle: 28 jours; régulier ; dysménorrhée: +/- ; 
- coïtarche: 16 ans ; PSC: 5 ; PSA: 1 ; dyspareunie: non; saignement post coïtal: non; 
- contraception: préservatif; 
- IST: ?   
- chlamydia: négatif (en août 2019); VIH: négatif en en septembre 2020','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2020-11-19 08:06:36','updated_at' => '2020-11-19 08:06:36','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1605773196'),
  array('id' => '596','dossier_medical_id' => '351','description' => 'MILDA(+)
Patiente avec trisomie 21 non suivis  
Dernier déparasitage mal connue','date' => NULL,'type' => 'Médical','created_at' => '2020-11-21 06:28:03','updated_at' => '2020-11-21 06:28:03','deleted_at' => NULL,'slug' => 'medical-1605940083'),
  array('id' => '597','dossier_medical_id' => '351','description' => 'Chirurgie oculaire faite il Ya 06 mois dans un contexte de trouble de la vision','date' => NULL,'type' => 'Chirugical','created_at' => '2020-11-21 06:29:06','updated_at' => '2020-11-21 06:29:06','deleted_at' => NULL,'slug' => 'chirugical-1605940146'),
  array('id' => '598','dossier_medical_id' => '351','description' => 'DDR mal connu  G0P0  n’a jamais effectué de PCV  avec une notion de métrorragie chronique','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2020-11-21 06:29:45','updated_at' => '2020-11-21 06:29:45','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1605940185'),
  array('id' => '599','dossier_medical_id' => '351','description' => 'Contage(+)','date' => NULL,'type' => 'Médical','created_at' => '2020-11-21 06:30:34','updated_at' => '2020-11-21 06:30:34','deleted_at' => NULL,'slug' => 'medical-1605940234'),
  array('id' => '600','dossier_medical_id' => '354','description' => '•	MILDA(-)
•	Pas d’autre pathologie chronique connue    
•	Dernier déparasitage inconnu  
•	Consomme de l’eau du forage','date' => NULL,'type' => 'Médical','created_at' => '2020-11-25 13:23:27','updated_at' => '2020-11-25 13:23:27','deleted_at' => NULL,'slug' => 'medical-1606310607'),
  array('id' => '601','dossier_medical_id' => '354','description' => '•	N’a jamais bénéficié d’une intervention chirurgicale','date' => NULL,'type' => 'Chirugical','created_at' => '2020-11-25 13:23:55','updated_at' => '2020-11-25 13:23:55','deleted_at' => NULL,'slug' => 'chirugical-1606310635'),
  array('id' => '602','dossier_medical_id' => '354','description' => '•	DDR 13-11-2020   
G2P1011  dysménorrhée chronique avant son premier accouchement pour lesquelles elle prenait des AINS','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2020-11-25 13:24:25','updated_at' => '2020-11-25 13:24:25','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1606310665'),
  array('id' => '603','dossier_medical_id' => '354','description' => '•	dernière sero HIV  négatif fait le 14-09-2020 
•	Aghbs Achcv inconnu','date' => NULL,'type' => 'Médical','created_at' => '2020-11-25 13:25:12','updated_at' => '2020-11-25 13:25:12','deleted_at' => NULL,'slug' => 'medical-1606310712'),
  array('id' => '604','dossier_medical_id' => '354','description' => '•	Mère en Bonne Santé Apparente  
•	Père décédé de suite maladie mal connue 
•	6ieme dans une fratrie de 6  avec 03 frères 02 sœur en Bonne Santé Apparente  
•	01 enfant  en Bonne Santé Apparente  
•	époux en Bonne Santé Apparente','date' => NULL,'type' => 'Familial','created_at' => '2020-11-25 13:25:52','updated_at' => '2020-11-25 13:25:52','deleted_at' => NULL,'slug' => 'familial-1606310752'),
  array('id' => '605','dossier_medical_id' => '355','description' => 'G6P4024','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2020-11-26 10:14:30','updated_at' => '2020-11-26 10:14:30','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1606385670'),
  array('id' => '606','dossier_medical_id' => '356','description' => '•	HTA connue depuis 5 ans sous Amlodipine 5mg (1cp/j le matin) + Aspégic
•	Suivie à la Clinique MEC en juillet 2019 par :
-	Dr GAMS (neurologue) : Névralgie occipitale + cervicarthrose pluri étagée sous Laroxyl 10 gouttes/j le soir
-	Dr NJANGA Epse WATCHUNG Ariane (endocrinologue/diabétologue) : Goitre hétéronodulaire TIRADS 3 à surveiller (échographie thyroïdienne). L’examen cytopathologique du nodule thyroïdien avait conclu à une lésion bénigne de type adénome sans cellules suspectes de malignités; 
Fibrillation atriale paroxystique','date' => NULL,'type' => 'Médical','created_at' => '2020-11-26 10:23:23','updated_at' => '2021-09-09 05:17:15','deleted_at' => NULL,'slug' => 'medical-1606386203'),
  array('id' => '607','dossier_medical_id' => '356','description' => '-G7P7006
-FCV en juillet 2019 sans particularité ; ménopause >10ans','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2020-11-26 10:24:37','updated_at' => '2020-11-26 10:24:37','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1606386277'),
  array('id' => '608','dossier_medical_id' => '356','description' => 'HTA + DT2 chez les ascendants','date' => NULL,'type' => 'Familial','created_at' => '2020-11-26 10:24:55','updated_at' => '2020-11-26 10:24:55','deleted_at' => NULL,'slug' => 'familial-1606386295'),
  array('id' => '609','dossier_medical_id' => '358','description' => 'épigastralgie soulagée par Gaviscon/oméprazole ; Glaucome sous collyres + verres optiques','date' => NULL,'type' => 'Médical','created_at' => '2020-11-26 15:00:54','updated_at' => '2020-11-26 15:00:54','deleted_at' => NULL,'slug' => 'medical-1606402854'),
  array('id' => '610','dossier_medical_id' => '358','description' => 'Césarienne indiquée pour présentation transverse','date' => NULL,'type' => 'Chirugical','created_at' => '2020-11-26 15:01:21','updated_at' => '2020-11-26 15:01:21','deleted_at' => NULL,'slug' => 'chirugical-1606402881'),
  array('id' => '611','dossier_medical_id' => '358','description' => 'G3P3003 DDR : septembre 2020','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2020-11-26 15:02:01','updated_at' => '2020-11-26 15:02:01','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1606402921'),
  array('id' => '612','dossier_medical_id' => '358','description' => 'FCV/mammographie réalisés il y a 1 an','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2020-11-26 15:02:23','updated_at' => '2020-11-26 15:02:23','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1606402943'),
  array('id' => '613','dossier_medical_id' => '359','description' => '-Hospitalisation à HGOPED en Janvier 2020 pendant environ 1mois pour Bronchopneumopathie + Bronchectasie + ulcère gastrique à H. pylori
-Patient probablement porteur VHC à confirmer','date' => NULL,'type' => 'Médical','created_at' => '2020-11-26 15:14:18','updated_at' => '2020-11-26 15:14:18','deleted_at' => NULL,'slug' => 'medical-1606403658'),
  array('id' => '614','dossier_medical_id' => '351','description' => 'statut vaccinal a jour Jusqu’à 09 mois  la suite des vaccins  mal connue','date' => NULL,'type' => 'Médical','created_at' => '2020-11-28 07:47:43','updated_at' => '2020-11-28 07:47:43','deleted_at' => NULL,'slug' => 'medical-1606549663'),
  array('id' => '615','dossier_medical_id' => '382','description' => 'MILDA: non   
pas de pathologie chronique connue 
dernier déparasitage  il ya 02 mois avecdu  mebendazole posologie mal connue','date' => NULL,'type' => 'Médical','created_at' => '2020-11-28 08:34:34','updated_at' => '2020-11-28 08:34:34','deleted_at' => NULL,'slug' => 'medical-1606552474'),
  array('id' => '616','dossier_medical_id' => '382','description' => 'na jamais bénéficié d\'une intervention chirurgicale','date' => NULL,'type' => 'Chirugical','created_at' => '2020-11-28 08:35:55','updated_at' => '2020-11-28 08:35:55','deleted_at' => NULL,'slug' => 'chirugical-1606552555'),
  array('id' => '617','dossier_medical_id' => '382','description' => 'DDR : 25-08-2020  AG : 13 sa+4 jour  ménarche : 16 ans   coitage : 22 ans 
Cycle de 28 jours 
Durée des règles : 3-4jours 
Nombre de partenaire sexuel actuel : 01  
Nombre de partenaire sexuel cumulé :01
G5P5004
G1 : il Ya 12 ans Accouchement à terme par voie basse compliqué de déchirure du périnée   nouveau-né de sexe féminin 4500g  
G2 : il Ya 09 ans ANAT nouveau-né de sexe masculin 3100g
G3 : il Ya 06 ans ANAT nouveau-né de sexe féminin 3600g 
G4 : il Ya 03 ans ANAT nouveau-né de sexe masculin 4500g
G5 ( grossesse actuelle) : aucun bilan effectué  aucune prophylaxie','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2020-11-28 08:48:14','updated_at' => '2020-11-28 09:25:51','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1606553294'),
  array('id' => '618','dossier_medical_id' => '382','description' => 'GSRH: AB-','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2020-11-28 08:49:52','updated_at' => '2020-11-28 08:49:52','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1606553392'),
  array('id' => '619','dossier_medical_id' => '382','description' => 'électrophorèse de hgb: AA','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2020-11-28 08:50:38','updated_at' => '2020-11-28 08:50:38','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1606553438'),
  array('id' => '620','dossier_medical_id' => '382','description' => 'dépistage du cancer du col de l\'utérus et du sein jamais effectués','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2020-11-28 08:51:50','updated_at' => '2020-11-28 08:51:50','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1606553510'),
  array('id' => '621','dossier_medical_id' => '383','description' => 'AgHBS positive le 02/06/2020','date' => NULL,'type' => 'Médical','created_at' => '2020-11-28 19:55:14','updated_at' => '2020-11-28 19:55:14','deleted_at' => NULL,'slug' => 'medical-1606593314'),
  array('id' => '622','dossier_medical_id' => '383','description' => 'G2P1001. 
G1 en 2019, accouchement en juin 2020 d\'un nouveau-né de sexe masculin ayant pesé 3400grs; compliqué de dechirure du 1er dégré

G2 en 2020: grossesse actuelle; CPN:0; Echographie du 1er trimestre du 28/11/2020 : grossesse monofoetale évolutive de 16SA+5jrs; LA normal; placenta normal; pas déanomalie décelée ; DPA: 10/05/2021

*K10(5/?), dysménorrhée: oui, ménorragie: non ; Métrorragie: non ;
*dépistage des cancers du col et du sein jamais effectués
*IST: non; 
*Méthode de contraception: aucune
*Coïtarche: 16ans ; PSC: + de 10 ; PSA: 1','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2020-11-28 20:28:43','updated_at' => '2020-11-28 20:28:43','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1606595323'),
  array('id' => '623','dossier_medical_id' => '384','description' => 'épigastralgie chronique depuis plusieurs années sous maalox en cas de crise douloureuse;

motion d\'hémorroîde externe depuis 3 ans sous mesures hygiéno-diététiques;','date' => NULL,'type' => 'Médical','created_at' => '2020-11-29 10:30:33','updated_at' => '2020-11-29 10:30:33','deleted_at' => NULL,'slug' => 'medical-1606645833'),
  array('id' => '624','dossier_medical_id' => '384','description' => 'G0P0; DDR: 10/11/2020; K14 (4-5 jours de menstruation/ durée du cycle 30 jours); dysménorrhées: oui primaires; prit en charge par efferalgan cp
dernier coït non protégé il y a 3 semaines','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2020-11-29 10:35:58','updated_at' => '2020-11-29 10:35:58','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1606646158'),
  array('id' => '625','dossier_medical_id' => '385','description' => 'Myopie','date' => '2018-01-30','type' => 'Médical','created_at' => '2020-11-30 20:42:22','updated_at' => '2020-11-30 20:42:22','deleted_at' => NULL,'slug' => 'medical-1606768942'),
  array('id' => '626','dossier_medical_id' => '385','description' => 'G3P2A00  (enfants: 5ans et 3ans )
DDR: 04/09/2020   
DPA: 11/06/2021
AG: 12SA et 3 jrs','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2020-11-30 20:48:10','updated_at' => '2020-11-30 20:48:10','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1606769290'),
  array('id' => '627','dossier_medical_id' => '386','description' => 'Aucun','date' => NULL,'type' => 'Médical','created_at' => '2020-12-01 00:40:31','updated_at' => '2020-12-01 00:40:31','deleted_at' => NULL,'slug' => 'medical-1606783231'),
  array('id' => '628','dossier_medical_id' => '386','description' => 'Aucun','date' => NULL,'type' => 'Chirugical','created_at' => '2020-12-01 00:40:49','updated_at' => '2020-12-01 00:40:49','deleted_at' => NULL,'slug' => 'chirugical-1606783249'),
  array('id' => '629','dossier_medical_id' => '387','description' => '-	DT2 inaugural (3g/l) en 2007 PEC par des MHD
-	Epigastralgie soulagée par Maalox/Oméprazole ; 
-	Notion de douleur mammaire bilatérale en 2016. Elle aurait bénéficié d’un traitement non connu par la patiente','date' => NULL,'type' => 'Médical','created_at' => '2020-12-01 10:33:26','updated_at' => '2020-12-01 10:33:26','deleted_at' => NULL,'slug' => 'medical-1606818806'),
  array('id' => '630','dossier_medical_id' => '387','description' => '-G7P4034 Ménopause à 50 ans
-FCV réalisé il y a 4 ans','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2020-12-01 10:33:59','updated_at' => '2020-12-01 10:33:59','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1606818839'),
  array('id' => '631','dossier_medical_id' => '387','description' => '-	Père HTA/DT2 sous traitement en BSA
-	Conjoint/descendants en BSA','date' => NULL,'type' => 'Familial','created_at' => '2020-12-01 10:34:26','updated_at' => '2020-12-01 10:34:26','deleted_at' => NULL,'slug' => 'familial-1606818866'),
  array('id' => '632','dossier_medical_id' => '388','description' => '- Obstétrical   G4P3003
   1ère grossesse en 2010; ANAT d\'un n-né de sexe masculin, ayant pesé 4500g , sans complication
   2ème grossesse en 2015; ANAT d\'un n-né de sexe masculin, ayant pesé 4800g , sans complication
  3ème grossesse en 2019; ANAT d\'un n-né de sexe masculin, ayant pesé 3800g , sans complication
  4ème grossesse : grossesse actuelle ; DDR: 24/10/2020;  CPN:0. VAT:0 

Gynécologique:   
 ménarche: 16ans;  durée des menstruations: 3-5 jours;  durée du cycle: 25-30 jours; irrégulier ; dysménorrhées: +/- ; métrorragie: non; ménorragie: non; 
coïtarche: 18 ans; PSC: 1 ; PSA: 1 ;  IST: non; dépistage des cancer du col de l\'utérus et du sein jamais fait; 
contraception: aucune','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2020-12-02 08:20:52','updated_at' => '2020-12-02 08:20:52','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1606897252'),
  array('id' => '633','dossier_medical_id' => '388','description' => 'pas d\'HTA
pas de diabète','date' => NULL,'type' => 'Familial','created_at' => '2020-12-02 08:21:27','updated_at' => '2020-12-02 08:21:27','deleted_at' => NULL,'slug' => 'familial-1606897287'),
  array('id' => '634','dossier_medical_id' => '388','description' => 'épigastralgie chronique sous maalox en cas de crise','date' => NULL,'type' => 'Médical','created_at' => '2020-12-02 08:22:34','updated_at' => '2020-12-02 08:22:34','deleted_at' => NULL,'slug' => 'medical-1606897354'),
  array('id' => '635','dossier_medical_id' => '390','description' => '- gynécologique:  DDR: 27/11/2020
  ménarche: 14ans; durée menstruation: 3-4 jours ; durée du cycle: ? ; dysménorrhées: oui mais inconstantes; 
  coïtarche :18 ans; PSC: 02; PSA: 1 ; IST: non; 
  contraception: non
  désir de grossesse depuis 2ans 
  dépistage des cancer du col de l\'utérus et du sein jamais effectué
  
- obstétricaux: G1P1001 ; en 2016 : ANAT d\'un nouveau-né de sexe masculin ayant pesé 5500grs , sans complication','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2020-12-02 13:26:43','updated_at' => '2020-12-02 13:26:43','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1606915603'),
  array('id' => '636','dossier_medical_id' => '392','description' => 'Epigastralgie chronique ; cataracte bilatérale','date' => NULL,'type' => 'Médical','created_at' => '2020-12-03 13:03:59','updated_at' => '2020-12-03 13:03:59','deleted_at' => NULL,'slug' => 'medical-1607000639'),
  array('id' => '637','dossier_medical_id' => '392','description' => '•	Chirurgie oculaire G pour cataracte en 2019','date' => NULL,'type' => 'Chirugical','created_at' => '2020-12-03 13:04:21','updated_at' => '2020-12-03 13:04:21','deleted_at' => NULL,'slug' => 'chirugical-1607000661'),
  array('id' => '638','dossier_medical_id' => '392','description' => 'G6P3003 (03 DCD) ; ménopause 50 ans ; aucun bilan de dépistage cancers seins/col','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2020-12-03 13:04:39','updated_at' => '2020-12-03 13:04:39','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1607000679'),
  array('id' => '639','dossier_medical_id' => '393','description' => 'Diabète (oncle maternel)','date' => NULL,'type' => 'Médical','created_at' => '2020-12-04 10:15:16','updated_at' => '2020-12-04 10:15:16','deleted_at' => NULL,'slug' => 'medical-1607076916'),
  array('id' => '640','dossier_medical_id' => '389','description' => '-	DT2 × 5 ans sous Glucophage 500mg 1cp/j compliante et observante
-	Hospitalisation à Laquintini en 2018 où elle aurait reçu par « erreur médicale un traitement probablement pour la leucémie ». Il s’en est suivi des troubles à type de chute de cheveux, déchaussement des dents, brûlure de la  muqueuse oeso-gastroduodénale motivant la réalisation d’une FOGD à IDIMED puis elle aurait bénéficié d’un traitement non documenté. Evolution favorable','date' => NULL,'type' => 'Médical','created_at' => '2020-12-04 14:20:28','updated_at' => '2020-12-04 14:20:28','deleted_at' => NULL,'slug' => 'medical-1607091628'),
  array('id' => '641','dossier_medical_id' => '389','description' => 'G8P6036 (02 fausses couches dont 01 grossesse gémellaire et 01 grossesse mono-fœtale) ; ménopause à 50 ans ; dernière mammographie en 2019, FCV il y a 5 ans.','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2020-12-04 14:20:51','updated_at' => '2020-12-04 14:20:51','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1607091651'),
  array('id' => '642','dossier_medical_id' => '389','description' => '-	Père DT2
-	Fratrie : 4e d’une fratrie de 9 enfants dont 2 frères sont diabétiques
-	Descendants en BSA','date' => NULL,'type' => 'Familial','created_at' => '2020-12-04 14:21:43','updated_at' => '2020-12-04 14:21:43','deleted_at' => NULL,'slug' => 'familial-1607091703'),
  array('id' => '643','dossier_medical_id' => '394','description' => 'Médicaux:   Gastrite chronique depuis 02 ans jamais consulter mais prend en automédication du phosphalugel si crise amendement des crises après 20 mois (04 mois sans crise)','date' => NULL,'type' => 'Médical','created_at' => '2020-12-05 10:24:29','updated_at' => '2020-12-05 10:24:29','deleted_at' => NULL,'slug' => 'medical-1607163869'),
  array('id' => '644','dossier_medical_id' => '394','description' => 'Prise DᶦAINS pour des douleurs dentaires chroniques','date' => NULL,'type' => 'Médical','created_at' => '2020-12-05 10:24:56','updated_at' => '2020-12-05 10:24:56','deleted_at' => NULL,'slug' => 'medical-1607163896'),
  array('id' => '645','dossier_medical_id' => '394','description' => 'Dernier déparasitage mal connu','date' => NULL,'type' => 'Médical','created_at' => '2020-12-05 10:25:20','updated_at' => '2020-12-05 10:25:20','deleted_at' => NULL,'slug' => 'medical-1607163920'),
  array('id' => '646','dossier_medical_id' => '394','description' => 'Consomme de l’eau du robinet et du forage','date' => NULL,'type' => 'Médical','created_at' => '2020-12-05 10:25:48','updated_at' => '2020-12-05 10:25:48','deleted_at' => NULL,'slug' => 'medical-1607163948'),
  array('id' => '647','dossier_medical_id' => '394','description' => 'N’a Jamais bénéficié d’une intervention chirurgicale','date' => NULL,'type' => 'Chirugical','created_at' => '2020-12-05 10:26:09','updated_at' => '2020-12-05 10:26:09','deleted_at' => NULL,'slug' => 'chirugical-1607163969'),
  array('id' => '648','dossier_medical_id' => '394','description' => 'DDR : 30-11-2020 G3P3003 menarche : 14 ans  coitage : 24 ans nombre de partenaire sexuel actuel : 01  Frottis cervico-vaginal et mammographie jamais fait','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2020-12-05 10:26:37','updated_at' => '2020-12-05 10:26:37','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1607163997'),
  array('id' => '649','dossier_medical_id' => '394','description' => 'Sérologie HIV, AgHBs Achcv il Ya 04 résultats négatifs IL YA 04 ans  et non documentés 
Vaccin hépatite B reçu 04 doses il Ya 03 ans    non documenté','date' => NULL,'type' => 'Médical','created_at' => '2020-12-05 10:27:05','updated_at' => '2020-12-05 10:27:05','deleted_at' => NULL,'slug' => 'medical-1607164025'),
  array('id' => '650','dossier_medical_id' => '435','description' => 'diabétique connue depuis 3 mois et demi découvert au cours d\'une consultation pour plaie + inflammation  du pieds gauche
glycémie de départ 1.40 g/l ; traitement initié DAONIL CP 5mg : 1cp/jour; patiente non observante au traitement (une seule boite prise).','date' => '2020-09-25','type' => 'Médical','created_at' => '2020-12-09 07:25:18','updated_at' => '2020-12-09 07:25:18','deleted_at' => NULL,'slug' => 'medical-1607498718'),
  array('id' => '651','dossier_medical_id' => '435','description' => 'Hypertendue depuis 20016; traitement initié (nom inconnu); arrêt de traitement il ya 3 ans. 
n\'a jamais consulté un cardiologue','date' => NULL,'type' => 'Médical','created_at' => '2020-12-09 07:30:39','updated_at' => '2020-12-09 07:30:39','deleted_at' => NULL,'slug' => 'medical-1607499039'),
  array('id' => '652','dossier_medical_id' => '435','description' => 'G8P8007 (un enfant décédé après la naissance). 
ménopausée depuis 2007 ; pas de traitement hormonal substitutif
dépistage des cancers du col de l\'utérus et du sein jamais fait','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2020-12-09 07:34:25','updated_at' => '2020-12-09 07:34:25','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1607499265'),
  array('id' => '653','dossier_medical_id' => '436','description' => 'HTA connue depuis mai 2019; découvert au cours d\'un bilan de santé; mise sous mesures hygiéno-diététiques.
contrôle TA le 06/11/2020: BD: 153/98 mmhg; BG: 171/116 mmhg; le 16/11/20: BD: 180/100 mmhg; BG: 160/100mmhg ; le 09/12/2020: 156/93 mmgh','date' => NULL,'type' => 'Médical','created_at' => '2020-12-09 09:01:41','updated_at' => '2020-12-09 09:01:41','deleted_at' => NULL,'slug' => 'medical-1607504501'),
  array('id' => '654','dossier_medical_id' => '436','description' => 'G10P9016 ( 1 fausse couche spontanée; 3 enfants décédés);
dépistage des cancer du col de l\'utérus et du sein réalisé pour la dernière fois en 2018 sans particularité.
ménopausée depuis plus de 20 ans ; pas de traitement hormonal substitutif','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2020-12-09 09:19:44','updated_at' => '2020-12-09 09:19:44','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1607505584'),
  array('id' => '655','dossier_medical_id' => '321','description' => 'AVC ischémique thalamique droit suivi à l\'hôpital central de yaoundé;','date' => '2020-10-07','type' => 'Médical','created_at' => '2020-12-09 11:15:06','updated_at' => '2020-12-09 11:15:06','deleted_at' => NULL,'slug' => 'medical-1607512506'),
  array('id' => '656','dossier_medical_id' => '380','description' => 'hydrocephalus, 
epilepsy','date' => '1984-09-11','type' => 'Médical','created_at' => '2020-12-09 13:09:15','updated_at' => '2020-12-09 13:09:15','deleted_at' => NULL,'slug' => 'medical-1607519355'),
  array('id' => '657','dossier_medical_id' => '331','description' => 'G2P1001
pas de dysmenorhée ni de dyspareunie 
Dernier FCV en Janvier 2020','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2020-12-09 18:41:40','updated_at' => '2020-12-09 18:41:40','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1607539300'),
  array('id' => '658','dossier_medical_id' => '438','description' => 'Obstétricaux : G2P0010 
G1 : IVG en 2007 par curetage sans complications
G2 : grossesse actuelle DDR : 03/07/2020 DPA : 10/04/2021 AG= 22 SA+3jrs
Nombre de CPN réalisé : 00
Bilans réalisés : 
Biologiques : aucun
Morphologiques : 03 échographies réalisées 
Echo 1 : endovaginale faite le 10/08/20 montrant une grossesse intra utérine avec un sac gestationnel de 10mm sans embryon visible. Echographie de contrôle dans 4 semaines
Echo 2 : pelvienne faite le 10/09/20 montrant un sac gestationnel embryonné normalement évolutif de 09 SA+6jrs sur utérus pauci myomateux. DPA= 09/04/21
Echo 3 : obstétricale faite le 04/11/20 montrant une grossesse intra-utérine monofoetale de 17 SA+1jr d’âge échographique sur utérus myomateux. Présentation  céphalique, pas de circulaire du cordon ; PFE= 197+/- 30 g ; placenta d’insertion corporéal antérieur ; LA transsonore en quantité suffisante ; sexe M, col utérin homogène long et fermé de 38.7mm ; DPA= 13/04/21 +/- 2 semaines. Myomètre hétérogène siège d’un myome sous séreux antérieur de 32.5 × 21.4 mm sensible au passage de la sonde.
Prophylaxies : 
Antimalarique : TPI (aucun) ; MILDA (-)
Antitétanique : aucun
Antianémique : Tardyferon B9 : 1cp/jr
Pathologies en grossesse : vaginose à Gardnerella vaginalis diagnostiquée à partir de la clinique + PCV et traitée par Meclon ovule (1 ovule /jr) et Gynophilus gélule (1gel/jr)
Salmonellose (TO=130 ; TH=1/80) traitée par Fixim 200mg (1cp×2/jr pendant 10jrs)
Gynécologiques : ménarches à 16 ans cycle menstruel régulier (5-6/28-30jrs), dysménorrhée (+) IST (-) FCV (-) ; pas de pathologies gynécologiques.
Médicaux : RAS
Chirurgicaux : RAS
Immunoallergiques : GsRh non connu, E/Hb non connu, SM> 3mois ; allergie (-)
Toxicologiques : alcool (-) ; tabac (-)
Familiaux : 
Ascendants : HTA chez mère et grand-mère ; DT chez grand-mère
Collatéraux : 2ème d’une fratrie de 2 enfants ; le grand frère en bonne santé apparente
Conjoint : pas de pathologies chroniques ; GsRh : O+ ; E/Hb non connu','date' => '2020-07-03','type' => 'Gynéco-obstétrique','created_at' => '2020-12-09 19:51:21','updated_at' => '2020-12-09 19:51:21','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1607543481'),
  array('id' => '659','dossier_medical_id' => '152','description' => 'Hta','date' => '2020-05-07','type' => 'Médical','created_at' => '2020-12-09 21:04:41','updated_at' => '2020-12-09 21:04:41','deleted_at' => NULL,'slug' => 'medical-1607547881'),
  array('id' => '660','dossier_medical_id' => '152','description' => 'Hta','date' => NULL,'type' => 'Médical','created_at' => '2020-12-09 21:05:15','updated_at' => '2020-12-09 21:05:15','deleted_at' => NULL,'slug' => 'medical-1607547915'),
  array('id' => '661','dossier_medical_id' => '485','description' => 'Médicaux : ulcère gastrique chronique secondaire à une prise d’AINS au long cours
Gastrite à H.pylori de découverte récente (31/10/20) mise sous traitement (amoxicilline, clarithromycine, pantoprazole)
Pathologie du bas appareil urinaire (vessie) à type de résidu post mictionnel occasionnant des infections urinaires à répétition (non documenté)','date' => NULL,'type' => 'Médical','created_at' => '2020-12-10 06:19:22','updated_at' => '2020-12-10 06:19:22','deleted_at' => NULL,'slug' => 'medical-1607581162'),
  array('id' => '662','dossier_medical_id' => '485','description' => 'appendicectomie en 1993 ; 
hystérectomie totale en 1998 pour myomes symptomatiques à type de ménométrorragie ; chirurgie esthétique mammaire bilatérale (pose d’implant) en 2010','date' => NULL,'type' => 'Chirugical','created_at' => '2020-12-10 06:21:13','updated_at' => '2020-12-10 06:21:13','deleted_at' => NULL,'slug' => 'chirugical-1607581273'),
  array('id' => '663','dossier_medical_id' => '485','description' => 'G3P2011
G1 : en 1981 accouchement normal par voie basse d\'un mort né de sexe féminin
G2 : en 1983 accouchement normal par voie basse d\'un nouveau né vivant de sexe masculin
G3 : en 1985 IVG (méthode non connue) avec complications à type "d\'infection vaginale" (endométrite?)
ménarche à 14 ans ; pas de pathologies gynécologiques','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2020-12-10 07:24:21','updated_at' => '2020-12-10 07:24:21','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1607585061'),
  array('id' => '664','dossier_medical_id' => '485','description' => 'Ascendants : HTA+ leucémie chez mère décédée ; 
cirrhose du foie? cancer du foie? chez père décédé
Collatéraux : RAS
Descendants : RAS','date' => NULL,'type' => 'Familial','created_at' => '2020-12-10 07:28:25','updated_at' => '2020-12-10 07:28:25','deleted_at' => NULL,'slug' => 'familial-1607585305'),
  array('id' => '665','dossier_medical_id' => '486','description' => 'pathologie digestive non documentée (constipation chronique) (troubles fonctionnels intestinaux?) traitement instauré : mesures hygiénodiététiques
pas d\'antécédent d\'hospitalisation
pas de pathologie chronique
dernière consultation le 04/03/20 pour rhinobronchite','date' => NULL,'type' => 'Médical','created_at' => '2020-12-10 10:09:21','updated_at' => '2020-12-10 10:09:21','deleted_at' => NULL,'slug' => 'medical-1607594961'),
  array('id' => '666','dossier_medical_id' => '486','description' => 'jamais opérée','date' => NULL,'type' => 'Chirugical','created_at' => '2020-12-10 10:09:56','updated_at' => '2020-12-10 10:09:56','deleted_at' => NULL,'slug' => 'chirugical-1607594996'),
  array('id' => '667','dossier_medical_id' => '486','description' => 'Ascendants : Diabète chez grand-mère maternelle
Collatéraux : 2ème d\'une fratrie de 2 enfants, l\'autre en bonne santé apparente','date' => NULL,'type' => 'Familial','created_at' => '2020-12-10 10:11:38','updated_at' => '2020-12-10 10:11:38','deleted_at' => NULL,'slug' => 'familial-1607595098'),
  array('id' => '668','dossier_medical_id' => '487','description' => 'MILDA(-)','date' => NULL,'type' => 'Médical','created_at' => '2020-12-10 15:49:38','updated_at' => '2020-12-10 15:49:38','deleted_at' => NULL,'slug' => 'medical-1607615378'),
  array('id' => '669','dossier_medical_id' => '487','description' => 'Pas de pathologie chronique','date' => NULL,'type' => 'Médical','created_at' => '2020-12-10 15:50:07','updated_at' => '2020-12-10 15:50:07','deleted_at' => NULL,'slug' => 'medical-1607615407'),
  array('id' => '670','dossier_medical_id' => '487','description' => 'Consomme de l’eau de forage 
Dernier déparasitage inconnue','date' => NULL,'type' => 'Médical','created_at' => '2020-12-10 15:50:24','updated_at' => '2020-12-10 15:50:24','deleted_at' => NULL,'slug' => 'medical-1607615424'),
  array('id' => '671','dossier_medical_id' => '487','description' => 'Laparotomie indiqué pour péritonite par perforation intestinal  il Ya 18 ans suite post operatoire sans particularité','date' => NULL,'type' => 'Chirugical','created_at' => '2020-12-10 15:51:08','updated_at' => '2020-12-10 15:51:08','deleted_at' => NULL,'slug' => 'chirugical-1607615468'),
  array('id' => '672','dossier_medical_id' => '151','description' => 'Asthmatique connu depuis 35 ans initialement sous Aminophilline Cp (2cp×2/j), actuellement sous Salmeterol/Fluticasone 50/500 spray (5 pulvérisation lors des crises)','date' => NULL,'type' => 'Médical','created_at' => '2020-12-10 17:25:56','updated_at' => '2020-12-10 17:25:56','deleted_at' => NULL,'slug' => 'medical-1607621156'),
  array('id' => '673','dossier_medical_id' => '151','description' => 'Herniorraphie gauche il y a 25 ans','date' => NULL,'type' => 'Chirugical','created_at' => '2020-12-10 17:26:19','updated_at' => '2020-12-10 17:26:19','deleted_at' => NULL,'slug' => 'chirugical-1607621179'),
  array('id' => '674','dossier_medical_id' => '151','description' => 'G10P9019 ; ménopause à 50 ans ; biopsie du col utérin (06/02/2020) sans malignité','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2020-12-10 17:26:43','updated_at' => '2020-12-10 17:26:43','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1607621203'),
  array('id' => '675','dossier_medical_id' => '489','description' => 'épigastralgie intermittente spontanément résolutive','date' => NULL,'type' => 'Médical','created_at' => '2020-12-11 09:17:08','updated_at' => '2020-12-11 09:17:08','deleted_at' => NULL,'slug' => 'medical-1607678228'),
  array('id' => '676','dossier_medical_id' => '489','description' => '	Gynécologiques: 
̶	Menarche: 17 ans; Coïtarche: 19 ans ; cycle: 30j régulier; 
̶	Aucune méthode contraceptive; pas de dyspareunie; dysménorhée+
	Obstétricaux:
̶	DDR: 29/02/2020 AG: 40SA+1j
̶	G2P1001: G1 en 2012, AG 41SA, ANAT par voie basse sexe masculin pesant 3900g; G2 grossesse actuelle
̶	06 CPN réalisées:
-	CPN 1 (1/07/2020): TA 94/62 Pouls:109ppm, Poids 71kg 
AG 19SA, HU 21cm, CA 94cm, BDCF+
-	CPN 2 (13/08/2020): TA 107/68 Pouls:105ppm, Poids 73kg
AG 23SA+4j, HU 24cm, CA 97cm
-	CPN 3 (11/09/2020): TA 101/68 Pouls:100ppm, Poids 76kg
AG 27SA+3j, HU 27cm, CA 100cm
-	CPN 4 (13/10/2020): TA 103/69 Pouls:100ppm, Poids 77kg
AG 32SA+4j, HU 32cm, CA 102cm
-	CPN 5 (13/11/2020): TA 110/70 Pouls:104ppm, Poids 81kg
AG 36SA+4j, HU 33cm, CA 103cm
-	CPN 6 (04/12/2020): TA 101/63 Pouls:94ppm, Poids 82kg, 
AG 39SA+4j, HU 34cm, CA 104cm
̶	Bilans réalisés (14/07/2020): sérologies TORCH negatives; NFS normale; 03 échographies obstétricales, Monitoring
̶	Traitement reçu: Tardyferon B9, TPI: 3Cp prise unique de Sulfadoxine-Pyriméthamine (05doses), VAT (02 doses) Spasfon suppositoire si douleur.','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2020-12-11 09:18:06','updated_at' => '2020-12-11 09:18:06','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1607678286'),
  array('id' => '677','dossier_medical_id' => '491','description' => '-HTA connu ×3 ans initialement sous un anti HTA non précisé par la patiente, non observante et non compliante (notion d’écart thérapeutique)
-Epigastralgie intermittente soulagée par les IPP+ Gaviscon/Phosphalugel sachet','date' => NULL,'type' => 'Médical','created_at' => '2020-12-11 17:32:07','updated_at' => '2020-12-11 17:32:07','deleted_at' => NULL,'slug' => 'medical-1607707927'),
  array('id' => '678','dossier_medical_id' => '491','description' => 'G5P5005 ; ménopause à 46 ans ; aucune mammographie réalisée','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2020-12-11 17:32:31','updated_at' => '2020-12-11 17:39:50','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1607707951'),
  array('id' => '679','dossier_medical_id' => '491','description' => '-Mai 2020 : ostéosynthèse indiquée pour fractures multiples de l’articulation bilatérale des poignets
-En 2006/2013 : respectivement pour hystérectomie partielle puis totale','date' => NULL,'type' => 'Chirugical','created_at' => '2020-12-11 17:32:53','updated_at' => '2020-12-11 17:40:57','deleted_at' => NULL,'slug' => 'chirugical-1607707973'),
  array('id' => '680','dossier_medical_id' => '492','description' => 'G1P1001 ; DDR 16/11/2020 ; méthode contraceptive : préservatif masculin ; aucune MST antérieures','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2020-12-11 23:45:51','updated_at' => '2020-12-11 23:45:51','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1607730351'),
  array('id' => '681','dossier_medical_id' => '492','description' => '2e d’une fratrie de 02 enfants ; son frère aîné drépanocytaire homozygote','date' => NULL,'type' => 'Familial','created_at' => '2020-12-11 23:46:14','updated_at' => '2020-12-11 23:46:14','deleted_at' => NULL,'slug' => 'familial-1607730374'),
  array('id' => '682','dossier_medical_id' => '496','description' => 'MILDA(+)','date' => NULL,'type' => 'Médical','created_at' => '2020-12-14 09:33:00','updated_at' => '2020-12-14 09:33:00','deleted_at' => NULL,'slug' => 'medical-1607938380'),
  array('id' => '683','dossier_medical_id' => '496','description' => 'Pas de pathologie chronique','date' => NULL,'type' => 'Médical','created_at' => '2020-12-14 09:33:19','updated_at' => '2020-12-14 09:33:19','deleted_at' => NULL,'slug' => 'medical-1607938399'),
  array('id' => '684','dossier_medical_id' => '496','description' => 'Dernier déparasitage inconnu
Consomme de l’eau du forage','date' => NULL,'type' => 'Médical','created_at' => '2020-12-14 09:33:39','updated_at' => '2020-12-14 09:33:39','deleted_at' => NULL,'slug' => 'medical-1607938419'),
  array('id' => '685','dossier_medical_id' => '496','description' => 'Sérologie HIV, AgHBs  Achcv jamais effectuées','date' => NULL,'type' => 'Médical','created_at' => '2020-12-14 09:34:04','updated_at' => '2020-12-14 09:34:04','deleted_at' => NULL,'slug' => 'medical-1607938444'),
  array('id' => '686','dossier_medical_id' => '496','description' => 'N’a Jamais bénéficié d’une intervention chirurgicale','date' => NULL,'type' => 'Chirugical','created_at' => '2020-12-14 09:34:18','updated_at' => '2020-12-14 09:34:18','deleted_at' => NULL,'slug' => 'chirugical-1607938458'),
  array('id' => '687','dossier_medical_id' => '495','description' => '-	Sd d’apnée du sommeil, Dg posé il y a 2 ans. Suivie par un pneumologue HGD qui aurait préconisé un traitement avec un appareil d’assistance respiratoire la nuit ;
-	Epigastralgie intermittente déclenchée par la prise d’AINS soulagée par Oméprazole
-	Pas de DT2/HTA','date' => NULL,'type' => 'Médical','created_at' => '2020-12-14 17:09:01','updated_at' => '2020-12-14 17:09:01','deleted_at' => NULL,'slug' => 'medical-1607965741'),
  array('id' => '688','dossier_medical_id' => '495','description' => 'G6P6006, Ménopause = 60 ans ; Dépistage cancer du col/sein il y a 2ans','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2020-12-14 17:09:26','updated_at' => '2020-12-14 17:09:26','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1607965766'),
  array('id' => '689','dossier_medical_id' => '495','description' => 'Oncle HTA','date' => NULL,'type' => 'Familial','created_at' => '2020-12-14 17:11:37','updated_at' => '2020-12-14 17:11:37','deleted_at' => NULL,'slug' => 'familial-1607965897'),
  array('id' => '690','dossier_medical_id' => '497','description' => '-	Epigastralgie liée au stress et la consommation de certains aliments, spontanément résolutive
-	Port permanent de lunettes médicales pour myopie','date' => NULL,'type' => 'Médical','created_at' => '2020-12-14 17:23:55','updated_at' => '2020-12-14 17:23:55','deleted_at' => NULL,'slug' => 'medical-1607966635'),
  array('id' => '691','dossier_medical_id' => '497','description' => 'G4P3013 ; Méthode contraceptive : DIU depuis 7 ans ; aucune mammographie réalisée','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2020-12-14 17:24:13','updated_at' => '2020-12-14 17:24:13','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1607966653'),
  array('id' => '692','dossier_medical_id' => '497','description' => 'mère HTA ; conjoint et descendants en BSA','date' => NULL,'type' => 'Familial','created_at' => '2020-12-14 17:24:31','updated_at' => '2020-12-14 17:24:31','deleted_at' => NULL,'slug' => 'familial-1607966671'),
  array('id' => '693','dossier_medical_id' => '498','description' => 'HTA (-) selon la patiente notion de chiffres tensionnels élevés avec rémission spontanée sans traitement
Diabète (-) ; asthme (-)

consultation rhumatologue en aout 2020 pour lombalgie basse invalidante et gonalgie droite durant laquelle un scanner lombaire a été effectué montrant une discopathie dégénérative protrusive et zygarthrose L3-L4 et L4-L5 source de sténose et Listhésie grade 1 de L3 sur L4 majorant la sténose ;
le traitement institué à base d\'infiltration épidurale, lavage du genou droit et arthroinfiltration des genoux droit et gauche, n\'a pas été fait par la patiente','date' => NULL,'type' => 'Médical','created_at' => '2020-12-15 21:38:24','updated_at' => '2020-12-17 06:36:09','deleted_at' => NULL,'slug' => 'medical-1608068304'),
  array('id' => '694','dossier_medical_id' => '498','description' => 'Nodulectomie du sein gauche il y\'a 5 ans environ, indication inconnue','date' => NULL,'type' => 'Chirugical','created_at' => '2020-12-15 21:39:31','updated_at' => '2020-12-15 21:39:31','deleted_at' => NULL,'slug' => 'chirugical-1608068371'),
  array('id' => '695','dossier_medical_id' => '498','description' => 'ménopausée ; G8P8007 ; FCV : 01 fois il y\'a plus de 4 ans (résultat non documenté) ; dernière mammographie il y\'a plus de 4 ans (résultat non documenté)','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2020-12-15 21:41:53','updated_at' => '2020-12-15 21:41:53','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1608068513'),
  array('id' => '696','dossier_medical_id' => '498','description' => 'Ascendants : HTA (+) chez mère ; pas de diabète
Collatéraux et descendants en bonne santé apparente','date' => NULL,'type' => 'Familial','created_at' => '2020-12-15 21:43:27','updated_at' => '2020-12-15 21:43:27','deleted_at' => NULL,'slug' => 'familial-1608068607'),
  array('id' => '697','dossier_medical_id' => '499','description' => 'G1P0000 DDR : O5/11/20 AG= 5 SA+ 5jours','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2020-12-16 08:02:27','updated_at' => '2020-12-16 08:02:27','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1608105747'),
  array('id' => '698','dossier_medical_id' => '499','description' => 'HTA (-) Diabète (-) asthme (-)','date' => NULL,'type' => 'Médical','created_at' => '2020-12-16 08:07:20','updated_at' => '2020-12-16 08:07:20','deleted_at' => NULL,'slug' => 'medical-1608106040'),
  array('id' => '699','dossier_medical_id' => '499','description' => 'jamais été opérée','date' => NULL,'type' => 'Chirugical','created_at' => '2020-12-16 08:22:31','updated_at' => '2020-12-16 08:22:31','deleted_at' => NULL,'slug' => 'chirugical-1608106951'),
  array('id' => '700','dossier_medical_id' => '499','description' => 'Ascendants : HTA (+) chez père , cancer du pancréas chez grand-mère paternelle
Collatéraux : diabète chez cousin','date' => NULL,'type' => 'Familial','created_at' => '2020-12-16 08:25:26','updated_at' => '2020-12-16 08:25:26','deleted_at' => NULL,'slug' => 'familial-1608107126'),
  array('id' => '701','dossier_medical_id' => '500','description' => 'HTA (-) Diabète (-) asthme (-)','date' => NULL,'type' => 'Médical','created_at' => '2020-12-16 21:08:03','updated_at' => '2020-12-16 21:08:03','deleted_at' => NULL,'slug' => 'medical-1608152883'),
  array('id' => '702','dossier_medical_id' => '500','description' => 'jamais été opérée','date' => NULL,'type' => 'Chirugical','created_at' => '2020-12-16 21:08:23','updated_at' => '2020-12-16 21:08:23','deleted_at' => NULL,'slug' => 'chirugical-1608152903'),
  array('id' => '703','dossier_medical_id' => '500','description' => 'G7P6016, ménopause, FCV fait il y\'a plus de 3 ans','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2020-12-16 21:10:23','updated_at' => '2020-12-16 21:10:23','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1608153023'),
  array('id' => '704','dossier_medical_id' => '500','description' => 'HTA (-) diabète (-) asthme (-)','date' => NULL,'type' => 'Familial','created_at' => '2020-12-16 21:11:39','updated_at' => '2020-12-16 21:11:39','deleted_at' => NULL,'slug' => 'familial-1608153099'),
  array('id' => '705','dossier_medical_id' => '501','description' => 'MILDA(+)','date' => NULL,'type' => 'Médical','created_at' => '2020-12-17 01:48:44','updated_at' => '2020-12-17 01:48:44','deleted_at' => NULL,'slug' => 'medical-1608169724'),
  array('id' => '706','dossier_medical_id' => '501','description' => 'Pas de pathologie chronique connue','date' => NULL,'type' => 'Médical','created_at' => '2020-12-17 01:49:01','updated_at' => '2020-12-17 01:49:01','deleted_at' => NULL,'slug' => 'medical-1608169741'),
  array('id' => '707','dossier_medical_id' => '501','description' => 'Dernier déparasitage inconnu','date' => NULL,'type' => 'Médical','created_at' => '2020-12-17 01:49:23','updated_at' => '2020-12-17 01:49:23','deleted_at' => NULL,'slug' => 'medical-1608169763'),
  array('id' => '708','dossier_medical_id' => '501','description' => 'Consomme de l’eau de forage','date' => NULL,'type' => 'Médical','created_at' => '2020-12-17 01:50:08','updated_at' => '2020-12-17 01:50:08','deleted_at' => NULL,'slug' => 'medical-1608169808'),
  array('id' => '709','dossier_medical_id' => '501','description' => 'Jamais été opérée','date' => NULL,'type' => 'Chirugical','created_at' => '2020-12-17 01:50:22','updated_at' => '2020-12-17 01:50:22','deleted_at' => NULL,'slug' => 'chirugical-1608169822'),
  array('id' => '710','dossier_medical_id' => '501','description' => 'DDR : 06-12-2020','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2020-12-17 01:50:56','updated_at' => '2020-12-17 01:50:56','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1608169856'),
  array('id' => '711','dossier_medical_id' => '501','description' => 'Menarche : 15 ans 
Premier coït : 17 ans  
Nombre de partenaire sexuel actuel : 01
 Nombre de partenaire sexuel cumulé : 02
Dernier  Pcv il Ya  03 ans
N’a jamais effectué de frottis cervico-vaginal et de mammographie 

G6P3033
G1 :2014 fausse couche spontanée 
G2 :2014 fausse couche spontanée
 G3 : 2014  ANAT  fille PN 3000G
 G4 : 2015 ANAT Garçon PN 3200g  
 G5 : 2017 garçon  PN 4000 g
 G6 : il Ya 04 mois fausse couche spontanée','date' => NULL,'type' => 'Médical','created_at' => '2020-12-17 01:52:46','updated_at' => '2020-12-17 01:52:46','deleted_at' => NULL,'slug' => 'medical-1608169966'),
  array('id' => '712','dossier_medical_id' => '502','description' => 'MILDA(-)','date' => NULL,'type' => 'Médical','created_at' => '2020-12-17 06:56:43','updated_at' => '2020-12-17 06:56:43','deleted_at' => NULL,'slug' => 'medical-1608188203'),
  array('id' => '713','dossier_medical_id' => '502','description' => 'Pas de pathologie chronique connue','date' => NULL,'type' => 'Médical','created_at' => '2020-12-17 06:58:19','updated_at' => '2020-12-17 06:58:19','deleted_at' => NULL,'slug' => 'medical-1608188299'),
  array('id' => '714','dossier_medical_id' => '502','description' => 'Dernier déparasitage inconnu','date' => NULL,'type' => 'Médical','created_at' => '2020-12-17 06:59:04','updated_at' => '2020-12-17 06:59:04','deleted_at' => NULL,'slug' => 'medical-1608188344'),
  array('id' => '715','dossier_medical_id' => '502','description' => 'Consomme de l’eau de forage et du puits','date' => NULL,'type' => 'Médical','created_at' => '2020-12-17 06:59:27','updated_at' => '2020-12-17 06:59:27','deleted_at' => NULL,'slug' => 'medical-1608188367'),
  array('id' => '716','dossier_medical_id' => '502','description' => 'A bénéficié d’une myomectomie il Ya 20 ans','date' => NULL,'type' => 'Chirugical','created_at' => '2020-12-17 06:59:53','updated_at' => '2020-12-17 06:59:53','deleted_at' => NULL,'slug' => 'chirugical-1608188393'),
  array('id' => '717','dossier_medical_id' => '502','description' => 'Ménopausée depuis 06 ans','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2020-12-17 07:00:11','updated_at' => '2020-12-17 07:00:11','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1608188411'),
  array('id' => '718','dossier_medical_id' => '502','description' => 'Na jamais fait de Pcv 
N’a jamais effectué de frottis cervico-vaginal et de mammographie','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2020-12-17 07:00:32','updated_at' => '2020-12-17 07:00:32','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1608188432'),
  array('id' => '719','dossier_medical_id' => '502','description' => 'G1P1001 
ANAT fille PN 3400g il Ya 30 ans','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2020-12-17 07:00:48','updated_at' => '2020-12-17 07:00:48','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1608188448'),
  array('id' => '720','dossier_medical_id' => '503','description' => '- notion de crampes des membres inférieurs douloureuses nocturnes, motivant une consultation au cours de laquelle avait été prescrit des médicament (?), l\'évolution avait été marquée par une réduction légère de la fréquence ( 1-2 fois par semaine)','date' => NULL,'type' => 'Médical','created_at' => '2020-12-17 12:26:56','updated_at' => '2020-12-17 12:26:56','deleted_at' => NULL,'slug' => 'medical-1608208016'),
  array('id' => '721','dossier_medical_id' => '503','description' => 'hernie ombilicale , suite favorable et hernie inguino-scrotale bilatérale','date' => NULL,'type' => 'Chirugical','created_at' => '2020-12-17 12:28:22','updated_at' => '2020-12-17 12:28:22','deleted_at' => NULL,'slug' => 'chirugical-1608208102'),
  array('id' => '722','dossier_medical_id' => '503','description' => 'oncle diabétique','date' => NULL,'type' => 'Familial','created_at' => '2020-12-17 12:28:57','updated_at' => '2020-12-17 12:28:57','deleted_at' => NULL,'slug' => 'familial-1608208137'),
  array('id' => '723','dossier_medical_id' => '504','description' => 'G3P3003 ;FCV en 2016 ; pas de mammographie réalisée','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2020-12-17 17:08:00','updated_at' => '2020-12-17 17:08:00','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1608224880'),
  array('id' => '724','dossier_medical_id' => '504','description' => '02/12/2019 hystérectomie totale indiquée pour ménométrorragie sur kystes ovariens. Suites op simples','date' => NULL,'type' => 'Chirugical','created_at' => '2020-12-17 17:08:35','updated_at' => '2020-12-17 17:08:35','deleted_at' => NULL,'slug' => 'chirugical-1608224915'),
  array('id' => '725','dossier_medical_id' => '175','description' => 'G2P2002 ; FCV/mammographie en 2018','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2020-12-17 22:01:05','updated_at' => '2020-12-17 22:01:05','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1608242465'),
  array('id' => '726','dossier_medical_id' => '506','description' => 'HTA connue depuis environs 4 ans sous irbésartan+amlodipine 300/10mg, 1cp/jr et asthmatique depuis 2 ans sous Ventoline','date' => NULL,'type' => 'Médical','created_at' => '2020-12-20 10:06:49','updated_at' => '2020-12-20 10:06:49','deleted_at' => NULL,'slug' => 'medical-1608458809'),
  array('id' => '727','dossier_medical_id' => '506','description' => 'A subit une intervention chirurgicale indiquée pour cataracte en 2019 et en 2020 de suite simple','date' => NULL,'type' => 'Chirugical','created_at' => '2020-12-20 10:10:49','updated_at' => '2020-12-20 10:10:49','deleted_at' => NULL,'slug' => 'chirugical-1608459049'),
  array('id' => '728','dossier_medical_id' => '506','description' => 'G3P2 011','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2020-12-20 10:12:44','updated_at' => '2020-12-20 10:12:44','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1608459164'),
  array('id' => '729','dossier_medical_id' => '506','description' => 'HTA(-)   diabète(-)        asthme(-)','date' => NULL,'type' => 'Familial','created_at' => '2020-12-20 10:18:08','updated_at' => '2020-12-20 10:18:08','deleted_at' => NULL,'slug' => 'familial-1608459488'),
  array('id' => '730','dossier_medical_id' => '508','description' => 'G3P1 011:  2017 accouchement d\'un enfant de sexe masculin pesant 4500g a terme par voie basse
                   2020 fausse couche à un mois suite à la consommation d\'un produit naturel (le miel)','date' => NULL,'type' => 'Familial','created_at' => '2020-12-20 13:11:00','updated_at' => '2020-12-20 14:26:18','deleted_at' => '2020-12-20 14:26:18','slug' => 'familial-1608469860'),
  array('id' => '731','dossier_medical_id' => '508','description' => 'G3P1 011: 2017 accouchement d\'un enfant de sexe masculin pesant 4500g a terme par voie basse 2020 fausse couche à un mois suite à la consommation d\'un produit naturel (le miel)','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2020-12-20 13:22:35','updated_at' => '2020-12-20 13:22:35','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1608470555'),
  array('id' => '732','dossier_medical_id' => '508','description' => 'n\'a jamais subit une opération chirurgicale.','date' => NULL,'type' => 'Chirugical','created_at' => '2020-12-20 13:35:28','updated_at' => '2020-12-20 13:35:28','deleted_at' => NULL,'slug' => 'chirugical-1608471328'),
  array('id' => '733','dossier_medical_id' => '508','description' => 'Ascendants: parents vivants et en bonne santé apparente, pas de pathologie chronique
collatéraux: première née d\'une fratrie de 5 enfants tous en bonne santé apparente.
Descendants: mère d\'un petit garçons de 3 ans et en bonne santé apparente','date' => NULL,'type' => 'Familial','created_at' => '2020-12-20 13:40:26','updated_at' => '2020-12-20 13:40:26','deleted_at' => NULL,'slug' => 'familial-1608471626'),
  array('id' => '734','dossier_medical_id' => '508','description' => 'HTA(-),  diabète(-) , ASTHME(-)','date' => NULL,'type' => 'Médical','created_at' => '2020-12-20 13:42:28','updated_at' => '2020-12-20 13:42:28','deleted_at' => NULL,'slug' => 'medical-1608471748'),
  array('id' => '735','dossier_medical_id' => '507','description' => 'MILDA(+)','date' => NULL,'type' => 'Médical','created_at' => '2020-12-20 14:26:27','updated_at' => '2020-12-20 14:26:27','deleted_at' => NULL,'slug' => 'medical-1608474387'),
  array('id' => '736','dossier_medical_id' => '507','description' => 'Pas de pathologie chronique connue','date' => NULL,'type' => 'Médical','created_at' => '2020-12-20 14:26:48','updated_at' => '2020-12-20 14:26:48','deleted_at' => NULL,'slug' => 'medical-1608474408'),
  array('id' => '737','dossier_medical_id' => '507','description' => 'N’a jamais bénéficié d’une intervention chirurgicale','date' => NULL,'type' => 'Médical','created_at' => '2020-12-20 14:27:19','updated_at' => '2020-12-20 14:27:19','deleted_at' => NULL,'slug' => 'medical-1608474439'),
  array('id' => '738','dossier_medical_id' => '507','description' => 'DDR: 115-12-2020  G3p3003
pas de contraception 
na jamais fait de mammographie et de FCV','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2020-12-20 14:29:19','updated_at' => '2020-12-20 14:29:19','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1608474559'),
  array('id' => '739','dossier_medical_id' => '509','description' => 'G0P0 
DDR: 19/12/2020 ( en cours);
ménarche: 15 ans ; durée menstrues: 4-5 jours; durée cycle: 28 jours; régulier; dysménorrhée: oui ; ménorragie: non; métrorragie: non ; 
coïtarche : 21 ans ; PSC: 2 ; PSA: 1 ; vie en concubinage avec son conjoint ; dyspareunie: non; saignement post coïtal: non; méthode contraceptive aucune; 
désir de conception: oui ;
dépistage des cancer du col et du sein jamais fait','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2020-12-21 07:36:42','updated_at' => '2020-12-21 07:36:42','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1608536202'),
  array('id' => '740','dossier_medical_id' => '512','description' => '-	Multiples plaies de jambe D (1ere apparition en 2016) PEC comme ulcères chroniques récidivant de la jambe D à Adlucem Dla-Bonamoussadi où a été réalisé un écouvillonnage de sérosités (négatif). Polymédication : Locatop crème, Allercet Cp, Dexeryl crème, Lincocine 500 (1cp×3/j), Fucidine crème, Locoid crème. Evolution favorable marquée par la cicatrisation des ulcères
-	Insuffisance veineuse jambe D : échographie doppler veineuse MID (0811/2019) « aspe ct suggestif d’une insuffisance veineuse superficielle sous poplitée du MID sans reflux véritable » PEC avec Daflon 1000 (1cp×2/j) +  Bas de contention. Suite favorable
-	CS neurologue (Dr NFOR Leonard) en Mai 2020 pour polyneuropathie + paresthésies diffuses au cours de laquelle une ENMG a été réalisée évoquant : canal carpien D + neuropathie sensitive axonale légère longueur dépendante. Traitement reçu : Renerve P (1cp×2/j) Torix 120mg (1cp/j) + Diprostène injectable en infiltration (01). 
-	Epigastralgie intermittente soulagée par Oméprazole + Maalox
-	Céphalées de tension : Laroxyl gouttes
-	Vertiges paroxystiques : Tanganil 50 (1cp×2/j)
-	Pas de DT2/HTA','date' => NULL,'type' => 'Médical','created_at' => '2020-12-21 22:40:15','updated_at' => '2020-12-21 23:03:48','deleted_at' => '2020-12-21 23:03:48','slug' => 'medical-1608590415'),
  array('id' => '741','dossier_medical_id' => '512','description' => 'G4P4004, Ménopause = 55 ans ; FCV/mammographie jamais réalisé','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2020-12-21 22:41:27','updated_at' => '2020-12-21 22:41:27','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1608590487'),
  array('id' => '742','dossier_medical_id' => '512','description' => 'kystectomie face antérieur du cou >20 ans','date' => NULL,'type' => 'Chirugical','created_at' => '2020-12-21 22:41:58','updated_at' => '2020-12-21 22:41:58','deleted_at' => NULL,'slug' => 'chirugical-1608590518'),
  array('id' => '743','dossier_medical_id' => '512','description' => 'Multiples plaies de jambe D (1ere apparition en 2016) PEC comme ulcères chroniques récidivant de la jambe D à Adlucem Dla-Bonamoussadi où a été réalisé un écouvillonnage de sérosités (négatif). Polymédication : Locatop crème, Allercet Cp, Dexeryl crème, Lincocine 500 (1cp×3/j), Fucidine crème, Locoid crème. Evolution favorable marquée par la cicatrisation des ulcères','date' => NULL,'type' => 'Médical','created_at' => '2020-12-21 22:58:43','updated_at' => '2020-12-21 22:58:43','deleted_at' => NULL,'slug' => 'medical-1608591523'),
  array('id' => '744','dossier_medical_id' => '512','description' => 'Insuffisance veineuse jambe D : échographie doppler veineuse MID (0811/2019) « aspe ct suggestif d’une insuffisance veineuse superficielle sous poplitée du MID sans reflux véritable » PEC avec Daflon 1000 (1cp×2/j) +  Bas de contention. Suite favorable','date' => NULL,'type' => 'Médical','created_at' => '2020-12-21 22:59:07','updated_at' => '2020-12-21 22:59:07','deleted_at' => NULL,'slug' => 'medical-1608591547'),
  array('id' => '745','dossier_medical_id' => '512','description' => 'CS neurologue (Dr NFOR Leonard) en Mai 2020 pour polyneuropathie + paresthésies diffuses au cours de laquelle une ENMG a été réalisée évoquant : canal carpien D + neuropathie sensitive axonale légère longueur dépendante. Traitement reçu : Renerve P (1cp×2/j) Torix 120mg (1cp/j) + Diprostène injectable en infiltration (01).','date' => NULL,'type' => 'Médical','created_at' => '2020-12-21 22:59:28','updated_at' => '2020-12-21 22:59:28','deleted_at' => NULL,'slug' => 'medical-1608591568'),
  array('id' => '746','dossier_medical_id' => '512','description' => '-Epigastralgie intermittente soulagée par Oméprazole + Maalox','date' => NULL,'type' => 'Médical','created_at' => '2020-12-21 22:59:54','updated_at' => '2020-12-21 22:59:54','deleted_at' => NULL,'slug' => 'medical-1608591594'),
  array('id' => '747','dossier_medical_id' => '512','description' => '-Céphalées de tension : Laroxyl gouttes','date' => NULL,'type' => 'Médical','created_at' => '2020-12-21 23:00:11','updated_at' => '2020-12-21 23:00:11','deleted_at' => NULL,'slug' => 'medical-1608591611'),
  array('id' => '748','dossier_medical_id' => '512','description' => '-Vertiges paroxystiques : Tanganil 50 (1cp×2/j)','date' => NULL,'type' => 'Médical','created_at' => '2020-12-21 23:00:30','updated_at' => '2020-12-21 23:00:30','deleted_at' => NULL,'slug' => 'medical-1608591630'),
  array('id' => '749','dossier_medical_id' => '513','description' => 'G8P8006, Ménopause ? FCV/mammographie jamais réalisés','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2020-12-22 00:26:03','updated_at' => '2020-12-22 00:26:03','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1608596763'),
  array('id' => '750','dossier_medical_id' => '514','description' => 'Epigastralgie non PEC','date' => NULL,'type' => 'Médical','created_at' => '2020-12-22 06:13:36','updated_at' => '2020-12-22 06:13:36','deleted_at' => NULL,'slug' => 'medical-1608617616'),
  array('id' => '751','dossier_medical_id' => '514','description' => 'G1P1001 ; DDR Septembre 2020 ; méthode contraceptive : DEPO PROVERA fin le 14 janvier 2021 ; cycle irrégulier','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2020-12-22 06:14:18','updated_at' => '2020-12-22 06:14:18','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1608617658'),
  array('id' => '752','dossier_medical_id' => '517','description' => 'Ménarche à 14 ans cycle de 28-31 jours, durée du saignement 4-5 jours
pas de saignements anormaux, pas de dyspareunie, pas de dysménorrhée
pas d\'IST, FCV fait il y\'a 2 ans sans particularité (résultat non documenté)
pas de pathologies gynécologiques','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2020-12-24 08:57:21','updated_at' => '2020-12-24 08:57:21','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1608800241'),
  array('id' => '753','dossier_medical_id' => '517','description' => 'G3P1102
G1 : en 2013, accouchement prématuré à 7 mois par voie basse d\'un nouveau-né vivant de sexe féminin, suites de couches simples
G2 : en 2018, accouchement à terme par voie basse, d\'un nouveau-né vivant de sexe féminin, suites de couches simples
G3 : grossesse actuelle, DDR : 16/07/2020 DPA : 23/04/2021 AG : 22 SA+ 6 jours
pas de CPN, pas de bilans biologiques et morphologiques, pas de prophylaxie ( anti anémique, anti tétanique, antipaludique ) pas de pathologies en grossesse','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2020-12-24 09:22:20','updated_at' => '2020-12-24 09:22:20','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1608801740'),
  array('id' => '754','dossier_medical_id' => '517','description' => 'pas de pathologies chroniques connues','date' => NULL,'type' => 'Médical','created_at' => '2020-12-24 09:33:46','updated_at' => '2020-12-24 09:33:46','deleted_at' => NULL,'slug' => 'medical-1608802426'),
  array('id' => '755','dossier_medical_id' => '517','description' => 'n\'a jamais été opéré','date' => NULL,'type' => 'Chirugical','created_at' => '2020-12-24 09:34:19','updated_at' => '2020-12-24 09:34:19','deleted_at' => NULL,'slug' => 'chirugical-1608802459'),
  array('id' => '756','dossier_medical_id' => '518','description' => 'Prolapsus hémorroïdaire stade I en 2016 ayant bénéficié d’un traitement médicamenteux et de pharmacopées traditionnelles. Suite favorable','date' => NULL,'type' => 'Médical','created_at' => '2020-12-24 19:58:51','updated_at' => '2020-12-24 19:58:51','deleted_at' => NULL,'slug' => 'medical-1608839931'),
  array('id' => '757','dossier_medical_id' => '519','description' => 'Notion de rhinite virale en Novembre 2020 PEC avec Pardoterin Sp, Sekisan Sp, Efferalgan Sp. Suite favorable','date' => NULL,'type' => 'Médical','created_at' => '2020-12-25 07:34:56','updated_at' => '2020-12-25 07:34:56','deleted_at' => NULL,'slug' => 'medical-1608881696'),
  array('id' => '758','dossier_medical_id' => '519','description' => 'Pas d’hospitalisations antérieures','date' => NULL,'type' => 'Médical','created_at' => '2020-12-25 07:35:15','updated_at' => '2020-12-25 07:35:15','deleted_at' => NULL,'slug' => 'medical-1608881715'),
  array('id' => '759','dossier_medical_id' => '519','description' => 'Bon développement psychomoteur','date' => NULL,'type' => 'Médical','created_at' => '2020-12-25 07:35:46','updated_at' => '2020-12-25 07:35:46','deleted_at' => NULL,'slug' => 'medical-1608881746'),
  array('id' => '760','dossier_medical_id' => '519','description' => 'Vaccins hors PEV pas à jour pour l’âge','date' => NULL,'type' => 'Médical','created_at' => '2020-12-25 07:36:05','updated_at' => '2020-12-25 07:36:05','deleted_at' => NULL,'slug' => 'medical-1608881765'),
  array('id' => '761','dossier_medical_id' => '519','description' => 'Dort sous MILDA','date' => NULL,'type' => 'Médical','created_at' => '2020-12-25 07:36:26','updated_at' => '2020-12-25 07:36:26','deleted_at' => NULL,'slug' => 'medical-1608881786'),
  array('id' => '762','dossier_medical_id' => '519','description' => 'Jamais déparasité','date' => NULL,'type' => 'Médical','created_at' => '2020-12-25 07:36:46','updated_at' => '2020-12-25 07:36:46','deleted_at' => NULL,'slug' => 'medical-1608881806'),
  array('id' => '763','dossier_medical_id' => '520','description' => 'MILDA(+)','date' => NULL,'type' => 'Médical','created_at' => '2020-12-27 02:18:12','updated_at' => '2020-12-27 02:18:12','deleted_at' => NULL,'slug' => 'medical-1609035492'),
  array('id' => '764','dossier_medical_id' => '520','description' => 'Pas de pathologie chronique','date' => NULL,'type' => 'Médical','created_at' => '2020-12-27 02:18:44','updated_at' => '2020-12-27 02:18:44','deleted_at' => NULL,'slug' => 'medical-1609035524'),
  array('id' => '765','dossier_medical_id' => '520','description' => 'Né par voie basse et à  terme PN : 3200g','date' => NULL,'type' => 'Médical','created_at' => '2020-12-27 02:19:02','updated_at' => '2020-12-27 02:19:02','deleted_at' => NULL,'slug' => 'medical-1609035542'),
  array('id' => '766','dossier_medical_id' => '520','description' => 'Statut vaccinal à jour','date' => NULL,'type' => 'Médical','created_at' => '2020-12-27 02:19:42','updated_at' => '2020-12-27 02:19:42','deleted_at' => NULL,'slug' => 'medical-1609035582'),
  array('id' => '767','dossier_medical_id' => '520','description' => 'Sous allaitement maternel et bouillie enrichis','date' => NULL,'type' => 'Médical','created_at' => '2020-12-27 02:20:00','updated_at' => '2020-12-27 02:20:00','deleted_at' => NULL,'slug' => 'medical-1609035600'),
  array('id' => '768','dossier_medical_id' => '520','description' => 'Tabagisme passif(-)','date' => NULL,'type' => 'Médical','created_at' => '2020-12-27 02:20:19','updated_at' => '2020-12-27 02:20:19','deleted_at' => NULL,'slug' => 'medical-1609035619'),
  array('id' => '769','dossier_medical_id' => '520','description' => 'Pas de contage TB','date' => NULL,'type' => 'Médical','created_at' => '2020-12-27 02:20:34','updated_at' => '2020-12-27 02:20:34','deleted_at' => NULL,'slug' => 'medical-1609035634'),
  array('id' => '770','dossier_medical_id' => '520','description' => 'N’a jamais bénéficié d’une intervention chirurgicale','date' => NULL,'type' => 'Chirugical','created_at' => '2020-12-27 02:24:35','updated_at' => '2020-12-27 02:24:35','deleted_at' => NULL,'slug' => 'chirugical-1609035875'),
  array('id' => '771','dossier_medical_id' => '521','description' => 'Pas de notion de diabète ou HTA connue
Pas de notion d’épigastralgie','date' => NULL,'type' => 'Médical','created_at' => '2020-12-27 08:14:18','updated_at' => '2020-12-27 08:14:18','deleted_at' => NULL,'slug' => 'medical-1609056858'),
  array('id' => '772','dossier_medical_id' => '521','description' => 'N’a jamais subit une opération chirurgicale','date' => NULL,'type' => 'Chirugical','created_at' => '2020-12-27 08:15:28','updated_at' => '2020-12-27 08:15:28','deleted_at' => NULL,'slug' => 'chirugical-1609056928'),
  array('id' => '773','dossier_medical_id' => '521','description' => 'Patiente ménopausée
            FCV et mammographie jamais fait.','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2020-12-27 08:16:57','updated_at' => '2020-12-27 08:16:57','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1609057017'),
  array('id' => '774','dossier_medical_id' => '521','description' => '-Pas d’histoire de Cancer, de diabète ou d’HTA','date' => NULL,'type' => 'Familial','created_at' => '2020-12-27 08:22:29','updated_at' => '2020-12-27 08:22:29','deleted_at' => NULL,'slug' => 'familial-1609057349'),
  array('id' => '775','dossier_medical_id' => '522','description' => 'diabète(-)  HTA(-)','date' => NULL,'type' => 'Médical','created_at' => '2020-12-27 10:53:04','updated_at' => '2020-12-27 10:53:04','deleted_at' => NULL,'slug' => 'medical-1609066384'),
  array('id' => '776','dossier_medical_id' => '522','description' => 'pathologie au cours de le grossesse: Lipothymie de la femme enceinte','date' => NULL,'type' => 'Médical','created_at' => '2020-12-27 10:54:01','updated_at' => '2020-12-27 11:14:35','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1609066441'),
  array('id' => '777','dossier_medical_id' => '522','description' => 'JAMAIS OPERE','date' => NULL,'type' => 'Chirugical','created_at' => '2020-12-27 10:54:21','updated_at' => '2020-12-27 10:54:21','deleted_at' => NULL,'slug' => 'chirugical-1609066461'),
  array('id' => '778','dossier_medical_id' => '522','description' => 'RAS','date' => NULL,'type' => 'Familial','created_at' => '2020-12-27 10:55:02','updated_at' => '2020-12-27 10:55:02','deleted_at' => NULL,'slug' => 'familial-1609066502'),
  array('id' => '779','dossier_medical_id' => '522','description' => 'G1P0

DDR: 30/03/2020

DPA: 07/01/2021

AG: 38S+5JRS','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2020-12-27 11:29:05','updated_at' => '2020-12-27 11:29:05','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1609068545'),
  array('id' => '780','dossier_medical_id' => '89','description' => 'HTA','date' => NULL,'type' => 'Médical','created_at' => '2020-12-27 12:50:38','updated_at' => '2020-12-27 12:50:38','deleted_at' => NULL,'slug' => 'medical-1609073438'),
  array('id' => '781','dossier_medical_id' => '89','description' => 'Hypercholestérolémie','date' => NULL,'type' => 'Médical','created_at' => '2020-12-27 12:51:02','updated_at' => '2020-12-27 12:51:02','deleted_at' => NULL,'slug' => 'medical-1609073462'),
  array('id' => '782','dossier_medical_id' => '89','description' => 'Père décédé à l’âge de 60 ans d’un IDM.
Mère diabétique','date' => NULL,'type' => 'Familial','created_at' => '2020-12-27 12:51:30','updated_at' => '2020-12-27 12:51:30','deleted_at' => NULL,'slug' => 'familial-1609073490'),
  array('id' => '783','dossier_medical_id' => '517','description' => 'Pas de pathologies chroniques connues','date' => NULL,'type' => 'Familial','created_at' => '2020-12-27 17:09:03','updated_at' => '2020-12-27 17:09:03','deleted_at' => NULL,'slug' => 'familial-1609088943'),
  array('id' => '784','dossier_medical_id' => '89','description' => 'HTA traitée','date' => NULL,'type' => 'Médical','created_at' => '2020-12-27 19:31:13','updated_at' => '2020-12-27 19:31:13','deleted_at' => NULL,'slug' => 'medical-1609097473'),
  array('id' => '785','dossier_medical_id' => '89','description' => 'Hypercholestérolémie traitée','date' => NULL,'type' => 'Médical','created_at' => '2020-12-27 19:31:36','updated_at' => '2020-12-27 19:31:36','deleted_at' => NULL,'slug' => 'medical-1609097496'),
  array('id' => '786','dossier_medical_id' => '89','description' => 'Père décédé à l’âge de 60 ans d’un IDM
Mère diabétique','date' => NULL,'type' => 'Familial','created_at' => '2020-12-27 19:32:18','updated_at' => '2020-12-27 19:32:18','deleted_at' => NULL,'slug' => 'familial-1609097538'),
  array('id' => '787','dossier_medical_id' => '523','description' => 'HTA','date' => NULL,'type' => 'Médical','created_at' => '2020-12-27 21:56:05','updated_at' => '2020-12-27 21:56:05','deleted_at' => NULL,'slug' => 'medical-1609106165'),
  array('id' => '788','dossier_medical_id' => '523','description' => 'Probable péricardite virale en 2017','date' => NULL,'type' => 'Médical','created_at' => '2020-12-27 21:56:31','updated_at' => '2020-12-27 21:56:31','deleted_at' => NULL,'slug' => 'medical-1609106191'),
  array('id' => '789','dossier_medical_id' => '523','description' => 'Surcharge pondérale','date' => NULL,'type' => 'Médical','created_at' => '2020-12-27 21:56:54','updated_at' => '2020-12-27 21:56:54','deleted_at' => NULL,'slug' => 'medical-1609106214'),
  array('id' => '790','dossier_medical_id' => '523','description' => 'Dyslipidémie','date' => NULL,'type' => 'Médical','created_at' => '2020-12-27 21:57:12','updated_at' => '2020-12-27 21:57:12','deleted_at' => NULL,'slug' => 'medical-1609106232'),
  array('id' => '791','dossier_medical_id' => '523','description' => 'Gastrite','date' => NULL,'type' => 'Médical','created_at' => '2020-12-27 21:57:25','updated_at' => '2020-12-27 21:57:25','deleted_at' => NULL,'slug' => 'medical-1609106245'),
  array('id' => '792','dossier_medical_id' => '523','description' => 'Constipation','date' => NULL,'type' => 'Médical','created_at' => '2020-12-27 21:57:34','updated_at' => '2020-12-27 21:57:34','deleted_at' => NULL,'slug' => 'medical-1609106254'),
  array('id' => '793','dossier_medical_id' => '523','description' => 'Bloc de branche droit complet','date' => NULL,'type' => 'Médical','created_at' => '2020-12-27 21:57:51','updated_at' => '2020-12-27 21:57:51','deleted_at' => NULL,'slug' => 'medical-1609106271'),
  array('id' => '794','dossier_medical_id' => '523','description' => 'Diabète de type 2 non insulinorequérent','date' => NULL,'type' => 'Médical','created_at' => '2020-12-27 21:58:41','updated_at' => '2020-12-27 21:58:41','deleted_at' => NULL,'slug' => 'medical-1609106321'),
  array('id' => '795','dossier_medical_id' => '523','description' => 'Sclérose mitro-aortique','date' => NULL,'type' => 'Médical','created_at' => '2020-12-27 21:59:32','updated_at' => '2020-12-27 21:59:32','deleted_at' => NULL,'slug' => 'medical-1609106372'),
  array('id' => '796','dossier_medical_id' => '523','description' => 'Légère athéromatose carotidienne bilatérale G>D sans sténose','date' => NULL,'type' => 'Médical','created_at' => '2020-12-27 22:00:42','updated_at' => '2020-12-27 22:00:42','deleted_at' => NULL,'slug' => 'medical-1609106442'),
  array('id' => '797','dossier_medical_id' => '523','description' => 'Anémie normocytaire','date' => NULL,'type' => 'Médical','created_at' => '2020-12-27 22:01:03','updated_at' => '2020-12-27 22:01:03','deleted_at' => NULL,'slug' => 'medical-1609106463'),
  array('id' => '798','dossier_medical_id' => '523','description' => 'HTA chez le père.
Diabète chez la mère','date' => NULL,'type' => 'Familial','created_at' => '2020-12-27 22:05:57','updated_at' => '2020-12-27 22:05:57','deleted_at' => NULL,'slug' => 'familial-1609106757'),
  array('id' => '799','dossier_medical_id' => '524','description' => 'Chirurgie mammaire indiquée pour nodule mammaire il Ya 01 an','date' => NULL,'type' => 'Chirugical','created_at' => '2020-12-28 08:17:20','updated_at' => '2020-12-28 08:17:20','deleted_at' => NULL,'slug' => 'chirugical-1609143440'),
  array('id' => '800','dossier_medical_id' => '524','description' => 'G0P0  DDR : 17-12-2020 contraception préservatif','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2020-12-28 08:17:38','updated_at' => '2020-12-28 08:17:38','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1609143458'),
  array('id' => '801','dossier_medical_id' => '527','description' => 'Hypertensive','date' => '2016-01-01','type' => 'Médical','created_at' => '2020-12-28 10:37:18','updated_at' => '2020-12-28 10:37:18','deleted_at' => NULL,'slug' => 'medical-1609151838'),
  array('id' => '802','dossier_medical_id' => '529','description' => 'mère hypertendue 
Père hypertendu décédé de suite d\'une infection pulmonaire
pas de notion de cancer dans la famille','date' => NULL,'type' => 'Familial','created_at' => '2020-12-28 12:33:13','updated_at' => '2020-12-28 12:33:13','deleted_at' => NULL,'slug' => 'familial-1609158793'),
  array('id' => '803','dossier_medical_id' => '530','description' => 'opéré il y a 42 ans environ d\'une  fracture post traumatique de la partie distale du fémur gauche','date' => NULL,'type' => 'Chirugical','created_at' => '2020-12-28 13:51:56','updated_at' => '2020-12-28 13:51:56','deleted_at' => NULL,'slug' => 'chirugical-1609163516'),
  array('id' => '804','dossier_medical_id' => '256','description' => 'HTA connu depuis 1 ans sous Natrixam1,5/5mg
épigastralgie connu
porteur d\'une TVP de la grande saphène avec insuffisance veineuse et d\'une hypertrophie néoplasique de le prostate avec sonde urinaire à demeure depuis 4 mois pour hydronéphrose bilatérale
Cervicarthrose névralgie cervico-brachiale','date' => NULL,'type' => 'Médical','created_at' => '2020-12-29 06:54:04','updated_at' => '2020-12-29 06:54:04','deleted_at' => NULL,'slug' => 'medical-1609224844'),
  array('id' => '805','dossier_medical_id' => '537','description' => 'HTA sous Ramipril 2,5 mg : 1cp/jr','date' => NULL,'type' => 'Médical','created_at' => '2020-12-30 00:54:22','updated_at' => '2020-12-30 00:54:22','deleted_at' => NULL,'slug' => 'medical-1609289662'),
  array('id' => '806','dossier_medical_id' => '537','description' => 'Hospitalisation du 16/12/20202 au 22/12/2020 pour Hématome sous dural minime post accident de la voie publique','date' => '2020-12-16','type' => 'Médical','created_at' => '2020-12-30 00:57:57','updated_at' => '2020-12-30 00:57:57','deleted_at' => NULL,'slug' => 'medical-1609289877'),
  array('id' => '807','dossier_medical_id' => '537','description' => 'jamais opéré','date' => NULL,'type' => 'Chirugical','created_at' => '2020-12-30 00:58:34','updated_at' => '2021-03-02 15:09:10','deleted_at' => '2021-03-02 15:09:10','slug' => 'chirugical-1609289914'),
  array('id' => '808','dossier_medical_id' => '537','description' => 'Hypertrophie bénigne de la prostate initialement sous permixon avec notion d\'arrêt du traitement','date' => NULL,'type' => 'Médical','created_at' => '2020-12-30 01:02:31','updated_at' => '2020-12-30 01:02:31','deleted_at' => NULL,'slug' => 'medical-1609290151'),
  array('id' => '809','dossier_medical_id' => '538','description' => 'Patiente presbyte +astigmate+ hypermétrope ; port non régulière de lunettes médicales.','date' => NULL,'type' => 'Médical','created_at' => '2020-12-31 22:48:17','updated_at' => '2020-12-31 22:48:17','deleted_at' => NULL,'slug' => 'medical-1609454897'),
  array('id' => '810','dossier_medical_id' => '538','description' => 'Patiente presbyte +astigmate+ hypermétrope ; port non régulière de lunettes médicales.','date' => NULL,'type' => 'Médical','created_at' => '2020-12-31 22:48:44','updated_at' => '2020-12-31 23:23:42','deleted_at' => '2020-12-31 23:23:42','slug' => 'medical-1609454924'),
  array('id' => '811','dossier_medical_id' => '538','description' => 'G7P5025 ; FCV/mammographie en Février 2019 ; ménopause :55 ans','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2020-12-31 22:49:10','updated_at' => '2020-12-31 22:49:10','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1609454950'),
  array('id' => '812','dossier_medical_id' => '538','description' => 'Conjoint : hémiparésie D séquellaire post AIT sur poussée HTA en 2019, il aurait bénéficié des séances de kinésithérapie','date' => NULL,'type' => 'Familial','created_at' => '2020-12-31 22:49:40','updated_at' => '2020-12-31 22:49:40','deleted_at' => NULL,'slug' => 'familial-1609454980'),
  array('id' => '813','dossier_medical_id' => '538','description' => 'Dyslipidémie il y a 3 mois PEC avec Artofit 10mg/j ×1 mois','date' => NULL,'type' => 'Médical','created_at' => '2020-12-31 23:24:41','updated_at' => '2020-12-31 23:24:41','deleted_at' => NULL,'slug' => 'medical-1609457081'),
  array('id' => '814','dossier_medical_id' => '541','description' => 'jamais été opéré','date' => NULL,'type' => 'Chirugical','created_at' => '2021-01-02 11:04:38','updated_at' => '2021-01-02 11:04:38','deleted_at' => NULL,'slug' => 'chirugical-1609585478'),
  array('id' => '815','dossier_medical_id' => '541','description' => 'pas de pathologie chronique connue','date' => NULL,'type' => 'Médical','created_at' => '2021-01-02 11:05:49','updated_at' => '2021-01-02 11:05:49','deleted_at' => NULL,'slug' => 'medical-1609585549'),
  array('id' => '816','dossier_medical_id' => '541','description' => 'premier né d\'une fratrie de 3 enfants tous en bonne santé apparente','date' => NULL,'type' => 'Familial','created_at' => '2021-01-02 11:08:34','updated_at' => '2021-01-02 11:08:34','deleted_at' => NULL,'slug' => 'familial-1609585714'),
  array('id' => '817','dossier_medical_id' => '546','description' => '3 ème d\'une fratrie de 4 enfants les autres en vie.','date' => NULL,'type' => 'Familial','created_at' => '2021-01-03 10:14:34','updated_at' => '2021-01-03 10:14:34','deleted_at' => NULL,'slug' => 'familial-1609668874'),
  array('id' => '818','dossier_medical_id' => '546','description' => 'Sans particularité','date' => NULL,'type' => 'Médical','created_at' => '2021-01-03 10:15:28','updated_at' => '2021-01-03 10:15:28','deleted_at' => NULL,'slug' => 'medical-1609668928'),
  array('id' => '819','dossier_medical_id' => '546','description' => 'sans particularité','date' => NULL,'type' => 'Chirugical','created_at' => '2021-01-03 10:16:07','updated_at' => '2021-01-03 10:16:07','deleted_at' => NULL,'slug' => 'chirugical-1609668967'),
  array('id' => '820','dossier_medical_id' => '546','description' => 'RAS','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2021-01-03 10:17:23','updated_at' => '2021-01-03 10:17:23','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1609669043'),
  array('id' => '821','dossier_medical_id' => '544','description' => 'Sans particularité','date' => NULL,'type' => 'Médical','created_at' => '2021-01-03 11:01:59','updated_at' => '2021-01-03 11:01:59','deleted_at' => NULL,'slug' => 'medical-1609671719'),
  array('id' => '822','dossier_medical_id' => '544','description' => 'Sans particularité','date' => NULL,'type' => 'Chirugical','created_at' => '2021-01-03 11:02:27','updated_at' => '2021-01-03 11:02:27','deleted_at' => NULL,'slug' => 'chirugical-1609671747'),
  array('id' => '823','dossier_medical_id' => '544','description' => '4ème d\'une fratrie de 4 enfants les autres en vie','date' => NULL,'type' => 'Familial','created_at' => '2021-01-03 11:03:26','updated_at' => '2021-01-03 11:03:26','deleted_at' => NULL,'slug' => 'familial-1609671806'),
  array('id' => '824','dossier_medical_id' => '536','description' => 'hypertension','date' => '2020-09-01','type' => 'Médical','created_at' => '2021-01-03 13:17:21','updated_at' => '2021-01-03 13:17:21','deleted_at' => NULL,'slug' => 'medical-1609679841'),
  array('id' => '825','dossier_medical_id' => '549','description' => 'diabetes','date' => '2013-01-01','type' => 'Médical','created_at' => '2021-01-03 13:54:35','updated_at' => '2021-01-03 13:54:35','deleted_at' => NULL,'slug' => 'medical-1609682075'),
  array('id' => '826','dossier_medical_id' => '549','description' => 'Hypertension','date' => '1990-01-01','type' => 'Médical','created_at' => '2021-01-03 13:56:04','updated_at' => '2021-01-03 13:56:04','deleted_at' => NULL,'slug' => 'medical-1609682164'),
  array('id' => '827','dossier_medical_id' => '551','description' => 'Accouchement par césarienne indiqué pour travail stationnaire d\'un enfant de sexe féminin pesant 3500g en 2012','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2021-01-03 21:29:25','updated_at' => '2021-01-03 21:29:25','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1609709365'),
  array('id' => '828','dossier_medical_id' => '551','description' => 'pas de pathologie chronique connue, ni de pathologie sur grossesse
6 CPN faites','date' => NULL,'type' => 'Médical','created_at' => '2021-01-03 21:30:19','updated_at' => '2021-01-03 22:56:16','deleted_at' => NULL,'slug' => 'medical-1609709419'),
  array('id' => '829','dossier_medical_id' => '551','description' => 'césarienne en 2012','date' => NULL,'type' => 'Chirugical','created_at' => '2021-01-03 21:33:09','updated_at' => '2021-01-03 21:33:09','deleted_at' => NULL,'slug' => 'chirugical-1609709589'),
  array('id' => '830','dossier_medical_id' => '551','description' => 'Ainé d\'une fratrie de 5 enfants tous en bonne santé apparente','date' => NULL,'type' => 'Familial','created_at' => '2021-01-03 21:37:21','updated_at' => '2021-01-03 21:37:21','deleted_at' => NULL,'slug' => 'familial-1609709841'),
  array('id' => '831','dossier_medical_id' => '547','description' => 'Sans particularité','date' => NULL,'type' => 'Médical','created_at' => '2021-01-04 10:32:34','updated_at' => '2021-01-04 10:32:34','deleted_at' => NULL,'slug' => 'medical-1609756354'),
  array('id' => '832','dossier_medical_id' => '547','description' => 'Sans particularité','date' => NULL,'type' => 'Familial','created_at' => '2021-01-04 10:33:00','updated_at' => '2021-01-04 10:33:00','deleted_at' => NULL,'slug' => 'familial-1609756380'),
  array('id' => '833','dossier_medical_id' => '547','description' => '2ème d\'une fratrie de 4 enfants les autres en vie','date' => NULL,'type' => 'Familial','created_at' => '2021-01-04 10:40:59','updated_at' => '2021-01-04 10:40:59','deleted_at' => NULL,'slug' => 'familial-1609756859'),
  array('id' => '834','dossier_medical_id' => '547','description' => 'sans particularité','date' => NULL,'type' => 'Chirugical','created_at' => '2021-01-04 10:42:19','updated_at' => '2021-01-04 10:42:19','deleted_at' => NULL,'slug' => 'chirugical-1609756939'),
  array('id' => '835','dossier_medical_id' => '553','description' => 'Sans particularité','date' => NULL,'type' => 'Médical','created_at' => '2021-01-04 11:36:09','updated_at' => '2021-01-04 11:36:09','deleted_at' => NULL,'slug' => 'medical-1609760169'),
  array('id' => '836','dossier_medical_id' => '553','description' => 'première d\'une fratrie de 4 enfants les autres en vie','date' => NULL,'type' => 'Familial','created_at' => '2021-01-04 11:43:10','updated_at' => '2021-01-04 11:43:10','deleted_at' => NULL,'slug' => 'familial-1609760590'),
  array('id' => '837','dossier_medical_id' => '553','description' => 'Sans particularité','date' => NULL,'type' => 'Chirugical','created_at' => '2021-01-04 11:43:41','updated_at' => '2021-01-04 11:43:41','deleted_at' => NULL,'slug' => 'chirugical-1609760621'),
  array('id' => '838','dossier_medical_id' => '554','description' => 'Hypertension artérielle','date' => NULL,'type' => 'Médical','created_at' => '2021-01-04 16:00:49','updated_at' => '2021-01-04 16:00:49','deleted_at' => NULL,'slug' => 'medical-1609776049'),
  array('id' => '839','dossier_medical_id' => '554','description' => 'Sans particularité','date' => NULL,'type' => 'Chirugical','created_at' => '2021-01-04 16:02:14','updated_at' => '2021-01-04 16:02:14','deleted_at' => NULL,'slug' => 'chirugical-1609776134'),
  array('id' => '840','dossier_medical_id' => '554','description' => 'Sans particularité','date' => NULL,'type' => 'Familial','created_at' => '2021-01-04 16:02:49','updated_at' => '2021-01-04 16:02:49','deleted_at' => NULL,'slug' => 'familial-1609776169'),
  array('id' => '841','dossier_medical_id' => '555','description' => 'pas de pathologies chroniques','date' => NULL,'type' => 'Médical','created_at' => '2021-01-04 16:12:08','updated_at' => '2021-01-04 16:12:08','deleted_at' => NULL,'slug' => 'medical-1609776728'),
  array('id' => '842','dossier_medical_id' => '555','description' => 'jamais opéré','date' => NULL,'type' => 'Chirugical','created_at' => '2021-01-04 16:13:01','updated_at' => '2021-01-04 16:13:01','deleted_at' => NULL,'slug' => 'chirugical-1609776781'),
  array('id' => '843','dossier_medical_id' => '555','description' => 'HTA chez grand-mère maternelle','date' => NULL,'type' => 'Familial','created_at' => '2021-01-04 16:14:02','updated_at' => '2021-01-04 16:14:02','deleted_at' => NULL,'slug' => 'familial-1609776842'),
  array('id' => '844','dossier_medical_id' => '556','description' => 'HTA traité par Tetrazide 10 mg','date' => '2001-01-01','type' => 'Médical','created_at' => '2021-01-05 03:24:37','updated_at' => '2021-01-17 18:25:29','deleted_at' => NULL,'slug' => 'medical-1609817077'),
  array('id' => '845','dossier_medical_id' => '556','description' => 'Crise de goutte traitée par Zyloric','date' => '2020-12-01','type' => 'Médical','created_at' => '2021-01-05 03:25:37','updated_at' => '2021-01-17 18:26:58','deleted_at' => NULL,'slug' => 'medical-1609817137'),
  array('id' => '846','dossier_medical_id' => '548','description' => 'Asthmatique connue depuis l’Age de 06 mois sous clestene 2mg, ventoline spray, amoxiclav. 02 crises le mois dernier','date' => NULL,'type' => 'Médical','created_at' => '2021-01-05 06:55:06','updated_at' => '2021-01-05 06:55:06','deleted_at' => NULL,'slug' => 'medical-1609829706'),
  array('id' => '847','dossier_medical_id' => '528','description' => 'Lombalgie chronique (plus de 30 ans)','date' => NULL,'type' => 'Médical','created_at' => '2021-01-05 20:11:24','updated_at' => '2021-01-05 20:11:24','deleted_at' => NULL,'slug' => 'medical-1609877484'),
  array('id' => '848','dossier_medical_id' => '528','description' => 'Epigastralgie chronique (plus de 10 ans)','date' => NULL,'type' => 'Médical','created_at' => '2021-01-05 20:12:18','updated_at' => '2021-01-05 20:12:18','deleted_at' => NULL,'slug' => 'medical-1609877538'),
  array('id' => '849','dossier_medical_id' => '528','description' => 'cancer du sein chez soeur ainée','date' => NULL,'type' => 'Familial','created_at' => '2021-01-05 20:13:06','updated_at' => '2021-01-05 20:13:06','deleted_at' => NULL,'slug' => 'familial-1609877586'),
  array('id' => '850','dossier_medical_id' => '560','description' => 'Paralysie des membres inférieurs','date' => NULL,'type' => 'Médical','created_at' => '2021-01-06 13:00:14','updated_at' => '2021-01-06 13:00:14','deleted_at' => NULL,'slug' => 'medical-1609938014'),
  array('id' => '851','dossier_medical_id' => '560','description' => 'Récidive de paralysie des membres','date' => NULL,'type' => 'Médical','created_at' => '2021-01-06 13:01:29','updated_at' => '2021-01-06 13:01:29','deleted_at' => NULL,'slug' => 'medical-1609938089'),
  array('id' => '852','dossier_medical_id' => '560','description' => 'PIIIGIVAI  ,      ménopausée depuis 7 ans','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2021-01-06 13:03:01','updated_at' => '2021-01-06 13:03:01','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1609938181'),
  array('id' => '853','dossier_medical_id' => '559','description' => 'HTA connue, hypertrophie ventriculaire gauche, insuffisance aortique connu depuis 20 ans, suivi par DR TCHUEM TCHUENTE (au cabinet médical LAMAT) ; sous : amlodipine 10mg : 1cp/jour le matin ; dernière consultation en 2018
Problème d’infertilité  (spermogramme réalisé en 2017 révélant un taux très élevé de spermatoïde sans flagelle) ;','date' => NULL,'type' => 'Médical','created_at' => '2021-01-07 04:50:10','updated_at' => '2021-01-07 04:50:10','deleted_at' => NULL,'slug' => 'medical-1609995010'),
  array('id' => '854','dossier_medical_id' => '559','description' => '-	HTA : grand-mère ; mère, les tantes
-	Diabète : une tante ; un  cousin
-	Notion de cancer du col de l’utérus chez la grande mère; pas de cancer du sein, ni de cancer de la prostate','date' => NULL,'type' => 'Familial','created_at' => '2021-01-07 04:51:13','updated_at' => '2021-01-07 04:51:13','deleted_at' => NULL,'slug' => 'familial-1609995073'),
  array('id' => '855','dossier_medical_id' => '563','description' => 'HTA : non
Diabète : non 
Drépanocytose : non
Asthmatique : non','date' => NULL,'type' => 'Familial','created_at' => '2021-01-07 05:08:03','updated_at' => '2021-01-07 05:08:03','deleted_at' => NULL,'slug' => 'familial-1609996083'),
  array('id' => '856','dossier_medical_id' => '565','description' => 'Notion d’hépatite C en 2014  *guérit* (non documenté)','date' => NULL,'type' => 'Médical','created_at' => '2021-01-07 06:26:27','updated_at' => '2021-01-07 06:26:27','deleted_at' => NULL,'slug' => 'medical-1610000787'),
  array('id' => '857','dossier_medical_id' => '565','description' => 'Pathologie thyroïdienne traitée par médecine nucléaire en 2014','date' => NULL,'type' => 'Médical','created_at' => '2021-01-07 06:26:48','updated_at' => '2021-01-07 06:26:48','deleted_at' => NULL,'slug' => 'medical-1610000808'),
  array('id' => '858','dossier_medical_id' => '565','description' => 'Notion de vertige à 3 reprises ; dernier épisode il y a un mois','date' => NULL,'type' => 'Médical','created_at' => '2021-01-07 06:27:06','updated_at' => '2021-01-07 06:27:06','deleted_at' => NULL,'slug' => 'medical-1610000826'),
  array('id' => '859','dossier_medical_id' => '565','description' => 'Arthrose de l’épaule droite depuis plusieurs années non documenté sous kinésithérapie (exercices prescrits par un kinésithérapeute)','date' => NULL,'type' => 'Médical','created_at' => '2021-01-07 06:27:22','updated_at' => '2021-01-07 06:27:22','deleted_at' => NULL,'slug' => 'medical-1610000842'),
  array('id' => '860','dossier_medical_id' => '565','description' => '-	DT2 : frère
-	Notion de cancer de la prostate chez un grand frère ; pas de cancer du sein, ni de col de l’utérus','date' => NULL,'type' => 'Familial','created_at' => '2021-01-07 06:27:38','updated_at' => '2021-01-07 06:27:38','deleted_at' => NULL,'slug' => 'familial-1610000858'),
  array('id' => '861','dossier_medical_id' => '568','description' => 'aphtes fréquent depuis 20213 ayant motivé plusieurs traitements (colchicine et vitamine ; isopaïne) ; les crises dures 2-3 semaine et resurgissent  quelque heures à quelque jours après.','date' => NULL,'type' => 'Médical','created_at' => '2021-01-07 08:15:13','updated_at' => '2021-01-07 08:15:13','deleted_at' => NULL,'slug' => 'medical-1610007313'),
  array('id' => '862','dossier_medical_id' => '568','description' => 'Epigastralgie évoluant depuis plus d’un an ayant nécessité plusieurs consultations parmi lesquelles une consultation au mois d’avril pour dysphagie à Polyclinique Tsinga: dans laquelle une échographie ne révélant aucune anomalie, une fibroscopie montrant une ulcération œsophagienne avec biopsie : ne révélant aucun processus malin, un traitement à base de Oméprazole, pansement gastrique pendant 1 mois. 
Sous Omizec lors des crises
Dernier protocole d’éradication H.Pylori il y a 1 an','date' => NULL,'type' => 'Médical','created_at' => '2021-01-07 08:15:33','updated_at' => '2021-01-07 08:15:33','deleted_at' => NULL,'slug' => 'medical-1610007333'),
  array('id' => '863','dossier_medical_id' => '568','description' => 'HTA : mère
Diabétique : tante
Pas de notion de cancer dans la famille','date' => NULL,'type' => 'Familial','created_at' => '2021-01-07 08:15:59','updated_at' => '2021-01-07 08:15:59','deleted_at' => NULL,'slug' => 'familial-1610007359'),
  array('id' => '864','dossier_medical_id' => '533','description' => 'Epigastralgie intermittente','date' => NULL,'type' => 'Médical','created_at' => '2021-01-08 04:58:24','updated_at' => '2021-01-08 04:58:24','deleted_at' => NULL,'slug' => 'medical-1610081904'),
  array('id' => '865','dossier_medical_id' => '533','description' => 'Ostéosynthèse du 1/3 inférieur jambe G post AVP en 2008 + plaie profonde suturée 1/3 inférieur jambe D.','date' => NULL,'type' => 'Chirugical','created_at' => '2021-01-08 05:01:03','updated_at' => '2021-01-11 17:24:25','deleted_at' => NULL,'slug' => 'chirugical-1610082063'),
  array('id' => '866','dossier_medical_id' => '533','description' => 'G12 P10.0.2.7 (03 DCD)','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2021-01-08 05:02:00','updated_at' => '2021-01-08 05:02:00','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1610082120'),
  array('id' => '867','dossier_medical_id' => '533','description' => 'Ménopause à 50 ans','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2021-01-08 05:02:18','updated_at' => '2021-01-08 05:02:18','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1610082138'),
  array('id' => '868','dossier_medical_id' => '533','description' => 'Mammographie/FCV jamais réalisés','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2021-01-08 05:02:51','updated_at' => '2021-01-11 17:25:44','deleted_at' => '2021-01-11 17:25:44','slug' => 'gyneco-obstetrique-1610082171'),
  array('id' => '869','dossier_medical_id' => '533','description' => 'Pas de pathologies chroniques','date' => NULL,'type' => 'Familial','created_at' => '2021-01-08 05:03:34','updated_at' => '2021-01-11 17:23:54','deleted_at' => '2021-01-11 17:23:54','slug' => 'familial-1610082214'),
  array('id' => '870','dossier_medical_id' => '568','description' => 'Aphte chronique chez sa grande sœur et chez sa mère','date' => NULL,'type' => 'Familial','created_at' => '2021-01-08 07:46:39','updated_at' => '2021-01-08 07:46:39','deleted_at' => NULL,'slug' => 'familial-1610091999'),
  array('id' => '871','dossier_medical_id' => '573','description' => 'Hernie discale lombaire diagnostiquée en 2016 non opérée','date' => NULL,'type' => 'Médical','created_at' => '2021-01-08 07:57:25','updated_at' => '2021-01-08 07:57:25','deleted_at' => NULL,'slug' => 'medical-1610092645'),
  array('id' => '872','dossier_medical_id' => '573','description' => 'Opéré en 2016 pour hernie discale cervicale par le Dr FONDOP','date' => NULL,'type' => 'Chirugical','created_at' => '2021-01-08 07:59:25','updated_at' => '2021-01-09 17:39:44','deleted_at' => NULL,'slug' => 'chirugical-1610092765'),
  array('id' => '873','dossier_medical_id' => '573','description' => 'Père de 4 enfants en bonne santé apparente; pas de pathologies chroniques','date' => NULL,'type' => 'Familial','created_at' => '2021-01-08 08:24:48','updated_at' => '2021-01-09 17:41:59','deleted_at' => '2021-01-09 17:41:59','slug' => 'familial-1610094288'),
  array('id' => '874','dossier_medical_id' => '580','description' => 'G3P0030 (3 IVG: 1e en 2016; 2 en 2017 faites dans en milieu hospitalier ) ','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2021-01-09 20:09:27','updated_at' => '2021-01-09 20:09:27','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1610222967'),
  array('id' => '875','dossier_medical_id' => '580','description' => 'Mère, grands parents paternel, oncles et tantes HTA','date' => NULL,'type' => 'Familial','created_at' => '2021-01-09 20:10:50','updated_at' => '2021-01-09 20:10:50','deleted_at' => NULL,'slug' => 'familial-1610223050'),
  array('id' => '876','dossier_medical_id' => '579','description' => 'G3P2012

DDR: 22 décembre 2019


elle a eu ses ménarches à 13 ans, elle saigne pendant 3jrs, elle a un cycle régulier de 25jrs


G1 en 2011 Césarienne indiquée pour travail stationnaire qui a donné naissance a un enfant de sexe féminin pesant 3800g de suite simple


G2 en 2014: Césarienne indiquée pour travail stationnaire sur utérus cicatriciel qui a donné naissance d\'un enfant de sexe féminin pesant 2900g de suite simple


G3 en 2015: Avortement prématuré


IST (chlamydia) diagnostiqué en 2018 et traité


Planning familiale: jadelle en 2016','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2021-01-09 20:20:47','updated_at' => '2021-01-09 20:25:21','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1610223647'),
  array('id' => '877','dossier_medical_id' => '579','description' => 'Epigastralgie depuis 10ans, elle n\'est ni HTA ni DT2 connue','date' => NULL,'type' => 'Médical','created_at' => '2021-01-09 20:31:27','updated_at' => '2021-01-09 20:31:27','deleted_at' => NULL,'slug' => 'medical-1610224287'),
  array('id' => '878','dossier_medical_id' => '579','description' => 'Césarienne (utérus bi cicatriciel)','date' => NULL,'type' => 'Chirugical','created_at' => '2021-01-09 20:32:24','updated_at' => '2021-01-09 20:32:24','deleted_at' => NULL,'slug' => 'chirugical-1610224344'),
  array('id' => '879','dossier_medical_id' => '579','description' => 'Ascendant: parent vivants et tous en bonne santé apparente
Collatéraux: 1ère née d\'une fratrie de 9 enfants tous en bonne santé apparente
Descendant: mère de 2 enfants tous en bonne santé apparente','date' => NULL,'type' => 'Familial','created_at' => '2021-01-09 20:35:52','updated_at' => '2021-01-09 20:35:52','deleted_at' => NULL,'slug' => 'familial-1610224552'),
  array('id' => '880','dossier_medical_id' => '93','description' => 'épigastralgie chronique','date' => NULL,'type' => 'Médical','created_at' => '2021-01-09 22:41:42','updated_at' => '2021-01-09 22:41:42','deleted_at' => NULL,'slug' => 'medical-1610232102'),
  array('id' => '881','dossier_medical_id' => '93','description' => 'HTA chez la mére','date' => NULL,'type' => 'Familial','created_at' => '2021-01-09 22:42:49','updated_at' => '2021-01-09 22:42:49','deleted_at' => NULL,'slug' => 'familial-1610232169'),
  array('id' => '882','dossier_medical_id' => '93','description' => 'épigastralgie chronique','date' => NULL,'type' => 'Médical','created_at' => '2021-01-09 22:44:46','updated_at' => '2021-01-09 22:44:46','deleted_at' => NULL,'slug' => 'medical-1610232286'),
  array('id' => '883','dossier_medical_id' => '581','description' => 'HTA ,DT2 chez la mère','date' => NULL,'type' => 'Familial','created_at' => '2021-01-09 23:59:34','updated_at' => '2021-01-09 23:59:34','deleted_at' => NULL,'slug' => 'familial-1610236774'),
  array('id' => '884','dossier_medical_id' => '581','description' => 'G5P4104,DDR 01/12/20 cycle régulier 28j, durée des règles 3-4','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2021-01-10 00:03:27','updated_at' => '2021-01-10 00:03:27','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1610237007'),
  array('id' => '885','dossier_medical_id' => '581','description' => 'ras','date' => NULL,'type' => 'Chirugical','created_at' => '2021-01-10 00:17:16','updated_at' => '2021-01-10 00:17:16','deleted_at' => NULL,'slug' => 'chirugical-1610237836'),
  array('id' => '886','dossier_medical_id' => '581','description' => 'ras','date' => NULL,'type' => 'Médical','created_at' => '2021-01-10 00:19:32','updated_at' => '2021-01-10 00:19:32','deleted_at' => NULL,'slug' => 'medical-1610237972'),
  array('id' => '887','dossier_medical_id' => '550','description' => 'ras','date' => NULL,'type' => 'Médical','created_at' => '2021-01-10 05:01:34','updated_at' => '2021-01-10 05:01:34','deleted_at' => NULL,'slug' => 'medical-1610254894'),
  array('id' => '888','dossier_medical_id' => '550','description' => 'ablation d\'un nodule du sein gauche en 2010','date' => NULL,'type' => 'Chirugical','created_at' => '2021-01-10 05:03:12','updated_at' => '2021-01-10 05:03:12','deleted_at' => NULL,'slug' => 'chirugical-1610254992'),
  array('id' => '889','dossier_medical_id' => '550','description' => 'G7P7026 ,ménopausée , mammographie en 2009 , FCV en septembre 2020','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2021-01-10 05:05:34','updated_at' => '2021-01-10 05:05:34','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1610255134'),
  array('id' => '890','dossier_medical_id' => '550','description' => 'HTA chez le conjoint','date' => NULL,'type' => 'Familial','created_at' => '2021-01-10 05:06:21','updated_at' => '2021-01-10 05:06:21','deleted_at' => NULL,'slug' => 'familial-1610255181'),
  array('id' => '891','dossier_medical_id' => '578','description' => 'Deuxième d\'une fratrie de 2 enfants l\'autre en vie','date' => NULL,'type' => 'Familial','created_at' => '2021-01-10 11:46:30','updated_at' => '2021-01-10 11:46:30','deleted_at' => NULL,'slug' => 'familial-1610279190'),
  array('id' => '892','dossier_medical_id' => '578','description' => 'Notion de contage TBC il  y a 4 mois( une voisine en souffrait.)','date' => NULL,'type' => 'Médical','created_at' => '2021-01-10 11:47:50','updated_at' => '2021-01-10 11:47:50','deleted_at' => NULL,'slug' => 'medical-1610279270'),
  array('id' => '893','dossier_medical_id' => '578','description' => 'Sans particularité','date' => NULL,'type' => 'Chirugical','created_at' => '2021-01-10 11:54:16','updated_at' => '2021-01-10 11:54:16','deleted_at' => NULL,'slug' => 'chirugical-1610279656'),
  array('id' => '894','dossier_medical_id' => '578','description' => 'RAS','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2021-01-10 11:55:05','updated_at' => '2021-01-10 11:55:05','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1610279705'),
  array('id' => '895','dossier_medical_id' => '576','description' => 'Hypertendu connu,  antécédents d\'arthrose et de gastrite','date' => NULL,'type' => 'Médical','created_at' => '2021-01-10 12:43:28','updated_at' => '2021-01-10 12:43:28','deleted_at' => NULL,'slug' => 'medical-1610282608'),
  array('id' => '896','dossier_medical_id' => '576','description' => 'PXIGXIA0Vvii','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2021-01-10 12:48:22','updated_at' => '2021-01-10 12:48:22','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1610282902'),
  array('id' => '897','dossier_medical_id' => '577','description' => 'HTA (+)','date' => NULL,'type' => 'Médical','created_at' => '2021-01-10 16:40:34','updated_at' => '2021-01-10 16:40:34','deleted_at' => NULL,'slug' => 'medical-1610296834'),
  array('id' => '898','dossier_medical_id' => '577','description' => 'Toux chronique évoluant depuis 7 ans','date' => NULL,'type' => 'Médical','created_at' => '2021-01-10 16:41:08','updated_at' => '2021-01-10 16:41:08','deleted_at' => NULL,'slug' => 'medical-1610296868'),
  array('id' => '899','dossier_medical_id' => '577','description' => 'Hémorragie cérébrale','date' => NULL,'type' => 'Médical','created_at' => '2021-01-10 16:41:58','updated_at' => '2021-01-10 16:41:58','deleted_at' => NULL,'slug' => 'medical-1610296918'),
  array('id' => '900','dossier_medical_id' => '577','description' => 'Epigastralgie chronique','date' => NULL,'type' => 'Médical','created_at' => '2021-01-10 16:45:08','updated_at' => '2021-01-10 16:45:08','deleted_at' => NULL,'slug' => 'medical-1610297108'),
  array('id' => '901','dossier_medical_id' => '586','description' => 'née à terme
cri à la naissance
bon développement psychomoteur
alimentation: repas familiaux semi liquides (sevrage il y a 6 mois)
calendrier vaccinal à jour (PEV)
MILDA +','date' => NULL,'type' => 'Médical','created_at' => '2021-01-11 09:57:09','updated_at' => '2021-01-11 09:57:09','deleted_at' => NULL,'slug' => 'medical-1610359029'),
  array('id' => '902','dossier_medical_id' => '586','description' => 'Incision pour abcès au niveau du pouce droit','date' => '2019-12-22','type' => 'Chirugical','created_at' => '2021-01-11 10:21:14','updated_at' => '2021-01-11 10:21:14','deleted_at' => NULL,'slug' => 'chirugical-1610360474'),
  array('id' => '903','dossier_medical_id' => '585','description' => 'sans particularités','date' => NULL,'type' => 'Médical','created_at' => '2021-01-11 10:24:09','updated_at' => '2021-01-11 10:24:09','deleted_at' => NULL,'slug' => 'medical-1610360649'),
  array('id' => '904','dossier_medical_id' => '585','description' => 'sans particularités','date' => NULL,'type' => 'Chirugical','created_at' => '2021-01-11 10:24:42','updated_at' => '2021-01-11 10:24:42','deleted_at' => NULL,'slug' => 'chirugical-1610360682'),
  array('id' => '905','dossier_medical_id' => '585','description' => 'RAS','date' => NULL,'type' => 'Familial','created_at' => '2021-01-11 10:25:10','updated_at' => '2021-01-11 10:25:10','deleted_at' => NULL,'slug' => 'familial-1610360710'),
  array('id' => '906','dossier_medical_id' => '588','description' => 'Epigastralgie intermittente sous MHD','date' => NULL,'type' => 'Chirugical','created_at' => '2021-01-11 23:12:48','updated_at' => '2021-01-11 23:12:48','deleted_at' => NULL,'slug' => 'chirugical-1610406768'),
  array('id' => '907','dossier_medical_id' => '588','description' => 'Port de prothèses dentaires','date' => NULL,'type' => 'Médical','created_at' => '2021-01-11 23:13:11','updated_at' => '2021-01-11 23:13:11','deleted_at' => NULL,'slug' => 'medical-1610406791'),
  array('id' => '908','dossier_medical_id' => '588','description' => 'G4P3013','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2021-01-11 23:13:31','updated_at' => '2021-01-11 23:13:31','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1610406811'),
  array('id' => '909','dossier_medical_id' => '588','description' => 'Plaie profonde suturée du 1/3 sup face latérale jambe gauche post AVP en février 2020','date' => NULL,'type' => 'Chirugical','created_at' => '2021-01-11 23:15:09','updated_at' => '2021-01-11 23:15:09','deleted_at' => NULL,'slug' => 'chirugical-1610406909'),
  array('id' => '910','dossier_medical_id' => '588','description' => 'HTA/DT2 chez la cousine','date' => NULL,'type' => 'Familial','created_at' => '2021-01-11 23:15:37','updated_at' => '2021-01-11 23:15:37','deleted_at' => NULL,'slug' => 'familial-1610406937'),
  array('id' => '911','dossier_medical_id' => '590','description' => 'Cure hernie ombilicale','date' => '1986-01-01','type' => 'Chirugical','created_at' => '2021-01-12 12:20:50','updated_at' => '2021-01-12 12:20:50','deleted_at' => NULL,'slug' => 'chirugical-1610454050'),
  array('id' => '912','dossier_medical_id' => '590','description' => 'ablation des varices (phlébectomie)','date' => '1990-01-01','type' => 'Chirugical','created_at' => '2021-01-12 12:22:59','updated_at' => '2021-01-12 12:22:59','deleted_at' => NULL,'slug' => 'chirugical-1610454179'),
  array('id' => '913','dossier_medical_id' => '590','description' => 'Hernie inguinale ( non opérée )','date' => '2019-01-01','type' => 'Chirugical','created_at' => '2021-01-12 12:23:46','updated_at' => '2021-01-12 12:23:46','deleted_at' => NULL,'slug' => 'chirugical-1610454226'),
  array('id' => '914','dossier_medical_id' => '590','description' => 'Ménopausée','date' => '1998-01-01','type' => 'Gynéco-obstétrique','created_at' => '2021-01-12 12:24:24','updated_at' => '2021-01-12 12:24:24','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1610454264'),
  array('id' => '915','dossier_medical_id' => '591','description' => 'gastrite aigue','date' => NULL,'type' => 'Médical','created_at' => '2021-01-12 17:32:29','updated_at' => '2021-01-12 17:32:29','deleted_at' => NULL,'slug' => 'medical-1610472749'),
  array('id' => '916','dossier_medical_id' => '591','description' => '2 cures herniaires (hernies inguino-scrotale ) en 2016','date' => NULL,'type' => 'Chirugical','created_at' => '2021-01-12 17:36:22','updated_at' => '2021-01-12 17:36:22','deleted_at' => NULL,'slug' => 'chirugical-1610472982'),
  array('id' => '917','dossier_medical_id' => '591','description' => 'RAS','date' => NULL,'type' => 'Familial','created_at' => '2021-01-12 17:42:30','updated_at' => '2021-01-12 17:42:30','deleted_at' => NULL,'slug' => 'familial-1610473350'),
  array('id' => '918','dossier_medical_id' => '591','description' => 'RAS','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2021-01-12 19:00:13','updated_at' => '2021-01-12 19:00:13','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1610478013'),
  array('id' => '919','dossier_medical_id' => '58','description' => 'Traumatisme maxillo-faciale post AVP en 2016','date' => NULL,'type' => 'Chirugical','created_at' => '2021-01-12 20:54:08','updated_at' => '2021-01-12 20:54:08','deleted_at' => NULL,'slug' => 'chirugical-1610484848'),
  array('id' => '920','dossier_medical_id' => '467','description' => 'arthrose  ; diabète sucré','date' => NULL,'type' => 'Familial','created_at' => '2021-01-13 08:55:06','updated_at' => '2021-01-13 08:55:06','deleted_at' => NULL,'slug' => 'familial-1610528106'),
  array('id' => '921','dossier_medical_id' => '467','description' => 'Hypertension arterielle','date' => NULL,'type' => 'Médical','created_at' => '2021-01-13 08:56:12','updated_at' => '2021-01-13 08:56:12','deleted_at' => NULL,'slug' => 'medical-1610528172'),
  array('id' => '922','dossier_medical_id' => '467','description' => 'RAS','date' => NULL,'type' => 'Chirugical','created_at' => '2021-01-13 08:56:28','updated_at' => '2021-01-13 08:56:28','deleted_at' => NULL,'slug' => 'chirugical-1610528188'),
  array('id' => '923','dossier_medical_id' => '467','description' => 'P7G9A0D1','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2021-01-13 08:57:28','updated_at' => '2021-01-13 08:57:28','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1610528248'),
  array('id' => '924','dossier_medical_id' => '592','description' => 'Diabete','date' => NULL,'type' => 'Familial','created_at' => '2021-01-13 11:26:03','updated_at' => '2021-01-13 11:26:03','deleted_at' => NULL,'slug' => 'familial-1610537163'),
  array('id' => '925','dossier_medical_id' => '592','description' => 'Epistaxie','date' => NULL,'type' => 'Médical','created_at' => '2021-01-13 11:27:03','updated_at' => '2021-01-13 11:27:03','deleted_at' => NULL,'slug' => 'medical-1610537223'),
  array('id' => '926','dossier_medical_id' => '592','description' => 'RAS','date' => NULL,'type' => 'Chirugical','created_at' => '2021-01-13 11:27:28','updated_at' => '2021-01-13 11:27:28','deleted_at' => NULL,'slug' => 'chirugical-1610537248'),
  array('id' => '927','dossier_medical_id' => '593','description' => 'aucune pathologie','date' => NULL,'type' => 'Médical','created_at' => '2021-01-13 17:58:03','updated_at' => '2021-01-13 17:58:03','deleted_at' => NULL,'slug' => 'medical-1610560683'),
  array('id' => '928','dossier_medical_id' => '593','description' => 'jamais opérée','date' => NULL,'type' => 'Chirugical','created_at' => '2021-01-13 17:58:19','updated_at' => '2021-01-13 17:58:19','deleted_at' => NULL,'slug' => 'chirugical-1610560699'),
  array('id' => '929','dossier_medical_id' => '593','description' => 'aucune pathologie','date' => NULL,'type' => 'Familial','created_at' => '2021-01-13 17:58:40','updated_at' => '2021-01-13 17:58:40','deleted_at' => NULL,'slug' => 'familial-1610560720'),
  array('id' => '930','dossier_medical_id' => '594','description' => '- grande mère maternelle hypertendue et diabétique
- pas de notion d\'asthme, ni de drépanocytose','date' => NULL,'type' => 'Familial','created_at' => '2021-01-13 18:06:18','updated_at' => '2021-01-13 18:06:18','deleted_at' => NULL,'slug' => 'familial-1610561178'),
  array('id' => '931','dossier_medical_id' => '536','description' => 'Drainage abcès du sein gauche il y\'a 42 ans','date' => NULL,'type' => 'Chirugical','created_at' => '2021-01-13 18:21:25','updated_at' => '2021-01-13 18:21:25','deleted_at' => NULL,'slug' => 'chirugical-1610562085'),
  array('id' => '932','dossier_medical_id' => '536','description' => 'Gastrite chronique','date' => NULL,'type' => 'Médical','created_at' => '2021-01-13 18:23:40','updated_at' => '2021-01-13 18:23:40','deleted_at' => NULL,'slug' => 'medical-1610562220'),
  array('id' => '933','dossier_medical_id' => '536','description' => 'RAS','date' => NULL,'type' => 'Médical','created_at' => '2021-01-13 18:25:55','updated_at' => '2021-05-28 19:17:11','deleted_at' => NULL,'slug' => 'medical-1610562355'),
  array('id' => '934','dossier_medical_id' => '595','description' => 'Hernie discale lombaire','date' => NULL,'type' => 'Chirugical','created_at' => '2021-01-13 20:26:47','updated_at' => '2021-01-13 20:26:47','deleted_at' => NULL,'slug' => 'chirugical-1610569607'),
  array('id' => '935','dossier_medical_id' => '595','description' => 'Pas de pathologies chroniques','date' => NULL,'type' => 'Médical','created_at' => '2021-01-13 20:28:01','updated_at' => '2021-01-13 20:28:01','deleted_at' => NULL,'slug' => 'medical-1610569681'),
  array('id' => '936','dossier_medical_id' => '597','description' => 'Lombosciatique','date' => NULL,'type' => 'Médical','created_at' => '2021-01-14 07:29:42','updated_at' => '2021-01-14 07:29:42','deleted_at' => NULL,'slug' => 'medical-1610609382'),
  array('id' => '937','dossier_medical_id' => '597','description' => 'Lombosciatique','date' => NULL,'type' => 'Médical','created_at' => '2021-01-14 08:06:40','updated_at' => '2021-01-16 06:10:08','deleted_at' => '2021-01-16 06:10:08','slug' => 'medical-1610611600'),
  array('id' => '938','dossier_medical_id' => '598','description' => 'G5P5005
Dernier enfant âgé de 5 mois sous allaitement maternelle exclusif','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2021-01-14 08:30:45','updated_at' => '2021-01-14 08:30:45','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1610613045'),
  array('id' => '939','dossier_medical_id' => '598','description' => 'grand mère diabétique (Décédée)','date' => NULL,'type' => 'Familial','created_at' => '2021-01-14 08:31:27','updated_at' => '2021-01-14 08:31:27','deleted_at' => NULL,'slug' => 'familial-1610613087'),
  array('id' => '940','dossier_medical_id' => '599','description' => 'G0P0','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2021-01-14 09:15:03','updated_at' => '2021-01-14 09:15:03','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1610615703'),
  array('id' => '941','dossier_medical_id' => '599','description' => 'pas de notion HTA ni de diabète','date' => NULL,'type' => 'Familial','created_at' => '2021-01-14 09:17:06','updated_at' => '2021-01-14 09:17:06','deleted_at' => NULL,'slug' => 'familial-1610615826'),
  array('id' => '942','dossier_medical_id' => '600','description' => 'G11P8036 (3 FCS)
ménopausée depuis 24 ans; pas de traitement hormonal substitutif','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2021-01-14 12:18:30','updated_at' => '2021-01-14 12:18:30','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1610626710'),
  array('id' => '943','dossier_medical_id' => '600','description' => 'mère était HTA et Diabétique','date' => NULL,'type' => 'Familial','created_at' => '2021-01-14 12:19:58','updated_at' => '2021-01-14 12:19:58','deleted_at' => NULL,'slug' => 'familial-1610626798'),
  array('id' => '944','dossier_medical_id' => '603','description' => 'sans particularités','date' => NULL,'type' => 'Médical','created_at' => '2021-01-14 21:24:21','updated_at' => '2021-01-14 21:24:21','deleted_at' => NULL,'slug' => 'medical-1610659461'),
  array('id' => '945','dossier_medical_id' => '603','description' => 'ras','date' => NULL,'type' => 'Chirugical','created_at' => '2021-01-14 21:24:44','updated_at' => '2021-01-14 21:24:44','deleted_at' => NULL,'slug' => 'chirugical-1610659484'),
  array('id' => '946','dossier_medical_id' => '603','description' => 'diabète chez le pére','date' => NULL,'type' => 'Familial','created_at' => '2021-01-14 21:25:08','updated_at' => '2021-01-14 21:25:08','deleted_at' => NULL,'slug' => 'familial-1610659508'),
  array('id' => '947','dossier_medical_id' => '603','description' => 'sans particularités','date' => NULL,'type' => 'Médical','created_at' => '2021-01-14 21:37:01','updated_at' => '2021-01-14 21:37:01','deleted_at' => NULL,'slug' => 'medical-1610660221'),
  array('id' => '948','dossier_medical_id' => '604','description' => 'ras','date' => NULL,'type' => 'Médical','created_at' => '2021-01-14 23:49:29','updated_at' => '2021-01-14 23:49:29','deleted_at' => NULL,'slug' => 'medical-1610668169'),
  array('id' => '949','dossier_medical_id' => '604','description' => 'G5P4104
FCV EN 2009
mammographie  pour mastodynie en 2019','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2021-01-14 23:52:19','updated_at' => '2021-01-14 23:52:19','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1610668339'),
  array('id' => '950','dossier_medical_id' => '604','description' => 'herniorraphie indiquée pour hernie ombilical','date' => NULL,'type' => 'Familial','created_at' => '2021-01-14 23:55:09','updated_at' => '2021-01-14 23:55:09','deleted_at' => NULL,'slug' => 'familial-1610668509'),
  array('id' => '951','dossier_medical_id' => '604','description' => 'Diabéte chez l oncle','date' => NULL,'type' => 'Familial','created_at' => '2021-01-14 23:55:49','updated_at' => '2021-01-14 23:55:49','deleted_at' => NULL,'slug' => 'familial-1610668549'),
  array('id' => '952','dossier_medical_id' => '605','description' => 'HTA chez la grand mère','date' => NULL,'type' => 'Familial','created_at' => '2021-01-15 05:17:14','updated_at' => '2021-01-15 05:17:14','deleted_at' => NULL,'slug' => 'familial-1610687834'),
  array('id' => '953','dossier_medical_id' => '605','description' => 'DDR non connue','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2021-01-15 05:17:45','updated_at' => '2021-01-15 05:17:45','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1610687865'),
  array('id' => '954','dossier_medical_id' => '606','description' => 'sans particularité','date' => NULL,'type' => 'Familial','created_at' => '2021-01-15 11:26:01','updated_at' => '2021-01-15 11:26:01','deleted_at' => NULL,'slug' => 'familial-1610709961'),
  array('id' => '955','dossier_medical_id' => '606','description' => 'sans particularité','date' => NULL,'type' => 'Médical','created_at' => '2021-01-15 11:26:38','updated_at' => '2021-01-15 11:26:38','deleted_at' => NULL,'slug' => 'medical-1610709998'),
  array('id' => '956','dossier_medical_id' => '606','description' => 'DDR : 30/12/2020
MENARCHE : 13 ans
CYCLE: Irrégulier ; flux menstruel normal avec écoulement pendant 5 jours','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2021-01-15 11:31:23','updated_at' => '2021-01-15 11:31:23','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1610710283'),
  array('id' => '957','dossier_medical_id' => '606','description' => 'Sans particularité','date' => NULL,'type' => 'Chirugical','created_at' => '2021-01-15 11:31:41','updated_at' => '2021-01-15 11:31:41','deleted_at' => NULL,'slug' => 'chirugical-1610710301'),
  array('id' => '958','dossier_medical_id' => '607','description' => 'Sans particularité','date' => NULL,'type' => 'Médical','created_at' => '2021-01-15 15:04:15','updated_at' => '2021-01-15 15:04:15','deleted_at' => NULL,'slug' => 'medical-1610723055'),
  array('id' => '959','dossier_medical_id' => '607','description' => 'Sans particulerité','date' => NULL,'type' => 'Chirugical','created_at' => '2021-01-15 15:04:34','updated_at' => '2021-01-15 15:04:34','deleted_at' => NULL,'slug' => 'chirugical-1610723074'),
  array('id' => '960','dossier_medical_id' => '607','description' => 'RAS','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2021-01-15 15:04:54','updated_at' => '2021-01-15 15:04:54','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1610723094'),
  array('id' => '961','dossier_medical_id' => '607','description' => 'sans particularité','date' => NULL,'type' => 'Familial','created_at' => '2021-01-15 15:05:22','updated_at' => '2021-01-15 15:05:22','deleted_at' => NULL,'slug' => 'familial-1610723122'),
  array('id' => '962','dossier_medical_id' => '608','description' => 'sans particularité','date' => NULL,'type' => 'Médical','created_at' => '2021-01-15 16:28:29','updated_at' => '2021-01-15 16:28:29','deleted_at' => NULL,'slug' => 'medical-1610728109'),
  array('id' => '963','dossier_medical_id' => '608','description' => 'césarienne en 2007 pour disproportion foetopelvienne','date' => NULL,'type' => 'Chirugical','created_at' => '2021-01-15 16:29:31','updated_at' => '2021-01-15 16:29:31','deleted_at' => NULL,'slug' => 'chirugical-1610728171'),
  array('id' => '964','dossier_medical_id' => '608','description' => 'DDR: Fin octobre 2020
Part III Geste IV avortement I 
AGE GESTATIONNEL : 12 SA
TP: juillet 2021','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2021-01-15 16:36:23','updated_at' => '2021-01-15 16:36:23','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1610728583'),
  array('id' => '965','dossier_medical_id' => '608','description' => 'Sans particularité','date' => NULL,'type' => 'Familial','created_at' => '2021-01-15 16:37:10','updated_at' => '2021-01-15 16:37:10','deleted_at' => NULL,'slug' => 'familial-1610728630'),
  array('id' => '966','dossier_medical_id' => '571','description' => 'Laparotomie pour Grossesse Extra-Utérine Rompue en 2020','date' => NULL,'type' => 'Chirugical','created_at' => '2021-01-15 22:46:59','updated_at' => '2021-01-15 22:46:59','deleted_at' => NULL,'slug' => 'chirugical-1610750819'),
  array('id' => '967','dossier_medical_id' => '571','description' => 'Rhinite allergique','date' => NULL,'type' => 'Médical','created_at' => '2021-01-15 22:49:22','updated_at' => '2021-01-15 22:49:22','deleted_at' => NULL,'slug' => 'medical-1610750962'),
  array('id' => '968','dossier_medical_id' => '611','description' => 'asthmatique depuis 3 ans environ sous ventoline','date' => NULL,'type' => 'Médical','created_at' => '2021-01-17 13:44:44','updated_at' => '2021-01-17 13:44:44','deleted_at' => NULL,'slug' => 'medical-1610891084'),
  array('id' => '969','dossier_medical_id' => '611','description' => 'notion d\'asthme familial: mère, 2 frère; 2 soeurs ;cousins, oncles et tantes
paternels et maternel
- pas de drépanocytose
-2 grands-mères HTA
- grande mère paternelle diabétique','date' => NULL,'type' => 'Familial','created_at' => '2021-01-17 13:45:33','updated_at' => '2021-01-17 13:45:33','deleted_at' => NULL,'slug' => 'familial-1610891133'),
  array('id' => '970','dossier_medical_id' => '338','description' => 'DDR : 06-12-2020   AG : 6 sa + 1 
G2P0010 
G1 : il ya 04 ans IVG 
G2 : grossesse actuelle','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2021-01-18 09:46:10','updated_at' => '2021-01-18 09:46:10','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1610963170'),
  array('id' => '971','dossier_medical_id' => '621','description' => 'Epigastralgie chronique rythmée par la prise d\'aliments épicés','date' => NULL,'type' => 'Médical','created_at' => '2021-01-18 20:42:58','updated_at' => '2021-01-18 20:42:58','deleted_at' => NULL,'slug' => 'medical-1611002578'),
  array('id' => '972','dossier_medical_id' => '620','description' => 'HTA connue depuis Novembre 2020 sous Cardiourine 1cp/j ; épigastralgie chronique','date' => NULL,'type' => 'Médical','created_at' => '2021-01-18 20:54:21','updated_at' => '2021-01-18 20:54:21','deleted_at' => NULL,'slug' => 'medical-1611003261'),
  array('id' => '973','dossier_medical_id' => '620','description' => 'Epigastralgie chronique soulagée par oméprazole','date' => NULL,'type' => 'Médical','created_at' => '2021-01-18 20:54:57','updated_at' => '2021-01-18 20:54:57','deleted_at' => NULL,'slug' => 'medical-1611003297'),
  array('id' => '974','dossier_medical_id' => '620','description' => 'G3P2012, ménopausée, FCV et mammographie réalisés il y a plus de 10 ans','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2021-01-18 20:55:34','updated_at' => '2021-01-18 20:55:34','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1611003334'),
  array('id' => '975','dossier_medical_id' => '620','description' => 'Traumatisme de la malléole externe + fracture du pied D post chute il y a plusieurs années','date' => NULL,'type' => 'Chirugical','created_at' => '2021-01-18 20:56:01','updated_at' => '2021-01-18 20:56:01','deleted_at' => NULL,'slug' => 'chirugical-1611003361'),
  array('id' => '976','dossier_medical_id' => '623','description' => 'Lombargo','date' => NULL,'type' => 'Médical','created_at' => '2021-01-19 09:19:42','updated_at' => '2021-01-19 09:19:42','deleted_at' => NULL,'slug' => 'medical-1611047982'),
  array('id' => '977','dossier_medical_id' => '627','description' => 'gastrite chronique','date' => NULL,'type' => 'Médical','created_at' => '2021-01-19 19:12:45','updated_at' => '2021-01-19 19:12:45','deleted_at' => NULL,'slug' => 'medical-1611083565'),
  array('id' => '978','dossier_medical_id' => '17','description' => 'Hypertendu connue depuis plus de 3 ans et mis sous traitement en octobre 2019 suite à une AVC ischémique; actuelle sous amlodipine 10mg: 1-0-0; ramipril 5 mg: 1-0-0; bisoprolol: 2.5mg: 1-0-0','date' => NULL,'type' => 'Médical','created_at' => '2021-01-20 08:49:33','updated_at' => '2021-01-26 17:07:14','deleted_at' => '2021-01-26 17:07:14','slug' => 'medical-1611132573'),
  array('id' => '979','dossier_medical_id' => '17','description' => 'patient goutteux depuis environ 3 ans sous allopurinol 100mg: 1-0-0','date' => '2018-01-01','type' => 'Médical','created_at' => '2021-01-20 08:50:53','updated_at' => '2021-01-20 12:38:47','deleted_at' => NULL,'slug' => 'medical-1611132653'),
  array('id' => '980','dossier_medical_id' => '17','description' => 'Diabétique connu depuis 2019; decouvert lors d\'une consultation en Allemagne, actuellement sous protocole actrapide','date' => '2019-11-01','type' => 'Médical','created_at' => '2021-01-20 08:52:27','updated_at' => '2021-01-26 17:07:54','deleted_at' => '2021-01-26 17:07:54','slug' => 'medical-1611132747'),
  array('id' => '981','dossier_medical_id' => '17','description' => 'notion de 2 AVC : le 1er en 2019 suite à la survenue brutale d\'une aphasie non fluente; Une IRM + ARM cérébrale réalisée a mis évidence un infarctus Sylvien superficiel gauche en rapport avec une sténose de l’artère cérébrale moyenne dans sa portion M2; pris en charge par double anti-agrégation plaquettaire pour une durée de 4 semaines et sera par la suite mis sous un seul anti agrégant plaquetair;  Il lui a été prescrit également une Statine à forte dose et un traitement anti-hypertenseur inconnu','date' => '2019-11-01','type' => 'Médical','created_at' => '2021-01-20 08:56:57','updated_at' => '2021-01-26 17:09:49','deleted_at' => '2021-01-26 17:09:49','slug' => 'medical-1611133017'),
  array('id' => '982','dossier_medical_id' => '17','description' => 'pas de notion d\'HTA , ni diabète,
pas de notion de cancer dans la famille','date' => NULL,'type' => 'Familial','created_at' => '2021-01-20 08:58:21','updated_at' => '2021-01-26 17:08:10','deleted_at' => '2021-01-26 17:08:10','slug' => 'familial-1611133101'),
  array('id' => '983','dossier_medical_id' => '17','description' => 'Notion de Maladie rénale chronique en phase terminale en fin 2019 début 2020 découverte en Allemagne et prise en charge par dialyse. Depuis janvier  2020 pas de dialyse faite au Cameroun.','date' => '2019-12-20','type' => 'Médical','created_at' => '2021-01-20 09:02:17','updated_at' => '2021-01-26 17:08:29','deleted_at' => '2021-01-26 17:08:29','slug' => 'medical-1611133337'),
  array('id' => '984','dossier_medical_id' => '630','description' => 'sans particularité','date' => NULL,'type' => 'Médical','created_at' => '2021-01-21 10:01:04','updated_at' => '2021-01-21 10:01:04','deleted_at' => NULL,'slug' => 'medical-1611223264'),
  array('id' => '985','dossier_medical_id' => '630','description' => 'sans particularité','date' => NULL,'type' => 'Chirugical','created_at' => '2021-01-21 10:01:31','updated_at' => '2021-01-21 10:01:31','deleted_at' => NULL,'slug' => 'chirugical-1611223291'),
  array('id' => '986','dossier_medical_id' => '630','description' => 'P1G3A1','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2021-01-21 10:02:44','updated_at' => '2021-01-21 10:02:44','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1611223364'),
  array('id' => '987','dossier_medical_id' => '630','description' => 'DDR : 6 / 6/2020
AG : 33 SA et 1 jour selon la DDR','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2021-01-21 10:11:17','updated_at' => '2021-01-21 10:11:17','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1611223877'),
  array('id' => '988','dossier_medical_id' => '630','description' => 'TP ; 13/03/2021','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2021-01-21 10:12:34','updated_at' => '2021-01-21 10:12:34','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1611223954'),
  array('id' => '989','dossier_medical_id' => '630','description' => 'RAS','date' => NULL,'type' => 'Médical','created_at' => '2021-01-21 10:51:32','updated_at' => '2021-01-21 10:51:32','deleted_at' => NULL,'slug' => 'medical-1611226292'),
  array('id' => '990','dossier_medical_id' => '300','description' => 'hémoroidectomie il y a 15 ans','date' => NULL,'type' => 'Chirugical','created_at' => '2021-01-21 11:51:19','updated_at' => '2021-01-21 11:51:19','deleted_at' => NULL,'slug' => 'chirugical-1611229879'),
  array('id' => '991','dossier_medical_id' => '633','description' => 'seul enfant a ses parents tous en bonne santé apparente','date' => NULL,'type' => 'Familial','created_at' => '2021-01-22 11:36:12','updated_at' => '2021-01-22 11:36:12','deleted_at' => NULL,'slug' => 'familial-1611315372'),
  array('id' => '992','dossier_medical_id' => '636','description' => 'cure herniaire (hernie scrotale)','date' => '2020-03-01','type' => 'Chirugical','created_at' => '2021-01-23 12:48:54','updated_at' => '2021-01-23 12:48:54','deleted_at' => NULL,'slug' => 'chirugical-1611406134'),
  array('id' => '993','dossier_medical_id' => '506','description' => 'HTA, ASTHME, ,épigastralgie chronique','date' => NULL,'type' => 'Médical','created_at' => '2021-01-23 18:19:37','updated_at' => '2021-01-23 18:19:37','deleted_at' => NULL,'slug' => 'medical-1611425977'),
  array('id' => '994','dossier_medical_id' => '637','description' => 'Ascendant: parents vivant tous en BSA
collatéraux: seul enfant à ses parents','date' => NULL,'type' => 'Familial','created_at' => '2021-01-25 09:47:20','updated_at' => '2021-01-25 09:47:20','deleted_at' => NULL,'slug' => 'familial-1611568040'),
  array('id' => '995','dossier_medical_id' => '283','description' => 'HTA sous Amlodipine 5mg : 1cp/jr','date' => NULL,'type' => 'Médical','created_at' => '2021-01-25 23:05:55','updated_at' => '2021-01-25 23:05:55','deleted_at' => NULL,'slug' => 'medical-1611615955'),
  array('id' => '996','dossier_medical_id' => '642','description' => 'HTA depuis 20 ans','date' => NULL,'type' => 'Médical','created_at' => '2021-01-26 07:24:31','updated_at' => '2021-01-26 07:24:31','deleted_at' => NULL,'slug' => 'medical-1611645871'),
  array('id' => '997','dossier_medical_id' => '642','description' => 'maladie hémorroïdaire','date' => NULL,'type' => 'Médical','created_at' => '2021-01-26 08:08:49','updated_at' => '2021-01-26 08:08:49','deleted_at' => NULL,'slug' => 'medical-1611648529'),
  array('id' => '998','dossier_medical_id' => '17','description' => 'FA  Paroxysmale sous Anticoagulant oral par Phenprocoumon avec un CHA2DS2VASc=5','date' => '2019-12-06','type' => 'Médical','created_at' => '2021-01-26 17:00:44','updated_at' => '2021-01-26 17:00:44','deleted_at' => NULL,'slug' => 'medical-1611680444'),
  array('id' => '999','dossier_medical_id' => '17','description' => 'Diabète de type 2 sous insulinothérapie à base d\'Actrapid','date' => '2019-12-06','type' => 'Familial','created_at' => '2021-01-26 17:01:28','updated_at' => '2021-01-26 17:01:28','deleted_at' => NULL,'slug' => 'familial-1611680488'),
  array('id' => '1000','dossier_medical_id' => '17','description' => 'Pneumonie Nosocomiale traitée par Antibiothérapie à base de Piperacillin','date' => '2019-01-06','type' => 'Médical','created_at' => '2021-01-26 17:02:43','updated_at' => '2021-01-26 17:02:43','deleted_at' => NULL,'slug' => 'medical-1611680563'),
  array('id' => '1001','dossier_medical_id' => '17','description' => 'ATCD d\'Abus d\'alcool','date' => '2019-12-06','type' => 'Médical','created_at' => '2021-01-26 17:04:06','updated_at' => '2021-01-26 17:04:06','deleted_at' => NULL,'slug' => 'medical-1611680646'),
  array('id' => '1002','dossier_medical_id' => '17','description' => 'AVC Ischémique avec une hémiparésie droite et une aphasie','date' => '2019-09-01','type' => 'Médical','created_at' => '2021-01-26 17:11:11','updated_at' => '2021-01-26 17:11:11','deleted_at' => NULL,'slug' => 'medical-1611681071'),
  array('id' => '1003','dossier_medical_id' => '645','description' => 'Etat dépressive depuis plusieurs années sous MODECATE injectable, HALDOL 10mg, ARTANE 5mg, Laroxyl 25mg','date' => NULL,'type' => 'Médical','created_at' => '2021-01-27 04:21:49','updated_at' => '2021-01-27 04:21:49','deleted_at' => NULL,'slug' => 'medical-1611721309'),
  array('id' => '1004','dossier_medical_id' => '645','description' => 'G4P3.0.2.2, FCV/mammographie jamais réalisés','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2021-01-27 04:22:59','updated_at' => '2021-01-27 04:22:59','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1611721379'),
  array('id' => '1005','dossier_medical_id' => '645','description' => '02 césariennes','date' => NULL,'type' => 'Chirugical','created_at' => '2021-01-27 04:23:25','updated_at' => '2021-01-27 04:23:25','deleted_at' => NULL,'slug' => 'chirugical-1611721405'),
  array('id' => '1006','dossier_medical_id' => '645','description' => 'DT2 chez le père','date' => NULL,'type' => 'Familial','created_at' => '2021-01-27 04:23:55','updated_at' => '2021-01-27 04:23:55','deleted_at' => NULL,'slug' => 'familial-1611721435'),
  array('id' => '1007','dossier_medical_id' => '648','description' => 'HTA depuis 5 ans traité à l\'indigène','date' => NULL,'type' => 'Médical','created_at' => '2021-01-28 15:31:55','updated_at' => '2021-01-28 15:31:55','deleted_at' => NULL,'slug' => 'medical-1611847915'),
  array('id' => '1008','dossier_medical_id' => '648','description' => 'Diabète chez frère aîné (décédé)','date' => NULL,'type' => 'Familial','created_at' => '2021-01-28 16:29:26','updated_at' => '2021-01-28 16:29:26','deleted_at' => NULL,'slug' => 'familial-1611851366'),
  array('id' => '1009','dossier_medical_id' => '655','description' => 'G2P1011, ménopausée, FCV et mammographie jamais réalisés','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2021-01-31 09:46:59','updated_at' => '2021-01-31 09:46:59','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1612086419'),
  array('id' => '1010','dossier_medical_id' => '656','description' => 'opéré de hernie discale à l\'Hopital central de Yaoundé par Pr DJENTCHIEU; suites simples, sans complication.','date' => '2010-10-01','type' => 'Chirugical','created_at' => '2021-01-31 18:01:20','updated_at' => '2021-01-31 18:01:20','deleted_at' => NULL,'slug' => 'chirugical-1612116080'),
  array('id' => '1011','dossier_medical_id' => '656','description' => 'patient myopedepuis le bas âge','date' => NULL,'type' => 'Médical','created_at' => '2021-01-31 18:02:05','updated_at' => '2021-01-31 18:02:05','deleted_at' => NULL,'slug' => 'medical-1612116125'),
  array('id' => '1012','dossier_medical_id' => '656','description' => 'papa et grande mère paternelle  HTA 
pas de notion de cancer dans la famille','date' => NULL,'type' => 'Familial','created_at' => '2021-01-31 18:03:23','updated_at' => '2021-01-31 18:03:23','deleted_at' => NULL,'slug' => 'familial-1612116203'),
  array('id' => '1013','dossier_medical_id' => '658','description' => 'ascendant: parents vivants tous en bonne santé apparente

collatéraux: 5e née d\'une fratrie de 5 enfants tous des filles et donc les thélarches ont commencés à l\'âge de 14 ans','date' => NULL,'type' => 'Familial','created_at' => '2021-02-01 05:29:07','updated_at' => '2021-02-01 05:29:07','deleted_at' => NULL,'slug' => 'familial-1612157347'),
  array('id' => '1014','dossier_medical_id' => '658','description' => 'pas de pathologie chronique connue','date' => NULL,'type' => 'Médical','created_at' => '2021-02-01 05:29:47','updated_at' => '2021-02-01 05:29:47','deleted_at' => NULL,'slug' => 'medical-1612157387'),
  array('id' => '1015','dossier_medical_id' => '658','description' => 'jamais été opéré','date' => NULL,'type' => 'Chirugical','created_at' => '2021-02-01 05:30:11','updated_at' => '2021-02-01 05:30:11','deleted_at' => NULL,'slug' => 'chirugical-1612157411'),
  array('id' => '1016','dossier_medical_id' => '21','description' => 'curage ganglionnaires indiqué pour adénopathies axillaires droit suite a une extension locorégionale de l ADK du sein droit le 15mars 2020','date' => NULL,'type' => 'Chirugical','created_at' => '2021-02-01 18:26:10','updated_at' => '2021-02-01 18:26:10','deleted_at' => NULL,'slug' => 'chirugical-1612203970'),
  array('id' => '1017','dossier_medical_id' => '661','description' => '•	2016 : chirurgie thoracique indiqué pour pneumothorax
•	216 : La méniscectomie du genou droit','date' => NULL,'type' => 'Chirugical','created_at' => '2021-02-02 10:50:38','updated_at' => '2021-02-02 10:50:38','deleted_at' => NULL,'slug' => 'chirugical-1612263038'),
  array('id' => '1018','dossier_medical_id' => '660','description' => 'DT2 sous Metformine 1000mg (1/2cp matin et soir)','date' => NULL,'type' => 'Médical','created_at' => '2021-02-02 11:37:29','updated_at' => '2021-02-02 14:06:57','deleted_at' => NULL,'slug' => 'medical-1612265849'),
  array('id' => '1019','dossier_medical_id' => '660','description' => 'Port d\'appareils auditifs BTE depuis Novembre 2020','date' => NULL,'type' => 'Médical','created_at' => '2021-02-02 11:38:21','updated_at' => '2021-02-02 11:38:21','deleted_at' => NULL,'slug' => 'medical-1612265901'),
  array('id' => '1020','dossier_medical_id' => '660','description' => 'HTA connu sous: Amlodipine 10mg/j Bisoprolol 10mg/j, Ramipril/Hydrochlorothazide 10/25 (1cp/j)','date' => NULL,'type' => 'Médical','created_at' => '2021-02-02 14:08:51','updated_at' => '2021-02-02 14:09:18','deleted_at' => NULL,'slug' => 'medical-1612274931'),
  array('id' => '1021','dossier_medical_id' => '662','description' => 'HTA sous Amlosartan 5/50 (1cp/j)','date' => NULL,'type' => 'Médical','created_at' => '2021-02-02 16:42:35','updated_at' => '2021-02-02 16:42:35','deleted_at' => NULL,'slug' => 'medical-1612284155'),
  array('id' => '1022','dossier_medical_id' => '662','description' => 'G4P4004, ménopausée, FCV il y a 1 an, mammographie jamais réalisée','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2021-02-02 16:43:36','updated_at' => '2021-02-02 16:43:36','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1612284216'),
  array('id' => '1023','dossier_medical_id' => '662','description' => 'Ostéosynthèse pour fracture comminutive en Mai 2020','date' => NULL,'type' => 'Chirugical','created_at' => '2021-02-02 16:45:22','updated_at' => '2021-02-02 16:45:22','deleted_at' => NULL,'slug' => 'chirugical-1612284322'),
  array('id' => '1024','dossier_medical_id' => '663','description' => 'douleur abdominale chronique','date' => '2008-01-01','type' => 'Médical','created_at' => '2021-02-02 18:40:15','updated_at' => '2021-02-02 18:40:15','deleted_at' => NULL,'slug' => 'medical-1612291215'),
  array('id' => '1025','dossier_medical_id' => '663','description' => 'notion de 2 cœlioscopies exploratrices la première en 2008 et la 2ème en 2013 qui n\'ont rien trouvé aucune anomalie','date' => '2008-01-01','type' => 'Chirugical','created_at' => '2021-02-02 18:42:39','updated_at' => '2021-02-02 18:42:39','deleted_at' => NULL,'slug' => 'chirugical-1612291359'),
  array('id' => '1026','dossier_medical_id' => '663','description' => 'nodulectomie du sein droit faite à HGOPY plus analyse immunopathologique révélant une tumeur bénigne','date' => '2010-01-01','type' => 'Chirugical','created_at' => '2021-02-02 18:45:11','updated_at' => '2021-02-02 18:45:11','deleted_at' => NULL,'slug' => 'chirugical-1612291511'),
  array('id' => '1027','dossier_medical_id' => '663','description' => 'notion de plusieurs AVC (04), tante , père, grand-mère et oncle','date' => NULL,'type' => 'Familial','created_at' => '2021-02-02 18:46:27','updated_at' => '2021-02-02 18:46:27','deleted_at' => NULL,'slug' => 'familial-1612291587'),
  array('id' => '1028','dossier_medical_id' => '663','description' => 'pas de notion d\'HTA, ni de diabète connu','date' => NULL,'type' => 'Familial','created_at' => '2021-02-02 18:47:02','updated_at' => '2021-02-02 18:47:02','deleted_at' => NULL,'slug' => 'familial-1612291622'),
  array('id' => '1029','dossier_medical_id' => '663','description' => 'cancer du col chez une tante consanguine paternel DCD','date' => NULL,'type' => 'Familial','created_at' => '2021-02-02 18:47:39','updated_at' => '2021-02-02 18:47:39','deleted_at' => NULL,'slug' => 'familial-1612291659'),
  array('id' => '1030','dossier_medical_id' => '509','description' => 'pas d\'HTA, ni diabète
pas de notion de cancer familial','date' => NULL,'type' => 'Familial','created_at' => '2021-02-03 08:08:24','updated_at' => '2021-02-03 08:08:24','deleted_at' => NULL,'slug' => 'familial-1612339704'),
  array('id' => '1031','dossier_medical_id' => '664','description' => 'Chirurgie des membres inférieurs','date' => '2012-01-01','type' => 'Chirugical','created_at' => '2021-02-03 08:12:10','updated_at' => '2021-02-03 08:12:10','deleted_at' => NULL,'slug' => 'chirugical-1612339930'),
  array('id' => '1032','dossier_medical_id' => '666','description' => 'Asthme sous ventoline spray','date' => NULL,'type' => 'Médical','created_at' => '2021-02-03 15:29:26','updated_at' => '2021-02-03 15:29:26','deleted_at' => NULL,'slug' => 'medical-1612366166'),
  array('id' => '1033','dossier_medical_id' => '666','description' => 'Diabète chez tante maternelle','date' => NULL,'type' => 'Familial','created_at' => '2021-02-03 15:55:45','updated_at' => '2021-02-03 15:55:45','deleted_at' => NULL,'slug' => 'familial-1612367745'),
  array('id' => '1034','dossier_medical_id' => '666','description' => 'HTA chez tante paternelle','date' => NULL,'type' => 'Familial','created_at' => '2021-02-03 15:56:11','updated_at' => '2021-02-03 15:56:11','deleted_at' => NULL,'slug' => 'familial-1612367771'),
  array('id' => '1035','dossier_medical_id' => '671','description' => 'HTA gravidique','date' => NULL,'type' => 'Médical','created_at' => '2021-02-04 14:06:36','updated_at' => '2021-02-04 14:06:36','deleted_at' => NULL,'slug' => 'medical-1612447596'),
  array('id' => '1036','dossier_medical_id' => '673','description' => 'Epigastralgie chronique intermittente','date' => NULL,'type' => 'Médical','created_at' => '2021-02-05 16:40:47','updated_at' => '2021-02-05 16:40:47','deleted_at' => NULL,'slug' => 'medical-1612543247'),
  array('id' => '1037','dossier_medical_id' => '673','description' => 'Suivie en 2017 pour Sinusite maxillaire droite','date' => NULL,'type' => 'Médical','created_at' => '2021-02-05 16:41:26','updated_at' => '2021-02-05 16:41:26','deleted_at' => NULL,'slug' => 'medical-1612543286'),
  array('id' => '1038','dossier_medical_id' => '673','description' => 'G7P6015, ménopausée, mammographie jamais réalisée','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2021-02-05 16:41:50','updated_at' => '2021-02-05 16:42:26','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1612543310'),
  array('id' => '1039','dossier_medical_id' => '673','description' => 'Hystérectomie totale','date' => NULL,'type' => 'Chirugical','created_at' => '2021-02-05 16:43:08','updated_at' => '2021-02-05 16:43:08','deleted_at' => NULL,'slug' => 'chirugical-1612543388'),
  array('id' => '1040','dossier_medical_id' => '674','description' => 'aucun','date' => NULL,'type' => 'Médical','created_at' => '2021-02-05 19:43:31','updated_at' => '2021-02-05 19:43:31','deleted_at' => NULL,'slug' => 'medical-1612554211'),
  array('id' => '1041','dossier_medical_id' => '674','description' => 'aucun','date' => NULL,'type' => 'Chirugical','created_at' => '2021-02-05 19:43:46','updated_at' => '2021-02-05 19:43:46','deleted_at' => NULL,'slug' => 'chirugical-1612554226'),
  array('id' => '1042','dossier_medical_id' => '676','description' => 'P0G000
DDR: 12/01/2021
Cycle menstruel irrégulier
durée menstrues: 3-4 jours, flot moyen','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2021-02-07 15:32:29','updated_at' => '2021-02-07 15:32:29','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1612711949'),
  array('id' => '1043','dossier_medical_id' => '677','description' => 'Diabète chez grands parents maternels','date' => NULL,'type' => 'Familial','created_at' => '2021-02-07 15:52:12','updated_at' => '2021-02-07 15:52:12','deleted_at' => NULL,'slug' => 'familial-1612713132'),
  array('id' => '1044','dossier_medical_id' => '465','description' => 'notion de douleur chronique de la jambe et du pied gauche à type de brûlure','date' => '2017-01-01','type' => 'Médical','created_at' => '2021-02-08 08:48:22','updated_at' => '2021-02-08 08:48:22','deleted_at' => NULL,'slug' => 'medical-1612774102'),
  array('id' => '1045','dossier_medical_id' => '681','description' => 'RAS','date' => NULL,'type' => 'Médical','created_at' => '2021-02-08 11:44:48','updated_at' => '2021-02-08 11:44:48','deleted_at' => NULL,'slug' => 'medical-1612784688'),
  array('id' => '1046','dossier_medical_id' => '681','description' => 'RAS','date' => NULL,'type' => 'Chirugical','created_at' => '2021-02-08 11:45:09','updated_at' => '2021-02-08 11:45:09','deleted_at' => NULL,'slug' => 'chirugical-1612784709'),
  array('id' => '1047','dossier_medical_id' => '681','description' => 'G6P6015
mammographie réalisé en 2018
fcv en janvier 2020','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2021-02-08 11:47:14','updated_at' => '2021-02-08 11:47:14','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1612784834'),
  array('id' => '1048','dossier_medical_id' => '681','description' => 'diabète chez la mère','date' => NULL,'type' => 'Familial','created_at' => '2021-02-08 11:47:56','updated_at' => '2021-02-08 11:47:56','deleted_at' => NULL,'slug' => 'familial-1612784876'),
  array('id' => '1049','dossier_medical_id' => '664','description' => 'G7P7007','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2021-02-08 21:30:56','updated_at' => '2021-02-08 21:30:56','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1612819856'),
  array('id' => '1050','dossier_medical_id' => '664','description' => 'PAS  de pathologies chronique connue','date' => NULL,'type' => 'Médical','created_at' => '2021-02-08 21:31:54','updated_at' => '2021-02-08 21:31:54','deleted_at' => NULL,'slug' => 'medical-1612819914'),
  array('id' => '1051','dossier_medical_id' => '664','description' => '4e née d\'une fratrie de 5 enfants tous en BSA','date' => NULL,'type' => 'Familial','created_at' => '2021-02-08 21:33:11','updated_at' => '2021-02-08 21:33:11','deleted_at' => NULL,'slug' => 'familial-1612819991'),
  array('id' => '1052','dossier_medical_id' => '684','description' => 'Patiente HTA depuis 15ans sous nifedipine posologie non documenté','date' => NULL,'type' => 'Médical','created_at' => '2021-02-10 14:46:51','updated_at' => '2021-02-10 14:46:51','deleted_at' => NULL,'slug' => 'medical-1612968411'),
  array('id' => '1053','dossier_medical_id' => '684','description' => 'Diabétique connue depuis 08 ans  sous glucophage posologie non documenté','date' => NULL,'type' => 'Médical','created_at' => '2021-02-10 14:47:21','updated_at' => '2021-02-10 14:47:21','deleted_at' => NULL,'slug' => 'medical-1612968441'),
  array('id' => '1054','dossier_medical_id' => '685','description' => 'Il Ya 12 ans A bénéficié d’une ostéosynthèse de la cuisse gauche indiquée pour fracture du fémur gauche post avp
 A bénéficié d’une chirurgie cardiaque indiquée pour communication inter ventriculaire en période néonatal','date' => NULL,'type' => 'Chirugical','created_at' => '2021-02-10 16:28:18','updated_at' => '2021-02-10 16:28:18','deleted_at' => NULL,'slug' => 'chirugical-1612974498'),
  array('id' => '1055','dossier_medical_id' => '686','description' => 'ménopausée depuis 10 ans, pas de traitement hormonal substitutif','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2021-02-11 07:54:51','updated_at' => '2021-02-11 07:54:51','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1613030091'),
  array('id' => '1056','dossier_medical_id' => '686','description' => 'HTA connue depuis 10 ans; initialement suivi à l\'Hôpital général de Yaoundé et sous traitement (dénomination:?) ; arrêt du traitement depuis 4 ans','date' => '2011-01-01','type' => 'Médical','created_at' => '2021-02-11 07:57:18','updated_at' => '2021-02-11 07:57:18','deleted_at' => NULL,'slug' => 'medical-1613030238'),
  array('id' => '1057','dossier_medical_id' => '687','description' => 'Angine','date' => '2021-02-07','type' => 'Médical','created_at' => '2021-02-12 13:51:17','updated_at' => '2021-02-12 13:51:17','deleted_at' => NULL,'slug' => 'medical-1613137877'),
  array('id' => '1058','dossier_medical_id' => '687','description' => 'Aucun','date' => NULL,'type' => 'Chirugical','created_at' => '2021-02-12 13:51:49','updated_at' => '2021-02-12 13:51:49','deleted_at' => NULL,'slug' => 'chirugical-1613137909'),
  array('id' => '1059','dossier_medical_id' => '687','description' => 'DDR : 28/12/2020
CYCLE irrégulier et parfois long avec parfois aménorrhée de 2 mois','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2021-02-12 13:54:55','updated_at' => '2021-02-12 13:54:55','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1613138095'),
  array('id' => '1060','dossier_medical_id' => '688','description' => 'HTA connu depuis plus de 10ans sous biprétérax 5mg','date' => NULL,'type' => 'Médical','created_at' => '2021-02-12 16:03:39','updated_at' => '2021-02-12 16:03:39','deleted_at' => NULL,'slug' => 'medical-1613145819'),
  array('id' => '1061','dossier_medical_id' => '688','description' => 'a été opéré 4 fois pour nodule au niveau de l\'abdomen','date' => NULL,'type' => 'Chirugical','created_at' => '2021-02-12 16:08:37','updated_at' => '2021-02-12 16:08:37','deleted_at' => NULL,'slug' => 'chirugical-1613146117'),
  array('id' => '1062','dossier_medical_id' => '689','description' => 'HTA sous Amlodipine 5mg : 01cp/jr','date' => NULL,'type' => 'Médical','created_at' => '2021-02-15 08:28:02','updated_at' => '2021-02-15 08:28:02','deleted_at' => NULL,'slug' => 'medical-1613377682'),
  array('id' => '1063','dossier_medical_id' => '689','description' => 'Gastrite chronique sous oméprazole en cas de crise','date' => NULL,'type' => 'Médical','created_at' => '2021-02-15 08:28:38','updated_at' => '2021-02-15 08:28:38','deleted_at' => NULL,'slug' => 'medical-1613377718'),
  array('id' => '1064','dossier_medical_id' => '689','description' => 'Lombosciatalgie','date' => NULL,'type' => 'Médical','created_at' => '2021-02-15 15:46:01','updated_at' => '2021-02-15 16:07:42','deleted_at' => NULL,'slug' => 'medical-1613403961'),
  array('id' => '1065','dossier_medical_id' => '689','description' => 'Hépatite C','date' => NULL,'type' => 'Médical','created_at' => '2021-02-15 16:12:33','updated_at' => '2021-02-15 16:12:33','deleted_at' => NULL,'slug' => 'medical-1613405553'),
  array('id' => '1066','dossier_medical_id' => '529','description' => 'DDR: 09/08/2020
DPA: 16/05/2021
AG: 28 sa et 3 jours','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2021-02-15 16:44:56','updated_at' => '2021-02-15 17:01:40','deleted_at' => '2021-02-15 17:01:40','slug' => 'gyneco-obstetrique-1613407496'),
  array('id' => '1067','dossier_medical_id' => '529','description' => 'DDR: 09/08/2020 DPA: 16/05/2021 AG: 28 sa et 3 jours','date' => '2021-02-15','type' => 'Gynéco-obstétrique','created_at' => '2021-02-15 17:02:01','updated_at' => '2021-02-15 17:02:01','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1613408521'),
  array('id' => '1068','dossier_medical_id' => '694','description' => 'Hypertension artérielle sous rasgil 2.5 : 1cp/jr','date' => NULL,'type' => 'Médical','created_at' => '2021-02-17 06:17:12','updated_at' => '2021-02-17 06:17:12','deleted_at' => NULL,'slug' => 'medical-1613542632'),
  array('id' => '1069','dossier_medical_id' => '694','description' => 'DT2 sous metformine 500mg : 2cp/12h','date' => NULL,'type' => 'Médical','created_at' => '2021-02-17 06:17:33','updated_at' => '2021-02-17 06:17:33','deleted_at' => NULL,'slug' => 'medical-1613542653'),
  array('id' => '1070','dossier_medical_id' => '694','description' => 'Gastrite chronique sous Inexium 40 mg cp : 1cp/12h','date' => NULL,'type' => 'Médical','created_at' => '2021-02-17 06:17:50','updated_at' => '2021-02-17 06:17:50','deleted_at' => NULL,'slug' => 'medical-1613542670'),
  array('id' => '1071','dossier_medical_id' => '696','description' => 'Notion de chiffre tensionnel élevés il ya environ 1 an ; non suivi','date' => '2019-01-01','type' => 'Médical','created_at' => '2021-02-17 10:18:35','updated_at' => '2021-02-17 10:18:35','deleted_at' => NULL,'slug' => 'medical-1613557115'),
  array('id' => '1072','dossier_medical_id' => '696','description' => '- mère HTA décédé de suite d\'un myélome multiple','date' => NULL,'type' => 'Familial','created_at' => '2021-02-17 10:20:30','updated_at' => '2021-02-17 10:20:30','deleted_at' => NULL,'slug' => 'familial-1613557230'),
  array('id' => '1073','dossier_medical_id' => '697','description' => 'HTA connue traité sous LOXEN LP 1cp/j','date' => NULL,'type' => 'Médical','created_at' => '2021-02-17 12:19:42','updated_at' => '2021-02-17 12:19:42','deleted_at' => NULL,'slug' => 'medical-1613564382'),
  array('id' => '1074','dossier_medical_id' => '697','description' => 'DT2 connue traitée sous Metformine 1000mg/j','date' => NULL,'type' => 'Médical','created_at' => '2021-02-17 12:20:16','updated_at' => '2021-02-17 12:20:16','deleted_at' => NULL,'slug' => 'medical-1613564416'),
  array('id' => '1075','dossier_medical_id' => '697','description' => 'Lombodiscarthrose étagée et Listhésis L5S1 grade 2 d’origine arthrosique','date' => NULL,'type' => 'Médical','created_at' => '2021-02-17 12:21:37','updated_at' => '2021-02-17 12:21:37','deleted_at' => NULL,'slug' => 'medical-1613564497'),
  array('id' => '1076','dossier_medical_id' => '697','description' => 'G6P4024, ménopausée ≈ 20 ans; dernier FCV en 2019 sans lésion de malignité. Aucune mammographie du sein droit réalisée','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2021-02-17 12:22:36','updated_at' => '2021-02-17 12:22:36','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1613564556'),
  array('id' => '1077','dossier_medical_id' => '697','description' => 'Mastectomie du sein G + curage lymphoganglionnaire suivie de chimiothérapie/radiothérapie à HGD indiquée pour  Néo du sein G il y a >7 ans','date' => NULL,'type' => 'Chirugical','created_at' => '2021-02-17 12:24:31','updated_at' => '2021-02-17 12:24:31','deleted_at' => NULL,'slug' => 'chirugical-1613564671'),
  array('id' => '1078','dossier_medical_id' => '697','description' => 'Conjoint traité et suivi pour HTA/HBP','date' => NULL,'type' => 'Familial','created_at' => '2021-02-17 12:29:15','updated_at' => '2021-02-17 12:29:15','deleted_at' => NULL,'slug' => 'familial-1613564955'),
  array('id' => '1079','dossier_medical_id' => '478','description' => 'Notion de lombalgie dû à une hernie discale découvert il ya plus
de 10 ans ( patient porteur d\'une ceinture lombaire lors des crises douloureuses)','date' => '2011-01-01','type' => 'Médical','created_at' => '2021-02-17 13:40:21','updated_at' => '2021-02-17 13:40:21','deleted_at' => NULL,'slug' => 'medical-1613569221'),
  array('id' => '1080','dossier_medical_id' => '701','description' => 'laparotomie il y\'a 24 ans pour GEU rompue','date' => NULL,'type' => 'Chirugical','created_at' => '2021-02-19 10:04:43','updated_at' => '2021-02-19 10:04:43','deleted_at' => NULL,'slug' => 'chirugical-1613729083'),
  array('id' => '1081','dossier_medical_id' => '701','description' => 'G6P2042
FCV et mammographie réalisé en 2016
ménopause à l\'age de 39 ans','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2021-02-19 10:06:52','updated_at' => '2021-02-19 10:06:52','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1613729212'),
  array('id' => '1082','dossier_medical_id' => '701','description' => 'sans particularités','date' => NULL,'type' => 'Médical','created_at' => '2021-02-19 10:07:31','updated_at' => '2021-02-19 10:07:31','deleted_at' => NULL,'slug' => 'medical-1613729251'),
  array('id' => '1083','dossier_medical_id' => '432','description' => 'G3P1011, DDR 01/06/2020, AG 37SA, DPA 08/03/2021','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2021-02-19 11:20:21','updated_at' => '2021-02-19 11:20:21','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1613733621'),
  array('id' => '1084','dossier_medical_id' => '432','description' => 'Pathologies sur grossesse : paludisme ; vaginose à Gardnerela vaginalis/candidose ; diabète gestationnel insulino-dépendant','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2021-02-19 11:26:22','updated_at' => '2021-02-19 11:26:22','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1613733982'),
  array('id' => '1085','dossier_medical_id' => '432','description' => 'Diabète gravidique sous Mixtard 12UI×2/j','date' => NULL,'type' => 'Médical','created_at' => '2021-02-19 11:42:09','updated_at' => '2021-02-19 11:42:09','deleted_at' => NULL,'slug' => 'medical-1613734929'),
  array('id' => '1086','dossier_medical_id' => '702','description' => 'Diabète sucré type 2 découvert en 2017. Traitée et déclarée guérie, actuellement sous
MHD','date' => '2017-01-01','type' => 'Médical','created_at' => '2021-02-20 10:33:15','updated_at' => '2021-02-20 10:33:15','deleted_at' => NULL,'slug' => 'medical-1613817195'),
  array('id' => '1087','dossier_medical_id' => '702','description' => 'Parfois pics d’hypertension
- Epigastralgies depuis plusieurs années, hors traitement','date' => NULL,'type' => 'Médical','created_at' => '2021-02-20 10:33:39','updated_at' => '2021-02-20 10:33:39','deleted_at' => NULL,'slug' => 'medical-1613817219'),
  array('id' => '1088','dossier_medical_id' => '702','description' => 'Cardiomégalie (Rx thorax du 04/11/2020)
- Pneumonie il y a 1an et traitéé','date' => '2020-05-01','type' => 'Médical','created_at' => '2021-02-20 10:34:17','updated_at' => '2021-02-20 10:34:17','deleted_at' => NULL,'slug' => 'medical-1613817257'),
  array('id' => '1089','dossier_medical_id' => '702','description' => '- Ménopausée depuis 10 ans','date' => '2010-01-01','type' => 'Gynéco-obstétrique','created_at' => '2021-02-20 10:34:47','updated_at' => '2021-02-20 10:34:47','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1613817287'),
  array('id' => '1090','dossier_medical_id' => '703','description' => 'Epigastralgies','date' => NULL,'type' => 'Médical','created_at' => '2021-02-20 10:43:24','updated_at' => '2021-02-20 10:43:24','deleted_at' => NULL,'slug' => 'medical-1613817804'),
  array('id' => '1091','dossier_medical_id' => '703','description' => 'DDR : 27/01/2021 cycle irrégulier, durée règles : 5jours flux moyen','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2021-02-20 10:43:51','updated_at' => '2021-02-20 10:43:51','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1613817831'),
  array('id' => '1092','dossier_medical_id' => '706','description' => 'P2G3002
DDR: 15/12/2020
DPA: 22/09/2021','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2021-02-20 11:29:06','updated_at' => '2021-02-20 11:29:06','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1613820546'),
  array('id' => '1093','dossier_medical_id' => '706','description' => 'Depo provera il y a 10 mois à deux reprises ayant expiré au mois de Nov 2020','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2021-02-20 11:30:19','updated_at' => '2021-02-20 11:30:19','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1613820619'),
  array('id' => '1094','dossier_medical_id' => '704','description' => 'Rhumatisme et névralgie sous traitement (non précisé)','date' => NULL,'type' => 'Médical','created_at' => '2021-02-20 12:28:11','updated_at' => '2021-02-20 12:28:11','deleted_at' => NULL,'slug' => 'medical-1613824091'),
  array('id' => '1095','dossier_medical_id' => '704','description' => 'Ménopausée depuis 15 ans','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2021-02-20 12:28:28','updated_at' => '2021-02-20 12:28:28','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1613824108'),
  array('id' => '1096','dossier_medical_id' => '705','description' => 'Epigastralgie, sous phosphalugel','date' => NULL,'type' => 'Médical','created_at' => '2021-02-20 12:35:22','updated_at' => '2021-02-20 12:35:22','deleted_at' => NULL,'slug' => 'medical-1613824522'),
  array('id' => '1097','dossier_medical_id' => '707','description' => 'Diabète sous Daonil 10mg/jr','date' => NULL,'type' => 'Médical','created_at' => '2021-02-21 10:59:06','updated_at' => '2021-02-21 10:59:06','deleted_at' => NULL,'slug' => 'medical-1613905146'),
  array('id' => '1098','dossier_medical_id' => '707','description' => 'HTA sous Captopril 50mg/jr','date' => NULL,'type' => 'Médical','created_at' => '2021-02-21 11:00:31','updated_at' => '2021-02-21 11:00:31','deleted_at' => NULL,'slug' => 'medical-1613905231'),
  array('id' => '1099','dossier_medical_id' => '708','description' => 'Gastrite','date' => NULL,'type' => 'Médical','created_at' => '2021-02-21 11:48:18','updated_at' => '2021-02-21 11:48:18','deleted_at' => NULL,'slug' => 'medical-1613908098'),
  array('id' => '1100','dossier_medical_id' => '708','description' => 'Césarienne','date' => NULL,'type' => 'Chirugical','created_at' => '2021-02-21 11:48:56','updated_at' => '2021-02-21 11:48:56','deleted_at' => NULL,'slug' => 'chirugical-1613908136'),
  array('id' => '1101','dossier_medical_id' => '709','description' => 'HTA connu sous Cardioaspirine et Crestor','date' => NULL,'type' => 'Médical','created_at' => '2021-02-21 12:34:34','updated_at' => '2021-02-21 12:34:34','deleted_at' => NULL,'slug' => 'medical-1613910874'),
  array('id' => '1102','dossier_medical_id' => '709','description' => 'HBP  sous Xatral et Permixon','date' => NULL,'type' => 'Médical','created_at' => '2021-02-21 12:34:59','updated_at' => '2021-02-21 12:34:59','deleted_at' => NULL,'slug' => 'medical-1613910899'),
  array('id' => '1103','dossier_medical_id' => '709','description' => 'AVCI en juillet 2020 sans séquelles neurologiques','date' => NULL,'type' => 'Médical','created_at' => '2021-02-21 12:35:21','updated_at' => '2021-02-21 12:35:21','deleted_at' => NULL,'slug' => 'medical-1613910921'),
  array('id' => '1104','dossier_medical_id' => '709','description' => 'Laparotomie en 2017 pour péritonite aigue par perforation gastrique','date' => NULL,'type' => 'Chirugical','created_at' => '2021-02-21 12:36:35','updated_at' => '2021-02-21 12:36:35','deleted_at' => NULL,'slug' => 'chirugical-1613910995'),
  array('id' => '1105','dossier_medical_id' => '710','description' => 'HTA connu sous Amlodipine 5mg/j','date' => NULL,'type' => 'Médical','created_at' => '2021-02-21 13:37:55','updated_at' => '2021-02-21 13:37:55','deleted_at' => NULL,'slug' => 'medical-1613914675'),
  array('id' => '1106','dossier_medical_id' => '710','description' => 'Lombalgie chronique d\'allure arthrosique PEC avec AINS/antalgique, kinésithérapie','date' => NULL,'type' => 'Médical','created_at' => '2021-02-21 13:39:35','updated_at' => '2021-02-21 13:39:35','deleted_at' => NULL,'slug' => 'medical-1613914775'),
  array('id' => '1107','dossier_medical_id' => '710','description' => 'Cervicalgie d\'allure mécanique PEC par le port de collier cervical et kinésithérapie','date' => NULL,'type' => 'Médical','created_at' => '2021-02-21 13:41:42','updated_at' => '2021-02-21 13:41:42','deleted_at' => NULL,'slug' => 'medical-1613914902'),
  array('id' => '1108','dossier_medical_id' => '710','description' => 'G5P4014, ménopausée, dernier FCV il y a 2 ans, mammographie jamais réalisée','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2021-02-21 13:42:51','updated_at' => '2021-02-21 13:42:51','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1613914971'),
  array('id' => '1109','dossier_medical_id' => '710','description' => 'Césarienne indiquée pour Footling Breech en 2002','date' => NULL,'type' => 'Chirugical','created_at' => '2021-02-21 13:45:28','updated_at' => '2021-02-21 13:45:28','deleted_at' => NULL,'slug' => 'chirugical-1613915128'),
  array('id' => '1110','dossier_medical_id' => '711','description' => 'Epigastralgie rythmée par la prise d’AINS','date' => NULL,'type' => 'Médical','created_at' => '2021-02-21 16:34:33','updated_at' => '2021-02-21 16:34:33','deleted_at' => NULL,'slug' => 'medical-1613925273'),
  array('id' => '1111','dossier_medical_id' => '712','description' => 'petit frère DCD d’un cancer du foie','date' => NULL,'type' => 'Familial','created_at' => '2021-02-21 18:35:30','updated_at' => '2021-02-21 18:35:30','deleted_at' => NULL,'slug' => 'familial-1613932530'),
  array('id' => '1112','dossier_medical_id' => '713','description' => '-	gonalgie droite chronique survenant lors de la mobilisation, cotée à 4/10, post accident de la voie publique en 2017 entrainant une luxation du genou droit, dont la réduction avait été faite et compliquée de déchirure ligamentaire (objectivé au scanner et IRM du genou)','date' => '2017-01-01','type' => 'Médical','created_at' => '2021-02-21 18:59:49','updated_at' => '2021-02-21 18:59:49','deleted_at' => NULL,'slug' => 'medical-1613933989'),
  array('id' => '1113','dossier_medical_id' => '713','description' => 'patiente myope depuis 20 ans (porteuse de verres de correction)','date' => '2001-01-01','type' => 'Médical','created_at' => '2021-02-21 19:00:27','updated_at' => '2021-02-21 19:00:27','deleted_at' => NULL,'slug' => 'medical-1613934027'),
  array('id' => '1114','dossier_medical_id' => '713','description' => 'notion de gastrite chronique','date' => NULL,'type' => 'Médical','created_at' => '2021-02-21 19:00:44','updated_at' => '2021-02-21 19:00:44','deleted_at' => NULL,'slug' => 'medical-1613934044'),
  array('id' => '1115','dossier_medical_id' => '716','description' => 'Epigastralgies sous Maalox','date' => '2019-12-30','type' => 'Médical','created_at' => '2021-02-23 12:56:38','updated_at' => '2021-02-23 12:56:38','deleted_at' => NULL,'slug' => 'medical-1614084998'),
  array('id' => '1116','dossier_medical_id' => '716','description' => 'G1P1001 
DDR: 17/02/2021
Cycle régulier de 28-30 jours, durée: 5jours, flux moyen','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2021-02-23 12:58:02','updated_at' => '2021-02-23 12:58:02','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1614085082'),
  array('id' => '1117','dossier_medical_id' => '710','description' => 'HTA sous traitement ( nom inconnu)','date' => NULL,'type' => 'Médical','created_at' => '2021-02-24 00:04:51','updated_at' => '2021-02-24 00:04:51','deleted_at' => NULL,'slug' => 'medical-1614125091'),
  array('id' => '1118','dossier_medical_id' => '696','description' => 'HTA non traité','date' => '2020-02-01','type' => 'Médical','created_at' => '2021-02-24 01:01:42','updated_at' => '2021-02-24 01:01:42','deleted_at' => NULL,'slug' => 'medical-1614128502'),
  array('id' => '1119','dossier_medical_id' => '597','description' => 'Hernie discale ( ne se souvient plus du traitement)','date' => NULL,'type' => 'Chirugical','created_at' => '2021-02-24 01:25:13','updated_at' => '2021-02-24 01:25:13','deleted_at' => NULL,'slug' => 'chirugical-1614129913'),
  array('id' => '1120','dossier_medical_id' => '558','description' => 'Myopie depuis plusieurs années','date' => NULL,'type' => 'Médical','created_at' => '2021-02-24 01:41:32','updated_at' => '2021-02-24 01:41:32','deleted_at' => NULL,'slug' => 'medical-1614130892'),
  array('id' => '1121','dossier_medical_id' => '558','description' => 'Epigastralgies, sous Hydroxyde d\'alluminium','date' => NULL,'type' => 'Médical','created_at' => '2021-02-24 01:42:13','updated_at' => '2021-02-24 01:42:13','deleted_at' => NULL,'slug' => 'medical-1614130933'),
  array('id' => '1122','dossier_medical_id' => '558','description' => 'G4P222 (2 fausses couches à cause d\'une béance du col)','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2021-02-24 01:43:07','updated_at' => '2021-02-24 01:43:07','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1614130987'),
  array('id' => '1123','dossier_medical_id' => '558','description' => 'amygdalectomie dans l\'enfance','date' => NULL,'type' => 'Chirugical','created_at' => '2021-02-24 01:43:31','updated_at' => '2021-02-24 01:43:31','deleted_at' => NULL,'slug' => 'chirugical-1614131011'),
  array('id' => '1124','dossier_medical_id' => '558','description' => 'adénofibromectomie du sein gauche','date' => NULL,'type' => 'Chirugical','created_at' => '2021-02-24 01:43:52','updated_at' => '2021-02-24 01:43:52','deleted_at' => NULL,'slug' => 'chirugical-1614131032'),
  array('id' => '1125','dossier_medical_id' => '579','description' => 'pose d\'un implant contraceptif: jadelle il y a 5 ans et l\'a retiré en janvier 2019','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2021-02-24 02:35:10','updated_at' => '2021-02-24 02:35:10','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1614134110'),
  array('id' => '1126','dossier_medical_id' => '719','description' => 'diabète sucré','date' => '2019-11-04','type' => 'Médical','created_at' => '2021-02-24 09:15:59','updated_at' => '2021-02-24 09:15:59','deleted_at' => NULL,'slug' => 'medical-1614158159'),
  array('id' => '1127','dossier_medical_id' => '719','description' => 'hypertension artérielle','date' => '2018-10-10','type' => 'Médical','created_at' => '2021-02-24 09:18:46','updated_at' => '2021-02-24 09:18:46','deleted_at' => NULL,'slug' => 'medical-1614158326'),
  array('id' => '1128','dossier_medical_id' => '719','description' => 'RAS','date' => NULL,'type' => 'Chirugical','created_at' => '2021-02-24 09:19:09','updated_at' => '2021-02-24 09:19:09','deleted_at' => NULL,'slug' => 'chirugical-1614158349'),
  array('id' => '1129','dossier_medical_id' => '719','description' => 'RAS','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2021-02-24 09:19:37','updated_at' => '2021-02-24 09:19:37','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1614158377'),
  array('id' => '1130','dossier_medical_id' => '720','description' => 'HTA','date' => '2017-02-02','type' => 'Médical','created_at' => '2021-02-25 06:49:48','updated_at' => '2021-02-25 06:49:48','deleted_at' => NULL,'slug' => 'medical-1614235788'),
  array('id' => '1131','dossier_medical_id' => '720','description' => 'Ulcère gastrique','date' => '2017-02-25','type' => 'Médical','created_at' => '2021-02-25 06:50:50','updated_at' => '2021-02-25 06:50:50','deleted_at' => NULL,'slug' => 'medical-1614235850'),
  array('id' => '1132','dossier_medical_id' => '720','description' => 'Constipation','date' => '2019-01-01','type' => 'Médical','created_at' => '2021-02-25 06:59:38','updated_at' => '2021-02-25 06:59:38','deleted_at' => NULL,'slug' => 'medical-1614236378'),
  array('id' => '1133','dossier_medical_id' => '720','description' => 'Ras','date' => NULL,'type' => 'Chirugical','created_at' => '2021-02-25 07:16:51','updated_at' => '2021-02-25 07:16:51','deleted_at' => NULL,'slug' => 'chirugical-1614237411'),
  array('id' => '1134','dossier_medical_id' => '720','description' => 'Ras','date' => NULL,'type' => 'Familial','created_at' => '2021-02-25 07:17:36','updated_at' => '2021-02-25 07:17:36','deleted_at' => NULL,'slug' => 'familial-1614237456'),
  array('id' => '1135','dossier_medical_id' => '720','description' => 'Ras','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2021-02-25 07:18:02','updated_at' => '2021-02-25 07:18:02','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1614237482'),
  array('id' => '1136','dossier_medical_id' => '721','description' => 'Diabète','date' => NULL,'type' => 'Familial','created_at' => '2021-02-26 13:36:16','updated_at' => '2021-02-26 13:36:16','deleted_at' => NULL,'slug' => 'familial-1614346576'),
  array('id' => '1137','dossier_medical_id' => '537','description' => 'intervention chirurgicale indiquée pour hématome sous dural droit le 15/02/2021','date' => NULL,'type' => 'Chirugical','created_at' => '2021-03-02 14:57:05','updated_at' => '2021-03-02 14:57:05','deleted_at' => NULL,'slug' => 'chirugical-1614697025'),
  array('id' => '1138','dossier_medical_id' => '537','description' => 'HTA connue sous ramipril 2.5mg/jr','date' => NULL,'type' => 'Médical','created_at' => '2021-03-02 15:03:43','updated_at' => '2021-03-02 15:09:49','deleted_at' => '2021-03-02 15:09:49','slug' => 'medical-1614697423'),
  array('id' => '1139','dossier_medical_id' => '728','description' => 'Gastrite','date' => NULL,'type' => 'Médical','created_at' => '2021-03-04 22:04:23','updated_at' => '2021-03-04 22:04:23','deleted_at' => NULL,'slug' => 'medical-1614895463'),
  array('id' => '1140','dossier_medical_id' => '728','description' => 'mastodynie ; troubles menstruels , ménopause précoce','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2021-03-04 22:05:16','updated_at' => '2021-03-04 22:05:16','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1614895516'),
  array('id' => '1141','dossier_medical_id' => '732','description' => 'RAS','date' => NULL,'type' => 'Médical','created_at' => '2021-03-06 10:08:15','updated_at' => '2021-03-06 10:08:15','deleted_at' => NULL,'slug' => 'medical-1615025295'),
  array('id' => '1142','dossier_medical_id' => '732','description' => 'abblation de ptérigion','date' => NULL,'type' => 'Chirugical','created_at' => '2021-03-06 10:08:57','updated_at' => '2021-03-06 10:08:57','deleted_at' => NULL,'slug' => 'chirugical-1615025337'),
  array('id' => '1143','dossier_medical_id' => '732','description' => '27/02/2021','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2021-03-06 10:24:58','updated_at' => '2021-03-06 10:24:58','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1615026298'),
  array('id' => '1144','dossier_medical_id' => '732','description' => 'RAS','date' => NULL,'type' => 'Familial','created_at' => '2021-03-06 10:25:54','updated_at' => '2021-03-06 10:25:54','deleted_at' => NULL,'slug' => 'familial-1615026354'),
  array('id' => '1145','dossier_medical_id' => '732','description' => 'RAS','date' => NULL,'type' => 'Familial','created_at' => '2021-03-06 10:31:22','updated_at' => '2021-03-06 11:06:40','deleted_at' => '2021-03-06 11:06:40','slug' => 'familial-1615026682'),
  array('id' => '1146','dossier_medical_id' => '405','description' => 'Pas de HTA connu ni DT2 connu','date' => NULL,'type' => 'Médical','created_at' => '2021-03-09 14:40:08','updated_at' => '2021-03-09 14:40:08','deleted_at' => NULL,'slug' => 'medical-1615300808'),
  array('id' => '1147','dossier_medical_id' => '405','description' => 'jamais subit une opération chirurgical','date' => NULL,'type' => 'Chirugical','created_at' => '2021-03-09 14:41:31','updated_at' => '2021-03-09 14:41:31','deleted_at' => NULL,'slug' => 'chirugical-1615300891'),
  array('id' => '1148','dossier_medical_id' => '405','description' => 'père de 2 enfants donc le dernier a 8 ans tous en bonne santé apparente','date' => NULL,'type' => 'Familial','created_at' => '2021-03-09 14:42:50','updated_at' => '2021-03-09 14:42:50','deleted_at' => NULL,'slug' => 'familial-1615300970'),
  array('id' => '1149','dossier_medical_id' => '739','description' => 'Hypertension artérielle','date' => '2000-01-01','type' => 'Médical','created_at' => '2021-03-09 14:52:04','updated_at' => '2021-03-09 14:52:04','deleted_at' => NULL,'slug' => 'medical-1615301524'),
  array('id' => '1150','dossier_medical_id' => '736','description' => 'sans particularité','date' => NULL,'type' => 'Médical','created_at' => '2021-03-10 11:51:06','updated_at' => '2021-03-10 11:51:06','deleted_at' => NULL,'slug' => 'medical-1615377066'),
  array('id' => '1151','dossier_medical_id' => '736','description' => 'Sans particularité','date' => NULL,'type' => 'Chirugical','created_at' => '2021-03-10 11:52:05','updated_at' => '2021-03-10 11:52:05','deleted_at' => NULL,'slug' => 'chirugical-1615377125'),
  array('id' => '1152','dossier_medical_id' => '736','description' => 'chiffres glycémiques élevés','date' => NULL,'type' => 'Médical','created_at' => '2021-03-10 11:52:52','updated_at' => '2021-03-10 11:52:52','deleted_at' => NULL,'slug' => 'medical-1615377172'),
  array('id' => '1153','dossier_medical_id' => '736','description' => 'Sans paricularité','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2021-03-10 11:53:24','updated_at' => '2021-03-11 21:39:47','deleted_at' => '2021-03-11 21:39:47','slug' => 'gyneco-obstetrique-1615377204'),
  array('id' => '1154','dossier_medical_id' => '736','description' => 'DDR : 19 Février 2021

Ménarche 11 ans

Premier coit 15 ans 
cycle menstruel régulier
Pas de dysménorrhées','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2021-03-10 11:56:45','updated_at' => '2021-03-11 21:53:30','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1615377405'),
  array('id' => '1155','dossier_medical_id' => '740','description' => 'gastrite chronique','date' => NULL,'type' => 'Médical','created_at' => '2021-03-10 16:32:28','updated_at' => '2021-03-10 16:32:28','deleted_at' => NULL,'slug' => 'medical-1615393948'),
  array('id' => '1156','dossier_medical_id' => '740','description' => 'RAS','date' => NULL,'type' => 'Chirugical','created_at' => '2021-03-10 16:33:07','updated_at' => '2021-03-10 16:33:07','deleted_at' => NULL,'slug' => 'chirugical-1615393987'),
  array('id' => '1157','dossier_medical_id' => '740','description' => 'G4P4004','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2021-03-10 16:33:42','updated_at' => '2021-03-10 16:33:42','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1615394022'),
  array('id' => '1158','dossier_medical_id' => '740','description' => 'HTA chez le père','date' => NULL,'type' => 'Familial','created_at' => '2021-03-10 16:34:13','updated_at' => '2021-03-10 16:34:13','deleted_at' => NULL,'slug' => 'familial-1615394053'),
  array('id' => '1159','dossier_medical_id' => '24','description' => 'G2P2002, ménopausée, mammographie et FCV en 2017','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2021-03-11 14:13:13','updated_at' => '2021-03-11 14:13:13','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1615471993'),
  array('id' => '1160','dossier_medical_id' => '24','description' => 'laparotomie indiqué pour kyste ovarien ; hystérectomie en 2017 en Italie','date' => NULL,'type' => 'Chirugical','created_at' => '2021-03-11 14:14:03','updated_at' => '2021-03-11 14:14:03','deleted_at' => NULL,'slug' => 'chirugical-1615472043'),
  array('id' => '1161','dossier_medical_id' => '742','description' => 'DT2 dépuis 16ans sous metformine 1000mg 1cp*3/jr et sous daonil 5mg 1/2cp/jr','date' => NULL,'type' => 'Médical','created_at' => '2021-03-13 12:57:10','updated_at' => '2021-03-13 12:57:10','deleted_at' => NULL,'slug' => 'medical-1615640230'),
  array('id' => '1162','dossier_medical_id' => '742','description' => 'laparotomie en 2018 d\'indication inconnu','date' => NULL,'type' => 'Chirugical','created_at' => '2021-03-13 12:59:01','updated_at' => '2021-03-13 12:59:01','deleted_at' => NULL,'slug' => 'chirugical-1615640341'),
  array('id' => '1163','dossier_medical_id' => '742','description' => 'G4P4  Ménopausé','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2021-03-13 13:01:09','updated_at' => '2021-03-13 13:01:09','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1615640469'),
  array('id' => '1164','dossier_medical_id' => '640','description' => 'PARENTS hypertendus et diabétiques','date' => NULL,'type' => 'Familial','created_at' => '2021-03-13 17:48:23','updated_at' => '2021-03-13 17:48:23','deleted_at' => NULL,'slug' => 'familial-1615657703'),
  array('id' => '1165','dossier_medical_id' => '640','description' => 'Discopathie dégénérative(L5S1) depuis 05 ans suivis par Dr BELLO (neurochirurgien) traitement initié Renerve p, Trabar, doliprane','date' => NULL,'type' => 'Médical','created_at' => '2021-03-13 17:48:58','updated_at' => '2021-03-13 17:48:58','deleted_at' => NULL,'slug' => 'medical-1615657738'),
  array('id' => '1166','dossier_medical_id' => '640','description' => 'Fissure anal il Ya 10 ans suite à des constipations chronique','date' => NULL,'type' => 'Médical','created_at' => '2021-03-13 17:49:15','updated_at' => '2021-03-13 17:49:15','deleted_at' => NULL,'slug' => 'medical-1615657755'),
  array('id' => '1167','dossier_medical_id' => '640','description' => 'Hypertendu connue depuis 05 ans sous Fludex LP/1cp par jour compliant au traitement','date' => NULL,'type' => 'Médical','created_at' => '2021-03-13 17:49:31','updated_at' => '2021-03-13 17:49:31','deleted_at' => NULL,'slug' => 'medical-1615657771'),
  array('id' => '1168','dossier_medical_id' => '640','description' => 'Diabétique connu depuis 17 ans sous glucophage 1g : 1g/12h compliant au traitement','date' => NULL,'type' => 'Médical','created_at' => '2021-03-13 17:49:47','updated_at' => '2021-03-13 17:49:47','deleted_at' => NULL,'slug' => 'medical-1615657787'),
  array('id' => '1169','dossier_medical_id' => '734','description' => 'Hypertendue depuis 2012 découvert lors d\'une crise sous traitement au départ (inconnue), notion d\'arrêt du traitement il y a 1 an et demi (par une infirmière)','date' => NULL,'type' => 'Médical','created_at' => '2021-03-14 09:16:22','updated_at' => '2021-03-14 09:16:22','deleted_at' => NULL,'slug' => 'medical-1615713382'),
  array('id' => '1170','dossier_medical_id' => '734','description' => '- opérée en février 2017 pour fracture de l\'avant bras post traumatique, ostéosynthèse faite à l\'aide d’objets métalliques sous anesthésie générale ; en octobre 2018 à été effectué l\'ablation du matériel métallique d\'ostéosynthèse,  sous anesthésie générale','date' => NULL,'type' => 'Chirugical','created_at' => '2021-03-14 09:20:41','updated_at' => '2021-03-14 11:12:07','deleted_at' => NULL,'slug' => 'chirugical-1615713641'),
  array('id' => '1171','dossier_medical_id' => '734','description' => 'Notion d’épigastralgie chronique depuis plusieurs années','date' => NULL,'type' => 'Médical','created_at' => '2021-03-14 09:22:27','updated_at' => '2021-03-14 09:22:27','deleted_at' => NULL,'slug' => 'medical-1615713747'),
  array('id' => '1172','dossier_medical_id' => '734','description' => 'G10P8027 (2 fousses couches; 1 enfant décédé à l\'âge de 6 ans)','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2021-03-14 09:23:23','updated_at' => '2021-03-14 09:23:23','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1615713803'),
  array('id' => '1173','dossier_medical_id' => '747','description' => 'G3P2012','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2021-03-18 07:41:59','updated_at' => '2021-03-18 07:41:59','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1616053319'),
  array('id' => '1174','dossier_medical_id' => '747','description' => 'pas de pathologie chronique connue','date' => NULL,'type' => 'Médical','created_at' => '2021-03-18 07:44:54','updated_at' => '2021-03-18 07:44:54','deleted_at' => NULL,'slug' => 'medical-1616053494'),
  array('id' => '1175','dossier_medical_id' => '747','description' => 'RAS','date' => NULL,'type' => 'Chirugical','created_at' => '2021-03-18 07:45:27','updated_at' => '2021-03-18 07:45:27','deleted_at' => NULL,'slug' => 'chirugical-1616053527'),
  array('id' => '1176','dossier_medical_id' => '752','description' => 'Goutte depuis 2012, sous Colchimax associé à du diclofenac en cas de crise','date' => '2012-01-01','type' => 'Médical','created_at' => '2021-03-19 13:48:34','updated_at' => '2021-03-19 13:48:34','deleted_at' => NULL,'slug' => 'medical-1616161714'),
  array('id' => '1177','dossier_medical_id' => '754','description' => 'HTA sous Bipreterax 10/2.5mg','date' => '2016-01-01','type' => 'Médical','created_at' => '2021-03-20 22:09:34','updated_at' => '2021-03-20 22:09:34','deleted_at' => NULL,'slug' => 'medical-1616278174'),
  array('id' => '1178','dossier_medical_id' => '754','description' => 'Diabétique de type 2 insulinorequérent sous mixtard et glucophage','date' => '2016-01-01','type' => 'Médical','created_at' => '2021-03-20 22:10:36','updated_at' => '2021-03-20 22:10:36','deleted_at' => NULL,'slug' => 'medical-1616278236'),
  array('id' => '1179','dossier_medical_id' => '754','description' => 'Gastrite chronique','date' => NULL,'type' => 'Médical','created_at' => '2021-03-20 22:11:04','updated_at' => '2021-03-20 22:11:04','deleted_at' => NULL,'slug' => 'medical-1616278264'),
  array('id' => '1180','dossier_medical_id' => '754','description' => 'Fracture os de l\'avant bras droit opérée','date' => '1996-01-01','type' => 'Chirugical','created_at' => '2021-03-20 22:13:57','updated_at' => '2021-03-20 22:13:57','deleted_at' => NULL,'slug' => 'chirugical-1616278437'),
  array('id' => '1181','dossier_medical_id' => '760','description' => 'Diabète de type 2, sous ADO','date' => '2020-03-01','type' => 'Médical','created_at' => '2021-03-25 05:45:40','updated_at' => '2021-03-25 05:45:40','deleted_at' => NULL,'slug' => 'medical-1616651140'),
  array('id' => '1182','dossier_medical_id' => '682','description' => 'G1P001; accouchement normal par voie basse d\'un enfant de sexe masculin âgé de 4 ans aujourd\'hui
DDR: 26/02/2021;','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2021-03-25 08:38:04','updated_at' => '2021-03-25 08:38:04','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1616661484'),
  array('id' => '1183','dossier_medical_id' => '761','description' => 'Père diabétique et hypertendu','date' => NULL,'type' => 'Familial','created_at' => '2021-03-26 05:13:30','updated_at' => '2021-03-26 05:13:30','deleted_at' => NULL,'slug' => 'familial-1616735610'),
  array('id' => '1184','dossier_medical_id' => '762','description' => 'Oncles diabétique et HTA
Grand père diabétique décédé','date' => NULL,'type' => 'Familial','created_at' => '2021-03-26 05:27:29','updated_at' => '2021-03-26 05:27:29','deleted_at' => NULL,'slug' => 'familial-1616736449'),
  array('id' => '1185','dossier_medical_id' => '460','description' => 'lombalgie chronique ( pincement vertébrale à la radiographie du rachis lombaire: non disponible), prit en charge par kinésithérapie et antalgiques. Notion de port de ceinture lombaire.','date' => '2011-01-01','type' => 'Médical','created_at' => '2021-03-27 12:34:22','updated_at' => '2021-03-27 12:35:18','deleted_at' => NULL,'slug' => 'medical-1616848462'),
  array('id' => '1186','dossier_medical_id' => '460','description' => 'G0P0; DDR: il y a plus de 3 mois, 
notion de désir de grossesse ayant motivé des consultations','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2021-03-27 12:37:19','updated_at' => '2021-03-27 12:37:19','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1616848639'),
  array('id' => '1187','dossier_medical_id' => '763','description' => 'HTA connu sous Amlor 1cp/jr depuis environ 5 ans','date' => NULL,'type' => 'Médical','created_at' => '2021-03-28 03:16:37','updated_at' => '2021-03-28 03:16:37','deleted_at' => NULL,'slug' => 'medical-1616904997'),
  array('id' => '1188','dossier_medical_id' => '763','description' => 'jamais subit une opération chirurgicale','date' => NULL,'type' => 'Chirugical','created_at' => '2021-03-28 03:18:43','updated_at' => '2021-03-28 03:18:43','deleted_at' => NULL,'slug' => 'chirugical-1616905123'),
  array('id' => '1189','dossier_medical_id' => '763','description' => 'G6P6006   jamais fait de mammographie ni de FCV','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2021-03-28 03:20:29','updated_at' => '2021-03-28 03:20:29','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1616905229'),
  array('id' => '1190','dossier_medical_id' => '764','description' => 'jamais été opéré','date' => NULL,'type' => 'Chirugical','created_at' => '2021-03-28 05:29:25','updated_at' => '2021-03-28 05:29:25','deleted_at' => NULL,'slug' => 'chirugical-1616912965'),
  array('id' => '1191','dossier_medical_id' => '764','description' => 'Obésité sévère à 36.78kg/m2','date' => NULL,'type' => 'Médical','created_at' => '2021-03-28 05:31:48','updated_at' => '2021-03-28 05:31:48','deleted_at' => NULL,'slug' => 'medical-1616913108'),
  array('id' => '1192','dossier_medical_id' => '767','description' => 'Obstétricaux 
G1: il Ya 10 ans  ANAT un nné de 3200g de sexe féminin 
G2 : Ya 05 ans  ANAT un nné de 3000g de sexe féminin
GActuel : 04  CPN effectués à l’hôpital général de Yaoundé  
Gynécologique 
Menarche 14 ans    cycle de 28 jours régulier    règle de 3 à  5  jours 
N’a jamais effectué de FCV, et mammographie','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2021-03-29 13:38:19','updated_at' => '2021-03-29 13:38:19','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1617028699'),
  array('id' => '1193','dossier_medical_id' => '482','description' => 'HTA : non
DT2 : non
Notion de cancer de prostate chez 2 oncles ;','date' => NULL,'type' => 'Familial','created_at' => '2021-03-30 18:11:06','updated_at' => '2021-03-30 18:11:06','deleted_at' => NULL,'slug' => 'familial-1617131466'),
  array('id' => '1194','dossier_medical_id' => '482','description' => 'Notion d’arthrose du genou gauche ayant nécessité 2 infiltration aux corticoïdes en 2019,  actuellement pris en charge il y a quelques mois par  anti-flammatoire (acéclofénac 100mg)  et dynapar spray','date' => NULL,'type' => 'Médical','created_at' => '2021-03-30 18:11:40','updated_at' => '2021-03-30 18:11:40','deleted_at' => NULL,'slug' => 'medical-1617131500'),
  array('id' => '1195','dossier_medical_id' => '482','description' => 'Varices depuis plus de 5 ans sous daflon et attitudes préventive (surélévation des pieds et bas de contentions','date' => '2016-01-01','type' => 'Médical','created_at' => '2021-03-30 18:12:17','updated_at' => '2021-03-30 18:12:17','deleted_at' => NULL,'slug' => 'medical-1617131537'),
  array('id' => '1196','dossier_medical_id' => '482','description' => 'OMI chronique depuis 5 ans environ','date' => '2016-01-01','type' => 'Médical','created_at' => '2021-03-30 18:12:37','updated_at' => '2021-03-30 18:12:37','deleted_at' => NULL,'slug' => 'medical-1617131557'),
  array('id' => '1197','dossier_medical_id' => '482','description' => 'Notion d’épigastralgie chronique (à type d’ulcère duodénal et prit en charge il y a 8 ans)','date' => '2013-01-01','type' => 'Médical','created_at' => '2021-03-30 18:13:31','updated_at' => '2021-03-30 18:13:31','deleted_at' => NULL,'slug' => 'medical-1617131611'),
  array('id' => '1198','dossier_medical_id' => '482','description' => 'Appendicectomie à l’âge de 13 ans','date' => NULL,'type' => 'Chirugical','created_at' => '2021-03-30 18:13:44','updated_at' => '2021-03-30 18:13:44','deleted_at' => NULL,'slug' => 'chirugical-1617131624'),
  array('id' => '1199','dossier_medical_id' => '482','description' => 'Césarienne en 2001 indiquée pour travail stationnaire/macrosomie foetale','date' => '2001-01-01','type' => 'Chirugical','created_at' => '2021-03-30 18:14:06','updated_at' => '2021-03-30 18:14:06','deleted_at' => NULL,'slug' => 'chirugical-1617131646'),
  array('id' => '1200','dossier_medical_id' => '482','description' => 'HTA : non
DT2 : non
Notion de cancer de prostate chez 2 oncles ;','date' => NULL,'type' => 'Familial','created_at' => '2021-03-30 18:14:34','updated_at' => '2021-03-30 18:14:34','deleted_at' => NULL,'slug' => 'familial-1617131674'),
  array('id' => '1201','dossier_medical_id' => '776','description' => 'RAS','date' => NULL,'type' => 'Médical','created_at' => '2021-03-31 15:23:34','updated_at' => '2021-03-31 15:23:34','deleted_at' => NULL,'slug' => 'medical-1617207814'),
  array('id' => '1202','dossier_medical_id' => '776','description' => 'RAS','date' => NULL,'type' => 'Chirugical','created_at' => '2021-03-31 15:23:49','updated_at' => '2021-03-31 15:23:49','deleted_at' => NULL,'slug' => 'chirugical-1617207829'),
  array('id' => '1203','dossier_medical_id' => '776','description' => 'RAS','date' => NULL,'type' => 'Familial','created_at' => '2021-03-31 16:05:04','updated_at' => '2021-03-31 16:05:04','deleted_at' => NULL,'slug' => 'familial-1617210304'),
  array('id' => '1204','dossier_medical_id' => '780','description' => 'Hypertension','date' => '2011-04-02','type' => 'Médical','created_at' => '2021-04-01 23:02:40','updated_at' => '2021-04-01 23:02:40','deleted_at' => NULL,'slug' => 'medical-1617321760'),
  array('id' => '1205','dossier_medical_id' => '722','description' => 'pas de maladie chronique connue','date' => NULL,'type' => 'Médical','created_at' => '2021-04-02 01:38:10','updated_at' => '2021-04-02 01:38:10','deleted_at' => NULL,'slug' => 'medical-1617331090'),
  array('id' => '1206','dossier_medical_id' => '722','description' => 'jamais été opéré','date' => NULL,'type' => 'Chirugical','created_at' => '2021-04-02 01:38:41','updated_at' => '2021-04-02 01:38:41','deleted_at' => NULL,'slug' => 'chirugical-1617331121'),
  array('id' => '1207','dossier_medical_id' => '722','description' => 'G5P5005  ménopausé mammographie et FCV jamais réalisé','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2021-04-02 01:40:05','updated_at' => '2021-04-02 01:40:05','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1617331205'),
  array('id' => '1208','dossier_medical_id' => '766','description' => 'HTA et DT2 connue il y\'a environ 10 ans sous metformine 850mg 1cp*2/jr, diamicron 60mg 1cp/jr, aspirine cardio 1cp/jr, coversyl 5mg 1cp/jr, bisoprolol 5mg 1/2cp/jr, rosuka\'a 10mg 1cp/jr','date' => NULL,'type' => 'Médical','created_at' => '2021-04-07 04:32:16','updated_at' => '2021-04-07 05:03:58','deleted_at' => NULL,'slug' => 'medical-1617773536'),
  array('id' => '1209','dossier_medical_id' => '766','description' => 'jamais été opéré','date' => NULL,'type' => 'Chirugical','created_at' => '2021-04-07 04:32:48','updated_at' => '2021-04-07 04:32:48','deleted_at' => NULL,'slug' => 'chirugical-1617773568'),
  array('id' => '1210','dossier_medical_id' => '429','description' => 'gastrite chronique','date' => NULL,'type' => 'Médical','created_at' => '2021-04-08 10:30:39','updated_at' => '2021-04-08 10:30:39','deleted_at' => NULL,'slug' => 'medical-1617881439'),
  array('id' => '1211','dossier_medical_id' => '429','description' => 'RAS','date' => NULL,'type' => 'Chirugical','created_at' => '2021-04-08 10:30:57','updated_at' => '2021-04-08 10:30:57','deleted_at' => NULL,'slug' => 'chirugical-1617881457'),
  array('id' => '1212','dossier_medical_id' => '804','description' => 'RAS','date' => NULL,'type' => 'Médical','created_at' => '2021-04-08 12:07:58','updated_at' => '2021-04-08 12:07:58','deleted_at' => NULL,'slug' => 'medical-1617887278'),
  array('id' => '1213','dossier_medical_id' => '804','description' => 'RAS','date' => NULL,'type' => 'Chirugical','created_at' => '2021-04-08 12:08:17','updated_at' => '2021-04-08 12:08:17','deleted_at' => NULL,'slug' => 'chirugical-1617887297'),
  array('id' => '1214','dossier_medical_id' => '804','description' => 'G4P1O34  : G1: en 2004;G2 :date inconnue; G3 en 2019; G4: 2020','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2021-04-08 12:11:07','updated_at' => '2021-04-08 12:11:07','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1617887467'),
  array('id' => '1215','dossier_medical_id' => '802','description' => 'Abcès testiculaire gauche il Ya 09 mois  pour lequel il a bénéficié d’une antibiothérapie non documenté et des pansements. Il aurait fait une échographie testiculaire non documenté évolution favorable','date' => NULL,'type' => 'Médical','created_at' => '2021-04-08 12:56:52','updated_at' => '2021-04-08 12:56:52','deleted_at' => NULL,'slug' => 'medical-1617890212'),
  array('id' => '1216','dossier_medical_id' => '797','description' => 'patient hypertendu connu depuis 03 ans initialement sous loxen 20mg puis sous natrixam 1.5/10, compliant au traitement','date' => NULL,'type' => 'Médical','created_at' => '2021-04-08 13:33:47','updated_at' => '2021-04-08 13:33:47','deleted_at' => NULL,'slug' => 'medical-1617892427'),
  array('id' => '1217','dossier_medical_id' => '797','description' => 'patient suivi depuis 07 ans à l’hôpital central de Yaoundé par le neurologue Dr YEPNJIO pour des polyarthroses (névralgie cervicobrachiale bilatérale, lombosciatalgie bilatérale) sous gaben 75mg, zerodo-p','date' => NULL,'type' => 'Médical','created_at' => '2021-04-08 13:34:05','updated_at' => '2021-04-08 13:34:05','deleted_at' => NULL,'slug' => 'medical-1617892445'),
  array('id' => '1218','dossier_medical_id' => '383','description' => 'ddd','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2021-04-09 07:17:54','updated_at' => '2021-04-09 12:43:08','deleted_at' => '2021-04-09 12:43:08','slug' => 'gyneco-obstetrique-1617956274'),
  array('id' => '1219','dossier_medical_id' => '807','description' => 'céphalées chronique + cervicalgie évoluant depuis 03 ans avec notion de chute d\'une pente avec réception sur l\'hémicorps gauche','date' => '2018-01-01','type' => 'Médical','created_at' => '2021-04-09 10:59:44','updated_at' => '2021-04-09 10:59:44','deleted_at' => NULL,'slug' => 'medical-1617969584'),
  array('id' => '1220','dossier_medical_id' => '807','description' => 'HTA connue depuis 2 ans environ, non suivi.','date' => '2018-01-01','type' => 'Médical','created_at' => '2021-04-09 11:01:09','updated_at' => '2021-04-09 11:01:09','deleted_at' => NULL,'slug' => 'medical-1617969669'),
  array('id' => '1221','dossier_medical_id' => '807','description' => 'gastrite chronique: pris en char par pansement gastriques et  oméprazole','date' => NULL,'type' => 'Médical','created_at' => '2021-04-09 11:02:43','updated_at' => '2021-04-09 11:02:43','deleted_at' => NULL,'slug' => 'medical-1617969763'),
  array('id' => '1222','dossier_medical_id' => '807','description' => 'Grande sœur HTA
pas de notion de diabète, ni de cancer dans la famille','date' => NULL,'type' => 'Familial','created_at' => '2021-04-09 11:03:53','updated_at' => '2021-04-09 11:03:53','deleted_at' => NULL,'slug' => 'familial-1617969833'),
  array('id' => '1223','dossier_medical_id' => '809','description' => 'Hypertension','date' => '2016-01-01','type' => 'Médical','created_at' => '2021-04-10 06:44:50','updated_at' => '2021-04-10 06:44:50','deleted_at' => NULL,'slug' => 'medical-1618040690'),
  array('id' => '1224','dossier_medical_id' => '818','description' => 'opérée pour hernie inguinale; suite favorable','date' => '2009-01-01','type' => 'Chirugical','created_at' => '2021-04-11 08:20:09','updated_at' => '2021-04-11 08:20:09','deleted_at' => NULL,'slug' => 'chirugical-1618132809'),
  array('id' => '1225','dossier_medical_id' => '818','description' => 'père était diabétique
mère hypertendue
pas de notion de cancer dans la famille','date' => NULL,'type' => 'Familial','created_at' => '2021-04-11 08:21:30','updated_at' => '2021-04-11 08:21:30','deleted_at' => NULL,'slug' => 'familial-1618132890'),
  array('id' => '1226','dossier_medical_id' => '808','description' => 'Diabète de type II','date' => '2017-01-01','type' => 'Médical','created_at' => '2021-04-12 04:27:15','updated_at' => '2021-04-12 04:27:15','deleted_at' => NULL,'slug' => 'medical-1618205235'),
  array('id' => '1227','dossier_medical_id' => '817','description' => 'HYPERTENSION','date' => '2016-01-01','type' => 'Médical','created_at' => '2021-04-12 05:25:41','updated_at' => '2021-04-12 05:25:41','deleted_at' => NULL,'slug' => 'medical-1618208741'),
  array('id' => '1228','dossier_medical_id' => '817','description' => 'Laparotomie','date' => '2011-01-01','type' => 'Chirugical','created_at' => '2021-04-12 05:27:15','updated_at' => '2021-04-12 05:27:15','deleted_at' => NULL,'slug' => 'chirugical-1618208835'),
  array('id' => '1229','dossier_medical_id' => '817','description' => 'Menaupause','date' => '2006-01-01','type' => 'Gynéco-obstétrique','created_at' => '2021-04-12 05:29:19','updated_at' => '2021-04-12 05:29:19','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1618208959'),
  array('id' => '1230','dossier_medical_id' => '780','description' => 'Mère était HTA','date' => NULL,'type' => 'Familial','created_at' => '2021-04-12 10:05:13','updated_at' => '2021-04-12 10:05:13','deleted_at' => NULL,'slug' => 'familial-1618225513'),
  array('id' => '1231','dossier_medical_id' => '780','description' => 'Diabétique','date' => '2020-02-10','type' => 'Médical','created_at' => '2021-04-12 13:49:43','updated_at' => '2021-04-12 13:49:43','deleted_at' => NULL,'slug' => 'medical-1618238983'),
  array('id' => '1232','dossier_medical_id' => '765','description' => 'Dysménorrhée chronique pour lesquelles elle prenait de l’ibuprofène quelle aurait arrêté il Ya 02 ans aucun traitement actuel lors de la dysménorrhée','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2021-04-14 07:42:17','updated_at' => '2021-04-14 07:42:17','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1618389737'),
  array('id' => '1233','dossier_medical_id' => '827','description' => '2016 : chirurgie thoracique indiqué pour pneumothorax
216 : La méniscectomie du genou droit','date' => NULL,'type' => 'Chirugical','created_at' => '2021-04-14 10:15:03','updated_at' => '2021-04-14 10:15:03','deleted_at' => NULL,'slug' => 'chirugical-1618398903'),
  array('id' => '1234','dossier_medical_id' => '799','description' => 'épigastralgie chronique','date' => NULL,'type' => 'Médical','created_at' => '2021-04-14 15:26:56','updated_at' => '2021-04-14 15:26:56','deleted_at' => NULL,'slug' => 'medical-1618417616'),
  array('id' => '1235','dossier_medical_id' => '799','description' => 'RAS','date' => NULL,'type' => 'Chirugical','created_at' => '2021-04-14 15:27:27','updated_at' => '2021-04-14 15:27:27','deleted_at' => NULL,'slug' => 'chirugical-1618417647'),
  array('id' => '1236','dossier_medical_id' => '799','description' => 'RAS','date' => NULL,'type' => 'Chirugical','created_at' => '2021-04-14 15:27:49','updated_at' => '2021-04-14 15:27:49','deleted_at' => NULL,'slug' => 'chirugical-1618417669'),
  array('id' => '1237','dossier_medical_id' => '834','description' => 'RAS','date' => NULL,'type' => 'Médical','created_at' => '2021-04-14 20:05:49','updated_at' => '2021-04-14 20:05:49','deleted_at' => NULL,'slug' => 'medical-1618434349'),
  array('id' => '1238','dossier_medical_id' => '834','description' => 'RAS','date' => NULL,'type' => 'Chirugical','created_at' => '2021-04-14 20:06:04','updated_at' => '2021-04-14 20:06:04','deleted_at' => NULL,'slug' => 'chirugical-1618434364'),
  array('id' => '1239','dossier_medical_id' => '834','description' => 'RAS','date' => NULL,'type' => 'Chirugical','created_at' => '2021-04-14 20:06:17','updated_at' => '2021-04-14 20:06:17','deleted_at' => NULL,'slug' => 'chirugical-1618434377'),
  array('id' => '1240','dossier_medical_id' => '834','description' => 'RAS','date' => NULL,'type' => 'Familial','created_at' => '2021-04-14 20:09:31','updated_at' => '2021-04-14 20:09:31','deleted_at' => NULL,'slug' => 'familial-1618434571'),
  array('id' => '1241','dossier_medical_id' => '835','description' => 'RAS','date' => NULL,'type' => 'Médical','created_at' => '2021-04-14 21:18:43','updated_at' => '2021-04-14 21:18:43','deleted_at' => NULL,'slug' => 'medical-1618438723'),
  array('id' => '1242','dossier_medical_id' => '835','description' => 'RAS','date' => NULL,'type' => 'Chirugical','created_at' => '2021-04-14 21:18:56','updated_at' => '2021-04-14 21:18:56','deleted_at' => NULL,'slug' => 'chirugical-1618438736'),
  array('id' => '1243','dossier_medical_id' => '837','description' => 'Goutte chronique depuis 10 ans dernière crise il Ya 05 ans','date' => NULL,'type' => 'Médical','created_at' => '2021-04-15 01:51:07','updated_at' => '2021-04-15 01:51:07','deleted_at' => NULL,'slug' => 'medical-1618455067'),
  array('id' => '1244','dossier_medical_id' => '840','description' => 'Exérèse d\'une masse tumorale de la colonne vértébrale','date' => '2019-01-10','type' => 'Chirugical','created_at' => '2021-04-15 13:09:47','updated_at' => '2021-04-15 13:09:47','deleted_at' => NULL,'slug' => 'chirugical-1618495787'),
  array('id' => '1245','dossier_medical_id' => '841','description' => 'opérée de kyste ovarien droit en 2016','date' => '2016-01-01','type' => 'Chirugical','created_at' => '2021-04-15 13:55:53','updated_at' => '2021-04-15 13:55:53','deleted_at' => NULL,'slug' => 'chirugical-1618498553'),
  array('id' => '1246','dossier_medical_id' => '842','description' => 'opérée de la cataracte bilatérale il y a 1 an environ','date' => '2020-01-01','type' => 'Chirugical','created_at' => '2021-04-15 14:24:36','updated_at' => '2021-04-15 14:24:36','deleted_at' => NULL,'slug' => 'chirugical-1618500276'),
  array('id' => '1247','dossier_medical_id' => '844','description' => 'HTA connue depuis 4 mois','date' => '2020-12-01','type' => 'Médical','created_at' => '2021-04-15 14:48:51','updated_at' => '2021-04-15 14:48:51','deleted_at' => NULL,'slug' => 'medical-1618501731'),
  array('id' => '1248','dossier_medical_id' => '844','description' => 'HTA connue depuis 4 mois','date' => '2020-12-01','type' => 'Médical','created_at' => '2021-04-15 15:11:05','updated_at' => '2021-04-15 15:11:05','deleted_at' => NULL,'slug' => 'medical-1618503065'),
  array('id' => '1249','dossier_medical_id' => '844','description' => 'Diabétique connue depuis 4 mois','date' => '2020-12-01','type' => 'Médical','created_at' => '2021-04-15 15:12:01','updated_at' => '2021-04-15 15:12:01','deleted_at' => NULL,'slug' => 'medical-1618503121'),
  array('id' => '1250','dossier_medical_id' => '72','description' => 'HTA connue depuis 7 ans environ','date' => NULL,'type' => 'Médical','created_at' => '2021-04-15 16:11:39','updated_at' => '2021-04-15 16:11:39','deleted_at' => NULL,'slug' => 'medical-1618506699'),
  array('id' => '1251','dossier_medical_id' => '845','description' => 'Grands parents paternels diabétiques','date' => NULL,'type' => 'Familial','created_at' => '2021-04-15 16:26:36','updated_at' => '2021-04-15 16:26:36','deleted_at' => NULL,'slug' => 'familial-1618507596'),
  array('id' => '1252','dossier_medical_id' => '198','description' => 'MAMMOGRAPHIE: Petite calcification steato-necrotique du sein droit et petit fibroadénome calcifie du sein gauche
FCV: Résultats en attente.','date' => '2021-04-04','type' => 'Gynéco-obstétrique','created_at' => '2021-04-16 05:26:36','updated_at' => '2021-04-16 05:26:36','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1618554396'),
  array('id' => '1253','dossier_medical_id' => '806','description' => 'Fréquente admission pour le paludisme (environs 6 fois /an)','date' => NULL,'type' => 'Médical','created_at' => '2021-04-16 06:29:34','updated_at' => '2021-04-16 06:29:34','deleted_at' => NULL,'slug' => 'medical-1618558174'),
  array('id' => '1254','dossier_medical_id' => '806','description' => 'jamais opéré','date' => NULL,'type' => 'Chirugical','created_at' => '2021-04-16 06:30:02','updated_at' => '2021-04-16 06:30:02','deleted_at' => NULL,'slug' => 'chirugical-1618558202'),
  array('id' => '1255','dossier_medical_id' => '806','description' => '2e d\'une fratrie de 2 enfants tous en bonne santé apparente','date' => NULL,'type' => 'Familial','created_at' => '2021-04-16 06:31:00','updated_at' => '2021-04-16 06:31:00','deleted_at' => NULL,'slug' => 'familial-1618558260'),
  array('id' => '1256','dossier_medical_id' => '847','description' => 'Hypertension','date' => '2011-01-01','type' => 'Médical','created_at' => '2021-04-16 20:36:51','updated_at' => '2021-04-16 20:36:51','deleted_at' => NULL,'slug' => 'medical-1618609011'),
  array('id' => '1257','dossier_medical_id' => '847','description' => 'Peptic Ulcer Disease','date' => NULL,'type' => 'Médical','created_at' => '2021-04-16 20:37:27','updated_at' => '2021-04-16 20:37:27','deleted_at' => NULL,'slug' => 'medical-1618609047'),
  array('id' => '1258','dossier_medical_id' => '847','description' => 'Never been operated','date' => NULL,'type' => 'Chirugical','created_at' => '2021-04-16 20:38:26','updated_at' => '2021-04-16 20:38:26','deleted_at' => NULL,'slug' => 'chirugical-1618609106'),
  array('id' => '1259','dossier_medical_id' => '847','description' => 'Never done Mammography nor Pap smear','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2021-04-16 20:39:20','updated_at' => '2021-04-16 20:39:20','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1618609160'),
  array('id' => '1260','dossier_medical_id' => '847','description' => 'Lumbar Osteoarthritis','date' => NULL,'type' => 'Médical','created_at' => '2021-04-16 20:40:25','updated_at' => '2021-04-16 20:40:25','deleted_at' => NULL,'slug' => 'medical-1618609225'),
  array('id' => '1261','dossier_medical_id' => '850','description' => 'Gastritique depuis plusieurs années, sous Oméprazole','date' => NULL,'type' => 'Médical','created_at' => '2021-04-17 12:39:39','updated_at' => '2021-04-17 12:39:39','deleted_at' => NULL,'slug' => 'medical-1618666779'),
  array('id' => '1262','dossier_medical_id' => '854','description' => 'HTA','date' => NULL,'type' => 'Médical','created_at' => '2021-04-18 05:45:09','updated_at' => '2021-04-18 05:45:09','deleted_at' => NULL,'slug' => 'medical-1618728309'),
  array('id' => '1263','dossier_medical_id' => '851','description' => 'Hypertension','date' => '2001-01-01','type' => 'Médical','created_at' => '2021-04-18 06:30:51','updated_at' => '2021-04-18 06:30:51','deleted_at' => NULL,'slug' => 'medical-1618731051'),
  array('id' => '1264','dossier_medical_id' => '851','description' => 'Type II Diabetes Mellitus','date' => '2018-01-01','type' => 'Médical','created_at' => '2021-04-18 06:32:11','updated_at' => '2021-04-18 06:32:11','deleted_at' => NULL,'slug' => 'medical-1618731131'),
  array('id' => '1265','dossier_medical_id' => '851','description' => 'Lumbosciatica','date' => '2021-01-01','type' => 'Médical','created_at' => '2021-04-18 06:33:13','updated_at' => '2021-04-18 06:33:13','deleted_at' => NULL,'slug' => 'medical-1618731193'),
  array('id' => '1266','dossier_medical_id' => '851','description' => 'Never been operated','date' => NULL,'type' => 'Chirugical','created_at' => '2021-04-18 06:34:45','updated_at' => '2021-04-18 06:34:45','deleted_at' => NULL,'slug' => 'chirugical-1618731285'),
  array('id' => '1267','dossier_medical_id' => '851','description' => 'Menaupause, no Pap smear, no Mammography','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2021-04-18 06:35:48','updated_at' => '2021-04-18 06:35:48','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1618731348'),
  array('id' => '1268','dossier_medical_id' => '856','description' => 'Début de crise d\'asthme bronchique','date' => '1994-01-01','type' => 'Médical','created_at' => '2021-04-19 14:14:44','updated_at' => '2021-04-19 14:14:44','deleted_at' => NULL,'slug' => 'medical-1618845284'),
  array('id' => '1269','dossier_medical_id' => '814','description' => 'Consultation Opthalmologique','date' => '2021-04-05','type' => 'Médical','created_at' => '2021-04-20 05:28:13','updated_at' => '2021-04-20 05:28:13','deleted_at' => NULL,'slug' => 'medical-1618900093'),
  array('id' => '1270','dossier_medical_id' => '814','description' => 'Cephalee de tension','date' => '2021-04-12','type' => 'Médical','created_at' => '2021-04-20 05:29:43','updated_at' => '2021-04-20 05:29:43','deleted_at' => NULL,'slug' => 'medical-1618900183'),
  array('id' => '1271','dossier_medical_id' => '729','description' => 'Peptic Ulcer Disease','date' => NULL,'type' => 'Médical','created_at' => '2021-04-20 05:55:38','updated_at' => '2021-04-20 05:55:38','deleted_at' => NULL,'slug' => 'medical-1618901738'),
  array('id' => '1272','dossier_medical_id' => '729','description' => 'Neuropathy','date' => '2019-01-01','type' => 'Médical','created_at' => '2021-04-20 05:56:30','updated_at' => '2021-04-20 05:56:30','deleted_at' => NULL,'slug' => 'medical-1618901790'),
  array('id' => '1273','dossier_medical_id' => '729','description' => 'No history of trauma','date' => NULL,'type' => 'Chirugical','created_at' => '2021-04-20 05:57:02','updated_at' => '2021-04-20 05:57:02','deleted_at' => NULL,'slug' => 'chirugical-1618901822'),
  array('id' => '1274','dossier_medical_id' => '729','description' => 'Menaupause','date' => '2001-01-01','type' => 'Gynéco-obstétrique','created_at' => '2021-04-20 05:57:47','updated_at' => '2021-04-20 05:57:47','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1618901867'),
  array('id' => '1275','dossier_medical_id' => '857','description' => 'Asthme (crises dans l\'enfance, inexixtantes depuis plusieurs années)','date' => NULL,'type' => 'Médical','created_at' => '2021-04-20 06:37:06','updated_at' => '2021-04-20 06:37:06','deleted_at' => NULL,'slug' => 'medical-1618904226'),
  array('id' => '1276','dossier_medical_id' => '857','description' => 'DDR 31/03/2021','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2021-04-20 06:37:32','updated_at' => '2021-04-20 06:37:32','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1618904252'),
  array('id' => '1277','dossier_medical_id' => '816','description' => 'discopathie dégénérative à tous les niveaux avec débord discal postérieur foraménal bilatéral en L4 -L5 venant en contact avec racine L4 selon la TDM 
ARthrose facétaire L3 L4 L5','date' => '2013-01-01','type' => 'Chirugical','created_at' => '2021-04-21 05:29:37','updated_at' => '2021-04-21 05:29:37','deleted_at' => NULL,'slug' => 'chirugical-1618986577'),
  array('id' => '1278','dossier_medical_id' => '816','description' => 'Epaississement de l\'épéron interculmino-lingulaire revelé par bronchoscopie','date' => '2020-11-04','type' => 'Médical','created_at' => '2021-04-21 05:32:24','updated_at' => '2021-04-21 05:32:24','deleted_at' => NULL,'slug' => 'medical-1618986744'),
  array('id' => '1279','dossier_medical_id' => '816','description' => 'Anatomo-cytopathologie du liquide d\'aspiration bronchique ayant revélé un LBA suspect compatible avec soit une hyperplasie bronchique avec métaplasie malpigienne d\'une part , et d\'autre part une dysplasie modérée','date' => '2020-11-17','type' => 'Médical','created_at' => '2021-04-21 05:35:40','updated_at' => '2021-04-21 05:35:40','deleted_at' => NULL,'slug' => 'medical-1618986940'),
  array('id' => '1280','dossier_medical_id' => '816','description' => 'Cystoadénocarcinome mucineux avec extension locorégionale et à distance (adénomégalie et et nodule pulmonaire','date' => '2020-12-03','type' => 'Gynéco-obstétrique','created_at' => '2021-04-21 05:38:20','updated_at' => '2021-04-21 05:38:20','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1618987100'),
  array('id' => '1281','dossier_medical_id' => '839','description' => 'RAS','date' => NULL,'type' => 'Médical','created_at' => '2021-04-21 11:36:54','updated_at' => '2021-04-21 11:36:54','deleted_at' => NULL,'slug' => 'medical-1619008614'),
  array('id' => '1282','dossier_medical_id' => '839','description' => 'RAS','date' => NULL,'type' => 'Chirugical','created_at' => '2021-04-21 11:49:56','updated_at' => '2021-04-21 11:49:56','deleted_at' => NULL,'slug' => 'chirugical-1619009396'),
  array('id' => '1283','dossier_medical_id' => '839','description' => 'RAS','date' => NULL,'type' => 'Familial','created_at' => '2021-04-21 11:50:30','updated_at' => '2021-04-21 11:50:30','deleted_at' => NULL,'slug' => 'familial-1619009430'),
  array('id' => '1284','dossier_medical_id' => '861','description' => 'RAS','date' => NULL,'type' => 'Médical','created_at' => '2021-04-21 15:26:35','updated_at' => '2021-04-21 15:26:35','deleted_at' => NULL,'slug' => 'medical-1619022395'),
  array('id' => '1285','dossier_medical_id' => '861','description' => 'ras','date' => NULL,'type' => 'Chirugical','created_at' => '2021-04-21 15:26:54','updated_at' => '2021-04-21 15:26:54','deleted_at' => NULL,'slug' => 'chirugical-1619022414'),
  array('id' => '1286','dossier_medical_id' => '861','description' => 'ras','date' => NULL,'type' => 'Familial','created_at' => '2021-04-21 15:27:14','updated_at' => '2021-04-21 15:27:14','deleted_at' => NULL,'slug' => 'familial-1619022434'),
  array('id' => '1287','dossier_medical_id' => '861','description' => 'RAS','date' => NULL,'type' => 'Familial','created_at' => '2021-04-21 15:40:37','updated_at' => '2021-04-21 15:40:37','deleted_at' => NULL,'slug' => 'familial-1619023237'),
  array('id' => '1288','dossier_medical_id' => '863','description' => 'douleur du flanc droit chronique : pas d’investigation imagerique faite','date' => NULL,'type' => 'Médical','created_at' => '2021-04-22 06:08:27','updated_at' => '2021-04-22 06:08:27','deleted_at' => NULL,'slug' => 'medical-1619075307'),
  array('id' => '1289','dossier_medical_id' => '863','description' => 'Maman décédé de suite d’un cancer du sein et était diabétique
Oncle paternel diabétique','date' => NULL,'type' => 'Familial','created_at' => '2021-04-22 06:08:51','updated_at' => '2021-04-22 06:08:51','deleted_at' => NULL,'slug' => 'familial-1619075331'),
  array('id' => '1290','dossier_medical_id' => '864','description' => 'Grand-mère diabétique. 
Tante décédée d’un cancer du sein','date' => NULL,'type' => 'Familial','created_at' => '2021-04-22 06:16:59','updated_at' => '2021-04-22 06:16:59','deleted_at' => NULL,'slug' => 'familial-1619075819'),
  array('id' => '1291','dossier_medical_id' => '587','description' => 'Peptic Ulcer Disease','date' => NULL,'type' => 'Médical','created_at' => '2021-04-23 06:18:09','updated_at' => '2021-04-23 06:18:09','deleted_at' => NULL,'slug' => 'medical-1619162289'),
  array('id' => '1292','dossier_medical_id' => '286','description' => 'no HTN no DM','date' => NULL,'type' => 'Médical','created_at' => '2021-04-23 07:00:52','updated_at' => '2021-04-23 07:00:52','deleted_at' => NULL,'slug' => 'medical-1619164852'),
  array('id' => '1293','dossier_medical_id' => '286','description' => 'G7P5025, ménopausée depuis (2010), notion d’utilisation
d’implant contraceptif sur une période de 10 ans, dernier FCV normal en 2020,
mammographie normale il y a environ 10 ans','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2021-04-23 07:02:59','updated_at' => '2021-04-23 07:02:59','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1619164979'),
  array('id' => '1294','dossier_medical_id' => '286','description' => 'césarienne pour mal présentation (1989), chirurgie oculaire
bilatérale pour glaucome (2010)','date' => NULL,'type' => 'Chirugical','created_at' => '2021-04-23 07:03:56','updated_at' => '2021-04-23 07:03:56','deleted_at' => NULL,'slug' => 'chirugical-1619165036'),
  array('id' => '1295','dossier_medical_id' => '870','description' => 'fiancé diabétique','date' => NULL,'type' => 'Familial','created_at' => '2021-04-25 08:12:14','updated_at' => '2021-04-25 08:12:14','deleted_at' => NULL,'slug' => 'familial-1619341934'),
  array('id' => '1296','dossier_medical_id' => '867','description' => 'no Peptic Ulcer Disease, no hypertension, no type II Diabetes mellitus','date' => NULL,'type' => 'Médical','created_at' => '2021-04-25 11:39:58','updated_at' => '2021-04-25 11:39:58','deleted_at' => NULL,'slug' => 'medical-1619354398'),
  array('id' => '1297','dossier_medical_id' => '867','description' => 'no history of surgery','date' => NULL,'type' => 'Chirugical','created_at' => '2021-04-25 11:40:38','updated_at' => '2021-04-25 11:40:38','deleted_at' => NULL,'slug' => 'chirugical-1619354438'),
  array('id' => '1298','dossier_medical_id' => '867','description' => 'Treated of sexually transmitted infection 1 year ago.','date' => '2020-01-01','type' => 'Médical','created_at' => '2021-04-25 11:43:13','updated_at' => '2021-04-25 11:43:13','deleted_at' => NULL,'slug' => 'medical-1619354593'),
  array('id' => '1299','dossier_medical_id' => '867','description' => 'No history of trauma, no BPH','date' => NULL,'type' => 'Chirugical','created_at' => '2021-04-25 11:44:15','updated_at' => '2021-04-25 11:44:15','deleted_at' => NULL,'slug' => 'chirugical-1619354655'),
  array('id' => '1300','dossier_medical_id' => '867','description' => 'no hypertension, no diabètes, no cancer','date' => NULL,'type' => 'Familial','created_at' => '2021-04-25 11:45:17','updated_at' => '2021-04-25 11:45:17','deleted_at' => NULL,'slug' => 'familial-1619354717'),
  array('id' => '1301','dossier_medical_id' => '874','description' => 'RAS','date' => NULL,'type' => 'Médical','created_at' => '2021-04-28 10:24:26','updated_at' => '2021-04-28 10:24:26','deleted_at' => NULL,'slug' => 'medical-1619609066'),
  array('id' => '1302','dossier_medical_id' => '874','description' => 'RAS','date' => NULL,'type' => 'Chirugical','created_at' => '2021-04-28 10:24:39','updated_at' => '2021-04-28 10:24:39','deleted_at' => NULL,'slug' => 'chirugical-1619609079'),
  array('id' => '1303','dossier_medical_id' => '874','description' => 'RAS','date' => NULL,'type' => 'Familial','created_at' => '2021-04-28 10:24:53','updated_at' => '2021-04-28 10:24:53','deleted_at' => NULL,'slug' => 'familial-1619609093'),
  array('id' => '1304','dossier_medical_id' => '877','description' => '•	Patiente Hypertendue connue depuis 01 an sous aprovel 150 mg : 1cp/jr   aldaclton 50mg 1cp/jr complainte au traitement','date' => NULL,'type' => 'Médical','created_at' => '2021-04-30 05:13:21','updated_at' => '2021-04-30 05:13:21','deleted_at' => NULL,'slug' => 'medical-1619763201'),
  array('id' => '1305','dossier_medical_id' => '879','description' => 'HYPERTENSION','date' => '2018-01-01','type' => 'Médical','created_at' => '2021-04-30 13:23:34','updated_at' => '2021-04-30 13:23:34','deleted_at' => NULL,'slug' => 'medical-1619792614'),
  array('id' => '1306','dossier_medical_id' => '879','description' => 'Diabètes Mellitus','date' => '2019-01-01','type' => 'Médical','created_at' => '2021-04-30 13:24:36','updated_at' => '2021-04-30 13:24:36','deleted_at' => NULL,'slug' => 'medical-1619792676'),
  array('id' => '1307','dossier_medical_id' => '879','description' => 'Herniorraphy','date' => '2010-01-01','type' => 'Chirugical','created_at' => '2021-04-30 13:26:33','updated_at' => '2021-04-30 13:26:33','deleted_at' => NULL,'slug' => 'chirugical-1619792793'),
  array('id' => '1308','dossier_medical_id' => '879','description' => 'Normal PSA','date' => '2018-01-01','type' => 'Médical','created_at' => '2021-04-30 13:27:47','updated_at' => '2021-04-30 13:27:47','deleted_at' => NULL,'slug' => 'medical-1619792867'),
  array('id' => '1309','dossier_medical_id' => '840','description' => 'exérèse  d\'une masse  tumoral de la colonne vertébrale en 2016','date' => NULL,'type' => 'Chirugical','created_at' => '2021-04-30 18:29:00','updated_at' => '2021-04-30 18:29:00','deleted_at' => NULL,'slug' => 'chirugical-1619810940'),
  array('id' => '1310','dossier_medical_id' => '868','description' => '•	Patient diabétique connue depuis 01 ans sous MELMET LP 1000 : 1cp chaque 12h  compilant au traitement','date' => NULL,'type' => 'Médical','created_at' => '2021-05-01 16:14:15','updated_at' => '2021-05-01 16:14:15','deleted_at' => NULL,'slug' => 'medical-1619889255'),
  array('id' => '1311','dossier_medical_id' => '868','description' => '•	Patient Hypertendu  depuis 01 ans sous ramithiazide 10/25mg : 1cp/jr   compilant au traitement','date' => NULL,'type' => 'Médical','created_at' => '2021-05-01 16:14:33','updated_at' => '2021-05-01 16:14:33','deleted_at' => NULL,'slug' => 'medical-1619889273'),
  array('id' => '1312','dossier_medical_id' => '868','description' => 'Prostatectomie il Ya 11  ans','date' => NULL,'type' => 'Chirugical','created_at' => '2021-05-01 16:14:53','updated_at' => '2021-05-01 16:14:53','deleted_at' => NULL,'slug' => 'chirugical-1619889293'),
  array('id' => '1313','dossier_medical_id' => '884','description' => 'chirurgie oculaire en 2020','date' => '2020-01-01','type' => 'Chirugical','created_at' => '2021-05-02 15:00:04','updated_at' => '2021-05-02 15:00:04','deleted_at' => NULL,'slug' => 'chirugical-1619971204'),
  array('id' => '1314','dossier_medical_id' => '886','description' => 'lombalgie chronique évoluant depuis 20 ans, traitée à l\'aide d\'injection; recrudescence il y a 2-3 mois après une période de 4 mois de travaux intense','date' => NULL,'type' => 'Médical','created_at' => '2021-05-03 07:34:03','updated_at' => '2021-05-03 07:34:03','deleted_at' => NULL,'slug' => 'medical-1620030843'),
  array('id' => '1315','dossier_medical_id' => '886','description' => 'sinusite chronique depuis plus de 30 ans,','date' => NULL,'type' => 'Médical','created_at' => '2021-05-03 07:35:04','updated_at' => '2021-05-03 07:35:04','deleted_at' => NULL,'slug' => 'medical-1620030904'),
  array('id' => '1316','dossier_medical_id' => '886','description' => 'HTA connue depuis 8 ans sous Amlo - DENK 5 mg: 1/2cp par jour','date' => NULL,'type' => 'Médical','created_at' => '2021-05-03 07:36:33','updated_at' => '2021-05-03 07:36:33','deleted_at' => NULL,'slug' => 'medical-1620030993'),
  array('id' => '1317','dossier_medical_id' => '886','description' => 'Mère était diabétique, 
Oncles HTA et DT2
Cousine ayant eu un cancer du sein
grande sœur décédée de suite d\'un cancer de l\'estomac','date' => NULL,'type' => 'Familial','created_at' => '2021-05-03 07:39:55','updated_at' => '2021-05-03 07:39:55','deleted_at' => NULL,'slug' => 'familial-1620031195'),
  array('id' => '1318','dossier_medical_id' => '886','description' => 'hypermétropie + presbytie depuis 37 ans','date' => NULL,'type' => 'Médical','created_at' => '2021-05-03 07:51:41','updated_at' => '2021-05-03 07:51:41','deleted_at' => NULL,'slug' => 'medical-1620031901'),
  array('id' => '1319','dossier_medical_id' => '886','description' => 'constipation chronique sous mesures hygiéno-diététique','date' => NULL,'type' => 'Médical','created_at' => '2021-05-03 08:02:59','updated_at' => '2021-05-03 08:02:59','deleted_at' => NULL,'slug' => 'medical-1620032579'),
  array('id' => '1320','dossier_medical_id' => '888','description' => 'notion de sinute évoluant depuis 10 ans','date' => NULL,'type' => 'Médical','created_at' => '2021-05-03 15:24:52','updated_at' => '2021-05-03 15:24:52','deleted_at' => NULL,'slug' => 'medical-1620059092'),
  array('id' => '1321','dossier_medical_id' => '888','description' => 'grand frère hypertension
père était diabétique','date' => NULL,'type' => 'Familial','created_at' => '2021-05-03 16:24:26','updated_at' => '2021-05-03 16:24:26','deleted_at' => NULL,'slug' => 'familial-1620062666'),
  array('id' => '1322','dossier_medical_id' => '888','description' => 'tremblements essentiels  diagnostiqué il y a 6 mois environ','date' => '2020-11-01','type' => 'Médical','created_at' => '2021-05-03 17:28:15','updated_at' => '2021-05-03 17:28:15','deleted_at' => NULL,'slug' => 'medical-1620066495'),
  array('id' => '1323','dossier_medical_id' => '891','description' => 'amygdalectomie dans l\'enfance','date' => NULL,'type' => 'Chirugical','created_at' => '2021-05-04 14:22:00','updated_at' => '2021-05-04 14:22:00','deleted_at' => NULL,'slug' => 'chirugical-1620141720'),
  array('id' => '1324','dossier_medical_id' => '891','description' => 'père décédé était HTA ; 
grand mère décédée de suite d\'un cancer (?)
tante décédée de suite d\'un cancer du sein','date' => NULL,'type' => 'Familial','created_at' => '2021-05-04 14:24:46','updated_at' => '2021-05-04 14:24:46','deleted_at' => NULL,'slug' => 'familial-1620141886'),
  array('id' => '1325','dossier_medical_id' => '896','description' => 'grand père diabétique;','date' => NULL,'type' => 'Familial','created_at' => '2021-05-07 20:09:47','updated_at' => '2021-05-07 20:09:47','deleted_at' => NULL,'slug' => 'familial-1620421787'),
  array('id' => '1326','dossier_medical_id' => '897','description' => 'Hypertension','date' => '2011-01-01','type' => 'Médical','created_at' => '2021-05-09 19:11:50','updated_at' => '2021-05-09 19:11:50','deleted_at' => NULL,'slug' => 'medical-1620591110'),
  array('id' => '1327','dossier_medical_id' => '897','description' => 'Disc Herniation but denied surgery','date' => '2015-01-01','type' => 'Chirugical','created_at' => '2021-05-09 19:14:36','updated_at' => '2021-05-09 19:14:36','deleted_at' => NULL,'slug' => 'chirugical-1620591276'),
  array('id' => '1328','dossier_medical_id' => '897','description' => 'Menopause','date' => '2004-01-01','type' => 'Gynéco-obstétrique','created_at' => '2021-05-09 19:16:02','updated_at' => '2021-05-09 19:16:02','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1620591362'),
  array('id' => '1329','dossier_medical_id' => '897','description' => 'No Mammography, no Vaginal smear','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2021-05-09 19:18:16','updated_at' => '2021-05-09 19:18:16','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1620591496'),
  array('id' => '1330','dossier_medical_id' => '898','description' => 'patient myope; portant des verres correctrice','date' => NULL,'type' => 'Médical','created_at' => '2021-05-10 07:22:34','updated_at' => '2021-05-10 07:22:34','deleted_at' => NULL,'slug' => 'medical-1620634954'),
  array('id' => '1331','dossier_medical_id' => '900','description' => 'grand-mère HTA; pas de notion de cancer familial','date' => NULL,'type' => 'Familial','created_at' => '2021-05-10 08:42:14','updated_at' => '2021-05-10 08:42:14','deleted_at' => NULL,'slug' => 'familial-1620639734'),
  array('id' => '1332','dossier_medical_id' => '902','description' => 'Lumbosciatica','date' => '2011-01-01','type' => 'Médical','created_at' => '2021-05-10 19:05:58','updated_at' => '2021-05-10 19:30:56','deleted_at' => '2021-05-10 19:30:56','slug' => 'medical-1620677158'),
  array('id' => '1333','dossier_medical_id' => '902','description' => 'Hypertension and Diabetes','date' => '2019-01-01','type' => 'Médical','created_at' => '2021-05-10 19:06:42','updated_at' => '2021-05-10 19:06:42','deleted_at' => NULL,'slug' => 'medical-1620677202'),
  array('id' => '1334','dossier_medical_id' => '902','description' => 'Prostate pathology','date' => NULL,'type' => 'Chirugical','created_at' => '2021-05-10 19:07:15','updated_at' => '2021-05-10 19:07:15','deleted_at' => NULL,'slug' => 'chirugical-1620677235'),
  array('id' => '1335','dossier_medical_id' => '902','description' => 'Maladie Ulcero Gastro-Duodenal','date' => NULL,'type' => 'Médical','created_at' => '2021-05-10 19:08:17','updated_at' => '2021-05-10 19:26:36','deleted_at' => '2021-05-10 19:26:36','slug' => 'medical-1620677297'),
  array('id' => '1336','dossier_medical_id' => '902','description' => 'Lumbosciatica','date' => '2010-01-01','type' => 'Médical','created_at' => '2021-05-10 19:20:24','updated_at' => '2021-05-10 19:20:24','deleted_at' => NULL,'slug' => 'medical-1620678024'),
  array('id' => '1337','dossier_medical_id' => '902','description' => 'Hypertension and Diabetes','date' => '2019-01-01','type' => 'Médical','created_at' => '2021-05-10 19:21:22','updated_at' => '2021-05-10 19:26:00','deleted_at' => '2021-05-10 19:26:00','slug' => 'medical-1620678082'),
  array('id' => '1338','dossier_medical_id' => '902','description' => 'Peptic Ulcer Disease','date' => NULL,'type' => 'Médical','created_at' => '2021-05-10 19:22:07','updated_at' => '2021-05-10 19:28:57','deleted_at' => NULL,'slug' => 'medical-1620678127'),
  array('id' => '1339','dossier_medical_id' => '902','description' => 'Prostate pathology','date' => NULL,'type' => 'Chirugical','created_at' => '2021-05-10 19:22:55','updated_at' => '2021-05-10 19:25:34','deleted_at' => '2021-05-10 19:25:34','slug' => 'chirugical-1620678175'),
  array('id' => '1340','dossier_medical_id' => '895','description' => 'Hypertension artérielle','date' => '2010-05-01','type' => 'Médical','created_at' => '2021-05-11 21:17:23','updated_at' => '2021-05-11 21:17:23','deleted_at' => NULL,'slug' => 'medical-1620771443'),
  array('id' => '1341','dossier_medical_id' => '895','description' => 'Premier épisode d\'AVC','date' => '2011-05-01','type' => 'Médical','created_at' => '2021-05-11 21:18:41','updated_at' => '2021-05-11 21:18:41','deleted_at' => NULL,'slug' => 'medical-1620771521'),
  array('id' => '1342','dossier_medical_id' => '895','description' => '2èm épisode D\'AVC','date' => '2014-01-01','type' => 'Médical','created_at' => '2021-05-11 21:19:36','updated_at' => '2021-05-11 21:19:36','deleted_at' => NULL,'slug' => 'medical-1620771576'),
  array('id' => '1343','dossier_medical_id' => '895','description' => '3em épisode d\'AVC','date' => '2017-01-02','type' => 'Médical','created_at' => '2021-05-11 21:20:28','updated_at' => '2021-05-11 21:20:28','deleted_at' => NULL,'slug' => 'medical-1620771628'),
  array('id' => '1344','dossier_medical_id' => '907','description' => 'HTA, sous anti HTA ( nom inconnu) 1cp/jr le matin','date' => '2019-01-01','type' => 'Médical','created_at' => '2021-05-12 08:33:45','updated_at' => '2021-05-12 08:33:45','deleted_at' => NULL,'slug' => 'medical-1620812025'),
  array('id' => '1345','dossier_medical_id' => '907','description' => 'Gonarthrose droite','date' => '2019-09-01','type' => 'Médical','created_at' => '2021-05-12 08:34:45','updated_at' => '2021-05-12 08:34:45','deleted_at' => NULL,'slug' => 'medical-1620812085'),
  array('id' => '1346','dossier_medical_id' => '912','description' => 'DT2','date' => NULL,'type' => 'Médical','created_at' => '2021-05-13 08:58:04','updated_at' => '2021-05-13 08:58:04','deleted_at' => NULL,'slug' => 'medical-1620899884'),
  array('id' => '1347','dossier_medical_id' => '915','description' => 'RAS','date' => NULL,'type' => 'Familial','created_at' => '2021-05-14 08:18:10','updated_at' => '2021-05-14 08:18:10','deleted_at' => NULL,'slug' => 'familial-1620983890'),
  array('id' => '1348','dossier_medical_id' => '917','description' => 'Peptic Ulcer Disease','date' => '2008-01-01','type' => 'Médical','created_at' => '2021-05-14 11:44:08','updated_at' => '2021-05-14 11:44:08','deleted_at' => NULL,'slug' => 'medical-1620996248'),
  array('id' => '1349','dossier_medical_id' => '917','description' => 'Type II Diabetes mellitus','date' => '2016-01-01','type' => 'Médical','created_at' => '2021-05-14 11:45:05','updated_at' => '2021-05-14 11:45:05','deleted_at' => NULL,'slug' => 'medical-1620996305'),
  array('id' => '1350','dossier_medical_id' => '917','description' => 'Hypertension','date' => '2020-01-01','type' => 'Médical','created_at' => '2021-05-14 11:45:38','updated_at' => '2021-05-14 11:45:38','deleted_at' => NULL,'slug' => 'medical-1620996338'),
  array('id' => '1351','dossier_medical_id' => '917','description' => 'Treated for Renal colic','date' => '2018-01-01','type' => 'Médical','created_at' => '2021-05-14 11:46:31','updated_at' => '2021-05-14 11:46:31','deleted_at' => NULL,'slug' => 'medical-1620996391'),
  array('id' => '1352','dossier_medical_id' => '917','description' => 'Menopause','date' => '2000-01-01','type' => 'Gynéco-obstétrique','created_at' => '2021-05-14 11:47:07','updated_at' => '2021-05-14 11:47:07','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1620996427'),
  array('id' => '1353','dossier_medical_id' => '917','description' => 'Pap smear normal','date' => '2021-02-01','type' => 'Gynéco-obstétrique','created_at' => '2021-05-14 11:47:51','updated_at' => '2021-05-14 11:47:51','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1620996471'),
  array('id' => '1354','dossier_medical_id' => '917','description' => 'Never been operated','date' => NULL,'type' => 'Chirugical','created_at' => '2021-05-14 11:48:40','updated_at' => '2021-05-14 11:48:40','deleted_at' => NULL,'slug' => 'chirugical-1620996520'),
  array('id' => '1355','dossier_medical_id' => '916','description' => 'HTA cuunue depuis 2007','date' => '2007-01-01','type' => 'Médical','created_at' => '2021-05-14 11:53:48','updated_at' => '2021-05-14 11:53:48','deleted_at' => NULL,'slug' => 'medical-1620996828'),
  array('id' => '1356','dossier_medical_id' => '916','description' => 'rétrécissement aortique serré + insuffisance aortique','date' => '2007-09-01','type' => 'Médical','created_at' => '2021-05-14 11:55:28','updated_at' => '2021-05-14 11:55:28','deleted_at' => NULL,'slug' => 'medical-1620996928'),
  array('id' => '1357','dossier_medical_id' => '916','description' => 'discopathie dégérérative L4L5 avec lombo-zygarthrose à cet étage','date' => '2021-03-01','type' => 'Médical','created_at' => '2021-05-14 11:55:48','updated_at' => '2021-05-14 11:55:48','deleted_at' => NULL,'slug' => 'medical-1620996948'),
  array('id' => '1358','dossier_medical_id' => '916','description' => 'cervicarthrose C4C5; C5C6; C6C7','date' => '2016-01-01','type' => 'Médical','created_at' => '2021-05-14 11:57:27','updated_at' => '2021-05-14 11:57:27','deleted_at' => NULL,'slug' => 'medical-1620997047'),
  array('id' => '1359','dossier_medical_id' => '916','description' => 'Fils diabétique; pas de notion de cancer dans la famille','date' => NULL,'type' => 'Familial','created_at' => '2021-05-14 11:59:33','updated_at' => '2021-05-14 11:59:33','deleted_at' => NULL,'slug' => 'familial-1620997173'),
  array('id' => '1360','dossier_medical_id' => '467','description' => 'Patiente goutteuse découvert en 2020, sous mesure hygiéno diététiques','date' => NULL,'type' => 'Médical','created_at' => '2021-05-14 14:28:33','updated_at' => '2021-05-14 14:28:33','deleted_at' => NULL,'slug' => 'medical-1621006113'),
  array('id' => '1361','dossier_medical_id' => '467','description' => 'HTA','date' => NULL,'type' => 'Médical','created_at' => '2021-05-14 14:42:46','updated_at' => '2021-05-14 14:42:46','deleted_at' => NULL,'slug' => 'medical-1621006966'),
  array('id' => '1362','dossier_medical_id' => '906','description' => 'HTA connu depuis 2013 compliante au traitement ,bipreterax cp 5mg','date' => '2013-01-01','type' => 'Médical','created_at' => '2021-05-14 19:35:15','updated_at' => '2021-05-15 07:48:28','deleted_at' => NULL,'slug' => 'medical-1621024515'),
  array('id' => '1363','dossier_medical_id' => '906','description' => 'RAS','date' => NULL,'type' => 'Chirugical','created_at' => '2021-05-14 19:35:31','updated_at' => '2021-05-15 05:55:32','deleted_at' => '2021-05-15 05:55:32','slug' => 'chirugical-1621024531'),
  array('id' => '1364','dossier_medical_id' => '906','description' => 'G4P4004;  ménopause en juin 2014;  FCV et mammographie réalisé en 2020','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2021-05-14 19:36:29','updated_at' => '2021-05-15 07:50:55','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1621024589'),
  array('id' => '1365','dossier_medical_id' => '906','description' => 'ras','date' => NULL,'type' => 'Familial','created_at' => '2021-05-14 19:36:44','updated_at' => '2021-05-15 05:55:10','deleted_at' => '2021-05-15 05:55:10','slug' => 'familial-1621024604'),
  array('id' => '1366','dossier_medical_id' => '920','description' => 'RAS','date' => NULL,'type' => 'Médical','created_at' => '2021-05-15 08:58:01','updated_at' => '2021-05-15 08:58:01','deleted_at' => NULL,'slug' => 'medical-1621072681'),
  array('id' => '1367','dossier_medical_id' => '920','description' => 'RAS','date' => NULL,'type' => 'Chirugical','created_at' => '2021-05-15 08:58:14','updated_at' => '2021-05-15 08:58:14','deleted_at' => NULL,'slug' => 'chirugical-1621072694'),
  array('id' => '1368','dossier_medical_id' => '920','description' => 'RAS','date' => NULL,'type' => 'Familial','created_at' => '2021-05-15 08:58:50','updated_at' => '2021-05-15 08:58:50','deleted_at' => NULL,'slug' => 'familial-1621072730'),
  array('id' => '1369','dossier_medical_id' => '924','description' => 'Peptic Ulcer Disease on malox when crises','date' => '2003-01-01','type' => 'Médical','created_at' => '2021-05-16 18:56:04','updated_at' => '2021-05-16 18:56:04','deleted_at' => NULL,'slug' => 'medical-1621194964'),
  array('id' => '1370','dossier_medical_id' => '924','description' => 'Right ovarian cystectomy','date' => '1991-01-01','type' => 'Chirugical','created_at' => '2021-05-16 18:57:33','updated_at' => '2021-05-16 18:57:33','deleted_at' => NULL,'slug' => 'chirugical-1621195053'),
  array('id' => '1371','dossier_medical_id' => '924','description' => 'G1P1001, lonely child is 12 years old. LMP: 20/04/2021
Menarche: 13 years, mentrual flow: 5-7 days, menstrual cycle: 28-30 days. no metro/menorrhagia
1st coitus: 20 years. Treated for Candida albican and Clamydia infection 2 years ago','date' => '2021-05-15','type' => 'Gynéco-obstétrique','created_at' => '2021-05-16 19:05:43','updated_at' => '2021-05-16 19:05:43','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1621195543'),
  array('id' => '1372','dossier_medical_id' => '924','description' => 'Hypertension and Diabetes Mellitus','date' => NULL,'type' => 'Familial','created_at' => '2021-05-16 19:07:14','updated_at' => '2021-05-16 19:07:14','deleted_at' => NULL,'slug' => 'familial-1621195634'),
  array('id' => '1373','dossier_medical_id' => '923','description' => 'Peptic Ulcer Disease','date' => '2021-04-29','type' => 'Médical','created_at' => '2021-05-16 19:44:10','updated_at' => '2021-05-16 19:44:10','deleted_at' => NULL,'slug' => 'medical-1621197850'),
  array('id' => '1374','dossier_medical_id' => '526','description' => 'Serolav','date' => '2008-01-01','type' => 'Médical','created_at' => '2021-05-16 20:00:38','updated_at' => '2021-05-16 20:00:38','deleted_at' => NULL,'slug' => 'medical-1621198838'),
  array('id' => '1375','dossier_medical_id' => '526','description' => 'Treated for Pulmonary Tb','date' => '2020-04-01','type' => 'Médical','created_at' => '2021-05-16 20:02:09','updated_at' => '2021-05-16 20:02:09','deleted_at' => NULL,'slug' => 'medical-1621198929'),
  array('id' => '1376','dossier_medical_id' => '526','description' => 'Glaucoma','date' => '2019-07-01','type' => 'Médical','created_at' => '2021-05-16 20:03:07','updated_at' => '2021-05-16 20:03:07','deleted_at' => NULL,'slug' => 'medical-1621198987'),
  array('id' => '1377','dossier_medical_id' => '526','description' => 'Stroke','date' => '2019-02-01','type' => 'Médical','created_at' => '2021-05-16 20:04:00','updated_at' => '2021-05-16 20:04:00','deleted_at' => NULL,'slug' => 'medical-1621199040'),
  array('id' => '1378','dossier_medical_id' => '765','description' => 'Gastrite à H.Pylori en cours de traitement','date' => NULL,'type' => 'Médical','created_at' => '2021-05-17 13:47:47','updated_at' => '2021-05-17 13:47:47','deleted_at' => NULL,'slug' => 'medical-1621262867'),
  array('id' => '1379','dossier_medical_id' => '765','description' => 'Tante HTA; pas de notion de cancer dans la famille','date' => NULL,'type' => 'Familial','created_at' => '2021-05-17 13:48:16','updated_at' => '2021-05-17 13:48:16','deleted_at' => NULL,'slug' => 'familial-1621262896'),
  array('id' => '1380','dossier_medical_id' => '765','description' => 'Patiente hypermmétrope depuis 4 ans; portant des verres correcteurs','date' => NULL,'type' => 'Médical','created_at' => '2021-05-17 13:55:35','updated_at' => '2021-05-17 13:55:35','deleted_at' => NULL,'slug' => 'medical-1621263335'),
  array('id' => '1381','dossier_medical_id' => '927','description' => 'Gastroscopie indiquée pour gastrite','date' => '2018-01-01','type' => 'Médical','created_at' => '2021-05-17 15:23:49','updated_at' => '2021-05-17 15:23:49','deleted_at' => NULL,'slug' => 'medical-1621268629'),
  array('id' => '1382','dossier_medical_id' => '927','description' => 'Syphilis','date' => '2018-01-01','type' => 'Médical','created_at' => '2021-05-17 15:24:33','updated_at' => '2021-05-17 15:24:33','deleted_at' => NULL,'slug' => 'medical-1621268673'),
  array('id' => '1383','dossier_medical_id' => '89','description' => 'Papa déédé d\'IDM','date' => '1981-01-01','type' => 'Familial','created_at' => '2021-05-18 08:14:59','updated_at' => '2021-05-18 08:14:59','deleted_at' => NULL,'slug' => 'familial-1621329299'),
  array('id' => '1384','dossier_medical_id' => '763','description' => 'Dyslipidémie','date' => '2021-03-19','type' => 'Médical','created_at' => '2021-05-18 20:19:31','updated_at' => '2021-05-18 20:19:31','deleted_at' => NULL,'slug' => 'medical-1621372771'),
  array('id' => '1385','dossier_medical_id' => '928','description' => 'Gastrite chronique depuis 05 ans sous hydroxyde d’aluminium et alginate de sodium +bicarbonate de sodium  si crise 
Prise quotidienne d AINS indiqué pour céphalée après le travail','date' => NULL,'type' => 'Médical','created_at' => '2021-05-19 04:57:52','updated_at' => '2021-05-19 04:57:52','deleted_at' => NULL,'slug' => 'medical-1621403872'),
  array('id' => '1386','dossier_medical_id' => '929','description' => 'DT2 connue depuis 07 mois sous glucophage 1000mg : 1cp/12h complainte au traitement','date' => NULL,'type' => 'Médical','created_at' => '2021-05-19 05:06:27','updated_at' => '2021-05-19 05:06:27','deleted_at' => NULL,'slug' => 'medical-1621404387'),
  array('id' => '1387','dossier_medical_id' => '929','description' => 'HTA connue depuis 05 ans sous  esidrex 25mg : 1cp et un autre antihypertenseur oublié','date' => NULL,'type' => 'Médical','created_at' => '2021-05-19 05:06:43','updated_at' => '2021-05-19 05:06:43','deleted_at' => NULL,'slug' => 'medical-1621404403'),
  array('id' => '1388','dossier_medical_id' => '929','description' => 'Gastrite chronique depuis 07 ans sous hydroxyde d’aluminium','date' => NULL,'type' => 'Médical','created_at' => '2021-05-19 05:06:58','updated_at' => '2021-05-19 05:06:58','deleted_at' => NULL,'slug' => 'medical-1621404418'),
  array('id' => '1389','dossier_medical_id' => '301','description' => 'lombosciatalgie','date' => '2020-09-01','type' => 'Médical','created_at' => '2021-05-19 09:31:39','updated_at' => '2021-05-19 09:31:39','deleted_at' => NULL,'slug' => 'medical-1621420299'),
  array('id' => '1390','dossier_medical_id' => '912','description' => 'G6P5015  ; ménopausé depuis plus de 10ans,mammographie en 2019;FCV jamais réalisé;','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2021-05-19 12:49:19','updated_at' => '2021-05-19 12:49:19','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1621432159'),
  array('id' => '1391','dossier_medical_id' => '930','description' => 'Myomes utérins','date' => '2011-01-01','type' => 'Gynéco-obstétrique','created_at' => '2021-05-19 14:46:27','updated_at' => '2021-05-19 14:46:27','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1621439187'),
  array('id' => '1392','dossier_medical_id' => '931','description' => 'Diabète sucré de type 2','date' => '2001-01-01','type' => 'Médical','created_at' => '2021-05-19 21:47:43','updated_at' => '2021-05-19 21:47:43','deleted_at' => NULL,'slug' => 'medical-1621464463'),
  array('id' => '1393','dossier_medical_id' => '934','description' => 'G8P1O71, breastfeeding mother of a 10 month old baby girl, LMP: 25/04/2021','date' => '2021-05-21','type' => 'Gynéco-obstétrique','created_at' => '2021-05-21 14:47:49','updated_at' => '2021-05-21 14:47:49','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1621612069'),
  array('id' => '1394','dossier_medical_id' => '934','description' => 'Laparoscopy indicated for inhability to conceive','date' => '2012-01-01','type' => 'Chirugical','created_at' => '2021-05-21 14:53:56','updated_at' => '2021-05-21 14:53:56','deleted_at' => NULL,'slug' => 'chirugical-1621612436'),
  array('id' => '1395','dossier_medical_id' => '934','description' => 'Laparoscopy indicated for inhability to conceive','date' => '2017-01-01','type' => 'Chirugical','created_at' => '2021-05-21 14:54:30','updated_at' => '2021-05-21 14:54:30','deleted_at' => NULL,'slug' => 'chirugical-1621612470'),
  array('id' => '1396','dossier_medical_id' => '934','description' => 'Cesarean section indicated for precious baby','date' => '2020-01-01','type' => 'Chirugical','created_at' => '2021-05-21 14:56:51','updated_at' => '2021-05-21 14:56:51','deleted_at' => NULL,'slug' => 'chirugical-1621612611'),
  array('id' => '1397','dossier_medical_id' => '934','description' => 'Mammography and Pap smear: normal','date' => '2019-01-01','type' => 'Gynéco-obstétrique','created_at' => '2021-05-21 14:58:12','updated_at' => '2021-05-21 14:58:12','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1621612692'),
  array('id' => '1398','dossier_medical_id' => '934','description' => 'No hypertension, no diabètes mellitus, no PUD,','date' => '2021-05-21','type' => 'Médical','created_at' => '2021-05-21 15:00:50','updated_at' => '2021-05-21 15:00:50','deleted_at' => NULL,'slug' => 'medical-1621612850'),
  array('id' => '1399','dossier_medical_id' => '935','description' => 'Nné :née eutociquement d\'une grossesse menée à terme  avec un PN: 3200g; aurait crié aussitôt  APGAR 9/9/10;BCG et vpo ok; alimentation :fait  de  lait artificielle (France lait)
Maternel: CPN (2 cpn suivies et une échographie obstétricale réalisée) ;pas de notion d\'infection  précèdent les deux semaines avant l accouchement ; pas de fièvre pendant l accouchement; liquide amniotique claire','date' => NULL,'type' => 'Médical','created_at' => '2021-05-22 13:44:08','updated_at' => '2021-05-22 16:31:12','deleted_at' => NULL,'slug' => 'medical-1621694648'),
  array('id' => '1400','dossier_medical_id' => '936','description' => 'hernie ombilicale','date' => '2020-05-06','type' => 'Chirugical','created_at' => '2021-05-23 07:13:30','updated_at' => '2021-05-23 07:13:30','deleted_at' => NULL,'slug' => 'chirugical-1621757610'),
  array('id' => '1401','dossier_medical_id' => '367','description' => 'HTA(-)     DT2(-)','date' => NULL,'type' => 'Médical','created_at' => '2021-05-24 08:42:41','updated_at' => '2021-05-24 08:42:41','deleted_at' => NULL,'slug' => 'medical-1621849361'),
  array('id' => '1402','dossier_medical_id' => '367','description' => 'RAS','date' => NULL,'type' => 'Chirugical','created_at' => '2021-05-24 08:42:59','updated_at' => '2021-05-24 08:42:59','deleted_at' => NULL,'slug' => 'chirugical-1621849379'),
  array('id' => '1403','dossier_medical_id' => '938','description' => 'HTA(-),     DT2(-)','date' => NULL,'type' => 'Médical','created_at' => '2021-05-24 11:08:54','updated_at' => '2021-05-24 11:08:54','deleted_at' => NULL,'slug' => 'medical-1621858134'),
  array('id' => '1404','dossier_medical_id' => '938','description' => 'RAS','date' => NULL,'type' => 'Chirugical','created_at' => '2021-05-24 11:09:23','updated_at' => '2021-05-24 11:09:23','deleted_at' => NULL,'slug' => 'chirugical-1621858163'),
  array('id' => '1405','dossier_medical_id' => '940','description' => 'Laparotomie en décembre 2019, pour perforation intestinale post accident de la voie publique; sans complications','date' => '2019-12-01','type' => 'Chirugical','created_at' => '2021-05-24 14:43:11','updated_at' => '2021-05-24 14:43:11','deleted_at' => NULL,'slug' => 'chirugical-1621870991'),
  array('id' => '1406','dossier_medical_id' => '945','description' => 'Diabetes mellitus','date' => '2010-01-01','type' => 'Médical','created_at' => '2021-05-27 01:41:16','updated_at' => '2021-05-27 01:41:16','deleted_at' => NULL,'slug' => 'medical-1622083276'),
  array('id' => '1407','dossier_medical_id' => '945','description' => 'Peptic Ulcer Disease','date' => '2020-01-01','type' => 'Médical','created_at' => '2021-05-27 01:42:24','updated_at' => '2021-05-27 01:42:24','deleted_at' => NULL,'slug' => 'medical-1622083344'),
  array('id' => '1408','dossier_medical_id' => '945','description' => 'Hypertension','date' => '2021-05-26','type' => 'Médical','created_at' => '2021-05-27 01:43:24','updated_at' => '2021-05-27 01:43:24','deleted_at' => NULL,'slug' => 'medical-1622083404'),
  array('id' => '1409','dossier_medical_id' => '945','description' => 'Never been operated','date' => '2021-04-26','type' => 'Chirugical','created_at' => '2021-05-27 01:44:16','updated_at' => '2021-05-27 01:44:16','deleted_at' => NULL,'slug' => 'chirugical-1622083456'),
  array('id' => '1410','dossier_medical_id' => '945','description' => 'Menopause','date' => '2001-01-01','type' => 'Gynéco-obstétrique','created_at' => '2021-05-27 01:45:17','updated_at' => '2021-05-27 01:45:17','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1622083517'),
  array('id' => '1411','dossier_medical_id' => '945','description' => 'HTN, Diabetes','date' => '2021-05-26','type' => 'Familial','created_at' => '2021-05-27 01:46:41','updated_at' => '2021-05-27 01:46:41','deleted_at' => NULL,'slug' => 'familial-1622083601'),
  array('id' => '1412','dossier_medical_id' => '897','description' => 'HTA depuis 15 ans','date' => NULL,'type' => 'Médical','created_at' => '2021-05-27 07:47:29','updated_at' => '2021-05-27 07:47:29','deleted_at' => NULL,'slug' => 'medical-1622105249'),
  array('id' => '1413','dossier_medical_id' => '897','description' => 'Césarienne en 1980','date' => '1980-01-01','type' => 'Chirugical','created_at' => '2021-05-27 07:48:59','updated_at' => '2021-05-27 07:48:59','deleted_at' => NULL,'slug' => 'chirugical-1622105339'),
  array('id' => '1414','dossier_medical_id' => '946','description' => 'oncle maternel diabétique','date' => NULL,'type' => 'Familial','created_at' => '2021-05-27 08:56:46','updated_at' => '2021-05-27 08:56:46','deleted_at' => NULL,'slug' => 'familial-1622109406'),
  array('id' => '1415','dossier_medical_id' => '947','description' => 'Gastrite fundique érythémateuse à H.Pylori','date' => '2012-02-14','type' => 'Médical','created_at' => '2021-05-27 11:08:46','updated_at' => '2021-05-27 11:08:46','deleted_at' => NULL,'slug' => 'medical-1622117326'),
  array('id' => '1416','dossier_medical_id' => '948','description' => 'opéré d\'appendicite','date' => '2014-01-01','type' => 'Chirugical','created_at' => '2021-05-27 16:03:38','updated_at' => '2021-05-27 16:03:38','deleted_at' => NULL,'slug' => 'chirugical-1622135018'),
  array('id' => '1417','dossier_medical_id' => '948','description' => 'pas HTA , ni de diabète familial','date' => NULL,'type' => 'Familial','created_at' => '2021-05-27 16:04:20','updated_at' => '2021-05-27 16:04:20','deleted_at' => NULL,'slug' => 'familial-1622135060'),
  array('id' => '1418','dossier_medical_id' => '921','description' => 'pas de pathologie chronique connue','date' => NULL,'type' => 'Médical','created_at' => '2021-05-29 21:45:13','updated_at' => '2021-05-29 21:45:13','deleted_at' => NULL,'slug' => 'medical-1622328313'),
  array('id' => '1419','dossier_medical_id' => '921','description' => 'jamais été opéré','date' => NULL,'type' => 'Chirugical','created_at' => '2021-05-29 21:45:37','updated_at' => '2021-05-29 21:45:37','deleted_at' => NULL,'slug' => 'chirugical-1622328337'),
  array('id' => '1420','dossier_medical_id' => '978','description' => 'Gastrite chronique','date' => NULL,'type' => 'Médical','created_at' => '2021-05-31 13:04:07','updated_at' => '2021-05-31 13:04:07','deleted_at' => NULL,'slug' => 'medical-1622469847'),
  array('id' => '1421','dossier_medical_id' => '978','description' => 'Nodulectomie mammaire gauche à  2 reprises à l\'intervalle de 4 ans','date' => NULL,'type' => 'Chirugical','created_at' => '2021-05-31 13:06:07','updated_at' => '2021-05-31 13:06:07','deleted_at' => NULL,'slug' => 'chirugical-1622469967'),
  array('id' => '1422','dossier_medical_id' => '978','description' => 'Père et mère HTA','date' => NULL,'type' => 'Familial','created_at' => '2021-05-31 13:06:39','updated_at' => '2021-05-31 13:06:39','deleted_at' => NULL,'slug' => 'familial-1622469999'),
  array('id' => '1423','dossier_medical_id' => '980','description' => 'Peptic Ulcer Disease','date' => NULL,'type' => 'Médical','created_at' => '2021-06-01 08:06:58','updated_at' => '2021-06-01 08:06:58','deleted_at' => NULL,'slug' => 'medical-1622538418'),
  array('id' => '1424','dossier_medical_id' => '980','description' => 'No HTA, no Diabetes','date' => '2021-06-01','type' => 'Médical','created_at' => '2021-06-01 08:07:44','updated_at' => '2021-06-01 08:07:44','deleted_at' => NULL,'slug' => 'medical-1622538464'),
  array('id' => '1425','dossier_medical_id' => '980','description' => 'Never been operated','date' => '2021-06-01','type' => 'Chirugical','created_at' => '2021-06-01 08:08:21','updated_at' => '2021-06-01 08:08:21','deleted_at' => NULL,'slug' => 'chirugical-1622538501'),
  array('id' => '1426','dossier_medical_id' => '980','description' => 'Pap smear?? Mammography???','date' => '2021-06-01','type' => 'Gynéco-obstétrique','created_at' => '2021-06-01 08:09:58','updated_at' => '2021-06-01 08:09:58','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1622538598'),
  array('id' => '1427','dossier_medical_id' => '981','description' => '•	Patiente HTA connue depuis 20 ans sous Amlodipine 5mg : 1cp/jr  Indapamide 2.5mg cp : 1cp/jr  simvastatine 40mg : 1cp/jr   traitement quelle aurait arrêté pendant 03 mois, reprise il Ya 02 semaines    dernière consultation cardiologique il Ya 08 ans','date' => NULL,'type' => 'Médical','created_at' => '2021-06-01 12:00:18','updated_at' => '2021-06-01 12:00:18','deleted_at' => '2021-08-31 23:00:00','slug' => 'medical-1622552417'),
  array('id' => '1428','dossier_medical_id' => '981','description' => '•	Arthrose genou droite  sous massage avec des baumes','date' => NULL,'type' => 'Médical','created_at' => '2021-06-01 12:00:45','updated_at' => '2021-06-01 12:00:45','deleted_at' => '2021-08-31 23:00:00','slug' => 'medical-1622552445'),
  array('id' => '1429','dossier_medical_id' => '983','description' => 'diabétique connue depuis 10 ans compliante  et observante sous metfor cp 500mg*2/j ; insuline  ;gastrite (+);','date' => NULL,'type' => 'Médical','created_at' => '2021-06-02 14:13:10','updated_at' => '2021-06-02 14:13:10','deleted_at' => NULL,'slug' => 'medical-1622646790'),
  array('id' => '1430','dossier_medical_id' => '983','description' => 'RAS','date' => NULL,'type' => 'Chirugical','created_at' => '2021-06-02 14:13:25','updated_at' => '2021-06-02 14:13:25','deleted_at' => NULL,'slug' => 'chirugical-1622646805'),
  array('id' => '1431','dossier_medical_id' => '983','description' => 'G4P4004 ; ménopausé depuis  10 ans ;mammographie et FCV jamais réalisé','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2021-06-02 14:16:08','updated_at' => '2021-06-02 14:16:08','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1622646968'),
  array('id' => '1432','dossier_medical_id' => '987','description' => 'HTA-
DT2-','date' => NULL,'type' => 'Médical','created_at' => '2021-06-03 12:40:50','updated_at' => '2021-06-03 12:40:50','deleted_at' => NULL,'slug' => 'medical-1622727650'),
  array('id' => '1433','dossier_medical_id' => '987','description' => 'jamais subi une opération chirurgicale','date' => NULL,'type' => 'Chirugical','created_at' => '2021-06-03 12:41:26','updated_at' => '2021-06-07 15:07:27','deleted_at' => NULL,'slug' => 'chirugical-1622727686'),
  array('id' => '1434','dossier_medical_id' => '987','description' => 'pas de pathologie chronique connue','date' => NULL,'type' => 'Familial','created_at' => '2021-06-03 12:42:34','updated_at' => '2021-06-03 12:42:34','deleted_at' => NULL,'slug' => 'familial-1622727754'),
  array('id' => '1435','dossier_medical_id' => '1003','description' => 'Gastrite chronique depuis plus de 20 ans','date' => '2001-01-01','type' => 'Médical','created_at' => '2021-06-04 07:54:38','updated_at' => '2021-06-04 07:54:38','deleted_at' => NULL,'slug' => 'medical-1622796878'),
  array('id' => '1436','dossier_medical_id' => '1003','description' => 'Polyarthralgie chronique','date' => '2019-01-01','type' => 'Médical','created_at' => '2021-06-04 07:55:24','updated_at' => '2021-06-04 07:55:24','deleted_at' => NULL,'slug' => 'medical-1622796924'),
  array('id' => '1437','dossier_medical_id' => '1003','description' => 'Kystectomie ovarien droit il ya plus de 40 ans','date' => NULL,'type' => 'Chirugical','created_at' => '2021-06-04 07:56:47','updated_at' => '2021-06-04 07:56:47','deleted_at' => NULL,'slug' => 'chirugical-1622797007'),
  array('id' => '1438','dossier_medical_id' => '1003','description' => 'Césarienne il y a 20 ans, pour grossesse à risque ( à l\'age de 40 ans)','date' => NULL,'type' => 'Chirugical','created_at' => '2021-06-04 07:57:47','updated_at' => '2021-06-04 07:57:47','deleted_at' => NULL,'slug' => 'chirugical-1622797067'),
  array('id' => '1439','dossier_medical_id' => '1003','description' => 'Frère consanguin HTA et diabétique
pas de notion de cancer dans la famille','date' => NULL,'type' => 'Familial','created_at' => '2021-06-04 07:59:13','updated_at' => '2021-06-04 07:59:13','deleted_at' => NULL,'slug' => 'familial-1622797153'),
  array('id' => '1440','dossier_medical_id' => '1033','description' => '•	HTA connue depuis 30 ans sous ATACAND 16mg : ½ cp/ jr et  ALDACTONE 50mg : 1cp/jr  aspirine cardio 100mg cp : 1cp/jr  observant  au traitement.','date' => NULL,'type' => 'Médical','created_at' => '2021-06-09 16:25:57','updated_at' => '2021-06-09 16:25:57','deleted_at' => NULL,'slug' => 'medical-1623259557'),
  array('id' => '1441','dossier_medical_id' => '1033','description' => '•	Diabétique connue depuis 10 ans sous glucophage 1000mg cp : 1/2cp×2/jr   observant au traitement','date' => NULL,'type' => 'Médical','created_at' => '2021-06-09 16:26:16','updated_at' => '2021-06-09 16:26:16','deleted_at' => NULL,'slug' => 'medical-1623259576'),
  array('id' => '1442','dossier_medical_id' => '1035','description' => '•	lombarthrose depuis 2 ans (patiente porteuse d’une ceinture lombaire) ; 
•	hypertendu depuis 5 ans sous Bipreterax 10mg : 1cp/jour ; 
•	notion de gastrite chronique depuis  1980 ayant motivé plusieurs consultations au cours desquelles des fibroscopies ont été réalisées montrant un ulcère gastrique et bulbaire il y a plus de 20 ans, la dernière réalisées par la suite en 2020 avait montré une zone érythémateuse (non disponibles) et plusieurs médicaments ont été administré à savoir : Oméprazole, Inexium, phosphalugel etc …. ; actuellement sous-produit de la pharmacopée traditionnelle (aloé vera + miel)','date' => NULL,'type' => 'Médical','created_at' => '2021-06-09 17:06:42','updated_at' => '2021-06-09 17:06:42','deleted_at' => NULL,'slug' => 'medical-1623262002'),
  array('id' => '1443','dossier_medical_id' => '1035','description' => 'Hystérectomie en 1993 par voie basse indiquée pour utérus polymyomateux','date' => NULL,'type' => 'Chirugical','created_at' => '2021-06-09 17:07:09','updated_at' => '2021-06-09 17:07:09','deleted_at' => NULL,'slug' => 'chirugical-1623262029'),
  array('id' => '1444','dossier_medical_id' => '1034','description' => 'RAS','date' => NULL,'type' => 'Médical','created_at' => '2021-06-09 17:19:57','updated_at' => '2021-06-09 17:19:57','deleted_at' => NULL,'slug' => 'medical-1623262797'),
  array('id' => '1445','dossier_medical_id' => '1034','description' => 'LAPAROTOMIE indiqué pour une GEU','date' => NULL,'type' => 'Chirugical','created_at' => '2021-06-09 17:21:23','updated_at' => '2021-06-09 17:21:23','deleted_at' => NULL,'slug' => 'chirugical-1623262883'),
  array('id' => '1446','dossier_medical_id' => '1034','description' => 'G1P0100. DDR 02/06/21; durée des règles :3-.5jours; cycle réguliers 27-28jours;GEU il y\'a 9 à l âge de 18ans','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2021-06-09 17:24:07','updated_at' => '2021-06-09 17:24:07','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1623263047'),
  array('id' => '1447','dossier_medical_id' => '1037','description' => 'Diabétique connue depuis 03 semaines sous Metformine 500mg 1cp/jr observant au traitement','date' => NULL,'type' => 'Médical','created_at' => '2021-06-10 07:57:22','updated_at' => '2021-06-10 07:57:22','deleted_at' => NULL,'slug' => 'medical-1623315442'),
  array('id' => '1448','dossier_medical_id' => '1029','description' => 'Hypertension','date' => '2011-01-01','type' => 'Médical','created_at' => '2021-06-11 13:05:31','updated_at' => '2021-06-11 13:05:31','deleted_at' => NULL,'slug' => 'medical-1623420331'),
  array('id' => '1449','dossier_medical_id' => '1030','description' => '•	Patiente HTA connue depuis 10 ans initialement sous cardiurine 50/25mg cp : 1cp/jr Changé il Ya 01 mois par du Bipreterax 10/2.5 : 1cp/Jr et Amlodipine 10mg : 1cp/jr','date' => NULL,'type' => 'Médical','created_at' => '2021-06-13 22:05:37','updated_at' => '2021-06-18 17:27:07','deleted_at' => '2021-06-18 17:27:07','slug' => 'medical-1623625537'),
  array('id' => '1450','dossier_medical_id' => '1030','description' => '•	HTA (depuis 10 années) équilibrée depuis un mois Bipreterax 10/2.5 : 1cp/Jr et Amlodipine 10mg : 1cp/jr
•	DT2 (découverte fortuite depuis un mois) contrôlée sous novomic 30 14UI-0-14UI','date' => NULL,'type' => 'Médical','created_at' => '2021-06-13 22:05:59','updated_at' => '2021-06-18 17:25:24','deleted_at' => NULL,'slug' => 'medical-1623625559'),
  array('id' => '1451','dossier_medical_id' => '1030','description' => '•	•	Père HTA DCD
•	Mère HTA victime d’un  AVC 
•	1ERE/3 avec un frère et une sœur HTA','date' => NULL,'type' => 'Familial','created_at' => '2021-06-13 22:06:20','updated_at' => '2021-06-18 17:26:17','deleted_at' => NULL,'slug' => 'familial-1623625580'),
  array('id' => '1452','dossier_medical_id' => '1039','description' => 'Never been operated','date' => '2021-06-15','type' => 'Chirugical','created_at' => '2021-06-15 18:37:31','updated_at' => '2021-06-15 18:37:31','deleted_at' => NULL,'slug' => 'chirugical-1623785851'),
  array('id' => '1453','dossier_medical_id' => '1039','description' => 'no HTN no DM','date' => '2021-06-15','type' => 'Médical','created_at' => '2021-06-15 18:38:20','updated_at' => '2021-06-15 18:38:20','deleted_at' => NULL,'slug' => 'medical-1623785900'),
  array('id' => '1454','dossier_medical_id' => '1041','description' => 'ras','date' => NULL,'type' => 'Médical','created_at' => '2021-06-17 08:57:11','updated_at' => '2021-06-17 08:57:11','deleted_at' => NULL,'slug' => 'medical-1623923831'),
  array('id' => '1455','dossier_medical_id' => '1041','description' => 'ras','date' => NULL,'type' => 'Chirugical','created_at' => '2021-06-17 08:57:27','updated_at' => '2021-06-17 08:57:27','deleted_at' => NULL,'slug' => 'chirugical-1623923847'),
  array('id' => '1456','dossier_medical_id' => '1041','description' => 'ras','date' => NULL,'type' => 'Familial','created_at' => '2021-06-17 08:57:42','updated_at' => '2021-06-17 08:57:42','deleted_at' => NULL,'slug' => 'familial-1623923862'),
  array('id' => '1457','dossier_medical_id' => '338','description' => 'DDR 30/04/2021  AG: 7SA 6 Jours','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2021-06-17 16:32:45','updated_at' => '2021-06-17 16:32:45','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1623951165'),
  array('id' => '1458','dossier_medical_id' => '1030','description' => '•	Cure d’Hernie Ombilicale (il y 8 années)','date' => NULL,'type' => 'Chirugical','created_at' => '2021-06-18 17:27:36','updated_at' => '2021-06-18 17:27:36','deleted_at' => NULL,'slug' => 'chirugical-1624040856'),
  array('id' => '1459','dossier_medical_id' => '1030','description' => '•	G7P7007','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2021-06-18 17:27:52','updated_at' => '2021-06-18 17:27:52','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1624040872'),
  array('id' => '1460','dossier_medical_id' => '1029','description' => '•	HTA connue depuis 10 ans de découverte fortuite sous nifédipine 20mg cp : 1cp/jr observant au traitement','date' => NULL,'type' => 'Médical','created_at' => '2021-06-19 11:03:26','updated_at' => '2021-06-19 11:03:26','deleted_at' => NULL,'slug' => 'medical-1624104206'),
  array('id' => '1461','dossier_medical_id' => '1029','description' => '•	Mère HTA  DCD suite de maladie 
•	1er/5   avec un frère HTA  une sœur DCD suite aux complications d’un néo du col','date' => NULL,'type' => 'Familial','created_at' => '2021-06-19 11:03:41','updated_at' => '2021-06-19 11:03:41','deleted_at' => NULL,'slug' => 'familial-1624104221'),
  array('id' => '1462','dossier_medical_id' => '1043','description' => 'Tuméfaction douloureuse de la jambe depuis 30 ans 
Echodoppler de la jambe droite sans particularité','date' => '0001-01-01','type' => 'Médical','created_at' => '2021-06-20 15:10:07','updated_at' => '2021-06-20 15:30:03','deleted_at' => NULL,'slug' => 'medical-1624205407'),
  array('id' => '1463','dossier_medical_id' => '1045','description' => 'HTA, sous Amilo 5 mg 1cp/jr','date' => '2011-01-01','type' => 'Médical','created_at' => '2021-06-21 08:31:04','updated_at' => '2021-06-21 08:31:04','deleted_at' => NULL,'slug' => 'medical-1624267864'),
  array('id' => '1464','dossier_medical_id' => '1045','description' => 'Hépatite C traitée et déclarée guérie (dernier controle en 2019)','date' => '2012-01-01','type' => 'Médical','created_at' => '2021-06-21 08:33:58','updated_at' => '2021-06-21 08:33:58','deleted_at' => NULL,'slug' => 'medical-1624268038'),
  array('id' => '1465','dossier_medical_id' => '1045','description' => 'Opération de la cataracte','date' => '2020-01-01','type' => 'Chirugical','created_at' => '2021-06-21 08:41:08','updated_at' => '2021-06-21 08:41:08','deleted_at' => NULL,'slug' => 'chirugical-1624268468'),
  array('id' => '1466','dossier_medical_id' => '1046','description' => 'Opération occulaire (ne se souvient pas de l\'indication)','date' => '2004-01-01','type' => 'Chirugical','created_at' => '2021-06-21 09:11:51','updated_at' => '2021-06-21 09:11:51','deleted_at' => NULL,'slug' => 'chirugical-1624270311'),
  array('id' => '1467','dossier_medical_id' => '1046','description' => 'Césarienne pour SFA','date' => '2020-05-23','type' => 'Gynéco-obstétrique','created_at' => '2021-06-21 09:12:22','updated_at' => '2021-06-21 09:12:22','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1624270342'),
  array('id' => '1468','dossier_medical_id' => '1046','description' => 'Arthrose cervicale','date' => '2018-01-01','type' => 'Médical','created_at' => '2021-06-21 09:13:04','updated_at' => '2021-06-21 09:13:04','deleted_at' => NULL,'slug' => 'medical-1624270384'),
  array('id' => '1469','dossier_medical_id' => '1046','description' => 'UGD','date' => '2020-01-01','type' => 'Médical','created_at' => '2021-06-21 09:14:41','updated_at' => '2021-06-21 09:14:41','deleted_at' => NULL,'slug' => 'medical-1624270481'),
  array('id' => '1470','dossier_medical_id' => '1046','description' => 'Diabète chez le père
HTA chez la mère','date' => NULL,'type' => 'Familial','created_at' => '2021-06-21 09:15:21','updated_at' => '2021-06-21 09:15:21','deleted_at' => NULL,'slug' => 'familial-1624270521'),
  array('id' => '1471','dossier_medical_id' => '1051','description' => 'Hypertension','date' => '2019-01-01','type' => 'Médical','created_at' => '2021-06-23 15:06:57','updated_at' => '2021-06-23 15:06:57','deleted_at' => NULL,'slug' => 'medical-1624464417'),
  array('id' => '1472','dossier_medical_id' => '1051','description' => 'No Diabetes, no PUD','date' => '2021-06-23','type' => 'Médical','created_at' => '2021-06-23 15:07:37','updated_at' => '2021-06-23 15:07:37','deleted_at' => NULL,'slug' => 'medical-1624464457'),
  array('id' => '1473','dossier_medical_id' => '1051','description' => 'Never been operated','date' => '2021-06-23','type' => 'Chirugical','created_at' => '2021-06-23 15:08:10','updated_at' => '2021-06-23 15:08:10','deleted_at' => NULL,'slug' => 'chirugical-1624464490'),
  array('id' => '1474','dossier_medical_id' => '1051','description' => 'Menopause for 12 years
Pap smear: normal
Mammography: not done','date' => '2021-06-23','type' => 'Gynéco-obstétrique','created_at' => '2021-06-23 15:10:00','updated_at' => '2021-06-23 15:10:00','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1624464600'),
  array('id' => '1475','dossier_medical_id' => '1052','description' => 'Hypertension','date' => '2006-01-01','type' => 'Médical','created_at' => '2021-06-26 16:46:59','updated_at' => '2021-06-26 16:46:59','deleted_at' => NULL,'slug' => 'medical-1624729619'),
  array('id' => '1476','dossier_medical_id' => '1052','description' => 'Peptic Ulcer Disease','date' => '2006-01-01','type' => 'Médical','created_at' => '2021-06-26 16:47:51','updated_at' => '2021-06-26 16:47:51','deleted_at' => NULL,'slug' => 'medical-1624729671'),
  array('id' => '1477','dossier_medical_id' => '1052','description' => 'Never been operated','date' => '2021-06-26','type' => 'Chirugical','created_at' => '2021-06-26 16:48:47','updated_at' => '2021-06-26 16:48:47','deleted_at' => NULL,'slug' => 'chirugical-1624729727'),
  array('id' => '1478','dossier_medical_id' => '1052','description' => 'Menopause','date' => '1994-01-01','type' => 'Gynéco-obstétrique','created_at' => '2021-06-26 16:50:21','updated_at' => '2021-06-26 16:50:21','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1624729821'),
  array('id' => '1479','dossier_medical_id' => '1052','description' => 'Pap smear: normal
Mammography: normal','date' => '2006-01-01','type' => 'Gynéco-obstétrique','created_at' => '2021-06-26 16:51:22','updated_at' => '2021-06-26 16:51:22','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1624729882'),
  array('id' => '1480','dossier_medical_id' => '1052','description' => 'Father suffered hypertension','date' => '2021-06-26','type' => 'Familial','created_at' => '2021-06-26 16:52:14','updated_at' => '2021-06-26 16:52:14','deleted_at' => NULL,'slug' => 'familial-1624729934'),
  array('id' => '1481','dossier_medical_id' => '338','description' => 'G3P0020 (1 FCS; 1 oeuf clair)','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2021-06-28 08:52:12','updated_at' => '2021-06-28 08:52:12','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1624873932'),
  array('id' => '1482','dossier_medical_id' => '807','description' => 'notion de cataracte bilatéral','date' => NULL,'type' => 'Médical','created_at' => '2021-06-28 12:15:31','updated_at' => '2021-06-28 12:15:31','deleted_at' => NULL,'slug' => 'medical-1624886131'),
  array('id' => '1483','dossier_medical_id' => '1054','description' => 'Notions d\'Hypotension, mise de temps en temps sous Heptamyl','date' => NULL,'type' => 'Médical','created_at' => '2021-07-01 07:53:06','updated_at' => '2021-07-01 07:53:06','deleted_at' => NULL,'slug' => 'medical-1625129586'),
  array('id' => '1484','dossier_medical_id' => '1054','description' => 'Notion d\'anémie fréquente, mise parfois sous Ranféron','date' => NULL,'type' => 'Médical','created_at' => '2021-07-01 07:54:01','updated_at' => '2021-07-01 07:54:01','deleted_at' => NULL,'slug' => 'medical-1625129641'),
  array('id' => '1485','dossier_medical_id' => '1054','description' => 'Ménopausée depuis 6 ans','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2021-07-01 08:01:35','updated_at' => '2021-07-01 08:01:35','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1625130095'),
  array('id' => '1486','dossier_medical_id' => '937','description' => 'HTA dépuis environ 9 ans','date' => NULL,'type' => 'Médical','created_at' => '2021-07-06 08:55:42','updated_at' => '2021-07-06 08:55:42','deleted_at' => NULL,'slug' => 'medical-1625565342'),
  array('id' => '1487','dossier_medical_id' => '937','description' => 'RAS','date' => NULL,'type' => 'Chirugical','created_at' => '2021-07-06 08:56:24','updated_at' => '2021-07-06 08:56:24','deleted_at' => NULL,'slug' => 'chirugical-1625565384'),
  array('id' => '1488','dossier_medical_id' => '1033','description' => 'Effet blouse blanche diagnostiquer depuis l\'enfance','date' => NULL,'type' => 'Médical','created_at' => '2021-07-07 07:13:38','updated_at' => '2021-07-07 07:13:38','deleted_at' => NULL,'slug' => 'medical-1625645618'),
  array('id' => '1489','dossier_medical_id' => '1062','description' => 'DT2 sous metformine 1/2cp*2/jr


HTA sous Adipine 10mg 1cp/jr','date' => NULL,'type' => 'Médical','created_at' => '2021-07-07 14:06:40','updated_at' => '2021-07-07 16:30:10','deleted_at' => NULL,'slug' => 'medical-1625670400'),
  array('id' => '1490','dossier_medical_id' => '1062','description' => 'G0P0 ménopausé','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2021-07-07 14:08:46','updated_at' => '2021-07-07 14:08:46','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1625670526'),
  array('id' => '1491','dossier_medical_id' => '1062','description' => 'RAS','date' => NULL,'type' => 'Chirugical','created_at' => '2021-07-07 14:09:06','updated_at' => '2021-07-07 14:09:06','deleted_at' => NULL,'slug' => 'chirugical-1625670546'),
  array('id' => '1492','dossier_medical_id' => '1063','description' => 'RAS','date' => NULL,'type' => 'Médical','created_at' => '2021-07-07 22:37:28','updated_at' => '2021-07-07 22:37:28','deleted_at' => NULL,'slug' => 'medical-1625701048'),
  array('id' => '1493','dossier_medical_id' => '1063','description' => 'RAS','date' => NULL,'type' => 'Chirugical','created_at' => '2021-07-07 22:37:39','updated_at' => '2021-07-07 22:37:39','deleted_at' => NULL,'slug' => 'chirugical-1625701059'),
  array('id' => '1494','dossier_medical_id' => '507','description' => 'DDR 07/07/2021','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2021-07-13 07:17:04','updated_at' => '2021-07-13 07:17:04','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1626164224'),
  array('id' => '1495','dossier_medical_id' => '1072','description' => 'glaucome stade terminal','date' => NULL,'type' => 'Médical','created_at' => '2021-07-13 20:36:02','updated_at' => '2021-07-13 20:36:02','deleted_at' => NULL,'slug' => 'medical-1626212162'),
  array('id' => '1496','dossier_medical_id' => '1072','description' => 'ras','date' => NULL,'type' => 'Chirugical','created_at' => '2021-07-13 20:36:17','updated_at' => '2021-07-13 20:36:17','deleted_at' => NULL,'slug' => 'chirugical-1626212177'),
  array('id' => '1497','dossier_medical_id' => '1072','description' => 'G5P5005; ménopause(+);mammographie(-); FCV(-)','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2021-07-13 20:42:31','updated_at' => '2021-07-13 20:42:31','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1626212551'),
  array('id' => '1498','dossier_medical_id' => '1071','description' => 'gastralgie ,lombodiscarthrose diagnostiqué en 2020 et sous cartisafe 1cp*2/j','date' => NULL,'type' => 'Médical','created_at' => '2021-07-14 03:37:35','updated_at' => '2021-07-14 03:37:35','deleted_at' => NULL,'slug' => 'medical-1626237455'),
  array('id' => '1499','dossier_medical_id' => '1071','description' => 'exérese d\'un kyste des parties molles au niveau tiers ext superoexterne de la cuisse gauche','date' => NULL,'type' => 'Chirugical','created_at' => '2021-07-14 03:39:07','updated_at' => '2021-07-14 03:39:07','deleted_at' => NULL,'slug' => 'chirugical-1626237547'),
  array('id' => '1500','dossier_medical_id' => '1071','description' => 'G6P6006; ménopausée depuis l \'âge de 49ans; mammographie en 2014; FCV jamais réalisé','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2021-07-14 03:42:33','updated_at' => '2021-07-14 03:42:33','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1626237753'),
  array('id' => '1501','dossier_medical_id' => '190','description' => 'Coxarthrose modérée gauche','date' => '2019-01-01','type' => 'Médical','created_at' => '2021-07-14 18:53:48','updated_at' => '2021-07-14 18:53:48','deleted_at' => NULL,'slug' => 'medical-1626292428'),
  array('id' => '1502','dossier_medical_id' => '190','description' => 'Lombodiscarthrose étagée','date' => '2019-06-04','type' => 'Médical','created_at' => '2021-07-14 18:54:53','updated_at' => '2021-07-14 18:54:53','deleted_at' => NULL,'slug' => 'medical-1626292493'),
  array('id' => '1503','dossier_medical_id' => '1083','description' => 'Peptic ulcer disease','date' => '2021-07-16','type' => 'Médical','created_at' => '2021-07-16 13:14:23','updated_at' => '2021-07-16 13:14:23','deleted_at' => NULL,'slug' => 'medical-1626444863'),
  array('id' => '1504','dossier_medical_id' => '1083','description' => 'no HTN, no Diabetes Mellitus','date' => '2021-07-16','type' => 'Médical','created_at' => '2021-07-16 13:17:27','updated_at' => '2021-07-16 13:17:27','deleted_at' => NULL,'slug' => 'medical-1626445047'),
  array('id' => '1505','dossier_medical_id' => '1083','description' => 'never been operated','date' => '2021-07-16','type' => 'Chirugical','created_at' => '2021-07-16 13:17:58','updated_at' => '2021-07-16 13:17:58','deleted_at' => NULL,'slug' => 'chirugical-1626445078'),
  array('id' => '1506','dossier_medical_id' => '1083','description' => 'G4P2022, breastfeeding mother of a 9 months old baby','date' => '2021-07-16','type' => 'Gynéco-obstétrique','created_at' => '2021-07-16 13:19:10','updated_at' => '2021-07-16 13:19:10','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1626445150'),
  array('id' => '1507','dossier_medical_id' => '1084','description' => 'Open reduction and internal fixation for fracture of the left fumur post Road Traffic Crash','date' => '2018-01-01','type' => 'Chirugical','created_at' => '2021-07-17 09:00:06','updated_at' => '2021-07-17 09:00:06','deleted_at' => NULL,'slug' => 'chirugical-1626516006'),
  array('id' => '1508','dossier_medical_id' => '1084','description' => 'No HTN, PUD, DM','date' => '2021-07-17','type' => 'Médical','created_at' => '2021-07-17 09:00:57','updated_at' => '2021-07-17 09:00:57','deleted_at' => NULL,'slug' => 'medical-1626516057'),
  array('id' => '1509','dossier_medical_id' => '1084','description' => 'HTA(-)                       DT2(-)','date' => NULL,'type' => 'Médical','created_at' => '2021-07-18 15:31:14','updated_at' => '2021-07-18 15:31:14','deleted_at' => NULL,'slug' => 'medical-1626625874'),
  array('id' => '1510','dossier_medical_id' => '1087','description' => 'Cure herniaire','date' => '2017-01-01','type' => 'Chirugical','created_at' => '2021-07-20 04:40:43','updated_at' => '2021-07-20 04:40:43','deleted_at' => NULL,'slug' => 'chirugical-1626759643'),
  array('id' => '1511','dossier_medical_id' => '1089','description' => 'Asthmatique depuis 7 ans sous ventoline','date' => '2014-01-01','type' => 'Médical','created_at' => '2021-07-22 11:04:27','updated_at' => '2021-07-22 11:04:27','deleted_at' => NULL,'slug' => 'medical-1626955467'),
  array('id' => '1512','dossier_medical_id' => '1089','description' => 'Césarienne élective  il y a 2 ans indiquée pour Bassin limite','date' => '2019-01-01','type' => 'Chirugical','created_at' => '2021-07-22 11:26:17','updated_at' => '2021-07-22 11:26:17','deleted_at' => NULL,'slug' => 'chirugical-1626956777'),
  array('id' => '1513','dossier_medical_id' => '1092','description' => 'Gastrite chronique','date' => '2019-01-01','type' => 'Médical','created_at' => '2021-07-22 14:44:12','updated_at' => '2021-07-22 14:44:12','deleted_at' => NULL,'slug' => 'medical-1626968652'),
  array('id' => '1514','dossier_medical_id' => '1094','description' => 'Notion de Glaucome dans la fille ( grand père, et arrière grand père)','date' => NULL,'type' => 'Familial','created_at' => '2021-07-23 08:06:31','updated_at' => '2021-07-23 08:06:31','deleted_at' => NULL,'slug' => 'familial-1627031191'),
  array('id' => '1515','dossier_medical_id' => '1094','description' => 'Notion de pathologie oculaire pour laquelle avait été prescrit des verres correcteurs','date' => NULL,'type' => 'Médical','created_at' => '2021-07-23 08:18:49','updated_at' => '2021-07-23 08:18:49','deleted_at' => NULL,'slug' => 'medical-1627031929'),
  array('id' => '1516','dossier_medical_id' => '199','description' => 'Chirurgie cardiaque indiquée pour myxome  de l’oreillette gauche, faite au Jourdain aux suites simples','date' => '2021-02-13','type' => 'Chirugical','created_at' => '2021-07-23 09:04:00','updated_at' => '2021-07-23 09:04:00','deleted_at' => NULL,'slug' => 'chirugical-1627034640'),
  array('id' => '1517','dossier_medical_id' => '199','description' => 'Mère diabétique','date' => NULL,'type' => 'Familial','created_at' => '2021-07-23 09:33:14','updated_at' => '2021-07-23 09:33:14','deleted_at' => NULL,'slug' => 'familial-1627036394'),
  array('id' => '1518','dossier_medical_id' => '199','description' => 'Notion de lombalgie chronique','date' => NULL,'type' => 'Médical','created_at' => '2021-07-23 09:52:55','updated_at' => '2021-07-23 09:52:55','deleted_at' => NULL,'slug' => 'medical-1627037575'),
  array('id' => '1519','dossier_medical_id' => '1095','description' => 'césarienne d\'urgence indiquée pour SFA','date' => '2018-01-01','type' => 'Chirugical','created_at' => '2021-07-23 10:21:58','updated_at' => '2021-07-23 10:21:58','deleted_at' => NULL,'slug' => 'chirugical-1627039318'),
  array('id' => '1520','dossier_medical_id' => '1052','description' => 'DT2(-)
HTA(-)','date' => NULL,'type' => 'Médical','created_at' => '2021-07-24 18:52:15','updated_at' => '2021-07-25 16:00:16','deleted_at' => '2021-07-25 16:00:16','slug' => 'medical-1627156335'),
  array('id' => '1521','dossier_medical_id' => '1052','description' => 'jamais été opérée','date' => NULL,'type' => 'Chirugical','created_at' => '2021-07-24 18:52:45','updated_at' => '2021-07-25 16:00:51','deleted_at' => '2021-07-25 16:00:51','slug' => 'chirugical-1627156365'),
  array('id' => '1522','dossier_medical_id' => '1052','description' => 'G6P5 014 
Ménopausé il ya 27 ans','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2021-07-24 18:54:32','updated_at' => '2021-07-25 15:59:38','deleted_at' => '2021-07-25 15:59:38','slug' => 'gyneco-obstetrique-1627156472'),
  array('id' => '1523','dossier_medical_id' => '1105','description' => 'déficit en G6PD
Retard de croissance','date' => NULL,'type' => 'Médical','created_at' => '2021-07-31 14:56:07','updated_at' => '2021-07-31 14:56:07','deleted_at' => NULL,'slug' => 'medical-1627746967'),
  array('id' => '1524','dossier_medical_id' => '1105','description' => 'RAS','date' => NULL,'type' => 'Chirugical','created_at' => '2021-07-31 14:56:25','updated_at' => '2021-07-31 14:56:25','deleted_at' => NULL,'slug' => 'chirugical-1627746985'),
  array('id' => '1525','dossier_medical_id' => '1105','description' => '4e né d\'une fratrie de 4 enfants tous en BSA
PEV et hors PEV pas à jour','date' => NULL,'type' => 'Familial','created_at' => '2021-07-31 14:57:33','updated_at' => '2021-08-01 12:46:27','deleted_at' => NULL,'slug' => 'familial-1627747053'),
  array('id' => '1526','dossier_medical_id' => '1106','description' => 'No HTN, no DM, no PUD','date' => '2021-08-04','type' => 'Médical','created_at' => '2021-08-05 07:03:48','updated_at' => '2021-08-05 07:03:48','deleted_at' => NULL,'slug' => 'medical-1628150628'),
  array('id' => '1527','dossier_medical_id' => '1106','description' => 'Appendectomy','date' => '2001-01-01','type' => 'Chirugical','created_at' => '2021-08-05 07:05:07','updated_at' => '2021-08-05 07:05:07','deleted_at' => NULL,'slug' => 'chirugical-1628150707'),
  array('id' => '1528','dossier_medical_id' => '1106','description' => 'G4P4004, LMP: 09/06/2021, Breastfeeding mother of a 9 month old baby','date' => '2021-08-04','type' => 'Gynéco-obstétrique','created_at' => '2021-08-05 07:07:48','updated_at' => '2021-08-05 07:07:48','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1628150868'),
  array('id' => '1529','dossier_medical_id' => '1106','description' => 'No family history of breast cancer','date' => '2021-08-04','type' => 'Familial','created_at' => '2021-08-05 07:08:42','updated_at' => '2021-08-05 07:08:42','deleted_at' => NULL,'slug' => 'familial-1628150922'),
  array('id' => '1530','dossier_medical_id' => '1038','description' => 'RAS','date' => NULL,'type' => 'Médical','created_at' => '2021-08-13 05:52:39','updated_at' => '2021-08-13 05:52:39','deleted_at' => NULL,'slug' => 'medical-1628837559'),
  array('id' => '1531','dossier_medical_id' => '1038','description' => 'RAS','date' => NULL,'type' => 'Chirugical','created_at' => '2021-08-13 05:52:52','updated_at' => '2021-08-13 05:52:52','deleted_at' => NULL,'slug' => 'chirugical-1628837572'),
  array('id' => '1532','dossier_medical_id' => '1038','description' => 'RAS','date' => NULL,'type' => 'Médical','created_at' => '2021-08-13 06:23:39','updated_at' => '2021-08-13 06:23:39','deleted_at' => NULL,'slug' => 'medical-1628839419'),
  array('id' => '1533','dossier_medical_id' => '1121','description' => 'HTA depuis plus de 10 ans sous amlodipine','date' => NULL,'type' => 'Médical','created_at' => '2021-08-18 10:51:55','updated_at' => '2021-08-18 10:51:55','deleted_at' => NULL,'slug' => 'medical-1629287515'),
  array('id' => '1534','dossier_medical_id' => '1121','description' => 'Goutte depuis 7 ans environ','date' => NULL,'type' => 'Médical','created_at' => '2021-08-18 10:52:33','updated_at' => '2021-08-18 10:52:33','deleted_at' => NULL,'slug' => 'medical-1629287553'),
  array('id' => '1535','dossier_medical_id' => '1119','description' => 'HTA(-),  DT2 (-)','date' => NULL,'type' => 'Médical','created_at' => '2021-08-22 15:18:02','updated_at' => '2021-08-22 15:18:02','deleted_at' => NULL,'slug' => 'medical-1629649082'),
  array('id' => '1536','dossier_medical_id' => '1119','description' => 'RAS','date' => NULL,'type' => 'Chirugical','created_at' => '2021-08-22 15:18:15','updated_at' => '2021-08-22 15:18:15','deleted_at' => NULL,'slug' => 'chirugical-1629649095'),
  array('id' => '1537','dossier_medical_id' => '1119','description' => 'G5P4 004 FCV et mammographie jamais réalisé','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2021-08-22 15:19:31','updated_at' => '2021-08-22 15:19:31','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1629649171'),
  array('id' => '1538','dossier_medical_id' => '507','description' => 'séropositive au VIH depuis plus de 5 ans sous traitement; dernière charge virale réalisé résultat attendu','date' => NULL,'type' => 'Médical','created_at' => '2021-08-24 05:40:46','updated_at' => '2021-08-24 06:18:31','deleted_at' => NULL,'slug' => 'medical-1629787246'),
  array('id' => '1539','dossier_medical_id' => '1138','description' => 'RAS','date' => NULL,'type' => 'Médical','created_at' => '2021-08-26 20:40:42','updated_at' => '2021-08-26 20:40:42','deleted_at' => NULL,'slug' => 'medical-1630014042'),
  array('id' => '1540','dossier_medical_id' => '1138','description' => 'Diabéte type II','date' => NULL,'type' => 'Médical','created_at' => '2021-08-26 20:41:22','updated_at' => '2021-08-27 05:16:18','deleted_at' => NULL,'slug' => 'chirugical-1630014082'),
  array('id' => '1541','dossier_medical_id' => '1138','description' => 'RAS','date' => NULL,'type' => 'Chirugical','created_at' => '2021-08-26 20:41:38','updated_at' => '2021-08-27 05:21:18','deleted_at' => '2021-08-27 05:21:18','slug' => 'familial-1630014098'),
  array('id' => '1542','dossier_medical_id' => '1126','description' => 'HTA CONNU DEPUIS 30 ans sous teli cp 80mg;adactone cp 50mg /1/2/j;zyloric cp20mg/j ;','date' => NULL,'type' => 'Médical','created_at' => '2021-08-27 14:53:07','updated_at' => '2021-08-27 14:53:07','deleted_at' => NULL,'slug' => 'medical-1630079587'),
  array('id' => '1543','dossier_medical_id' => '1126','description' => 'laparotomie il y\'a plus de 20ans','date' => NULL,'type' => 'Chirugical','created_at' => '2021-08-27 14:54:09','updated_at' => '2021-08-27 14:54:09','deleted_at' => NULL,'slug' => 'chirugical-1630079649'),
  array('id' => '1544','dossier_medical_id' => '1126','description' => 'G8P8008.Menopausé depuis plus de 30ans ; Mammographie en 2015,FCV jamais réalisé','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2021-08-27 14:56:31','updated_at' => '2021-08-27 14:56:31','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1630079791'),
  array('id' => '1545','dossier_medical_id' => '1154','description' => 'No DM, No HTN, no PUD','date' => '2021-09-02','type' => 'Médical','created_at' => '2021-09-02 12:04:43','updated_at' => '2021-09-02 12:04:43','deleted_at' => NULL,'slug' => 'medical-1630587883'),
  array('id' => '1546','dossier_medical_id' => '1154','description' => 'Lumbo-arthrosis','date' => '2021-09-02','type' => 'Médical','created_at' => '2021-09-02 12:05:35','updated_at' => '2021-09-02 12:05:35','deleted_at' => NULL,'slug' => 'medical-1630587935'),
  array('id' => '1547','dossier_medical_id' => '1154','description' => 'Never operated','date' => '2021-09-02','type' => 'Chirugical','created_at' => '2021-09-02 12:06:02','updated_at' => '2021-09-02 12:06:02','deleted_at' => NULL,'slug' => 'chirugical-1630587962'),
  array('id' => '1548','dossier_medical_id' => '1160','description' => 'HTA -
  DT2 -','date' => NULL,'type' => 'Médical','created_at' => '2021-09-03 10:47:09','updated_at' => '2021-09-03 10:47:09','deleted_at' => NULL,'slug' => 'medical-1630669629'),
  array('id' => '1549','dossier_medical_id' => '1160','description' => 'Herniorraphie il ya plusieurs années','date' => NULL,'type' => 'Chirugical','created_at' => '2021-09-03 10:48:58','updated_at' => '2021-09-03 10:48:58','deleted_at' => NULL,'slug' => 'chirugical-1630669738'),
  array('id' => '1550','dossier_medical_id' => '1152','description' => 'HTA(-)
DT2(-)','date' => NULL,'type' => 'Médical','created_at' => '2021-09-05 08:00:43','updated_at' => '2021-09-05 08:00:43','deleted_at' => NULL,'slug' => 'medical-1630832443'),
  array('id' => '1551','dossier_medical_id' => '1107','description' => 'HTA(+) dépuis environs 7 ans sous Ramipril 10mg 1/jr
DT2(-)','date' => NULL,'type' => 'Médical','created_at' => '2021-09-06 09:23:01','updated_at' => '2021-09-06 09:23:01','deleted_at' => NULL,'slug' => 'medical-1630923781'),
  array('id' => '1552','dossier_medical_id' => '1107','description' => 'G5P5005  mammographie en 2007','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2021-09-06 09:25:32','updated_at' => '2021-09-06 09:25:32','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1630923932'),
  array('id' => '1553','dossier_medical_id' => '1107','description' => 'Hystérectomie en 1985','date' => NULL,'type' => 'Chirugical','created_at' => '2021-09-06 09:26:09','updated_at' => '2021-09-06 09:26:09','deleted_at' => NULL,'slug' => 'chirugical-1630923969'),
  array('id' => '1554','dossier_medical_id' => '1170','description' => 'HTN','date' => '2021-03-01','type' => 'Médical','created_at' => '2021-09-07 17:17:56','updated_at' => '2021-09-07 17:17:56','deleted_at' => NULL,'slug' => 'medical-1631038676'),
  array('id' => '1555','dossier_medical_id' => '1170','description' => 'DM, PUD','date' => '2021-09-07','type' => 'Médical','created_at' => '2021-09-07 17:19:02','updated_at' => '2021-09-07 17:19:02','deleted_at' => NULL,'slug' => 'medical-1631038742'),
  array('id' => '1556','dossier_medical_id' => '1170','description' => 'Never been operated','date' => '2021-09-07','type' => 'Chirugical','created_at' => '2021-09-07 17:19:40','updated_at' => '2021-09-07 17:19:40','deleted_at' => NULL,'slug' => 'chirugical-1631038780'),
  array('id' => '1557','dossier_medical_id' => '1170','description' => 'Ménopause','date' => '2007-01-01','type' => 'Gynéco-obstétrique','created_at' => '2021-09-07 17:21:35','updated_at' => '2021-09-07 17:21:35','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1631038895'),
  array('id' => '1558','dossier_medical_id' => '1170','description' => 'Mammography and Pap Smear: normal','date' => '2019-01-01','type' => 'Gynéco-obstétrique','created_at' => '2021-09-07 17:22:54','updated_at' => '2021-09-07 17:22:54','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1631038974'),
  array('id' => '1559','dossier_medical_id' => '1170','description' => 'no HTN, DM','date' => '2021-09-07','type' => 'Familial','created_at' => '2021-09-07 17:24:22','updated_at' => '2021-09-07 17:24:22','deleted_at' => NULL,'slug' => 'familial-1631039062'),
  array('id' => '1560','dossier_medical_id' => '1162','description' => 'No HTN, No DM, No PUD','date' => '2021-09-03','type' => 'Médical','created_at' => '2021-09-07 17:52:19','updated_at' => '2021-09-07 17:52:19','deleted_at' => NULL,'slug' => 'medical-1631040739'),
  array('id' => '1561','dossier_medical_id' => '1162','description' => 'None','date' => '2021-09-03','type' => 'Chirugical','created_at' => '2021-09-07 17:54:05','updated_at' => '2021-09-07 17:54:05','deleted_at' => NULL,'slug' => 'chirugical-1631040845'),
  array('id' => '1562','dossier_medical_id' => '1168','description' => 'Diabétique connu depuis 7ans environ','date' => NULL,'type' => 'Médical','created_at' => '2021-09-09 06:17:17','updated_at' => '2021-09-09 06:17:17','deleted_at' => NULL,'slug' => 'medical-1631171837'),
  array('id' => '1563','dossier_medical_id' => '1168','description' => 'RAS','date' => NULL,'type' => 'Chirugical','created_at' => '2021-09-09 06:17:39','updated_at' => '2021-09-09 06:17:39','deleted_at' => NULL,'slug' => 'chirugical-1631171859'),
  array('id' => '1564','dossier_medical_id' => '1173','description' => 'diabétique depuis 10 environ','date' => NULL,'type' => 'Médical','created_at' => '2021-09-09 08:25:04','updated_at' => '2021-09-09 08:25:04','deleted_at' => NULL,'slug' => 'medical-1631179504'),
  array('id' => '1565','dossier_medical_id' => '1173','description' => 'Appendicectomie en novembre 2020','date' => NULL,'type' => 'Chirugical','created_at' => '2021-09-09 08:25:52','updated_at' => '2021-09-09 08:25:52','deleted_at' => NULL,'slug' => 'chirugical-1631179552'),
  array('id' => '1566','dossier_medical_id' => '1173','description' => 'G9P8018;  Ménopausée  depuis 5 ans ; Mammographie( 2019); FCV jamais effectué','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2021-09-09 08:28:15','updated_at' => '2021-09-09 08:28:15','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1631179695'),
  array('id' => '1567','dossier_medical_id' => '1088','description' => 'known hypertensive since 10 years','date' => NULL,'type' => 'Médical','created_at' => '2021-09-10 04:51:48','updated_at' => '2021-09-10 04:51:48','deleted_at' => NULL,'slug' => 'medical-1631253108'),
  array('id' => '1568','dossier_medical_id' => '1180','description' => 'HTA Connu depuis 5ans sous tritazide
Thrombose veineuse du membre inferieur gauche  depuis 10 ans sous aspirine cardio','date' => NULL,'type' => 'Médical','created_at' => '2021-09-18 14:00:15','updated_at' => '2021-09-18 14:00:15','deleted_at' => NULL,'slug' => 'medical-1631977215'),
  array('id' => '1569','dossier_medical_id' => '1180','description' => 'chirurgie de l œil indiqué pour une cataracte','date' => NULL,'type' => 'Chirugical','created_at' => '2021-09-18 14:01:01','updated_at' => '2021-09-18 14:01:01','deleted_at' => NULL,'slug' => 'chirugical-1631977261'),
  array('id' => '1570','dossier_medical_id' => '1180','description' => 'G11P8038; ménopausé depuis plus d\' 11 ans ; mammographie et FCV réalisé il y\' a plus de 5ans ;ligature des trompe','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2021-09-18 14:03:08','updated_at' => '2021-09-18 14:03:08','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1631977388'),
  array('id' => '1571','dossier_medical_id' => '1193','description' => 'Hypertension','date' => '2017-01-01','type' => 'Médical','created_at' => '2021-10-10 13:37:04','updated_at' => '2021-10-10 13:37:04','deleted_at' => NULL,'slug' => 'medical-1633876624'),
  array('id' => '1572','dossier_medical_id' => '1193','description' => 'No Diabetes, no PUD','date' => '2021-10-10','type' => 'Médical','created_at' => '2021-10-10 13:38:00','updated_at' => '2021-10-10 13:38:00','deleted_at' => NULL,'slug' => 'medical-1633876680'),
  array('id' => '1573','dossier_medical_id' => '1193','description' => 'Prostatectomy','date' => '2021-04-01','type' => 'Gynéco-obstétrique','created_at' => '2021-10-10 13:39:09','updated_at' => '2021-10-10 13:39:09','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1633876749'),
  array('id' => '1574','dossier_medical_id' => '1190','description' => 'Diabetes Mellitus','date' => '2021-10-10','type' => 'Médical','created_at' => '2021-10-10 14:05:13','updated_at' => '2021-10-10 14:05:13','deleted_at' => NULL,'slug' => 'medical-1633878313'),
  array('id' => '1575','dossier_medical_id' => '1190','description' => 'No HTN, no PUD','date' => '2021-10-10','type' => 'Médical','created_at' => '2021-10-10 14:05:59','updated_at' => '2021-10-10 14:05:59','deleted_at' => NULL,'slug' => 'medical-1633878359'),
  array('id' => '1576','dossier_medical_id' => '1190','description' => 'Never been operated','date' => '2021-10-10','type' => 'Chirugical','created_at' => '2021-10-10 14:06:50','updated_at' => '2021-10-10 14:06:50','deleted_at' => NULL,'slug' => 'chirugical-1633878410'),
  array('id' => '1577','dossier_medical_id' => '1236','description' => 'Asthénie physique chronique depuis février 2021','date' => '2021-02-01','type' => 'Médical','created_at' => '2021-10-26 09:44:20','updated_at' => '2021-10-26 09:44:20','deleted_at' => NULL,'slug' => 'medical-1635245060'),
  array('id' => '1578','dossier_medical_id' => '1236','description' => 'Malformation de la rétine corrigée par le port de lunette','date' => NULL,'type' => 'Médical','created_at' => '2021-10-26 09:44:43','updated_at' => '2021-10-26 09:44:43','deleted_at' => NULL,'slug' => 'medical-1635245083'),
  array('id' => '1579','dossier_medical_id' => '1236','description' => 'Notion de d’hyper péristaltisme des anses intestinales en faveur d’un trouble fonctionnel (mise sous régime : riche en fruits et légumes cuits ; éviter les crudités, boissons, koki ; haricot ; viande rouge et de brousse ; produits laitiers) , sous ce régime est noté une bonne  évolution.','date' => NULL,'type' => 'Médical','created_at' => '2021-10-26 09:45:02','updated_at' => '2021-10-26 09:45:02','deleted_at' => NULL,'slug' => 'medical-1635245102'),
  array('id' => '1580','dossier_medical_id' => '1237','description' => 'RAS','date' => NULL,'type' => 'Médical','created_at' => '2021-10-27 08:38:04','updated_at' => '2021-10-27 08:38:04','deleted_at' => NULL,'slug' => 'medical-1635327484'),
  array('id' => '1581','dossier_medical_id' => '1237','description' => 'RAS','date' => NULL,'type' => 'Chirugical','created_at' => '2021-10-27 08:38:19','updated_at' => '2021-10-27 08:38:19','deleted_at' => NULL,'slug' => 'chirugical-1635327499'),
  array('id' => '1582','dossier_medical_id' => '1237','description' => 'RAS','date' => NULL,'type' => 'Familial','created_at' => '2021-10-27 08:38:34','updated_at' => '2021-10-27 08:38:34','deleted_at' => NULL,'slug' => 'familial-1635327514'),
  array('id' => '1583','dossier_medical_id' => '1175','description' => 'No hypertension, no diabetes','date' => '2021-09-16','type' => 'Médical','created_at' => '2021-11-08 11:54:57','updated_at' => '2021-11-08 11:54:57','deleted_at' => NULL,'slug' => 'medical-1636372497'),
  array('id' => '1584','dossier_medical_id' => '1175','description' => 'Never been operated','date' => '2021-09-16','type' => 'Chirugical','created_at' => '2021-11-08 11:56:01','updated_at' => '2021-11-08 11:56:01','deleted_at' => NULL,'slug' => 'chirugical-1636372561'),
  array('id' => '1585','dossier_medical_id' => '1175','description' => 'Hypertension and Diabetes','date' => '2021-09-16','type' => 'Familial','created_at' => '2021-11-08 11:57:03','updated_at' => '2021-11-08 11:57:03','deleted_at' => NULL,'slug' => 'familial-1636372623'),
  array('id' => '1586','dossier_medical_id' => '1175','description' => 'coitacle: 20 years old, Menarche: 14 years old, Cycle of 32 days and bleed for 2-3 days, G2P2002, LMP: 08/09/2021,','date' => '2021-09-16','type' => 'Gynéco-obstétrique','created_at' => '2021-11-08 12:26:07','updated_at' => '2021-11-08 12:26:07','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1636374367'),
  array('id' => '1587','dossier_medical_id' => '1246','description' => 'Néphrectomie partielle (selon le patient non documenté) il Ya 27 ans a l’hôpital central de Yaoundé indication mal connue  l’évolution post opératoire sera marqué par la survenue épisodique de dyspnée d’effort stade 2 NYHA','date' => '1994-01-01','type' => 'Chirugical','created_at' => '2021-11-09 08:43:27','updated_at' => '2021-11-09 08:43:27','deleted_at' => NULL,'slug' => 'chirugical-1636447407'),
  array('id' => '1588','dossier_medical_id' => '1246','description' => '	Père DCD de cause mal connue pas de pathologie chronique connue 
	Mère âgée de 80 ans pas de HTA ou de diabète 
	1er/8    pas de frère et sœur HTA ou diabétique','date' => NULL,'type' => 'Familial','created_at' => '2021-11-09 08:44:07','updated_at' => '2021-11-09 08:44:07','deleted_at' => NULL,'slug' => 'familial-1636447447'),
  array('id' => '1589','dossier_medical_id' => '1195','description' => 'diabète de novo découvert en cours d\'hospitalisation','date' => '2021-10-08','type' => 'Médical','created_at' => '2021-11-18 13:46:44','updated_at' => '2021-11-18 13:46:44','deleted_at' => NULL,'slug' => 'medical-1637243204'),
  array('id' => '1590','dossier_medical_id' => '1142','description' => 'Hypertension on Bipreterax 10/2,5mg : 1tab/day','date' => NULL,'type' => 'Médical','created_at' => '2021-11-24 17:41:30','updated_at' => '2021-11-24 17:43:14','deleted_at' => NULL,'slug' => 'medical-1637775690'),
  array('id' => '1591','dossier_medical_id' => '1142','description' => 'DT2 on Metformin 500mg : 1tab X 2/day','date' => NULL,'type' => 'Médical','created_at' => '2021-11-24 17:44:14','updated_at' => '2021-11-24 17:44:14','deleted_at' => NULL,'slug' => 'medical-1637775854'),
  array('id' => '1592','dossier_medical_id' => '1142','description' => 'Bilateral Glaucoma on Xalacom: 1 drop/eye at bedtime','date' => NULL,'type' => 'Médical','created_at' => '2021-11-24 17:46:00','updated_at' => '2021-11-24 17:46:00','deleted_at' => NULL,'slug' => 'medical-1637775960'),
  array('id' => '1593','dossier_medical_id' => '1142','description' => 'Benign prostatic hypertrophy on Silodix (1tab/day); Ditropam 5mg (1tab/day)','date' => NULL,'type' => 'Médical','created_at' => '2021-11-24 17:47:01','updated_at' => '2021-11-24 17:47:01','deleted_at' => NULL,'slug' => 'medical-1637776021'),
  array('id' => '1594','dossier_medical_id' => '1142','description' => 'Mother was hpertensive
Elder brother is hypertensive and has glaucoma','date' => NULL,'type' => 'Familial','created_at' => '2021-11-24 17:47:45','updated_at' => '2021-11-24 17:47:45','deleted_at' => NULL,'slug' => 'familial-1637776065'),
  array('id' => '1595','dossier_medical_id' => '1191','description' => 'Diabète 2','date' => NULL,'type' => 'Médical','created_at' => '2021-11-30 17:54:48','updated_at' => '2021-11-30 17:54:48','deleted_at' => NULL,'slug' => 'medical-1638294888'),
  array('id' => '1596','dossier_medical_id' => '64','description' => 'MRC stade III','date' => NULL,'type' => 'Médical','created_at' => '2021-12-03 17:45:55','updated_at' => '2021-12-03 17:45:55','deleted_at' => NULL,'slug' => 'medical-1638553555'),
  array('id' => '1597','dossier_medical_id' => '1297','description' => 'Tante hypertendu; 
Grande-mere hypertendu','date' => NULL,'type' => 'Familial','created_at' => '2021-12-03 18:12:55','updated_at' => '2021-12-03 18:14:36','deleted_at' => NULL,'slug' => 'familial-1638555175'),
  array('id' => '1598','dossier_medical_id' => '1299','description' => 'Mere hypertendu; 
Grande soeur hypertendu','date' => NULL,'type' => 'Familial','created_at' => '2021-12-03 18:15:30','updated_at' => '2021-12-03 18:15:30','deleted_at' => NULL,'slug' => 'familial-1638555330'),
  array('id' => '1599','dossier_medical_id' => '1316','description' => 'Notion de cancer de l’utérus chez la grande sœur décédée','date' => NULL,'type' => 'Familial','created_at' => '2021-12-10 05:06:40','updated_at' => '2021-12-10 05:06:40','deleted_at' => NULL,'slug' => 'familial-1639112800'),
  array('id' => '1600','dossier_medical_id' => '1317','description' => 'lombalgie ghronique','date' => '2011-01-01','type' => 'Médical','created_at' => '2021-12-10 05:32:55','updated_at' => '2021-12-10 05:35:40','deleted_at' => NULL,'slug' => 'medical-1639114375'),
  array('id' => '1601','dossier_medical_id' => '1317','description' => 'epigastralgie chronique','date' => '2016-01-01','type' => 'Médical','created_at' => '2021-12-10 05:34:40','updated_at' => '2021-12-10 05:34:40','deleted_at' => NULL,'slug' => 'medical-1639114480'),
  array('id' => '1602','dossier_medical_id' => '1323','description' => 'infirmité du membre inferieur gauche depuis l\'enfance','date' => '1960-01-01','type' => 'Médical','created_at' => '2021-12-17 14:08:53','updated_at' => '2021-12-17 14:08:53','deleted_at' => NULL,'slug' => 'medical-1639750133'),
  array('id' => '1603','dossier_medical_id' => '1323','description' => 'DOULEUR EPIGASTRIQUE','date' => NULL,'type' => 'Médical','created_at' => '2021-12-17 14:27:41','updated_at' => '2021-12-17 14:27:41','deleted_at' => NULL,'slug' => 'medical-1639751261'),
  array('id' => '1604','dossier_medical_id' => '1330','description' => 'DT2 Sous Diamicron et Metformine','date' => '2013-12-23','type' => 'Médical','created_at' => '2021-12-23 10:00:49','updated_at' => '2021-12-23 10:00:49','deleted_at' => NULL,'slug' => 'medical-1640253649'),
  array('id' => '1605','dossier_medical_id' => '1013','description' => 'HTA connu depuis 3 mois environ
sous aucun traitement','date' => '2021-09-01','type' => 'Médical','created_at' => '2022-01-14 20:09:10','updated_at' => '2022-01-14 20:09:10','deleted_at' => NULL,'slug' => 'medical-1642190950'),
  array('id' => '1606','dossier_medical_id' => '1013','description' => 'HTA','date' => '2021-09-01','type' => 'Médical','created_at' => '2022-01-14 20:11:20','updated_at' => '2022-01-14 20:11:20','deleted_at' => NULL,'slug' => 'medical-1642191080'),
  array('id' => '1607','dossier_medical_id' => '1348','description' => '-	Notion d’ASTHENIE physique d’intensité progressivement croissante évoluant depuis 2017 par intermittence','date' => NULL,'type' => 'Médical','created_at' => '2022-01-21 13:41:40','updated_at' => '2022-01-21 13:41:40','deleted_at' => NULL,'slug' => 'medical-1642772500'),
  array('id' => '1608','dossier_medical_id' => '1348','description' => '-	DYSPNEE de stade variable évoluant depuis 2017 par intermittence','date' => NULL,'type' => 'Médical','created_at' => '2022-01-21 13:42:18','updated_at' => '2022-01-21 13:42:18','deleted_at' => NULL,'slug' => 'medical-1642772538'),
  array('id' => '1609','dossier_medical_id' => '1348','description' => '-	Problème PSYCHIATRIQUE (Agitation, propos incohérent, hallucination) : 1er épisode en 2017.
Plusieurs épisodes à ce jour 
La malade est suivie par un Psychiatre et est actuellement sous :
Sulbutiamin 200 mg 2-0-2
Clorazepate dipotassique 10 mg 1cp / jr
Chlohrydrate de trihexyphénide 5 mg 1cp /jr
Rispéridone 2 mg 1/ jr','date' => NULL,'type' => 'Médical','created_at' => '2022-01-21 13:42:47','updated_at' => '2022-01-21 13:42:47','deleted_at' => NULL,'slug' => 'medical-1642772567'),
  array('id' => '1610','dossier_medical_id' => '1348','description' => '-	Infertilité primaire : 
D’après la malade une hystérosalpingographie (non documenté) aurait été réalisée et revenue en faveur d’une obstruction tubaire. La VIF aurait été proposée','date' => NULL,'type' => 'Médical','created_at' => '2022-01-21 13:43:16','updated_at' => '2022-01-21 13:43:16','deleted_at' => NULL,'slug' => 'medical-1642772596'),
  array('id' => '1611','dossier_medical_id' => '1348','description' => 'Perte de poids de 0.62 % en 4 mois environs','date' => NULL,'type' => 'Médical','created_at' => '2022-01-21 13:43:46','updated_at' => '2022-01-21 13:43:46','deleted_at' => NULL,'slug' => 'medical-1642772626'),
  array('id' => '1612','dossier_medical_id' => '1363','description' => 'Hypertension
Heart failure
Diabetic
Said to have kidney disease','date' => NULL,'type' => 'Médical','created_at' => '2022-02-17 12:44:09','updated_at' => '2022-02-17 12:44:09','deleted_at' => NULL,'slug' => 'medical-1645101849'),
  array('id' => '1613','dossier_medical_id' => '1364','description' => 'Epigastralgia','date' => NULL,'type' => 'Médical','created_at' => '2022-02-23 17:08:30','updated_at' => '2022-02-23 17:08:30','deleted_at' => NULL,'slug' => 'medical-1645636110'),
  array('id' => '1614','dossier_medical_id' => '1365','description' => 'G8P6026','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2022-02-23 18:33:50','updated_at' => '2022-02-23 18:33:50','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1645641230'),
  array('id' => '1615','dossier_medical_id' => '1365','description' => 'Mammography: Never
Pap smear: Never','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2022-02-23 18:34:39','updated_at' => '2022-02-23 18:34:39','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1645641279'),
  array('id' => '1616','dossier_medical_id' => '1088','description' => 'Tuméfaction occulaire bilatérale evoluant par intermittence depuis environs 03 mois','date' => NULL,'type' => 'Médical','created_at' => '2022-03-24 13:34:04','updated_at' => '2022-03-24 13:34:04','deleted_at' => NULL,'slug' => 'medical-1648128844'),
  array('id' => '1617','dossier_medical_id' => '1088','description' => 'Douleur pelvienne ayant nécessité la réalisation d\'une biopsie cervicale et revenue en faveur d\'une dsplasie légère sur cervicte condylomateuse','date' => NULL,'type' => 'Médical','created_at' => '2022-03-24 13:37:48','updated_at' => '2022-03-24 13:37:48','deleted_at' => NULL,'slug' => 'medical-1648129068'),
  array('id' => '1618','dossier_medical_id' => '1448','description' => 'Hypertendu sous Amarel
Diabète de type 2 sous Metformine','date' => NULL,'type' => 'Médical','created_at' => '2022-06-26 10:21:51','updated_at' => '2022-06-26 10:21:51','deleted_at' => NULL,'slug' => 'medical-1656242511'),
  array('id' => '1619','dossier_medical_id' => '1454','description' => 'HTA connue depuis plusieurs années sous NATRIXAM 1cp/jour','date' => NULL,'type' => 'Médical','created_at' => '2022-07-12 11:27:23','updated_at' => '2022-07-12 11:27:23','deleted_at' => NULL,'slug' => 'medical-1657628843'),
  array('id' => '1620','dossier_medical_id' => '1454','description' => 'cécité bilatérale depuis un an environ','date' => NULL,'type' => 'Médical','created_at' => '2022-07-12 11:29:43','updated_at' => '2022-07-12 11:29:43','deleted_at' => NULL,'slug' => 'medical-1657628983'),
  array('id' => '1621','dossier_medical_id' => '1406','description' => 'G3P0030
G1 en 2019 FCS à 7SA
G2 en 2020 FCS à 16SA ( sous cerclage)
G3 en Mars 2022 FCS à 22SA ( décerclage fait à 16SA pour persistance de métrorarargie sous cerclage)
DDR','date' => '2019-02-15','type' => 'Gynéco-obstétrique','created_at' => '2022-07-15 08:07:32','updated_at' => '2022-07-15 08:07:32','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1657876052'),
  array('id' => '1622','dossier_medical_id' => '24','description' => 'DT2 insulino-dépendant connue depuis 2005 sous METFORMINE 1000 (1cp/j) UMALOC 6-6-6 UI et LANTUS 0-0-20 UI','date' => NULL,'type' => 'Médical','created_at' => '2022-07-18 07:54:18','updated_at' => '2022-07-18 07:54:18','deleted_at' => NULL,'slug' => 'medical-1658134458'),
  array('id' => '1623','dossier_medical_id' => '24','description' => 'DT2 insulino-dépendant connue depuis 2005 sous METFORMINE 1000  UMALOC  et LANTUS','date' => NULL,'type' => 'Médical','created_at' => '2022-07-18 08:13:48','updated_at' => '2022-07-18 08:13:48','deleted_at' => NULL,'slug' => 'medical-1658135628'),
  array('id' => '1624','dossier_medical_id' => '24','description' => 'DT2 insulino-dépendant connue depuis 2005 sous METFORMINE 1000 HUMALOC et LANTUS','date' => NULL,'type' => 'Médical','created_at' => '2022-07-18 08:19:23','updated_at' => '2022-07-18 08:19:23','deleted_at' => NULL,'slug' => 'medical-1658135963'),
  array('id' => '1625','dossier_medical_id' => '1191','description' => 'HTA sous AMLOR 10mg 1cp/jour','date' => NULL,'type' => 'Médical','created_at' => '2022-07-18 10:11:36','updated_at' => '2022-07-18 10:11:36','deleted_at' => NULL,'slug' => 'medical-1658142696'),
  array('id' => '1626','dossier_medical_id' => '1191','description' => 'BAV de 3e degrée probablement intr nodal ( indiquant la pose d\'un pace maker)','date' => NULL,'type' => 'Médical','created_at' => '2022-07-18 10:12:37','updated_at' => '2022-07-18 10:12:37','deleted_at' => NULL,'slug' => 'medical-1658142757'),
  array('id' => '1627','dossier_medical_id' => '1191','description' => 'Troubles neuro psychiatrique sous artane tanakan theralene tiapridal et stimol ( si asthenie)','date' => NULL,'type' => 'Médical','created_at' => '2022-07-18 10:13:59','updated_at' => '2022-07-18 10:13:59','deleted_at' => NULL,'slug' => 'medical-1658142839'),
  array('id' => '1628','dossier_medical_id' => '450','description' => 'Néoplasie mammaire droite pour laquelle, elle a eu une chirurgie il y\'a 4 mois ( CRO et résultats ANAPATH non disponibles)','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2022-07-18 12:22:52','updated_at' => '2022-07-18 12:22:52','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1658150572'),
  array('id' => '1629','dossier_medical_id' => '450','description' => 'Poly arthralgies récidivantes et invalidantes pour les quelles elle a été hospitalisé à KM il y\'a 3 semaines et traité de façon symptomatique à la demande de la souscriptrice','date' => NULL,'type' => 'Médical','created_at' => '2022-07-18 12:25:20','updated_at' => '2022-07-18 12:25:20','deleted_at' => NULL,'slug' => 'medical-1658150720'),
  array('id' => '1630','dossier_medical_id' => '1455','description' => 'HTA de découverte fortuite sous Captopril+HCT 50/25mg: 1cp/jour ( compliant au traitement mais observance approximative) dernier rdv chez le cardiologue en Mai 2022 sans particularité avec maintien du meme traitement','date' => NULL,'type' => 'Médical','created_at' => '2022-07-19 11:00:45','updated_at' => '2022-07-19 11:00:45','deleted_at' => NULL,'slug' => 'medical-1658232045'),
  array('id' => '1631','dossier_medical_id' => '1455','description' => 'DT2 de découverte fortuite, sous insulino thérapie + GLIBOMET 400/2,5: 1cp*2/jour avec des glycémie à jeun variant entre 0,8 et 1,35 ces derniers jours','date' => NULL,'type' => 'Médical','created_at' => '2022-07-19 11:04:18','updated_at' => '2022-07-19 11:04:18','deleted_at' => NULL,'slug' => 'medical-1658232258'),
  array('id' => '1632','dossier_medical_id' => '1455','description' => 'Consultation dans un centre pour Urine trouble et mousseux, urgenturie et modification du jet au décours de laquelle une Echo rénale a été faite et aurait montré un kyste rénal, bilan biologique demandé non réalisé','date' => '2022-07-10','type' => 'Médical','created_at' => '2022-07-19 11:07:31','updated_at' => '2022-07-19 11:07:31','deleted_at' => NULL,'slug' => 'medical-1658232451'),
  array('id' => '1633','dossier_medical_id' => '1455','description' => 'Constipation permanente ( moins de 3 selles par semaine non sanguinolente) évoluant depuis plusieurs années et soulagée par la prise de fruits et produits laitiers.','date' => NULL,'type' => 'Médical','created_at' => '2022-07-19 11:09:19','updated_at' => '2022-07-19 11:09:19','deleted_at' => NULL,'slug' => 'medical-1658232559'),
  array('id' => '1634','dossier_medical_id' => '1455','description' => 'chirurgie non documentée pour pathologies hémorroïdaires externe','date' => NULL,'type' => 'Chirugical','created_at' => '2022-07-19 11:10:36','updated_at' => '2022-07-19 11:10:36','deleted_at' => NULL,'slug' => 'chirugical-1658232636'),
  array('id' => '1635','dossier_medical_id' => '1444','description' => 'Pas de pathologies chroniques connues','date' => NULL,'type' => 'Médical','created_at' => '2022-07-20 10:00:05','updated_at' => '2022-07-20 10:00:05','deleted_at' => NULL,'slug' => 'medical-1658314805'),
  array('id' => '1636','dossier_medical_id' => '1444','description' => 'DDR: 15/06/2022 cycle régulier de 30 jours','date' => NULL,'type' => 'Gynéco-obstétrique','created_at' => '2022-07-20 10:01:23','updated_at' => '2022-07-20 10:01:23','deleted_at' => NULL,'slug' => 'gyneco-obstetrique-1658314883'),
  array('id' => '1637','dossier_medical_id' => '288','description' => 'HTA connu depuis 2010  découvert lors d\'une consultation de routine, actuellement sous NATRIXAM 1,5/10mg: 1cp/jour et INSTACLOP ( Clopidogrel) 75mg: 1cp/jour','date' => NULL,'type' => 'Médical','created_at' => '2022-07-22 10:18:09','updated_at' => '2022-07-22 10:18:09','deleted_at' => NULL,'slug' => 'medical-1658488689'),
  array('id' => '1638','dossier_medical_id' => '288','description' => 'Goutte connu et suivi, actuellement sous ZYLORIC 100mg: 0-2-0','date' => '2020-01-01','type' => 'Médical','created_at' => '2022-07-25 08:19:14','updated_at' => '2022-07-25 08:19:14','deleted_at' => NULL,'slug' => 'medical-1658740754'),
  array('id' => '1639','dossier_medical_id' => '288','description' => 'HTA chez les ascendants et les collatéraux
notion de cancer de la prostate chez le parent','date' => NULL,'type' => 'Familial','created_at' => '2022-07-25 08:21:19','updated_at' => '2022-07-25 08:21:19','deleted_at' => NULL,'slug' => 'familial-1658740879'),
  array('id' => '1640','dossier_medical_id' => '1452','description' => 'dflmmldfmldmfl fdmksfmlmlsf sfmlsfmlsf mlsfmlsfmlsf klsfklsfklsf sfksfmksf','date' => '2022-08-04','type' => 'Chirugical','created_at' => '2022-08-11 15:52:45','updated_at' => '2022-08-11 15:52:45','deleted_at' => NULL,'slug' => 'chirugical-1660233165'),
  array('id' => '1641','dossier_medical_id' => '1452','description' => 'fdfjkjsnsfksf sfksfjksf sfjksfksfksf sfksfklsfklsf sfksfklsf sfklsfklf','date' => '2022-08-09','type' => 'Chirugical','created_at' => '2022-08-19 14:27:12','updated_at' => '2022-08-19 14:27:12','deleted_at' => NULL,'slug' => 'chirugical-1660919232'),
  array('id' => '1642','dossier_medical_id' => '1452','description' => 'Modification d\'un antededent','date' => '2022-08-09','type' => 'Chirugical','created_at' => '2022-08-19 14:31:30','updated_at' => '2022-08-19 15:08:32','deleted_at' => '2022-08-19 15:08:32','slug' => 'chirugical-1660919490')
);

foreach($antecedents as $antecedent){
    $new_antecedent = Antecedent::create(['id' => $antecedent['id'], 'dossier_medical_id' => $antecedent['dossier_medical_id'], 'description' => $antecedent['description'], 'date' => $antecedent['date'] ?? date('Y-m-d'), 'slug' => $antecedent['slug'], 'created_at' => $antecedent['created_at'], 'updated_at' => $antecedent['updated_at'], 'deleted_at' => $antecedent['deleted_at']]);
    $type = Type::where('libelle', $antecedent['type'])->first();
    $new_antecedent->types()->sync($type);
}

    }
}




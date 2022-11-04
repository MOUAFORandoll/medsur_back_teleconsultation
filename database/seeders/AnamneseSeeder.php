<?php

namespace Database\Seeders;

use App\Models\Anamnese;
use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AnamneseSeeder extends Seeder
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
            array('libelle' => 'Général', 'created_at' => $date, 'updated_at' => $date),
            array('libelle' => 'Tête et ORL', 'created_at' => $date, 'updated_at' => $date),
            array('libelle' => 'Cardio-vasculaire', 'created_at' => $date, 'updated_at' => $date),
            array('libelle' => 'Pulmonaire', 'created_at' => $date, 'updated_at' => $date),
            array('libelle' => 'Gastro-intestinal', 'created_at' => $date, 'updated_at' => $date),
            array('libelle' => 'Uro-génital / gynécologique', 'created_at' => $date, 'updated_at' => $date),
            array('libelle' => 'Ostéo-articulaire', 'created_at' => $date, 'updated_at' => $date),
            array('libelle' => 'Neurologique', 'created_at' => $date, 'updated_at' => $date),
            array('libelle' => 'Dermatologique', 'created_at' => $date, 'updated_at' => $date),
            array('libelle' => 'Psychiatrique', 'created_at' => $date, 'updated_at' => $date)
        );

        foreach($types as $type){
            Type::create($type);
        }

        $anamneses = array(
            array('id' => '1','fr_description' => 'Fièvre','en_description' => 'Fièvre','reference' => 'Général','slug' => 'skhqxylefb-1629880774','deleted_at' => NULL,'created_at' => '2021-08-25 06:39:34','updated_at' => '2021-08-25 06:39:34'),
            array('id' => '2','fr_description' => 'Asthénie','en_description' => 'Asthénie','reference' => 'Général','slug' => 'v0uchxipjj-1629880774','deleted_at' => NULL,'created_at' => '2021-08-25 06:39:34','updated_at' => '2021-08-25 06:39:34'),
            array('id' => '3','fr_description' => 'Sueurs nocturnes','en_description' => 'Sueurs nocturnes','reference' => 'Général','slug' => 'folvtl9rig-1629880774','deleted_at' => NULL,'created_at' => '2021-08-25 06:39:34','updated_at' => '2021-08-25 06:39:34'),
            array('id' => '4','fr_description' => 'Transpiration','en_description' => 'Transpiration','reference' => 'Général','slug' => '6oecwgbbhy-1629880774','deleted_at' => NULL,'created_at' => '2021-08-25 06:39:34','updated_at' => '2021-08-25 06:39:34'),
            array('id' => '5','fr_description' => 'Prise de poids','en_description' => 'Prise de poids','reference' => 'Général','slug' => 'z8kuljp6nv-1629880774','deleted_at' => NULL,'created_at' => '2021-08-25 06:39:34','updated_at' => '2021-08-25 06:39:34'),
            array('id' => '6','fr_description' => 'Perte de poids','en_description' => 'Perte de poids','reference' => 'Général','slug' => 'bpcjwm0oqz-1629880774','deleted_at' => NULL,'created_at' => '2021-08-25 06:39:34','updated_at' => '2021-08-25 06:39:34'),
            array('id' => '7','fr_description' => 'Rhinorrhée','en_description' => 'Rhinorrhée','reference' => 'Tête et ORL','slug' => 'gdbekbm8eq-1629880774','deleted_at' => NULL,'created_at' => '2021-08-25 06:39:34','updated_at' => '2021-08-25 06:39:34'),
            array('id' => '8','fr_description' => 'Otorrhée','en_description' => 'Otorrhée','reference' => 'Tête et ORL','slug' => '6xc3g9dsxx-1629880775','deleted_at' => NULL,'created_at' => '2021-08-25 06:39:35','updated_at' => '2021-08-25 06:39:35'),
            array('id' => '9','fr_description' => 'Otalgie','en_description' => 'Otalgie','reference' => 'Tête et ORL','slug' => 'l9jntyu1io-1629880775','deleted_at' => NULL,'created_at' => '2021-08-25 06:39:35','updated_at' => '2021-08-25 06:39:35'),
            array('id' => '10','fr_description' => 'Saignement du nez','en_description' => 'Saignement du nez','reference' => 'Tête et ORL','slug' => 'q3ofq3clwr-1629880775','deleted_at' => NULL,'created_at' => '2021-08-25 06:39:35','updated_at' => '2021-08-25 06:39:35'),
            array('id' => '11','fr_description' => 'Baisse de l\'audition','en_description' => 'Baisse de l\'audition','reference' => 'Tête et ORL','slug' => 'bokv4bkvzj-1629880775','deleted_at' => NULL,'created_at' => '2021-08-25 06:39:35','updated_at' => '2021-08-25 06:39:35'),
            array('id' => '12','fr_description' => 'Acouphènes','en_description' => 'Acouphènes','reference' => 'Tête et ORL','slug' => 'tfjzurxdno-1629880775','deleted_at' => NULL,'created_at' => '2021-08-25 06:39:35','updated_at' => '2021-08-25 06:39:35'),
            array('id' => '13','fr_description' => 'Diminution du goût','en_description' => 'Diminution du goût','reference' => 'Tête et ORL','slug' => 'clf3hpmloa-1629880775','deleted_at' => NULL,'created_at' => '2021-08-25 06:39:35','updated_at' => '2021-08-25 06:39:35'),
            array('id' => '14','fr_description' => 'Baisse de la vue','en_description' => 'Baisse de la vue','reference' => 'Tête et ORL','slug' => 'ovjc4ahiy9-1629880775','deleted_at' => NULL,'created_at' => '2021-08-25 06:39:35','updated_at' => '2021-08-25 06:39:35'),
            array('id' => '15','fr_description' => 'Vision floue','en_description' => 'Vision floue','reference' => 'Tête et ORL','slug' => 'gjozgwk2wz-1629880775','deleted_at' => NULL,'created_at' => '2021-08-25 06:39:35','updated_at' => '2021-08-25 06:39:35'),
            array('id' => '16','fr_description' => 'Mouches volantes devant les yeux','en_description' => 'Mouches volantes devant les yeux','reference' => 'Tête et ORL','slug' => '5ojckn9vo6-1629880775','deleted_at' => NULL,'created_at' => '2021-08-25 06:39:35','updated_at' => '2021-08-25 06:39:35'),
            array('id' => '17','fr_description' => 'Diplopie','en_description' => 'Diplopie','reference' => 'Tête et ORL','slug' => '28x2ymod5e-1629880775','deleted_at' => NULL,'created_at' => '2021-08-25 06:39:35','updated_at' => '2021-08-25 06:39:35'),
            array('id' => '18','fr_description' => 'Douleur dentaire','en_description' => 'Douleur dentaire','reference' => 'Tête et ORL','slug' => 'fowtahpnuq-1629880775','deleted_at' => NULL,'created_at' => '2021-08-25 06:39:35','updated_at' => '2021-08-25 06:39:35'),
            array('id' => '19','fr_description' => 'Odynophagie','en_description' => 'Odynophagie','reference' => 'Tête et ORL','slug' => 'vin5ybnk7u-1629880775','deleted_at' => NULL,'created_at' => '2021-08-25 06:39:35','updated_at' => '2021-08-25 06:39:35'),
            array('id' => '20','fr_description' => 'Douleur thoracique','en_description' => 'Douleur thoracique','reference' => 'Cardio-vasculaire','slug' => 'll2iblo8b1-1629880775','deleted_at' => NULL,'created_at' => '2021-08-25 06:39:35','updated_at' => '2021-08-25 06:39:35'),
            array('id' => '21','fr_description' => 'Palpitations','en_description' => 'Palpitations','reference' => 'Cardio-vasculaire','slug' => 'oxz62uxjrx-1629880775','deleted_at' => NULL,'created_at' => '2021-08-25 06:39:35','updated_at' => '2021-08-25 06:39:35'),
            array('id' => '22','fr_description' => 'Dyspnée','en_description' => 'Dyspnée','reference' => 'Cardio-vasculaire','slug' => 'nw8xobt9ok-1629880775','deleted_at' => NULL,'created_at' => '2021-08-25 06:39:35','updated_at' => '2021-08-25 06:39:35'),
            array('id' => '23','fr_description' => 'Toux','en_description' => 'Toux','reference' => 'Cardio-vasculaire','slug' => 'jo0nhmomrl-1629880775','deleted_at' => NULL,'created_at' => '2021-08-25 06:39:35','updated_at' => '2021-08-25 06:39:35'),
            array('id' => '24','fr_description' => 'Dyspnée','en_description' => 'Dyspnée','reference' => 'Pulmonaire','slug' => 'tqxmk7hmgm-1629880775','deleted_at' => NULL,'created_at' => '2021-08-25 06:39:35','updated_at' => '2021-08-25 06:39:35'),
            array('id' => '25','fr_description' => 'Toux','en_description' => 'Toux','reference' => 'Pulmonaire','slug' => 'dfyjx4gs2p-1629880775','deleted_at' => NULL,'created_at' => '2021-08-25 06:39:35','updated_at' => '2021-08-25 06:39:35'),
            array('id' => '26','fr_description' => 'Douleur thoracique','en_description' => 'Douleur thoracique','reference' => 'Pulmonaire','slug' => 'p40vx2bkjs-1629880775','deleted_at' => NULL,'created_at' => '2021-08-25 06:39:35','updated_at' => '2021-08-25 06:39:35'),
            array('id' => '27','fr_description' => 'Expectoration','en_description' => 'Expectoration','reference' => 'Pulmonaire','slug' => 'rk0erji9wc-1629880775','deleted_at' => NULL,'created_at' => '2021-08-25 06:39:35','updated_at' => '2021-08-25 06:39:35'),
            array('id' => '28','fr_description' => 'Hémoptysie','en_description' => 'Hémoptysie','reference' => 'Pulmonaire','slug' => '78qfwkrcoh-1629880775','deleted_at' => NULL,'created_at' => '2021-08-25 06:39:35','updated_at' => '2021-08-25 06:39:35'),
            array('id' => '29','fr_description' => 'Tabagisme','en_description' => 'Tabagisme','reference' => 'Pulmonaire','slug' => 'r2ch9jurdm-1629880775','deleted_at' => NULL,'created_at' => '2021-08-25 06:39:35','updated_at' => '2021-08-25 06:39:35'),
            array('id' => '30','fr_description' => 'Nausée','en_description' => 'Nausée','reference' => 'Gastro-intestinal','slug' => 'vnbsdnovbq-1629880775','deleted_at' => NULL,'created_at' => '2021-08-25 06:39:35','updated_at' => '2021-08-25 06:39:35'),
            array('id' => '31','fr_description' => 'Vomissement','en_description' => 'Vomissement','reference' => 'Gastro-intestinal','slug' => 'gindbzyl2e-1629880775','deleted_at' => NULL,'created_at' => '2021-08-25 06:39:35','updated_at' => '2021-08-25 06:39:35'),
            array('id' => '32','fr_description' => 'Douleur abdominale','en_description' => 'Douleur abdominale','reference' => 'Gastro-intestinal','slug' => 'iao7x6qrnl-1629880776','deleted_at' => NULL,'created_at' => '2021-08-25 06:39:36','updated_at' => '2021-08-25 06:39:36'),
            array('id' => '33','fr_description' => 'Ballonnement','en_description' => 'Ballonnement','reference' => 'Gastro-intestinal','slug' => 'sukl2oh2ts-1629880776','deleted_at' => NULL,'created_at' => '2021-08-25 06:39:36','updated_at' => '2021-08-25 06:39:36'),
            array('id' => '34','fr_description' => 'Selles dures','en_description' => 'Selles dures','reference' => 'Gastro-intestinal','slug' => 'rsyoq2lphj-1629880776','deleted_at' => NULL,'created_at' => '2021-08-25 06:39:36','updated_at' => '2021-08-25 06:39:36'),
            array('id' => '35','fr_description' => 'Selles moles','en_description' => 'Selles moles','reference' => 'Gastro-intestinal','slug' => '6gs8judqpq-1629880776','deleted_at' => NULL,'created_at' => '2021-08-25 06:39:36','updated_at' => '2021-08-25 06:39:36'),
            array('id' => '36','fr_description' => 'Rectorragies','en_description' => 'Rectorragies','reference' => 'Gastro-intestinal','slug' => 'kwl1yaiyoj-1629880776','deleted_at' => NULL,'created_at' => '2021-08-25 06:39:36','updated_at' => '2021-08-25 06:39:36'),
            array('id' => '37','fr_description' => 'Méléna','en_description' => 'Méléna','reference' => 'Gastro-intestinal','slug' => 'ahlqcnsszm-1629880776','deleted_at' => NULL,'created_at' => '2021-08-25 06:39:36','updated_at' => '2021-08-25 06:39:36'),
            array('id' => '38','fr_description' => 'Dysphagie','en_description' => 'Dysphagie','reference' => 'Gastro-intestinal','slug' => '0pdlml79l5-1629880776','deleted_at' => NULL,'created_at' => '2021-08-25 06:39:36','updated_at' => '2021-08-25 06:39:36'),
            array('id' => '39','fr_description' => 'Perte d\'appétit','en_description' => 'Perte d\'appétit','reference' => 'Gastro-intestinal','slug' => 'kmbmsgwmf1-1629880776','deleted_at' => NULL,'created_at' => '2021-08-25 06:39:36','updated_at' => '2021-08-25 06:39:36'),
            array('id' => '40','fr_description' => 'Perte involontaire de selles','en_description' => 'Perte involontaire de selles','reference' => 'Gastro-intestinal','slug' => 'kiu44pkzdj-1629880776','deleted_at' => NULL,'created_at' => '2021-08-25 06:39:36','updated_at' => '2021-08-25 06:39:36'),
            array('id' => '41','fr_description' => 'Nycturie','en_description' => 'Nycturie','reference' => 'Uro-génital / gynécologique','slug' => '6ljeqpbge8-1629880776','deleted_at' => NULL,'created_at' => '2021-08-25 06:39:36','updated_at' => '2021-08-25 06:39:36'),
            array('id' => '42','fr_description' => 'Pollakiurie','en_description' => 'Pollakiurie','reference' => 'Uro-génital / gynécologique','slug' => '5wi3onfbef-1629880776','deleted_at' => NULL,'created_at' => '2021-08-25 06:39:36','updated_at' => '2021-08-25 06:39:36'),
            array('id' => '43','fr_description' => 'Urgenturie','en_description' => 'Urgenturie','reference' => 'Uro-génital / gynécologique','slug' => 'ghhqwpw17e-1629880776','deleted_at' => NULL,'created_at' => '2021-08-25 06:39:36','updated_at' => '2021-08-25 06:39:36'),
            array('id' => '44','fr_description' => 'Brûlure mictionnelle','en_description' => 'Brûlure mictionnelle','reference' => 'Uro-génital / gynécologique','slug' => '12x863mtzl-1629880776','deleted_at' => NULL,'created_at' => '2021-08-25 06:39:36','updated_at' => '2021-08-25 06:39:36'),
            array('id' => '45','fr_description' => 'Douleur sus-pubienne','en_description' => 'Douleur sus-pubienne','reference' => 'Uro-génital / gynécologique','slug' => 'moaxifrtjr-1629880776','deleted_at' => NULL,'created_at' => '2021-08-25 06:39:36','updated_at' => '2021-08-25 06:39:36'),
            array('id' => '46','fr_description' => 'Hématurie','en_description' => 'Hématurie','reference' => 'Uro-génital / gynécologique','slug' => 'rfx0myjnxq-1629880776','deleted_at' => NULL,'created_at' => '2021-08-25 06:39:36','updated_at' => '2021-08-25 06:39:36'),
            array('id' => '47','fr_description' => 'Miction en 2 temps','en_description' => 'Miction en 2 temps','reference' => 'Uro-génital / gynécologique','slug' => 'fhfudnunak-1629880776','deleted_at' => NULL,'created_at' => '2021-08-25 06:39:36','updated_at' => '2021-08-25 06:39:36'),
            array('id' => '48','fr_description' => 'Perte invonlontaire d\'urine','en_description' => 'Perte invonlontaire d\'urine','reference' => 'Uro-génital / gynécologique','slug' => 'pruntiwx6r-1629880776','deleted_at' => NULL,'created_at' => '2021-08-25 06:39:36','updated_at' => '2021-08-25 06:39:36'),
            array('id' => '49','fr_description' => 'Ménorragies','en_description' => 'Ménorragies','reference' => 'Uro-génital / gynécologique','slug' => 'lnt2kx9xx2-1629880776','deleted_at' => NULL,'created_at' => '2021-08-25 06:39:36','updated_at' => '2021-08-25 06:39:36'),
            array('id' => '50','fr_description' => 'Métrorragies','en_description' => 'Métrorragies','reference' => 'Uro-génital / gynécologique','slug' => 'ekrg9dczz9-1629880776','deleted_at' => NULL,'created_at' => '2021-08-25 06:39:36','updated_at' => '2021-08-25 06:39:36'),
            array('id' => '51','fr_description' => 'Douleur musculaire','en_description' => 'Douleur musculaire','reference' => 'Ostéo-articulaire','slug' => 'pvjee9yjit-1629880777','deleted_at' => NULL,'created_at' => '2021-08-25 06:39:37','updated_at' => '2021-08-25 06:39:37'),
            array('id' => '52','fr_description' => 'Douleur osseuse','en_description' => 'Douleur osseuse','reference' => 'Ostéo-articulaire','slug' => 'rnwvz9ndu0-1629880777','deleted_at' => NULL,'created_at' => '2021-08-25 06:39:37','updated_at' => '2021-08-25 06:39:37'),
            array('id' => '53','fr_description' => 'Douleur articulaire','en_description' => 'Douleur articulaire','reference' => 'Ostéo-articulaire','slug' => 'akqjzwanqp-1629880777','deleted_at' => NULL,'created_at' => '2021-08-25 06:39:37','updated_at' => '2021-08-25 06:39:37'),
            array('id' => '54','fr_description' => 'Vertiges','en_description' => 'Vertiges','reference' => 'Neurologique','slug' => 'dtp9hvveur-1629880777','deleted_at' => NULL,'created_at' => '2021-08-25 06:39:37','updated_at' => '2021-08-25 06:39:37'),
            array('id' => '55','fr_description' => 'Céphalées','en_description' => 'Céphalées','reference' => 'Neurologique','slug' => 'rx52o1w2vu-1629880777','deleted_at' => NULL,'created_at' => '2021-08-25 06:39:37','updated_at' => '2021-08-25 06:39:37'),
            array('id' => '56','fr_description' => 'Oublies régulières','en_description' => 'Oublies régulières','reference' => 'Neurologique','slug' => 'x7o0jdp6vr-1629880777','deleted_at' => NULL,'created_at' => '2021-08-25 06:39:37','updated_at' => '2021-08-25 06:39:37'),
            array('id' => '57','fr_description' => 'Paresthésie','en_description' => 'Paresthésie','reference' => 'Neurologique','slug' => 'erobahfgvx-1629880777','deleted_at' => NULL,'created_at' => '2021-08-25 06:39:37','updated_at' => '2021-08-25 06:39:37'),
            array('id' => '58','fr_description' => 'Parésie','en_description' => 'Parésie','reference' => 'Neurologique','slug' => '5w7l3xhvkv-1629880777','deleted_at' => NULL,'created_at' => '2021-08-25 06:39:37','updated_at' => '2021-08-25 06:39:37'),
            array('id' => '59','fr_description' => 'Dysarthrie','en_description' => 'Dysarthrie','reference' => 'Neurologique','slug' => 'edogzvwppd-1629880777','deleted_at' => NULL,'created_at' => '2021-08-25 06:39:37','updated_at' => '2021-08-25 06:39:37'),
            array('id' => '60','fr_description' => 'Malaise','en_description' => 'Malaise','reference' => 'Neurologique','slug' => 'rvc0dvjkkq-1629880777','deleted_at' => NULL,'created_at' => '2021-08-25 06:39:37','updated_at' => '2021-08-25 06:39:37'),
            array('id' => '61','fr_description' => 'Perte de connaissance','en_description' => 'Perte de connaissance','reference' => 'Neurologique','slug' => 'k47zgepa4u-1629880777','deleted_at' => NULL,'created_at' => '2021-08-25 06:39:37','updated_at' => '2021-08-25 06:39:37'),
            array('id' => '62','fr_description' => 'Trouble à la marche','en_description' => 'Trouble à la marche','reference' => 'Neurologique','slug' => 'cpbd0gpa0s-1629880777','deleted_at' => NULL,'created_at' => '2021-08-25 06:39:37','updated_at' => '2021-08-25 06:39:37'),
            array('id' => '63','fr_description' => 'Prurit','en_description' => 'Prurit','reference' => 'Dermatologique','slug' => 'th94ox5xvb-1629880777','deleted_at' => NULL,'created_at' => '2021-08-25 06:39:37','updated_at' => '2021-08-25 06:39:37'),
            array('id' => '64','fr_description' => 'Tâches','en_description' => 'Tâches','reference' => 'Dermatologique','slug' => '9wo9ysysjs-1629880777','deleted_at' => NULL,'created_at' => '2021-08-25 06:39:37','updated_at' => '2021-08-25 06:39:37'),
            array('id' => '65','fr_description' => 'Eruptions cutanées','en_description' => 'Eruptions cutanées','reference' => 'Dermatologique','slug' => 'oop6zr3pi9-1629880777','deleted_at' => NULL,'created_at' => '2021-08-25 06:39:37','updated_at' => '2021-08-25 06:39:37'),
            array('id' => '66','fr_description' => 'Plaies','en_description' => 'Plaies','reference' => 'Dermatologique','slug' => 'jecqe21nrb-1629880777','deleted_at' => NULL,'created_at' => '2021-08-25 06:39:37','updated_at' => '2021-08-25 06:39:37'),
            array('id' => '67','fr_description' => 'Moral bas','en_description' => 'Moral bas','reference' => 'Psychiatrique','slug' => 'lxph6sidih-1629880777','deleted_at' => NULL,'created_at' => '2021-08-25 06:39:37','updated_at' => '2021-08-25 06:39:37'),
            array('id' => '68','fr_description' => 'Humeur dépressive','en_description' => 'Humeur dépressive','reference' => 'Psychiatrique','slug' => 'naxihihxwv-1629880777','deleted_at' => NULL,'created_at' => '2021-08-25 06:39:37','updated_at' => '2021-08-25 06:39:37'),
            array('id' => '69','fr_description' => 'Anxiété','en_description' => 'Anxiété','reference' => 'Psychiatrique','slug' => '1ydberxezt-1629880777','deleted_at' => NULL,'created_at' => '2021-08-25 06:39:37','updated_at' => '2021-08-25 06:39:37'),
            array('id' => '70','fr_description' => 'Angoisse','en_description' => 'Angoisse','reference' => 'Psychiatrique','slug' => 'cgqve1k2op-1629880777','deleted_at' => NULL,'created_at' => '2021-08-25 06:39:37','updated_at' => '2021-08-25 06:39:37'),
            array('id' => '71','fr_description' => 'Rumination','en_description' => 'Rumination','reference' => 'Psychiatrique','slug' => 'fnoiyldadf-1629880778','deleted_at' => NULL,'created_at' => '2021-08-25 06:39:38','updated_at' => '2021-08-25 06:39:38'),
            array('id' => '72','fr_description' => 'Maltraitance','en_description' => 'Maltraitance','reference' => 'Psychiatrique','slug' => 'ujnh2sa91h-1629880778','deleted_at' => NULL,'created_at' => '2021-08-25 06:39:38','updated_at' => '2021-08-25 06:39:38'),
            array('id' => '73','fr_description' => 'Abus','en_description' => 'Abus','reference' => 'Psychiatrique','slug' => 'ulkb3rktvh-1629880778','deleted_at' => NULL,'created_at' => '2021-08-25 06:39:38','updated_at' => '2021-08-25 06:39:38'),
            array('id' => '74','fr_description' => 'Viol','en_description' => 'Viol','reference' => 'Psychiatrique','slug' => 'zxcqcjpduu-1629880778','deleted_at' => NULL,'created_at' => '2021-08-25 06:39:38','updated_at' => '2021-08-25 06:39:38')
        );

        foreach($anamneses as $anamnese){
            $new_anamnese = Anamnese::create(['id' => $anamnese['id'], 'fr_description' => $anamnese['fr_description'], 'en_description' => $anamnese['en_description'], 'slug' => $anamnese['slug'], 'created_at' => $anamnese['created_at'], 'updated_at' => $anamnese['updated_at'], 'deleted_at' => $anamnese['deleted_at']]);
            $type = Type::where('libelle', $anamnese['reference'])->first();
            $new_anamnese->types()->sync($type);
        }
    }
}

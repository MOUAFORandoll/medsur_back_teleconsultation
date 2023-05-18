# Lumen PHP Framework

[![Build Status](https://travis-ci.org/laravel/lumen-framework.svg)](https://travis-ci.org/laravel/lumen-framework)
[![Total Downloads](https://img.shields.io/packagist/dt/laravel/lumen-framework)](https://packagist.org/packages/laravel/lumen-framework)
[![Latest Stable Version](https://img.shields.io/packagist/v/laravel/lumen-framework)](https://packagist.org/packages/laravel/lumen-framework)
[![License](https://img.shields.io/packagist/l/laravel/lumen)](https://packagist.org/packages/laravel/lumen-framework)

Laravel Lumen is a stunningly fast PHP micro-framework for building web applications with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Lumen attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as routing, database abstraction, queueing, and caching.

## Official Documentation

Documentation for the framework can be found on the [Lumen website](https://lumen.laravel.com/docs).

## Contributing

Thank you for considering contributing to Lumen! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Security Vulnerabilities

If you discover a security vulnerability within Lumen, please send an e-mail to Taylor Otwell at taylor@laravel.com. All security vulnerabilities will be promptly addressed.

## License

The Lumen framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

## run lumen microservice of teleconsultation
`docker-compose up --remove-orphans`
## create the migration
php artisan make:migration dossier_allergie --create=dossier_allergie

## add attribute to table
php artisan make:migration types --create=types
php artisan make:migration motifs --create=motifs
php artisan make:migration anamneses --create=anamneses
php artisan make:migration antecedents --create=antecedents
php artisan make:migration etablissements --create=etablissements
php artisan make:migration examen_clinics --create=examen_clinics
php artisan make:migration examen_complementaires --create=examen_complementaires
php artisan make:migration statuts --create=statuts
php artisan make:migration rendez_vous --create=rendez_vous
php artisan make:migration niveau_urgences --create=niveau_urgences
php artisan make:migration diagnostics --create=diagnostics
php artisan make:migration ordonnances --create=ordonnances

php artisan make:migration prescriptions --create=prescriptions
php artisan make:migration medicaments --create=medicaments
php artisan make:migration examen_pertinants --create=examen_pertinants


## 
php artisan ide-helper:models

## open projects (run the following command)
`docker-compose exec teleconsultation composer install`
`docker-compose exec teleconsultation php artisan migrate:fresh --seed`
`http://localhost:8002/`

## access on postgresql
`docker-compose exec postgresql psql -U postgres`

## seeder modules complémentaires

docker-compose exec teleconsultation php artisan db:seed --class=RaisonPrescriptionSeeder
docker-compose exec teleconsultation php artisan db:seed --class=OptionFinancementSeeder

docker-compose exec teleconsultation php artisan db:seed --class=BonPriseEnChargeSeeder
docker-compose exec teleconsultation php artisan db:seed --class=PrescriptionImagerieSeeder

## e-prescriptions
docker-compose exec teleconsultation php artisan db:seed --class=CategorieMedicamenteuseSeeder
docker-compose exec teleconsultation php artisan db:seed --class=ConditionnementSeeder
docker-compose exec teleconsultation php artisan db:seed --class=IntervalleDePriseSeeder
docker-compose exec teleconsultation php artisan db:seed --class=FormeMedicamenteuseSeeder
docker-compose exec teleconsultation php artisan db:seed --class=RelationAlimentaireSeeder
docker-compose exec teleconsultation php artisan db:seed --class=VoieAdministrationSeeder
docker-compose exec teleconsultation php artisan db:seed --class=UnitePresentationSeeder
docker-compose exec teleconsultation php artisan db:seed --class=HoraireDePriseSeeder
docker-compose exec teleconsultation php artisan db:seed --class=PrescriptionSeeder



## Mise en production des modules complémentaires à la téléconsultation

php artisan migrate --path=/database/migrations/2023_02_13_135422_bon_prises_en_charges.php
php artisan migrate --path=/database/migrations/2023_02_13_164724_examen_analyses.php
php artisan migrate --path=/database/migrations/2023_02_13_164820_raison_financements.php
php artisan migrate --path=/database/migrations/2023_02_13_164900_option_financements.php
php artisan migrate --path=/database/migrations/2023_02_21_161511_information_supplementaires.php
php artisan migrate --path=/database/migrations/2023_02_27_161026_prescription_imageries.php
php artisan migrate --path=/database/migrations/2023_03_13_093627_examen_pertinants.php
php artisan migrate --path=/database/migrations/2023_03_28_154713_update_description_to_antecedents_table.php
php artisan migrate --path=/database/migrations/2023_03_28_154805_update_description_to_anamneses_table.php

php artisan migrate --path=/database/migrations/2023_04_05_135525_change_size_data_to_teleconsultationables_table.php

## 

php artisan db:seed --class=OptionFinancementSeeder
php artisan db:seed --class=RaisonPrescriptionSeeder
php artisan db:seed --class=ExamenPertinentPrecedentSeeder
php artisan db:seed --class=InformationSupplementaireSeeder
php artisan db:seed --class=ExamenComplementaireUpdateSeeder


// php artisan migrate --path=/database/migrations/2023_02_13_100826_prescriptions.php
// php artisan migrate --path=/database/migrations/2023_02_17_111727_unite_presentation.php
// php artisan migrate --path=/database/migrations/2023_02_17_113318_horaire_de_prises.php
// php artisan migrate --path=/database/migrations/2023_02_22_135305_categorie_medicamenteuses.php
// php artisan migrate --path=/database/migrations/2023_02_22_141645_conditionnements.php
// php artisan migrate --path=/database/migrations/2023_02_22_141746_intervalle_de_prise.php
// php artisan migrate --path=/database/migrations/2023_02_22_141838_relation_alimentaires.php
// php artisan migrate --path=/database/migrations/2023_02_22_141923_forme_medicamenteuses.php
// php artisan migrate --path=/database/migrations/2023_02_22_142438_voie_administrations.php
// php artisan migrate --path=/database/migrations/2023_02_27_111553_medicaments.php


docker-compose exec teleconsultation php artisan migrate --path=/database/migrations/2023_03_28_154713_update_description_to_antecedents_table.php
docker-compose exec teleconsultation php artisan migrate --path=/database/migrations/2023_03_28_154805_update_description_to_anamneses_table.php
docker-compose exec teleconsultation php artisan migrate --path=/database/migrations/2023_04_03_094503_add_description_to_types_table.php


docker-compose exec teleconsultation php artisan db:seed --class=ExamenComplementaireUpdateSeeder

docker-compose exec teleconsultation php artisan make:migration change_size_data_to_teleconsultationables_table --table=teleconsultationables




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


## 
php artisan ide-helper:models

## open projects (run the following command)
`docker-compose exec teleconsultation composer install`
`docker-compose exec teleconsultation php artisan migrate:fresh --seed`
`http://localhost:8002/`

## access on postgresql
`docker-compose exec postgresql psql -U postgres`
<?php
namespace App\Enums;
enum Statut {
    /**
     * Bibliotheque des statuts
     */
    const EN_COURS = 1;
    const ANNULER = 2;
    const EN_ATTENTE = 3;
    const TERMINER = 4;
    const REPROGRAMMER = 5;
    const PROGRAMMER = 6;
    const EFFECTUER = 7;
    const Manquer = 8;

}
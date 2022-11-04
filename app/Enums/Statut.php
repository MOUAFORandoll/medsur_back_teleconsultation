<?php
namespace App\Enums;

enum Statut : int {
    /**
     * Bibliotheque des statuts
     */
    case EN_COURS = 1;
    case ANNULER = 2;
    case EN_ATTENTE = 3;
    case TERMINER = 4;
    case REPROGRAMMER = 5;
    case PROGRAMMER = 6;
    case EFFECTUER = 7;
    case MANQUER = 8;

    public function label(): string {
        return static::getLabel($this);
    }

    public function status($label): int {
        return static::getStatut($label);
    }

    public static function getLabel(self $value): string {

        return match ($value) {
            Statut::EN_COURS => 'En cours',
            Statut::ANNULER => 'Annulé',
            Statut::EN_ATTENTE => 'En Attente',
            Statut::TERMINER => 'Terminer',
            Statut::REPROGRAMMER => 'Reprogrammé',
            Statut::PROGRAMMER => 'Programmé',
            Statut::EFFECTUER => 'Effectué',
            Statut::MANQUER => 'Manqué'
        };
    }

    public static function getStatut(string $label): int {
        
        switch ($label) {
            case "Annulé":
                return  Statut::ANNULER->value;
            case "Programmé":
                return Statut::PROGRAMMER->value;
            case "Manqué":
                return Statut::MANQUER->value;
            case "Reprogrammé":
                return Statut::REPROGRAMMER->value;
            case "Effectué":
                return Statut::EFFECTUER->value;
            default:
            return Statut::PROGRAMMER->value;
        };
        return 0;
    }

}
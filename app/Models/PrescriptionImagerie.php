<?php

namespace App\Models;

use App\Traits\Scopes;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class PrescriptionImagerie extends Model
{
    use HasFactory,  SoftDeletes, Scopes;


    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'prescription_imageries';


    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'uuid', 'patient_id', 'creator', 'ligne_temps_id', 'medecin_id', 'niveau_urgence_id', 'renseignement_clinique', 'information_clinique', 'explication_demande_diagnostic', 'autre', 'date_heure'];

    public function teleconsultations(){
        return $this->morphToMany(Teleconsultation::class, 'teleconsultationable')->latest();
    }

    public function etablissements(){
        return $this->morphedByMany(Etablissement::class, 'prescription_imagerieable')->latest();
    }

    public function option_financements(){
        return $this->morphedByMany(OptionFinancement::class, 'prescription_imagerieable')->latest();
    }

    public function raison_prescriptions(){
        return $this->morphedByMany(RaisonPrescription::class, 'prescription_imagerieable')->latest();
    }

    public function examen_complementaires(){
        return $this->morphedByMany(ExamenComplementaire::class, 'prescription_imagerieable')->latest();
    }

    public function niveau_urgence(){
        return $this->belongsTo(NiveauUrgence::class);
    }

    public function information_supplementaires(){
        return $this->morphedByMany(InformationSupplementaire::class, 'prescription_imagerieable')->latest();
    }

    public function examens_pertinents(){
        return $this->morphedByMany(ExamenPertinentPrecedent::class, 'prescription_imagerieable')->latest();
    }


}

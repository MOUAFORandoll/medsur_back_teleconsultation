<?php

namespace App\Models;

use App\Traits\Scopes;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;



class BonPriseEnCharge extends Model
{
    use HasFactory,  SoftDeletes, Scopes;


    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'bon_prises_en_charges';


    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = ['uuid', 'patient_id', 'creator', 'ligne_temps_id', 'medecin_id', 'niveau_urgence_id', 'plainte'];

    public function teleconsultations(){
        return $this->morphToMany(Teleconsultation::class, 'teleconsultationable');
    }

    public function type_teleconsultations(){
        return $this->morphedByMany(Type::class, 'bon_prises_en_chargeable')->latest();
    }

    public function motifs(){
        return $this->morphedByMany(Motif::class, 'bon_prises_en_chargeable')->latest();
    }

    public function examen_complementaires(){
        return $this->morphedByMany(ExamenComplementaire::class, 'bon_prises_en_chargeable')->latest();
    }

    public function etablissements(){
        return $this->morphedByMany(Etablissement::class, 'bon_prises_en_chargeable')->latest();
    }

    public function option_financements(){
        return $this->morphedByMany(OptionFinancement::class, 'bon_prises_en_chargeable')->latest();
    }

    public function raison_prescriptions(){
        return $this->morphedByMany(RaisonPrescription::class, 'bon_prises_en_chargeable')->latest();
    }

    public function examens_analyses(){
        return $this->morphedByMany(ExamenAnalyse::class, 'bon_prises_en_chargeable')->latest();
    }

    public function ordonnances(){
        return $this->morphedByMany(Ordonnance::class, 'bon_prises_en_chargeable')->latest();
    }

    public function examens_imageries(){
        return $this->morphedByMany(PrescriptionImagerie::class, 'bon_prises_en_chargeable')->latest();
    }

    public function rendezVous(){
        return $this->morphedByMany(RendezVous::class, 'bon_prises_en_chargeable')->latest();
    }

    public function niveau_urgence(){
        return $this->belongsTo(NiveauUrgence::class);
    }

}

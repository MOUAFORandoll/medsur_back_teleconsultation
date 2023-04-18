<?php

namespace App\Models;

use App\Traits\Scopes;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;



class Prescription extends Model
{
    use HasFactory,  SoftDeletes, Scopes;


    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'prescriptions';


    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'uuid', 'patient_id', 'creator', 'ligne_temps_id', 'medecin_id', 'niveau_urgence_id', 'date_heure', 'motif'
    ];

    public function teleconsultations(){
        return $this->morphToMany(Teleconsultation::class, 'teleconsultationable');
    }

    public function etablissements(){
        return $this->morphedByMany(Etablissement::class, 'prescriptionable')->latest();
    }

    public function option_financements(){
        return $this->morphedByMany(OptionFinancement::class, 'prescriptionable');
    }

    public function raison_prescriptions(){
        return $this->morphedByMany(RaisonPrescription::class, 'prescriptionable');
    }

 /*    public function examen_complementaires(){
        return $this->morphedByMany(ExamenComplementaire::class, 'prescriptionable');
    } */

    public function niveau_urgence(){
        return $this->belongsTo(NiveauUrgence::class);
    }

    public function medicaments(){
        return $this->belongsToMany(Medicament::class, 'prescription_medicament')->withPivot('quantite_lors_une_prise', 'duree_traitement', 'nombre_de_prise', 'nombre_renouvelement', 'nombre_de_fois', 'intervalle_entre_deux_prises', 'nombre_unite_achat')->latest();
    }

}

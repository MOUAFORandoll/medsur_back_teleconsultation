<?php

namespace App\Models;

use App\Traits\Scopes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;



class ExamenAnalyse extends Model
{
    use HasFactory,  SoftDeletes, Scopes;


    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'examen_analyses';


    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = ['uuid', 'patient_id', 'ligne_temps_id', 'medecin_id', 'creator', 'niveau_urgence_id', 'renseignement_clinique', 'date_heure'];


    public function etablissements(){
        return $this->morphedByMany(Etablissement::class, 'examen_analyseable');
    }

    public function option_financements(){
        return $this->morphedByMany(OptionFinancement::class, 'examen_analyseable');
    }

    public function raison_prescriptions(){
        return $this->morphedByMany(OptionFinancement::class, 'examen_analyseable');
    }

    public function examen_complementaires(){
        return $this->morphedByMany(ExamenComplementaire::class, 'examen_analyseable');
    }

    public function niveau_urgence(){
        return $this->belongsTo(NiveauUrgence::class);
    }

    public function teleconsultations(){
        return $this->morphToMany(Teleconsultation::class, 'teleconsultationable');
    }

}

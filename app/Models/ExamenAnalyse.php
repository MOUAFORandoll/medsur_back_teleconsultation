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
    protected $fillable = ['patient_id', 'ligne_temps_id', 'medecin_id', 'creator', 'etablissement_id', 'option_financement_id', 'raison_prescription_id', 'niveau_urgence_id', 'renseignement_clinique', 'date_heure'];

    public function etablissement(){
        return $this->belongsTo(Etablissement::class);
    }

    public function option_financement(){
        return $this->belongsTo(OptionFinancement::class);
    }

    public function raison_prescription(){
        return $this->belongsTo(OptionFinancement::class);
    }

    public function niveau_urgence(){
        return $this->belongsTo(NiveauUrgence::class);
    }

    public function examen_complementaires(){
        return $this->morphToMany(ExamenComplementaire::class, 'examen_analyseable');
    }

    public function teleconsultations(){
        return $this->morphToMany(Teleconsultation::class, 'teleconsultationable');
    }

}

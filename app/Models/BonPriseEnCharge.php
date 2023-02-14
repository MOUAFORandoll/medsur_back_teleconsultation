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
    protected $fillable = ['uuid', 'creator', 'medecin_id', 'patient_id', 'plainte'];

    public function teleconsultations(){
        return $this->morphToMany(Teleconsultation::class, 'teleconsultationable');
    }

    public function motifs(){
        return $this->morphedByMany(Motif::class, 'bon_prises_en_chargeable')->latest();
    }

    public function examen_complementaires(){
        return $this->morphedByMany(ExamenComplementaire::class, 'bon_prises_en_chargeable')->latest();
    }

}

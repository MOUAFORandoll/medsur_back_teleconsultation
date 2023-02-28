<?php

namespace App\Models;

use App\Traits\Scopes;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;



class Medicament extends Model
{
    use HasFactory,  SoftDeletes, Scopes;


    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'medicaments';


    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'uuid', 'unite_presentation_id', 'voie_administration_id', 'conditionnement_id', 'nom_commerciale', 'code'
    ];

    public function unite_presentation(){
        return $this->belongsTo(UnitePresentation::class);
    }

    public function horaire_de_prises(){
        return $this->morphedByMany(HoraireDePrise::class, 'medicamentable')->latest();
    }

    public function conditionnement(){
        return $this->belongsTo(Conditionnement::class);
    }

    public function intervalle_de_prises(){
        return $this->morphedByMany(IntervalleDePrise::class, 'medicamentable')->latest();
    }

    public function relation_alimentaires(){
        return $this->morphedByMany(RelationAlimentation::class, 'medicamentable')->latest();
    }

    public function forme_medicamenteuses(){
        return $this->morphedByMany(FormeMedicamenteuse::class, 'medicamentable')->latest();
    }

    public function voie_administration(){
        return $this->morphedByMany(VoieAdministration::class, 'medicamentable')->latest();
    }

    public function prescriptions(){
        return $this->belongsToMany(Prescription::class, 'prescription_medicament');
    }



}

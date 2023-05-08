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
        'uuid', 'prescription_id', 'unite_presentation_id', 'voie_administration_id', 'conditionnement_id', 'medicament', 'code', 'forme_pharmaceutique', 'categorie_medicamenteuse_id',
    ];

    public function unite_presentation()
    {
        return $this->belongsTo(UnitePresentation::class);
    }

    public function categorie_medicamenteuse()
    {
        return $this->belongsTo(CategorieMedicamenteuse::class);
    }

    public function horaire_de_prises()
    {
        return $this->morphedByMany(HoraireDePrise::class, 'medicamentable')->latest();
    }

    public function conditionnement()
    {
        return $this->belongsTo(Conditionnement::class);
    }

    public function conditionnements()
    {
        return $this->morphedByMany(Conditionnement::class, 'medicamentable')->latest();
    }

    public function intervalle_de_prises()
    {
        return $this->morphedByMany(IntervalleDePrise::class, 'medicamentable')->latest();
    }

    public function relation_alimentaires()
    {
        return $this->morphedByMany(RelationAlimentation::class, 'medicamentable')->latest();
    }

    public function forme_medicamenteuses()
    {
        return $this->morphedByMany(FormeMedicamenteuse::class, 'medicamentable')->latest();
    }

    public function voie_administrations()
    {
        return $this->morphedByMany(VoieAdministration::class, 'medicamentable')->latest();
    }

    public function prescriptions()
    {
        return $this->belongsToMany(Prescription::class, 'prescription_medicament')->withPivot('quantite_lors_une_prise', 'duree_traitement', 'nombre_de_prise', 'nombre_renouvelement', 'nombre_de_fois', 'intervalle_entre_deux_prises', 'nombre_unite_achat')->latest();
    }
}

<?php

namespace App\Models;

use App\Traits\Scopes;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;



/**
 * App\Models\Teleconsultation
 *
 * @property string $id
 * @property int $patient_id
 * @property int $creator
 * @property string $date_heure
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Allergie[] $allergies
 * @property-read int|null $allergies_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Anamnese[] $anamneses
 * @property-read int|null $anamneses_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Antecedent[] $antededents
 * @property-read int|null $antededents_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Etablissement[] $etablissements
 * @property-read int|null $etablissements_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\ExamenClinique[] $examenCliniques
 * @property-read int|null $examen_cliniques_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\ExamenComplementaire[] $examenComplementaires
 * @property-read int|null $examen_complementaires_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Motif[] $motifs
 * @property-read int|null $motifs_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\RendezVous[] $rendezVous
 * @property-read int|null $rendez_vous_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Type[] $types
 * @property-read int|null $types_count
 * @method static \Database\Factories\TeleconsultationFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Teleconsultation like($field, $value)
 * @method static \Illuminate\Database\Eloquent\Builder|Teleconsultation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Teleconsultation newQuery()
 * @method static \Illuminate\Database\Query\Builder|Teleconsultation onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Teleconsultation query()
 * @method static \Illuminate\Database\Eloquent\Builder|Teleconsultation whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Teleconsultation whereCreator($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Teleconsultation whereDateHeure($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Teleconsultation whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Teleconsultation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Teleconsultation wherePatientId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Teleconsultation whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|Teleconsultation withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Teleconsultation withoutTrashed()
 * @mixin \Eloquent
 */
class Teleconsultation extends Model
{
    use HasFactory,  SoftDeletes, Scopes;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'teleconsultations';

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'uuid', 'patient_id', 'creator', 'date_heure', 'cat', 'description_diagnostic'
    ];

    protected $appends = ['type'];

    public function getTypeAttribute()
    {
        $type = $this->makeHidden('types');
        $type = $this->types->first()->makeHidden('pivot');
        return ['id' => $type->id, 'libelle' => $type->libelle];
    }

    /**
     * type teleconsultations
     */
    public function types(){
        return $this->morphToMany(Type::class, 'typeable')->latest();
    }

    public function allergies(){
        return $this->morphedByMany(Allergie::class, 'teleconsultationable')->latest();
    }

    public function anamneses(){
        return $this->morphedByMany(Anamnese::class, 'teleconsultationable')->withPivot('data')->latest();
    }

    public function antededents(){
        return $this->morphedByMany(Antecedent::class, 'teleconsultationable')->latest();
    }

    public function motifs(){
        return $this->morphedByMany(Motif::class, 'teleconsultationable')->latest();
    }

    public function rendezVous(){
        return $this->morphedByMany(RendezVous::class, 'teleconsultationable')->latest();
    }

    public function examenCliniques(){
        return $this->morphedByMany(ExamenClinique::class, 'teleconsultationable')->latest();
    }

    public function examenComplementaires(){
        return $this->morphedByMany(ExamenComplementaire::class, 'teleconsultationable')->latest();
    }

    public function etablissements(){
        return $this->morphedByMany(Etablissement::class, 'teleconsultationable')->latest();
    }

    public function diagnostics(){
        return $this->morphedByMany(Diagnostic::class, 'teleconsultationable')->latest();
    }

    public function ordonnances(){
        return $this->morphedByMany(Ordonnance::class, 'teleconsultationable')->latest();
    }


}


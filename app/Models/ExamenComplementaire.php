<?php

namespace App\Models;

use App\Traits\Scopes;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


/**
 * App\Models\ExamenComplementaire
 *
 * @method static \Illuminate\Database\Eloquent\Builder|ExamenComplementaire newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ExamenComplementaire newQuery()
 * @method static \Illuminate\Database\Query\Builder|ExamenComplementaire onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|ExamenComplementaire query()
 * @method static \Illuminate\Database\Query\Builder|ExamenComplementaire withTrashed()
 * @method static \Illuminate\Database\Query\Builder|ExamenComplementaire withoutTrashed()
 * @mixin \Eloquent
 * @property string $id
 * @property string $fr_description
 * @property int $prix
 * @property string $slug
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\EtablissementExamenComplementaire[] $etablissement_examen_complementaires
 * @property-read int|null $etablissement_examen_complementaires_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Teleconsultation[] $teleconsultations
 * @property-read int|null $teleconsultations_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Type[] $types
 * @property-read int|null $types_count
 * @method static \Illuminate\Database\Eloquent\Builder|ExamenComplementaire like($field, $value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExamenComplementaire whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExamenComplementaire whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExamenComplementaire whereFrDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExamenComplementaire whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExamenComplementaire wherePrix($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExamenComplementaire whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExamenComplementaire whereUpdatedAt($value)
 */
class ExamenComplementaire extends Model
{
    use HasFactory,  SoftDeletes, Scopes;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'examen_complementaires';


    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'uuid', 'fr_description', 'prix', 'slug'
    ];

    /**
     * type anamnèse
     */
    public function types(){
        return $this->morphToMany(Type::class, 'typeable');
    }

    public function etablissement_examen_complementaires(){
        return $this->hasMany(EtablissementExamenComplementaire::class);
    }

    public function teleconsultations(){
        return $this->morphToMany(Teleconsultation::class, 'teleconsultationable');
    }

    public function examen_analyses(){
        return $this->morphToMany(ExamenAnalyse::class, 'examen_analyseable')->latest();
    }

    public function prescription_imageries(){
        return $this->morphToMany(PrescriptionImagerie::class, 'prescription_imagerieable')->latest();
    }


}

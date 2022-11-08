<?php

namespace App\Models;

use App\Traits\Scopes;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


/**
 * App\Models\ExamenClinique
 *
 * @method static \Illuminate\Database\Eloquent\Builder|ExamenClinique newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ExamenClinique newQuery()
 * @method static \Illuminate\Database\Query\Builder|ExamenClinique onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|ExamenClinique query()
 * @method static \Illuminate\Database\Query\Builder|ExamenClinique withTrashed()
 * @method static \Illuminate\Database\Query\Builder|ExamenClinique withoutTrashed()
 * @mixin \Eloquent
 * @property string $id
 * @property string $fr_description
 * @property string|null $en_description
 * @property string $slug
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Teleconsultation[] $teleconsultations
 * @property-read int|null $teleconsultations_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Type[] $types
 * @property-read int|null $types_count
 * @method static \Illuminate\Database\Eloquent\Builder|ExamenClinique like($field, $value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExamenClinique whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExamenClinique whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExamenClinique whereEnDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExamenClinique whereFrDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExamenClinique whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExamenClinique whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExamenClinique whereUpdatedAt($value)
 */
class ExamenClinique extends Model
{
    use HasFactory,  SoftDeletes, Scopes;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'examen_clinics';


    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'uuid', 'fr_description', 'en_description', 'slug'
    ];

    public function types(){
        return $this->morphToMany(Type::class, 'typeable');
    }

    public function teleconsultations(){
        return $this->morphToMany(Teleconsultation::class, 'teleconsables');
    }

}

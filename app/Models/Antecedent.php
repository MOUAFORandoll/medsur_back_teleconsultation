<?php

namespace App\Models;

use App\Traits\Scopes;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


/**
 * App\Models\Antecedent
 *
 * @property string $id
 * @property string $dossier_medical_id
 * @property string $description
 * @property string $date
 * @property string $slug
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Teleconsultation[] $teleconsultations
 * @property-read int|null $teleconsultations_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Type[] $types
 * @property-read int|null $types_count
 * @method static \Illuminate\Database\Eloquent\Builder|Antecedent like($field, $value)
 * @method static \Illuminate\Database\Eloquent\Builder|Antecedent newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Antecedent newQuery()
 * @method static \Illuminate\Database\Query\Builder|Antecedent onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Antecedent query()
 * @method static \Illuminate\Database\Eloquent\Builder|Antecedent whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Antecedent whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Antecedent whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Antecedent whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Antecedent whereDossierMedicalId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Antecedent whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Antecedent whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Antecedent whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|Antecedent withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Antecedent withoutTrashed()
 * @mixin \Eloquent
 */
class Antecedent extends Model
{
    use HasFactory, HasUuids, SoftDeletes, Scopes;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'antecedents';


    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'dossier_medical_id', 'description', 'date', 'slug'
    ];

    /**
     * type antecedent
     */
    public function types(){
        return $this->morphToMany(Type::class, 'typeable');
    }

    public function teleconsultations(){
        return $this->morphToMany(Teleconsultation::class, 'teleconsables');
    }
    

}

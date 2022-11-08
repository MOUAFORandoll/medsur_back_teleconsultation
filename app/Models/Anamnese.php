<?php

namespace App\Models;

use App\Traits\Scopes;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


/**
 * App\Models\Anamnese
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Anamnese newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Anamnese newQuery()
 * @method static \Illuminate\Database\Query\Builder|Anamnese onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Anamnese query()
 * @method static \Illuminate\Database\Query\Builder|Anamnese withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Anamnese withoutTrashed()
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
 * @method static \Illuminate\Database\Eloquent\Builder|Anamnese like($field, $value)
 * @method static \Illuminate\Database\Eloquent\Builder|Anamnese whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Anamnese whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Anamnese whereEnDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Anamnese whereFrDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Anamnese whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Anamnese whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Anamnese whereUpdatedAt($value)
 */
class Anamnese extends Model
{
    use HasFactory,  SoftDeletes, Scopes;
    

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'anamneses';


    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'uuid', 'fr_description', 'en_description', 'slug'
    ];


    /**
     * type anamnèse
     */
    public function types(){
        return $this->morphToMany(Type::class, 'typeable');
    }


    public function teleconsultations(){
        return $this->morphToMany(Teleconsultation::class, 'teleconsables');
    }



}

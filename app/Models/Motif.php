<?php

namespace App\Models;

use App\Traits\Scopes;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


/**
 * App\Models\Motif
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Motif newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Motif newQuery()
 * @method static \Illuminate\Database\Query\Builder|Motif onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Motif query()
 * @method static \Illuminate\Database\Query\Builder|Motif withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Motif withoutTrashed()
 * @mixin \Eloquent
 * @property string $id
 * @property string $description
 * @property string $slug
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Teleconsultation[] $teleconsultations
 * @property-read int|null $teleconsultations_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Type[] $types
 * @property-read int|null $types_count
 * @method static \Illuminate\Database\Eloquent\Builder|Motif like($field, $value)
 * @method static \Illuminate\Database\Eloquent\Builder|Motif whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Motif whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Motif whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Motif whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Motif whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Motif whereUpdatedAt($value)
 */
class Motif extends Model
{
    use HasFactory,  SoftDeletes, Scopes;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'motifs';


    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'uuid', 'description', 'slug'
    ];

    /**
     * type teleconsultations
     */
    public function types(){
        return $this->morphToMany(Type::class, 'typeable');
    }

    public function teleconsultations(){
        return $this->morphToMany(Teleconsultation::class, 'teleconsables');
    }

}

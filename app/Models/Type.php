<?php

namespace App\Models;

use App\Traits\Scopes;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;



/**
 * App\Models\Type
 *
 * @property string $id
 * @property string $libelle
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Anamnese[] $anamneses
 * @property-read int|null $anamneses_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Antecedent[] $antecedents
 * @property-read int|null $antecedents_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Teleconsultation[] $teleconsultations
 * @property-read int|null $teleconsultations_count
 * @method static \Illuminate\Database\Eloquent\Builder|Type like($field, $value)
 * @method static \Illuminate\Database\Eloquent\Builder|Type newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Type newQuery()
 * @method static \Illuminate\Database\Query\Builder|Type onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Type query()
 * @method static \Illuminate\Database\Eloquent\Builder|Type whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Type whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Type whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Type whereLibelle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Type whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|Type withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Type withoutTrashed()
 * @mixin \Eloquent
 */
class Type extends Model
{
    use HasFactory, SoftDeletes, Scopes;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'types';


    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'uuid', 'libelle'
    ];

    public function teleconsultations(){
        return $this->morphedByMany(Teleconsultation::class, 'typeable');
    }

    public function anamneses(){
        return $this->morphedByMany(Anamnese::class, 'typeable');
    }

    public function antecedents(){
        return $this->morphedByMany(Antecedent::class, 'typeable');
    }

    public function examen_cliniques(){
        return $this->morphedByMany(ExamenClinique::class, 'typeable');
    }



}

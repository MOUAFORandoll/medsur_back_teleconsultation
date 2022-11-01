<?php

namespace App\Models;

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
 */
class ExamenComplementaire extends Model
{
    use HasFactory, HasUuids, SoftDeletes;

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
        'fr_description', 'prix', 'slug'
    ];

    /**
     * type anamnèse
     */
    public function types(){
        return $this->morphToMany(Type::class, 'typeable');
    }

}

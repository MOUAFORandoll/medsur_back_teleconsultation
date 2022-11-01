<?php

namespace App\Models;

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
 */
class Anamnese extends Model
{
    use HasFactory, HasUuids, SoftDeletes;
    

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
        'fr_description', 'en_description', 'slug'
    ];

    /**
     * type anamnèse
     */
    public function types(){
        return $this->morphToMany(Type::class, 'typeable');
    }



}

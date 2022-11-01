<?php

namespace App\Models;

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
 */
class ExamenClinique extends Model
{
    use HasFactory, HasUuids, SoftDeletes;

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
        'fr_description', 'en_description', 'slug'
    ];

}

<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


/**
 * App\Models\Allergie
 *
 * @property string $id
 * @property string $description
 * @property string $date
 * @property string $slug
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\DossierAllergie[] $dossier_allergie
 * @property-read int|null $dossier_allergie_count
 * @method static \Illuminate\Database\Eloquent\Builder|Allergie newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Allergie newQuery()
 * @method static \Illuminate\Database\Query\Builder|Allergie onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Allergie query()
 * @method static \Illuminate\Database\Eloquent\Builder|Allergie whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Allergie whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Allergie whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Allergie whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Allergie whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Allergie whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Allergie whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|Allergie withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Allergie withoutTrashed()
 * @mixin \Eloquent
 */
class Allergie extends Model
{
    use HasFactory, HasUuids, SoftDeletes;
    

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'allergies';


    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'description', 'date', 'slug'
    ];

    public function dossier_allergie(){
        return $this->hasMany(DossierAllergie::class);
    }

}

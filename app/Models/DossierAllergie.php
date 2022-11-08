<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;



/**
 * App\Models\DossierAllergie
 *
 * @property string $id
 * @property int $dossier_medical_id
 * @property int $allergie_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\Models\Allergie|null $allergie
 * @method static \Illuminate\Database\Eloquent\Builder|DossierAllergie newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DossierAllergie newQuery()
 * @method static \Illuminate\Database\Query\Builder|DossierAllergie onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|DossierAllergie query()
 * @method static \Illuminate\Database\Eloquent\Builder|DossierAllergie whereAllergieId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DossierAllergie whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DossierAllergie whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DossierAllergie whereDossierMedicalId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DossierAllergie whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DossierAllergie whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|DossierAllergie withTrashed()
 * @method static \Illuminate\Database\Query\Builder|DossierAllergie withoutTrashed()
 * @mixin \Eloquent
 */
class DossierAllergie extends Model
{
    use HasFactory,  SoftDeletes;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'dossier_allergie';


    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'uuid', 'dossier_medical_id', 'allergie_id'
    ];

    public function allergie(){
        return $this->belongsTo(Allergie::class);
    }

}

<?php

namespace App\Models;

use App\Traits\Scopes;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


/**
 * App\Models\Etablissement
 *
 * @property string $id
 * @property string $name
 * @property string|null $description
 * @property string|null $adresse
 * @property string|null $logo
 * @property string $slug
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\EtablissementExamenComplementaire[] $etablissement_examen_complementaires
 * @property-read int|null $etablissement_examen_complementaires_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Teleconsultation[] $teleconsultations
 * @property-read int|null $teleconsultations_count
 * @method static \Illuminate\Database\Eloquent\Builder|Etablissement like($field, $value)
 * @method static \Illuminate\Database\Eloquent\Builder|Etablissement newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Etablissement newQuery()
 * @method static \Illuminate\Database\Query\Builder|Etablissement onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Etablissement query()
 * @method static \Illuminate\Database\Eloquent\Builder|Etablissement whereAdresse($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Etablissement whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Etablissement whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Etablissement whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Etablissement whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Etablissement whereLogo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Etablissement whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Etablissement whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Etablissement whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|Etablissement withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Etablissement withoutTrashed()
 * @mixin \Eloquent
 */
class Etablissement extends Model
{
    use HasFactory, HasUuids, SoftDeletes, Scopes;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'etablissements';


    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name', 'description', 'adresse', 'logo', 'slug'
    ];

    public function etablissement_examen_complementaires(){
        return $this->hasMany(EtablissementExamenComplementaire::class);
    }

    public function teleconsultations(){
        return $this->morphToMany(Teleconsultation::class, 'teleconsables');
    }

}

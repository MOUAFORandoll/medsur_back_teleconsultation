<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;



/**
 * App\Models\EtablissementExamenComplementaire
 *
 * @property string $id
 * @property string $etablissement_id
 * @property string $examen_complementaire_id
 * @property float $prix
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\Models\Etablissement|null $etablissement
 * @property-read \App\Models\ExamenComplementaire|null $examen_complementaire
 * @method static \Illuminate\Database\Eloquent\Builder|EtablissementExamenComplementaire newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|EtablissementExamenComplementaire newQuery()
 * @method static \Illuminate\Database\Query\Builder|EtablissementExamenComplementaire onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|EtablissementExamenComplementaire query()
 * @method static \Illuminate\Database\Eloquent\Builder|EtablissementExamenComplementaire whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EtablissementExamenComplementaire whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EtablissementExamenComplementaire whereEtablissementId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EtablissementExamenComplementaire whereExamenComplementaireId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EtablissementExamenComplementaire whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EtablissementExamenComplementaire wherePrix($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EtablissementExamenComplementaire whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|EtablissementExamenComplementaire withTrashed()
 * @method static \Illuminate\Database\Query\Builder|EtablissementExamenComplementaire withoutTrashed()
 * @mixin \Eloquent
 */
class EtablissementExamenComplementaire extends Model
{
    use HasFactory,  SoftDeletes;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'etablissement_examen_complementaire';


    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'uuid', 'etablissement_id', 'examen_complementaire_id', 'prix'
    ];

    protected $appends = ['type'];

    public function getTypeAttribute()
    {   
        $type = $this->makeHidden('types');
        $type = $this->types->first()->makeHidden('pivot');
        return ['id' => $type->id, 'libelle' => $type->libelle];
    } 

    public function etablissement(){
        return $this->belongsTo(Etablissement::class, 'etablissement_id');
    }

    public function examen_complementaire(){
        return $this->belongsTo(ExamenComplementaire::class, 'examen_complementaire_id');
    }


}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


/**
 * App\Models\Statut
 *
 * @property string $id
 * @property string $valeur
 * @property string|null $description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\RendezVous[] $rendez_vous
 * @property-read int|null $rendez_vous_count
 * @method static \Illuminate\Database\Eloquent\Builder|Statut newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Statut newQuery()
 * @method static \Illuminate\Database\Query\Builder|Statut onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Statut query()
 * @method static \Illuminate\Database\Eloquent\Builder|Statut whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Statut whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Statut whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Statut whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Statut whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Statut whereValeur($value)
 * @method static \Illuminate\Database\Query\Builder|Statut withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Statut withoutTrashed()
 * @mixin \Eloquent
 */
class Statut extends Model
{
    use HasFactory,  SoftDeletes;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'statuts';


    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'uuid', 'valeur', 'description'
    ];

    public function rendez_vous(){
        return $this->hasMany(RendezVous::class);
    }

}

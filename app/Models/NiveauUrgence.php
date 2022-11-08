<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


/**
 * App\Models\NiveauUrgence
 *
 * @property string $id
 * @property int $valeur
 * @property string|null $description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|NiveauUrgence newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|NiveauUrgence newQuery()
 * @method static \Illuminate\Database\Query\Builder|NiveauUrgence onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|NiveauUrgence query()
 * @method static \Illuminate\Database\Eloquent\Builder|NiveauUrgence whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NiveauUrgence whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NiveauUrgence whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NiveauUrgence whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NiveauUrgence whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NiveauUrgence whereValeur($value)
 * @method static \Illuminate\Database\Query\Builder|NiveauUrgence withTrashed()
 * @method static \Illuminate\Database\Query\Builder|NiveauUrgence withoutTrashed()
 * @mixin \Eloquent
 */
class NiveauUrgence extends Model
{
    use HasFactory,  SoftDeletes;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'niveau_urgences';


    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'uuid', 'valeur', 'description'
    ];
}

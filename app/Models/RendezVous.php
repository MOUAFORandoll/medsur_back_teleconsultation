<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


/**
 * App\Models\RendezVous
 *
 * @method static \Illuminate\Database\Eloquent\Builder|RendezVous newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RendezVous newQuery()
 * @method static \Illuminate\Database\Query\Builder|RendezVous onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|RendezVous query()
 * @method static \Illuminate\Database\Query\Builder|RendezVous withTrashed()
 * @method static \Illuminate\Database\Query\Builder|RendezVous withoutTrashed()
 * @mixin \Eloquent
 */
class RendezVous extends Model
{
    use HasFactory, HasUuids, SoftDeletes;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'rendez_vous';


    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'creator', 'consultation_id', 'etablissement_id', 'ligne_temps_id', 'parent_id', 'sourceable_type', 'sourceable_id', 'patient_id', 'praticien_id', 'initiateur', 'nom_medecin', 'motifs', 'date', 'statut', 'slug'
    ];

}

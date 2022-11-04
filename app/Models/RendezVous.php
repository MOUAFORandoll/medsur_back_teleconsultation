<?php

namespace App\Models;

use App\Traits\Scopes;
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
 * @property string $id
 * @property string|null $creator
 * @property string|null $consultation_id
 * @property string|null $etablissement_id
 * @property string|null $ligne_temps_id
 * @property string|null $parent_id
 * @property string $patient_id
 * @property string|null $praticien_id
 * @property string|null $sourceable_id
 * @property string $statut_id
 * @property string|null $sourceable_type
 * @property string|null $initiateur
 * @property string|null $nom_medecin
 * @property string|null $motifs
 * @property string|null $date
 * @property string $slug
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\Models\Statut|null $statut
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Teleconsultation[] $teleconsultations
 * @property-read int|null $teleconsultations_count
 * @method static \Illuminate\Database\Eloquent\Builder|RendezVous like($field, $value)
 * @method static \Illuminate\Database\Eloquent\Builder|RendezVous whereConsultationId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RendezVous whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RendezVous whereCreator($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RendezVous whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RendezVous whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RendezVous whereEtablissementId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RendezVous whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RendezVous whereInitiateur($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RendezVous whereLigneTempsId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RendezVous whereMotifs($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RendezVous whereNomMedecin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RendezVous whereParentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RendezVous wherePatientId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RendezVous wherePraticienId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RendezVous whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RendezVous whereSourceableId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RendezVous whereSourceableType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RendezVous whereStatutId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RendezVous whereUpdatedAt($value)
 */
class RendezVous extends Model
{
    use HasFactory, HasUuids, SoftDeletes, Scopes;

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
        'creator', 'consultation_id', 'etablissement_id', 'ligne_temps_id', 'parent_id', 'statut_id', 'sourceable_type', 'sourceable_id', 'patient_id', 'praticien_id', 'initiateur', 'nom_medecin', 'motifs', 'date', 'slug'
    ];

    public function teleconsultations(){
        return $this->morphToMany(Teleconsultation::class, 'teleconsables');
    }

    public function statut(){
        return $this->belongsTo(Statut::class);
    }

}

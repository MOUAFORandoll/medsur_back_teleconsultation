<?php

namespace App\Models;

use App\Traits\Scopes;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;



class Prescription extends Model
{
    use HasFactory,  SoftDeletes, Scopes;


    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'prescriptions';


    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = ['uuid', 'date_heure', 'creator', 'medecin_id', 'patient_id', 'motif'];

    public function teleconsultations(){
        return $this->morphToMany(Teleconsultation::class, 'teleconsultationable');
    }

}

<?php

namespace App\Models;

use App\Traits\Scopes;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;



class Ordonnance extends Model
{
    use HasFactory,  SoftDeletes, Scopes;


    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ordonnances';


    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'uuid', 'date', 'description'
    ];

    public function teleconsultations(){
        return $this->morphToMany(Teleconsultation::class, 'teleconsultationable');
    }

    public function bon_prises_en_charges(){
        return $this->morphToMany(BonPriseEnCharge::class, 'bon_prises_en_chargeable');
    }

}

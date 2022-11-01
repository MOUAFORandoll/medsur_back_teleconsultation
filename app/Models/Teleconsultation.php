<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;



class Teleconsultation extends Model
{
    use HasFactory, HasUuids, SoftDeletes;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'teleconsultations';


    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'patient_id', 'creator', 'date_heure'
    ];

    public function type_teleconsultation(){
        return $this->belongsTo(TypeTeleconsultation::class);
    }

    /**
     * type teleconsultations
     */
    public function types(){
        return $this->morphToMany(Type::class, 'typeable');
    }

}

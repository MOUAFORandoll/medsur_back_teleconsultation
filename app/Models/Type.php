<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;



class Type extends Model
{
    use HasFactory, HasUuids, SoftDeletes;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'types';


    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'libelle'
    ];

    public function teleconsultations(){
        return $this->morphedByMany(Teleconsultation::class, 'typeable');
    }

    public function anamneses(){
        return $this->morphedByMany(Anamnese::class, 'typeable');
    }

    public function antecedents(){
        return $this->morphedByMany(Antecedent::class, 'typeable');
    }

}

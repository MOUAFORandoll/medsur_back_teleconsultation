<?php

namespace App\Models;

use App\Traits\Scopes;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;



class InformationSupplementaire extends Model
{
    use HasFactory,  SoftDeletes, Scopes;


    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'information_supplementaires';


    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = ['uuid', 'nom'];

    public function prescription_imageries(){
        return $this->morphedByMany(PrescriptionImagerie::class, 'teleconsultationable');
    }

}

<?php

namespace App\Models;

use App\Traits\Scopes;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;



class FormeMedicamenteuse extends Model
{
    use HasFactory,  SoftDeletes, Scopes;


    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'forme_medicamenteuses';


    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = ['uuid', 'categorie_medicamenteuse_id', 'libelle'];

    public function medicaments(){
        return $this->morphedByMany(Medicament::class, 'medicamentable');
    }

    public function categorie_medicamenteuse(){
        return $this->belongsTo(CategorieMedicamenteuse::class);
    }
}

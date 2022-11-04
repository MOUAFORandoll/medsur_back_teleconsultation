<?php

namespace App\Traits;


trait Scopes
{
    public  function scopeLike($query, $field, $value){
        return $query->where($field, 'LIKE', "%$value%");
    }
}
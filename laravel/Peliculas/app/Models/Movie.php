<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//use MODELO

class Movie extends Model
{
    use HasFactory;

    /*
    public function modelo {
        $this->belongsTo(Modelo::class);
    }

    */
    public function director()
    {
        return $this->belongsTo('\App');//aquí
    }

}

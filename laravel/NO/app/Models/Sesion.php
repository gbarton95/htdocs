<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sesion extends Model
{
    use HasFactory;
    
    public function evento()
    {
        return $this->belongsTo(Evento::class, 'evento_id');
    }

    public function perro()
    {
        return $this->belongsTo(Perro::class, 'perro_id');
    }
}

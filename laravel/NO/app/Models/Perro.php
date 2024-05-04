<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perro extends Model
{
    use HasFactory;

    public function propietario()
    {
        return $this->belongsTo(Propietario::class, 'propietario_id');
    }

    public function sesiones()
    {
        return $this->hasMany(Sesion::class, 'sesion_id');
    }
}

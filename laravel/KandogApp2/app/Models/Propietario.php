<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Propietario extends Model
{
    use HasFactory;

    public function perros()
    {
        return $this->hasMany(Perro::class, 'propietario_id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{
    use HasFactory;

    protected $primaryKey = ['adiestrador_id', 'num_grupo', 'perro_id'];

    public function adiestrador()
    {
        return $this->belongsTo(Adiestrador::class, 'adiestrador_id');
    }

    public function perros()
    {
        return $this->hasMany(Perro::class, 'perro_id');
    }

}

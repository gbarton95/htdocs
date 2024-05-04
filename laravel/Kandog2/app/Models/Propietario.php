<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Perro;
use App\Models\Adiestrador;

class Propietario extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
        'created_at',
        'updated_at'
    ];

    protected $fillable = [
        'adiestrador_id',
        'nombre',
        'apellidos',
        'telefono',
        'email',
        'codigo_postal'
    ];

    public function perros()
    {
        return $this->hasMany(Perro::class, 'propietario_id');
    }

    public function adiestrador()
    {
        return $this->belongsTo(Adiestrador::class);
    }
}

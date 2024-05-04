<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Propietario;

class Perro extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
        'created_at',
        'updated_at'
    ];

    protected $fillable = [
        'propietario_id',
        'nombre',
        'edad',
        'sexo',
        'raza',
        'peso',
        'PPP',
        'anotaciones'
    ];

    public function propietario()
    {
        return $this->belongsTo(Propietario::class);
    }

}

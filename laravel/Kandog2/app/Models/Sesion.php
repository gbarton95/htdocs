<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Propietario;
use App\Models\Evento;

class Sesion extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
        'created_at',
        'updated_at'
    ];

    protected $fillable = [
        'evento_id',
        'propietario_id',
        'asunto',
        'duración',
    ];
    
    public function evento()
    {
        return $this->belongsTo(Evento::class);
    }

    public function propietario()
    {
        return $this->belongsTo(Propietario::class);
    }


}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Adiestrador;

class Evento extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
        'created_at',
        'updated_at'
    ];
    
    protected $fillable = [
        'adiestrador_id',
        'fecha',
        'hora',
        'ubicacion',
        'estado',
    ];

    public function adiestrador()
    {
        return $this->belongsTo(Adiestrador::class, 'adiestrador_id');
    }



}

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
        'titulo',
        'tipo',
        'start_date',
        'end_date',
        'ubicacion',
        'estado'
    ];

    public function adiestrador()
    {
        return $this->belongsTo(Adiestrador::class, 'adiestrador_id');
    }



}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Evento;

class Otro extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
        'created_at',
        'updated_at'
    ];

    protected $fillable = [
        'evento_id',
        'tema',
        'plazas',
        'material'
    ];

    public function evento()
    {
        return $this->belongsTo(Evento::class);
    }

}

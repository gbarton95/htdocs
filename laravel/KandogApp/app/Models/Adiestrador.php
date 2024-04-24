<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adiestrador extends Model
{
    use HasFactory;

    public function eventos()
    {
        return $this->hasMany(Evento::class, 'adiestrador_id');
    }

}
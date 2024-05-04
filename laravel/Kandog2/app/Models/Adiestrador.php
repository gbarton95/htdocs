<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Evento;
use App\Models\Propietario;
use App\Models\User;

class Adiestrador extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
        'created_at',
        'updated_at'
    ];

    protected $fillable = [
        'user_id',
        'telefono',
        'especialidad',
        'certificado',
    ];

    public function eventos()
    {
        return $this->hasMany(Evento::class, 'adiestrador_id');
    }

    public function propietarios()
    {
        return $this->hasMany(Propietario::class, 'propietario_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    

}

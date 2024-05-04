<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tournament extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'nom',
    ];

    protected $guarded = [
        'id',
        'created_at',
        'updated_at'
    ];
    protected $primaryKey = 'id';

    public function getRouteKeyName()
    {
        return 'id';
    }

    public function characters()
    {
        return $this->belongsToMany(Character::class, 'scores', 'tournament_id', 'character_id');
    }
}

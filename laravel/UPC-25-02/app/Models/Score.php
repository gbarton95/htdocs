<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Character;
use App\Models\Tournament;


class Score extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'character_id',
        'tournament_id',
        'score',
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

    public function character()
    {
        return $this->belongsTo(Character::class);
    }

    public function tournament()
    {
        return $this->belongsTo(Tournament::class);
    }
}

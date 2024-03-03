<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//use MODELO

class Movie extends Model
{
    use HasFactory;

    /*
    public function modelo {
        $this->hasOne/hasMany/belongsTo(Modelo::class);
    }
    */

    public function director(){
        return $this->hasOne(Director::class);
       /* también podría ser? en vez de la ruta pongo el modelo. Si no como en las siguientes: */
    }

    public function leadActor(){
        return $this->hasOne('App\Models\LeadActor',"movie_id","id");
    }

    public function writers(){
        return $this->hasMany('App\Models\Writer',"movie_id","id");
    }

    public function genre(){
        return $this->belongsTo('App\Models\Genre');
    }

}

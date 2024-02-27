<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    //Laravel te proporciona automáticamente los métodos all, find, ...

    public function contacts(){
        return $this->hasMany('App\Models\Contact', 'employee_id', 'id'); //Hay que pasar como parámetro el modelo referenciado; si la nomenclatura es típica no tengo por qué poner nada más
        //POR SI ACASO la nomenclatura NO es típica, le paso el nombre donde aparece como clave foránea en la tabla de los contactos (employee_id) y el nombre que le identifica en su propia tabla (id)
    }
}

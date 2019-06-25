<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pregunta extends Model
{
    protected $table = "pregunta";

    protected $fillable = ["id_criterio","descripcion","puntos"];

    public function calificacion(){
    	return $this->hasMany("App\calificacion");
    }
    public function criterios(){
        return $this->belongsTo("App\Criterio");
    }
}

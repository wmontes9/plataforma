<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Criterio extends Model
{
    protected $table = "criterio";

    protected $fillable = ["id_evaluacion","nombre","descripcion"];

    public function preguntas(){
    	return $this->hasMany("App\Pregunta");
    }
    public function evaluaciones(){
        return $this->belongsTo("App\Evaluacion");
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evaluacion extends Model
{
    protected $table = "evaluacion";

    protected $fillable = ["encabezado"];

    public function criterio(){
    	return $this->hasMany("App\Criterio");
    }

    public function tipo_evaluacion(){
    	return $this->hasMany("App\Tipo_Evaluacion");
    }
}

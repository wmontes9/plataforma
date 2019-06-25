<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Calificacion extends Model
{
    protected $table = "calificacion";

    protected $fillable = ["id_solucion","id_pregunta","id_usuario","id_reto","fecha_calificacion","puntaje","observaciones"];

    public function users(){
    	return $this->belongsTo("App\User");
    }
    public function preguntas(){
    	return $this->belongsTo("App\Pregunta");
    }
    public function soluciones(){
    	return $this->belongsTo("App\Solucion");
    }
    public function retos(){
    	return $this->belongsTo("App\Reto");
    }
}
